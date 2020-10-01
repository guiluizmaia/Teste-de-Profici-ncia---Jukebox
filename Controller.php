<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pessoas;

class ProductsController extends Controller
{

    public function index(){
        return Pessoas::all();
    }

    public function Store(Request $request){
        Pessoas::create($request->all());
    }

    public function show ($sobrenome){
        return Pessoas::findOrFail($sobrenome);
    }

    public function update (Request $request, $sobrenome){
        $pessoa = Pessoas::findOrFail($sobrenome);
        $pessoa->update($request->all());
    }

    public function destroy ($sobrenome){
        $pessoa = Pessoas::findOrFail($sobrenome);
        $pessoa->delete();
    }
}
    