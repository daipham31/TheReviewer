<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="{{'https://image.tmdb.org/t/p/w500/' .$series['poster_path']}}" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="{{route('series_detail' , $series['id'])}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">{{$series['name']}}</a></h6>
				            				<p><i class="ion-android-star"></i><span>{{$series['vote_average']}}</span> /10</p>
				            			</div>
				            		</div>
			            		</div>