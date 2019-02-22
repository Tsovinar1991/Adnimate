@extends('layouts.admin')
@section('css')
<style>
    .difference{
        border-bottom:1px solid #bbcbb9;
    }

    .difference p img{
        width:300px;
        height:auto;
    }
</style>
@endsection

@section('page', $page->name_en )

@section('content')




    <div  class="difference">
        <h5>Name en</h5>
        <p>{{$page->name_en}}</p>
    </div>
    <div class="difference">
        <h5>Name ru</h5>
        <p>{{$page->name_ru}}</p>
    </div>
    <div class="difference">
        <h5>Name am</h5>
        <p>{{$page->name_am}}</p>
    </div>
    <div class="difference">
        <h5>Description en</h5>
        <p>{!!$page->description_en !!}</p>
    </div>
    <div class="difference">
        <h5>Description ru</h5>
        <p>{!!$page->description_ru!!}</p>
        <h5>Description am</h5>
        <p>{!!$page->description_am!!}</p>
    </div>




@endsection

@section('js')


@endsection