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

    public function testVarSyntax()
    {
        $var = 'foo';

        $varSyntax = $this->utils->varSyntax($var);
        $this->assertEquals('{{foo}}', $varSyntax);

        $this->cfg->setOpenSyntax('%');
        $this->cfg->setCloseSyntax('%');
        $varSyntax = $this->utils->varSyntax($var);
        $this->assertEquals('%foo%', $varSyntax);
    }

    public function testVarSyntaxKeys()
    {
        $vars = [
            'foo' => 'bar',
            'baz' => 'qux',
        ];

        $varSyntaxKeys = $this->utils->varSyntaxKeys($vars);
        $this->assertEquals($varSyntaxKeys['{{foo}}'], 'bar');
        $this->assertEquals($varSyntaxKeys['{{baz}}'], 'qux');

        $this->cfg->setOpenSyntax('%');
        $this->cfg->setCloseSyntax('%');
        $varSyntaxKeys = $this->utils->varSyntaxKeys($vars);
        $this->assertEquals($varSyntaxKeys['%foo%'], 'bar');
    }
}
