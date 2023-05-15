<!DOCTYPE html>
<html>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<head>

	<title>Cari Buku - Perpustakaan</title>
	<link rel="icon" href="{{ URL::asset('img/smk.png') }}" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/bootstrap/css/bootstrap.css') }}">
	<link href="{{ URL::asset('/assetshome/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('/assetshome/css/style.css') }} " rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('/assetshome/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('/assetshome/css/responsive.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('/assetshome/css/animate.css') }}" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="{{ URL::asset('/bootstrap/js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('/assetshome/js/jquery.1.8.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('/assetshome/js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('/assetshome/js/jquery-scrolltofixed.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('/assetshome/js/jquery.easing.1.3.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('/assetshome/js/jquery.isotope.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('/assetshome/js/wow.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('/assetshome/js/classie.js') }}"></script>

</head>

<body>

	<nav class="main-nav-outer" id="test">
		<!--main-nav-start-->
		<div class="container">
			<ul class="main-nav">
  				<li class="small-logo">
					<a href="{{ route('index') }}">
						<center><img style="width: 50px;height: 50px" src="{{ URL::asset('img/smk.png') }}" alt=""></center>
					</a>
				</li>  		
			<a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
			</nav>
		<!--main-nav-end-->



			<section class="main-section contact" id="caribuku">
				<!--main-section-start-->
				<div class="container">
					<h2>Cari Buku</h2>
					<h6>Halaman Pencarian Buku Perpustakaan</h6>				
				</div>
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-5">
						<div class="form">
							<form action="" method="post" role="form" class="contactForm">						
								<div class="form-group">
									<textarea class="form-control input-text text-area" name="judulbuku" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Judul Buku"></textarea>
									<div class="validation"></div>
								</div>

								<div class="text-center"><button type="submit" class="input-btn">Cari Buku</button></div>
							</form>
						</div>
					</div>
					<div class="col-sm-5">
						<table class="table table-striped">
						<thead>
							<tr>
							<th scope="col">1</th>
							<th scope="col">First</th>
							<th scope="col">Last</th>
							<th scope="col">Handle</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
							</tr>
							<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
							</tr>
							<tr>
							<th scope="row">3</th>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
							</tr>
						</tbody>
						</table>
					</div>
					<div class="col-sm-1"></div>
				</div>
			</section>
		</div>
		<footer class="footer">
			<div class="container">
				<center><span>All Rights Reserved</span></center>
				<div class="credits">
					<a>Bootstrap UI</a> by <a href="https://bootstrapmade.com/">BootstrapFrontEnd</a>
				</div>
			</div>
		</footer>


	<script type="text/javascript">
		$(document).ready(function(e) {
			$('#test').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

		});
	</script>

	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
	</script>


	<script type="text/javascript">
		$(window).load(function() {

			$('.main-nav li a, .servicelink').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500, 'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				if ($(window).width() < 768) {
					$('.main-nav').hide();
				}
				event.preventDefault();
			});
		})
	</script>

	<script type="text/javascript">
		$(window).load(function() {


			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;


			$container.isotope({
				// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function() {
				// check if columns has changed
				var currentColumns = Math.floor(($body.width() - 30) / colW);
				if (currentColumns !== columns) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width(columns * colW)
						.isotope('reLayout');
				}

			}).smartresize(); // trigger resize to set container width
			$('.portfolioFilter a').click(function() {
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');

				var selector = $(this).attr('data-filter');
				$container.isotope({

					filter: selector,
				});
				return false;
			});

		});
	</script>
	</div>
</body>
</html>