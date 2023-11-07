<?php
$username=filter_input(input_post,'username');
$email=filter_input(input_post,'email');
$host="localhost"
$dbusername="root"
$dbpassword=""
$dbname="rajesh youtube"
$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname){
    if (mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'
  .mydqli_connect_error());
    }
    else{
        $sql = "insert into account(username,password)
        values('$username','$email')";
    }
}
?>