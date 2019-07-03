<?php

declare(strict_types=1);

class BuilderTest extends \PHPUnit\Framework\TestCase
{

    public function testBuilder()
    {
        $lang = (new MetaRush\Lang\Builder())
            ->setAdapter('Yaml')
            ->build();

        $this->assertInstanceOf('\MetaRush\Lang\Lang', $lang);
    }
}
