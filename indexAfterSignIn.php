<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aparelo | Main page</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/test.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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

        .popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #fff;
            z-index: 1000;
            border-radius: 30px;
            background: rgb(255, 255, 255);
            width: 740px;
            height: 340px;
        }

        .popup-overlay {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .popup-overlay-2 {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 999;
        }

        .popup-overlay-3 {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 999;
        }

        .popup-overlay-4 {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 999;
        }

        .popup-overlay-5 {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 999;
        }

        h2 {
            color: rgb(34, 37, 59);
            font-family: Montserrat;
            font-size: 36px;
            font-weight: 400;
            line-height: 32px;
            letter-spacing: 0%;
            text-align: center;
            padding-top: 40px;
        }

        h4 {
            color: rgb(34, 37, 59);
            font-size: 30px;
            font-weight: 400;
            line-height: 32px;
            letter-spacing: 0%;
            text-align: center;
            padding-top: 20px;
        }

        .close {
            float: right;
            font-weight: 500;
            color: rgb(188, 188, 188);
            font-size: 20px;
        }

        .popup-text {
            padding-top: 35px;
            width: 515px;
            margin: 0 auto;
        }

        #next-btn-5 {
            margin-top: 30px;
            width: 230px;
            height: 50px;
            border-radius: 82px;
            background: rgb(241, 85, 37);
            color: rgb(255, 255, 255);
            font-size: 20px;
            font-weight: 400;
            letter-spacing: -3%;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        #next-btn-5:active {
            background: rgb(228, 79, 34);
            box-shadow: 1px 1px 5px rgb(87, 87, 87);
            transform: scale(0.98);
        }

        #next-btn-5 img {
            width: 20px;
            margin-left: 9px;
            padding-top: 2px;
        }

        #next-btn-4 {
            margin-top: 30px;
            margin-left: 26%;
            width: 320px;
            height: 70px;
            border-radius: 82px;
            background: rgb(241, 85, 37);
            color: rgb(255, 255, 255);
            font-size: 20px;
            font-weight: 400;
            line-height: 96.69%;
            letter-spacing: -3%;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        #next-btn-4:active {
            background: rgb(228, 79, 34);
            box-shadow: 1px 1px 5px rgb(87, 87, 87);
            transform: scale(0.98);
        }

        #next-btn-4 img {
            width: 20px;
            margin-left: 9px;
            padding-top: 2px;
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
            width: 160px;
            height: 230px;
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
            font-size: 19px;
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
            font-size: 17px;
            font-weight: 400;
            margin-top: 30px;
            cursor: pointer;
            transition: 0.6s ease;
        }

        .popup-2 ul li+li {
            margin-bottom: 15px;
        }

        .popup-2 ul li:hover {
            font-weight: 500;
        }

        .popup-text-2 {
            padding-top: 10px;
            width: 650px;
            margin: 0 auto;
            text-align: center;
        }

        label {
            color: rgb(34, 37, 59);
            font-size: 14px;
            font-weight: 400;
        }

        #flex {
            display: flex;
            justify-content: space-evenly;
        }
    </style>
</head>

