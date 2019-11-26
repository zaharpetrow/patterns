<?php

require_once __DIR__ . '/../../adapters/GooseAdapter.php';
require_once __DIR__ . '/AbstractGooseFactory.php';

class AdapterGooseFactory extends AbstractGooseFactory {

    public function createGooseAdapter() {
        return new GooseAdapter(new Goose());
    }

}
