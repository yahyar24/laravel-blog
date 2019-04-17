@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    صورة الجواز
                </th>
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
                   رقم الهاتف
                </th>
                <th>
                     الذهاب من
                </th>
                <th>
                     الذهاب الى
                </th>
                <th>
                    تاريخ الذهاب
                </th>
                <th>
                    تاريخ العودة
                </th>
                <th>
                    العدد
                </th>
                <th>
                    ملاحظات 
                </th>
               
                <th>
                    حذف
                </th>
                </thead>

                <tbody>
                @foreach($books as $book)

                    <tr>
                         <td><img src="{{$book->featured}}" alt="" width="90px" height="50px"></td>
                        <td>{{$book->first_name_book}}</td>
                        <td>{{$book->last_name_book}}</td>
                        <td>{{$book->email_book}}</td>
                        <td>{{$book->Phone}}</td>
                        <td>{{$book->Destination}}</td>
                        <td>{{$book->Destination_last}}</td>
                        <td>{{$book->date}}</td>
                        <td>{{$book->date_last}}</td>
                        <td>{{$book->how_many}}</td>
                        <td>{{$book->message_book}}</td>

                        <td>
                            <a href="{{route('messagebook.destroy',['id' => $book->id])}}" class="btn btn-danger">حذف</a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection