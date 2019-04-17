@extends('layouts.app')


@section('content')
    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel panel-heading">
            انشاء مستخدم جديد
        </div>
        <div class="panel-body">
            <form action="{{route('user.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">اسم المستخدم</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">البريد الالكتروني</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            اضافة مستخدم
                        </button>
                    </div>
                </div>

            </form>
        </div>

    </div>

@stop