<?php

    
    $con = mysqli_connect('localhost','root','universe','mydb');
   
    $sql = "select * from student";
    mysqli_query($con,"insert into student (name,username,password,cg,stream,verify) values ('".$_POST['name']."','".$_POST['username']."','".$_POST['password']."',".$_POST['cg'].",'".$_POST['stream']."',0);");
    echo "request for student added: wait for the administrator to approve your request";

    mysqli_close($con);


?>
