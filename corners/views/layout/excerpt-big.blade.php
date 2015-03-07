@if(isset($excerpts) && count($excerpts->where('id',(int)$connectedId))>0)
<div class="row bolshaya-content-row">
    <div class="col-xs-24">
        <div class="bolshaya-mini-img-block">
            @if(isset($excerpts->where('id',(int)$connectedId)->first()->images) && count($excerpts->where('id',(int)$connectedId)->first()->images)>0)
            <a href="{{ route('page.show', $excerpts->where('id',(int)$connectedId)->first()->url) }}">
                <img src="{{ asset(config('veer.images_path').'/'.$excerpts->where('id',(int)$connectedId)->first()->images[0]->img) }}" class="img-responsive img-circle">
            </a>
            @else
            <img data-src="holder.js/75x75" class="img-circle">
            @endif
        </div>
        <div class="bolshaya-mini-text-block">
            <h3>{{ $excerpts->where('id',(int)$connectedId)->shift()->small_txt }}</h3>
        </div>
    </div>
</div>
@endif