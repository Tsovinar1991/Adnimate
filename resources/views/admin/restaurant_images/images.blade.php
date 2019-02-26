@extends('layouts.admin')

@section('css')

    <style>
        body {
            user-select: none;
        }

        .important th {
            background-color: #d9d9d9 !important;
            font-weight: bold !important;
            color: #224143 !important;
        }

        .important:first-child th:first-child {
            border-top-left-radius: 10px !important;
        }

        .important:first-child th:last-child {
            border-top-right-radius: 10px !important;
        }

        .important th {
            padding-top: 10px !important;
            padding-bottom: 10px !important;
            padding-right: 10px !important;
            font-size: 14px;
            text-align: center;
        }

        td {
            color: #3e5164;
            text-align: center;
        }

        #im tr td {
            padding: 5px 25px;
        }

        #im tr td span {
            margin: 2px;
            width: 60px;
            height: 30px;
            font-size: 12px;

        }

        #im tr td form button {
            margin: 2px;
            width: 60px;
            height: 30px;
            font-size: 12px;
            padding: 0px;
        }

        td {
            color: #3e5164;
            text-align: center;
        }

        .pagination li {
            padding: 5px 10px !important;
        }

        .create {
            padding-bottom: 20px;
        }

    </style>





@endsection


@section('page', 'Restaurant Images')
@section('content')

    <div class="create"><a class="btn btn-outline-success" href="{{url('admin/restaurant_image/create')}}">Create</a></div>

    @if(isset($images) && count($images)>0)
        <div id="im">
            <table class="no-footer" width="100%">
                <thead>
                <tr class="important">
                    <th>@sortablelink('id', 'ID')</th>
                    <th>@sortablelink('restaurant_id', 'Restaurant')</th>
                    <th>@sortablelink('title', 'Title')</th>
                    <th>@sortablelink('name', 'Image')</th>
                    <th>ACTION</th>

                </tr>
                </thead>
                <tbody>

                @foreach($images as $i)
                    <tr>
                        <td>{{$i->id}}</td>
                        <td>{{$i->restaurant_id}}</td>
                        <td>{{$i->title}}</td>
                        <td><img src="/storage/restaurant_images/{{$i->name}}" style="width:100px;height:auto;"></td>
                        <td>

                                <a href="{{url("admin/restaurant_image/$i->id/edit")}}"> <span class="btn btn-primary">
                                        <i class="fas fa-pen"></i> Edit</span></a>
                                <form action="{{url('admin/restaurant_image/' . $i->id)}}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
                                </form>
                        </td>
                    </tr>

                @endforeach

            </table>
            {!! $images->appends(\Request::except('page'))->render() !!}
        </div>

    @else
        <div class="alert alert-info col-md-12" role="alert">
            No image yet.
        </div>
    @endif


@endsection