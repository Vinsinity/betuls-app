<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyDescription;
use App\Models\SiteSeo;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function company()
    {
        $title = 'company setting';
        $settings = CompanyDescription::first();
        return view('admin.setting.company.setting',compact('title','settings'));
    }

    public function companyStore(Request $request)
    {
        $companySettings = CompanyDescription::first();
        if ($companySettings) {
            $companySettings->update($request->all());
            return redirect()->back()->with('success', 'Company description update success');
        }else{
            CompanyDescription::create($request->all());
            return redirect(route('admin.settings.company.setting'))->with('success','Company description store success');
        }
    }

    public function seo()
    {
        $title = 'seo settings';
        $settings = SiteSeo::first();
        return view('admin.setting.seo.setting', compact('title','settings'));
    }

    public function seoStore(Request $request)
    {
        $seoSettings = SiteSeo::first();
        if ($seoSettings) {
            $seoSettings->update($request->all());
//            $seoSettings = $request->all();
            return redirect()->back()->with('success', 'Seo success');
        } else{
            SiteSeo::create($request->all());
            return redirect(route('admin.settings.seo'))->with('success', 'Seo store is success');
        }
    }
}
