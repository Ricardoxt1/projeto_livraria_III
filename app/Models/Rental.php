<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $table = 'rentals';
    protected $fillable = ['customer_id', 'book_id', 'employee_id', 'rental', 'delivery'];
}
