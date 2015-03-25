<div class="col-sm-24 corners-post-id-{{ $data->id }} corners-post-lists bolshaya-content-row-grid">
    <small><strong><a href="{{ route('category.show', data_get($data, 'categories.0.id')) }}">{{ data_get($data, 'categories.0.title') }}</a></strong> @if(isset($data->created_at))
        {{ \Carbon\Carbon::parse($data->created_at)->format("j F") }}
        @endif</small>
    <h1><a href="{{ route('page.show', $data->url) }}">{{ $data->title or 'Title' }}</a></h1>
    <p>{{ $data->small_txt or 'Small Text' }}</p>
    @if(isset($data->images) && count($data->images)>0)
    <a href="{{ route('page.show', $data->url) }}">
        <img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive">
    </a>
    @else
    <img data-src="holder.js/100%x700">
    @endif
</div>
