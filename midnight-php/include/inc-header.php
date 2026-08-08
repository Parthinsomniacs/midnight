<?php if ($captcha) { ?>
  <style>
    .sticky-bottom-form .col-form {
      position: relative;
      width: 16.5%;
      float: left;
      padding: 0 15px;
      margin: 0 0 10px !important;
    }

    @media screen and (max-width: 1024px) {
      .sticky-bottom-form .col-form {
        width: 50%;
        margin: 0 0 15px !important;
      }

      .sticky-bottom-form-inner {
        bottom: -220px;
      }
    }
  </style>
<?php } ?>


<?php


function getRandomValueFromArray($array)
{
  $randomKey = array_rand($array);
  $randomValue = $array[$randomKey];
  return $randomValue;
}

$random_val = getRandomValueFromArray($a);

$message = "Notice: ";
if (!$crmintegration) {
  $message .= "Website has no CRM API integrated. ";
}
if (!$trackercodeintegration) {
  $message .= "Website has no tracker conversion. ";
}
$message .= "Please contact admin.";
if (!$crmintegration || !$trackercodeintegration) { ?>
  <div class="sticky-notice"><span>
      <?= $message; ?>
    </span></div>
<?php } ?>

<div id="page-loader" class="page-loader" aria-hidden="true">
  <!-- Logo Animation Layer -->
  <div class="loader-logo-wrap" id="loaderLogo">
    <svg class="loader-logo-svg" fill="none" viewBox="0 0 173.253 39.9987" preserveAspectRatio="xMidYMid meet">
      <path class="l-hex" id="lHex" d="M17.5743 1.86021L33.2886 10.9294V29.0658L17.5743 38.1349L1.86005 29.0658V10.9294L17.5743 1.86021ZM17.5743 0C17.2478 0.000317487 16.9271 0.0862725 16.6443 0.249347L0.930023 9.31852C0.64737 9.48175 0.412643 9.71647 0.249403 9.99904C0.0861621 10.2816 0.000158404 10.6021 8.20616e-06 10.9284V29.0648C-0.000964291 29.3921 0.0845161 29.7138 0.247818 29.9975C0.411119 30.2812 0.646447 30.5168 0.930023 30.6805L16.6443 39.7497C16.927 39.9128 17.2478 39.9987 17.5743 39.9987C17.9008 39.9987 18.2216 39.9128 18.5043 39.7497L34.2186 30.6805C34.5021 30.5168 34.7374 30.2812 34.9007 29.9975C35.064 29.7138 35.1495 29.392 35.1486 29.0648V10.9284C35.1485 10.6021 35.0625 10.2816 34.8992 9.99904C34.736 9.71647 34.5013 9.48175 34.2186 9.31852L18.5043 0.249347C18.2215 0.0862725 17.9008 0.000317487 17.5743 0Z" fill="#FFFFFF" />
      <path class="l-chevron" id="lChevron" d="M17.5743 22.663C17.4032 22.6643 17.2351 22.618 17.0889 22.5291L0.68248 12.6205L1.64356 11.0291L17.5753 20.6465L33.607 11.0184L34.5642 12.6118L18.0529 22.5281C17.9087 22.6159 17.7432 22.6625 17.5743 22.663Z" fill="#FFFFFF" />
      <path class="l-face" id="lFace1" d="M6.28784 18.9883C6.37385 19.7614 6.72352 20.4813 7.27807 21.0269C7.83262 21.5726 8.55823 21.9107 9.33288 21.9845C10.1075 22.0583 10.884 21.8633 11.5316 21.4321C12.1793 21.001 12.6587 20.3601 12.8892 19.6172L11.5651 18.8166C11.5349 19.141 11.4228 19.4525 11.2393 19.7217C11.0558 19.991 10.8069 20.2094 10.5159 20.3562C10.2249 20.5031 9.90138 20.5736 9.57564 20.5614C9.2499 20.5491 8.93262 20.4543 8.65353 20.2859C8.37445 20.1176 8.1427 19.8811 7.98002 19.5988C7.81735 19.3164 7.72907 18.9974 7.72346 18.6716C7.71784 18.3458 7.79509 18.0239 7.94794 17.7362C8.10079 17.4484 8.32424 17.2041 8.59736 17.0263L7.2732 16.2286C6.91212 16.5851 6.63604 17.0183 6.46545 17.496C6.29486 17.9738 6.23416 18.4839 6.28784 18.9883Z" fill="#FFFFFF" />
      <path class="l-face" id="lFace2" d="M15.2046 21.0135L13.9367 20.2459C13.7014 20.8753 13.3302 21.4451 12.8495 21.9148C12.3689 22.3845 11.7906 22.7427 11.1558 22.9637C10.5209 23.1846 9.84522 23.2631 9.17663 23.1934C8.50805 23.1237 7.86304 22.9077 7.28747 22.5606C6.71189 22.2135 6.2199 21.7439 5.84649 21.1852C5.47307 20.6265 5.22742 19.9924 5.12698 19.328C5.02654 18.6636 5.07379 17.9853 5.26537 17.3412C5.45695 16.6972 5.78815 16.1032 6.23542 15.6017L4.9627 14.837C4.41794 15.5073 4.02341 16.2866 3.80574 17.1224C3.58806 17.9581 3.55232 18.8308 3.70092 19.6816C3.84952 20.5323 4.17901 21.3413 4.66714 22.0539C5.15526 22.7664 5.79067 23.366 6.53044 23.8121C7.27021 24.2583 8.09713 24.5405 8.95537 24.6399C9.81361 24.7393 10.6832 24.6534 11.5054 24.3881C12.3276 24.1228 13.0833 23.6843 13.7215 23.1021C14.3596 22.52 14.8654 21.8077 15.2046 21.0135Z" fill="#FFFFFF" />
      <path class="l-face" id="lFace3" d="M24.8708 24.6427C26.0585 24.7656 27.256 24.5339 28.3119 23.9769C29.3679 23.4198 30.235 22.5623 30.8036 21.5128C31.3722 20.4633 31.6168 19.2689 31.5065 18.0805C31.3962 16.8921 30.936 15.7631 30.184 14.836L28.9113 15.6007C29.3585 16.1023 29.6898 16.6962 29.8813 17.3403C30.0729 17.9843 30.1202 18.6627 30.0197 19.327C29.9193 19.9914 29.6736 20.6255 29.3002 21.1842C28.9268 21.7429 28.4348 22.2126 27.8592 22.5597C27.2837 22.9068 26.6387 23.1228 25.9701 23.1925C25.3015 23.2621 24.6258 23.1836 23.9909 22.9627C23.3561 22.7417 22.7778 22.3836 22.2972 21.9139C21.8165 21.4441 21.4453 20.8743 21.21 20.2449L19.9421 21.0125C20.366 22.0014 21.0463 22.8592 21.9127 23.4974C22.7792 24.1355 23.8004 24.5309 24.8708 24.6427Z" fill="#FFFFFF" />
      <path class="l-face" id="lFace4" d="M27.8677 16.2295L26.5435 17.0272C26.8138 17.2057 27.0345 17.4497 27.1851 17.7364C27.3356 18.0231 27.4111 18.3433 27.4045 18.667C27.3979 18.9908 27.3094 19.3076 27.1473 19.5879C26.9852 19.8683 26.7547 20.1031 26.4774 20.2704C26.2 20.4377 25.8848 20.5322 25.5611 20.5449C25.2374 20.5576 24.9157 20.4882 24.6261 20.3432C24.3364 20.1981 24.0882 19.9822 23.9046 19.7154C23.7209 19.4486 23.6078 19.1398 23.5758 18.8175L22.2516 19.6181C22.4011 20.1111 22.6613 20.5635 23.0122 20.9408C23.3632 21.318 23.7958 21.6101 24.2769 21.7949C24.758 21.9796 25.275 22.052 25.7884 22.0067C26.3018 21.9613 26.798 21.7993 27.2393 21.5331C27.6805 21.2669 28.0551 20.9034 28.3344 20.4705C28.6137 20.0375 28.7905 19.5465 28.8511 19.0349C28.9117 18.5233 28.8546 18.0047 28.6842 17.5185C28.5138 17.0323 28.2345 16.5914 27.8677 16.2295Z" fill="#FFFFFF" />
      <path class="l-eye" id="lEye1" d="M10.0584 17.359C10.3113 17.4385 10.5348 17.5912 10.7008 17.7978C10.8667 18.0044 10.9677 18.2556 10.9908 18.5195C11.0139 18.7834 10.9582 19.0483 10.8307 19.2806C10.7032 19.5128 10.5097 19.702 10.2745 19.8243C10.0394 19.9466 9.77324 19.9964 9.50978 19.9675C9.24631 19.9385 8.99735 19.8321 8.79442 19.6616C8.59149 19.4912 8.4437 19.2644 8.36974 19.01C8.29579 18.7556 8.29899 18.4849 8.37895 18.2323C8.48604 17.8941 8.72304 17.6121 9.03793 17.4484C9.35282 17.2846 9.71985 17.2525 10.0584 17.359Z" fill="#F79620" />
      <path class="l-eye" id="lEye2" d="M26.7697 18.2344C26.8497 18.487 26.8529 18.7576 26.7789 19.0121C26.705 19.2665 26.5572 19.4933 26.3542 19.6637C26.1513 19.8341 25.9024 19.9406 25.6389 19.9695C25.3754 19.9985 25.1093 19.9487 24.8742 19.8264C24.639 19.7041 24.4454 19.5149 24.3179 19.2826C24.1904 19.0503 24.1347 18.7855 24.1579 18.5215C24.181 18.2576 24.2819 18.0064 24.4479 17.7999C24.6139 17.5933 24.8374 17.4406 25.0902 17.361C25.4288 17.2545 25.7959 17.2867 26.1107 17.4504C26.4256 17.6142 26.6626 17.8961 26.7697 18.2344Z" fill="#F79620" />
      <path class="l-sep" id="lSep" d="M18.5044 27.5178C18.5044 27.0044 18.088 26.5881 17.5743 26.5881C17.0607 26.5881 16.6443 27.0044 16.6443 27.5178V33.2983C16.6443 33.8117 17.0607 34.2279 17.5743 34.2279C18.088 34.2279 18.5044 33.8117 18.5044 33.2983V27.5178Z" fill="#FFFFFF" />
      <path class="l-text" id="lT0" d="M57.4362 29.0443L57.4109 17.0445L51.4599 26.9754H49.962L44.0023 17.2056V29.0443H40.7987V10.9467H43.5674L50.76 22.9455L57.8235 10.9467H60.5912L60.6155 29.0443H57.4362Z" fill="#FFFFFF" />
      <path class="l-text" id="lT1" d="M63.4852 10.9467H66.848V29.0443H63.4852V10.9467Z" fill="#FFFFFF" />
      <path class="l-text" id="lT2" d="M69.7177 10.9468H77.6374C79.4189 10.9135 81.1832 11.2987 82.7885 12.0714C84.2337 12.7731 85.4447 13.8779 86.2756 15.2524C87.0901 16.7014 87.5179 18.3355 87.5179 19.9975C87.5179 21.6596 87.0901 23.2937 86.2756 24.7427C85.4426 26.1183 84.2287 27.2231 82.7808 27.9236C81.1761 28.6958 79.4122 29.0798 77.6316 29.0444H69.7177V10.9468ZM77.4792 26.2041C78.6916 26.2296 79.8927 25.9683 80.9847 25.4413C81.9602 24.9648 82.7714 24.2083 83.3147 23.2686C83.8499 22.2613 84.1298 21.1381 84.1298 19.9975C84.1298 18.8569 83.8499 17.7338 83.3147 16.7264C82.7714 15.7868 81.9602 15.0303 80.9847 14.5537C79.8925 14.0274 78.6915 13.7664 77.4792 13.7919H73.0815V26.2041H77.4792Z" fill="#FFFFFF" />
      <path class="l-text" id="lT3" d="M106.169 10.9467V29.0443H103.4L93.4139 16.7864V29.0443H90.0811V10.9467H92.8498L102.836 23.2045V10.9467H106.169Z" fill="#FFFFFF" />
      <path class="l-text" id="lT4" d="M110.023 10.9467H113.386V29.0443H110.023V10.9467Z" fill="#FFFFFF" />
      <path class="l-text" id="lT5" d="M130.641 19.7956H133.822V27.0104C132.85 27.7742 131.745 28.3531 130.563 28.7182C129.326 29.1141 128.034 29.3148 126.735 29.3131C124.995 29.3392 123.277 28.9256 121.741 28.1108C120.293 27.3441 119.084 26.1948 118.246 24.7882C117.415 23.3304 116.978 21.6815 116.978 20.0038C116.978 18.326 117.415 16.6772 118.246 15.2193C119.086 13.8105 120.299 12.6608 121.751 11.8967C123.301 11.081 125.031 10.6675 126.783 10.6944C128.199 10.6755 129.605 10.9302 130.924 11.4445C132.128 11.9177 133.201 12.6712 134.055 13.6425L131.934 15.7113C131.287 15.0429 130.51 14.5141 129.651 14.1576C128.792 13.8011 127.869 13.6245 126.938 13.6386C125.755 13.6157 124.584 13.8913 123.536 14.4401C122.565 14.9565 121.76 15.7361 121.213 16.6894C120.64 17.6978 120.35 18.8414 120.372 20.0004C120.355 21.1419 120.645 22.267 121.213 23.2579C121.763 24.2152 122.567 25.0024 123.536 25.5335C124.571 26.0961 125.734 26.3813 126.912 26.3612C128.215 26.3895 129.502 26.0681 130.638 25.4306L130.641 19.7956Z" fill="#FFFFFF" />
      <path class="l-text" id="lT6" d="M154.34 10.9467V29.0443H150.976V21.291H141.611V29.0443H138.247V10.9467H141.611V18.4186H150.976V10.9467H154.34Z" fill="#FFFFFF" />
      <path class="l-text" id="lT7" d="M163.887 13.7918H157.885V10.9467H173.253V13.7918H167.251V29.0443H163.887V13.7918Z" fill="#FFFFFF" />
    </svg>
  </div>
  <!-- Stairs Layer -->
  <div class="stairs-wrap" id="stairsWrap">
    <div class="stair"></div>
    <div class="stair"></div>
    <div class="stair"></div>
    <div class="stair"></div>
    <div class="stair"></div>
  </div>
