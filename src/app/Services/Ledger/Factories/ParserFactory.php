<?php

namespace App\Services\Ledger\Factories;

use App\Services\Ledger\Parsers\CsvParser;
use App\Services\Ledger\Parsers\RawParser;
use RuntimeException;

class ParserFactory
{

    public function make($format)
    {
        switch ($format):
            case 'csv':
                return new CsvParser;
            case 'raw':
                return new RawParser;
            default:
                throw new RuntimeException('format not support');

        endswitch;
    }
}
