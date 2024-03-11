<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label class="search-label">
        <span class="screen-reader-text"><?php echo esc_attr_x( 'Search...', 'search placeholder', 'acwebsite'  ) ?></span>
        <div class="single-form">
            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'search placeholder', 'acwebsite'  ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search...', 'search placeholder' , 'acwebsite'  ) ?>" />
        </div>
        <!-- /.single-form -->
        <input type="hidden" value="post" name="post_type" />
        <input type="hidden" value="1" name="sentence" />
    </label>
    <div class="single-form">
        <input type="submit" class="search-submit main-btn" value="<?php echo esc_attr_x( 'Search', 'submit button', 'acwebsite' ) ?>" />
    </div>
    <!-- /.single-form -->
</form>