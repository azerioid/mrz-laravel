<?php

namespace AZERIOID\MRZ\Facade;

use Illuminate\Support\Facades\Facade;


/**
 * Class MRZParser
 * @package ramil\mrz\Facade
 * @method static mixed parse(string $key)
 *
 * @see \ramil\mrz\Factory
 */


class MRZParser extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AZERIOID\MRZ\MRZParser::class;
    }
}
