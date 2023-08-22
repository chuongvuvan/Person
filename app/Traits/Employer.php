<?php

namespace App\Traits;

class Employer
{
    protected array $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function toArray(): array
    {
        return $this->data;
    }

    public function toJson(): bool|string
    {
        return json_encode($this->data);
    }

    public function __toString(): string
    {
        return "Employer: {$this->data['Name']}";
    }
}
