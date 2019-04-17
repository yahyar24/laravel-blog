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
                    ارجاع المنشور
                </th>
                <th>
                    حذف نهائي
                </th>
                </thead>

                <tbody>
                @foreach($posts as $post)

                    <tr>
                        <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="90px" height="50px"></td>
                        <td>{{$post->title}}</td>
                        <td>تعديل</td>
                        <td>
                            <a href="{{route('post.restore',['id' => $post->id])}}" class="btn btn-xs btn-success">ارجاع </a>
                        </td>
                        <td>
                            <a href="{{route('post.delete',['id' => $post->id])}}" class="btn btn-xs btn-danger">حذف نهائي</a>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection