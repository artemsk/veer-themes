<div class="col-sm-12 col-md-6 corners-post-id-{{ $data->id }} corners-post-lists">
	<div class="type-8-text text-center" @if(!empty($data->bgColor)) style="background-color: {{ $data->bgColor }}" @endif>
		<h4><a href="{{ route('page.show', $data->url) }}">{{ $data->title or 'Title' }}</a></h4>
		<p>{{ $data->small_txt or 'Small Text' }}</p>
		<small class="text-muted type-2-information">
{{ data_get($data, 'categories.0.title') }}					
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