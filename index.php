 <?php require_once('header.php');
   ?>
           <?php require_once('banner.php');  ?>
    <!-- Services section -->
    <section class="service-section spad" id="about">
        <div class="container services">
            <div class="section-title text-center">
                <h3>OUR SERVICES</h3>
                <p>We provides the opportunity to prepare for life</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/services-icons/1.png" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Social Media</h4>
                        <p>Build your network through our networking team.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/services-icons/2.png" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Website</h4>
                        <p>Responsive design and mahe SEO friendly web rating</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/services-icons/3.png" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Email</h4>
                        <p>Reach your customers through email marketing</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/services-icons/4.png" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Fully Professional</h4>
                        <p>Using latest mutimedia tools</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/services-icons/5.png" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Flexible Schedule</h4>
                        <p>24 x 7 customer support</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/services-icons/6.png" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Build Team</h4>
                        <p>Build your marketing team through us.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section end -->

    
    <!-- Enroll section -->
    <section class="enroll-section spad set-bg" data-setbg="img/enroll-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title text-white">
                        <h3>ENROLLMENT</h3>
                        <p>Get started with us to explore the exciting</p>
                    </div>
                    <div class="enroll-list text-white">
                        <div class="enroll-list-item">
                            <span>1</span>
                            <h5>Contact</h5>
                            <p>.</p>
                        </div>
                        <div class="enroll-list-item">
                            <span>2</span>
                            <h5>Consulting</h5>
                            <p>.</p>
                        </div>
                        <div class="enroll-list-item">
                            <span>3</span>
                            <h5>Register</h5>
                            <p>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 p-lg-0 p-4">
                    <img src="img/encroll-img.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Enroll section end -->


    <!-- Courses section -->
    <section class="courses-section spad" id="packages">
        <div class="container">
            <div class="section-title text-center">
                <h3>OUR PACKAGES</h3>
                <p>see our  Digital Marketing package</p>
            </div>
            <div class="row">
			<?php 
require_once("connectionclass.php");
$qry="select * from packages ";  
  $obj=new connectionclass() ; 
$data=$obj->GetTable($qry);
 ?>
 <?php  
 foreach($data as $row){
 ?> 
   
                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="img/course/1.jpg" alt="">
                        <div class="course-cat">
                            <span><?php  echo $row['title']; ?> </span>
                        </div>
                    </div>
                    <div class="course-info">
                        
                        <h5><?php  echo $row['description']; ?>  </h5>
                        <h4 class="cource-price">&#8377;<?php  echo $row['amount']; ?><span> for <?php  echo $row['no_days']; ?>days</span></h4>
                    </div>
                </div>
                
                 <?php
}
?>
            </div>
        </div>
    </section>
    <!-- Courses section end-->


    <!-- Fact section -->
    <section class="fact-section spad set-bg" data-setbg="img/fact-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-crown"></i>
                    </div>
                    <div class="fact-text">
                        <h2>5</h2>
                        <p>YEARS</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-briefcase"></i>
                    </div>
                    <div class="fact-text">
                        <h2>80</h2>
                        <p>Customers</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-user"></i>
                    </div>
                    <div class="fact-text">
                        <h2>10</h2>
                        <p>Areas</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-pencil-alt"></i>
                    </div>
                    <div class="fact-text">
                        <h2>80000+</h2>
                        <p>Hits</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fact section end-->
 
 

   <?php require_once('footer.php');
   ?>