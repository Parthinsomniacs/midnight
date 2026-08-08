<?php require_once("inc-global.php"); ?>
<?php
$page = "casestudy";
$pagetype = "corporate";
$pagename = "Case Study";
/**JS & CSS**/
$onepagemenu = "yes";
$slider = "no";
$sliderautoscroll = "no";
$swiperjs = "yes";
$popup = "no";
$counter = "no";
$accordian = "no";
$utm = "yes";

$caseStudies = [
    ['image' => 'ift-india.webp', 'title' => 'IFT Enpower Hackathon', 'desc' => 'India\'s future tycoons is basically designed for hackathon competitions taking place in India. IFT is a SaaS based platform which helps organisations to conduct any kind of online competitions, collect submissions for it and announce results for the same.', 'tags' => ['UI-UX', 'Laravel', 'Mysql'], 'link' => '#'],
    ['image' => 'bharat-digital-class.webp', 'title' => 'Bharat Digital Class', 'desc' => 'During covid times and even now, all of the education institutions are searching for alternatives to offline education and we too were aiming to solve the same inconvenient problem.', 'tags' => ['Android', 'Laravel', 'Mysql'], 'link' => '#'],
    ['image' => 'patel-brothers.webp', 'title' => 'Patel Brothers', 'desc' => '“Patel Brothers” is a very well known grocery and gourmet seller in Bhavnagar. They started their journey with selling grains which now has augmented to selling pulses, dry fruits and almost all kinds of spices and condiments too, at their outlets in the city.', 'tags' => ['Flutter', 'Laravel', 'Mysql'], 'link' => '#'],
    ['image' => 'city-children-hospital.webp', 'title' => 'City Children Hospital', 'desc' => '“City Children Hospital” is a non-profit organisation that serves as a primary care provider for low-income families. They provide high-quality medical care to children and offer a range of specialised services for children with complex medical needs at bare-minimum expense.', 'tags' => ['UI-UX', ' React native', 'Mysql'], 'link' => '#'],
    ['image' => 'city-dental-hospital.webp', 'title' => 'City Dental Hospital', 'desc' => 'As the world is moving towards digitalization at the fastest pace ever possible, Bhavnagar’s best dental care hospital “City Dental Care” wanted to join the race too with the aim to make more smiles brighter...', 'tags' => ['UI-UX', 'React native', 'Mysql'], 'link' => '#'],
    ['image' => 'dr-neeta.webp', 'title' => 'Dr Neetas Homeo Health Care', 'desc' => '“Dr. Neeta’s Homeo Health Care” is a homeopathic medicine facility specialising in holistic and natural treatments for a range of health conditions.', 'tags' => ['UI-UX', 'React native', 'Mysql'], 'link' => '#'],
    ['image' => 'education-icon-awards.webp', 'title' => 'Education Icon Awards', 'desc' => 'Education icon awards also known as EIA is a platform envisioned and created to recognize and honour the Indian Education System along with its contributors in different areas of education.', 'tags' => ['UI-UX', 'React native', 'Mysql'], 'link' => '#'],
    ['image' => 'icce.webp', 'title' => 'I Can Crack Exam', 'desc' => 'The client wanted to have an e-learning platform from where they can teach students and students to get access and prepare fiercely for all the government exams.', 'tags' => ['UI-UX', 'React native', 'Mysql'], 'link' => '#'],
    ['image' => 'inc-karnataka.webp', 'title' => 'INC Karnataka', 'desc' => 'INC Karnataka is a political party in the southern part of India, in the state of Karnataka. The party was seeking to enhance its digital presence by building a new website in local language...', 'tags' => ['UI-UX', 'React native', 'Mysql'], 'link' => '#'],
    ['image' => 'om-education.webp', 'title' => 'Om Education', 'desc' => 'Om Educon is an ISO certified leading education consultancy which directs students to their goals in the most efficient and quick manner possible.', 'tags' => ['UI-UX', 'React native', 'Mysql'], 'link' => '#'],
    ['image' => 'shantam-prayosha.webp', 'title' => 'Shantam Prayosha Hospital', 'desc' => 'Shantam Prayosha Hospital provides a range of medical services in the gynaecology department including diagnostics, surgery, critical care and emergency care.', 'tags' => ['UI-UX', 'React native', 'Mysql'], 'link' => '#'],
    ['image' => 'shree-inn-jafarabad.webp', 'title' => 'Hotel Shree INN - Jafarabad', 'desc' => 'Hotel Shree Inn is a mid-range hotel located in the town of Jafrabad, Gujarat, India. The hotel offers a range of amenities for both business and leisure travellers, including comfortable rooms and suites, a restaurant, conference hall, and banquet hall.', 'tags' => ['UI-UX', 'React native', 'Mysql'], 'link' => '#'],
    ['image' => 'vishwakarma-ortho-hospital.webp', 'title' => 'Vishwakarma Orthopedic Hospital', 'desc' => 'Vishwakarma Orthopedic Hospital is a leading healthcare provider in Bhavnagar, Gujarat, that specialises in orthopedic care offering a wide range of services, including spine surgery, joint replacement surgery, trauma care and rehabilitation.', 'tags' => ['UI-UX', 'React native', 'Mysql'], 'link' => '#'],
    ['image' => 'bynry.webp', 'title' => 'Bynry Technologies', 'desc' => 'lorem', 'tags' => ['UI-UX', 'React native', 'Mysql'], 'link' => '#'],
    ['image' => 'blisshotel.webp', 'title' => 'Hotel Bliss', 'desc' => 'Hotel Bliss one of the best hotels located in the heart of the Bhavnagar city, close to the main market place and the different means of transport.', 'tags' => ['UI-UX', 'React native', 'Mysql'], 'link' => '#'],
    ['image' => 'gopikachatkaadelaide.webp', 'title' => 'Gopi Ka Chatka', 'desc' => 'Gopi ka Chatka is an online platform that offers a wide range of Indian snacks, sweets and savouries. The website was created with the desire to bring the authentic taste of Indian street food to people’s homes.', 'tags' => ['UI-UX', 'React native', 'Mysql'], 'link' => '#'],
    ['image' => 'mishi-marine-solutions.webp', 'title' => 'Mishi Marine Solutions', 'desc' => 'Mishi Marine Solutions is a marine engineering company that provides a range of solutions in logistics and transport services, ship supplies and provision managing and servicing ships providing support and supplies to the maritime industry. ', 'tags' => ['UI-UX', 'React native', 'Mysql'], 'link' => '#'],
    ['image' => 'phoenixmarine.webp', 'title' => 'Phoenix Marine Services', 'desc' => 'Phoenix Marine Services is a marine transportation and logistic company providing marine consultancy and crew management services including but not limited to vessel chartering... ', 'tags' => ['UI-UX', 'React native', 'Mysql'], 'link' => '#'],
    ['image' => 'dynageeksllc.webp', 'title' => 'Dynageeks LLC', 'desc' => 'Dynageeks LLC is a software development company that specialises in providing custom software solutions to businesses of all types and sizes seeking their expertise. ', 'tags' => ['UI-UX', 'React native', 'Mysql'], 'link' => '#'],
];
?>

