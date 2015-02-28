<div class="container-fluid intro-home" data-top="transform:translate(0px,0px);" data-top-bottom="transform:translate(0px,-50px);" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.2)), url(@if(isset(data_get($data, 'function.indexCornersHero.data')->images) && count(data_get($data, 'function.indexCornersHero.data')->images)>0){{ asset(config('veer.images_path').'/'.data_get($data, 'function.indexCornersHero.data')->images->first()->img) }}
             @endif)">
    <div class="row bolshaya-overflow">
        <div class="col-sm-18 col-sm-offset-3 text-center intro-home-content">
            <h1><strong>{{ data_get($data, 'function.indexCornersHero.data.title') }}</strong></h1>

            <h2>{{ data_get($data, 'function.indexCornersHero.data.small_txt') }}</h2>
            <div class="hero-link">
                <a href="{{ route('page.show', data_get($data, 'function.indexCornersHero.data.url')) }}" class="btn btn-primary btn-sky">Читать</a>
            </div>
        </div>
    </div>
    <span id="intro-bottom-mark"></span>
    <div class="arrow-more"><img src="{{ asset(config('veer.assets_path').'/'.$template.'/images/arrow-down.png') }}"></div>
</div>
