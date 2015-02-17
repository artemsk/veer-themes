<div class="col-sm-12 col-md-6">
	<div class="type-4-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.6)), url(
		 @if(isset($data->images) && count($data->images)>0){{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}
		 @endif)">
	</div>
	<div class="type-4-text text-center">
		<h4>{{ $data->title or 'Title' }}</h4>
		<p>{{ $data->small_txt or 'Small Text' }}</p><small class="text-muted type-2-information">
<strong>
@if(isset($data->created_at))
{{ \Carbon\Carbon::parse($data->created_at)->format("j F") }}
@endif
</strong>@if(isset($data->user))
{{ $data->user->username or null }}
@endif
</small>
	</div>
</div>