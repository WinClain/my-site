@extends('layouts.html')

@section('title')
home-page
@endsection

@section('navbar-buttons')

    <div class="navbar-element-with-ul phone-ul">
        <img id="phone" src="" alt="">
        <span>Связаться со мной</span>
        <ul>
            <li>(o66) 414 68 84</li>
            <li>(096) 964 35 00</li>
        </ul>
    </div>

    <div class="about-me-button navbar-button" id="about-me-button">
        <span>Обо мне</span>
    </div>
    
        
            
        @if (Auth::check())
            <div class="img-name-lastname--users navbar-element-with-ul ml-2">
                <span>{{ Auth::user()->getName() }}</span>
                <ul>
                    <li><a href="{{ route('logout')}}">Выйти</a></li>
                </ul>
            </div>
        @else
        <div class="navbar-button navbar-element-with-ul auth-links ">
            <span class="login-hidden-button">Логин</span>
            <ul>
                <li><a href="{{ route('register')}}">Регистрация</a></li>
                <li><a href="{{ route('login')}}">Войти</a></li>
            </ul>
        </div>  
        @endif
        
      

@endsection

@section('content')
    
        <div class="content">

            @include('layouts.alert')

            <div class="visit-card">
                <div class="picture--name">
                    <img src="/img/my-photo.jpg" alt="my-photo" class="picture rounded-circle m-auto">
                    
                    <h2>Taрac Леочко</h2>
                </div>
                <div class="job-vacance">
                    <h1>Junior Full Stack</h1>
                    <h4>php / laravel / javascript</h4>
                </div>
            </div>

            <div class="skills">
                <div class="skills-row row-left">
                    <div class="skill">
                        <img src="/img/icons-skils/html.svg" alt="">
                        <div>
                            <span>Средний уровень</span>
                            <p>Сверстал пару тестовых, простеньких сайтов при учёбе, код часто чистил потому не сохранил их.</p>
                        </div>
                    </div>
                    <div class="skill">
                        <img src="/img/icons-skils/php.svg" alt="">
                        <div>
                            <span>Средний уровень</span>
                            <p>Пробовал работу с масивами, обьектами и внедрением кода в HTML, также умею читать код.</p>
                        </div>
                    </div>
                    <div class="skill">
                        <img class="js" src="/img/icons-skils/js.png" alt="">
                        <div>
                            <span>Средний уровень</span>
                            <p>Легко понимаю и учу, пробовал разные функции, понимаю ООП, применял при создании тестовых сайтов.</p>
                        </div>
                    </div>
                    <div class="skill">
                        <img src="/img/icons-skils/jquery.png" alt="">
                        <div>
                        <span>Средний уровень</span>
                            <p>Отлично и легко понимаю даную библиотеку, учу в даный момент и использовал при создании этого сайта.</p>
                        </div>
                    </div>
                    <div class="skill">
                        <img class="figma" src="/img/icons-skils/figma.png" alt="">
                        <div>
                            <span>Малый уровень</span>
                            <p>Умею верстать по дизайну.</p>
                        </div>
                    </div>
                </div>
                <div class="skills-row row-right">
                    <div class="skill">
                        <div>
                            <span>Средний уровень</span>
                            <p>Применял на протяжении почти всего обучения, сейчас работаю с припроцесором LESS.</p>
                        </div>
                        <img src="/img/icons-skils/css.svg" alt="">
                    </div>
                    <div class="skill">
                        <div>
                            <span>Средний уровень</span>
                            <p>Легко даёться но ещё есть куда учиться, сильно продвинутый код читаю с трудом.</p>
                        </div>
                        <img src="/img/icons-skils/laravel.svg" alt="">
                    </div>
                    <div class="skill">
                        <div>
                            <span>Малый уровень</span>
                            <p>Не сильно усугублялся в то как работает даная библиотека, только устанавливал нужные мне зависимости для практики.</p>
                        </div>
                        <img src="/img/icons-skils/nodejs.svg" alt="">
                    </div>
                    <div class="skill">
                        <div>
                            <span>Малый уровень</span>
                            <p>Понимаю синтаксис и работу но не применял в практике так как учить начал недавно.</p>
                        </div>
                        <img class="react" src="/img/icons-skils/react.png" alt="">
                    </div>
                    <div class="skill">
                        <div>
                            <span>Средний уровень</span>
                            <p>Понимаю что зачем и как но не работал в команде потому не приходилось работать с чужими изменениями и тому подобное.</p>
                        </div>
                        <img class="git" src="/img/icons-skils/git.svg" alt="">
                    </div>
                </div>
            </div>


            <div class="history">
                <h2>Не самая краткая история о том что и как учил и немного из того что изучал до програмирования</h2>
                <p>Учу програмирование немного более полугода, начинал сHTML, CSS в районе двух месяцев на интерактивных
                    тренажорах на сайте html academy, там же познакомился с нативным PHP, после этого начал активно погружаться
                    внего по видео урокам, документациям и тестовой практике в создание сайтов, тем же подкрепляя знания HTML,CSS
                    и паралельно изучал javascript на выше упомянутых тренажорах, видео уроках и практике на тех же тестовых
                    сайтах, это длилось в течении двух месяцев, после чего начал учить фреймворк Laravel, пробуя работать с
                    GitHub, спустя месяц к этому прибавилось закрепление javascript и изучние его фреймворков(jquery, react),
                    да и учу до сих пор, с nodeJS познакомился для работы с laravel и другими JS зависимостями, перед
                    програмированием пробывал себя в графическом и UI UX дизайне от сюда и навыки в figma и потому
                    нарисовать иконку или какую нибудь илюстрацию в Adobe Illustrator не составит труда, так же учился
                    фотошопу но это было года два назад и с тех пор сильно им не увлекался по ненадобности.
                    Опыта на реальных проэктах к сожалению нет, только личная практика в 
                    ходе обучения(.</p>
                <h4>Мой GitHub на котором код этого сайта
                <a href="https://github.com/WinClain">https://github.com/WinClain</a></h4>
            </div>


            <div class="about-me">
                <h2>Обо мне</h2>
                <div class="quality">
                    <div class="about-row about-left">
                        <div>
                            <img src="" alt="">
                            <h3>Личные качества</h3>
                        </div>
                        <ul>
                            <li>Увереный в себе</li>
                            <li>Не ленив</li>
                            <li>Целеустремлёный</li>
                            <li>Ответственный</li>
                            <li>Смышлёный</li>
                            <li>Общительный</li>
                        </ul>
                    </div>
                    <div class="about-row about-right">
                        <div>
                            <img src="" alt="">
                            <h3>Дополнительно</h3>
                        </div>
                        <ul>
                            <li>английский на уровне Elementary но стараюсь активно учить</li>
                            <li>Нет вредных привычек, занимаюсь спортом</li>
                            <li>Быстро учусь и заинтересован в постояном обучение и карьерном росте</li>
                        </ul>
                    </div>
                </div>
                <p>В младшей школе был отличником, в средней уже стал спускаться по оценкам, по класике гулял, не делал домашнее задание,
                 начал увлекаться психологией человека, в 13 искал работу и устроился курьером на небольшую компанию по полиграфие, там стал
                  более ответственым так как часто мне доверяли документы и передачу денег, паралельно думал много о будущем и професии,
                только вот был полностью уверен что образование тут не обязательно, в принципе и сейчас так думаю,поступил для галочки а сам 
                в это время учил графический дизайн, инвестиции, криптовалюта, аналитика, SMM, сейчас занимаюсь саморазвитием
                (чтение, английский да и програмирование здесь очень кстати), заканчиваю 3 курс.</p>
            </div>
            
            <div class="footer">

                <div class="footer-container">
                    <div>
                        <span><img src="/img/Kyivstar.png" alt="">(096) 964 35 00</span>
                        <span><img src="/img/Vodafone.png" alt="">(o66) 414 68 84</span>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/taras.leochko"><img src="/img/facebook.png" alt="">facebook</a>
                        <a href="https://www.instagram.com/_bez.serdechnuy_/"><img src="/img/instagram.png" alt="">Instagram</a>
                    </div>
                </div>

            </div>

            <button type="button" id="up-button">↑</button>

        </div>
    
@endsection