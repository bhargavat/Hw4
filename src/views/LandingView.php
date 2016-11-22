<?php

namespace cool_name_for_your_group\hw4\views;
require_once HW4ROOT."/src/views/View.php";
require_once HW4ROOT.'/src/views/elements/elementHeader.php';
require_once HW4ROOT.'/src/views/elements/elementFooter.php';
require_once HW4ROOT.'/src/views/elements/formInput.php';
use cool_name_for_your_group\hw4\views\elements\elementHeader as htmlHeader;
use cool_name_for_your_group\hw4\views\elements\elementFooter as htmlFooter;
use cool_name_for_your_group\hw4\views\elements\formInput as formInput;
class LandingView extends View
{
    function render($data)
    {
        $head = new htmlHeader($this);
        $head->render($this);
        //body here please

        ?>
        <h1>PasteChart</h1>
        <h2>Share Your Data In Charts</h2>
        <?php
		
		$formInput = new formInput($this);
        $formInput->render($data);
        
        
        $end = new htmlFooter(__FILE__);
        $end->render(__FILE__);
    }
}
