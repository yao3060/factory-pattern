<?php

namespace App\Services\Ledger\Parsers;

use App\Services\Ledger\Transaction;

interface ParserInterface
{
    public function parse(string $line): Transaction;
}
