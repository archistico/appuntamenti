<?php

include 'config.php';

// RECUPERO DATI E AGGIUNGO
define('CHARSET', 'UTF-8');
define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);

$errors = array();

// INIZIO CARICA DATI

function pulisciStringa($stringa) {
    //return utf8_decode(addslashes(trim($stringa)));
    return addslashes(trim($stringa));
}

$data = new DateTime();
$datastringa = $data->format('Y-m-d');

if (isset($_GET['dafare'])) {
    $compito = pulisciStringa($_GET['dafare']);
} else {
    $errors['dafare'] = 'compito non passato';
}

// FINE CARICA DATI

if (empty($errors)) {
    try {
        
        $db = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpswd);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES UTF8');

        $sql = "INSERT INTO compiti (idcompito, data, compito) VALUES (NULL, '$datastringa', '$compito');";

        $db->exec($sql);

        // chiude il database
        $db = NULL;
    } catch (PDOException $e) {
        $errors['database'] = "Errore inserimento nel database";
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
