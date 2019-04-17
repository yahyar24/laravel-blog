@extends('layouts.app')

@section('content')


    <div class="panel panel-default">
        <div class="panel panel-heading">
            التاج
        </div>
        <div class="panel panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    اسم التاج
                </th>
                <th>
                    تعديل
                </th>
                <th>
                    حذف
                </th>
                </thead>

                <tbody>
                @if($tags->count()>0)
                @foreach($tags as $tag)
                    <tr>
                        <td>
                            {{$tag->tag}}
                        </td>
                        <td>
                        <img src="https://img.icons8.com/color/48/000000/multi-edit.png">
                            <a href="{{route('tag.edit',['id' => $tag->id])}}" class="btn btn-xs btn-info">
                                تعديل
                            </a>
                        </td>
                        <td>
                        <img src="https://img.icons8.com/color/48/000000/cancel.png">
                            <a href="{{route('tag.delete',['id' => $tag->id])}}" class="btn btn-xs btn-danger">
                                حذف
                            </a>
                        </td>
                    </tr>

                @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No tags yet</th>
                    </tr>
                    @endif
                </tbody>
            </table>

        </div>
    </div>
@stop