@extends('layouts/app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/weight_logs.css')}}">
@endsection

@section('content')
<div class="weight_logs">
    <div class='wight_logs_heading'>
        <div class='wight_logs_heading target_weight'>
        <span>目標体重</span><br/>
        <h2>{{$}}
