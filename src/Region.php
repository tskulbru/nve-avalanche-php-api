<?php
/**
 * This class defines the Region constants used by the api.
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

abstract class Region
{
    const ALTA                  = 6;
    const KAAFJORD              = 7;
    const TROMSOE               = 8;
    const BALSFJORD             = 9;
    const SENJA                 = 10;
    const LYNGSALPAN            = 11;
    const BARDU                 = 12;
    const HARSTAD               = 13;
    const NARVIK                = 14;
    const VESTERAALEN           = 15;
    const LOFOTEN               = 16;
    const TROLLHEIMEN           = 17;
    const ROMSDAL               = 18;
    const SUNNMOERE             = 19;
    const NORDFJORD             = 20;
    const FJORDANE              = 21;
    const SOGN                  = 22;
    const JOTUNHEIMEN           = 23;
    const VOSS                  = 24;
    const HALLINGSKARVET        = 25;
    const HEMSEDALFJELLA        = 26;
    const ROELDAL               = 27;
    const RAULAND               = 28;
    const TAMOKDALEN            = 29;

    public static $enums = array(
        self::ALTA                  => "Alta",
        self::KAAFJORD              => "Kåfjord",
        self::TROMSOE               => "Tromsø",
        self::BALSFJORD             => "Balsfjord",
        self::SENJA                 => "Senja",
        self::LYNGSALPAN            => "Lyngsalpan",
        self::BARDU                 => "Bardu",
        self::HARSTAD               => "Harstad",
        self::NARVIK                => "Narvik",
        self::VESTERAALEN           => "Vesterålen",
        self::LOFOTEN               => "Lofoten",
        self::TROLLHEIMEN           => "Trollheimen",
        self::ROMSDAL               => "Romsdal",
        self::SUNNMOERE             => "Sunnmøre",
        self::NORDFJORD             => "Nordfjord",
        self::FJORDANE              => "Fjordane",
        self::SOGN                  => "Sogn",
        self::JOTUNHEIMEN           => "Jotunheimen",
        self::VOSS                  => "Voss",
        self::HALLINGSKARVET        => "Hallingskarvet",
        self::HEMSEDALFJELLA        => "Hemsedalfjella",
        self::ROELDAL               => "Røldal",
        self::RAULAND               => "Rauland",
        self::TAMOKDALEN            => "Tamokdalen"
    );
}
