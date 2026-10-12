<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Pages extends Controller
{
    protected $helpers = ['url'];

    public function welcome(): string
    {
        $today = date('Y-m-d');
        $tasks = (new TaskModel())->forDate($today);

        return $this->renderPage('welcome', 'Welcome', [
            'tasks'      => $tasks,
            'todayLabel' => date('l, F j, Y'),
        ]);
    }

    public function tasks(): string
    {
        $tasks = (new TaskModel())->orderedByDate();

        return $this->renderPage('tasks', 'Task List', [
            'tasks' => $tasks,
        ]);
    }

    public function profile(): string
    {
        $user = (new UserModel())->first();

        return $this->renderPage('profile', 'Profile', [
            'user' => $user,
        ]);
    }

    public function about(): string
    {
        return $this->renderPage('about', 'About');
    }

    private function renderPage(string $viewName, string $title, array $data = []): string
    {
        $viewData = array_merge([
            'title'      => $title,
            'activePage' => $viewName,
        ], $data);

        $viewData['content'] = view('pages/' . $viewName, $viewData);

        return view('layout', $viewData);
    }
}
