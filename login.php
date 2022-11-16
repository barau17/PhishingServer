<?php
    $content=$_POST['password'];
    file_put_contents('flag.txt', $content);
?>