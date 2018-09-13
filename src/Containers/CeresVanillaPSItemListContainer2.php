<?php

namespace CeresVanillaPS\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaPSItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresVanillaPS::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}