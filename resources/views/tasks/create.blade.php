@extends('layouts.main')

@section('title','Create Task')
@section('content')

<div class="row">
  <div class="col m6 s12 offset-m3 offset-l3">
    <h3>Create Task</h3>

    <form action="{{route('task.store')}}" method="post">
      @csrf
      <div class="input-field">
        <input id="title" name="title" type="text" @error('title') class="invalid" @enderror value="{{old('title')}}">
        <label for="title">Task title</label>

        @error('title')
        <span class="red-text">{{$message}}</span>
        @enderror
      </div>

      <div class="input-field">
        <input id="description" name="description" type="text" @error('description') class="invalid" @enderror
          value="{{old('description')}}">
        <label for="description">Task description</label>
        @error('description')
        <span class="red-text">{{$message}}</span>
        @enderror
      </div>

      <div class="input-field">
        <input id="due_date" type="text" name="due_date" @error('due_date') class="invalid" @enderror
          value="{{old('due_date')}}">
        <label for=" due_date">Task due date</label>
        @error('due_date')
        <span class="red-text">{{$message}}</span>
        @enderror
      </div>
      <button class="btn" type="submit">Create task</button>
      <a href="{{url()->previous()}}" class="btn grey lighten-1">Back</a>
  </div>

  </form>

</div>

@endsection