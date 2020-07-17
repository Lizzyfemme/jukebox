<?php
class Account {
  public function __construct() {}
  
  public function signup($un, $fn, $ln, $em1, $em2, $pw1, $pw2) {
    $this->validateUsername($un);
    $this->validateFirstName($fn);
    $this->validateLastName($ln);
    $this->validateEmails($em1, $em2);
    $this->validatePassword($pw1, $pw2);
    }

    private function validateUsername($un){
      if(strlen($un)>25 || strlen($un) < 5)

    }
    private function validateFirstName($fn){
      
    }
    private function validateLastName($ln){
      
    }
    private function validateEmails($em1, $em2){
      
    }
    private function validatePassword($pw1, $pw2){
      
    }
  
}

?>