<?php
session_start();
@include "dbconn.php";

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

    $font="ariali.ttf";
    $image = imagecreatefromjpeg('py-certificate.jpg');
    $color = imagecolorallocate($image, 19, 21, 22);
    $name = $_SESSION['fname'];
    imagettftext($image,35,0,470,480,$color,$font,$name);
    header('Content-Type: image/jpeg');
    header('Content-Disposition: attachment; filename="' . $_SESSION['fname'] . ' Python Certificate.jpg"');
    imagejpeg($image);
    imagedestroy($image);

} else {
    header('Location: ../login.php');
    exit;
}
?>
