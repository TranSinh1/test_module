@extends('test')

@section('title', 'Page list')
@section('sidebar')
	@parent

	<p>ta la sidebar day</p>
@endsection

@section('content')
	<table cellpadding="1" cellspacing="1" border="1">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Action</th>
		</thead>
		<tbody>
			@foreach ($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
	                    <a href="/users/update/{{ $user->id }}">Update</a> <br> 
	                    <a href="/users/delete/{{ $user->id }}">Delete</a>
	                <td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
