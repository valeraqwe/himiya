<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карточки товаров со слайдером</title>
    <!-- Подключение Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(100%); /* Изменяет цвет на черный */
        }
    </style>
</head>
<body>
<!-- Хедер -->
<header class="bg-light py-4">
    <div class="container text-center">
        <h1>Название Вашей Компании</h1>
    </div>
    <div class="container text-center mt-3">
        <p>Свяжитесь с нами: +38 (068) 206 24 50</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contactModal">Оставить быструю заявку</button>
    </div>
</header>

<!-- Карусель (слайдер) -->
<div class="container mt-4">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/himiya.jpg" class="d-block w-100" alt="Первая фотография">
            </div>
            <div class="carousel-item">
                <img src="images/777.jpg" class="d-block w-100" alt="Вторая фотография">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Модальное окно -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">Оставить заявку</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Мы с вами свяжемся</p>
                <form>
                    <div class="mb-3">
                        <label for="fullNameModal" class="form-label">ФИО</label>
                        <input type="text" class="form-control" id="fullNameModal" name="fullNameModal" required>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumberModal" class="form-label">Номер телефона</label>
                        <input type="tel" class="form-control" id="phoneNumberModal" name="phoneNumberModal" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-primary">Отправить</button>
            </div>
        </div>
    </div>
</div>


</header>
<div class="container text-center mt-4">
    <h2>Ассортимент</h2>
</div>

