<?php

namespace MetaRush\Lang\Adapters;

interface AdapterInterface
{

    /**
     * Get one language string based from $key and optionally supply an array of $replacePairs
     *
     * @param string $key
     * @param array $replacePairs key value pair of language vars and values
     * @return int
     */
    public function get(string $key, ?array $replacePairs): string;

    /**
     * Get all langauge strings
     *
     * @return array
     */
    public function all(): array;
}
