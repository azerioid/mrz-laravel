<?php

namespace ramil\mrz\Facade;

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
        return \ramil\mrz\MRZParser::class;
    }
}
