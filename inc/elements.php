<?php 

// Hello
function create_hello_shortcode($atts) {
    
    $atts = shortcode_atts(
        array(
            'name' => '',
            'job' => '',
            'description' => '',
            'linkedin' => '',
            'github' => '',
            'twitter' => '',
            'dribbble' => '',
            'behance' => '',
            'youtube' => '',
            'instagram' => '',
            'facebook' => '',
            'codepen' => '',
        ),
        $atts,
        'hello'
    );
    
    $name = $atts['name'];
    $job = $atts['job'];
    $description = $atts['description'];
    $linkedin = $atts['linkedin'];
    $github = $atts['github'];
    $twitter = $atts['twitter'];
    $dribbble = $atts['dribbble'];
    $behance = $atts['behance'];
    $youtube = $atts['youtube'];
    $instagram = $atts['instagram'];
    $facebook = $atts['facebook'];
    $codepen = $atts['codepen'];

    
?>

    <section class="rad-showcase rad-showcase--index rad-animation-group rad-fade-down">
        <div class="rad-showcase__bg"><img class="lozad img-responsive" src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" data-src="<?php bloginfo('template_url'); ?>/assets/img/showcase/showcase.png" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/showcase/showcase.png 1x, <?php bloginfo('template_url'); ?>/assets/img/showcase/showcase@2x.png 2x" alt="Showcase keyboard and mouse image"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-7 col-xl-6">
                    <h1 class="display-1"><?php echo $name; ?><br><span><?php echo $job; ?></span></h1>
                    <p class="lead"><?php echo rawurldecode( base64_decode($description)); ?></p><a data-scroll href="#contact" class="btn btn-primary"><i class=icon-mail-fill></i>Contact</a></div>
            </div>
            <div class="row platform-links">
                <div class="col-12">
                    <?php if($linkedin) { ?><a href="<?php echo $linkedin; ?>" target="_blank"><i class="icon-linkedin-line"></i></a><?php } else { } ?>
                    <?php if($github) { ?><a href="<?php echo $github; ?>" target="_blank"><i class="icon-github-line"></i></a><?php } else { } ?>
                    <?php if($twitter) { ?><a href="<?php echo $twitter; ?>" target="_blank"><i class="icon-twitter-line"></i></a><?php } else { } ?>
                    <?php if($dribbble) { ?><a href="<?php echo $dribbble; ?>" target="_blank"><i class="icon-dribbble-line"></i></a><?php } else { } ?>
                    <?php if($behance) { ?><a href="<?php echo $behance; ?>" target="_blank"><i class="icon-behance-line"></i></a><?php } else { } ?>
                    <?php if($youtube) { ?><a href="<?php echo $youtube; ?>" target="_blank"><i class="icon-youtube-line"></i></a><?php } else { } ?>
                    <?php if($instagram) { ?><a href="<?php echo $instagram; ?>" target="_blank"><i class="icon-instagram-line"></i></a><?php } else { } ?>
                    <?php if($facebook) { ?><a href="<?php echo $facebook; ?>" target="_blank"><i class="icon-facebook-line"></i></a><?php } else { } ?>
                    <?php if($codepen) { ?><a href="<?php echo $codepen; ?>" target="_blank"><i class="icon-codepen-line"></i></a></div><?php } else { } ?>
            </div>
        </div>
        <div class="rad-showcase__bg rad-showcase__bg--mobile"><img class="lozad img-responsive" src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" data-src="<?php bloginfo('template_url'); ?>/assets/img/showcase/showcase-mobile.jpg" alt="Showcase keyboard and mouse image"></div>
    </section> 
<?php

}
add_shortcode( 'hello', 'create_hello_shortcode' );
add_action( 'vc_before_init', 'hello_integrateWithVC' );
function hello_integrateWithVC() {
    vc_map( array(
        'name' => __( 'Hello', 'radity' ),
        'description' => __( 'Hello, I’m Andreas.', 'radity' ),
        'base' => 'hello',
        'show_settings_on_create' => true,
        'category' => __( 'Content', 'radity'),
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'What\'s your name?', 'radity' ),
                'param_name' => 'name',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textarea',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'What\'s your job?', 'radity' ),
                'param_name' => 'job',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textarea_raw_html',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Description', 'radity' ),
                'param_name' => 'description',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Linkedin', 'radity' ),
                'param_name' => 'linkedin',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Github', 'radity' ),
                'param_name' => 'github',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Twitter', 'radity' ),
                'param_name' => 'twitter',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Dribbble', 'radity' ),
                'param_name' => 'dribbble',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Behance', 'radity' ),
                'param_name' => 'behance',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Youtube', 'radity' ),
                'param_name' => 'youtube',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Instagram', 'radity' ),
                'param_name' => 'instagram',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Facebook', 'radity' ),
                'param_name' => 'facebook',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Codepen', 'radity' ),
                'param_name' => 'codepen',
                'description' => __( '', 'radity' )
            ),
        )
    ) );
}
// Hello

