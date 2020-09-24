<?php
add_filter( 'rwmb_meta_boxes', 'report_register_meta_boxes' );
function report_register_meta_boxes( $meta_boxes ) {

    
    // General
    $meta_boxes[] = array(
        'title'      => __( 'Report Info', 'textdomain' ),
        'post_types' => array( 'report'),
        'context'    => 'normal',
        'priority'   => '',
        'fields' => array(
            array(
                'name'  => __( 'Blurb', 'textdomain' ),
                'id'    => '_meta_name',
                'type'  => 'wysiwyg',
            ),
            array(
                'name'  => __( 'Download Link', 'textdomain' ),
                'id'    => '_meta_downloadlink',
                'type'  => 'text',
            ),
            array(
                'name'  => __( 'Contact Text', 'textdomain' ),
                'id'    => '_meta_contacttext',
                'type'  => 'text',
            ),
            array(
                'name'  => __( 'Contact Link', 'textdomain' ),
                'id'    => '_meta_contactlink',
                'type'  => 'text',
            ),
            array(
                'name'  => __( 'Picture', 'textdomain' ),
                'id'    => '_meta_photo',
                'type'             => 'file_advanced',
                'max_file_uploads' => 1,
                'desc' => 'Upload report feature image.'
            ),
        )
    );
    
    return $meta_boxes;
}
?>