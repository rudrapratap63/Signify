<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("include.php"); ?>
    <title>Our team - ISL from Text</title>
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
        rel="stylesheet" />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php include_once("nav.php"); ?>
    <style>
        body {
            background-color: #f5f5f5;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            padding: 2em 1em;
            text-align: center;
        }

        .column {
            width: 100%;
            padding: 0.5em 0;
        }

        h1 {
            width: 100%;
            text-align: center;
            font-size: 3.5em;
            color: #1f003b;
        }

        .card {
            box-shadow: 0 0 2.4em rgba(25, 0, 58, 0.1);
            padding: 3.5em 1em;
            border-radius: 0.6em;
            color: #1f003b;
            cursor: pointer;
            transition: 0.3s;
            background-color: #ffffff;
        }

        .card {
            background-color: #ffffff;
            /* Set card background color */
            border-radius: 10px;
            /* Optional: round the corners of the card */
            padding: 1em;
            /* Add padding to the card */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Optional: add shadow for depth */
        }

        .card .img-container {
            width: 8em;
            /* Set width */
            height: 8em;
            /* Set height to match width for a perfect circle */
            background-color: #a993ff;
            /* Background color */
            padding: 0;
            /* Remove padding to ensure the image fills the container */
            border-radius: 50%;
            /* Make the container circular */
            margin: 0 auto 2em auto;
            /* Center the container */
            overflow: hidden;
            /* Ensure overflow is hidden to maintain the circle shape */
        }

        .card img {
            width: 100%;
            /* Make the image responsive */
            height: 100%;
            /* Set height to fill the container */
            object-fit: cover;
            /* Cover the container while preserving aspect ratio */
            border-radius: 50%;
            /* Make the image circular */
            display: block;
            /* Prevent any space below the image */
        }

        .card h3 {
            font-weight: 500;
        }

        .card p {
            font-weight: 300;
            text-transform: uppercase;
            margin: 0.5em 0 2em 0;
            letter-spacing: 2px;
        }

        .icons {
            width: 50%;
            min-width: 180px;
            margin: auto;
            display: flex;
            justify-content: space-between;
        }

        .card a {
            text-decoration: none;
            color: inherit;
            font-size: 1.4em;
        }

        .card:hover {
            background: linear-gradient(#6045ea, #8567f7);
            color: #ffffff;
        }

        .card:hover .img-container {
            transform: scale(1.15);
        }

        @media screen and (min-width: 768px) {
            section {
                padding: 1em 7em;
            }
        }

        @media screen and (min-width: 992px) {
            section {
                padding: 1em;
            }

            .card {
                padding: 5em 1em;
            }

            .column {
                flex: 0 0 33.33%;
                max-width: 33.33%;
                padding: 0 1em;
            }
        }
    </style>




    <section>
        <div class="row">
            <h1>Our Team</h1>
        </div>
        <div class="row">
            <!-- Column 1-->
            <div class="column">
                <div class="card">
                    <div class="img-container">
                        <img src="images/Rudra_Pratap.jpg" alt="Luna Turner" />
                    </div>
                    <h3>Rudra Pratap Singh</h3>
                    <p>Web Developer</p>
                    <div class="icons">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Column 2-->
            <div class="column">
                <div class="card">
                    <div class="img-container">
                        <img src="images/satyam.jpeg" alt="Bryant Hall" />
                    </div>
                    <h3>Satyam Tiwari</h3>
                    <p>Team Leader</p>
                    <div class="icons">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Column 3-->
            <div class="column">
                <div class="card">
                    <div class="img-container">
                        <img src="images/Rahul Patil.jpg" alt="Hope Watkins" />
                    </div>
                    <h3>Rahul Patil</h3>
                    <p>App Developer</p>
                    <div class="icons">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Column 1-->
            <div class="column">
                <div class="card">
                    <div class="img-container">
                        <img src="images/gavesh.jpeg" alt="Luna Turner" />
                    </div>
                    <h3>Gavesh Jain</h3>
                    <p>Machine learning Expert</p>
                    <div class="icons">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Column 2-->
            <div class="column">
                <div class="card">
                    <div class="img-container">
                        <img src="images/priya.jpeg" alt="Bryant Hall" />
                    </div>
                    <h3>Priya Singh</h3>
                    <p>Designer</p>
                    <div class="icons">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Column 3-->
            <div class="column">
                <div class="card">
                    <div class="img-container">
                        <img src="images/Khushal Gupta.jpeg" alt="Hope Watkins" />
                    </div>
                    <h3>Khushal Gupta</h3>
                    <p>Project Researcher</p>
                    <div class="icons">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once("footer.php"); ?>
</body>

</html>