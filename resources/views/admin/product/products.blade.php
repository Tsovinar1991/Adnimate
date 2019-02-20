@extends('layouts.admin')

@section('css')
@endsection

@section('page', 'Products')
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

    #pr tr td {
        padding: 5px 25px;
    }

    #pr tr td span {
        margin: 2px;
        width: 60px;
        height: 30px;
        font-size: 12px;

    }

    #pr tr td form button {
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

@section('content')
    <div class="create"><a class="btn btn-success" href="">Create</a></div>

    @if(isset($products) && count($products)>0)
        <div id="pr">
            <table class="no-footer" width="100%">
                <thead>
                <tr class="important">
                    <th>ID</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>AVATAR</th>
                    <th>PRICE</th>
                    <th>WEIGHT</th>
                    <th>STATUS</th>
                    <th>RESTAURANT</th>
                    <th>PARENT</th>
                    <th>ACTION</th>

                </tr>
                </thead>
                <tbody>

                @foreach($products as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->name}}</td>
                        <td>{{$p->description}}</td>
                        <td><img src="/storage/{{$p->avatar}}" style="width:100px;height:auto;"></td>
                        <td>{{$p->price}} AMD</td>
                        <td>{{$p->weight}} gram</td>
                        <td>{{$p->status}}</td>
                        <td>{{$p->restaurant_id}}</td>
                        <td>{{$p->parent_id}}</td>
                        <td>
                            <a href=""> <span class="btn btn-warning"><i
                                            class="fas fa-pen"></i> Edit</span></a>

                            <form action="" method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
                            </form>
                          

                        </td>
                    </tr>

                @endforeach

            </table>
            {{$products->links()}}
        </div>

    @else
        <h2>No Product Yet</h2>
    @endif

@endsection

@section('js')


@endsection