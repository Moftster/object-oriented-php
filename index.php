<?php

class User {
    public $username;
    public $password;
    public static $passwordLength = 15;
    
    public static function getPasswordLength() {
        return self::$passwordLength;
    }
}

echo User::getPasswordLength();

?>