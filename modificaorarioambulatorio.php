<?php

include 'config.php';

// RECUPERO DATI E AGGIUNGO
define('CHARSET', 'UTF-8');
define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);

$errors = array();

// METODO CON ROLLBACK
$db = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpswd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_EMULATE_PREPARES => false ));

//Inizia la transazione
$db->beginTransaction();

try {

    // per ogni orario
    for($c = 1; $c<289 ; $c++) {
        
        if(isset($_POST[$c])) {
            //Update attivo
            $sql = "UPDATE orario SET attivo = 1 WHERE orario.idorario = ?;";
        } else {
            //Update non attivo
            $sql = "UPDATE orario SET attivo = 0 WHERE orario.idorario = ?;";
        }
        
        $stmt = $db->prepare($sql);
        $stmt->execute(array($c));
    }

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

header('Location: ./opzioni.php');