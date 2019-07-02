<?php

declare(strict_types=1);

class UtilsTest extends \PHPUnit\Framework\TestCase
{

    private $cfg;
    private $utils;

    public function setUp(): void
    {
        $this->cfg = (new \MetaRush\Lang\Config)
            ->setLocale('en-US')
            ->setLocalePath(__DIR__ . '/sample/locales/');

        $this->utils = new \MetaRush\Lang\Utils($this->cfg);
    }

    public function testVarSyntaxed()
    {
        $var = 'foo';

        $varSyntaxed = $this->utils->varSyntaxed($var);
        $this->assertEquals('{{foo}}', $varSyntaxed);

        $this->cfg->setOpenSyntax('%');
        $this->cfg->setCloseSyntax('%');
        $varSyntaxed = $this->utils->varSyntaxed($var);
        $this->assertEquals('%foo%', $varSyntaxed);
    }
}
