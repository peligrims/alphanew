<div style="margin:0px 50px 0px 50px;">    
	@if($borrower)	
	<table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>№ п/п</th>
				<th>Potentian name</th>
                <th>Account name</th>
                <th>Contact name</th>
                <th>email</th>
                <th>phone</th>
                <th>create by</th>
                <th>modifed by</th>
                <th>Mailing street</th>
                <th>Mailing city</th>
                <th>Mailing state</th>
                <th>Mailing zip</th>
                <th>Citizenship</th>
            </tr>
        </thead>
        <tbody>
		@foreach($borrowers as $k => $borrower)
            <tr>
                <td>{{$borrower->id}}</td>
				<td> {!! Html::link(route('borrowerEdit',['borrower'=>$borrower->id]),$borrower->potential_name,['alt'=>$borrower->account_name]) !!} </td>
				account_name
				<td>{{$borrower->account_name}}</td>
                <td>{{$borrower->contact_name}}</td>
                <td>{{$borrower->email1}}</td>
                <td>{{$borrower->phone1}}</td>
                <td>{{$borrower->create_at}}</td>
                <td>{{$borrower->update_at}}</td>
                <td>{{$borrower->street}}</td>
                <td>{{$borrower->city}}</td>
                <td>{{$borrower->state}}</td>
                <td>{{$borrower->zip}}</td>
                <td>{{$borrower->citizenship}}</td>
                


				<td>{!! Html::image('assets/img/'.$borrower->email1,'', array('style' => 'width:150px' )) !!}</td>
                <td>	
                
                {!! Form::open(['url' => route('borrowerEdit',['borrower'=>$borrower->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
				    {{ method_field('DELETE') }}
				    {!! Form::button('Удалить', ['class' => 'btn btn-danger','type'=>'submit']) !!}
				{!! Form::close() !!}
				</td>
            </tr>
		@endforeach	
        </tbody>
    </table>
	
	@endif
	
	{!! Html::link(route('borrowerAdd'),'New term_sheet') !!}
</div>