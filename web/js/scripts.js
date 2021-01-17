//const { stream } = require("browser-sync");

$(document).ready( function () {
    /**
     * переключалка левого меню
     * передаем в него идентификатор меню
     */
    switch_menu('left-menu');

    /**
     * Графики
     * @type {HTMLElement | null}
     */
    //Что бы заработало надо помещать график в canvas
    let ctx = document.getElementById('myChart');
    if(ctx != null) {
        let myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['week 0', 'week 1', 'week 2', 'week 3', 'week 4', 'week 5'],
                datasets: [{
                    label: "Order",
                    data: [10, 15, 20, 36, 38, 49],
                    borderColor: 'rgba(199,242,255,1)',
                    backgroundColor: '#5840BB',
                    fill: false
                },
                    {
                        label: "Profit",
                        data: [20, 35, 40, 56, 78, 99],
                        borderColor: 'rgba(255,229,238,1)',
                        backgroundColor: '#5840BB',
                        fill: false
                    }]
            }
        });
    }

    /* Второй график */
    let ctx_2 = document.getElementById('myChart2');
    if(ctx_2 != null){
        let myChart2 = new Chart(ctx_2, {
            type: 'line', // тип графика
            data: {
                //данные для графика
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], //метки оси координат
                datasets: [{
                    label: "Visitors", // название графика
                    data: [44, 25, 37, 34, 30, 41, 36], // значения для каждой метки графика
                    borderColor: '#5840BB', //Цвет графика
                    backgroundColor: '#584BB', //Цвет точек
                    fill: false //отключена заливка
                }]
            }
        });
    }

    /**
     * Получения списка заказов, через ajax
     */
    function get_orders(){
        let curentUrl = window.location;
        $.ajax({
            type: "POST",
            url: curentUrl.protocol + '//' + curentUrl.hostname + '/ajax/ajax_get_orders.php',
            data: "token = 123456",
            success: function(msg){
                if(!msg){
                    return true;
                }
                let data = JSON.parse(msg);
                /**
                 * Активация таблицы заказами
                 */
                $('#myTable').DataTable({
                    data: data, //сюда передаем данные для таблицы
                    columns: [
                        { data: 'Order' },
                        { data: 'date' },
                        { data: 'Custommer_name' },
                        { data: 'Custommer_Email' },
                        { data: 'Due_date' },
                        { data: 'Balance' },
                        { data: 'Amount' }
                    ]
                });
            }
        });
    }
    if(document.getElementById('myTable') !== null){
        get_orders();
    }



    /**
     * Starts
     */
    function stars(num){
        let str = "";
        
        if(num > 0){
            for(let i = num; i>0; i--){
                str = str + '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>';
            }
        }

        for(let i=1; i<(6-num); i++){
            str = str + '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/></svg>';
        }

        return str;
    }


    /**
     * Получение списка товара асинхронным запросым
     */
    function get_products(){
        let curentUrl = window.location;
        $.ajax({
            type: "POST",
            url: curentUrl.protocol + '//' + curentUrl.hostname + '/ajax/ajax_get_data_products.php',
            data: "token = 123456",
            success: function(msg){
                if(msg){
                    return true;
                }
                let products = JSON.parse(msg);
                /**
                 * Активация таблицы с товарами
                 */
                $('#productTable').DataTable({
                    data: products, //сюда передаем данные для таблицы
                    columns: [
                        { data: 'No' },
                        { data: 'Product_Name' },
                        { data: 'Photo' },
                        { data: 'Link' },
                        { data: 'Qnt' },
                        { data: 'Price' }
                    ]
                });
            }
        });
    }

    if(document.getElementById('productTable') !== null){
        get_products();
    }


    /**
     *  Переключение вкладок меню при переходе на другую страницу
     */
    function switch_menu(id_menu) {
        /**
         * Находим нужное меню по переданному айди
         */
        let menu = document.getElementById(id_menu);
        if(menu == null){
            console.log("меню с айди"+ id_menu + "не найдено");
            return false;
        }

        /**
         * Узнаем какой сейчас путь в адресной строке
         */
        let curentUrl = window.location,
            path = curentUrl.pathname;

        /**
         * Перебираем все li в меню,
         * удаляем класс activ у всех,
         * кроме той которая имеет ссылку на нужную страницу
         */
        let items_menu = menu.querySelectorAll('li');
        items_menu.forEach((e)=>{
            let href = e.querySelector('a').getAttribute('href');
            if(href === path){
                e.classList.add('active');
            }else{
                e.classList.remove('active');
            }
        })
    }
} );