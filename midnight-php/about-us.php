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

  <section class="section-about-banner p-0">
    <div class="container custom-container-1840">
      <div class="about-video-wrapper">
        <div class="about-video is-relative black-overlay">
          <video autoplay="" muted="" loop="" playsinline="" width="100%" height="100%" poster="">
            <source src="<?php echo $imagesurl; ?>about/banner/theme-video.mp4" type="video/mp4">
          </video>
        </div>
        <div class="about-title-wrapper">
          <div class="section-title mb-0">
            <h3 class="fw-500 is-uppercase font-orbitron pl-4 reveal-text">Who We Are</h3>
          </div>
          <div class="section-title pl-4">
            <h2 class="reveal-text">Sleepless <span class="yellow-text">Rangers</span></h2>
          </div>
          <div class="about-title-tagline dark">
            <h4 class="fw-700 font-orbitron is-uppercase reveal-text">We are energetic, dynamic and experience</h4>
          </div>
        </div>
        <div class="about-banner-placeholder" aria-hidden="true"></div>
      </div>

      <div class="about-banner-img">
        <picture>
          <img src="<?php echo $imagesurl; ?>about/banner/about-banner.webp" alt="Banner" width="1920" height="880" />
        </picture>
      </div>

      <div class="theme-h-line theme-outerline-left theme-outerline-right"></div>
    </div>
  </section>

  <section class="section-aboutus pb-0">
    <div class="theme-h-line theme-outerline-left theme-outerline-right"></div>
    <div class="container custom-container-1840">
      <div class="sleepless-rangers-main section-xs">
        <div class="sleepless-rangers-left">
          <div class="theme-log">
            <picture>
              <img class="mb-0" src="<?php echo $imagesurl; ?>theme-icon-transparent.svg" alt="<?php echo $sitename; ?>" width="145"
                height="70" />
            </picture>
          </div>
        </div>
        <div class="sleepless-rangers-right">
          <div class="section-title theme-padding-xs mb-0">
            <h2 class="reveal-text">We are energetic, dynamic and experienced</h2>
          </div>
        </div>
      </div>
      <div class="theme-h-line theme-outerline-left"></div>
      <div class="about-desc-main gray-bg">
        <div class="is-flex is-flex-direction-column is-justify-content-space-between theme-padding-xs section-xs">
          <div class="about-desc">
            <p>Midnight Digital Pvt. Ltd. is a firm that pulls all-nighters to make your dreams into the leading-edge of the era. This gives you the opportunity to not only make your dreams come true but also one at the forefront of the digital era.</p>
            <p>We work one finger to the bone to be the bridge between you and your success. We have an elegant, nimble-witted, and agile team working from dusk till dawn under our enlightenment.</p>
            <p>Founded in 2020. Midnight name itself defines ourselves and our services. We never go to sleep until we deliver what we committed. We have delivered many projects in various industries like Real Estate, Education, Health Care and Many others.</p>
          </div>
          <div class="about-stats">
            <div class="stat-item">
              <h3 class="font-orbitron fw-600">10+</h3>
              <span>Years Experience</span>
            </div>
            <div class="stat-item">
              <h3 class="font-orbitron fw-600">200+</h3>
              <span>Projects Delivered</span>
            </div>
          </div>
        </div>
        <div class="about-desc-img">
          <picture>
            <img src="<?php echo $imagesurl; ?>about/team.webp" alt="Banner" width="1920" height="880" />
          </picture>
        </div>
      </div>
    </div>
    <div class="theme-h-line theme-outerline-left theme-outerline-right"></div>
  </section>

  <section class="section-vision-mission pb-0">
    <div class="theme-h-line theme-outerline-left theme-outerline-right"></div>
    <div class="container custom-container-1840">
      <div class="vm-grid section-xs theme-padding-xs gray-bg">
        <div class="vm-block vm-vision ">
          <span class="vm-label">01</span>
          <h2 class="vm-title font-orbitron reveal-text">Our Vision</h2>
          <p class="vm-desc">We are determined to expand our reach by offering prime services across a wide range of areas. We are also looking forward to working with the latest technologies. So, We emphasise highly reliable, scalable, innovative, and strong growth as the base therefore we provide varied advancements in the products and services.</p>
        </div>
        <div class="vm-block vm-mission pl-4">
          <span class="vm-label">02</span>
          <h2 class="vm-title font-orbitron reveal-text">Our Mission</h2>
          <p class="vm-desc">We are determined to expand our reach by offering prime services across a wide range of areas. We are also looking forward to working with the latest technologies. So, We emphasise highly reliable, scalable, innovative, and strong growth as the base therefore we provide varied advancements in the products and services.</p>
        </div>
      </div>
    </div>
    <div class="theme-h-line theme-outerline-left theme-outerline-right"></div>
  </section>

  <section class="section-image pb-0 pt-0">
    <div class="image-container">
      <picture>
        <img src="<?php echo $imagesurl; ?>about/about-wrapper.webp" alt="Banner" width="1920" height="1080" />
      </picture>
    </div>
  </section>

  <section class="section about-title-marquee">
    <div class="about-marquee-track">
      <div class="about-marquee-content">
        <h3>We are a team of Sleepless rangers.</h3>
        <h3>We are a team of Sleepless rangers.</h3>
        <h3>We are a team of Sleepless rangers.</h3>
        <h3>We are a team of Sleepless rangers.</h3>
        <h3>We are a team of Sleepless rangers.</h3>
        <h3>We are a team of Sleepless rangers.</h3>
        <h3>We are a team of Sleepless rangers.</h3>
        <h3>We are a team of Sleepless rangers.</h3>
        <h3>We are a team of Sleepless rangers.</h3>
        <h3>We are a team of Sleepless rangers.</h3>
        <h3>We are a team of Sleepless rangers.</h3>
      </div>
    </div>
  </section>

  <section class="section-believe dark">
    <div class="container custom-container-1840">
      <div class="believe-header">
        <div class="section-title mb-0">
          <h2 class="font-orbitron fw-700 is-uppercase ">We Believe In</h2>
          <span class="believe-tagline"><span class="believe-dot"></span> end to end solution</span>
        </div>
      </div>
      <div class="believe-accordion">
        <div class="believe-acc-item is-active">
          <div class="believe-acc-header">
            <span class="believe-acc-num">01</span>
            <h4 class="believe-acc-title">Design.</h4>
            <span class="believe-acc-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9l6 6l6-6" />
              </svg>
            </span>
          </div>
          <div class="believe-acc-body">
            <div class="believe-acc-content">
              <p>We understand your ideas and requirements and then start working on its workflow and creative design. We make data-driven decisions about UX while innovating every step of the way. From mobile to tablet to full wall projections, our digital creations are designed to make an impact on any sized screen.</p>
            </div>
          </div>
        </div>
        <div class="believe-acc-item">
          <div class="believe-acc-header">
            <span class="believe-acc-num">02</span>
            <h4 class="believe-acc-title">Conception.</h4>
            <span class="believe-acc-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9l6 6l6-6" />
              </svg>
            </span>
          </div>
          <div class="believe-acc-body">
            <div class="believe-acc-content">
              <p>We transform abstract ideas into concrete plans. Our team maps every user journey, defines system architecture, and creates comprehensive blueprints before a single line of code is written.</p>
            </div>
          </div>
        </div>
        <div class="believe-acc-item">
          <div class="believe-acc-header">
            <span class="believe-acc-num">03</span>
            <h4 class="believe-acc-title">Development.</h4>
            <span class="believe-acc-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9l6 6l6-6" />
              </svg>
            </span>
          </div>
          <div class="believe-acc-body">
            <div class="believe-acc-content">
              <p>Our development team builds robust, scalable applications using modern technologies and best practices. Every line of code is written with performance, security, and maintainability in mind.</p>
            </div>
          </div>
        </div>
        <div class="believe-acc-item">
          <div class="believe-acc-header">
            <span class="believe-acc-num">04</span>
            <h4 class="believe-acc-title">Support.</h4>
            <span class="believe-acc-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9l6 6l6-6" />
              </svg>
            </span>
          </div>
          <div class="believe-acc-body">
            <div class="believe-acc-content">
              <p>Our commitment doesn't end at launch. We provide ongoing support, maintenance, and optimization to ensure your digital products continue to perform at their best.</p>
            </div>
          </div>
        </div>
        <div class="believe-acc-item">
          <div class="believe-acc-header">
            <span class="believe-acc-num">05</span>
            <h4 class="believe-acc-title">Marketing.</h4>
            <span class="believe-acc-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9l6 6l6-6" />
              </svg>
            </span>
          </div>
          <div class="believe-acc-body">
            <div class="believe-acc-content">
              <p>We help brands grow through strategic digital marketing, SEO optimization, and data-driven campaigns that deliver measurable results and sustainable growth.</p>
            </div>
          </div>
        </div>
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


  <?php /* require_once $footer; */?>
  <?php require_once $footscripts; ?>

  <script>
    // About Banner: image starts positioned under title area (left column, overlapping text)
    // then on scroll expands to full width centered
    const aboutBannerImg = document.querySelector(".about-banner-img");
    const placeholder = document.querySelector(".about-banner-placeholder");

    if (aboutBannerImg && placeholder) {

      // Measure positions after layout
      const imgRect = aboutBannerImg.getBoundingClientRect();
      const phRect = placeholder.getBoundingClientRect();

      // Scale to fit placeholder width
      const startScale = phRect.width / imgRect.width;

      // Move image so its top-left aligns with placeholder top-left
      const startX = phRect.left - imgRect.left;
      const startY = phRect.top - imgRect.top;

      gsap.fromTo(aboutBannerImg, {
        x: startX,
        y: startY,
        scale: startScale,
      }, {
        x: 0,
        y: 0,
        scale: 1,
        ease: "none",
        scrollTrigger: {
          trigger: ".section-about-banner",
          start: "top top",
          end: "+=400",
          scrub: 0.3,
        }
      });
    }

    // Vision & Mission - reveal on scroll
    const vmBlocks = document.querySelectorAll('.vm-block');
    if (vmBlocks.length) {
      const vmObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
          }
        });
      }, {
        threshold: 0.2
      });
      vmBlocks.forEach(block => vmObserver.observe(block));
    }

    // About Marquee - scroll driven
    const aboutMarquee = document.querySelector('.about-marquee-content');
    if (aboutMarquee) {
      gsap.to(aboutMarquee, {
        xPercent: -50,
        ease: "none",
        scrollTrigger: {
          trigger: ".about-title-marquee",
          start: "top bottom",
          end: "bottom top",
          scrub: 1,
        }
      });
    }

    // Hide rr-v-lines from about-title-marquee onwards
    const rrLines = document.querySelector('.rr-v-lines');
    const marqueeSection = document.querySelector('.about-title-marquee');
    const believeSection = document.querySelector('.section-believe');
    if (rrLines && marqueeSection) {
      ScrollTrigger.create({
        trigger: marqueeSection,
        start: "top bottom",
        onEnter: () => {
          rrLines.style.opacity = '0';
        },
        onLeaveBack: () => {
          rrLines.style.opacity = '1';
        },
      });
    }
    if (rrLines && believeSection) {
      ScrollTrigger.create({
        trigger: believeSection,
        start: "top bottom",
        onEnter: () => {
          rrLines.style.opacity = '1';
        },
        onLeaveBack: () => {
          rrLines.style.opacity = '0';
        },
      });
    }

    // We Believe In - Accordion (GSAP smooth)
    const accItems = document.querySelectorAll('.believe-acc-item');
    if (accItems.length) {
      // Set initial state - close all bodies except active
      accItems.forEach((item) => {
        const body = item.querySelector('.believe-acc-body');
        if (!item.classList.contains('is-active')) {
          gsap.set(body, {
            height: 0,
            overflow: 'hidden'
          });
        } else {
          gsap.set(body, {
            height: 'auto',
            overflow: 'hidden'
          });
        }
      });

      accItems.forEach((item) => {
        const header = item.querySelector('.believe-acc-header');
        header.addEventListener('click', function() {
          const isActive = item.classList.contains('is-active');
          const body = item.querySelector('.believe-acc-body');

          // Close all open items
          accItems.forEach((el) => {
            if (el !== item && el.classList.contains('is-active')) {
              el.classList.remove('is-active');
              const elBody = el.querySelector('.believe-acc-body');
              gsap.to(elBody, {
                height: 0,
                duration: 0.5,
                ease: "power3.inOut",
              });
            }
          });

          // Toggle clicked
          if (!isActive) {
            item.classList.add('is-active');
            gsap.set(body, {
              height: 'auto'
            });
            const fullHeight = body.offsetHeight;
            gsap.fromTo(body, {
              height: 0
            }, {
              height: fullHeight,
              duration: 0.6,
              ease: "power3.inOut",
              onComplete: () => gsap.set(body, {
                height: 'auto'
              }),
            });
          } else {
            item.classList.remove('is-active');
            gsap.to(body, {
              height: 0,
              duration: 0.5,
              ease: "power3.inOut",
            });
          }
        });
      });
    }
  </script>

  <?php echo $block_body_end; ?>
</body>

</html>