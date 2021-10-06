<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RegisterModel extends Model
{
    use HasFactory;

    public function allDataSchool() 
    {
        return DB::table('school')->get();
    }

    public function allDataTeam() 
    {
        return DB::table('team')
        ->leftJoin('school', 'school.id_sekolah', '=', 'team.id_tim')
        ->get();
    }

    public function detailTeam($id_tim) 
    {
        return DB::table('team')->where('id_tim', $id_tim)->first();
    }

    public function listMember($id_tim)
    {
        return DB::table('member')->where('id_tim', $id_tim)->get();
    }

    public function detailMember($id_member) 
    {
        return DB::table('member')->where('id_member', $id_member)->first();
    }

    public function editDataTeam($id_tim, $data)
    {
        DB::table('team')->where('id_tim', $id_tim)->update($data);
    }

    public function deleteDataTeam($id_tim)
    {
        DB::table('team')->where('id_tim', $id_tim)->delete();
    }

    public function editDataMember($id_member, $data)
    {
        DB::table('member')->where('id_member', $id_member)->update($data);
    }
}
