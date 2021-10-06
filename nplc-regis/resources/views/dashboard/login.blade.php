<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logonplcbulet.png" />
    <title>9th NPLC - Login</title>
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

        <div class="flex justify-center">
            <div class="w-96 mt-10 md:mt-28 mx-4 lg:mx-0">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="rounded-lg p-5" style="background: rgba(255, 255, 255, 0.6);">
                        <h1 class="font-bold text-lg md:text-2xl mb-2">Login</h1>
                            <div>
                                <input class="border-2 border-black-500 rounded-md mt-2 w-full p-2 @error('email') is-invalid @enderror" 
                                    type="email" name="email" id="email" placeholder="Email" style="background: rgba(255, 255, 255, 0.6);" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <input class="border-2 border-black-500 rounded-md mt-2 w-full p-2"
                                    type="password" name="password" id="password" placeholder="Password" style="background: rgba(255, 255, 255, 0.6);">
                            </div>
                            <div class="mt-3">
                                <input type="submit" value="Login" class="bg-black-400 text-white p-2 w-full rounded-md cursor-pointer">
                            </div>
                    </div>                    
                </form>
            </div>
        </div>
        <img src="img/forest.png" alt="" class="mt-1">
    </div>
</body>

</html>