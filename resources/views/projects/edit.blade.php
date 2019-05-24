@extends('layout')

@section('content')
    <br>
    <h1 class="title">Edit Project</h1>
    <form method="POST" action="/projects/{{ $project->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <input type="text" class="input" name="description" placeholder="Description" value="{{ $project->description }}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link"> Update Project</button>
            </div>
        </div>

    </form>
    <form method="post" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf
        {{ csrf_field() }}

        <div class="field">
            <div class="control">
                <button type="submit" class="button"> Delete Project</button>
            </div>
        </div>
    </form>
@endsection
