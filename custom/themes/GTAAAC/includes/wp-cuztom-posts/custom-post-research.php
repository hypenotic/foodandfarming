<?php //Connect CPT
$args = array(
    'has_archive' => true,
    'menu_icon' => 'dashicons-groups', //http://melchoyce.github.io/dashicons/
    'supports'  => array( 'title', 'editor', 'page-attributes' ),
    'taxonomies' => array('category')  
    );
$teampage = register_cuztom_post_type('report', $args);

$teampage->add_meta_box(
    'banner',
    'Hero Banner', 
    array(
        array(
            'name'          => 'image',
            'label'         => 'Banner Image',
            'description'   => 'Dimensions 1200px x 800px',
            'type'          => 'image',
        ),
        array(
            'name'          => 'heading',
            'label'         => 'Main Heading',
            'description'   => '',
            'type'          => 'text',
        ),
        array(
            'name'          => 'subheading',
            'label'         => 'Subheading',
            'description'   => '',
            'type'          => 'text'
        )
    )
);

$teampage->add_meta_box(
    'Meta',
    'Meta Display', 
    array(
        'bundle',    
            array( 
                array(
                    'name'          => 'photo',
                    'label'         => 'Picture',
                    'description'   => 'Upload team member picture here.',
                    'type'          => 'image',          
                ),
                array(
                    'name'          => 'name',
                    'label'         => 'Blurb',
                    'description'   => '',
                    'type'          => 'wysiwyg',          
                )
            )
    )
);

?>