<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aparelo | Page with courses</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/page-video.css">
    <style>
        .link-2 {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            border-radius: 34px;
            background: rgb(241, 85, 37);
            width: 90px;
            height: 30px;
            color: rgb(255, 255, 255);
            font-family: Montserrat;
            font-size: 16px;
            font-weight: 300;
            line-height: 104.4%;
            letter-spacing: 0%;
            text-align: left;
            cursor: pointer;
        }

        .popup-2 {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            z-index: 1000;
            border-radius: 30px;
            background: rgb(255, 255, 255);
            width: 200px;
            height: 250px;
        }

        .close-btn {
            position: absolute;
            top: 8px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
            font-weight: 500;
            color: rgb(188, 188, 188);
        }

        h3 {
            color: rgb(34, 37, 59);
            font-size: 20px;
            font-weight: 400;
            line-height: 32px;
            letter-spacing: 0%;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 10px;
        }

        .popup-2 ul {
            margin: 15px;
        }

        .popup-2 ul li {
            color: rgb(34, 37, 59);
            font-size: 16px;
            font-weight: 400;
            margin-bottom: 15px;
            cursor: pointer;
        }

        .popup-2 ul li+li {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <script>
        function togglePopup(event) {
            if (!event.currentTarget.classList.contains('third-2')) {
                return;
            }
            const popup = document.getElementById('popup-3');
            const rect = event.currentTarget.getBoundingClientRect();
            popup.style.top = `${rect.bottom + window.scrollY}px`;
            popup.style.left = `${rect.left + window.scrollX}px`;
            popup.style.display = popup.style.display === 'none' ? 'block' : 'none';
        }
        function closePopup() {
            const popup = document.getElementById('popup-3');
            popup.style.display = 'none';
        }
    </script>
    <div class="popup-2" id="popup-3">
        <h3>Your Profile! :3</h3>
        <ul>
            <a href="profile.php"><li>Profile</li></a>
            <a href="index.php">
                <li>Log out</li>
            </a>
        </ul>
        <span class="close-btn" onclick="closePopup()">✖</span>
    </div>
    <header class="header">
        <div class="container header_container">
            <div class="logo">
                <a href="indexAfterSignIn.php">Aparelo</a>
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
            <div class="link-2 third-2" onclick="togglePopup(event)">
                <img src="assets/images/My.svg">
                profile
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
        <section class="content-about-technology-3 phyton">
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
</body>

</html>