<div class="col-sm-12 col-md-6">
	<div class="type-8-text text-center">
		<h4>{{ $data->title or 'Title' }}</h4>
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
</div>