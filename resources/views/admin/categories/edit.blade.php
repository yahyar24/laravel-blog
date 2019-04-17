@extends('layouts.app')


@section('content')
@include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel panel-heading">
            تعديل التصنيف: {{$category->name}}
        </div>
        <div class="panel-body">
            <form action="{{route('category.update',['id' => $category->id])}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">تعديل التصنيف </label>
                    <input type="text" name="name" value="{{$category->name}}" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            تعديل
                        </button>
                    </div>
                </div>

            </form>
        </div>

    </div>

@stop