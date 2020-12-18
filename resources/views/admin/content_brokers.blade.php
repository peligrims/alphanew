<div style="margin:0px 50px 0px 50px;">    
	@if($brokers)	
	<table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>№ п/п</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Description</th>
				<th>Create by</th>
				<th>Modifed by</th>
            </tr>
        </thead>
        <tbody>
		@foreach($brokers as $k => $broker)
            <tr>
                <td>{{$broker->id}}</td>
                <td>{!! Html::link(route('brokersEdit',['broker'=>$broker->id]),
                    $broker->first_name,['alt'=>$broker->first_name]) !!}  </td>
                <td>{{$broker->last_name}}</td>
                <td>{{$broker->phone}}</td>
                <td>{{$broker->email}}</td>
                <td>{{$broker->description}}</td>
				<td>{{$broker->created_at}}</td>
				<td>{{$broker->updated_at}}</td>
				
                <td>	
                
                {!! Form::open(['url' => route('brokersEdit',['broker'=>$broker->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
				    {{ method_field('DELETE') }}
				    {!! Form::button('Удалить', ['class' => 'btn btn-danger','type'=>'submit']) !!}
				{!! Form::close() !!}
				</td>
            </tr>
		@endforeach	
        </tbody>
    </table>
	
	@endif
	
	{!! Html::link(route('brokersAdd'),'New broker') !!}
</div>