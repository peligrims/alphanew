<div class="wrapper container-fluid">
	{!! Form::open(['url' => route('loan_conditionsEdit',array('loan_conditions'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
	
    <div class="form-group">
		{!! Form::hidden('loan_conditions', $data['id']) !!}
		{!! Form::label('name_loan_condition ', 'Name loan condition:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
			{!! Form::text('name_loan_condition ', $data['name_loan_condition'], ['class' => 'form-control','placeholder'=>'Input name loan condition']) !!}
		 </div>
    </div>
	<div class="form-group">
		
		{!! Form::label('Comment', 'Comment:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('Comment', $data['Comment'], ['class' => 'form-control','placeholder'=>'Input name loan condition']) !!}
		</div>
	</div>
    
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10">
	      {!! Form::button('Save', ['class' => 'btn btn-primary','type'=>'submit']) !!}
	    </div>
	  </div>
    
{!! Form::close() !!}

 <script>
	CKEDITOR.replace( 'editor' );
</script>
</div>