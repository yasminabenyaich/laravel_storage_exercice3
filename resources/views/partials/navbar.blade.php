

<div class="wrapper">
    <div class="sidebar">
        <div>
        <h2>Dashboard</h2>
        <button type="button" class="btn btn-primary">
            Email<span class="badge bg-secondary">4</span>
          </button>
       
        </div>
        <ul>
            <li class="nav-item ">
                <a class="nav-link {{ $home === "home" ? "active" : "" }}" href={{ route('home') }}>Home</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ $home === "user" ? "active" : "" }}" href={{ route('user.index') }}>User</a>
            </li>
            
            <li class="nav-item ">
                <a class="nav-link {{ $home === "service" ? "active" : "" }}" href={{ route('service.index') }}>Service</a>
            </li>
            
            <li class="nav-item ">
                <a class="nav-link {{ $home === "caracteristique" ? "active" : "" }}" href={{ route('caracteristique.index') }}>Caracteristique</a>
            </li>
            
            <li class="nav-item ">
                <a class="nav-link {{ $home === "portfolio" ? "active" : "" }}" href={{ route('portfolio.index') }}>Portfolio</a>
            </li>
            
            <li class="nav-item ">
                <a class="nav-link {{ $home === "galerie" ? "active" : "" }}" href={{ route('galerie.index') }}>Galerie</a>
            </li>
        </ul>
    </div>
