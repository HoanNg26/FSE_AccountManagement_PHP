<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccountBUS
 *
 * @author Administrator
 */
//echo $_SERVER['DOCUMENT_ROOT'];
require_once $_SERVER['DOCUMENT_ROOT'].'/ac/dal/AccountDAL.php';
class AccountBUS {
    //put your code here
    public function insert($acc){
        $dal = new AccountDAL();
        return $dal->insert($acc);
    }
}
