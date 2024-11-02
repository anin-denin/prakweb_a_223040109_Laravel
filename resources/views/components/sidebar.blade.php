<!-- sidebar.blade.php -->
<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 250px; height: 100vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
        <span class="fs-4">Dashboard</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/dashboard" class="nav-link active" aria-current="page">
                <i class="bi bi-house-door"></i>
                Home
            </a>
        </li>
        <li class="nav-item">
            <a href="/posts" class="nav-link text-dark">
                <i class="bi bi-file-earmark-text"></i>
                Posts
            </a>
        </li>
        <li class="nav-item">
            <a href="/about" class="nav-link text-dark">
                <i class="bi bi-info-circle"></i>
                About
            </a>
        </li>
        <li class="nav-item">
            <a href="/contact" class="nav-link text-dark">
                <i class="bi bi-envelope"></i>
                Contact
            </a>
        </li>
        <li class="nav-item">
            <a href="/authors" class="nav-link text-dark">
                <i class="bi bi-people"></i>
                Authors
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://via.placeholder.com/40" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Anin Deninadia</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/logout">Sign out</a></li>
        </ul>
    </div>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted mt-4">
        <span>Administrator</span>
    </h6>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="/dashboard/users" class="nav-link text-dark">User Management</a>
        </li>
        <li class="nav-item">
            <a href="/dashboard/settings" class="nav-link text-dark">Site Settings</a>
        </li>
    </ul>
</div>
