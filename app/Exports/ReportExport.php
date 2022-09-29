<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ReportExport implements WithMultipleSheets
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return User::all();
    // }


    public function sheets(): array
    {
        $sheets = [];

        
        $sheets[] = new StudentExport();
        $sheets[] = new UserExport();
        

        return $sheets;
    }
}
