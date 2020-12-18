<div class="wrapper container-fluid text-center">
	<h2>Edit potential name</h2>
	
	{!! Form::open(['url' => route('borrowersEdit',array('borrower'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
	

	<div class="form-group">
		{!! Form::hidden('id', $data['id']) !!}
		{!! Form::label('account_name ', 'account_name :',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('account_name', $data['account_name'], ['class' => 'form-control','placeholder'=>'Input Borrower']) !!}
		</div>
	</div> 
   
    <div class="form-group">
		{!! Form::label('contact_name', 'contact_name',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
			{!! Form::text('contact_name', $data['contact_name'], ['class' => 'form-control','placeholder'=>'Введитеloan_type']) !!}
		 </div>
    </div>
	<div class="form-group">
		{!! Form::label('phone1', 'phone1',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('phone1', $data['phone1'], ['class' => 'form-control','placeholder'=>'Введите phone1']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('email1', 'email',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('email1', $data['email1'], ['class' => 'form-control','placeholder'=>'Input email']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('street', 'street',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('street', $data['street'], ['class' => 'form-control','placeholder'=>'Input street']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('city', 'city',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('city', $data['city'], ['class' => 'form-control','placeholder'=>'Input city']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('state', 'state',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('state', $data['state'], ['class' => 'form-control','placeholder'=>'state']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('zip', 'zip',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('zip', $data['zip'], ['class' => 'form-control','placeholder'=>'Input zip']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('citizenship', 'citizenship',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('citizenship', $data['citizenship'], ['class' => 'form-control','placeholder'=>'Input citizenship']) !!}
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