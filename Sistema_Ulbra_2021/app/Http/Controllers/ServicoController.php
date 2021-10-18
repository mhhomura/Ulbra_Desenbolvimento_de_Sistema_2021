<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use App\Models\servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       try {

        $company = empresa::where('id', $id)->first();
        $services = servico::where('empresa_id', $id)->get();

    
        return view('empresa.empresa_services', compact('services', 'company'));
       } catch (\Throwable $th) {
           //throw $th;
       }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $status = 1;
            if($request->status === 'on'){
                $status = 0;
            }
            $user = empresa::where('user_id', Auth::user()->id)->first();
            
            /* dd($request->servicePrice); */

            $service = new servico();
            $service->nome = $request->serviceName;
            $service->descrico = $request->serviceDescription;
            $service->status = $status;
            $service->empresa_id = $user->id;
            $service->valor = (float)$request->servicePrice;
            $service->save();

        return redirect()->route('dashboard');

        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function show(servico $servico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function edit(servico $servico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, servico $servico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function destroy(servico $servico)
    {
        //
    }
}
