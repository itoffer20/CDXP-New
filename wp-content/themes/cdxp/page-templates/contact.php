<?php
/*
Template Name: Contact Page Template
*/
get_header(); ?>
<?php get_cdxp_breadcrumb(); ?>
<section class="contact-sec p-0">
    <div class="container">
        <?php
        $page_title = get_field('page_title');
        $page_content = get_field('page_content');
        if ($page_title || $page_content) {
        ?>
            <div class="section-title">
                <?php if ($page_title) {
                    echo sprintf('<h2 class="mb-4"><span class="line-dec">%s</span></h2>', esc_html($page_title));
                } ?>
                <?php if ($page_content) {
                    echo $page_content;
                } ?>
            </div>
        <?php } ?>
        <div class="row contact-fields">
            <!-- <div class="col-lg-4 pl-0">
                <div class="contact-info">
                    <ul class="c-brief">
                        <li>
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="contact-list">
                                <h6>Address</h6>
                                <p>Seomondo ApS Værkstedsgården 8, 1, 2620 Albertslund</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fas fa-phone-volume"></i></div>
                            <div class="contact-list">
                                <h6>Lets Talk</h6>
                                <p><a href="tel:20 81 93 57"> 20 81 93 57</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fas fa-envelope"></i></div>
                            <div class="contact-list">
                                <h6>General Support</h6>
                                <p><a href="#">www.seomondo.dk</a></p>
                            </div>
                        </li>
                    </ul>
                    <ul class="social-media d-inline-block mb-5">
                        <li>
                            <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="fab fa-github"></i></a>
                        </li>
                    </ul>
                    <div class="book-mode">
                        <a href="#" class="btn bg-light">BOOK MØDE</a>
                    </div>
                </div>
            </div> -->
            <div class="col-xl-8 col-lg-8">
                <?php
                $form_shortcode = get_field('form_shortcode');
                if ($form_shortcode) { ?>
                    <div class="form-details">
                        <?php echo do_shortcode($form_shortcode); ?>
                    </div>
                <?php } ?>
                <div class="contact-info1 mt-5">
                    <div class="c-brief row align-items-start">
                        <div class="col-xl-12">
                            <div class="c-logo">
                                <!-- <a href="<?php echo get_site_url(); ?>"> -->
                                <img class="img-fluid" src="<?php
                                                            $custom_logo_id = get_theme_mod('custom_logo');
                                                            $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                                                            echo $image[0];
                                                            ?>" alt="logo" />
                                <!-- </a> -->
                            </div>
                        </div>
                        <?php
                        $address = get_field('address');
                        if ($address) { ?>
                            <div class="col-xl-3">
                                <div class="contact-list">
                                    <p><?php echo $address; ?></p>
                                </div>
                            </div>
                        <?php } ?>
                        <?php
                        $contact_number = get_field('contact_number');
                        $button_1 = get_field('button_1');
                        $button_2 = get_field('button_2');
                        if ($contact_number || $button_1 || $button_2) { ?>
                            <div class="col-xl-9">
                                <ul class="f-btn">
                                    <?php if ($contact_number) { ?>
                                        <li>
                                            <a href="tel:<?php echo $contact_number; ?>" class="btn btn-dark">
                                                <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                                <div class="contact-list">
                                                    <p><?php echo $contact_number; ?></p>
                                                </div>
                                            </a>
                                        </li>
                                    <?php } ?>
                                    <?php if ($button_1) { ?>
                                        <li>
                                            <a href="<?php echo esc_url($button_1['url']); ?>" class="btn btn-dark" target="<?php echo $button_1['target'] ?>">
                                                <div class="icon"><i class="fas fa-globe"></i></div>
                                                <div class="contact-list">
                                                    <p><?php echo esc_html($button_1['title']); ?></p>
                                                </div>
                                            </a>
                                        </li>
                                    <?php } ?>
                                    <?php if ($button_2) { ?>
                                        <li>
                                            <a href="<?php echo esc_url($button_2['url']); ?>" class="btn btn-dark" target="<?php echo $button_2['target'] ?>">
                                                <div class="icon"><i class="fas fa-globe"></i></div>
                                                <div class="contact-list">
                                                    <p><?php echo esc_html($button_2['title']); ?></p>
                                                </div>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="book-calendar">
                    <img src="assets/images/calendar.png" class="img-fluid">
                    <a href="#" class="btn btn-dark mt-3">BOOK MØDE</a>
                </div>
            </div>

        </div>
    </div>
</section>
<?php
$map = get_field('map');
if ($map) { ?>
    <section class="map-sec pb-0 pt-5">
        <?php echo $map; ?>
    </section>
<?php } ?>
<?php get_footer(); ?>