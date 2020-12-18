<div class="wrapper container-fluid">
	{!! Form::open(['url' => route('UsersEdit',array('user'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
    	{!! Form::hidden('id', $data['id']) !!}
	     {!! Form::label('name', 'Name:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'Input Name']) !!}
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
			{!!Form::select('type', array('admin' => 'admin', 'member' => 'member', 'super_admin' => 'super_admin')) !!}
		 	
		 </div>
    </div>
    
    

    
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10">
	      {!! Form::button('save', ['class' => 'btn btn-primary','type'=>'submit']) !!}
	    </div>
	  </div>
    
{!! Form::close() !!}

 <script>
	CKEDITOR.replace( 'editor' );
</script>
</div>