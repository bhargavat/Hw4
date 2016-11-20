<?php

namespace cool_name_for_your_group\hw4\controllers;

use cool_name_for_your_group\hw4\views\LandingView as LandingView;

class GodController
{
    
    function loadLandingPage()
    {   $data[] = 0;
		$data[] =1;
        $landingView = new LandingView();
        $landingView->render($data);

    }
    function submitChart($data){
	$flag = 0; // use to check if the data is perfect or not
	$title = $data[0];	
	$insertData = new Story();
	$Values = explode(PHP_EOL,$data[1]);
	$subValues = array();
	foreach($Values as $val){
		$subValues[] = explode ("," ,$val);
	}
	$correctArray = array(); //  array to hold correct values, if the array is incorrect
	$finalData = array(); // array to hold and convert to jason in case the array is correct
		
	foreach($subValues as $subVal){
		$temp = array(); // temp array created
		$temp[] = $subVal[0];
		for($index  = 1; $index< count($subVal);$index++){
			$subVal[$index] = preg_replace("/[\n\r]/","", $subVal[$index]); // removes the new line character from the end of Y values;
			if((!is_numeric($subVal[$index])) && ($subVal[$index]!=null) && ($subVal[$index] != "")){
				$flag =1;
				$temp[] = 23;
				echo "found not a integer :" . $subVal[$index]."<br/>";
			}
			else{
				$temp[] = $subVal[$index]; 
			}				
		}
		$correctArray[] = $temp;
		unset($temp);
	}
		
	if($flag == 0){// setting the key for json key value pair
		foreach($subValues as $subVal){
			$storeTemp = $subVal[0];
			unset($subVal[0]);
			$subVal = preg_replace("/[\n\r]/","", $subVal);
			$finalData[$storeTemp] = array_values($subVal);
		}
		$data[1] = json_encode($finalData);
		$data[] = md5($data[1]);
		$statusData = $insertData->writeChartData($data);
		if($statusData == 1){
			header("Location: index.php?c=chart&a=show&arg1=LineGraph&arg2=".$data[2]);
			exit();
		}
	}
	else{
		//yet to code to send data if incorrect;
	}
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
