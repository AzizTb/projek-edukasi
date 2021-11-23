<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">MatLogi</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <!-- Top Navigation: Left Menu -->
    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="index"><i class="fa fa-home fa-fw"></i> Website</a></li>
    </ul>

    <!-- Top Navigation: Right Menu -->
    <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                lainnya <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="sign"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>

    <!-- Sidebar -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">

            <ul class="nav" id="side-menu">
                <li>
                    <a href="beranda" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="manage"><i class="fa fa-sitemap fa-fw"></i> manage akun <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="listuser">akun login</a>
                        </li>
                        <li>
                            <a href="listadmin">akun Admin</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="materi"><i class="fa fa-sitemap fa-fw"></i> manage materi <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="listmateri">list materi</a>
                        </li>
                        <li>
                            <a href="buatmateri">membuat materi</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
