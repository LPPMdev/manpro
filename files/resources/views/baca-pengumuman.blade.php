@extends('master2')

@section('css')
    <link href="{{asset('public/css/baca-pengumuman.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/custom-button.css')}}" rel="stylesheet">
@endsection

@section('content')
<br/><br/><br/>
<div classs="container">
	<div class="box col-md-5 center" style="background-color: white">
            <div class="info">
                <h4 class="text-center">{{$pengumuman->title}}</h4>
                <hr/>
                 <div class="text-center">
                    <br/>
                    <p id="message">{!!$pengumuman->content!!}</p>
                    <hr/>

                </div>  

            </div>

	</div>
	<br/><br/>
	<div class="text-center">
		@if(!$previous)
			<button class="btn btn-coklat" disabled>Sebelumnya</button>
		@else
		<a href="{{URL::to('/pengumuman/baca/'.$previous->id."/".$previous->title)}}"><button class="btn btn-coklat">Sebelumnya</button></a>
		@endif

		@if(!$next)
		<button class="btn btn-coklat" disabled>Selanjutnya</button>
		@else
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="{{URL::to('/pengumuman/baca/'.$next->id."/".$next->title)}}"></a>	<button class="btn btn-coklat">Berikutnya</button> 
		@endif
		 
	</div>

</div>
@endsection