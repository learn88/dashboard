{{-- <div class="sidebar" data-active-color="green" data-background-color="black" data-image="../assets/img/sidebar-1.jpg"> --}}
<div class="sidebar" data-active-color="green" data-background-color="white">

    <div class="logo">
        <a href="#" class="simple-text">
            Laravel Dashboard
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="#" class="simple-text">
            L D
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="/uploads/images/logo.jpg" />
            </div>
            {{-- <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    Sunny International
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">My Profile</a>
                        </li>
                        <li>
                            <a href="#">Edit Profile</a>
                        </li>
                        <li>
                            <a href="#">Settings</a>
                        </li>
                    </ul>
                </div>
            </div> --}}
        </div>
        <ul class="nav">
            <li class="active">
                <a href="./dashboard.html">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#componentsExamples">
                    <i class="material-icons">apps</i>
                    <p>Components
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="componentsExamples">
                    <ul class="nav">
                        <li>
                            <a href="#">Buttons</a>
                        </li>
                        <li>
                            <a href="#">Grid System</a>
                        </li>
                        <li>
                            <a href="#">Panels</a>
                        </li>
                        <li>
                            <a href="#">Sweet Alert</a>
                        </li>
                        <li>
                            <a href="#">Notifications</a>
                        </li>
                        <li>
                            <a href="#">Icons</a>
                        </li>
                        <li>
                            <a href="#">Typography</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">date_range</i>
                    <p>Calendar</p>
                </a>
            </li>
        </ul>
    </div>
</div>
