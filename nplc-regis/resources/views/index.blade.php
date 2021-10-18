<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/logonplcbulet.png" />
    <title>9th NPLC - Home</title>
</head>
<body class="font-raleway text-white overflow-x-hidden"> 
    
    <div class="modal rounded-lg bg-green-400 p-5 md:p-10 relative w-5/6 md:w-2/3 xl:w-1/2">
        <button onclick="toggle()" class="absolute right-5 top-5 text-2xl hidden md:block">X</button>
        <button onclick="toggle()" class="absolute right-5 top-5 text-lg md:hidden">X</button>
        <div class="isi">
            <h1 class="text-2xl font-bold">Guide Book</h1>
            <p>Klik tombol dibawah untuk mengunduh guidebook sesuai kategori yang kamu minati</p>
            <div class="flex mt-5">
                <a class="bg-brown-200 rounded-md p-3 border-2 border-brown-200 hover:border-white" href="/pdf/ContohSoalNPLC.pdf" download>Kategori 1</a>
                <a class="bg-brown-300 rounded-md p-3 border-2 border-brown-300 hover:border-white ml-3" href="/pdf/ContohSoalNPLC.pdf" download>Kategori 2</a>
            </div>            
        </div>
    </div>

    <div class="box relative">

        <img src="img/awan1.png" alt="" class="absolute w-1/3 top-6 left-20">
        <img src="img/awan2.png" alt="" class="absolute w-1/3 top-28 md:top-44">
        <img src="img/awan3.png" alt="" class="absolute w-1/3 top-14 md:top-28 right-0">

        <div class="z-10">
            <div class="flex mt-4 mr-4 justify-end">
                <img src="img/logosu.png" alt="" class="w-8 md:w-14 h-8 md:h-14">
                <img src="img/logouc.png" alt="" class="w-8 md:w-14 h-8 md:h-14 ml-2">
            </div>        
    
            <div class="flex justify-center mt-10 md:mt-20 lg:mt-28">
                <img class="w-1/2 md:w-1/3 ml-4" src="img/logonplc.png" alt="">
            </div>
            
            <img src="img/forest.png" alt="">              
        </div>        

        <div class="bg-green-500 relative z-10">
    
            <img class="w-36 lg:w-48 xl:w-60 left-12 lg:left-24 top-60 md:top-8 absolute" src="img/kayufoto.png" alt="">   
            
            <div class="flex justify-center md:justify-end md:mr-5 lg:mr-10">
                <img class="w-11/12 md:w-2/3 lg:w-1/2" src="img/whatisnplc.svg" alt="">                    
            </div>         
            <div class="flex justify-end mr-24 lg:mr-36 xl:mr-44 regis">
                <a href="/registrationform">
                    <img class="w-28 md:w-32 lg:w-40 xl:w-52" src="img/regis.svg" alt="">  
                </a>                                     
            </div> 
            
            <div class="md:ml-10 mt-52 md:mt-6">
                <img class="w-full md:w-3/4 lg:w-2/3" src="img/sistem.svg" alt=""> 
            </div>
            <div class="ml-16 md:ml-24 lg:ml-36" style="margin-top: -5vw">
                <a onclick="toggle()">
                    <img class="w-28 lg:w-40 xl:w-52" src="img/download.svg" alt=""> 
                </a>                    
            </div>

            <div class="flex justify-center mt-20 md:mt-28">
                <img class="w-2/3 lg:w-1/3" src="img/nplcover.svg" alt=""> 
            </div>
            <div class="flex justify-center">
                <div class="bg-brown-100 rounded-xl shadow-xl flex items-center py-3 md:py-8 px-3 md:px-6" style="margin-top:-1vw;">
                    <div onclick="side_slide(-1)" class="slide left mr-3 md:mr-5">
                        <span class="fa fa-arrow-left bg-brown-500 rounded-full text-brown-100"></span>
                    </div>
                    <div class="content overflow-hidden">                        
                        <div class="w-52 md:w-96 h-40 md:h-60">
                            <img class="w-96 h-80 rounded-lg border-4 border-brown-500 swiper-slide" src="img/slide1.jpg" alt=""> 
                            <img class="w-96 h-80 rounded-lg border-4 border-brown-500 swiper-slide" src="img/slide2.jpg" alt=""> 
                            <img class="w-96 h-80 rounded-lg border-4 border-brown-500 swiper-slide" src="img/slide3.png" alt="">            
                            <img class="w-96 h-80 rounded-lg border-4 border-brown-500 swiper-slide" src="img/slide4.png" alt=""> 
                        </div>  
                    </div>                       
                    <div onclick="side_slide(1)" class="slide right ml-3 md:ml-5">
                        <span class="fa fa-arrow-right bg-brown-500 rounded-full text-brown-100"></span>
                    </div>                                   
                </div>
            </div>

            <div class="flex justify-center mt-20">
                <div class="grid grid-cols-2 gap-10 md:gap-20 w-11/12 md:w-2/3 flex items-center">
                    <div>
                        <img src="img/pohon.png" alt="" class="mb-0">
                    </div>
                    <div>
                        <h1 class="lg:text-2xl xl:text-4xl font-bold">CONNECT WITH US</h1>
                        <div class="flex items-center mt-4 md:mt-5">
                            <a href="https://www.instagram.com/ucnplc/?hl=en" target="_blank">
                                <img class="w-5 md:w-8 lg:w-14" src="img/ig.png" alt="">                                                                   
                            </a>    
                            <a href="https://www.instagram.com/ucnplc/?hl=en" target="_blank">
                                <p class="text-sm md:text-xl xl:text-2xl ml-2 md:ml-3 font-bold">ucnplc</p>                                                                   
                            </a>                                                          
                        </div>
                        <div class="flex items-center mt-3 md:mt-5">
                            <img class="w-5 md:w-8 lg:w-14" src="img/line.png" alt="">
                            <p class="text-sm md:text-xl xl:text-2xl ml-2 md:ml-3 font-bold">achmadrijalu</p>
                        </div>
                        <div>
                            <p class="mt-3 md:mt-6 text-sm md:text-lg">Sponsored By:</p>   
                            <div class="mt-1 md:mt-2 flex">
                                <div class="w-40 h-5 md:h-8 xl:h-12 flex items-center justify-center p-1 md:p-3 bg-white rounded-sm md:rounded-md">
                                    <img src="img/cloudrayalogo.png" alt="">
                                </div>
                                <div class="w-40 h-5 md:h-8 xl:h-12 flex items-center justify-center p-1 md:p-3 bg-white rounded-sm md:rounded-md ml-2 md:ml-3">
                                    <img src="img/wowracklogo.png" alt="">
                                </div>
                            </div>                             
                        </div>                                                      
                    </div>
                </div>
            </div>
            
        </div> 
    </div>

    <script src="js/script.js"></script>
</body>
</html>

