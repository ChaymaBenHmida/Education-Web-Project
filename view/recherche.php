<?php
include 'D:\xampp\htdocs\TESSSSSSSSSSSSSSSSSSSST\controller\cours_c.php';

$coursC=new coursC();
if(
    isset($_POST['search'])
){
    $cours = new cours('','','','','','','','');/*zedt '' baad youssef*/
     $tem=$_POST['search'];
        header("Location: profile.php?tem=$tem");

}

?>