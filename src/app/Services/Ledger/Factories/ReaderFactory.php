<?php

namespace App\Services\Ledger\Factories;

use App\Services\Ledger\LedgerReader;

class LedgerFactory
{
    private $parserFactory;

    public function __construct(ParserFactory $parserFactory)
    {
        $this->parserFactory = $parserFactory;
    }

    public function make($format): LedgerReader
    {
        return new LedgerReader($this->parserFactory->make($format));
    }
}
