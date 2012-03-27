<?php

abstract class Component {

    private $components;
    protected $beforeRenderTag = "";
    protected $afterRenderTag = "";

    public function __construct($beforeRenderTag="", $afterRenderTag="") {
        $this->components = array();
        $this->beforeRenderTag = $beforeRenderTag;
        $this->afterRenderTag = $afterRenderTag;
    }

    public function render() {
        $r = $this->beforeRenderTag;
        foreach ($this->components as $component) {
            $r .= $component->render();
        }
        $r .= $this->afterRenderTag;
        return $r;
    }

    public function add($component) {

        if (is_string($component))
            $component = new \Html\Text($component);

        if (is_array($component)) {
            foreach ($component as $item) {
                $this->add($item);
            }
        }
        else
        {
            $this->components[] = $component;
        }
    }

}