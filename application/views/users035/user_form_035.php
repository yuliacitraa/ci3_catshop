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
<body class="form-body" style="background-color:#DAD9E8">


    <?php 
        $username='';
        $usertype='';
        $fullname='';

        if(isset($users)) {
            $username=$users->username_035;
            $usertype=$users->usertype_035;
            $fullname=$users->fullname_035;
        }
    ?>

    <div class="wrapper">
        <form action="" method="post">
            <div id="wizard">
                <h4></h4>
                <section>
                    <h1 class="judul text-uppercase text-center mb-3"><strong>user</strong></h1>
                    <div class="form-header justify-content-center">
                        <div class="form-group">
                            <div class="form-holder">
                                <input type="text" name="username_035" value="<?=$username?>" placeholder="Username" class="form-control" required>
                            </div>
                            <div class="form-holder">
                                <input type="text" name="fullname_035" value="<?=$fullname?>" placeholder="Fullname" class="form-control" required>
                            </div>
                            <div class="form-holder">
                                <input type="radio" name="usertype_035" value="Manager" <?=$usertype=='Manager'?'checked':''?> class="form-check-input" required> Manager
                                <input type="radio" name="usertype_035" value="Cashier" <?=$usertype=='Cashier'?'checked':''?> class="form-check-input" required> Cashier
                            </div>
                        </div>
                            
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="submit" value="SAVE" name="submit" class="hover-login btn btn-success btn-lg gradient-custom-4 fs-6">
                        <a href="http://localhost/catshop035/index.php/users035"><button type="button" class="hover-login btn btn-success btn-lg gradient-custom-4 fs-6">Cancel</button></a>
                        <a href="http://localhost/catshop035/index.php/welcome"><button type="button" class="hover-login btn btn-success btn-lg gradient-custom-4 fs-6">Home</button></a>
                    </div>
                </section>
            </div>
        </form>
    </div>


<!-- ------------------------------------------------------------------------------------------------ -->

    <!--    
    <h1>CATSHOP 035</h1>
    <h3>USER FORM</h3>
    <hr>
    <form action="" method="post">
        <table>
            <tr>
                <td>username</td>
                <td><input type="text" name="username_035" value="<?=$username?>" id="" required></td>
            </tr>
            <tr>
                <td>usertype</td>
                <td>
                    <input type="radio" name="usertype_035" value="Manager" <?=$usertype=='Manager'?'checked':''?> id="" required>Manager
                    <input type="radio" name="usertype_035" value="Cashier" <?=$usertype=='Cashier'?'checked':''?> id="" required>Cashier
                </td>
            </tr>
            <tr>
                <td>fullname</td>
                <td><input type="text" name="fullname_035" value="<?=$fullname?>"  id="" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SAVE" name="submit">
                    <a href="<?=site_url('users035')?>"><input type="button" value="CANCEL"></a></td>
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