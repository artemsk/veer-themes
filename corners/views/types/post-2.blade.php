<div class="container narrow-post">

      <div class="row">
          <div class="col-sm-16">
			  @if(isset($page->images) && count($page->images)>0)
			  <img data-src="holder.js/100%x562" src="{{ asset(config('veer.images_path').'/'.$page->images->pop()->img) }}" class="img-responsive img-rounded">
			  @else
			  <img data-src="holder.js/100%x340/sky/text:&nbsp;" class="img-responsive img-rounded">
			  @endif
              <div class="corners-post-2-title">

                  <div class="text-center corners-post-2-category">@if(isset($categories) && count($categories)>0)
								@foreach($categories as $category)
									{{ $category->title }} 
								@endforeach
							@endif</div>

                  <h2 class="text-center">{{ $page->title }}</h2>

              </div>
              
          </div>
          <div class="col-sm-8 hidden-xs">
              <div class="blank-square-500"></div>
          </div>
      </div>
     
      <div class="row corners-post-2-extra-margin">
          <div class="col-sm-16 corners-post-2-small-text">{{ $page->small_txt }}</div>
          <div class="col-sm-8">@if(isset($page->user) && !empty($page->user->username))
			  ТЕКСТ: {{ $page->user->username or null }}
			@endif</div>   
      </div>
      
      <div class="row corners-post-2-extra-margin">
          <div class="col-sm-24">
			  <img src="{{ asset(config('veer.images_path').'/'.$page->images->shift()->img) }}" class="img-responsive">
          </div>
      </div>
      
      <div class="row corners-post-2-extra-margin">          
          <div class="col-sm-16 corners-post-2-text">  
				@foreach(paragraphs($page->txt) as $key => $p)
					@if($key/5 == ceil($key/5) && isset($page->images) && count($page->images)>0) 
					<p><img src="{{ asset(config('veer.images_path').'/'.$page->images->shift()->img) }}" class="img-responsive"></p>	
					@endif
					<p>{{ $p }}</p>					
				@endforeach
		  </div>
      </div>
	
      @if(isset($page->images) && count($page->images)>0)  
      <div class="row corners-post-2-extra-margin">
          <div class="col-sm-12">
			  @if(isset($page->images) && count($page->images)>0)  
				<img src="{{ asset(config('veer.images_path').'/'.$page->images->shift()->img) }}" class="img-responsive">	
			  @endif
          </div>
          <div class="col-sm-12">
              @if(isset($page->images) && count($page->images)>0)  
				<img src="{{ asset(config('veer.images_path').'/'.$page->images->shift()->img) }}" class="img-responsive">	
			  @endif
          </div>
      </div>
      @endif
	  
      <div class="row corners-post-2-extra-margin">
          <div class="col-sm-24">		  
			  @if(isset($page->images) && count($page->images)>0) 
				<div class="row">
					@foreach($page->images as $image)
					<div class="col-sm-4">
						<img src="{{ asset(config('veer.images_path').'/'.$image->img) }}" class="corners-images img-responsive">
					</div>
					@endforeach
				</div>
			   @endif
          </div>
          <div class="col-sm-7 col-sm-offset-1">
          </div>
      </div>           
  </div>
<div class="container-fluid">
	@include($template . '.layout.footer')
</div>