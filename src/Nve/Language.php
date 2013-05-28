<?php
/**
 * This class defines the language constants used by the api.
 *
 * @category  API
 * @package   Nve
 * @author    Torstein S. Skulbru <serrghi@gmail.com>
 * @copyright 2013 Torstein S. Skulbru
 * @license   http://opensource.org/licenses/BSD-2-Clause The BSD 2-Clause License
 * @version   0.1
 * @link      http://www.stubit.no
 */
namespace Nve;

abstract class Language
{
    const NORWEGIAN = 1;
    const ENGLISH   = 2;

    public static $enums = array(
        self::NORWEGIAN => "Norwegian",
        self::ENGLISH => "English"
    );
}
