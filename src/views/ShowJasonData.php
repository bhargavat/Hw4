<?php

namespace cool_name_for_your_group\hw4\views;
use cool_name_for_your_group\hw4\configs\config as config;
use cool_name_for_your_group\hw4\views\elements\elementHeader as htmlHeader;
use cool_name_for_your_group\hw4\views\elements\elementFooter as htmlFooter;
class ShowJasonData extends View
{
    function render($data)
    {
        $head = new htmlHeader($data);
        $head->render($data);

        if($data[flag]==1) {
            echo $data[1] . "(" . $data[0] . ")";
        }
        else{
            echo $data[0];
        }
        ?>

    <?php
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
