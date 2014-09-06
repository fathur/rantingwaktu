@extends('layouts.master')

@section('content')
{{$users->links()}}
<table class="table table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th>User</th>
			<th>Group</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		
		{{-- Kode dibawah bukanlah komentar, melainkan assign 
		variabel $i	ke blade template view.--}}
		{{-- */ $i=1; /* --}}

		@foreach ($users as $user)
		<tr>
			<td>{{ $i }}</td>
			<td>{{$user->email}}</td>
			<td></td>
			<td>
				
				<div class="btn-group">
					<a href="{{URL::route('user.show', ['fathur'])}}" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a href="{{URL::route('user.edit', ['fathur'])}}" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
					{{Form::open(['route'=>['user.destroy','fathur'],'method'=>'delete'])}}
					<a href="{{URL::route('user.edit', ['fathur'])}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a>
					{{Form::close()}}
				</div>
			</td>
		</tr>

		{{-- Kode dibawah bukanlah komentar, melainkan incrementing 
		variabel $i	pada blade template.--}}
		{{-- */ $i++; /*--}}

		@endforeach
	</tbody>
</table>

{{$users->links()}}
@stop