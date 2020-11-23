<?php

namespace App\Http\Controllers;

use App\Book;
use App\Libros;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function libros_dt(Request $request){

        $librosPreseleccionados =  Book::all();

        return Datatables::of($librosPreseleccionados)

            ->addColumn('name', function ($libros) {
                return $libros->name;
            })
            ->addColumn('total', function ($libros) {
                return $libros->total;
            })
            ->addColumn('printer_verification', function ($libros) {
                return $libros->printer_verification;
            })
            ->addColumn('warehouse_delivery', function ($libros) {
                return $libros->warehouse_delivery;
            })
            ->addColumn('total_returns', function ($libros) {
                return $libros->total_returns;
            })
            ->addColumn('books_quantity_ok', function ($libros) {
                if($libros->total_returns != null ){
                    if($libros->income_corrected != null){
                        if($libros->return_corrected != null){
                            if($libros->refund_refund != null){
                                return $libros->total - $libros->total_returns + $libros->income_corrected - $libros->return_corrected + $libros->refund_refund;
                            }
                            return $libros->total - $libros->total_returns + $libros->income_corrected - $libros->return_corrected;
                        }
                        return $libros->total - $libros->total_returns + $libros->income_corrected;
                    }
                    return $libros->total - $libros->total_returns;
                }
                return $libros->books_quantity_ok;
            })
            ->addColumn('income_corrected', function ($libros) {
                return $libros->income_corrected;
            })
            ->addColumn('return_corrected', function ($libros) {
                return $libros->return_corrected;
            })
            ->addColumn('refund_refund', function ($libros) {
                return $libros->refund_refund;
            })
            ->addColumn('glue_stikers_weave', function ($libros) {
                return $libros->glue_stikers_weave;
            })
            ->addColumn('Lined', function ($libros) {
                return $libros->Lined;
            })
            ->addColumn('stick_pocket_barcode', function ($libros) {
                return $libros->stick_pocket_barcode;
            })
            ->addColumn('isolation', function ($libros) {
                return $libros->isolation;
            })
            ->addColumn('distributor_delivery', function ($libros) {
                return $libros->distributor_delivery;
            })
            ->addColumn('action', function () {
                return '<button class="btn btn-primary mb-2 edit" >editar</button>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $request){

        $book = new Book();
        $book->name = $request->get('name');
        $book->total = $request->get('total');
        $book->save();
        return response()->json([
            'status' => 'successfull',
            'message' => 'Libro registrado'
        ]);
    }

    public function update(Request $request){

        $book = Book::find($request->get('id'));
        $book->printer_verification = $request->get('printer_verification');
        $book->warehouse_delivery = $request->get('warehouse_delivery');
        $book->total_returns = $request->get('total_returns');
        $book->books_quantity_ok = $request->get('books_quantity_ok');
        $book->income_corrected = $request->get('income_corrected');
        $book->return_corrected = $request->get('return_corrected');
        $book->refund_refund = $request->get('refund_refund');

        $book->glue_stikers_weave = $request->get('glue_stikers_weave');
        $book->Lined = $request->get('Lined');
        $book->stick_pocket_barcode = $request->get('stick_pocket_barcode');
        $book->isolation = $request->get('isolation');
        $book->distributor_delivery = $request->get('distributor_delivery');






        $book->save();
        return response()->json([
            'status' => 'successfull',
            'message' => 'Seguimiento actualizado'
        ]);
    }

}
