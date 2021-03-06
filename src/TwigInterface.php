<?php declare(strict_types=1);
namespace Invia\CMI;

use Twig\Environment as Twig;

interface TwigInterface
{
    /**
     * @param Twig $twig
     */
    public function setTwig(Twig $twig): void;
}
