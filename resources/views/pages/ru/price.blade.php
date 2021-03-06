@extends('layouts.page')

@section('content')
    <div class="ui page container" id="price">

        <h1 class="ui blue header">Выгодная цена за фильтрованный концентрат</h1>

        <div class="ui stackable grid" id="clock-offer">

            <div class="ten wide tablet eight wide computer column">
                <div class="info ui centered grid">
                    <div class="seven wide column price-description">
                            <span class="mobile hidden">
                                2000 рублей
                            </span>
                        <h2 class="ui header mobile only blue"><img src="/static/img/adminoid/icons/money.png"
                                                                    alt="купюры 2000 рублей">
                            2000 рублей =
                            <img src="/static/img/adminoid/icons/clock.png"
                                 alt="изображение, как бы, одного часа труда"> 1 час
                            труда</h2>
                        <div class="clamp left mobile hidden">
                            <svg width="155px" height="47px" viewBox="0 0 155 47" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <!-- Generator: Sketch 40.3 (33839) - http://www.bohemiancoding.com/sketch -->
                                <title>left-clamp</title>
                                <desc>Created with Sketch.</desc>
                                <defs></defs>
                                <g id="Artboards" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Large-Monitor---Process-Copy"
                                       transform="translate(-22.000000, -118.000000)"
                                       stroke-width="2" stroke="#CD2E41">
                                        <g id="money-action" transform="translate(23.000000, 117.000000)">
                                            <g id="left-money-block">
                                                <g id="price-description">
                                                    <g id="left-clamp" transform="translate(0.000000, 2.000000)">
                                                        <path d="M0.035766325,45 C0.035766325,45 -2.35351009,8 31.9243569,8 L152,8"
                                                              id="Path-5"></path>
                                                        <polyline id="Path-6"
                                                                  points="154 0 152 0 152 12.1643867 152 14 154 14"></polyline>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="clamp right mobile hidden">
                            <svg width="155px" height="47px" viewBox="0 0 155 47" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <!-- Generator: Sketch 40.3 (33839) - http://www.bohemiancoding.com/sketch -->
                                <title>right-clamp</title>
                                <desc>Created with Sketch.</desc>
                                <defs></defs>
                                <g id="Artboards" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Large-Monitor---Процесс-Copy"
                                       transform="translate(-311.000000, -118.000000)"
                                       stroke-width="2" stroke="#CD2E41">
                                        <g id="money-action" transform="translate(23.000000, 117.000000)">
                                            <g id="left-money-block">
                                                <g id="price-description">
                                                    <g id="right-clamp"
                                                       transform="translate(365.000000, 24.500000) scale(-1, 1) translate(-365.000000, -24.500000) translate(288.000000, 2.000000)">
                                                        <path d="M0.035766325,45 C0.035766325,45 -2.35351009,8 31.9243569,8 L152,8"
                                                              id="Path-5"></path>
                                                        <polyline id="Path-6"
                                                                  points="154 0 152 0 152 12.1643867 152 14 154 14"></polyline>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div id="papers">
                    <div class="one-thousand-papers mobile hidden">
                        <div class="paper back">
                            <img src="/static/img/adminoid/pages/price/thousand-paper-back.jpg"
                                 alt="бумажка в тясячу рублей">
                        </div>
                        <div class="paper front">
                            <img src="/static/img/adminoid/pages/price/thousand-paper-front.jpg"
                                 alt="бумажка в тясячу рублей">
                        </div>
                    </div>
                </div>
            </div>

            <div class="two wide column mobile hidden" id="equal-sign">
                <div class="ui centered grid">
                    <div class="column">
                        =
                    </div>
                </div>
            </div>

            <div class="four wide tablet six wide computer column mobile hidden" id="clocks">
                <div class="ui centered grid">
                    <div class="column">
                        <clock>
                            <svg width="241px" height="241px" viewBox="0 0 241 241" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <!-- Generator: Sketch 40.3 (33839) - http://www.bohemiancoding.com/sketch -->
                                <title>clocks</title>
                                <desc>Created with Sketch.</desc>
                                <defs>
                                    <rect id="path-1" x="3" y="4" width="4" height="12" rx="2"></rect>
                                    <mask id="mask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox"
                                          x="0"
                                          y="0" width="4" height="12" fill="white">
                                        <use xlink:href="#path-1"></use>
                                    </mask>
                                    <rect id="path-3" x="3" y="4" width="4" height="12" rx="2"></rect>
                                    <mask id="mask-4" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox"
                                          x="0"
                                          y="0" width="4" height="12" fill="white">
                                        <use xlink:href="#path-3"></use>
                                    </mask>
                                    <rect id="path-5" x="3" y="4" width="4" height="12" rx="2"></rect>
                                    <mask id="mask-6" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox"
                                          x="0"
                                          y="0" width="4" height="12" fill="white">
                                        <use xlink:href="#path-5"></use>
                                    </mask>
                                    <rect id="path-7" x="3" y="4" width="4" height="12" rx="2"></rect>
                                    <mask id="mask-8" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox"
                                          x="0"
                                          y="0" width="4" height="12" fill="white">
                                        <use xlink:href="#path-7"></use>
                                    </mask>
                                    <rect id="path-9" x="3" y="4" width="4" height="12" rx="2"></rect>
                                    <mask id="mask-10" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox"
                                          x="0"
                                          y="0" width="4" height="12" fill="white">
                                        <use xlink:href="#path-9"></use>
                                    </mask>
                                    <rect id="path-11" x="3" y="4" width="4" height="12" rx="2"></rect>
                                    <mask id="mask-12" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox"
                                          x="0"
                                          y="0" width="4" height="12" fill="white">
                                        <use xlink:href="#path-11"></use>
                                    </mask>
                                    <rect id="path-13" x="3" y="4" width="4" height="12" rx="2"></rect>
                                    <mask id="mask-14" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox"
                                          x="0"
                                          y="0" width="4" height="12" fill="white">
                                        <use xlink:href="#path-13"></use>
                                    </mask>
                                    <rect id="path-15" x="3" y="4" width="4" height="12" rx="2"></rect>
                                    <mask id="mask-16" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox"
                                          x="0"
                                          y="0" width="4" height="12" fill="white">
                                        <use xlink:href="#path-15"></use>
                                    </mask>
                                    <rect id="path-17" x="3" y="4" width="4" height="12" rx="2"></rect>
                                    <mask id="mask-18" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox"
                                          x="0"
                                          y="0" width="4" height="12" fill="white">
                                        <use xlink:href="#path-17"></use>
                                    </mask>
                                    <rect id="path-19" x="3" y="4" width="4" height="12" rx="2"></rect>
                                    <mask id="mask-20" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox"
                                          x="0"
                                          y="0" width="4" height="12" fill="white">
                                        <use xlink:href="#path-19"></use>
                                    </mask>
                                    <rect id="path-21" x="3" y="4" width="4" height="12" rx="2"></rect>
                                    <mask id="mask-22" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox"
                                          x="0"
                                          y="0" width="4" height="12" fill="white">
                                        <use xlink:href="#path-21"></use>
                                    </mask>
                                    <rect id="path-23" x="3" y="4" width="4" height="12" rx="2"></rect>
                                    <mask id="mask-24" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox"
                                          x="0"
                                          y="0" width="4" height="12" fill="white">
                                        <use xlink:href="#path-23"></use>
                                    </mask>
                                    <rect id="path-25" x="5" y="0" width="2" height="88" rx="1"></rect>
                                    <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox"
                                            id="filter-26">
                                        <feMorphology radius="1" operator="dilate" in="SourceAlpha"
                                                      result="shadowSpreadOuter1"></feMorphology>
                                        <feOffset dx="1" dy="0" in="shadowSpreadOuter1"
                                                  result="shadowOffsetOuter1"></feOffset>
                                        <feGaussianBlur stdDeviation="1" in="shadowOffsetOuter1"
                                                        result="shadowBlurOuter1"></feGaussianBlur>
                                        <feComposite in="shadowBlurOuter1" in2="SourceAlpha" operator="out"
                                                     result="shadowBlurOuter1"></feComposite>
                                        <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.5 0"
                                                       type="matrix"
                                                       in="shadowBlurOuter1"></feColorMatrix>
                                    </filter>
                                    <mask id="mask-27" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox"
                                          x="-1"
                                          y="-1" width="4" height="90">
                                        <rect x="4" y="-1" width="4" height="90" fill="white"></rect>
                                        <use xlink:href="#path-25" fill="black"></use>
                                    </mask>
                                    <rect id="path-28" x="18" y="16.0192379" width="6" height="72" rx="3"></rect>
                                    <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox"
                                            id="filter-29">
                                        <feOffset dx="1" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                        <feGaussianBlur stdDeviation="1" in="shadowOffsetOuter1"
                                                        result="shadowBlurOuter1"></feGaussianBlur>
                                        <feComposite in="shadowBlurOuter1" in2="SourceAlpha" operator="out"
                                                     result="shadowBlurOuter1"></feComposite>
                                        <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.5 0"
                                                       type="matrix"
                                                       in="shadowBlurOuter1"></feColorMatrix>
                                    </filter>
                                    <mask id="mask-30" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox"
                                          x="0"
                                          y="0" width="6" height="72" fill="white">
                                        <use xlink:href="#path-28"></use>
                                    </mask>
                                </defs>
                                <g id="Artboards" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Large-Monitor---Process-Copy"
                                       transform="translate(-797.000000, -116.000000)">
                                        <g id="money-action" transform="translate(23.000000, 117.000000)">
                                            <g id="clocks" transform="translate(775.000000, 0.000000)">
                                                <g id="adminoid/elements/clocks-original">
                                                    <g id="clock">

                                                        <!-- 2π × 40 ≈ 251 -->
                                                        <circle id="pie-circle" r="40" cx="-80.1186223" cy="80.1854528"
                                                                fill="none"
                                                                transform="rotate(-90)"
                                                                stroke="#CD2E41"
                                                                stroke-width="80"
                                                                stroke-dasharray="11 251"
                                                        ></circle>

                                                        <circle id="clock-circle" stroke="#1254B0" cx="80" cy="80"
                                                                r="80"></circle>

                                                        <g id="labels">
                                                            <g id="adminoid/elements/label-for-clock-00"
                                                               transform="translate(75.000000, 0.000000)">
                                                                <g id="label">
                                                                    <rect id="rail" x="0" y="0" width="10"
                                                                          height="85"></rect>
                                                                    <use id="Rectangle" stroke="#1254B0"
                                                                         mask="url(#mask-2)"
                                                                         stroke-width="1" xlink:href="#path-3"></use>
                                                                </g>
                                                            </g>
                                                            <g id="adminoid/elements/label-for-clock-01"
                                                               transform="translate(98.750000, 47.524047) rotate(30.000000) translate(-98.750000, -47.524047) translate(93.750000, 5.024047)">
                                                                <g id="label">
                                                                    <rect id="rail" x="0" y="0" width="10"
                                                                          height="85"></rect>
                                                                    <use id="Rectangle" stroke="#1254B0"
                                                                         mask="url(#mask-4)"
                                                                         stroke-width="2" xlink:href="#path-3"></use>
                                                                </g>
                                                            </g>
                                                            <g id="adminoid/elements/label-for-clock-02"
                                                               transform="translate(112.475953, 61.250000) rotate(60.000000) translate(-112.475953, -61.250000) translate(107.475953, 18.750000)">
                                                                <g id="label">
                                                                    <rect id="rail" x="0" y="0" width="10"
                                                                          height="85"></rect>
                                                                    <use id="Rectangle" stroke="#1254B0"
                                                                         mask="url(#mask-6)"
                                                                         stroke-width="2" xlink:href="#path-5"></use>
                                                                </g>
                                                            </g>
                                                            <g id="adminoid/elements/label-for-clock-03"
                                                               transform="translate(117.500000, 80.000000) rotate(90.000000) translate(-117.500000, -80.000000) translate(112.500000, 37.500000)">
                                                                <g id="label">
                                                                    <rect id="rail" x="0" y="0" width="10"
                                                                          height="85"></rect>
                                                                    <use id="Rectangle" stroke="#1254B0"
                                                                         mask="url(#mask-8)"
                                                                         stroke-width="2" xlink:href="#path-7"></use>
                                                                </g>
                                                            </g>
                                                            <g id="adminoid/elements/label-for-clock-04"
                                                               transform="translate(112.475953, 98.750000) rotate(120.000000) translate(-112.475953, -98.750000) translate(107.475953, 56.250000)">
                                                                <g id="label">
                                                                    <rect id="rail" x="0" y="0" width="10"
                                                                          height="85"></rect>
                                                                    <use id="Rectangle" stroke="#1254B0"
                                                                         mask="url(#mask-10)"
                                                                         stroke-width="2" xlink:href="#path-9"></use>
                                                                </g>
                                                            </g>
                                                            <g id="adminoid/elements/label-for-clock-05"
                                                               transform="translate(98.750000, 112.475953) rotate(150.000000) translate(-98.750000, -112.475953) translate(93.750000, 69.975953)">
                                                                <g id="label">
                                                                    <rect id="rail" x="0" y="0" width="10"
                                                                          height="85"></rect>
                                                                    <use id="Rectangle" stroke="#1254B0"
                                                                         mask="url(#mask-12)"
                                                                         stroke-width="2" xlink:href="#path-11"></use>
                                                                </g>
                                                            </g>
                                                            <g id="adminoid/elements/label-for-clock-06"
                                                               transform="translate(80.000000, 117.500000) rotate(180.000000) translate(-80.000000, -117.500000) translate(75.000000, 75.000000)">
                                                                <g id="label">
                                                                    <rect id="rail" x="0" y="0" width="10"
                                                                          height="85"></rect>
                                                                    <use id="Rectangle" stroke="#1254B0"
                                                                         mask="url(#mask-14)"
                                                                         stroke-width="2" xlink:href="#path-13"></use>
                                                                </g>
                                                            </g>
                                                            <g id="adminoid/elements/label-for-clock-07"
                                                               transform="translate(61.250000, 112.475953) rotate(210.000000) translate(-61.250000, -112.475953) translate(56.250000, 69.975953)">
                                                                <g id="label">
                                                                    <rect id="rail" x="0" y="0" width="10"
                                                                          height="85"></rect>
                                                                    <use id="Rectangle" stroke="#1254B0"
                                                                         mask="url(#mask-16)"
                                                                         stroke-width="2" xlink:href="#path-15"></use>
                                                                </g>
                                                            </g>
                                                            <g id="adminoid/elements/label-for-clock-08"
                                                               transform="translate(47.524047, 98.750000) rotate(240.000000) translate(-47.524047, -98.750000) translate(42.524047, 56.250000)">
                                                                <g id="label">
                                                                    <rect id="rail" x="0" y="0" width="10"
                                                                          height="85"></rect>
                                                                    <use id="Rectangle" stroke="#1254B0"
                                                                         mask="url(#mask-18)"
                                                                         stroke-width="2" xlink:href="#path-17"></use>
                                                                </g>
                                                            </g>
                                                            <g id="adminoid/elements/label-for-clock-09"
                                                               transform="translate(42.500000, 80.000000) rotate(-450.000000) translate(-42.500000, -80.000000) translate(37.500000, 37.500000)">
                                                                <g id="label">
                                                                    <rect id="rail" x="0" y="0" width="10"
                                                                          height="85"></rect>
                                                                    <use id="Rectangle" stroke="#1254B0"
                                                                         mask="url(#mask-20)"
                                                                         stroke-width="2" xlink:href="#path-19"></use>
                                                                </g>
                                                            </g>
                                                            <g id="adminoid/elements/label-for-clock-10"
                                                               transform="translate(47.524047, 61.250000) rotate(-420.000000) translate(-47.524047, -61.250000) translate(42.524047, 18.750000)">
                                                                <g id="label">
                                                                    <rect id="rail" x="0" y="0" width="10"
                                                                          height="85"></rect>
                                                                    <use id="Rectangle" stroke="#1254B0"
                                                                         mask="url(#mask-22)"
                                                                         stroke-width="2" xlink:href="#path-21"></use>
                                                                </g>
                                                            </g>
                                                            <g id="adminoid/elements/label-for-clock-11"
                                                               transform="translate(61.250000, 47.524047) rotate(-390.000000) translate(-61.250000, -47.524047) translate(56.250000, 5.024047)">
                                                                <g id="label">
                                                                    <rect id="rail" x="0" y="0" width="10"
                                                                          height="85"></rect>
                                                                    <use id="Rectangle" stroke="#1254B0"
                                                                         mask="url(#mask-24)"
                                                                         stroke-width="2" xlink:href="#path-23"></use>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="arrows" transform="translate(74.000000, 2.000000)">
                                                            <g id="minute-arrow" transform="rotate(15, 6, 78)">
                                                                <use fill="black" fill-opacity="1"
                                                                     filter="url(#filter-26)"
                                                                     xlink:href="#path-25"></use>
                                                                <use fill="#FF981C" fill-rule="evenodd"
                                                                     xlink:href="#path-25"></use>
                                                                <use stroke="#CD750C" mask="url(#mask-27)"
                                                                     stroke-width="2"
                                                                     xlink:href="#path-25"></use>
                                                            </g>
                                                            <g id="hour-arrow"
                                                               transform="translate(-15,3) rotate(5,21,75)">
                                                                <use fill="black" fill-opacity="1"
                                                                     filter="url(#filter-29)"
                                                                     xlink:href="#path-28"></use>
                                                                <use stroke="#225C04" mask="url(#mask-30)"
                                                                     stroke-width="2"
                                                                     fill="#418B1B" fill-rule="evenodd"
                                                                     xlink:href="#path-28"></use>
                                                            </g>
                                                        </g>
                                                        <circle id="bolt" fill="#1254B0" cx="80" cy="80" r="2"></circle>
                                                    </g>
                                                </g>
                                                <g id="work-text" transform="translate(50, 90)"
                                                   font-family="RobotoMono-Bold, Roboto Mono" fill="#1254B0"
                                                   font-weight="bold">
                                                    <text id="час" font-size="22">
                                                        <tspan x="10" y="22">час</tspan>
                                                    </text>
                                                    <text id="труда" font-size="19">
                                                        <tspan x="3" y="40">труда</tspan>
                                                    </text>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </clock>
                    </div>
                </div>
            </div>

        </div>

        <div id="price-descriptions">

            <div class="description sniper ui stackable two column grid">
                <div class="doubling column img">
                    <div class="img large computer widescreen largescreen only"></div>
                    <div class="img small mobile tablet only">
                        <img src="/static/img/adminoid/pages/price/sniper-img.jpg" alt=""
                             class="ui circular centered image">
                    </div>
                </div>
                <div class="column text">
                    <p>Я работаю по технике Pomodoro, это 25 минут
                        беспрерывной концентрации на задаче, затем -
                        обязательный короткий перерыв.</p>

                    <p>Когда-то давным-давно, когда я был вполне нормальным офисным работником, я мог растягивать 25
                        минут беспрерывной работы над нужным делом на дни, а то на месяцы.</p>

                    <p>Сейчас я за 25 минут успеваю сделать многое.</p>
                </div>
            </div>

            <div class="description video ui stackable two column grid">
                <div class="column text">
                    <p>Весь рабочий процесс записывается на видео. Это 100% надежная отчетность, которую всегда
                        можно пересмотреть, если нужно, оспорить. Хотя я поводов не даю, всегда открыт для
                        конструктивной критики со стороны заинтересованного в моей работе лица или его
                        представителя.
                    </p>
                    <p>
                        Так же, это видео записи можно использовать в качестве обучения.
                    </p>
                </div>
                <div class="column img">
                    <div class="img large computer widescreen largescreen only"></div>
                    <div class="img small mobile tablet only">
                        <img src="/static/img/adminoid/pages/price/girl-with-camera.jpg" alt=""
                             class="ui circular centered image">
                    </div>
                </div>
            </div>

            <div class="description greed ui stackable two column grid">
                <div class="column img">
                    <div class="img large computer widescreen largescreen only"></div>
                    <div class="img small mobile tablet only">
                        <img src="/static/img/adminoid/pages/price/greed-img.jpg" alt=""
                             class="ui circular centered image">
                    </div>
                </div>
                <div class="column text">
                    <p>
                        Я встречал жадных людей, которые хотели сделать дешево. В итоге дешево отдали ни за что
                        (выбросили деньги), потеряли время (возможно годы), а главное нервы. Чем глупее и упрямее
                        человек, тем больше времени он будет пытаться найти “дешево”. До той поры, пока не узрит
                        истину.
                    </p>
                    <p>
                        Когда узрит истину, тогда захочет заказать у меня, а я уже буду занят над другими проектами.
                    </p>
                    <p>
                        В итоге: все равно все они потом умерли, а бумага продолжает расти, защищая озоновый слой Земли.
                    </p>
                </div>
            </div>

            <div class="description total ui stackable two column grid">
                <div class="column text">
                    <p>
                        Попробуем перейти к конкретике! <br>
                        По крайней мере, постараюсь... <br>
                        Минимальная стоимость одного проекта: 50 000 рублей.
                    </p>
                    <p>
                        Это будет полностью функциональный адаптивный прототип относительно простого сайта, со
                        стандартным
                        дизайном от
                        <a href="//getbootstrap.com/">twitter Bootstrap</a>, <a href="//semantic-ui.com/">Semantic
                            UI</a> или <a href="//bourbon.io/">bourbon.io</a>.
                    </p>
                    <p>
                        Более-менее серьезный Интернет-магазин или веб приложение, сопоставимое с серьезным
                        Интернет-магазином может обойтись от 150 000 до 500 000 рублей и выше.
                    </p>
                </div>
                <div class="column img">
                    <div class="img large computer widescreen largescreen only"></div>
                    <div class="img small mobile tablet only">
                        <img src="/static/img/adminoid/pages/price/money-img.jpg" alt=""
                             class="ui circular centered image">
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection