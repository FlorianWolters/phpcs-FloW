<?php
/**
 * `FileExtensionIsPhpSniff.php`
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
 * This sniff checks that the file extension of a PHP file is `.php`.
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
class FloW_Sniffs_Files_FileExtensionIsPhpSniff
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
        // Make sure this is the first PHP open tag so we don't process the same
        // file twice.
        $previousOpenTag = $phpcsFile->findPrevious(
            T_OPEN_TAG, ($stackPtr - 1)
        );

        if (false === $previousOpenTag) {
            $fileName = $phpcsFile->getFileName();
            $dotPosition = strrpos($fileName, '.');
            $fileExtension = substr($fileName, $dotPosition);

            if ('.php' !== $fileExtension) {
                $errorMessage = 'File extension is invalid; expected ".php" but found "'
                    . $fileExtension . '"';
                $phpcsFile->addError($errorMessage, $stackPtr);
            }
        }
    }

}
