<div class="col-sm-24 col-md-12">
	<div class="row">
		<div class="col-sm-24">
			@if(isset($data->images) && count($data->images)>0)
			<a href="{{ route('page.show', $data->id) }}">
				<img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-rounded img-responsive">
			</a>
			@else
			<img data-src="holder.js/100%x400/text:Type 6" class="img-rounded img-responsive">
			@endif				
			<div class="type-6-text text-center">
				<div class="type-6-category">
				{{ data_get($data, 'categories.0.title') }} {{ data_get($data, 'categories.1.title') }} 
				</div>
				<h2 class="type-6-title">{{ $data->title or 'Title' }}</h2>
			</div>
		</div>
	</div>
	<div class="row bolshaya-content-row">
		<div class="col-xs-24">
			<div class="bolshaya-mini-img-block">
				<img data-src="holder.js/75x75" class="img-circle">
			</div>
			<div class="bolshaya-mini-text-block">
				<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="thinner">Lorem ipsum dolor sit.</span></h3>
			</div>
		</div>
	</div>
</div>