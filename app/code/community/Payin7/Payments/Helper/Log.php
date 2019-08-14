<?php
/**
 * 2015-2016 Copyright (C) Payin7 S.L.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * DISCLAIMER
 *
 * Do not modify this file if you wish to upgrade the Payin7 module automatically in the future.
 *
 * @author    Payin7 S.L. <info@payin7.com>
 * @copyright 2015-2016 Payin7 S.L.
 * @license   http://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 */

class Payin7_Payments_Helper_Log extends Mage_Core_Helper_Abstract
{
    const MY_LOGFILE = 'payin7payments.log';

    public function logWarn($message = null)
    {
        Mage::log(
            $message,
            Zend_Log::WARN,
            self::MY_LOGFILE
        );
    }

    public function logError($message = null)
    {
        Mage::log(
            $message,
            Zend_Log::ERR,
            self::MY_LOGFILE
        );
    }

    public function logDebug($message = null)
    {
        Mage::log(
            $message,
            Zend_Log::DEBUG,
            self::MY_LOGFILE
        );
    }

    public function logInfo($message = null)
    {
        Mage::log(
            $message,
            Zend_Log::INFO,
            self::MY_LOGFILE
        );
    }

}
