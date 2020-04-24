@extends('layouts.main')

@section('title','Edit Task')
@section('content')

<div class="row">
  <div class="col m6 s12 offset-m3 offset-l3">
    <h3>Edit Task </h3>
    <form action="{{route('task.update', $task->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="input-field">
        <input id="title" name="title" type="text" @error('title') class="invalid" @enderror value="{{$task->title}}">
        <label for="title">Task title</label>

        @error('title')
        <span class="red-text">{{$message}}</span>
        @enderror
      </div>

      <div class="input-field">
        <input id="description" name="description" type="text" @error('description') class="invalid" @enderror
          value="{{$task->description}}">
        <label for="description">Task description</label>
        @error('description')
        <span class="red-text">{{$message}}</span>
        @enderror
      </div>

      <div class="input-field">
        <input id="due_date" type="text" name="due_date" @error('due_date') class="invalid" @enderror
          value="{{$task->due_date}}">
        <label for=" due_date">Task due date</label>
        @error('due_date')
        <span class="red-text">{{$message}}</span>
        @enderror
      </div>
      <button class="btn" type="submit">Create task</button>
      <a href="{{url()->previous()}}" class="btn grey lighten-1">Back</a>
  </div>

  </form>
  {{-- 
    {!! Form::model($task, ['route' => ['task.update', $task->id], 'method' => 'POST']) !!}
    @method('PUT')
    <div class="input-field">
      {!!Form::text('title',$task->title,['class' => 'validate', 'id' => 'title'])!!}
      {!!Form::label('title','Task title',['for' => 'title'])!!}
    </div>
    <div class="input-field">
      {!!Form::textarea('description',$task->description,['class' => 'materialize-textarea', 'id' => 'description'])!!}
      {!!Form::label('description','Task description',['for' => 'description'])!!}
    </div>
    <div class="input-field">
      {!!Form::text('due_date',$task->due_date,['class' => 'datepicker', 'id' => 'due_date'])!!}

    </div>
    {!! Form::submit('Edit Task', ['class'=>'btn white-text']); !!}
    {!! Form::close() !!} --}}

</div>
</div>

@endsection