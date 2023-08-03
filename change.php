<?php

$cid = $_GET['id']; 
$value=$_GET['val'];

 $servername = "localhost";          
 $username = "root";
 $password = "";
 $dbname = "tnpcell";

$con = mysqli_connect($servername,$username, $password, $dbname);
    // if($cid == 1)
    // {
    //      $sqlquery = "UPDATE `courses` SET active=0
    //                                 where cid ='$cid'";
    //      $res=mysqli_query($con,$sqlquery);
    // }
    // else
    // {
    //     $sqlquery = "UPDATE `courses` SET active=1
    //     where cid ='$cid'";
    //     $res=mysqli_query($con,$sqlquery);
    // }
    $sqlquery = "select active  from courses  where cid ='$cid'";
    $res=mysqli_query($con,$sqlquery);
    $active=mysqli_fetch_array($res);
    $status=$active['active'];
    $status = ((int)$status? 0 : 1);
    $sqlquery1 = "UPDATE `courses` SET active='$status' where cid ='$cid' ";
    $res=mysqli_query($con,$sqlquery1);
    echo "<script>window.location.href='admin-dashboard.php'</script>";


?>