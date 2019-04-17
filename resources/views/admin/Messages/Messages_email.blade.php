@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                المشتركين
                </th>
               
               
                <th>
                    حذف
                </th>
                </thead>

                <tbody>
                @foreach($emails as $email)

                    <tr>
                        <td>{{$email->email_sub}}</td>
                        

                        <td>
                            <a href="{{route('email.destroy',['id' => $email->id])}}" class="btn btn-danger">حذف</a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection