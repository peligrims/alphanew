<div class="wrapper container-fluid text-center">
<h2>Add Therm sheet</h2>

	{!! Form::open(['url' => route('term_sheetsAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}


	
	<div class="form-group">
		{!! Form::label('Borrower_id', 'Borrover name:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::select('Borrower_id', $borrowers,null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('potential_id', 'Potentials name:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::select('potential_id', $potentials,null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('eva1', 'Estimated Value of Asset:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('eva1', old('eva1'), ['class' => 'form-control','placeholder'=>'Input Estimated Value of Asset']) !!}</div>

	</div>
	<div class="form-group">
		{!! Form::label('loan_amount1', 'Loan Amount:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('loan_amount1', old('loan_amount1'), ['class' => 'form-control','placeholder'=>'Input Loan Amount']) !!}</div>

	</div>
	<div class="form-group">
		{!! Form::label('use_of_funds', 'Use of Funds:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('use_of_funds', old('use_of_funds'), ['class' => 'form-control','placeholder'=>'Input Use of Funds']) !!}</div>

	</div>
	<div class="form-group">
		{!! Form::label('max_ltv', 'Maximum LTV:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('max_ltv', old('max_ltv'), ['class' => 'form-control','placeholder'=>'Input Maximum LTV']) !!}</div>

	</div>
	<div class="form-group">
		{!! Form::label('term', 'Term:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('term', old('term'), ['class' => 'form-control','placeholder'=>'Input Term']) !!}</div>

	</div>
	<div class="form-group">
		{!! Form::label('interest_rate', 'Interest Rate:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('interest_rate', old('interest_rate'), ['class' => 'form-control','placeholder'=>'Input interest rate']) !!}</div>

	</div>
	<div class="form-group">
		{!! Form::label('loan_ext_option', 'Loan Extension Option:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('loan_ext_option', old('loan_ext_option'), ['class' => 'form-control','placeholder'=>'Input Loan Extension Option']) !!}</div>

	</div>
	<div class="form-group">
		{!! Form::label('amortization', 'Amortization:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('amortization', old('amortization'), ['class' => 'form-control','placeholder'=>'Input amortization']) !!}</div>

	</div>
	<div class="form-group">
		{!! Form::label('yield_maintenance', 'Yield Maintenance:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('yield_maintenance', old('yield_maintenance'), ['class' => 'form-control','placeholder'=>'Input Yield Maintenance']) !!}</div>

	</div>
	<div class="form-group">
		{!! Form::label('structure', 'Structure:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('structure', old('structure'), ['class' => 'form-control','placeholder'=>'Input Yield Structure']) !!}</div>

	</div>
	<div class="form-group">
		{!! Form::label('original_fee', 'Origination Fee:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('original_fee', old('original_fee'), ['class' => 'form-control','placeholder'=>'Input Origination Fee']) !!}</div>

	</div>
	<div class="form-group">
		{!! Form::label('exit_fee', 'Exit Fee:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('exit_fee', old('exit_fee'), ['class' => 'form-control','placeholder'=>'Input Exit Fee']) !!}</div>

	</div>
	<div class="form-group">
		{!! Form::label('broker_fee', 'Broker Fee:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('broker_fee', old('broker_fee'), ['class' => 'form-control','placeholder'=>'Input Broker Fee']) !!}</div>

	</div>
	<div class="form-group">
		{!! Form::label('due_diligence_fee', 'Due Diligence Fee:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('due_diligence_fee', old('due_diligence_fee'), ['class' => 'form-control','placeholder'=>'Input Due Diligence Fee']) !!}</div>

	</div>


	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('Save', ['class' => 'btn btn-primary','type'=>'submit']) !!}
		</div>
	</div>
	
	

	{!! Form::close() !!}

</div>
