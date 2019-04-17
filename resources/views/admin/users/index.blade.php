@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel panel-heading">
            Users
        </div>
        <div class="panel panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    الصورة
                </th>
                <th>
                    الاسم
                </th>
                <th>
                    الترخيص
                </th>
                <th>
                    حذف
                </th>
                </thead>

                <tbody>

                @foreach($users as $user)

                    <tr>
                        <td>
                            <img src="{{asset($user->profile->avatar)}}"  alt="" width="60" height="60" style="border-radius: 50%;">
                        </td>
                        <td>
                            {{$user->name}}
                        </td>
                        <td>
                            @if($user->admin)

                                <a href="{{route('user.not.admin',['id' => $user->id])}}" class="btn-danger btn-xs">انهاء الترخيص</a>

                            @else
                            <a href="{{route('user.admin',['id' => $user->id])}}" class="btn-success btn-xs">رفع الى ادمن</a>
                            @endif
                        </td>
                        <td>
                            @if(Auth::id()!== $user->id)

                                <a href="{{route('user.delete',['id' =>$user->id])}}" class="btn-danger btn-xs">حذف المستخدم</a>

                                @endif
                        </td>
                    </tr>

                @endforeach


                </tbody>
            </table>

        </div>
    </div>
@endsection