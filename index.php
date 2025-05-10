<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aparelo | Main page</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <header class="header">
        <div class="container header_container">
            <div class="logo">
                <a href="index.php">Aparelo</a>
            </div>
            <nav class="header_nav">
                <ul>
                    <li onclick="scrollToSection('cont-1')">What you will learn</li>
                    <li onclick="scrollToSection('how-learn')">Learning process</li>
                    <li onclick="scrollToSection('price-courses')">Cost </li>
                    <li onclick="scrollToSection('footer-link')">Contacts</li>
                    <li style="font-weight: 500"><a href="page-video.php">Courses</a></li>
                </ul>
            </nav>
            <div class="link third">
                <a href="sign-up-in-page.php" class="link_btn">Sign in</a>
            </div>
        </div>
    </header>
    <main>
        <img src="assets/images/Group 132.png" id="background-ellipse-1">
        <div class="container">
            <section class="main-window">
                <div class="main-content">
                    <div class="block-1">
                        <p class="title-1">
                            School of <span>{</span><i>Programming</i><span>}</span> for those who need real skills, not
                            just a certificate!
                        </p>
                        <div class="line"></div>
                        <p class="text-1">
                            Take the test to get access to free introductory lessons
                        </p>
                        <button>
                            <a href="sign-up-in-page.php">
                                Pass the test
                                <img src="assets/images/Group 2.svg" id="vector-arrow-2">
                            </a>
                        </button>
                    </div>
                    <div class="block-2">
                        <img src="assets/images/Layer 2.svg">
                    </div>
                </div>
            </section>
        </div>
        <div class="ellipseToDown" onclick="scrollToSection('footer-link')"><img src="assets/images/Arrow 5.svg"></div>
        <section class="content-about-technology">
            <div class="container cont-1">
                <p class="title-1">
                    What technologies you will learn:
                </p>
                <div class="block-1" data-aos="fade-right">
                    <div class="block_image">
                        <img src="assets/images/Group 1175.svg">
                    </div>
                    <div class="block_content">
                        <div class="block-line-1">
                            <div>Python programming language</div>
                            <div>Javascript</div>
                        </div>
                        <div class="block-line-2">
                            <div>Databases</div>
                            <div>Flask and Django frameworks</div>
                        </div>
                        <div class="block-line-3">
                            <div>HTML та CSS</div>
                            <div>Docker</div>
                            <div>Git</div>
                        </div>
                        <p class="block-content">
                            This is the minimum required for a modern backend developer
                        </p>
                    </div>
                </div>
            </div>
            <div class="container cont-2">
                <p class="title-3">
                    Studying at Aparelo is convenient and effective
                </p>
                <div class="block-2">
                    <div class="block-3">
                        <div class="blocks" data-aos="zoom-in">
                            <img src="assets/images/svg-gobbler 1.svg">
                            <p class="title-4">
                                A huge amount of practice
                            </p>
                            <p>
                                More than 500 independent tasks and 20 full-fledged large projects
                            </p>
                        </div>
                        <div class="blocks" data-aos="zoom-in">
                            <img src="assets/images/svg-gobbler 3.svg">
                            <p class="title-5">
                                Modern teaching methods
                            </p>
                            <p>
                                Spiral learning: immersing ourselves in the material gradually, turn by turn
                            </p>
                        </div>
                        <div class="blocks" data-aos="zoom-in">
                            <img src="assets/images/Group 1182.svg">
                            <p class="title-6">
                                Simple and clear presentation
                            </p>
                            <p>
                                Instead of clever terms, here are examples from the real world
                            </p>
                        </div>
                        <div class="blocks" data-aos="zoom-in">
                            <img src="assets/images/Group 1176.svg">
                            <p class="title-7">
                                Flexible class schedule
                            </p>
                            <p>
                                Study at any time at your own pace
                            </p>
                        </div>
                    </div>
                    <div class="block-4">
                        <div class="blocks" data-aos="zoom-in">
                            <img src="assets/images/Group 1195.svg">
                            <p class="title-8">
                                Direct connection with experienced programmers
                            </p>
                            <p>
                                Ask questions and send your code for review
                            </p>
                        </div>
                        <div class="blocks" data-aos="zoom-in">
                            <img src="assets/images/svg-gobbler (5) 1.svg">
                            <p class="title-9">
                                Payment in small instalments
                            </p>
                            <p>
                                Pay only for the material you are currently studying, not for the entire course at once
                            </p>
                        </div>
                        <div class="blocks" data-aos="zoom-in">
                            <img src="assets/images/svg-gobbler (6) 1.svg">
                            <p class="title-10">
                                Quick and easy turning
                            </p>
                            <p>
                                If you change your mind, we will refund your money in 3 business days
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <img src="assets/images/Group 1179.png" id="background-ellipse-2">
        <section class="how-learn">
            <div class="container">
                <p class="title-11">
                    What is the learning process at Aparelo?
                </p>
                <p>
                    Learning should be comfortable. That is why we have developed our own platform for learning
                    programming. On it, you can not only learn the theory but also run ready-made examples and even
                    write your own code.
                </p>
                <div class="block-5">
                    <div class="block-6">
                        <div class="block-laptop">
                            <img src="assets/images/Group 1178.svg" id="img-laptop">
                        </div>
                        <div class="btn-play">
                            <a href="page-video.php"><img src="assets/images/Group 1193.svg" id="img-button-play"></a>
                            <p>Watch the video</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="other">
            <div class="container courses">
                <div class="txt" data-aos="fade-right">
                    <p class="number">
                        01
                    </p>
                    <p class="title-12">
                        All material is divided into small lessons
                    </p>
                    <p>
                        Theory and practice are presented in small portions. This makes it easier for you to absorb new
                        knowledge.
                    </p>
                </div>
                <div class="line-1"></div>
                <div class="txt" data-aos="fade-right">
                    <p class="number">
                        02
                    </p>
                    <p class="title-12">
                        Learning through practice
                    </p>
                    <p>
                        Everything you have learned, you immediately begin to put into practice. You immediately see the
                        results of your work.
                    </p>
                </div>
                <div class="line-2"></div>
                <div class="txt" data-aos="fade-right">
                    <p class="number">
                        03
                    </p>
                    <p class="title-12">
                        No time limits
                    </p>
                    <p class="text-3">
                        You can combine your studies with work and other activities. You don't have to ask for a study
                        leave if you have to take a break.
                    </p>
                </div>
            </div>
            <div class="block-support">
                <div class="container block-content-1" data-aos="fade-right">
                    <div class="block-image-1">
                        <img src="assets/images/Group 1231.svg">
                    </div>
                    <div class="block-text-1">
                        <div class="block-content-3">
                            <p class="title-13">
                                Help and support
                            </p>
                            <p>
                                If you have any difficulties in the process of learning, you can always ask your mentor
                                a question. Every few lessons, you will receive a large task that you will have to
                                submit to a code reviewer. The reviewer will carefully examine your code, find errors,
                                and help you become better.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container block-content-2" data-aos="fade-left">
                    <div class="block-text-2">
                        <div class="block-content-4">
                            <p class="title-13">
                                Teaching methods
                            </p>
                            <p>
                                All training material is structured according to the principle of spiral learning. At
                                first, you get the basic knowledge, and then at each turn of the spiral, you delve
                                deeper into the topics you've learned, bringing your understanding to perfection. This
                                approach simplifies learning and ensures that you don't miss anything important.
                            </p>
                        </div>
                    </div>
                    <div class="block-image-2">
                        <img src="assets/images/Group 1230.svg">
                    </div>
                </div>
            </div>
        </section>
        <img src="assets/images/Group 1179.png" id="background-ellipse-3">
        <section class="price-courses">
            <div class="container">
                <p class="title-13">
                    Cost of training
                </p>
                <div class="block-text-price">
                    <div class="blocks-icons-1">
                        <img src="assets/images/svg-gobbler 2.svg">
                        <p class="text-1">
                            The entire course is divided into several blocks. With a phased payment, you pay only for
                            the block you are currently taking.
                        </p>
                    </div>
                    <div class="blocks-icons-2">
                        <img src="assets/images/svg-gobbler (5) 1.svg">
                        <p class="text-2">
                            You can pay for any of the blocks in installments
                        </p>
                    </div>
                    <div class="blocks-icons-3">
                        <img src="assets/images/svg-gobbler (6) 1 (1).svg">
                        <p class="text-3">
                            If you change your mind about studying, you can make a refund at any time. We refund your
                            money in 3 business days.
                        </p>
                    </div>
                </div>
                <div class="table-price" data-aos="zoom-in">
                    <div>
                        <table>
                            <thead>
                                <tr>
                                    <th><b>Block</b></th>
                                    <th><b>Cost (UAH)</b></th>
                                    <th><b>Estimated training time (months)</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Introduction to programming</td>
                                    <td>Free</td>
                                    <td>0.5</td>
                                </tr>
                                <tr>
                                    <td>Python programming basics</td>
                                    <td>4 500</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Python, advanced level</td>
                                    <td>7 000</td>
                                    <td>2.5</td>
                                </tr>
                                <tr>
                                    <td>Networks + Flask framework</td>
                                    <td>7 000</td>
                                    <td>2.5</td>
                                </tr>
                                <tr>
                                    <td>Databases</td>
                                    <td>7 000</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Django framework</td>
                                    <td>7 000</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Development of the pet-project</td>
                                    <td>4 500</td>
                                    <td>1.5</td>
                                </tr>
                                <tr>
                                    <td><b>Total</b></td>
                                    <td><b>37 000</b></td>
                                    <td><b>12</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <p class="text-gray">
                    * if you devote about 20 hours a week to classes
                </p>
                <div class="block-emergency">
                    <img src="assets/images/svg-gobbler (1) 2.svg">
                    <p>
                        All blocks are taken strictly in order. You cannot skip a unit or start from the middle, even if
                        you think you already know some of the material. This is the only way we can guarantee that you
                        will receive all the knowledge provided by the curriculum.
                    </p>
                    <button>
                        <a href="page-video.php">
                            Start studying
                            <img src="assets/images/Group 2.svg">
                        </a>
                    </button>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer-link container">
                <div class="footer-link-2">
                    <div class="block-1">
                        <div class="footer-logo">
                            Aparelo
                            <p>School <br> programming</p>
                        </div>
                        <div class="footer-link-icon">
                            <a href="https://www.instagram.com/_eloquencert_?igsh=MWlnY3k0ZGU0Y3FlaA=="><img
                                    src="assets/images/Group 1189.svg"></a>
                            <a href="https://t.me/eloquencert"><img src="assets/images/Group 1190.svg"></a>
                            <a href="https://github.com/Eloquencert"><img src="assets/images/Group 1191.svg"></a>
                            <a href="https://www.linkedin.com/in/danyil-zhukovskiy-5598a031b/"><img
                                    src="assets/images/Group 1192.svg"></a>
                        </div>
                        <div class="footer-gmail">
                            Contact us<br>
                            d.zhukovskiy.work@gmail.com
                        </div>
                    </div>
                    <div class="block-2">
                        <ul>
                            <li onclick="scrollToSection('cont-1')">What you will learn</li>
                            <li onclick="scrollToSection('how-learn')">The learning process</li>
                            <li onclick="scrollToSection('price-courses')">Cost</li>
                            <li onclick="scrollToSection('footer-link')">Contacts</li>
                            <a href="sign-up-in-page.php">
                                <li>Sign Up</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="line-4"></div>
                <div class="footer-link-3">
                    <p class="gray">
                        © 2024 Aparelo — All rights reserved
                    </p>
                    <p class="orange-1">
                        <a href="">User agreement</a>
                    </p>
                    <p class="orange-2">
                        <a href="">Privacy policy</a>
                    </p>
                </div>
            </div>
        </footer>
    </main>
    <script src="assets/js/index.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init(
        {
        offset: 200,
        delay: 100,
        duration: 1000,
      }
      );
    </script>
</body>

</html>