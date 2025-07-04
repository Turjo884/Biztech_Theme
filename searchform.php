<div class="sidebar-widget search-widget">
    <div class="search-form">
        <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
            <div class="form-group">
                <input 
                    type="text" 
                    name="s" 
                    id="search" 
                    value="<?php the_search_query(); ?>" 
                    placeholder="<?php echo esc_attr__('Search...', 'biztech'); ?>" 
                    required
                >
                <button type="submit"><i class="icon-4"></i></button>
            </div>
        </form>
    </div>
</div>