// Who am I?
function create_who_shortcode($atts) {
    
    $atts = shortcode_atts(
        array(
            'title' => '',
            'description' => ''
        ),
        $atts,
        'who'
    );
    
    $title = $atts['title'];
    $description = $atts['description'];

    
?>

    <section class="section rad-animation-group pb-0" id=about>
        <div class="container rad-fade-down">
            <div class="row d-flex flex-column-reverse flex-md-row">
                <div class="about__profile-picture col-12 col-md-6"><img class="lozad img-responsive image-left-overflow" src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" data-src="<?php bloginfo('template_url'); ?>/assets/img/who-am-i/user-picture.png" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/who-am-i/user-picture.png 1x, <?php bloginfo('template_url'); ?>/assets/img/who-am-i/user-picture@2x.png 2x" alt="Profile Picture"></div>
                <div class="col-12 col-md-6 my-auto my-auto">
                    <h2><?php echo $title; ?></h2>
                    <?php echo wpautop($description); ?><a href=https://www.linkedin.com/company/radity/ target=_blank class="btn btn-primary"><i class=icon-smile-fill></i>About Me</a></div>
            </div>
        </div>
    </section> 
<?php

}
add_shortcode( 'who', 'create_who_shortcode' );
add_action( 'vc_before_init', 'who_integrateWithVC' );
function who_integrateWithVC() {
    vc_map( array(
        'name' => __( 'Who am I?', 'radity' ),
        'description' => __( 'Who are you?', 'radity' ),
        'base' => 'who',
        'show_settings_on_create' => true,
        'category' => __( 'Content', 'radity'),
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Section title', 'radity' ),
                'param_name' => 'title',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textarea',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Description', 'radity' ),
                'param_name' => 'description',
                'description' => __( '', 'radity' )
            ),
        )
    ) );
}
// Who am I?

// Education
function create_edu_shortcode($atts) {
    
    $atts = shortcode_atts(
        array(
            'title' => '',
            'list' => '',
        ),
        $atts,
        'edu'
    );
    
    $title = $atts['title'];

    
?>

<section class="section section--border-bottom rad-animation-group">
        <div class=container>
            <div class="row rad-fade-down">
                <div class=col-12>
                    <h2><?php echo $title; ?></h2>
                    <div class="row pt-2 pt-md-4">
                        <?php  
                            $values = vc_param_group_parse_atts($atts['list']); 
                            foreach ($values as $value) {  $icon = wp_get_attachment_image_src( $value['icon'], 'full' ); 
                        ?> 
                            <div class="col-12 col-sm-6 mb-4 mb-sm-0">
                                <div class=education>
                                    <div class=education__date><?php echo $value['years']; ?></div>
                                    <div class=education__title><?php echo $value['name']; ?></div>
                                    <div class=education__degree><?php echo $value['department']; ?></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php

}
add_shortcode( 'edu', 'create_edu_shortcode' );
add_action( 'vc_before_init', 'edu_integrateWithVC' );
function edu_integrateWithVC() {
    vc_map( array(
        'name' => __( 'Education', 'radity' ),
        'description' => __( '', 'radity' ),
        'base' => 'edu',
        'show_settings_on_create' => true,
        'category' => __( 'Content', 'radity'),
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Section title', 'radity' ),
                'param_name' => 'title',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'param_group',
                'value' => '',
                'param_name' => 'list',
                // Note params is mapped inside param-group:
                'params' => array(
                        array(
                        'type' => 'textfield',
                        'value' => '',
                        'heading' => 'Years',
                        'param_name' => 'years',
                        ),
                        array(
                            'type' => 'textfield',
                            'heading' => __( 'Name', 'radity' ),
                            'param_name' => 'name',
                            'description' => __( '', 'radity' )
                        ), 
                        array(
                            'type' => 'textfield',
                            'heading' => __( 'Department', 'radity' ),
                            'param_name' => 'department',
                            'description' => __( '', 'radity' )
                        ), 
                    )
                ),
        )
    ) );
}
// Education

