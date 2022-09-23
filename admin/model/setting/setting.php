<?php
class ModelSettingSetting extends Model {
	public function getSetting($code, $store_id = 0) {
		$setting_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$store_id . "' AND `code` = '" . $this->db->escape($code) . "'");

		foreach ($query->rows as $result) {
			if (!$result['serialized']) {
				$setting_data[$result['key']] = $result['value'];
			} else {
				$setting_data[$result['key']] = json_decode($result['value'], true);
			}
		}

		return $setting_data;
	}

	public function editSetting($code, $data, $store_id = 0) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE store_id = '" . (int)$store_id . "' AND `code` = '" . $this->db->escape($code) . "'");

		foreach ($data as $key => $value) {
			if (substr($key, 0, strlen($code)) == $code) {
				if (!is_array($value)) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = '" . (int)$store_id . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape($value) . "'");
				} else {
					$this->db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = '" . (int)$store_id . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape(json_encode($value, true)) . "', serialized = '1'");
				}
			}
		}
	}

	public function deleteSetting($code, $store_id = 0) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$store_id . "' AND `code` = '" . $this->db->escape($code) . "'");
	}
	
	public function getSettingValue($key, $store_id = 0) {
		$query = $this->db->query("SELECT value FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$store_id . "' AND `key` = '" . $this->db->escape($key) . "'");

		if ($query->num_rows) {
			return $query->row['value'];
		} else {
			return null;	
		}
	}
	
	public function editSettingValue($code = '', $key = '', $value = '', $store_id = 0) {
		if (!is_array($value)) {
			$this->db->query("UPDATE " . DB_PREFIX . "setting SET `value` = '" . $this->db->escape($value) . "', serialized = '0'  WHERE `code` = '" . $this->db->escape($code) . "' AND `key` = '" . $this->db->escape($key) . "' AND store_id = '" . (int)$store_id . "'");
		} else {
			$this->db->query("UPDATE " . DB_PREFIX . "setting SET `value` = '" . $this->db->escape(json_encode($value)) . "', serialized = '1' WHERE `code` = '" . $this->db->escape($code) . "' AND `key` = '" . $this->db->escape($key) . "' AND store_id = '" . (int)$store_id . "'");
		}
	}
	
	public function createThemeOptionTable() {
		if ($this->db->query("SHOW TABLES LIKE '". DB_PREFIX ."ishi_sliderimage'")->num_rows == 0) {
			$sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "ishi_sliderimage` (
			  `ishi_sliderimage_id` int(11) NOT NULL,
			  `module_id` int(11) NOT NULL,
			  `language_id` int(11) NOT NULL,
			  `title` varchar(64) NOT NULL,
			  `link` varchar(255) NOT NULL,
			  `image` varchar(255) NOT NULL,
			  `sort_order` int(3) NOT NULL DEFAULT '0',
			  PRIMARY KEY (`ishi_sliderimage_id`)
			) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";

			$this->db->query($sql);
		}


		if ($this->db->query("SHOW TABLES LIKE '". DB_PREFIX ."themeoption'")->num_rows == 0) {
			
            $sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "themeoption` (
                     `id` int(11) NOT NULL AUTO_INCREMENT,
					 `primarycolor` varchar(20) DEFAULT NULL,
					 `secondary_color` varchar(20) DEFAULT NULL,
					 `tertiary_color` varchar(20) DEFAULT NULL,
					 `icon_color` varchar(20) DEFAULT NULL,
					 `icon_responsivecolor` varchar(20) DEFAULT NULL,
					 `theme_bg_image` varchar(500) DEFAULT NULL,
					 `breadcrumb_color` varchar(20) DEFAULT NULL,
					 `breadcrumb_image` varchar(500) DEFAULT NULL,
					 `loader` varchar(20) DEFAULT NULL,
					 `btn_color` varchar(20) DEFAULT NULL,
					 `btn_txtcolor` varchar(20) DEFAULT NULL,
					 `btn_hover_color` varchar(20) DEFAULT NULL,
					 `btn_hover_txtcolor` varchar(20) DEFAULT NULL,
					 `custom_btn_color` varchar(20) DEFAULT NULL,
					 `custom_btn_txtcolor` varchar(20) DEFAULT NULL,
					 `custom_btn_hover_color` varchar(20) DEFAULT NULL,
					 `custom_btn_hover_txtcolor` varchar(20) DEFAULT NULL,
					 `header_top_bgcolor` varchar(20) DEFAULT NULL,
					 `header_top_textcolor` varchar(20) DEFAULT NULL,
					 `header_textcolor` varchar(20) DEFAULT NULL,
					 `header_text_hovercolor` varchar(20) DEFAULT NULL,
					 `product_iconcolor` varchar(20) DEFAULT NULL,
					 `product_icon_hovercolor` varchar(20) DEFAULT NULL,
					 `footer_bgcolor` varchar(20) DEFAULT NULL,
					 `footer_bgimage` varchar(300) DEFAULT NULL,
					 `footer_titlecolor` varchar(20) DEFAULT NULL,
					 `footer_textcolor` varchar(20) DEFAULT NULL,
					 `footer_text_hovercolor` varchar(20) DEFAULT NULL,
					 `subcategory_type` varchar(20) DEFAULT NULL,
					 `category_counter` tinyint(1) NOT NULL DEFAULT '1',
					 `product_counter` tinyint(1) NOT NULL DEFAULT '1',
					 `dev_mode` tinyint(1) NOT NULL DEFAULT '0',
 					PRIMARY KEY (`id`)
					) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
					
           $this->db->query($sql);
		   
		   $themeoptions = $this->db->query("INSERT INTO ". DB_PREFIX ."themeoption (primarycolor, secondary_color,tertiary_color,icon_color, icon_responsivecolor,theme_bg_image,breadcrumb_color,breadcrumb_image,loader,btn_color,btn_txtcolor,btn_hover_color,btn_hover_txtcolor,custom_btn_color,custom_btn_txtcolor,custom_btn_hover_color,custom_btn_hover_txtcolor,header_textcolor,header_text_hovercolor,product_iconcolor,product_icon_hovercolor,footer_bgcolor,footer_bgimage,footer_titlecolor,footer_textcolor,footer_text_hovercolor,subcategory_type,dev_mode,header_top_bgcolor,header_top_textcolor,category_counter,product_counter) VALUES ('#000000','#e20048','#f2ac3d','#DCD3CE','#999999','','#ffffff','','loader_1','#000000','#ffffff','#e20048','#ffffff',
		   	'#e20048','#ffffff','#000000','#ffffff','#000000','#e20048','#000000','#e20048','#333333','','#000000','#666666','#e20048','grid',0,'#f4f4f7','#000000',1,1)");
       }
	}
	
	public function editThemeOption($data) {	
			$this->db->query("UPDATE " . DB_PREFIX . "themeoption SET `primarycolor` = '" . $this->db->escape($data['primarycolor'])."',`secondary_color` = '" . $this->db->escape($data['secondary_color']) . "',`tertiary_color` = '" . $this->db->escape($data['tertiary_color']) . "',`icon_color` = '" . $this->db->escape($data['icon_color']) . "',`icon_responsivecolor` = '" . $this->db->escape($data['icon_responsivecolor']) . "',`theme_bg_image` = '" . $this->db->escape($data['theme_bg_image']) . "',`breadcrumb_color` = '" . $this->db->escape($data['breadcrumb_color']) . "',`breadcrumb_image` = '" . $this->db->escape($data['breadcrumb_image']) . "',`loader` = '" . $this->db->escape($data['loader']) . "',`btn_color` = '" . $this->db->escape($data['btn_color']) . "',`btn_txtcolor` = '" . $this->db->escape($data['btn_txtcolor']) . "',`btn_hover_color` = '" . $this->db->escape($data['btn_hover_color']) . "',`btn_hover_txtcolor` = '" . $this->db->escape($data['btn_hover_txtcolor']) . "',`custom_btn_color` = '" . $this->db->escape($data['custom_btn_color']) . "',`custom_btn_txtcolor` = '" . $this->db->escape($data['custom_btn_txtcolor']) . "',`custom_btn_hover_color` = '" . $this->db->escape($data['custom_btn_hover_color']) . "',`custom_btn_hover_txtcolor` = '" . $this->db->escape($data['custom_btn_hover_txtcolor']) . "',`header_textcolor` = '" . $this->db->escape($data['header_textcolor'])."',`header_text_hovercolor` = '" . $this->db->escape($data['header_text_hovercolor'])."',`product_iconcolor` = '" . $this->db->escape($data['product_iconcolor']) . "',`product_icon_hovercolor` = '" . $this->db->escape($data['product_icon_hovercolor']) . "',`footer_bgcolor` = '" . $this->db->escape($data['footer_bgcolor']) . "',`footer_bgimage` = '" . $this->db->escape($data['footer_bgimage']) . "',`footer_titlecolor` = '" . $this->db->escape($data['footer_titlecolor'])."',`footer_textcolor` = '" . $this->db->escape($data['footer_textcolor'])."',`footer_text_hovercolor` = '" . $this->db->escape($data['footer_text_hovercolor'])."',`subcategory_type` = '" . $this->db->escape($data['subcategory_type'])."',`dev_mode` = 1,`header_top_bgcolor` = '" . $this->db->escape($data['header_top_bgcolor'])."',`header_top_textcolor` = '" . $this->db->escape($data['header_top_textcolor']) ."',`category_counter` = '" . (isset($data['category_counter']) ? (int)$data['category_counter'] : 0) . "',`product_counter` = '" . (isset($data['product_counter']) ? (int)$data['product_counter'] : 0) . "' WHERE `id` = 1");
	}
	
	public function getThemeOption() {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "themeoption WHERE id = 1");

		return $query->row;
	}
}
