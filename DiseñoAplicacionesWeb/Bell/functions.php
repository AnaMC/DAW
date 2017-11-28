<?php
/*Registro de TODOS los js que tenemos y los ponemos "en cola" */

    function theme_scripts(){
        wp_register_script('contactform.js',get_template_directory_uri() . '/contactform/contactform.js',array(),false,false);
        wp_enqueue_script('contactform.js');
        
        wp_register_script('custom.js',get_template_directory_uri() . '/js/custom.js',array(),false,false);
        wp_enqueue_script('custom.js');
        
        wp_register_script('bootstrap.bundle.min.js',get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.bundle.min.js',array(),false,false);
        wp_enqueue_script('bootstrap.bundle.min.js');
        
        wp_register_script('counterup.min.js',get_template_directory_uri() . '/lib/counterup/counterup.min.js',array(),false,false);
        wp_enqueue_script('counterup.min.js');
        
        wp_register_script('easing.js',get_template_directory_uri() . '/lib/easing/easing.js',array(),false,false);
        wp_enqueue_script('easing.js');
        
        wp_register_script('easing.min.js',get_template_directory_uri() . '/lib/easing/easing.min.js',array(),false,false);
        wp_enqueue_script('easing.min.js');
        
        wp_register_script('jquery-migrate.min.js',get_template_directory_uri() . '/lib/jquery/jquery-migrate.min.js',array(),false,false);
        wp_enqueue_script('jquery-migrate.min.js');
        
        wp_register_script('jquery.min.js',get_template_directory_uri() . '/lib/jquery/jquery.min.js',array(),false,false);
        wp_enqueue_script('jquery.min.js');
        
        wp_register_script('lockfixed.min.js',get_template_directory_uri() . '/lib/lockfixed/lockfixed.min.js',array(),false,false);
        wp_enqueue_script('lockfixed.min.js');
        
        wp_register_script('stellar.min.js',get_template_directory_uri() . '/lib/stellar/stellar.min.js',array(),false,false);
        wp_enqueue_script('stellar.min.js');
        
        wp_register_script('hoverIntent.js',get_template_directory_uri() . '/lib/superfish/hoverIntent.js',array(),false,false);
        wp_enqueue_script('hoverIntent.js');
        
        wp_register_script('superfish.js',get_template_directory_uri() . '/lib/superfish/superfish.js',array(),false,false);
        wp_enqueue_script('superfish.js');
        
        wp_register_script('superfish.min.js',get_template_directory_uri() . '/lib/superfish/superfish.min.js',array(),false,false);
        wp_enqueue_script('superfish.min.js');
        
        wp_register_script('tether.js',get_template_directory_uri() . '/lib/tether/js/tether.js',array(),false,false);
        wp_enqueue_script('tether.js');
        
        wp_register_script('tether.min.js',get_template_directory_uri() . '/lib/tether/js/tether.min.js',array(),false,false);
        wp_enqueue_script('tether.min.js');
        
    }

add_action ('wp_enqueue_scripts','theme_scripts'); /*Cuando llegue al gancho 'wp_enqueue_scripts' engancha la funcion'theme_scripts' y la ejecuta automáticamente */

