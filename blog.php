<?php
   include "./includes/header.php";
   ?>



<main>
  <!-- Filter Buttons -->
  <div class="container">
    <div class="filter_buttons redirect_section mt-5">
      <a href="blogs.php?service="><button class="redirect_blog_srivice">All</button></a>
      <a href="blogs.php?service=Root Canal"><button class="redirect_blog_srivice">Root Canal</button></a>
      <a href="blogs.php?service=Wisdom Tooth Removal"><button class="redirect_blog_srivice">Wisdom Tooth Removal</button></a>
      <a href="blogs.php?service=Bad Breath Treatment"><button class="redirect_blog_srivice">Bad Breath Treatment</button></a>
      <a href="blogs.php?service=Gum Treatment"><button class="redirect_blog_srivice"> Gum Treatment</button></a>
      <a href="blogs.php?service=Teeth Cleaning"><button class="redirect_blog_srivice">Teeth Cleaning </button></a>
      <a href="blogs.php?service=Orthodontic Treatment"><button class="redirect_blog_srivice">Orthodontic Treatment</button></a>
      <a href="blogs.php?service=Dental Crown & Bridge"><button class="redirect_blog_srivice"> Dental Crown & Bridge</button></a>
      <a href="blogs.php?service=Invisible Aligners"><button class="redirect_blog_srivice">Invisible Aligners </button></a>
      <a href="blogs.php?service=Dental Veneers"><button class="redirect_blog_srivice">Dental Veneers</button></a>
      <a href="blogs.php?service=Smile Makeover"><button class="redirect_blog_srivice">Smile Makeover</button></a>
      <a href="blogs.php?service=Teeth Whitening"><button class="redirect_blog_srivice">Teeth Whitening</button></a>
      <a href="blogs.php?service=Dental Implant"><button class="redirect_blog_srivice">Dental Implant</button></a>
      <a href="blogs.php?service=Dentures"><button class="redirect_blog_srivice">Dentures  </button></a>
      <a href="blogs.php?service=Fluoride Application & Dental Sealant"><button class="redirect_blog_srivice">Fluoride Application & Dental Sealant</button></a>
      <a href="blogs.php?service=Full Mouth Rehabilitation Treatment"><button class="redirect_blog_srivice"> Full Mouth Rehabilitation Treatment</button></a>
      
      <!-- <a href="blogs.php?service=Laser Gum"><button class="redirect_blog_srivice">Laser & Gum</button></a>
      <a href="blogs.php?service=Tooth Extraction"><button class="redirect_blog_srivice">Tooth Extraction</button></a>
      <a href="blogs.php?service=Tooth Cleaning"><button class="redirect_blog_srivice">Tooth Cleaning</button></a>
      <a href="blogs.php?service=Gum Depigment"><button class="redirect_blog_srivice">Gum Depigment</button></a>
      <a href="blogs.php?service=Teeth Whitening"><button class="redirect_blog_srivice">Teeth Whitening</button></a>
      <a href="blogs.php?service=Laser Gum Surgery"><button class="redirect_blog_srivice">Laser Gum Surgery</button></a>
      <a href="blogs.php?service=Mouth Ulcers"><button class="redirect_blog_srivice">Mouth Ulcers</button></a>
      <a href="blogs.php?service=Precancerous Lesion"><button class="redirect_blog_srivice">Precancerous Lesion</button></a>
      <a href="blogs.php?service=Laser Crown Lengthening"><button class="redirect_blog_srivice">Laser Crown Lengthening</button></a> -->
    </div>
  </div>

  <!-- Blogs Section -->
  <div class="container blog-sidebar-list" style="padding-top: 20px; padding-bottom: 20px;">
    <div class="row">
      <div class="col-lg-12">
        <div class="grid row">
          <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $image_path = !empty($row['main_image']) ? "admin/uploads/photos/{$row['main_image']}" : "default_image.png";
              echo "
                                    <div class='grid-item col-sm-12 col-lg-4 mb-5'>
                                        <div class='post-box card_bg_div_box'>
                                            <figure>
                                                <a href='fullblog.php?id={$row['id']}'>
                                                    <img src='{$image_path}' alt='Blog Image' class='img-fluid blog_box_image'>
                                                </a>
                                            </figure>
                                            <div class='box-content'>
                                                <h5 class='box-title'><a  class='box-title' href='fullblog.php?id={$row['id']}'>" . htmlspecialchars($row['title']) . "</a></h5>
                                                <p class='post-desc  mt-5' style='text-align: justify;'>" . substr(strip_tags($row['main_content']), 0, 90) . "...</p>
                                                <a href='fullblog.php?id={$row['id']}'><button class='blog_main_btn'>Read More..</button></a>
                                            </div>
                                        </div>
                                    </div>";
            }
          } else {
            echo "<p>No blog posts found.</p>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</main>

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
          <img src="assets/img/Untitled design (57)/3.png" alt="">
        </div>
    </section>
    <!-- Breadcrumnd Banner Start -->

    <!-- Blog Section Start -->
    <section class="blog-section mt-60 overflow-hidden space-bottom">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="blog-left-wrap">
                        <div class="blog-single-items overflow-hidden mb-60 wow fadeInUp" data-wow-delay=".2s">
                            <div class="blog-thumbig w-100">
                                <img src="assets/img/blog section/1.png" alt="img" class="w-100">
                            </div>
                            <div class="blog-content">
                                <h4 class="mb-40">
                                    <a href="blog-details.html">
                                        Unlock your potential with education ower yourself the na through learning.
                                    </a>
                                </h4>
                                <a href="blog-details.html"
                                    class="theme-btn theme-btn-2 d-inline-flex align-items-center gap-2">
                                    Read More
                                </a>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-calendar-days"></i>
                                        January 19, 2024
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-user"></i> By admin
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-comments"></i> Comments (05)
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-single-items overflow-hidden mb-60 wow fadeInUp" data-wow-delay=".3s">
                            <div class="blog-thumbig w-100">
                                <img src="assets/img/blog section/2.png" alt="img" class="w-100">
                            </div>
                            <div class="blog-content">
                                <h4 class="mb-40">
                                    <a href="blog-details.html">
                                        Invest in education, invest in yourself Education the na through learning.
                                    </a>
                                </h4>
                                <a href="blog-details.html"
                                    class="theme-btn theme-btn-2 d-inline-flex align-items-center gap-2">
                                    Read More
                                </a>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-calendar-days"></i>
                                        January 19, 2024
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-user"></i> By admin
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-comments"></i> Comments (05)
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-single-items overflow-hidden mb-60 wow fadeInUp" data-wow-delay=".4s">
                            <div class="blog-thumbig w-100">
                                <img src="assets/img/blog section/3.png" alt="img" class="w-100">
                            </div>
                            <div class="blog-content">
                                <h4 class="mb-40">
                                    <a href="blog-details.html">
                                        It plays a vital role in shaping the future generation and promoting personal
                                        and professional growth
                                    </a>
                                </h4>
                                <a href="blog-details.html"
                                    class="theme-btn theme-btn-2 d-inline-flex align-items-center gap-2">
                                    Read More
                                </a>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-calendar-days"></i>
                                        January 19, 2024
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-user"></i> By admin
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-comments"></i> Comments (05)
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-single-items overflow-hidden mb-60 wow fadeInUp" data-wow-delay=".5s">
                            <div class="blog-thumbig w-100">
                                <img src="assets/img/blog section/4.png" alt="img" class="w-100">
                            </div>
                            <div class="blog-content">
                                <h4 class="mb-40">
                                    <a href="blog-details.html">
                                        Invest in education, invest in yourself Education the na through learning.
                                    </a>
                                </h4>
                                <a href="blog-details.html"
                                    class="theme-btn theme-btn-2 d-inline-flex align-items-center gap-2">
                                    Read More
                                </a>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-calendar-days"></i>
                                        January 19, 2024
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-user"></i> By admin
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-comments"></i> Comments (05)
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- <ul class="cus-pagination">
                            <li>
                                <a href="blog-details.html">
                                    1
                                </a>
                            </li>
                            <li>
                                <a href="blog-details.html">
                                    2
                                </a>
                            </li>
                            <li>
                                <a href="blog-details.html">
                                    3
                                </a>
                            </li>
                            <li>
                                <a href="blog-details.html">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-right-wrap">
                        <div class="blog-right-common blog-profile wow fadeInUp" data-wow-delay=".4s">
                            <img src="assets/img/Untitled design (27).png" alt="img" class="img-fluid">
                            <h4 class="black">
                                Nafiz Bhuiyan
                            </h4>
                            <p class="pra">
                                It is a long established fact that a reader will be distracted by the read content of a
                                page when looking at its layout
                            </p>
                            <div class="social-wrapper footer-social d-flex align-items-center">
                                <a href="#" class="white"><i class="white fab fa-facebook-f text-white"></i></a>
                                <!-- <a href="#" class="white">
                                    <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.55735 5.16157L10.5183 0.65625H9.57971L6.14039 4.56816L3.39341 0.65625H0.225098L4.37906 6.57174L0.225098 11.2963H1.16378L4.79579 7.16516L7.6968 11.2963H10.8651L6.55712 5.16157H6.55735ZM5.2717 6.62386L4.85082 6.03481L1.502 1.34768H2.94375L5.64629 5.13034L6.06717 5.71939L9.58015 10.6363H8.13839L5.2717 6.62409V6.62386Z"
                                            fill="white" />
                                    </svg>
                                </a> -->
                          
                                
                                <a href="#" class="white"><i class="fa-brands fa-instagram text-white"></i></i></a>

                            </div>
                        </div>
                        <div class="blog-right-common blog-profile wow fadeInUp" data-wow-delay=".5s">
                            <h4 class="cmn-title mb-30">
                                Search
                            </h4>
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="button">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                        </div>
                        <div class="blog-right-common blog-profile wow fadeInUp" data-wow-delay=".6s">
                            <h4 class="cmn-title mb-30">
                                Category
                            </h4>
                            <ul class="blog-category">
                                <li>
                                    <a href="#" class="d-flex align-items-center justify-content-between">
                                        EduTech Solutions
                                        <span>
                                            01
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center justify-content-between">
                                        SmartAcademy
                                        <span>
                                            07
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center justify-content-between">
                                        KnowledgeHub
                                        <span>
                                            02
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center justify-content-between">
                                        Specialist
                                        <span>
                                            04
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center justify-content-between">
                                        Education is the door
                                        <span>
                                            03
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-right-common blog-profile wow fadeInUp" data-wow-delay=".7s">
                            <h4 class="cmn-title mb-30">
                                Recent post
                            </h4>
                            <ul class="recent-post-blog">
                                <li>
                                    <span class="d-flex align-items-center gap-2">
                                        Category
                                        <span class="dots"></span>
                                        Comments 0
                                    </span>
                                    <a href="blog-details.html">
                                        Empower yourself through an learning
                                    </a>
                                </li>
                                <li>
                                    <span class="d-flex align-items-center gap-2">
                                        Category
                                        <span class="dots"></span>
                                        Comments 0
                                    </span>
                                    <a href="blog-details.html">
                                        Invest in education invest in yourself Best
                                    </a>
                                </li>
                                <li>
                                    <span class="d-flex align-items-center gap-2">
                                        Category
                                        <span class="dots"></span>
                                        Comments 0
                                    </span>
                                    <a href="blog-details.html">
                                        Empower yourself through an learning
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-right-common blog-profile wow fadeInUp" data-wow-delay=".8s">
                            <h4 class="cmn-title mb-30">
                                Tags
                            </h4>
                            <ul class="tag-blog">
                                <li>
                                    <a href="#">
                                        LearnWell
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Edu Pro
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Study Boost
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Academy
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        LearnEase
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        BrainWave
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stay Success Section Start -->
    <section class="stay-section pt-50 pb-50 cmn-bg overflow-hidden position-relative stay_bg">
        <div class="container ">
            <div class="row justify-content-between align-items-center g-4">
                <div class="col-lg-5 col-md-6 col-sm-7">
                    <div class="stay-content">
                        <div class="section-title">
                            <span class="sub-title wow fadeInUp black text">
                                Stay With Us
                            </span>
                            <h3 class="m-title wow fadeInUp black mb-sm-3 mb-2" data-wow-delay=".3s">
                                The path to success starts with education
                            </h3>
                            <p class="mb-24 pra wow fadeInUp" data-wow-delay=".4s">
                            At [The BlueCrest School], we create a loving and nurturing environment where your little one learns, plays, and grows every day. With our fun-filled activities, caring teachers, and a safe space to explore, your child’s first learning experience will be full of joy and excitement!
                            </p>
                            <a href="contact.php" class="theme-btn round100 p2-bg py-3">
                            <button class="btn_bg">
                                    Read More
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 me-xl-5 col-sm-5">
                    <div class="stay-thumb w-100">
                        <img src="assets/img/Untitled_design__23_-removebg-preview.png" alt="img" class="w-100">
                    </div>
                </div>
            </div>
        </div>
        <!-- Element-->
        <img src="assets/img/aservices/stay-shape.png" alt="img" class="stay-element">
    </section>


    <?php include "./includes/footer.php"; 
?>