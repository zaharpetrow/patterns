<?php

abstract class Page {

    protected $render;

    public function __construct(Renderer $render) {
        $this->render = $render;
    }

    public function changeRenderer(Renderer $render): void {
        $this->render = $render;
    }

    abstract public function view(): string;
}
