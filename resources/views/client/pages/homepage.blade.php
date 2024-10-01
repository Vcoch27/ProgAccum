<!-- resources/views/client/pages/homepage.blade.php -->
@extends('client.app')

@section('title', 'Homepage')

@section('content')
    @php
        $logoPath = asset('img/logo/logoProgacuum.png');
    @endphp
    <div>
        <section id="home" class="f z gd xe ye ze jg kg" style="background-image: url('./images/hero/common-bg.jpg')">
            <div class="e h g _ ib pb" style="
            background: linear-gradient(
                180deg,
                rgba(20, 20, 32, 0.65) 0%,
                #141420 100%
            );
            "></div>
            <div class="a">
                <div class="ea za xc yc">
                    <div class="pb nf _k/2">
                        <div class="ra gc tk">
                            <h1 class="ia lh ph qh vh lk tl om 2xl:ud-text-[50px] sm:text-[46px]">
                                Build and Accumulate Your Programming Skills
                            </h1>
                            <p class="qa hh oh rh uh kk">
                                A platform for programmers to practice and accumulate coding skills. Featuring interactive learning modules,
                                personalized study plans, and real-time coding challenges to help you grow your knowledge and improve your skills.
                            </p>
                            
                        </div>
                    </div>
                    <div class="pb nf _k/2">
                        <div class="ch">
                            <img src="{{ $logoPath }}" alt="hero image" class="da bc" />
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <span class="e s t _">
                    <svg width="111" height="115" viewBox="0 0 111 115" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_f_21_53)">
                            <g filter="url(#filter1_i_21_53)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M73.287 91.7144C92.1417 80.8286 98.5953 56.729 87.7122 37.8789C76.8291 19.0288 52.7314 12.568 33.8767 23.4537C15.0312 34.3342 8.56843 58.4391 19.4515 77.2892C30.3346 96.1393 54.4415 102.595 73.287 91.7144Z"
                                    fill="url(#paint0_linear_21_53)" />
                            </g>
                            <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd"
                                d="M69.4961 86.3067C86.2379 76.6408 91.9683 55.2418 82.3048 38.5041C72.6412 21.7663 51.244 16.0295 34.5021 25.6954C17.7685 35.3566 12.0299 56.7603 21.6934 73.498C31.357 90.2358 52.7625 95.9679 69.4961 86.3067Z"
                                fill="url(#paint1_radial_21_53)" />
                        </g>
                        <defs>
                            <filter id="filter0_f_21_53" x="-3.83423" y="0.165771" width="114.834" height="114.834"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feGaussianBlur stdDeviation="9" result="effect1_foregroundBlur_21_53" />
                            </filter>
                            <filter id="filter1_i_21_53" x="14.1658" y="10.1658" width="86.8342" height="86.8342"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="8" dy="-8" />
                                <feGaussianBlur stdDeviation="10" />
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                <feColorMatrix type="matrix"
                                    values="0 0 0 0 0.168627 0 0 0 0 0.168627 0 0 0 0 0.321569 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_21_53" />
                            </filter>
                            <linearGradient id="paint0_linear_21_53" x1="31.6878" y1="19.1263" x2="63.3007" y2="99.1224"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#EBC77A" />
                                <stop offset="0.541667" stop-color="#CA3F8D" />
                                <stop offset="1" stop-color="#5142FC" />
                            </linearGradient>
                            <radialGradient id="paint1_radial_21_53" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(56.6039 36.9093) rotate(63.4349) scale(29.0091)">
                                <stop stop-color="white" />
                                <stop offset="1" stop-color="white" stop-opacity="0" />
                            </radialGradient>
                        </defs>
                    </svg>
                </span>
                <div class="e h g _ za ib pb bd ai">
                    <span class="ib wb ue ve we ab wk">
                    </span>
                    <span class="ib wb ue ve we ab wk">
                    </span>
                    <span class="ib wb ue ve we ab wk">
                    </span>
                    <span class="ib wb ue ve we ab gk">
                    </span>
                    <span class="ib wb ue ve we ab gk">
                    </span>
                    <span class="ib wb ue ve we ab gk">
                    </span>
                    <span class="ib wb ue ve we">
                    </span>
                    <span class="ib wb ue ve we">
                    </span>
                    <span class="ib wb ue ve we">
                    </span>
                    <span class="ib wb ue ve we">
                    </span>
                    <span class="ib wb ue ve we">
                    </span>
                    <span class="ib wb ue ve we">
                    </span>
                </div>
            </div>
        </section>  
        <!-- question package -->
        <div class="ea za xc">

            <!-- <div class="pb nf hk/2 _k/3 2xl:ud-w-1/4">
                <div class="ja nd qd wd fe hf">
                    <div class="f ka gd kd">
                        <img src="src/images/auctions/image-02.svg" alt="auctions" class="pb" />
                        <button class="e i r _a yc ld ee _f ag">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.99999 11.8709L6.15416 11.1009C3.14999 8.37675 1.16666 6.57425 1.16666 4.37508C1.16666 2.57258 2.57832 1.16675 4.37499 1.16675C5.38999 1.16675 6.36416 1.63925 6.99999 2.38008C7.63582 1.63925 8.60999 1.16675 9.62499 1.16675C11.4217 1.16675 12.8333 2.57258 12.8333 4.37508C12.8333 6.57425 10.85 8.37675 7.84582 11.1009L6.99999 11.8709Z"
                                    fill="#F85486" />
                            </svg>
                            <span class="tg kh nh wh">
                                1.6K
                            </span>
                        </button>
                    </div>
                    <div>
                        <h3>
                            <a href="javascript:void(0)" class="sa ya hh nh vh cj">
                                25-Bit Digital #729
                            </a>
                        </h3>
                        <div class="ka za yc ad">
                            <div class="pb">
                                <div class="za yc">
                                    <div class="ta hb pb fc ld">
                                        <img src="src/images/auctions/creator-02.png" alt="creator"
                                            class="ib pb af bf" />
                                    </div>
                                    <div class="pb">
                                        <h4 class="kh nh vh">
                                            @Devid_Meth...
                                            <span class="xa kh oh uh">
                                                creator
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="pb">
                                <h5 class="dh kh nh vh">
                                    1.58 ETH
                                    <span class="xa kh oh uh">
                                        Current Bit
                                    </span>
                                </h5>
                            </div>
                        </div>
                        <div class="za yc _c ld ee se kf eh nh vh">
                            06 : 15 : 07 : 55
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb nf hk/2 _k/3 2xl:ud-w-1/4">
                <div class="ja nd qd wd fe hf">
                    <div class="f ka gd kd">
                        <img src="src/images/auctions/image-03.svg" alt="auctions" class="pb" />
                        <button class="e i r _a yc ld ee _f ag">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.99999 11.8709L6.15416 11.1009C3.14999 8.37675 1.16666 6.57425 1.16666 4.37508C1.16666 2.57258 2.57832 1.16675 4.37499 1.16675C5.38999 1.16675 6.36416 1.63925 6.99999 2.38008C7.63582 1.63925 8.60999 1.16675 9.62499 1.16675C11.4217 1.16675 12.8333 2.57258 12.8333 4.37508C12.8333 6.57425 10.85 8.37675 7.84582 11.1009L6.99999 11.8709Z"
                                    fill="#F85486" />
                            </svg>
                            <span class="tg kh nh wh">
                                500
                            </span>
                        </button>
                    </div>
                    <div>
                        <h3>
                            <a href="javascript:void(0)" class="sa ya hh nh vh cj">
                                27-Bit Digital #395
                            </a>
                        </h3>
                        <div class="ka za yc ad">
                            <div class="pb">
                                <div class="za yc">
                                    <div class="ta hb pb fc ld">
                                        <img src="src/images/auctions/creator-03.png" alt="creator"
                                            class="ib pb af bf" />
                                    </div>
                                    <div class="pb">
                                        <h4 class="kh nh vh">
                                            @Jemmy_Fra...
                                            <span class="xa kh oh uh">
                                                creator
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="pb">
                                <h5 class="dh kh nh vh">
                                    3.25 ETH
                                    <span class="xa kh oh uh">
                                        Current Bit
                                    </span>
                                </h5>
                            </div>
                        </div>
                        <div class="za yc _c ld ee se kf eh nh vh">
                            02 : 15 : 08 : 44
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb nf hk/2 _k/3 2xl:ud-w-1/4">
                <div class="ja nd qd wd fe hf">
                    <div class="f ka gd kd">
                        <img src="src/images/auctions/image-04.svg" alt="auctions" class="pb" />
                        <button class="e i r _a yc ld ee _f ag">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.99999 11.8709L6.15416 11.1009C3.14999 8.37675 1.16666 6.57425 1.16666 4.37508C1.16666 2.57258 2.57832 1.16675 4.37499 1.16675C5.38999 1.16675 6.36416 1.63925 6.99999 2.38008C7.63582 1.63925 8.60999 1.16675 9.62499 1.16675C11.4217 1.16675 12.8333 2.57258 12.8333 4.37508C12.8333 6.57425 10.85 8.37675 7.84582 11.1009L6.99999 11.8709Z"
                                    fill="#F85486" />
                            </svg>
                            <span class="tg kh nh wh">
                                200
                            </span>
                        </button>
                    </div>
                    <div>
                        <h3>
                            <a href="javascript:void(0)" class="sa ya hh nh vh cj">
                                35-Bit Digital #439
                            </a>
                        </h3>
                        <div class="ka za yc ad">
                            <div class="pb">
                                <div class="za yc">
                                    <div class="ta hb pb fc ld">
                                        <img src="src/images/auctions/creator-04.png" alt="creator"
                                            class="ib pb af bf" />
                                    </div>
                                    <div class="pb">
                                        <h4 class="kh nh vh">
                                            @Miliya_Cho...
                                            <span class="xa kh oh uh">
                                                creator
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="pb">
                                <h5 class="dh kh nh vh">
                                    1.57 ETH
                                    <span class="xa kh oh uh">
                                        Current Bit
                                    </span>
                                </h5>
                            </div>
                        </div>
                        <div class="za yc _c ld ee se kf eh nh vh">
                            07 : 15 : 03 : 12
                        </div>
                    </div>
                </div>
            </div> -->
        </div>      
    </div>
@endsection

@push('styles')
    @vite('resources/css/homepage.css')
@endpush
