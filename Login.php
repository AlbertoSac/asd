<?php
if(!empty($_POST['nickname'])) && !empty($_POST['password']){
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    if($nickname == "usuario" && $password == "123"){
        echo "accedio";
    } else{
        echo "usuario o contraseña incorrecta";
    }
}else{
    echo "Por favor ingresa datos";
}
?>