<?php

namespace Butschster\Head\MetaTags;

use Illuminate\Contracts\Support\Htmlable;

interface TagInterface extends Htmlable
{
    /**
     * @return string
     */
    public function placement(): string;

    /**
     * @return array
     */
    public function getAttributes(): array;
}