<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <!-- Link Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="resources/css/sidemenu.css"> -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

:root {
    --color-default: #004f83;
    --color-second: #0067ac;
    --color-white: #fff;
    --color-body: #e4e9f7;
    --color-light: #e0e0e0;
}


* {
    padding: 0%;
    margin: 0%;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 100vh;
}

.sidebar {
    min-height: 100vh;
    width: 78px;
    padding: 6px 14px;
    z-index: 99;
    background-color: var(--color-default);
    transition: all .5s ease;
    position: fixed;
    top: 0;
    left: 0;
}

.sidebar.open {
    width: 250px;
}

.sidebar .logo_details {
    height: 60px;
    display: flex;
    align-items: center;
    position: relative;
}

.sidebar .logo_details .icon {
    opacity: 0;
    transition: all 0.5s ease;
}



.sidebar .logo_details .logo_name {
    color: var(--color-white);
    font-size: 22px;
    font-weight: 600;
    opacity: 0;
    transition: all .5s ease;
}

.sidebar.open .logo_details .icon,
.sidebar.open .logo_details .logo_name {
    opacity: 1;
}

.sidebar .logo_details #btn {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    font-size: 23px;
    text-align: center;
    cursor: pointer;
    transition: all .5s ease;
}

.sidebar.open .logo_details #btn {
    text-align: right;
}

.sidebar i {
    color: var(--color-white);
    height: 60px;
    line-height: 60px;
    min-width: 50px;
    font-size: 25px;
    text-align: center;
}

.sidebar .nav-list {
    margin-top: 20px;
    height: 100%;
}

.sidebar li {
    position: relative;
    margin: 8px 0;
    list-style: none;
}

.sidebar li .tooltip {
    position: absolute;
    top: -20px;
    left: calc(100% + 15px);
    z-index: 3;
    background-color: var(--color-white);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    padding: 6px 14px;
    font-size: 15px;
    font-weight: 400;
    border-radius: 5px;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
}

.sidebar li:hover .tooltip {
    opacity: 1;
    pointer-events: auto;
    transition: all 0.4s ease;
    top: 50%;
    transform: translateY(-50%);
}

.sidebar.open li .tooltip {
    display: none;
}

.sidebar input {
    font-size: 15px;
    color: var(--color-white);
    font-weight: 400;
    outline: none;
    height: 35px;
    width: 35px;
    border: none;
    border-radius: 5px;
    background-color: var(--color-second);
    transition: all .5s ease;
}

.sidebar input::placeholder {
    color: var(--color-light)
}

.sidebar.open input {
    width: 100%;
    padding: 0 20px 0 50px;
}

.sidebar .bx-search {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 22px;
    background-color: var(--color-second);
    color: var(--color-white);
}

.sidebar li a {
    display: flex;
    height: 100%;
    width: 100%;
    align-items: center;
    text-decoration: none;
    background-color: var(--color-default);
    position: relative;
    transition: all .5s ease;
    z-index: 12;
}

.sidebar li a::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    transform: scaleX(0);
    background-color: var(--color-white);
    border-radius: 5px;
    transition: transform 0.3s ease-in-out;
    transform-origin: left;
    z-index: -2;
}

.sidebar li a:hover::after {
    transform: scaleX(1);
    color: var(--color-default)
}

.sidebar li a .link_name {
    color: var(--color-white);
    font-size: 15px;
    font-weight: 400;
    white-space: nowrap;
    pointer-events: auto;
    transition: all 0.4s ease;
    pointer-events: none;
    opacity: 0;
}

.sidebar li a:hover .link_name,
.sidebar li a:hover i {
    transition: all 0.5s ease;
    color: var(--color-default)
}

.sidebar.open li a .link_name {
    opacity: 1;
    pointer-events: auto;
}

.sidebar li i {
    height: 35px;
    line-height: 35px;
    font-size: 18px;
    border-radius: 5px;
}

.sidebar li.profile {
    position: fixed;
    height: 60px;
    width: 78px;
    left: 0;
    bottom: -8px;
    padding: 10px 14px;
    overflow: hidden;
    transition: all .5s ease;
}

.sidebar.open li.profile {
    width: 250px;
}

.sidebar .profile .profile_details {
    display: flex;
    align-items: center;
    flex-wrap: nowrap;
}

.sidebar li img {
    height: 45px;
    width: 45px;
    object-fit: cover;
    border-radius: 50%;
    margin-right: 10px;
}

.sidebar li.profile .name,
.sidebar li.profile .designation {
    font-size: 15px;
    font-weight: 400;
    color: var(--color-white);
    white-space: nowrap;
}

.sidebar li.profile .designation {
    font-size: 12px;
}

.sidebar .profile #log_out {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    background-color: var(--color-second);
    width: 100%;
    height: 60px;
    line-height: 60px;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.5s ease;
}

.sidebar.open .profile #log_out {
    width: 50px;
    background: none;
}

.home-section {
    position: relative;
    background-color: var(--color-body);
    min-height: 100vh;
    top: 0;
    left: 78px;
    width: calc(100% - 78px);
    transition: all .5s ease;
    z-index: 2;
}

.home-section .text {
    display: inline-block;
    color: var(--color-default);
    font-size: 25px;
    font-weight: 500;
    margin: 18px;
}

.sidebar.open~.home-section {
    left: 250px;
    width: calc(100% - 250px);
}

.sidebar li.active a {
    background-color: var(--color-second);
    color: var(--color-default)
}
.sidebar li.active a i {
    /* color: #000; Black color for active item icon */
        color: var(--color-default)

}

.sidebar li.active a::after {
    transform: scaleX(1);
    background-color: var(--color-white); /* Ensure the highlight color is applied */
}

.sidebar li.active a .link_name {
    color: var(--color-default)
}



.container {
            transition: margin-left 0.5s ease;
        }

        .sidebar.open~.container {
            margin-left: 250px;
        }
    </style>
</head>
<body>

    <div class="sidebar open">
        <div class="logo_details">
            <i class="bx bxl-audible icon"></i>
            <div class="logo_name">Side Menu</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li class="{{ request()->routeIs('resident.home') ? 'active' : '' }}">
    <a href="{{ route('resident.home') }}">
        <i class="bx bx-grid-alt"></i>
        <span class="link_name">Dashboard</span>
    </a>
    <span class="tooltip">Dashboard</span>
</li>

<li class="{{ request()->routeIs('resident.visitors.index') ? 'active' : '' }}">
    <a href="{{ route('resident.visitors.index') }}">
        <i class="bx bx-grid-alt"></i>
        <span class="link_name">Visitors</span>
    </a>
    <span class="tooltip">Visitors</span>
</li>

<li class="{{ request()->routeIs('resident.entry-passes.index') ? 'active' : '' }}">
    <a href="{{ route('resident.entry-passes.index') }}">
        <i class="bx bx-user"></i>
        <span class="link_name">EntryPass</span>
    </a>
    <span class="tooltip">EntryPass</span>
</li>

            <!-- <li>
                <a href="#">
                    <i class="bx bx-chat"></i>
                    <span class="link_name">Message</span>
                </a>
                <span class="tooltip">Message</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-pie-chart-alt-2"></i>
                    <span class="link_name">Analytics</span>
                </a>
                <span class="tooltip">Analytics</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-folder"></i>
                    <span class="link_name">File Manager</span>
                </a>
                <span class="tooltip">File Manager</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cart-alt"></i>
                    <span class="link_name">Order</span>
                </a>
                <span class="tooltip">Order</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="link_name">Settings</span>
                </a>
                <span class="tooltip">Settings</span>
            </li> -->
            <li class="profile">
                <div class="profile_details">
                    <img src="profile.jpeg" alt="profile image">
                    <div class="profile_content">
                        <div class="name">{{ Auth::user()->name }}</div>
                        <div class="designation">{{ Auth::user()->type }}</div>
                    </div>
                </div>
                <i class="bx bx-log-out" id="log_out" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></i>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

            </li>
            
        </ul>
    </div>
    <!-- <section class="home-section">
        <div class="text">Dashboard</div>
    </section> -->
    <!-- Yield content specific to each page -->
    <div class="container mt-5 ml-7 p-4">
        @yield('content')
    </div>
    <!-- Scripts -->
    <!-- <script src="resources/js/sidemenu.js"></script> -->
    <script>
        document.getElementById('btn').addEventListener('click', function() {
            // document.querySelector('.sidebar').classList.toggle('open');
        });
    </script>
     <script>
        window.onload = function(){
            const sidebar = document.querySelector(".sidebar");
            const closeBtn = document.querySelector("#btn");
            const searchBtn = document.querySelector(".bx-search")

            closeBtn.addEventListener("click", function(){
                sidebar.classList.toggle("open")
                menuBtnChange()
            })

            searchBtn.addEventListener("click", function(){
                sidebar.classList.toggle("open")
                menuBtnChange()
            })

            function menuBtnChange(){
                if(sidebar.classList.contains("open")){
                    closeBtn.classList.replace("bx-menu","bx-menu-alt-right")
                }else{
                    closeBtn.classList.replace("bx-menu-alt-right","bx-menu")
                }
            }
        }
    </script>
</body>
</html>