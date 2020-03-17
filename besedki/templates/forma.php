<div class="forma">
    <form action method="post" class="catalogForm">
        <div class="input">
            <label>
                <p>1. Введите регион доставки</p>
                <input name="region" type="text" placeholder="Регион доставки">
            </label>
        </div>
        <div class="input">
            <label>
                <p>2. Выберите цвет поликарбоната</p>
                <select name="color">
                    <option value="Зелёный" data-class="avatar" data-style="background-image: url('img/colors/zeleniy.png');">Зелёный</option>
                    <option value="Бирюзовый" data-class="avatar" data-style="background-image: url('img/colors/biruza.png');">Бирюзовый</option>
                    <option value="Бронзовый" data-class="avatar" data-style="background-image: url('img/colors/bronza.png');">Бронзовый</option>
                    <option value="Гранатовый" data-class="avatar" data-style="background-image: url('img/colors/granat.png');">Гранатовый</option>
                    <option value="Жёлтый" data-class="avatar" data-style="background-image: url('img/colors/jeltiy.png');">Жёлтый</option>
                    <option value="Красный" data-class="avatar" data-style="background-image: url('img/colors/krasniy.png');">Красный</option>
                    <option value="Оранжевый" data-class="avatar" data-style="background-image: url('img/colors/orang.png');">Оранжевый</option>
                    <option value="Синий" data-class="avatar" data-style="background-image: url('img/colors/siniy.png');">Синий</option>
                    <option value="Тонированный" data-class="avatar" data-style="background-image: url('img/colors/tonirovaniy.png');">Тонированный</option>
                    <option value="Прозрачный" data-class="avatar" data-style="background-image: url('img/colors/transparent.png');">Прозрачный</option>
                </select>
            </label>
        </div>
        <div class="input">
            <label>
                <p>3. Введите номер телефона</p>
                <input type="text" name="phone" class="phone_mask" placeholder="+7 (***) ***-**-**">
            </label>
        </div>
        <div class="input">
            <input type="hidden" name="model" value="">
            <input type="hidden" name="type" value="Каталог">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="hidden" name="utm_content" value="">
            <input type="submit" value="Узнать стоимость" class="button">
        </div>

    </form>
</div>