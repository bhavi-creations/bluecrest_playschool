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
<!-- <section class="breadcrumnd-banner cmn-bg overflow-hidden  mb-5">
        <div class="container-fluid">
         <img src="assets/img/Untitled design (57)/1.png" alt="" class="img-fluid">
        </div>
    </section> -->
<!-- Breadcrumnd Banner Start -->


<!-- Contact Infov2 -->
<!-- <section class="contact-sectionv02 section-padding hero_bg mb-5">
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
                        <img src="assets/img/ct.png" alt="img" class="img-fluid">
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-6  p-4 card lg-shadow bg-white">
                <div class="contact-contentv2">
                    <div class="write-comment">
                        <h4 class="black fw-semibold mb-24">
                            Send a message
                        </h4>


                        <form action="contactform.php" method="post" role="form" class="php-email-form">

                            <div class="mb-3">
                                <label for="parentName" class="form-label">Parent's Name</label>
                                <input type="text" class="form-control" id="parentName" name="contactname" placeholder="Enter parent's name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="contactnumber" placeholder="Enter phone number" required>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="4" name="contactmessage" placeholder="Write your message here"></textarea>
                            </div>
                            <button type="submit" class="btn contact_btn text-white w-100">Submit</button>
                        </form>
                    </div>

</section> -->

<section class="contact-sectionv02 mb-5 contact_section">
    <div class="container mt-5">
        <div class="section-title text-center mb-60">
            <span class="sub-title wow fadeInUp p5-clr text font">
                Contact
            </span>
            <!-- <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                Unlock your potential with education
            </h3> -->
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
                                    <input type="text" name="contactname" placeholder="Parent's Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="comment-grp">
                                    <input type="text" name="contactnumber" placeholder="Your Phone">
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
                                <button type="submit" class="btn_bg w-100">Submit</button>
                            </div>

                            

</section>




<!-- Google Map -->
<section class="google-map mb-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3815.9631485923546!2d82.24120778885495!3d16.976362899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3828683b764acb%3A0xb630cb38b75579a7!2s70-14-16%2F3%2C%20Jayendra%20Nagar%2C%20Siddartha%20Nagar%2C%20Kakinada%2C%20Andhra%20Pradesh%20533002!5e0!3m2!1sen!2sin!4v1738917450099!5m2!1sen!2sin" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>





<?php include 'footer.php'; ?>