create table users (
	user_id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
	user_name varchar(30) UNIQUE NOT NULL,
	user_email varchar(40) UNIQUE NOT NULL,
	user_pass varchar(255) UNIQUE NOT NULL
);


CREATE TABLE coins(
    coin int NOT NULL,
    user_id int references users(user_id) NOT NULL
);


insert into users (user_name, user_email, user_pass) values ('chris','soldo@chris.com','123456');

insert into coins (coin,user_id) values (1,1);




