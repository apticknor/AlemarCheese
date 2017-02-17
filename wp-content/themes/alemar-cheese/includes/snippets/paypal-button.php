<?php if( get_field('paypal_buttons') ): ?>
    <?php while(has_sub_field('paypal_buttons')) { ?>
        <div class="buttonGroup">
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="<?php the_sub_field('paypal_button_id'); ?>">
                <button type="submit" name="submit" class="btn btn_buy"><?php the_sub_field('paypal_button_text'); ?></button>
            </form>
        </div><br/>
    <?php } ?>
<?php endif; ?>