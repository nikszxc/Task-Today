<section class="page-heading">
    <p class="eyebrow">YOUR SCHEDULE</p>
    <h1>Task List</h1>
    <p class="muted">Every task, arranged by date.</p>
</section>

<section class="panel">
    <div class="panel-heading">
        <div>
            <p class="eyebrow">ALL DATES</p>
            <h2>All tasks</h2>
        </div>
        <span class="count-pill"><?= count($tasks) ?> <?= count($tasks) === 1 ? 'task' : 'tasks' ?></span>
    </div>

    <?php if ($tasks === []): ?>
        <p class="empty-state">No tasks were found.</p>
    <?php else: ?>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Task</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td class="task-title"><?= esc($task['title']) ?></td>
                            <td><?= esc(date('M j, Y', strtotime($task['task_date']))) ?></td>
                            <td><span class="status-badge status-<?= esc(strtolower(str_replace(' ', '-', $task['status']))) ?>"><?= esc(ucfirst($task['status'])) ?></span></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</section>
