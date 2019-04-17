@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel panel-body">
        <table class="table table-hover">
            <thead>
            <th>
                اسم التصنيف
            </th>
            <th>
                تعديل
            </th>
            <th>
                حذف
            </th>
            </thead>

            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>
                        {{$category->name}}
                    </td>
                    <td>
                    <img src="https://img.icons8.com/color/64/000000/multi-edit.png">
                        <a href="{{route('category.edit',['id' => $category->id])}}" class="btn btn-xs btn-info">
                           تعديل
                        </a>
                    </td>
                    <td>
                    <img src="https://img.icons8.com/color/48/000000/cancel.png">
                        <a href="{{route('category.delete',['id' => $category->id])}}" class="btn btn-xs btn-danger">
                            حذف
                        </a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>

    </div>
</div>
    @endsection