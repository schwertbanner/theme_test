<?php

namespace theme_test\Containers;

use Plenty\Plugin\Templates\Twig;

class container
{
    public function call(Twig $twig):string
    {
        return $twig->render(theme_test::Theme);
    }
}
