<?php
class jayson_SDG_Extend_XenForo_DataWriter_User extends XFCP_jayson_SDG_Extend_XenForo_DataWriter_User {
        public function rebuildDisplayStyleGroupId() {
                $parent = parent::rebuildDisplayStyleGroupId();
                $styleGroupId = $this->_getStyleGroupModel()->getStyleGroup($this->get('user_id'));
                $groups = explode(',', $this->get('secondary_group_ids'));
                $groups[] = $this->get('user_group_id');
                if (empty($styleGroupId) || !in_array($styleGroupId, $groups)) {
                        return $parent;
                }
                $this->_db->update('xf_user',
                        array('display_style_group_id' => $styleGroupId),
                        'user_id = ' . $this->_db->quote($this->get('user_id'))
                );
                return $parent;
        }
        protected function _getStyleGroupModel() {
                return $this->getModelFromCache('jayson_SDG_Model_StyleGroup');
        }
}
