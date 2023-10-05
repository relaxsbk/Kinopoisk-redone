<?php

namespace Kernel\View;

use Kernel\Exceptions\ViewNotFoundException;
use Kernel\Session\Session;
use Kernel\Session\SessionInterface;

class View implements ViewInterface
{
public function __construct(
    private SessionInterface $session,
)
{
}

    public function page(string $name): void
    {

        $viewPath = APP_PATH . "/views/pages/$name.php";

        if (! file_exists($viewPath)) {
            throw new ViewNotFoundException("View $name not found");
        }

        extract($this->defaultData());

        include_once $viewPath;
    }

    public function component(string $name): void
    {
        $components = APP_PATH . "/views/components/$name.php";

        if (! file_exists($components)) {
            echo "Component $name not found" ;
            return;
        }

        include_once $components;
    }

    private function defaultData(): array
    {
        return [
            'view' => $this,
            'session' => $this->session
        ];
    }
}