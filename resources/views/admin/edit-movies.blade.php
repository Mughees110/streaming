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
						<h2>Update New Movie or TV Series</h2>
					</div>
				</div>
				<!-- end main title -->
				<div class="col-12">
					@if (\Session::has('message'))
				    <div class="alert alert-success alert-dismissible" style="background-color: #1095A6">
				      <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="color: white">&times;</button>
				        <h5 style="color: white; text-align: center;"><i class="icon fas fa-check"></i> Alert!</h5>
				          <p style="color: white; text-align: center;">{!! \Session::get('message') !!}</p>
				    </div>
				    @endif
				</div>

				<!-- form -->
				<div class="col-12">
					<form action="{{url('update-movie/'.$movie->id)}}" method="post" class="form" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-12 col-md-5 form__cover">
								<div class="row">
									<div class="col-12 col-sm-6 col-md-12">
										<div class="form__img">
											<label for="form__img-upload">Upload updated cover (270 x 400)</label>
											<input id="form__img-upload" name="cover" type="file" accept=".png, .jpg, .jpeg">
											<img id="form__img" src="#" alt=" ">
										</div>
									</div>
								</div>
							</div>

							<div class="col-12 col-md-7 form__content">
								<div class="row">
									<div class="col-12">
										<input type="text" name="title" class="form__input" placeholder="Title" value="@if(!empty($movie)){{$movie->title}}@endif">
									</div>

									<div class="col-12">
										<textarea id="text" name="description" class="form__textarea" placeholder="Description">@if(!empty($movie)){{$movie->description}}@endif</textarea>
									</div>

									<div class="col-12 col-sm-6 col-lg-4">
										<input type="text" name="year" class="form__input" placeholder="Release year" value="@if(!empty($movie)){{$movie->year}}@endif">
									</div>

									<div class="col-12 col-sm-6 col-lg-4">
										<input type="text" name="fileDuration" class="form__input" placeholder="Running time" @if(!empty($movie)){{$movie->fileDuration}}@endif>
									</div>

									<div class="col-12 col-sm-6 col-lg-4">
										<select class="js-example-basic-single" id="quality" name="fileQuality">
											<option disabled selected>Update Quality</option>
											<option value="hd">HD</option>
											<option value="720px">720px</option>
											<option value="360px">360px</option>
										</select>
									</div>
									<!--
									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" class="form__input" placeholder="Age">
									</div>-->

									

									<div class="col-12 col-lg-12">
										<select class="js-example-basic-multiple" id="genre" multiple name="genre[]">
											<option disabled selected>Choose Updated Genre</option>
											<option value="Action">Action</option>
											<option value="Animation">Animation</option>
											<option value="Comedy">Comedy</option>
											<option value="Crime">Crime</option>
											<option value="Drama">Drama</option>
											<option value="Fantasy">Fantasy</option>
											<option value="Historical">Historical</option>
											<option value="Horror">Horror</option>
											<option value="Romance">Romance</option>
											<option value="Science-fiction">Science-fiction</option>
											<option value="Thriller">Thriller</option>
											<option value="Western">Western</option>
											<option value="Otheer">Otheer</option>
										</select>
									</div>
									
									<div class="col-12">
										<div class="form__video">
												<label id="movie1" for="form__video-upload">Upload Updated Movie</label>
												<input data-name="#movie1" id="form__video-upload" name="file" class="form__video-upload" type="file" accept="video/mp4,video/x-m4v,video/*">
											</div>
									</div>
								</div>
							</div>

							<div class="col-12">
								<ul class="form__radio">
									<li>
										<span>If Item type:</span>
									</li>
									
									<li>
										<input id="type2" type="radio" name="type" data-toggle="collapse" data-target=".multi-collapse">
										<label for="type2">TV Series</label>
									</li>
								</ul>
							</div>
							
							<div class="col-12">
								<div class="row">
									<!-- movie -->
									

									<!-- tv series -->
									<div class="col-12">
										<div class="collapse multi-collapse" id="multiCollapseExample2">
											<!-- season -->
											<div class="form__season">
												

												<!-- episode -->
												<div class="form__episode">
													<div class="row">
														

														<div class="col-12 col-md-6">
															<input type="text" class="form__input" placeholder="Episode Number" name="episodeNumber">
														</div>

														<div class="col-12 col-md-6">
															<select class="form__input" id="quality" name="seasonId">
																<option disabled selected>Choose Updated TV series here</option>
															<option value="Season1">Season1</option>
															<option value="Season2">Season2</option>
															<option value="Season3">Season3</option>
														</select>
														</div>

														
													</div>
												</div>
												<!-- end episode -->

												
											</div>
											<!-- end season -->
										</div>
									</div>
									<!-- end tv series -->

									<div class="col-12">
										<button type="submit" class="form__btn">publish</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<!-- end form -->
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