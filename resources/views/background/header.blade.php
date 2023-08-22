    
    <!-- Navbar Start -->
    <div class="container-fluid fixed-top" style="background-color:rgba(255,239,213)">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light py-2 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <img class="img-fluid" src="/storage/images/Logo.jpg" alt="Logo" style="width:95px; height:47px">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/foods" class="nav-item nav-link active">Home</a>
                        <a href="#" class="nav-item nav-link">About</a>
                        <a href="/foods" class="nav-item nav-link">Menu</a>
                        <a href="/tablereses/create" class="nav-item nav-link">Book a table</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="/foods" class="dropdown-item">Menu Manager</a>
                                <a href="/employees" class="dropdown-item">Employee Manager</a>
                                <a href="/tablereses" class="dropdown-item">Table Manager</a>
                            </div>
                        </div>
                        @if(Auth::check())
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle bi bi-star" data-bs-toggle="dropdown">{{Auth::user()->name}}</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="/foods/create" class="dropdown-item">New Food</a>
                                <a href="/employees/create" class="dropdown-item"> Add Employee</a>
                                <a href="/tablereses/create" class="dropdown-item">New Table</a>
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary"
                                    > Logout</button>
                                </form>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div id="search" class="border-start ps-4 d-none d-lg-block">
                    <form action="{{route('search')}}" method="get">
                        <input type="text" class="form-control fa fa-search" placeholder="search" name="search">
                    </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->