<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="CJ Patoilo">
	<meta name="description" content="Milligram provides a minimal setup of styles for a fast and clean starting point. Specially designed for better performance and higher productivity with fewer properties to reset resulting in cleaner code.">
	<title>ProfilPlus+</title>
	<link rel="icon" href="<?php echo base_url() ?>assets/image/icon.png">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/pace.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/Semantic/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/DataTables/datatables.min.css"/>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/moment.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/Semantic/semantic.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/DataTables/datatables.min.js"></script>
</head>
<body>
	<div class="ui container">
		<div class="ui grid">
		  <div class="row">
		    <div class="four wide column" style="padding-top: 3em"><h1><button class="massive ui teal button"><i class="user plus icon"></i> Profil<b>Plus</b></h1></button></div>
		  </div>
		  <div class="row" style="margin-top: -1em">
			  <div class="eight wide column">KPP Pratama Jakarta Grogol Petamburan</div>
			  <div class="right aligned eight wide column">
			  	<button onclick="window.location.href='<?php echo base_url() ?>auth'" class="ui mini facebook button">
				  <i class="user icon"></i>Masuk untuk dapat mengubah data
				</button>
				<button class="ui mini twitter button">
				  <i class="user icon"></i>Selamat datang, Username
				</button>
				<button class="ui mini youtube button">
				  Keluar
				</button>
			  </div>
		  </div>
		  <div class="row" style="margin-top: -1em">
			  <div class="six wide column">Jl. Letjen. S. Parman No.102, RT.2/RW.1, Tomang, Kec. Grogol Petamburan, Kota Jakarta Barat, DKI Jakarta 11440</div>
			  <div class="right aligned ten wide column"><script> document.write(moment().locale('id').format('dddd, LL'))</script></div>
		  </div>
		</div>