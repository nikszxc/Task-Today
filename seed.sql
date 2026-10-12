USE tasks_today;

SET time_zone = '+08:00';

-- This lab seed resets the sample tables before adding the required records.
TRUNCATE TABLE tasks;
TRUNCATE TABLE users;

INSERT INTO tasks (title, status, task_date, created_at) VALUES
    ('Review class notes', 'completed', CURRENT_DATE, NOW()),
    ('Finish the task system lab', 'pending', CURRENT_DATE, NOW()),
    ('Write today''s study reflection', 'pending', CURRENT_DATE, NOW()),
    ('Organize project files', 'pending', DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY), NOW()),
    ('Review database concepts', 'completed', DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY), NOW()),
    ('Practice SQL queries', 'pending', DATE_SUB(CURRENT_DATE, INTERVAL 2 DAY), NOW()),
    ('Update the weekly study plan', 'completed', DATE_SUB(CURRENT_DATE, INTERVAL 2 DAY), NOW()),
    ('Prepare materials for tomorrow', 'pending', DATE_ADD(CURRENT_DATE, INTERVAL 1 DAY), NOW());

INSERT INTO users (username, full_name, email, created_at) VALUES
    ('demo', 'Demo User', 'demo@example.com', NOW());
