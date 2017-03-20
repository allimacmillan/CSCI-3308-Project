create table if not exists 'users' (
 'username' varchar(20) not null,
 'name' varchar(40) not null,
 'password' varchar(24) not null,
 'email' varchar(40) not null,
 primary key ('username')
)

create table if not exists 'availability' (
 'username' varchar(20) not null,
 'groupID' int(1) not null,
 'Monday' int(1) not null,
 'Tuesday' int(1) not null,
 'Wednesday' int(1) not null,
 'Thursday' int(1) not null,
 'Friday' int(1) not null,
 'Saturday' int(1) not null,
 'Sunday' int(1) not null,
)

insert into 'users' ('username', 'name', 'password', 'email') values
 (matthew, Matthew, csci, mabu6268@colorado.edu),
 (Alli, Alli, csci, alli@colorado.edu),
 (Sam, Sam, csci, sam@colorado.edu),
 (David, David, csci, david@colorado.edu),
 (Yifeng, Yifeng, csci, yifeng@colorado.edu);

insert into 'availability' ('username', 'groupID', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday') values
 (matthew, 1, 0, 0, 0, 0, 0, 0, 1),
 (Alli, 1, 0, 0, 0, 0, 0, 0, 1),
 (Sam, 1, 0, 0, 0, 0, 0, 0, 1),
 (David, 1, 0, 0, 0, 0, 0, 0, 1),
 (Yifeng, 1, 0, 0, 0, 0, 0, 0, 1);
