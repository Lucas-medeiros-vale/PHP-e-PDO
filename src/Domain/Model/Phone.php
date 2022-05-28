<?php


namespace PHP\Pdo\src\Domain\Model;

class Phone 
{

    private string $number;
    private string $areaCode;
    private ?int $id;

    public function __construct(?int $id, string $areaCode, string $number) 
    {
        $this->id = $id;
        $this->areaCode = $areaCode;
        $this->number = $number;
    }
    
    public function formattedPhone(): string 
    {
        return "($this->areaCode) $this->number";
    }
}
