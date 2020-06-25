<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="{{asset('theme/admin/css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/admin/css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/admin/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('theme/admin/css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/admin/css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/admin/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/admin/css/admin.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<body>

	<!-- header -->
	<header class="header">
		<div class="header__content">
			<!-- header logo -->
			<a href="{{url('admin-panel')}}" class="header__logo">
				<img src="{{asset('theme/Logo.png')}}" alt="">
			</a>
			<!-- end header logo -->

			<!-- header menu btn -->
			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<!-- end header menu btn -->
		</div>
	</header>
	<!-- end header -->

	<!-- sidebar -->
	<div class="sidebar">
		<!-- sidebar logo -->
		<a href="{{url('admin-panel')}}" class="sidebar__logo">
			<img src="{{asset('theme/Logo.png')}}" alt="">
		</a>
		<!-- end sidebar logo -->
		
		<!-- sidebar user -->
		<div class="sidebar__user">
			<div class="sidebar__user-img">
				<img src="{{asset('theme/admin/img/user.svg')}}" alt="">
			</div>

			<div class="sidebar__user-title">
				<span>Admin</span>
				<p>{{Auth::user()->name}}</p>
			</div>

			<button class="sidebar__user-btn" type="button">
				<i class="icon ion-ios-log-out"></i>
			</button>
		</div>
		<!-- end sidebar user -->

		<!-- sidebar nav -->
		<ul class="sidebar__nav">
			<li class="sidebar__nav-item">
				<a href="{{url('admin-panel')}}" class="sidebar__nav-link sidebar__nav-link--active"><i class="icon ion-ios-keypad"></i> Dashboard</a>
			</li>

			<!--<li class="sidebar__nav-item">
				<a href="catalog.html" class="sidebar__nav-link"><i class="icon ion-ios-film"></i> Catalog</a>
			</li>-->

			<li class="sidebar__nav-item">
				<a href="{{url('all-user')}}" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> Users</a>
			</li>
			<li class="sidebar__nav-item">
				<a href="{{url('logout')}}" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> Logout</a>
			</li>
			<!--
			<li class="sidebar__nav-item">
				<a href="comments.html" class="sidebar__nav-link"><i class="icon ion-ios-chatbubbles"></i> Comments</a>
			</li>

			<li class="sidebar__nav-item">
				<a href="reviews.html" class="sidebar__nav-link"><i class="icon ion-ios-star-half"></i> Reviews</a>
			</li>-->
			
			<!-- dropdown 
			<li class="dropdown sidebar__nav-item">
				<a class="dropdown-toggle sidebar__nav-link" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-copy"></i> Pages</a>

				<ul class="dropdown-menu sidebar__dropdown-menu scrollbar-dropdown" aria-labelledby="dropdownMenuMore">
					<li><a href="add-item.html">Add item</a></li>
					<li><a href="edit-user.html">Edit user</a></li>
					<li><a href="signin.html">Sign In</a></li>
					<li><a href="signup.html">Sign Up</a></li>
					<li><a href="forgot.html">Forgot password</a></li>
					<li><a href="404.html">404 Page</a></li>
				</ul>
			</li>
			 end dropdown -->
			 
		</ul>
		<!-- end sidebar nav -->
