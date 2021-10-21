<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="img/logonplcbulet.png" />
    <title>9th NPLC - Register</title>
</head>

<body class="font-raleway">
    <div class="box relative">

        <div class="flex justify-between">
            <img src="img/logonplc.png" alt="" class="mt-4 ml-4 w-16 md:w-32 z-10">
            <div class="flex mt-4 mr-4 z-10">
                <img src="img/logosu.png" alt="" class="w-8 md:w-14 h-8 md:h-14">
                <img src="img/logouc.png" alt="" class="w-8 md:w-14 h-8 md:h-14 ml-2">
            </div>
        </div>

        <img src="img/awan1.png" alt="" class="absolute w-1/3 top-6 left-20">
        <img src="img/awan2.png" alt="" class="absolute w-1/3 top-28 md:top-44">
        <img src="img/awan3.png" alt="" class="absolute w-1/3 top-14 md:top-28 right-0">

        <div class="flex items-center justify-center z-10">
            <img src="img/tulisanregis.svg" alt="" class="w-2/3 md:w-1/2 lg:w-1/3 mt-10 md:mt-14 z-10">
        </div>

        <div class="flex justify-center">
            <div class="lg:w-11/12 xl:w-5/6 mt-10 md:mt-28 mx-4 lg:mx-0">
                <form action="/registrationsuccess" method="POST">
                    @csrf
                    <div class="md:grid grid-cols-2 gap-5">
                        <div class="rounded-lg p-5" style="background: rgba(255, 255, 255, 0.6);">
                            <h1 class="font-bold text-lg md:text-2xl">Region</h1>
                            <select required name="region"
                                class="border-2 border-black-500 rounded-md mt-2 w-full p-2"
                                style="background: rgba(255, 255, 255, 0.6);">
                                <option value="west">West</option>
                                <option value="east">East</option>
                            </select>
                        </div>
                        <div class="rounded-lg p-5 mt-5 md:mt-0" style="background: rgba(255, 255, 255, 0.6);">
                            <h1 class="font-bold text-lg md:text-2xl">Kategori</h1>
                            <select required name="kategori"
                                class="border-2 border-black-500 rounded-md mt-2 w-full p-2"
                                style="background: rgba(255, 255, 255, 0.6);">
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="md:grid grid-cols-2 gap-5 mt-5">
                        <div class="rounded-lg p-5" style="background: rgba(255, 255, 255, 0.6);">
                            <h1 class="font-bold text-lg md:text-2xl">TEAM INFO</h1>
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <input name="nama_tim" class="border-2 border-black-500 rounded-md mt-2 w-full p-2"
                                        type="text" placeholder="Nama Tim" style="background: rgba(255, 255, 255, 0.6);"
                                        required>
                                    <input name="nama_coach"
                                        class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="text"
                                        placeholder="Nama Coach" style="background: rgba(255, 255, 255, 0.6);">
                                </div>
                                <div>
                                    <input name="no_coach" class="border-2 border-black-500 rounded-md mt-2 w-full p-2"
                                        type="tel" placeholder="No WA Coach"
                                        style="background: rgba(255, 255, 255, 0.6);">
                                    <input name="email_coach"
                                        class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="email"
                                        placeholder="Email Coach" style="background: rgba(255, 255, 255, 0.6);">
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg p-5 mt-5 md:mt-0" style="background: rgba(255, 255, 255, 0.6);">
                            <h1 class="font-bold text-lg md:text-2xl">SCHOOL INFO</h1>
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <input required name="nama_sekolah"
                                        class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="text"
                                        placeholder="Nama Sekolah" style="background: rgba(255, 255, 255, 0.6);">
                                    <input required name="alamat_sekolah"
                                        class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="text"
                                        placeholder="Alamat Sekolah" style="background: rgba(255, 255, 255, 0.6);">
                                </div>
                                <div>
                                    <input required name="kota_sekolah"
                                        class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="text"
                                        placeholder="Kota/Provinsi Sekolah"
                                        style="background: rgba(255, 255, 255, 0.6);">
                                    <input required name="no_sekolah"
                                        class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="tel"
                                        placeholder="Nomor Telepon Sekolah"
                                        style="background: rgba(255, 255, 255, 0.6);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:grid grid-cols-3 gap-5 mt-5">
                        <div class="rounded-lg p-5" style="background: rgba(255, 255, 255, 0.6);">
                            <h1 class="font-bold text-lg md:text-2xl">LEADER</h1>
                            <input required name="leadernamalengkap"
                                class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="text"
                                placeholder="Nama Lengkap" style="background: rgba(255, 255, 255, 0.6);">
                            <select required name="leadergender"
                                class="border-2 border-black-500 rounded-md mt-2 w-full p-2"
                                style="background: rgba(255, 255, 255, 0.6);">
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <input required name="leaderemail"
                                class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="email"
                                placeholder="Email" style="background: rgba(255, 255, 255, 0.6);">
                            <input required name="leaderalamat"
                                class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="text"
                                placeholder="Alamat" style="background: rgba(255, 255, 255, 0.6);">
                            <input required name="leaderkota"
                                class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="text"
                                placeholder="Kota" style="background: rgba(255, 255, 255, 0.6);">
                            <input required name="leaderkodepos"
                                class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="tel"
                                placeholder="Kode Pos" style="background: rgba(255, 255, 255, 0.6);">
                            <input required name="leadernomorwa"
                                class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="tel"
                                placeholder="Nomor WA" style="background: rgba(255, 255, 255, 0.6);">
                        </div>
                        <div class="rounded-lg p-5 mt-5 md:mt-0" style="background: rgba(255, 255, 255, 0.6);">
                            <h1 class="font-bold text-lg md:text-2xl">1st MEMBER</h1>
                            <input name="firstnamalengkap"
                                class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="text"
                                placeholder="Nama Lengkap" style="background: rgba(255, 255, 255, 0.6);">
                            <select name="firstgender"
                                class="border-2 border-black-500 rounded-md mt-2 w-full p-2"
                                style="background: rgba(255, 255, 255, 0.6);">
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <input name="firstemail"
                                class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="email"
                                placeholder="Email" style="background: rgba(255, 255, 255, 0.6);">
                            <input name="firstalamat"
                                class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="text"
                                placeholder="Alamat" style="background: rgba(255, 255, 255, 0.6);">
                            <input name="firstkota"
                                class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="text"
                                placeholder="Kota" style="background: rgba(255, 255, 255, 0.6);">
                            <input name="firstkodepos"
                                class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="tel"
                                placeholder="Kode Pos" style="background: rgba(255, 255, 255, 0.6);">
                            <input name="firstnomorwa"
                                class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="tel"
                                placeholder="Nomor WA" style="background: rgba(255, 255, 255, 0.6);">
                        </div>
                        <div class="rounded-lg p-5 mt-5 md:mt-0" style="background: rgba(255, 255, 255, 0.6);">
                            <h1 class="font-bold text-lg md:text-2xl">2nd MEMBER</h1>
                            <input name="secondnamalengkap" class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="text"
                                placeholder="Nama Lengkap" style="background: rgba(255, 255, 255, 0.6);">
                            <select name="secondgender" class="border-2 border-black-500 rounded-md mt-2 w-full p-2"
                                style="background: rgba(255, 255, 255, 0.6);">
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <input name="secondemail" class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="email"
                                placeholder="Email" style="background: rgba(255, 255, 255, 0.6);">
                            <input name="secondalamat" class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="text"
                                placeholder="Alamat" style="background: rgba(255, 255, 255, 0.6);">
                            <input name="secondkota" class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="text"
                                placeholder="Kota" style="background: rgba(255, 255, 255, 0.6);">
                            <input name="secondkodepos" class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="tel"
                                placeholder="Kode Pos" style="background: rgba(255, 255, 255, 0.6);">
                            <input name="secondnomorwa" class="border-2 border-black-500 rounded-md mt-2 w-full p-2" type="tel"
                                placeholder="Nomor WA" style="background: rgba(255, 255, 255, 0.6);">
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <a href="/" class="md:mt-2 p-3 text-lg md:text-2xl">
                            <- Back</a> <input type="submit" value="Submit ->" class="md:mt-2 p-3 text-lg md:text-2xl cursor-pointer"
                                style="background: transparent">
                    </div>
                </form>
            </div>
        </div>
        <img src="img/forest.png" alt="" class="mt-1">
    </div>
</body>

</html>
