drop database if exists ChefsBank;
create database ChefsBank;
use ChefsBank;

create table Chefs(
chefID int UNIQUE NOT NULL,
Fname varchar(100),
Lname varchar(100),
Gender enum("Male", "Female"),
Email varchar(100),
-- RecipeTitle varchar(100),--
-- RecipeDetails varchar(300),--
PRIMARY KEY(chefID)
);
insert into Chefs values (220,'Mateen','Andan','Male','mateenandan@gmail.com');
insert into Chefs values (221,'Steven','Attipoe','Male','stevenattipooe@gmail.com);
insert into Chefs values (222,'George','Debrah','Male','georged@gmail.com);
insert into Chefs values (223,'Emmanuella','Apreku','Female','sweetie@gmail.com);
insert into Chefs values (224,'Nii','Armah','Male','narmah@gmail.com');


create table Foods(
chefID int,
TypeID int,
NameOfFood varchar(100),
NameOfRecipe varchar(100),
Ingredients varchar(300),
Steps varchar(300),
FOREIGN KEY(TypeID) references FoodType(TypeID)
FOREIGN KEY(chefID) references Chefs(chefID)
);


insert into Foods values (1, 'Indomie Instant Noodles','Noodles','noodles','boil water, add indomie');
create table Branch(
BranchNo int UNIQUE NOT NULL,
Location varchar(100),
PRIMARY KEY(BranchNo)
);
-- insert into Branch values (110, 'Legon');
-- insert into Branch values (111, 'Dansoman');
-- insert into Branch values (112, 'Kumasi');
-- insert into Branch values (113, 'Accra');
-- insert into Branch values (114, 'Cape Coast');

select * from Foods;
/*queries
SELECT RecipeTitle FROM Chefs;
SELECT Fname,Lname FROM Chefs;
SELECT NameOfFood,TypeOfFood FROM Foods INNER JOIN FoodType ON FoodType.TypeID = Foods.TypeID;
SELECT Fname,Lname,Email FROM Chefs;

*/
