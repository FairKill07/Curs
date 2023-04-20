$('.btn-buy').click(function() { //клип на кнопку
    var id = $(this).attr('id'); //получаем id этой кнопки
    $.ajax({ //передаем ajax-запросом данные
        type: "POST", //метод передачи данных
        url: 'php/addtocart.php', //php-файл для обработки данных
        data: { id_tov: id }, //передаем наши данные
        success: function(data) { //
            $('.basker_kol').html(data); //меняем количество товаров на кнопке корзины 
        }
    });
});

$('.count-product').change(function() { //изменение содержимого инпута     
    var col = $(this).val(); //получаем количество
    if (col < 1) {
        col = 1;
        $(this).val(1);
    } //если ввели меньше 1 установим 1
    var id = $(this).attr('id'); //получаем id товара
    $.ajax({ //аякс-запрос
        type: "POST", //метод
        url: '../php/cartamount.php', //куда передаем
        data: { col_tov: col, id_tov: id }, //данные
        success: function() { //получаем результат
            //тут можно пересчитать сумму
        }
    });
});

//удаление товара
$('.btn-del').click(function() { //клик на кнопку     
    var id = $(this).attr('id'); //получаем id товара
    $.ajax({ //аякс-запрос
        type: "POST", //метод
        url: '../php/cartdel.php', //куда передаем
        data: { id_tov: id }, //данные
        success: function(data) { //получаем результат
            //тут можно пересчитать сумму
            $('tr#' + id).css('display', 'none'); //скрываем строку таблицы
        }
    });
});