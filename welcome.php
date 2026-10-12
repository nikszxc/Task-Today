<section class="page-heading">
    <p class="eyebrow">YOUR DAILY OVERVIEW</p>
    <h1>Welcome</h1>
    <p class="muted"><?= esc($todayLabel) ?></p>
</section>

<section class="panel">
    <div class="panel-heading">
        <div>
            <p class="eyebrow">TODAY</p>
            <h2>Tasks for today</h2>
        </div>
        <span class="count-pill"><?= count($tasks) ?> <?= count($tasks) === 1 ? 'task' : 'tasks' ?></span>
    </div>

    <?php if ($tasks === []): ?>
        <p class="empty-state">There are no tasks scheduled for today.</p>
    <?php else: ?>
        <ul class="task-list">
            <?php foreach ($tasks as $task): ?>
                <li class="task-row">
                    <span class="task-dot" aria-hidden="true"></span>
                    <span class="task-title"><?= esc($task['title']) ?></span>
                    <span class="status-badge status-<?= esc(strtolower(str_replace(' ', '-', $task['status']))) ?>"><?= esc(ucfirst($task['status'])) ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</section>
