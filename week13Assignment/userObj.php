<?php
  class user{
    private $ID, $email, $fname, $lname, $phone, $birthdate, $gender ,$password;

    
    private function __construct($ID, $email, $fname, $lname, $phone, $birthdate, $gender, $password) {
    $this->ID=$ID;
    $this->email=$email;
    $this->fname=$fname;
    $this->lname=$lname;
    $this->phone=$phone;
    $this->birthdate=$birthdate;
    $this->gender=$gender;
    $this->password=$password;
    }
    
    public function getID(){
      return $this->ID;
    }
    public function setID($value){
      $this->ID=$value;
    }
    
    public function getemail(){
      return $this->email;
    }
    public function setemail($value){
      $this->email=$value;
    }
    
    public function getfname(){
      return $this->fname;
    }
    public function setfname($value){
      $this->fname=$value;
    }
    
    public function getlname(){
      return $this->lname;
    }
    public function setlname($value){
      $this->lname=$value;
    }
    
    public function getphone(){
      return $this->phone;
    }
    public function setphone($value){
      $this->phone=$value;
    }
    
    public function getbirthdate(){
      return $this->birthdate;
    }
    public function setbirthdate($value){
      $this->birthdate=$value;
    }
    
    public function getgender(){
      return $this->gender;
    }
    public function setgender($value){
      $this->gender=$value;
    }
    
    public function getpassword(){
      return $this->password;
    }
    public function setpassword($value){
      $this->password=$value;
    }
    public function displayUserRow() {
      return "<tr>"
         ."<td>".$this->getID()."</td>"
  			 ."<td>".$this->getemail()."</td>"
  			 ."<td>".$this->getfname()."</td>"
  			 ."<td>".$this->getlname()."</td>"
  			 ."<td>".$this->getphone()."</td>"
  			 ."<td>".$this->getbirthdate()."</td>"
  			 ."<td>".$this->getgender()."</td>"
  			 ."<td>".$this->getpassword()."</td>"
         ."</tr>";
    
    }
  }
  
  
  
  
  
  
  
?>