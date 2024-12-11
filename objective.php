<!DOCTYPE html>
<html>

<head>
    <?php require_once("include.php"); ?>
    <title>ISL : Home Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            /* padding: 30px; */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            background: #f8f8f8;
            border-radius: 8px;
        }

        h2 {
            color: #007bff;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            line-height: 1.8em;
            color: #555;
            font-size: 16px;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
            margin: 15px 0;
        }

        li {
            margin: 10px 0;
            line-height: 1.6em;
            color: #444;
            font-size: 16px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            .container {
                padding: 20px;
            }

            h2 {
                font-size: 20px;
            }

            p,
            li {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <?php include_once("nav.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Put your code after this -->
                <h2>Objective</h2>
                <p>The main objective of this project is to develop an Indian Sign Language generation system from natural language input in Hindi text. The major objectives of this project are as follows:</p>
                <ul>
                    <li>
                        <h3>ISL Learning Platform</h3>
                        <p>Create a comprehensive web-based and mobile-based Indian Sign Language learning system, providing a unified solution for ISL education and communication.</p>
                    </li>
                    <li>
                        <h3>Communication Conversion</h3>
                        <p>- Convert Gujarati, Hindi, and English sentences to sign language and vice versa <br>
                            - Convert speech to sign language and vice versa, to facilitate seamless communication.</p>
                    </li>
                    <li>
                        <h3>Comprehensive ISL Dictionary</h3>
                        <p>Build an online multilingual multimedia dictionary for Indian Sign Language, offering a comprehensive resource for ISL learners and users.</p>
                    </li>
                    <li>
                        <h3>Speech-to-ISL Conversion Module</h3>
                        <p>Convert speech to sign language and vice versa, enabling real-time communication and interaction.</p>
                    </li>
                    <li>
                        <h3>Interpretation and Learning</h3>
                        <p>Interpret Gujarati and Hindi alphabets, numbers, words, and sentences into sign language, and provide writing exercises and practice pads for students to improve their writing skills.</p>
                    </li>
                    <li>
                        <h3>Subject-Specific Learning</h3>
                        <p>Offer mathematics, science, and language tutorials in sign language, including writing exercises and assessments for these subjects, to provide a comprehensive learning experience.</p>
                    </li>

                    <li>
                        <h3>HamNoSys Generation System</h3>
                        <p>Design a HamNoSys generation system to represent the phonological features of Indian Sign Language, aiding in the accurate depiction of signs and enhancing the learning experience.</p>
                    </li>
                </ul>
                <!-- Put your code before this -->
            </div>
        </div>
    </div>
</body>

</html>