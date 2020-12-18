
<div class="wrapper container-fluid text-center">
	<h1>Borrower name</h1>

	@if($borrowers)	
	<table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>№ п/п</th>
				
                <th>Account name</th>
                <th>Contact name</th>
                <th>email</th>
                <th>phone</th>                
                <th>Mailing street</th>
                <th>Mailing city</th>
                <th>Mailing state</th>
                <th>Mailing zip</th>
                <th>Citizenship</th>
				<th>create by</th>
				<th>modifed by</th>
            </tr>
        </thead>
        <tbody>
		@foreach($borrowers as $k => $borrower)
            <tr>
                <td>{{$borrower->id}}</td>
				<td> {!! Html::link(route('borrowersEdit',['borrower'=>$borrower->id]),$borrower->account_name,['alt'=>$borrower->account_name]) !!} </td>
				
                <td>{{$borrower->contact_name}}</td>
                <td>{{$borrower->email1}}</td>
                <td>{{$borrower->phone1}}</td>               
                <td>{{$borrower->street}}</td>
                <td>{{$borrower->city}}</td>
                <td>{{$borrower->state}}</td>
                <td>{{$borrower->zip}}</td>
                <td>{{$borrower->citizenship}}</td>
				<td>{{$borrower->created_at}}</td>
				<td>{{$borrower->updated_at}}</td>
                


				<td>{!! Html::image('assets/img/'.$borrower->email1,'', array('style' => 'width:150px' )) !!}</td>
                <td>	
                
                {!! Form::open(['url' => route('borrowersEdit',['borrower'=>$borrower->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
				    {{ method_field('DELETE') }}
				    {!! Form::button('Удалить', ['class' => 'btn btn-danger','type'=>'submit']) !!}
				{!! Form::close() !!}
				</td>
            </tr>
		@endforeach	
        </tbody>
    </table>
	
	@endif
	
	{!! Html::link(route('borrowersAdd'),'New Borrower') !!}
</div>
