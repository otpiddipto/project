<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\employee;

class employeeController extends Controller
{
    public function index(){
        return view('employee.index');

       
    }

    public function create(){
        return view('employee.create');
    }

    public function store(Request $request){
       $data = $request->validate([
        'Nama' => 'required|array',
        'Umur' => 'required|integer',
        'Alamat' => 'required|array',
        'No.telp' => 'required|array',
       ]);

       $newEmployee = employee::create($data);

       return redirect(route('employee.index'));
    }


}
