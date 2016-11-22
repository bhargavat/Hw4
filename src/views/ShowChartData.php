<?php

namespace cool_name_for_your_group\hw4\views;
require_once HW4ROOT."/src/views/View.php";
require_once HW4ROOT.'/src/views/elements/elementHeader.php';
require_once HW4ROOT.'/src/views/elements/elementFooter.php';
require_once HW4ROOT.'/src/resources/scripts/chart.php';
use cool_name_for_your_group\hw4\views\elements\elementHeader as htmlHeader;
use cool_name_for_your_group\hw4\views\elements\elementFooter as htmlFooter;
class ShowChartData extends View
{
    function render($data)
    {
		echo "in reder";
        echo $data[chartType];
        $head = new htmlHeader($this);
        $head->render($this);
        //body here please

        ?>
        
       <!-- . Let XXXXX represent the characters in the md5 hash. 
        Then your script should draw a page with title and h1 heading, "XXXXX LineGraph - PasteChart". 
        Beneath this should be a line graph with title as given by the user, and using the user provided data. 
        Define a constant BASE_URL in your config.php script as the url of your website. 
        This page should then have the lines (in p or div or pre or other tags of your choice):
        -->
        <h1>PasteChart</h1>
        <h2>Share Your Data In Charts</h2>
        <p id="some_html_element_id"></p>
        
		<script>
			graph = new Chart("some_html_element_id", 'LineGraph', {"Jan": [5, 10, 15, 20] , "Feb":[20,10,"",22], "Mar":[5,3,"",4], "April":[10,"",1,2]}, {"title":"Test Chart - Month v Value"} );
			graph.draw();
		</script>
        <?php
		
		
        
        $end = new htmlFooter(__FILE__);
        $end->render(__FILE__);
    }
}
