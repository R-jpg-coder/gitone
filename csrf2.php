<?php 
namespace App\Http\Controllers;
class HomeController
{
	this->middleware('csrf');

	$this->middleware('auth',['only'=>'update']);
}
}