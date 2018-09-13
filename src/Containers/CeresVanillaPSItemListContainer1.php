<?php

namespace CeresVanillaPS\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaPSItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresVanillaPS::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}