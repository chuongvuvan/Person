<?php

namespace App\Traits;

class Candidate
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
        return "Candidate: {$this->data['First Name']} {$this->data['Last Name']}";
    }
}
