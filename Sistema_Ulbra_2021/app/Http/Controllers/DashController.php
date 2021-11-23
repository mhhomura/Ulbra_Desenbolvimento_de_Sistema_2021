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

        }elseif(Auth::user()->type === 3){

            $users = DB::table('users')->where('type', 1)->get();
            $companys = empresa::where('status', 1)->get();
            $services = DB::table('servicos')->get();

            $num1 = 0;
            $num2 = 0;
            $num3 = 0;

            foreach($users as $user){
                $num1 = $num1 + 1;
            }
            foreach($services as $service){
                $num2 = $num2 + 1;
            }
            foreach($companys as $company){
                $num3 = $num3 + 1;
            }
            return view('dashboard_adm', compact('users', 'companys', 'services', 'num1', 'num2', 'num3'));

        }else{
            $companys = empresa::where('status', 1)->get();
            return view('dashboard', compact('companys'));
        }
    }
}