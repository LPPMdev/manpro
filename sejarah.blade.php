@extends('master2')

@section('css')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
@endsection


@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h1>SEJARAH LPPM</h1>
                <hr/>

                <!-- Preview Image -->
                <img class="img-responsive" src="{{asset('public/images/placeholders/500x500.png')}}" alt="" style="width: 900px; height: 400px;">

                <hr>
                <div id="content">
                {!! $content->value !!}                   
                </div>
                @if(Auth::check())
                <button id="edit" class="btn btn-default"> Edit</button>
                
                <div id="editor" hidden>
                    {!! Form::open(array('method' => 'POST', 'url' => '/sejarah')) !!}
                    <textarea id="summernote" name="content" required></textarea>
                    <button id="cancel" class="btn btn-danger" type="button"> Batal</button>
                    {!! Form::submit('Simpan', array('class' => 'btn btn-success', 'id' => 'save')) !!}
                    {!! Form::close() !!}                
                </div>
                @endif
            </div>

            <!-- Blog Sidebar Widgets Column -->
            @include('sidebar')

        </div>
        <!-- /.row -->

        <hr>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('public/js/sidebar.js') }}"></script>
    <script src="{{asset('public/js/summernote.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/js/sejarah.js') }}"></script>
@endsection