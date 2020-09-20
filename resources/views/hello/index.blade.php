@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>Controller value<br>'message' = {{ $message }}</p>
    <p>ViewComposer value<br>'view_message' = {{ $view_message }}</p>
@endsection

@section('fotter')
    copyright 2020 tuyano.
@endsection