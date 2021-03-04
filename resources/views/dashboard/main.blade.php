@extends('dashboard.layout.main')


@section('head')
    @parent
@endsection

@php
$pageToShow = isset($page) ? $page : 'home';
$data = isset($data) ? $data : array();
@endphp
@section('content', View::make('dashboard.pages.' . $pageToShow, compact('data')))


@section('scripts')
    @parent
@endsection