<body>
    <div class="popup-overlay" id="popup-overlay">
        <div class="popup" id="popup">
            <form method="post">
                <button type="button" onclick="hideFirstPopup()" class="close">X</button>
                <h2>Description of the test</h2>
                <p class="popup-text">
                    The test consists of 4 tasks for logical thinking and other skills necessary for a programmer. The
                    tasks are not the easiest. But in no case do not choose answers at random. If you cannot give the
                    correct answer, select "I don't know".
                </p>
                <button type="button" id="next-btn-4" onclick="showSecondPopup()">
                    Start the test
                    <img src="assets/images/Group 2.svg">
                </button>
            </form>
        </div>
    </div>
    <div class="popup-overlay-2" id="popup-overlay-2">
        <div class="popup" id="popup-2">
            <form method="post">
                <button type="button" onclick="hideSecondPopup()" class="close">X</button>
                <h4>Question №1</h4>
                <p class="popup-text-2">
                    Which of the following properties is most often used to stop further execution of event handlers in
                    JavaScript?
                </p>
                <div class="dpx">
                    <div class='py'>
                        <label>
                            <input type="radio" class="option-input radio" name="example" value="preventDefault()"
                                checked />
                            <p>preventDefault()</p>
                        </label>
                        <label>
                            <input type="radio" class="option-input radio" name="example" value="stopPropagation()" />
                            <p>stopPropagation()</p>
                        </label>
                    </div>
                    <div class="py">
                        <label>
                            <input type="radio" class="option-input radio" name="example"
                                value="stopImmediatePropagation()" />
                            <p>stopImmediatePropagation()</p>
                        </label>
                        <label>
                            <input type="radio" class="option-input radio" name="example" value="cancelBubble" />
                            <p>cancelBubble</p>
                        </label>
                    </div>
                </div>
                <div id="flex">
                    <button type="button" id="next-btn-5" class="btn-send-answer" onclick="sendAnswer(1, 'popup-2')">
                        Send answer
                        <img src="assets/images/Group 2.svg">
                    </button>
                    <button type="button" id="next-btn-5" onclick="showThirtyPopup()">
                        Continue
                        <img src="assets/images/Group 2.svg">
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="popup-overlay-3" id="popup-overlay-3">
        <div class="popup" id="popup-3">
            <form method="post">
                <button type="button" onclick="hideThirtyPopup()" class="close">X</button>
                <h4>Question №2</h4>
                <p class="popup-text-2">
                    Which of the following JavaScript functions is used to deeply copy an object?
                </p>
                <div class="dpx">
                    <div class='py'>
                        <label>
                            <input type="radio" class="option-input radio" name="example" value="Object.assign()"
                                checked />
                            <p>Object.assign()</p>
                        </label>
                        <label>
                            <input type="radio" class="option-input radio" name="example"
                                value="JSON.parse(JSON.stringify())" />
                            <p>JSON.parse(JSON.stringify())</p>
                        </label>
                    </div>
                    <div class="py">
                        <label>
                            <input type="radio" class="option-input radio" name="example" value="Object.clone()" />
                            <p>Object.clone()</p>
                        </label>
                        <label>
                            <input type="radio" class="option-input radio" name="example" value="Object.create()" />
                            <p>Object.create()</p>
                        </label>
                    </div>
                </div>
                <div id="flex">
                    <button type="button" id="next-btn-5" class="btn-send-answer" onclick="sendAnswer(2, 'popup-3')">
                        Send answer
                        <img src="assets/images/Group 2.svg">
                    </button>
                    <button type="button" id="next-btn-5" onclick="showFourthPopup()">
                        Continue
                        <img src="assets/images/Group 2.svg">
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="popup-overlay-4" id="popup-overlay-4">
        <div class="popup" id="popup-4">
            <form method="post">
                <button type="button" onclick="hideFourthPopup()" class="close">X</button>
                <h4>Question №3</h4>
                <p class="popup-text-2">
                    What is the result of executing the following code?
                    <br>
                    let x = 5;
                    x = x || 10;
                </p>
                <div class="dpx">
                    <div class='py'>
                        <label>
                            <input type="radio" class="option-input radio" name="example" value="5" checked />
                            <p>5</p>
                        </label>
                        <label>
                            <input type="radio" class="option-input radio" name="example" value="10" />
                            <p>10</p>
                        </label>
                    </div>
                    <div class="py">
                        <label>
                            <input type="radio" class="option-input radio" name="example" value="undefined" />
                            <p>undefined</p>
                        </label>
                        <label>
                            <input type="radio" class="option-input radio" name="example" value="Will throw an error" />
                            <p>Will throw an error</p>
                        </label>
                    </div>
                </div>
                <div id="flex">
                    <button type="button" id="next-btn-5" class="btn-send-answer" onclick="sendAnswer(3, 'popup-4')">
                        Send answer
                        <img src="assets/images/Group 2.svg">
                    </button>
                    <button type="button" id="next-btn-5" onclick="showFivePopup()">
                        Continue
                        <img src="assets/images/Group 2.svg">
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="popup-overlay-5" id="popup-overlay-5">
        <div class="popup" id="popup-5">
            <form method="post">
                <button type="button" onclick="hideFivePopup()" class="close">X</button>
                <h4>Question №4</h4>
                <p class="popup-text-2">
                    What does the typeof operator do in JavaScript?
                </p>
                <div class="dpx">
                    <div class='py'>
                        <label>
                            <input type="radio" class="option-input radio" name="example"
                                value="Returns the type of the object or function" checked />
                            <p>Returns the type of the <br>object or function</p>
                        </label>
                        <label>
                            <input type="radio" class="option-input radio" name="example"
                                value="Returns a string representing the type of the passed value" />
                            <p>Returns a string representing <br>the type of the passed value</p>
                        </label>
                    </div>
                    <div class="py">
                        <label>
                            <input type="radio" class="option-input radio" name="example"
                                value="Calls an object method to determine the type of variable" />
                            <p>Calls an object method to <br>determine the type of variable</p>
                        </label>
                        <label>
                            <input type="radio" class="option-input radio" name="example"
                                value="Converts a variable to its corresponding data type" />
                            <p>Converts a variable to <br>its corresponding data type</p>
                        </label>
                    </div>
                </div>
                <div id="flex">
                    <button type="button" id="next-btn-5" class="btn-send-answer" onclick="sendAnswer(4, 'popup-5')">
                        Send answer
                        <img src="assets/images/Group 2.svg">
                    </button>
                    <button type="button" id="next-btn-5"
                        onclick="hideFirstPopup(), hideSecondPopup(), hideThirtyPopup(), hideFourthPopup(), hideFivePopup()">
                        Сomplete the test
                        <img src="assets/images/Group 2.svg">
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="popup-2" id="popup-9">
        <h3>Your Profile! :3</h3>
        <p id="username"></p>
        <ul>
            <a href="profile.php"><li>Profile</li></a>
            <a href="index.php">
                <li>Log out</li>
            </a>
        </ul>
        <span class="close-btn" onclick="closePopup()">✖</span>
    </div>
    <script>
        function showFirstPopup() {
            document.getElementById('popup-overlay').style.display = 'block';
            document.getElementById('popup').style.display = 'block';
        }

        function hideFirstPopup() {
            document.getElementById('popup-overlay').style.display = 'none';
            document.getElementById('popup').style.display = 'none';
        }

        function showSecondPopup() {
            document.getElementById('popup-overlay-2').style.display = 'block';
            document.getElementById('popup-2').style.display = 'block';
        }

        function hideSecondPopup() {
            document.getElementById('popup-overlay-2').style.display = 'none';
            document.getElementById('popup-2').style.display = 'none';
        }

        function showThirtyPopup() {
            document.getElementById('popup-overlay-3').style.display = 'block';
            document.getElementById('popup-3').style.display = 'block';
        }
        function hideThirtyPopup() {
            document.getElementById('popup-overlay-3').style.display = 'none';
            document.getElementById('popup-3').style.display = 'none';
        }
        function showFourthPopup() {
            document.getElementById('popup-overlay-4').style.display = 'block';
            document.getElementById('popup-4').style.display = 'block';
        }
        function hideFourthPopup() {
            document.getElementById('popup-overlay-4').style.display = 'none';
            document.getElementById('popup-4').style.display = 'none';
        }
        function showFivePopup() {
            document.getElementById('popup-overlay-5').style.display = 'block';
            document.getElementById('popup-5').style.display = 'block';
        }
        function hideFivePopup() {
            document.getElementById('popup-overlay-5').style.display = 'none';
            document.getElementById('popup-5').style.display = 'none';
        }
        function togglePopup(event) {
            if (!event.currentTarget.classList.contains('third-2')) {
                return;
            }
            const popup = document.getElementById('popup-9');
            const rect = event.currentTarget.getBoundingClientRect();
            popup.style.top = `${rect.bottom + window.scrollY}px`;
            popup.style.left = `${rect.left + window.scrollX}px`;
            popup.style.display = popup.style.display === 'none' ? 'block' : 'none';

        }
        function closePopup() {
            const popup = document.getElementById('popup-9');
            popup.style.display = 'none';
        }
        function sendAnswer(questionNumber, popupId) {
            const answer = document.querySelector(`#${popupId} input[type="radio"]:checked`).value;
            $.ajax({
                url: 'save_answer.php',
                method: 'POST',
                data: {
                    question: questionNumber,
                    answer: answer
                },
                success: function (response) {
                    console.log('Answer saved:', response);
                },
                error: function (xhr, status, error) {
                    console.error('Error saving answer:', status, error);
                }
            });
        }
    </script>

    <header class="header">
        <div class="container header_container">
            <div class="logo">
                <a href="indexAfterSignIn.php">Aparelo</a>
            </div>
            <nav class="header_nav">
                <ul>
                    <li onclick="scrollToSection('cont-1')">What you will learn</li>
                    <li onclick="scrollToSection('how-learn')">Learning process</li>
                    <li onclick="scrollToSection('price-courses')">Cost </li>
                    <li onclick="scrollToSection('footer-link')">Contacts</li>
                    <li style="font-weight: 500"><a href="page-video-After-profile.php">Courses</a></li>
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
                            School of <span>{</span><i>Programming</i><span>}</span> for those who need real skills, not
                            just a certificate!
                        </p>
                        <div class="line"></div>
                        <p class="text-1">
                            Take the test to get access to free introductory lessons
                        </p>
                        <button onclick="showFirstPopup()">
                            Pass the test
                            <img src="assets/images/Group 2.svg" id="vector-arrow-2">
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
                        <div class="block-line-1 parallax-text">
                            <div>Python programming language</div>
                            <div>Javascript</div>
                        </div>
                        <div class="block-line-2 parallax-text">
                            <div>Databases</div>
                            <div>Flask and Django frameworks</div>
                        </div>
                        <div class="block-line-3 parallax-text">
                            <div>HTML та CSS</div>
                            <div>Docker</div>
                            <div>Git</div>
                        </div>
                        <p class="block-content parallax-text">
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
                            <a href="page-video-After-profile.php"><img src="assets/images/Group 1193.svg"
                                    id="img-button-play"></a>
                            <p>Watch the video</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="other">
            <div class="container courses">
                <div data-aos="fade-right">
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
                <div data-aos="fade-right">
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
                <div data-aos="fade-right">
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
                <div class="table-price">
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
                        <a href="page-video-After-profile.php">
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