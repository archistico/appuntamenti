
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
          <li><a href="index.php">Home</a></li>
          <!-- <li><a href="#">Nuovo</a></li> -->
          <li class="active"><a href="lista.php">Lista</a></li>
		  <li><a href="opzioni.php">Opzioni</a></li>
        </ul>
        <h3 class="text-muted">Dott.ssa Rollandin Christine</h3>
      </div>

      <div class="jumbotron">
        <h1>Appuntamenti</h1>
        <p class="lead">Sito dello studio in cui sono segnati gli appuntamenti</p>
      </div>

      <?php 

      // CARICA I DATI

      class Appuntamento {
        public $idapp;
        public $data;
        public $giornosettimana;
        public $fkorario;
        public $orario;
        public $nome;
        public $note;
      }

      include 'config.php';

      $appuntamenti = array();

      // segna tutti gli idorario occupati nel giorno
      try {

          $db = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpswd);
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
          $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
          $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES UTF8');

          $sql = "SELECT app.idapp, app.data, app.fkorario, app.nome, app.note, orario.ora
                  FROM app
                  INNER JOIN orario ON app.fkorario = orario.idorario
                  ORDER BY app.data DESC, app.fkorario ASC
                  ";

          $result = $db->query($sql);
          foreach ($result as $row) {
              $row = get_object_vars($row);
              $appuntamenti[$row['idapp']] = new Appuntamento();
              $appuntamenti[$row['idapp']]->idapp = $row['idapp'];
              $data = DateTime::createFromFormat('Y-m-d', $row['data']);
              $appuntamenti[$row['idapp']]->data = $data->format('d-m-Y');
              $formatterLungo = new IntlDateFormatter('it_IT', IntlDateFormatter::SHORT, IntlDateFormatter::SHORT);
              $formatterLungo->setPattern('EEEE');
              $appuntamenti[$row['idapp']]->giornosettimana = $formatterLungo->format($data);
              $appuntamenti[$row['idapp']]->fkorario = $row['fkorario'];
              $appuntamenti[$row['idapp']]->orario = $row['ora'];
              $appuntamenti[$row['idapp']]->nome = $row['nome'];
              $appuntamenti[$row['idapp']]->note = $row['note'];
          }
          // chiude il database
          $db = NULL;

      } catch (PDOException $e) {
         throw new PDOException("Error  : " . $e->getMessage());
      }
      
      //echo "<pre>"; var_dump($appuntamenti); echo "</pre>"; die();

      ?>

      <?php

      $giornoattuale = '';
      $giornoprecedente = '';
      foreach($appuntamenti as $app) {
        $giornoattuale = $app->data;
        if($giornoattuale != $giornoprecedente) {

          if(date("d-m-Y")==$giornoattuale) { 
            echo "<!-- GIORNO --><div class='row'><div class='col-lg-12'><h2 class='bg-primary'>$app->giornosettimana $giornoattuale - OGGI</h2></div></div>"; 
          } else {
            echo "<!-- GIORNO --><div class='row'><div class='col-lg-12'><h2>$app->giornosettimana $giornoattuale</h2></div></div>"; 
          }
          
        }
		    if($giornoattuale != $giornoprecedente) {echo "<!-- TABELLA --><div class='row'><div class='col-lg-12'><table class='table table-bordered'><thead><tr><th>Ora</th><th>Nome</th><th>Note</th></tr></thead><tbody>"; }
        
        if($giornoattuale != $giornoprecedente) {
        foreach($appuntamenti as $app) {
          if($app->data == $giornoattuale) {
              echo "<tr>";
              //echo "<td>"; echo $app->idapp; echo "</td>";
              echo "<td>"; echo $app->orario; echo "</td>";
              echo "<td>"; echo $app->nome; echo "</td>";
              echo "<td>"; echo $app->note; echo "</td>";
              echo "</tr>";
          }              
        }          
        }
        if($giornoattuale != $giornoprecedente) {echo "</tbody></table></div></div><!-- FINE TABELLA -->";}
        $giornoprecedente = $giornoattuale;
      }
        
      ?>
	  
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
