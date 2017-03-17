<?php

namespace App\Http\Controllers\Admin;

use App\Bank;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = Bank::all();
        return view('admin.banks.banks', ['banks' => $banks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.banks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bank = [
            'name' => $request->input('name')
        ];
        $isSaved = Bank::create($bank);

        if($isSaved  != null){
            return redirect('admin/bank');    
        }else{
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bank  $bank ID
     * @return \Illuminate\Http\Response
     */
    public function show(Bank $bank)
    {
        return view('admin.banks.bank', ['bank' => $bank]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $bank)
    {
        return view('admin.banks.edit', ['bank' => $bank]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bank $bank)
    {
        $bank->name = $request->name;
        $bank->save();
        return redirect('admin/bank');
        
        //return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bank $bank)
    {
        $bank->delete();
        return back();
    }
}
