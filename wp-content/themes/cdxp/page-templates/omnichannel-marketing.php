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
                    $omnichannel_marketing_section = get_field('omnichannel_marketing_section');
                    if ($omnichannel_marketing_section) {
                        $section_title = (isset($omnichannel_marketing_section['section_title'])) ? $omnichannel_marketing_section['section_title'] : false;
                        $section_content = (isset($omnichannel_marketing_section['section_content'])) ? $omnichannel_marketing_section['section_content'] : false;
                        $button_1 = (isset($omnichannel_marketing_section['button_1'])) ? $omnichannel_marketing_section['button_1'] : false;
                        $button_2 = (isset($omnichannel_marketing_section['button_2'])) ? $omnichannel_marketing_section['button_2'] : false;
                        $image = (isset($omnichannel_marketing_section['image'])) ? $omnichannel_marketing_section['image'] : false;
                        $image_blob = (isset($omnichannel_marketing_section['image_blob'])) ? $omnichannel_marketing_section['image_blob'] : false;
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
                    $purpose_section = get_field('purpose_section');
                    if ($purpose_section) {
                        $section_title = (isset($purpose_section['section_title'])) ? $purpose_section['section_title'] : false;
                        $title_underline = (isset($purpose_section['title_underline'])) ? $purpose_section['title_underline'] : false;
                        $section_content = (isset($purpose_section['section_content'])) ? $purpose_section['section_content'] : false;
                        $purposes = (isset($purpose_section['purposes'])) ? $purpose_section['purposes'] : false;
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
                                        <?php if ($purposes) {
                                        ?>
                                            <ul>
                                                <?php foreach ($purposes as $purpose) {
                                                    echo sprintf('<li data-aos="fade-up">%s</li>', esc_html($purpose['title']));
                                                } ?>
                                            </ul>
                                        <?php } ?>
                                    </div>
                                </section>
                    <?php } ?>
                    <?php
                    $media_section = get_field('media_section');
                    if ($media_section) {
                        $section_title = (isset($media_section['section_title'])) ? $media_section['section_title'] : false;
                        $title_underline = (isset($media_section['title_underline'])) ? $media_section['title_underline'] : false;
                        $section_content = (isset($media_section['section_content'])) ? $media_section['section_content'] : false;
                        $medias = (isset($media_section['medias'])) ? $media_section['medias'] : false;
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
                            <?php if ($medias) { ?>
                                <div class="manango-style-list mt-5">
                                    <div class="row">
                                        <?php
                                        foreach ($medias as $media) { ?>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="service-brief " data-aos="fade-down">
                                                    <?php if ($media['image']) { ?>
                                                        <div class="icon">
                                                            <img src="<?php echo esc_url($media['image']['url']); ?>" class="img-fluid">
                                                        </div>
                                                    <?php } ?>
                                                    <?php if ($media['title']) {
                                                        echo sprintf('<h2>%s</h2>', $media['title']);
                                                    } ?>
                                                    <?php if ($media['content']) {
                                                        echo sprintf('<p>%s</p>', $media['content']);
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
                    $live_marketing_section = get_field('live_marketing_section');
                    if ($live_marketing_section) {
                        $section_title = (isset($live_marketing_section['section_title'])) ? $live_marketing_section['section_title'] : false;
                        $title_underline = (isset($live_marketing_section['title_underline'])) ? $live_marketing_section['title_underline'] : false;
                        $section_content = (isset($live_marketing_section['section_content'])) ? $live_marketing_section['section_content'] : false;
                        $items = (isset($live_marketing_section['items'])) ? $live_marketing_section['items'] : false;
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
                    $mobile_marketing_section = get_field('mobile_marketing_section');
                    if ($mobile_marketing_section) {
                        $section_title = (isset($mobile_marketing_section['section_title'])) ? $mobile_marketing_section['section_title'] : false;
                        $title_underline = (isset($mobile_marketing_section['title_underline'])) ? $mobile_marketing_section['title_underline'] : false;
                        $section_content = (isset($mobile_marketing_section['section_content'])) ? $mobile_marketing_section['section_content'] : false;
                        $items = (isset($mobile_marketing_section['items'])) ? $mobile_marketing_section['items'] : false;
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
                                        <?php if ($items) {
                                        ?>
                                            <ul>
                                                <?php foreach ($items as $item) {
                                                    echo sprintf('<li data-aos="fade-up">%s</li>', esc_html($item['title']));
                                                } ?>
                                            </ul>
                                        <?php } ?>
                                    </div>
                                </section>
                    <?php } ?>
                    <?php
                    $personalized_offers_section = get_field('personalized_offers_section');
                    if ($personalized_offers_section) {
                        $section_title = (isset($personalized_offers_section['section_title'])) ? $personalized_offers_section['section_title'] : false;
                        $title_underline = (isset($personalized_offers_section['title_underline'])) ? $personalized_offers_section['title_underline'] : false;
                        $section_content = (isset($personalized_offers_section['section_content'])) ? $personalized_offers_section['section_content'] : false;
                        $items = (isset($personalized_offers_section['items'])) ? $personalized_offers_section['items'] : false;
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
                                        <?php if ($items) {
                                        ?>
                                            <ul>
                                                <?php foreach ($items as $item) {
                                                    echo sprintf('<li data-aos="fade-up">%s</li>', esc_html($item['title']));
                                                } ?>
                                            </ul>
                                        <?php } ?>
                                    </div>
                                </section>
                    <?php } ?>
                    <?php
                    $sales_channels_section = get_field('sales_channels_section');
                    if ($sales_channels_section) {
                        $title_underline = (isset($sales_channels_section['title_underline'])) ? $sales_channels_section['title_underline'] : false;
                        $title = (isset($sales_channels_section['title'])) ? $sales_channels_section['title'] : false;
                        $content = (isset($sales_channels_section['content'])) ? $sales_channels_section['content'] : false;
                        $channels = (isset($sales_channels_section['channels'])) ? $sales_channels_section['channels'] : false;
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
                            <?php if ($channels) { ?>
                                <div class="logo-slider">
                                    <?php foreach ($channels as $logo) { ?>
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