<?php

// RECUPERO DATI E AGGIUNGO
define('CHARSET', 'UTF-8');
define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);

class Orario {
    public $idorario;
    public $giornosettimana;
    public $ora;
    public $attivo;
}

function caricaDatiOrario() {
    
    include 'config.php';
    $orari = array();

    try {

        $db = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpswd);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES UTF8');

        $sql = "SELECT * FROM orario";

        $result = $db->query($sql);
        foreach ($result as $row) {
            $row = get_object_vars($row);
            $orari[$row['idorario']] = new Orario();
            $orari[$row['idorario']]->idorario = $row['idorario'];
            $orari[$row['idorario']]->giornosettimana = $row['giornosettimana'];
            $orari[$row['idorario']]->ora = $row['ora'];
            $orari[$row['idorario']]->attivo = $row['attivo'];
        }
        // chiude il database
        $db = NULL;
        
    } catch (PDOException $e) {
        throw new PDOException("Error  : " . $e->getMessage());
    }

    return $orari;
    //var_dump($orari);
    //die;
}

function orarioattivo($or, $id) {
    if($or[$id]->attivo == 1) {
        echo "checked";
    } else {
        echo "";
    }
}

?>