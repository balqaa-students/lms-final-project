<header class="edu-header disable-transparent header-sticky">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-2 col-md-6 col-6">
                <div class="logo nav-logo">
                    <a href="{{ route('home') }}">
                        <div class="glitch-wrapper">
                            <div class="glitch" data-glitch="SPEED ACCESS">SPEED ACCESS</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-xl-block ">
                <nav class="mainmenu-nav d-none d-lg-block">
                    <ul class="mainmenu justify-content-start">
                        <li class="has-droupdown"><a href="#">Years</a>
                            <ul class="submenu">
                                @foreach ($years as $year)
                                <li><a href="{{ route('home.topics' , $year->id) }}">{{ $year->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>
