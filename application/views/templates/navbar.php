<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6a65b097c2.js" crossorigin="anonymous"></script>

    <title>CATSHOP 035</title>

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        .nav-link:after{
            content:"";
            position:absolute;
            background-color:#B2B1CF;
            height:3px;
            width:0;
            left:0;
            bottom:-2px;
            transition:0.3s;
        }
        .nav-link:hover, .underline:hover{
            font-weight:bolder;
        }
        .nav-link:hover:after{
            width:100%;
        }
    </style>
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark pmd-3" >
        <div class="container">
            <p class="navbar-brand fs-2 fw-bold text-white"  >CATSHOP 035</p>
            <button
                type="button"
                class="navbar-toggler"
                data-bs-target="#navbarNav"
                data-bs-toggle="collapse"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-lable="Toggle Navbar"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?=base_url()?>" class="nav-link text-white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=site_url('auth035/changephoto')?>" class="nav-link text-white">Change Photo</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=site_url('auth035/changepass')?>" class="nav-link text-white">Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=site_url('auth035/logout')?>" class="nav-link text-white">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>