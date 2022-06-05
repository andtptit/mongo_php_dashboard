<?php

$route = new App\Router();

$route->add('/', function() { 
	include "web_home.php";
});

$route->add('/campaign', function() { 
	include "campaigns/campaign_index.php";
});
$route->add('/campaign/create', function() { 
	include "campaigns/campaign_create.php";
});
$route->add('/campaign/edit/.+', function($id) { 
	include "campaigns/campaign_edit.php";
});
$route->add('/campaign/show/.+', function($id) { 
	include "campaigns/campaign_show.php";
});

$route->add('/user', function() { 
	include "users/user_index.php";
});
$route->add('/user/create', function() { 
	include "users/user_create.php";
});
$route->add('/user/edit/.+', function($id) { 
	include "users/user_edit.php";
});
$route->add('/user/show/.+', function($id) { 
	include "users/user_show.php";
});

$route->add('/login', function() { 
	include "web_login.php";
});
$route->add('/logout', function() { 
	include "web_logout.php";
});

$route->add('/about', function() { 
	include "web_about.php";
});

/*$route->add('/profil/.+', function($name) {
	echo "Name $name";
});*/

$route->listen();
