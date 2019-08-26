<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\User;

class usuariosController extends Controller
{

    //
    public function __construct(){
        $this->middleware('admin',['only' => ['edit','destroy']]);
    }

    public function index(Request $request){

        if ($request){
           $query=trim($request->get('searchText'));
           $users = User::where('name','LIKE','%'.$query.'%')
                ->orderBy('id','desc')
                ->paginate(10);
        }

        return view('crud.usuarios.index',['users'=>$users,'$searchText'=>$query]);
    }
    public function create(){

    }
    public function store(){

    }
    public function edit($id){
        return view('crud.usuarios.edit',['users'=>User::where('id',$id)->firstOrFail()]);
    }
    public function update(Request $request,$id){
        $users =User::where('id','=',$id)->first();;
        $users->name=$request->get('nombre');
        $users->email=$request->get('email');
        $users->roll=$request->get('roll');
        $users->update();
        return Redirect::to('/user');
    }
    public function destroy($id){
        $users=User::findOrFail($id);
        $users->delete();
        return Redirect::to('/user');
    }

}
