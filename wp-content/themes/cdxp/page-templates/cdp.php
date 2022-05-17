<?php
/*
Template Name: CDP Page Template
*/
get_header(); ?>
<div class="salesmanago-detail">
    <div class="container">
        <section class="salesmanago-sec pt-0">
            <div class="row">
                <div class="col-lg-9">
                    <?php
                    $cdp_section = get_field('cdp_section');
                    if ($cdp_section) {
                        $section_title = (isset($cdp_section['section_title'])) ? $cdp_section['section_title'] : false;
                        $section_content = (isset($cdp_section['section_content'])) ? $cdp_section['section_content'] : false;
                        $button_1 = (isset($cdp_section['button_1'])) ? $cdp_section['button_1'] : false;
                        $button_2 = (isset($cdp_section['button_2'])) ? $cdp_section['button_2'] : false;
                        $image = (isset($cdp_section['image'])) ? $cdp_section['image'] : false;
                        $image_blob = (isset($cdp_section['image_blob'])) ? $cdp_section['image_blob'] : false;
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
                    $marketing_section = get_field('marketing_section');
                    if ($marketing_section) {
                        $section_title = (isset($marketing_section['section_title'])) ? $marketing_section['section_title'] : false;
                        $title_underline = (isset($marketing_section['title_underline'])) ? $marketing_section['title_underline'] : false;
                        $section_content = (isset($marketing_section['section_content'])) ? $marketing_section['section_content'] : false;
                        $items = (isset($marketing_section['items'])) ? $marketing_section['items'] : false;
                    ?>
 
                                <section class="sales-sec pt-0">
                                    <?php if ($section_title || $title_underline) {  ?>
                                        <div class="section-title inner-title text-left mx-0">
                                            <h2><?php echo esc_html($section_title); ?> <span class="line-dec"><?php echo esc_html($title_underline); ?></span></h2>
                                        </div>
                                    <?php  }  ?>
                                    <?php if ($section_content) {
                                        echo sprintf('<p>%s</p>', $section_content);
                                    } ?>
                                    <div class="sales-offer text-center">
                                        <?php
                                        if ($items) {
                                        ?>
                                            <ul>
                                                <?php foreach ($items as $item) {
                                                    echo sprintf('<li data-aos="fade-up">%s</li>', esc_html($item['content']));
                                                } ?>
                                            </ul>
                                        <?php } ?>
                                    </div>
                                </section>
                    <?php } ?>
                    <?php
                    $customers_in_focus_section = get_field('customers_in_focus_section');
                    if ($customers_in_focus_section) {
                    ?>
                        <section class="cdxp-content pt-0" data-aos="fade-in">
                            <?php if ($customers_in_focus_section['title'] || $customers_in_focus_section['title_underline']) {
                            ?>
                                <div class="section-title inner-title text-left mx-0">
                                    <h2><?php echo esc_html($customers_in_focus_section['title']); ?> <span class="line-dec"><?php echo esc_html($customers_in_focus_section['title_underline']); ?></span></h2>
                                </div>
                            <?php  }
                            ?>
                            <?php if ($customers_in_focus_section['content']) {
                                echo sprintf('<p>%s</p>', $customers_in_focus_section['content']);
                            } ?>
                            <?php if ($customers_in_focus_section['button_1'] || $customers_in_focus_section['button_2']) { ?>
                                <div class="two-btn d-flex flex-wrap align-items-center justify-content-center mt-5 " data-aos="fade-in">
                                    <?php if ($customers_in_focus_section['button_1']) {
                                        echo sprintf('<a href="%s" class="btn mr-4 mb-3 text-auto">%s</a>', esc_url($customers_in_focus_section['button_1']['url']), esc_html($customers_in_focus_section['button_1']['title']));
                                    }    ?>
                                    <?php if ($customers_in_focus_section['button_2']) {
                                        echo sprintf('<a href="%s" class="btn bg mb-3 text-auto">%s</a>', esc_url($customers_in_focus_section['button_2']['url']), esc_html($customers_in_focus_section['button_2']['title']));
                                    }    ?>
                                </div>
                            <?php } ?>
                        </section>
                    <?php } ?>
                    <?php
                    $ecommerce_business_section = get_field('ecommerce_business_section');
                    if ($ecommerce_business_section) {
                    ?>
                        <section class="cdxp-content pt-0" data-aos="fade-in">
                            <?php if ($ecommerce_business_section['title'] || $ecommerce_business_section['title_underline']) {
                            ?>
                                <div class="section-title inner-title text-left mx-0">
                                    <h2><?php echo esc_html($ecommerce_business_section['title']); ?> <span class="line-dec"><?php echo esc_html($ecommerce_business_section['title_underline']); ?></span></h2>
                                </div>
                            <?php  }
                            ?>
                            <?php if ($ecommerce_business_section['content']) {
                                echo sprintf('<p>%s</p>', $ecommerce_business_section['content']);
                            } ?>
                            <?php if ($ecommerce_business_section['button_1'] || $ecommerce_business_section['button_2']) { ?>
                                <div class="two-btn d-flex flex-wrap align-items-center justify-content-center mt-5 " data-aos="fade-in">
                                    <?php if ($ecommerce_business_section['button_1']) {
                                        echo sprintf('<a href="%s" class="btn mr-4 mb-3 text-auto">%s</a>', esc_url($ecommerce_business_section['button_1']['url']), esc_html($ecommerce_business_section['button_1']['title']));
                                    }    ?>
                                    <?php if ($ecommerce_business_section['button_2']) {
                                        echo sprintf('<a href="%s" class="btn bg mb-3 text-auto">%s</a>', esc_url($ecommerce_business_section['button_2']['url']), esc_html($ecommerce_business_section['button_2']['title']));
                                    }    ?>
                                </div>
                            <?php } ?>
                        </section>
                    <?php } ?>
                    <?php
                    $customers_section = get_field('customers_section');
                    if ($customers_section) {
                        $title_underline = (isset($customers_section['title_underline'])) ? $customers_section['title_underline'] : false;
                        $section_title = (isset($customers_section['section_title'])) ? $customers_section['section_title'] : false;
                        $content = (isset($customers_section['content'])) ? $customers_section['content'] : false;
                        $logos = (isset($customers_section['logos'])) ? $customers_section['logos'] : false;
                    ?>
                        <section class="play-plug-content pt-0" data-aos="fade-in">
                            <?php if ($title_underline || $section_title) { ?>
                                <div class="section-title inner-title text-left mx-0">
                                    <h2><span class="line-dec"><?php echo esc_html($title_underline); ?></span> <?php echo esc_html($section_title); ?></h2>
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
                    $cdp_with_ai_section = get_field('cdp_with_ai_section');
                    if ($cdp_with_ai_section) {
                    ?>
                        <section class="cdxp-content pt-0" data-aos="fade-in">
                            <?php if ($cdp_with_ai_section['title'] || $cdp_with_ai_section['title_underline']) {
                            ?>
                                <div class="section-title inner-title text-left mx-0">
                                    <h2><?php echo esc_html($cdp_with_ai_section['title']); ?> <span class="line-dec"><?php echo esc_html($cdp_with_ai_section['title_underline']); ?></span></h2>
                                </div>
                            <?php  }
                            ?>
                            <?php if ($cdp_with_ai_section['content']) {
                                echo sprintf('<p>%s</p>', $cdp_with_ai_section['content']);
                            } ?>
                            <?php if ($cdp_with_ai_section['button_1'] || $cdp_with_ai_section['button_2']) { ?>
                                <div class="two-btn d-flex flex-wrap align-items-center justify-content-center mt-5 " data-aos="fade-in">
                                    <?php if ($cdp_with_ai_section['button_1']) {
                                        echo sprintf('<a href="%s" class="btn mr-4 mb-3 text-auto">%s</a>', esc_url($cdp_with_ai_section['button_1']['url']), esc_html($cdp_with_ai_section['button_1']['title']));
                                    }    ?>
                                    <?php if ($cdp_with_ai_section['button_2']) {
                                        echo sprintf('<a href="%s" class="btn bg mb-3 text-auto">%s</a>', esc_url($cdp_with_ai_section['button_2']['url']), esc_html($cdp_with_ai_section['button_2']['title']));
                                    }    ?>
                                </div>
                            <?php } ?>
                        </section>
                    <?php } ?>
                    <?php
                    $elements_section = get_field('elements_section');
                    if ($elements_section) {
                        $section_title = (isset($elements_section['section_title'])) ? $elements_section['section_title'] : false;
                        $title_underline = (isset($elements_section['title_underline'])) ? $elements_section['title_underline'] : false;
                        $section_content = (isset($elements_section['section_content'])) ? $elements_section['section_content'] : false;
                        $elements = (isset($elements_section['elements'])) ? $elements_section['elements'] : false;

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
                            <?php if ($elements) { ?>
                                <div class="manango-style-list mt-5">
                                    <div class="row">
                                        <?php
                                        foreach ($elements as $element) { ?>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="service-brief " data-aos="fade-down">
                                                    <?php if ($element['image']) { ?>
                                                        <div class="icon">
                                                            <img src="<?php echo esc_url($element['image']['url']); ?>" class="img-fluid">
                                                        </div>
                                                    <?php } ?>
                                                    <?php if ($element['title']) {
                                                        echo sprintf('<h2>%s</h2>', $element['title']);
                                                    } ?>
                                                    <?php if ($element['content']) {
                                                        echo sprintf('<p>%s</p>', $element['content']);
                                                    } ?>
                                                </div>
                                            </div>
                                        <?php }
                                        ?>

                                    </div>
                                </div>
                            <?php } ?>
                        </section>
                    <?php } ?>
                    <?php
                    $contact_seomondo_section = get_field('contact_seomondo_section');
                    if ($contact_seomondo_section) {
                    ?>
                        <section class="counseling-content pt-0" data-aos="fade-in">
                            <?php if ($contact_seomondo_section['title'] || $contact_seomondo_section['title_underline']) { ?>
                                <div class="section-title inner-title text-left mx-0">
                                    <h2><?php echo esc_html($contact_seomondo_section['title']); ?> <span class="line-dec"> <?php echo esc_html($contact_seomondo_section['title_underline']); ?> </span></h2>
                                </div>
                            <?php } ?>
                            <?php if ($contact_seomondo_section['content']) {
                                echo sprintf('<p>%s</p>', $contact_seomondo_section['content']);
                            } ?>
                            <div class="two-btn group-btn d-flex flex-wrap align-items-center justify-content-start my-4" data-aos="fade-in">
                            <?php if ($contact_seomondo_section['button_1']) {
                                echo sprintf('<a href="%s" class="btn ml-0"><i class="fas fa-phone-volume"></i> %s</a>', esc_url($contact_seomondo_section['button_1']['url']), esc_html($contact_seomondo_section['button_1']['title']));
                            } ?>
                            <?php if ($contact_seomondo_section['button_2']) {
                                echo sprintf('<a href="%s" class="btn bg">%s</a>', esc_url($contact_seomondo_section['button_2']['url']), esc_html($contact_seomondo_section['button_2']['title']));
                            } ?>
                            <?php if ($contact_seomondo_section['button_3']) {
                                echo sprintf('<a href="%s" class="btn bg">%s</a>', esc_url($contact_seomondo_section['button_3']['url']), esc_html($contact_seomondo_section['button_3']['title']));
                            } ?>
                            </div>
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