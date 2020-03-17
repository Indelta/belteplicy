<?php

    $catalog_items = array(
        array(
            'img' => './img/catalog/start1.jpg',
            'title' => 'Телица &laquo;БелТеплица-Стандарт&raquo;',
            'count' => 23,
            'description' => array(
                'Ширина - 3 м, высота - 2 м, длину выбираете сами (от 4 до 12 м)',
                'Стальная труба оцинкована полностью с наружной и внутренней стороны 20Х20 мм',
                'Новое поколение поликарбоната 4мм',
                'Двойная защита от ультрафиолета',
                'Две двери на торцах с форточками'
            ),
            'isOnSale' => false
        ),
        array(
            'img' => './img/catalog/lider1.jpg',
            'title' => 'Телица &laquo;БелТеплица-Народная&raquo;',
            'count' => 4,
            'description' => array(
                'Ширина - 3 м, высота - 2 м, длину выбираете сами (от 4 до 12 м)',
                'Стальная труба оцинкована полностью с наружной и внутренней стороны 20Х20 мм',
                'Расстояние между дугами 0,67 м',
                'Новое поколение поликарбоната 4мм',
                'Двойная защита от ультрафиолета',
                'Две двери на торцах с форточками'
            ),
            'isOnSale' => false
        ),
        array(
            'img' => './img/catalog/ultra1.jpg',
            'title' => 'Телица &laquo;БелТеплица-Традиционная&raquo;',
            'count' => 24,
            'description' => array(
                'Ширина - 3 м, высота - 2 м, длину выбираете сами (от 4 до 12 м)',
                'Стальная труба оцинкована полностью с наружной и внутренней стороны 40Х20 мм',
                'Расстояние между дугами 1 м',
                'Новое поколение поликарбоната 4мм',
                'Двойная защита от ультрафиолета',
                'Две двери на торцах с форточками'
            ),
            'isOnSale' => false
        ),
        array(
            'img' => './img/catalog/compact1.jpg',
            'title' => 'Телица &laquo;БелТеплица-Компакт&raquo;',
            'count' => 28,
            'description' => array(
                'Ширина - 2,04 м, высота - 2 м, длину выбираете сами (от 4 до 12 м)',
                'Стальная труба оцинкована полностью с наружной и внутренней стороны 20Х20 мм',
                'Расстояние между дугами 1 м',
                'Новое поколение поликарбоната 4мм',
                'Двойная защита от ультрафиолета',
                'Две двери на торцах с форточками'
            ),
            'isOnSale' => false
        ),
        array(
            'img' => './img/catalog/mini1.jpg',
            'title' => 'Телица &laquo;БелТеплица-Мини&raquo;',
            'count' => 32,
            'description' => array(
                'Ширина - 1,66 м, высота - 1,64 м, длину выбираете сами (от 4 до 12 м)',
                'Стальная труба оцинкована полностью с наружной и внутренней стороны 20Х20 мм',
                'Расстояние между дугами 1 м',
                'Новое поколение поликарбоната 4мм',
                'Двойная защита от ультрафиолета',
                'Две двери на торцах с форточками'
            ),
            'isOnSale' => false
        ),
        array(
            'img' => './img/catalog/kapelka1.jpg',
            'title' => 'Телица &laquo;БелТеплица-Капелька&raquo;',
            'count' => 23,
            'description' => array(
                'Ширина - 3 м, высота - 2,4 м, длину выбираете сами (от 4 до 12 м)',
                'Стальная труба оцинкована полностью с наружной и внутренней стороны 25Х25 мм',
                'Расстояние между дугами 0,65 м',
                'Новое поколение поликарбоната 4мм',
                'Двойная защита от ультрафиолета',
                'Две двери на торцах с форточками'
            ),
            'isOnSale' => false
        ),
        array(
            'img' => './img/catalog/triumf1.jpg',
            'title' => 'Телица &laquo;БелТеплица-Советская&raquo;',
            'count' => 23,
            'description' => array(
                'В усиленную комплектацию входят (дополнительно к базовой компл.): Боковое усиление, расширенная гарантия 5 лет.', 
                'ширина – 3 м, высота – 2 м, длину выбираете сами (от 4 до 12 м)',
                'стальная труба оцинкована полностью с наружной и с внутренней стороны 40х20мм', 
                'расстояние между дугами 0,67 м', 
                'новое поколение поликарбоната 4мм', 
                'двойная защита от ультрафиолета', 
                'две двери на торцах с форточками'
            ),
            'isOnSale' => true
        )
    );


    function makeItemForm($itemTitle) {
        return "
            <div class='green-block'>
                <a class='closed' href='#'>&times;</a>
                <form action='' method='post' class='catalog-item-form'>
                    <h2>Рассчитайте стоимость теплицы</h2>
                    <p class='label'>Выберите необходимую длину:</p>
                    <div class='input-group'>
                        <label>
                            <input name='length' type='radio' value='4 м.' />
                            <span>4 м.</span>
                        </label>
                        <label>
                            <input name='length' type='radio' value='6 м.' />
                            <span>6 м.</span>
                        </label>
                        <label>
                            <input name='length' type='radio' value='8 м.' />
                            <span>8 м.</span>
                        </label>
                        <label>
                            <input name='length' type='radio' value='10 м.' />
                            <span>10 м.</span>
                        </label>
                        <label>
                            <input name='length' type='radio' value='12 м.' />
                            <span>12 м.</span>
                        </label>
                    </div>
                    <p class='label'>Введите Ваш номер телефона:</p>
                    <input type='tel' name='phone' placeholder='+7 (***) ***-**-**'>
                    <input type='hidden' name='utm_term' value=''>
                    <input type='hidden' name='utm_source' value=''>
                    <input type='hidden' name='utm_medium' value=''>
                    <input type='hidden' name='utm_campaign' value=''>
                    <input type='hidden' name='utm_content' value=''>
                    <input type='hidden' name='type' value='Форма из каталога'>
                    <input type='hidden' name='title' value='".$itemTitle."'>
                    <input type='submit' value='Рассчитать стоимость теплицы' class='btn'>
                    <p class='sub'>Наш менеджер свяжется с Вами в течение 15 минут</p>
                </form>  
            </div>";
    }


    foreach($catalog_items as $item) { 
        echo "
            <div class='item'>
                <div class='white-block'>
                    <div class='left'>
                        <img data-src='".$item['img']."' class='lazyload'>";
                        echo $item['count'] > 10 ? "<p class='count red'>Осталось ".$item['count']." шт.</p>" : "<p class='count yellow'>Осталось ".$item['count']." шт.</p>";
            echo "</div>
                    <div class='right'>
                        <h2>".$item['title']."</h2>
                        <ul>";
                        foreach($item['description'] as $li) {
                            echo "<li>".$li."</li>";
                        }
            echo "</ul>
                <a class='btn' href='#'>Узнать стоимость</a>
                </div>
            </div>";
            echo makeItemForm($item['title']);
        echo "</div>";
    } 

?>