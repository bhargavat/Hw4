<?php
define('HW4ROOT','C:\xampp\htdocs\Hw4');

require_once HW4ROOT."/src/controllers/GodController.php";
use cool_name_for_your_group\hw4\controllers\GodController as GodController;

$controller = new GodController();
if(empty($_REQUEST))
{
    $controller->loadLandingPage();
}
if($_REQUEST['m']=='LandingPage')
{
    $controller->loadLandingPage();
}

if($_REQUEST['c']=='chart' && $_REQUEST['a']=='show'){
	$hashValue = $_REQUEST['arg2'];
	
	if($_REQUEST['arg1']=='LineGraph'){
		$controller->loadLineGraph($hashValue);
	}
	if($_REQUEST['arg1']=='PointGraph'){
		$controller->loadPointGraph($hashValue);
	}
	if($_REQUEST['arg1']=='Histogram'){
		$controller->loadHistogram($hashValue);
	}
	if($_REQUEST['arg1']=='XML'){
		$controller->loadXML($hashValue);
	}
	if($_REQUEST['arg1']=='json'){
		$controller->loadjson($hashValue);
	}
	if($_REQUEST['arg1']=='jsonp'){
		$controller->loadjsonp($hashValue);
	}
}

//As JSONP data:
//BASE_URL/?c=chart&a=show&arg1=jsonp&arg2=XXXXX&arg3=javascript_callback


print_r($_REQUEST);
