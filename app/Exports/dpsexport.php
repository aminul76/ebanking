<?php

namespace App\Exports;

use App\dps;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class dpsexport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dps::select('id','user_id', 'interset_rate', 'installment_amount','duration','mature_amount')->get();
    }

    public function headings(): array
    {
        return [
            '#',
            'user_id',
            'interset_rate',
            'installment_amount',
            'duration',
            'mature_amount',
           
        ];
    }
}
