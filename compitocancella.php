<?php

include 'config.php';

// RECUPERO DATI E AGGIUNGO
define('CHARSET', 'UTF-8');
define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);

$errors = array();

// INIZIO CARICA DATI

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $errors['id'] = 'id non passato';
}

// FINE CARICA DATI

if (empty($errors)) {
    try {
        
        $db = new PDO("mysql:host=$dbhost;port=$dbport;dbname=$dbname",$dbuser,$dbpswd);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES UTF8');

        $sql = "DELETE FROM compiti WHERE idcompito='$id';";

        $db->exec($sql);

        // chiude il database
        $db = NULL;
    } catch (PDOException $e) {
        $errors['database'] = "Errore cancellazione dal database";
    }
}

// Mando il messaggio del risultato e redirigo

session_start();
if (!empty($errors)) {
    $_SESSION['sqlerrori'] = implode(", ", $errors);
} else {
    $_SESSION['sqlok'] = "OPERAZIONE RIUSCITA";
}

header('Location: ./dafare.php');
