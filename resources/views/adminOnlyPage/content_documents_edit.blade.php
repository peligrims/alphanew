<div class="wrapper container-fluid">
	{!! Form::open(['url' => route('documentsEdit',array('document'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
    	{!! Form::hidden('id', $data['id']) !!}
		{!! Form::label('$data->potential_id', 'Potential name:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
			{!! Form::text('$data->potential_id','', ['class' => 'form-control','placeholder'=>'Input potential name']) !!}
		 </div>
    </div>
	
    
    <div class="form-group">
	     {!! Form::label('img', 'File document:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::file('img', ['class' => 'filestyle','data-buttonText'=>'Upload file','data-buttonName'=>"btn-primary",'data-placeholder'=>"No File"]) !!}
		 </div>
    </div>
    

    
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10">
	      {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']) !!}
	    </div>
	  </div>
    
{!! Form::close() !!}

 <script>
	CKEDITOR.replace( 'editor' );
</script>
</div>