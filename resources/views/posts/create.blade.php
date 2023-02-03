
@extends('layouts.app')

@section('title') Create @endsection

@section('content')
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control"> </textarea>
        </div>
        <div class="mb-3 ">
            <label class="form-label" for="exampleCheck1">Post Creator</label>
            <select name="post_creator" class="form-control">
               @foreach($users as $user)
                   <option value="{{$user->id}}">{{$user->name}}</option>
               @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
