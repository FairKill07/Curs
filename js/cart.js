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

function val(value, id) { //изменение содержимого инпута     

    $.ajax({ //аякс-запрос
        type: "POST", //метод
        url: '../php/cartamount.php', //куда передаем
        data: { col_tov: value, id_tov: id }, //данные
        success: function() { //получаем результат
            //тут можно пересчитать сумму
        }
    });

};

//удаление товара
$('.btn-del').click(function() { //клик на кнопку     
    var id = $(this).attr('id'); //получаем id товара
    $.ajax({ //аякс-запрос
        type: "POST", //метод
        url: '../php/cartdel.php', //куда передаем
        data: { id_tov: id }, //данные
        success: function(data) { //получаем результат
            //тут можно пересчитать сумму
            $('.' + id).fadeOut(); //скрываем строку таблицы
        }
    });
});

$('.minus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');

    var value = parseInt($input.val());
    if (value > 1) {
        value = value - 1;
    } else {
        value = 0;
    }
    var id = $input.attr('id');
    val(value, id);

    $input.val(value);
});

$('.plus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var id = $(this).attr('id');
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
    if (value < 100) {
        value = value + 1;
    } else {
        value = 100;
    }
    var id = $input.attr('id');
    val(value, id)

    $input.val(value);
});




document.querySelector('.btn-buy').onclick = () => {
    new Toast({
        title: false,
        text: 'Спасибо',
        theme: 'light',
        autohide: true,
        interval: 10000
    });
};