<!DOCTYPE html>
<html id="<?php echo $page; ?>" dir="ltr" lang="en-US">

<head>
    <?php require_once $head; ?>
</head>

<body class="body-line">
    <?php echo $block_body_start; ?>
    <?php require_once $header; ?>

    <section class="section-casestudy">
        <div class="container">
            <div class="casestudy-wrapper">
                <div class="section-title">
                    <h2 class="fw-400 reveal-text">How we <br><span class="font-instrument">execute? </span></h2>
                </div>
                <div class="casestudy-block">
                    <div class="columns is-multiline row-case-study">
                        <div class="column is-12-mobile is-2-tablet is-2-desktop is-2-widescreen col-case-study">
                            <button class="btn btn-case-study">Our Case Study</button>
                        </div>
                        <div class="column is-12-mobile is-10-tablet is-10-desktop is-10-widescreen col-case-study">
                            <div class="case-study-inner">
                                <div class="case-study-title-img">
                                    <picture>
                                        <img src="<?php echo $imagesurl ?>case-study/case-study.webp" alt="Our Case Study" width="179" height="115">
                                    </picture>
                                </div>
                                <div class="case-study-desc">
                                    <h5>We'd love to discuss your venture, and potential collaborations with Us. <span>Let's build something great together.</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-all-case-study pt-0">
        <div class="container">
            <?php foreach ($caseStudies as $study) { ?>
                <div class="case-study-block fade-anim">
                    <div class="columns is-multiline row-cas-study-block is-variable is-4 is-vcentered">
                        <div class="column is-12-mobile is-6-tablet is-6-desktop is-5-widescreen col-case-study-block">
                            <div class="case-study-block-img">
                                <picture>
                                    <img src="<?php echo $imagesurl ?>case-study/all-case-study/<?php echo $study['image']; ?>" alt="<?php echo $study['title']; ?>" width="525" height="500">
                                </picture>
                            </div>
                        </div>
                        <div class="column is-12-mobile is-6-tablet is-6-desktop is-7-widescreen col-case-study-block">
                            <div class="all-case-study-wrapper">
                                <h3><?php echo $study['title']; ?></h3>
                                <h6><?php echo $study['desc']; ?></h6>
                                <ul class="list-point">
                                    <?php foreach ($study['tags'] as $tag) { ?>
                                        <li><?php echo $tag; ?></li>
                                    <?php } ?>
                                </ul>
                                <a href="<?php echo $study['link']; ?>" class="btn btn-black">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <a href="#" class="btn theme-btn btn-learn-more full-width is-capitalized">
                Will you be Next?
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-up-right">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M17 7l-10 10"></path>
                    <path d="M8 7l9 0l0 9"></path>
                </svg>
            </a>
        </div>
    </section>

    <?php require_once $footer; ?>
    <?php require_once $footscripts; ?>
    <?php echo $block_body_end; ?>

    <script>
        // GSAP Fade Animation 
        let fadeArray_items = document.querySelectorAll(".fade-anim");
        if (fadeArray_items.length > 0) {
            const fadeArray = gsap.utils.toArray(".fade-anim")
            fadeArray.forEach((item, i) => {
                var fade_direction = "bottom"
                var onscroll_value = 1
                var duration_value = 1.15
                var fade_offset = 50
                var delay_value = 0.15
                var ease_value = "power2.out"
                if (item.getAttribute("data-offset")) {
                    fade_offset = item.getAttribute("data-offset");
                }
                if (item.getAttribute("data-duration")) {
                    duration_value = item.getAttribute("data-duration");
                }
                if (item.getAttribute("data-direction")) {
                    fade_direction = item.getAttribute("data-direction");
                }
                if (item.getAttribute("data-on-scroll")) {
                    onscroll_value = item.getAttribute("data-on-scroll");
                }
                if (item.getAttribute("data-delay")) {
                    delay_value = item.getAttribute("data-delay");
                }
                if (item.getAttribute("data-ease")) {
                    ease_value = item.getAttribute("data-ease");
                }
                let animation_settings = {
                    opacity: 0,
                    ease: ease_value,
                    duration: duration_value,
                    delay: delay_value,
                }
                if (fade_direction == "top") {
                    animation_settings['y'] = -fade_offset
                }
                if (fade_direction == "left") {
                    animation_settings['x'] = -fade_offset;
                }
                if (fade_direction == "bottom") {
                    animation_settings['y'] = fade_offset;
                }
                if (fade_direction == "right") {
                    animation_settings['x'] = fade_offset;
                }
                if (onscroll_value == 1) {
                    animation_settings['scrollTrigger'] = {
                        trigger: item,
                        start: 'top 85%',
                    }
                }
                gsap.from(item, animation_settings);
            })
        }
    </script>
</body>

</html>