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
				@if (\Session::has('message'))
				    <div class="alert alert-success alert-dismissible" style="background-color: #1095A6">
				      <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="color: white">&times;</button>
				        <h5 style="color: white; text-align: center;"><i class="icon fas fa-check"></i> Alert!</h5>
				          <p style="color: white; text-align: center;">{!! \Session::get('message') !!}</p>
				    </div>
				    @endif
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Total Movies</h2>
						<?php
							$mC=\App\Movie::count();
						 ?>
						<span class="main__title-stat">@if(!empty($mC)){{$mC}}@endif</span>

						<div class="main__title-wrap">
							<!-- filter sort -->
							<div class="filter" id="filter__sort">
								<span class="filter__item-label">Sort by:</span>

								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									@if(empty($by))
									<input type="button" value="Date created">
									@endif
									@if(!empty($by))
										@if($by=="created_at")
										<input type="button" value="Date created">
										@endif
										@if($by=="id")
										<input type="button" value="ID">
										@endif
										@if($by=="title")
										<input type="button" value="Title">
										@endif
										@if($by=="year")
										<input type="button" value="Year">
										@endif
										@if($by=="category")
										<input type="button" value="Category">
										@endif
									@endif
									
									<span></span>
								</div>
								<?php
									$created_at="created_at";
									$id="id";
									$title="title";
									$year="year";
									$category="category";
								 ?>

								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-sort">
									<li><a style="color: white" href="{{url('sort-movie/'.$created_at)}}">Date created</a></li>
									<li><a style="color: white" href="{{url('sort-movie/'.$id)}}">ID</a></li>
									<li><a style="color: white" href="{{url('sort-movie/'.$title)}}">TITLE</a></li>
									<li><a style="color: white" href="{{url('sort-movie/'.$year)}}">YEAR</a></li>
									<li><a style="color: white" href="{{url('sort-movie/'.$category)}}">CATEGORY</a></li>
								</ul>
							</div>
							<!-- end filter sort -->

							<!-- search -->
							<form action="{{url('search-movie')}}" method="post" class="main__title-form">
								{{ csrf_field() }}
								<input type="text" placeholder="Find movie / tv series.." name="title">
								<button type="submit">
									<i class="icon ion-ios-search"></i>
								</button>
							</form>
							<!-- end search -->
						</div>
					</div>
				</div>
				<!-- end main title -->

				<!-- users -->
				<div class="col-12">
					<div class="main__table-wrap">
						<table class="main__table">
							<thead>
								<tr>
									<th>ID</th>
									<th>TITLE</th>
									<th>YEAR</th>
									<th>CATEGORY</th>
									<th>CREATED AT</th>
									<th>ACTION</th>
								</tr>
							</thead>

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
										<div class="main__table-text">@if(!empty($movie)){{$movie->created_at}}@endif</div>
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
				<!-- end users -->

				<!-- paginator 
				<div class="col-12">
					<div class="paginator-wrap">
						<span>10 from 14 452</span>

						<ul class="paginator">
							<li class="paginator__item paginator__item--prev">
								<a href="#"><i class="icon ion-ios-arrow-back"></i></a>
							</li>
							<li class="paginator__item"><a href="#">1</a></li>
							<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
							<li class="paginator__item"><a href="#">3</a></li>
							<li class="paginator__item"><a href="#">4</a></li>
							<li class="paginator__item paginator__item--next">
								<a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
							</li>
						</ul>
					</div>
				</div>
				 end paginator -->
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- modal status -->
	<div id="modal-status" class="zoom-anim-dialog mfp-hide modal">
		<h6 class="modal__title">Status change</h6>

		<p class="modal__text">Are you sure about immediately change status?</p>

		<div class="modal__btns">
			<button class="modal__btn modal__btn--apply" type="button">Apply</button>
			<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
		</div>
	</div>
	<!-- end modal status -->

	

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