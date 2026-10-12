<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title) ?> · Tasks for Today</title>
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <a class="brand" href="<?= site_url('/') ?>">
            <span class="brand-mark">T</span>
            <span>Tasks for Today</span>
        </a>
        <nav class="main-nav" aria-label="Main navigation">
            <a class="<?= $activePage === 'welcome' ? 'is-active' : '' ?>" href="<?= site_url('/') ?>">Welcome</a>
            <a class="<?= $activePage === 'tasks' ? 'is-active' : '' ?>" href="<?= site_url('tasks') ?>">Task List</a>
            <a class="<?= $activePage === 'profile' ? 'is-active' : '' ?>" href="<?= site_url('profile') ?>">Profile</a>
            <a class="<?= $activePage === 'about' ? 'is-active' : '' ?>" href="<?= site_url('about') ?>">About</a>
        </nav>
    </header>

    <main class="page-shell">
        <?= $content ?>
    </main>

    <footer class="site-footer">
        <span>Tasks for Today Management System</span>
        <span>CodeIgniter 4 lab project</span>
    </footer>
</body>
</html>
