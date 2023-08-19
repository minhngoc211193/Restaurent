    
    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <img class="img-fluid" src="img/logo.png" alt="Logo">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/foods" class="nav-item nav-link active">Home</a>
                        <a href="#" class="nav-item nav-link">About</a>
                        <a href="/foods" class="nav-item nav-link">Menu</a>
                        <a href="/types" class="nav-item nav-link">Store</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="/foods" class="dropdown-item">Menu Manager</a>
                                <a href="/employees" class="dropdown-item">Employee Manager</a>
                                <a href="/tablereses" class="dropdown-item">Table Manager</a>
                            </div>
                        </div>
                        <a href="#" class="nav-item nav-link">Contact</a>
                    </div>
                    <div id="search" class="border-start ps-4 d-none d-lg-block">
                    <form action="route('/search')" method="get">
                        <input type="text" class="form-control" placeholder="search">
                        <button type="submit" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
                    </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->