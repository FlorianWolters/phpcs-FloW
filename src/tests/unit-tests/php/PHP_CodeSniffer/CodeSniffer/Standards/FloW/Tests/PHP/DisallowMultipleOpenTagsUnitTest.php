<?php
/**
 * `DisallowMultipleOpenTagsUnitTest.php`
 *
 * This file is part of phpcs-FloW.
 *
 * phpcs-FloW is free software: you can redistribute it and/or modify it under
 * the terms of the GNU Lesser General Public License as published by the Free
 * Software Foundation, either version 3 of the License, or (at your option) any
 * later version.
 *
 * phpcs-FloW is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Lesser General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with phpcs-FloW.  If not, see http://gnu.org/licenses/lgpl.txt.
 *
 * PHP version 5.4
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Florian Wolters <florian.wolters.85@googlemail.com>
 * @copyright 2012 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt GNU LGPL
 * @version   GIT: $Id
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 * @link      http://github.com/FlorianWolters/phpcs-FloW
 */

declare(encoding = 'UTF-8');

/**
 * Test class for {@link FloW_Sniffs_PHP_DisallowMultipleOpenTagsSniff}.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Florian Wolters <florian.wolters.85@googlemail.com>
 * @copyright 2012 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt GNU LGPL
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 * @link      http://github.com/FlorianWolters/phpcs-FloW
 */
class FloW_Tests_PHP_DisallowMultipleOpenTagsUnitTest
    extends AbstractSniffUnitTest
{

    /**
     * Returns the lines where errors should occur.
     *
     * @return array The key of the array should represent the line number and
     *               the value should represent the number of errors that should
     *               occur on that line.
     */
    public function getErrorList()
    {
        return array(3 => 1);
    }

    /**
     * Returns the lines where warnings should occur.
     *
     * @return array The key of the array should represent the line number and
     *               the value should represent the number of errors that should
     *               occur on that line.
     */
    public function getWarningList()
    {
        return array();
    }

}
