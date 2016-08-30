<?php
 
session_start();
 
$code=$_SESSION['code'];
 
if($_POST['captcha_code']=="" || $_POST['captcha_code']==" ")
{
          die("Введіть символи!");
}
else
{
          $p_code=$_POST['captcha_code'];
          if($p_code!=$code)
          {
             die("Невірно введені символи!");
          }
          else
          {
              //Тут делаем все что должно быть, 
              //если капча введена верно
            die("Повідомлення надіслано!");
          }
}
 
?>
