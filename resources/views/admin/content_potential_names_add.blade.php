
<div class="wrapper container-fluid text-center ">
	<h1 class="">POTENTIAL NAME</h1>
	{!! Form::open(['url' => route('potentialsAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}

	<div class="form-group">
	{!! Form::label('potential_name', 'Potential name:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
	    {!! Form::text('potential_name', old('potential_name'), ['class' => 'form-control','placeholder'=>'Input potential name']) !!}</div>
		</div>	
	<div class="form-group">
	{!! Form::label('Borrower_id', 'Borrover name:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">						
			{!! Form::select("borrower_id", $borrowers,null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('Save', ['class' => 'btn btn-primary','type'=>'submit']) !!}
		</div>
	</div>	
	{!! Form::close() !!}

</div>
