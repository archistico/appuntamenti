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
	
	<!-- Air-datepicker -->
	<link href="dist/air-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css">
    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="index.php">Home</a></li>
          <!-- <li><a href="#">Nuovo</a></li> -->
          <li><a href="lista.php">Lista</a></li>
		  <li><a href="opzioni.php">Opzioni</a></li>
        </ul>
        <h3 class="text-muted">Dott.ssa Rollandin Christine</h3>
      </div>

      <div class="jumbotron">
        <h1>Appuntamenti</h1>
        <p class="lead">Sito dello studio in cui sono segnati gli appuntamenti</p>
      </div>
		
		<form name="Form" action="selezionedata.php" method="get">
		
		<div class="row">
	    <div class="col-lg-12">
		<div class="progress">
			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">30%</div>
		</div>
		</div>
		</div>
      
	  <div class="row">
	  
		<div class="col-lg-6">
          <div class="datepicker-here" data-language='it' id="dataappuntamento"></div>
        </div>
	  
        <div class="col-lg-6">
		<div class="form-group">
             <label>Data selezionata</label>
             <h1 id="dataselezionatatesto"></h1>
			 <input type="hidden" name="dataselezionata" value="" id="dataselezionata" />
         </div>
          <div class="form-group">
             <label>Tipologia</label>
             <select class="form-control" style="width: 100%;" name='cliente' required>
                <option>15 minuti</option>
				<option>30 minuti</option>
				<option>45 minuti</option>
				<option>1 ora</option>
             </select>
         </div>
		 <div class="form-group">
             <label>Cognome Nome</label>
             <input type="text" class="form-control" placeholder="Cognome Nome" name='riferimento'>
         </div>
        </div>

        
      </div>
	
	 
	 <hr>
	  <div class="row">
		<div class="col-lg-6">
          <button type="reset" class="btn btn-block btn-default btn-lg">CANCELLA</button>
        </div>
        <div class="col-lg-6">
          <button type="submit" class="btn btn-block btn-primary btn-lg">AVANTI</button>
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
	<script src="dist/moment/moment-with-locales.js"></script>
	
	<script>
	$('#dataappuntamento').datepicker({
		onSelect: function onSelect(fd, date) {
			moment.locale('it');
			$('#dataselezionatatesto').html(moment(date).format('L'));
			$('#dataselezionata').val(moment(date).format('L'));
		}
	})
	</script>
  </body>
</html>
