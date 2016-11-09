<?php


namespace cool_name_for_your_group\hw4\views\elements;


abstract class Element
{
    public $view;
    function __construct($currentView)
    {
        $this->view = $currentView;
    }
    public abstract function render($data);
}
