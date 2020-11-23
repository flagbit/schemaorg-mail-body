<?php

namespace Renderer;

interface RendererInterface
{
    /**
     * Render the value object to html
     *
     * @return string
     */
    public function render(): string;
}
