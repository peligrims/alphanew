@extends('layouts.admin')

@section('header')
	

	<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>


@endsection

@section('content')

	@include('admin.content_personal_accounts')

@endsection
