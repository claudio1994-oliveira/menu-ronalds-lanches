<?php

namespace Claud\Menu\Controller;

class Menu implements InterfaceControladorRequisicao
{
    
	/**
	 */
	function processaRequisicao(): void 
    {
        require __DIR__ . '/../../view/menu.php';
	}
}

?>