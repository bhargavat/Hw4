<?php

namespace cool_name_for_your_group\hw4\controllers;
require_once HW4ROOT."/src/views/LandingView.php";
use cool_name_for_your_group\hw4\views\LandingView as LandingView;

class GodController
{
    
    function loadLandingPage()
    {   $data[] = 0;
		$data[] =1;
        $landingView = new LandingView();
        $landingView->render($data);

    }
    function loadLineGraph($hashValue){ 
    }
    function loadPointGraph($hashValue){ 
    }
    function loadHistogram($hashValue){ 
    }
    function loadXML($hashValue){ 
    }
    function loadjson($hashValue){ 
    }
    function loadjsonp($hashValue){ 
    }

}
