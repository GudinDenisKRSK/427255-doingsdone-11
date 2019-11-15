<?php
require_once('functions.php');
require_once('data.php');
$page_content = include_template('main.php', [
	'project_massive' => $project_massive,
	'tasks_info_mass' => $tasks_info_mass,
	'show_complete_tasks' => $show_complete_tasks,
]);
$layout_content = include_template('layout.php', [
	'content' => $page_content,
	'tasks_info_mass' => $tasks_info_mass,
	'title' => 'DoingsDone - Главная страница',
]);

print($layout_content);

?>
