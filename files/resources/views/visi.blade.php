@extends('master2')

@section('css')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/staff.css')}}">
@endsection

@section('content')
<br/>
<div class="container">
	<div class="row row-centered">
		{!! Form::open(array('method' => 'POST', 'url' => '/visi-misi')) !!}
			
			<div id="content">
			{!! $content->value!!}	
			</div>
			<textarea id="summernote" name="content" required hidden></textarea>
			<br/>
			@if(Auth::check())
			<div id="button">
				<button id="edit" class="btn btn-default"> Edit</button> <button id="cancel" class="btn btn-danger" type="button"> Batal</button>
				{!! Form::submit('Simpan', array('class' => 'btn btn-success', 'id' => 'save')) !!}
			</div>
			@endif
		</form>
	</div>
</div>
<br/><br/>
@endsection

@section('scripts')
	<script src="{{asset('public/js/summernote.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/js/summernote-custom.js')}}"></script>
@endsection