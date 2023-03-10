@extends('layouts.base')
@section('title-page', 'Главная')
@section('description-page', 'Онлайн-университет InfoLanguage помогает заговорить на любом языке уверенно. Описание сайта, основные преимущества, отзывы')
@section('start-page')
    <!-- Start block -->
    <section class="start">
        <div class="start__container _container">
            <div class="start__row">
                <div class="start__slider slider-start">
                    <div class="slider-start__swiper swiper">
                        <div class="slider-start__wrapper swiper-wrapper">
                            <div class="slider-start__slide swiper-slide">
                                <div class="slider-start__body">
                                    <img src="img/mainPage/01.jpg" alt="">

                                    <div class="slider-start__info">
                                        <h2 class="slider-start__title">Япония</h2>
                                        <div class="slider-start__text">
                                            <p>
                                                Островное государство в Тихом океане, которое
                                                славится своими густонаселенными городами
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="slider-start__slide swiper-slide">
                                <div class="slider-start__body">
                                    <img src="img/direction/01.jpg" alt="">
                                    <div class="slider-start__info">
                                        <h2 class="slider-start__title">Германия</h2>
                                        <div class="slider-start__text">
                                            <p>
                                                Государство в Западной Европе с лесами, реками,
                                                горными хребтами и пляжными курортами Северного
                                                моря.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-start__slide swiper-slide">
                                <div class="slider-start__body">
                                    <img src="img/direction/02.jpg" alt="">
                                    <div class="slider-start__info">
                                        <h2 class="slider-start__title">Англия</h2>
                                        <div class="slider-start__text">
                                            <p>
                                                Англия, родина Шекспира и группы The Beatles,
                                                входит в состав Соединенного Королевства
                                                Великобритании и Северной Ирландии.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-start__slide swiper-slide">
                                <div class="slider-start__body">
                                    <img src="img/direction/04.jpg" alt="">
                                    <div class="slider-start__info">
                                        <h2 class="slider-start__title">Франция</h2>
                                        <div class="slider-start__text">
                                            <p>
                                                Страна в Западной Европе, на территории которой
                                                находятся средневековые города, альпийские деревни
                                                и пляжи Средиземного моря.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-start__slide swiper-slide">
                                <div class="slider-start__body">
                                    <img src="img/direction/05.jpg" alt="">
                                    <div class="slider-start__info">
                                        <h2 class="slider-start__title">Италия</h2>
                                        <div class="slider-start__text">
                                            <p>
                                                Средиземноморское государство в Южной Европе с
                                                длинной береговой линией, которое оказало огромное
                                                влияние на западную культуру и кухню.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-start__pagination swiper-pagination"></div>
                    </div>
                </div>
                <div class="start__open-new open-new">
                    <div class="open-new__body">
                        <h1 class="open-new__title">
                            <span class="typed-element"></span>
                        </h1>
                        <div class="open-new__row">
                            <a href="{{ route('direction') }}" class="open-new__item">Японский</a>
                            <a href="{{ route('direction') }}" class="open-new__item">Французский</a>
                            <a href="{{ route('direction') }}" class="open-new__item">Итальянский</a>
                            <a href="{{ route('direction') }}" class="open-new__item">Немецкий</a>
                            <a href="{{ route('direction') }}" class="open-new__item">Английский</a>
                            <a href="{{ route('direction') }}" class="open-new__item">Испанский</a>
                            <a href="{{ route('direction') }}" class="open-new__item">Корейский</a>
                            <a href="{{ route('direction') }}" class="open-new__item">Португальский</a>
                            <a href="{{ route('direction') }}" class="open-new__item">Арабский</a>
                            <a href="{{ route('direction') }}" class="open-new__item">Китайский</a>
                            <a href="{{ route('direction') }}" class="open-new__item">Бельгийский</a>
                            <a href="{{ route('direction') }}" class="open-new__item">Чешский</a>
                            <a href="{{ route('direction') }}" class="open-new__item">Польский</a>
                            <a href="{{ route('direction') }}" class="open-new__item">Турецкий</a>
                        </div>
                        <div class="open-new__bottom-info">
                            <p>
                                Ознакомиться с направлениями обучения вы можете при
                                клике на один из языков*
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hello block -->
    <section class="hello" id="hello">
        <div class="hello__container _container">
            <div class="title-block _anim-items _anim-no-hide">
                <div class="title-block__over-title">
                    <div class="title-block__line"></div>
                    <div class="title-block__text">Приветствие</div>
                </div>
                <h2 class="title-block__title _anim-items _anim-no-hide">
                    ДАВАЙТЕ ЗНАКОМИТЬСЯ
                </h2>
            </div>
            <div class="hello__content">
                <div class="hello__body">
                    <div class="hello__infos">
                        <div class="hello__over-title">
                            Главный онлайн - университет по преподаванию иностранных
                            языков в СНГ
                        </div>
                        <h2 class="hello__title">
                            <span>InfoLanguage</span> - ваш путь к изучению нового
                        </h2>
                        <div class="hello__row">
                            <div class="hello__item">
                                <p>- самые востребованные языки и не только</p>
                            </div>
                            <div class="hello__item">
                                <p>- множество различных курсов</p>
                            </div>
                            <div class="hello__item">
                                <p>- преподаватели с опытом</p>
                            </div>
                            <div class="hello__item">
                                <p>- знания, навыки и совершенство</p>
                            </div>
                        </div>
                    </div>
                    <div class="hello__btns">
                        <a href="{{ route('register') }}" class="hello__btn hello__btn_blue"
                        >Интересно? <span>Регистрируйся!</span>
                        </a>
                        <a href="{{ route('index') }}#advantages" class="hello__btn hello__btn_red"
                        >Почему именно мы?
                            <svg
                                width="20"
                                height="21"
                                viewBox="0 0 20 21"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M8.94062 20.5594C9.52656 21.1453 10.4781 21.1453 11.0641 20.5594L18.5641 13.0594C19.15 12.4734 19.15 11.5219 18.5641 10.9359C17.9781 10.35 17.0266 10.35 16.4406 10.9359L11.5 15.8812L11.5 1.5C11.5 0.670312 10.8297 0 9.99999 0C9.17031 0 8.49999 0.670312 8.49999 1.5L8.49999 15.8766L3.55937 10.9406C2.97343 10.3547 2.02187 10.3547 1.43593 10.9406C0.849993 11.5266 0.849993 12.4781 1.43593 13.0641L8.93593 20.5641L8.94062 20.5594Z"
                                    fill="white"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hello__lines">
            <img src="img/mainPage/line.png" alt="">
        </div>
        <div class="hello__image">
            <img src="img/mainPage/02.jpg" alt="">
        </div>
    </section>
    <!-- moving-text -->
    <div class="moving-text">
        <img src="img/mainPage/moving-text.png" alt="">
    </div>
    <!-- advantages -->
    <section class="advantages" id="advantages">
        <div class="advantages__container _container">
            <div class="title-block _anim-items _anim-no-hide">
                <div class="title-block__over-title">
                    <div class="title-block__line"></div>
                    <div class="title-block__text">ПОЧЕМУ ИМЕННО МЫ?</div>
                </div>
                <h2 class="title-block__title _anim-items _anim-no-hide">
                    НАШИ ОСНОВНЫЕ ПРЕИМУЩЕСТВА:
                </h2>
            </div>
            <div class="advantages__row">
                <div class="advantages__item _anim-items _anim-no-hide">
                    <div class="advantages__top">
                        <div class="advantages__fact">&lt; 3000</div>
                        <div class="advantages__icon">
                            <svg
                                viewBox="0 0 50 26"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M44.6626 15.8238C45.1985 15.0832 45.5156 14.1743 45.5156 13.1924V7.32422C45.5156 6.78486 45.0783 6.34766 44.5391 6.34766H40.1746C38.157 6.34766 36.5156 7.98906 36.5156 10.0066V13.1924C36.5156 14.1737 36.8323 15.0819 37.3676 15.8224C36.7 15.9307 36.0577 16.1445 35.4587 16.4576C34.1019 14.433 31.8789 13.0367 29.3244 12.8012C29.3145 12.7983 29.3043 12.7963 29.2942 12.7938C30.2082 11.7732 30.7653 10.4268 30.7653 8.95215V0.976562C30.7653 0.437207 30.328 0 29.7888 0H23.8569C21.3082 0 19.2347 2.07354 19.2347 4.62227V8.95205C19.2347 10.4267 19.7918 11.7731 20.7058 12.7937C20.6957 12.7962 20.6855 12.7983 20.6756 12.8011C18.1208 13.0366 15.8978 14.4331 14.541 16.458C13.9418 16.145 13.2994 15.931 12.6321 15.8227C13.1675 15.0822 13.4844 14.1738 13.4844 13.1924V7.32422C13.4844 6.78486 13.0471 6.34766 12.5078 6.34766H8.14336C6.12578 6.34766 4.48438 7.98906 4.48438 10.0066V13.1924C4.48438 14.1744 4.80147 15.0832 5.3374 15.8238C2.31465 16.3179 0 18.9467 0 22.1069V25C0 25.5394 0.437305 25.9766 0.976562 25.9766H49.0234C49.5627 25.9766 50 25.5394 50 25V22.1069C50 18.9467 47.6854 16.3179 44.6626 15.8238ZM6.4375 10.0066C6.4375 9.06601 7.20273 8.30078 8.14336 8.30078H11.5312V9.49014C11.5312 10.0733 11.0568 10.5478 10.4737 10.5478H6.4375V10.0066ZM6.4375 12.5008H10.4737C10.8458 12.5008 11.2021 12.4325 11.5312 12.3085V13.1924C11.5312 14.5967 10.3888 15.7393 8.98438 15.7393C7.57998 15.7393 6.4375 14.5967 6.4375 13.1924V12.5008ZM9.61397 17.6924L8.98438 18.322L8.35478 17.6924H9.61397ZM13.1398 21.068V24.0234H1.95312V22.1069C1.95312 19.9166 3.55693 18.0945 5.65166 17.7514L8.29385 20.3936C8.47705 20.5767 8.72539 20.6796 8.98438 20.6796C9.24336 20.6796 9.4917 20.5767 9.6749 20.3936L12.3179 17.7505C12.7847 17.8265 13.2336 17.977 13.652 18.1971C13.3211 19.0922 13.1398 20.0593 13.1398 21.068ZM25.0001 12.7644C22.898 12.7644 21.1879 11.0542 21.1879 8.95215V7.66143H27.0242C27.6714 7.66143 28.2808 7.49609 28.8123 7.20567V8.95215C28.8123 11.0542 27.1021 12.7644 25.0001 12.7644ZM26.7023 14.7174L25 16.4197L23.2977 14.7174H26.7023ZM21.1877 4.62227C21.1877 3.15049 22.3852 1.95312 23.8569 1.95312H28.8122V3.92031C28.8122 4.90625 28.0101 5.7084 27.0241 5.7084H21.1877V4.62227ZM34.9069 24.0234H33.0078H16.9922H15.0931V22.0703H21.4519C21.9911 22.0703 22.4284 21.6331 22.4284 21.0938C22.4284 20.5544 21.9911 20.1172 21.4519 20.1172H15.1645C15.583 17.3417 17.8047 15.1508 20.594 14.7759L24.3095 18.4913C24.5002 18.682 24.7501 18.7773 25 18.7773C25.2499 18.7773 25.4998 18.682 25.6905 18.4913L29.406 14.7759C32.5071 15.1927 34.9069 17.8545 34.9069 21.068V24.0234ZM38.4688 10.0066C38.4688 9.06601 39.234 8.30078 40.1746 8.30078H43.5625V9.49014C43.5625 10.0733 43.0881 10.5478 42.505 10.5478H38.4688V10.0066ZM38.4688 12.5008H42.505C42.8771 12.5008 43.2333 12.4325 43.5625 12.3085V13.1924C43.5625 14.5967 42.42 15.7393 41.0156 15.7393C39.6112 15.7393 38.4688 14.5967 38.4688 13.1924V12.5008ZM41.6452 17.6924L41.0156 18.322L40.386 17.6924H41.6452ZM36.8601 24.0234V21.068C36.8601 20.0592 36.6788 19.0921 36.3479 18.1969C36.766 17.9766 37.2148 17.8262 37.6817 17.7503L40.325 20.3936C40.5082 20.5767 40.7565 20.6796 41.0155 20.6796C41.2745 20.6796 41.5229 20.5767 41.7061 20.3936L44.3482 17.7514C46.443 18.0946 48.0468 19.9166 48.0468 22.1069V24.0234H36.8601Z"
                                    fill="black"
                                />
                            </svg>
                        </div>
                    </div>
                    <div class="advantages__text">
                        <p>
                            Студентов научились говорить на других языках с помощью
                            наших курсов
                        </p>
                    </div>
                </div>
                <div class="advantages__item _anim-items _anim-no-hide">
                    <div class="advantages__top">
                        <div class="advantages__fact">24 / 7</div>
                        <div class="advantages__icon">
                            <img src="img/icon/advant1.png" alt="">
                        </div>
                    </div>
                    <div class="advantages__text">
                        <p>
                            Вы можете самостоятельно построить свой план обучения из
                            любой точки планеты
                        </p>
                    </div>
                </div>
                <div class="advantages__item _anim-items _anim-no-hide">
                    <div class="advantages__top">
                        <div class="advantages__fact">14</div>
                        <div class="advantages__icon">
                            <img src="img/icon/advant2.png" alt="">
                        </div>
                    </div>
                    <div class="advantages__text">
                        <p>
                            Различных и интересных языков вы можете изучить на наших
                            курсах
                        </p>
                    </div>
                </div>
                <div class="advantages__item _anim-items _anim-no-hide">
                    <div class="advantages__top">
                        <div class="advantages__fact">0</div>
                        <div class="advantages__icon">
                            <img src="img/icon/advant3.png" alt="">
                        </div>
                    </div>
                    <div class="advantages__text">
                        <p>
                            Все наши курсы бесплатны, от вас требуется регистрация и
                            желание обучаться
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Direction -->
    <section class="direction">
        <div class="direction__container _container">
            <div class="title-block _anim-items _anim-no-hide">
                <div class="title-block__over-title">
                    <div class="title-block__line"></div>
                    <div class="title-block__text">нАПРАВЛЕНИЯ</div>
                </div>
                <h2 class="title-block__title _anim-items _anim-no-hide">
                    Направления обучения
                </h2>
            </div>
            <div class="direction__body">
                <div class="direction__top">
                    <div class="direction__image">
                        <img src="img/icon/decore.png" alt="">
                    </div>
                    <div class="direction__title-block">
                        <h3 class="direction__title">
                            Направления, которые мы подобрали для вас
                        </h3>
                        <div class="direction__subtitle">
                            <p>
                                В ходе аналитики мы подобрали направления, которые
                                заинтересуют большинство учеников ввиду своей популярности
                                и несложности обучения. Они лучше всего подойдут для
                                старта, если вы только хотите влиться в тему изучения
                                языка
                            </p>
                        </div>
                    </div>
                    <div class="direction__image">
                        <img src="img/icon/decore.png" alt="">
                    </div>
                </div>
                <div class="direction__swiper swiper">
                    <div class="direction__wrapper swiper-wrapper">
                        <div class="direction__slide swiper-slide">
                            <a
                                href="{{ route('direction') }}"
                                class="direction__slider slider-body slider-body_green"
                            >
                                <div class="slider-body__flag">
                                    <img src="img/mainPage/flags/eng.jpg" alt="">
                                </div>
                                <div class="slider-body__language">
                                    Язык <span>Английский</span>
                                </div>
                                <h4 class="slider-body__title">
                                    Англия, родина Шекспира и группы The Beatles
                                </h4>
                            </a>
                        </div>
                        <div class="direction__slide swiper-slide">
                            <a
                                href="{{ route('direction') }}"
                                class="direction__slider slider-body slider-body_red"
                            >
                                <div class="slider-body__flag">
                                    <img src="img/mainPage/flags/ger.jpg" alt="">
                                </div>
                                <div class="slider-body__language">
                                    Язык <span>Немецкий</span>
                                </div>
                                <h4 class="slider-body__title">
                                    Государство в Западной Европе с лесами, горными хребтами
                                    и пляжными курортами Северного моря.
                                </h4>
                            </a>
                        </div>
                        <div class="direction__slide swiper-slide">
                            <a
                                href="{{ route('direction') }}"
                                class="direction__slider slider-body slider-body_yellow"
                            >
                                <div class="slider-body__flag">
                                    <img src="img/mainPage/flags/ispan.jpg" alt="" />
                                </div>
                                <div class="slider-body__language">
                                    Язык <span>Испанский</span>
                                </div>
                                <h4 class="slider-body__title">
                                    Европейская страна, расположенная на Пиренейском
                                    полуострове.
                                </h4>
                            </a>
                        </div>
                        <div class="direction__slide swiper-slide">
                            <a
                                href="{{ route('direction') }}"
                                class="direction__slider slider-body slider-body_green-yar"
                            >
                                <div class="slider-body__flag">
                                    <img src="img/mainPage/flags/ital.jpg" alt="">
                                </div>
                                <div class="slider-body__language">
                                    Язык <span>Итальянский</span>
                                </div>
                                <h4 class="slider-body__title">
                                    Средиземноморское государство в Южной Европе
                                </h4>
                            </a>
                        </div>
                        <div class="direction__slide swiper-slide">
                            <a
                                href="{{ route('direction') }}"
                                class="direction__slider slider-body slider-body_blue"
                            >
                                <div class="slider-body__flag">
                                    <img src="img/mainPage/flags/franc.jpg" alt="">
                                </div>
                                <div class="slider-body__language">
                                    Язык <span>Французский</span>
                                </div>
                                <h4 class="slider-body__title">
                                    Страна в Западной Европе, на территории которой
                                    находятся средневековые города.
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="direction__btn-swiper">
                    <a href="{{ route('direction') }}" class="direction__btn-s">Смотреть всё</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Reviews -->
    <div class="reviews" id="reviews">
        <div class="reviews__container _container">
            <div class="title-block _anim-items _anim-no-hide">
                <div class="title-block__over-title">
                    <div class="title-block__line"></div>
                    <div class="title-block__text">Отзывы</div>
                </div>
                <h2 class="title-block__title _anim-items _anim-no-hide">
                    ОТЗЫВЫ, КОТОРЫЕ ОСТАВИЛИ НАШИ УЧЕНИКИ:
                </h2>
            </div>
            <div class="reviews__swiper swiper">
                <div class="reviews__wrapper swiper-wrapper">
                    <div class="reviews__slide swiper-slide">
                        <div class="reviews__body">
                            <a href="" class="reviews__top">
                                <div class="reviews__logo">
                                    <img src="img/mainPage/review/01.png" alt="">
                                </div>
                                <div class="reviews__name">Артём Попов</div>
                            </a>
                            <div class="reviews__info">
                                <div class="reviews__text">
                                    <p>
                                        Отзыв текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыбатекст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст
                                        рыбатекст рыба текст рыба текст рыба текст рыба
                                    </p>
                                    <p>
                                        Отзыв текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыбатекст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст
                                        рыбатекст рыба текст рыба текст рыба текст рыба
                                    </p>
                                </div>
                                <div class="reviews__bottom">
                                    <a href="" class="reviews__social">
                                        <div class="reviews__icon">
                                            <img src="img/icon/vk.png" alt="">
                                        </div>
                                        <div class="reviews__vk">Вконтакте</div>
                                    </a>
                                    <div class="reviews__date">28.11.2022</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__slide swiper-slide">
                        <div class="reviews__body">
                            <a href="" class="reviews__top">
                                <div class="reviews__logo">
                                    <img src="img/mainPage/review/02.png" alt="">
                                </div>
                                <div class="reviews__name">Кондратьев Сергей</div>
                            </a>
                            <div class="reviews__info">
                                <div class="reviews__text">
                                    <p>
                                        Отзыв текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыбатекст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст
                                        рыбатекст рыба текст рыба текст рыба текст рыба
                                    </p>
                                    <p>
                                        Отзыв текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыбатекст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст
                                        рыбатекст рыба текст рыба текст рыба текст рыба
                                    </p>
                                </div>
                                <div class="reviews__bottom">
                                    <a href="" class="reviews__social">
                                        <div class="reviews__icon">
                                            <img src="img/icon/vk.png" alt="">
                                        </div>
                                        <div class="reviews__vk">Вконтакте</div>
                                    </a>
                                    <div class="reviews__date">28.11.2022</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__slide swiper-slide">
                        <div class="reviews__body">
                            <a href="" class="reviews__top">
                                <div class="reviews__logo">
                                    <img src="img/mainPage/review/03.png" alt="">
                                </div>
                                <div class="reviews__name">Кохновец Михаил</div>
                            </a>
                            <div class="reviews__info">
                                <div class="reviews__text">
                                    <p>
                                        Отзыв текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыбатекст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст
                                        рыбатекст рыба текст рыба текст рыба текст рыба
                                    </p>
                                    <p>
                                        Отзыв текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыбатекст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст
                                        рыбатекст рыба текст рыба текст рыба текст рыба
                                    </p>
                                </div>
                                <div class="reviews__bottom">
                                    <a href="" class="reviews__social">
                                        <div class="reviews__icon">
                                            <img src="img/icon/vk.png" alt="">
                                        </div>
                                        <div class="reviews__vk">Вконтакте</div>
                                    </a>
                                    <div class="reviews__date">28.11.2022</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__slide swiper-slide">
                        <div class="reviews__body">
                            <a href="" class="reviews__top">
                                <div class="reviews__logo">
                                    <img src="img/mainPage/review/01.png" alt="">
                                </div>
                                <div class="reviews__name">Артём Попов</div>
                            </a>
                            <div class="reviews__info">
                                <div class="reviews__text">
                                    <p>
                                        Отзыв текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыбатекст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст
                                        рыбатекст рыба текст рыба текст рыба текст рыба
                                    </p>
                                    <p>
                                        Отзыв текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыбатекст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст
                                        рыбатекст рыба текст рыба текст рыба текст рыба
                                    </p>
                                </div>
                                <div class="reviews__bottom">
                                    <a href="" class="reviews__social">
                                        <div class="reviews__icon">
                                            <img src="img/icon/vk.png" alt="">
                                        </div>
                                        <div class="reviews__vk">Вконтакте</div>
                                    </a>
                                    <div class="reviews__date">28.11.2022</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__slide swiper-slide">
                        <div class="reviews__body">
                            <a href="" class="reviews__top">
                                <div class="reviews__logo">
                                    <img src="img/mainPage/review/02.png" alt="">
                                </div>
                                <div class="reviews__name">Кондратьев Сергей</div>
                            </a>
                            <div class="reviews__info">
                                <div class="reviews__text">
                                    <p>
                                        Отзыв текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыбатекст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст
                                        рыбатекст рыба текст рыба текст рыба текст рыба
                                    </p>
                                    <p>
                                        Отзыв текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыбатекст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст
                                        рыбатекст рыба текст рыба текст рыба текст рыба
                                    </p>
                                </div>
                                <div class="reviews__bottom">
                                    <a href="" class="reviews__social">
                                        <div class="reviews__icon">
                                            <img src="img/icon/vk.png" alt="">
                                        </div>
                                        <div class="reviews__vk">Вконтакте</div>
                                    </a>
                                    <div class="reviews__date">28.11.2022</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__slide swiper-slide">
                        <div class="reviews__body">
                            <a href="" class="reviews__top">
                                <div class="reviews__logo">
                                    <img src="img/mainPage/review/03.png" alt="">
                                </div>
                                <div class="reviews__name">Кохновец Михаил</div>
                            </a>
                            <div class="reviews__info">
                                <div class="reviews__text">
                                    <p>
                                        Отзыв текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыбатекст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст
                                        рыбатекст рыба текст рыба текст рыба текст рыба
                                    </p>
                                    <p>
                                        Отзыв текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст рыба
                                        текст рыбатекст рыба текст рыба текст рыба текст рыба
                                        текст рыба текст рыба текст рыба текст рыба текст
                                        рыбатекст рыба текст рыба текст рыба текст рыба
                                    </p>
                                </div>
                                <div class="reviews__bottom">
                                    <a href="" class="reviews__social">
                                        <div class="reviews__icon">
                                            <img src="img/icon/vk.png" alt="">
                                        </div>
                                        <div class="reviews__vk">Вконтакте</div>
                                    </a>
                                    <div class="reviews__date">28.11.2022</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="reviews__pagination swiper-pagination"></div>
        </div>
    </div>
@endsection
