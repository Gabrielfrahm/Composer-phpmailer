<?php

require __DIR__ . "/lib_ext/autoload.php";



use Composer\Email;



$novoEmail =  new Email;
$novoEmail->sendMail("Testando email por hotmail.com","<h1>teste de email</h1>","gabriel_frahm@hotmail.com","Gabriel","gabriel.marques@dorconsultoria.com.br","Gabriel");

var_dump($novoEmail);
?>