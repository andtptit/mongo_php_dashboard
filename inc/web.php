<?php

$route = new App\Router();
$user_role = App\Controller::session('user_role');

$route->add('/', function() { 
	include "screens/web_home.php";
});

$path = $user_role .'/campaign';

// Campaign
if($user_role == 'admin') {
	$route->add($path, function() { 
		include "screens/admin/campaigns/campaign_index.php";
	});
}
elseif($user_role == 'network') {
	$route->add($path, function() { 
		include "screens/network/campaigns/campaign_index.php";
	});
}

if($user_role == 'admin') {
	$route->add("admin/campaign/create", function() { 
		include "screens/admin/campaigns/campaign_create.php";
	});
}
elseif($user_role == 'network') {
	$route->add("network/campaign/create", function() { 
		include "screens/network/campaigns/campaign_create.php";
	});
}

if($user_role == 'admin') {
	$route->add("admin/campaign/edit/.+", function($id) { 
		include "screens/admin/campaigns/campaign_edit.php";
	});
}
elseif($user_role == 'network') {
	$route->add("network/campaign/edit/.+", function($id) { 
		include "screens/network/campaigns/campaign_edit.php";
	});
}

if($user_role == 'admin') {
	$route->add("admin/campaign/show/.+", function($id) { 
		include "screens/admin/campaigns/campaign_show.php";
	});
}
elseif($user_role == 'network') {
	$route->add("network/campaign/show/.+", function($id) { 
		include "screens/network/campaigns/campaign_show.php";
	});
}


// User
if($user_role == 'admin') {
	$route->add("admin/user/", function() { 
		include "screens/admin/users/user_index.php";
	});
}
elseif($user_role == 'network') {
	$route->add("network/user/", function() { 
		include "screens/network/users/user_index.php";
	});
}


if($user_role == 'admin') {
	$route->add("admin/user/create", function() { 
		include "screens/admin/users/user_create.php";
	});
}
elseif($user_role == 'network') {
	$route->add("network/user/create", function() { 
		include "screens/network/users/user_create.php";
	});
}

if($user_role == 'admin') {
	$route->add("admin/user/edit/.+", function($id) { 
		include "screens/admin/users/user_edit.php";
	});
}
elseif($user_role == 'network') {
	$route->add("network/user/edit/.+", function($id) { 
		include "screens/network/users/user_edit.php";
	});
}


if($user_role == 'admin') {
	$route->add("admin/user/show/.+", function($id) { 
		include "screens/admin/users/user_show.php";
	});
}
elseif($user_role == 'network') {
	$route->add("network/user/show/.+", function($id) { 
		include "screens/network/users/user_show.php";
	});
}


// Acount
$route->add("account/", function() { 
	include "screens/admin/accounts/acc_index.php";
});


$route->add("account/create", function() { 
	include "screens/admin/accounts/acc_create.php";
});


$route->add("account/edit/.+", function($id) { 
	include "screens/admin/accounts/acc_edit.php";
});


$route->add("account/show/.+", function($id) { 
	include "screens/admin/accounts/acc_show.php";
});



// Web Home
$route->add('/login', function() { 
	include "screens/web_login.php";
});

$route->add('/logout', function() { 
	include "screens/web_logout.php";
});

$route->add('/about', function() { 
	include "screens/web_about.php";
});

/*$route->add('/profil/.+', function($name) {
	echo "Name $name";
});*/

$route->listen();
