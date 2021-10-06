<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterModel;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->RegisterModel = new RegisterModel();
    }

    public function school() 
    {
        $data = [
            'school' => $this->RegisterModel->allDataSchool()
        ];
        return view('dashboard.registration.school', $data);
    }

    public function team() 
    {
        $data = [
            'team' => $this->RegisterModel->allDataTeam()
        ];
        return view('dashboard.registration.team', $data);
    }

    public function detail($id_tim) 
    {
        if (!$this->RegisterModel->detailTeam($id_tim)) {
            abort(404);
        }

        $data = [
            'team' => $this->RegisterModel->detailTeam($id_tim),
            'members' => $this->RegisterModel->listMember($id_tim)
        ];
        return view('dashboard.registration.member', $data);
    }

    public function editTeam($id_tim) 
    {
        if (!$this->RegisterModel->detailTeam($id_tim)) {
            abort(404);
        }

        $data = [
            'team' => $this->RegisterModel->detailTeam($id_tim)
        ];

        return view('dashboard.form.editTeam', $data);
    }

    public function updateTeam($id_tim) 
    {
        Request()->validate([
            'nama_tim' => 'required|min:1',
            'nama_coach' => 'required|min:1',
            'email_coach' => 'required|min:1',
            'no_coach' => 'required|min:1',
        ]);

        $data = [
            'nama_tim' => Request()->nama_tim,
            'nama_coach' => Request()->nama_coach,
            'email_coach' => Request()->email_coach,
            'no_coach' => Request()->no_coach,
        ];

        $this->RegisterModel->editDataTeam($id_tim, $data);
        return redirect()->route('team')->with('pesan', 'Data Berhasil Di Update!');
    }

    public function deleteTeam($id_tim)
    {
        $this->RegisterModel->deleteDataTeam($id_tim);
        return redirect()->route('team')->with('pesan', 'Data Berhasil Di Hapus!');
    }

    public function editMember($id_member) 
    {
        if (!$this->RegisterModel->detailMember($id_member)) {
            abort(404);
        }

        $data = [
            'members' => $this->RegisterModel->detailMember($id_member)
        ];

        return view('dashboard.form.editMember', $data);
    }

    public function updateMember($id_member) 
    {
        Request()->validate([
            'nama_tim' => 'required|min:1',
            'nama_coach' => 'required|min:1',
            'email_coach' => 'required|min:1',
            'no_coach' => 'required|min:1',
        ]);

        $data = [
            'nama_tim' => Request()->nama_tim,
            'nama_coach' => Request()->nama_coach,
            'email_coach' => Request()->email_coach,
            'no_coach' => Request()->no_coach,
        ];

        $this->RegisterModel->editDataMember($id_member, $data);
        return redirect()->route('member')->with('pesan', 'Data Berhasil Di Update!');
    }
    
}
