<?
function getCountTask($tasks_info_mass, $project) {
  $count_task = 0;
  foreach ($tasks_info_mass as $task) {
    if ($task['project_name'] == $project) {
      $count_task++;
   }
  }
  return $count_task;
}
function convertStatusTask ($status) {
	if ($status == 0)
		$result = 'Нет';
	else $result = 'Да';

	return $result;
	}
function convertDateTask ($time) {
	$time = strtotime($time);

	return date('d.m.Y',$time);
	}
	
function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}
function getCountHourOfDeadLine ($date_complite) {
$datenow = time();
$date_complite=strtotime($date_complite);    
$dateofdeadline = floor((($datenow-$date_complite))/3600); 
return $dateofdeadline;
} 
?>
