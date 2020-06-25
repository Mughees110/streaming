<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="{{asset('theme/css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/plyr.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/photoswipe.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/default-skin.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/main.css')}}">

	 <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{asset('theme/Logo.png')}}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{asset('theme/Logo.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('theme/Logo.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('theme/Logo.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('theme/Logo.png')}}">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>MINVIU</title>

</head>
<body class="body">

	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					@if (\Session::has('message'))
				    <div class="alert alert-success alert-dismissible" style="background-color: #1095A6">
				      <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="color: white">&times;</button>
				        <h5 style="color: white; text-align: center;"><i class="icon fas fa-check"></i> Alert!</h5>
				          <p style="color: white; text-align: center;">{!! \Session::get('message') !!}</p>
				    </div>
				    @endif
					<div class="sign__content">
						<!-- registration form -->
						<form action="{{url('store-signin')}}" class="sign__form" method="post">
							{{ csrf_field() }}
							<a href="{{url('/')}}" class="sign__logo">
								<img src="{{asset('theme/Logo.png')}}" alt="">
							</a>

							

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Email" name="email" required>
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Password" name="password" required>
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">I agree to the <a href="#">Privacy Policy</a></label>
							</div>
							
							<button class="sign__btn" type="submit">Sign in</button>

							
						</form>
						<!-- registration form -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="{{asset('theme/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('theme/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('theme/js/jquery.mousewheel.min.js')}}"></script>
	<script src="{{asset('theme/js/jquery.mCustomScrollbar.min.js')}}"></script>
	<script src="{{asset('theme/js/wNumb.js')}}"></script>
	<script src="{{asset('theme/js/nouislider.min.js')}}"></script>
	<script src="{{asset('theme/js/plyr.min.js')}}"></script>
	<script src="{{asset('theme/js/jquery.morelines.min.js')}}"></script>
	<script src="{{asset('theme/js/photoswipe.min.js')}}"></script>
	<script src="{{asset('theme/js/photoswipe-ui-default.min.js')}}"></script>
	<script src="{{asset('theme/js/main.js')}}"></script>
</body>
</html>