<?php
/**
 * PHP: Nelson Martell Utilities Library file
 *
 * Content:
 * - File to perform manual autoload. For non composer instalation, must be
 *   required at app initialization.
 *
 * Copyright © 2015 Nelson Martell (http://nelson6e65.github.io)
 *
 * Licensed under The MIT License (MIT)
 * For full copyright and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright 2015 Nelson Martell
 * @link      http://nelson6e65.github.io/php_utilities/
 * @since     v0.1.0
 * @license   http://www.opensource.org/licenses/mit-license.php The MIT License (MIT)
 * */

namespace NelsonMartell\Utilities\Internal;

const DS = DIRECTORY_SEPARATOR;

require_once __DIR__.DS.'src'.DS.'constants.php';
require_once __DIR__.DS.'src'.DS.'functions.php';
require_once __DIR__.DS.'config'.DS.'bootstrap.php';
require_once __DIR__.DS.'config'.DS.'autoloader.php';

spl_autoload_register('NelsonMartell\Utilities\Internal\autoload');
