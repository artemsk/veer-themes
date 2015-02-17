@if( count(data_get($data, 'function.indexCornersPages.data.gridSort')) > 0 )
@foreach(data_get($data, 'function.indexCornersPages.data.gridSort') as $row)
			<div class="row bolshaya-content-row">
@foreach($row as $key => $item)					
@if($key == 2) 
			<div class="visible-sm clearfix"></div>
			<div class="visible-xs visible-sm bolshaya-content-row"></div>
@endif
@if($key != 0 && $key != 2)
			<div class="visible-xs bolshaya-content-row"></div>
@endif
			@include($template . '.types.' . data_get($data, 'function.indexCornersPages.data.items.' . $item)->designType, 
							array('data' => data_get($data, 'function.indexCornersPages.data.items.' . $item)))
@endforeach	
			</div>
@endforeach
@endif	