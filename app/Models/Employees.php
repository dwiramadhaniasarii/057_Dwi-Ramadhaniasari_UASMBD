<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    public $table = "Employees";
    use HasFactory;
    Protected $fillable = [
        'EmployeeID',
        'LastName',
        'FirstName',
        'Title',
        'TitleOfCourtesy',
        'BirthDate',
        'HirehDate',
        'Address',
        'City',
        'Region',
    ];

    public function products()
    {
        return $this->hasMany(Orders::class, 'EmployeeID', 'EmployeeID');
    }
}
