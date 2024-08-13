<?php

namespace App\Imports;

use App\Employee;
use Maatwebsite\Excel\Concerns\ToModel;

class EmployeeImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
            return new Employee([
                'name'  => $row[0],
                'phon'  => $row[1],
                'phon2' => $row[2],
                'email' => $row[3],
                'phon2' => $row[4],
                'Facility' => $row[5],
                'webName' => $row[6],
                'Tex_Number' => $row[7],
                'status' => $row[8],
                'pointsClient' => $row[9],

            ]);
    }
}
