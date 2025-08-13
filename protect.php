<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['login'])){
    die("Logue para acessar a página. <p><a href=\"index.php\">Entrar </a></p>");
}
?>