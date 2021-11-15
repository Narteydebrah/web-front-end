drop database if exists ChefsBank;
create database ChefsBank;
use ChefsBank;

create table Staff(
StaffID int UNIQUE NOT NULL,
Fname varchar(100),
Lname varchar(100),
Gender enum("Male", "Female"),
Email varchar(100),
PRIMARY KEY(StaffID)
);

create table Chefs(
ChefID int,
RecipeProvided varchar(100),
FOREIGN KEY(ChefID) references Staff(StaffID)
);

create table Foods(
TypeID int,
NameOfFood varchar(100),
Price DECIMAL(6,2),
NameOfRecipe varchar(100),
Ingredients varchar(300),
Steps varchar(300),
FOREIGN KEY(TypeID) references FoodType(DietID)
);

create table FoodType(
DietID int,
TypeID int UNIQUE NOT NULL,
TypeOfFood varchar(100),
PRIMARY KEY(TypeID),
FOREIGN KEY(DietID) references Diet(DietID)
);

create table Branch(
BranchNo int UNIQUE NOT NULL,
Location varchar(100),
PRIMARY KEY(BranchNo)
);