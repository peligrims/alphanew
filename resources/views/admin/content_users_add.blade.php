<div class="wrapper container-fluid">

	{!! Form::open(['url' => route('UsersAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 	
	
	<div class="form-group">
		
		{!! Form::label('name','Name',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('name',old('name'),['class' => 'form-control','placeholder'=>'Input Name User'])!!}
		</div>
	
	</div>
	<div class="form-group">
		{!! Form::label('email', 'email:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('email', old('email'), ['class' => 'form-control','placeholder'=>'Input type email']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('password', 'password:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::password('password', old('password'), ['class' => 'form-control','placeholder'=>'Input type email']) !!}
		</div>
	</div>
	
	
    
    <div class="form-group">
	     {!! Form::label('type', 'Type:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
			{!! Form::text('type', old('type'), ['class' => 'form-control','placeholder'=>'Input type user']) !!}
		 </div>
    </div>
    
   
    
    
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10">
	      {!! Form::button('Save', ['class' => 'btn btn-primary','type'=>'submit']) !!}
	    </div>
	  </div>
	
	
	
	{!! Form::close() !!}
	
	<script>
		CKEDITOR.replace('editor');
	</script>
	
</div>