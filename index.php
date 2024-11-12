<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="E-leaning copy.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/8e9cd79c92.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet"/>    


    <link rel="stylesheet" href="animate.css">

    <script src="./wow.min.js"></script>

    <script>new WOW().init();</script>

    <title>E-leaning copy</title>
</head>


<body>
     <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
      </p>



    <div class="loader_bg">
        <div style="text-align: center;" class="load"></div>
    </div>


    <div class="container-fluid" id="home">
        <div class="justify-content-center">
            <div class="row a" id="box1">
                <div class="col-md-8">
                    <p style="margin-top: 20px" class="a1">Online Education Courses Millions of people learning!</p>
                </div>
                <div style="margin-top: 20px;margin-left: 26px;" class="col-md-3 text-end  a">
                    <div style="padding-right: 15px;" i class="fa-brands fa-facebook"></i></div>
                    <div style="padding-right: 15px;" i class="fa-brands fa-twitter"></i></div>
                    <div style="padding-right: 15px;" i class="fa-brands fa-linkedin-in"></i></div>
                    <div i class="fa-brands fa-youtube"></i></div>
                </div>
            </div>
        </div>
    </div>

    <div class="b">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 col-12">
                    <div>
                        <a><img src="1.jpg" class="img-fluid"></a>
                    </div>
                </div>

                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-7 col-12">
                    <div class="c">
                        <div class="c1">
                            <div class="c2">
                                <div class="c3">
                                    <div i class="fa-solid fa-phone fa-shake"></i></div>
                                </div>
                                <div class="c">
                                    <h3>Call</h3>
                                    <h5>+123 4567 8910</h5>
                                </div>
                            </div>
                            <div class="c2">
                                <div class="c3">
                                    <div i class="fa-solid fa-envelope fa-bounce"></i> </div>
                                </div>
                                <div class="c">
                                    <h3>Email</h3>
                                    <h5>info@example.com</h5>
                                </div>
                            </div>
                            <div class="c2">
                                <div class="c3">
                                    <div i class="fa-sharp fa-solid fa-location-dot fa-spin-pulse"></i></div>
                                </div>
                                <div class="c">
                                    <h3>Address</h3>
                                    <h5>24 Fifth st, Los Angeles, USA</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center clearfix sticky-top">
        <h1 class="float-md-start"></h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand"></a>
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="nav">
                <div style="margin-left: 85px;">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-warning text-uppercase fw-bold
                            px-3" href="#home">Home</a>
                        </li>

                        <li class="nav-item dropdown" data-toggle="dropdown">
                            <a class="nav-link dropdown-toggle text-uppercase fw-bold px-3"><span class="nav_hoveer">Pages</span></a>
                            <div style="border: 5px solid #f0f007;border-left: none;border-right: none;border-bottom: none;cursor: pointer;" class="dropdown-menu">
                                <a style="font-weight: 900;margin-top: -7px;padding-right: 150px;" class="dropdown-item">ABOUT US</a>
                                <a style="font-weight: 900;" class="dropdown-item">FAQ'S</a>
                                <a style="font-weight: 900;" class="dropdown-item">SUPPORTS</a>
                                <a style="font-weight: 900;margin-bottom: -7px;" class="dropdown-item">SCHOLARSHIP</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-uppercase fw-bold
                            px-3"><span class="nav_hoveer">COURSES</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-uppercase fw-bold
                            px-3"><span class="nav_hoveer">EVENTS</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-uppercase fw-bold
                            px-3"><span class="nav_hoveer">TEACHERS</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-uppercase fw-bold
                            px-3"><span class="nav_hoveer">PRICING</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-uppercase fw-bold
                            px-3"><span class="nav_hoveer">BLOG</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-uppercase fw-bold
                            px-3"><span class="nav_hoveer">CONTACT</span></a>
                        </li>
                    </ul>
                </div>
                <div style="margin-right: 120px;">
                    <button type="button" class="btn btn-warning p-3 fw-bold wow animate__backInDown"
                        data-wow-delay="0s"><a style="padding: 20px;" href="logout.php">Logout</a>
                        </button>
                </div>
            </div>
        </nav>
    </div>




    <div class="e">
        <div class="container justify-content-center">
            <div class="row justify-content-center align-items-center ">
                <div class="col-md-6 text-white wow animate__backInLeft" data-wow-delay="1s">
                    <h1>Start Learning and Embrace New Skills For Better Future</h1>
                    <p class="wow animate__backInLeft" data-wow-delay="1.4s">With the help of E-Learning, create your
                        own path and drive on your
                        skills on your own to achieve what you seek.</p>
                    <button type="button" class="btn btn-warning wow animate__backInLeft" data-wow-delay="1.6s"
                        style="margin-bottom:30px;padding: 15px;">View all
                        courses</button>
                </div>
                <div style="padding-right: 5px;" class="col-md-6 wow animate__bounceInRight" data-wow-delay="1.4s">
                    <img src="2.jpg" class="img-fluid fade-in-image">
                </div>
            </div>
        </div>
        <img style="width: 100%; margin-top: 10px;" src="4.jpg">
    </div>

    
    <div style="padding-top: 15px;">
        <div class="container f">
            <div class="row wow animate__backInDown">
                <div class="col-md-12 text-center">
                    <h1 style="color: #07294d;">Why Choose E-learning</h1>
                    <p style="font-size: 16px;
                            color: #444;
                            max-width: 767px;
                            margin: 0px auto;">Look into yourself, know you’re
                        ambitious and keep moving forward until you get
                        something in
                        return as your achievement.</p>
                </div>
            </div>

            <div style="padding-top: 25px;" class="f1">
                <div style="padding-left: 10px;" class="row  justify-content-between">
                    <div class="col-md-3 border f1box wow animate__fadeInUpBig" data-wow-delay="0.2s">
                        <div class="f2" style="color:#4382ff;background-color: rgba(67, 130, 255,0.13);">
                            <h1><i style="color: #07294d;" class="fas fa-book fa-bounce"></i></h1>
                        </div>
                        <h6 style="font-weight: 800;color: #07294d;">Course Accessibility</h6>
                        <p>Select a suitable course from the vast area of
                            other courses and access it anytime and from
                            anywhere.</p>
                    </div>


                    <div class="col-md-3 border f1box  wow animate__fadeInUpBig" data-wow-delay="0.5s">
                        <div class="f2" style="color:#4382ff;background-color: rgba(67, 130, 255,0.13);">
                            <h1><i style="color: #4382ff;" class="fas fa-graduation-cap fa-bounce"></i></h1>
                        </div>
                        <h6 style="font-weight: 800;color: #07294d;">Scholarship</h6>
                        <p>To encourage talent, we give up to 100 % aid to
                            those young learners who have the ability to
                            do something.</p>
                    </div>

                    <div style="margin-right: 20px;" class="col-md-3 border f1box wow animate__fadeInUpBig"
                        data-wow-delay="0.9s">
                        <div class="f2" style="color:#f89035;background-color: rgba(248, 144, 53,0.13);">
                            <h1><i style="color:orangered;" class="fas fa-globe fa-bounce"></i></h1>
                        </div>
                        <h6 style="font-weight: 800;color: #07294d;">Practical learning</h6>
                        <p>Interact yourself with the real-world while doing
                            the real-world project and other things to
                            master your skills.</p>
                    </div>
                </div>
            </div>


            <div style="padding-top: 25px;" class="f1">
                <div style="padding-left: 10px;" class="row text-center justify-content-between ">
                    <div class="col-md-3 border f1box wow animate__fadeInUpBig" data-wow-delay="0.5s">
                        <div class="f2" style="color:#b3d369;background-color: rgba(179, 211, 105,0.13);">
                            <i class="fas fa-user fa-bounce"></i>
                        </div>
                        <h6 style="font-weight: 800;color: #07294d;">Expert Instructions</h6>
                        <p>Hold the opportunity to learn from the industrys
                            expert and learn how to execute things like
                            them.</p>
                    </div>


                    <div class="col-md-3 border f1box wow animate__fadeInUpBig" data-wow-delay="1s">
                        <div class="f2" style="color:#554da7;background-color: rgba(85, 77, 167,0.13);">
                            <i class="fas fa-headphones-alt fa-bounce"></i>
                        </div>
                        <h6 style="font-weight: 800;color: #07294d;">Schedule learning</h6>
                        <p>Learn at whatever and whenever at your suitable
                            time and place. Get a part-time study degree.
                        </p>
                    </div>



                    <div style="margin-right: 20px;" class="col-md-3 border f1box wow animate__fadeInUpBig"
                        data-wow-delay="1.4s">
                        <div class="f2" style="color: #f94fa4;background-color: rgba(249, 79, 164,0.13);">
                            <i class="fas fa-child fa-bounce"></i>
                        </div>
                        <h6 style="font-weight: 800;color: #07294d;">Recorded sessions</h6>
                        <p>Missed the live class? Don’t worry about it,
                            access to every session on the chosen course.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div style="padding-top: 50px;" class="container" id="c1">
        <div class="row text-center">
            <div class="col-12 i wow animate__backInDown">
                <h1 style="color: #07294d;">Discover The Variety Of Courses Here</h1>
                <p style="padding-top: 10px;padding-bottom: 10px;">Choose one appropriate course for you from over
                    multifarious courses available on this platform.</p>
            </div>


            <div class="row text-start justify-content-between">
                <div class="col-md-3 i2  wow animate__fadeInDown" data-wow-delay="0.2s">
                    <img src="5.jpg" class="img-fluid">
                    <div style="font-weight: 800;color: #07294d;margin-top: 10px;cursor: pointer;"><span
                            class="nav_hoveer">Data Product Manager</div>
                    <p>Follow the step by step process to learn data and gain understandability of software-based
                        products in depth.</p>

                    <div class="i3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <a class="i4"><i class="fas fa-user fa-fade"></i><span style="padding-left: 7px;">31</span></a>
                        <a class="i5" style="padding-left: 30px;"><i class="fas fa-heart fa-beat"></i><span
                                style="padding-left: 7px;">10</span></a>
                    </div>
                    <hr>
                    <div class="i6">
                        <div>
                            <a><img src="5.1.jpg" alt="user1"
                                    style="width: 44px; border-radius:100%; max-width: 40px; margin-right: 10px;"></a>
                            <span>Alia Noor</span>
                        </div>
                        <p style="color: #155724; background-color: #d4edda; border-color: #c3e6cb; padding: 5px 15px;
                                 display: block; line-height: normal; font-weight: 600;" class="i7">Free</p>
                    </div>
                </div>


                <div class="col-md-3 i2 wow animate__fadeInDown" data-wow-delay="0.4s" style="margin-left: 20px">
                    <img src="6.jpg" class="img-fluid">
                    <h6 style="font-weight: 800;color: #07294d;margin-top: 10px;cursor: pointer;"><span
                            class="nav_hoveer">Learning SQL</h6>
                    <p>Get a deep knowledge from the beginning and learn how to use essential databases through SQL.</p>
                    <div class="i3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <a class="i4"><i class="fas fa-user fa-fade"></i><span style="padding-left: 7px;">31</span></a>
                        <a class="i5" style="padding-left: 30px;"><i class="fas fa-heart fa-beat"></i><span
                                style="padding-left: 7px;">10</span></a>
                    </div>
                    <hr>
                    <div class="i6">
                        <div>
                            <a><img src="5.1.jpg" alt="user1" style="width: 44px; border-radius:100%; max-width: 40px; margin-right:
                                10px;"></a>
                            <span>Alia Noor</span>
                        </div>
                        <p style="color: #155724; background-color: #d4edda; border-color: #c3e6cb;padding: 5px 15px;display: block;
                                line-height: normal;font-weight: 600;" class="i7">$25.00</p>
                    </div>

                </div>

                <div class="col-md-3 i2  wow animate__fadeInDown" data-wow-delay="0.8s">
                    <img src="7.jpg" class="img-fluid">
                    <h6 style="font-weight: 800;color: #07294d;margin-top: 10px;cursor: pointer;"><span
                            class="nav_hoveer">Java Programming</h6>
                    <p>Learn the fundamental programming concept of java. It will open the right doors for you as a
                        developer.</p>
                    <div class="i3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <a class="i4"><i class="fas fa-user fa-fade"></i><span style="padding-left: 7px;">31</span></a>
                        <a class="i5" style="padding-left: 30px;"><i class="fas fa-heart fa-beat"></i><span
                                style="padding-left: 7px;">10</span></a>
                    </div>
                    <hr>
                    <div class="i6">
                        <div>
                            <a><img src="5.1.jpg" alt="user1" style="width: 44px; border-radius:100%; max-width: 40px; margin-right:
                                10px;"></a>
                            <span>Alia Noor</span>
                        </div>
                        <p style="color: #155724; background-color: #d4edda; border-color: #c3e6cb; padding: 5px 15px; display: block;line-height: normal;
                            font-weight: 600;" class="i7">Free</p>
                    </div>
                </div>
            </div>
        </div>


        <div style="padding-top: 50px;" class="row text-center">
            <div class="row text-start justify-content-between wow animate__fadeInDown" data-wow-delay="0.4s">
                <div class="col-md-3 i2">
                    <img src="8.jpg" class="img-fluid">
                    <h6 style="font-weight: 800;color: #07294d;margin-top: 10px;cursor: pointer;"><span
                            class="nav_hoveer">UI/UX Designing</h6>
                    <p>Connect with UI/UX design skills and connect it with your core designing ideas and shape it in
                        digital form.</p>
                    <div class="i3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <a class="i4"><i class="fas fa-user fa-fade"></i><span style="padding-left: 7px;">31</span></a>
                        <a class="i5" style="padding-left: 30px;"><i class="fas fa-heart fa-beat"></i><span
                                style="padding-left: 7px;">10</span></a>
                    </div>
                    <hr>
                    <div class="i6">
                        <div>
                            <a><img src="5.1.jpg" alt="user1"
                                    style="width: 44px; border-radius:100%; max-width: 40px; margin-right: 10px;"></a>
                            <span>Alia Noor</span>
                        </div>
                        <p style="color: #155724; background-color: #d4edda; border-color: #c3e6cb; padding: 5px 15px; display: block;
                                    line-height: normal; font-weight: 600;" class="i7">$15.00</p>
                    </div>


                </div>
                <div class="col-md-3 i2 wow animate__fadeInDown" data-wow-delay="0.6s" style="margin-left:25px;">
                    <img src="9.jpg" class="img-fluid">
                    <h6 style="font-weight: 800;color: #07294d;margin-top: 10px;cursor: pointer;"><span
                            class="nav_hoveer">Data Analytics</h6>
                    <p>Give your data analytics career a sophisticated start by learning fundamental concepts of data
                        analysis.</p>
                    <div class="i3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <a class="i4"><i class="fas fa-user fa-fade"></i><span style="padding-left: 7px;">31</span></a>
                        <a class="i5" style="padding-left: 30px;"><i class="fas fa-heart fa-beat"></i><span
                                style="padding-left: 7px;">10</span></a>
                    </div>
                    <hr>
                    <div class="i6">
                        <div>
                            <a><img src="5.1.jpg" alt="user1" style="width: 44px; border-radius:100%; max-width: 40px; margin-right:
                              10px;"></a>
                            <span>Alia Noor</span>
                        </div>
                        <p style="color: #155724; background-color: #d4edda; border-color: #c3e6cb; padding: 5px 15px;display: block;
                                 line-height: normal;font-weight: 600;" class="i7">$5.00</p>
                    </div>

                </div>
                <div class="col-md-3 i2 wow animate__fadeInDown" data-wow-delay="1s">
                    <img src="10.jpg" class="img-fluid">
                    <h6 style="font-weight: 800;color: #07294d;margin-top: 10px;cursor: pointer;"><span
                            class="nav_hoveer">Cyber Security</h6>
                    <p>Learn the latest cyber trends from the experts and interact with the real-world projects at a
                        time.</p>
                    <div class="i3" style="margin-bottom: 9px;
                                font-size: 17px; display: inline-block;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <a class="i4"><i class="fas fa-user fa-fade"></i><span style="padding-left: 7px;">31</span></a>
                        <a class="i5" style="padding-left: 30px;"><i class="fas fa-heart fa-beat"></i><span
                                style="padding-left: 7px;">10</span></a>
                    </div>
                    <hr>
                    <div class="i6">
                        <div>
                            <a><img src="5.1.jpg" alt="user1" style="width: 44px; border-radius: 100%; max-width: 40px; margin-right:
                                 10px;"></a>
                            <span>Alia Noor</span>
                        </div>
                        <p style="color: #155724; background-color: #d4edda; border-color: #c3e6cb;padding: 5px 15px; display: block;
                             line-height: normal;font-weight: 600;" class="i7">$10.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center j wow animate__backInDown">
                    <h2>Upcomming Events</h2>
                    <p style="padding-bottom: 40px;">To support and empower students, we arrange some of
                        the events where they acknowledge something
                        which helps them to become a successful person.</p>
                </div>
            </div>

            <div class="row j1 justify-content-evenly">
                <div class="col-md-4 j2 wow animate__fadeInUpBig" data-wow-delay="0.2s">
                    <div class="ja">
                        <div class="j3">
                            <h5>16</h5>
                            <p>June</p>
                        </div>
                    </div>
                    <div>
                        <div style="display: inline-block;" class="j4 nav_hoveer">
                            Webinar: Data Specialist
                        </div>
                        <div class="j5">
                            Get on the digital seat and hear what Data
                            analysis experts have to say about the industry
                            and
                            enlighten yourself.
                        </div>
                    </div>

                    <div class="j6">
                        <div class="j7"
                            style="border: 2px solid rgb(238, 232, 232); border-left: none; border-right: none; border-bottom: none;border-top: none;margin-right: 70px;">
                            <i class="fas fa-user fa-beat-fade"></i>
                            <div>John Wood</div>
                        </div>
                        <div class="j7"
                            style="border: 2px solid rgb(238, 232, 232); border-right: none; border-bottom: none;border-top: none;padding-left: 60px;">
                            <i class="fas fa-map-marker-alt fa-spin-pulse"></i>
                            <div>New York City</div>
                        </div>
                    </div>
                </div>



                <div class="col-md-4 j2 wow animate__fadeInUpBig" data-wow-delay="0.6s">
                    <div class="jb">
                        <div class="j3">
                            <h5>18</h5>
                            <p>June</p>
                        </div>
                    </div>
                    <div>
                        <div style="display: inline-block;" class="j4 nav_hoveer">
                            Virtual Java Conference
                        </div>
                        <div class="j5">
                            Grab the opportunity and dive into the ocean of
                            learning and upcoming events coming in the
                            java
                            world.
                        </div>
                    </div>
                    <div class="j6">
                        <div class="j7"
                            style="border: 2px solid rgb(238, 232, 232); border-left: none; border-right: none; border-bottom: none;border-top: none;margin-right: 70px;">
                            <i class="fas fa-user fa-beat-fade"></i>
                            <div>John Wood</div>
                        </div>
                        <div class="j7"
                            style="border: 2px solid rgb(238, 232, 232); border-right: none; border-bottom: none;border-top: none; padding-left: 60px;">
                            <i class="fas fa-map-marker-alt fa-spin-pulse"></i>
                            <div>New York City</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 j2 wow animate__fadeInUpBig" data-wow-delay="1s">
                    <div class="jc">
                        <div class="j3">
                            <h5>18</h5>
                            <p>June</p>
                        </div>
                    </div>
                    <div>
                        <div style="display: inline-block;" class="j4 nav_hoveer">
                            International talk on E-Learning
                        </div>
                        <div class="j5">
                            Come around and listen industry experts
                            who have the vision Lorem ipsum dolor sit. to take e-learning on
                            another level.
                        </div>
                    </div>

                    <div class="j6">
                        <div class="j7"
                            style="border: 2px solid rgb(238, 232, 232); border-left: none; border-right: none; border-bottom: none;border-top: none; margin-right: 70px;">
                            <i class="fas fa-user fa-beat-fade"></i>
                            <div>John Wood</div>
                        </div>
                        <div class="j7"
                            style="border: 2px solid rgb(238, 232, 232); border-right: none; border-bottom: none;border-top: none;padding-left: 60px;">
                            <i class="fas fa-map-marker-alt fa-spin-pulse"></i>
                            <div>New York City</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div style="padding-top: 50px;margin-top: 50px;" class="container-fluid k">
        <div class="container">
            <div class="row text-center justify-content-evenly k1">
                <div class="col-md-2 wow animate__fadeInLeftBig" data-wow-delay="0.2s">
                    <img src="14.1.jpg">
                    <h3>1800+</h3>
                    <p>Students</p>
                </div>

                <div class="col-md-2 wow animate__fadeInLeftBig" data-wow-delay="0.6s">
                    <img src="14.2.jpg">
                    <h3>1800+</h3>
                    <p>Courses</p>
                </div>

                <div class="col-md-2 wow animate__fadeInRightBig" data-wow-delay="0.8s">
                    <img src="14.3.jpg">
                    <h3>1800+</h3>
                    <p>Certified Teachers</p>
                </div>

                <div class="col-md-2 wow animate__fadeInRightBig" data-wow-delay="0.4s">
                    <img src="14.4.jpg">
                    <h3>1800+</h3>
                    <p>Award Winning</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 

    <style>
        .filterDiv {
            float: left;
            background-color: #2196F3;
            color: #ffffff;
            width: 100px;
            line-height: 100px;
            text-align: center;
            margin: 2px;
            display: none;
        }

        .show {
            display: block;
        }
    </style> -->

    <!-- <body>

        <h2>Filter DIV Elements</h2>

        <div id="myBtnContainer">
            <button class="btn active" onclick="filterSelection('all')"> Show all</button>
            <button class="btn" onclick="filterSelection('cars')"> Cars</button>
            <button class="btn" onclick="filterSelection('animals')"> Animals</button>
            <button class="btn" onclick="filterSelection('fruits')"> Fruits</button>

        </div>

        <div class="container">
            <div class="filterDiv cars">BMW</div>
            <div class="filterDiv colors fruits">Orange</div>
            <div class="filterDiv cars">Volvo</div>
            <div class="filterDiv cars">Ford</div>
            <div class="filterDiv animals">Cat</div>
            <div class="filterDiv animals">Dog</div>
            <div class="filterDiv fruits">Melon</div>
            <div class="filterDiv fruits animals">Kiwi</div>
            <div class="filterDiv fruits">Banana</div>
            <div class="filterDiv fruits">Lemon</div>
            <div class="filterDiv animals">Cow</div>
        </div> -->

         <script>
            filterSelection("all")
            function filterSelection(c) {
                var x, i;
                x = document.getElementsByClassName("filterDiv");
                if (c == "all") c = "";
                for (i = 0; i < x.length; i++) {
                    w3RemoveClass(x[i], "show");
                    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
                }
            }

            function w3AddClass(element, name) {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) {
                    if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
                }
            }

            function w3RemoveClass(element, name) {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) {
                    while (arr1.indexOf(arr2[i]) > -1) {
                        arr1.splice(arr1.indexOf(arr2[i]), 1);
                    }
                }
                element.className = arr1.join(" ");
            }


            var btnContainer = document.getElementById("myBtnContainer");
            var btns = btnContainer.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function () {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }
        </script> 




 






    <div style="padding: 60px;">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 m wow animate__backInDown">
                    <h2>Our Gallery</h2>
                    <p>If you are going to use a passage of you need to be sure there isn't anything embarrassing
                        hidden
                        in the middle of text</p>
                </div>

                <div class="col-md-12 m1" id="myBtnContainer">
                    <ul class="d-flex flex-wrap justify-content-center">
                        <li class="m2 btn active" onclick="filterSelection('all')"><a>All</a></li>
                        <li class="btn" onclick="filterSelection('cars')">Web Design</a></li>
                        <li class="btn" onclick="filterSelection('animals')">Web development</a></li>
                        <li class="btn" onclick="filterSelection('fruits')">Brand Identify</a></li>
                    </ul>
                </div>

            </div>
        </div>


        <div >
        <div style="padding-top: 35px; margin-left: 35px;" class="main">
            <div class="m4 wow animate__slideInUp" data-wow-delay="0s">
                <div class="row">
                    <div style="margin-top: 20px;" class="col-md-4 m3">
                        <div class="container">
                            <div  class="filterDiv cars"><img src="15.1.jpg" class="image m4"></div>
                            <div class="overlay m4">
                                <div style="margin-top: 25%; margin-left: 40%;" class="m5"><i
                                        class="fa-solid fa-images fa-beat"></i></div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 20px;" class="col-md-4 m3 wow animate__slideInUp" data-wow-delay="0.3s">
                        <div class="container">
                            <div class="filterDiv colors fruits"><img src="15.2.jpg" class="image m4"></div>
                            <div class="overlay m4">
                                <div style="margin-top: 25%; margin-left: 40%;" class="m5"><i
                                        class="fa-solid fa-images fa-beat"></i></div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 20px;" class="col-md-4 m3 wow animate__slideInUp" data-wow-delay="0.6s">
                        <div class="container">
                            <div  class="filterDiv cars"><img src="15.3.jpg" class="image m4"></div>
                            <div class="overlay m4">
                                <div style="margin-top: 25%; margin-left: 40%;" class="m5"><i
                                        class="fa-solid fa-images fa-beat"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 20px;" class="row wow animate__slideInUp" data-wow-delay="0.3s">
                <div style="margin-top: 20px;" class="col-md-4 m3">
                    <div class="container">
                        <div class="filterDiv colors fruits"><img src="15.4.jpg" class="image m4"></div>
                        <div class="overlay m4">
                            <div style="margin-top: 25%; margin-left: 40%;" class="m5"><i
                                    class="fa-solid fa-images fa-beat"></i></div>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 20px;" class="col-md-4 m3 wow animate__slideInUp" data-wow-delay="0.7s">
                    <div class="container">
                        <div class="filterDiv colors"><img src="15.5.jpg" class="image m4"></div>
                        <div class="overlay m4">
                            <div style="margin-top: 25%; margin-left: 40%;" class="m5"><i
                                    class="fa-solid fa-images fa-beat"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 m3">
                    <div style="margin-top: 20px;" class="container wow animate__slideInUp" data-wow-delay="1s">
                        <div class="filterDiv animals"><img src="15.6.jpg" class="image m4"></div>
                        <div class="overlay m4">
                            <div style="margin-top: 25%; margin-left: 40%;" class="m5"><i
                                    class="fa-solid fa-images fa-beat"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>














    <div style="margin-top: 5%;" class="container">
        <div class="row">
            <div style="margin-top: 3%;" class="col-md-12 text-center n wow animate__backInDown">
                <h2>Team of Experts</h2>
                <p>Here you will have the team of experts from multifarious industries you will learn from them
                    under their experience and ethical guidance.</p>
            </div>
        </div>

        <div style="padding: 20px;" class="row text-center">
            <div class="col-md-3 n1 wow animate__fadeOutDown">
                <div class="container2">
                    <div
                        style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;padding-right: -10px;">
                        <div><img style="margin-top: 10px;padding: 5px;;border-radius: 5px;" src="16.1.jpg" width="285x"
                                class="image2"></div>
                        <div class="overlay2">
                            <div style="display: flex;" class="text2">
                                <div>
                                    <div>
                                        <div style="font-size: 20px;  display:inline-block;" class="q2"><i
                                                class="fa-brands fa-facebook-f fa-bounce"></i>
                                        </div>
                                    </div>
                                </div>


                                <div style="margin-left: 10px;">
                                    <div>
                                        <div style="font-size: 20px; display:inline-block;" class="r2"><i
                                                class="fa-brands fa-twitter fa-bounce"></i></div>
                                    </div>
                                </div>

                                <div style="margin-left: 10px;">
                                    <div>
                                        <div style="font-size: 20px; display:inline-block;" class="s2"><i
                                                class="fa-brands fa-linkedin-in fa-bounce"></i>
                                        </div>
                                    </div>
                                </div>

                                <div style="margin-left: 10px;">
                                    <div>
                                        <div style="font-size: 20px; display:inline-block;" class="t2"><i
                                                class="fa-brands fa-youtube fa-bounce"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="n2">
                    <h3 style="font-weight: 700" class="nav_hoveer">Jesica Belly</h3>
                    <p>Chemistry Teacher</p>
                </div>
            </div>

            <div class="col-md-3 n1 wow animate__fadeOutUp" data-wow-delay="0.3s">
                <div class="container2">
                    <div
                        style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;padding-right: -10px;">
                        <div><img style="margin-top: 10px;padding: 5px;;border-radius: 5px;" src="16.2.jpg" width="285x"
                                class="image2"></div>
                        <div class="overlay2">

                            <div style="display: flex;" class="text2">
                                <div>
                                    <div>
                                        <div style="font-size: 20px;  display:inline-block;" class="q2"><i
                                                class="fa-brands fa-facebook-f fa-bounce"></i>
                                        </div>
                                    </div>
                                </div>


                                <div style="margin-left: 10px;">
                                    <div>
                                        <div style="font-size: 20px; display:inline-block;" class="r2"><i
                                                class="fa-brands fa-twitter fa-bounce"></i></div>
                                    </div>
                                </div>

                                <div style="margin-left: 10px;">
                                    <div>
                                        <div style="font-size: 20px; display:inline-block;" class="s2"><i
                                                class="fa-brands fa-linkedin-in fa-bounce"></i>
                                        </div>
                                    </div>
                                </div>

                                <div style="margin-left: 10px;">
                                    <div>
                                        <div style="font-size: 20px; display:inline-block;" class="t2"><i
                                                class="fa-brands fa-youtube fa-bounce"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="n2">
                    <h3 style="font-weight: 700" class="nav_hoveer">Jesica Belly</h3>
                    <p>Chemistry Teacher</p>
                </div>
            </div>

            <div class="col-md-3 n1 wow animate__fadeOutDown" data-wow-delay="0.6s">
                <div class="container2">
                    <div
                        style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;padding-right: -10px;">
                        <div><img style="margin-top: 10px;padding: 5px;;border-radius: 5px;" src="16.3.jpg" width="285x"
                                class="image2"></div>
                        <div class="overlay2">

                            <div style="display: flex;" class="text2">
                                <div>
                                    <div>
                                        <div style="font-size: 20px;  display:inline-block;" class="q2"><i
                                                class="fa-brands fa-facebook-f fa-bounce"></i>
                                        </div>
                                    </div>
                                </div>


                                <div style="margin-left: 10px;">
                                    <div>
                                        <div style="font-size: 20px; display:inline-block;" class="r2"><i
                                                class="fa-brands fa-twitter fa-bounce"></i></div>
                                    </div>
                                </div>

                                <div style="margin-left: 10px;">
                                    <div>
                                        <div style="font-size: 20px; display:inline-block;" class="s2"><i
                                                class="fa-brands fa-linkedin-in fa-bounce"></i>
                                        </div>
                                    </div>
                                </div>

                                <div style="margin-left: 10px;">
                                    <div>
                                        <div style="font-size: 20px; display:inline-block;" class="t2"><i
                                                class="fa-brands fa-youtube fa-bounce"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="n2">
                    <h3 style="font-weight: 700" class="nav_hoveer">Jesica Belly</h3>
                    <p>Chemistry Teacher</p>
                </div>
            </div>
            <div class="col-md-3 n1 wow animate__fadeOutUp" data-wow-delay="0.9s">
                <div class="container2">
                    <div
                        style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;padding-right: -10px;">
                        <div><img style="margin-top: 10px;padding: 5px;;border-radius: 5px;" src="16.4.jpg" width="285x"
                                class="image2"></div>
                        <div class="overlay2">

                            <div style="display: flex;" class="text2">
                                <div>
                                    <div>
                                        <div style="font-size: 20px;  display:inline-block;" class="q2"><i
                                                class="fa-brands fa-facebook-f fa-bounce"></i>
                                        </div>
                                    </div>
                                </div>


                                <div style="margin-left: 10px;">
                                    <div>
                                        <div style="font-size: 20px; display:inline-block;" class="r2"><i
                                                class="fa-brands fa-twitter fa-bounce"></i></div>
                                    </div>
                                </div>

                                <div style="margin-left: 10px;">
                                    <div>
                                        <div style="font-size: 20px; display:inline-block;" class="s2"><i
                                                class="fa-brands fa-linkedin-in fa-bounce"></i>
                                        </div>
                                    </div>
                                </div>

                                <div style="margin-left: 10px;">
                                    <div>
                                        <div style="font-size: 20px; display:inline-block;" class="t2"><i
                                                class="fa-brands fa-youtube fa-bounce"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="n2">
                    <h3 style="font-weight: 700" class="nav_hoveer">Jesica Belly</h3>
                    <p>Chemistry Teacher</p>
                </div>
            </div>
        </div>
    </div>





    <div style="padding: 40px;">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 o wow animate__backInDown">
                    <h2>Our Pricing</h2>
                    <p>Join Us And Become A Part Of The Revolution</p>
                </div>
            </div>
            <div class="row">
                <div style="margin-top: 30px;" class="col-md-4 wow animate__slideInLeft">
                    <div class="o1 o2 text-center">
                        <div class="o3" style="background-color: #4382ff;">
                            <h2>Basic</h2>
                        </div>
                        <div class="o4">
                            <h3 style="color: #4382ff;">$99 / Month</h3>
                            <ul>
                                <li>Unlimited access courses</li>
                                <li>Progress Report Available</li>
                                <li>High resolution videos</li>
                                <li>------</li>
                                <li>------</li>
                            </ul>
                            <div class="o5">
                                <button class="o6" style="background-color: #4382ff;color: #fff !important;">Select
                                    Plan</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 wow animate__slideInUp">
                    <div class="o1 text-center">
                        <div class="o3" style="background-color: #554da7;">
                            <h2>Standard</h2>
                        </div>
                        <div class="o4">
                            <h3 style="color: #554da7;">$120 / Month</h3>
                            <ul>
                                <li>Unlimited access courses</li>
                                <li>Progress Report Available</li>
                                <li>High resolution videos</li>
                                <li>Certificate after completion</li>
                                <li>------</li>
                            </ul>
                            <div class="o5">
                                <button class="o6" style="background-color: #554da7;color: #fff !important;">Select
                                    Plan</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="margin-top: 30px;" class="col-md-4 wow animate__slideInRight">
                    <div class="o1 o2 text-center">
                        <div class="o3" style="background-color: #f94fa4;">
                            <h2>Premium</h2>
                        </div>
                        <div class="o4">
                            <h3 style="color: #f94fa4;">$199 / Month</h3>
                            <ul>
                                <li>Unlimited access courses</li>
                                <li>Progress Report Available</li>
                                <li>High resolution videos</li>
                                <li>Certificate after completion</li>
                                <li>Private sessions</li>
                            </ul>
                            <div class="o5">
                                <button class="o6" style="background-color: #f94fa4;color: #fff !important;">Select
                                    Plan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div style="padding: 40px;">
        <div class="container">
            <div class="row">
                <div style="padding-bottom: 20px;" class="col-md-12 text-center wow animate__backInDown;">
                    <h2>Our Blog</h2>
                    <p>Read some of the words and know what skilled people work or what technology would become
                        revolutionary for the world.</p>
                </div>
            </div>

            <div class="row justify-content-evenly wow animate__slideInUp" data-wow-delay="0.2s">
                <div class="col-md-4 p1">
                    <div class="p2">
                        <div class="p5">
                            <h5>16</h5>
                            <p>May</p>
                        </div>
                    </div>
                    <div>
                        <div style="font-weight: 700;display: inline-block;" class="p6 nav_hoveer">
                            How can Elon Musk think ?
                        </div>
                        <div class="p7">
                            In this pacing world, every billionaire is working on his vision and ways to make
                            this
                            world
                            a better place...
                        </div>
                    </div>

                    <div class="p8">
                        <div class="p9"
                            style="border: 1px solid rgb(238, 232, 232); border-left: none; border-bottom: none;">
                            <i class="fas fa-calendar-week fa-beat-fade"></i>
                            <div>16 May, 2019</div>
                        </div>
                        <div class="p9">
                            <i class="fas fa-comments fa-flip"></i>
                            <div>2 Comment</div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 p1 wow animate__slideInUp" data-wow-delay="0.6s">
                    <div class="p3">
                        <div class="p5">
                            <h5>16</h5>
                            <p>May</p>
                        </div>
                    </div>
                    <div>
                        <div style="font-weight: 700;display: inline-block;" class="p6 nav_hoveer">
                            What are the upcoming Technologies ?
                        </div>
                        <div class="p7">
                            Every new technology takes its place year after year or maybe a decade, In general,
                            new
                            technologies must...
                        </div>
                    </div>
                    <div class="p8">
                        <div class="p9"
                            style="border: 1px solid rgb(238, 232, 232); border-left: none; border-bottom: none;">
                            <i class="fas fa-calendar-week fa-beat-fade"></i>
                            <div>16 May, 2019</div>
                        </div>
                        <div class="p9">
                            <i class="fas fa-comments fa-flip"></i>
                            <div>2 Comment</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p1 wow animate__slideInUp" data-wow-delay="1s">
                    <div class="p4">
                        <div class="p5">
                            <h5>16</h5>
                            <p>May</p>
                        </div>
                    </div>
                    <div>
                        <div style="font-weight: 700;display: inline-block;" class="p6 nav_hoveer">
                            How to influence yourself to get skilled ?
                        </div>
                        <div class="p7">
                            Every human’s mind works differently, nevertheless, the ability to listen is the
                            same
                            conversely perceiving...
                        </div>
                    </div>

                    <div class="p8">
                        <div class="p9"
                            style="border: 1px solid rgb(238, 232, 232); border-left: none; border-bottom: none;">
                            <i class="fas fa-calendar-week fa-beat-fade"></i>
                            <div>16 May, 2019</div>
                        </div>
                        <div class="p9">
                            <i class="fas fa-comments fa-flip"></i>
                            <div>2 Comment</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="logos container">
        <div class="logos-slider">
            <img class="col-md-2" src="18.1.jpg">
            <img class="col-md-2" src="18.2.jpg">
            <img class="col-md-2" src="18.3.jpg">
            <img class="col-md-2" src="18.4.jpg">
            <img class="col-md-2" src="18.5.jpg">
            <img class="col-md-2" src="18.6.jpg">
            <img class="col-md-2" src="18.1.jpg">
            <img class="col-md-2" src="18.2.jpg">
            <img class="col-md-2" src="18.3.jpg">
            <img class="col-md-2" src="18.4.jpg">
            <img class="col-md-2" src="18.5.jpg">
            <img class="col-md-2" src="18.6.jpg">
        </div>
    </div>



    <div style="margin-top: 5px;" class="u1">
        <img src="21.jpg" width="100%" style="margin-top: -30px;">
    </div>

    <div class="e1">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div>
                        <div>
                            <h3 style="padding-left: 30px;color: #ffc600;margin-top: 30px;">Contact Us</h3>
                        </div>
                        <div style="margin-left: 30px;" class="line"></div>
                        <div>
                            <ul style="list-style: none;padding-top: 10px;">
                                <li>
                                    <span><i style="color: #ffc600;" class="fas fa-map-marker-alt"></i><span
                                            style="color: white;font-weight: 700;"> Spring Store
                                            London
                                            Oxford <br><span style="padding-left: 12px;">Street,012 United
                                                Kingdom</span>
                                </li>
                                <li style="margin-top: 12px;">
                                    <span><i style="color: #ffc600;" class="fas fa-phone-alt"></i> <span
                                            style="color: white;font-weight: 700;"> +00 1234
                                            456789</span>
                                </li>
                                <li style="margin-top: 12px;">
                                    <span><i style="color: #ffc600;" class="fas fa-envelope"></i><span
                                            style="color: white;font-weight: 700;">
                                            info@example.com</span>
                                </li>
                                <li style="margin-top: 12px;">
                                    <span><i style="color: #ffc600;" class="fas fa-fax"></i><span
                                            style="color: white;font-weight: 700;"> 000 123 2294 089</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-7 col-sm-6 col-12 e">
                    <div>
                        <div>
                            <h3 style="margin-left: 30px;color: #ffc600;margin-top: 30px;">Feature Links</h3>
                        </div>
                        <div style="margin-left: 30px;" class="line"></div>
                        <div style="display: flex;padding-top: 10px;">
                            <div style="margin-left: 30px;"><i style="color: #ffc600;"
                                    class="far fa-dot-circle"></i><span style="color: white;font-weight: 700;">
                                    About Us</a></div>
                            <div style="margin-left: 30px;"><i style="color: #ffc600;"
                                    class="far fa-dot-circle"></i><span style="color: white;font-weight: 700;">
                                    Teachers</a></div>
                        </div>
                        <div style="display: flex;margin-top: 10px;">
                            <div style="margin-left: 30px;"><i style="color: #ffc600;"
                                    class="far fa-dot-circle"></i><span style="color: white;font-weight: 700;">
                                    Courses</a></div>
                            <div style="margin-left: 40px;"><i style="color: #ffc600;"
                                    class="far fa-dot-circle"></i><span style="color: white;font-weight: 700;">
                                    Pricing</a></div>
                        </div>
                        <div style="display: flex;margin-top: 10px;">
                            <div style="margin-left: 30px;"><i style="color: #ffc600;"
                                    class="far fa-dot-circle"></i><span style="color: white;font-weight: 700;">
                                    Scholarship</a></div>
                            <div style="margin-left: 15px;"><i style="color: #ffc600;"
                                    class="far fa-dot-circle"></i><span style="color: white;font-weight: 700;">
                                    Blog</a></div>
                        </div>
                        <div style="display: flex;margin-top: 10px;">
                            <div style="margin-left: 30px;"><i style="color: #ffc600;"
                                    class="far fa-dot-circle"></i><span style="color: white;font-weight: 700;">
                                    Contact</a></div>
                            <div style="margin-left: 41px;"><i style="color: #ffc600;"
                                    class="far fa-dot-circle"></i><span style="color: white;font-weight: 700;">
                                    Event</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 e">
                    <h3 style="margin-left: 30px;color: #ffc600;margin-top: 30px;">Support</h3>
                    <div>
                        <div style="margin-left: 30px;" class="line"></div>
                        <div style="list-style: none;margin-left: 30px;padding-top: 10px;">
                            <div><i style="color: #ffc600;" class="far fa-dot-circle"></i><span
                                    style="color: white;font-weight: 700;"> FAQ's</a></div>
                            <div style="margin-top: 10px;"><i style="color: #ffc600;"
                                    class="far fa-dot-circle"></i><span style="color: white;font-weight: 700">
                                    Support</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 e">
                    <div style="margin-left: 23px;">
                        <div>
                            <h3 style="color: #ffc600;color: #ffc600;margin-top: 30px;">Download Our App</h3>
                        </div>
                        <div class="line"></div>
                        <div>
                            <div style="list-style: none;display: flex;padding-top: 10px;">
                                <div><img src="20.1.jpg" width="70%"></a></div>
                                <div><img src="20.2.jpg" width="70%"></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container e">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 wow animate__lightSpeedInRight">
                            <div style="display: flex;margin-top: 30px;">
                                <div class="q"><i class="fa-brands fa-facebook-f fa-bounce"></i></div>
                                <div class="q1">Facebook</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12  wow animate__lightSpeedInRight">
                            <div style="display: flex;margin-top: 30px;margin-left: 30px;">
                                <div class="r"><i class="fa-brands fa-twitter fa-bounce"></i></div>
                                <div class="r1">TWITTER</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12  wow animate__lightSpeedInLeft">
                            <div style="display: flex;margin-top: 30px;margin-left: 30px">
                                <div class="s"><i class="fa-brands fa-linkedin-in fa-bounce"></i></div>
                                <div class="s1">LINKEDIN</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 wow animate__lightSpeedInLeft">
                            <div style="display: flex;margin-top: 35px;margin-left: 30px">
                                <div class="t"><i class="fa-brands fa-youtube fa-bounce"></i></div>
                                <div class="t1">YOUTUBE</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 e">
                    <div style="text-align: center;margin-top: 50px;">
                        <p style="color: white;">Copyright © 2020<span style="color: #ffc600;"> E-learning</span>.
                            All
                            right
                            reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>

    setTimeout(function() {
        $(".loader_bg").fadeToggle();
    }, 1500)

</script>

</html>