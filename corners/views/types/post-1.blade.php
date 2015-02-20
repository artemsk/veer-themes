<div class="container-fluid corners-post-type-1">
	<div class="row">
		<div class="col-sm-24 corners-post-img" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url(@if(isset($page->images) && count($page->images)>0){{ asset(config('veer.images_path').'/'.$page->images->pop()->img) }}
		 @endif)">
			<div class="container">
				<div class="row">
					<div class="col-sm-24">
						<div class="corners-post-category">
							@if(isset($categories) && count($categories)>0)
								@foreach($categories as $category)
									{{ $category->title }} 
								@endforeach
							@endif
						</div>
						<div class="corners-post-title">{{ $page->title or 'Title' }}</div>

						<div class="corners-post-date">{{ \Carbon\Carbon::parse($page->created_at)->format('H:i, d F Y') }} 
						@if(isset($page->user))
							{{ $page->user->username or null }}
						@endif</div>

						<hr class="corners-line"/> 
						
						<div class="corners-post-sub-title col-sm-16">{{ $page->small_txt or 'Small text' }}</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row corners-post-main-content-wrapper">
		<div class="col-sm-24">
			<div class="container">
				<div class="row corners-post-main-content">
					<div class="col-md-3 col-md-offset-1 text-center corners-author">
						@if(isset($page->images) && count($page->images)>0) 
							<img data-src="holder.js/75x75/vine"
								 src="{{ asset(config('veer.images_path').'/'.$page->images->shift()->img) }}" class="corners-small-img">	
						@endif
						@if(isset($data->user))
						<small class="corners-author-name">{{ $data->user->username or null }}</small>
						@endif	
					</div>
					<div class="col-md-17 corners-text">
						@foreach(paragraphs($page->txt) as $key => $p)
						@if($key/5 == ceil($key/5) && isset($page->images) && count($page->images)>0) 
						<p><img src="{{ asset(config('veer.images_path').'/'.$page->images->shift()->img) }}" class="img-responsive"></p>	
						@endif
						<p>{{ $p }}</p>			
						@endforeach
						
						@if(isset($page->images) && count($page->images)>0) 
							<div class="row">
								<div class="col-sm-24">
								@foreach($page->images as $image)
									<img src="{{ asset(config('veer.images_path').'/'.$image->img) }}" class="corners-images">
								@endforeach
								</div>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
		
	</div>
	@include($template . '.layout.footer')
</div>