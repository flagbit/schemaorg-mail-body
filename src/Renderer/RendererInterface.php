<?php

namespace EinsUndEins\SchemaOrgMailBody\Renderer;

interface RendererInterface
{
    /**
     * Render the value object to html
     *
     * @return string
     */
    public function render(): string;
}
