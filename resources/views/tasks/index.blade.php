@extends('layouts.main')

@section('title', 'Tasks')

@section('content')
@if(count($tasks) > 0)

{{-- Start row --}}
<div class="row">
  @endif
  @foreach ($tasks as $task)

  <div class="col s12 m12 l6">

    <div class="card">
      <div class="card-content">
        <span class="right">{{$task->created_at}}</span>
        <h5>{{$task->limit($task->title, 16)}}</h5>

        <p>{{$task->limit($task->description, 20)}}</p>
        <p><span class="badge"><strong>Due: {{$task->dateFormat($task->due_date)}}</strong></span> </p>
      </div>
      <div class="card-action">

        <form action="/task/{{$task->id}}" method="post">
          @method('DELETE')
          @csrf
          <a href="task/{{$task->id}}/edit">Edit</a>
          <button type="submit" class="btn-flat red-text">Delete</button>
          <a class="light-blue-text text_accent-1 modal-trigger showModal" data-id="{{$task->id}}"
            data-title="{{$task->title}}" data-description="{{$task->description}}"
            data-due="{{$task->dateFormat($task->due_date)}}" href="#showModalContent">View</a>
        </form>

      </div>
    </div>
  </div>


  @endforeach
  <div class="fixed-action-btn">

    <a class="btn-floating btn-large waves-effect waves-light red" href="/task/create"><i
        class="material-icons">add</i></a>

  </div>

  <!-- View Modal  -->
  <div id="showModalContent" class="modal">
    <div class="modal-content">
      <h4 class="task-title">Modal Header</h4>
      <p class="task-description">A bunch of text</p>
      <p class="task-due">A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>

  <!-- Add Modal -->
  {{--   <div id="addModal" class="modal modal-fixed-footer">
    <form  method="post" id="addForm">
      @csrf
      <div class="modal-content">
        <div class="row">
          <div class="col m6 s12">
            <h3>Create Task</h3>
            <div class="input-field">
              <input placeholder="Task title" id="add-task-title" name="add-task-title" type="text" class="validate">
              <label for="task-title">Task title</label>
            </div>

            <div class="input-field">
              <input placeholder="Task description" id="add-task-description" name="add-task-description" type="text"
                class="validate">
              <label for="task-description">Task description</label>
            </div>

            <div class="input-field">
              <input placeholder="Task due date" id="add-due-date" type="text" name="add-due-date"
                class="validate datepicker">
              <label for="due-date">Task due date</label>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
        <button class="waves-effect waves-green btn-flat">Add task</button>
      </div>
    </form>
  </div> --}}
  @endsection