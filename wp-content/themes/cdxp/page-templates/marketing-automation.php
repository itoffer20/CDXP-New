<?php
/*
Template Name: Marketing Automation Page Template
*/
get_header(); ?>
<div class="salesmanago-detail">
    <div class="container">
        <section class="salesmanago-sec pt-0">
            <div class="row">
                <div class="col-lg-9">
                    <?php
                    $marketing_automation_section = get_field('marketing_automation_section');
                    if ($marketing_automation_section) {
                        $section_title = (isset($marketing_automation_section['section_title'])) ? $marketing_automation_section['section_title'] : false;
                        $section_content = (isset($marketing_automation_section['section_content'])) ? $marketing_automation_section['section_content'] : false;
                        $button_1 = (isset($marketing_automation_section['button_1'])) ? $marketing_automation_section['button_1'] : false;
                        $button_2 = (isset($marketing_automation_section['button_2'])) ? $marketing_automation_section['button_2'] : false;
                        $image = (isset($marketing_automation_section['image'])) ? $marketing_automation_section['image'] : false;
                        $image_blob = (isset($marketing_automation_section['image_blob'])) ? $marketing_automation_section['image_blob'] : false;
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
                    $email_marketing_section = get_field('email_marketing_section');
                    if ($email_marketing_section) {
                        $section_title = (isset($email_marketing_section['section_title'])) ? $email_marketing_section['section_title'] : false;
                        $title_underline = (isset($email_marketing_section['title_underline'])) ? $email_marketing_section['title_underline'] : false;
                        $section_content = (isset($email_marketing_section['section_content'])) ? $email_marketing_section['section_content'] : false;
                        $items = (isset($email_marketing_section['items'])) ? $email_marketing_section['items'] : false;
                        $button = (isset($email_marketing_section['button'])) ? $email_marketing_section['button'] : false;
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
                            <?php if ($items) { ?>
                                <div class="manango-style-list mt-5">
                                    <div class="row">
                                        <?php
                                        foreach ($items as $item) { ?>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="service-brief " data-aos="fade-down">
                                                    <?php if ($item['image']) { ?>
                                                        <div class="icon">
                                                            <img src="<?php echo esc_url($item['image']['url']); ?>" class="img-fluid">
                                                        </div>
                                                    <?php } ?>
                                                    <?php if ($item['title']) {
                                                        echo sprintf('<h2>%s</h2>', $item['title']);
                                                    } ?>
                                                    <?php if ($item['content']) {
                                                        echo sprintf('<p>%s</p>', $item['content']);
                                                    } ?>
                                                </div>
                                            </div>
                                        <?php }
                                        ?>

                                    </div>
                                    <div>
                                        <?php if ($button) {
                                            echo sprintf('<a href="%s" class="btn">%s</a>', esc_url($button['url']), esc_html($button['title']));
                                        } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </section>
                    <?php } ?>
                    <?php
                    $omnichannel_marketing_section = get_field('omnichannel_marketing_section');
                    if ($omnichannel_marketing_section) {
                        $title_underline = (isset($omnichannel_marketing_section['title_underline'])) ? $omnichannel_marketing_section['title_underline'] : false;
                        $section_title = (isset($omnichannel_marketing_section['section_title'])) ? $omnichannel_marketing_section['section_title'] : false;
                        $content = (isset($omnichannel_marketing_section['content'])) ? $omnichannel_marketing_section['content'] : false;
                        $logos = (isset($omnichannel_marketing_section['logos'])) ? $omnichannel_marketing_section['logos'] : false;
                        $button = (isset($omnichannel_marketing_section['button'])) ? $omnichannel_marketing_section['button'] : false;

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
                            <div>
                                <?php if ($button) {
                                    echo sprintf('<a href="%s" class="btn">%s</a>', esc_url($button['url']), esc_html($button['title']));
                                } ?>
                            </div>
                        </section>
                    <?php } ?>
                    <?php
                    $salesmanago_marketing_section = get_field('salesmanago_marketing_section');
                    if ($salesmanago_marketing_section) {
                        $section_title = (isset($salesmanago_marketing_section['section_title'])) ? $salesmanago_marketing_section['section_title'] : false;
                        $title_underline = (isset($salesmanago_marketing_section['title_underline'])) ? $salesmanago_marketing_section['title_underline'] : false;
                        $section_content = (isset($salesmanago_marketing_section['section_content'])) ? $salesmanago_marketing_section['section_content'] : false;
                        $items = (isset($salesmanago_marketing_section['items'])) ? $salesmanago_marketing_section['items'] : false;
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
                            <?php if ($items) { ?>
                                <div class="manango-style-list mt-5">
                                    <div class="row">
                                        <?php
                                        foreach ($items as $item) { ?>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="service-brief " data-aos="fade-down">
                                                    <?php if ($item['image']) { ?>
                                                        <div class="icon">
                                                            <img src="<?php echo esc_url($item['image']['url']); ?>" class="img-fluid">
                                                        </div>
                                                    <?php } ?>
                                                    <?php if ($item['title']) {
                                                        echo sprintf('<h2>%s</h2>', $item['title']);
                                                    } ?>
                                                    <?php if ($item['content']) {
                                                        echo sprintf('<p>%s</p>', $item['content']);
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
                            <?php if ($support_section['button_2']) {
                                echo sprintf('<a href="%s" class="btn">%s</a>', esc_url($support_section['button_2']['url']), esc_html($support_section['button_2']['title']));
                            } ?>
                            <?php if ($support_section['button_3']) {
                                echo sprintf('<a href="%s" class="btn">%s</a>', esc_url($support_section['button_3']['url']), esc_html($support_section['button_3']['title']));
                            } ?>
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
                            <?php if ($contact_seomondo_section['button_1']) {
                                echo sprintf('<a href="%s" class="btn"><i class="fas fa-phone-volume"></i> %s</a>', esc_url($contact_seomondo_section['button_1']['url']), esc_html($contact_seomondo_section['button_1']['title']));
                            } ?>
                            <?php if ($contact_seomondo_section['button_2']) {
                                echo sprintf('<a href="%s" class="btn">%s</a>', esc_url($contact_seomondo_section['button_2']['url']), esc_html($contact_seomondo_section['button_2']['title']));
                            } ?>
                            <?php if ($contact_seomondo_section['button_3']) {
                                echo sprintf('<a href="%s" class="btn">%s</a>', esc_url($contact_seomondo_section['button_3']['url']), esc_html($contact_seomondo_section['button_3']['title']));
                            } ?>
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