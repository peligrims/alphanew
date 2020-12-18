<div class="wrapper container-fluid">

	{!! Form::open(['url' => route('brokersAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 	
	
	<div class="form-group">
		
		{!! Form::label('first_name','First name',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('first_name',old('first_name'),['class' => 'form-control','placeholder'=>'Input First name'])!!}
		</div>
	
	</div>
	<div class="form-group">
		
		{!! Form::label('last_name','Last name',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('last_name',old('last_name'),['class' => 'form-control','placeholder'=>'Input Last name'])!!}
		</div>
	
	</div>
	<div class="form-group">
		
		{!! Form::label('Phone','Phone',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('Phone',old('Phone'),['class' => 'form-control','placeholder'=>'Phone'])!!}
		</div>
	
	</div>
	<div class="form-group">

		{!! Form::label('email','email',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('email',old('email'),['class' => 'form-control','placeholder'=>'email'])!!}
		</div>

	</div>
	<div class="form-group">
		
		{!! Form::label('description','description',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('description',old('description'),['class' => 'form-control','placeholder'=>'description'])!!}
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
