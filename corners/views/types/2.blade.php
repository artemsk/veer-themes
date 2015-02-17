<div class="col-sm-12 col-md-6">
	@if(isset($data->images) && count($data->images)>0)
	<a href="{{ route('page.show', $data->id) }}">
		<img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive type-2-image">
	</a>
	@else
	<img data-src="holder.js/100%x211/text:Type 2: Image + Text" class="img-responsive type-2-image">
	@endif
	<h4>{{ $data->title or 'Title' }}</h4>
	<p>{{ $data->small_txt or 'Small Text' }}<small class="text-muted type-2-information">
<strong>
@if(isset($data->created_at))
{{ \Carbon\Carbon::parse($data->created_at)->format("j F") }}
@endif
</strong>@if(isset($data->user))
{{ $data->user->username or null }}
@endif
</small></p>
</div>