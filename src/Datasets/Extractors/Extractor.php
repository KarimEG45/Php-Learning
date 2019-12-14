<?php

namespace Rubix\ML\Datasets\Extractors;

use Rubix\ML\Datasets\Labeled;
use Rubix\ML\Datasets\Unlabeled;

interface Extractor
{
    /**
     * Extract and build an unlabeled dataset object from source.
     *
     * @param int $offset
     * @param int $limit
     * @return \Rubix\ML\Datasets\Unlabeled
     */
    public function extract(int $offset = 0, int $limit = PHP_INT_MAX) : Unlabeled;

    /**
     * Extract and build a labeled dataset object from source.
     *
     * @param int $offset
     * @param int $limit
     * @return \Rubix\ML\Datasets\Labeled
     */
    public function extractWithLabels(int $offset = 0, int $limit = PHP_INT_MAX) : Labeled;
}
