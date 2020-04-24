<!DOCTYPE html>
<html lang="en">
<?php
include "koneksi.php";
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>BALI, NTT, NTB Emergency Hospital</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <header>
        <div class="container-fluid p-2">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                <svg class="bi bi-shield-shaded" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 00-2.725.802.454.454 0 00-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 008 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 002.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 00-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 012.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 01-2.418 2.3 6.942 6.942 0 01-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 01-1.007-.586 11.192 11.192 0 01-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 012.415 1.84a61.11 61.11 0 012.772-.815z" clip-rule="evenodd"/>
  <path d="M8 2.25c.909 0 3.188.685 4.254 1.022a.94.94 0 01.656.773c.814 6.424-4.13 9.452-4.91 9.452V2.25z"/>
</svg> Self Quick Test #dirumahaja </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-right text-light"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="info.php">INFO
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="user.php">USER
                        </a>
                    </li>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='logout.php';">LOGOUT</button>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container text-center">
            <div class="row">
            <div class="col-md-5 col-sm-12 h-25">
                    <p><img src="bali.png" alt="Buku" style="padding-top: 1vh; margin-right: 30px; width: 250px;">
                    <img src="nt.png" alt="Buku" style="padding-top: 1vh"></p>
                    <br><br>
                    <h3> Emergency Hospital Bali, NTB, NTT </h3>
                </div> 
                <div class="col-md-7 col-sm-12  text-white">
                <br><br><br><br><br><br><br><br>
                    <p><button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='#a';">
                    Bali
                    </button></p><br>
                    <p><button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='#b';">
                    NTB
                    </button></p><br>
                    <p><button class="btn btn-light px-5 py-2 primary-btn" onclick="location.href='#c';">
                    NTT
                    </button></p><br>
            </div>       
        </div>
    </header>
    <main class = "main">
        <section class="section-1" id="a">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4 col-8">
                        <div class="panel text-left">
                            <h1>BALI</h1>
                            <p class="pt-4">
                            <b>RSUP Sanglah, Denpasar.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(0361) 227911-15</span>
                            </p>
                            <p>
                            <b>RSUD Sanjiwani, Gianyar.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(0361) 943049</span>
                            </p>
                            <p>
                            <b>RSU Tabanan.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(0361) 811027, 819810, 811202</span>
                            </p>
                            <p>
                            <b>RSUD Kabupaten Buleleng, Singaraja.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(0362) 22046, 3307744</span>
                            </p>
                            <p>
                            <b>Sumber: http://bit.ly/coronaBali</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-1" id="b">
            <div class="container text-center">
                <div class="row">
                <div class="col-md-6 col-12">
                        <div class="pray">
                            <img src="blank.png" alt="Pepustakaan" class="" />
                        </div>
                    </div>
                    <div class="col-md-4 col-8">
                        <div class="panel text-right">
                            <h1>NUSA TENGGARA BARAT</h1>
                            <p class="pt-4">
                            <b>RSUD Provinsi NTB, Bima.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(0370) 7502424</span><br> IGD: <span class= "span" style= "background-color: black;"> (0370) 7504288</span>
                            </p>
                            <p>
                            <b>RSU Bima.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(0374) 43142</span>
                            </p>
                            <p>
                            <b>RSUD Dr R Soedjono, Selong.</b><br>
                            IGD: <span class= "span" style= "background-color: black;">01-123 2234567</span>
                            </p>
                            <p>
                            <b>RS H L Manambai Abdulkadir, Sumbawa Besar.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(0371) 2628078</span>
                            </p>
                            <p>
                            <b>Sumber: http://bit.ly/CoronaNTB</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-1" id="c">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4 col-8">
                        <div class="panel text-left">
                            <h1>NUSA TENGGARA TIMUR</h1>
                            <p class="pt-4">
                            <b>RSU Prof Dr WZ Johanes, Kupang.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">(0380) 833614</span>
                            </p>
                            <p>
                            <b>RSUD Dr Tc Hillers Jl Wairklau, Maumere, Kabupaten Sikka.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">081261153944</span>
                            </p>
                            <p>
                            <b>RSUD Komodo Labuan Bajo, Kabupaten Manggarai Barat.</b><br>
                            Telepon: <span class= "span" style= "background-color: black;">081337055250</span>
                            </p>
                            <p>
                            <b>Sumber: http://bit.ly/CoronaNTT</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <main>
    <footer>
    <div class="container-fluid p-0">
            <div class="row text-left">
                <div class="col-md-5 col-sm-5">
                    <h4 class="text-light">COVID.19.GO.ID</h4>
                    <p class="pt-4 text-muted">HOTLINE <br> Whatsapp :
                        <span class = "span">081133399000</span><br> Telepon : <span class = "span">119</span>
                    </p>
                    <p class="pt-4 text-muted">WEBSITE</p>
                    <p class="text-muted">
                    <span class = "span">www.covid19.go.id</span><br><span class = "span">www.who.int/emergencies/diseases/novel-coronavirus-2019</span>
                    <br><span class = "span">infeksiemerging.kemkes.go.id</span>
                    </p>
                </div>
                <div class="col-md-5 col-sm-12">
                </div>
                <div class="col-md-2 col-sm-12">
                    <h4 class="text-light">Follow me</h4>
                    <div class="column text-light">
                        <a href="https://www.instagram.com/_nabilafifah/?hl=id"><i class="fab fa-instagram"></i></a>
                    </div><br><br><br>
                    <h4 class="text-light">SUMBER</h4>
                    <div class="column text-light">
                        <a>who.int</a><br>
                        <a>covid19.go.id</a>
                    </div>
                </div>
            </div>
        </div>
</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
</body>

</html>