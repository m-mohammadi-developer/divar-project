@extends('dashboard.layout.main')


@section('head')
    @parent
@endsection

@php
$pageToShow = isset($page) ? $page : 'home';
@endphp
@section('content', View::make('dashboard.pages.' . $pageToShow))


@section('scripts')
    @parent
@endsection