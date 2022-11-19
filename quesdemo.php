<?php  include 'action/config.php'; 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Elearn project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- External Css -->
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/question.css">
    <style>
    .tabcontent {
        display: none;
    }

    .grid {
        width: 200px;
        height: 200px;
        background-color: yellow;
        margin: 12px;
        text-align: center;
        display: none;
    }
    </style>

</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->
            <div class="top_bar">
                <div class="top_bar_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                    <ul class="top_bar_contact_list">
                                        <li class="text-light">
                                            <div class="question">Student Dashboard </div>
                                        </li>
                                        <li class="text-light">
                                            <div class="question"><span class="text-light">Student Name : </span>
                                                <?php echo htmlspecialchars($_SESSION["firstname"]); ?> <span
                                                    class="text-white">Gender :</span>
                                                <?php echo htmlspecialchars($_SESSION["gender"]); ?></div>
                                        </li>
                                    </ul>
                                    <div class="top_bar_login ml-auto">
                                        <ul>
                                            <li><a href="logout.php" data-toggle="modal"
                                                    data-target=".bd-example-modal-">Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Content -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <a href="#">
                                        <div class="logo_content d-flex flex-row align-items-end justify-content-start">
                                            <div class="logo_img">
                                                <!-- <img src="images/logo.png" alt="">-->
                                            </div>
                                            <div class="logo_text">SERAC EDUCATION</div>
                                        </div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li class=""><a href="index.php">home</a></li>
                                        <li><a href="#">notification</a></li>
                                        <li><a href="#">result Annousement</a></li>
                                        <li><a href="#">exam date</a></li>
                                        <li class="active"><a href="#">question</a></li>
                                        <li><a href="#">dashboard</a></li>
                                    </ul>
                                    <div class="search_button">
                                    </div>

                                    <!-- Hamburger -->

                                    <div class="hamburger menu_mm">
                                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                    </div>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Search Panel -->

            <!-- <div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>		 -->

        </header>

        <!-- Menu Nav tag-->

        <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
            <div class="menu_close_container">
                <div class="menu_close">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="search">
                <form action="#" class="header_search_form menu_mm">
                    <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                    <button
                        class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                        <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
            <!-- toggle menu -->
            <nav class="menu_nav">
                <ul class="menu_mm">

                    <li class="menu_mm"><a href="index.html">Home</a></li>
                    <li class="menu_mm"><a href="#">Notification</a></li>
                    <li class="menu_mm"><a href="#">Result Announcement</a></li>
                    <li class="menu_mm"><a href="#">Exam Date</a></li>
                    <li class="menu_mm"><a href="#">Question </a></li>
                    <li class="menu_mm"><a href="#">Dashboard</a></li>

                </ul>
            </nav>
            <div class="menu_extra">

                <div class="menu_phone"><span class="menu_title">Student Name :</span> <span class="text-uppercase font-weight-bold"><?php echo htmlspecialchars($_SESSION["firstname"]); ?> </span>
                    <ul>
                        <li class="qlist"> <a href="index.php"><i class="fa " aria-hidden="true"></i>Logout</a></li>
                    </ul>
                </div>
                <div class="menu_social">
                    <span class="menu_title">follow us</span>
                    <ul>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- try it  -->

        <!--  -->

        <div class="container mt-5 ">
            <table border=1|1>
                <thead>
                    <tr class="theader">
                        <td class="sr_no">Q.No.</td>
                        <td class="question">Question</td>
                        <td class="option" colspan="2">Option</td>

                    </tr>
                </thead>

                <form id="quesForm" action="action/backend.php" method="POST">
                    <div class="mb-3">


                        <?php 
					     // question table insode
                            $query = "select * from questions";
                            $queryquestion = mysqli_query($link,$query);
							// print_r($queryquestion);
                            
                           while($row = mysqli_fetch_assoc($queryquestion)){
                        ?>

                        <tr>
                            <td class="sr"> <?php echo $row['sr_no']; ?></td>
                            <td class="qlist"> <?php echo $row['question']; ?></td>


                            <!-- Optin From Answer list -->

                            <td class="text-center option ">
                                <input class="question-answer--option" type="radio"
                                    name="choice-<?php echo $row['sr_no'] ?>"
                                    value="<?php echo $row['option1'] ?>">&nbspYES
                                <input id="op3" class="question-answer--option" type="radio"
                                    name="choice-<?php echo $row['sr_no'] ?>"
                                    value="<?php echo $row['option2'] ?>">&nbspNO
                                <input type="hidden" name="domain-<?php echo $row['sr_no'] ?>" value="<?php echo $row['domain'] ?>">
                            </td>
                        </tr>
                        <?php
                               
                          }
                          ?>

            </table>


            <!-- <input type="" name="number" value="<?php echo $number; ?>">  -->
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

        <!-- script start -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
        <script src="js/custom.js"></script>

</body>

</html>