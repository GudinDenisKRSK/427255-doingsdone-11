<?php
require_once('functions.php');
require_once('data.php');
$con = mysqli_connect("localhost", "root", "","doingsdone");
mysqli_set_charset($con, "utf8");
if ($con == false) {
print("Ошибка подключения: " . mysqli_connect_error());
}
else {
$sql_get_project = "SELECT project_name FROM project WHERE user_id = '1';";
$sql_get_tasks = "SELECT task_name,deadline_at,file_task,status,project_name FROM task,project where project_id = project.id;";
$result = mysqli_query($con,$sql_get_project);
$project_massive = mysqli_fetch_all($result,MYSQLI_ASSOC);
$result = mysqli_query($con,$sql_get_tasks);
$tasks_info_mass = mysqli_fetch_all($result,MYSQLI_ASSOC);
// выполнение запросов
} 
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
