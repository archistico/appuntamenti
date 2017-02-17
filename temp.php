<?php

include 'controllo.php';
include 'php/config.php';
include 'php/utilita.php';

// RECUPERO DATI E AGGIUNGO
define('CHARSET', 'UTF-8');
define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);

$errors = array();

if (isset($_GET['idmovimento'])) {
    if ((empty($_GET['idmovimento']) && strlen($_GET['idmovimento'])>0) || (!empty($_GET['idmovimento']))) {
        $idmovimento = $_GET['idmovimento'];
    } else {
        $errors['idmovimento'] = 'Errore vuoto (empty) idmovimento';
    }
} else {
    $errors['idmovimento'] = 'Errore non settato idmovimento';
}

// ***************  Caricamento dati FINE

// METODO CON ROLLBACK
$db = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpswd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_EMULATE_PREPARES => false ));

//Inizia la transazione
$db->beginTransaction();

try {
    //Cancella movimento
    $sqlmovimento = "DELETE FROM movimenti WHERE idmovimento = ?;";
    $stmt = $db->prepare($sqlmovimento);
    $stmt->execute(array($idmovimento));

    //Cancella movimenti dettaglio
    $sqlmovimentodettagli = "DELETE FROM movimentidettaglio WHERE fkmovimento = ?;";
    $stmt = $db->prepare($sqlmovimentodettagli);
    $stmt->execute(array($idmovimento));

    //Se non ci sono eccezioni commit
    $db->commit();
}
//Se sollevate eccezioni
catch(Exception $e){
    echo $e->getMessage();
    //Rollback la transazione
    $db->rollBack();
    $errors['DB'] = 'Errore nel database';
}

$db = NULL;

// Mando il messaggio del risultato e redirigo

session_start();
if (!empty($errors)) {
    $_SESSION['sqlerrori'] = implode(", ", $errors);
} else {
    $_SESSION['sqlok'] = "OPERAZIONE RIUSCITA";
}

header('Location: ./movimentilista.php');
