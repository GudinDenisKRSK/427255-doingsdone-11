# Выбираем базу данных doingsdone, где будут выполняться наши запросы
use doingsdone;
# Создаем нового пользователя
INSERT INTO user SET name_user = 'admin', email = 'admin@doingsdone.ru', password = 'ololo';
# Создаем нового пользователя
INSERT INTO user SET name_user = 'user', email = 'user@doingsdone.ru', password = '123456';
#Добавляем проект и привязываем его к конкретному пользователю
INSERT INTO project SET project_name = 'Входящие', user_id = '1';
#Добавляем проект и привязываем его к конкретному пользователю
INSERT INTO project SET project_name = 'Учеба', user_id = '1';
#Добавляем проект и привязываем его к конкретному пользователю
INSERT INTO project SET project_name = 'Работа', user_id = '2';
#Добавляем проект и привязываем его к конкретному пользователю
INSERT INTO project SET project_name = 'Домашние дела', user_id = '1';
#Добавляем проект и привязываем его к конкретному пользователю
INSERT INTO project SET project_name = 'Авто', user_id = '2';
#Добавляем задачу и привязываем её к определенному проекту
INSERT INTO task SET task_name = 'Собеседование в IT компании', deadline_at = '01.12.2017', file_task = 'Task.psd', project_id = '3', status = '0';
#Добавляем задачу и привязываем её к определенному проекту
INSERT INTO task SET task_name = 'Выполнить тестовое задание', deadline_at = '25.12.2019', file_task = 'Task.psd', project_id = '3', status = '0';
#Добавляем задачу и привязываем её к определенному проекту
INSERT INTO task SET task_name = 'Сделать задание первого раздела', deadline_at = '21.12.2019', file_task = 'Task.psd', project_id = '2', status = '1';
#Добавляем задачу и привязываем её к определенному проекту
INSERT INTO task SET task_name = 'Встреча с другом', deadline_at = '22.12.2019', file_task = 'Task.psd', project_id = '1', status = '0';
#Добавляем задачу и привязываем её к определенному проекту
INSERT INTO task SET task_name = 'Купить корм для кота',  file_task = 'Task.psd', project_id = '4', status = '0';
#Добавляем задачу и привязываем её к определенному проекту
INSERT INTO task SET task_name = 'Заказать пиццу',  file_task = 'Task.psd', project_id = '4', status = '0';
# Выбираем все проекты пользователя с индетификатором 1
SELECT project_name FROM project WHERE user_id = '1';
#Выбираем все задачи принадлежащие проекту с идентификатором 1
SELECT task_name FROM task WHERE project_id = '1';
#Обновляем статус "Выполнения проекта" задачи "Встреча с другом"
UPDATE task SET status = 1 WHERE task_name = 'Встреча с другом';
#Обновляем имя задачи по её идентификационному номеру
UPDATE task SET task_name = 'Помыть полы' WHERE id = 6;