-- drop database team_final;
create database team_final;

use team_final;

create table Students(
studentID varchar(15) primary key not null,
fname varchar(50),
lname varchar(50),
contact varchar(15),
email varchar(75),
dob date,
yearGroup int(4),
grade int(4)
);

create table Department(
departmentID int(10) primary key not null,
departmentName varchar(50),
location varchar(50),
numberOfTeachers int(3)
);

create table Courses(
courseID varchar(20) primary key not null,
courseName varchar(50),
numOfStudents int(5)
);

create table Teachers(
teacherID varchar(15) primary key not null,
fname varchar(50),
lname varchar(50),
email varchar(75),
courseID varchar(20),
foreign key (courseID) references Courses(courseID),
departmentID int(10),
foreign key (departmentID) references Department(departmentID)
);

create table Bookings(
studentID varchar(15),
foreign key(studentID) references Students(studentID),
teacherID varchar(15),
foreign key(teacherID) references Teachers(teacherID),
courseID varchar(20),
foreign key(courseID) references Courses(courseID),
bookingDate date,
bookingTime time,
additionalComments varchar(200)
);
