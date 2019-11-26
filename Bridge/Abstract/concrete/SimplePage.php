<?php

require_once __DIR__ . '/../interface/Page.php';

class SimplePage extends Page {

    protected $title;
    protected $content;

    public function __construct(Renderer $render, string $title, string $content) {
        parent::__construct($render);
        $this->title   = $title;
        $this->content = $content;
    }

    public function view(): string {
        return $this->render->renderParts([
                    $this->render->renderHeader(),
                    $this->render->renderTitle($this->title),
                    $this->render->renderTextBlock($this->content),
                    $this->render->renderFooter()
        ]);
    }

}
