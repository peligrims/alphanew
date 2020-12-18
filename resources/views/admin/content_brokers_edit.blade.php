<div class="wrapper container-fluid">
	{!! Form::open(['url' => route('brokersEdit',array('broker'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
	
    <div class="form-group">
    	{!! Form::hidden('id', $data['id']) !!}
		{!! Form::label('first_name ', 'first_name :',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
			{!! Form::text('first_name', $data['first_name'], ['class' => 'form-control','placeholder'=>'Input Borrower']) !!}
		 </div>
    </div>    
    <div class="form-group">
		{!! Form::label('last_name', 'last_name',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
			{!! Form::text('last_name', $data['last_name'], ['class' => 'form-control','placeholder'=>'Введитеloan_type']) !!}
		 </div>
    </div>
	<div class="form-group">
		{!! Form::label('phone', 'phone',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('phone', $data['phone'], ['class' => 'form-control','placeholder'=>'Введите phone']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('email', 'email',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('email', $data['email'], ['class' => 'form-control','placeholder'=>'Input emai']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('description', 'stredescriptionet',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('description', $data['description'], ['class' => 'form-control','placeholder'=>'Input description']) !!}
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