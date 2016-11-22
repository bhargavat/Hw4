<?php

namespace cool_name_for_your_group\hw4\views\elements;


class elementHeader extends Element
{
    public function render($data)
    {
        ?>
        <!DOCTYPE html>
        <html>
            <head>
            <meta charset="UTF-8">
        <?php
        if($data[titleFlag] == 0){
            echo " <title>PasteChart</title>";
        }
        else{

            echo " <title>".$data[hvalue]." ". $data[chartType]." - PasteChart</title>";
        }
        ?>
        </head>

        <body>
        <?php
    }
}
