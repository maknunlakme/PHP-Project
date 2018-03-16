<?php

class PageController
{
	public function home()
	{
		$posts = App::get('database')->select_all('post');
		$replies = App::get('database')->select_all('reply');

		return view('index',
		[
			'posts' => $posts,
			'replies' => $replies
		]
		);

	}

	public function about()
	{
		$company = 'Maknun';

		return view('about',['company' => $company]);
	}

	public function contact()
	{
		return view('contact');
	}
}

?>