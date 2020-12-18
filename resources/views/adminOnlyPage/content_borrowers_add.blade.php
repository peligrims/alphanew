<div class="wrapper container-fluid text-center">
<h2>Add borrower add</h2>

	{!! Form::open(['url' => route('borrowersAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 	
	

	<div class="form-group">
		
				{!! Form::label('account_name','Account name borrower',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('account_name',old('account_name'),['class' => 'form-control','placeholder'=>'Input account name'])!!}
		</div>
	
	</div>
	<div class="form-group">
		
				{!! Form::label('contact_name','Contact name borrower',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('contact_name',old('contact_name'),['class' => 'form-control','placeholder'=>'Input contact name'])!!}
		</div>
	
	</div>
	<div class="form-group">

		{!! Form::label('phone1','Phone',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('phone1',old('phone1'),['class' => 'form-control','placeholder'=>'Input phone'])!!}
		</div>

	</div>
	<div class="form-group">
		
		{!! Form::label('email1','Email',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('email1',old('email1'),['class' => 'form-control','placeholder'=>'Input email'])!!}
		</div>
	
	</div>
	<div class="form-group">

		{!! Form::label('city','city',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('city',old('city'),['class' => 'form-control','placeholder'=>'Input city'])!!}
		</div>

	</div>
	<div class="form-group">

		{!! Form::label('street','street',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('street',old('street'),['class' => 'form-control','placeholder'=>'Input street'])!!}
		</div>

	</div>
	<div class="form-group">

		{!! Form::label('state','State',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('state',old('state'),['class' => 'form-control','placeholder'=>'Input state'])!!}
		</div>

	</div>
	<div class="form-group">

		{!! Form::label('zip','zip',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('zip',old('zip'),['class' => 'form-control','placeholder'=>'Input zip'])!!}
		</div>

	</div>
	<div class="form-group">

		{!! Form::label('citizenship','Citizenship',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('citizenship',old('citizenship'),['class' => 'form-control','placeholder'=>'Input citizenship'])!!}
		</div>

	</div>

	
    
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10">
	      {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']) !!}
	    </div>
	  </div>
	
	
	
	{!! Form::close() !!}
	
	<script>
		CKEDITOR.replace('editor');
	</script>
	
</div>
