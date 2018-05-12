<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Db
 *
 * @author Administrator
 */
class Db {
    //put your code here
    protected static $connection;
    
    public function connect(){
        if(!isset(self::$connection)){
            $config = parse_ini_file("config.ini");
            self::$connection = new mysqli($config["hostname"], $config["username"], $config["password"], $config["databasename"]);
        }
        if(self::$connection == false){
            return false;
        }
        return self::$connection;
    }
    
    public function excuteQuery($queryString){
        $con = $this->connect();
        $result = $con->query($queryString);
        $con->close();
        return $result;
    }
    
    public function selectToArray($queryString){
        $row = array();
        $result = $this->excuteQuery($queryString);
        if($result == false){
            return false;
        }
        while($item = $result->fetch_assoc()){
            $row[] = $item;
        }
        return $row;
    }
}
