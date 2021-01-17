<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 15/01/2021
 * Time: 23:02
 */
?>
<div class="orders">
    <div class="orders__statistics">
        <div class="orders__statistics-order">
            <h4 class="title title__h4"><span>Orders</span></h4>
            <div class="qnt"> 2,064</div>
            <p>Total Order</p>
        </div>
        <div class="orders__statistics-pay">
            <h4 class="title title__h4"><span>Pay</span></h4>
            <div class="qnt"> 2,064</div>
            <p>Pay Order</p>
        </div>
        <div class="orders__statistics-pending">
            <h4 class="title title__h4"><span>Pending</span> </h4>
            <div class="qnt"> 2,064</div>
            <p>pending Order</p>
        </div>
    </div>
    <div class="orders__list">
        <table class="table" id="myTable">
            <thead>
            <tr>
                <th>Order No.</th>
                <th>data</th>
                <th>Custommer name</th>
                <th>Custommer Email</th>
                <th>Due data</th>
                <th>Balance</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7">
                        <div class="d-flex justify-content-center">
                            <div class="spinner-border" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>