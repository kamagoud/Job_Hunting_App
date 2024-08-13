<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use App\Models\CompanySetting;
use Illuminate\Http\Request;

class CompanySettings extends Controller
{
    public function index(){
        return view('dashboard.work.company-settings');
     }
     public function storeCompany(Request $request)
     {
        $data =[
            'company_name' =>$request->company_name,
            'company_email' =>$request->company_email,
            'address'=>$request->address,
            'country'=>$request->country,
            'city'=>$request->city,
            'state'=>$request->state,
            'postal_code'=>$request->postal_code,
            'phone_number'=>$request->phone_number,
            'mobile_number'=>$request->mobile_number,
            'web_site'=>$request->web_site
        ];
        CompanySetting::create($data);
        return redirect()->back();
     }
}
