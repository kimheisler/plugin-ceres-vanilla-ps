<?php

namespace CeresVanillaPS\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaPSContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresVanillaPS::Stylesheet');
    }
}