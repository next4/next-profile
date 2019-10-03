<?php 
/*
Plugin Name: Next Profile
Description: Cria um custom extra field para o perfil de assinante, assim podendo utilizar regras para este extra field
Author: André Luiz Pereira
Author URI: https://github.com/androidelp
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Version: 0.1

O suporte é encontrado em readme.md na pasta deste plugin
                 _______             _______
                |@|@|@|@|           |@|@|@|@|
                |@|@|@|@|___ED209___|@|@|@|@|
                |@|@|@|@| /\_T_T_/\ |@|@|@|@|
                |@|@|@|@||/\ T T /\||@|@|@|@|
                 ~/T~~T~||~\/~T~\/~||~T~~T\~
                  \|__|_| \(-(O)-)/ |_|__|/
                  _| _|    \\8_8//    |_ |_
                |(@)]   /~~[_____]~~\   [(@)|
                  ~    (  |       |  )    ~
                      [~` ]       [ '~]
                      |~~|         |~~|
                      |  |         |  |
                     _<\/>_       _<\/>_
                    /_====_\     /_====_\
*/
define( 'NXPROFILE_PLUGIN', __FILE__ );
define( 'NXPROFILE_PLUGIN_BASENAME', plugin_basename( NXPROFILE_PLUGIN ) );
define( 'NXPROFILE_PLUGIN_DIR', untrailingslashit( dirname( NXPROFILE_PLUGIN ) ) );
define( 'NXPROFILE_PLUGIN_ADM', NXPROFILE_PLUGIN_DIR.'/admin' );
define( 'NXPROFILE_PLUGIN_ADM_CSS', NXPROFILE_PLUGIN_ADM.'/assets' );
define( 'NXPROFILE_PLUGIN_CONTENT', NXPROFILE_PLUGIN_DIR.'/content' );
define( 'NXPROFILE_PLUGIN_LIB', NXPROFILE_PLUGIN_DIR.'/lib' );

if ( is_admin() ) {
    
	require_once NXPROFILE_PLUGIN_ADM . '/admin.php';
} else {
	require_once NXPROFILE_PLUGIN_CONTENT . '/content.php';
}