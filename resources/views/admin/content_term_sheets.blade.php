<div class="wrapper container-fluid text-center">
<h3>Therm sheet</h3>
<div style="margin:0px 50px 0px 50px;">    
	@if($term_sheets)
		
	<table class="table table-hover table-striped">
        <thead>
            <tr>                
					<th>№ </th>
					<th>Potensial n:</th>
					<th>Borrower name:</th>
					<th>Estimated Value of Asset:</th>
					<th>Loan Amount:</th>
					<th>Interest Rate:</th>
					<th>Yield Maintenance:</th>
					<th>created at</th>
					<th>updated at</th>
            </tr>
        </thead>
        <tbody>
		@foreach($term_sheets as $term_sheet)
            <tr> 
					<td>{{ $term_sheet->id }}</td>
					<td>{!! Html::link(route('term_sheetsEdit',['term_sheet'=>$term_sheet->id]),$term_sheet->potential->potential_name,['alt'=>$term_sheet->potential->potential_name]) !!}</td>
					<td>{{$term_sheet->potential->borrower->account_name  }}</td>
					<td>{{$term_sheet->eva1}}</td>
					<td>{{$term_sheet->loan_amount1}}</td>
					<td>{{$term_sheet->interest_rate}}</td>
					<td>{{$term_sheet->yield_maintenance}}</td>
					<td>{{$term_sheet->created_at}}</td>
					<td>{{$term_sheet->updated_at}}</td>
	            <td>
{!! Form::open(['url' => route('term_sheetsEdit',['term_sheet'=>$term_sheet->id]),'class'=>'form-horizontal','method'=>'POST'])!!}
				{{method_field('DELETE')}}
				{!! Form::button('DELETE', ['class' => 'btn btn-danger','type'=>'submit']) !!}
				{!! Form::close() !!}
				</td>
				<td>
						<button type="button" class="btn btn-warning" >{!! Html::link(route('term_sheetsview',['term_sheet'=>$term_sheet->id]),'View Term Sheet',['alt'=>$term_sheet->borrower1]) !!}
						</button>
				</td>				
				<td><button type="button" class="btn btn-warning" >{!! Html::link(route('term_sheetsfinal',['term_sheet'=>$term_sheet->id]),'Convert to PDF',['alt'=>$term_sheet->borrower1]) !!}				
				</button>
				</td>
            </tr>
		@endforeach	
        </tbody>
    </table>         
	
	@endif
	
	{!! Html::link(route('term_sheetsAdd'),'New Term Sheet') !!}<br>
	{!! Html::link(route('term_sheetsLCAdd'),'New Term Sheet+Loan_conditions') !!}
</div>