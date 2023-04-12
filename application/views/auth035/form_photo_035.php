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
    <script src="https://kit.fontawesome.com/6a65b097c2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">

    <title>CATSHOP 035</title>
  </head>
  <body class="form-body" style="background-color:#9B9AC1">

    <div class="wrapper">
        <form action="" method="post" enctype="multipart/form-data">
            <div id="wizard" style="height: 600px;">
	            <h4></h4>
	            <section>
                    <h1 class="judul text-uppercase text-center mb-3"><strong>change photo</strong></h1>
                    <h6>Fullname : <?=$this->session->userdata('fullname')?></h6>
                    <h6>Type : <?=$this->session->userdata('usertype')?></h6>
	            	<div class="form-header justify-content-center">                
	                	<div class="avartar">
                            <img src="<?=base_url('uploads/users/'.$this->session->userdata('photo'))?>" alt="">
							<div class="avartar-picker">
								<input type="file" name="photo" id="file-1" class="inputfile" data-multiple-caption="{count} files selected" multiple />
								<label for="file-1">
								    <span>Choose Picture</span>
								</label>
							</div>
						</div>
	            </section>
            <div class="d-flex justify-content-center">
                <input type="submit" name="upload" value="Upload Photo" class="hover-login btn btn-success btn-lg gradient-custom-4 fs-6">
                <a href="http://localhost/catshop035/index.php/welcome"><button type="button" class="hover-login btn btn-success btn-lg gradient-custom-4 fs-6">Back</button></a>
            </div>
        </form>
    </div>


<!-- ------------------------------------------------------------------------------------------------ -->

    <!-- <h1>CATSHOP 035</h1>
    <h3>CHANGE PHOTO</h3>
    <hr>
    <?=$this->session->flashdata('msg')?>
    <div style="color:red;"><?=$error?></div>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>CURRENT PHOTO</td>
                <td><img src="<?=base_url('uploads/users/'.$this->session->userdata('photo'))?>" width="200px" alt=""></td>
            </tr>
            <tr>
                <td>NEW PHOTO</td>
                <td><input type="file" name="photo" id="" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="upload" value="UPLOAD PHOTO"></td>
            </tr>
        </table>
    </form>
    <a href="<?=base_url()?>"><h4>Back to Home</h4></a> -->


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