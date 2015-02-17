<div class="col-sm-6 col-md-3">
	@if(isset($data->images) && count($data->images)>0)
	<a href="{{ route('page.show', $data->id) }}">
		<img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive">
	</a>
	@else
	<img data-src="holder.js/100%x153">
	@endif
	<br/><small>{{ $data->title or 'Title' }}</small>
</div>