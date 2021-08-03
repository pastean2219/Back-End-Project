<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFishing_gearRequest;
use App\Http\Requests\UpdateFishing_gearRequest;
use Illuminate\Http\Request;
use App\Models\fishing_gear;

class FishingController extends Controller
{   
    public function __construct(){
        return $this->middleware('auth');
    }

    public function index(Request $request){
        $user = auth()->user();
        if ($request->has('search')){
            $search = $request->search;
            $gear = $user->fishing_gears()->where('Categorie', 'LIKE', "%{$search}%")->paginate(4);
        } else {           
            $gear = $user->fishing_gears()->paginate(8);
        }   
        return view('fishing_gear.index', ['fishing_gear'=> $gear]);
    }
    
    public function create(){
        return view('fishing_gear.create');
    }

    public function store(CreateFishing_gearRequest $request){
        $user = auth()->user();
        
        $newItem = $user->fishing_gears()->create($request->all());
        //$newItem = fishing_gear::create( $request->all() );
        $request->session()->flash('success','Produsul a fost creat!');
        return redirect()->route('fishing_gear.index');
    }

    
    public function edit($id){
        $gear = fishing_gear::find($id);
            
        return view('fishing_gear.edit',['fishing_gear'=>$gear]);
    }

    public function show($id){
        $gear = fishing_gear::find($id);
        //dd($item);
        return view('fishing_gear.show',['fishing_gear'=>$gear]);
    }

    public function update(UpdateFishing_gearRequest $request, $id){
        $gear = fishing_gear::find($id);
        $gear->update($request->all());

        $request->session()->flash('success','Produsul a fost actualizat!');
        return redirect()->route('fishing_gear.show',$id);
    }
    
    public function destroy(Request $request, $id){
        $item = fishing_gear::find($id);
        $item->delete();
        $request->session()->flash('success','Produsul a fost șters!');
        return redirect()->route('fishing_gear.index');
    }
    
}
