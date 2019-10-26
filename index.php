<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DIU Blood Donors</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }


    </style>

</head>

<body>

    <!-- Navigation -->
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>
   
    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Welcome to DIU Online Blood Donor Management System</h1>



        
        <!-- Marketing Icons Section -->

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">The need for blood</h4>
                   
                        <p class="card-text" style="padding-left:2%">Blood donation in Bangladesh is an activity conducted by several different organisations. As of 2011, about 25% of the nation's blood supply came from voluntary donation, 20–25% from paid donors, and 50–55% from one-time donation for a specific patient. With the rapid expansion of health care facilities, need for safe blood supply is ever growing in order to provide the essential health services in Bangladesh. Compiled reports from blood transfusion centers under public and private sectors revealed that over 600,000 units of blood were collected in 2016 against an estimated demand of 800,000.

There are 319 blood transfusion centers in the country providing blood transfusion services covering both the public and private sectors. However, Bangladesh has received only 31 percent of its blood from voluntary donors. This number is very low, compared to other countries in South-East Asia, such as Thailand, India and Sri Lanka, where the number reaches as high as 95 percent. More than two thirds of blood donations come from relatives and friends of the patients. </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Blood Tips</h4>
                   
                        <p class="card-text" style="padding-left:2%">Maintain a healthy iron... level in your diet by eating iron rich foods, such as spinach, red meat, fish, poultry, beans, iron-fortified cereals and raisins.
Get a good night's sleep.
Drink an extra 16 oz. of water and fluids before the donation.
Eat a healthy meal before your donation. Avoid fatty foods, such as hamburgers, fries or ice cream before donating. Tests for infections done on all donated blood can be affected by fats that appear in your blood for several hours after eating fatty foods.


This year, like the previous ones, the World Blood Donor Day will be observed Saturday (June 14), with the slogan 'Safe blood for all'
 

The 1999 bomb blast at an event of Bangladesh Udichi Shilpigoshthi made Aminul Sujan realize that donating blood is no less than financially helping the people in need.

 
  </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Who you could Help</h4>
                   
                        <p class="card-text" style="padding-left:2%">Your blood saves lives. Your blood donation is an amazing gift to people who need it in an emergency or for on-going medical treatment. We need nearly 5,000 people to give blood every day to meet the needs of hospitals and patients.

<div>
                            <img  height="700px" width="460px" src="images/sdi.png">
                            
</div>

                         </p>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <h2>Some of the Donar</h2>

        <div class="row">
                   <?php 
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 6";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="images/blood-donor.jpg" alt="" ></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="#"><?php echo htmlentities($result->FullName);?></a></h4>
<p class="card-text"><b>  Gender :</b> <?php echo htmlentities($result->Gender);?></p>
<p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>

                    </div>
                </div>
            </div>

            <?php }} ?>
          
 



        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2> <strong> BLOOD GROUPS</strong> </h2>
          <p>  Blood group of any human being will mainly fall in any one of the following groups.

 <img class="img-fluid rounded" src="images/t9.png" alt="">
          </p>
                <ul>
                
                
<li>A positive or A negative</li>
<li>B positive or B negative</li>
<li>O positive or O negative</li>
<li>AB positive or AB negative.</li>

                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded"  src="images/mat.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p>
The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.

                
           

</p>



<img height="500px" width="1200px" src="images/bld.jpg" alt="">


                <a  class="btn btn-danger text-center "  href="become-donar.php">Become a Donar</a>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