// Works
function create_works_shortcode($atts) {
    
    $atts = shortcode_atts(
        array(
            'title' => '',
            'clients' => '',
            'works' => ''
        ),
        $atts,
        'works'
    );
    
    $title = $atts['title'];

    
?>

    <section id="portfolio" class="section section--border-bottom">
        <div class=container>
            <h2 class="rad-animation-group rad-fade-down"><?php echo $title; ?></h2>
            <div class="row row--padded rad-animation-group rad-fade-down">
                <div class="col-12">
                    <div class="clients">
                        <?php  
                            $values = vc_param_group_parse_atts($atts['clients']); 
                            foreach ($values as $value) {  $image = wp_get_attachment_image_src( $value['image'], 'full' );  $image2x = wp_get_attachment_image_src( $value['image2x'], 'full' ); 
                        ?> 
                        <div class=clients__item>
                            <a href="<?php echo $value['url']; ?>" title="<?php echo $value['name']; ?>"><img class="lozad img-responsive" src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" data-src=assets/img/clients/asgardia.png data-srcset="<?php echo $image[0]; ?> 1x, <?php echo $image2x[0]; ?> 2x" alt="<?php echo $value['name']; ?>"></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php  
                $works = vc_param_group_parse_atts($atts['works']); 
                foreach ($works as $value) {  $image = wp_get_attachment_image_src( $value['image'], 'full' ); 
            ?> 
            <?php $p = $value['position']; if ($p == "Left") { ?>
            <div class="row row--padded rad-animation-group rad-fade-down flex-column-reverse flex-md-row">
                <div class="col-12 col-md-5 mt-4 mt-md-0 my-md-auto">
                    <h3><?php echo $value['name']; ?></h3>
                    <p class="lead"><?php echo $value['description']; ?></p><a href="<?php echo $value['url']; ?>" class="btn btn-primary"><?php echo $value['text']; ?><i class=icon-arrow-right></i></a></div>
                <div class="col-12 col-md-7 pl-md-0 text-right"><img class="lozad img-responsive img-clip-left-backward" src="<?php echo $image[0]; ?>" alt="<?php echo $value['name']; ?>"></div>
            </div>
            <?php } else if($p == "Right") { ?>
            <div class="row row--padded rad-animation-group rad-fade-down">
                <div class="col-12 col-md-7 pl-md-0 text-right"><img class="lozad img-responsive img-clip-right-backward" src="<?php echo $image[0]; ?>" alt="<?php echo $value['text']; ?>"></div>
                <div class="col-12 col-md-5 mt-4 mt-md-0 my-md-auto">
                    <h3><?php echo $value['name']; ?></h3>
                    <p class=lead><?php echo $value['description']; ?></p><a href="<?php echo $value['url']; ?>" class="btn btn-primary"><?php echo $value['text']; ?><i class=icon-arrow-right></i></a></div>
            </div>
            <?php } else { } ?>
            <?php } ?>
        </div>
    </section>
 
<?php

}
add_shortcode( 'works', 'create_works_shortcode' );
add_action( 'vc_before_init', 'works_integrateWithVC' );
function works_integrateWithVC() {
    vc_map( array(
        'name' => __( 'Clients & Works', 'radity' ),
        'description' => __( '', 'radity' ),
        'base' => 'works',
        'show_settings_on_create' => true,
        'category' => __( 'Content', 'radity'),
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Section title', 'radity' ),
                'param_name' => 'title',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'param_group',
                'value' => '',
                'param_name' => 'clients',
                // Note params is mapped inside param-group:
                'params' => array(
                        array(
                            'type' => 'textfield',
                            'heading' => __( 'Client Name', 'radity' ),
                            'param_name' => 'name',
                            'description' => __( '', 'radity' )
                        ), 
                        array(
                            'type' => 'textfield',
                            'heading' => __( 'URL', 'radity' ),
                            'param_name' => 'url',
                            'description' => __( '', 'radity' )
                        ), 
                        array(
                            "type"        => "attach_image",
                            "heading"     => esc_html__( "Image", "appcastle-core" ),
                            "param_name"  => "image",
                            "value"       => "",
                        ),
                        array(
                            "type"        => "attach_image",
                            "heading"     => esc_html__( "Image 2x", "appcastle-core" ),
                            "param_name"  => "image2x",
                            "value"       => "",
                        ),
                    )
                ),
                array(
                    'type' => 'param_group',
                    'value' => '',
                    'param_name' => 'works',
                    // Note params is mapped inside param-group:
                    'params' => array(
                            array(
                                'type' => 'textfield',
                                'heading' => __( 'Work Name', 'radity' ),
                                'param_name' => 'name',
                                'description' => __( '', 'radity' )
                            ), 
                            array(
                                'type' => 'textfield',
                                'heading' => __( 'Description', 'radity' ),
                                'param_name' => 'description',
                                'description' => __( '', 'radity' )
                            ), 
                            array(
                                'type' => 'textfield',
                                'heading' => __( 'Buton Text', 'radity' ),
                                'param_name' => 'text',
                                'description' => __( '', 'radity' )
                            ),  
                            array(
                                'type' => 'textfield',
                                'heading' => __( 'Buton URL', 'radity' ),
                                'param_name' => 'url',
                                'description' => __( '', 'radity' )
                            ),  
                            array(
                                "type"        => "attach_image",
                                "heading"     => esc_html__( "Image", "appcastle-core" ),
                                "param_name"  => "image",
                                "value"       => "",
                            ),
                            array(
                                'type'        => 'dropdown',
                                'heading'     => __('Position'),
                                'param_name'  => 'position',
                                'admin_label' => true,
                                'value'       => array(
                                  '0'   => 'Left',
                                  '1'   => 'Right'
                                ),
                        )
                    ),
        )
    ) ) );
}
// Works

