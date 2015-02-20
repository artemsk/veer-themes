<div class="col-sm-6 col-md-3 corners-digest-post-id-{{ $data->id }} corners-post-lists">
	@if(isset($data->images) && count($data->images)>0)
	<a href="{{ route('page.show', $data->url) }}">
		<img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive">
	</a>
	@else
	<img data-src="holder.js/100%x153">
	@endif
	<br/><small><a href="{{ route('page.show', $data->url) }}">{{ $data->title or 'Title' }}</a></small>
</div>