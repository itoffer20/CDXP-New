<?php
/*
Template Name: E-mail Marketing Page Template
*/
get_header(); ?>
<div class="salesmanago-detail">
    <div class="container">
        <section class="salesmanago-sec pt-0">
            <div class="row">
                <div class="col-lg-9">
                    <?php
                    $email_marketing_section = get_field('email_marketing_section');
                    if ($email_marketing_section) {
                        $section_title = (isset($email_marketing_section['section_title'])) ? $email_marketing_section['section_title'] : false;
                        $section_content = (isset($email_marketing_section['section_content'])) ? $email_marketing_section['section_content'] : false;
                        $button_1 = (isset($email_marketing_section['button_1'])) ? $email_marketing_section['button_1'] : false;
                        $button_2 = (isset($email_marketing_section['button_2'])) ? $email_marketing_section['button_2'] : false;
                        $image = (isset($email_marketing_section['image'])) ? $email_marketing_section['image'] : false;
                        $image_blob = (isset($email_marketing_section['image_blob'])) ? $email_marketing_section['image_blob'] : false;
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
                    $newsletter_section = get_field('newsletter_section');
                    if ($newsletter_section) {
                        $section_title = (isset($newsletter_section['section_title'])) ? $newsletter_section['section_title'] : false;
                        $title_underline = (isset($newsletter_section['title_underline'])) ? $newsletter_section['title_underline'] : false;
                        $section_content = (isset($newsletter_section['section_content'])) ? $newsletter_section['section_content'] : false;
                        $items = (isset($newsletter_section['items'])) ? $newsletter_section['items'] : false;
                    ?>
                        <div class="sales">
                            <div class="container">
                                <section class="sales-sec">
                                    <?php if ($section_title || $title_underline) { ?>
                                        <div class="section-title" data-aos="fade-in">
                                            <?php echo sprintf('<h2>%s<span class="line-dec">%s</span></h2>', esc_html($section_title), esc_html($title_underline)); ?>
                                        </div>
                                    <?php  } ?>
                                    <div class="sales-offer text-center">
                                        <?php if ($section_content) {
                                            echo sprintf('<p>%s</p>', $section_content);
                                        }
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
                            </div>
                        </div>
                    <?php } ?>
                    <?php
                    $purpose_section = get_field('purpose_section');
                    if ($purpose_section) {
                        $section_title = (isset($purpose_section['section_title'])) ? $purpose_section['section_title'] : false;
                        $title_underline = (isset($purpose_section['title_underline'])) ? $purpose_section['title_underline'] : false;
                        $section_content = (isset($purpose_section['section_content'])) ? $purpose_section['section_content'] : false;
                        $puropses = (isset($purpose_section['puropses'])) ? $purpose_section['puropses'] : false;
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
                            <?php if ($puropses) { ?>
                                <div class="manango-style-list mt-5">
                                    <div class="row">
                                        <?php
                                        foreach ($puropses as $puropse) { ?>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="service-brief " data-aos="fade-down">
                                                    <?php if ($puropse['image']) { ?>
                                                        <div class="icon">
                                                            <img src="<?php echo esc_url($puropse['image']['url']); ?>" class="img-fluid">
                                                        </div>
                                                    <?php } ?>
                                                    <?php if ($puropse['title']) {
                                                        echo sprintf('<h2>%s</h2>', $puropse['title']);
                                                    } ?>
                                                    <?php if ($puropse['content']) {
                                                        echo sprintf('<p>%s</p>', $puropse['content']);
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
                    $personal_touch_section = get_field('personal_touch_section');
                    if ($personal_touch_section) {
                        $section_title = (isset($personal_touch_section['section_title'])) ? $personal_touch_section['section_title'] : false;
                        $title_underline = (isset($personal_touch_section['title_underline'])) ? $personal_touch_section['title_underline'] : false;
                        $section_content = (isset($personal_touch_section['section_content'])) ? $personal_touch_section['section_content'] : false;
                        $items = (isset($personal_touch_section['items'])) ? $personal_touch_section['items'] : false;
                    ?>
                        <div class="sales">
                            <div class="container">
                                <section class="sales-sec">
                                    <?php if ($section_title || $title_underline) { ?>
                                        <div class="section-title" data-aos="fade-in">
                                            <?php echo sprintf('<h2>%s<span class="line-dec">%s</span></h2>', esc_html($section_title), esc_html($title_underline)); ?>
                                        </div>
                                    <?php  } ?>
                                    <div class="sales-offer text-center">
                                        <?php if ($section_content) {
                                            echo sprintf('<p>%s</p>', $section_content);
                                        }
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
                            </div>
                        </div>
                    <?php } ?>
                    <?php
                    $personalized_offers_section = get_field('personalized_offers_section');
                    if ($personalized_offers_section) {
                        $section_title = (isset($personalized_offers_section['section_title'])) ? $personalized_offers_section['section_title'] : false;
                        $title_underline = (isset($personalized_offers_section['title_underline'])) ? $personalized_offers_section['title_underline'] : false;
                        $section_content = (isset($personalized_offers_section['section_content'])) ? $personalized_offers_section['section_content'] : false;
                        $items = (isset($personalized_offers_section['items'])) ? $personalized_offers_section['items'] : false;
                    ?>
                        <div class="sales">
                            <div class="container">
                                <section class="sales-sec">
                                    <?php if ($section_title || $title_underline) { ?>
                                        <div class="section-title" data-aos="fade-in">
                                            <?php echo sprintf('<h2>%s<span class="line-dec">%s</span></h2>', esc_html($section_title), esc_html($title_underline)); ?>
                                        </div>
                                    <?php  } ?>
                                    <div class="sales-offer text-center">
                                        <?php if ($section_content) {
                                            echo sprintf('<p>%s</p>', $section_content);
                                        }
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
                            </div>
                        </div>
                    <?php } ?>
                    <?php
                    $service_messages_section = get_field('service_messages_section');
                    if ($service_messages_section) {
                        $section_title = (isset($service_messages_section['section_title'])) ? $service_messages_section['section_title'] : false;
                        $title_underline = (isset($service_messages_section['title_underline'])) ? $service_messages_section['title_underline'] : false;
                        $section_content = (isset($service_messages_section['section_content'])) ? $service_messages_section['section_content'] : false;
                        $items = (isset($service_messages_section['items'])) ? $service_messages_section['items'] : false;
                    ?>
                        <div class="sales">
                            <div class="container">
                                <section class="sales-sec">
                                    <?php if ($section_title || $title_underline) { ?>
                                        <div class="section-title" data-aos="fade-in">
                                            <?php echo sprintf('<h2>%s<span class="line-dec">%s</span></h2>', esc_html($section_title), esc_html($title_underline)); ?>
                                        </div>
                                    <?php  } ?>
                                    <div class="sales-offer text-center">
                                        <?php if ($section_content) {
                                            echo sprintf('<p>%s</p>', $section_content);
                                        }
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
                            </div>
                        </div>
                    <?php } ?>
                    <?php
                    $companies_section = get_field('companies_section');
                    if ($companies_section) {
                        $title_underline = (isset($companies_section['title_underline'])) ? $companies_section['title_underline'] : false;
                        $section_title = (isset($companies_section['section_title'])) ? $companies_section['section_title'] : false;
                        $content = (isset($companies_section['content'])) ? $companies_section['content'] : false;
                        $logos = (isset($companies_section['logos'])) ? $companies_section['logos'] : false;
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