<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Appuntamenti studio medico">
    <meta name="author" content="Archistico by Emilie Rollandin">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Appuntamenti</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
    
   
    <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet"> 

	<!-- Air-datepicker -->
	<link href="dist/air-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css">
    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link href="css/appuntamenti.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="index.php">Home</a></li>
          <!-- <li><a href="#">Nuovo</a></li> -->
          <li><a href="lista.php">Lista</a></li>
		  <li><a href="opzioni.php">Opzioni</a></li>
      <li><a href="dafare.php">Da fare</a></li>
        </ul>
        <h3 class="text-muted corsivo">Appuntamenti</h3>
      </div>

      <div class="jumbotron">
        <h1 class="corsivo">Seleziona orario</h1>
      </div>
		
		<form name="Form" action="aggiunto.php" method="get">
		
		
	  
    <?php

    $dataselezionatatesto = str_replace("/", "-", $_GET['dataselezionatatesto']);
    //echo $dataselezionatatesto; die();
    $dataselezionata = DateTime::createFromFormat('d-m-Y', $dataselezionatatesto);
    $dataDB = $dataselezionata->format('Y-m-d');

    $nome = array_key_exists('nome', $_GET) ? $_GET['nome'] : "";
    $note = array_key_exists('note', $_GET) ? $_GET['note'] : "";

    $formatterBreve = new IntlDateFormatter('it_IT', IntlDateFormatter::SHORT, IntlDateFormatter::SHORT);
    $formatterBreve->setPattern('E');

    $formatterLungo = new IntlDateFormatter('it_IT', IntlDateFormatter::SHORT, IntlDateFormatter::SHORT);
    $formatterLungo->setPattern('EEEE');

    $giornosettimana = $formatterBreve->format($dataselezionata);
    $giornosettimanaLungo = $formatterLungo->format($dataselezionata);
    ?>

	  <div class="row">
		<div class="col-lg-12">
			<h1 id="dataselezionatatesto"><?php echo $giornosettimanaLungo." ". $dataselezionata->format('d-m-Y'); ?></h1>
			
      <?php

      include 'config.php';

      $occupato = array();

      // segna tutti gli idorario occupati nel giorno
        try {

          $db = new PDO("mysql:host=$dbhost;port=$dbport;dbname=$dbname",$dbuser,$dbpswd);
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
          $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
          $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES UTF8');

          $sql = "SELECT * FROM app WHERE data = '".$dataDB."'";

          $result = $db->query($sql);
          foreach ($result as $row) {
              $row = get_object_vars($row);
              $occupato[$row['fkorario']] = $row['nome'];
          }
          // chiude il database
          $db = NULL;

        } catch (PDOException $e) {
          throw new PDOException("Error  : " . $e->getMessage());
        }
  

      // Aggiungi le righe degli orari
      try {

        $db = new PDO("mysql:host=$dbhost;port=$dbport;dbname=$dbname",$dbuser,$dbpswd);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES UTF8');

        //$sql = "SELECT * FROM orario WHERE giornosettimana = '".$giornosettimana."';";
        $sql = "SELECT * FROM orario WHERE  giornosettimana = '".$giornosettimana."';";
        
        $result = $db->query($sql);
        $primo = true;

        //var_dump($occupato); die();

        foreach ($result as $row) {
            $row = get_object_vars($row);
            
            // il primo elemento mettilo in autofocus e richesto
            $controllo = (array_key_exists($row['idorario'], $occupato) && $occupato[$row['idorario']] != '')?'disabled':'';
            $occupatonome = array_key_exists($row['idorario'], $occupato) ? $occupato[$row['idorario']] : "";
            //$attivo = $row['attivo'];
            /*
            if($primo == true) {
              // metti il selezionato sul primo orario disponibile
              echo "<div class='radio'><label><input type='radio' name='fkorario' id='".$row['idorario']."' value='".$row['idorario']."' ".$controllo." autofocus required>".$row['ora']." ".$occupatonome."</label></div>";  
              $primo = false;
            } else {
              echo "<div class='radio'><label><input type='radio' name='fkorario' id='".$row['idorario']."' value='".$row['idorario']."' ".$controllo." >".$row['ora']." ".$occupatonome."</label></div>";
            }
            */
             if($row['attivo']==1) {
              // metti il selezionato sul primo orario disponibile
              echo "<div class='radio'><label><input type='radio' name='fkorario' id='".$row['idorario']."' value='".$row['idorario']."' ".$controllo." required>".$row['ora']." ".$occupatonome."</label></div>"; 
            } else {
              echo "<div class='radio'><label><input type='radio' name='fkorario' id='".$row['idorario']."' value='".$row['idorario']."' ".$controllo." required><span style='color: red;'>".$row['ora']." ".$occupatonome."</span></label></div>";
            }
            
        }
        // chiude il database
        $db = NULL;
        
      } catch (PDOException $e) {
        throw new PDOException("Error  : " . $e->getMessage());
      }

      ?>
          
		</div>
	 </div>

    <div class="row">
		  <div class="col-lg-12">
        <h3>Nome: <?php echo $nome; ?></h3>
        <h3>Note: <?php echo $note; ?></h3>
      </div>
    </div>
    
    <input type="hidden" name="nome" value="<?php echo $nome; ?>">
    <input type="hidden" name="note" value="<?php echo $note; ?>">
    <input type="hidden" name="data" value="<?php echo $dataselezionatatesto; ?>">

	  <hr>
	  <div class="row">
		  <div class="col-lg-12">
        <button type="submit" class="btn btn-block btn-primary btn-lg">INSERISCI APPUNTAMENTO</button>
      </div>
    </div>
	  	        	  
	  </form>
      <br>
	  <div class="footer">
        <p>2017 &copy; Archistico by Emilie Rollandin</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- jQuery (necessario per i plugin Javascript di Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Includi tutti i plugin compilati (sotto), o includi solo i file individuali necessari -->
    <script src="dist/bootstrap/js/bootstrap.min.js"></script>
	<script src="dist/air-datepicker/js/datepicker.min.js"></script>
	<!-- Include Italian language -->
    <script src="dist/air-datepicker/js/i18n/datepicker.it.js"></script>
	
  </body>
</html>
