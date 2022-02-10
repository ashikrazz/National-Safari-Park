-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 08:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `national_safari_park_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `animal_id` int(13) NOT NULL,
  `animal_title` varchar(500) NOT NULL,
  `category_Id` int(13) NOT NULL,
  `animal_image` varchar(515) NOT NULL,
  `animal_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`animal_id`, `animal_title`, `category_Id`, `animal_image`, `animal_details`) VALUES
(1, 'Royal Bengal Tiger', 4, 'Royal Bengal Tiger.jpg', 'The Bengal Tiger (Panthera tigris tigris) is recognized as the national animal of Bangladesh and is renowned as the Royal Bengal Tiger. Its body is rich yellow to reddish ochre in color with vertically arranged black stripes, more pronounced towards the rump and thighs; its underparts are whitish.'),
(5, 'Lion', 4, 'Lion.jpg', ' Lion is a large wild animal of cat family and it is one of the strongest animals of jungle. Lion is called as “King of Jungle” because of its huge size and hunting capacity. Lion has a strong body with four legs and a tail with very strong paws.'),
(6, 'Bald Eagle', 2, 'Bald Eagle.jpg', 'Clearly recognized by its white head, brown body, and hooked yellow beak, the bald eagle has been the national emblem of the United States of America since 1782. Living near a constant source of water, bald eagles feast on fish, ducks, snakes and turtles. They will also eat rabbits, muskrats, and dead animals.'),
(7, 'Azureus Cichlid', 1, 'Azureus Cichlid.jpg', 'Copadichromis azureus is a species of haplochromine cichlid. It is endemic to Lake Malawi where it is found in the country of Malawi.'),
(8, 'American Alligator', 5, 'American Alligator.jpg', 'Alligators have a long, rounded snout that has upward facing nostrils at the end; this allows breathing to occur while the rest of the body is underwater. The young have bright yellow stripes on the tail; adults have dark stripes on the tail.'),
(9, 'American Crocodile', 5, 'American Crocodile.jpg', 'The American crocodile has a large lizard-like body with four short legs and a long muscular tail. Their hides are rough and scaled. Juvenile American crocodiles are dark olive brown with darker cross-bands on tail and body, while adults are uniformly brown with darker cross-bands on tail.'),
(10, 'King Cobra', 5, 'King Cobra.jpg', 'The king cobra is the largest venomous snake in the world. Despite its large size and fearsome reputation, the king cobra is not aggressive and will avoid confrontation when possible. When threatened or cornered, it raises itself up to a height of nearly one-third of its length, which may be as tall as a person.'),
(11, 'Blue and Gold Macaw', 2, 'Blue and Gold Macaw.jpg', 'Macaws are brilliantly-colored, neotropical parrots. They are intelligent, social birds that communicate with each other through loud squawks and screams. Long, flexible toes help the macaw hold onto branches and manipulate objects. The macaw uses its strong beak as both a nutcracker and a ‘third foot’ for climbing.');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_Id` int(13) NOT NULL,
  `category_Name` varchar(255) NOT NULL,
  `category_Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_Id`, `category_Name`, `category_Description`) VALUES
(1, 'Amphibians & Fish', 'Amphibians are small vertebrates that need water, or a moist environment, to survive. The species in this group include frogs, toads, salamanders, and newts. All can breathe and absorb water through their very thin skin. Amphibians also have special skin glands that produce useful proteins.\r\nFish are aquatic vertebrate animals that have gills but lack limbs with digits, like fingers or toes. Recall that vertebrates are animals with internal backbones. Most fish are streamlined in their general body form. The word fish is used to refer to an individual fish or to a group of fish of the same species.'),
(2, 'Birds', 'Any warm-blooded vertebrate of the class Aves, having a body covered with feathers, forelimbs modified into wings, scaly legs, a beak, and no teeth, and bearing young in a hard-shelled egg. a fowl or game bird.'),
(3, 'Invertebrates', 'About Invertebrates. Invertebrates are animals without a backbone or bony skeleton. They range in size from microscopic mites and almost invisible flies to giant squid with soccer-ball-size eyes. This is by far the largest group in the animal kingdom: 97 percent of all animals are invertebrates.'),
(4, 'Mammals', 'Mammal, (class Mammalia), any member of the group of vertebrate animals in which the young are nourished with milk from special mammary glands of the mother. The mammalian lower jaw is hinged directly to the skull, instead of through a separate bone (the quadrate) as in all other vertebrates.'),
(5, 'Reptiles', 'Reptiles are air-breathing, cold-blooded vertebrates that have scaly bodies rather than hair or feathers; most reptile species are egg-laying, though certain “squamates” — lizards, snakes and worm-lizards — give birth to live young.');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(13) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_description` text NOT NULL,
  `event_image` varchar(300) NOT NULL,
  `event_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_description`, `event_image`, `event_date`) VALUES
