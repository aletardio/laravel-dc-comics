<header>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <a href="{{ route('homepage') }}">
                    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Dc">
                </a>
            </div>
            <div class="col-8">
                <ul>
                    <li>
                        <a href="#">Characters</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRouteName() === 'comics.index' || Route::currentRouteName() === 'comics.show' || Route::currentRouteName() === 'comics.create' || Route::currentRouteName() === 'comics.edit' ? 'active' : '' }}"
                            href="{{ route('comics.index') }}">Comics</a>
                    </li>
                    <li>
                        <a href="#">Movies</a>
                    </li>
                    <li>
                        <a href="#">Tv</a>
                    </li>
                    <li>
                        <a href="#">Games</a>
                    </li>
                    <li>
                        <a href="#">Collectibles</a>
                    </li>
                    <li>
                        <a href="#">Videos</a>
                    </li>
                    <li>
                        <a href="#">Fans</a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
                    <li>
                        <a href="#">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
