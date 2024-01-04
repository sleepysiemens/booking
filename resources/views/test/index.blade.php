@extends('Layouts.wrapper')

@section('content')
    <form class="container" method="post" action="{{asset(route('test.form'))}}">
        @csrf
        <a class="backlink"><i class="fas fa-caret-left"></i> Вернуться к поиску</a>
        <h1 class="title">Новосибирск - Красноярск</h1>
        <div class="justify-space-between">
            <div class="w-75">
                <div class="banner">
                    <div class="banner-container">

                        <div class="row banner-header">
                            <div class="circle-icon">
                                <i class="fas fa-plane-departure"></i>
                            </div>
                            <div class="ticket-title">
                                <h3>Новосибирск - Красноярск</h3>
                                <p>2 перасдки</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="flight">
                                <p class="flight-date">11 января</p>
                                <h2 class="flight-time">10:15</h2>
                                <p class="flight-place">Россия, Новосибирск (OVB)</p>
                            </div>

                            <div class="flight flight-arrow">
                                <span class="line"></span>
                                <i class="fas fa-caret-right"></i>
                            </div>

                            <div class="flight">
                                <p class="flight-date">11 января</p>
                                <h2 class="flight-time">10:45</h2>
                                <p class="flight-place">Россия, Москва (MOW)</p>
                            </div>
                            <div class="flight">
                                <h3 class="flight-length">4 ч 30 мин</h3>
                                <p class="flight-number">Рейс SU-1307</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="transfer">
                                <div class="transfer-container justify-space-between">
                                    <div class="justify-space-between">
                                        <i class="far fa-clock"></i>
                                        <p class="transfer-p">Пересадка</p>
                                    </div>
                                    <p class="transfer-p">1 ч 30 мин</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="flight">
                                <p class="flight-date">11 января</p>
                                <h2 class="flight-time">12:15</h2>
                                <p class="flight-place">Россия, Москва (MOW)</p>
                            </div>

                            <div class="flight flight-arrow">
                                <span class="line"></span>
                                <i class="fas fa-caret-right"></i>
                            </div>

                            <div class="flight">
                                <p class="flight-date">11 января</p>
                                <h2 class="flight-time">13:45</h2>
                                <p class="flight-place">Россия, Санкт-Петербург (LED)</p>
                            </div>
                            <div class="flight">
                                <h3 class="flight-length">1 ч 30 мин</h3>
                                <p class="flight-number">Рейс SU-18</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="transfer">
                                <div class="transfer-container justify-space-between">
                                    <div class="justify-space-between">
                                        <i class="far fa-clock"></i>
                                        <p class="transfer-p">Пересадка</p>
                                    </div>
                                    <p class="transfer-p">8 ч 20 мин</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="flight">
                                <p class="flight-date">11 января</p>
                                <h2 class="flight-time">22:05</h2>
                                <p class="flight-place">Россия, Санкт-Петербург (LED)</p>
                            </div>

                            <div class="flight flight-arrow">
                                <span class="line"></span>
                                <i class="fas fa-caret-right"></i>
                            </div>

                            <div class="flight">
                                <p class="flight-date">12 января</p>
                                <h2 class="flight-time">06:50</h2>
                                <p class="flight-place">Россия, Красноярск (KJA)</p>
                            </div>
                            <div class="flight">
                                <h3 class="flight-length">4 ч 45 мин</h3>
                                <p class="flight-number">Рейс SU-2806</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="banner">
                    <div class="banner-container">
                        <h3>Контактные данные</h3>
                        <p class="subtitle">На почту мы отправим документ “Подтверждение бронирования”</p>
                        <div class="row">
                            <fieldset class="commons-input w-45">
                                <legend>Email</legend>
                                <input type="email" name="email" required>
                            </fieldset>

                            <fieldset class="commons-input w-45">
                                <legend>Телефон</legend>
                                <input type="tel" name="phone" required>
                            </fieldset>
                        </div>
                    </div>
                </div>

                <div class="banner">
                    <div class="banner-container">
                        <div class="row banner-header">
                            <div class="circle-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="ticket-title justify-space-between">
                                <h3 class="ma">1-пассажир, взрослый</h3>
                            </div>
                        </div>
                        <div class="row mb-15">
                            <fieldset class="commons-input w-45">
                                <legend>Фамилия (на латинице)</legend>
                                <input type="text" name="surname" required>
                            </fieldset>
                            <fieldset class="commons-input w-45">
                                <legend>Имя (на латинице)</legend>
                                <input type="text" name="name" required>
                            </fieldset>
                        </div>
                        <div class="row mb-15">
                            <fieldset class="commons-input w-45">
                                <legend>Дата рождения</legend>
                                <input required name="date_of_birth" type="text" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                            </fieldset>
                            <fieldset class="commons-input w-45">
                                <legend>Пол</legend>
                                <select name="sex" required>
                                    <option value="1">Мужской</option>
                                    <option value="0">Женский</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="row mb-15"><h3>Документ</h3></div>
                        <div class="row mb-15">
                                <fieldset class="commons-input w-45">
                                    <legend>Гражданство</legend>
                                    <select name="country" required>
                                        <option value="1">Россия</option>
                                        <option value="0">Внутренний паспорт РФ</option>
                                    </select>
                                </fieldset>
                            <fieldset class="commons-input w-45">
                                <legend>Документ</legend>
                                <select name="doc_type" required>
                                    <option value="1">Заграничный паспорт РФ</option>
                                    <option value="0">Внутренний паспорт РФ</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="row mb-15">
                            <fieldset class="commons-input w-30">
                                <legend>Серия</legend>
                                <input type="text" name="doc_serial" required>
                            </fieldset>
                            <fieldset class="commons-input w-30">
                                <legend>Номер</legend>
                                <input type="text" name="doc_number" required>
                            </fieldset>
                            <fieldset class="commons-input w-30">
                                <legend>Срок действия</legend>
                                <input required name="doc_end_date" type="text" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                            </fieldset>
                        </div>
                    </div>
                </div>

                <div class="banner">
                    <div class="banner-container">
                        <div class="row mb-15"><h3>Комментарий</h3></div>
                        <fieldset class="commons-input w-a">
                            <legend>Комментарий</legend>
                            <textarea name="doc_number"></textarea>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="w-25">
                <div class="banner total">
                    <div class="banner-container">
                        <div class="row justify-space-between">
                            <h5>1 пассажир</h5>
                            <h3 class="total-price">14 €</h3>
                        </div>
                        <div class="sep-line"></div>
                        <div class="row justify-space-between">
                            <h5>При оплате в рублях:</h5>
                            <h2 class="total-price">699 ₽</h2>
                        </div>
                        <div class="row">
                            <p class="or">или</p>
                        </div>
                        <div class="row justify-space-between">
                            <h5>При оплате в евро:</h5>
                            <h3 class="total-price">14 €</h3>
                        </div>
                        <br>
                        <div class="row warning">
                            <i class="fas fa-exclamation-circle"></i>
                            <p>Бронь действительна до 7 дней</p>
                        </div>
                        <button class="pay-btn">
                            <p>К оплате</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </form>

@endsection
