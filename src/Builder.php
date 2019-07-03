<?php

declare(strict_types=1);

namespace MetaRush\Lang;

class Builder extends Config
{

    public function build(): Lang
    {
        $utils = new Utils($this);

        // __NAMESPACE__ or fully qualified namespace is required for dynamic use
        $adapter = __NAMESPACE__ . '\Adapters\\' . $this->getAdapter();

        $adapter = new $adapter($this, $utils);

        return new Lang($adapter);
    }
}
