<?php
	use \Core\Route;
	
	return [
		new Route('/', 'main', 'init'), //
		new Route('/auth', 'auth', 'index'), //
		new Route('/bot', 'bot', 'index'), //

	];
	
