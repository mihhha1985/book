<?php

class Db{
    
    public static function getConect(){
        $db = new PDO('mysql:host=localhost;dbname=guestbook', 'root', 'nintendo27');
        $db->exec("set names utf8");
        
        return $db;
    }
}
