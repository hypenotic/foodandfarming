<?php //Connect CPT
$args = array(
    'has_archive' => true,
    'menu_icon' => 'dashicons-welcome-write-blog', //http://melchoyce.github.io/dashicons/
    'supports'  => array( 'title', 'editor', 'page-attributes' ),
    'taxonomies' => array('category')  
    );
$report = register_cuztom_post_type('report', $args);

$report->add_meta_box(
    'meta',
    'Meta Display', 
    array(
        array(
            'name'          => 'photo',
            'label'         => 'Picture',
            'description'   => 'Upload report feature image.',
            'type'          => 'image',          
        ),
        array(
            'name'          => 'name',
            'label'         => 'Blurb',
            'description'   => '',
            'type'          => 'wysiwyg',          
        ),
        array(
            'name'          => 'downloadlink',
            'label'         => 'Download Link',
            'description'   => '',
            'type'          => 'text'
        ),
        array(
            'name'          => 'contacttext',
            'label'         => 'Contact Text',
            'description'   => '',
            'type'          => 'text'
        ),
        array(
            'name'          => 'contactlink',
            'label'         => 'Contact Link',
            'description'   => '',
            'type'          => 'text'
        )
    )
);

?>