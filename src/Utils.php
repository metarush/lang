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
    public function varSyntax(string $string): string
    {
        return $this->cfg->getOpenSyntax() . $string . $this->cfg->getCloseSyntax();
    }

    /**
     * Convert keys of array $vars to language variable syntax
     *
     * @param array $vars
     * @return array
     */
    public function varSyntaxKeys(array $vars): array
    {
        foreach ($vars as $k => $v)
            $array[$this->varSyntax($k)] = $v;

        return $array;
    }
}
