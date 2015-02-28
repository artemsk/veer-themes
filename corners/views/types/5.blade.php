<div class="col-sm-12 col-md-6 corners-post-id-{{ $data->id }} bolshaya-content-row">
    @if(count($excerpts) > 0)
    <div class="row">
        <div class="col-xs-24">
            <div class="bolshaya-mini-img-block">
            @if(isset($excerpts->first()->images) && count($excerpts->first()->images)>0)
            <a href="{{ route('page.show', $excerpts->first()->url) }}">
                <img src="{{ asset(config('veer.images_path').'/'.$excerpts->first()->images[0]->img) }}" class="img-responsive img-circle">
            </a>
            @else
            <img data-src="holder.js/75x75" class="img-circle">
            @endif
            </div>
            <div class="bolshaya-mini-text-block">{{ $excerpts->shift()->small_txt }}</div>
        </div>
    </div>
    <div class="row bolshaya-content-row corners-post-lists">
    @else
    <div class="row corners-post-lists">
    @endif
        <div class="col-sm-24 text-center">
            @if(isset($data->images) && count($data->images)>0)
            <a href="{{ route('page.show', $data->url) }}">
                <img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive img-rounded type-5-image">
            </a>
            @else
            <img data-src="holder.js/100%x280" class="img-responsive img-rounded type-5-image">
            @endif
            <span class="type-5-category">
                {{ data_get($data, 'categories.0.title') }} {{ data_get($data, 'categories.1.title') }}
            </span>
            <h3 class="type-5-title"><a href="{{ route('page.show', $data->url) }}">{{ $data->title or 'Title' }}</a></h3>
        </div>
    </div>
</div>
