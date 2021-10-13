<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MailModel extends Model
{
    use HasFactory;

    public function allDataEmail()
    {
        return DB::table('team')->first();
    }
}
