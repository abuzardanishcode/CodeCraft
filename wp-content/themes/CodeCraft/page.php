<?php 

get_header();
?>
<div class="continer main-content">
    <div class="text-container">
        <div class="banner-title">
            <?php if ( $banner_title = get_field( 'banner_title' ) ) : ?>
                <?php echo esc_html( $banner_title ); ?>
            <?php endif; ?>
        </div>

        <div class="banner-content">
            <?php if ( $banner_content = get_field( 'banner_content' ) ) : ?>
                <?php echo esc_html( $banner_content ); ?>
            <?php endif; ?>
        </div>

        <div class="buttons">
            <div class="project-button">
                <?php
                $link = get_field( 'project_button' );
                if ( $link ) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>

            <div class="video-button">
                <?php
                $link = get_field( 'video_button' );
                if ( $link ) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="image-container">
        <div class="banner-image">
        <?php
            $banner_image = get_field( 'banner_image' );
            if ( $banner_image ) : ?>
                <img src="<?php echo esc_url( $banner_image['url'] ); ?>" alt="<?php echo esc_attr( $banner_image['alt'] ); ?>" />
            <?php endif; ?>
        </div>
    </div>
</div>
