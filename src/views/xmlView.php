<?php

namespace cool_name_for_your_group\hw4\views;
require_once $_SERVER['DOCUMENT_ROOT']."/Hw4/src/views/View.php";
// require_once HW4ROOT.'/src/views/elements/elementHeader.php';
// require_once HW4ROOT.'/src/views/elements/elementFooter.php';
// require_once HW4ROOT.'/src/resources/scripts/chart.php';
use cool_name_for_your_group\hw4\views\elements\elementHeader as htmlHeader;
use cool_name_for_your_group\hw4\views\elements\elementFooter as htmlFooter;
class showXML extends View
{

	function render($UserData){
		echo $UserData;
		echo "hi";
	$data = $UserData[2];

	$out = json_decode($data, true);

	$keys = array_keys($out); 
	$values = array_values($out);

	$title = $UserData[1];

	$xmloutput = "";

	$xmloutput = $xmloutput."<?xml version='1.0' encoding='UTF-8'?>;
	<!DOCTYPE chart SYSTEM 'chart.dtd'>;
	<chart title='".$title."'>\n";
	foreach ($keys as $index1=>$label) {
	    // print $label;
	    $xmloutput = $xmloutput."<label text='".$label."'>;\n";
	foreach ($values as $index2=>$value){
	        // print $values[$index1][$index2]." ";
	    if(strlen($values[$index1][$index2]) > 0 ){
	    $xmloutput = $xmloutput."<value>".$values[$index1][$index2]."</value>\n";
	    }
	}
	    $xmloutput = $xmloutput."</label>\n";
	}
	$xmloutput = $xmloutput."</chart>";


	echo "<pre>";
	echo nl2br(htmlentities($xmloutput));
	echo "</pre>";
	$this->render($data); 
	}
}
?>