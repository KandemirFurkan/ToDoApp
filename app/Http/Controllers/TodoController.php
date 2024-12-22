<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = ToDo::all();
        return view('index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

     $is_created=   ToDo::create([
    'title' => $request->title,
    'description' => $request->description,
 ]);
 if($is_created){
    return redirect()->route('index')->with('success', 'Todo Başarıyla Oluşturuldu!');
 }
return redirect()->route('index')->with('error', 'Todo Oluşturulamadı!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $todo=ToDo::find($id);
       return view('show',compact('todo'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo=ToDo::find($id);
        return view('edit',compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      $todo=ToDo::find($id);
  $is_success = $todo->update([
        'title' => $request->title,
        'description' => $request->description,
        'completed' => $request->completed,
     ]);
     if($is_success) {
        return redirect()->route('index')->with('success', 'Todo Başarıyla Güncellendi');
     }

        return redirect()->route('index')->with('error', 'Bir Hata Oluştu!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $todo=ToDo::find($id);
   $is_deleted=   $todo->delete();

   if($is_deleted){
        return redirect()->route('index')->with('success', 'Todo Başarıyla Silindi!');
       }
       return redirect()->route('index')->with('error', 'Todo Silinemedi!');


    }
}
