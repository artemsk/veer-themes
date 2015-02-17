<div class="col-sm-24">
	<small>@if(isset($data->created_at))
{{ \Carbon\Carbon::parse($data->created_at)->format("j F") }}
@endif</small>
	<h1><a href="">{{ $data->title or 'Title' }}</a></h1>
	<p>{{ $data->small_txt or 'Small Text' }}</p>
	@if(isset($data->images) && count($data->images)>0)
	<a href="{{ route('page.show', $data->id) }}">
		<img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive">
	</a>
	@else
	<img data-src="holder.js/100%x700/text:Type 11">
	@endif
	
</div>