@extends('master2')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/tambah-user.css')}}">
	<link href="{{asset('public/css/baca-pengumuman.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
	<div class="box col-md-5 center" style="background-color: white">
            <div class="info">
                <h4 class="text-center"><strong>TAMBAH USER BARU</strong></h4>
                <hr/>
                 <div class="text-center">
                    <br/>
                    <p id="message">
                    	<div class="form-group">
                    		{!! Form::open(array('method' => 'POST', 'url' => '/tambah-user')) !!}
            				{!! Form::model(new App\User) !!}
            				{!! Form::label('username', 'Masukkan nama user :') !!}
            				{!! Form::text('username', '', array('class' => 'form-control', 'required' => true)) !!}
            				<br/>
            				{!! Form::label('email', 'Masukkan alamat-email :') !!}
            				{!! Form::text('email', '', array('class' => 'form-control', 'required' => true)) !!}
            				<br/>
            				{!! Form::label('password', 'Masukkan password :') !!}
            				<input type="password" name="password" class="form-control" id="password"></input>
            				<br/>
            				{!! Form::label('username', 'Masukkan ulang password :') !!}
            				<input type="password" class="form-control" id="retype-password"></input>
            				<br/>
            				{!! Form::submit('Tambahkan User', array('class' => 'btn btn-success center-block')) !!}
                    	</div>
                    </p>
                    <hr/>

                </div>  

            </div>

	</div>
</div>
@endsection