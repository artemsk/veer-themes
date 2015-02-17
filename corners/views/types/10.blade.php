<div class="col-sm-24 col-md-12">
	@if(isset($data->images) && count($data->images)>0)
	<a href="{{ route('page.show', $data->id) }}">
		<img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive type-10-image">
	</a>
	@else
	<img data-src="holder.js/100%x211/text:Type 10" class="img-responsive type-10-image">
	@endif	
	<h3>{{ $data->title or 'Title' }}</h3>
	<p>{{ $data->small_txt or 'Small Text' }}</p>
	<small class="text-muted type-2-information">
<strong>
@if(isset($data->created_at))
{{ \Carbon\Carbon::parse($data->created_at)->format("j F") }}
@endif
</strong>@if(isset($data->user))
{{ $data->user->username or null }}
@endif
</small>
</div>