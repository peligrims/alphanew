<div class="wrapper container-fluid text-center">
	<h2>Add Document list for Term sheet </h2>

	{!! Form::open(['url' => route('documentsAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 		
	<div class="form-group">		
		{!! Form::label('potential_id','Potential Name',['class' => 'col-xs-2'])   !!}
		<div class="col-xs-8">
			{!! Form::select("potential_id",$potentials,null,array('class' => 'form-control')) !!}	
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('loan_condition_id','Loan conditione',['class' => 'col-xs-2'])   !!}
		<div class="col-xs-8">
			{!! Form::select("loan_condition_id",$loan_conditions ,null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('comments', 'Comments:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('comments', old('comments'), ['class' => 'form-control','placeholder'=>'Input comments']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('images', 'Upload document:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::file('images', ['class' => 'filestyle','data-buttonText'=>'Select the file to Upload','data-buttonName'=>"btn-primary",'data-placeholder'=>"The file is not"]) !!}
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
