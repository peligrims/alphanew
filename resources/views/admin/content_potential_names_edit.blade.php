<div class="wrapper container-fluid">
	{!! Form::open(['url' => route('potentialsEdit',array('potential_names'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
	
    <div class="form-group">
    	{!! Form::hidden('id', $data['id']) !!}
		{!! Form::label('potential_name', 'potential name:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
			{!! Form::text('potential_name', $data['potential_name'], ['class' => 'form-control','placeholder'=>'Input Potential name']) !!}
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