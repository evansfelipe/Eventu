<nav class="navbar sticky-top navbar-expand-lg navbar-dark minavbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegacionPrincipal" aria-controls="navegacionPrincipal" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand d-none d-sm-inline-block" href="home.php">Eventu</a>
    <form class="form-check-inline mx-0 mx-md-5" action="busqueda.php" method="get">
        <input type="hidden" name="filtro" value="nombre"/>
        <input class="form-control mr-sm-2 my-2" type="search" name="consulta" placeholder="Buscar..." aria-label="Search" required>
        <button class="boton-busqueda" type="submit"><i class="fa fa-search"></i></button>
    </form>
    <div class="collapse navbar-collapse" id="navegacionPrincipal">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="">Categorías</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Notificaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Mi perfil</a>
            </li>
        </ul>
    </div>
</nav>