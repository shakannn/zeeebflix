<?php 
include 'connection.php';
include 'util.php';
$var=$_SERVER['REQUEST_METHOD'];
if($var=='POST'){
    if(isset($_POST['email']) && isset($_POST['id'])){
        $res=Array();
        $id=$_POST['id'];
        $email=$_POST['email'];
        $q="INSERT INTO `favorite`(`email`, `id`) VALUES ('$email',$id)";
        if($result=$connect->query($q)){
            $res['result']=1;
            echo json_encode($res);
        }else{
            $res['result']=0;
            echo json_encode($res);;
        }
    }
}
?>