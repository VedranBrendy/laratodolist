<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TasksController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    /*  return "INDEX"; */
    $tasks = Task::all();

    return view('tasks.index')->with('tasks', $tasks);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('tasks.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // Validate The Data
    $this->validate($request, [
      'title' => 'required|string|min:3|max:191',
      'description' => 'required|string|min:10|max:200',
      'due_date' => 'required|date'
    ]);

    // Create a New task
    $task = new Task();

    // Assign the Task data from our request
    $task->title = $request->title;
    $task->description = $request->description;
    $task->due_date = $task->dateFormatSQL($request->due_date);

    // Save the task
    $task->save();

    // Flash Session Message with Success
    Session::flash('success', 'Task Created');

    // Return A Redirect
    return redirect()->route('task.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $task = Task::findOrFail($id);
    return view('tasks.show')->with('task', $task);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $task = Task::findOrFail($id);

    return view('tasks.edit')->with('task', $task);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    // Validate The Data
    $this->validate($request, [
      'title' => 'required|string|min:3|max:191',
      'description' => 'required|string|min:10|max:10000',
      'due_date' => 'required|date'
    ]);

    // Find task
    $task = Task::findOrFail($id);

    // Assign the Task data from our request
    $task->title = $request->title;
    $task->description = $request->description;
    $task->due_date = $request->due_date;

    // Save the task
    $task->save();

    // Flash Session Message with Success
    Session::flash('success', 'Task Updated');

    // Return A Redirect
    return redirect()->route('task.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    // Find task
    $task = Task::find($id);
    $task->delete();

    // Flash Session Message with Success
    Session::flash('success', 'Task Deleted');

    // Return A Redirect
    return redirect()->route('task.index');
  }
}
