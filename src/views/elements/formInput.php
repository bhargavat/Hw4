<?php

namespace cool_name_for_your_group\hw4\views\elements;

class formInput extends Element
{
    public function render($data)
    {
        ?>
        <form action="index.php">
            <input type="text" name="TitleFilter" placeholder="Chart Title"/><br/>
            <textarea name ="DataValues" placeholder="Jan,600,5.4,              Feb,450,5.0"></textarea><br/>
            <button type="submit">Share</button>
        </form>
        <?php
    }
}
