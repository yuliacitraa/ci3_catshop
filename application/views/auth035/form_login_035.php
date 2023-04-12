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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">

    <script src="https://kit.fontawesome.com/6a65b097c2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
   
    <title>CATSHOP 035</title>
</head>
<body>
  <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card-login">
              <div class="card-body p-5">
                <i class="fad fa-cat-space"></i>
                <h1 class="judul text-uppercase text-center mb-3"><strong>catshop 035</strong></h1>
                <h3 class="text-uppercase text-center mb-3">login</h3>
                <?=$this->session->flashdata('msg')?>

                <form action="" method="post">

                  <div class="form-outline mb-4">
                    <input type="text" name="username" id="form3Example1cg" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example1cg">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="form3Example3cg" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example3cg">Password</label>
                  </div>

                  <div class="d-flex justify-content-center">
                    <input type="submit" name="login" value="Login" class="hover-login btn btn-success btn-lg gradient-custom-4 ">
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    

<!-- ------------------------------------------------------------------------------------------------ -->

    <!-- <h1>CATSHOP 035</h1>
    <h3>LOGIN</h3>
    <hr>
    <?=$this->session->flashdata('msg')?>
    <form action="" method="post"> 
        <table>
            <tr>
                <td>USERNAME</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="login" value="LOGIN"></td>
            </tr>
        </table>
    </form> -->

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