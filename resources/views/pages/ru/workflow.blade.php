@extends('layouts.page')

@section('content')
    <div class="ui page container" id="process">
        <h1 class="ui blue header">Пример рабочего процесса. На примере этого сайта.</h1>
        <div class="ui grid process-block projecting top">
            <div class="inner-column"></div>
            <half-rotate inline-template>
                <div class="sixteen wide column message"
                     v-on:mousemove="onHover"
                     v-on:mouseleave="onLeave"
                :style="{ transform: 'rotateY(' + widthAngle + 'deg)' + 'rotateX(' + heightAngle + 'deg)' }">
                <h2>Проектирование</h2>
                <p>
                    Фундаментом любого проекта является проектирование. Прежде чем что-то делать нужно понять что
                    именно.
                    И уже после того, как стало ясно что делать, можно думать над тем как именно делать. И только потом
                    можно
                    начинать подсчитывать примерные сроки и цену. Если вам кто-то сказал цену или срок на проект без
                    предварительного проектирования - то этот человек совсем не ценит свои слова и бросает их на ветер
                    как
                    пустой фантик. Ибо чтобы что-то сложить и получить конкретные цифры - надо иметь конкретные
                    слагаемые.
                    Если вы верите пустым обещаниям или надеетесь поймать на слове, чтобы вам делали бесплатно часть
                    работы -
                    значит вы достойны друг друга, вот и мучайтесь, пожалуйста, а мне работать не мешайте.
                    Для проектирования использую lucidchart. Для логики я рисую блок схемы. Для баз данных - ERM
                    диаграммы.
                </p>
        </div>
        </half-rotate>
    </div>
    <div class="ui grid process-block design">
        <div class="inner-column"></div>
        <half-rotate inline-template>
            <div class="sixteen wide column message"
                 v-on:mousemove="onHover"
                 v-on:mouseleave="onLeave"
            :style="{ transform: 'rotateY(' + widthAngle + 'deg)' + 'rotateX(' + heightAngle + 'deg)' }">
            <h2>Дизайн</h2>
            <p>
                Сейчас веб-дизайн я проектирую в программе Sketch.app. Почему именно Sketch - вы можете нагуглить массу
                материала и почитать, если вам интересно, от себя кажу что основания для этого выбора есть и они
                твердые.
                При необходимости я могу использовать Photoshop, с ним я начал работать еще с 1998-1999 годов.
            </p>
    </div>
    </half-rotate>
    </div>
    <div class="ui grid process-block backend">
        <div class="inner-column"></div>
        <half-rotate inline-template>
            <div class="sixteen wide column message"
                 v-on:mousemove="onHover"
                 v-on:mouseleave="onLeave"
            :style="{ transform: 'rotateY(' + widthAngle + 'deg)' + 'rotateX(' + heightAngle + 'deg)' }">
            <h2>Бэкенд</h2>
            <p>
                На PHP я профессионально программирую где-то с 2009 года. В качестве основы использую Laravel PHP
                framework.
                Разрабатываю по методике TDD (разработка через тестирование).
                На данный момент, я не представляю с какой задачей я бы не справился…
                Разве что не ответил бы на какие-то каверзные вопросы, не относящиеся к делу, переходящие из рук в руки
                от
                бестолковых, тупых, ничего не умеющих профессиональных льстецов, шутов и подстилок.
            </p>
    </div>
    </half-rotate>
    </div>
    <div class="ui grid process-block layout">
        <div class="inner-column"></div>
        <half-rotate inline-template>
            <div class="sixteen wide column message"
                 v-on:mousemove="onHover"
                 v-on:mouseleave="onLeave"
            :style="{ transform: 'rotateY(' + widthAngle + 'deg)' + 'rotateX(' + heightAngle + 'deg)' }">
            <h2>Верстка</h2>
            <p>
                Хотя верстка - это часть работ по фронтенду, ее можно выделить в отдельный пункт. Сейчас я верстаю
                используя
                LESS или SASS, хотя до этого долгое время верстал на чистом CSS, в том числе сверстал множество сайтов
                для
                IE6, а когда-то даже и табличной версткой.
                По необходимости использую Grunt или Gulp или webpack сборщики.
            </p>
            <p>
                В качестве css фреймворков я чаще всего использовал Twitter Bootstrap, а для этого сайта - Semantic UI,
                но
                вообще сейчас я рекомендую Bourbon.
            </p>
            <p>
                Верстаю исключительно отзывчивый дизайн для всех популярных устройств.
            </p>
    </div>
    </half-rotate>
    </div>
    <div class="ui grid process-block frontend">
        <div class="inner-column"></div>
        <half-rotate inline-template>
            <div class="sixteen wide column message" v-on:mousemove="onHover" v-on:mouseleave="onLeave" :style="{ transform: 'rotateY(' + widthAngle + 'deg)' + 'rotateX(' + heightAngle + 'deg)' }">
            <h2>Фронтенд</h2>
            <p>
                В качестве каркаса использую Vue.js, если вкратце - он быстрее и легковеснее Angular.js, но с ним надо
                уметь
                думать самому.
                Активно использую возможности ECMAScript 5/6 через Babel конвертер, собираю фронтенд с помощью Webpack.
                Пишу по методологии TDD (разработка через тестирование): Karma + Sinon + Chai + Mocha.
            </p>
            <p>
                Примеры кода: ссылки на код
            </p>
            <p>
                Примеры тестов: ссылки на тесты
            </p>
            </div>
        </half-rotate>
    </div>

    <div class="ui grid process-block server bottom">
        <div class="inner-column"></div>
        <half-rotate inline-template>
            <div class="sixteen wide column message" v-on:mousemove="onHover" v-on:mouseleave="onLeave" :style="{ transform: 'rotateY(' + widthAngle + 'deg)' + 'rotateX(' + heightAngle + 'deg)' }">
            <h2>Сервер</h2>
            <p>
                Я работал администратором Linux/Unix серверов с 2001 по 2005 годы, раотал с FreeBSD, OpenBSD, Solaris,
                Debian. После этого я так же всегда сам настраиваю сервера.
            </p>
            <p>
                Сейчас в качетсе основы я использую Docker, эта штука позволяет сохранять конфигурацию сервера в
                текстовых
                файлах и затем разворачивать сервер где угодно: на хостинге, в облаках, на локальной машине - и всегда
                будет
                вставать один и тот же преднастроенный сервер. Так же Docker позволяет на одной машине иметь несколько
                разных серверов и конфигураций параллельно, при этом не нагружая железо. И еще им можно делать кластеры:
                один виртуальный сервер размещенный на нескольких физических машинах. Очень необходимая вещь, не вижу
                смысла
                ее не использовать.
                Сам сервер я настраиваю приемущественно в LEMP stack (Ubuntu, NGINX, MySql, PHP). Раньше, еще с
                незапямятных
                времен использовал LAMP stack.
            </p>
            <p>
                Этот сайт и другие мои сайты работают на Docker на хостинге стоимостью 500 рублей в месяц. Одновременно
                там
                работает несколько версий PHP и несколько разных конфигураций для разных сайтов, а раньше пришлось бы
                покупать отдельный хостинг под каждую конфигурацию. И, если мне понадобится сменить хостинг, я быстро
                перенесу все сервера куда угодно, они уже преднастроены заранее.
            </p>
        </div>
    </half-rotate>
    </div>
    </div>
@endsection