</div>

<?php if ($page == "home") { ?>
  <header id="header" class="header-main">
    <div class="container custom-container-1840">
      <div class="rr-v-lines" aria-hidden="true">
        <div class="rr-line"></div>
        <div class="rr-line"></div>
        <div class="rr-line"></div>
        <div class="rr-line"></div>
        <div class="rr-line"></div>
      </div>
      <div class="header-wrapper">
        <div class="header-logo pl-4">
          <a href="<?php echo $siteurl; ?>" class="theme-logo">
            <picture>
              <img src="<?php echo $imagesurl; ?>logo.svg" alt="<?php echo $sitename; ?> Logo" width="145" height="70" />
            </picture>
          </a>
        </div>
        <div class="header-menu">
          <div class="theme-menu-wrapper">
            <div id="menu-trigger" class="menu-trigger insomenu-bars" onclick="menuresponsive()"> <span></span> </div>
            <nav class="theme-menu">
              <ul>
                <li class="menu-item"> <a class="menu-link active" href="<?php echo $siteurl; ?>" onclick="menuresponsiveclose()">
                    Home
                  </a> </li>
                <li class="menu-item"> <a class="menu-link" href="about-us.php" onclick="menuresponsiveclose()">
                    About Us
                  </a> </li>
                <li class="menu-item"> <a class="menu-link" href="casestudy.php" onclick="menuresponsiveclose()">
                    Case Study
                  </a> </li>
                <li class="menu-item"> <a class="menu-link" href="products.php" onclick="menuresponsiveclose()">
                    Products
                  </a> </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="header-get-in-touch">
          <a href="contact-us.php">
            Get in touch
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-up-right">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M17 7l-10 10" />
              <path d="M8 7l9 0l0 9" />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <span class="top-line"></span>
  </header>
<?php } ?>

<?php if ($page == "casestudy") { ?>
  <header id="header-mian">
    <div class="columns is-vcentered is-mobile is-gapless row-header-2 border-bottom">
      <div class="column col-header-2">
        <a href="<?php echo $siteurl; ?>" class="theme-logo">
          <picture>
            <img src="<?php echo $imagesurl; ?>logo.svg" alt="<?php echo $sitename; ?> Logo" width="145" height="70" />
          </picture>
        </a>
      </div>
      <div class="column col-header-2">
        <div class="theme-menu-wrapper">
          <div id="menu-trigger" class="menu-trigger insomenu-bars" onclick="menuresponsive()"> <span></span> </div>
          <nav class="theme-menu-2">
            <ul>
              <li class="menu-item-2"> <a class="menu-link active" href="<?php echo $siteurl; ?>" onclick="menuresponsiveclose()">
                  Home
                </a> </li>
              <li class="menu-item-2"> <a class="menu-link" href="about-us.php" onclick="menuresponsiveclose()">
                  About Us
                </a> </li>
              <li class="menu-item-2"> <a class="menu-link" href="casestudy.php" onclick="menuresponsiveclose()">
                  Case Study
                </a> </li>
              <li class="menu-item-2"> <a class="menu-link" href="products.php" onclick="menuresponsiveclose()">
                  Products
                </a> </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="column col-header-2">
        <a href="btn btn-primary">Contact Us</a>
      </div>
    </div>
  </header>

<?php } ?>

<?php if ($page == "home") { ?>

  <?php if ($callingnumber != "") { ?>
    <a href="tel:<?php echo $callingnumber; ?>" class="call-btn">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#fff"
        stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
        <path
          d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
        </path>
      </svg>
    </a>
  <?php } ?>
  <?php /*/?>
<a href="javascript:void(0)" class="btn btn-primary sticky-btn-enquire" onclick="openForm('enquire')">Enquire Now</a>
<a href="javascript:void(0)" class="btn btn-primary sticky-btn-enquire sticky-brochure" onclick="openForm('brochure')">Download Brochure</a>
<?php /*/ ?>
  <?php /*/?>
<div id="register-modal" class="theme-modal">
<div class="theme-modal-background"></div>
<div class="theme-modal-card">
<button class="close" aria-label="close" onclick="closeForm()">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
<line x1="18" y1="6" x2="6" y2="18"></line>
<line x1="6" y1="6" x2="18" y2="18"></line>
</svg>
</button>
<div class="theme-modal-card-body">
<form class="nobottommargin" id="inquiry" name="scontactform" onsubmit="validateInquiryForm('inquiry')&disableButton()" action="<?php echo $siteurl; ?>include/inc-leads.php" method="post" novalidate autocomplete="off">
<h3 id="leadmodaltitle" class="modal-title">Enquire Now</h3>
<div class="columns is-multiline is-mobile is-vcentered row-register">
<div class="column is-12-mobile is-6-tablet is-6-desktop is-6-widescreen col-register">
<div class="col-form">
 <input type="text" class="form-control fname" name="fname" id="inquiry-fname" placeholder="First Name*" min-length="1" max-length="100" required />
 <label class="error-msg fnameerror" id="inquiryformerror-1"></label>
</div>
</div>
<div class="column is-12-mobile is-6-tablet is-6-desktop is-6-widescreen col-register">
<div class="col-form">
 <input type="text" class="form-control lname" name="lname" id="inquiry-lname" placeholder="Last Name*" min-length="1" max-length="100" required />
 <label class="error-msg" id="inquiryformerror-2"></label>
</div>
</div>
<div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-register">
<div class="col-form">
 <input type="text" class="form-control phone numeric custom-phone-control" name="phone" id="inquiry-phone" maxlength="10" placeholder="Mobile Number*" pattern="^[6-9]{6,14}$" required>
 <label class="error-msg" id="inquiryformerror-3"></label>
</div>
</div>
<div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-register">
<div class="col-form">
 <input type="text" class="form-control email" name="email" id="inquiry-email" placeholder="Email Address*" required>
 <label class="error-msg" id="inquiryformerror-4"></label>
</div>
</div>
<?php if ($captcha) { ?>
<div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen">
 <div class="col-form">
   <span class="captcha-sticky-query"><?= $math1 ?>+<?= $math2 ?>=</span>
   <input type="text" class="form-control captcha pl-80" name="captcha" id="inquiry-captcha" oninput="getvalue('inquiry',this.value)" placeholder="" required>
   <label class="error-msg" id="inquiryformerror-5"></label>
 </div>
 <input type="hidden" id="inquiry-query_result" name="query_result" value="<?= $captcharesult ?>">
</div>
<?php } ?>
<input type="hidden" name="formtype" id="formtype" value="enquire" />
<input type="hidden" name="tracker_code" value="<?php echo isset($_GET['tracker_code']) ? $_GET['tracker_code'] : ''; ?>">
<input type="hidden" name="gclid" value="<?php echo isset($_GET['gclid']) ? $_GET['gclid'] : ''; ?>">
<input type="hidden" name="site_url" value="<?= $url; ?>">
<input type="hidden" name="contact" value="">
<input type="hidden" name="random_val" value="<?php echo $random_val; ?>">
<div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-register">
<button class="btn btn-white full-width inquiry-submit" type="submit" id="inquiry-submit" name="submit" value="submit"><span>Submit</span></button>
</div>
</div>
</form>
</div>
</div>
</div>  <?php /*/ ?>


  <?php /*/?>
<div id="sticky-bottom-form" class="sticky-bottom-form clearfix">
<div class="sticky-bottom-form-inner">
<form class="nobottommargin clearfix" id="contactform-bottom" name="contactform-bottom" onsubmit="validateInquiryForm('inquiry1')&disableButton()" action="<?php echo $siteurl; ?>include/inc-leads.php" novalidate="novalidate" method="post">
<div class="row-form">
<div class="col-form-title" onclick="opencForm()">
<h3>Enquire Now</h3>
<span class="close-form"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
<line x1="18" y1="6" x2="6" y2="18"></line>
<line x1="6" y1="6" x2="18" y2="18"></line>
</svg></span>
</div>
<div class="col-form">
<input type="text" class="form-control fname" name="fname" id="inquiry1-fname" placeholder="First Name*" min-length="1" max-length="100" required />
<label class="error-msg" id="inquiry1formerror-1"></label>
</div>
<div class="col-form">
<input type="text" class="form-control fname" name="lname" id="inquiry1-lname" placeholder="Last Name*" min-length="1" max-length="100" required />
<label class="error-msg" id="inquiry1formerror-2"></label>
</div>
<div class="col-form">
<input type="text" class="form-control phone numeric custom-phone-control" name="phone" id="inquiry1-phone" maxlength="10" placeholder="Mobile Number*" pattern="^[6-9]{6,14}$" required>
<label class="error-msg" id="inquiry1formerror-3"></label>
</div>
<div class="col-form">
<input type="text" class="form-control email" name="email" id="inquiry1-email" placeholder="Email Address*" required>
<label class="error-msg" id="inquiry1formerror-4"></label>
</div>
<?php if ($captcha) { ?>
<div class="col-form">
<span class="captcha-query"><?= $math1 ?>+<?= $math2 ?>=</span>
<input type="text" class="form-control captcha pl-80" name="captcha" id="inquiry1-captcha" oninput="getvalue('inquiry1',this.value)" placeholder="" required>
<label class="error-msg" id="inquiry1formerror-5"></label>
</div>
<input type="hidden" id="inquiry1-query_result" name="query_result" value="<?= $captcharesult ?>">
<?php } ?>
<input type="hidden" name="formtype" id="formtype" value="contact" />
<input type="hidden" name="tracker_code" value="<?php echo isset($_GET['tracker_code']) ? $_GET['tracker_code'] : ''; ?>">
<input type="hidden" name="gclid" value="<?php echo isset($_GET['gclid']) ? $_GET['gclid'] : ''; ?>">
<input type="hidden" name="site_url" value="<?= $url; ?>">
<input type="hidden" name="contact" value="">
<input type="hidden" name="random_val" value="<?php echo $random_val; ?>">
<div class="col-form col-form-btn" id="submit">
<button id="inquiry1-submit" class="btn btn-white full-width inquiry-submit1" type="submit" value="submit"><span>Submit</span></button>
</div>
</div>
</form>
</div>
</div>
<?php /*/ ?>
<?php } ?>