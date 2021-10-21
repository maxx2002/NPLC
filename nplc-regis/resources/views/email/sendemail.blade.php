@component('mail::message')
# Dear Team Members of {{ $team['nama_tim'] }}<br>
# Your team id is {{ $team['id_tim'] }}

Thank you for registering as a participant on the 9th NPLC

@php($i = 1)
@foreach ($count as $item)
    @if ($item->verified == 'yes')
        @php($i++)
    @endif
@endforeach

@if ($i <= 50)
    Congratulations, your registration fee is free
@endif

@component('mail::table')
| Competition Category     | Region               
| :----------------------: | :-------------------: 
| {{ $team['kategori'] }}  | {{ $team['region'] }} 
@endcomponent

@component('mail::table')
| School Name                    | School Address                  | School City                   | School Phone
| :----------------------------: | :-----------------------------: | :---------------------------: | :-------------------------:
| {{ $school['nama_sekolah'] }}  | {{ $school['alamat_sekolah'] }} | {{ $school['kota_sekolah'] }} | {{ $school['no_sekolah'] }}
@endcomponent

@component('mail::table')
| Team Name               | Coach Name                 | Coach Email                | Coach Phone
| :---------------------: | :------------------------: | :-------------------------:| :-------------------------:
| {{ $team['nama_tim'] }} | {{ $team['nama_coach'] }}  | {{ $team['email_coach'] }} | {{ $team['no_coach'] }}
@endcomponent

@component('mail::table')
| Name                   | Gender                    | Email                   | Phone                   | Address                  | City                   | Zip Code
| :--------------------: | :-----------------------: | :---------------------: | :---------------------: | :----------------------: | :--------------------: | :-----------------------:
| {{ $leader['nama'] }}  | {{ $leader['gender'] }}   | {{ $leader['email']}}   | {{ $leader['no_wa'] }}  | {{ $leader['alamat'] }}  | {{ $leader['kota'] }}  | {{ $leader['kode_pos'] }}
| {{ $member1['nama'] }} | {{ $member1['gender'] }}  | {{ $member1['email']}}  | {{ $member1['no_wa'] }} | {{ $member1['alamat'] }} | {{ $member1['kota'] }} | {{ $member1['kode_pos'] }}
| {{ $member2['nama'] }} | {{ $member2['gender'] }}  | {{ $member2['email']}}  | {{ $member2['no_wa'] }} | {{ $member2['alamat'] }} | {{ $member2['kota'] }} | {{ $member2['kode_pos'] }}
@endcomponent

If the data that you've submitted is correct, please continue by filling out the verification form below.
@component('mail::button', ['url' => 'https://docs.google.com/forms/d/e/1FAIpQLScTnOlXREAutQQn_ymchTKjJ5Briwh0SDjqYKwyI6Ke6s2LLQ/viewform'])
Verification Form
@endcomponent

Thanks,<br>
9th NPLC's Committee.
@endcomponent
