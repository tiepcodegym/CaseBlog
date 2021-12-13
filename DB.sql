CREATE DATABASE  `demo-mvc-full` COLLATE `utf8_unicode_ci`;
use `demo-mvc-full`;

CREATE TABLE users(
                      id int(11) not null primary key auto_increment,
                      name varchar(255),
                      email varchar(255) unique not null,
                      password varchar(255),
                      birthday date,
                      country varchar(255)
);
create table `posts`(
                        id int (11) auto_increment primary key ,
                        title varchar(255),
                        content text (1000),
                        post_time timestamp default current_timestamp,
                        user_id int (11),
                        foreign key (user_id) references users(id) on delete cascade
);