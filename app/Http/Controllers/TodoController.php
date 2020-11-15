<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //

    public function index(){
        $todos = Todo::all();
        // dd($todos);
        return view('todo.index',[
            'todos' => $todos
        ]);
    }
    public function update(Request $request){
        // $todo = new Todo();
        // $todo->title=$request->title;
        // $todo->save();
        // return $todo;
        
        $todo = Todo::create([
            'title' =>$request->title
        ]);
        return redirect('/todo');
    }
    public function destroy(Request $request, Todo $todo){
        $todo->delete();
        return redirect('/todo');
    }
}
