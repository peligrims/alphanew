@extends('layouts.admin')

@section('header')

	@include('superAdminOnlyPage.header')

@endsection

@section('content')

	@include('superAdminOnlyPage.content_users')

@endsection
