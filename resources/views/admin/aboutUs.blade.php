@extends('layouts.admin')

@section('css')
    <style>
        body {
            user-select: none;
        }

        #about tr td {
            padding: 5px 25px;
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

        .pagination li {
            padding: 5px 10px !important;
        }

        .create {
            padding-bottom: 20px;
        }

        #about tr td span {
            margin: 2px;
            width: 60px;
            height: 30px;
            font-size: 12px;

        }

        #about tr td form button {
            margin: 2px;
            width: 60px;
            height: 30px;
            font-size: 12px;
            padding: 0px;
        }

        td img {
            width: 50px;
            height: auto;
        }

        .image {
            width: 100px;
        }


    </style>


@endsection

@section('content')
    <div class="container-fluid">
        <h5>ABOUT US</h5>
        <div class="create"><a class="btn btn-success" href="{{url('admin/about/create')}}">Create</a></div>

        @if(isset($about) && count($about)>0)
            <div id="about">
                <table class="no-footer" width="100%">
                    <thead>
                    <tr class="important">
                        <th>META ID</th>
                        <th>NAME RU</th>
                        <th>NAME AM</th>
                        <th>NAME EN</th>
                        <th>DESCRIPTION RU</th>
                        <th>DESCRIPTION AM</th>
                        <th>DESCRIPTION EN</th>
                        <th>ACTION</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($about as $a)
                        <tr>
                            <td>{{$a->meta_id}}</td>
                            <td>{{$a->name_ru}}</td>
                            <td>{{$a->name_am}}</td>
                            <td>{{$a->name_en}}</td>
                            <td>
                                <div class="image">   {{ str_limit(strip_tags($a->description_ru), 20) }}
                                    @if (strlen(strip_tags($a->description_ru)) > 20)
                                        <a href="{{url('admin/about/'.$a->id . '/edit')}}"
                                        ><p>Read More</p></a>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="image">   {{ str_limit(strip_tags($a->description_am), 20) }}
                                    @if (strlen(strip_tags($a->description_am)) > 20)
                                        <a href="{{url('admin/about/'.$a->id . '/edit')}}"
                                        ><p>Read More</p></a>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="image">   {{ str_limit(strip_tags($a->description_en), 20) }}
                                    @if (strlen(strip_tags($a->description_en)) > 20)
                                        <a href="{{url('admin/about/'.$a->id . '/edit')}}"
                                        ><p>Read More</p></a>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <a href="{{url('/admin/about/'.$a->id .'/edit')}}"> <span class="btn btn-warning"><i
                                                class="fas fa-pen"></i> Edit</span></a>

                                <form action="{{url('/admin/about/'.$a->id)}}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
                                </form>
                                {{--<a href=""> <span class="btn btn-danger">Delete</span></a>--}}

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$about->links()}}
            </div>
        @else
            <h5>No About Data Yet</h5>
        @endif


    </div>
    <!-- /.container-fluid -->
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $(" #about tbody tr:even").css("background-color", "#eeeeee");
        });
    </script>

@endsection