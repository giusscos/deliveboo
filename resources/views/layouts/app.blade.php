<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DeliveBoo</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="favicon.png">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md bg_text_color stroke_bottom">
            <div class="container">
                <div class="d-flex align-items-center">
                    <a class="navbar-brand font-weight-bold font_big d-flex align-items-center" href="{{ url('/admin') }}">
                            <svg width="80" height="80" viewBox="0 0 180 180" fill="#f7f7f7"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M160.037 71.8643C176.538 60.9697 175.812 85.4389 173.251 90.98C171.324 95.1478 169.935 96.7235 169.935 96.7235M47.524 123.05C56.356 140.912 95.8086 180.802 144.729 153.645C167.269 141.132 170.058 115.301 168.479 100.35C167.399 90.1206 158.971 64.8675 140.784 54.3669C126.425 46.0768 99.7851 40.2686 76.248 61.1401C55.9799 79.1127 57.0673 104.31 58.3894 115.284L52.4979 114.435C50.0307 114.287 45.9057 117.011 47.524 123.05Z"
                                    stroke="#C44B4F" stroke-width="3" stroke-linecap="round" />
                                <path
                                    d="M87.2946 120.485C79.9738 117.322 64.266 108.06 67.5826 98.2557C69.3886 92.9168 88.4382 94.5554 96.7837 98.5228"
                                    stroke="#C44B4F" stroke-width="3" stroke-linecap="round" />
                                <path
                                    d="M112.8 103.941C116.629 106.152 129.347 106.79 146.329 102.239C148.064 101.774 151.599 100.679 154.229 98.5043C156.252 96.831 158.502 93.3136 158.502 93.3136C158.494 100.328 157.463 117.219 155.62 124.834C153.315 134.352 149.412 141.816 139.228 142.173C128.806 142.537 120.802 128.769 116.698 121.507C113.871 114.982 108.971 101.73 112.8 103.941Z"
                                    stroke="#C44B4F" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M140.289 103.858C141.399 105.988 143.771 110.207 144.375 110.045C145.13 109.843 147.839 101.835 147.084 102.037"
                                    stroke="#C44B4F" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M117.655 122.06L124.45 120.239L127.322 121.897L128.427 119.983C131.649 119.929 132.96 118.782 142.33 123.553C151.7 128.325 151.256 135.727 151.256 135.727M116.427 105.397C116.427 105.397 119.295 110.438 120.917 113.094C122.63 115.9 125.002 119.282 125.002 119.282C125.002 119.282 126.708 121.191 127.069 120.954C129.131 119.592 128.763 106.137 128.763 106.137M131.028 105.53C131.886 107.728 133.946 112.193 135.315 112.473C136.685 112.753 137.692 107.251 138.024 104.465"
                                    stroke="#C44B4F" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M148.041 102.59C149.371 106.549 152.334 114.386 153.542 114.062C154.75 113.739 156.431 101.69 156.844 96.1853"
                                    stroke="#C44B4F" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M111.29 104.346L112.782 103.946L116.427 105.397L125.367 120.007L121.021 121.172L117.119 122.066L113.652 113.16L111.29 104.346Z"
                                    fill="#C44B4F" />
                                <path
                                    d="M128.564 105.395L130.788 105.463L133.177 110.517L135.116 111.731L136.074 112.283L138.162 104.005L139.937 103.975L144.579 110.568L147.597 102.512L153.546 114.075L157.4 95.2408L158.377 94.4472L156.472 118.955L155.273 126.559L153.076 132.62L151.438 136.165L149.765 137.648C150.623 136.383 151.274 133.62 148.68 129.134C148.68 129.134 145.509 124.849 141.75 122.9C136.248 120.047 127.874 119.702 127.874 119.702L128.564 105.395Z"
                                    fill="#C44B4F" />
                                <path
                                    d="M131.916 90.7274C132.698 93.6461 131.98 96.3744 130.312 96.8213C128.644 97.2681 126.658 95.2644 125.876 92.3458C125.094 89.4271 126.015 87.4538 127.682 87.0069C129.35 86.56 131.134 87.8088 131.916 90.7274Z"
                                    fill="#4C5355" />
                                <ellipse cx="130.002" cy="89.6221" rx="1.56317" ry="2.34475"
                                    transform="rotate(-15 130.002 89.6221)" fill="#F7F7F7" />
                                <path
                                    d="M147.571 85.7371C148.353 88.6558 147.635 91.3841 145.967 91.831C144.3 92.2779 142.314 90.2741 141.532 87.3555C140.749 84.4368 141.67 82.4635 143.338 82.0166C145.005 81.5697 146.789 82.8185 147.571 85.7371Z"
                                    fill="#4C5355" />
                                <path
                                    d="M147.045 83.7754C147.381 85.0262 146.976 86.2214 146.142 86.4448C145.308 86.6682 144.361 85.8354 144.026 84.5845C143.69 83.3337 144.095 82.1385 144.929 81.9151C145.763 81.6917 146.71 82.5245 147.045 83.7754Z"
                                    fill="#F7F7F7" />
                                <path
                                    d="M107.837 79.378C116.286 85.745 133.38 94.3808 134.166 77.9871C134.957 79.9329 137.747 83.5008 142.579 82.2061C147.411 80.9115 148.547 76.2917 148.51 74.1436"
                                    stroke="#C44B4F" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M48.1613 96.3849L46.1315 104.338C45.9054 105.217 45.3366 105.984 44.5498 106.471C43.7632 106.959 42.8229 107.126 41.9349 106.936L3.83664 98.7467C2.94894 98.5536 2.18738 98.02 1.71842 97.2626C1.24961 96.5054 1.11145 95.5858 1.33424 94.7051L11.0572 56.6726C11.2851 55.7932 11.8547 55.0261 12.6417 54.5388C13.4287 54.0516 14.3692 53.8836 15.258 54.0716L23.2905 55.7942C24.1764 55.9869 24.9366 56.5192 25.4046 57.2751C25.8726 58.0309 26.0103 58.9487 25.7878 59.8276L25.5454 60.7543L19.7938 83.2558C19.57 84.1357 19.7075 85.0546 20.1761 85.8115C20.6447 86.5684 21.4062 87.1013 22.2936 87.2933L45.6628 92.3496C46.1031 92.4424 46.5174 92.6208 46.882 92.8741C47.2462 93.1276 47.5533 93.4512 47.7856 93.8263C48.0179 94.2016 48.1707 94.6207 48.2353 95.0598C48.2995 95.499 48.2745 95.9494 48.1613 96.3849Z"
                                    fill="#C44B4F" />
                                <path
                                    d="M51.7595 108.997L59.7391 110.716C60.6265 110.905 61.5665 110.738 62.3527 110.252C63.1391 109.765 63.7077 108.998 63.9334 108.119L64.0021 107.836L78.1556 52.4837C78.2686 52.0486 78.2935 51.5991 78.229 51.1607C78.1648 50.7221 78.0121 50.3036 77.7802 49.9291C77.5483 49.5546 77.2417 49.2313 76.8778 48.9784C76.5141 48.7252 76.1006 48.5471 75.6608 48.4544L19.8013 36.4478C19.3629 36.3534 18.9068 36.3455 18.4593 36.4245C18.0116 36.5036 17.5812 36.6682 17.1928 36.9086C16.8042 37.1493 16.4651 37.4612 16.1949 37.8265C15.9244 38.192 15.7282 38.6038 15.6174 39.0383L13.5947 46.9496C13.3725 47.8272 13.5103 48.7434 13.9775 49.498C14.4448 50.2527 15.2035 50.7844 16.0881 50.9767L56.0208 59.5552L57.2919 59.8247C57.7302 59.9184 58.1425 60.0969 58.5048 60.3502C58.8674 60.6033 59.173 60.9257 59.4044 61.2994C59.6358 61.6731 59.7881 62.0904 59.8531 62.5278C59.9183 62.965 59.8943 63.4137 59.7828 63.8477L49.2686 104.974C49.1573 105.409 49.1336 105.857 49.1984 106.294C49.2633 106.732 49.4158 107.149 49.647 107.523C49.8785 107.896 50.1842 108.219 50.5466 108.472C50.9092 108.725 51.3212 108.904 51.7595 108.997Z"
                                    fill="#4C5355" />
                            </svg>
                    </a>
                    <a class="navbar-brand font-weight-bold font_big" href="{{ url('/admin/home') }}">

                        <span class="d-none d-md-inline pl-2">
                            Delive<span class="c_seco_color ">Boo</span>
                        </span>
                    </a>
                </div>
                <div class="box_shadow_stroke_small bg-white menu_button ml-auto mb-1" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="invisible">Menu</span>
                    <span class="menu_button_item apri">Menu</span>
                    <span class="menu_button_item chiudi">Chiudi</span>
                </div>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto font-weight-normal">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Home page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Accedi') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                                </li>
                            @endif
                        @else
                            @if (!Auth::user()->is_admin)
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('admin.chart', Auth::user()->id) }}" role="button">
                                        Statistiche
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link"
                                        href="{{ route('admin.plates.index', ['id' => Auth::user()->id]) }}"
                                        role="button">
                                        Piatti
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('admin.orders.index', Auth::user()->id) }}"
                                        role="button">
                                        Ordini
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-capitalize" href="#"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right bg_text_color stroke_full"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/') }}" role="button">
                                        Home page
                                    </a>
                                    <a class="dropdown-item" href="{{ route('admin.home') }}" role="button">
                                        Dashboard
                                    </a>
                                    @if (Auth::user()->is_admin)
                                        <a class="dropdown-item" href="{{ route('admin.categories.index') }}"
                                            role="button">
                                            Categorie
                                        </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Esci') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <script>
            // Menu Button
            const menuEl = document.querySelector('.menu_button')
            const menuOpen = document.querySelector('.menu_button_item.apri')
            const menuClose = document.querySelector('.menu_button_item.chiudi')
            let isClicked = false;
            menuEl.addEventListener('click', () => {
                if (!isClicked) {
                    menuClose.classList.add('trans-x-top')
                    menuOpen.classList.add('trans-x-bot')
                } else {
                    menuClose.classList.remove('trans-x-top')
                    menuOpen.classList.remove('trans-x-bot')
                }
                isClicked = !isClicked
            })
        </script>
    </div>
    @yield('chart')
    @stack('script-cdn')
    @yield('script-js')
</body>

</html>