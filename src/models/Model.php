<?php


namespace cool_name_for_your_group\hw4\models;
require_once HW4ROOT.'/src/configs/config.php';
use cool_name_for_your_group\hw4\configs\config;

abstract class Model
{
    function getCOnnection()
    {
        $servername = config::Servername;//"localhost";
        $username = config::Username;//"root";
        $password = config::Password;//"";

        $conn = new \mysqli($servername, $username, $password);
        return $conn;
    }
}
