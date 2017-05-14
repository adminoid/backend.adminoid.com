@extends('layouts.page')

@section('title', 'Сайт надо? Очень красивый')

@section('content')
    <div class="ui page container" id="index">
        <div class="ui stackable grid" id="intro">
            <div class="six wide tablet five wide computer column">
                <img src="/static/img/adminoid/pages/main/ava-circle-ochki.jpg" alt="">
            </div>
            <div class="ten wide tablet eleven wide computer column">

                <p>
                    Да, вы по адресу, коли хотите себе современное веб-приложение.
                </p>
                <p>
                    В младенчестве меня нарекли Петром.
                </p>
                <p>
                    Я - сайтописец (php/js/html/css) с серьезным опытом.
                </p>
                <p>
                    При разработке я использую одни из самых популярных и современных инструментов в мире.
                </p>
                <p>
                    Полистайте сайт, ознакомьтесь с моими возможностями и услугами.
                </p>
                <p>
                    На данный момент, одновременно и полноценно я могу работать лишь над одним проектом, поэтому я ищу
                    первого
                    заказчика и потом буду занят на какое-то время.
                </p>
                <p>
                    Поэтому поспешите, напишите мне, если вы нуждаетесь в моих услугах.
                </p>

            </div>
        </div>

        <h1 class="ui blue header">Подводные камни (или грабли) веб-разработки и мои решения для их обхода</h1>
        <p>
            Я работал в составе команд, веб-студий и более всего в одиночку (фрилансером).
        </p>
        <p>
            Встречал много подводных камней, которые на первый взгляд незаметны, но фатальны.
        </p>
        <p>
            Когда встречал проблему или со стороны или касаемую меня непосредственно, придумывал самые подходящие,
            на мой вгляд, решения.
        </p>
        <p>
            Так как я одновременно и фрилансер и веб студия, то меня касаются проблемы обоих ипостасей.
        </p>

        <!-- For everyone -->
        <h2 class="ui blue header">
            <img class="ui image" src="/static/img/adminoid/icons/for-all.png">
            <div class="content">
                Грабли, которые постелены и для фрилансера и для веб-студий
            </div>
        </h2>

        <div class="ui raised segment">
            <div class="ui stackable two column grid">
                <div class="column">
                    <a class="ui red ribbon label">Проблема</a>
                    <span class="sub-label">Долго и не то</span>
                    <p></p>
                    <p>
                        <img class="ui left floated image tablet computer widescreen largescreen only"
                             src="/static/img/adminoid/pics/skeleton.png" alt="Проблема: Долго ждать">
                        <img class="ui right floated image mobile only" src="/static/img/adminoid/pics/skeleton.png"
                             alt="Проблема: Долго ждать">
                        Можно спроектировать проект исходя из воображения. Затем долго делать его.
                    </p>
                    <p>
                        А на практике оказывается, что не учли ключевые моменты и надо все переделывать.
                    </p>
                </div>
                <div class="column">
                    <a class="ui green right ribbon label tablet computer widescreen largescreen only">Решение</a>
                    <a class="ui green ribbon label mobile only">Решение</a>
                    <p></p>

                    <p>
                        Чтобы решить эту проблему я могу поступить так:
                    </p>
                    <p>
                        Сначала я делаю проект с минимальным функционалом и дизайном, но который решает поставленную
                        задачу.
                    </p>
                    <p>
                        И пока этот простой, но рабочий проект тестируется в работе, я его дальше дорабатываю.
                    </p>
                </div>
            </div>
        </div>

        <!-- For web studios -->
        <h2 class="ui blue header">
            <img class="ui image" src="/static/img/adminoid/icons/for-studios.png">
            <div class="content">
                Грабли для Web-студий
            </div>
        </h2>

        <div class="ui raised segment">
            <div class="ui stackable two column grid">
                <div class="column">
                    <a class="ui red ribbon label">Проблема</a>
                    <span class="sub-label">Серьезные расходы</span>
                    <p></p>
                    <p>
                        <img class="ui left floated image tablet computer widescreen largescreen only"
                             src="/static/img/adminoid/pics/modest-food.png" alt="Проблема: Серьезные расходы">
                        <img class="ui right floated image mobile only" src="/static/img/adminoid/pics/modest-food.png"
                             alt="Проблема: Серьезные расходы">
                        Самый минимум расходов веб-студии, и это только производственные расходы:
                    </p>
                    <p>
                        Backend-разработчик ~100 000 рублей, Frontend-разработчик ~100 000 рублей, их руководитель и
                        другой обслуживающий персонал еще как минимум ~150 000 рублей. ∑350 000 рублей в месяц.
                    </p>
                </div>
                <div class="column">
                    <a class="ui green right ribbon label tablet computer widescreen largescreen only">Решение</a>
                    <a class="ui green ribbon label mobile only">Решение</a>
                    <p></p>
                    <p>
                        Я не верил тому, что мне внушает мирская система :-). Хотел научиться все делать сам и
                        научился.
                    </p>
                    <p>
                        Знаю свое дело и могу ответить на все вопросы непосредственно по существу (без пыли в глаза
                        и других маневров требущих дополнительных расходов).
                    </p>
                </div>
            </div>
        </div>

        <div class="ui raised segment">
            <div class="ui stackable two column grid">
                <div class="column">
                    <a class="ui red ribbon label">Проблема</a>
                    <span class="sub-label">Испорченный телефон</span>
                    <p></p>
                    <p>
                        <img class="ui left floated image tablet computer widescreen largescreen only"
                             src="/static/img/adminoid/pics/broken-iphone.png" alt="Проблема: Испорченный телефон">
                        <img class="ui right floated image mobile only"
                             src="/static/img/adminoid/pics/broken-iphone.png"
                             alt="Проблема: Испорченный телефон">
                        Часто бывает так, что дизайнер не знает тонкостей верстки, маркетинга и делает дизайн чтобы
                        понравился заказчику визуально (это ни о чем...).
                    </p>
                    <p>
                        Frontend-разработчик, не понимает структуру данных на сервере и делает неправильные запросы
                        на сервер, неправильно структурирует данные на страницах. И так далее...
                    </p>
                    <p>
                        Собрать же команду, лишь из профессионалов, которые будут взаиможействовать как часы
                        практически - невозможно...
                    </p>
                </div>
                <div class="column">
                    <a class="ui green right ribbon label tablet computer widescreen largescreen only">Решение</a>
                    <a class="ui green ribbon label mobile only">Решение</a>
                    <p></p>
                    <p>
                        Мое сознание охватывает целостную картину разработки, эта картина выверена и отточена опытом.
                    </p>
                    <p>
                        Я сразу вижу все этапы разработки от и до, уже прошел многие "грабли".
                    </p>
                    <p>
                        И состыкую профессии так, что бы не было видно швов! ;-) <br>
                        Примеры:
                    </p>
                    <ul>
                        <li>в дизайне слои называю так же, как будут названы классы в верстке и/или в какие папки
                            будут сохраняться картинки
                        </li>
                        <li>при разработке бэкенда продумываю логический вывод контента и его структуру</li>
                        <li>при разработке фронтенда реализую заранее продуманные структуры данных бэкенда</li>
                        <li>даже при проектировании я сразу учитываю мелочи касаемые будущего frontend и backend</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="ui raised segment">
            <div class="ui stackable two column grid">
                <div class="column">
                    <a class="ui red ribbon label">Проблема</a>
                    <span class="sub-label">Перевод стрелок</span>
                    <p></p>
                    <p>
                        <img class="ui left floated image tablet computer widescreen largescreen only"
                             src="/static/img/adminoid/pics/guilty.png" alt="Проблема: Перевод стрелок">
                        <img class="ui right floated image mobile only" src="/static/img/adminoid/pics/guilty.png"
                             alt="Проблема: Перевод стрелок">
                        Часто, когда происходит взаимодействие с группой людей, приходится безуспешно искать
                        ответственных. Часто
                        их приходится искать циклически.
                    </p>
                </div>
                <div class="column">
                    <a class="ui green right ribbon label tablet computer widescreen largescreen only">Решение</a>
                    <a class="ui green ribbon label mobile only">Решение</a>
                    <p></p>
                    <p>
                        Я один отвечаю за весь процесс разработки и мне некуда переводить стрелки.
                    </p>
                    <p>
                        Однако, в работе я всегда использую: контроль версий, документирую проект, для backend использую
                        unit
                        тестирование, если использую сторонние библиотеки и/или инструменты, то стараюсь все оставлять
                        стандартным, не мудрствовать лукаво.
                    </p>
                    <p>
                        Это для того, чтобы проект мог легко поддерживать любой компетентный веб-разработчик.
                    </p>
                </div>
            </div>
        </div>

        <!-- For freelancers -->
        <h2 class="ui blue header">
            <img class="ui image" src="/static/img/adminoid/icons/for-freelancers.png">
            <div class="content">
                Грабли для фрилансеров
            </div>
        </h2>

        <div class="ui raised segment">
            <div class="ui stackable two column grid">
                <div class="column">
                    <a class="ui red ribbon label">Проблема</a>
                    <span class="sub-label">Не доделывают</span>
                    <p></p>
                    <p>
                        <img class="ui left floated image tablet computer widescreen largescreen only"
                             src="/static/img/adminoid/pics/abandoned.png" alt="Проблема: Не доделывают">
                        <img class="ui right floated image mobile only" src="/static/img/adminoid/pics/abandoned.png"
                             alt="Проблема: Не доделывают">
                        На российском рынке фриланса, много исполнителей (не заказчиков, а именно исполнителей) не
                        понимают
                        ценообразования в создании сайтов и не представляют как они будут делать работу.
                    </p>
                    <p>
                        Они надеются на авось и берутся за работу, которая стоит во много раз больше денег и занимает во
                        много
                        больше времени.
                    </p>
                    <p>
                        Из-за невыносимости рабства в которое они себя сами повергли, они ищут причины соскочить и
                        соскакивают.
                    </p>
                    <p>
                        Брошенный проект нужно обязательно делать с нуля - потому что профессионалы проекты не бросают,
                        а с плохим
                        кодом больше проблем чем толку.
                    </p>
                    <p>
                        Если даже исполнители не понимают что делают, то что надеяться на посредников, которых пруд
                        пруди.
                    </p>
                </div>
                <div class="column">
                    <a class="ui green right ribbon label tablet computer widescreen largescreen only">Решение</a>
                    <a class="ui green ribbon label mobile only">Решение</a>
                    <p></p>
                    <p>
                        Я не могу сказать примерную цену на создание абстрактного сайта. Чтобы точно просчитать сроки,
                        нужно
                        создать НИИ по исследованию длительности процессов веб разработки. Чтобы иметь какие-то средние
                        значения
                        длительности отдельных процессов, чтобы можно было их суммировать и получить хоть сколько-то
                        обоснованный
                        вывод.
                    </p>
                    <p>
                        Но я могу взять вашу задачу (что вы хотите, чтобы сайт для вас сделал), предложить проект,
                        составить
                        список пунктов и напротив каждого пункта работы определить его ограничения по цене и времени.
                    </p>
                    <p>
                        Если вы хотите ориентироваться на цифру в цене, а не на результат - то вы проиграете. Так
                        устроены все
                        азартные игры: завлечь и разорить.
                    </p>
                </div>
            </div>
        </div>

        <div class="ui raised segment">
            <div class="ui stackable two column grid">
                <div class="column">
                    <a class="ui red ribbon label">Проблема</a>
                    <span class="sub-label">Пропадают</span>
                    <p></p>
                    <p>
                        <img class="ui left floated image tablet computer widescreen largescreen only"
                             src="/static/img/adminoid/pics/funky-bunny.png" alt="Проблема: Пропадают">
                        <img class="ui right floated image mobile only" src="/static/img/adminoid/pics/funky-bunny.png"
                             alt="Проблема: Пропадают">
                        Для меня это - детский сад какой-то непонятный, но действительно часто люди, с которыми я
                        работал просто
                        исчезали без объяснений, я не представляю что у таких происходит в голове.
                    </p>
                    <p>
                        С этим и я часто сталкивался, когда нанимал фрилансеров и мне многие заказчики рассказывали.
                    </p>
                </div>
                <div class="column">
                    <a class="ui green right ribbon label tablet computer widescreen largescreen only">Решение</a>
                    <a class="ui green ribbon label mobile only">Решение</a>
                    <p></p>
                    <p>
                        У меня, за более 8 лет работы на самой популярной российской фрилансерской бирже не возникало
                        проблем с
                        добросовестными заказчиками.
                    </p>
                    <p>
                        Все отзывы положительные, все работы доделаны: <a href="https://www.fl.ru/users/adminoid/">https://www.fl.ru/users/adminoid/</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="ui raised segment">
            <div class="ui stackable two column grid">
                <div class="column">
                    <a class="ui red ribbon label">Проблема</a>
                    <span class="sub-label">Не справляются</span>
                    <p></p>
                    <p>
                        <img class="ui left floated image tablet computer widescreen largescreen only"
                             src="/static/img/adminoid/pics/fail.png" alt="Проблема: Не справляются">
                        <img class="ui right floated image mobile only" src="/static/img/adminoid/pics/fail.png"
                             alt="Проблема: Не справляются">
                        Веб-разработка - тяжелое занятие как и любая умственная работа, требует навыка концентрации,
                        терпения. Необходимо проделать огромную работу чтобы овладеть мастерством.
                        Это далеко не всем под силу - сидеть и медитировать годы на свои кривые руки, не поддаваясь
                        отчаянию.
                    </p>
                </div>
                <div class="column">
                    <a class="ui green right ribbon label tablet computer widescreen largescreen only">Решение</a>
                    <a class="ui green ribbon label mobile only">Решение</a>
                    <p></p>
                    <p>
                        Я прошел этот путь, у меня, наконец, спустя ~10 лет ада, моя работа стала получаться. Все
                        потому, что теперь я точно знаю что делаю, а не гадаю.<br>
                        В этом причина моей уверенности в успехе, потому что я знаю наперед что и как я буду делать.<br>
                        Ведь в том или ином виде я это уже делал.
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection