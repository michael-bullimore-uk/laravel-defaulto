<?php

declare(strict_types=1);

namespace MIBU\Defaulto\Tests;

use Illuminate\Database\Eloquent\Relations\Relation;

class EloquentRelationReqMorphMap extends TestCase
{
    public function test_eloquent_relation_req_morph_map()
    {
        $this->assertTrue(Relation::requiresMorphMap());
    }
}
