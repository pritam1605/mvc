<?php

	class App {

		 protected $_controller = 'home';
		 protected $_method = 'index';
		 protected $_params = array();

		public function __construct() {
			var_dump($this->parseUrl());
		}

		protected function parseUrl() {
			if (isset($_GET['url'])) {
				$sanatized_url = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
				return explode('/', $sanatized_url);
			}
		}
	}

?>