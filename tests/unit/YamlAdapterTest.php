<?php

declare(strict_types=1);

class YamlAdapterTest extends \PHPUnit\Framework\TestCase
{

    private $lang;

    public function setUp(): void
    {
        $cfg = (new \MetaRush\Lang\Config)
            ->setLocale('en-US')
            ->setLocalePath(__DIR__ . '/sample/locales/');

        $utils = new \MetaRush\Lang\Utils($cfg);

        $adapter = new \MetaRush\Lang\Adapters\Yaml($cfg, $utils);

        $this->lang = new \MetaRush\Lang\Lang($adapter);
    }

    public function testOne()
    {
        $lang = $this->lang->one('foo');

        $this->assertEquals('hello world', $lang);
    }

    public function testOneReplacePairs()
    {
        $pairs = [
            'size'   => 'small',
            'color'  => 'white',
            'animal' => 'cat',
        ];

        $expected = 'the small white cat jumped';

        $lang = $this->lang->one('bar', $pairs);

        $this->assertEquals($expected, $lang);
    }

    public function testAll()
    {
        $langs = $this->lang->all();

        $this->assertCount(2, $langs);

        $this->assertEquals($langs['foo'], 'hello world');
    }
}