// Experience
function create_experience_shortcode($atts) {
    
    $atts = shortcode_atts(
        array(
            'title' => '',
            'description' => '',
            'list' => '',
            'linkedintext' => '',
            'linkedinurl' => '',
            'cvtext' => '',
            'cvurl' => '',
        ),
        $atts,
        'experience'
    );
    
    $title = $atts['title'];
    $description = $atts['description'];
    $linkedintext = $atts['linkedintext'];
    $linkedinurl = $atts['linkedinurl'];
    $cvtext = $atts['cvtext'];
    $cvurl = $atts['cvurl'];
?>

<section class="section section--border-bottom rad-animation-group">
        <div class=container>
            <div class="row flex-column-reverse flex-md-row rad-fade-down">
                <div class="col-12 col-sm-6 mt-5 mt-sm-0">
                    <?php  
                        $values = vc_param_group_parse_atts($atts['list']); 
                        foreach ($values as $value) {  $icon = wp_get_attachment_image_src( $value['icon'], 'full' ); 
                    ?> 
                    <div class=experience>
                        <div class="experience__date"><?php echo $value['years']; ?></div>
                        <div class="experience__title"><?php echo $value['role']; ?></div>
                        <div class="experience__company"><?php echo $value['company']; ?></div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-12 col-sm-6">
                    <h2><?php echo $title; ?></h2>
                    <p class=lead><?php echo $description; ?></p><a href="<?php echo $linkedinurl; ?>" class="btn btn-primary" target=_blank><i class=icon-linkedin-fill></i><?php echo $linkedintext; ?>
<i class=icon-arrow-right></i></a><a href="<?php echo $cvurl; ?>" class="btn btn-frameless" target=_blank><i class=icon-profile-fill></i><?php echo $cvtext; ?></a></div>
            </div>
        </div>
    </section>
<?php

}
add_shortcode( 'experience', 'create_experience_shortcode' );
add_action( 'vc_before_init', 'experience_integrateWithVC' );
function experience_integrateWithVC() {
    vc_map( array(
        'name' => __( 'Experience', 'radity' ),
        'description' => __( '', 'radity' ),
        'base' => 'experience',
        'show_settings_on_create' => true,
        'category' => __( 'Content', 'radity'),
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Section title', 'radity' ),
                'param_name' => 'title',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Section Description', 'radity' ),
                'param_name' => 'description',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Linkedin Text', 'radity' ),
                'param_name' => 'linkedintext',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Linkedin URL', 'radity' ),
                'param_name' => 'linkedinurl',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'CV Text', 'radity' ),
                'param_name' => 'cvtext',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'CV URL', 'radity' ),
                'param_name' => 'cvurl',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'param_group',
                'value' => '',
                'param_name' => 'list',
                // Note params is mapped inside param-group:
                'params' => array(
                        array(
                        'type' => 'textfield',
                        'value' => '',
                        'heading' => 'Years',
                        'param_name' => 'years',
                        ),
                        array(
                            'type' => 'textfield',
                            'heading' => __( 'Role', 'radity' ),
                            'param_name' => 'role',
                            'description' => __( '', 'radity' )
                        ), 
                        array(
                            'type' => 'textfield',
                            'heading' => __( 'Company', 'radity' ),
                            'param_name' => 'company',
                            'description' => __( '', 'radity' )
                        ), 
                    )
                ),
        )
    ) );
}
// Experience

