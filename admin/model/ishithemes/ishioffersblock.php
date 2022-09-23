<?php
class ModelIshiThemesIshiOffersBlock extends Model {
	public function createOffers() {
		$create_offer = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "offer` (`offer_id` int(11) NOT NULL auto_increment, `date_added` datetime NOT NULL default '0000-00-00 00:00:00', `date_modified` datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY (`offer_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
		$this->db->query($create_offer);

		$create_offer_description = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "offer_description` (`offer_id` int(11) NOT NULL default '0', `language_id` int(11) NOT NULL default '0', `title` varchar(64) NOT NULL default '', PRIMARY KEY (`offer_id`,`language_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
		$this->db->query($create_offer_description);

	}

	public function dropOffers() {
		$drop_offer = "DROP TABLE IF EXISTS `" . DB_PREFIX . "offer`;";
		$this->db->query($drop_offer);

		$drop_offer_description = "DROP TABLE IF EXISTS `" . DB_PREFIX . "offer_description`;";
		$this->db->query($drop_offer_description);
	}

	public function addModule($code, $data) {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "module` SET `name` = '" . $this->db->escape($data['name']) . "', `code` = '" . $this->db->escape($code) . "', `setting` = '" . $this->db->escape(json_encode($data)) . "'");

		$module_id = $this->db->getLastId();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "module WHERE module_id = '" . (int)$module_id . "'");

		$settings = json_decode($query->row['setting'], true);

		$settings['module_id'] = $module_id;

		$this->db->query("UPDATE " . DB_PREFIX . "module SET setting = '" . $this->db->escape(json_encode($settings)) . "' WHERE module_id = '" . (int)$module_id . "'");

		return $module_id;
	}

	public function addOffer($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "offer SET date_added = now(), date_modified = now()");

		$offer_id = $this->db->getLastId();

		foreach ($data['offer_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "offer_description SET offer_id = '" . (int)$offer_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['title']) . "'");
		}
	}

	public function editOffer($offer_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "offer SET date_modified = now() WHERE offer_id = '" . (int)$offer_id . "'");

		$this->db->query("DELETE FROM " . DB_PREFIX . "offer_description WHERE offer_id = '" . (int)$offer_id . "'");

		foreach ($data['offer_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "offer_description SET offer_id = '" . (int)$offer_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['title']) . "'");
		}
	}

	public function deleteOffer($offer_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "offer WHERE offer_id = '" . (int)$offer_id . "'");

		$this->db->query("DELETE FROM " . DB_PREFIX . "offer_description WHERE offer_id = '" . (int)$offer_id . "'");
	}	

	public function getOffer($offer_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "offer WHERE offer_id = '" . (int)$offer_id . "'");

		return $query->row;
	}

	public function getOfferTitle($offer_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "offer_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "' AND offer_id = '" . (int)$offer_id . "'");

		if ($query->row) {
			return $query->row['title'];
		} else {
			return false;
		}
	}

	public function getOfferDescriptions($offer_id) {
		$offer_description_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "offer_description WHERE offer_id = '" . (int)$offer_id . "'");

		foreach ($query->rows as $result) {
			$offer_description_data[$result['language_id']] = array(
				'title'       => $result['title'],
			);
		}

		return $offer_description_data;
	}

	public function getOffersByModule($module_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "offer b LEFT JOIN " . DB_PREFIX . "offer_description bd ON (b.offer_id = bd.offer_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b.module_id = '" . (int)$module_id . "' ORDER BY b.date_added");

		return $query->rows;
	}

	public function getOffers($data = array()) {

		if ($data) {
			$sql = "SELECT * FROM " . DB_PREFIX . "offer b LEFT JOIN " . DB_PREFIX . "offer_description bd ON (b.offer_id = bd.offer_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

			$sort_data = array(
				'bd.title',
				'b.date_added'
			);

			if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
				$sql .= " ORDER BY " . $data['sort'];
			} else {
				$sql .= " ORDER BY b.date_added";
			}

			if (isset($data['order']) && ($data['order'] == 'DESC')) {
				$sql .= " DESC";
			} else {
				$sql .= " ASC";
			}

			if (isset($data['start']) || isset($data['limit'])) {
				if ($data['start'] < 0) {
					$data['start'] = 0;
				}

				if ($data['limit'] < 1) {
					$data['limit'] = 20;
				}

				$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
			}
			$query = $this->db->query($sql);

			return $query->rows;
		} else {

			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "offer b LEFT JOIN " . DB_PREFIX . "offer_description bd ON (b.offer_id = bd.offer_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY b.date_added ASC");

			return $query->rows;
		}
	}

	public function getTotalOffers() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "offer");

		return $query->row['total'];
	}

	public function getModule($module_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "module` WHERE `module_id` = '" . (int)$module_id . "'");

		return $query->row;
	}
}