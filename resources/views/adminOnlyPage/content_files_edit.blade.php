<div class="wrapper container-fluid">
{!! Form::open(['url' => route('fileuploadEdit',array('file'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
    		{!! Form::hidden('id', $data['id']) !!}
	     {!! Form::label('filename', 'Name:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('filename', $data['filename'], ['class' => 'form-control','placeholder'=>'Input filename']) !!}
		 </div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('status', 'Status:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::select('status',array('Uploaded' => 'Uploaded','Verification' => 'Verification', 'Approval' => 'Approval','Rejected' => 'Rejected'), ['class' => 'form-control','placeholder'=>'Input status document']) !!}
		 </div>
    </div>
     <div class="form-group">
    	{!! Form::hidden('id', $data['id']) !!}
	     {!! Form::label('comment', 'Comment:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::textarea('comment', $data['comment'], ['class' => 'form-control','placeholder'=>'Input comment']) !!}
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