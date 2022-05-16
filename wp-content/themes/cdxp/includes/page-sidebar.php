<?php
$try_salesmanago_block = get_field('try_salesmanago_block', 'option');
if ($try_salesmanago_block) {
    $title = (isset($try_salesmanago_block['title'])) ? $try_salesmanago_block['title'] : false;
    $content = (isset($try_salesmanago_block['content'])) ? $try_salesmanago_block['content'] : false;
    $button = (isset($try_salesmanago_block['button'])) ? $try_salesmanago_block['button'] : false;
?>
    <div class="right-sidebar rs-trial">
        <div class="rs-icon">
            <i class="fas fa-tags"></i>
        </div>
        <?php if ($title) {
            echo sprintf('<h3>%s</h3>', esc_html($title));
        } ?>
        <?php if ($content) {
            echo sprintf('<p>%s</p>', $content);
        } ?>
        <?php if ($button) {
            echo sprintf('<a href="%s" class="btn">%s</a>', esc_url($button['url']), esc_html($button['title']));
        } ?>
    </div>
<?php } ?>
<?php
$write_to_us_block = get_field('write_to_us_block', 'option');
if ($write_to_us_block) {
    $title = (isset($write_to_us_block['title'])) ? $write_to_us_block['title'] : false;
    $content = (isset($write_to_us_block['content'])) ? $write_to_us_block['content'] : false;
    $form_shortcode = (isset($write_to_us_block['form_shortcode'])) ? $write_to_us_block['form_shortcode'] : false;
?>
    <div class="right-sidebar rs-form">
        <div class="rs-icon">
            <i class="fas fa-envelope"></i>
        </div>
        <?php if ($title) {
            echo sprintf('<h3>%s</h3>', esc_html($title));
        } ?>
        <?php if ($content) {
            echo sprintf('<p>%s</p>', $content);
        } ?>
        <?php if ($form_shortcode) { ?>
            <div class="rs-form">
                <?php
                echo do_shortcode($form_shortcode);
                ?>
            </div>
        <?php } ?>
    </div>
<?php } ?>
<?php
$book_a_demo_block = get_field('book_a_demo_block', 'option');
if ($book_a_demo_block) {
    $title = (isset($book_a_demo_block['title'])) ? $book_a_demo_block['title'] : false;
    $content = (isset($book_a_demo_block['content'])) ? $book_a_demo_block['content'] : false;
    $button = (isset($book_a_demo_block['button'])) ? $book_a_demo_block['button'] : false;
?>
    <div class="right-sidebar rs-calendar">
        <div class="rs-icon">
            <i class="fas fa-calendar-alt"></i>
        </div>
        <?php if ($title) {
            echo sprintf('<h3>%s</h3>', esc_html($title));
        } ?>
        <?php if ($content) {
            echo sprintf('<p>%s</p>', $content);
        } ?>
        <?php if ($button) {
            echo sprintf('<a href="%s" target="_blank" class="btn"><i class="fas fa-calendar-alt"></i>%s</a>', esc_url($button['url']), esc_html($button['title']));
        } ?>
    </div>
<?php } ?>
<?php
$cdxp_system_block = get_field('cdxp_system_block', 'option');
if ($cdxp_system_block) {
    $image = (isset($cdxp_system_block['image'])) ? $cdxp_system_block['image'] : false;
    $title = (isset($cdxp_system_block['title'])) ? $cdxp_system_block['title'] : false;
    $content = (isset($cdxp_system_block['content'])) ? $cdxp_system_block['content'] : false;
    $button = (isset($cdxp_system_block['button'])) ? $cdxp_system_block['button'] : false;
?>
    <div class="right-sidebar rs-map">
        <?php if ($image) {
            echo sprintf('<img src="%s" class="img-fluid">', esc_url($image));
        } ?>
        <?php if ($title) {
            echo sprintf('<h3>%s</h3>', esc_html($title));
        } ?>
        <?php if ($content) {
            echo sprintf('<p>%s</p>', $content);
        } ?>
        <?php if ($button) {
            echo sprintf('<a href="%s" class="btn">%s</a>', esc_url($button['url']), esc_html($button['title']));
        } ?>
    </div>
<?php } ?>
<?php
$call_seomondo_block = get_field('call_seomondo_block', 'option');
if ($call_seomondo_block) {
    $title = (isset($call_seomondo_block['title'])) ? $call_seomondo_block['title'] : false;
    $content = (isset($call_seomondo_block['content'])) ? $call_seomondo_block['content'] : false;
    $button = (isset($call_seomondo_block['button'])) ? $call_seomondo_block['button'] : false;
?>
    <div class="right-sidebar rs-contact">
        <div class="rs-icon">
            <i class="fas fa-phone-volume"></i>
        </div>
        <?php if ($title) {
            echo sprintf('<h3>%s</h3>', esc_html($title));
        } ?>
        <?php if ($content) {
            echo sprintf('<p>%s</p>', $content);
        } ?>
        <?php if ($button) {
            echo sprintf('<a class="call-now btn bg" href="%s"><i class="fas fa-phone-volume"></i> %s</a>', esc_url($button['url']), esc_html($button['title']));
        } ?>
    </div>
<?php } ?>