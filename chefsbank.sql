drop database if exists ChefsBank;
create database ChefsBank;
use ChefsBank;

create table Persons(
personID int UNIQUE NOT NULL,
Fname varchar(100),
Lname varchar(100),
Gender enum("Male", "Female"),
Email varchar(100),
PRIMARY KEY(personID)
);
insert into Persons values (220,'Mateen','Andan','Male','mateenandan@gmail.com');
insert into Persons values (221,'Steven','Attipoe','Male','stevenattipooe@gmail.com');
insert into Persons values (222, 'George', 'Debrah','Male','georged@gmail.com');
insert into Persons values (223,'Emmanuella','Apreku','Female','sweetie@gmail.com');
insert into Persons values (224,'Nii','Armah','Male','narmah@gmail.com');

create table Chefs(
chefID int UNIQUE NOT NULL,
personID int UNIQUE NOT NULL,
-- Fname varchar(100),
-- Lname varchar(100),
-- Gender enum("Male", "Female"),
-- Email varchar(100),
-- RecipeTitle varchar(100),--
-- RecipeDetails varchar(300),--
FOREIGN KEY(personID) references Persons(personID)
);
insert into Chefs values (20,220);
insert into Chefs values (21,221);
insert into Chefs values (22,222);
insert into Chefs values (23,223);
insert into Chefs values (24,224);



create table Foods(
chefID int,
TypeID int,
NameOfFood varchar(100),
NameOfRecipe varchar(100),
Ingredients varchar(300),
Steps varchar(300),
-- FOREIGN KEY(TypeID) references FoodType(TypeID)
FOREIGN KEY(chefID) references Chefs(chefID)
);

insert into Foods values (20,1, 'Ramen','Noodles','ingredients','kimci');
insert into Foods values (23,4, 'Indomie Instant Noodles','Noodles','ingredients','steps');
insert into Foods values (21,2, 'Chili Mac,Cheese','Chili Mac,Cheese','shredded cheese, beef(mince), chili powder, onions, garlic, bell pepper, coriander, beef stock, crushed tomato, macaroni pasta, salt, spices, olive/vegetable/sunflower oil','Saute garlic and onions in hot oil for two minutes to create the base. Add in beef, spices , and all other ingredients except the cheese until browned. Allow to cook for about 15 minutes on medium heat. Add salt and pepper to taste and stir in some cheese. Leave for 3 minutes. Spread remaining cheese and coriander on the surface and allow it to melt. Your meal is ready in 20 minutes!');                         
insert into Foods values (22,3, 'Chicken Alfredo Penne','Chicken Alfredo Penne','chicken breast, butter, penne pasta, shredded parmesan cheese, salt, minced garlic, flour, milk, fresh parsley, dried oregano, and basil.','In a pan over medium-high heat, melt butter, then add the chicken breast.
1.	Season with salt, pepper, oregano, and basil. Cook 8-10 minutes or until chicken is fully cooked. Remove from heat and set chicken aside. In the same pan over medium heat, melt butter and add the garlic. Cook until the garlic begins to soften.
2.	Add half of the flour to the garlic and butter, stirring until incorporated. Then add the rest of the flour and stir.
3.	Pour in the milk a little bit at a time, stirring well in between, until fully incorporated and sauce begins to thicken.
4.	Season with salt, pepper, oregano, and basil, and stir well to incorporate.
5.	Add parmesan cheese and stir until melted.
6.	Pour the sauce over cooked penne pasta, add the chicken, and mix well.
7.	Add parsley and extra parmesan. Mix well.
8.	Enjoy!
');
insert into Foods values (23,4, 'Mushroom Stroganoff','Mushroom Stroganoff','2 tablespoons olive oil, 1 medium yellow onion diced, 12 oz cremini mushroom(340 g) sliced, 3 cloves garlic,½ teaspoon dried thyme,¼ teaspoon pepper, ½ teaspoon salt,  ¼ cup dry white wine(60 mL), ½ tablespoon vegan worcestershire, ¼ cup flour(30 g), 2 cups vegetable broth(480 mL), 1 ½ cups almond milk(360 mL), 8 oz fusilli pasta(225 g), uncooked, fresh parsley, chopped, for serving, garnish','1.	In a large pot, heat 1 tablespoon of olive oil over medium heat. Once the oil begins to shimmer, add the onion, and cook for 3-4 minutes, until semi-translucent.
2.	Add the mushrooms and cook until most of the juices have evaporated.
3.	With your spoon, make a space in the centre of the pot. Drizzle in the remaining tablespoon of olive oil and add the garlic, thyme, pepper, and salt.
4.	Cook for 2-3 minutes, until fragrant. Then, add the white wine and vegan Worcestershire sauce and stir until incorporated.
5.	Add flour and stir until fully combined. Then add the vegetable broth, almond milk, and pasta, and stir until well-combined.
6.	Cover and increase the heat to medium-high. Let cook for 10-15 minutes, or until the liquid is creamy and pasta is cooked.
7.	Serve immediately, garnished with parsley.
');                          
                          
                          
                          
                          
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
