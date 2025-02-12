<?php
   include "header.php";
   ?>



    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Breadcrumnd Banner Start -->
    <section class="breadcrumnd-banner cmn-bg overflow-hidden  mb-5">
        <div class="container-fluid">
         <img src="assets/img/Untitled design (57)/1.png" alt="" class="img-fluid">
        </div>
    </section>
    <!-- Breadcrumnd Banner Start -->

    <!-- Contact Info Start -->
     <!-- <section class="contact-infosectionv1 space-top overflow-hidden space-bottom">
        <div class="container">
            <div class="row g-lg-4 g-3 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp " data-wow-delay=".3s">
                    <div class="contact-call-info ">
                        <div class="icon d-center ">
                            <i class="fa-solid fa-location-dot scn_bg text-white align-items-center" class="ison"></i>
                        </div>
                        <h5 class="black">
                            Location
                        </h5>
                        <a href="#" class="pra">
                        70-14-16/4,Jayendra Nagar,D-Mart Road,Kakinada 533003

                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="contact-call-info ">
                        <div class="icon d-center">
                            <i class="fa-solid fa-envelope scn_bg text-white "></i>
                        </div>
                        <h5 class="black">
                            Mail
                        </h5>
                        <a href="#" class="pra">
                            nafiz123@gmail.com- fahad 1234@gmail.com
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="contact-call-info">
                        <div class="icon d-center">
                            <i class="fa-solid fa-phone scn_bg text-white "></i>
                        </div>
                        <h5 class="black">
                            Contact
                        </h5>
                        <a href="#" class="pra">
                        7993116666,7993118888
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    -->


    <!-- Contact Infov2 -->
      <section class="contact-sectionv02 section-padding">
        <div class="container">
            <div class="section-title text-center mb-60">
                <span class="sub-title wow fadeInUp p5-clr text">
                    Contact
                </span>
                <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                    Unlock your potential with education
                </h3>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-md-6">
                    <div class="contact-thumbv02 position-relative">
                     
                        <div class="thumbb">
                            <img src="assets/img/ct.png" alt="img">
                        </div>
                      
                    </div>
                </div>
                <div class="col-lg-6 col-md-6  p-4 card lg-shadow bg-white">
                    <div class="contact-contentv2">
                        <div class="write-comment">
                            <h4 class="black fw-semibold mb-24">
                                Send a message
                            </h4>
                            <form action="contactform.php" class="row g-lg-4 g-3" method="post" role="form" class="php-email-form">
                                <div class="col-lg-6">
                                    <div class="comment-grp">
                                        <input type="text"  name ="contactname" placeholder="Parent's Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="comment-grp">
                                        <input type="text" name="contactnumber" placeholder="Your Phone">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                       
        <label for="service" name="contactservice">Select a Service</label>
        <select id="service" name="service" required class="">
            <option value="" class="side">-- Select a Service --</option>
            <option value="Day Care" class="side">Day Care</option>
            <option value="Play Group" class="side">Play Group</option>
            <option value="Nursery" class="side">Nursery</option>
            <option value="LKG-UKG" class="side">LKG-UKG</option>
            <option value="Grade 1 To 5" class="side">Grade 1 To 5</option>
        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-xl-3">
                                    <div class="comment-grp text-aras position-relative">
                                        <textarea name="message" rows="5"
                                            placeholder="Write Your Message Here" name="contactmessage"></textarea>
                                        <span class="enves">
                                        </span>
                                    </div>
                                </div>
                                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-dark w-100">Submit</button>
                        </div>
        
    </section> 



        <!-- Google Map -->
        <section class="google-map mb-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3815.9631485923546!2d82.24120778885495!3d16.976362899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3828683b764acb%3A0xb630cb38b75579a7!2s70-14-16%2F3%2C%20Jayendra%20Nagar%2C%20Siddartha%20Nagar%2C%20Kakinada%2C%20Andhra%20Pradesh%20533002!5e0!3m2!1sen!2sin!4v1738917450099!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>






 


    <?php include 'footer.php'; ?>

























