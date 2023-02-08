<div class="col-xl-3">
    <div class="cart-subtotal">
        <p>SUBTOTAL</p>
        <ul>
            <li><span>Sub-Total:</span>₺{{ Cart::subtotal() }}</li>
            <li><span>Tax (-4.00):</span>₺{{ Cart::tax() }}</li>
            <li><span>Shipping Cost:</span>$00.00</li>
            <li><span>TOTAL:</span>₺{{ Cart::total() }}</li>
        </ul>
        <div class="note">
            <span>Order Note :</span>
            <textarea></textarea>
        </div>
        <a href="#">Proceed To Checkout</a>
    </div>
    <!-- /.cart-subtotal -->
</div>
<!-- /.col-xl-3 -->
