<nav class="navbar px-12 py-6 flex justify-between">
    <div class="brand-wrapper flex justify-start items-center">
        <img src="{{ url('storage/img/EVZ-LOGO-AK-XS.png') }}" alt="Logo Brand" class="brand-img w-10">
        <a href="{{ url('') }}" class="brand-link mx-2 font-semibold text-2xl"> Evariz Digital Solusindo</a>
    </div>
    <div class="navbar-menu">
        <ul class="nav-menu flex justify-evenly">
            <li class="nav-item">
                <a href="{{ url('') }}" class="nav-link px-3 py-2 font-semibold mx-1">
                    Beranda
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/vps') }}" class="nav-link px-3 py-2 font-semibold mx-1">
                    VPS
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/about') }}" class="nav-link px-3 py-2 font-semibold mx-1">
                    About
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/contact') }}" class="nav-link px-3 py-2 font-semibold mx-1">
                    Contact Us
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/login') }}" class="nav-link px-3 py-2 font-semibold mx-1 border-solid border rounded-lg border-[#0099ff]">
                    Login
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/register') }}" class="nav-link px-3 py-2 font-semibold mx-1 rounded-lg bg-[#0099ff] text-white">
                    Register
                </a>
            </li>
        </ul>
    </div>
</nav>
