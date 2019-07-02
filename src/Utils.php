<?php

declare(strict_types=1);

namespace MetaRush\Lang;

class Utils
{

    private $cfg;

    public function __construct(Config $cfg)
    {
        $this->cfg = $cfg;
    }

    /**
     * Convert $string to language variable syntax
     *
     * @param string $string
     * @return string
     */
    public function varSyntaxed(string $string): string
    {
        return $this->cfg->getOpenSyntax() . $string . $this->cfg->getCloseSyntax();
    }
}