// Testimonials
function create_testimonials_shortcode($atts) {
    
    $atts = shortcode_atts(
        array(
            'title' => '',
            'list' => '',
        ),
        $atts,
        'testimonials'
    );
    
    $title = $atts['title'];
?>

<section class="section rad-animation-group section--border-bottom">
        <div class="container">
            <h2 class="rad-fade-down">Testimonials</h2>
            <div class="row row--padded mb-0 rad-fade-down">
            <?php $list = vc_param_group_parse_atts($atts['list']); 
                foreach ($list as $value) {  $image = wp_get_attachment_image_src( $value['image'], 'full' ); ?>
                <div class="col-12 col-md-4 mb-5 mb-md-0 testimonial"><i class="icon-quote"></i>
                <?php echo wpautop($value['comment']); ?>
                    <div class="testimonial__author"><img class="lozad testimonial__author-image" src="<?php echo $image[0]; ?>" alt="<?php echo $value['author']; ?>">
                        <div class="testimonial__author-info">
                            <h4><?php echo $value['author']; ?></h4><span><?php echo $value['companyrole']; ?></span></div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php

}
add_shortcode( 'testimonials', 'create_testimonials_shortcode' );
add_action( 'vc_before_init', 'testimonials_integrateWithVC' );
function testimonials_integrateWithVC() {
    vc_map( array(
        'name' => __( 'Testimonials', 'radity' ),
        'description' => __( '', 'radity' ),
        'base' => 'testimonials',
        'show_settings_on_create' => true,
        'category' => __( 'Content', 'radity'),
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Section title', 'radity' ),
                'param_name' => 'title',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'param_group',
                'value' => '',
                'param_name' => 'list',
                // Note params is mapped inside param-group:
                'params' => array(
                        array(
                        'type' => 'textfield',
                        'value' => '',
                        'heading' => 'Comment',
                        'param_name' => 'comment',
                        ),
                        array(
                            'type' => 'textfield',
                            'heading' => __( 'Author', 'radity' ),
                            'param_name' => 'author',
                            'description' => __( '', 'radity' )
                        ), 
                        array(
                            'type' => 'textfield',
                            'heading' => __( 'Company & Role', 'radity' ),
                            'param_name' => 'companyrole',
                            'description' => __( '', 'radity' )
                        ), 
                        array(
                            "type"        => "attach_image",
                            "heading"     => esc_html__( "Avatar", "appcastle-core" ),
                            "param_name"  => "image",
                            "value"       => "",
                        ),
                    )
                ),
        )
    ) );
}
// Testimonials

