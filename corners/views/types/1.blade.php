<div class="col-md-6 col-sm-12 corners-post-id-{{ $data->id }} corners-post-lists"><div class="img-focus">
	@if(isset($data->images) && count($data->images)>0)
	<a href="{{ route('page.show', $data->url) }}">
		<img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive">
		</a>
	@else
	<img data-src="holder.js/100%x340" class="img-responsive">
	@endif
	</div></div>