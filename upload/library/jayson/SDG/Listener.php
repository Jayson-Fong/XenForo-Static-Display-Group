<?php
class jayson_SDG_Listener {
	public static function Listen($class, array &$extend) {
		$extend[] = 'jayson_SDG_Extend_'.$class;
	}
}
