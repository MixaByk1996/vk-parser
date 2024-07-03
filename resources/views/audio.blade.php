<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
    <link rel="icon" href="img/icon/favicon.ico">
    <link rel="icon" href="img/icon/favicon-32.svg" type="image/svg+xml">
    <title>VKTOMP3</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="css/owl.carousel.css">
    <link rel='stylesheet' type='text/css' href='css/main.css' />
    <link rel='stylesheet' type='text/css' href='css/style.css' />
</head>

<body class="music_page">
<div class="wrapper">
    <header class="header">
        <div class="container row wrap-items row_space_between_md">
            <div class="logo_block">
                <a href="/">
                    <picture>
                        <source srcset="img/svg/logo-icotype.svg" media="(max-width: 991px)">
                        <img src="img/svg/logo.svg" alt="vktomp3">
                    </picture>
                </a>
            </div>
            <div class="search_block w49 hidden_md">
                <form method="post" action="{{route('search-audio')}}">
                    @method('POST')
                    @csrf
                    <div class="search_input_block p_relative">
                        <input type="text" name="search" placeholder="id123456" class="search_input" id="search_input">
                        <div class="btn btn_clear">
                            <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">         <g id="02-Music-Desktop" transform="translate(-760.000000, -96.000000)" fill="#9B9B9B">             <g id="SeaarchMusic" transform="translate(250.000000, 87.000000)">                 <g id="search">                     <g id="Active">                         <path d="M520,9 C514.5,9 510,13.5 510,19 C510,24.5 514.5,29 520,29 C525.5,29 530,24.5 530,19 C530,13.5 525.5,9 520,9 L520,9 Z M525,22.6 L523.6,24 L520,20.4 L516.4,24 L515,22.6 L518.6,19 L515,15.4 L516.4,14 L520,17.6 L523.6,14 L525,15.4 L521.4,19 L525,22.6 L525,22.6 Z" id="ico-Delete"></path>                     </g>                 </g>             </g>         </g>     </g>
                            </svg>
                        </div>
                    </div>
                    <button class="btn search_btn"  type="submit">Старт</button>
                </form>
            </div>

            @if(auth()->user())
                <div class="signup_block isAuthorized">
                    <div class="user_block">
                        <div class="user_block_header">
                            <div class="user_img_block">
                                <img class="user_img round" src="{{auth()->user()->avatar}}" alt="">
                            </div>
                            <div>
                                <svg width="12px" height="8px" viewBox="0 0 12 8" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="02-Music-Desktop" transform="translate(-1150.000000, -29.000000)"
                                           fill="#7B7B7B">
                                            <g id="Header">
                                                <g id="Login">
                                                    <g transform="translate(971.000000, 12.000000)">
                                                        <g id="User" transform="translate(124.000000, 0.000000)">
                                                            <polygon id="ico-OpenUser"
                                                                     points="65.6 17 61 21.6 56.4 17 55 18.4 61 24.4 67 18.4">
                                                            </polygon>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="user_info_block">
                            <div class="d_flex_md row_justify_center_md row_center_md mb_xl_20">
                                <div class="user_img_block">
                                    <img class="user_img round" src="{{auth()->user()->avatar}}" alt="">
                                </div>
                                <div class="user_name">
                                    {{auth()->user()->first_name}} <span class="d_block_md">{{auth()->user()->last_name}}</span>
                                </div>
                            </div>
                            <div class="p_relative">
                                <form action="">
                                    <div class="search_input_block p_relative">
                                        <input type="text" name="search" placeholder="id123456" class="search_input"
                                               id="login_input">
                                        <div class="btn btn_clear">
                                            <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd">
                                                    <g id="02-Music-Desktop"
                                                       transform="translate(-760.000000, -96.000000)" fill="#9B9B9B">
                                                        <g id="SeaarchMusic"
                                                           transform="translate(250.000000, 87.000000)">
                                                            <g id="search">
                                                                <g id="Active">
                                                                    <path
                                                                        d="M520,9 C514.5,9 510,13.5 510,19 C510,24.5 514.5,29 520,29 C525.5,29 530,24.5 530,19 C530,13.5 525.5,9 520,9 L520,9 Z M525,22.6 L523.6,24 L520,20.4 L516.4,24 L515,22.6 L518.6,19 L515,15.4 L516.4,14 L520,17.6 L523.6,14 L525,15.4 L521.4,19 L525,22.6 L525,22.6 Z"
                                                                        id="ico-Delete"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <button class="btn search_btn" type="submit">Старт</button>
                                </form>
                                <div class="relogin_help_txt">войти под другим ID</div>
                            </div>
                            <nav class="user_menu">
                                <ul>
                                    <li><a href="{{route('rules')}}"><img src="img/svg/ico-rules.svg" alt="Правила">Правила</a>
                                    </li>
                                    <li><a href="#"><img src="img/svg/ico-favorits.svg"
                                                         alt="Добавить в закладки">Добавить в закладки</a></li>
                                    <li><a href="{{route('logout')}}"><img src="img/svg/ico-exit.svg" alt="Выйти">Выйти</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            @else
                <div class="signup_block">
                    <button onclick="window.location='{{ route("login.vk") }}'" class="btn green_btn" id="signup" type="button">
                            <?xml version="1.0" encoding="UTF-8"?>
                        <svg width="24px" height="15px" viewBox="0 0 24 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">     <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">         <g id="01-Index-Desktop" transform="translate(-994.000000, -25.000000)" fill="#0066DD" fill-rule="nonzero">             <g id="Header">                 <g id="ButtonLogin">                     <g transform="translate(971.000000, 12.000000)">                         <g id="noActive" transform="translate(0.000000, 3.000000)">                             <g id="Button-login">                                 <path d="M45.9565454,21.4693226 C45.4340033,20.8420738 44.8401813,20.279895 44.2659134,19.7362133 C44.061719,19.5428529 43.8505881,19.3429524 43.6470543,19.144175 C43.0627451,18.5728798 43.0414735,18.3582478 43.5040984,17.709331 C43.8241638,17.2620322 44.1635189,16.814139 44.4917097,16.3809772 C44.7893804,15.9879806 45.0972245,15.5815736 45.3922527,15.1738454 L45.4528306,15.090014 C46.016727,14.309768 46.5999131,13.5029655 46.9102675,12.5296894 C46.9908619,12.2729105 47.0754859,11.8950418 46.8819934,11.5790722 C46.688633,11.2633669 46.3135389,11.16705 46.048172,11.1220625 C45.9169089,11.0998 45.7865706,11.0967612 45.665613,11.0967612 L41.9727393,11.0941187 L41.9422192,11.0938545 C41.3838719,11.0938545 41.0075887,11.3569753 40.7919658,11.8983448 C40.5861198,12.4156022 40.3599932,12.9664184 40.101959,13.4901497 C39.5884672,14.5330541 38.9363134,15.7342405 37.9926326,16.7360549 L37.9527318,16.7786642 C37.841287,16.8984327 37.7150445,17.0340559 37.6227573,17.0340559 C37.6086203,17.0340559 37.5932281,17.0313474 37.575788,17.0258643 C37.3803136,16.949696 37.2491166,16.4765014 37.255062,16.2563863 C37.2551281,16.2533475 37.2551942,16.2503087 37.2551942,16.2472699 L37.2526178,11.9790713 C37.2526178,11.9642737 37.2515608,11.9496082 37.249645,11.9349426 C37.1557064,11.2411044 36.9476143,10.8091978 36.1613568,10.6552097 C36.1404815,10.6510479 36.1191439,10.649 36.0978722,10.649 L32.258013,10.649 C31.6324157,10.649 31.2877096,10.9032686 30.9636806,11.2838458 C30.8762159,11.3855797 30.6941519,11.5973711 30.7843912,11.8542822 C30.8759516,12.1150248 31.1731599,12.1707802 31.2699392,12.1888809 C31.7503345,12.2803093 32.0211184,12.5741485 32.0978151,13.0875742 C32.2317207,13.9791329 32.2481699,14.930741 32.1496069,16.0823817 C32.1221256,16.4024471 32.0677574,16.6496472 31.9781787,16.860844 C31.9573695,16.9101255 31.8835794,17.070984 31.808336,17.07105 C31.7844219,17.07105 31.7152561,17.0616694 31.5892779,16.9748653 C31.291409,16.770803 31.0734739,16.4796063 30.8194035,16.1199043 C29.9550619,14.8983712 29.2296465,13.5527094 28.6014068,12.0050994 C28.3684098,11.4353896 27.9332662,11.1164473 27.3755796,11.1070667 C26.7627982,11.0977521 26.2072255,11.0932599 25.6773506,11.0932599 C25.0983923,11.0932599 24.561647,11.0986109 24.0375194,11.1095109 C23.5888334,11.1174383 23.278479,11.2519384 23.1151763,11.5095761 C22.9516094,11.767412 22.9622452,12.1061066 23.1468195,12.5160809 C24.6243389,15.8008299 25.9639891,18.1891317 27.4906578,20.2602749 C28.5603829,21.7095202 29.633345,22.7126559 30.8669674,23.4169318 C32.1666507,24.1604478 33.6231627,24.5219334 35.3196081,24.5219334 C35.5119115,24.5219334 35.710755,24.5172431 35.91125,24.5078624 C36.8970116,24.4598361 37.2627251,24.1030409 37.3089678,23.1432412 C37.3309661,22.6527386 37.3846076,22.1383219 37.6257301,21.6996111 C37.7779345,21.423212 37.9198335,21.423212 37.9664725,21.423212 C38.0563154,21.423212 38.1676942,21.4645662 38.2873306,21.5420557 C38.5018966,21.6821049 38.6858763,21.869718 38.8366935,22.0336153 C38.9786585,22.189321 39.119038,22.3466121 39.2595497,22.5039693 C39.5627695,22.8435887 39.8762948,23.1947027 40.203825,23.527716 C40.9207186,24.257095 41.7104773,24.577887 42.6175603,24.5082588 L46.0033166,24.5082588 C46.0105172,24.5082588 46.0177839,24.5079945 46.0249846,24.5075321 C46.3623579,24.4852696 46.6545455,24.2981189 46.8266343,23.9941063 C47.039813,23.6174928 47.0355191,23.1370315 46.8151397,22.7085601 C46.565099,22.224069 46.2407397,21.8101311 45.9565454,21.4693226 Z" id="ico-vk"></path>                             </g>                         </g>                     </g>                 </g>             </g>         </g>     </g> </svg>
                        Войти
                    </button>
                </div>
            @endif


        </div>
    </header>
    <main id="main" class="mb_xl_65">
        <section class=" ">
            <div class="container">
                <div class="row mb_xl_15">
                    <div class="w75 w100_md pt_xl_20 pt_md_0">
                        <div class="mb_xl_33 mb_md_25">
                            <div class="search_block mr_xl_0 py_md_0">
                                <form action="">
                                    <div class="search_input_block p_relative">
                                        <input type="text" name="search" placeholder="Поиск музыки"
                                               class="search_input" id="search_music_input">
                                        <div class="btn btn_clear">
                                            <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd">
                                                    <g id="02-Music-Desktop"
                                                       transform="translate(-760.000000, -96.000000)"
                                                       fill="#9B9B9B">
                                                        <g id="SeaarchMusic"
                                                           transform="translate(250.000000, 87.000000)">
                                                            <g id="search">
                                                                <g id="Active">
                                                                    <path
                                                                        d="M520,9 C514.5,9 510,13.5 510,19 C510,24.5 514.5,29 520,29 C525.5,29 530,24.5 530,19 C530,13.5 525.5,9 520,9 L520,9 Z M525,22.6 L523.6,24 L520,20.4 L516.4,24 L515,22.6 L518.6,19 L515,15.4 L516.4,14 L520,17.6 L523.6,14 L525,15.4 L521.4,19 L525,22.6 L525,22.6 Z"
                                                                        id="ico-Delete"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <button class="btn search_btn" type="submit">Искать</button>
                                </form>
                            </div>
                            <!-- Для вывода сообщения добавить класс active -->
                            <div class="notfound_block">По вашему запросу ничего не нашлось.</div>
                        </div>
                        <div class="toolbar_block row">
                            <div class="mr_xl_10 mr_md_0">
                                <button class="btn white_btn btn_toolbar active" type="button" id="mymusic">Моя
                                    музыка</button>
                            </div>
                            <div class="music_friends_block p_relative">
                                <button class="btn white_btn btn_toolbar music_friends" type="button"
                                        id="music_friends">
                                    Музыка друга
                                </button>

                                <div id="scrollbar" class="music_friends_list">
                                    <div class="scrollbar">
                                        <div class="track">
                                            <div class="thumb"></div>
                                        </div>
                                    </div>
                                    <div class="viewport">
                                        <div class="overview">
                                            @foreach($items as $item)
                                                <div class="row row_center friends_list_item">
                                                    <div class="user_img_block">
                                                        <img src="{{$item['photo_50']}}" alt="" class="user_img round">
                                                    </div>
                                                    <div>
                                                        <div class="user_name">{{$item['first_name'] . " " . $item['last_name']}}</div>
{{--                                                        <div class="user_music_status">музыка скрыта</div>--}}
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row row_space_between">
                    <div class="w75 w100_md">
                        <div class="tracklist_block">
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="music/track1.mp3" title="Слушать"
                                       data-track-name="Название трека" data-artist-name="Название группы"
                                       data-artist-url="http://server/artist_trck1"
                                       data-download-url="http://server/ulr_trck1">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn"></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Название трека</div>
                                    <div><a class="artist_name" href="https://server/artist_trck1">Название
                                            группы</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    4:51
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="https://server/ulr_trck1"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="music/track2.mp3" title="Слушать"
                                       data-track-name="Очень длинное название трека"
                                       data-artist-name='ВИА "Поющие гитары"'
                                       data-artist-url="http://server/artist_trck2"
                                       data-download-url="http://server/ulr_trck2">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn"></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Очень длинное название трека</div>
                                    <div><a class="artist_name" href="https://server/artist_trck2">ВИА «Поющие
                                            гитары»</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    7:00
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="https://server/ulr_trck2"></a>
                                </div>
                            </div>

                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="music/track3.mp3" title="Слушать"
                                       data-track-name="Трека 3"
                                       data-artist-name="Сверх длинное название вокально инструментального ансамбля"
                                       data-artist-url="https://server/artist_trck3"
                                       data-download-url="https://server/ulr_trck3"">
                                    <img src=" img/cover.jpg" alt="Cover" class="album_cover">
                                    <div class="player_btn"></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Трэк 3</div>
                                    <div><a class="artist_name" href="https://server/artist_trck3">Сверх длинное
                                            название вокально инструментального ансамбля</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    3:19
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="https://server/ulr_trck3"></a>
                                </div>
                            </div>

                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="music/Старый Гном — Костян.mp3"
                                       title="Слушать" data-track-name="Костян" data-artist-name="Старый Гном">
                                        <img src="img/userpic.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn"></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Костян</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    3:00
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="https://server/ulr_trck4"></a>
                                </div>
                            </div>


                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn"
                                       href="music/Чёрная Экономика — Мыльный пузырь.mp3" title="Слушать"
                                       data-track-name="Мыльный пузырь" data-artist-name="Чёрная Экономика">
                                        <img src="img/userpic.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn "></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Мыльный пузырь</div>
                                    <div><a class="artist_name" href="#">Чёрная Экономика</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    4:00
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="https://server/ulr_trck5"></a>
                                </div>
                            </div>


                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn "></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn "></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn "></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn "></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn "></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn "></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn"></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="banner_block my_xl_27 my_md_15">
                            <picture>
                                <source srcset="img/bannerRight.jpg" media="(max-width: 991px)">
                                <img src="img/banner.jpg" alt="">
                            </picture>
                        </div>
                        <div class="tracklist_block mb_xl_40 mb_md_25">
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn"></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn"></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn"></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn "></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn "></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn "></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn "></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn "></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn "></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn"></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn"></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Бабуля в теме (Skit)</div>
                                    <div><a class="artist_name" href="#">Старый Гном</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    2:05
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="#"></a>
                                </div>
                            </div>
                            <div class="row row_center tracklist_item">
                                <div class="cover_block">
                                    <a class="player_btn_lnk play_btn" href="#" title="Слушать"
                                       data-track-name="Бабуля в теме (Skit)" data-artist-name="Старый Гном">
                                        <img src="img/cover.jpg" alt="Cover" class="album_cover">
                                        <div class="player_btn"></div>
                                    </a>
                                </div>
                                <div class="track_info_block">
                                    <div class="track_name">Hiddet track</div>
                                    <div><a class="artist_name" href="#">Unknown band</a></div>
                                </div>
                                <div class="progressbar_remaining">
                                    4:35
                                </div>
                                <div class="download_block">
                                    <a class="download_btn" href="http://server/urltrack4"></a>
                                </div>
                            </div>
                        </div>

                        <div class="pagination_block">
                            <nav class="row row_space_between row_center">
                                <div class="pag_prev">
                                    <a href="#">
                                        <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                               fill-rule="evenodd">
                                                <g id="02-Music-Desktop"
                                                   transform="translate(-251.000000, -2016.000000)" fill="#757575">
                                                    <g id="Pagination"
                                                       transform="translate(251.000000, 2007.000000)">
                                                        <polygon id="ico-back"
                                                                 points="16 16 3.8 16 9.4 10.4 8 9 0 17 8 25 9.4 23.6 3.8 18 16 18">
                                                        </polygon>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg><span class="hidden_md">Туда</span>
                                    </a>
                                </div>
                                <ul>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">7</a></li>
                                    <li><a href="#">8</a></li>
                                    <li><a href="#">9</a></li>
                                    <li><a href="#">10</a></li>
                                </ul>
                                <div class="pag_next">
                                    <a href="#">
                                        <span class="hidden_md">Сюда</span><svg width="16px" height="16px"
                                                                                viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                               fill-rule="evenodd">
                                                <g id="02-Music-Desktop"
                                                   transform="translate(-932.000000, -2016.000000)" fill="#757575">
                                                    <g id="Pagination"
                                                       transform="translate(251.000000, 2007.000000)">
                                                        <polygon id="ico-next"
                                                                 points="689 9 687.6 10.4 693.2 16 681 16 681 18 693.2 18 687.6 23.6 689 25 697 17">
                                                        </polygon>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="w23_5 hidden_md sticky">
                        <div class="banner_block">
                            <img src="img/bannerRight.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </section>


    </main>
    <footer class="footer mt_md_73">
        <div class="container row wrap-items row_justify_center_md">
            <div class="bold mr_xl_70 w100_md mr_md_0 txt_center_md mb_md_20">
                © 2024 &nbsp;&nbsp;vktomp3.com
            </div>
            <div class="mr_xl_35 mr_sm_25">
                <a class="bold basic_txt" href="/rules.html">Правила</a>
            </div>
            <div class="">
                <svg width="21px" height="20px" viewBox="0 0 21 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="02-Music-Desktop" transform="translate(-883.000000, -312.000000)" fill="#F5A623">
                            <g id="Header">
                                <g id="LoginOpen">
                                    <g transform="translate(863.000000, 0.000000)">
                                        <g id="favorits" transform="translate(20.000000, 312.000000)">
                                            <polygon id="ico-favorits"
                                                     points="10.5 15.4794167 4.01064312 19.9721868 6.27819991 12.4120994 -2.47718512e-15 7.62869654 7.89078405 7.4490757 10.5 0 13.1092159 7.4490757 21 7.62869654 14.7218001 12.4120994 16.9893569 19.9721868">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <a class="bold basic_txt js-bookmark" href="#">
                    Добавить в закладки
                </a>
            </div>
        </div>
    </footer>
    <div id="player_block" class="player_block ">
        <div class="row row_center">
            <div class="cover_block play_btn">
                <img src="img/cover.jpg" alt="Cover" class="album_cover">
                <div class="player_btn"></div>
            </div>
            <div class="player_info">
                <div class="progressbar_wrap">
                    <div class="progress_bar">
                        <div class="progressbar_slug">
                            <div class="progressbar_thumb"></div>
                        </div>
                    </div>
                    <div class="progressbar_remaining">0:00</div>
                </div>
                <div class="row row_center row_space_between">
                    <div id="prev_btn" class="prev_btn">
                        <svg width="22px" height="11px" viewBox="0 0 22 11" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="01-Index-Desktop" transform="translate(-887.000000, -1341.000000)"
                                   fill="#2B2B2B">
                                    <g id="Footer" transform="translate(0.000000, 1307.000000)">
                                        <g id="player" transform="translate(810.000000, 0.000000)">
                                            <g id="mini">
                                                <path
                                                    d="M89,34 C89.1552451,34 89.3083582,34.0361451 89.4472136,34.1055728 L98.2111456,38.4875388 C98.7051241,38.7345281 98.9053485,39.3352011 98.6583592,39.8291796 C98.5615955,40.022707 98.404673,40.1796295 98.2111456,40.2763932 L89.4472136,44.6583592 C88.9532351,44.9053485 88.3525621,44.7051241 88.1055728,44.2111456 C88.0361451,44.0722902 88,43.9191771 88,43.763932 L88,35 C88,34.4477153 88.4477153,34 89,34 Z M78,34 C78.1552451,34 78.3083582,34.0361451 78.4472136,34.1055728 L87.2111456,38.4875388 C87.7051241,38.7345281 87.9053485,39.3352011 87.6583592,39.8291796 C87.5615955,40.022707 87.404673,40.1796295 87.2111456,40.2763932 L78.4472136,44.6583592 C77.9532351,44.9053485 77.3525621,44.7051241 77.1055728,44.2111456 C77.0361451,44.0722902 77,43.9191771 77,43.763932 L77,35 C77,34.4477153 77.4477153,34 78,34 Z"
                                                    id="ico-back"
                                                    transform="translate(87.882076, 39.382076) scale(-1, 1) translate(-87.882076, -39.382076) ">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="track_info_block">
                        <div class="track_name">Бабуля в теме (Skit)</div>
                        <div><a class="artist_name" href="#">Старый Гном</a></div>
                    </div>
                    <div id="next_btn" class="next_btn">
                        <svg width="22px" height="11px" viewBox="0 0 22 11" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="01-Index-Desktop" transform="translate(-1098.000000, -1341.000000)"
                                   fill="#2B2B2B">
                                    <g id="Footer" transform="translate(0.000000, 1307.000000)">
                                        <g id="player" transform="translate(810.000000, 0.000000)">
                                            <g id="mini">
                                                <path
                                                    d="M300,34 C300.155245,34 300.308358,34.0361451 300.447214,34.1055728 L309.211146,38.4875388 C309.705124,38.7345281 309.905348,39.3352011 309.658359,39.8291796 C309.561596,40.022707 309.404673,40.1796295 309.211146,40.2763932 L300.447214,44.6583592 C299.953235,44.9053485 299.352562,44.7051241 299.105573,44.2111456 C299.036145,44.0722902 299,43.9191771 299,43.763932 L299,35 C299,34.4477153 299.447715,34 300,34 Z M289,34 C289.155245,34 289.308358,34.0361451 289.447214,34.1055728 L298.211146,38.4875388 C298.705124,38.7345281 298.905348,39.3352011 298.658359,39.8291796 C298.561596,40.022707 298.404673,40.1796295 298.211146,40.2763932 L289.447214,44.6583592 C288.953235,44.9053485 288.352562,44.7051241 288.105573,44.2111456 C288.036145,44.0722902 288,43.9191771 288,43.763932 L288,35 C288,34.4477153 288.447715,34 289,34 Z"
                                                    id="ico-next"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="download_block">
                <a class="download_btn" href="#"></a>
            </div>
        </div>
        <audio id="audio_player" class="hidden" src="/" controls="" autoplay="" volume="0.1"></audio>
    </div>
    <div class="hidden">
        <div id="play_list"></div>
    </div>
</div>
<script src="js/jquery-3.6.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.tinyscrollbar.min.js"></script>
<script src="js/jquery.buoyant.js"></script>
<script src="js/script.js"></script>
<script src="js/jsaudio.js"></script>
</body>

</html>
