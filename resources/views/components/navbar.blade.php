<div class="row index-nav g-0">
    <div class=" col-sm-12 g-0">
        <nav class="navbar navbar-expand-lg g-0">
            <div class="container-fluid g-0">
                <div class="navbar-brand"><a href="/">BookRent</a></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-justify"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style="padding-top: 0px; padding-bottom: 0px;">
                    <ul class="navbar-nav">

                        @auth
                        @if(auth()->user()->firstname === "Admin" )
                        <li class="nav-item"><a href="/adminPanel/users">AdminPanel</a></li>
                        @else
                        <li class="nav-item"><a href="/missingbook">Chýba vám kniha?</a></li>
                        <li class="nav-item"><a href="/catalog">Katalóg kníh</a></li>

                        <li class="nav-item"><a href="/">Domov</a></li>
                        <li class="nav-item"><a href="/about">O nás</a></li>
                        <li class="nav-item"><a href="/contact">Kontakt</a></li>
                        @endif
                        @endauth

                        @guest
                        <li class="nav-item"><a href="/">Domov</a></li>
                        <li class="nav-item"><a href="/about">O nás</a></li>
                        <li class="nav-item"><a href="/contact">Kontakt</a></li>
                        @endguest

                        @auth
                        <li>
                            <div class="logout">
                                <span class="welcomeMessage">Vitaj, {{ auth()->user()->firstname }} !</span>
                                <div class="logout">
                                    <form method='POST' action="/logout">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-light" data-bs-toggle="modal"
                                            data-bs-target="#loginModal">Odhlásiť sa</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        @else
                        <li>
                            <div class="login">
                                <form action="login">
                                    <button type="submit" class="btn btn-outline-light" data-bs-toggle="modal"
                                        data-bs-target="#loginModal">Prihlásiť sa</button>
                                </form>
                                <span><a href="register">Nemáš vytvorený učet? Registruj sa!</a></span>
                            </div>
                        </li>
                        @endauth

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>