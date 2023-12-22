<?php

namespace App\Config;

use Illuminate\Contracts\Support\Arrayable;

class ServicesConfig implements Arrayable
{
    private array $parameters = [];

    public static function make(): self
    {
        return new self();
    }

    public function service(array $parameters): self
    {
        $this->parameters = array_merge($this->parameters, $parameters);
        return $this;
    }

    /**
     * @return array<string, mixed[]>
     */
    public function toArray(): array
    {
        return $this->parameters;
    }
}
