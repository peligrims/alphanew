
<div class="wrapper container-fluid text-center">
<h1>ADD LOAN CONDITIONS</h1>

	{!! Form::open(['url' => route('loan_conditionsAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
	<div class="form-group">
		{!! Form::label('name_loan_condition', 'Loan condition:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('name_loan_condition', old('name_loan_condition'), ['class' => 'form-control','placeholder'=>'Input  name loan condition']) !!}</div>

	</div>
	<div class="form-group">
		{!! Form::label('Comment', 'Comment:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('Comment', old('Comment'), ['class' => 'form-control','placeholder'=>'Input comment']) !!}</div>

	</div>
	
	
	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('Save', ['class' => 'btn btn-primary','type'=>'submit']) !!}
		</div>
	</div>
	
	

	{!! Form::close() !!}

</div>
