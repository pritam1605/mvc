<?php

	class Home extends Controller {

		protected $user;
		public function index($param = '') {

			$user = $this->_model('user');
			$user->a = $param;

			$this->_view('home/main', ['title' => 'User', 'name' => $user->a]);

		}

		public function create($username = '', $password = '', $name ='', $surname = '') {

			User::create([
				'username' => $username,
				'password' => $password,
				'first_name' => $name,
				'last_name' => $surname,
			]);

		}
	}
?>