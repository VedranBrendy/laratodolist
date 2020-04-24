@extends('layouts.main')

@section('title', 'Tasks')

@section('content')


{{-- Start row --}}
<div class="row">

  <div class="col s12 m12 l12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">{{$task->title}}<h6 class="right">{{$task->created_at}}</h6></span>
        <p>{{$task->description}}</p>
        <small>Due: {{$task->due_date}}</small>
      </div>
      <div class="card-action">

        {!! Form::open(['route' => ['task.destroy', $task->id], 'method' => 'DELETE'])!!}

        <a href="{{route('task.edit', $task->id)}}">Edit</a>
        <button type="submit" class="btn-flat red-text">Delete</button>
        <a class="light-blue-text text_accent-1" href="{{route('task.show', $task->id)}}">View</a>
        {!! Form::close() !!}

      </div>
    </div>
  </div>

  {{-- End row --}}
</div>

@endsection