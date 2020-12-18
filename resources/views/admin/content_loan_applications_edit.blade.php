<div class="wrapper container-fluid">
	{!! Form::open(['url' => route('loan_applicationEdit',array('loan_application'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}

	<div class="form-group">
		{!! Form::hidden('id', $data['id']) !!}
		{!! Form::label('borrower ', 'borrower1 :',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('borrower', $data['borrower'], ['class' => 'form-control','placeholder'=>'Input borrower']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('loan_type', 'loan_type',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('loan_type', $data['loan_type'], ['class' => 'form-control','placeholder'=>'Введите loan_type']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('co_borrower', 'co_borrower',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('co_borrower', $data['co_borrower'], ['class' => 'form-control','placeholder'=>'Введите co_borrower']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('amount_requested', 'amount_requested',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('amount_requested', $data['amount_requested'], ['class' => 'form-control','placeholder'=>'Введите amount_requested']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('interest_rate', 'interest_rate',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('interest_rate', $data['interest_rate'], ['class' => 'form-control','placeholder'=>'Input interest_rate']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('amortization_type', 'amortization_type',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('amortization_type', $data['amortization_type'], ['class' => 'form-control','placeholder'=>'Input amortization_type']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('pes_requested_loan', 'pes_requested_loan',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('pes_requested_loan', $data['pes_requested_loan'], ['class' => 'form-control','placeholder'=>'Input pes_requested_loan']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('intended_loa_purpose', 'intended_loa_purpose',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('intended_loa_purpose', $data['intended_loa_purpose'], ['class' => 'form-control','placeholder'=>'Input intended_loa_purpose']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vesting', 'vesting',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('vesting', $data['vesting'], ['class' => 'form-control','placeholder'=>'Input vesting']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('spa_street', 'spa_street',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('spa_street', $data['spa_street'], ['class' => 'form-control','placeholder'=>'Input spa_street']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('spa_city', 'spa_city',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('spa_city', $data['spa_city'], ['class' => 'form-control','placeholder'=>'Input spa_city']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('spa_state', 'spa_state',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('spa_state', $data['spa_state'], ['class' => 'form-control','placeholder'=>'Input spa_state']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('spa_zip', 'spa_zip',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('spa_zip', $data['spa_zip'], ['class' => 'form-control','placeholder'=>'Input spa_zip']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('current_occupancy', 'current_occupancy',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('current_occupancy', $data['current_occupancy'], ['class' => 'form-control','placeholder'=>'Input current_occupancy']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('proposed_occupancy', 'proposed_occupancy',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('proposed_occupancy', $data['proposed_occupancy'], ['class' => 'form-control','placeholder'=>'Input proposed_occupancy']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('year_build', 'year_build',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('year_build', $data['year_build'], ['class' => 'form-control','placeholder'=>'Input year_build']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('type_of_property', 'type_of_property',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('type_of_property', $data['type_of_property'], ['class' => 'form-control','placeholder'=>'Input type_of_property']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_beneficiary', 'lcp_beneficiary',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_beneficiary', $data['lcp_beneficiary'], ['class' => 'form-control','placeholder'=>'Input lcp_beneficiary']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_lien_position', 'lcp_lien_position',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_lien_position', $data['lcp_lien_position'], ['class' => 'form-control','placeholder'=>'Input lcp_lien_position']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_interest_rate', 'lcp_interest_rate',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_interest_rate', $data['lcp_interest_rate'], ['class' => 'form-control','placeholder'=>'Input lcp_interest_rate']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_amortization_type', 'lcp_amortization_type',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_amortization_type', $data['lcp_amortization_type'], ['class' => 'form-control','placeholder'=>'Input lcp_amortization_type']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_monthly_payment', 'lcp_monthly_payment',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_monthly_payment', $data['lcp_monthly_payment'], ['class' => 'form-control','placeholder'=>'Input lcp_monthly_payment']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_balloon_payment_d', 'lcp_balloon_payment_d',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_balloon_payment_d', $data['lcp_balloon_payment_d'], ['class' => 'form-control','placeholder'=>'Input lcp_balloon_payment_d']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_balloon Payment_a', 'lcp_balloon Payment_a',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_balloon Payment_a', $data['lcp_balloon Payment_a'], ['class' => 'form-control','placeholder'=>'Input lcp_balloon Payment_a']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_lwr_on_title', 'lcp_lwr_on_title',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_lwr_on_title', $data['lcp_lwr_on_title'], ['class' => 'form-control','placeholder'=>'Input lcp_lwr_on_title']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_lws', 'lcp_lws',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_lws', $data['lcp_lws'], ['class' => 'form-control','placeholder'=>'Input lcp_lws']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_lwpo_from_lp', 'lcp_lwpo_from_lp',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_lwpo_from_lp', $data['lcp_lwpo_from_lp'], ['class' => 'form-control','placeholder'=>'Input lcp_lwpo_from_lp']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_add_lia', 'lcp_add_lia',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_add_lia', $data['lcp_add_lia'], ['class' => 'form-control','placeholder'=>'Input lcp_add_lia']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('construc_loan_y_l_a', 'construc_loan_y_l_a',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('construc_loan_y_l_a', $data['construc_loan_y_l_a'], ['class' => 'form-control','placeholder'=>'Input construc_loan_y_l_a']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('construc_loan_o_c_l', 'construc_loan_o_c_l',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('construc_loan_o_c_l', $data['construc_loan_o_c_l'], ['class' => 'form-control','placeholder'=>'Input construc_loan_o_c_l']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('construc_loan_a_e_l', 'construc_loan_a_e_l',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('construc_loan_a_e_l', $data['construc_loan_a_e_l'], ['class' => 'form-control','placeholder'=>'Input construc_loan_a_e_l']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('construc_loan_p_v_l', 'construc_loan_p_v_l',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('construc_loan_p_v_l', $data['construc_loan_p_v_l'], ['class' => 'form-control','placeholder'=>'Input construc_loan_p_v_l']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('construc_loan_p_r_b', 'construc_loan_p_r_b',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('construc_loan_p_r_b', $data['construc_loan_p_r_b'], ['class' => 'form-control','placeholder'=>'Input construc_loan_p_r_b']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('construc_loan_e_a_r_v', 'construc_loan_e_a_r_v',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('construc_loan_e_a_r_v', $data['construc_loan_e_a_r_v'], ['class' => 'form-control','placeholder'=>'Input construc_loan_e_a_r_v']) !!}
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