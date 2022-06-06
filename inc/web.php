<?php

$route = new App\Router();
$user_role = App\Controller::session('user_role');

$route->add('/', function() { 
	include "dashboard/web_home.php";
});

$path = $user_role .'/campaign';

if($user_role == 'admin') {
	$route->add($path, function() { 
		include "dashboard/admin/campaigns/campaign_index.php";
	});
}
elseif($user_role == 'network') {
	$route->add($path, function() { 
		include "dashboard/network/campaigns/campaign_index.php";
	});
}

if($user_role == 'admin') {
	$route->add("admin/campaign/create", function() { 
		include "dashboard/admin/campaigns/campaign_create.php";
	});
}
elseif($user_role == 'network') {
	$route->add("network/campaign/create", function() { 
		include "dashboard/network/campaigns/campaign_create.php";
	});
}

if($user_role == 'admin') {
	$route->add("admin/campaign/edit/.+", function($id) { 
		include "dashboard/admin/campaigns/campaign_edit.php";
	});
}
elseif($user_role == 'network') {
	$route->add("network/campaign/edit/.+", function($id) { 
		include "dashboard/network/campaigns/campaign_edit.php";
	});
}

if($user_role == 'admin') {
	$route->add("admin/campaign/show/.+", function($id) { 
		include "dashboard/admin/campaigns/campaign_show.php";
	});
}
elseif($user_role == 'network') {
	$route->add("network/campaign/show/.+", function($id) { 
		include "dashboard/network/campaigns/campaign_show.php";
	});
}


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
	include "dashboard/web_login.php";
});
$route->add('/logout', function() { 
	include "dashboard/web_logout.php";
});

$route->add('/about', function() { 
	include "dashboard/web_about.php";
});

/*$route->add('/profil/.+', function($name) {
	echo "Name $name";
});*/

$route->listen();
