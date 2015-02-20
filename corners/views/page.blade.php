@extends($template.'.layout.base')

@section('body')

	@include($template . '.types.post-' . data_get($page->attributes->where('name', 'designTypePost')->first(), 'val', 3), array('template' => $template, 'page' => $page, 'categories' => $categories))

@stop
