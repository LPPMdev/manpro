@extends('master2')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/tulis-berita.css')}}">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
    <link href="{{asset('public/css/input-image.css')}}" rel="stylesheet">
@endsection

@section('content')
    <br/><br/><br/><br/>
    <div class="container">
        <div class="form-group">
            {!! Form::open(array('files' => true, 'method' => 'POST', 'url' => '/buat-pengumuman')) !!}
            {!! Form::model(new App\Blogposts) !!}
            {!! Form::token() !!}
                <div class="input-group  col-sm-5 center-block">
                {!! HTML::decode(Form::label('title', 'Judul Pengumuman : <sup style="color:red">*</sup>', $attributes = array('style' => 'margin-left: 40%'))) !!}
                {!! Form::text('title', '', array('class' => 'form-control', 'required' => true)) !!}
                
                </div>               
                <br/><br/><br/>
                <textarea id="summernote" name="content" required></textarea>
 
                <br/>

                <div class="row">    
                    <br/><br/>
                    {!! Form::submit('Publish Pengumuman', array('class' => 'btn btn-success center-block')) !!}
                </div>

            {!! Form::close() !!}
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{asset('public/js/summernote.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/js/tulis-berita.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/tulis-berita2.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/input-image.js')}}"></script>
@endsection