jQuery(document).ready(function ($){
    
    var upgrade_notice = '<div class="notice-up">';
    upgrade_notice += '<a class="upgrade-pro-demo" target="_blank" href="http://8degreethemes.com/demos/?theme=maggie-pro">View Maggie PRO</a></div>';
    jQuery('#customize-info').append(upgrade_notice);

    $('#accordion-section-homepage_block_option_section_four').append(
        '<div class="user_sticky_note">'+
        '<h3 class="sticky_title">Note:</h3>'+
        '<span class="sticky_info_row">If you have been using this theme in previously setup site.Please Regenerate Thumbnails, so that everythings fits in design.</span>'+
        '</div>'
        );
});