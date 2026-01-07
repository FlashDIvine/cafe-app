@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <p>Selamat datang, {{ auth()->user()->name }}</p>
@endsection