@extends('layout')
@section('content')
    <h1 class="title">Create a New Project</h1>
    <form method="post" action="/projects">
        {{ csrf_field() }}
        <div class="field">
            <input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger': ''}}" placeholder="Project title" value="{{old('title')}}">
        </div>
        <div class="field">
            <textarea name="description" class="textarea {{ $errors->has('title') ? 'is-danger': ''}}" placeholder="Project description">{{old('description')}}</textarea>
        </div>
        <div>
            <button type="submit" class="button is-link">Create Project</button>
        </div>
        @if($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
@endsection
