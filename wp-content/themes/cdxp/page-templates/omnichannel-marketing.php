<?php
/*
Template Name: Omnichannel Marketing Page Template
*/
get_header(); ?>
<div class="salesmanago-detail">
    <div class="container">
        <section class="salesmanago-sec pt-0">
            <div class="row">
                <div class="col-lg-9">
                    <?php
                    $salesmanago_cdxp_section = get_field('salesmanago_cdxp_section');
                    if ($salesmanago_cdxp_section) {
                        $section_title = (isset($salesmanago_cdxp_section['section_title'])) ? $salesmanago_cdxp_section['section_title'] : false;
                        $section_content = (isset($salesmanago_cdxp_section['section_content'])) ? $salesmanago_cdxp_section['section_content'] : false;
                        $button_1 = (isset($salesmanago_cdxp_section['button_1'])) ? $salesmanago_cdxp_section['button_1'] : false;
                        $button_2 = (isset($salesmanago_cdxp_section['button_2'])) ? $salesmanago_cdxp_section['button_2'] : false;
                        $image = (isset($salesmanago_cdxp_section['image'])) ? $salesmanago_cdxp_section['image'] : false;
                        $image_blob = (isset($salesmanago_cdxp_section['image_blob'])) ? $salesmanago_cdxp_section['image_blob'] : false;
                    ?>
                        <section class="salesmanago-content pt-0">
                            <div class="row">
                                <div class="col-lg-6 col-md-6" data-aos="fade-in">
                                    <?php if ($section_title) { ?>
                                        <div class="section-title inner-title text-left mx-0">
                                            <h2><span class="line-dec"><?php echo esc_html($section_title); ?></span></h2>
                                        </div>
                                    <?php } ?>
                                    <?php if ($section_content) {
                                        echo sprintf('<p>%s</p>', $section_content);
                                    } ?>
                                    <?php if ($button_1 || $button_2) { ?>
                                        <div class="two-btn d-flex flex-wrap align-items-center  mt-4  " data-aos="fade-in">
                                            <?php if ($button_1) {
                                                echo sprintf('<a href="%s" class="btn mr-4 mb-3">%s</a>', esc_url($button_1['url']), esc_html($button_1['title']));
                                            }    ?>
                                            <?php if ($button_2) {
                                                echo sprintf('<a href="%s" class="btn bg mb-3">%s</a>', esc_url($button_2['url']), esc_html($button_2['title']));
                                            }    ?>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <?php if ($image) { ?>
                                        <div class="salesmanago-img-group img-group position-relative h-100">
                                            <!-- <div class="dot-img" data-aos="fade-left">
                                        <img src="assets/images/b1.png" class="img-fluid">
                                    </div> -->
                                            <div class="inner-banner h-100" data-aos="fade-in">
                                                <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid">
                                            </div>
                                            <?php if ($image_blob) {
                                                $time = 100; ?>
                                                <ul>
                                                    <?php foreach ($image_blob as $item) {
                                                        echo sprintf('<li data-aos="fade-right" data-aos-delay="%s">%s</li>', $time, esc_html($item['content']));
                                                        $time = $time + 200;
                                                    } ?>
                                                </ul>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </section>
                    <?php } ?>
                    <?php
                    $what_is_cdxp_section = get_field('what_is_cdxp_section');
                    if ($what_is_cdxp_section) {
                    ?>
                        <section class="cdxp-content pt-0" data-aos="fade-in">
                            <?php if ($what_is_cdxp_section['title']) {
                            ?>
                                <div class="section-title inner-title text-left mx-0">
                                    <h2><span class="line-dec"><?php echo esc_html($what_is_cdxp_section['title']); ?></span></h2>
                                </div>
                            <?php  }
                            ?>
                            <?php if ($what_is_cdxp_section['content']) {
                                echo sprintf('<p>%s</p>', $what_is_cdxp_section['content']);
                            } ?>
                            <?php if ($what_is_cdxp_section['button_1'] || $what_is_cdxp_section['button_2']) { ?>
                                <div class="two-btn d-flex flex-wrap align-items-center justify-content-center mt-5 " data-aos="fade-in">
                                    <?php if ($what_is_cdxp_section['button_1']) {
                                        echo sprintf('<a href="%s" class="btn mr-4 mb-3 text-auto">%s</a>', esc_url($what_is_cdxp_section['button_1']['url']), esc_html($what_is_cdxp_section['button_1']['title']));
                                    }    ?>
                                    <?php if ($what_is_cdxp_section['button_2']) {
                                        echo sprintf('<a href="%s" class="btn bg mb-3 text-auto">%s</a>', esc_url($what_is_cdxp_section['button_2']['url']), esc_html($what_is_cdxp_section['button_2']['title']));
                                    }    ?>
                                </div>
                            <?php } ?>
                        </section>
                    <?php } ?>
                    <?php
                    $salesmanango_uses_section = get_field('salesmanango_uses_section');
                    if ($salesmanango_uses_section) {
                        $section_title = (isset($salesmanango_uses_section['section_title'])) ? $salesmanango_uses_section['section_title'] : false;
                        $title_underline = (isset($salesmanango_uses_section['title_underline'])) ? $salesmanango_uses_section['title_underline'] : false;
                        $section_content = (isset($salesmanango_uses_section['section_content'])) ? $salesmanango_uses_section['section_content'] : false;
                        $uses = (isset($salesmanango_uses_section['uses'])) ? $salesmanango_uses_section['uses'] : false;
                        $content_below = (isset($salesmanango_uses_section['content_below'])) ? $salesmanango_uses_section['content_below'] : false;
                        $button = (isset($salesmanango_uses_section['button'])) ? $salesmanango_uses_section['button'] : false;
                    ?>
                        <section class="manango-style-content pt-0" data-aos="fade-in">
                            <?php if ($section_title || $title_underline) { ?>
                                <div class="section-title inner-title text-left mx-0">
                                    <h2><?php echo esc_html($section_title); ?> <span class="line-dec"><?php echo esc_html($title_underline); ?></span></h2>
                                </div>
                            <?php } ?>
                            <?php if ($section_content) {
                                echo sprintf('<p>%s</p>', $section_content);
                            } ?>
                            <?php if ($uses || $content_below || $button) { ?>
                                <div class="manango-style-list mt-5">
                                    <div class="row">
                                        <?php if ($uses) {
                                            foreach ($uses as $use) { ?>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="service-brief " data-aos="fade-down">
                                                        <?php if ($use['image']) { ?>
                                                            <div class="icon">
                                                                <img src="<?php echo esc_url($use['image']['url']); ?>" class="img-fluid">
                                                            </div>
                                                        <?php } ?>
                                                        <?php if ($use['title']) {
                                                            echo sprintf('<h2>%s</h2>', $use['title']);
                                                        } ?>
                                                        <?php if ($use['content']) {
                                                            echo sprintf('<p>%s</p>', $use['content']);
                                                        } ?>
                                                    </div>
                                                </div>
                                        <?php }
                                        } ?>
                                        <div class="col-lg-12">
                                            <?php if ($content_below) {
                                                echo sprintf('<p>%s</p>', $content_below);
                                            } ?>
                                            <?php if ($button) {
                                                echo sprintf('<a href="%s" class="btn">%s</a>', esc_url($button['url']), esc_html($button['title']));
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </section>
                    <?php } ?>
                    <?php
                    $marketing_section = get_field('marketing_section');
                    if ($marketing_section) {
                    ?>
                        <section class="marketing-content pt-0" data-aos="fade-in">
                            <?php if ($marketing_section['title'] || $marketing_section['title_underline']) { ?>
                                <div class="section-title inner-title text-left mx-0">
                                    <h2><?php echo esc_html($marketing_section['title']); ?> <span class="line-dec"><?php echo esc_html($marketing_section['title_underline']); ?></span></h2>
                                </div>
                            <?php } ?>
                            <?php if ($marketing_section['content']) {
                                echo sprintf('<p>%s</p>', $marketing_section['content']);
                            } ?>
                            <?php if ($marketing_section['button_1'] || $marketing_section['button_2'] || $marketing_section['button_3']) { ?>
                                <div class="two-btn d-flex flex-wrap align-items-center justify-content-center mt-5 " data-aos="fade-in">

                                    <?php if ($marketing_section['button_1']) {
                                        echo sprintf('<a href="%s" class="btn mr-4 mb-3 text-auto">%s</a>', esc_url($marketing_section['button_1']['url']), esc_html($marketing_section['button_1']['title']));
                                    } ?>
                                    <?php if ($marketing_section['button_2']) {
                                        echo sprintf('<a href="%s" class="btn bg  mb-3 text-auto">%s</a>', esc_url($marketing_section['button_2']['url']), esc_html($marketing_section['button_2']['title']));
                                    } ?>
                                </div>
                            <?php } ?>
                        </section>
                    <?php } ?>
                    <?php
                    $plug_play_section = get_field('plug_play_section');
                    if ($plug_play_section) {
                        $title_underline = (isset($plug_play_section['title_underline'])) ? $plug_play_section['title_underline'] : false;
                        $title = (isset($plug_play_section['title'])) ? $plug_play_section['title'] : false;
                        $content = (isset($plug_play_section['content'])) ? $plug_play_section['content'] : false;
                        $logos = (isset($plug_play_section['logos'])) ? $plug_play_section['logos'] : false;
                    ?>
                        <section class="play-plug-content pt-0" data-aos="fade-in">
                            <?php if ($title_underline || $title) { ?>
                                <div class="section-title inner-title text-left mx-0">
                                    <h2><span class="line-dec"><?php echo esc_html($title_underline); ?></span> <?php echo esc_html($title); ?></h2>
                                </div>
                            <?php } ?>
                            <?php if ($content) {
                                echo sprintf('<p>%s</p>', $content);
                            } ?>
                            <?php if ($logos) { ?>
                                <div class="logo-slider">
                                    <?php foreach ($logos as $logo) { ?>
                                        <div class="slide-item">
                                            <div class="logo-list text-center">
                                                <figure>
                                                    <img src="<?php echo esc_html($logo['url']); ?>" class="img-fluid">
                                                </figure>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </section>
                    <?php } ?>
                    <?php
                    $support_section = get_field('support_section');
                    if ($support_section) {
                    ?>
                        <section class="counseling-content pt-0" data-aos="fade-in">
                            <?php if ($support_section['title'] || $support_section['title_underline']) { ?>
                                <div class="section-title inner-title text-left mx-0">
                                    <h2><?php echo esc_html($support_section['title']); ?> <span class="line-dec"> <?php echo esc_html($support_section['title_underline']); ?> </span></h2>
                                </div>
                            <?php } ?>
                            <?php if ($support_section['content']) {
                                echo sprintf('<p>%s</p>', $support_section['content']);
                            } ?>
                            <?php if ($support_section['button_1']) {
                                echo sprintf('<a href="%s" class="btn">%s</a>', esc_url($support_section['button_1']['url']), esc_html($support_section['button_1']['title']));
                            } ?>
                        </section>
                    <?php } ?>
                    <?php
                    $cdxp_system = get_field('cdxp_system');
                    if ($cdxp_system) {
                    ?>
                        <section class="development-content pt-0" data-aos="fade-in">
                            <?php if ($cdxp_system['title'] || $cdxp_system['title_underline']) { ?>

                                <div class="section-title inner-title text-left mx-0">
                                    <h2><?php echo esc_html($cdxp_system['title']); ?> <span class="line-dec"> <?php echo esc_html($cdxp_system['title_underline']); ?></span>
                                    </h2>
                                </div>
                            <?php } ?>
                            <?php if ($cdxp_system['content']) {
                                echo sprintf('<p>%s</p>', $cdxp_system['content']);
                            } ?>
                            <?php if ($cdxp_system['button_1']) {
                                echo sprintf('<a href="%s" class="btn">%s</a>', esc_url($cdxp_system['button_1']['url']), esc_html($cdxp_system['button_1']['title']));
                            } ?>
                        </section>
                    <?php } ?>
                    <?php
                    $about_salesmanago_section = get_field('about_salesmanago_section');
                    if ($about_salesmanago_section) {
                    ?>
                        <section class="abt-content pt-0" data-aos="fade-in">
                            <?php if ($cdxp_system['title'] || $cdxp_system['title_underline']) { ?>

                                <div class="section-title inner-title text-left mx-0">
                                    <h2><span class="line-dec"> <?php echo esc_html($cdxp_system['title_underline']); ?></span> </h2>
                                </div>
                            <?php } ?>

                            <?php if ($cdxp_system['content']) {
                                echo sprintf('<p>%s</p>', $cdxp_system['content']);
                            } ?>
                            <?php if ($cdxp_system['button_1'] || $cdxp_system['button_2']) {  ?>
                                <div class="two-btn d-flex flex-wrap align-items-center justify-content-center mt-5 " data-aos="fade-in">
                                    <?php if ($cdxp_system['button_1']) { ?>
                                        <a href="<?php echo esc_url($cdxp_system['button_1']['url']); ?>" target="<?php echo $cdxp_system['button_1']['target']; ?>" class="btn mb-3 mr-4"><?php echo esc_html($cdxp_system['button_1']['title']); ?></a>
                                    <?php }   ?>
                                    <?php if ($cdxp_system['button_2']) { ?>
                                        <a href="<?php echo esc_url($cdxp_system['button_2']['url']); ?>" target="<?php echo $cdxp_system['button_2']['target']; ?>" class="btn bg mb-3"><?php echo esc_html($cdxp_system['button_2']['title']); ?></a>
                                    <?php }   ?>
                                </div>
                            <?php } ?>
                        </section>
                    <?php } ?>
                </div>
                <!-- Sidebar -->
                <div class="col-lg-3">
                    <?php get_page_sidebar(); ?>
                </div>
            </div>
        </section>
    </div>
</div>




<?php get_footer(); ?>