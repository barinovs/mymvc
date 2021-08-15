<?php


class AddnewtaskController extends Controller

{

	private $pageTpl = '/views/main.templ.php';
	private $templFragment = '/views/addNewTask.php';


	public function __construct() {
		$this->taskModel = new Task();
		$this->view = new View();
	}

    public function action()
    {

		$pageData['content'] = file_get_contents(__DIR__  . '/../' .$this->templFragment);

		$this->view->render($this->pageTpl, $pageData);

    }

	public function saveTask()
	{

		$formData = $_POST;

		$this->taskModel->addNewTask($formData);

		$pageData['content'] = "<h3>Новая запись успешно добавлена</h3>";

		$this->view->render($this->pageTpl, $pageData);

	}


}


