<a href="javascript:void(0);" class="navBar__menu" id="navBar__menu" onclick="openMenu()">Menu</a>

<nav class="navBar" id="navBar">

    <a class="navBar__button" href="/huisdieren">
        Home
    </a>

    <a class="navBar__button" href="/create/huisdier">
        Huisdier Plaatsen
    </a>

    <a class="navBar__button" href="/aanvragen">
        Aanvragen
    </a>
    @if(Auth::user()->role === "Eigenaar")

    <a class="navBar__button" href="/oppassers">
        Oppassers
    </a>

    <a class="navBar__button" href="/create/oppas">
        Opgeven als oppas
    </a>
    @elseif(Auth::user()->role === "Oppas")
    <a class="navBar__button" href="/oppas/{{Auth::user()->id}}">
        Profiel
    </a>
    @elseif(Auth::user()->role === "Admin")
    <a class="navBar__button" href="/oppassers">
        Oppassers
    </a>
    @endif

    <form class="navBar__button navBar__buttonRight" id="uitloggen" method="POST" action="{{ route('logout') }}">
        @csrf
        <a class="u-text-decoration-none u-text-white u-text-big" href="javascript:{}" onclick="document.getElementById('uitloggen').submit()">
            Logout
        </a>
    </form>

</nav>


<script src="/js/navigatie.js"></script>
