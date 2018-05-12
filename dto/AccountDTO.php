<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccountDTO
 *
 * @author Administrator
 */
class AccountDTO {
    //put your code here
    private $fullname;
    private $username;
    private $password;
    private $createddate;
    private $img;
    
    public function __construct($fullname1, $username1, $password1, $createddated1, $img1) {
        $this->fullname = $fullname1;
        $this->username = $username1;
        $this->password = $password1;
        $this->createddate = $createddated1;
        $this->img = $img1;
    }
    
    public function __destruct() {
        $this->fullname = NULL;
        $this->username = NULL;
        $this->password = NULL;
        $this->createddate = NULL;
        $this->img = NULL;
    }
    public function getFullname(){
        return $this->fullname;
    }
    
     public function getUsername(){
        return $this->username;
    }
    
     public function getPassword(){
        return $this->password;
    }
     public function getCreatedDate(){
        return $this->createddate;
    }
    public function setCreatedDate($date){
        $this->createddate = $date;
    }
     public function getImage(){
        return $this->img;
    }
}
