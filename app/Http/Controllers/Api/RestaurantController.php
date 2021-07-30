<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = DB::table('restaurants')
            ->select(
                'restaurants.id as restaurant_id',
                'restaurants.name as nome_ristorante',
                'restaurants.address as indirizzo_ristorante',
                'users.name as nome_proprietario',
                'users.surname as cognome_proprietario',
            )
            ->join('users','users.id','=','restaurants.user_id')   
        ->get();
        /* restaurants conterrà la join tra la tabella dei ristoranti e i rispettivi proprietari
        */
        return response()->json($restaurants);
    }

    public function show($id)
    {
        //qui andrò a prendere tutti i piatti corrispettivi al ristorante che ha l'id = a quello passato nella funzione
        $menu = Restaurant::where('id', $id)->with('meals')->first();

        return response()->json($menu);
    }

/*     public function category(){
        $categories = DB::table('categories');
        return response()->json($categories);
    } */

}
