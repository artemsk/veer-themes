<div class="col-sm-24 corners-post-id-{{ $data->id }} corners-post-lists bolshaya-content-row-grid">
    <small class="type-2-information"><strong><a href="{{ route('category.show', data_get($data, 'categories.0.id')) }}">{{ data_get($data, 'categories.0.title') }}</a></strong> <strong class="type-2-information-date">
            <i class="fa fa-dot-circle-o"></i> {{ $data->views }}
        </strong></small>
    <h1><a href="{{ route('page.show', $data->url) }}">{{ $data->title or 'Title' }}</a></h1>
    <p>{{ $data->small_txt or 'Small Text' }}</p>
    <div class="img-focus">
    @if(isset($data->images) && count($data->images)>0)
    <a href="{{ route('page.show', $data->url) }}">
        <img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive">
    </a>
    @else
    <img data-src="holder.js/100%x700">
    @endif
    </div>
</div>
