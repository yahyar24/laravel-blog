@extends('layouts.app')


@section('content')
    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel panel-heading">
            تعديل المنشور:{{$post->title}}
        </div>
        <div class="panel-body">
            <form action="{{route('post.update', ['id' =>$post->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">عنوان المنشور</label>
                    <input type="text" name="title" class="form-control" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="featured">ارفاق الصورة</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category"> اختيار التصنيف</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"

                            @if($post->category->id == $category->id)
                                selected
                                @endif
                            >{{$category->name}}  </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags"> اختيار التاج </label>
                    @foreach($tags as $tag)
                        <div class="checkbox">
                            <label><input type="checkbox" name="tags[]" value="{{$tag->id}}"
                                          @foreach($post->tags as $t)
                                              @if($tag->id == $t->id)
                                                  checked
                                          @endif
                                              @endforeach
                                >{{$tag->tag}} </label>
                        </div>
                    @endforeach
                </div>


                <div class="form-group">
                    <label for="body">المحتوى</label>
                    <textarea class="form-control"  name="body" id="body" cols="5" rows="5">{{$post->body}}</textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            تعديل المنشور
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>

@stop
@section('styles')
    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    @stop

@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#body').summernote();
        });
    </script>

    @stop