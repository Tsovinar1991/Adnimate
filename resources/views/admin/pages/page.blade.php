@extends('layouts.admin')
@section('css')

@endsection

@section('page', $page->name_en )

@section('content')

    <h5>Name en</h5>
    <p>{{$page->name_en}}</p>
    <h5>Name ru</h5>
    <p>{{$page->name_ru}}</p>
    <h5>Name am</h5>
    <p>{{$page->name_am}}</p>

    <h5>Description en</h5>
    <p>{!!$page->description_en !!}</p>
    <h5>Description ru</h5>
    <p>{!!$page->description_ru!!}</p>
    <h5>Description am</h5>
    <p>{!!$page->description_am!!}</p>




@endsection

@section('js')


@endsection