<?php 

$user = $_POST['usernome'];
$pass = $_POST['password'];

if ($user = "adm" && $pass == "123"){
    echo '<meta http-equiv="refresh" content="2; URL=index2.php">';
}
else {
    echo 'Deu ruim pra você';
}
