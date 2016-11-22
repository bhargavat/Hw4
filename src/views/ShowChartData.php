<?php

namespace cool_name_for_your_group\hw4\views;

use cool_name_for_your_group\hw4\views\elements\elementHeader as htmlHeader;
use cool_name_for_your_group\hw4\views\elements\elementFooter as htmlFooter;
class ShowChartData extends View
{
    function render($data)
    {
		echo "in reder";
        echo $data[chartType];
        $head = new htmlHeader($this);
        echo $data[1];
        echo $data[2];
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
        <?php
        echo "<script>graph = new Chart('some_html_element_id', '".$data[chartType]."', ".$data[2].", {'title':'".$data[1]."'} );graph.draw();</script>";
		?>
		<?php
		
		
        
        $end = new htmlFooter(__FILE__);
        $end->render(__FILE__);
    }
}
