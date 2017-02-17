<?php
include 'php/orario.php';
?>
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
    <link href="css/appuntamenti.css" rel="stylesheet">
	
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
          <li><a href="index.php">Home</a></li>
          <!-- <li><a href="#">Nuovo</a></li> -->
          <li><a href="lista.php">Lista</a></li>
		  <li class="active"><a href="opzionisql.php">Opzioni</a></li>
        </ul>
        <h3 class="text-muted">Dott.ssa Rollandin Christine</h3>
      </div>

      <div class="jumbotron">
        <h1>Appuntamenti</h1>
        <p class="lead">Sito dello studio in cui sono segnati gli appuntamenti</p>
      </div>

      <div>

      <form name="Form" action="modificaorarioambulatorio.php" method="get">

<div class="row">
      <div class="col-lg-12">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#lun" aria-controls="Lunedì" role="tab" data-toggle="tab">Lunedì</a></li>
    <li role="presentation"><a href="#mar" aria-controls="Martedì" role="tab" data-toggle="tab">Martedì</a></li>
    <li role="presentation"><a href="#mer" aria-controls="Mercoledì" role="tab" data-toggle="tab">Mercoledì</a></li>
    <li role="presentation"><a href="#gio" aria-controls="Giovedì" role="tab" data-toggle="tab">Giovedì</a></li>
    <li role="presentation"><a href="#ven" aria-controls="Venerdì" role="tab" data-toggle="tab">Venerdì</a></li>
    <li role="presentation"><a href="#sab" aria-controls="Sabato" role="tab" data-toggle="tab">Sabato</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="lun">
    
    <!-- LUNEDI -->
		  <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1>Lunedì</h1>
        </div>
      </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1" <?php orarioattivo(1); ?> > 8:00 - 8:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2" <?php orarioattivo(2); ?> > 8:15 - 8:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="3" <?php orarioattivo(3); ?> > 8:30 - 8:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="4" <?php orarioattivo(4); ?> > 8:45 - 9:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="5" <?php orarioattivo(); ?> > 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="6" <?php orarioattivo(); ?> > 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="7" <?php orarioattivo(); ?> > 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="8" <?php orarioattivo(); ?> > 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="9" <?php orarioattivo(); ?> >  10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="10" <?php orarioattivo(); ?> > 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="11" <?php orarioattivo(); ?> > 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="12" <?php orarioattivo(); ?> > 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="13" <?php orarioattivo(); ?> > 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="14" <?php orarioattivo(); ?> > 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="15" <?php orarioattivo(); ?> > 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="16" <?php orarioattivo(); ?> > 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="17" <?php orarioattivo(); ?> > 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="18" <?php orarioattivo(); ?> > 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="19" <?php orarioattivo(); ?> > 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="20" <?php orarioattivo(); ?> > 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="21" <?php orarioattivo(); ?> > 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="22" <?php orarioattivo(); ?> > 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="23" <?php orarioattivo(); ?> > 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="24" <?php orarioattivo(); ?> > 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="25" <?php orarioattivo(); ?> > 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="26" <?php orarioattivo(); ?> > 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="27" <?php orarioattivo(); ?> > 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="28" <?php orarioattivo(); ?> > 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="29" <?php orarioattivo(); ?> > 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="30" <?php orarioattivo(); ?> > 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="31" <?php orarioattivo(); ?> > 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="32" <?php orarioattivo(); ?> > 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="33" <?php orarioattivo(); ?> > 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="34" <?php orarioattivo(); ?> > 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="35" <?php orarioattivo(); ?> > 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="36" <?php orarioattivo(); ?> > 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="37" <?php orarioattivo(); ?> > 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="38" <?php orarioattivo(); ?> > 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="39" <?php orarioattivo(); ?> > 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="40" <?php orarioattivo(); ?> > 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="41" <?php orarioattivo(); ?> > 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="42" <?php orarioattivo(); ?> > 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="43" <?php orarioattivo(); ?> > 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="44" <?php orarioattivo(); ?> > 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="45" <?php orarioattivo(); ?> > 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="46" <?php orarioattivo(); ?> > 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="47" <?php orarioattivo(); ?> > 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="48" <?php orarioattivo(); ?> > 20:45 - 21:00</label></div>
        </div>
      </div>

      <!-- FINE LUNEDI -->

    </div>
    
    <div role="tabpanel" class="tab-pane fade" id="mar">
      <!-- MARTEDI -->
		  <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1>Martedì</h1>
        </div>
      </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:00 - 8:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:15 - 8:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:30 - 8:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:45 - 9:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:45 - 21:00</label></div>
        </div>
      </div>

      <!-- FINE MARTEDI -->
    </div>
    
    <div role="tabpanel" class="tab-pane fade" id="mer">

    <!-- MERCOLEDI -->
		  <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1>Mercoledì</h1>
        </div>
      </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:00 - 8:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:15 - 8:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:30 - 8:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:45 - 9:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:45 - 21:00</label></div>
        </div>
      </div>

      <!-- FINE MERCOLEDI -->
    
    </div>
    
    <div role="tabpanel" class="tab-pane fade" id="gio">

    <!-- GIOVEDI -->
		  <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1>Giovedì</h1>
        </div>
      </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:00 - 8:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:15 - 8:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:30 - 8:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:45 - 9:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:45 - 21:00</label></div>
        </div>
      </div>

      <!-- FINE GIOVEDI -->
    
    </div>
    
    <div role="tabpanel" class="tab-pane fade" id="ven">

    <!-- VENERDI -->
		  <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1>Venerdì</h1>
        </div>
      </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:00 - 8:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:15 - 8:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:30 - 8:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:45 - 9:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:45 - 21:00</label></div>
        </div>
      </div>

      <!-- FINE VENERDI -->
    
    </div>
    
    <div role="tabpanel" class="tab-pane fade" id="sab">

    <!-- SABATO -->
		  <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1>Sabato</h1>
        </div>
      </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:00 - 8:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:15 - 8:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:30 - 8:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 8:45 - 9:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="" <?php orarioattivo(); ?> > 20:45 - 21:00</label></div>
        </div>
      </div>

      <!-- FINE SABATO -->
    
    </div>

  </div>  

</div>
</div>
</div>
		
      

      <hr>
	  <div class="row">
		<div class="col-lg-6">
          <button type="reset" class="btn btn-block btn-default btn-lg">CANCELLA</button>
        </div>
        <div class="col-lg-6">
          <button type="submit" class="btn btn-block btn-primary btn-lg">MODIFICA</button>
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
