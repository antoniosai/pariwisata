<ul class="nav nav-list">
    <li class="active">
        <a href="#">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
        </a>

        <b class="arrow"></b>
    </li>
    


    
    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-database"></i>

            <span class="menu-text">Master Data</span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="{{ route('user.index') }}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Data User
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="{{ route('admin.paket.index') }}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Data Paket
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="{{ route('admin.gallery.index') }}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Data Gallery
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="#">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Data Informasi
                </a>

                <b class="arrow"></b>
            </li>

        </ul>
    </li>
    <li>
        <a href="#">
            <i class="menu-icon fa fa-wrench"></i>
            <span class="menu-text"> Pengaturan </span>
        </a>

        <b class="arrow"></b>
    </li>
    <li>
        <a href="index.html">
            <i class="menu-icon fa fa-question-circle"></i>
            <span class="menu-text"> Bantuan </span>
        </a>

        <b class="arrow"></b>
    </li>
</ul><!-- /.nav-list -->
