@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    الاسم الاول
                </th>
                <th>
                    الاسم الثاني
                </th>
                <th>
                    البريد الالكتروني
                </th>
                <th>
                    الموضوع
                </th>
                <th>
                    الرسالة
                </th>
               
                <th>
                    حذف
                </th>
                </thead>

                <tbody>
                @foreach($messages as $message)

                    <tr>
                        <td>{{$message->first_name}}</td>
                        <td>{{$message->last_name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->subject}}</td>
                        <td>{{$message->message}}</td>

                        <td>
                            <a href="{{route('message.destroy',['id' => $message->id])}}" class="btn btn-danger">حذف</a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection