<?php get_header(); ?>
<div class="hero">
    <div class="container">
        <section class="hero-sec small_pb small_pt">
            <div class="row">
                <div class="col-xl-5">
                    <?php
                    $banner_left_column = get_field('banner_left_column');
                    if ($banner_left_column) {
                        $subtitle = (isset($banner_left_column['subtitle'])) ? $banner_left_column['subtitle'] : false;
                        $title = (isset($banner_left_column['title'])) ? $banner_left_column['title'] : false;
                        $content = (isset($banner_left_column['content'])) ? $banner_left_column['content'] : false;
                        $button_1 = (isset($banner_left_column['button_1'])) ? $banner_left_column['button_1'] : false;
                        $button_2 = (isset($banner_left_column['button_2'])) ? $banner_left_column['button_2'] : false;

                    ?>
                        <div class="hero-content">
                            <?php if ($subtitle) {
                                echo sprintf('<h3 class="sub-header" data-aos="fade-up">%s</h3>', esc_html($subtitle));
                            } ?>
                            <?php if ($title) {
                                echo sprintf('<h2 data-aos="fade-up"><span class="line-dec">%s</span></h2>', $title);
                            } ?>
                            <?php if ($content) {
                                echo sprintf('<p data-aos="fade-up">%s</p>', $content);
                            } ?>
                            <?php if ($button_1 || $button_2) { ?>
                                <div class="two-btn d-flex flex-wrap align-items-center" data-aos="fade-in">
                                    <?php if ($button_1) { ?>
                                        <a href="<?php echo esc_url($button_1['url']); ?>" class="btn mr-4 mb-3"><?php echo esc_html($button_1['title']); ?> <i class="fas fa-arrow-right "></i></a>
                                    <?php }
                                    if ($button_2) { ?>
                                        <a href="<?php echo esc_url($button_2['url']); ?>" class="mb-3"><?php echo esc_html($button_2['title']); ?> <i class="fas fa-arrow-right ml-2"></i> </a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-xl-7">
                    <?php
                    $banner_right_column = get_field('banner_right_column');
                    if ($banner_right_column) {
                        $pattern_image = (isset($banner_right_column['pattern_image'])) ? $banner_right_column['pattern_image'] : false;
                        $main_image = (isset($banner_right_column['main_image'])) ? $banner_right_column['main_image'] : false;
                        $blobs = (isset($banner_right_column['blobs'])) ? $banner_right_column['blobs'] : false;
                    ?>
                        <div class="img-group position-relative">
                            <?php if ($pattern_image) { ?>
                                <div class="dot-img" data-aos="fade-left">
                                    <img src="<?php echo esc_url($pattern_image['url']); ?>" class="img-fluid">
                                </div>
                            <?php }
                            if ($main_image) {
                            ?>
                                <div class="hero-banner text-center" data-aos="fade-in">
                                    <img src="<?php echo esc_url($main_image['url']); ?>" class="img-fluid">
                                </div>
                            <?php }
                            if ($blobs) { ?>
                                <ul>
                                    <?php foreach ($blobs as $blob) { ?>
                                        <li> <img src="<?php echo esc_url($blob['image']['url']); ?>" class="img-fluid"></li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>
</div>
<?php
$salesmanago_section = get_field('salesmanago_section');
if ($salesmanago_section) {
    $subtitle = (isset($salesmanago_section['subtitle'])) ? $salesmanago_section['subtitle'] : false;
    $title = (isset($salesmanago_section['title'])) ? $salesmanago_section['title'] : false;
    $image = (isset($salesmanago_section['image'])) ? $salesmanago_section['image'] : false;
    $content = (isset($salesmanago_section['content'])) ? $salesmanago_section['content'] : false;
    $items = (isset($salesmanago_section['items'])) ? $salesmanago_section['items'] : false;
    $button_1 = (isset($salesmanago_section['button_1'])) ? $salesmanago_section['button_1'] : false;
    $button_2 = (isset($salesmanago_section['button_2'])) ? $salesmanago_section['button_2'] : false;                    ?>
    <div class="sales">
        <div class="container">
            <section class="sales-sec">
                <div class="section-title" data-aos="fade-in">
                    <?php if ($subtitle) {
                        echo sprintf('<h3 class="sub-header">%s</h3>', esc_html($subtitle));
                    } ?>
                    <?php if ($title) {
                        echo sprintf('<h2><span class="line-dec">%s</span></h2>', esc_html($subtitle));
                    } ?>
                </div>
                <?php if ($image) { ?>
                    <div class="diamond-img text-center" data-aos="zoom-in" data-aos-delay="300">
                        <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid">
                    </div>
                <?php } ?>

                <div class="sales-offer text-center">
                    <?php if ($content) {
                        echo sprintf('<p>%s</p>', $content);
                    }
                    if ($items) {
                    ?>
                        <ul>
                            <?php foreach ($items as $item) {
                                echo sprintf('<li data-aos="fade-up">%s</li>', esc_html($item['content']));
                            } ?>
                        </ul>
                    <?php } ?>
                    <?php if ($button_1 || $button_2) { ?>
                        <div class="two-btn d-flex flex-wrap align-items-center justify-content-center mt-4" data-aos="fade-in">
                            <?php if ($button_1) {
                                echo sprintf('<a href="%s" class="btn mr-4">%s</a>', esc_url($button_1['url']), esc_html($button_1['title']));
                            } ?>
                            <?php if ($button_2) {
                                echo sprintf('<a href="%s" class="btn bg">%s</a>', esc_url($button_2['url']), esc_html($button_2['title']));
                            } ?>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
    </div>
<?php } ?>
<?php
$services = get_field('services');
if ($services) {
?>
    <div class="services">
        <div class="container">
            <section class="servies-sec pt-0">
                <div class="row">
                    <?php foreach ($services as $service) { ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-brief" data-aos="fade-down">
                                <?php if ($service['icon']) { ?>
                                    <div class="icon">
                                        <img src="<?php echo esc_url($service['icon']['url']); ?>" class="img-fluid">
                                    </div>
                                <?php }
                                if ($service['title']) {
                                    echo sprintf('<h2>%s</h2>', esc_html($service['title']));
                                }
                                if ($service['content']) {
                                    echo sprintf('<p>%s</p>', $service['content']);
                                }
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
    </div>
<?php } ?>
<?php
$cdxp_section = get_field('cdxp_section');
if ($cdxp_section) {
    $section_title_1 = (isset($cdxp_section['section_title_1'])) ? $cdxp_section['section_title_1'] : false;
    $section_title_2 = (isset($cdxp_section['section_title_2'])) ? $cdxp_section['section_title_2'] : false;
    $section_content = (isset($cdxp_section['section_content'])) ? $cdxp_section['section_content'] : false;
    $definitions = (isset($cdxp_section['definitions'])) ? $cdxp_section['definitions'] : false;
?>
    <div class="cdxp-intro">
        <div class="container">
            <section class="intro-sec">
                <?php if ($section_title_1 || $section_title_2) { ?>
                    <div class="section-title" data-aos="fade-in">
                        <h2><?php echo esc_html($section_title_1); ?> <span class="line-dec"><?php echo esc_html($section_title_2); ?></span> </span></h2>
                    </div>
                <?php } ?>
                <?php if ($section_content) {
                    echo sprintf('<div class="intro-text text-center"><p class="lg" data-aos="fade-in">%s</p></div>', $section_content);
                } ?>
                <?php foreach ($definitions as $definition) { ?>
                    <div class="intro-info" data-aos="fade-up">
                        <?php echo sprintf('<h2>%s</h2>', esc_html($definition['title'])); ?>
                        <?php echo sprintf('<p class="md">%s</p>', $definition['content']); ?>
                        <?php echo sprintf('<a href="%s" class="btn mr-4">%s</a>', esc_url($definition['button']['url']), esc_html($definition['button']['title'])); ?>
                    </div>
                <?php } ?>
            </section>
        </div>
    </div>
<?php } ?>
<?php
$industries_section = get_field('industries_section');
if ($industries_section) {
    $section_title_1 = (isset($industries_section['section_title_1'])) ? $industries_section['section_title_1'] : false;
    $section_title_2 = (isset($industries_section['section_title_2'])) ? $industries_section['section_title_2'] : false;
    $section_content = (isset($industries_section['section_content'])) ? $industries_section['section_content'] : false;
    $industries = (isset($industries_section['industries'])) ? $industries_section['industries'] : false;
?>
    <div class="industries">
        <div class="container">
            <section class="industries-sec servies-sec pb-0">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <?php if ($section_title_1 || $section_title_2) { ?>
                            <div class="section-title text-left" data-aos="fade-in">
                                <h2><?php echo esc_html($section_title_1); ?> <span class="line-dec"><?php echo esc_html($section_title_2); ?></span></h2>
                            </div>
                        <?php }
                        if ($section_content) {
                            echo sprintf('<p class="lg" data-aos="fade-in">%s</p>', $section_content);
                        }
                        ?>
                    </div>
                </div>
                <?php if ($industries) { ?>
                    <div class="row">
                        <?php foreach ($industries as $industry) { ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-brief" data-aos="fade-down">
                                    <?php if ($industry['icon']) { ?>
                                        <div class="icon">
                                            <img src="<?php echo esc_url($industry['icon']['url']); ?>" class="img-fluid">
                                        </div>
                                    <?php } ?>
                                    <?php echo sprintf('<h2>%s</h2>', esc_html($industry['title'])); ?>
                                    <?php echo sprintf('<p>%s</p>', $industry['content']); ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </section>
        </div>
    </div>
<?php } ?>
<?php
$customers_section = get_field('customers_section');
if ($customers_section) {
    $section_title_1 = (isset($customers_section['section_title_1'])) ? $customers_section['section_title_1'] : false;
    $section_title_2 = (isset($customers_section['section_title_2'])) ? $customers_section['section_title_2'] : false;
    $section_content = (isset($customers_section['section_content'])) ? $customers_section['section_content'] : false;
    $partners = (isset($customers_section['partners'])) ? $customers_section['partners'] : false;
?>
    <div class="customers">
        <div class="container">
            <section class="customer-sec small_pt">
                <?php if ($section_title_1 || $section_title_2) { ?>
                    <div class="section-title" data-aos="fade-in">
                        <h2><?php echo esc_html($section_title_1); ?> <span class="line-dec"><?php echo esc_html($section_title_2); ?></span></h2>
                    </div>
                <?php } ?>
                <div class="customers-list">
                    <?php if ($section_content) {
                        echo sprintf('<p class="lg text-center" data-aos="fade-in">%s</p>', $section_content);
                    } ?>
                    <?php if ($partners) { ?>
                        <ul>
                            <?php
                            $time = 100;
                            foreach ($partners as $image) {
                                echo sprintf('<li data-aos="fade-in" data-aos-delay="%s"><img src="%s" class="img-fluid"></li>', $time, esc_url($image['url']));
                                $time = $time + 50;
                            } ?>
                        </ul>
                    <?php } ?>
                </div>
            </section>
        </div>
    </div>
<?php } ?>
<?php
$marketing_section = get_field('marketing_section');
if ($marketing_section) {
    $section_title_1 = (isset($marketing_section['section_title_1'])) ? $marketing_section['section_title_1'] : false;
    $section_title_2 = (isset($marketing_section['section_title_2'])) ? $marketing_section['section_title_2'] : false;
    $section_content = (isset($marketing_section['section_content'])) ? $marketing_section['section_content'] : false;
    $items = (isset($marketing_section['items'])) ? $marketing_section['items'] : false;
?>
    <div class="marketing">
        <div class="container">
            <section class="marketing-sec servies-sec small_pt">
                <div class="row mb-5">
                    <div class="col-lg-8">
                        <?php if ($section_title_1 || $section_title_2) { ?>
                            <div class="section-title text-left mx-0" data-aos="fade-in">
                                <h2><?php echo esc_html($section_title_1); ?> <span class="line-dec"><?php echo esc_html($section_title_2); ?></span></h2>
                            </div>
                        <?php } ?>
                        <?php if ($section_content) {
                            echo sprintf('<p class="lg" data-aos="fade-in">%s</p>', $section_content);
                        }
                        ?>
                    </div>
                </div>
                <?php if ($items) { ?>
                    <div class="row">
                        <?php foreach ($items as $item) { ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-brief" data-aos="fade-down">
                                    <?php if ($item['icon']) { ?>
                                        <div class="icon">
                                            <img src="<?php echo esc_url($item['icon']['url']); ?>" class="img-fluid">
                                        </div>
                                    <?php } ?>
                                    <?php if ($item['title']) {
                                        echo sprintf('<h2>%s</h2>', esc_html($item['title']));
                                    } ?>
                                    <?php if ($item['content']) {
                                        echo sprintf('<p>%s</p>', $item['content']);
                                    } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </section>
        </div>
    </div>
<?php } ?>
<?php
$integration_section = get_field('integration_section');
if ($integration_section) {
    $section_title_1 = (isset($integration_section['section_title_1'])) ? $integration_section['section_title_1'] : false;
    $section_title_2 = (isset($integration_section['section_title_2'])) ? $integration_section['section_title_2'] : false;
    $section_content = (isset($integration_section['section_content'])) ? $integration_section['section_content'] : false;
    $logos = (isset($integration_section['logos'])) ? $integration_section['logos'] : false;
?>
    <div class="webshop ">
        <div class="container">
            <section class="webshop-sec  customer-sec pt-0">
                <?php if ($section_title_1 || $section_title_2) { ?>
                    <div class="section-title" data-aos="fade-in">
                        <h2><?php echo esc_html($section_title_1); ?> <span class="line-dec"><?php echo esc_html($section_title_2); ?></span></h2>
                    </div><?php } ?>
                <div class="customers-list">
                    <?php if ($section_content) {
                        echo sprintf('<p class="lg text-center" data-aos="fade-in">%s</p>', $section_content);
                    } ?>
                    <?php if ($logos) { ?>
                        <ul>
                            <?php
                            $time = 100;
                            foreach ($logos as $logo) {
                                echo sprintf('<li data-aos="fade-in" data-aos-delay="%s"><img src="%s" class="img-fluid"></li>', $time, esc_url($logo['url']));
                            }
                            $time = $time + 50;
                            ?>
                        </ul>
                    <?php } ?>
                </div>
            </section>
        </div>
    </div>
<?php } ?>
<?php
$videos_section = get_field('videos_section');
if ($videos_section) {
    $section_title_1 = (isset($videos_section['section_title_1'])) ? $videos_section['section_title_1'] : false;
    $section_title_2 = (isset($videos_section['section_title_2'])) ? $videos_section['section_title_2'] : false;
    $section_content = (isset($videos_section['section_content'])) ? $videos_section['section_content'] : false;
    $videos = (isset($videos_section['videos'])) ? $videos_section['videos'] : false;
?>
    <div class="video">
        <div class="container">
            <section class="video-sec  small_pt">
                <?php if ($section_title_1 || $section_title_2) { ?>
                    <div class="section-title" data-aos="fade-in">
                        <h2><?php echo esc_html($section_title_1); ?> <br> <span class="line-dec"><?php echo esc_html($section_title_2); ?></span></h2>
                    </div>
                <?php } ?>
                <div class="video-list">
                    <?php if ($section_content) {
                        echo sprintf('<p class="lg text-center">%s</p>', $section_content);
                    } ?>
                    <?php if ($videos) { ?>
                        <div class="row">
                            <?php foreach ($videos as $video) { ?>
                                <div class="col-lg-4 col-md-4">
                                    <div class="video-content text-center" data-aos="fade-up">
                                        <figure class="position-relative">
                                            <?php if ($video['image']) {
                                                echo sprintf('<img src="%s" class="img-fluid">', esc_url($video['image']['url']));
                                            }
                                            ?>
                                            <?php if ($video['link']) { ?>
                                                <div class="play-icon">
                                                    <a href="<?php echo esc_url($video['link']); ?>" data-fancybox="images-preview">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/play.png">
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </figure>
                                        <?php if ($video['title']) {
                                            echo sprintf('<h2>%s</h2>', esc_html($video['title']));
                                        } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
    </div>
<?php } ?>
<?php
$last_section = get_field('last_section');
if ($last_section) {
    $section_title_1 = (isset($last_section['section_title_1'])) ? $last_section['section_title_1'] : false;
    $section_title_2 = (isset($last_section['section_title_2'])) ? $last_section['section_title_2'] : false;
    $section_content = (isset($last_section['section_content'])) ? $last_section['section_content'] : false;
    $items = (isset($last_section['items'])) ? $last_section['items'] : false;
    $button_1 = (isset($last_section['button_1'])) ? $last_section['button_1'] : false;
    $button_2 = (isset($last_section['button_2'])) ? $last_section['button_2'] : false;
    $button_3 = (isset($last_section['button_3'])) ? $last_section['button_3'] : false;

?>
    <div class="system">
        <div class="container">
            <section class="system-sec  small_pt">
                <?php if ($section_title_1 || $section_title_2) { ?>
                    <div class="section-title" data-aos="fade-in">
                        <h2><?php echo esc_html($section_title_1); ?> <span class="line-dec"><?php echo esc_html($section_title_2); ?></span></h2>
                    </div>
                <?php } ?>
                <div class="system-list sales-offer text-center">
                    <?php if ($section_content) {
                        echo sprintf('<p class="lg" data-aos="fade-in">%s</p>', $section_content);
                    }
                    ?>
                    <?php if ($items) { ?>
                        <ul>
                            <?php foreach ($items as $item) {
                                echo sprintf('<li data-aos="fade-up">%s</li>', $item['content']);
                            } ?>
                        </ul>
                    <?php } ?>
                    <?php if ($button_1 || $button_2 || $button_3) { ?>
                        <div class="two-btn group-btn d-flex flex-wrap align-items-center justify-content-center my-4" data-aos="fade-in">
                            <?php if ($button_1) {
                                echo sprintf('<a href="%s" class="btn ">%s</a>', esc_url($button_1['url']), esc_html($button_1['title']));
                            } ?>
                            <?php if ($button_2) {
                                echo sprintf('<a href="%s" class="btn bg">%s</a>', esc_url($button_2['url']), esc_html($button_2['title']));
                            } ?>
                            <?php if ($button_3) {
                                echo sprintf('<a href="%s" class="btn bg">%s</a>', esc_url($button_3['url']), esc_html($button_3['title']));
                            } ?>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
    </div>
<?php } ?>
<?php get_footer(); ?>