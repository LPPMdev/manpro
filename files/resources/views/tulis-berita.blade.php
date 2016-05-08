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
            {!! Form::open(array('files' => true, 'method' => 'POST', 'url' => '/tulis-berita')) !!}
            {!! Form::model(new App\Blogposts) !!}
            {!! Form::token() !!}
                <div class="input-group  col-sm-5 center-block">
                {!! HTML::decode(Form::label('title', 'Judul Berita : <sup style="color:red">*</sup>', $attributes = array('style' => 'margin-left: 40%'))) !!}
                {!! Form::text('title', '', array('class' => 'form-control', 'required' => true)) !!}
                
                </div>               
                <br/><br/><br/>
                <textarea id="summernote" name="content" required></textarea>
 
                {!! HTML::decode(Form::label('description', 'Deskripsi Singkat : <sup style="color:red">*</sup>', $attributes = array('style' => 'margin-left: 45%'))) !!}
                <br/>
                {!! Form::textarea('description', '', array('required' => true, 'style' => 'margin-left: 39%; max-width: 250px; max-height: 100px;','class' => 'form-control')) !!}
                <br/>
                {!! HTML::decode(Form::label('image', 'Gambar Header : <sup style="color:red">*</sup>', $attributes = array('style' => 'margin-left: 45%'))) !!}


                <div class="row">    
                    <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">  
                        <!-- image-preview-filename input [CUT FROM HERE]-->
                        <div class="input-group image-preview">
                            <input type="text" class="form-control image-preview-filename col-sm-5" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                            <span class="input-group-btn">
                                <!-- image-preview-clear button -->
                                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                    <span class="glyphicon glyphicon-remove"></span> Clear
                                </button>
                                <!-- image-preview-input -->
                                <div class="btn btn-default image-preview-input">
                                    <span class="glyphicon glyphicon-folder-open"></span>
                                    <span class="image-preview-input-title">Browse</span>
                                    {!! Form::file('image', $attributes = array( 'accept' => 'image/png, image/jpeg, image/gif', 'required' => true)) !!}
                            </span>
                        </div><!-- /input-group image-preview [TO HERE]--> 
                    </div>
                    <br/><br/>
                    {!! Form::submit('Publish Berita', array('class' => 'btn btn-success center-block')) !!}
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