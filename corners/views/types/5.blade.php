<div class="col-sm-12 col-md-6">
	<div class="row">
		<div class="col-xs-24">
			<div class="bolshaya-mini-img-block"><img data-src="holder.js/75x75" class="img-circle">
			</div>
			<div class="bolshaya-mini-text-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</div>
		</div>
	</div>
	<div class="row bolshaya-content-row">
		<div class="col-sm-24 text-center">
			@if(isset($data->images) && count($data->images)>0)
			<a href="{{ route('page.show', $data->id) }}">
				<img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive img-rounded type-5-image">
			</a>
			@else
			<img data-src="holder.js/100%x280/text:Type 5" class="img-responsive img-rounded type-5-image">
			@endif			
			<span class="type-5-category">
				{{ data_get($data, 'categories.0.title') }} {{ data_get($data, 'categories.1.title') }} 
				</span>
			<h3 class="type-5-title">{{ $data->title or 'Title' }}</h3>
		</div>
	</div>
</div>