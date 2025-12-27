@extends('layouts.app')
@section('title', 'Продать автомобиль')
@section('content')

<section class="carhut-hero" style="min-height: 50vh; padding: 4rem 0;">
    <div class="carhut-hero-bg"></div>
    <div class="container carhut-hero-inner">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="carhut-hero-title mb-3">Продайте свой автомобиль быстро и выгодно</h1>
                <p class="carhut-hero-subtitle mb-4">
                    Получите справедливую цену за ваш автомобиль. Мы поможем найти покупателя 
                    за минимальное время с максимальной выгодой для вас.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#form" class="btn carhut-btn-primary btn-lg">Оценить авто</a>
                    <a href="#benefits" class="btn btn-outline-light btn-lg">Узнать больше</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://images.pexels.com/photos/3802508/pexels-photo-3802508.jpeg?auto=compress&cs=tinysrgb&w=1200" 
                     class="w-100 rounded-4 shadow-lg float-animation" alt="Sell car">
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section id="benefits" class="carhut-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="carhut-section-title mb-3">Почему выбирают нас</h2>
            <p class="text-soft">Мы — крупнейшая платформа для продажи автомобилей</p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card-premium text-center h-100">
                    <div class="carhut-feature-icon mx-auto mb-3" style="font-size: 2rem;">💰</div>
                    <h4 class="h5 mb-3">Справедливая цена</h4>
                    <p class="text-soft mb-0">
                        Мы анализируем рынок и предлагаем реальную стоимость вашего автомобиля. 
                        Без занижения цены и скрытых комиссий.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-premium text-center h-100">
                    <div class="carhut-feature-icon mx-auto mb-3" style="font-size: 2rem;">⚡</div>
                    <h4 class="h5 mb-3">Быстрая продажа</h4>
                    <p class="text-soft mb-0">
                        Средний срок продажи — 7 дней. Мы находим покупателей быстро благодаря 
                        большой базе заинтересованных клиентов.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-premium text-center h-100">
                    <div class="carhut-feature-icon mx-auto mb-3" style="font-size: 2rem;">🔒</div>
                    <h4 class="h5 mb-3">Безопасная сделка</h4>
                    <p class="text-soft mb-0">
                        Защищенные платежи, проверка документов и юридическая поддержка. 
                        Ваша безопасность — наш приоритет.
                    </p>
                </div>
            </div>
        </div>

        <!-- Statistics -->
        <div class="stats-grid">
            <div class="stat-item">
                <div class="carhut-stat text-primary">1000+</div>
                <div class="carhut-stat-label">Проданных авто</div>
            </div>
            <div class="stat-item">
                <div class="carhut-stat text-success">99%</div>
                <div class="carhut-stat-label">Удовлетворенность</div>
            </div>
            <div class="stat-item">
                <div class="carhut-stat text-indigo">7 дней</div>
                <div class="carhut-stat-label">Средний срок</div>
            </div>
            <div class="stat-item">
                <div class="carhut-stat text-warning">100%</div>
                <div class="carhut-stat-label">Безопасность</div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="carhut-section carhut-section-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="carhut-section-title mb-3" style="color: #1a1a2e;">Как это работает</h2>
            <p class="text-muted">Простой процесс из 4 шагов</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="text-center">
                    <div class="carhut-feature-icon mx-auto mb-3" style="background: var(--primary-gradient);">1</div>
                    <h5 class="mb-3" style="color: #1a1a2e;">Заполните форму</h5>
                    <p class="text-muted small">
                        Укажите марку, модель, год выпуска и основные характеристики вашего автомобиля
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center">
                    <div class="carhut-feature-icon mx-auto mb-3" style="background: var(--accent-gradient);">2</div>
                    <h5 class="mb-3" style="color: #1a1a2e;">Получите оценку</h5>
                    <p class="text-muted small">
                        Наш эксперт проанализирует данные и предложит справедливую рыночную цену
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center">
                    <div class="carhut-feature-icon mx-auto mb-3" style="background: var(--success-gradient);">3</div>
                    <h5 class="mb-3" style="color: #1a1a2e;">Разместите объявление</h5>
                    <p class="text-muted small">
                        Добавьте фотографии и описание. Мы поможем создать привлекательное объявление
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center">
                    <div class="carhut-feature-icon mx-auto mb-3" style="background: var(--secondary-gradient);">4</div>
                    <h5 class="mb-3" style="color: #1a1a2e;">Продайте авто</h5>
                    <p class="text-muted small">
                        Получайте предложения от покупателей и заключайте сделку на выгодных условиях
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sell Form -->
<section id="form" class="carhut-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="calculator-card">
                    <h2 class="h3 mb-4 text-center">Оцените свой автомобиль</h2>
                    <p class="text-center text-soft mb-4">Заполните форму, и мы свяжемся с вами в течение часа</p>
                    
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Марка автомобиля</label>
                                <div class="custom-dropdown">
                                    <select required>
                                        <option value="">Выберите марку</option>
                                        <option>BMW</option>
                                        <option>Mercedes-Benz</option>
                                        <option>Audi</option>
                                        <option>Toyota</option>
                                        <option>Ford</option>
                                        <option>Volkswagen</option>
                                        <option>Hyundai</option>
                                        <option>Nissan</option>
                                    </select>
                                    <div class="custom-dropdown-select">Выберите марку</div>
                                    <div class="custom-dropdown-menu"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Модель</label>
                                <input type="text" class="form-control" placeholder="Например: X5" required>
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Год выпуска</label>
                                <input type="number" class="form-control" placeholder="2020" min="1990" max="2024" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Пробег (км)</label>
                                <input type="number" class="form-control" placeholder="50000" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Тип кузова</label>
                                <div class="custom-dropdown">
                                    <select required>
                                        <option value="">Выберите</option>
                                        <option>Седан</option>
                                        <option>SUV</option>
                                        <option>Хэтчбек</option>
                                        <option>Купе</option>
                                        <option>Универсал</option>
                                    </select>
                                    <div class="custom-dropdown-select">Выберите</div>
                                    <div class="custom-dropdown-menu"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Тип двигателя</label>
                                <div class="custom-dropdown">
                                    <select required>
                                        <option value="">Выберите</option>
                                        <option>Бензин</option>
                                        <option>Дизель</option>
                                        <option>Гибрид</option>
                                        <option>Электрический</option>
                                    </select>
                                    <div class="custom-dropdown-select">Выберите</div>
                                    <div class="custom-dropdown-menu"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Коробка передач</label>
                                <div class="custom-dropdown">
                                    <select required>
                                        <option value="">Выберите</option>
                                        <option>Автоматическая</option>
                                        <option>Механическая</option>
                                        <option>Робот</option>
                                        <option>Вариатор</option>
                                    </select>
                                    <div class="custom-dropdown-select">Выберите</div>
                                    <div class="custom-dropdown-menu"></div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Ваше имя</label>
                            <input type="text" class="form-control" placeholder="Иван Иванов" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Телефон</label>
                            <input type="tel" class="form-control" placeholder="+7 (999) 123-45-67" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="example@mail.ru" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Дополнительная информация</label>
                            <textarea class="form-control" rows="4" placeholder="Расскажите о состоянии автомобиля, наличии документов и т.д."></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn carhut-btn-primary btn-lg">
                                Отправить заявку
                            </button>
                        </div>

                        <p class="text-center text-soft small mt-3">
                            Нажимая кнопку, вы соглашаетесь с <a href="#" class="text-decoration-underline">политикой конфиденциальности</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="carhut-section carhut-section-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="carhut-section-title mb-3" style="color: #1a1a2e;">Отзывы продавцов</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="carhut-testimonial h-100" style="background: white;">
                    <div class="mb-3">
                        <span style="color: #ffc107;">★★★★★</span>
                    </div>
                    <p class="text-muted mb-3">
                        "Продал свой BMW за неделю! Очень доволен ценой и скоростью сделки. 
                        Все прошло гладко и безопасно."
                    </p>
                    <div class="d-flex align-items-center gap-2">
                        <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center text-white" 
                             style="width: 50px; height: 50px;">А</div>
                        <div>
                            <div class="fw-semibold" style="color: #1a1a2e;">Алексей</div>
                            <div class="small text-muted">Продал BMW X5</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="carhut-testimonial h-100" style="background: white;">
                    <div class="mb-3">
                        <span style="color: #ffc107;">★★★★★</span>
                    </div>
                    <p class="text-muted mb-3">
                        "Отличный сервис! Помогли правильно оценить автомобиль и быстро нашли покупателя. 
                        Рекомендую всем!"
                    </p>
                    <div class="d-flex align-items-center gap-2">
                        <div class="rounded-circle bg-success d-flex align-items-center justify-content-center text-white" 
                             style="width: 50px; height: 50px;">М</div>
                        <div>
                            <div class="fw-semibold" style="color: #1a1a2e;">Мария</div>
                            <div class="small text-muted">Продала Toyota Camry</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="carhut-testimonial h-100" style="background: white;">
                    <div class="mb-3">
                        <span style="color: #ffc107;">★★★★★</span>
                    </div>
                    <p class="text-muted mb-3">
                        "Безопасная сделка, все документы проверили, деньги получил сразу. 
                        Очень профессиональный подход!"
                    </p>
                    <div class="d-flex align-items-center gap-2">
                        <div class="rounded-circle bg-info d-flex align-items-center justify-content-center text-white" 
                             style="width: 50px; height: 50px;">Д</div>
                        <div>
                            <div class="fw-semibold" style="color: #1a1a2e;">Дмитрий</div>
                            <div class="small text-muted">Продал Audi A6</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

