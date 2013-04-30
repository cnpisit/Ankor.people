<?php

namespace Album\Entity;
namespace Album\Entity;
//namespace \Entity;

use Doctrine\ORM\Mapping as ORM;

class Users {
    protected $user_id;
    protected $username;
    protected $email;
    protected $display_name;
    protected $password;
    
//    function __construct($user_id, $username, $email, $display_name, $password) {
//        $this->user_id = $user_id;
//        $this->username = $username;
//        $this->email = $email;
//        $this->display_name = $display_name;
//        $this->password = $password;
//    }

    
    public function getUser_id() {
        return $this->user_id;
    }

    public function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getDisplay_name() {
        return $this->display_name;
    }

    public function setDisplay_name($display_name) {
        $this->display_name = $display_name;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }


    
    
}
//$conn = mysqli_connect('localhost', 'root', '', 'album?zeroDateTimeBehavior=convertToNull', '3306');
//if (!$conn) {
//    die('Could not connect to MySQL: ' . mysqli_connect_error());
//}
//mysqli_query($conn, 'SET NAMES \'utf8\'');
//// TODO: insert your code here.
//mysqli_close($conn);