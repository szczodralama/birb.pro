<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style_home.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <span class="links_name">Setting</span>
            </a>
            <span class="tooltip">Setting</span>
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
    <div class="text">Strona w przygotowaniu </div>
    <div class="text2"></div>
</section>
<script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();
    });

    searchBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();
    });


    function menuBtnChange() {
        if(sidebar.classList.contains("open")){
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        }else {
            closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
        }
    }
</script>
</body>
</html>
