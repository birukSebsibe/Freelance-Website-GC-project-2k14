<!-- Navbar Start -->

<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="{{route('client.home')}}" class="nav-item nav-link">Jobs</a>
        <a href="about.html" class="nav-item nav-link">Search</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">My Jobs</a>
            <div class="dropdown-menu rounded-0 m-0">
                <a href="{{route('client.bidding', 1)}}" class="dropdown-item">BIDDING</a>
                <a href="{{route('client.bidding', 2)}}" class="dropdown-item">ON-PROGRESS</a>
                <a href="{{route('client.bidding', 3)}}" class="dropdown-item">COMPLETED</a>
                <a href="{{route('client.bidding', 4)}}" class="dropdown-item">CANCELLED</a>
            </div>
        </div>
        <a href="#" class="nav-item nav-link">Portfolio</a>
        <a href="#" class="nav-item nav-link">Report</a>
    </div>
    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">PROFILE</a>
        <div class="dropdown-menu rounded-0 m-0">
            <a href="#" class="dropdown-item">Edit Profile</a>
            <a class="dropdown-item" href="{{ route('freelancer.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                         <form action="{{ route('freelancer.logout') }}" id="logout-form" method="post">@csrf</form>
        </div>
    </div>
</div>

<!-- Navbar End -->