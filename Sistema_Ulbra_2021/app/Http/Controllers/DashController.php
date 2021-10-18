<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{

    public function index() {
        if(Auth::user()->type === 1){

            $company = empresa::where('user_id', Auth::user()->id)->first();

            /* dd(Auth::user()->id); */

            $services = DB::table('servicos')->where('empresa_id', $company->id)->get();
            return view('dashboard_company', compact('services'));

        }else{
            $companys = empresa::where('status', 1)->get();
            return view('dashboard', compact('companys'));
        }
    }
}