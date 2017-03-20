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
          <li><a href="index.php">Home</a></li>
          <!-- <li><a href="#">Nuovo</a></li> -->
          <li><a href="lista.php">Lista</a></li>
		      <li><a href="opzioni.php">Opzioni</a></li>
          <li class="active"><a href="dafare.php">Da fare</a></li>
        </ul>
        <h3 class="text-muted corsivo">Dott.ssa Rollandin Christine</h3>
      </div>

      <div class="jumbotron">
        <h1 class="corsivo">Da fare</h1>
      </div>

      <?php
            session_start();
            if(isset($_SESSION['sqlerrori'])) {
                echo "<div class='alert alert-danger alert-dismissible'><h4><i class='icon fa fa-ban'></i> ATTENZIONE!</h4>Ci sono degli errori</div>";
                echo "<div class='alert alert-danger alert-dismissible'>".$_SESSION['sqlerrori']."</div>";
                unset($_SESSION['sqlerrori']);
            }

            if(isset($_SESSION['sqlok'])) {
                echo "<div class='alert alert-success alert-dismissible'><h4><i class='icon fa fa-check'></i> OK!</h4>Operazione riuscita</div>";
                unset($_SESSION['sqlok']);
            }

      ?>
		
		<form name="Form" action="compitoaggiungi.php" method="get">
      
	  <div class="row">
	    <div class="col-lg-12">      
		    <div class="form-group">
             <label>Scrivi il nuovo compito</label>
             <input type="text" class="form-control" placeholder="Da fare" name='dafare' required>
        </div>
      </div>
    </div>
	  <div class="row">
	    <div class="col-lg-12">
        <button type="submit" class="btn btn-block btn-primary btn-lg">AGGIUNGERE</button>
      </div>
    </div>
	  	  
	  </form>
    <br>


          <?php 

      // CARICA I DATI

      class Compito {
        public $idcompito;
        public $data;
        public $compito;
      }

      include 'config.php';

      $compiti = array();

      try {

          $db = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpswd);
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
          $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
          $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES UTF8');

          $sql = "SELECT *
                  FROM compiti
                  ORDER BY compiti.data DESC
                  ";

          $result = $db->query($sql);
          foreach ($result as $row) {
              $row = get_object_vars($row);
              $compiti[$row['idcompito']] = new Compito();
              $compiti[$row['idcompito']]->idcompito = $row['idcompito'];
              $data = DateTime::createFromFormat('Y-m-d', $row['data']);
              $compiti[$row['idcompito']]->data = $data->format('d-m-Y');
              $compiti[$row['idcompito']]->compito = $row['compito'];
          }
          // chiude il database
          $db = NULL;

      } catch (PDOException $e) {
         throw new PDOException("Error  : " . $e->getMessage());
      }
      
      //echo "<pre>"; var_dump($compiti); echo "</pre>"; die();
        
		    echo "<!-- TABELLA --><div class='row'><div class='col-lg-12'><h2>Lista compiti</h2><table class='table table-bordered'><thead><tr><th>Data</th><th>Compito</th><th>#</th></tr></thead><tbody>"; 
        
        foreach($compiti as $com) {
          
              echo "<tr>";
              echo "<td>"; echo $com->data; echo "</td>";
              echo "<td>"; echo $com->compito; echo "</td>";
              echo "<td style='width: 30px;margin-right: 3px; margin-bottom: 3px'><a class='btn btn-xs btn-danger' href='compitocancella.php?id=".$com->idcompito."' role='button'>X</a></td>";
              echo "</tr>";
                        
        }          
        
        echo "</tbody></table></div></div><!-- FINE TABELLA -->";
        
      
        
      ?>





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
	<script src="dist/moment/moment-with-locales.js"></script>
	
	
  </body>
</html>
