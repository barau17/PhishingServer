<?php
    $content=$_POST['password'];
    file_put_contents("form.txt", $content);
?>