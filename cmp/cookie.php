<?php
class Cookie
{
    private $type;
    private $availableTypes = ['имбирное', 'овсяное', 'шоколадное', 'с арахисом' ];

    public function setType($type)
    {
        if (in_array(mb_strtolower($type), array_map('mb_strtolower', $this->availableTypes))) {
            $this->type = $type;
        } else {
            $this->type = "Печенье '{$type}' нет в наличии.";
        }
    }

    public function getType()
    {
        return $this->type ?? '—';
    }

    public function getAvailableTypes()
    {
        return $this->availableTypes;
    }
}