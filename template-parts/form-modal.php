<div class="recall-modal modal">
    <form class="recall-modal__inner" method="post">
        <button class="close-modal" type="button"></button>
        <p class="recall-modal__title">Закажите обратный звонок</p>
        <input class="recall-modal__inp" type="text" name="uname" placeholder="Ваше имя">
        <input class="recall-modal__inp" type="text" name="phone" placeholder="Ваш номер телефона">
        <ul class="time-select">
            <li class="time-select__item">
                <div class="time-select__wrap">
                    <select class="select-cat" name="time_before">
                        <option>9:00</option>
                        <option>10:00</option>
                        <option>11:00</option>
                        <option>12:00</option>
                        <option>13:00</option>
                        <option>14:00</option>
                        <option>15:00</option>
                        <option>16:00</option>
                        <option>17:00</option>
                        <option>18:00</option>
                        <option>19:00</option>
                        <option>20:00</option>
                        <option>21:00</option>
                        <option>22:00</option>
                        <option>23:00</option>
                    </select>
                </div>
            </li>
            <li class="time-select__item">
                <div class="time-select__wrap">
                    <select class="select-cat" name="time_after">
                        <option>9:00</option>
                        <option>10:00</option>
                        <option>11:00</option>
                        <option>12:00</option>
                        <option>13:00</option>
                        <option>14:00</option>
                        <option>15:00</option>
                        <option>16:00</option>
                        <option>17:00</option>
                        <option>18:00</option>
                        <option>19:00</option>
                        <option>20:00</option>
                        <option>21:00</option>
                        <option>22:00</option>
                        <option>23:00</option>
                    </select>
                </div>
            </li>
        </ul>
        <p class="convenient-time">Удобный временной интервал для звонка</p>
        <div class="recall-modal__btn-wrap">
            <button class="btn recall-modal__btn" type="submit">Заказать звонок</button>
        </div>
    </form>
</div>

<!-- form thanks -->
<div class="modal modal_thanks">
    <button class="close-modal" type="button"></button>
    <ul>
        <li><p>Спасибо за обращение!</p></li>
        <li><p>Наши менеджеры свяжутся с вами в ближайшее время</p></li>
    </ul>
</div>
<div class="overlay"></div>