<?
function getCountTask($tasks_info_mass, $project) {
  $count_task = 0;
  foreach ($tasks_info_mass as $task => $value) {
    if ($value['categories'] == $project) {
      $count_task++;
   }
  }
  return $count_task;
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
?>