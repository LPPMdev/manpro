@extends('master2')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('public/css/pengumuman2.css')}}">
@endsection

@section('content')
<div class="container">
	<div class="row" style="margin-top: 80px;">
	<div class="timeline-centered">	
	@foreach($pengumumans as $i => $pengumuman)
		@if(fmod($i, 2) == 0)
			<article class="timeline-entry left-aligned">			
				<div class="timeline-entry-inner">
					<time class="timeline-time" datetime="{{$pengumuman->created_at}}"><span>{{substr($pengumuman->created_at,0,11)}}</span><span>{{date("D", strtotime($pengumuman->created_at))}}</span></time>
					
					<div class="timeline-icon bg-info">
						<i class="entypo-suitcase"></i>
					</div>
					
					<div class="timeline-label">
						<h2><a href="{{"pengumuman/baca/".$pengumuman->id."/".$pengumuman->url}}" style="color: #21A9E1">{{$pengumuman->title}}</a> </h2>

						<hr/>
						<p>{!!$pengumuman->content!!}</p>
					</div>
				</div>
				
			</article>
		@else
			<article class="timeline-entry">			
				<div class="timeline-entry-inner">
					<time class="timeline-time" datetime="{{$pengumuman->created_at}}"><span>{{substr($pengumuman->created_at,0,11)}}</span><span>{{date("D", strtotime($pengumuman->created_at))}}</span></time>			
					<div class="timeline-icon bg-success">
						<i class="entypo-feather"></i>
					</div>
					<div class="timeline-label">

						<h2><a href="{{$pengumuman->url}}" style="color: #00a651">{{$pengumuman->title}}</a></h2>
						<br/>
						<hr/>
						<p>{!!$pengumuman->content!!}</p>				
					</div>								
				</div>			
			</article>
		@endif
	@endforeach

		<article class="timeline-entry begin">
		
			<div class="timeline-entry-inner">
				
				<div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
					<i class="entypo-flight"></i>
				</div>
				
			</div>
			
		</article>
		
	</div>
	</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('public/js/pengumuman2.js')}}"></script>
@endsection

@stop