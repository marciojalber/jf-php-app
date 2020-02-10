<?php

namespace App;

/**
 * Classe de definição de configurações de comportamento da aplicação.
 */
class App
{
    /**
     * Método para registrar os WebComponents.
     */
    public static function registerWebComponent( $tag, $js_name, $content )
    {
        return $content . N . "Vue.component( '{$tag}', $js_name );";
    }
}
