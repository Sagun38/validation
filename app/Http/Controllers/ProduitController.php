<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use Form;

class ProduitController extends Controller
{


public function afficheProduit()
{
  $produits = Produit::all();
    return view('produit', ['produits'=>$produits]);
}

public function deleteProduit(Request $request, $id)
{
  produit::destroy($id);
  return redirect('/produit');
}

}
