<?php

	class App {

		 protected $_controller = 'home';
		 protected $_method = 'index';
		 protected $_params = array();

		public function __construct() {
			$url = $this->parseUrl();

			if (isset($url[0])) {
				// To make sure if the controller exists
				if (file_exists('../app/controllers/' . $url[0] . '.php')) {
					$this->_controller = $url[0];
					unset($url[0]);
				}
			}

			require_once '../app/controllers/' . $this->_controller . '.php';
			$this->_controller = new $this->_controller();

			if (isset($url[1])) {
				// To make sure if the method exists
				if (method_exists($this->_controller, $url[1])) {
					$this->_method = $url[1];
					unset($url[1]);
				}
			}

			$this->_params = $url ? array_values($url) : [];

			call_user_func_array(array($this->_controller, $this->_method), $this->_params);
		}

		protected function parseUrl() {
			// It will pass the controller class name, method name and the parameters
			if (isset($_GET['url'])) {
				$sanatized_url = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
				return explode('/', $sanatized_url);
			}
		}
	}

?>