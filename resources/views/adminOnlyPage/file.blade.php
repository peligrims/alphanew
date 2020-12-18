@extends('layouts.admin')

@section('header')

	@include('adminOnlyPage.header')

@endsection

@section('content')

@include('adminOnlyPage.content_file')

@endsection