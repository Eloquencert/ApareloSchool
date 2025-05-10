<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aparelo | Page with courses</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/page-video.css">
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
                    <li onclick="scrollToSection('javascript')">Javascript</li>
                    <li onclick="scrollToSection('html')">HTML and CSS</li>
                    <li onclick="scrollToSection('gid')">Gid</li>
                    <li onclick="scrollToSection('python')">Python</li>
                    <li onclick="scrollToSection('docker')">Docker</li>
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
                            Here you can choose video lessons on various programming languages!
                        </p>
                        <div class="line"></div>

                    </div>
                    <div class="block-2">
                        <img src="assets/images/Layer 2.svg">
                    </div>
                </div>
            </section>
        </div>
        <div class="ellipseToDown" onclick="scrollToSection('footer-link')"><img src="assets/images/Arrow 5.svg"></div>
        <section class="content-about-technology javascript">
            <div class="container container-page-video">
                <p class="title-14">
                    JavaScript course on YouTube
                </p>
                <div class="flex">
                    <div class="block-5">
                        <div class="block-6">
                            <div class="block-laptop">
                                <img src="assets/images/Group 1178.svg" id="img-laptop">
                            </div>
                            <div class="btn-play-1">
                                <a
                                    href="https://www.youtube.com/watch?v=RS4LF577fj4&list=PL7vq4D0vOpQbGerLS1pEgvPXSLUXgvFEo&ab_channel=%D0%A8%D0%BA%D0%BE%D0%BB%D0%B0%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D1%83%D0%B2%D0%B0%D0%BD%D0%BD%D1%8F"><img
                                        src="assets/images/Group 1193.svg" id="img-button-play"></a>
                                <p>Watch the video</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-of-language">
                        JavaScript is a programming language used to create interactive elements on web pages.
                        JavaScript allows you to create dynamic websites, animations, process user events, make requests
                        to servers, and much more. This language is very popular and is widely used in web development
                        along with HTML and CSS.
                    </div>
                </div>
            </div>
        </section>
        <img src="assets/images/Group 1179.png" id="background-ellipse-4">
        <section class="content-about-technology-3 html">
            <div class="container container-page-video-3">
                <p class="title-15">
                    HTML and CSS course on YouTube
                </p>
                <div class="flex">
                    <div class="text-of-language">
                        HTML (HyperText Markup Language) is a markup language used to create the structure of web pages.
                        HTML defines how elements on a page and blocks of content are arranged and displayed. It serves
                        as the foundation of web development, providing the necessary framework on which other
                        technologies, such as CSS and JavaScript, build to create fully functional and visually
                        appealing websites.
                    </div>
                    <div class="block-5">
                        <div class="block-6">
                            <div class="block-laptop">
                                <img src="assets/images/Group 1178.svg" id="img-laptop">
                            </div>
                            <div class="btn-play-2">
                                <a
                                    href="https://www.youtube.com/watch?v=ZY6uf5985PI&list=PL7vq4D0vOpQbLLkQTkJIV0rtkHtQ3Pses&ab_channel=%D0%A8%D0%BA%D0%BE%D0%BB%D0%B0%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D1%83%D0%B2%D0%B0%D0%BD%D0%BD%D1%8F"><img
                                        src="assets/images/Group 1193.svg" id="img-button-play"></a>
                                <p>Watch the video</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-about-technology-2 gid">
            <div class="container container-page-video-2">
                <p class="title-15">
                    Gid course on YouTube
                </p>
                <div class="flex">
                    <div class="block-5">
                        <div class="block-6">
                            <div class="block-laptop">
                                <img src="assets/images/Group 1178.svg" id="img-laptop">
                            </div>
                            <div class="btn-play-3">
                                <a
                                    href="https://www.youtube.com/watch?v=EklQZ_cH7Jc&list=PLenwk9TUJzJ6Vqurjtsg_PsCVirACH9SE&ab_channel=SavchukIT"><img
                                        src="assets/images/Group 1193.svg" id="img-button-play"></a>
                                <p>Watch the video</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-of-language">
                        A GID (Group Identifier) is a unique group identifier in Unix and Linux operating systems. A GID
                        is used to define user groups, which allows the operating system to control access to files and
                        resources for multiple users who may belong to one or more groups. This mechanism enhances
                        security and simplifies the management of permissions across different users within the system.
                    </div>
                </div>
            </div>
        </section>
        <img src="assets/images/Group 1179.png" id="background-ellipse-5">
        <section class="content-about-technology-3 python">
            <div class="container container-page-video-3">
                <p class="title-15">
                    Phyton course on YouTube
                </p>
                <div class="flex">
                    <div class="text-of-language">
                        Python is a high-level, general-purpose programming language designed to ensure code is simple
                        and readable. It is one of the most popular programming languages due to its versatility and
                        ease of use. Python is widely used in various fields such as web development, scientific
                        computing, and machine learning.
                    </div>
                    <div class="block-5">
                        <div class="block-6">
                            <div class="block-laptop">
                                <img src="assets/images/Group 1178.svg" id="img-laptop">
                            </div>
                            <div class="btn-play-4">
                                <a
                                    href="https://www.youtube.com/watch?v=IyHTJTLqkCA&list=PL7vq4D0vOpQb-nious5dTzUF9GEMp6jiL&ab_channel=%D0%A8%D0%BA%D0%BE%D0%BB%D0%B0%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D1%83%D0%B2%D0%B0%D0%BD%D0%BD%D1%8F"><img
                                        src="assets/images/Group 1193.svg" id="img-button-play"></a>
                                <p>Watch the video</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-about-technology-2 docker">
            <div class="container container-page-video-2">
                <p class="title-15">
                    Docker course on YouTube
                </p>
                <div class="flex">
                    <div class="block-5">
                        <div class="block-6">
                            <div class="block-laptop">
                                <img src="assets/images/Group 1178.svg" id="img-laptop">
                            </div>
                            <div class="btn-play-5">
                                <a
                                    href="https://www.youtube.com/watch?v=dNS61T4MmlM&list=PL0lO_mIqDDFX1c0JHogP5YuZdOVawoepS&ab_channel=%D0%93%D0%BE%D1%88%D0%B0%D0%94%D1%83%D0%B4%D0%B0%D1%80%D1%8C"><img
                                        src="assets/images/Group 1193.svg" id="img-button-play"></a>
                                <p>Watch the video</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-of-language">
                        Docker is a containerization platform that allows developers to create, test, and deploy
                        applications as containers. A container is a lightweight, isolated environment that includes all
                        the necessary components for an application to run: code, libraries, dependencies, and system
                        settings. This ensures consistency across different development and production environments.
                    </div>
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
                            Contact us: <br>
                            d.zhukovskiy.work@gmail.com
                        </div>
                    </div>
                    <div class="block-2">
                        <ul>
                            <li onclick="scrollToSection('javascript')">JavaScript</li>
                            <li onclick="scrollToSection('html')">HTML and CSS</li>
                            <li onclick="scrollToSection('gid')">Gid</li>
                            <li onclick="scrollToSection('python')">Python</li>
                            <li onclick="scrollToSection('docker')">Docker</li>
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