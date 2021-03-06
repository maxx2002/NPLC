<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\RegisterModel;

class DaftarController extends Controller
{
    public function __construct()
    {
        $this->RegisterModel = new RegisterModel();
    }    
    
    public function add()
    {        
        Request()->validate([
            'kategori' => 'required|min:1',
            'region' => 'required|min:1',
            'nama_sekolah' => 'required|min:1',
            'alamat_sekolah' => 'required|min:1',
            'kota_sekolah' => 'required|min:1',
            'no_sekolah' => 'required|min:1',
            'nama_tim' => 'required|min:1',
            'leadernamalengkap' => 'required|min:1',
            'leadergender' => 'required|min:1',
            'leaderemail' => 'required|min:1',
            'leaderalamat' => 'required|min:1',
            'leaderkota' => 'required|min:1',
            'leaderkodepos' => 'required|min:1',
            'leadernomorwa' => 'required|min:1',
        ]);

        $schoolsize = $this->RegisterModel->lastIDSchool();
        if ($schoolsize === null) {
            $idsekolah = 1;
        } else {
            $idsekolah = $schoolsize->id_sekolah + 1;
        }        
        
        $datasekolah = [
            'nama_sekolah' => Request()->nama_sekolah,
            'alamat_sekolah'=> Request()->alamat_sekolah,
            'kota_sekolah'=> Request()->kota_sekolah,
            'no_sekolah'=> Request()->no_sekolah
        ];               
        
        $idteam = $this->RegisterModel->lastIDTeam();
        if ($idteam === null) {
            $idtim = 1;
        } else {
            $idtim = $this->RegisterModel->lastIDTeam()->id_tim + 1;
        }
        
        if (Request()->firstnamalengkap == null) {
            $datamember = [
                [
                    'id_tim' => $idtim,
                    'nama'=> Request()->leadernamalengkap,
                    'gender'=> Request()->leadergender,
                    'email'=> Request()->leaderemail,
                    'alamat'=> Request()->leaderalamat,
                    'kota'=> Request()->leaderkota,
                    'kode_pos'=> Request()->leaderkodepos,
                    'no_wa'=> Request()->leadernomorwa
                ],
            ];
        } else if (Request()->secondnamalengkap == null) {
            $datamember = [
                [
                    'id_tim' => $idtim,
                    'nama'=> Request()->leadernamalengkap,
                    'gender'=> Request()->leadergender,
                    'email'=> Request()->leaderemail,
                    'alamat'=> Request()->leaderalamat,
                    'kota'=> Request()->leaderkota,
                    'kode_pos'=> Request()->leaderkodepos,
                    'no_wa'=> Request()->leadernomorwa
                ],
    
                [
                    'id_tim' => $idtim,
                    'nama'=> Request()->firstnamalengkap,
                    'gender'=> Request()->firstgender,
                    'email'=> Request()->firstemail,
                    'alamat'=> Request()->firstalamat,
                    'kota'=> Request()->firstkota,
                    'kode_pos'=> Request()->firstkodepos,
                    'no_wa'=> Request()->firstnomorwa
                ],
            ];
        } else {
            $datamember = [
                [
                    'id_tim' => $idtim,
                    'nama'=> Request()->leadernamalengkap,
                    'gender'=> Request()->leadergender,
                    'email'=> Request()->leaderemail,
                    'alamat'=> Request()->leaderalamat,
                    'kota'=> Request()->leaderkota,
                    'kode_pos'=> Request()->leaderkodepos,
                    'no_wa'=> Request()->leadernomorwa
                ],
    
                [
                    'id_tim' => $idtim,
                    'nama'=> Request()->firstnamalengkap,
                    'gender'=> Request()->firstgender,
                    'email'=> Request()->firstemail,
                    'alamat'=> Request()->firstalamat,
                    'kota'=> Request()->firstkota,
                    'kode_pos'=> Request()->firstkodepos,
                    'no_wa'=> Request()->firstnomorwa
                ],
    
                [
                    'id_tim' => $idtim,
                    'nama'=> Request()->secondnamalengkap,
                    'gender'=> Request()->secondgender,
                    'email'=> Request()->secondemail,
                    'alamat'=> Request()->secondalamat,
                    'kota'=> Request()->secondkota,
                    'kode_pos'=> Request()->secondkodepos,
                    'no_wa'=> Request()->secondnomorwa
                ]
            ];
        }
        
        $datatim = [
            'id_sekolah'=> $idsekolah,
            'kategori'=> Request()->kategori,
            'region'=> Request()->region,
            'nama_tim'=> Request()->nama_tim,
            'nama_coach'=> Request()->nama_coach,
            'no_coach'=> Request()->no_coach,
            'email_coach'=> Request()->email_coach
        ];

        $this->RegisterModel->addDataSchool($datasekolah); 
        $this->RegisterModel->addDataMember($datamember);
        $this->RegisterModel->addDataTeam($datatim);

        //email
        $team = [
            'id_tim' => $idtim,
            'kategori'=> Request()->kategori,
            'region'=> Request()->region,
            'nama_tim'=> Request()->nama_tim,
            'nama_coach'=> Request()->nama_coach,
            'no_coach'=> Request()->no_coach,
            'email_coach'=> Request()->email_coach
        ];

        $leader = [
            'nama'=> Request()->leadernamalengkap,
            'gender'=> Request()->leadergender,
            'email'=> Request()->leaderemail,
            'alamat'=> Request()->leaderalamat,
            'kota'=> Request()->leaderkota,
            'kode_pos'=> Request()->leaderkodepos,
            'no_wa'=> Request()->leadernomorwa
        ];

        $member1 = [
            'nama'=> Request()->firstnamalengkap,
            'gender'=> Request()->firstgender,
            'email'=> Request()->firstemail,
            'alamat'=> Request()->firstalamat,
            'kota'=> Request()->firstkota,
            'kode_pos'=> Request()->firstkodepos,
            'no_wa'=> Request()->firstnomorwa
        ];

        $member2 = [
            'nama'=> Request()->secondnamalengkap,
            'gender'=> Request()->secondgender,
            'email'=> Request()->secondemail,
            'alamat'=> Request()->secondalamat,
            'kota'=> Request()->secondkota,
            'kode_pos'=> Request()->secondkodepos,
            'no_wa'=> Request()->secondnomorwa
        ];

        $school = [
            'nama_sekolah' => Request()->nama_sekolah,
            'alamat_sekolah'=> Request()->alamat_sekolah,
            'kota_sekolah'=> Request()->kota_sekolah,
            'no_sekolah'=> Request()->no_sekolah
        ];

        $count = $this->RegisterModel->allVerifiedTeam();
        Mail::to(Request()->leaderemail)->send(new SendEmail($team, $school, $leader, $member1, $member2, $count));
        Mail::to(Request()->firstemail)->send(new SendEmail($team, $school, $leader, $member1, $member2, $count));
        Mail::to(Request()->secondemail)->send(new SendEmail($team, $school, $leader, $member1, $member2, $count));

        return view('done');
    }

//     public function sendEmail()
//     {
//         $team = [
//             'id_tim' => '1',
//             'kategori'=> 'Request()->kategori',
//             'region'=> 'Request()->region',
//             'nama_tim'=> 'Request()->nama_tim',
//             'nama_coach'=> 'Request()->nama_coach',
//             'no_coach'=> 'Request()->no_coach',
//             'email_coach'=> 'Request()->email_coach'
//         ];

//         $leader = [
//             'nama'=> 'Request()->leadernamalengkap',
//             'gender'=> 'Request()->leadergender',
//             'email'=> 'Request()->leaderemail',
//             'alamat'=> 'Request()->leaderalamat',
//             'kota'=> 'Request()->leaderkota',
//             'kode_pos'=> 'Request()->leaderkodepos',
//             'no_wa'=> 'Request()->leadernomorwa'
//         ];

//         $member1 = [
//             'nama'=> 'Request()->firstnamalengkap',
//             'gender'=> 'Request()->firstgender',
//             'email'=> 'Request()->firstemail',
//             'alamat'=> 'Request()->firstalamat',
//             'kota'=> 'Request()->firstkota',
//             'kode_pos'=> 'Request()->firstkodepos',
//             'no_wa'=> 'Request()->firstnomorwa'
//         ];

//         $member2 = [
//             'nama'=> 'Request()->secondnamalengkap',
//             'gender'=> 'Request()->secondgender',
//             'email'=> 'Request()->secondemail',
//             'alamat'=> 'Request()->secondalamat',
//             'kota'=> 'Request()->secondkota',
//             'kode_pos'=> 'Request()->secondkodepos',
//             'no_wa'=> 'Request()->secondnomorwa'
//         ];

//         $school = [
//             'nama_sekolah' => 'Request()->nama_sekolah',
//             'alamat_sekolah'=> 'Request()->alamat_sekolah',
//             'kota_sekolah'=> 'Request()->kota_sekolah',
//             'no_sekolah'=> 'Request()->no_sekolah'
//         ];

//         $count = $this->RegisterModel->allVerifiedTeam();

//         Mail::to('maximusaureliusw@gmail.com')->send(new SendEmail($team, $school, $leader, $member1, $member2, $count));
//         return new SendEmail($team, $school, $leader, $member1, $member2, $count);
//     }
}
