<?php require_once("inc-global.php"); ?>
<?php
$page = "home";
$pagetype = "onepage";
$pagename = "Home";
/**JS & CSS**/
$onepagemenu = "yes";
$slider = "no";
$sliderautoscroll = "no";
$swiperjs = "yes";
$popup = "no";
$counter = "no";
$accordian = "no";
$utm = "yes";
?>

<!DOCTYPE html>
<html id="<?php echo $page; ?>" dir="ltr" lang="en-US">

<head>
  <?php require_once $head; ?>
</head>

<body class="body-line">
  <?php echo $block_body_start; ?>
  <?php require_once $header; ?>

  <section class="section-banner pb-0">
    <div class="container custom-container-1840">
      <div class="theme-h-line theme-outerline-left">
        <div class="theme-diagonal-line-right"></div>
      </div>
      <div class="theme-padding-xs">
        <div class="banner-title">
          <div class="section-title">
            <span class="small-title scramble-text" data-text='[
            "We Expert in Custom Development",
            "We are expert in Product Development",
            "We convert your imagination into visualisation"
        ]'>We Expert in Custom Development</span>
            <h1 class="scramble-text" data-text='[
            "Software Development",
            "Product Development",
            "Creative Engineering"
        ]'>Software Development</h1>
          </div>
        </div>
        <div class="theme-h-line theme-outerline-left theme-outerline-right"></div>
      </div>
      <div class="banner-content">
        <div class="location-wrraper is-relative">
          <div class="location">
            <span>Bhavnagar</span>
          </div>
          <div class="theme-h-line theme-outerline-left"></div>
          <div class="theme-icon">
            <video autoplay="" muted="" loop="" playsinline="" width="100%" height="100%" poster="">
              <source src="<?php echo $imagesurl; ?>video/theme-video.mp4" type="video/mp4">
            </video>
          </div>
        </div>

        <div class="experience-block">
          <div class="experience-title">
            <span>Experience</span>
          </div>
          <div class="theme-h-line"></div>
          <span class="years">
            <span class="text-roll">10+</span>
          </span>
        </div>
        <div class="banner-desc">
          <p class="is-uppercase scramble-text" data-text='[
    "We develop software as per custom requirements",
    "We convert your ideas into reality with MVP",
    "We are experts in creative design and concept development"
  ]'>
            We develop software as per custom requirements
          </p>
          <a href="#" class="btn theme-btn btn-learn-more full-width">
            Learn More
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-up-right">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M17 7l-10 10"></path>
              <path d="M8 7l9 0l0 9"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div class="theme-h-line theme-outerline-left"> </div>
  </section>

  <section class="section-image pb-0">
    <div class="theme-h-line theme-outerline-left"> </div>
    <div class="container custom-container-1840">
      <div class="image-container">
        <picture>
          <img src="<?php echo $imagesurl; ?>banner/banner-xl.webp" alt="Banner" width="1920" height="1080" />
        </picture>
      </div>
    </div>
  </section>

  <section class="section-industries-we-serve section-margin section-xs pb-0">
    <div class="theme-h-line theme-outerline-left"> </div>
    <div class="container custom-container-1840">
      <div class="theme-padding-xs section-xs pl-0">
        <div class="section-head">
          <div class="section-title mb-0">
            <h3 class="fw-500 is-uppercase font-orbitron pl-4">Industries We Serve</h3>
            <span class="small-title is-uppercase mb-0 pl-4">What we best at</span>
            <div class="theme-h-line"></div>
          </div>
          <div class="section-title pl-4">
            <h2>We provide smart and best digital services</h2>
          </div>
        </div>
      </div>
      <div class="theme-h-line theme-outerline-left theme-outerline-right"> </div>
      <div class="serve-wrapper">
        <ul class="serve-ul">
          <li class="serve-li">
            <span class="serve-name d-block">
              <span class="serve-num d-block">{ 1 }</span>
              <div class="tab-details section1">
                <div class="tab-list-block">
                  <ul class="tab-list">
                    <li class="tab is-active" onclick="openTab(event,'tab1', 'section1')"><a>AI Development</a></li>
                  </ul>
                </div>
              </div>
            </span>
          </li>
          <li class="serve-li">
            <span class="serve-name d-block">
              <span class="serve-num d-block">{ 2 }</span>
              <div class="tab-details section1">
                <div class="tab-list-block">
                  <ul class="tab-list">
                    <li class="tab" onclick="openTab(event,'tab2', 'section1')"><a>Software Development</a></li>
                  </ul>
                </div>
              </div>
            </span>
          </li>
          <li class="serve-li">
            <span class="serve-name d-block">
              <span class="serve-num d-block">{ 3 }</span>
              <div class="tab-details section1">
                <div class="tab-list-block">
                  <ul class="tab-list">

                    <li class="tab" onclick="openTab(event,'tab3', 'section1')"><a>Bringing Ideas Alive</a></li>
                  </ul>
                </div>
              </div>
            </span>
          </li>
          <li class="serve-li">
            <span class="serve-name d-block">
              <span class="serve-num d-block">{ 4 }</span>
              <div class="tab-details section1">
                <div class="tab-list-block">
                  <ul class="tab-list">
                    <li class="tab" onclick="openTab(event,'tab4', 'section1')"><a>AI Workflow Automation</a></li>
                  </ul>
                </div>
              </div>
            </span>
          </li>
          <li class="serve-li">
            <span class="serve-name d-block">
              <span class="serve-num d-block">{ 5 }</span>
              <div class="tab-details section1">
                <div class="tab-list-block">
                  <ul class="tab-list">
                    <li class="tab" onclick="openTab(event,'tab5', 'section1')"><a>Design & Experience</a></li>
                  </ul>
                </div>
              </div>
            </span>
          </li>
          <li class="serve-li">
            <span class="serve-name d-block">
              <span class="serve-num d-block">{ 6 }</span>
              <div class="tab-details section1">
                <div class="tab-list-block">
                  <ul class="tab-list">
                    <li class="tab" onclick="openTab(event,'tab6', 'section1')"><a>Brand Development</a></li>
                  </ul>
                </div>
              </div>
            </span>
          </li>
        </ul>
        <div class="serve-content">
          <div class="tab-details section1">
            <div class="tab-content">
              <div class="content-tab" id="tab1" style="display:block">
                <div class="is-flex is-flex-direction-column is-justify-content-space-between h-100">
                  <h4 class="font-orbitron fw-500">AI Development</h4>
                  <p>
                    Ad justo sapiente voluptate voluptatem hunc ipsum proin fermentum, elementum,nam repudiandae
                    ultrices in leo quod libero omnis.
                  </p>
                </div>
              </div>
              <div class="content-tab" id="tab2" style="display:none">
                <div class="is-flex is-flex-direction-column is-justify-content-space-between h-100">
                  <h4 class="font-orbitron fw-500">Software Development</h4>
                  <p>
                    Te minim deserunt venenatis voluptatum elit neque rerum similique, scelerisque,
                    dis scelerisque pariatur do per nemo aenean magna.
                  </p>
                </div>
              </div>
              <div class="content-tab" id="tab3" style="display:none">
                <div class="is-flex is-flex-direction-column is-justify-content-space-between h-100">
                  <h4 class="font-orbitron fw-500">Bringing Ideas Alive</h4>
                  <p>
                    Quod adipiscing eget voluptatibus at suspendisse suscipit, ut labore et dolore
                    aliqua mi nunc aliquam incidunt ubi eiusmod dolore.
                  </p>
                </div>
              </div>
              <div class="content-tab" id="tab4" style="display:none">
                <div class="is-flex is-flex-direction-column is-justify-content-space-between h-100">
                  <h4 class="font-orbitron fw-500">AI Workflow Automation</h4>
                  <p>
                    Fuga numquam vulputate tota voluptatem ultrices. in eiusdem nam iaculis te
                    vero quo quibus parturient dis blandit scelerisque.
                  </p>
                </div>
              </div>
              <div class="content-tab" id="tab5" style="display:none">
                <div class="is-flex is-flex-direction-column is-justify-content-space-between h-100">
                  <h4 class="font-orbitron fw-500">Design & Experience</h4>
                  <p>
                    Te nisi sit eiusmod pellentesque ipsum tota aenean eiusmod, exercitationem
                    officiis no porttitor egestas nihil tota iaculis.
                  </p>
                </div>
              </div>
              <div class="content-tab" id="tab6" style="display:none">
                <div class="is-flex is-flex-direction-column is-justify-content-space-between h-100">
                  <h4 class="font-orbitron fw-500">Brand Development</h4>
                  <p>
                    Porro non id nemo molestie sunt e aenean neque proident. Sit amet consectetur
                    voluptatum ubi laborum eget mihi e eiusmod cillum.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="compny-log-box">
            <div class="compny-log">
              <div class="bg-area">
                <picture>
                  <img src="<?php echo $imagesurl; ?>theme-icon-transparent.svg" alt="<?php echo $sitename; ?>"
                    width="145" height="70" />
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="theme-h-line theme-outerline-left"> </div>
  </section>

  <section class="section-process section-xs">
    <div class="cards">
      <div class="card">
        <div class="card-wrapper">

          <div class="card-marquee">
            <div class="marquee">
              <h3>Discovery</h3>
              <h3>Design</h3>
              <h3>Development</h3>
              <h3>Testing</h3>
              <h3>Launch</h3>
            </div>
          </div>

          <div class="card-img">
            <video autoplay="" muted="" loop="" playsinline="" width="100%" height="100%" poster="">
              <source src="<?php echo $imagesurl; ?>process/process-video.mp4" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-wrapper">
          <div class="card-content">
            <div class="card-title">
              <h4>Discovery</h4>
            </div>
            <div class="card-description">
              <p>We begin by understanding your business goals, audience, and competitive landscape. Through workshops and research</p>
            </div>
          </div>
          <div class="card-img white-overlay is-relative">
            <img src="<?php echo $imagesurl ?>process/1.webp" alt="">
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-wrapper">
          <div class="card-content">
            <div class="card-title">
              <h4>Design</h4>
            </div>
            <div class="card-description">
              <p>We translate insights into user-centered designs, creating wireframes, prototypes, and visual elements that enhance usability.</p>
            </div>
          </div>
          <div class="card-img white-overlay is-relative">
            <img src="<?php echo $imagesurl ?>process/2.webp" alt="">
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-wrapper">
          <div class="card-content">
            <div class="card-title">
              <h4>Development</h4>
            </div>
            <div class="card-description">
              <p>Our development team builds robust applications, ensuring functionality and performance while adhering to best practices.</p>
            </div>
          </div>
          <div class="card-img white-overlay is-relative">
            <img src="<?php echo $imagesurl ?>process/3.webp" alt="">
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-wrapper">
          <div class="card-content">
            <div class="card-title">
              <h4>Testing</h4>
            </div>
            <div class="card-description">
              <p>We conduct thorough testing to identify bugs and gather user feedback to refine the product before launch.</p>
            </div>
          </div>
          <div class="card-img white-overlay is-relative">
            <img src="<?php echo $imagesurl ?>process/4.webp" alt="">
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-wrapper">
          <div class="card-content">
            <div class="card-title">
              <h4>Launch</h4>
            </div>
            <div class="card-description">
              <p>We assist with deploying your product, ensuring a smooth transition into the market and monitoring initial user interaction.</p>
            </div>
          </div>
          <div class="card-img white-overlay is-relative">
            <img src="<?php echo $imagesurl ?>process/5.webp" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="section-project section-margin section-xs pb-0">
    <div class="theme-h-line theme-outerline-left"></div>
    <div class="container custom-container-1840">
      <div class="project-main section-xs">
        <div class="section-title mb-0">
          <span class="small-title is-uppercase mb- 0 pl-4">Our Featured Projects</span>
          <div class="theme-h-line"></div>
        </div>
        <div class="section-title pl-4">
          <h2 class="text-roll">Projects</h2>
        </div>
      </div>
      <div class="theme-h-line theme-outerline-left theme-outerline-right"></div>
      <div class="section-xs theme-padding-xs">
        <div class="is-relative">
          <div class="swiper-arrow-absolute">
            <div class="swiper-button-next">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                class="icon icon-tabler icons-tabler-filled icon-tabler-chevron-right">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M9.707 5.293l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 1 1 -1.414 -1.414l5.293 -5.293l-5.293 -5.293a1 1 0 0 1 1.414 -1.414" />
              </svg>
            </div>
            <div class="swiper-button-prev">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M15 6l-6 6l6 6" />
              </svg>
            </div>
          </div>
          <div class="swiper mySwiper ">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="prohect-img">
                  <picture>
                    <img src="<?php echo $imagesurl; ?>projects/ift-enpower-hackathon.webp" alt="IFT Enpower Hackathon"
                      width="400" height="500">
                  </picture>
                  <div class="project-title">
                    <p>IFT Enpower Hackathon</h4>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="prohect-img">
                  <picture>
                    <img src="<?php echo $imagesurl; ?>projects/mishi-marine-solution.webp"
                      alt="Mishi Marine Solution 2" width="400" height="500">
                  </picture>
                  <div class="project-title">
                    <p>Mishi Marine Solution 2</h4>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="prohect-img">
                  <picture>
                    <img src="<?php echo $imagesurl; ?>projects/ssx-india.webp" alt="SSX india" width="400"
                      height="500">
                  </picture>
                  <div class="project-title">
                    <p>SSX india</h4>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="prohect-img">
                  <picture>
                    <img src="<?php echo $imagesurl; ?>projects/vigo-nets.webp" alt="Vigo Nets" width="400"
                      height="500">
                  </picture>
                  <div class="project-title">
                    <p>Vigo Nets</h4>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="prohect-img">
                  <picture>
                    <img src="<?php echo $imagesurl; ?>projects/mishi-marine-solution.webp" alt="Mishi Marine Solution"
                      width="400" height="500">
                  </picture>
                  <div class="project-title">
                    <p>Mishi Marine Solution</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="section-products section-margin section-xs pb-0">
    <div class="theme-h-line theme-outerline-left"></div>
    <div class="container custom-container-1840">
      <div class="product-main section-xs">
        <div class="theme-log">
          <picture>
            <img src="<?php echo $imagesurl; ?>theme-icon-transparent.svg" alt="<?php echo $sitename; ?>" width="145"
              height="70" />
          </picture>
          <div class="theme-h-line"></div>
        </div>
        <div class="section-title pl-4">
          <h2 class="text-roll">OUR PRODUCTS</h2>
        </div>
      </div>
      <div class="theme-h-line theme-outerline-left"> </div>
      <div class="section-xs pb-0">
        <div class="section-xs">

          <div class="parallax-gallery">

            <!-- Column 1 -->
            <div class="parallax-column column-1">

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/1.webp" alt="">
              </div>

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/2.webp" alt="">
              </div>

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/3.webp" alt="">
              </div>

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/4.webp" alt="">
              </div>

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/5.webp" alt="">
              </div>

            </div>

            <!-- Column 2 -->
            <div class="parallax-column column-2">

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/3.webp" alt="">
              </div>

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/2.webp" alt="">
              </div>

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/4.webp" alt="">
              </div>

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/1.webp" alt="">
              </div>

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/5.webp" alt="">
              </div>

            </div>

            <!-- Column 3 -->
            <div class="parallax-column column-3">

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/2.webp" alt="">
              </div>

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/3.webp" alt="">
              </div>

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/4.webp" alt="">
              </div>

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/1.webp" alt="">
              </div>

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/5.webp" alt="">
              </div>

            </div>

            <!-- Column 4 -->
            <div class="parallax-column column-4">

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/5.webp" alt="">
              </div>

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/1.webp" alt="">
              </div>

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/2.webp" alt="">
              </div>

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/4.webp" alt="">
              </div>

              <div class="parallax-item">
                <img src="<?php echo $imagesurl; ?>product/3.webp" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-testimonial section-xs pb">
    <div class="theme-h-line theme-outerline-left"></div>
    <div class="container custom-container-1840">
      <div class="testimonial-title section-xs pb-0">
        <div class="section-title mb-0">
          <h3 class="fw-500 is-uppercase font-orbitron pl-4">Testimonial</h3>
        </div>
        <div class="section-title pl-4">
          <h2 class="text-roll">What Our Clients Say</h2>
        </div>
      </div>
      <div class="theme-h-line theme-outerline-left theme-outerline-right"></div>
      <div class="section-xs theme-padding-xs">
        <div class="is-relative">
          <div class="swiper-arrow-absolute">
            <div class="swiper-button-next">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                class="icon icon-tabler icons-tabler-filled icon-tabler-chevron-right">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M9.707 5.293l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 1 1 -1.414 -1.414l5.293 -5.293l-5.293 -5.293a1 1 0 0 1 1.414 -1.414" />
              </svg>
            </div>
            <div class="swiper-button-prev">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M15 6l-6 6l6 6" />
              </svg>
            </div>
          </div>
          <div class="swiper testimonial-slider ">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-box">
                  <div class="client-logo mb-5">
                    <picture>
                      <img src="<?php echo $imagesurl; ?>testimonials/1.webp" alt="Testimonials" width="400" height="500">
                    </picture>
                  </div>
                  <div class="testimonials-desc mb-5">
                    <p>Nam vitae eros ac elit varius posuere. Aenean mollis dolor at purus dignissim, sed vehicula massa cursus. Suspendisse potenti.</p>
                  </div>
                  <div class="testimonials-profile is-flex is-align-items-center is-gap-4">
                    <div class="profile-img">
                      <picture>
                        <img src="<?php echo $imagesurl; ?>testimonials/profile/1.webp" alt="Testimonials" width="400" height="500">
                      </picture>
                    </div>
                    <div class="profile-title">
                      <p class="mb-0 fw-600">John Doe</p>
                      <p class="mb-0 theme-color fw-500">Coastal Living</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial-box">
                  <div class="client-logo mb-5">
                    <picture>
                      <img src="<?php echo $imagesurl; ?>testimonials/2.webp" alt="Testimonials" width="400" height="500">
                    </picture>
                  </div>
                  <div class="testimonials-desc mb-5">
                    <p>Integer euismod magna non sapien vestibulum, ut convallis metus venenatis. Curabitur sit amet ipsum ac dui varius consequat.</p>
                  </div>
                  <div class="testimonials-profile is-flex is-align-items-center is-gap-4">
                    <div class="profile-img">
                      <picture>
                        <img src="<?php echo $imagesurl; ?>testimonials/profile/1.webp" alt="Testimonials" width="400" height="500">
                      </picture>
                    </div>
                    <div class="profile-title">
                      <p class="mb-0 fw-600">Oliver Turner</p>
                      <p class="mb-0 theme-color fw-500">Luxe Estates</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial-box">
                  <div class="client-logo mb-5">
                    <picture>
                      <img src="<?php echo $imagesurl; ?>testimonials/3.webp" alt="Testimonials" width="400" height="500">
                    </picture>
                  </div>
                  <div class="testimonials-desc mb-5">
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras tincidunt sapien at nisl hendrerit.</p>
                  </div>
                  <div class="testimonials-profile is-flex is-align-items-center is-gap-4">
                    <div class="profile-img">
                      <picture>
                        <img src="<?php echo $imagesurl; ?>testimonials/profile/1.webp" alt="Testimonials" width="400" height="500">
                      </picture>
                    </div>
                    <div class="profile-title">
                      <p class="mb-0 fw-600">Aisha Khan</p>
                      <p class="mb-0 theme-color fw-500">Dream Dwellings</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial-box">
                  <div class="client-logo mb-5">
                    <picture>
                      <img src="<?php echo $imagesurl; ?>testimonials/4.webp" alt="Testimonials" width="400" height="500">
                    </picture>
                  </div>
                  <div class="testimonials-desc mb-5">
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras tincidunt sapien at nisl hendrerit.</p>
                  </div>
                  <div class="testimonials-profile is-flex is-align-items-center is-gap-4">
                    <div class="profile-img">
                      <picture>
                        <img src="<?php echo $imagesurl; ?>testimonials/profile/1.webp" alt="Testimonials" width="400" height="500">
                      </picture>
                    </div>
                    <div class="profile-title">
                      <p class="mb-0 fw-600">Aisha Khan</p>
                      <p class="mb-0 theme-color fw-500">Dream Dwellings</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial-box">
                  <div class="client-logo mb-5">
                    <picture>
                      <img src="<?php echo $imagesurl; ?>testimonials/5.webp" alt="Testimonials" width="400" height="500">
                    </picture>
                  </div>
                  <div class="testimonials-desc mb-5">
                    <p>Sed sollicitudin ligula sit amet convallis gravida. Aliquam erat volutpat, tincidunt in leo et, tincidunt scelerisque ligula.</p>
                  </div>
                  <div class="testimonials-profile is-flex is-align-items-center is-gap-4">
                    <div class="profile-img">
                      <picture>
                        <img src="<?php echo $imagesurl; ?>testimonials/profile/1.webp" alt="Testimonials" width="400" height="500">
                      </picture>
                    </div>
                    <div class="profile-title">
                      <p class="mb-0 fw-600">Jasmin Patel</p>
                      <p class="mb-0 theme-color fw-500">Green Homes</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial-box">
                  <div class="client-logo mb-5">
                    <picture>
                      <img src="<?php echo $imagesurl; ?>testimonials/6.webp" alt="Testimonials" width="400" height="500">
                    </picture>
                  </div>
                  <div class="testimonials-desc mb-5">
                    <p>Nam vitae eros ac elit varius posuere. Aenean mollis dolor at purus dignissim, sed vehicula massa cursus. Suspendisse potenti.</p>
                  </div>
                  <div class="testimonials-profile is-flex is-align-items-center is-gap-4">
                    <div class="profile-img">
                      <picture>
                        <img src="<?php echo $imagesurl; ?>testimonials/profile/1.webp" alt="Testimonials" width="400" height="500">
                      </picture>
                    </div>
                    <div class="profile-title">
                      <p class="mb-0 fw-600">Sakshi Mehra</p>
                      <p class="mb-0 theme-color fw-500">Raymond Realty</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-image pb-0">
    <div class="theme-h-line theme-outerline-left"> </div>
    <div class="container custom-container-1840">
      <div class="image-container">
        <picture>
          <img src="<?php echo $imagesurl; ?>testimonial.webp" alt="Banner" width="1920" height="1080" />
        </picture>
      </div>
    </div>
  </section>


  <section class="section-footer section-xs">
    <div class="theme-h-line theme-outerline-left"></div>
    <div class="container custom-container-1840">
      <div class="contact-us-title section-xs pb-0">
        <div class="section-title mb-0">
          <h3 class="fw-500 is-uppercase font-orbitron pl-4">Let's Talk</h3>
          <div class="theme-h-line"></div>
        </div>
        <div class="section-title pl-4">
          <h2 class="text-roll">Contact Us</h2>
        </div>
      </div>
      <div class="theme-h-line theme-outerline-left theme-outerline-right"></div>
      <div class="footer-box">
        <div class="media-wrapper">
          <div class="footer-logo pl-4">
            <picture>
              <img src="<?php echo $imagesurl; ?>logo.svg" alt="<?php echo $sitename; ?> Logo" width="145" height="70" />
            </picture>
          </div>
          <div class="social-links">
            <ul>
              <li>
                <a href="#">
                  Facebook
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-chevron-right">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9.707 5.293l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 1 1 -1.414 -1.414l5.293 -5.293l-5.293 -5.293a1 1 0 0 1 1.414 -1.414" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  Instagram
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-chevron-right">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9.707 5.293l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 1 1 -1.414 -1.414l5.293 -5.293l-5.293 -5.293a1 1 0 0 1 1.414 -1.414" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  LinkedIn
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-chevron-right">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9.707 5.293l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 1 1 -1.414 -1.414l5.293 -5.293l-5.293 -5.293a1 1 0 0 1 1.414 -1.414" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  Twitter
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-chevron-right">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9.707 5.293l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 1 1 -1.414 -1.414l5.293 -5.293l-5.293 -5.293a1 1 0 0 1 1.414 -1.414" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-text pl-4">
            <p>Copyright © <b>Midnight</b> 2026</p>
          </div>
        </div>
      </div>
      <div class="theme-h-line theme-outerline-left theme-outerline-right"></div>
    </div>
  </section>


  <?php /* require_once $footer;  */ ?>
  <?php require_once $footscripts; ?>

  <script>
    var swiper = new Swiper('.mySwiper', {
      loop: true,
      centeredSlides: false,
      rewind: false,
      slidesPerView: 4,
      spaceBetween: 30,
      speed: 800,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      // autoplay: {
      //   pauseOnMouseEnter: true
      // }
    });

    var swiper = new Swiper('.testimonial-slider', {
      loop: true,
      centeredSlides: false,
      rewind: false,
      slidesPerView: 4,
      spaceBetween: 30,
      speed: 800,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      // autoplay: {
      //   pauseOnMouseEnter: true
      // }
    });
  </script>
  <script>
    function openTab(evt, tabName, sectionClass) {
      let i, x, tablinks;
      let sections = document.querySelectorAll("." + sectionClass);
      sections.forEach(function(section) {
        x = section.querySelectorAll(".content-tab");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        tablinks = section.querySelectorAll(".tab");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].classList.remove("is-active");
        }
        let selectedTab = section.querySelector("#" + tabName);
        if (selectedTab) {
          selectedTab.style.display = "block";
        }
        evt.currentTarget.classList.add("is-active");
      });
    }
  </script>
  <?php echo $block_body_end; ?>
</body>

</html>