<!-- sidebar copyright -->
		<div class="sidebar__copyright">© 2020 Minviu. <!--Designed & Developed by <a href="" target="_blank">Techelonstudios</a>--></div>
		<!-- end sidebar copyright -->		
	</div>
	<!-- end sidebar -->

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Dashboard</h2>

						<!--<a href="add-item.html" class="main__title-link">add item</a>-->
					</div>
				</div>
				<!-- end main title -->
				<div class="col-12">
					@if (\Session::has('message'))
				    <div class="alert alert-success alert-dismissible" style="background-color: #1095A6">
				      <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="color: white">&times;</button>
				        <h5 style="color: white; text-align: center;"><i class="icon fa fa-check"></i> Alert!</h5>
				          <p style="color: white; text-align: center;">{!! \Session::get('message') !!}</p>
				    </div>
				    @endif
				</div>

				<!-- stats -->
				<div class="col-12 col-sm-6 col-xl-3">
					<div class="stats">
						<span>Movies added</span>
						<?php
							$mC=\App\Movie::count();
						 ?>
						<p>@if(!empty($mC)){{$mC}}@endif</p>
						<i class="fa fa-film"></i>
					</div>
				</div>
				<!-- end stats -->

				<!-- stats -->
				<div class="col-12 col-sm-6 col-xl-3">
					<div class="stats">
						<span>Softwares added</span>
						<?php
							$mS=\App\Software::count();
							
						 ?>
						<p>@if(!empty($mS)){{$mS}}@endif</p>
						<i class="fa fa-cogs"></i>
					</div>
				</div>
				<!-- end stats -->

				<!-- stats -->
				<div class="col-12 col-sm-6 col-xl-3">
					<div class="stats">
						<span>Applications added</span>
						<?php
							$mA=\App\Application::count();
						 ?>
						<p>@if(!empty($mA)){{$mA}}@endif</p>
						<i class="fa fa-tv"></i>
					</div>
				</div>
				<!-- end stats -->

				<!-- stats -->
				<div class="col-12 col-sm-6 col-xl-3">
					<div class="stats">
						<span>Games added</span>
						<?php
							$mG=\App\Game::count();
						 ?>
						<p>@if(!empty($mG)){{$mG}}@endif</p>
						<i class="fa fa-gamepad"></i>
					</div>
				</div>
				<!-- end stats -->

				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><i class="fa fa-film"></i> Latest Movies</h3>

							<div class="dashbox__wrap">
								
								<a class="dashbox__more" href="{{url('all-movie')}}">View All</a>
								<a class="dashbox__more" href="{{url('create-movie')}}">Create</a>
							</div>
						</div>

						<div class="dashbox__table-wrap">
							<table class="main__table main__table--dash">
								<thead>
									<tr>
										<th>ID</th>
										<th>TITLE</th>
										<th>YEAR</th>
										<th>CATEGORY</th>
										<th>ACTION</th>
										
									</tr>
								</thead>
								<?php
									$movies=\App\Movie::take(5)->get();
								 ?>
								<tbody>
									@if(!empty($movies))
									@foreach($movies as $movie)
									<tr>
										<td>
											<div class="main__table-text">@if(!empty($movie)){{$movie->id}}@endif</div>
										</td>
										<td>
											<div class="main__table-text">@if(!empty($movie)){{$movie->title}}@endif</div>
										</td>
										<td>
											<div class="main__table-text">@if(!empty($movie)){{$movie->year}}@endif</div>
										</td>
										<td>
											@if($movie->type=="movie")
										<div class="main__table-text">Movie</div>
										@endif
										@if($movie->type=="show")
										<div class="main__table-text">TV show</div>
										@endif

										</td>
										<td>
										<div class="main__table-btns">
											
											<a href="{{url('view-movie/'.$movie->id)}}" class="main__table-btn main__table-btn--view">
												<i class="icon ion-ios-eye"></i>
											</a>
											<a href="{{url('edit-movie/'.$movie->id)}}" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
											<a href="#modal-delete<?php echo $movie->id ?>" class="main__table-btn main__table-btn--delete open-modal">
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
								<!-- modal delete -->
								<div id="modal-delete<?php echo $movie->id ?>" class="zoom-anim-dialog mfp-hide modal">
									<h6 class="modal__title">Item delete</h6>

									<p class="modal__text">Are you sure to permanently delete this item?</p>

									<div class="modal__btns">
										<a href="{{url('delete-movie/'.$movie->id)}}" class="modal__btn modal__btn--apply" type="button">Delete</a>
										<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
									</div>
								</div>
								<!-- end modal delete -->
									@endforeach
									@endif
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->

				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><i class="fa fa-cogs"></i> Latest Softwares</h3>

							<div class="dashbox__wrap">
								
								<a class="dashbox__more" href="{{url('all-software')}}">View All</a>
								<a class="dashbox__more" href="{{url('create-software')}}">Create</a>
							</div>
						</div>

						<div class="dashbox__table-wrap">
							<table class="main__table main__table--dash">
								<thead>
									<tr>
										<th>ID</th>
										<th>TITLE</th>
										<th>YEAR</th>
										<th>ACTION</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$softwares=\App\Software::take(5)->get();
								 	?>

									@if(!empty($softwares))
									@foreach($softwares as $software)
									<tr>
										<td>
											<div class="main__table-text">@if(!empty($software)){{$software->id}}@endif</div>
										</td>
										<td>
											<div class="main__table-text">@if(!empty($software)){{$software->title}}@endif</div>
										</td>
										<td>
											<div class="main__table-text">@if(!empty($software)){{$software->year}}@endif</div>
										</td>
										
										<td>
										<div class="main__table-btns">
											
											<a href="{{url('view-software/'.$software->id)}}" class="main__table-btn main__table-btn--view">
												<i class="icon ion-ios-eye"></i>
											</a>
											<a href="{{url('edit-software/'.$software->id)}}" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
											<a href="#modal-delete<?php echo $software->id ?>" class="main__table-btn main__table-btn--delete open-modal">
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
								<!-- modal delete -->
								<div id="modal-delete<?php echo $software->id ?>" class="zoom-anim-dialog mfp-hide modal">
									<h6 class="modal__title">Item delete</h6>

									<p class="modal__text">Are you sure to permanently delete this item?</p>

									<div class="modal__btns">
										<a href="{{url('delete-software/'.$software->id)}}" class="modal__btn modal__btn--apply" type="button">Delete</a>
										<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
									</div>
								</div>
								<!-- end modal delete -->
									@endforeach
									@endif
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->

				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><i class="fa fa-tv"></i> Latest Applications</h3>

							<div class="dashbox__wrap">
								
								<a class="dashbox__more" href="{{url('all-application')}}">View All</a>
								<a class="dashbox__more" href="{{url('create-application')}}">Create</a>
							</div>
						</div>

						<div class="dashbox__table-wrap">
							<table class="main__table main__table--dash">
								<thead>
									<tr>
										<th>ID</th>
										<th>TITLE</th>
										<th>YEAR</th>
										<th>ACTION</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$applications=\App\Application::take(5)->get();
								 	?>

									@if(!empty($applications))
									@foreach($applications as $application)
									<tr>
										<td>
											<div class="main__table-text">@if(!empty($application)){{$application->id}}@endif</div>
										</td>
										<td>
											<div class="main__table-text">@if(!empty($application)){{$application->title}}@endif</div>
										</td>
										<td>
											<div class="main__table-text">@if(!empty($application)){{$application->year}}@endif</div>
										</td>
										
										<td>
										<div class="main__table-btns">
											
											<a href="{{url('view-application/'.$application->id)}}" class="main__table-btn main__table-btn--view">
												<i class="icon ion-ios-eye"></i>
											</a>
											<a href="{{url('edit-application/'.$application->id)}}" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
											<a href="#modal-delete<?php echo $application->id ?>" class="main__table-btn main__table-btn--delete open-modal">
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
								<!-- modal delete -->
								<div id="modal-delete<?php echo $application->id ?>" class="zoom-anim-dialog mfp-hide modal">
									<h6 class="modal__title">Item delete</h6>

									<p class="modal__text">Are you sure to permanently delete this item?</p>

									<div class="modal__btns">
										<a href="{{url('delete-application/'.$application->id)}}" class="modal__btn modal__btn--apply" type="button">Delete</a>
										<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
									</div>
								</div>
								<!-- end modal delete -->
									@endforeach
									@endif
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->

				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><i class="fa fa-gamepad"></i> Latest Games</h3>

							<div class="dashbox__wrap">
								
								<a class="dashbox__more" href="{{url('all-game')}}">View All</a>
								<a class="dashbox__more" href="{{url('create-game')}}">Create</a>
							</div>
						</div>

						<div class="dashbox__table-wrap">
							<table class="main__table main__table--dash">
								<thead>
									<tr>
										<th>ID</th>
										<th>TITLE</th>
										<th>YEAR</th>
										<th>ACTION</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$games=\App\Game::take(5)->get();
								 	?>

									@if(!empty($games))
									@foreach($games as $game)
									<tr>
										<td>
											<div class="main__table-text">@if(!empty($game)){{$game->id}}@endif</div>
										</td>
										<td>
											<div class="main__table-text">@if(!empty($game)){{$game->title}}@endif</div>
										</td>
										<td>
											<div class="main__table-text">@if(!empty($game)){{$game->year}}@endif</div>
										</td>
										
										<td>
										<div class="main__table-btns">
											
											<a href="{{url('view-game/'.$game->id)}}" class="main__table-btn main__table-btn--view">
												<i class="icon ion-ios-eye"></i>
											</a>
											<a href="{{url('edit-game/'.$game->id)}}" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
											<a href="#modal-delete<?php echo $game->id ?>" class="main__table-btn main__table-btn--delete open-modal">
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
								<!-- modal delete -->
								<div id="modal-delete<?php echo $game->id ?>" class="zoom-anim-dialog mfp-hide modal">
									<h6 class="modal__title">Item delete</h6>

									<p class="modal__text">Are you sure to permanently delete this item?</p>

									<div class="modal__btns">
										<a href="{{url('delete-game/'.$game->id)}}" class="modal__btn modal__btn--apply" type="button">Delete</a>
										<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
									</div>
								</div>
								<!-- end modal delete -->
									@endforeach
									@endif
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- JS -->
	<script src="{{asset('theme/admin/js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('theme/admin/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('theme/admin/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('theme/admin/js/jquery.mousewheel.min.js')}}"></script>
	<script src="{{asset('theme/admin/js/jquery.mCustomScrollbar.min.js')}}"></script>
	<script src="{{asset('theme/admin/js/select2.min.js')}}"></script>
	<script src="{{asset('theme/admin/js/admin.js')}}"></script>
</body>
</html>