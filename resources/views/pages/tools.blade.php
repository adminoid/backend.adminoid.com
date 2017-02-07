@extends('layouts.page')

@section('content')
    <div class="ui page container" id="tools">
        <h1 class="ui blue header">Инструменты, которые я использую для создания сайтов</h1>
        <br>
        <div class="ui stackable grid">

            <div class="ui segment block sixteen wide column" id="projecting">
                <div class="ui stackable grid">
                    <div class="ten wide column">
                        <h2 class="ui red header">Проектирование</h2>
                        Я проектирую логику, базы данных в программе lucidchart. <br>
                        Для проектирования логики я использую блок-схемы. <br>
                        Для баз данных - ERM диаграммы. <br>
                    </div>
                    <div class="six wide column images-wrapper">
                        <img src="static/img/adminoid/pages/tools/projecting/lucidchart.png"
                             alt="проектирование lucidchart"
                             id="lucidchart">
                        <img src="static/img/adminoid/pages/tools/projecting/brain.png" alt="мозг" id="brain">
                    </div>
                </div>
            </div>

            <div class="ui segment block sixteen wide column" id="design">
                <div class="ui stackable grid">
                    <div class="ten wide column">
                        <h2 class="ui red header">Дизайн</h2>
                        Сейчас дизайн я делаю в Sketch.app. <br>
                        С photoshop я впервые начал работать в 1999 году. <br>
                        Так же я работал с различными растровыми, <br>
                        векторными и видео-редакторами.
                    </div>
                    <div class="six wide column images-wrapper">
                        <img src="static/img/adminoid/pages/tools/design/sketch.png" alt="Sketch App"
                             id="sketch">
                        <img src="static/img/adminoid/pages/tools/design/photoshop.png" alt="photoshop" id="photoshop">
                    </div>
                </div>
            </div>

            <div class="ui segment block sixteen wide column" id="backend">
                <div class="ui stackable grid">
                    <div class="ten wide column">
                        <h2 class="ui red header">Бэкенд</h2>
                        На PHP пишу с 2006 года. <br>
                        В качестве php-фреймворка использую Laravel. <br>
                        Разработку веду в IDE PhpStorm. <br>
                        Разработка через тестирование (PHPUnit).
                    </div>
                    <div class="six wide column images-wrapper">
                        <img src="static/img/adminoid/pages/tools/backend/laravel.png" alt="Laravel Framework"
                             id="laravel">
                        <img src="static/img/adminoid/pages/tools/backend/php.png" alt="язык php" id="php">
                        <img src="static/img/adminoid/pages/tools/backend/phpstorm.png" alt="среда разработки PhpStorm"
                             id="php-storm">
                        <img src="static/img/adminoid/pages/tools/backend/git.png" alt="контроль версий Git" id="git">
                        <img src="static/img/adminoid/pages/tools/backend/php-unit.png" alt="PHPUnit" id="php-unit">
                        <img src="static/img/adminoid/pages/tools/backend/composer.png"
                             alt="менеджер зависимостей Composer"
                             id="composer">
                    </div>
                </div>
            </div>

            <div class="ui segment block sixteen wide column" id="frontend">
                <div class="ui stackable grid">
                    <div class="ten wide column">
                        <h2 class="ui red header">Фронтенд</h2>
                        Первый сайт сверстал в 2002 году табличной версткой. <br>
                        Сейчас в качестве основного фреймворка использую Vue.js. <br>
                        Использую современные возможности javascript (ES5 и выше) благодаря Babel. <br>
                        Разработка через тестирование (Karma + Mocha + Sinon + Chai).
                    </div>
                    <div class="six wide column images-wrapper">
                        <img src="static/img/adminoid/pages/tools/frontend/vue-js.png" alt="Vue.js" id="vue-js">
                        <img src="static/img/adminoid/pages/tools/frontend/javascript.png" alt="JavaScript"
                             id="javascript">
                        <img src="static/img/adminoid/pages/tools/frontend/chai.png" alt="Chai" id="chai">
                        <img src="static/img/adminoid/pages/tools/frontend/mocha.png" alt="Mocha" id="mocha">
                        <img src="static/img/adminoid/pages/tools/frontend/karma.png" alt="karma" id="karma">
                        <img src="static/img/adminoid/pages/tools/frontend/webpack.png" alt="Webpack" id="webpack">
                        <img src="static/img/adminoid/pages/tools/frontend/node-js.png" alt="Node.js" id="node-js">
                        <img src="static/img/adminoid/pages/tools/frontend/babel.png" alt="Babel" id="babel">
                    </div>
                </div>
            </div>

            <div class="ui segment block sixteen wide column" id="administration">
                <div class="ui stackable grid">
                    <div class="ten wide column">
                        <h2 class="ui red header">Администрирование</h2>
                        Администрированием unix/linux серверов занимаюсь <br>
                        с 2001 года. Для серверов использую Docker. <br>
                        Сейчас работаю в LEMP stack (Linux, nginx, MySQL, PHP).
                    </div>
                    <div class="six wide column images-wrapper">
                        <img src="static/img/adminoid/pages/tools/administration/docker.png" alt="Docker" id="docker">
                        <img src="static/img/adminoid/pages/tools/administration/nginx.png" alt="Nginx" id="nginx">
                        <img src="static/img/adminoid/pages/tools/administration/ubuntu.png" alt="Ubuntu" id="ubuntu">
                        <img src="static/img/adminoid/pages/tools/administration/apache.png" alt="Apache" id="apache">
                        <img src="static/img/adminoid/pages/tools/administration/debian.png" alt="Debian" id="debian">
                    </div>
                </div>
            </div>

            <div class="ui segment block sixteen wide column" id="additional">
                <div class="ui stackable grid">
                    <div class="ten wide column">
                        <h2 class="ui red header">Дополнительно</h2>
                        Так же занимался разработкой для Google Docs, <br>
                        в частности для Google Spreadcheet. <br>
                        А так же написал множество админок на ExtJs.
                    </div>
                    <div class="six wide column images-wrapper">
                        <img src="static/img/adminoid/pages/tools/additional/google-spreadsheet.png"
                             alt="Google spreadsheet"
                             id="google-spreadsheet">
                        <img src="static/img/adminoid/pages/tools/additional/ext-js.png" alt="Ext.js" id="ext-js">
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection