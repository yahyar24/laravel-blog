@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    الصورة
                </th>
                <th>
                    عنوان المنشور
                </th>
                <th>
                    تعديل
                </th>
                <th>
                    حذف مبدئي
                </th>
                </thead>

                <tbody>
                @foreach($posts as $post)

                    <tr>
                        <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="90px" height="50px"></td>
                        <td>{{$post->title}}</td>
                        <td>
                        <img src="https://img.icons8.com/color/48/000000/multi-edit.png">

                            <a href="{{route('post.edit',['id' => $post->id])}}" class="btn btn-info">تعديل</a>
                        </td>
                        <td>
                        <img src="https://img.icons8.com/color/48/000000/cancel.png">
                            <a href="{{route('post.kill',['id' => $post->id])}}" class="btn btn-danger">حذف مبدئي</a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection