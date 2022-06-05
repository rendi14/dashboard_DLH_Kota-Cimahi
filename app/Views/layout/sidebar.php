<?php $uri = current_url(true);
$segment = $uri->getSegment(2);
?>
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <!-- logo -->
    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="/assets/img/Logo/Logo.png" alt="">
        </a>
    </div>
    <!-- end logo -->

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php if ($segment == 'dashboard') {
                                    echo " ";
                                } else {
                                    echo "collapsed";
                                }   ?>  " href="/dashboard">
                <i class="bx bxs-dashboard"></i>
                <span>Dashboard </span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link <?php if ($segment == 'bnpencemaran') {
                                    echo " ";
                                } else {
                                    echo "collapsed";
                                }   ?> " href="#">
                <i class="bx bx-line-chart"></i><span>Beban Pencemaran</span>
            </a>
        </li><!-- End Beban Pencemaran Nav -->

        <li class="nav-item">
            <a class="nav-link  <?php if ($segment == 'informasititikpantau') {
                                    echo " ";
                                } else {
                                    echo "collapsed";
                                }   ?>" data-bs-toggle="collapse" href="#">
                <i class="bx bx-book-reader"></i><span>Informasi Titik Pantau</span>
            </a>
        </li><!-- End Informasi Titik Pantau Nav -->

        <li class="nav-item">
            <a class="nav-link  <?php if ($segment == 'titikpantau') {
                                    echo " ";
                                } else {
                                    echo "collapsed";
                                }   ?>" data-bs-toggle="collapse" href="#">
                <i class="bx bxs-user"></i><span>Titik Pantau</span>
            </a>
        </li><!-- End Titik Pantau Nav -->

        <li class="nav-item">
            <a class="nav-link  <?php if ($segment == 'indexair') {
                                    echo " ";
                                } else {
                                    echo "collapsed";
                                }   ?>" href="#">
                <i class="bx bxs-cog"></i><span>Index Kualitas Air</span>
            </a>
        </li><!-- End Index Kualitas Air Nav -->

        <li class="nav-item">
            <a class="nav-link  <?php if ($segment == 'Mutuair') {
                                    echo " ";
                                } else {
                                    echo "collapsed";
                                }   ?>" href="#">
                <i class="bx bxs-cog"></i><span>Status Mutu Air </span>
            </a>
        </li><!-- End Status Mutu Air Nav -->

        <li class="nav-item">
            <div class="logout">
                <a class="nav-link collapsed" href="/Auth/logout">
                    <i class="bx bx-log-out"></i>
                    <span>Logout</span>
                </a>
            </div>
        </li><!-- End Logout Page Nav -->

</aside>
<!-- End Sidebar-->