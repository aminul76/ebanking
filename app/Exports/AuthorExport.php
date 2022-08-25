<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\dps;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AuthorExport implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dps::select('id', 'interset_rate', 'installment_amount','duration','mature_amount',)->get();
    }

    public function headings(): array
    {
        return [
            '#',
            'interset_rate',
            'installment_amount',
            'duration',
            'mature_amount',
            
        ];
    }
}
