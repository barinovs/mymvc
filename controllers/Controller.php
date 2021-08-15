<?php

require __DIR__ . '/../models/autoloader.php';

class Controller
{

	public $model;
	public $view;
	protected $pageData = array();

	public function __construct() {
		$this->view = new View();
		$this->model = new Model();
	}

}