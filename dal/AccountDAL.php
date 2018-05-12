<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccountDAL
 *
 * @author Administrator
 */

require_once $_SERVER['DOCUMENT_ROOT'].'/ac/config/Db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ac/dto/AccountDTO.php';

class AccountDAL {
    //put your code here
    
    public function insert($acc){
        $db = new Db();
        $fullname  = $acc->getFullname();
        $username = $acc->getUsername();
        $password = $acc->getPassword();
        $createddate = $acc->getCreatedDate();
        $image = $acc->getImage();
        $queryString = "INSERT INTO `account` (`fullname`, `username`, `password`, `createddate`, `img`) "
                . "VALUES ('$fullname', '$username', '$password', '$createddate', '$image')";
//        var_dump($queryString);
//                die();
        $result = $db->excuteQuery($queryString);
        return $result;
    }
}
