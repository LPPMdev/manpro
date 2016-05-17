@extends('master2')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/edit-user.css')}}">
@endsection

@section('content')
	<div class="container">
		<table class="table table-hover table-striped primary" style="width: 700px; margin: auto;">
			<thead>
				<th id="no">No.</th>
				<th id="username">Username</th>
				<th id="email">Email</th>
				<th id="opsi">Opsi</th>
			</thead>
			<tbody>
			@foreach($users as $key=>$user)
				<tr>
					<td>{{$key+1}}{{"."}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>					
						<td>
							@if(Auth::user()->name == $user->name || Session::has('isAdmin'))
								<a href="{{url('/edit-user/'.$user->name)}}" target="_blank"><button class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</button></a>
							@endif	
						@if(Session::has('isAdmin'))
							@if($user->isAdmin == 1)						
								<a href="{{url('/hapus-admin/'.$user->name)}}" target="_blank"><button class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Hapus Status Admin</button></a>							
							@else
							
								<a href="{{url('/tambah-admin/'.$user->name)}}" target="_blank"><button class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Jadikan Admin</button></a>								
							@endif

						<a href="{{url('/hapus-user/'.$user->name)}}" target="_blank"><button class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus User</button></a>
						@endif
					</td>
				</tr>				
			@endforeach
		
			</tbody>
		</table>
	</div>
@endsection