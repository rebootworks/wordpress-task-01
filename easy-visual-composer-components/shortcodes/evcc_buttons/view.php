<?php

$buttons = [];

if(!empty($align)) {
    $el_class .= ' c-buttons--' . $align;
}

if($full_width == 'yes') {
    $el_class .= ' c-buttons--full-width';
}

if($mobile_full_width == 'yes') {
    $el_class .= ' c-buttons--mobile-full-width';
}

if (!empty($button_1)) {
    $button_1_link = evcc_vc_parse_link($button_1);
    if ($button_1_link) {
        $buttons[] = sprintf('<a class="c-button c-button--1 dt-btn dt-btn-%s" %s><span>%s</span></a>', $size, $button_1_link['attributes'], $button_1_link['title']);
    }
}

if (!empty($button_2) && $action == 'two_buttons') {
    $button_2_link = evcc_vc_parse_link($button_2);
    if ($button_2_link) {
        $buttons[] = sprintf('<a class="c-button c-button--2 dt-btn dt-btn-%s" %s><span>%s</span></a>', $size, $button_2_link['attributes'], $button_2_link['title']);
    }
}

if (!empty($buttons)) {

    $el_class = trim($el_class);
    $el_class .= ' c-buttons--' . $counter;

    echo sprintf('<div class="c-buttons%s"%s>%s</div>', evcc_attr($el_class), evcc_attr('id', $el_id), implode("\n ", $buttons));
}

