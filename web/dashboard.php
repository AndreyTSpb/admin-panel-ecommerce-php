<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 15/01/2021
 * Time: 13:08
 */
?>
<div class="statistics">
    <div class="statistics__orders">
        <div class="statistics__orders-img">
            <img src="<?=DOCUMENT_ROOT.'/'.TP_FOLDER?>/icons/orders2.svg" alt="">
        </div>
        <div class="statistics__orders-name">
            <h2 class="title title__h4"><span>23 789</span></h2>
            <p>orders</p>
        </div>
        <div class="statistics__orders-badge">
            +23
        </div>
    </div>
    <div class="statistics__profit">
        <div class="statistics__profit-img">
            <img src="<?=DOCUMENT_ROOT.'/'.TP_FOLDER?>/icons/profit.svg" alt="">
        </div>
        <div class="statistics__profit-name">
            <h2 class="title title__h4"><span>$ 12 890,89</span></h2>
            <p>profit</p>
        </div>
        <div class="statistics__profit-badge">
            +544
        </div>
    </div>
    <div class="statistics__top-salling-products">
        <div class="statistics__top-salling-products-header">
            <h4 class="title title__h4"><span>Top selling products</span></h4>
            <a href="#">See all ></a>
        </div>
        <ol class="statistics__top-salling-products-items">
            <li>
                <div class="statistics__top-salling-products-items-img">
                    <img src="<?=DOCUMENT_ROOT.'/'.TP_FOLDER?>/img/tshirt.png" alt="">
                </div>
                <div class="statistics__top-salling-products-items-item">
                    <h5 class="title title__h5">Tshirt Levis</h5>
                    <h4 class="title title__h4"><span>$ 49,99</span></h4>
                </div>
            </li>
            <li>
                <div class="statistics__top-salling-products-items-img">
                    <img src="<?=DOCUMENT_ROOT.'/'.TP_FOLDER?>/img/jacket.png" alt="">
                </div>
                <div class="statistics__top-salling-products-items-item">
                    <h5 class="title title__h5">Long jeans jacket</h5>
                    <h4 class="title title__h4"><span>$ 129,99</span></h4>
                </div>
            </li>
            <li>
                <div class="statistics__top-salling-products-items-img">
                    <img src="<?=DOCUMENT_ROOT.'/'.TP_FOLDER?>/img/cap.png" alt="">
                </div>
                <div class="statistics__top-salling-products-items-item">
                    <h5 class="title title__h5">Fullcap</h5>
                    <h4 class="title title__h4"><span>$ 20,99</span></h4>
                </div>
            </li>
            <li>
                <div class="statistics__top-salling-products-items-img">
                    <img src="<?=DOCUMENT_ROOT.'/'.TP_FOLDER?>/img/adidas.png" alt="">
                </div>
                <div class="statistics__top-salling-products-items-item">
                    <h5 class="title title__h5">Adidas pants</h5>
                    <h4 class="title title__h4"><span>$ 89,99</span></h4>
                </div>
            </li>
        </ol>
    </div>
    <div class="statistics__sale-statistic">
        <div class="statistics__sale-statistic-header">
            <h4 class="title title__h4">Sales statistics</h4>
            <select name="" id="">
                <option value="1">Понедельник</option>
                <option value="2">Вторник</option>
                <option value="3">Среда</option>
                <option value="4">Четверг</option>
                <option value="5">Пятница</option>
                <option value="6">Суббота</option>
                <option value="7">Воскресенье</option>
            </select>
        </div>
        <div class="statistics__sale-statistic-body">
            <!-- Что бы заработало надо помещать график в canvas -->
            <canvas id="myChart"></canvas>
        </div>
    </div>
    <div class="statistics__unic-visitors">
        <div class="statistics__unic-visitors-header">
            <h4 class="title title__h6"><span>Unique visitors</span></h4>
            <select name="period" id="">
                <option value="1">weekly</option>
                <option value="1">monthly</option>
                <option value="1">yearly</option>
            </select>
        </div>
        <div class="statistics__unic-visitors-body">
            <canvas id="myChart2"></canvas>
        </div>
    </div>
</div>
