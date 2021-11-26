-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 11:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chefsbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `BranchNo` int(11) NOT NULL,
  `Location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `chefID` int(11) NOT NULL,
  `personID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`chefID`, `personID`) VALUES
(20, 220),
(21, 221),
(22, 222),
(23, 223),
(24, 224);

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `chefID` int(11) DEFAULT NULL,
  `TypeID` int(11) NOT NULL,
  `NameOfFood` varchar(100) DEFAULT NULL,
  `NameOfRecipe` varchar(100) DEFAULT NULL,
  `Ingredients` varchar(300) DEFAULT NULL,
  `Steps` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`chefID`, `TypeID`, `NameOfFood`, `NameOfRecipe`, `Ingredients`, `Steps`) VALUES
(20, 1, 'Ramen', 'Noodles', 'ingredients', 'kimci s'),
(23, 2, 'Indomie Instant Noodles', 'Noodles', 'ingredients', 'steps'),
(21, 3, 'Chili Mac,Cheese', 'Chili Mac,Cheese', 'shredded cheese, beef(mince), chili powder, onions, garlic, bell pepper, coriander, beef stock, crushed tomato, macaroni pasta, salt, spices, olive/vegetable/sunflower oil', 'Saute garlic and onions in hot oil for two minutes to create the base. Add in beef, spices , and all other ingredients except the cheese until browned. Allow to cook for about 15 minutes on medium heat. Add salt and pepper to taste and stir in some cheese. Leave for 3 minutes. Spread remaining chees'),
(22, 4, 'Chicken Alfredo Penne', 'Chicken Alfredo Penne', 'chicken breast, butter, penne pasta, shredded parmesan cheese, salt, minced garlic, flour, milk, fresh parsley, dried oregano, and basil.', 'In a pan over medium-high heat, melt butter, then add the chicken breast.\n1.	Season with salt, pepper, oregano, and basil. Cook 8-10 minutes or until chicken is fully cooked. Remove from heat and set chicken aside. In the same pan over medium heat, melt butter and add the garlic. Cook until the garl'),
(23, 5, 'Mushroom Stroganoff', 'Mushroom Stroganoff', '2 tablespoons olive oil, 1 medium yellow onion diced, 12 oz cremini mushroom(340 g) sliced, 3 cloves garlic,½ teaspoon dried thyme,¼ teaspoon pepper, ½ teaspoon salt,  ¼ cup dry white wine(60 mL), ½ tablespoon vegan worcestershire, ¼ cup flour(30 g), 2 cups vegetable broth(480 mL), 1 ½ cups almond m', '1.	In a large pot, heat 1 tablespoon of olive oil over medium heat. Once the oil begins to shimmer, add the onion, and cook for 3-4 minutes, until semi-translucent.\n2.	Add the mushrooms and cook until most of the juices have evaporated.\n3.	With your spoon, make a space in the centre of the pot. Driz'),
(NULL, 6, 'rice', NULL, NULL, 'boil rice\r\nadd water\r\ndone \r\neat the rice');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `ID` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`ID`, `user`, `Pass`) VALUES
(1, 'dave@gmail.com', 'Password1'),
(2, 'mateen@gmail.com', 'Password01');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `personID` int(11) NOT NULL,
  `Fname` varchar(100) DEFAULT NULL,
  `Lname` varchar(100) DEFAULT NULL,
  `Gender` enum('Male','Female') DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`personID`, `Fname`, `Lname`, `Gender`, `Email`) VALUES
(220, 'Mateen', 'Andan', 'Male', 'mateenandan@gmail.com'),
(221, 'Steven', 'Attipoe', 'Male', 'stevenattipooe@gmail.com'),
(222, 'George', 'Debrah', 'Male', 'georged@gmail.com'),
(223, 'Emmanuella', 'Apreku', 'Female', 'sweetie@gmail.com'),
(224, 'Nii', 'Armah', 'Male', 'narmah@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`BranchNo`),
  ADD UNIQUE KEY `BranchNo` (`BranchNo`);

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD UNIQUE KEY `chefID` (`chefID`),
  ADD UNIQUE KEY `personID` (`personID`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`TypeID`),
  ADD KEY `chefID` (`chefID`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`personID`),
  ADD UNIQUE KEY `personID` (`personID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `TypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chefs`
--
ALTER TABLE `chefs`
  ADD CONSTRAINT `chefs_ibfk_1` FOREIGN KEY (`personID`) REFERENCES `persons` (`personID`);

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `foods_ibfk_1` FOREIGN KEY (`chefID`) REFERENCES `chefs` (`chefID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
