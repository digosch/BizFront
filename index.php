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
	    	<a href="#">
	        	<div class="logo-container">

	                    <img src="assets/img/logobiz.svg" alt="Crédito para pequenas Empresas" width="250" height="100" rel="tooltip" title="<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>" data-placement="bottom" data-html="true">




				</div>
	      	</a>
	    </div>


	</div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('assets/img/business.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
						<h1>BizCapital</h1>
						<h3>Crédito rápido para pequenas empresas</h3>
						<a href="#simulador" class="btn btn-success page-scroll" >SIMULE JÁ</a></div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div id="simulador" class="main main-raised">
		<div class="section section-basic">
	    	<div class="container">
	            <div class="title text-center">
	            	<script src="https://github.com/igorescobar/jQuery-Mask-Plugin/blob/master/dist/jquery.mask.min.js"></script>
	                <h2>SIMULADOR DE EMPRÉSTIMO</h2>
					<script type="text/javascript">
						new Vue({
							el: '#form',
							data: {
								hello: 'hello world'
							}
						})
					</script>
					

			<?php include('simulador.php'); ?>
					
					</div>
				
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

<!-- Modal -->
  <div class="modal fade" id="modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
    </div>
<script>
$(document).ready(function(){
    $("#solicitar").click(function(){
        $("#modal").modal();
    });
});
</script>



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
