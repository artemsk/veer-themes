@if(isset($loadScripts))
<script>
    $.getScript("{{ asset(config('veer.assets_path').'/'.$template.'/js/images.js') }}");
</script>
@endif

@foreach(veer_get('function.indexCornersPages.data.gridSort', array()) as $row)
<div class="row">
    @foreach($row as $key => $item)
    @if($key == 2)
    <div class="visible-sm clearfix"></div>
    @endif
    @include($template . '.types.' . veer_get('function.indexCornersPages.data.items.' . $item)->designType,
    array('data' => veer_get('function.indexCornersPages.data.items.' . $item), 'excerpts' => veer_get('function.indexCornersExcerpts.data.items')))
    @endforeach
</div>
@endforeach
@if(count(veer_get('function.indexCornersPages.data.gridSort'))>0)
<div id="showMoreData{{ veer_get('function.indexCornersPages.data.items')->currentPage() }}">
    @if(veer_get('function.indexCornersPages.data.items')->hasMorePages())
    <div class="row bolshaya-content-row">
        <div class="col-sm-6 col-sm-offset-9 col-xs-22 col-xs-offset-1 text-center show-more-wrapper"><div class="show-more">
            <a data-page="{{ veer_get('function.indexCornersPages.data.items')->currentPage() }}" class="pagination-button" href="{{ veer_get('function.indexCornersPages.data.items')->nextPageUrl() }}">Больше</a>
            </div>
        </div>
    </div>
    @endif
</div>	
@endif
@if(isset($loadScripts))
<script>
    $.getScript("{{ asset(config('veer.assets_path').'/'.$template.'/js/holder.js') }}");
    $.getScript("{{ asset(config('veer.assets_path').'/'.$template.'/js/showmore.js') }}");
</script>
@endif
