<?php

namespace orm;

use mysqli;

class db
{
    public static $conn = null;

    public static function getConn()
    {
        if(self::$conn===null) {
            self::$conn = new mysqli("localhost", "root", "", "kino");
            return self::$conn;
        }else{
            return self::$conn;
        }
    }

}