<div class="container mt-4">
    <div class="row">
        <!-- Карточки товаров -->
        <!-- SLIDER 1 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div id="slider1" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/DSC_0005.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0008.jpg" class="d-block w-100" alt="Изображение 3">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0015.jpg" class="d-block w-100" alt="Изображение 4">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0016.jpg" class="d-block w-100" alt="Изображение 5">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#slider1" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slider1" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Товар 1</h5>
                    <p class="card-text">Описание товара 1.</p>
                    <p class="card-text">Цена: $100</p>
                    <a href="#" class="btn center btn-primary">Заказать</a>
                </div>
            </div>
        </div>
        <!-- SLIDER 2 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div id="slider2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/DSC_0025.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0029.jpg" class="d-block w-100" alt="Изображение 2">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0031.jpg" class="d-block w-100" alt="Изображение 3">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0044.jpg" class="d-block w-100" alt="Изображение 4">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#slider2" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slider2" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Товар 1</h5>
                    <p class="card-text">Описание товара 1.</p>
                    <p class="card-text">Цена: $100</p>
                    <a href="#" class="btn center btn-primary">Заказать</a>
                </div>
            </div>
        </div>
        <!-- SLIDER 3 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div id="slider3" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/DSC_0046.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0048.jpg" class="d-block w-100" alt="Изображение 2">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#slider3" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slider3" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Товар 1</h5>
                    <p class="card-text">Описание товара 1.</p>
                    <p class="card-text">Цена: $100</p>
                    <a href="#" class="btn center btn-primary">Заказать</a>
                </div>
            </div>
        </div>
        <!-- SLIDER 4 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div id="slider4" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/DSC_0057.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0053.jpg" class="d-block w-100" alt="Изображение 2">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#slider4" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slider4" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Товар 1</h5>
                    <p class="card-text">Описание товара 1.</p>
                    <p class="card-text">Цена: $100</p>
                    <a href="#" class="btn center btn-primary">Заказать</a>
                </div>
            </div>
        </div>
        <!-- SLIDER 5 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div id="slider5" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/DSC_0060.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0063.jpg" class="d-block w-100" alt="Изображение 2">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#slider5" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slider5" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Товар 1</h5>
                    <p class="card-text">Описание товара 1.</p>
                    <p class="card-text">Цена: $100</p>
                    <a href="#" class="btn center btn-primary">Заказать</a>
                </div>
            </div>
        </div>
        <!-- SLIDER 6 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div id="slider6" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/DSC_0088.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0084.jpg" class="d-block w-100" alt="Изображение 2">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0080.jpg" class="d-block w-100" alt="Изображение 3">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0073.jpg" class="d-block w-100" alt="Изображение 4">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0070.jpg" class="d-block w-100" alt="Изображение 5">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#slider6" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slider6" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Товар 1</h5>
                    <p class="card-text">Описание товара 1.</p>
                    <p class="card-text">Цена: $100</p>
                    <a href="#" class="btn center btn-primary">Заказать</a>
                </div>
            </div>
        </div>
        <!-- SLIDER 7 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div id="slider7" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/DSC_0091.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0094.jpg" class="d-block w-100" alt="Изображение 2">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0099.jpg" class="d-block w-100" alt="Изображение 3">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#slider7" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slider7" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Товар 1</h5>
                    <p class="card-text">Описание товара 1.</p>
                    <p class="card-text">Цена: $100</p>
                    <a href="#" class="btn center btn-primary">Заказать</a>
                </div>
            </div>
        </div>
        <!-- SLIDER 8 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div id="slider8" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/DSC_0107.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0113.jpg" class="d-block w-100" alt="Изображение 2">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#slider8" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slider8" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Товар 1</h5>
                    <p class="card-text">Описание товара 1.</p>
                    <p class="card-text">Цена: $100</p>
                    <a href="#" class="btn center btn-primary">Заказать</a>
                </div>
            </div>
        </div>
        <!-- SLIDER 9 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div id="slider9" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/DSC_0135.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0132.jpg" class="d-block w-100" alt="Изображение 2">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0122.jpg" class="d-block w-100" alt="Изображение 3">
                        </div>
                        <div class="carousel-item">
                            <img src="images/DSC_0115.jpg" class="d-block w-100" alt="Изображение 4">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#slider9" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slider9" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Товар 1</h5>
                    <p class="card-text">Описание товара 1.</p>
                    <p class="card-text">Цена: $100</p>
                    <a href="#" class="btn center btn-primary">Заказать</a>
                </div>
            </div>
        </div>
        <!-- SLIDER 10 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div id="slider10" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/DSC_0140.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <div class="carousel-item active">
                            <img src="images/DSC_0142.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <div class="carousel-item active">
                            <img src="images/DSC_0144.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <div class="carousel-item active">
                            <img src="images/DSC_0146.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <div class="carousel-item active">
                            <img src="images/DSC_0148.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <a class="carousel-control-prev" href="#slider10" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#slider10" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Товар 1</h5>
                        <p class="card-text">Описание товара 1.</p>
                        <p class="card-text">Цена: $100</p>
                        <a href="#" class="btn center btn-primary">Заказать</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- SLIDER 11 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div id="slider11" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/DSC_0051.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <a class="carousel-control-prev" href="#slider11" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#slider11" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Товар 1</h5>
                        <p class="card-text">Описание товара 1.</p>
                        <p class="card-text">Цена: $100</p>
                        <a href="#" class="btn center btn-primary">Заказать</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- SLIDER 12 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div id="slider12" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/DSC_0255.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <div class="carousel-item active">
                            <img src="images/DSC_0253.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <div class="carousel-item active">
                            <img src="images/DSC_0251.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <div class="carousel-item active">
                            <img src="images/DSC_0243.jpg" class="d-block w-100" alt="Изображение 1">
                        </div>
                        <a class="carousel-control-prev" href="#slider12" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#slider12" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Товар 1</h5>
                        <p class="card-text">Описание товара 1.</p>
                        <p class="card-text">Цена: $100</p>
                        <a href="#" class="btn center btn-primary">Заказать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Секция с описанием компании -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Про нас</h2>
                <p>КОНЬЯК І ГОРІЛКА НА РОЗЛИВ ЖИТОМИРСЬКОГО ЛІКЕРО-ГОРІЛЧАНОГО ЗАВОДУ УКРАЇНИ</p>
                <p>Сайт є офіційним дистриб'ютором лікеру горілчаної продукції в Україні. Тут ми зможемо вам
                    запропонувати купити за ціною виробника, без переплат. Так ви зможете зробити свою закупівлю менш
                    витратною і при цьому ви отримуєте сертифікований продукт найвищої якості.</p>
                <p>НАДАЄМО СЕРТИФІКАТ ЯКОСТІ!</p>
                <p>Одна з переваг швидка доставка до всіх регіонів України.</p>
                <p>Вас скоріше цікавить не лише ціна, а й якість лікеру горілчаної продукції, тоді краще звертатися
                    безпосередньо до виробника! Компанія "Альянс заводів України" допоможе вам придбати розливний
                    продукт із заводів України, який відповідатиме всім вашим вимогам алкогольних напоїв (коньяку та
                    горілки).</p>
                <p>Оформити замовлення ви можете у нас залишивши онлайн заявку або зателефонувати нам за номером
                    телефону:<br>+38 (068) 206 24 50</p>
                <p>Ми працюємо без вихідних 24/7</p>
                <p>Так само ви можете отримати консультацію у нашого менеджера, він вам надасть всю інформацію про
                    продукт та допоможе оформити замовлення!</p>
            </div>
            <!-- Форма заказа -->
            <div class="col-md-4">
                <h2 style="font-size: 18px; margin-bottom: 10px;">Заказать товар</h2>
                <form style="font-size: 14px;">
                    <div class="mb-2">
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="ФИО"
                               required>
                    </div>
                    <div class="mb-2">
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Телефон"
                               required>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" id="city" name="city" placeholder="Город" required>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" id="region" name="region" placeholder="Область"
                               required>
                    </div>
                    <div class="mb-2">
                        <select class="form-select" id="productType" name="productType" required>
                            <option value="" disabled selected>Вид продукта</option>
                            <option value="коньяк">Химия1</option>
                            <option value="горілка">Химия2</option>
                            <!-- Добавьте другие варианты продуктов -->
                        </select>
                    </div>
                    <div class="mb-2">
                        <select class="form-select" id="deliveryMethod" name="deliveryMethod" required>
                            <option value="" disabled selected>Способ доставки</option>
                            <option value="курьерская доставка">Нова Пошта</option>
                            <option value="отделение почты">Укр пошта</option>
                            <!-- Добавьте другие варианты доставки -->
                        </select>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" id="postOfficeNumber" name="postOfficeNumber"
                               placeholder="Номер отделения почты">
                    </div>
                    <div class="mb-2">
                        <select class="form-select" id="paymentMethod" name="paymentMethod" required>
                            <option value="" disabled selected>Выберите способ оплаты</option>
                            <option value="на карту">На карту</option>
                            <option value="наличные">Наличные</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <input type="number" class="form-control" id="quantity" name="quantity"
                               placeholder="Количество (минимум 10 штук)" min="10" required>
                    </div>
                    <div class="mb-2">
                        <label for="callBack" class="form-label">Перезвонить после оформления заказа?</label>
                        <select class="form-select" id="callBack" name="callBack" required>
                            <option value="" disabled selected>Выберите вариант</option>
                            <option value="да">Да</option>
                            <option value="нет">Нет</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <textarea class="form-control" id="comments" name="comments" placeholder="Ваш комментарий"
                                  rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить заказ</button>
                </form>
            </div>

        </div>
    </div>

    <!-- Секция футера -->
    <footer class="footer bg-light mt-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; Название Вашей Компании</p>
                    <p id="current-year"></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Подключение Bootstrap JS (необходимо для работы слайдера) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("current-year").textContent = new Date().getFullYear();
    </script>
</body>
</html>
