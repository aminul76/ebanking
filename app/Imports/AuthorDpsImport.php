<?php

namespace App\Imports;

use App\dps;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class AuthorDpsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $user = auth()->user();
        return new dps([
            
            'user_id'=>$user->id,
           
            'interset_rate'=>$row['interset_rate'],
            'installment_amount'=>$row['mature_amount'],
            'duration'=>$row['duration'],
            'mature_amount'=>$row['mature_amount'],
            
           
    
        ]);
    }
}
