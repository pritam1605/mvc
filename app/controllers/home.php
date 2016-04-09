<?php

	class Home extends Controller {

		public function index($param) {
			//echo 'home/index', '<br />';
			$model = $this->_model('user');
			$model->a = $param;
			echo 'A is ', $model->a;
		}
	}


?>