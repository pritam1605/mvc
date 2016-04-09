<?php

	class Home extends Controller {

		public function index($param) {

			$user = $this->_model('user');
			$user->a = $param;

			$this->_view('home/main', ['title' => 'User', 'name' => $user->a]);

		}
	}
?>