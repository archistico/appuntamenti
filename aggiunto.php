<?php

include 'config.php';

// RECUPERO DATI E AGGIUNGO
define('CHARSET', 'UTF-8');
define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);

$errors = array();

// INIZIO CARICA DATI

function pulisciStringa($stringa) {
    return utf8_decode(addslashes(trim($stringa)));
}

if (isset($_GET['nome'])) {
    $nome = pulisciStringa($_GET['nome']);
} else {
    $errors['nome'] = 'nome non passato';
}

if (isset($_GET['data'])) {
    $data = DateTime::createFromFormat('d-m-Y', $_GET['data']);
    $datastringa = $data->format('Y-m-d');
} else {
    $errors['data'] = 'data non passato';
}

if (isset($_GET['note'])) {
    $note = pulisciStringa($_GET['note']);
} else {
    $errors['note'] = 'note non passato';
}

if (isset($_GET['fkorario'])) {
    $fkorario = $_GET['fkorario'];
} else {
    $errors['fkorario'] = 'fkorario non passato';
}

// FINE CARICA DATI

if (empty($errors)) {
    try {
        
        $db = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpswd);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES UTF8');

        $sql = "INSERT INTO app (idapp, data, fkorario, nome, note) VALUES (NULL, '$datastringa', '$fkorario', '$nome', '$note');";

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

header('Location: ./lista.php');
