<?php
$password_hash = '$2y$10$VZiTztYslq6SlXsK6ZXCRexkc1sBmKB3uYRtfS7xuvo1wezMGIhj6';
$password = "12345678";
if(password_verify($password,$password_hash))
{
    echo "Password Valid";
}
else 
{
    echo "Password Tidak Valid";
}
?>
