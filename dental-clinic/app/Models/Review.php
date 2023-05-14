<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guarded = false;
    public function getCreatedAtAttribute( $value ) {
        return Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d/m/Y');
    }
}
