@extends('layouts.admin')

@section('css')

@endsection




@section('page', 'About Us Create')

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Name</label>
            <div class="col-md-10">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                    <span class="help-block red">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="description" class="col-md-4 control-label">Description</label>
            <div class="col-md-10">
                <input id="description" type="text" class="form-control" name="description"  value="{{ old('description') }}" required autofocus>
                @if ($errors->has('description'))
                    <span class="help-block red">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div>
            <label for="avatar" class="col-md-1 control-label" >Avatar</label>
            <input id="avatar" type="file" name="avatar" >
            </div>
            @if ($errors->has('avatar'))
                <span class="help-block red">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('parent_id') ? ' has-error' : '' }}">
            <label for="parent_id" class="col-md-4 control-label">Parent Id</label>
            <div class="col-md-10">
                <select name="parent_id" id="parent_id" class="form-control"  >
                    <option value=""></option>
                </select>
                @if ($errors->has('parent_id'))
                    <span class="help-block red">
                                        <strong>{{ $errors->first('parent_id') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('restaurant_id') ? ' has-error' : '' }}">
            <label for="restaurant_id" class="col-md-4 control-label">Restaurant Id</label>
            <div class="col-md-10">
                <select name="restaurant_id" id="restaurant_id" class="form-control"  >
                    <option value=""></option>
                </select>
                @if ($errors->has('restaurant_id'))
                    <span class="help-block red">
                                        <strong>{{ $errors->first('restaurant_id') }}</strong>
                                    </span>
                @endif
            </div>
        </div>



        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
            <label for="price" class="col-md-4 control-label">Price</label>
            <div class="col-md-10">
                <input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}" required autofocus>
                @if ($errors->has('price'))
                    <span class="help-block red">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                @endif
            </div>
        </div>


        <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
            <label for="weight" class="col-md-4 control-label">Weight</label>
            <div class="col-md-10">
                <input id="weight" type="text" class="form-control" name="weight" value="{{ old('weight') }}" required autofocus>
                @if ($errors->has('weight'))
                    <span class="help-block red">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                @endif
            </div>
        </div>


        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
            <label for="status" class="col-md-4 control-label">Status</label>
            <div class="col-md-10">
                <select name="status" id="status" class="form-control"  >
                    <option value="1">1</option>
                    <option value="0">0</option>
                </select>
                @if ($errors->has('status'))
                    <span class="help-block red">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                @endif
            </div>
        </div>






        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-success">
                    Submit
                </button>
            </div>
        </div>
    </form>


@endsection

@section('js')




@endsection