<?php

namespace cool_name_for_your_group\hw4\views;

use cool_name_for_your_group\hw4\views\elements\elementHeader as htmlHeader;
use cool_name_for_your_group\hw4\views\elements\elementFooter as htmlFooter;
use cool_name_for_your_group\hw4\configs\config as config;
class ShowChartData extends View
{
    function render($data)
    {
		$head = new htmlHeader($data);
        echo '<script src="/Hw4/src/resources/scripts/chart.js"></script>';
        $head->render($data);
        //body here please


         echo " <h1>".$data[hvalue]." ". $data[chartType]." - PasteChart</h1>"
        ?>
        <p id="some_html_element_id"></p>
        <?php
        echo "<script>graph = new Chart('some_html_element_id', '".$data[chartType]."', ".$data[2].", {'title':'".$data[1]."'} );graph.draw();</script>";
		echo "<ul>";
        echo '<li><a href="'.config::BASE_URL.'?c=chart&a=show&arg1=LineGraph&arg2='.$data[hvalue].'"> LineGraph<br/>'.config::BASE_URL.'?c=chart&a=show&arg1=LineGraph&arg2='.$data[hvalue].' </a></li>';
        echo '<li><a href="'.config::BASE_URL.'?c=chart&a=show&arg1=PointGraph&arg2='.$data[hvalue].'">PointGraph<br/> '.config::BASE_URL.'?c=chart&a=show&arg1=PointGraph&arg2='.$data[hvalue].' </a></li>';
        echo '<li><a href="'.config::BASE_URL.'?c=chart&a=show&arg1=Histogram&arg2='.$data[hvalue].'"> Histogram<br/>'.config::BASE_URL.'?c=chart&a=show&arg1=Histogram&arg2='.$data[hvalue].' </a></li>';
        echo '<li><a href="'.config::BASE_URL.'?c=chart&a=show&arg1=xml&arg2='.$data[hvalue].'">  xml<br/> '.config::BASE_URL.'?c=chart&a=show&arg1=xml&arg2='.$data[hvalue].'</a></li>';
        echo '<li><a href="'.config::BASE_URL.'?c=chart&a=show&arg1=json&arg2='.$data[hvalue].'"> json <br/>'.config::BASE_URL.'?c=chart&a=show&arg1=json&rg2='.$data[hvalue].' </a></li>';
        echo '<li><a href="'.config::BASE_URL.'?c=chart&a=show&arg1=jsonp&arg2='.$data[hvalue].'&arg3=javascript_callback"> jsonp<br/>'.config::BASE_URL.'?c=chart&a=show&arg1=jsonp&arg2='.$data[hvalue].'&arg3=javascript_callback </a></li>';
        echo "</ul>";




        $end = new htmlFooter(__FILE__);
        $end->render(__FILE__);
    }
}
