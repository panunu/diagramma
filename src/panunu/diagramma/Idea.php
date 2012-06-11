<?php

namespace panunu\diagramma;

use Knp\Repository;

class Idea extends Repository
{
    public function getTableName()
    {
        return 'idea';
    }
}

