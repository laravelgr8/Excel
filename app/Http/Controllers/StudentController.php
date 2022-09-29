<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\imports\StudentImport;
use App\Exports\UserExport;
use App\Exports\StudentExport;
use App\Exports\ReportExport;

use Excel;
class StudentController extends Controller
{
    public function excel_import(Request $request)
    {
        $file=$request->file('file');
        $data=Excel::import(new StudentImport,$file);
        return back()->withStatus('Excel import successfully');
    }

    public function export()
    {
        return Excel::download(new ReportExport, 'users.xlsx');
    }
}
