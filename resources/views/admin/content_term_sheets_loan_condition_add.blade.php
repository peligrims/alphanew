@extends('layouts.admin')

@section('header')

@include('admin.header')

@endsection

@section('content')

<div>
	<div class="">
		<h2>Add Therm sheet</h2>
		{!! Form::open(['url' => route('term_sheetsAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}

		<div class="form-group">
			{!! Form::label('Borrower_id', 'Borrover name:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::select('Borrower_id', $borrowers,null,array('class' => 'form-control')) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('potential_id', 'Potentials name:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::select('potential_id', $potentials,null,array('class' => 'form-control')) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('eva1', 'Estimated Value of Asset:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('eva1', old('eva1'), ['class' => 'form-control','placeholder'=>'Input Estimated Value of Asset']) !!}</div>

		</div>
		<div class="form-group">
			{!! Form::label('loan_amount1', 'Loan Amount:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('loan_amount1', old('loan_amount1'), ['class' => 'form-control','placeholder'=>'Input Loan Amount']) !!}</div>

		</div>
		<div class="form-group">
			{!! Form::label('use_of_funds', 'Use of Funds:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('use_of_funds', old('use_of_funds'), ['class' => 'form-control','placeholder'=>'Input Use of Funds']) !!}</div>

		</div>
		<div class="form-group">
			{!! Form::label('max_ltv', 'Maximum LTV:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('max_ltv', old('max_ltv'), ['class' => 'form-control','placeholder'=>'Input Maximum LTV']) !!}</div>

		</div>
		<div class="form-group">
			{!! Form::label('term', 'Term:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('term', old('term'), ['class' => 'form-control','placeholder'=>'Input Term']) !!}</div>

		</div>
		<div class="form-group">
			{!! Form::label('interest_rate', 'Interest Rate:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('interest_rate', old('interest_rate'), ['class' => 'form-control','placeholder'=>'Input interest rate']) !!}</div>

		</div>
		<div class="form-group">
			{!! Form::label('loan_ext_option', 'Loan Extension Option:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('loan_ext_option', old('loan_ext_option'), ['class' => 'form-control','placeholder'=>'Input Loan Extension Option']) !!}</div>

		</div>
		<div class="form-group">
			{!! Form::label('amortization', 'Amortization:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('amortization', old('amortization'), ['class' => 'form-control','placeholder'=>'Input amortization']) !!}</div>

		</div>
		<div class="form-group">
			{!! Form::label('yield_maintenance', 'Yield Maintenance:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('yield_maintenance', old('yield_maintenance'), ['class' => 'form-control','placeholder'=>'Input Yield Maintenance']) !!}</div>

		</div>
		<div class="form-group">
			{!! Form::label('structure', 'Structure:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('structure', old('structure'), ['class' => 'form-control','placeholder'=>'Input Yield Structure']) !!}</div>

		</div>
		<div class="form-group">
			{!! Form::label('original_fee', 'Origination Fee:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('original_fee', old('original_fee'), ['class' => 'form-control','placeholder'=>'Input Origination Fee']) !!}</div>

		</div>
		<div class="form-group">
			{!! Form::label('exit_fee', 'Exit Fee:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('exit_fee', old('exit_fee'), ['class' => 'form-control','placeholder'=>'Input Exit Fee']) !!}</div>

		</div>
		<div class="form-group">
			{!! Form::label('broker_fee', 'Broker Fee:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('broker_fee', old('broker_fee'), ['class' => 'form-control','placeholder'=>'Input Broker Fee']) !!}</div>

		</div>
		<div class="form-group">
			{!! Form::label('due_diligence_fee', 'Due Diligence Fee:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('due_diligence_fee', old('due_diligence_fee'), ['class' => 'form-control','placeholder'=>'Input Due Diligence Fee']) !!}</div>

		</div>
	</div>
	
	<table class="table table-bordered">
	<tbody>
	<tr>
	<td>
		<div class="text-center ">
		<h1>MAIN INFO</h1>											
						<label class="custom-control custom-checkbox">
						<input class="custom-control-input" type="checkbox" name="lc_01" value='1' id="checkbox" />
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">Signed Loan Application</span>
						</label>
						<label class="custom-control custom-checkbox">
	<input class="custom-control-input" type="checkbox" name="lc_02" value='1' id="checkbox" />
	<span class="custom-control-indicator"></span>
	<span class="custom-control-description">Articles of Organization(s) & Operating Agreement(s)</span>
	</label>
						<label class="custom-control custom-checkbox">
	<input class="custom-control-input" type="checkbox" name="lc_03" value='1' id="checkbox" />
	<span class="custom-control-indicator"></span>
	<span class="custom-control-description">Credit-report authorization form for each guarantor/principal</span>
	</label>						
	</div>
	</td>
	<td>
	<div class="text-center ">
		<h1>PERSONAL INFO</h1>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_04" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Personal financial statement for each guarantor/principal (PFS)</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_05" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">REO</span>
						</label>					
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_06" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Guarantor/principal’s resume</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_07" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Sponsor(s) global cash flow</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_08" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">BIO & history</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_09" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Copy of guarantying principal’s driver’s license</span>
						</label>						
	</div>
	</td>
	</tr>
	<tr>
	<td>
					<div class="text-center ">
						<h1>FINANCIALS & TAXES INFO</h1>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_10" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Months of bank statements</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_11" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Most recent Audited Financial Statements of the Subject Property</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_12" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Most recent Audited Financial Statements of entity(ies)</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_13" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">YTD financial statements of the subject property</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_14" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">YTD financial statements of entity</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_15" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Most recent two years signed, complete personal federal tax returns, including all sched- ules,statements and K-1s (along with those of any related business entities)</span>
						</label>
					</div>
					</td>
	<td>
					<div class="text-center ">
						<h1>PROPERTIES INFO</h1>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_16" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Old appraisal(s), if any</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_17" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">New appraisal report(s) (to be ordered by lender, unless requirement is waived at lender's
								sole discretion after review and acceptance of current existing appraisal; must be updated
								and reassigned to lender; to be paid for by borrower directly))</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_18" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Old Phase 1 environmental report(s), if any</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_19" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Phase I environmental report(s) (to be ordered by Lender, unless requirement is waived at
								Lender’s sole discretion after review and acceptance of any current existing reports)</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_20" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Detailed property expenses</span>
						</label>
					</div>
				</td>
	</tr>			
	<tr>
	<td>
					<div class="text-center ">
						<h1>PURCHASE & RENT INFO</h1>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_21" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">PSA</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_22" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Rent-Roll</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_23" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Copies of any signed lease agreements</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_24" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Tenant's most recent two years financials</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_25" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">New potential tenants' information, LOI</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_26" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Proforma rent-roll</span>
						</label>
					</div></td>
	<td>
	<div class="text-center ">
		<h1>PROFORMA & BUSINESS PLAN</h1>
		<label class="custom-control custom-checkbox">
			<input class="custom-control-input" type="checkbox" name="lc_27" value='1' id="checkbox" />
			<span class="custom-control-indicator"></span>
			<span class="custom-control-description">Proforma</span>
		</label>
		<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_28" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Executive summary</span>
						</label>
		<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_29" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Business plan overview</span>
						</label>
		<label class="custom-control custom-checkbox">
		<input class="custom-control-input" type="checkbox" name="lc_30" value='1' id="checkbox" />
		<span class="custom-control-indicator"></span>
		<span class="custom-control-description">Clearly defined and documented exit strategy</span>
		</label>				
	</div>
	</td>
	</tr>
	<tr>
	<td>
		<div class="text-center ">
		<h1>CONSTRUCTION INFO</h1>
		<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Detail CapEx/construction budget, plans and approvals</span>
						</label>
		<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Construction baseline report</span>
						</label>
		<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Construction baseline report (to be ordered by lender)</span>
						</label>
		<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Construction baseline report (to be ordered by lender)</span>
						</label>
		<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Information on general contractor (descriptive and financial)</span>
						</label>						
		<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">General contractor. Bonding information</span>
						</label>
		<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">General contractor. Licensing Information</span>
						</label>
		<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Current state of the construction</span>
						</label>
		<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Current state of the construction</span>
						</label>
						
					</div>
				</td>
	<td>
	<div class="text-center ">
	<h1>TITLE WORK</h1>
	<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_38" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Prelim title</span>
						</label>
	<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_39" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Complete title reports and insurance (to be ordered by Lender)</span>
						</label>
	</div>
	</td>
	</tr>
	<tr>
		<td>
					<div class="text-center ">
						<h1>EXISTING LOANS INFO</h1>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_40" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">All Info related to existing loan: promissory note, payment history</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_41" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Bankruptcy Docs</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_42" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Loan management project feasibility report</span>
						</label>
						

					</div>
				</td>						
		<td>
		<div class="text-center ">
		<h1>SURVEY & REPORTS</h1>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_43" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Survey and Zoning</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_44" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Market feasibility study</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_45" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Feasability study with financial projection</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_46" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Project Feasibility Report</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="lc_47" value='1' id="checkbox" />
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Property condition/engineering report</span>
						</label>
		</div>
		</td>
		
	</tr>
			<tr>
		<tr>	
				<td>
					<div class="text-center ">
						<h1>LICENSES</h1>
							<label class="custom-control custom-checkbox">
								<input class="custom-control-input" type="checkbox" name="lc_48" value='1' id="checkbox" />
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">License(s)</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input class="custom-control-input" type="checkbox" name="lc_49" value='1' id="checkbox" />
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">Cannabis License</span>
							</label>

					</div>
				</td>
	
	</tr>
			</tr>
				
				
			
		</tbody>
	</table>
	<!--<div class="form-group">
	<div class="col-xs-offset-2 col-xs-10">
	<button onclick="getCheckedCheckBoxes()"> Кто выбран? </button>
		</div>
	</div>-->
	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('Save', ['class' => 'btn btn-primary ','type'=>'submit']) !!}
		</div>
	</div>
		
	{!! Form::close() !!}
</div>

@endsection



