<div class="col-sm-12 col-md-6 corners-post-id-{{ $data->id }} corners-post-lists">
	<div class="type-9-text">
		<div class="source">{{ data_get($data, 'categories.0.title') }}<span class="time">— @if(isset($data->created_at))
{{ \Carbon\Carbon::parse($data->created_at)->format("j F") }}
@endif</span>
		</div>
		<div class="title"><a href="{{ route('page.show', $data->url) }}">{{ $data->title or 'Title' }}</a></div>
	</div>
</div>