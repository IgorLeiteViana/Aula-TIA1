<?php
//usuario = fabianosouza
//senha = 12345

$login=$_POST['login'];
$senha=$_POST['senha'];

//banaco de dados
$senhacriptBD = '8cb2237d0679ca88db6464eac60da96345513964'; //12345
$senhacrip =sha1($senha);

// verificar se o usuário digitou a verificação
if(($senhacriptBD === $senhacrip) && ($login === 'fabianosouza')){
    echo"Bem VIndo Fabiano";
}else{
    echo"Usuario ou senha incorreta";
}



?>