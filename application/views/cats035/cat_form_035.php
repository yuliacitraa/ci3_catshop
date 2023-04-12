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
<body class="form-body" style="background-color:#98D2EB">

    <?php 
        $name='';
        $type='';
        $gender='';
        $age='';
        $price='';

        if(isset($cat)) {
            $name=$cat->name_035;
            $type=$cat->type_035;
            $gender=$cat->gender_035;
            $age=$cat->age_035;
            $price=$cat->price_035;
        }
    ?>

    <div class="wrapper">
        <form action="" method="post">
            <div id="wizard" style="height: 700px;">
                <h4></h4>
                <section>
                    <h1 class="judul text-uppercase text-center"><strong>cat</strong></h1>
                    <div class="form-header justify-content-center">
                        <div class="form-group">
                            <div class="form-holder" style="margin-bottom=10px;">
                                Name <input type="text" name="name_035" value="<?=$name?>" placeholder="Name" class="form-control" required>
                            </div>
                            <div class="form-holder">
                                Age(month) <input type="number" name="age_035" value="<?=$age?>" placeholder="Age" class="form-control" required>
                            </div>
                            <div class="form-holder">
                                Price ($) <input type="number" name="price_035" value="<?=$price?>" placeholder="Price" class="form-control" required>
                            </div>
                            <div class="form-holder">
                                Gender <br>
                                <input type="radio" name="gender_035" value="Male" <?=$gender=='Male'?'checked':''?> class="form-check-input" required> Male
                                <input type="radio" name="gender_035" value="Female" <?=$gender=='Female'?'checked':''?> class="form-check-input" required> Female
                            </div>
                            <div class="form-holder">
                                Type
                                <select name="type_035" class="selectpicker form-control" aria-label=".form-select-sm" required>
                                    <option value="">Choose Type</option>
                                    <?php foreach ($category as $ctg) { ?>
                                        <option value="<?=$ctg->category_name_035?>" <?=set_select('type_035', $ctg->category_name_035, $type==$ctg->category_name_035?TRUE:FALSE)?>><?=$ctg->category_name_035?></option>
                                    <?php } ?>
                                </select>
                                
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="submit" value="SAVE" name="submit" class="hover-login btn btn-success btn-lg gradient-custom-4 fs-6">
                        <a href="http://localhost/catshop035/index.php/cats035"><button type="button" class="hover-login btn btn-success btn-lg gradient-custom-4 fs-6">Cancel</button></a>
                        <a href="http://localhost/catshop035/index.php/welcome"><button type="button" class="hover-login btn btn-success btn-lg gradient-custom-4 fs-6">Home</button></a>
                    </div>
                </section>
            </div>
        </form>
    </div>


<!-- ------------------------------------------------------------------------------------------------ -->

    <!-- <h1>CATSHOP 035</h1>
    <h3>CAT FORM</h3>
    <hr>

    <form action="" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name_035" value="<?=$name?>" id="" required></td>
            </tr>
            <tr>
                <td>Type</td>
                <td><select name="type_035" id="" required>
                    <option value="">Choose Type</option>
                    <?php foreach ($category as $ctg) { ?>
                        <option value="<?=$ctg->category_name_035?>" <?=set_select('type_035', $ctg->category_name_035, $type==$ctg->category_name_035?TRUE:FALSE)?>><?=$ctg->category_name_035?></option>
                    <?php } ?> -->
                    <!-- <option value="Domestic" <?=$type=='Domestic'?'selected':''?>>Domestic</option>
                    <option value="Angora" <?=$type=='Angora'?'selected':''?>>Angora</option>
                    <option value="Persia" <?=$type=='Persia'?'selected':''?>>Persia</option> -->
                <!-- </select></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender_035" value="Male" <?=$gender=='Male'?'checked':''?> id="" required> Male
                    <input type="radio" name="gender_035" value="Female" <?=$gender=='Female'?'checked':''?> id="" required> Female
                </td>
            </tr>
            <tr>
                <td>Age (month)</td>
                <td><input type="number" name="age_035" value="<?=$age?>" id="" required></td>
            </tr>
            <tr>
                <td>Price ($)</td>
                <td><input type="number" name="price_035" value="<?=$price?>" id="" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SAVE" name="submit">
                    <a href="<?=site_url('cats035')?>"><input type="button" value="CANCEL"></a><td>
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