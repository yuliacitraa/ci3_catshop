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
<body class="form-body" style="background-color:#63A3BB">

<!-- navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark pmd-3" >
        <div class="container">
            <p class="navbar-brand fs-2 fw-bold text-light"  >CATSHOP 035</p>
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
                        <a href="http://localhost/catshop035/index.php/welcome" class="underlined-hover nav-link text-white">Home</a>
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
            if (window.pageYOffset>50) {
                nav.classList.add('bg-dark', 'shadow');
            } else {
                nav.classList.remove('bg-dark', 'shadow');
            }
        });
    </script>

<section class="wrapper">
        <div class="card-list">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="py-3 text-center font-bold font-up blue-text">SALE LIST</h2>
                </div>
            </div>
            <table class="table table-hover table-responsive mb-0">
                <thead>
                    <tr>
                        <th scope="row">No</th>
                        <th class="th-lg">Sale ID</th>
                        <th class="th-lg">Sale date</th>
                        <th class="th-lg">Cat ID</th>
                        <th class="th-lg">Customer Name</th>
                        <th class="th-lg">Customer Address</th>
                        <th class="th-lg">Customer Phone</th>

                    </tr>
                </thead>
                <?php $i=1; foreach($sales as $sale) { ?>
                <tbody>
                    <tr>
                        <th scope="row"><?=$i++?></th>
                        <td><?=$sale->sale_id_035?></td>
                        <td><?=$sale->sale_date_035?></td>
                        <td><?=$sale->cat_id_035?></td>
                        <td><?=$sale->customer_name_035?></td>
                        <td><?=$sale->customer_address_035?></td>
                        <td><?=$sale->customer_phone_035?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
        
    <!-- footer -->
    <footer class="bg-light text-dark pt-5 pb-4">
        <div class="row d-flex justify-content-center">
            <div class="row text-center text-md-left">
                <p>
                    Copyright 2022 All Rights Reserved by :
                    <strong class="text-info">yulia citra</strong>
                </p>
            </div>
        </div>
    </footer>


<!-- ------------------------------------------------------------------------------------------------ -->

    <!-- <h1>CATSHOP 035</h1>
    <h3>SALE LIST</h3>
    <a href="<?=base_url()?>"><h4>HOME</h4></a>
    <hr>
    <table border="1px solid black">
        <tr>
            <th>No</th>
            <th>Sale ID</th>
            <th>Sale Data</th>
            <th>Cat ID</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Customer Phone</th>
        </tr>
        <?php $i=1; foreach($sales as $sale) { ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$sale->sale_id_035?></td>
            <td><?=$sale->sale_date_035?></td>
            <td><?=$sale->cat_id_035?></td>
            <td><?=$sale->customer_name_035?></td>
            <td><?=$sale->customer_address_035?></td>
            <td><?=$sale->customer_phone_035?></td>
        </tr> <?php } ?>
    </table> -->

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
