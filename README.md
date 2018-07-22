# XenForo-Static-Display-Group
Make your member's display group remain static.

This add-on will create a new column in the xf_user table to store selected display group style IDs and is intended to be used with other add-ons. For a full didplay group style selector add-on, please see [XenForo-Display-Selector](https://github.com/Jayson-Fong/XenForo-Display-Selector). To implement this with other software, view the items below.

For Controllers and Models:
```
$styleGroupModel = $this->getModelFromCache('jayson_SDG_Model_StyleGroup');
$styleGroupModel->setStyleGroup($group_id, $visitor['user_id']);
```

For Non-Controllers/Models:
```
$styleGroupModel = XenForo_Model::create('jayson_SDG_Model_StyleGroup');
$styleGroupModel->setStyleGroup($group_id, $visitor['user_id']);
```

Be sure to replace the `$group_id` variable to the group ID of whichever group you'd like the visitor (`$visitor['user_id']`) to have.
