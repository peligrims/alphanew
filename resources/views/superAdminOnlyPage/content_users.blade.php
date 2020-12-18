<div style="margin:0px 50px 0px 50px;">

	@if($users)

	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>N</th>
				<th>Name</th>
				<th>Email</th>
				<th>Type</th>
				<th>Date</th>

				<th>Удалить</th>
			</tr>
		</thead>
		<tbody>

			@foreach($users as $k => $user)

			<tr>

				<td>{{ $user->id }}</td>
				<td>{!! Html::link(route('UsersEdit',['user'=>$user->id]),$user->name,['alt'=>$user->name]) !!}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->type }}</td>
				<td>{{ $user->created_at }}</td>

				<td>
					{!! Form::open(['url'=>route('UsersEdit',['user'=>$user->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}
					{{ method_field('DELETE') }}
					{!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
					{!! Form::close() !!}
				</td>
			</tr>

			@endforeach


		</tbody>
	</table>
	@endif
	{!! Html::link(route('usersadd'),'Add User')!!}
	

</div>