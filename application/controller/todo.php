<?php

class Todo extends Controller
{
	public function index() 
	{
		require APP . 'view/_template/header.php'
		require APP . 'view/todo/index.php'
		require APP . 'view/_template/footer.php'
	}
}
?>