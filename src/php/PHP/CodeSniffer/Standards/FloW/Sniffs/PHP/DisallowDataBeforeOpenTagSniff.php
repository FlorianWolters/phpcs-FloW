<?php
/**
 * `DisallowDataBeforeOpenTagSniff.php`
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
 * @author    Florian Wolters <florian.wolters.85@gmail.com>
 * @copyright 2012 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt GNU LGPL
 * @version   GIT: $Id
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 * @link      http://github.com/FlorianWolters/phpcs-FloW
 */

declare(encoding = 'UTF-8');

/**
 * This sniff prohibits the use of data before the PHP opening tag `<?php`.
 *
 * An example of data before the opening tag is:
 *
 * <code>
 * <!-- This is a data before the PHP opening tag, which is prohibited. -->
 * <?php
 * </code>
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Florian Wolters <florian.wolters.85@gmail.com>
 * @copyright 2012 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt GNU LGPL
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 * @link      http://github.com/FlorianWolters/phpcs-FloW
 */
class FloW_Sniffs_PHP_DisallowDataBeforeOpenTagSniff
    implements PHP_CodeSniffer_Sniff
{

    /**
     * Returns the token types that this sniff is interested in.
     *
     * @return array The token types.
     */
    public function register()
    {
        return array(T_OPEN_TAG);
    }

    /**
     * Processes the tokens that this sniff is interested in.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file where the token was
     *                                        found.
     * @param int                  $stackPtr  The position in the stack where
     *                                        the token was found.
     *
     * @return void
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        if (0 !== $stackPtr) {
            $errorMessage = 'No data may precede the open tag in a PHP file';
            $violationCode = 'NotAllowed';
            $phpcsFile->addError(
                $errorMessage, ($stackPtr - 1), $violationCode
            );
        }
    }

}
