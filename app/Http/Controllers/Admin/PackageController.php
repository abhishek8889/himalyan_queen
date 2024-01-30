<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(Request $request){
        return view('admin.package.index');
    }
    public function addPackage(Request $request){
        return view('admin.package.add_package');
    }
    public function addPackageProcess(Request $request){
        dd($request);
    }
}
