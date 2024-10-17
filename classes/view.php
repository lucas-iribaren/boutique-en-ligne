<?php

class View
{
    private $template;

    public function __construct($template)
    {
        $this->template = $template;
    }

    public function render() // Passer les variables dans les parenthèse pour afficher les objets
    {
        $template = $this->template;

        ob_start();
        include(VIEW . $template . '.php');
        $contentPage = ob_get_clean();
        
        include_once(VIEW . 'layout.php');
    }
    
}

?>