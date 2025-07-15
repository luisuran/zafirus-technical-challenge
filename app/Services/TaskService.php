<?php

namespace App\Services;

use Illuminate\Support\Collection;

class TaskService
{
    /**
     * Group tasks by status
     */
    public function groupByStatus(array $tasks): array
    {
        return collect($tasks)
            ->groupBy('estado')
            ->map(fn(Collection $tasksByStatus) => $tasksByStatus->pluck('titulo'))
            ->toArray(); 
    }
}

