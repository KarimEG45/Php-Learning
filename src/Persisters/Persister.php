<?php

namespace Rubix\ML\Persisters;

use Rubix\ML\Encoding;
use Stringable;

/**
 * Persister
 *
 * @category    Machine Learning
 * @package     Rubix/ML
 * @author      Andrew DalPino
 */
interface Persister extends Stringable
{
    /**
     * Save an encoding.
     *
     * @param Encoding $encoding
     */
    public function save(Encoding $encoding) : void;

    /**
     * Load a persisted encoding.
     *
     * @return Encoding
     */
    public function load() : Encoding;
}
