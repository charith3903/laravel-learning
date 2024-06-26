<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo; // Import the Todo class

class TodoController extends Controller
{
    protected $task;
    public function __construct(){
        $this->task = new Todo();
    }
    public function index (){

        $response['tasks']=$this->task->all();
        return view('pages.todo.index')->with($response);
    }

    public function store(Request $request){
        $this->task->create($request->all());
        return redirect()->route('todo');

    }
}
