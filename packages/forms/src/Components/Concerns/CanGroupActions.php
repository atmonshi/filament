<?php

namespace Filament\Forms\Components\Concerns;

use Closure;

trait CanGroupActions
{
    protected bool | Closure $isGroupedActions = false;

    public function groupedActions(bool | Closure $condition = true): static
    {
        $this->isGroupedActions = $condition;

        return $this;
    }

    public function isActionsGrouped(): bool
    {
        return (bool) $this->evaluate($this->isGroupedActions);
    }
}
