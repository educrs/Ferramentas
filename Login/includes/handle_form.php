<!DOCTYPE html>
<?php

//Inicia sessão
session_start();

//O usuário só permanecerá logado se o elemento 'csrf_token' existir tanto em $_SESSION quanto em $_POST e os dois valores devem ser iguais.
if (($_SERVER['REQUEST_TYPE'] === 'POST') 
        && (isset($_SESSION['csrf_token'], $_POST['csrf_token'])) 
        && ($_SESSION['csfr_token'] === $_POST['csfr_token'])) {
    
} else {
    
}