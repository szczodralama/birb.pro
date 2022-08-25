<?php
session_start();
if (isset($_SESSION['logged'])){
    header('Location: logged.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="google" content="notranslate">
    <link rel="stylesheet" href="style_blog.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js?render=6Lf5ZUwhAAAAANa8rjdWtIvNx2k9OSkhYjq5I63t"></script>
</head>
<body>
<div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">Birb page</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
        <li>
            <i class='bx bx-search' ></i>
            <input type="text" placeholder="Search...">
            <span class="tooltip">Search</span>
        </li>
        <li>
            <a href="https://birb.pro/home.html">
                <i class='bx bx-home'></i>
                <span class="links_name">Home</span>
            </a>
            <span class="tooltip">Home</span>
        </li>
        <li>
            <a href="https://birb.pro/aboutme.html">
                <i class='bx bxs-user-account' ></i>
                <span class="links_name">About me</span>
            </a>
            <span class="tooltip">About me</span>
        </li>
        <li>
            <a href="https://birb.pro/blog.html">
                <i class='bx bx-rocket' ></i>
                <span class="links_name">Blog</span>
            </a>
            <span class="tooltip">Blog</span>
        </li>
        <li>

        <li>
            <a href="https://birb.pro/datastorage.html">
                <i class='bx bx-hdd' ></i>
                <span class="links_name">Data storage</span>
            </a>
            <span class="tooltip">Data storage</span>
        </li>

        <li>
            <a href="https://birb.pro/account.html">
                <i class='bx bx-user' ></i>
                <span class="links_name">My account</span>
            </a>
            <span class="tooltip">My account</span>
        </li>
        <li>
            <a href="https://birb.pro/settings.html">
                <i class='bx bx-cog' ></i>
                <span class="links_name">Settings</span>
            </a>
            <span class="tooltip">Settings</span>
        </li>
        <li class="profile">
            <div class="profile-details">
                <img src="https://media.discordapp.net/attachments/943819163661660173/991821968540172409/unknown.png" alt="profileImg">
                <div class="name_job">
                    <div class="name">Sikorka</div>
                    <div class="job">#3102</div>
                </div>
            </div>
            <i class='bx bx-log-out' id="log_out" ></i>
        </li>
    </ul>
</div>
<section class="home-section">
    <div id="blog_container">
        <div id="article" onclick="document.getElementById('id03').style.display='block'">
            <img id="img_article" width="300px" style="border-radius: 12px;" src="https://pbs.twimg.com/media/FZ5KnsDVQAEQiNB?format=jpg&name=900x900" alt="B7">
            <p id="article_text">Full duration static fire</p>
<!--            <p id="article_date">25/08/2022</p>-->
        </div> <!--///======///-->
    </div>
    <div id="id03" class="modal animate">
<!--            <div class="imgcontainer">-->
<!--                <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>-->
<!--                <img src="Secure%20login-rafiki.svg" alt="Avatar" class="avatar">-->
<!--            </div>-->

            <div id="in_modal_content">
                <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img id="img_article" width="1100px" style="border-radius: 10px;" src="https://pbs.twimg.com/media/FZwZBv7VEAAL_Kc.jpg" alt="B7">
                <span id="in_modal_text">
                    <br>11 sierpnia o godzinie 19:48 UTC (21:48 czasu polskiego) miał miejsce pierwszy w historii tkzw.
                    "Full duration static fire". Podczas testów <br>Raptor RB 39 został uruchomiony na 20 sekund,
                    co pozwoliło na przetestowanie systemu autogenicznego podtrzymywania ciśnienia<br> w zbiornikach
                    (gazy wylotowe trafiają do wnętrza zbiorników powodując wzrost ciśnienia utraconego na skutek
                    zmniejszania objętości<br> paliwa podczas lotu). Jest ono niezbędne ponieważ Starship jest wykonany
                    ze stali nierdzewnej o grubości 3.6mm. Gdyby nie było<br> ciśnienia w zbiornikach, rozpadłby się w pizdu jak
                    Atlas Agena.<br>
                </span>
            </div>

    </div>

</section>
<script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();//calling the function(optional)
    });

    searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search icon
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
        if(sidebar.classList.contains("open")){
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
        }else {
            closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
        }
    }
</script>


<!--=============================== logging bar ==========================================================================================-->


<div id="sticky_top_container">
    <button class='bx bxs-user' onclick="document.getElementById('id01').style.display='block'" style="width:auto; position: sticky; left: 1640px;"><span>  Sign in</span></button>
    <button class='bx bx-pencil' onclick="document.getElementById('id02').style.display='block'" style="width:auto; position: sticky; left: 1750px;"><span>  Sign up</span></button>
</div>

<div id="id01" class="modal">

    <form class="modal-content animate" action="primary_connection.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="Secure%20login-rafiki.svg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="Login" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="Password" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f5f2db">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <a id="src" href="https://storyset.com/people">People illustrations by Storyset</a>
        </div>
    </form>
    <?php
    if (isset($_SESSION['error'])) echo $_SESSION['error'];
    ?>
</div>

<div id="id02" class="modal">

    <form class="modal-content animate" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="Secure%20login-amico.svg" alt="Avatar" class="avatar">

        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw01"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw01" required>

            <label for="psw02"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw02" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <input type="hidden" name="token_generate" id="token_generate">    <!-- recaptcha -->

        </div>

        <div class="container" style="background-color:#f5f2db">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
            <a id="src" href="https://storyset.com/people">People illustrations by Storyset</a>
            <!--            <span class="psw">Forgot <a href="#">password?</a></span>-->
        </div>
    </form>
</div>

<script>
    // modal
    var modal1 = document.getElementById('id01');

    // when the user clicks anywhere outside the modal, close it
    window.onclick = function(event) {
        if (event.target === modal1) {
            modal1.style.display = "none";
        }
    }
</script>

</body>
</html>

<script>
    function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute('6Lf5ZUwhAAAAANa8rjdWtIvNx2k9OSkhYjq5I63t', {action: 'submit'}).then(function(token) {
                // Add your logic to submit to your backend server here.
                var response = document.getElementById('token_generate')});
            response.value = token;
        });
    }
</script>

