<?php


namespace cool_name_for_your_group\hw4\models;

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
