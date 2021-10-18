<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RegisterModel extends Model
{
    use HasFactory;

    public function getUser()
    {
        return DB::table('users')->get();
    }

    public function allDataSchool() 
    {
        return DB::table('school')->paginate(10);
    }

    public function allDataTeam() 
    {
        return DB::table('team')
        ->leftJoin('school', 'school.id_sekolah', '=', 'team.id_tim')
        ->paginate(10);
    }

    public function allVerifiedTeam() 
    {
        return DB::table('team')->get();
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
        DB::table('member')->where('id_tim', $id_tim)->delete();
    }

    public function editDataMember($id_member, $data)
    {
        DB::table('member')->where('id_member', $id_member)->update($data);
    }

    public function addDataMember($data)
    {
        DB::table('member')->insert($data);
    }

    public function addDataSchool($data)
    {
        DB::table('school')->insert($data);
    }

    public function addDataTeam($data)
    {
        DB::table('team')->insert($data);
    }

    public function specifiedSchool($data)
    {
        return DB::table('school')->select('id_sekolah')->where('nama_sekolah', $data)->first();
    }

    public function lastIDSchool()
    {
        return DB::table('school')->latest('id_sekolah')->first();
    }

    public function lastIDTeam()
    {
        return DB::table('team')->latest('id_tim')->first();
    }
}
