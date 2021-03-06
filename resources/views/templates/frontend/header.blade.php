<!-- menubar area start -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">{{ App\Info::all()->first()->name }}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('home.index') }}">Beranda</a></li>
            <li><a href="{{ route('home.buku') }}">Daftar Buku</a></li>
            <li><a href="{{ route('home.user') }}">Daftar Perujuk</a></li>
            <li><a href="#">Informasi</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
        </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
<!-- menubar area end -->