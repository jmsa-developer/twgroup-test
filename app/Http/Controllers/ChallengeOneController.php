<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ChallengeOneController extends Controller
{

    public function index()
    {
        //1.	Obtener precio total de la factura

        $products = DB::table('products')
            ->select('invoice_id')
            ->groupBy('invoice_id')
            ->selectRaw('SUM(quantity * price) as total')->get();

        //2.	Obtener todos id de las facturas que tengan productos con cantidad mayor a 100.
        $itemsId = DB::table('invoices')
            ->select('invoices.id')
            ->join('products', 'invoices.id', '=', 'products.invoice_id')
            ->where('products.quantity', '>', 100)
            ->distinct()
            ->get();


        //3.	Obtener todos los nombres de los productos cuyo valor final sea superior a $1.000.000 CLP.
        $itemsNames = DB::table('products')
            ->select(['id','name', 'quantity', 'price'])
            ->whereRaw('(quantity * price) > 100000')
            ->get();


        return view('challenge-one.index', [
            'products' => $products,
            'itemsId' => $itemsId,
            'itemsNames' => $itemsNames,

        ]);
    }


}
