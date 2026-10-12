<section class="page-heading">
    <p class="eyebrow">ACCOUNT</p>
    <h1>Profile</h1>
    <p class="muted">The demo user stored in the users table.</p>
</section>

<?php if ($user === null): ?>
    <section class="panel">
        <p class="empty-state">No profile was found. Import the demo user from database/seed.sql.</p>
    </section>
<?php else: ?>
    <section class="profile-card">
        <div class="avatar" aria-hidden="true"><?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?></div>
        <div>
            <p class="eyebrow">DEMO USER</p>
            <h2><?= esc($user['full_name']) ?></h2>
            <dl class="profile-details">
                <div><dt>Username</dt><dd><?= esc($user['username']) ?></dd></div>
                <div><dt>Email</dt><dd><?= esc($user['email']) ?></dd></div>
                <div><dt>Created</dt><dd><?= esc(date('M j, Y', strtotime($user['created_at']))) ?></dd></div>
            </dl>
        </div>
    </section>
<?php endif; ?>
