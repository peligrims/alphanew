<div class="wrapper container-fluid ">
	<h3 class="container text-center">Documents</h3>
<div style="margin:0px 50px 0px 50px;">

	@if($documents)

	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>N</th>
				<th>Patential name</th>						
				<th>Comments</th>											
				<th>Date Create</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($documents as $k => $document)
			
			
			
			<tr>
				<td>{{ $document->id }}</td>
				<td>{!! Html::link(route('documentsEdit',['document'=>$document->id]), $document->potential->potential_name,['alt'=>$document->potential_id]) !!}</td>	
				
				
				<td>{{ $document->comments }}</td>							
				<td>{{ $document->created_at}}</td>
				<td>
					{!! Form::open(['url'=>route('documentsEdit',['document'=>$document->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}
					{{ method_field('DELETE') }}
					{!! Form::button('DELETE',['class'=>'btn btn-danger','type'=>'submit']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			
			@endforeach
		</tbody>
	</table>
	@endif
	{!! Html::link(route('documentsAdd'),'New Docoments') !!}
</div>
</div>