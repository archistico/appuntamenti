
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
          <div class="checkbox"><label><input type="checkbox" name="800" value=""> 8:00 - 8:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="815" value=""> 8:15 - 8:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="830" value=""> 8:30 - 8:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="845" value=""> 8:45 - 9:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="900" value=""> 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="915" value=""> 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="930" value=""> 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="945" value=""> 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1000" value=""> 10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1015" value=""> 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1030" value=""> 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1045" value=""> 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1100" value=""> 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1115" value=""> 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1130" value=""> 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1145" value=""> 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1200" value=""> 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1215" value=""> 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1230" value=""> 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1245" value=""> 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1300" value=""> 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1315" value=""> 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1330" value=""> 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1345" value=""> 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1400" value=""> 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1415" value=""> 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1430" value=""> 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1445" value=""> 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1500" value=""> 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1515" value=""> 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1530" value=""> 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1545" value=""> 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1600" value=""> 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1615" value=""> 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1630" value=""> 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1645" value=""> 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1700" value=""> 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1715" value=""> 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1730" value=""> 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1745" value=""> 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1800" value=""> 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1815" value=""> 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1830" value=""> 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1845" value=""> 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2000" value=""> 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2015" value=""> 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2030" value=""> 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2045" value=""> 20:45 - 21:00</label></div>
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
          <div class="checkbox"><label><input type="checkbox" name="800" value=""> 8:00 - 8:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="815" value=""> 8:15 - 8:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="830" value=""> 8:30 - 8:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="845" value=""> 8:45 - 9:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="900" value=""> 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="915" value=""> 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="930" value=""> 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="945" value=""> 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1000" value=""> 10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1015" value=""> 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1030" value=""> 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1045" value=""> 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1100" value=""> 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1115" value=""> 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1130" value=""> 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1145" value=""> 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1200" value=""> 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1215" value=""> 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1230" value=""> 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1245" value=""> 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1300" value=""> 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1315" value=""> 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1330" value=""> 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1345" value=""> 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1400" value=""> 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1415" value=""> 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1430" value=""> 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1445" value=""> 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1500" value=""> 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1515" value=""> 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1530" value=""> 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1545" value=""> 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1600" value=""> 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1615" value=""> 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1630" value=""> 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1645" value=""> 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1700" value=""> 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1715" value=""> 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1730" value=""> 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1745" value=""> 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1800" value=""> 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1815" value=""> 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1830" value=""> 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1845" value=""> 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2000" value=""> 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2015" value=""> 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2030" value=""> 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2045" value=""> 20:45 - 21:00</label></div>
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
          <div class="checkbox"><label><input type="checkbox" name="800" value=""> 8:00 - 8:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="815" value=""> 8:15 - 8:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="830" value=""> 8:30 - 8:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="845" value=""> 8:45 - 9:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="900" value=""> 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="915" value=""> 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="930" value=""> 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="945" value=""> 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1000" value=""> 10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1015" value=""> 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1030" value=""> 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1045" value=""> 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1100" value=""> 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1115" value=""> 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1130" value=""> 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1145" value=""> 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1200" value=""> 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1215" value=""> 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1230" value=""> 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1245" value=""> 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1300" value=""> 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1315" value=""> 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1330" value=""> 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1345" value=""> 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1400" value=""> 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1415" value=""> 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1430" value=""> 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1445" value=""> 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1500" value=""> 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1515" value=""> 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1530" value=""> 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1545" value=""> 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1600" value=""> 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1615" value=""> 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1630" value=""> 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1645" value=""> 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1700" value=""> 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1715" value=""> 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1730" value=""> 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1745" value=""> 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1800" value=""> 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1815" value=""> 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1830" value=""> 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1845" value=""> 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2000" value=""> 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2015" value=""> 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2030" value=""> 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2045" value=""> 20:45 - 21:00</label></div>
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
          <div class="checkbox"><label><input type="checkbox" name="800" value=""> 8:00 - 8:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="815" value=""> 8:15 - 8:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="830" value=""> 8:30 - 8:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="845" value=""> 8:45 - 9:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="900" value=""> 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="915" value=""> 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="930" value=""> 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="945" value=""> 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1000" value=""> 10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1015" value=""> 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1030" value=""> 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1045" value=""> 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1100" value=""> 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1115" value=""> 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1130" value=""> 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1145" value=""> 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1200" value=""> 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1215" value=""> 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1230" value=""> 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1245" value=""> 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1300" value=""> 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1315" value=""> 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1330" value=""> 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1345" value=""> 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1400" value=""> 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1415" value=""> 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1430" value=""> 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1445" value=""> 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1500" value=""> 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1515" value=""> 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1530" value=""> 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1545" value=""> 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1600" value=""> 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1615" value=""> 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1630" value=""> 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1645" value=""> 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1700" value=""> 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1715" value=""> 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1730" value=""> 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1745" value=""> 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1800" value=""> 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1815" value=""> 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1830" value=""> 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1845" value=""> 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2000" value=""> 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2015" value=""> 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2030" value=""> 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2045" value=""> 20:45 - 21:00</label></div>
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
          <div class="checkbox"><label><input type="checkbox" name="800" value=""> 8:00 - 8:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="815" value=""> 8:15 - 8:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="830" value=""> 8:30 - 8:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="845" value=""> 8:45 - 9:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="900" value=""> 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="915" value=""> 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="930" value=""> 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="945" value=""> 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1000" value=""> 10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1015" value=""> 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1030" value=""> 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1045" value=""> 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1100" value=""> 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1115" value=""> 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1130" value=""> 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1145" value=""> 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1200" value=""> 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1215" value=""> 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1230" value=""> 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1245" value=""> 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1300" value=""> 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1315" value=""> 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1330" value=""> 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1345" value=""> 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1400" value=""> 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1415" value=""> 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1430" value=""> 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1445" value=""> 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1500" value=""> 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1515" value=""> 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1530" value=""> 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1545" value=""> 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1600" value=""> 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1615" value=""> 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1630" value=""> 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1645" value=""> 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1700" value=""> 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1715" value=""> 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1730" value=""> 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1745" value=""> 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1800" value=""> 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1815" value=""> 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1830" value=""> 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1845" value=""> 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2000" value=""> 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2015" value=""> 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2030" value=""> 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2045" value=""> 20:45 - 21:00</label></div>
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
          <div class="checkbox"><label><input type="checkbox" name="800" value=""> 8:00 - 8:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="815" value=""> 8:15 - 8:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="830" value=""> 8:30 - 8:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="845" value=""> 8:45 - 9:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="900" value=""> 9:00 - 9:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="915" value=""> 9:15 - 9:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="930" value=""> 9:30 - 9:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="945" value=""> 9:45 - 10:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1000" value=""> 10:00 - 10:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1015" value=""> 10:15 - 10:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1030" value=""> 10:30 - 10:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1045" value=""> 10:45 - 11:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1100" value=""> 11:00 - 11:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1115" value=""> 11:15 - 11:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1130" value=""> 11:30 - 11:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1145" value=""> 11:45 - 12:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1200" value=""> 12:00 - 12:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1215" value=""> 12:15 - 12:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1230" value=""> 12:30 - 12:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1245" value=""> 12:45 - 13:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1300" value=""> 13:00 - 13:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1315" value=""> 13:15 - 13:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1330" value=""> 13:30 - 13:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1345" value=""> 13:45 - 14:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1400" value=""> 14:00 - 14:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1415" value=""> 14:15 - 14:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1430" value=""> 14:30 - 14:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1445" value=""> 14:45 - 15:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1500" value=""> 15:00 - 15:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1515" value=""> 15:15 - 15:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1530" value=""> 15:30 - 15:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1545" value=""> 15:45 - 16:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1600" value=""> 16:00 - 16:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1615" value=""> 16:15 - 16:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1630" value=""> 16:30 - 16:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1645" value=""> 16:45 - 17:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1700" value=""> 17:00 - 17:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1715" value=""> 17:15 - 17:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1730" value=""> 17:30 - 17:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1745" value=""> 17:45 - 18:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1800" value=""> 18:00 - 18:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1815" value=""> 18:15 - 18:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1830" value=""> 18:30 - 18:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="1845" value=""> 18:45 - 19:00</label></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2000" value=""> 20:00 - 20:15</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2015" value=""> 20:15 - 20:30</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2030" value=""> 20:30 - 20:45</label></div>
        </div>
        <div class="col-lg-3">
          <div class="checkbox"><label><input type="checkbox" name="2045" value=""> 20:45 - 21:00</label></div>
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
