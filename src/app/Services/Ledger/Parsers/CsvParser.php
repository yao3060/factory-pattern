<?php

namespace App\Services\Ledger\Parsers;

use App\Services\Ledger\Transaction;

class CsvParser implements ParserInterface
{
    public function parse(string $line): Transaction
    {
        return new Transaction([]);
    }
}
