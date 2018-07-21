<?php
class jayson_SDG_Model_StyleGroup extends XenForo_Model {
	public function getStyleGroup($userId) {
		return ($this->_getDb()->fetchRow('SELECT jayson_displaygroup_id FROM xf_user WHERE user_id = ?', $userId))['jayson_displaygroup_id'];
	}
	public function setStyleGroup($displayGroup, $userId) {
		$this->_getDb()->query('UPDATE xf_user SET jayson_displaygroup_id = ? WHERE user_id = ?', array($displayGroup, $userId));
	}
}
