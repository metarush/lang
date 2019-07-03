<?php

declare(strict_types=1);

namespace MetaRush\Lang;

class Lang implements Adapters\AdapterInterface
{

    private $adapter;

    public function __construct(Adapters\AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * @inheritDoc
     */
    public function get(string $key, ?array $replacePairs = null): string
    {
        return $this->adapter->get($key, $replacePairs);
    }

    /**
     * @inheritDoc
     */
    public function all(): array
    {
        return $this->adapter->all();
    }
}
