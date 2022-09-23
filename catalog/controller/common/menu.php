<?php
class ControllerCommonMenu extends Controller {
	public function index() {
		$this->load->language('common/menu');

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['categories'] = array();
		$data['home'] = $this->url->link('common/home');

		if(!isset($this->request->get['route']) || ($this->request->get['route'] == 'common/home')) {
			$data['ishome'] = 'home';
		} else {
			$data['ishome'] = 'open';
		}

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 2
				$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {
					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
					);

					/* 2 Level Sub Categories START */
					$childs_data = array();
					$child_2 = $this->model_catalog_category->getCategories($child['category_id']);

					foreach ($child_2 as $childs) {
						$filter_data = array(
							'filter_category_id'  => $childs['category_id'],
							'filter_sub_category' => true
						);

						$childs_data[] = array(
							'name'  => $childs['name'],
							'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'] . '_' . $childs['category_id'])
						);
					}
					/* 2 Level Sub Categories END */


					$children_data[] = array(
						'name'  => $child['name'],
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id']),
						'column'   => $child['column'] ? $child['column'] : 1,
						'childs' => $childs_data,
					);
				}

				// Level 1
				$data['categories'][] = array(
					'name'     => $category['name'],
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			}
		}

		return $this->load->view('common/menu', $data);
	}
}
