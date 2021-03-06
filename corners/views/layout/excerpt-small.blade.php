@if(!empty($connectedId) && null != (data_get($excerpts, $connectedId)))
<div class="row bolshaya-content-row-grid">
    <div class="col-xs-24">
        <div class="bolshaya-mini-img-block">
            @if(isset(data_get($excerpts, $connectedId)->images) && count(data_get($excerpts, $connectedId)->images)>0)
                <img src="{{ asset(config('veer.images_path').'/'.data_get($excerpts, $connectedId)->images[0]->img) }}" class="img-responsive img-circle mini-block-image ">
            @else
            <img data-src="holder.js/75x75" class="img-circle">
            @endif
        </div>
        <div class="bolshaya-mini-text-block">{{ data_get($excerpts, $connectedId . '.small_txt') }}</div>
    </div>
</div>
@endif