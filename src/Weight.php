<?php

namespace AsianCoder\UnitConverter;

class Weight
{
    private float $kilogramas;

    public static function formKilograms( float $kilogramas): self{
        return new static($kilogramas);
    }

    public function __construct(float $kilogramas)
    {
        $this->kilogramas = $kilogramas;
    }

    public function toLbs(): float {
        return $this->kilogramas * 2.204623;
    }
}
