@extends('master')
@section('content')
<div class="hero mv-single-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- <h1> movie listing - list</h1>
				<ul class="breadcumb">
					<li class="active"><a href="#">Home</a></li>
					<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
				</ul> -->
			</div>
		</div>
	</div>
</div>
<div class="page-single movie-single movie_single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="movie-img sticky-sb">
					<img src="{{'https://image.tmdb.org/t/p/w500/' .$movie_detail['poster_path']}}" alt="">
					<div class="movie-btn">	
						<div class="btn-transform transform-vertical red">
							<div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> Watch Trailer</a></div>
							<div><a href="https://www.youtube.com/watch?v={{$movie_detail['videos']['results'][0]['key']}}" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>
						</div>
						<div class="btn-transform transform-vertical">
							<div><a href="#" class="item item-1 yellowbtn"> <i class="ion-card"></i> Buy ticket</a></div>
							<div><a href="#" class="item item-2 yellowbtn"><i class="ion-card"></i></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct main-content">
					<h1 class="bd-hd">{{$movie_detail['title']}}<span> {{ \Carbon\Carbon::parse($movie_detail['release_date'])->format('Y')}} </span></h1>
					<div class="social-btn">
						<a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
						<div class="hover-bnt">
							<a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
							<div class="hvr-item">
								<a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
							</div>
						</div>		
					</div>
					<div class="movie-rate">
						<div class="rate">
							<i class="ion-android-star"></i>
							<p><span>{{$movie_detail['vote_average']}}</span> /10<br>
								<span class="rv">{{count($movie_detail['reviews']['results'])}} Reviews</span>
							</p>
						</div>
						<div class="rate-star">
							<p>Rate This Movie:  </p>
							@for($i = 0; $i < $movie_detail['vote_average'];$i++ )
							<i class="ion-ios-star"></i>
							@endfor
							@for($i = $movie_detail['vote_average']; $i <10;$i++ )
							<i class="ion-ios-star-outline"></i>
							@endfor

						</div>
					</div>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overview">Overview</a></li>
								<li><a href="#reviews"> Reviews</a></li>
								<li><a href="#cast">  Cast & Crew </a></li>
								<li><a href="#media"> Media</a></li> 
								<li><a href="#moviesrelated"> Related Movies</a></li>                        
							</ul>
						    <div class="tab-content">
						        <div id="overview" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12">
						            		<p>{{$movie_detail['overview']}}</p>
						            		<div class="title-hd-sm">
												<h4>Photos</h4>
											</div>
											<div class="mvsingle-item ov-item">
												@foreach($movie_detail['images']['posters'] as $images)
												@if($loop->index < 10)

												<a class="img-lightbox"  data-fancybox-group="gallery" href="{{'https://image.tmdb.org/t/p/w500/' .$images['file_path']}}" ><img src="{{'https://image.tmdb.org/t/p/w92/' .$images['file_path']}}" alt=""></a>

												@endif
												@endforeach

											</div>
											<div class="title-hd-sm">
												<h4>cast</h4>
												<a href="#" class="time">Full Cast & Crew  <i class="ion-ios-arrow-right"></i></a>
											</div>
											<!-- movie cast -->
											<div class="mvcast-item">
												@foreach($movie_detail['credits']['cast'] as $cast)
												@if($loop->index < 6)
												<div class="cast-it">
													<div class="cast-left">
														<img src="{{'https://image.tmdb.org/t/p/w45/' .$cast['profile_path']}}" alt="">
														<a href="#">{{$cast['name']}}</a>
													</div>
													<p>{{$cast['character']}}</p>
												</div>
												@endif
												@endforeach

											</div>
											<div class="title-hd-sm">
												<h4>User reviews</h4>
												<a href="#" class="time">See All {{count($movie_detail['reviews']['results'])}} Reviews <i class="ion-ios-arrow-right"></i></a>
											</div>
											<!-- movie user review -->
											<div class="mv-user-review-item">
												<h3>{{$movie_detail['original_title']}}</h3>
												<div class="no-star">
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star"></i>
													<i class="ion-android-star last"></i>
												</div>
												<p class="time">
													by <a href="#"> {{$movie_detail['reviews']['results'][0]['author']}}</a>
												</p>
												<p>{{$movie_detail['reviews']['results'][0]['content']}}</p>
											</div>
						            	</div>
						            	<div class="col-md-4 col-xs-12 col-sm-12">
						            		<div class="sb-it">
						            			<h6>Director: </h6>
												@foreach($movie_detail['credits']['crew'] as $crew)
												@if($crew['job'] == 'Director')
						            			<p><a href="#">{{$crew['name']}}</a></p>
						            			@endif
						            			@endforeach

						            		</div>
						            		<div class="sb-it">
						            			<h6>Writer: </h6>
						            			@foreach($movie_detail['credits']['crew'] as $crew)
												@if($crew['department'] == 'Writing')
						            			<p><a href="#">{{$crew['name']}}</a>
						            			@endif
						            			@endforeach

						            		</div>
						            		<div class="sb-it">
						            			<h6>Stars: </h6>
						            			@foreach($movie_detail['credits']['cast'] as $cast)
												@if($loop->index < 4)
						            			<p><a href="#">{{$cast['name']}}</a></p>
						            			@endif
						            			@endforeach
						            		</div>
						            		<div class="sb-it">
						            			<h6>Genres:</h6>
						            			<p>
						            				@foreach($movie_detail['genres'] as $genre)
						            				<a href="#">{{$genre['name']}}</a>
						            				@endforeach
						            			</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Release Date:</h6>
						            			<p>{{$movie_detail['release_date']}}</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Run Time:</h6>
						            			<p>{{$movie_detail['runtime']}} min</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Status:</h6>
						            			<p>{{$movie_detail['status']}}</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Home Page:</h6>
						            			<p class="tags">
						            				<span class="time"><a href="{{$movie_detail['homepage']}}">{{$movie_detail['title']}}</a></span>
						            			</p>
						            		</div>
						            		<div class="ads">
												<img src="source/images/uploads/ads1.png" alt="">
											</div>
						            	</div>
						            </div>
						        </div>
						        <div id="reviews" class="tab review">
						           <div class="row">
						            	<div class="rv-hd">
						            		<div class="div">
							            		<h3>Reviews of</h3>
						       	 				<h2>{{$movie_detail['original_title']}}</h2>
							            	</div>
							            	<a href="#" class="redbtn">Write Review</a>
						            	</div>
						            	<div class="topbar-filter">
											<p>Found <span>{{count($movie_detail['reviews']['results'])}}</span> in total</p>
											<label>Filter by:</label>
											<select>
												<option value="popularity">Popularity Descending</option>
												<option value="popularity">Popularity Ascending</option>
												<option value="rating">Rating Descending</option>
												<option value="rating">Rating Ascending</option>
												<option value="date">Release date Descending</option>
												<option value="date">Release date Ascending</option>
											</select>
										</div>
										@foreach($movie_detail['reviews']['results'] as $review)
										@if($loop->index < 4)
										<div class="mv-user-review-item">
											<div class="user-infor">
												<img src="source/images/uploads/userava1.jpg" alt="">
												<div>
													<h3>{{$movie_detail['original_title']}}</h3>
													<div class="no-star">
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star last"></i>
													</div>
													<p class="time">
														by <a href="#"> {{$review['author']}}</a>
													</p>
												</div>
											</div>
											<p>{{$review['content']}}</p>
										</div>
										@endif
										@endforeach

										<div class="topbar-filter">
											<label>Reviews per page:</label>
											<select>
												<option value="range">{{count($movie_detail['reviews']['results'])}}</option>
											</select>
											<div class="pagination2">
												<span>Page 1 of 6:</span>
												<a class="active" href="#">1</a>
												<a href="#">2</a>
												<a href="#">3</a>
												
												<a href="#"><i class="ion-arrow-right-b"></i></a>
											</div>
										</div>
						            </div>
						        </div>
						        <div id="cast" class="tab">
						        	<div class="row">
						            	<h3>Cast & Crew of</h3>
					       	 			<h2>{{$movie_detail['original_title']}}</h2>
										<!-- //== -->
					       	 			<div class="title-hd-sm">
											<h4>Directors</h4>
										</div>
										<div class="mvcast-item">											
											<div class="cast-it">
												<div class="cast-left">
													<h4>...</h4>
													@foreach($movie_detail['credits']['crew'] as $crew)
													@if($crew['job'] == 'Director')
						            				<p><a href="#">{{$crew['name']}}</a></p>
						            				@endif
						            				@endforeach
												</div>
												<p>...  Director</p>
											</div>
										</div>
										<!-- //== -->
										<div class="title-hd-sm">
											<h4>Credits Crew</h4>
										</div>
										<div class="mvcast-item">	
												@foreach($movie_detail['credits']['crew'] as $crew)
												@if($loop->index < 10 && $crew['department'] != 'Production' )
								            			<div class="cast-it">
														<div class="cast-left">
															<h4>...</h4>
															<a href="#">{{$crew['name']}}</a>
														</div>
														<p>...  {{$crew['department']}}</p>
														</div>
						            			@endif
						            			@endforeach										
											
											
											
											
											
										</div>
										<!-- //== -->
										<div class="title-hd-sm">
											<h4>Cast</h4>
										</div>
										<div class="mvcast-item">

												@foreach($movie_detail['credits']['cast'] as $cast)
												@if($loop->index < 10)
								            			<div class="cast-it">
														<div class="cast-left">
															<img src="{{'https://image.tmdb.org/t/p/w45/' .$cast['profile_path']}}" alt="">
															<a href="#">{{$cast['name']}}</a>
														</div>
														<p>...  {{$cast['character']}}</p>
													</div>
						            			@endif
						            			@endforeach									
											
											
											

										</div>
										<!-- //== -->
										<div class="title-hd-sm">
											<h4>Produced by</h4>
										</div>
										<div class="mvcast-item">											
											
												@foreach($movie_detail['credits']['crew'] as $crew)
												@if($crew['department'] == 'Production')
						            			<div class="cast-it">
												<div class="cast-left">
													<h4>...</h4>
													<a href="#">{{$crew['name']}}</a>
												</div>
												<p>... {{$crew['department']}} </p>
												</div>
						            			@endif
						            			@endforeach
											
											
											

										</div>
						            </div>
					       	 	</div>
					       	 	<div id="media" class="tab">
						        	<div class="row">
						        		<div class="rv-hd">
						            		<div>
						            			<h3>Videos & Photos of</h3>
					       	 					<h2>{{$movie_detail['original_title']}}</h2>
						            		</div>
						            	</div>
						            	<div class="title-hd-sm">
											<h4>Videos <span> ({{count($movie_detail['videos']['results'])}})</span></h4>
										</div>
										<div class="mvsingle-item media-item">
											@foreach($movie_detail['videos']['results'] as $video)
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="{{'https://image.tmdb.org/t/p/w185/' .$movie_detail['poster_path']}}" alt="">
													<a class="fancybox-media hvr-grow"  href="https://www.youtube.com/embed/{{$video['key']}}"><img src="source/images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">{{$video['name']}}</a></h6>
													
												</div>
											</div>
											@endforeach
											

										</div>
										<div class="title-hd-sm">
											<h4>Photos <span> ({{count($movie_detail['images']['posters']) }})</span></h4>
										</div>
										<div class="mvsingle-item">
											@foreach($movie_detail['images']['posters'] as $image)
											@if($loop->index < 20)
											<a class="img-lightbox"  data-fancybox-group="gallery" href="{{'https://image.tmdb.org/t/p/w500/' .$image['file_path']}}" ><img src="{{'https://image.tmdb.org/t/p/w92/' .$image['file_path']}}" alt=""></a>

											@endif
											@endforeach
											@foreach($movie_detail['images']['backdrops'] as $image)
											@if($loop->index < 20)
											<a class="img-lightbox"  data-fancybox-group="gallery" href="{{'https://image.tmdb.org/t/p/original/' .$image['file_path']}}" ><img src="{{'https://image.tmdb.org/t/p/w92/' .$image['file_path']}}" alt=""></a>
											@endif
											@endforeach
										</div>
						        	</div>
					       	 	</div>
					       	 	<div id="moviesrelated" class="tab">
					       	 		<div class="row">
					       	 			<h3>Related Movies To</h3>
					       	 			<h2>{{$movie_detail['original_title']}}</h2>
					       	 			<div class="topbar-filter">
											<p>Found <span>12 movies</span> in total</p>
											<label>Sort by:</label>
											<select>
												<option value="popularity">Popularity Descending</option>
												<option value="popularity">Popularity Ascending</option>
												<option value="rating">Rating Descending</option>
												<option value="rating">Rating Ascending</option>
												<option value="date">Release date Descending</option>
												<option value="date">Release date Ascending</option>
											</select>
										</div>
										@foreach($movie_detail['similar']['results'] as $similar)
										<div class="movie-item-style-2">
											<img src="{{'https://image.tmdb.org/t/p/w342/' .$similar['poster_path']}}" alt="">
											<div class="mv-item-infor">
												<h6><a href="{{ route('movie_detail' , $similar['id']) }}">{{$similar['title']}} <span>({{ \Carbon\Carbon::parse($similar['release_date'])->format('Y')}})</span></a></h6>
												<p class="rate"><i class="ion-android-star"></i><span>{{$similar['vote_average']}}</span> /10</p>
												<p class="describe">{{$similar['overview']}}</p>
												<p class="run-time">Release: {{$similar['release_date']}}</p>
												<p>Director: <a href="#">Joss Whedon</a></p>
												<p>Stars: <a href="#">Robert Downey Jr.,</a> <a href="#">Chris Evans,</a> <a href="#">  Chris Hemsworth</a></p>
											</div>
										</div>
										@endforeach
										
										
										<div class="topbar-filter">
											<label>Movies per page:</label>
											<select>
												<option value="range">5 Movies</option>
												<option value="saab">10 Movies</option>
											</select>
											<div class="pagination2">
												<span>Page 1 of 2:</span>
												<a class="active" href="#">1</a>
												<a href="#">2</a>
												<a href="#"><i class="ion-arrow-right-b"></i></a>
											</div>
										</div>
					       	 		</div>
					       	 	</div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection