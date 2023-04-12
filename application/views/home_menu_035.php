<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
    <script src="https://kit.fontawesome.com/6a65b097c2.js" crossorigin="anonymous"></script>
   
    <title>CATSHOP 035</title>

  </head>
  <body style="background-color:#b2b1cf;">

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
                        <a href="#menu" class="underlined-hover nav-link text-white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=site_url('auth035/changephoto')?>" class="underlined-hover nav-link text-white">Change Photo</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=site_url('auth035/changepass')?>" class="underlined-hover nav-link text-white">Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=site_url('auth035/logout')?>" class="underlined-hover nav-link text-white">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <script>
        var nav=document.querySelector('nav');

        window.addEventListener('scroll', function(){
            if (window.pageYOffset>100) {
                nav.classList.add('bg-dark', 'shadow');
            } else {
                nav.classList.remove('bg-dark', 'shadow');
            }
        });
    </script>

    <!-- background -->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-image:url('../img/bg1.jpg'); background-size:cover;" >
        <div class="content text-center text-white">
            <h1>Hello, Welcome back!</h1>
            <h4><b><?=$this->session->userdata('fullname')?></b>, you are login as <b><?=$this->session->userdata('usertype')?></b></h4>
        </div>
    </div>

    <!--menu  -->
    <section class="wrapper" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-md-3"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?cat,mainecoon');">
                    <img class="card-img d-none" src="https://source.unsplash.com/600x900/?cat,mainecoon" alt="">
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <small class="card-meta mb-2">Catshop 035</small>
                            <h4 class="card-title mt-0 "><a class="underline text-white" href="<?=site_url('cats035')?>">Manage Cats</a></h4>
                            <small>Manage the name of cats, the age, and also the price</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?cat,ragdoll');">
                    <img class="card-img d-none" src="https://source.unsplash.com/600x900/?cat,ragdoll" alt="">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <small class="card-meta mb-2">Catshop 035</small>
                                <h4 class="card-title mt-0 "><a class="underline text-white" href="<?=site_url('categories035')?>">Manage Categories</a></h4>
                                <small>Manage and add the type of cats</small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($this->session->userdata('usertype')=='Manager') { ?>
                <div class="col-md-3">
                    <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?cat,persia');">
                        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?cat,persia" alt="">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <small class="card-meta mb-2">Catshop 035</small>
                                <h4 class="card-title mt-0 "><a class="underline text-white" href="<?=site_url('users035')?>">Manage Users</a></h4>
                                <small>so many users here, but you can manage their account. *managers only</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?cat,angora');">
                        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?cat,angora" alt="">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <small class="card-meta mb-2">Catshop 035</small>
                                <h4 class="card-title mt-0 "><a class="underline text-white" href="<?=site_url('cats035/sales')?>">Sales Report</a></h4>
                                <small>See all the sales report from this catshop. *managers only</small>
                            </div>
                        </div>
                    </div>
                </div> <?php } ?>
            </div>
        </div>
    </section>


    <!-- footer -->
    <footer class="bg-light text-dark pt-5 pb-4">
        <div class="container text-md-left">
            <div class="row text-md-left">

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">About Me</h5>
                    <hr class="mb-4">
                    <p>Hello, i'm Yulia Citra, 19 y.o. i'd love to study new thing, making food, listen to music and so on. i'm also a student of bachelor degree majoring in Informatics Engineering. i hate ppl who act too much.</p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">Social Media</h5>
                    <hr class="mb-4">
                    <p>
                        <i class="fab fa-instagram"></i>
                        <a href="https://instagram.com/yuliaacitraa_?igshid=YmMyMTA2M2Y=" class="underline text-dark" style="text-decoration:none"> Instagram</a>
                    </p>
                    <p>
                        <i class="fab fa-twitter"></i>
                        <a href="https://twitter.com/gakenal_kamu?t=4KN0CS2C91LSX4Qhsj2_6Q&s=09" class="underline text-dark" style="text-decoration:none"> Twitter</a>
                    </p>
                    <p>
                        <i class="fab fa-youtube"></i>
                        <a href="https://youtube.com/channel/UC9RBDzSeDFPK1XhdS4KSiOQ" class="underline text-dark" style="text-decoration:none"> Youtube</a>
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">Contact</h5>
                    <hr class="mb-4">
                    <p>
                        <li class="fas fa-home mr-3"></li> Bandung, Jawa Barat, Indonesia
                    </p>
                    <p>
                        <li class="fas fa-envelope mr-3"></li> yuliacitra2011@gmail.com
                    </p>
                    <p>
                        <li class="fas fa-phone mr-3"></li> +62 816861173
                    </p>
                </div>
            </div>
                <hr class="mb-4">
                <div class="row d-flex justify-content-center">
                    <div class="row text-center text-md-left">
                        <p>
                            Copyright 2022 All Rights Reserved by :
                            <strong class="text-info">yulia citra</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<!-- ------------------------------------------------------------------------------------------------ -->
    <!-- <h1>CATSHOP 035</h1>
    <h3>MENU</h3>
    <hr>
    <ul>
        <li><a href="<?=site_url('cats035')?>">Manage Cats</a></li>
        <li><a href="<?=site_url('categories035')?>">Manage Categories</a></li>
        <?php if ($this->session->userdata('usertype')=='Manager') { ?>
        <li><a href="<?=site_url('users035')?>">Manage Users</a></li>
        <li><a href="<?=site_url('cats035/sales')?>">Sales Report</a></li>
        <?php } ?>
        <hr>
        <h4>Welcome <?=$this->session->userdata('fullname')?>, you are login as <?=$this->session->userdata('usertype')?></h4>
        <img src="<?=base_url('./uploads/users/'.$this->session->userdata('photo'))?>" width="200px" alt="">
        <li><a href="<?=site_url('auth035/changephoto')?>">Change Photo</a></li>
        <li><a href="<?=site_url('auth035/changepass')?>">Change Password</a></li>
        <li><a href="<?=site_url('auth035/logout')?>">Logout</a></li>
    </ul> -->

<!-- ------------------------------------------------------------------------------------------------ -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    
    </body>
</html>