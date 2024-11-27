<?php
class Connection {
    static public function On(){
        $link = new PDO("mysql:host=localhost;dbname=parqueadero","root", "");

		$link->exec("set names utf8");

		return $link;
    } 
}