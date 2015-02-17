<div class="col-sm-12 col-md-6">
	<div class="row">
		<div class="col-sm-24">
			<div class="type-7-text text-center">
				@if(isset($data->images) && count($data->images)>0)
				<a href="{{ route('page.show', $data->id) }}">
					<img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-circle type-7-image">
				</a>
				@else
				<img data-src="holder.js/75x75" class="img-circle type-7-image">
				@endif				
				<h4>{{ $data->title or 'Title' }}</h4>
				<p>{{ $data->small_txt or 'Small Text' }}</p>
				<small class="text-muted type-2-information">
<strong>
@if(isset($data->created_at))
{{ \Carbon\Carbon::parse($data->created_at)->format("j F") }}
@endif
</strong>@if(isset($data->user))
{{ $data->user->username or null }}
@endif
</small>
			</div>
		</div>
	</div>
	<div class="row bolshaya-content-row">
		<div class="col-xs-24">
			<div class="bolshaya-mini-img-block"><img data-src="holder.js/75x75" class="img-circle">
			</div>
			<div class="bolshaya-mini-text-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</div>
		</div>
	</div>
</div>