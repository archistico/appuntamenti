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
          <div class="checkbox"><label><input type="checkbox" name="5" <?php orarioattivo(5); ?> > 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="6" <?php orarioattivo(6); ?> > 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="7" <?php orarioattivo(7); ?> > 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="8" <?php orarioattivo(8); ?> > 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="9" <?php orarioattivo(9); ?> >  10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="10" <?php orarioattivo(10); ?> > 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="11" <?php orarioattivo(11); ?> > 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="12" <?php orarioattivo(12); ?> > 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="13" <?php orarioattivo(13); ?> > 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="14" <?php orarioattivo(14); ?> > 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="15" <?php orarioattivo(15); ?> > 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="16" <?php orarioattivo(16); ?> > 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="17" <?php orarioattivo(17); ?> > 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="18" <?php orarioattivo(18); ?> > 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="19" <?php orarioattivo(19); ?> > 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="20" <?php orarioattivo(20); ?> > 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="21" <?php orarioattivo(21); ?> > 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="22" <?php orarioattivo(22); ?> > 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="23" <?php orarioattivo(23); ?> > 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="24" <?php orarioattivo(24); ?> > 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="25" <?php orarioattivo(25); ?> > 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="26" <?php orarioattivo(26); ?> > 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="27" <?php orarioattivo(27); ?> > 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="28" <?php orarioattivo(28); ?> > 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="29" <?php orarioattivo(29); ?> > 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="30" <?php orarioattivo(30); ?> > 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="31" <?php orarioattivo(31); ?> > 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="32" <?php orarioattivo(32); ?> > 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="33" <?php orarioattivo(33); ?> > 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="34" <?php orarioattivo(34); ?> > 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="35" <?php orarioattivo(35); ?> > 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="36" <?php orarioattivo(36); ?> > 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="37" <?php orarioattivo(37); ?> > 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="38" <?php orarioattivo(38); ?> > 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="39" <?php orarioattivo(39); ?> > 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="40" <?php orarioattivo(40); ?> > 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="41" <?php orarioattivo(41); ?> > 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="42" <?php orarioattivo(42); ?> > 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="43" <?php orarioattivo(43); ?> > 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="44" <?php orarioattivo(44); ?> > 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="45" <?php orarioattivo(45); ?> > 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="46" <?php orarioattivo(46); ?> > 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="47" <?php orarioattivo(47); ?> > 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="48" <?php orarioattivo(48); ?> > 20:45 - 21:00</label></div>
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
          <div class="checkbox"><label><input type="checkbox" name="49" <?php orarioattivo(49); ?> > 8:00 - 8:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="50" <?php orarioattivo(50); ?> > 8:15 - 8:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="51" <?php orarioattivo(51); ?> > 8:30 - 8:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="52" <?php orarioattivo(52); ?> > 8:45 - 9:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="53" <?php orarioattivo(53); ?> > 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="54" <?php orarioattivo(54); ?> > 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="55" <?php orarioattivo(55); ?> > 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="56" <?php orarioattivo(56); ?> > 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="57" <?php orarioattivo(57); ?> > 10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="58" <?php orarioattivo(58); ?> > 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="59" <?php orarioattivo(59); ?> > 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="60" <?php orarioattivo(60); ?> > 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="61" <?php orarioattivo(61); ?> > 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="62" <?php orarioattivo(62); ?> > 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="63" <?php orarioattivo(63); ?> > 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="64" <?php orarioattivo(64); ?> > 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="65" <?php orarioattivo(65); ?> > 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="66" <?php orarioattivo(66); ?> > 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="67" <?php orarioattivo(67); ?> > 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="68" <?php orarioattivo(68); ?> > 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="69" <?php orarioattivo(69); ?> > 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="70" <?php orarioattivo(70); ?> > 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="71" <?php orarioattivo(71); ?> > 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="72" <?php orarioattivo(72); ?> > 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="73" <?php orarioattivo(73); ?> > 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="74" <?php orarioattivo(74); ?> > 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="75" <?php orarioattivo(75); ?> > 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="76" <?php orarioattivo(76); ?> > 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="77" <?php orarioattivo(77); ?> > 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="78" <?php orarioattivo(78); ?> > 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="79" <?php orarioattivo(79); ?> > 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="80" <?php orarioattivo(80); ?> > 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="81" <?php orarioattivo(81); ?> > 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="82" <?php orarioattivo(82); ?> > 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="83" <?php orarioattivo(83); ?> > 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="84" <?php orarioattivo(84); ?> > 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="85" <?php orarioattivo(85); ?> > 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="86" <?php orarioattivo(86); ?> > 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="87" <?php orarioattivo(87); ?> > 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="88" <?php orarioattivo(88); ?> > 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="89" <?php orarioattivo(89); ?> > 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="90" <?php orarioattivo(90); ?> > 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="91" <?php orarioattivo(91); ?> > 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="92" <?php orarioattivo(92); ?> > 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="93" <?php orarioattivo(93); ?> > 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="94" <?php orarioattivo(94); ?> > 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="95" <?php orarioattivo(95); ?> > 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="96" <?php orarioattivo(96); ?> > 20:45 - 21:00</label></div>
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
          <div class="checkbox"><label><input type="checkbox" name="97" <?php orarioattivo(97); ?> > 8:00 - 8:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="98" <?php orarioattivo(98); ?> > 8:15 - 8:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="99" <?php orarioattivo(99); ?> > 8:30 - 8:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="100" <?php orarioattivo(100); ?> > 8:45 - 9:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="101" <?php orarioattivo(101); ?> > 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="102" <?php orarioattivo(102); ?> > 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="103" <?php orarioattivo(103); ?> > 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="104" <?php orarioattivo(104); ?> > 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="105" <?php orarioattivo(105); ?> > 10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="106" <?php orarioattivo(106); ?> > 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="107" <?php orarioattivo(107); ?> > 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="108" <?php orarioattivo(108); ?> > 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="109" <?php orarioattivo(109); ?> > 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="110" <?php orarioattivo(110); ?> > 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="111" <?php orarioattivo(111); ?> > 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="112" <?php orarioattivo(112); ?> > 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="113" <?php orarioattivo(113); ?> > 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="114" <?php orarioattivo(114); ?> > 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="115" <?php orarioattivo(115); ?> > 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="116" <?php orarioattivo(116); ?> > 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="117" <?php orarioattivo(117); ?> > 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="118" <?php orarioattivo(118); ?> > 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="119" <?php orarioattivo(119); ?> > 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="120" <?php orarioattivo(120); ?> > 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="121" <?php orarioattivo(121); ?> > 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="122" <?php orarioattivo(122); ?> > 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="123" <?php orarioattivo(123); ?> > 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="124" <?php orarioattivo(124); ?> > 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="125" <?php orarioattivo(125); ?> > 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="126" <?php orarioattivo(126); ?> > 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="127" <?php orarioattivo(127); ?> > 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="128" <?php orarioattivo(128); ?> > 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="129" <?php orarioattivo(129); ?> > 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="130" <?php orarioattivo(130); ?> > 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="131" <?php orarioattivo(131); ?> > 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="132" <?php orarioattivo(132); ?> > 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="133" <?php orarioattivo(133); ?> > 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="134" <?php orarioattivo(134); ?> > 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="135" <?php orarioattivo(135); ?> > 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="136" <?php orarioattivo(136); ?> > 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="137" <?php orarioattivo(137); ?> > 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="138" <?php orarioattivo(138); ?> > 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="139" <?php orarioattivo(139); ?> > 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="140" <?php orarioattivo(140); ?> > 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="141" <?php orarioattivo(141); ?> > 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="142" <?php orarioattivo(142); ?> > 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="143" <?php orarioattivo(143); ?> > 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="144" <?php orarioattivo(144); ?> > 20:45 - 21:00</label></div>
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
          <div class="checkbox"><label><input type="checkbox" name="145" <?php orarioattivo(145); ?> > 8:00 - 8:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="146" <?php orarioattivo(146); ?> > 8:15 - 8:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="147" <?php orarioattivo(147); ?> > 8:30 - 8:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="148" <?php orarioattivo(148); ?> > 8:45 - 9:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="149" <?php orarioattivo(149); ?> > 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="150" <?php orarioattivo(150); ?> > 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="151" <?php orarioattivo(151); ?> > 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="152" <?php orarioattivo(152); ?> > 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="153" <?php orarioattivo(153); ?> > 10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="154" <?php orarioattivo(154); ?> > 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="155" <?php orarioattivo(155); ?> > 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="156" <?php orarioattivo(156); ?> > 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="157" <?php orarioattivo(157); ?> > 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="158" <?php orarioattivo(158); ?> > 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="159" <?php orarioattivo(159); ?> > 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="160" <?php orarioattivo(160); ?> > 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="161" <?php orarioattivo(161); ?> > 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="162" <?php orarioattivo(162); ?> > 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="163" <?php orarioattivo(163); ?> > 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="164" <?php orarioattivo(164); ?> > 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="165" <?php orarioattivo(165); ?> > 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="166" <?php orarioattivo(166); ?> > 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="167" <?php orarioattivo(167); ?> > 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="168" <?php orarioattivo(168); ?> > 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="169" <?php orarioattivo(169); ?> > 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="170" <?php orarioattivo(170); ?> > 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="171" <?php orarioattivo(171); ?> > 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="172" <?php orarioattivo(172); ?> > 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="173" <?php orarioattivo(173); ?> > 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="174" <?php orarioattivo(174); ?> > 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="175" <?php orarioattivo(175); ?> > 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="176" <?php orarioattivo(176); ?> > 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="177" <?php orarioattivo(177); ?> > 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="178" <?php orarioattivo(178); ?> > 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="179" <?php orarioattivo(179); ?> > 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="180" <?php orarioattivo(180); ?> > 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="181" <?php orarioattivo(181); ?> > 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="182" <?php orarioattivo(182); ?> > 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="183" <?php orarioattivo(183); ?> > 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="184" <?php orarioattivo(184); ?> > 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="185" <?php orarioattivo(185); ?> > 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="186" <?php orarioattivo(186); ?> > 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="187" <?php orarioattivo(187); ?> > 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="188" <?php orarioattivo(188); ?> > 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="189" <?php orarioattivo(189); ?> > 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="190" <?php orarioattivo(190); ?> > 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="191" <?php orarioattivo(191); ?> > 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="192" <?php orarioattivo(192); ?> > 20:45 - 21:00</label></div>
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
          <div class="checkbox"><label><input type="checkbox" name="193" <?php orarioattivo(193); ?> > 8:00 - 8:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="194" <?php orarioattivo(194); ?> > 8:15 - 8:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="195" <?php orarioattivo(195); ?> > 8:30 - 8:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="196" <?php orarioattivo(196); ?> > 8:45 - 9:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="197" <?php orarioattivo(197); ?> > 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="198" <?php orarioattivo(198); ?> > 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="199" <?php orarioattivo(199); ?> > 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="200" <?php orarioattivo(200); ?> > 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="201" <?php orarioattivo(201); ?> > 10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="202" <?php orarioattivo(202); ?> > 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="203" <?php orarioattivo(203); ?> > 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="204" <?php orarioattivo(204); ?> > 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="205" <?php orarioattivo(205); ?> > 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="206" <?php orarioattivo(206); ?> > 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="207" <?php orarioattivo(207); ?> > 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="208" <?php orarioattivo(208); ?> > 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="209" <?php orarioattivo(209); ?> > 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="210" <?php orarioattivo(210); ?> > 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="211" <?php orarioattivo(211); ?> > 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="212" <?php orarioattivo(212); ?> > 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="213" <?php orarioattivo(213); ?> > 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="214" <?php orarioattivo(214); ?> > 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="215" <?php orarioattivo(215); ?> > 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="216" <?php orarioattivo(216); ?> > 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="217" <?php orarioattivo(217); ?> > 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="218" <?php orarioattivo(218); ?> > 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="219" <?php orarioattivo(219); ?> > 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="220" <?php orarioattivo(220); ?> > 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="221" <?php orarioattivo(221); ?> > 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="222" <?php orarioattivo(222); ?> > 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="223" <?php orarioattivo(223); ?> > 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="224" <?php orarioattivo(224); ?> > 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="225" <?php orarioattivo(225); ?> > 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="226" <?php orarioattivo(226); ?> > 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="227" <?php orarioattivo(227); ?> > 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="228" <?php orarioattivo(228); ?> > 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="229" <?php orarioattivo(229); ?> > 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="230" <?php orarioattivo(230); ?> > 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="231" <?php orarioattivo(231); ?> > 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="232" <?php orarioattivo(232); ?> > 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="233" <?php orarioattivo(233); ?> > 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="234" <?php orarioattivo(234); ?> > 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="235" <?php orarioattivo(235); ?> > 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="236" <?php orarioattivo(236); ?> > 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="237" <?php orarioattivo(237); ?> > 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="238" <?php orarioattivo(238); ?> > 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="239" <?php orarioattivo(239); ?> > 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="240" <?php orarioattivo(240); ?> > 20:45 - 21:00</label></div>
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
          <div class="checkbox"><label><input type="checkbox" name="241" <?php orarioattivo(241); ?> > 8:00 - 8:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="242" <?php orarioattivo(242); ?> > 8:15 - 8:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="243" <?php orarioattivo(243); ?> > 8:30 - 8:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="244" <?php orarioattivo(244); ?> > 8:45 - 9:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="245" <?php orarioattivo(245); ?> > 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="246" <?php orarioattivo(246); ?> > 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="247" <?php orarioattivo(247); ?> > 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="248" <?php orarioattivo(248); ?> > 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="249" <?php orarioattivo(249); ?> > 10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="250" <?php orarioattivo(250); ?> > 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="251" <?php orarioattivo(251); ?> > 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="252" <?php orarioattivo(252); ?> > 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="253" <?php orarioattivo(253); ?> > 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="254" <?php orarioattivo(254); ?> > 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="255" <?php orarioattivo(255); ?> > 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="256" <?php orarioattivo(256); ?> > 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="257" <?php orarioattivo(257); ?> > 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="258" <?php orarioattivo(258); ?> > 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="259" <?php orarioattivo(259); ?> > 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="260" <?php orarioattivo(260); ?> > 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="261" <?php orarioattivo(261); ?> > 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="262" <?php orarioattivo(262); ?> > 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="263" <?php orarioattivo(263); ?> > 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="264" <?php orarioattivo(264); ?> > 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="265" <?php orarioattivo(265); ?> > 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="266" <?php orarioattivo(266); ?> > 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="267" <?php orarioattivo(267); ?> > 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="268" <?php orarioattivo(268); ?> > 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="269" <?php orarioattivo(269); ?> > 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="270" <?php orarioattivo(270); ?> > 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="271" <?php orarioattivo(271); ?> > 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="272" <?php orarioattivo(272); ?> > 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="273" <?php orarioattivo(273); ?> > 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="274" <?php orarioattivo(274); ?> > 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="275" <?php orarioattivo(275); ?> > 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="276" <?php orarioattivo(276); ?> > 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="277" <?php orarioattivo(277); ?> > 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="278" <?php orarioattivo(278); ?> > 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="279" <?php orarioattivo(279); ?> > 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="280" <?php orarioattivo(280); ?> > 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="281" <?php orarioattivo(281); ?> > 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="282" <?php orarioattivo(282); ?> > 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="283" <?php orarioattivo(283); ?> > 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="284" <?php orarioattivo(284); ?> > 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="285" <?php orarioattivo(285); ?> > 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="286" <?php orarioattivo(286); ?> > 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="287" <?php orarioattivo(287); ?> > 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="288" <?php orarioattivo(288); ?> > 20:45 - 21:00</label></div>
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
