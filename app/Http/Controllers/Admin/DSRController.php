<?php

namespace App\Http\Controllers\Admin;

use App\DSR;
use App\Bank;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DSRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dsr.dsrs', ['dsrs' => DSR::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banks = Bank::all();
        return view('admin.dsr.create', ['banks' => $banks]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dsr = [
            'form' => $request->from,
            'to' => $request->to,
            'bank_id' => $request->bank
        ];
        
        $isSaved = DSR::create($dsr);
        if($isSaved){
            return redirect('admin/dsr');
        }
        return back()->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DSR  $dSR
     * @return \Illuminate\Http\Response
     */
    public function show(DSR $dsr)
    {
        return view('admin.dsr.dsr', ['dsr' => $dsr]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DSR  $dSR
     * @return \Illuminate\Http\Response
     */
    public function edit(DSR $dsr)
    {
        $banks = Bank::all();
        return view('admin.dsr.edit', ['dsr' => $dsr, 'banks' => $banks]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DSR  $dSR
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DSR $dsr)
    {
        $dsr =  [
                    'form' => $request->from,
                    'to' => $request->to,
                    'bank_id' => $request->bank
                ];
        $isUpdate = DSR::where('id', '=', $request->id)->update($dsr);
        if($isUpdate){
            return redirect('admin/dsr');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DSR  $dSR
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, DSR $dsr)
    {
        $dsr->delete();
        return back();
    }
}
