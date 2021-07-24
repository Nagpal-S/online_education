<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="home.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- main1 fontstyle -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@1,200&display=swap" rel="stylesheet">

    <!-- main2 links style  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">

    <!-- cover intro up  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap" rel="stylesheet">

    <!-- google fonts  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>


    <section class="cover">
        <nav class="main1">
            <?php echo "<h1>Welcome " . $_SESSION['username'] . " !!!</h1>"; ?>
        </nav>
        <nav class="main2">
            <div class="logo">
                <h6> <a href=""> <img src="imgs/logo.png" alt="" width="30%" height="30%"> <br> edureka</a></h>
            </div>

            <ul class="nav-links">
                <li><a href="">home</a></li>
                <li><a href="">about</a></li>
                <li><a href="">courses</a></li>
                <li><a href="">contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
        <div class="intro">
            <div class="introcontent">
                <p class="top">
                    education is the most powerful weapon which you can use to change the world
                </p>
                <br> <br>
                <p class="bot">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti repellat cumque veniam modi totam et a dolorum ut? Ea assumenda voluptates necessitatibus unde laborum ipsam deserunt dicta illo ab id?
                </p>
            </div>
        </div>



    </section>

    <section class="sec2">
        <div class="wel">
            <h2>you are welcome...!</h2>
        </div>
        <div class="well">
            <div class="prog">
                <div class="icon one"><i class="material-icons" style="color:gold ;">
                        task_alt
                    </i></div>
                <p>program</p>
            </div>
            <div class="prog">
                <div class="icon two"><i class="material-icons" style="color: #00a8ff;">
                        groups
                    </i></div>
                <p>community</p>
            </div>
            <div class="prog">
                <div class="icon three"><i class="material-icons" style="color:#4cd137 ;">
                        bookmark
                    </i></div>
                <p>online courses</p>
            </div>
            <div class="prog">
                <div class="icon four"><i class="material-icons" style="color: #e84118;">
                        menu_book
                    </i></div>
                <p>resources</p>
            </div>
        </div>

    </section>

    <section class="sec3">
        <div class="introsectop">
            <h2>why education</h2>
        </div>
        <div class="introseccen">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit architecto similique laboriosam quas sint culpa consectetur id quisquam <br> veritatis! Et ex officiis qui voluptatem, quam impedit vero veniam quasi vel.</p>
        </div>
        <div class="introsecbot">
            <div class="cardone">
                <div class="pic">
                    <img src="imgs/why-img-1.png" alt="" height="100%" width="100%">
                </div>
                <div class="cardcontent">
                    <h2>proffesional teachers</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate officia consequuntur ipsa saepe asperiores assumenda, ut perferendis similique culpa, illum dolore debitis laborum dolorem? Voluptas numquam quod animi laborum illum.</p>
                </div>
                <div class="btn">
                    <input type="submit" name="bttn" value="learn more">
                </div>
            </div>


            <div class="cardtwo">
                <div class="pic">
                    <img src="imgs/why-img-2.png" alt="" height="100%" width="100%">
                </div>
                <div class="cardcontent">
                    <h2>comfortable study zone</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate officia consequuntur ipsa saepe asperiores assumenda, ut perferendis similique culpa, illum dolore debitis laborum dolorem? Voluptas numquam quod animi laborum illum.</p>
                </div>
                <div class="btn">
                    <input type="submit" name="bttn" value="learn more">
                </div>
            </div>


            <div class="cardthree">
                <div class="pic">
                    <img src="imgs/why-img-3.png" alt="" height="100%" width="100%">
                </div>
                <div class="cardcontent">
                    <h2>personal teaching</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate officia consequuntur ipsa saepe asperiores assumenda, ut perferendis similique culpa, illum dolore debitis laborum dolorem? Voluptas numquam quod animi laborum illum.</p>
                </div>
                <div class="btn">
                    <input type="submit" name="bttn" value="learn more">
                </div>
            </div>
        </div>
    </section>

    <section class="sec4">

        <h2>free trial online courses</h2>
        <form action="" method="POST">
            <div class="line">
                <input type="text" name="uname" placeholder="Enter Name" id="in1 " class="n">
                <input type="text" name="email" placeholder="Enter Email" id="in2" class="n">
                <select name="subject" id="in3" class="n">
                    <option value="bca">B.C.A</option>
                    <option value="bba">B.B.A</option>
                    <option value="bcom">B.COM</option>
                    <option value="ba">B.A</option>
                </select>
            </div>

            <br>
            <div class="btntwo">
                <input type="submit" name="submit" value="Enrol" id="in4">
            </div>
        </form>
        <?php

        include 'config.php';

        if (isset($_POST['submit'])) {
            $name = $_POST['uname'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            if ($name != "" && $email != "" && $subject != "") {
                $query = "INSERT INTO freecourse(uname, email, sub) VALUES ('$name','$email','$subject')";

                mysqli_query($conn, $query);
            }
            else{
                echo "<script>alert('please fill information correctly.')</script>";
            }
        }

        ?>
    </section>

    <section class="sec5">
        <div class="nskill">
            <h2>get new skills</h2>
        </div>
        <div class="nskillcontent">
            <div class="leftcont">
                <h4>learn about variouse topics</h4>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam ipsum sunt, at quae impedit perferendis debitis deserunt nisi porro culpa voluptates ratione a soluta? Unde, saepe sint! Recusandae, saepe quisquam.</p>
<br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis deserunt cumque libero unde eveniet, assumenda, magni blanditiis nostrum at doloribus quae? At voluptates amet sed doloribus nobis minus consequuntur veniam!</p>

                <div class="btnthree">
                    <input type="submit" name="get counceling">
                </div>
            </div>
            <div class="rightcont">
                <img src="imgs/img3.jpg" alt="" width="100%" height="100%">
            </div>
        </div>
    </section>

        <?php


            $lvct = " SELECT COUNT(userid) AS count FROM userdetails ";
            $result = mysqli_query($conn, $lvct);
            while($row = mysqli_fetch_assoc($result)){
                $outputstudents = $row['count'];
            }

            $lvctcourse = " SELECT COUNT(c_id) AS countcourse FROM courses ";
            $resultcourse = mysqli_query($conn, $lvctcourse);
            while($rowcourses = mysqli_fetch_assoc($resultcourse)){
                $outputcourses = $rowcourses['countcourse'];
            }

            $lvctfaculty = " SELECT COUNT(f_id) AS countfaculty FROM facultydetails ";
            $resultfaculty = mysqli_query($conn, $lvctfaculty);
            while($rowfaculty = mysqli_fetch_assoc($resultfaculty)){
                $outputfaculty = $rowfaculty['countfaculty'];
            }



        ?>




    <section class="sec6">
        <div class="livecount">
            <h3 >students enroled</h3>
            <p ><?php echo $outputstudents  ?></p>
        </div>
        <div class="livecount">
            <h3>courses</h3>
            <p><?php echo $outputcourses  ?></p>
        </div>
        <div class="livecount">
            <h3>faculty members</h3>
            <p><?php echo $outputfaculty  ?></p>
        </div>
    </section>

    <section class="foot">
        <div class="upper">
            <!-- <div class="uppercontent">
                <div class="logo">
                    <img src="imgs/logo.png" alt="" height="25%" width="25%">
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non dicta itaque rem excepturi consectetur fugiat ipsam harum, beatae quisquam nihil, voluptate nam quis, dignissimos aspernatur cupiditate iusto architecto ab ut.
                </p>
            </div> -->
            <div class="uppercontent">
                <ul>
                    <li class="head">information</li>
                    <a href=""><li>registration</li></a>
                    <a href=""><li>popular courses</li></a>
                    <a href=""><li>academic shcdule</li></a>
                    <a href=""><li>extra facilities</li></a>
                    <a href=""><li>events</li></a>
                </ul>
            </div>
            <div class="uppercontent">
                <ul>
                    <li class="head">information</li>
                    <a href=""><li>business administration</li></a>
                    <a href=""><li>arts & humanities</li></a>
                    <a href=""><li>science & technology</li></a>
                    <a href=""><li>economics and finances</li></a>
                </ul>
            </div>
            <div class="uppercontent">
                <ul>
                    <li class="head">have a question</li>
                    <li>abc/36, ww road, ludhiana.</li>
                    <li>1231231234</li>
                    <li>abc@gmail.com</li>
                </ul>
            </div>
        </div>
        <div class="lower">
            <p>
            Copyright <span>&copy</span> 2021 ||    Designed by Jyoti Yadav || All Rights Reserved.</p>
        </div>
    </section>
    






    <script>
        const navslide = () => {
            const burger = document.querySelector('.burger');
            const nav = document.querySelector('.nav-links');
            const navlinks = document.querySelectorAll('.nav-links li');
            //toggle
            burger.addEventListener('click', () => {
                nav.classList.toggle('nav-active');

                //animate
                navlinks.forEach((link, index) => {
                    if (link.style.animation) {
                        link.style.animation = '';
                    } else {
                        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
                    }
                });
                //burger animation
                burger.classList.toggle('toggle');

            });

        }

        navslide();
    </script>
</body>

</html>