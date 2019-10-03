<?php 

class Factory {

    public static function view($data,$layout_name)
    {
        
        $path_view = NXPROFILE_PLUGIN_ADM.'/view/'.$layout_name.'.php';

        if(!is_admin())
        {
            $path_view = NXPROFILE_PLUGIN_CONTENT.'/view/'.$layout_name.'.php';
        }

        

        ob_start();
        
        include($path_view);
        $retorno = ob_get_clean();

        echo $retorno;
    }

}