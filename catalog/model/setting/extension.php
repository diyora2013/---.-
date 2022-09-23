<?php
class ModelSettingExtension extends Model {
	public function getExtensions($type) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "extension WHERE `type` = '" . $this->db->escape($type) . "'");

		return $query->rows;
	}
	
	public function getThemeOption() {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "themeoption WHERE id = 1");
		
		return $query->row;
	}
	public function changeDevMode() {
		$this->db->query("UPDATE " . DB_PREFIX . "themeoption SET `dev_mode` = 0 WHERE `id` = 1");
	}
}