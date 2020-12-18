<div style="margin:0px 50px 0px 50px;">    
	@if($loan_applications)	
	<table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>№ п/п</th>
                <th>Borrower</th>
                <th>Loan Type</th>
                <th>Amount Requested</th>
                <th>Interest Rate</th>
                <th>Vesting (Manner in which title will be held):</th>
                <th>Created at</th>
                <th>Update at</th>
            </tr>
        </thead>
        <tbody>
		@foreach($loan_applications as $k => $loan_application)
            <tr>
                <td>{{$loan_application->id}}</td>
				
				<td>{!! Html::link(route('loan_applicationEdit',['loan_application'=>$loan_application->id]),$loan_application->borrower,['alt'=>$loan_application->borrower]) !!} </td>
                <td>{{$loan_application->loan_type}}</td>
                <td>{{$loan_application->amount_requested}}</td>
                <td>{{$loan_application->interest_rate}}</td>
                <td>{{$loan_application->vesting}}</td>			
                <td>{{$loan_application->created_at}}</td>
                <td>{{$loan_application->updated_at}}</td>
                <td>	
                
                {!! Form::open(['url' => route('loan_applicationEdit',['loan_application'=>$loan_application->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
				    {{ method_field('DELETE') }}
				    {!! Form::button('Удалить', ['class' => 'btn btn-danger','type'=>'submit']) !!}
				{!! Form::close() !!}
				</td>
				<td>
					<button type="button" class="btn btn-warning" >{!! Html::link(route('loan_applicationfinal',['loan_application'=>$loan_application->id]),'Convert to PDF',['alt'=>$loan_application->borrower]) !!}
					</button>
				</td>
            </tr>
		@endforeach	
        </tbody>
    </table>
	
	@endif
	
	{!! Html::link(route('loan_applicationAdd'),'New Loan Apllication') !!}
</div>