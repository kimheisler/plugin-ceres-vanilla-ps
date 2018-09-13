<?php

namespace CeresVanillaPS\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaPSItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresVanillaPS::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}