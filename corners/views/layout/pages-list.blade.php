@foreach(data_get($data, 'function.indexCornersPages.data.gridSort') as $row)
<div class="row">
    @foreach($row as $key => $item)
    @if($key == 2)
    <div class="visible-sm clearfix"></div>
    @endif
    @include($template . '.types.' . data_get($data, 'function.indexCornersPages.data.items.' . $item)->designType,
    array('data' => data_get($data, 'function.indexCornersPages.data.items.' . $item), 'excerpts' => data_get($data, 'function.indexCornersExcerpts.data.items')))
    @endforeach
</div>
@endforeach

<div id="showMoreData{{ data_get($data, 'function.indexCornersPages.data.items')->currentPage() }}">
    @if(data_get($data, 'function.indexCornersPages.data.items')->hasMorePages())
    <div class="row bolshaya-content-row">
        <div class="col-sm-6 col-sm-offset-9 col-xs-22 col-xs-offset-1 text-center show-more">
            <a data-page="{{ data_get($data, 'function.indexCornersPages.data.items')->currentPage() }}" class="pagination-button" href="{{ data_get($data, 'function.indexCornersPages.data.items')->nextPageUrl() }}">More</a>
        </div>
    </div>
    @endif
</div>	

@if(isset($loadScripts))
<script>
    $.getScript("{{ asset(config('veer.assets_path').'/'.$template.'/js/holder.js') }}");
    $.getScript("{{ asset(config('veer.assets_path').'/'.$template.'/js/showmore.js') }}");
</script>
@endif
