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

