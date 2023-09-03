<?php

namespace LMS\models;

use mysqli;

class DatabaseContext
{
    public static function getConnection(): mysqli
    {
        return new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    }
}