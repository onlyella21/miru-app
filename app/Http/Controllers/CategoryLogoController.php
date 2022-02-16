<?php

namespace App\Http\Controllers;

use App\Models\CategoryLogo;
use Illuminate\Http\Request;
use DataTables;


class CategoryLogoController extends Controller
{
    // public function index(Request $request)
    // {
    //     // $category = CategoryLogo::latest()->get();
    //     // return view('admin.logo.categorylogo');

    //     if ($request->ajax()) {
    //         $data = CategoryLogo::latest()->get();
    //         return Datatables::of($data)
    //             ->addIndexColomn()
    //             ->addColomn('action', function($row) {
    //                 $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>
    //                 < a href="javascript:void(0) class="delete btn btn-danger btn-sm">Delete</a>';
    //                 return $actionBtn;
    //             })
    //             ->rawColumn(['action'])
    //             ->make(true);
    //     };
    // }

    public function json()
    {
        return Datatables::of(CategoryLogo::all())->make(true);
    }

    public function index()
    {
        return view('admin.logo.categorylogo');
    }
}
