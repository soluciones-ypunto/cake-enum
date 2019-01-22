<?php
/**
 * Created by javier
 * Date: 20/12/18
 * Time: 12:59
 */

namespace Ypunto\Enum\Enum;

interface EnumInterface
{
    /**
     * @return string[]
     */
    public static function getOptions();

    /**
     * @param string $key
     *
     * @return string|boolean
     */
    public static function getOption($key);

    /**
     * @return string[]
     */
    public static function getValues();
}