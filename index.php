<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    if(strlen($name) <=8)
    {
        echo "Name should be more than 8 characters";
    }
}

?>


