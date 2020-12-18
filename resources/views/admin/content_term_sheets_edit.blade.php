<div class="wrapper container-fluid text-center">
<h2>Therm sheet edit</h2>
	{!! Form::open(['url' => route('term_sheetsEdit',array('term_sheet'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
	
    <div class="form-group">
    	{!! Form::hidden('id', $data['id']) !!}
		{!! Form::label('borrower_id', 'Borrower:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
			{!! Form::text('borrower_id', $data['borrower_id'], ['class' => 'form-control','placeholder'=>'Input Borrower']) !!}
		 </div>
    </div>
  


	
	<div class="form-group">
		{!! Form::label('potential_id', 'Potential id',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('potential_id', $data['potential_id'], ['class' => 'form-control','placeholder'=>'Введите potential_id']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('eva1', 'eva1',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('eva1', $data['eva1'], ['class' => 'form-control','placeholder'=>'Введите eva1']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('loan_amount1', 'loan_amount1',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('loan_amount1', $data['loan_amount1'], ['class' => 'form-control','placeholder'=>'Введите loan_amount1']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('use_of_funds', 'use_of_funds',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('use_of_funds', $data['use_of_funds'], ['class' => 'form-control','placeholder'=>'Введите use_of_funds']) !!}
		</div>
	</div> 
	<div class="form-group">
		{!! Form::label('max_ltv', 'max_ltv',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('max_ltv', $data['max_ltv'], ['class' => 'form-control','placeholder'=>'Введите max_ltv']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('term', 'term',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('term', $data['term'], ['class' => 'form-control','placeholder'=>'Введите term']) !!}
		</div>
	</div> 
	<div class="form-group">
		{!! Form::label('interest_rate', 'interest_rate',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('interest_rate', $data['interest_rate'], ['class' => 'form-control','placeholder'=>'Введите interest_rate']) !!}
		</div>
	</div>  
	<div class="form-group">
		{!! Form::label('loan_ext_option', 'loan_ext_option',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('loan_ext_option', $data['loan_ext_option'], ['class' => 'form-control','placeholder'=>'Введите loan_ext_option']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('amortization', 'amortization',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('amortization', $data['amortization'], ['class' => 'form-control','placeholder'=>'Введите amortization']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('yield_maintenance', 'yield_maintenance',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('yield_maintenance', $data['yield_maintenance'], ['class' => 'form-control','placeholder'=>'Введите yield_maintenance']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('structure', 'structure',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('structure', $data['structure'], ['class' => 'form-control','placeholder'=>'Введите structure']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('original_fee', 'original_fee',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('original_fee', $data['original_fee'], ['class' => 'form-control','placeholder'=>'Введите original_fee']) !!}
		</div>
	</div> 
	<div class="form-group">
		{!! Form::label('exit_fee', 'exit_fee',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('exit_fee', $data['exit_fee'], ['class' => 'form-control','placeholder'=>'Введите exit_fee']) !!}
		</div>
	</div> 
	<div class="form-group">
		{!! Form::label('broker_fee', 'broker_fee',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('broker_fee', $data['broker_fee'], ['class' => 'form-control','placeholder'=>'Введите broker_fee']) !!}
		</div>
	</div> 
	<div class="form-group">
		{!! Form::label('due_diligence_fee', 'due_diligence_fee',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('due_diligence_fee', $data['due_diligence_fee'], ['class' => 'form-control','placeholder'=>'Введите due_diligence_fee']) !!}
		</div>
	</div>     
   
	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('SAVE', ['class' => 'btn btn-primary','type'=>'submit']) !!}
		</div>
	</div>
	
	
	
	
    
{!! Form::close() !!}

 <script>
	CKEDITOR.replace( 'editor' );
</script>
</div>