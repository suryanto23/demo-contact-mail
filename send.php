<?php
$nama = $_POST['name'];
$email = $_POST['email'];
$messages = $_POST['messages'];
$subject = "test email";
$to = "sur23.id@gmail.com"
    
$headers .= 'from : blablabla@mail.com'; //bagian ini diganti sesuai dengan email dari pengirim

if($email!=NULL){
    mail($to,$subject,$messages,$headers);
    header("Location:sukses.html")
}





?>