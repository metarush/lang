<?php

declare(strict_types=1);

namespace MetaRush\Lang\Adapters;

class Yaml implements AdapterInterface
{

    private $cfg;
    private $utils;

    public function __construct(\MetaRush\Lang\Config $cfg, \MetaRush\Lang\Utils $utils)
    {
        $this->cfg = $cfg;
        $this->utils = $utils;
    }

    /**
     * @inheritDoc
     */
    public function one(string $key, ?array $replacePairs = null): string
    {
        $langs = $this->all();

        if (!$replacePairs)
            return $langs[$key];

        $replacePairs = $this->utils->varSyntaxKeys($replacePairs);
        return \strtr($langs[$key], $replacePairs);
    }

    /**
     * @inheritDoc
     */
    public function all(): array
    {
        $locale = $this->cfg->getLocalePath() . $this->cfg->getLocale() . '.yaml';

        return \Symfony\Component\Yaml\Yaml::parseFile($locale);
    }
}
