create table user(
  email varchar(50) not null,
  password varchar(50) not null,
  fname varchar(50) not null,
  lname varchar(50) not null,
  street varchar(50) not null,
  suburb varchar(50) not null,
  postcode varchar(10) not null,
  phoneNumber varchar(20) not null,
  
  primary key(email)
);

create table car(
  email varchar(50) not null,
  car_type varchar(10) not null,
  primary key(email, car_type),
  foreign key(email) references user(email)
);

create table booking(
  email varchar(50) not null,
  car_type VARCHAR(10) not null,
  service_option tinyint not null,
  service_time datetime not null,
  service_desc varchar(256),
  primary key(service_time),
  foreign key (email) references user(email)
);

create table adminuser(
	username varchar(20) not null,
	password varchar(50) not null,
	address varchar(50) not null,
	
	primary key(username)
);

insert into booking values('mp878@example.com', 'Hatchback', 1, '2019-10-12 14:00', 'test');
select service_time from booking where service_time >= '2019-10-10' and service_time < '2019-10-17';

insert into adminuser values('admin', '1bbd886460827015e5d605ed44252251', '80 Clarence St, Brunswick East, VIC 3057');