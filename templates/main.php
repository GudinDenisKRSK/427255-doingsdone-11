<div class="content">
            <section class="content__side">
                <h2 class="content__side-heading">Проекты</h2>
                <nav class="main-navigation">
                    <ul class="main-navigation__list">
                    <?php foreach ($project_massive as $project): ?>
                        <li class="main-navigation__list-item">
                            <a class="main-navigation__list-item-link" href="#"><?=htmlspecialchars($project['project_name']); ?> </a>
                            <span class="main-navigation__list-item-count"> <?=htmlspecialchars(getCountTask($tasks_info_mass, $project['project_name']));?></span>
                        </li>
                    </ul>
                    <?php endforeach;?>
                </nav>

                <a class="button button--transparent button--plus content__side-button"
                   href="pages/form-project.html" target="project_add">Добавить проект</a>
            </section>

            <main class="content__main">
                <h2 class="content__main-heading">Список задач</h2>

                <form class="search-form" action="index.php" method="post" autocomplete="off">
                    <input class="search-form__input" type="text" name="" value="" placeholder="Поиск по задачам">

                    <input class="search-form__submit" type="submit" name="" value="Искать">
                </form>

                <div class="tasks-controls">
                    <nav class="tasks-switch">
                        <a href="/" class="tasks-switch__item tasks-switch__item--active">Все задачи</a>
                        <a href="/" class="tasks-switch__item">Повестка дня</a>
                        <a href="/" class="tasks-switch__item">Завтра</a>
                        <a href="/" class="tasks-switch__item">Просроченные</a>
                    </nav>

                    <label class="checkbox">
                        <!--добавить сюда атрибут "checked", если переменная $show_complete_tasks равна единице-->
                        <input class="checkbox__input visually-hidden show_completed" type="checkbox" 
                        <?=($show_complete_tasks == 1) ? 'checked' : '' ?> >
                        <span class="checkbox__text">Показывать выполненные</span>
                    </label>
                </div>

                <table class="tasks">
                  <?php foreach ($tasks_info_mass as $key => $value): ?>
                    <?php if (($value['status']== 1)&($show_complete_tasks) == 1):?>                   
                      <tr class="tasks__item task task--completed <?=(getCountHourOfDeadLine($value['deadline_at']))<=24 ? '' :'task--important' ?>">
                        <td class="task__select">
                            <label class="checkbox task__checkbox">
                                <input class="checkbox__input visually-hidden task__checkbox" type="checkbox" value="1">
                                <span class="checkbox__text"> <?=htmlspecialchars($value['task_name']);?></span>
                            </label>
                        </td>
                          <td class="task__select">
                            <label class="checkbox task__checkbox">
                                <input class="checkbox__input visually-hidden task__checkbox" type="checkbox" value="1">
                                <span class="checkbox__text"><?=htmlspecialchars(convertDateTask($value['deadline_at']));?></span>
                            </label>
                        </td>
                          <td class="task__select">
                            <label class="checkbox task__checkbox">
                                <input class="checkbox__input visually-hidden task__checkbox" type="checkbox" value="1">
                                <span class="checkbox__text"><?=htmlspecialchars($value['project_name']);?></span>
                            </label>
                        </td>
                          <td class="task__select">
                            <label class="checkbox task__checkbox">
                                <input class="checkbox__input visually-hidden task__checkbox" type="checkbox" value="1">
                                <span class="checkbox__text"><?=htmlspecialchars( $value['status'] == 1 ? 'Да' : 'Нет' );?></span>
                            </label>
                        </td>
                	<?php elseif ($value['status']==0): ?>                           
                 	  <tr class="tasks__item task <?=(getCountHourOfDeadLine($value['deadline_at']))<=24 ? '' :'task--important' ?> ">
                        <td class="task__select">
                            <label class="checkbox task__checkbox">
                                <input class="checkbox__input visually-hidden task__checkbox" type="checkbox" value="1">
                                <span class="checkbox__text"> <?=htmlspecialchars($value['task_name']);?> </span>
                            </label>
                        </td>
                          <td class="task__select">
                            <label class="checkbox task__checkbox">
                                <input class="checkbox__input visually-hidden task__checkbox" type="checkbox" value="1">
                                <span class="checkbox__text"><?=htmlspecialchars(convertDateTask($value['deadline_at']));?></span>
                            </label>
                        </td>
                          <td class="task__select">
                            <label class="checkbox task__checkbox">
                                <input class="checkbox__input visually-hidden task__checkbox" type="checkbox" value="1">
                                <span class="checkbox__text"><?=htmlspecialchars($value['project_name']);?></span>
                            </label>
                        </td>
                          <td class="task__select">
                            <label class="checkbox task__checkbox">
                                <input class="checkbox__input visually-hidden task__checkbox" type="checkbox" value="1">
                                <span class="checkbox__text"><?=htmlspecialchars($value['status'] == 1 ? 'Да' : 'Нет');?></span>
                            </label>
                        </td> 
                      </tr>
                	<?php endif;?>
                <?php endforeach;?>
                    <!--показывать следующий тег <tr/>, если переменная $show_complete_tasks равна единице-->
                </table>
            </main>
        </div>
    </div>
</div>
