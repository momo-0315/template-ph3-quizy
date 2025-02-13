<!-- head部分の読み込み -->
@yield('head')
<header id="header" style="z-index: 999999999;">
    <div class="content-wrapper">
        <a href="javascript:void(0);" id="open-menue" class="open-menue">

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
            </svg>
        </a>
        <h4>
            <!-- <h4> クイジーマーク gタグってなに-->
            <a href="https://kuizy.net/">
                <svg width="50px" height="86px" viewBox="0 0 228 86" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <desc>Kuizy</desc>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path d="M45.072,66 L31.824,66 C29.4559882,62.8639843 27.2160106,59.8880141 25.104,57.072 C23.2479907,54.6399878 21.4080091,52.1920123 19.584,49.728 C17.7599909,47.2639877 16.3360051,45.2960074 15.312,43.824 L15.312,36.912 L30.864,19.632 L44.592,19.632 L25.776,40.368 L45.072,66 Z M12.624,66 L0.336,66 L0.336,0.816 L12.624,0.816 L12.624,66 Z M83.616,19.632 L95.904,19.632 L95.904,66 L84.96,66 L83.616,59.952 C83.0399971,60.8480045 82.3040045,61.7119958 81.408,62.544 C80.5119955,63.3760042 79.4880058,64.1439965 78.336,64.848 C77.1839942,65.5520035 75.9360067,66.1119979 74.592,66.528 C73.2479933,66.9440021 71.8080077,67.152 70.272,67.152 C65.1519744,67.152 61.1840141,65.6800147 58.368,62.736 C55.5519859,59.7919853 54.144,55.4080291 54.144,49.584 L54.144,19.632 L66.432,19.632 L66.432,49.2 C66.432,52.1440147 67.0239941,54.2399938 68.208,55.488 C69.3920059,56.7360062 71.1999878,57.36 73.632,57.36 C75.6800102,57.36 77.5359917,56.7520061 79.2,55.536 C80.8640083,54.3199939 82.3359936,52.8800083 83.616,51.216 L83.616,19.632 Z M124.056,66 L111.768,66 L111.768,19.632 L124.056,19.632 L124.056,66 Z M117.912,0.144 C120.280012,0.144 122.103994,0.83199312 123.384,2.208 C124.664006,3.58400688 125.304,5.19999072 125.304,7.056 C125.304,8.91200928 124.664006,10.5279931 123.384,11.904 C122.103994,13.2800069 120.280012,13.968 117.912,13.968 C115.543988,13.968 113.720006,13.2800069 112.44,11.904 C111.159994,10.5279931 110.52,8.91200928 110.52,7.056 C110.52,5.19999072 111.159994,3.58400688 112.44,2.208 C113.720006,0.83199312 115.543988,0.144 117.912,0.144 Z M136.848,59.664 L158.16,28.272 L138.576,28.272 L138.576,19.632 L173.136,19.632 L173.136,25.968 L151.824,57.36 L173.904,57.36 L173.904,66 L136.848,66 L136.848,59.664 Z M215.496,58.8 C214.919997,59.6960045 214.168005,60.5599958 213.24,61.392 C212.311995,62.2240042 211.272006,62.9919965 210.12,63.696 C208.967994,64.4000035 207.704007,64.9599979 206.328,65.376 C204.951993,65.7920021 203.496008,66 201.96,66 C196.839974,66 192.872014,64.5280147 190.056,61.584 C187.239986,58.6399853 185.832,54.2560291 185.832,48.432 L185.832,19.632 L198.12,19.632 L198.12,48.048 C198.12,50.9920147 198.711994,53.0879938 199.896,54.336 C201.080006,55.5840062 202.887988,56.208 205.32,56.208 C207.36801,56.208 209.223992,55.6000061 210.888,54.384 C212.552008,53.1679939 214.023994,51.7280083 215.304,50.064 L215.304,19.632 L227.592,19.632 L227.592,62.256 C227.592,66.4160208 227.000006,69.9679853 225.816,72.912 C224.631994,75.8560147 223.01601,78.2559907 220.968,80.112 C218.91999,81.9680093 216.488014,83.3279957 213.672,84.192 C210.855986,85.0560043 207.816016,85.488 204.552,85.488 C200.903982,85.488 197.512016,85.0720042 194.376,84.24 C191.239984,83.4079958 188.616011,82.288007 186.504,80.88 L189.576,71.376 C191.752011,72.784007 193.991988,73.7759971 196.296,74.352 C198.600012,74.9280029 200.839989,75.216 203.016,75.216 C206.98402,75.216 210.055989,74.3040091 212.232,72.48 C214.408011,70.6559909 215.496,67.440023 215.496,62.832 L215.496,58.8 Z" id="kuizy" fill="#25ABD8"></path>
                    </g>
                </svg></a>
        </h4>
        <div class="header-right">
            <a class="subtint-button1 header-right-creat" href="https://kuizy.net/prepare">クイズ・診断を作る</a>
            <a class="subtint-button2 header-right-search" href="https://kuizy.net/search">検索</a>
        </div>
    </div>

</header>

<!-- ヘッダーの下 -->
<div class="whole_wrapper">
    <ul class="headerBelow">
        <li>
            <a href="https://kuizy.net/quiz">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#30619C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book svg-menu-selected">
                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                </svg>
                <span class="header_below_four_box header_below_four_box1">クイズ</span>
            </a>
        </li>
        <li>
            <a href="https://kuizy.net/analysis">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text ">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                <span class="header_below_four_box">診断</span>
            </a>
        </li>
        <li>
            <a href="https://kuizy.net/sketch">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool ">
                    <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                    <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                    <path d="M2 2l7.586 7.586"></path>
                    <circle cx="11" cy="11" r="2"></circle>
                </svg>
                <span class="header_below_four_box">お絵かき診断</span>
            </a>
        </li>
        <li>
            <a href="https://kuizy.net/prepare">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in ">
                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                    <polyline points="10 17 15 12 10 7"></polyline>
                    <line x1="15" y1="12" x2="3" y2="12"></line>
                </svg>
                <span class="header_below_four_box">ログイン</span>
            </a>
        </li>
    </ul>

    <div class="shiritori">
        <a href="https://kuizy.net/shiritori">
            📢 新登場！絵を描いてしりとりをするゲームがkuizyに登場！詳しくは<span>こちら</span>！
        </a>

    </div>
    <!-- quiz部分の読み込み -->
    @yield('quiz')