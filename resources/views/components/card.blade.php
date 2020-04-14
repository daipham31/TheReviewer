
    <div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="{{'https://image.tmdb.org/t/p/w500/' .$movie['poster_path']}}" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="{{ route('movie_detail' , $movie['id']) }}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">{{$movie['title']}}</a></h6>
				            				<p><i class="ion-android-star"></i><span>{{$movie['vote_average']}}</span> /10</p>
				            			</div>
				            		</div>
	</div>
