<nav class="container">
    <ul>
        <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Hjem</a></li>
    </ul>
    <ul>
        <li><a href="/recipes" class="{{ request()->is('recipes') ? 'active' : '' }}">Oppskrifter</a></li>
        <li><a href="/ingredients" class="{{ request()->is('ingredients') ? 'active' : '' }}">Ingredienser</a></li>
        <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">Om</a></li>
    </ul>
</nav>