<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UserImport;
use Maatwebsite\Excel\Concerns\FromCollection;
use Excel;

class UserController extends Controller
{
    public function uploadExcel(Request $request){
        Excel::import(new UserImport, $request->file('excel_file'));
        return redirect('/user-upload')->with('message','User Import Successfully');
    }

    public function exportExcel(){
        return Excel::download(new UsersExport, 'users-excel.xlsx');
    }
}
