<?php

namespace App\Services\Ledger;

use App\Services\Ledger\Parsers\ParserInterface;
use SplFileObject;

class LedgerReader
{
    function __construct(private ParserInterface $parser)
    {
    }

    public function parse($filePath)
    {
        $reader = new SplFileObject($filePath);
        return $this->readTransactions($reader);
    }


    public function readTransactions($reader)
    {
        return 'results';
    }
}
