<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'),// роут для приветственной страницы, можно удалить
		
		new Route('/my-page1/', 'page', 'show1'),
		new Route('/my-page2/', 'page', 'show2'),
		new Route('/page/', 'page', 'act'),
		new Route('/my-page/:id', 'page', 'show'),

		new Route('/my-test1/', 'test', 'act1'),
		new Route('/my-test2/', 'test', 'act2'),
		new Route('/my-test3/', 'test', 'act3'),
		
		new Route('/test/', 'page', 'test'),

		new Route('/nums/:n1/:n2/:n3', 'num', 'sum'),

		new Route('/user/:id/', 'user', 'show'),
		new Route('/user/:id/:key', 'user', 'info'),
		new Route('/user/all', 'user', 'all'),
		new Route('/user/first/:n/', 'user', 'first'),
		new Route('/product/all', 'product', 'all'),
		new Route('/product/:id/', 'product', 'show'),

	];
	
