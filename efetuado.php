<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Material Kit by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
	

</head>

<body class="index-page">



<!-- Navbar -->
<nav class="navbar  navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="index.php">
	        	<div class="logo-container">

	                    <img src="assets/img/logobiz.svg" alt="Crédito para pequenas Empresas" width="250" height="100" rel="tooltip" title="BIZCAPITAL" data-placement="bottom" data-html="true">




				</div>
	      	</a>
	    </div>


	</div>
</nav>
<!-- End Navbar -->
<br><br><br><br><br>
<br><br><br><br><br>

	<div id="simulador" class="main main-raised">
		<div class="section section-basic">
	    	<div class="container">
	            <div class="title text-center">
	            	<script src="https://github.com/igorescobar/jQuery-Mask-Plugin/blob/master/dist/jquery.mask.min.js"></script>
	              
					<script type="text/javascript">
						new Vue({
							el: '#form',
							data: {
								hello: 'hello world'
							}
						})
					</script>


					
							<input class="form-control" type="hidden"  id="" name="" value="<?php echo $_GET['valoremprestimo'];?>"  >
							<input class="form-control" type="hidden"  id="" name="" value="<?php echo $_GET['optionsCheckboxes'];?>"  >
							<input class="form-control" type="hidden"  id="" name="" value="<?php echo $_GET['juros'];?>"  >
						<h3 class=" label-success" style="color:#fff; border-radius:20px ">PARABÉNS SEU EMPRÉSTIMO FOI EFETUADO</h3>

							<table class="table table-striped">
								    <thead class="text-center">
								      <tr>
								        <th class="text-center">Valor do Empréstimo</th>
								        <th class="text-center">Parcelas a Pagar</th>
								        <th class="text-center">Juros sobre o Valor</th>
								      </tr>
								    </thead>
								    <tbody>
								      <tr>
								        <td><?php echo $_GET['valoremprestimo'];?></td>
								        <td><?php echo $_GET['optionsCheckboxes'];?><b>X</b></td>
								        <td id="jurosnum"><?php echo $_GET['juros'];?></td>

								        
								      </tr>
								     
								    </tbody>
						  	</table>
					

				
				
				<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.25/vue.min.js"></script>
				<script>
					    new Vue({
					        el: 'body',
					        data: {
					         
					        },
					        computed: {
					          isValid: function () {
					            return this.name != '' && this.email != ''
					          }
					        }
					    })
					    </script>



					</div>
	            </div>





				<div class="space-70"></div>






		        </div>
	    	</div>
	    </div>

	    <div class="section section-navbars">
	        <div class="container" id="menu-dropdown">

				<div class="row">



	                </div>
	            </div>
	            <div class="title">

	            </div>
	        </div>
</body>
	<!--   Core JS Files   -->
	
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/juros.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>


	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>
  <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>
</html>