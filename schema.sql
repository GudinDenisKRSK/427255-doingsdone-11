CREATE DATABASE doingsdone
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;

USE doingsdone;

create table project (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	project_name VARCHAR(128),
	user_id INT UNSIGNED NOT NULL
);

create table task (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	task_name VARCHAR(128) NOT NULL,
	create_at DATETIME DEFAULT NOW(),
	deadline_at DATETIME,
	file_task VARCHAR(128),
	project_id INT UNSIGNED NOT NULL,
	status TINYINT(1) DEFAULT 0
);

create table user (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name_user VARCHAR(128) NOT NULL,
	email VARCHAR(128) NOT NULL ,
	password VARCHAR(255) NOT NULL,
	register_at DATETIME NOT NULL DEFAULT NOW()
);

CREATE UNIQUE INDEX email ON User(email);
CREATE UNIQUE INDEX getProject ON Project(project_name,user_id);
	