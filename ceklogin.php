<?php
session_start();
$conn = mysqli_connect('localhost','root','','project_klmpk4');

$username = $_POST['username'];
$password = ($_POST['password']);
$query = "SELECT * FROM user where username='$username' AND password = '$password'";
$row = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($row);
$cek = mysqli_num_rows($row);


if($cek > 0){
    if($data['role'] == 'admin'){
        $_SESSION['role'] = 'admin';
        $_SESSION['username'] = $data['username'];
        $_SESSION['user_id'] = $data['id_user'];
         $_SESSION['namauser'] = $data['namauser'];
        header('location:home.php');
    }else if($data['role'] == 'client'){
        $_SESSION['role'] = 'client';
        $_SESSION['username'] = $data['username'];
        $_SESSION['namauser'] = $data['namauser'];
        $_SESSION['user_id'] = $data['id_user'];
        header('location:homeclient.php');
    }else if($data['role'] == 'owner'){
        $_SESSION['role'] = 'owner';
        $_SESSION['username'] = $data['username'];
        $_SESSION['user_id'] = $data['id_user'];
        $_SESSION['outlet_id'] = $data['outlet_id'];
        header('location:owner');
    }
}else{
    $msg = 'Username Atau Password Salah';
    header('location:login.php?msg='.$msg);
}
?>