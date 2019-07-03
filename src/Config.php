<?php

declare(strict_types=1);

namespace MetaRush\Lang;

class Config
{

    /**
     *
     * @var string
     */
    private $locale;

    /**
     *
     * @var string
     */
    private $localePath;

    /**
     *
     * @var string
     */
    private $openSyntax = '{{';

    /**
     *
     * @var string
     */
    private $closeSyntax = '}}';

    /**
     *
     * @var string
     */
    private $adapter = 'Yaml';

    public function getCloseSyntax(): string
    {
        return $this->closeSyntax;
    }

    public function setCloseSyntax(string $closeSyntax)
    {
        $this->closeSyntax = $closeSyntax;
        return $this;
    }

    public function getOpenSyntax(): string
    {
        return $this->openSyntax;
    }

    public function setOpenSyntax(string $openSyntax)
    {
        $this->openSyntax = $openSyntax;
        return $this;
    }

    public function getLocalePath(): string
    {
        return $this->localePath;
    }

    public function setLocalePath(string $localePath)
    {
        $this->localePath = $localePath;
        return $this;
    }

    public function getLocale(): string
    {
        return $this->locale;
    }

    public function setLocale(string $locale)
    {
        $this->locale = $locale;
        return $this;
    }

    public function getAdapter(): string
    {
        return $this->adapter;
    }

    public function setAdapter(string $adapter)
    {
        $this->adapter = $adapter;
        return $this;
    }
}
