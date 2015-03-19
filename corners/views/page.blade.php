@extends($template.'.layout.base')

@section('meta-properties')
<meta name="keywords" content="{{ implode(',',$page->tags->lists('name')) }}" />
<meta name="description" content="{{ strip_tags($page->small_txt) }}" />
<meta property="og:type"            content="article" />
<title>{{ $page->title or null }} — {{ db_parameter('SITE_TITLE') }}</title>
<meta name="title" content="{{ $page->title or null }} — {{ db_parameter('SITE_TITLE') }}" />
<meta property="og:title"           content="{{ $page->title or null }}" />
<meta property="og:description"     content="{{ strip_tags($page->small_txt) }}"/>
<!--<meta property="article:author"     content="" />-->
<meta property="article:modified_time" content="{{ $page->updated_at or null }}" />
<meta property="article:published_time" content="{{ $page->created_at or null }}" />
<meta property="article:section"    content="@if(isset($categories) && count($categories)>0)
@foreach($categories as $category)
{{ $category->title }}, @endforeach
@endif" />
<meta property="article:tag"        content="{{ implode(',',$page->tags->lists('name')) }}" />
<meta property="twitter:card"       content="summary_large_image" />
<meta property="twitter:description" content="{{ strip_tags($page->small_txt) }}" />
<meta property="twitter:domain"     content="{{ app('veer')->siteUrl }}" />

<meta property="twitter:site"       content="@BolshayaNet" />
<meta property="twitter:title"      content="{{ $page->title or null }}" />
@if(isset($page->images) && count($page->images)>0)
<meta property="og:image"           content="{{ asset(config('veer.images_path').'/'.$page->images->first()->img) }}" />
<meta property="twitter:image:src"  content="{{ asset(config('veer.images_path').'/'.$page->images->first()->img) }}" />
@endif
@stop

@section('body')

<?php 
    event('page.images', [[$page->imagesIds, $page->attributes->lists('val', 'name')]]);
    event('page.neighbours', [$page->id]);
?>
@include($template . '.types.post.' . data_get($page->attributes->where('name', 'designTypePost')->first(), 'val', 1), array('template' => $template, 'page' => $page, 'categories' => $categories))

@if(veer_get('event.neighbours.exists') == true)
<div class="myToastr">
    @if(veer_get('event.neighbours.previous.title') != null)<div class="page-neighbours-previous"><a href="{{ route('page.show', veer_get('event.neighbours.previous.url')) }}" title="{{ veer_get('event.neighbours.previous.title') }}">{{ str_limit(veer_get('event.neighbours.previous.title'), 45) }}</a> &rarr;</div>@endif
    @if(veer_get('event.neighbours.next.title') != null)<div class="page-neighbours-next hidden-xs hidden-sm">&larr; <a href="{{ route('page.show', veer_get('event.neighbours.next.url')) }}" title="{{ veer_get('event.neighbours.next.title') }}">{{ str_limit(veer_get('event.neighbours.next.title'), 45) }}</a></div>@endif
</div>
@endif

@stop

@section('javascript-plugins')
@parent
@if(veer_get('event.neighbours.exists') == true)
<script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/toastr-startup.js') }}"></script>
@endif
@stop