(1, 'Zoo Keeper', 'Zookeepers are concerned with the welfare of animals kept in zoos, wildlife parks, aquariums and other animal attractions.', 'Zoo Keeper.jpg', '2021-09-10'),
(2, 'Tiger Road Experience', 'Help endangered Sumatran Tigers by taking urgent action. Get the Facts. Protecting Forests. How To Help. Sign The Petition. Fight For Climate. Real Change. Make A Donation. Add Your Name. Join Our Mailing List. Types: Protecting Rainforests, Protecting Forest Animals.', 'Tiger Road Experience.jpg', '2021-09-18'),
(3, 'Feed the Elephant', 'Spending time with the six Asian elephants who live in Elephant Lands at the National Safari Park will inspire you to take action on behalf of elephants in range countries. Asian elephants live in some of the most densely human-populated regions of the world, which puts them in frequent and sometimes deadly conflict with people.', 'Feed the Elephant.jpg', '2021-09-29'),
(4, 'Talk to Our Blue and Gold Macaw', 'The blue-and-yellow macaw (Ara ararauna), also known as the blue-and-gold macaw, is a large South American parrot with mostly blue top parts and light orange underparts, with gradient hues of green on top of its head. It is a member of the large group of neotropical parrots known as macaws.', 'Talk to Our Blue and Gold Macaw.jpg', '2021-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(13) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `postal_address` text NOT NULL,
  `post_code` int(15) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `package_id` int(13) NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `customer_name`, `email`, `postal_address`, `post_code`, `gender`, `package_id`, `total_price`) VALUES
(8, 'Ashikur Rahman', 'ashikurrahman@gmail.com', 'Kuliarchar Bazar,  Kuliarchar, Kishoregonj', 2340, 'Male', 3, 270),
(9, 'Nirob Ahmed', 'nirobahmed@gmail.com', 'Narayanganj Sadar, Narayanganj', 1400, 'Male', 4, 595),
(10, 'Bablu Islam', 'babluislam@gmail.com', 'Dhanmondi 32, Dhaka', 1209, 'Male', 5, 585),
(11, 'Shakil Rahman', 'shakilrahman@gmail.com', 'Allardarga, Kushtia', 7042, 'Male', 4, 595);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_packages`
--

CREATE TABLE `ticket_packages` (
  `package_id` int(13) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_details` text NOT NULL,
  `package_price` int(100) NOT NULL,
  `discount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket_packages`
--

INSERT INTO `ticket_packages` (`package_id`, `package_name`, `package_details`, `package_price`, `discount`) VALUES
(3, 'Individuals', 'In Individuals package include Core Safari Park and Safari Kingdom for One Person Only.', 300, 10),
(4, 'Families', 'In Families package includes Core Safari Park and Safari Kingdom for  4 Adult members and 3 Children members only.', 700, 15),
(5, 'Educational Institute', 'This package includes Core Safari Park and Safari Kingdom for  a group of students from education establishment. This package allow maximum 200 people.', 650, 10),
(6, 'Private Organization', 'This package includes Core Safari Park and Safari Kingdom for a group of people from any Private Organization. This package allow maximum 200 people.', 1200, 15),
(7, 'Government Officials', 'This package includes Core Safari Park and Safari Kingdom for a group of people from any Government Organization. This package allow maximum 200 people.', 730, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(13) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'viewer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`, `phone_number`, `address`, `user_type`) VALUES
(1, 'Rafiu Alam Raktim', 'raktim@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '+8801789574531', 'Badda, Dhaka', 'Admin'),
(2, 'Fahmida Mumu', 'fahmida@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '+8801697852147', 'Dhanmondi, Dhaka', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`animal_id`),
  ADD KEY `fk_1` (`category_Id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_Id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `fk_2` (`package_id`);

--
-- Indexes for table `ticket_packages`
--
ALTER TABLE `ticket_packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `animal_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_Id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ticket_packages`
--
ALTER TABLE `ticket_packages`
  MODIFY `package_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`category_Id`) REFERENCES `categories` (`category_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `fk_2` FOREIGN KEY (`package_id`) REFERENCES `ticket_packages` (`package_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
