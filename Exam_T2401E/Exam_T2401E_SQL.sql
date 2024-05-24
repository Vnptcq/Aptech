create database _ExamSQL_

use _ExamSQL_

--1.Create Table
create table Teachers (
	TeacherID int primary key identity(1,1),
	FirstName varchar(25) not null,
	LastName varchar(25) not null,
	Subject varchar(25)
);

create table Classes (
	ClassID int primary key identity(1,1),
	ClassName varchar(10) not null,
	TeacherID int not null,
	CONSTRAINT FK_Teacher FOREIGN KEY (TeacherID) REFERENCES Teachers(TeacherID)
);

create table Students (
	StudentID int primary key identity(1,1),
	FirstName varchar(25) not null,
	LastName varchar(25) not null,
	ClassID int not null,
	BirthDate date not null,
	CONSTRAINT FK_Class FOREIGN KEY (ClassID) REFERENCES Classes(ClassID),
);

drop table Students
drop table Classes
drop table Teachers

--2.More Data
--select * from Teachers
insert into Teachers(FirstName,LastName,Subject) values
('Le','A','Math'),
('Le','B','Phys'),
('Le','C','Chem')


--select * from Classes
insert into Classes(ClassName,TeacherID) values
('A1',1),
('B1',2),
('B2',2),
('C1',3),
('C2',3)



--select * from Students
insert into Students(FirstName,LastName,ClassID,BirthDate)values
('Vu','Dinh Quy',1,'2003-10-11'),
('Mai','Duc Hong Anh',1,'2002-12-14'),
('Tran','Duc Thuan',1,'2005-2-28'),
('Le','Duc Anh',1,'2001-12-08'),
('Phan','Tien Anh',1,'2004-1-24'),
('Dang','Minh Duc',2,'2005-12-15'),
('Vo','Van Luong',2,'1996-7-10'),
('Vy','K',3,'2002-11-17'),
('Vu','D',3,'1974-10-2'),
('Dinh','N',3,'1976-9-7')


--3.Write a SQL query to display a list of all students with class name and teacher in charge.
 select s.FirstName as FirstName,s.LastName as LastName,c.ClassName as NameOfClasses,t.LastName as NameOfTeachers from Students s,Classes c,Teachers t
 where s.ClassID=c.ClassID and c.TeacherID=t.TeacherID;

--4.Write a SQL query to display students with birth dates from 2000 onwards.
select * from Students where year(BirthDate) < 2000;

--5.Write an SQL query to display all students with class name and teacher in charge, sorted by student name.
Select s.*,c.ClassName,t.Firstname,t.Lastname from Students s
Join Classes c on c.ClassID=s.ClassID
join Teachers t on t.TeacherID=c.TeacherID;

--6.Update the name of the student whose StudentID is 3 to "John Doe".
 update Students set LastName = 'John Doe' where StudentID=3;

 --7.Delete students whose StudentID is 7.
 delete from Students where StudentID = 7;

 --8.Create a stored procedure named GetStudentsByClassAndSubject that takes ClassID and Subject, and returns a list of students belonging to that class and subject.
 create procedure GetStudentsByClassAndSubject @p_ClassID int ,@p_Subject varchar(30)
as
    select s.StudentID, s.Firstname, s.Lastname, s.Birthdate, c.ClassName, t.Firstname as TeacherFirstname, t.Lastname as TeacherLastname, t.Subject
    from Students s
    join Classes c on s.ClassID = c.ClassID
    join Teachers t on c.TeacherID = t.TeacherID
    where s.ClassID = @p_ClassID AND t.Subject = @p_Subject

--9.Create a view named StudentsWithClassAndTeacher that displays information about students along with the class name and teacher in charge.
create view StudentsWithClassAndTeacher as
select
    s.StudentID,
    s.Firstname as StudentFirstname,
    s.Lastname as StudentLastname,
    s.Birthdate,
    c.ClassName,
    t.Firstname as TeacherFirstname,
    t.Lastname as TeacherLastname,
    t.Subject
from Students s
join Classes c on s.ClassID = c.ClassID
join Teachers t on c.TeacherID = t.TeacherID;
