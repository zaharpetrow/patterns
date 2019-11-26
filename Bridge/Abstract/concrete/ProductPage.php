<?php

require_once __DIR__ . '/../interface/Page.php';

class ProductPage extends Page {

    protected $product;

    public function __construct(Renderer $render, Product $product) {
        parent::__construct($render);
        $this->product = $product;
    }

    public function view(): string {
        return $this->render->renderParts([
                    $this->render->renderHeader(),
                    $this->render->renderTitle($this->product->getTitle()),
                    $this->render->renderTextBlock($this->product->getDescription()),
                    $this->render->renderImage($this->product->getImage()),
                    $this->render->renderLink("/cart/add/".$this->product->getId(), "Add to cart"),
                    $this->render->renderFooter()
        ]);
    }

}
