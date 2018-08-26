<?php

/**
* 
*/
class Pages extends Controller
{
	
	public function __construct()
	{
		$this->postModel = $this->model('Post');		
	}

	public function index()
	{
		$posts = $this->postModel->getPosts();
		$dt = [
		'title'=>'welcome',
		'posts' => $posts
		];
		$this->view("pages/index", $dt);
	}

	public function about()
	{
		$dt = ['title'=>'welcome'];
		$this->view("pages/about", $dt);
	}
}

?>