// Contact
function create_contact_shortcode($atts) {
    
    $atts = shortcode_atts(
        array(
            'title' => '',
            'formid' => '',
            'formtitle' => '',
            'phone' => '',
            'email' => '',
            'address' => '',
        ),
        $atts,
        'contact'
    );
    
    $title = $atts['title'];
    $formid = $atts['formid'];
    $formtitle = $atts['formtitle'];
    $phone = $atts['phone'];
    $email = $atts['email'];
    $address = $atts['address'];

    
?>
    <section id=contact class="section section--contact pt-0">
        <div class=container>
            <div class=contact>
                <h2><?php echo $title; ?></h2>
                <div class="row pt-2">
                    <div class="col-12 col-lg-7">
                        <?php echo do_shortcode('[contact-form-7 id="'.$formid.'" title="'.$formtitle.'"]'); ?>
                    </div>
                    <div class="col-12 col-lg-5 contact__info">
                        <?php if($phone) { ?><h4>Phone Number</h4><span><?php echo $phone; ?></span><?php } else { } ?>
                        <?php if($email) { ?><h4>Email</h4><span><a href=mailto:<?php echo $email; ?>><?php echo $email; ?></a></span><?php } else { } ?>
                        <?php if($address) { ?><h4>Address</h4><span><?php echo $address; ?></span></div><?php } else { } ?>
                </div>
            </div>
        </div>
    </section>



<?php

}
add_shortcode( 'contact', 'create_contact_shortcode' );
add_action( 'vc_before_init', 'contact_integrateWithVC' );
function contact_integrateWithVC() {
    vc_map( array(
        'name' => __( 'Contact', 'radity' ),
        'description' => __( '', 'radity' ),
        'base' => 'contact',
        'show_settings_on_create' => true,
        'category' => __( 'Content', 'radity'),
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Section Title', 'radity' ),
                'param_name' => 'title',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Form ID', 'radity' ),
                'param_name' => 'formid',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Form Title', 'radity' ),
                'param_name' => 'formtitle',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Phone Number', 'radity' ),
                'param_name' => 'phone',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'E-Mail', 'radity' ),
                'param_name' => 'email',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textarea',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Address', 'radity' ),
                'param_name' => 'address',
                'description' => __( '', 'radity' )
            ),
        )
    ) );
}
// Contact

// Subscribe
function create_subscription_shortcode($atts) {
    
    $atts = shortcode_atts(
        array(
            'title' => '',
            'desc' => '',
            'shortcde' => '',
        ),
        $atts,
        'subscription'
    );
    
    $title = $atts['title'];
    $desc = $atts['desc'];
    $shortcode = $atts['shortcde'];

    
?>
    <section class="section section--cta">
        <div class=container>
            <div class=row>
                <div class="col-12 text-center">
                    <h2><?php echo $title; ?></h2>
                    <div class=rad-subscription-group>
                        <?php echo do_shortcode(''.rawurldecode( base64_decode($shortcode)).''); ?>
                        <div id=rad-subscription-success class=d-none>
                            <p class=lead>Successfully subscribed</p>
                        </div>
                        <div id=rad-subscription-fail class=d-none>
                            <p>Error while subscribing.</p>
                        </div>
                        <script src=/js/subscription.js></script>
                    </div><small id=emailHelp class="form-text text-muted"><?php echo $desc; ?></small></div>
            </div>
        </div>
    </section>



<?php

}
add_shortcode( 'subscription', 'create_subscription_shortcode' );
add_action( 'vc_before_init', 'subscription_integrateWithVC' );
function subscription_integrateWithVC() {
    vc_map( array(
        'name' => __( 'Subscription', 'radity' ),
        'description' => __( '', 'radity' ),
        'base' => 'subscription',
        'show_settings_on_create' => true,
        'category' => __( 'Content', 'radity'),
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Section Title', 'radity' ),
                'param_name' => 'title',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Description', 'radity' ),
                'param_name' => 'desc',
                'description' => __( '', 'radity' )
            ),
            array(
                'type' => 'textarea_raw_html',
                'value' => '',
                'heading' => 'Shortcode',
                'param_name' => 'shortcde',
            )
        )
    ) );
}
// Subscribe


?>