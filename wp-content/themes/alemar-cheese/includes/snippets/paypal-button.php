<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="<?php the_field('paypal_add_to_cart_id'); ?>">
    <button type="submit" name="submit" class="btn btn_buy">Buy Now</button>
</form>
