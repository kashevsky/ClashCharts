<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ URL('/') }}">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="shortcut icon" href="">
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <base href="{{ URL('/') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>

<body>
    <header>
        <div class="header_container">
            <div class="header_row">
                <div class="header_logo">
                    <div class="header_logo_img">
                        <img src="img/logo.svg">
                    </div>
                    <div class="header_logo_text">
                        Clash Charts
                    </div>
                </div>
                <div class="header_navigation">
                    <nav>
                        <a href="">
                            <div class="header_navigation__item">
                                Home
                            </div>
                        </a>
                        <a href="">
                            <div class="header_navigation__item">
                                About
                            </div>
                        </a>
                        <a href="">
                            <div class="header_navigation__item">
                                Blog
                            </div>
                        </a>
                        <a href="">
                            <div class="header_navigation__item">
                                FAQ
                            </div>
                        </a>
                    </nav>
                </div>
                <a href="">
                    <div class="header_button">
                        Start
                    </div>
                </a>
            </div>
        </div>
    </header>
    <div id="content">
        @yield('content')
    </div>
</body>
<footer>

</footer>

</html>
