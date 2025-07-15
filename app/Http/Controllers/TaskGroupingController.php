<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskGroupingController extends Controller
{
    public function __invoke(Request $request, TaskService $taskService)
{
    $tasks = $request->input('tasks');

    $groupedTasks = $taskService->groupByStatus($tasks);

    return response()->json($groupedTasks);
}
}
