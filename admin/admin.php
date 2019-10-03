<?php 

/**
 * Hooks Administrativos
 * author: André Luiz Pereira
 */

/* +++++++++++++++++ -------------- +++++++++++++++++++++++ ------------ ++++++++++++++++++ */

/**
* metodo para criar e editar um perfil de usuário utilize show_user_profile para exibir para usuário
* @author André Luiz Pereira <andre@next4.com.br>
*/
function adm_extrafield_show_edit( $profileuser )
{
    require_once NXPROFILE_PLUGIN_LIB.'/factory.php';

    $data = [];

    $factory = new Factory;

    $data['profile_saved'] = esc_attr( get_the_author_meta( 'extra_profile', $profileuser->ID ) );

   $data['get_list_profile'] = [
        'test_a'=>'Test A',
        'test_b'=>'Test B',
    ];

    $factory::view($data , 'profile_edit');

}
add_action( 'edit_user_profile', 'adm_extrafield_show_edit',0,1 );
add_action( "user_new_form", "adm_extrafield_show_edit", 0,1 );

/**
* Adiciona no banco de dados a iformação de profile
* @author André Luiz Pereira <andre@next4.com.br>
*/
function adm_save_profile($user_id){
    # save my custom field
    update_usermeta($user_id, 'extra_profile', $_POST['extra_profile']);
}
add_action('user_register', 'adm_save_profile');
add_action('profile_update', 'adm_save_profile');


function admin_style() {
    wp_enqueue_style('admin-styles', plugin_dir_url(NXPROFILE_PLUGIN_ADM_CSS).'/assets/adm_next_profile.css');

    
  }
  add_action('admin_enqueue_scripts', 'admin_style');
