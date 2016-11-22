<?php

namespace cool_name_for_your_group\hw4\views\elements;
require_once HW4ROOT."/src/views/elements/Element.php";

class elementHeader extends Element
{
    public function render($data)
    {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>PasteChart</title>
        </head>

        <body>
        <?php
    }
}
