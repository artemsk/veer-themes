<div class="col-md-6 col-sm-12">
	@if(isset($data->images) && count($data->images)>0)
	<a href="{{ route('page.show', $data->id) }}">
		<img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive">
		</a>
	@else
	<img data-src="holder.js/100%x340/text:Type 1: Image." class="img-responsive">
	@endif
	</div>