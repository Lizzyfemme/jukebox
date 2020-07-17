<?php
function sanitizaFormPassword($inputText) {
  $username= strip_tags($inputText);
return inputText;
}
function sanitizaFormUsername($inputText) {
  $username= strip_tags($inputText);
  $username=str_replace(" ", "", $inputText);
return inputText;
}

function sanitizaFormCaseSensitive($inputString) {
  $firstName= strip_tags($inputString);
  $firstName=str_replace(" ", "", $inputString);
  $firstName=ucfirst(strtolower($inputString));
return inputString;
}

if(isset($_POST['signupButton'])) {
  // signup button was pressed"
  $username= sanitizaFormUsername($_POST['signupUsername']);
  $firstName= sanitizaFormCaseSensitive($_POST['firstName']);
  $lastName= sanitizaFormCaseSensitive($_POST['lastName']);
  $email = sanitizaFormUsername($_POST['signEmail']);
  $emailConfirm = sanitizaFormUsername($_POST['signEmailConfirm']);
  $password = sanitizaFormPassword($_POST['signupPassword']);
  $passwordConfirm=sanitizaFormPassword($_POST['signupPasswordConfirm']);
  $account->signup($username, $firstName, $lastName, $email, $emailConfirm, $password, $passwordConfirm);
}

?>