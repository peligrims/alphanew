<div style="margin:0px 50px 0px 50px;">
	<div class="wrapper container-fluid text-center">
	<h2>Potential name</h2>
	@if($potentials)	
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>N </th>
				<th>Potential name:</th>
				<th>Borrower name:</th>
				<th>created at</th>
				<th>updated at</th>
			</tr>
		</thead>
		<tbody>
			@foreach($potentials as $potential)		
			<tr>
				<td>{{ $potential->id }}</td>
				<td>{!! Html::link(route('potentialsEdit',['potential'=>$potential->id]),$potential->potential_name,['alt'=>$potential->potential_name]) !!}</td>
				<td>{{$potential->Borrower['account_name']}}</td>
				<td>{{$potential->created_at}}</td>
				<td>{{$potential->updated_at}}</td>
				<td>
					{!! Form::open(['url' => route('potentialsEdit',['potential'=>$potential->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
					{{ method_field('DELETE') }}
					{!! Form::button('DELETE', ['class' => 'btn btn-danger','type'=>'submit']) !!}
					{!! Form::close() !!}
				</td>

			</tr>
			@endforeach
		</tbody>
	</table> 	
	@endif
	{!! Html::link(route('potentialsAdd'),'New Potential name') !!}
		</div>
</div>