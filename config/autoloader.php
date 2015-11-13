<?php
namespace NelsonMartell\Utilities\Internal;

/**
 * Custom autoloader for non-composer installations.
 * This function only load classes under 'NelsonMartell\Utilities' namespace
 * and skips in any other case.
 *
 * @param string $class Class name (full cualified name).
 *
 * @return void
 */
function autoload($class)
{
    if ($class[0] == '\\') {
        $class = substr($class, 1);
    }

    $classArray = explode('\\', $class);

    if (count($classArray) < 3) {
        // Debe tener un mínimo de 3 partes.
        // 0: 'NelsonMartell' (ns vendor)
        // 1: 'Utilities' (ns paquete)
        // 2: (clase)
        return;
    }

    if ($classArray[0] == 'NelsonMartell') {
        unset($classArray[0]);
        if ($classArray[1] == 'Utility') {
            $classArray[1] = 'src'; // Sólo deja 'src'
        } else {
            // Is not a 'NelsonMartell\Utilities' namespace.
            return;
        }
    } else {
        // Is not a 'NelsonMartell' namespace.
        return;
    }

    $path = sprintf('%s'.DS.'%s.php', __DIR__, implode(DS, $classArray));

    if (is_file($path)) {
        require_once($path);
    } else {
        // throw new InvalidArgumentException("Error loading '$class' class. File '$path' is not present.");
    }
}
