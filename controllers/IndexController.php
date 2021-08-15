<?php


class IndexController extends Controller

{

	private $pageTpl = '/views/main.templ.php';


	public function __construct() {
		$this->model = new IndexModel();
		$this->view = new View();
		$this->taskModel = new Task();
	}


	public function action() {

		$tasks = $this->taskModel->getAllTasks();

		$content = "<table class='table'><tbody>";

		foreach($tasks as $taskInfo) {
			$content .= $this->buildRowTable($taskInfo);
		}

		$content .= "</tbody></table>";

		$pages = ceil(count($tasks) / 2);

		$content .= $this->buildPagination($pages);

		$pageData['title'] = 'Задачи';
		$pageData['content'] = $content;
		$pageData['pages'] = $pages;

		$this->view->render($this->pageTpl, $pageData);
	}

	private function buildRowTable($taskInfo)
	{
		$resultStr = "<tr>";

		foreach ($taskInfo as $fieldValue) {
			$resultStr .= "<td>" . $fieldValue . "</td>";
		}

		$resultStr .= "</tr>";

		return $resultStr;

	}

	private function buildPagination($pages) {
		$resultStr = "<nav aria-label='Page navigation example'><ul class='pagination'>";
		for ($i=0; $i < $pages; $i++) {
			$resultStr .= "<li class='page-item'><a class='page-link' href='#'>" . strval($i + 1) . "</a></li>";
		}
		$resultStr .= "</ul></nav>";

		return $resultStr;
	}

}


