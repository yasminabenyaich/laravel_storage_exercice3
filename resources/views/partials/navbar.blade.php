
<nav class="navbar d-flex flex-column p-3 fixed-top">
<div class="wrapper">
    <div class="sidebar">
        <ul>
            <li class="nav-item">
                <a class="nav-link {{ $home === "home" ? "active" : "" }}" href={{ route('home') }}>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $home === "user" ? "active" : "" }}" href={{ route('user.index') }}>User</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link {{ $home === "service" ? "active" : "" }}" href={{ route('service.index') }}>Service</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link {{ $home === "caracteristique" ? "active" : "" }}" href={{ route('caracteristique.index') }}>Caracteristique</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link {{ $home === "portfolio" ? "active" : "" }}" href={{ route('portfolio.index') }}>Portfolio</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link {{ $home === "galerie" ? "active" : "" }}" href={{ route('galerie.index') }}>Galerie</a>
            </li>
        </ul>
    </div>
</nav>