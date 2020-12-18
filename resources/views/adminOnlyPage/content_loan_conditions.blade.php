<div style="margin:0px 50px 0px 50px;">   

	@if($loan_conditions)
 
	<table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>N</th>
				<th>Name loan condition</th>            
				<th>Comments</th>            
                <th>Date create</th>                
                <th>Date modification</th>
            </tr>
        </thead>
        <tbody>
        
			@foreach($loan_conditions as $k => $loan_condition)
        
        	<tr>
        	
				<td>{{ $loan_condition->id }}</td>
				<td>{!! Html::link(route('loan_conditionsEdit',['loan_condition'=>$loan_condition->id]),$loan_condition->name_loan_condition,['alt'=>$loan_condition->name_loan_condition]) !!}</td>
        		
				<td>{{ $loan_condition->Comment}}</td>
				<td>{{ $loan_condition->created_at }}</td>
				<td>{{ $loan_condition->updated_at }}</td>
        		
        		<td>
					{!! Form::open(['url'=>route('loan_conditionsEdit',['loan_condition'=>$loan_condition->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}
	        			{{ method_field('DELETE') }}
	        			{!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}
	        	{!! Form::close() !!}
        		</td>
        	</tr>
        
        @endforeach
        
		
        </tbody>
    </table>
@endif 

	{!! Html::link(route('loan_conditionsAdd'),'New loan condition') !!}
   
</div>