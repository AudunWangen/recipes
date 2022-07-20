<header>
    <nav>
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Hjem</a>
        <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">Om</a>
    </nav>
</header>