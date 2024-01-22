-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 05:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petadoption`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `regarding` text DEFAULT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `regarding`, `subject`, `message`, `created_at`, `status`) VALUES
(1, 'hritika naik', 'hritika@appmonks.com', '07045221551', 'aa', 'aa', 'aa', '2023-05-15 08:38:22', 'Pending'),
(2, 'hritika naik', 'hritika@appmonks.com', '07045221551', 'aa', 'aa', 'aa', '2023-05-15 08:43:17', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `interested_parent`
--

CREATE TABLE `interested_parent` (
  `name` text NOT NULL,
  `id` int(255) NOT NULL,
  `phone` text NOT NULL,
  `age` text NOT NULL,
  `profession` text NOT NULL,
  `city` text NOT NULL,
  `address` text NOT NULL,
  `family_member` int(255) NOT NULL,
  `allergy` text NOT NULL,
  `experience` text NOT NULL,
  `present_pet` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interested_parent`
--

INSERT INTO `interested_parent` (`name`, `id`, `phone`, `age`, `profession`, `city`, `address`, `family_member`, `allergy`, `experience`, `present_pet`, `email`) VALUES
('hritika naik', 1, '', '21', '0', 'Navi Mumbai', 'seawoood', 4, 'no', 'no', '', 'hritika@appmonks.com'),
('hritika naik', 2, '', '21', '0', 'Navi Mumbai', 'seawoood', 4, 'no', 'no', '', 'kadampriyanka405@gmail.com'),
('hritika naik', 3, '', '21', '0', 'Navi Mumbai', 'seawoood', 4, 'no', 'no', '', 'kadampriyanka405@gmail.com'),
('hritika naik', 4, '07045221551', '21', 'student', 'Navi Mumbai', 'seawoood', 4, 'no', 'no', 'qqqq', 'hritika@appmonks.com'),
('hritika naik', 5, '07045221551', '21', 'student', 'Navi Mumbai', 'seawoood', 4, 'no', 'no', 'qqqq', 'hritika@appmonks.com');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `vaccinated` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `adopted` enum('yes','no') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `name`, `type`, `size`, `about`, `gender`, `vaccinated`, `img`, `adopted`) VALUES
(1, 'Mocha', 'Dog', 'Small', ' Pug & Affenpinscher Mix ', 'Female', 'Yes', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/48100346/1/?bust=1591093605&width=720', 'no'),
(2, 'Issa', 'Dog', 'Medium', ' Affenpinscher ', 'Female', 'Yes', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/62730311/1/?bust=1681640853&width=300', 'no'),
(3, 'Byron', 'Cat', 'Small', 'kitten, Domestic Short Hair', 'Male', 'Yes', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/48105713/1/?bust=1591006850&width=720', 'no'),
(4, 'Mac', 'Dog', 'Medium', 'Adult,  GOOD IN A HOME WITH\r\nOther dogs, children. ', 'Male', 'Yes', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/62639627/1/?bust=1681467379&width=720', 'no'),
(5, 'Sansa', 'Cat', 'Large', 'HEALTH\r\nVaccinations up to date, spayed / neutered.', 'Female', 'Yes', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/61914411/4/?bust=1681068300&width=720', 'no'),
(6, 'Nemo', 'Cat', 'Small', 'HEALTH\r\nVaccinations up to date, spayed / neutered.', 'Male', 'Yes', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/55064014/1/?bust=1681067630&width=720', 'yes'),
(7, 'Blizzard', 'Other', 'Small', ' Rabbit <br>CHARACTERISTICS\r\nAthletic, Spunky, Loves to dig in blankets, Loves to run', 'Male', 'Yes', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/59296865/1/?bust=1672374686&width=720', 'no'),
(8, 'Toddy', 'Dog', 'Small', ' \r\nGolden Retriever <br>CHARACTERISTICS\r\n\r\nNeeds Loving Adopter\r\nGood with Dogs\r\nGood with Cats and kids', 'Male', 'Yes', 'https://images.squarespace-cdn.com/content/v1/59011f233a0411586aaa3546/1494533013736-CQIAGJQHWYYBRPFUFA6T/1.png', 'no'),
(9, 'Spickey', 'Dog', 'Big', 'Indian pariah dog\r\nNeeds Loving Adopter\r\nGood with Dogs\r\nGood with Cats and kids\r\nIt is a cross between Indian Spitz and Indian Paraiah.', 'Female', 'Yes', 'https://brendid.com/wp-content/uploads/2015/11/Healthy-Homemade-Dog-Treats-13.jpg', 'no'),
(10, 'Mowgli', 'Dog', 'Big', '\r\nIndian Spitz\r\nVery playful and independent, gets along with female dogs', 'Male', 'Yes', 'https://www.rd.com/wp-content/uploads/2021/03/GettyImages-1061611562-e1617043580882.jpg', 'no'),
(11, 'Sky', 'Dog', 'Big', '\r\nPoodle\r\nThey are very friendly and i have one female and one male puppy.', 'Male', 'Yes', 'https://media.karousell.com/media/photos/profiles/2022/05/26/_1653524812_0ab4d3c8.jpg', 'no'),
(12, 'Oreo', 'Cat', 'Small', 'American Shorthair', 'Male', 'Yes', 'https://www.peta.org/wp-content/uploads/2020/09/oreo3-602x452.jpeg', 'no'),
(13, 'Pepa', 'Cat', 'Small', 'persian kitten.\r\nPure persian kitten Dilute calico 4-5months old Playfull Active Tripple coat fur Rare color Ash grey black and white mixed', 'Male', 'Yes', 'https://images.olx.com.pk/thumbnails/342619926-240x180.jpeg', 'yes'),
(14, 'Kami Junior', 'Cat', 'Small', 'Bengal\r\nHe eats rice curd , fruity part of tomato, egg white(cooked), cat food(whiskas), meat(cooked)(small quantity).', 'Male', 'Yes', 'https://images.saymedia-content.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cq_auto:eco%2Cw_1200/MTk2ODQ5ODc1OTE1MTIyMzA2/bengalleopardcat.png', 'no'),
(15, 'Lefty', 'Other', 'Small', 'Lefty is an older gentleman who prefers to be around children over adults in a home. He enjoys talking and laughing, and he gets excited when fun music is playing. Lefty is still settling in here and getting used to a routine. He would do best in a home t', 'Male', 'Yes', 'https://cdn.rescuegroups.org/6685/pictures/animals/18978/18978395/92419926.jpg', 'yes'),
(16, 'Lefty', 'Other', 'Small', 'Lionhead Mix\r\nHello I’m Beatrice! I was found with 55 other buns abandoned outside. While she prefers to approach you, than to be approached, she loves hopping on the couch and asking for pets.', 'Female', 'Yes', 'https://www.indianahrs.org/RabbitPhotos/4481_65e87e69-0252-417b-8a2e-082dda169f53.png', 'no'),
(17, 'Shadow – Indie Puppy', 'Dog', 'Small', 'Want someone to cuddle all day long.\r\nIntroducing Shadow she loves to be around humans, sleep on your lap and extreme good with cats.\r\nShe was found with some bruises and wounds on her body, they are healing well now.', 'Female', 'Yes', 'https://adopt.pets-us.in/wp-content/uploads/2022/01/Shadow-Puppy-Adoption-Mumbai-Pets-and-us-1.jpg', 'no'),
(18, 'Muffin Labrador', 'Dog', 'LARGE', 'A very healthy and playful dog.\r\nOwner passed away and children are living separately so difficult to manage single-handedly', 'Female', 'Yes', 'https://adopt.pets-us.in/wp-content/uploads/2023/03/muffin-labrador-adoption-dog-1.jpg', 'no'),
(19, 'Naaz – Indie Dog', 'Dog', 'MEDIUM', 'Beautiful girl, Naaz, of 06 months definitely has faced the burnt of her gender!\r\nNaaz has been rescued from a place where they took all advantage of her being a “female”.\r\nFor all that the girl has endured, she definitely deserves your support in terms o', 'Female', 'Yes', 'https://adopt.pets-us.in/wp-content/uploads/2022/01/Naaz-Indie-dog-kalyan-adoption-pets-us-4.jpeg', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `img` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `phone`, `email`, `message`, `img`, `created_at`) VALUES
(1, 'Hritika Naik', '', 'hrit@gmail.com', 'I am very happy to adopt Olivia. I was fortunate enough to find her on AdoptHere.', 'https://akm-img-a-in.tosshub.com/sites/btmt/images/stories//Newstaffpics/bt_70-71r-3-mos_090419060322.jpg', '2023-04-21 10:34:12'),
(2, 'Hritika Naik', '', 'hrit@gmail.com', 'We adopted Tatze and Felix as kittens, thanks to Rita Del Rey, who rescued them from a feral colony on the North Fork. They have become famous on Facebook because they are so cute together that we are often posting pictures and videos of them. They are very sweet and give us lots of laughs!', 'https://www.arfhamptons.org/wp-content/uploads/2015/04/Pola-Rapaport-and-cats-150x150.jpg', '2023-04-24 10:34:12'),
(3, 'Hritika Naik', '', 'hrit@gmail.com', 'Sally is one of the best things that has ever happened to me. No matter what, she immediately puts me in a good mood when I get home. Having a dog from Adopt-Here is pure happiness, it’s just so great.', 'https://www.arfhamptons.org/wp-content/uploads/2015/04/davidrattiner-4-150x150.jpg', '2023-04-24 10:34:12'),
(4, 'Hritika Naik', '', 'hrit@gmail.com', 'We love him! Our boys (7 and 4) are taking great care of ‘kitty. We wanted to share a photo of Andrew happily living in our home and his!', 'https://www.arfhamptons.org/wp-content/uploads/2015/04/galarza-family-6-150x150.jpg', '2023-04-24 10:34:12'),
(5, 'hritika naik', '07045221551', 'hritikan232@gmail.com', 'qqqqq', '', '2023-04-24 15:58:25'),
(6, 'hritika naik', '07045221551', 'hritika@appmonks.com', '123456', '', '2023-05-15 08:04:16'),
(7, 'hritika naik', '07045221551', 'hritika@appmonks.com', '123456\r\n', '', '2023-05-15 08:04:53'),
(8, 'hritika naik', '07045221551', 'hritika@appmonks.com', 'hello\r\n', '', '2023-05-15 08:07:48'),
(9, 'hritika naik', '07045221551', 'hritika@appmonks.com', 'hello\r\n', '', '2023-05-15 08:09:00'),
(10, 'hritika naik', '07045221551', 'hritika@appmonks.com', 'pets adoption\r\n', '', '2023-05-15 08:13:16'),
(11, 'hritika naik', '07045221551', 'hritika@appmonks.com', '123456\r\n', '', '2023-05-15 08:14:20'),
(12, 'hritika naik', '07045221551', 'hritika@appmonks.com', 'hello\r\n', '', '2023-05-15 08:21:56'),
(13, 'hritika naik', '07045221551', 'hritika@appmonks.com', 'hello\r\n', '', '2023-05-15 08:22:38'),
(14, 'hritika naik', '07045221551', 'hritika@appmonks.com', 'hello\r\n', '', '2023-05-15 08:22:43'),
(15, 'hritika naik', '07045221551', 'hritika@appmonks.com', 'pets adoption\r\n', '', '2023-05-15 08:23:07'),
(16, 'hritika naik', '07045221551', 'hritika@appmonks.com', 'hello', '', '2023-05-15 08:23:25'),
(17, 'hritika naik', '07045221551', 'hritika@appmonks.com', 'hello', '', '2023-05-15 08:24:02'),
(19, '', '', '', '', '', '2023-05-15 08:51:57'),
(21, 'hritika naik', '07045221551', 'hnaik19cs@student.mes.ac.in', 'pet adoption', '', '2023-05-15 10:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Hritika Naik', 'hrit@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-04-16 12:07:43'),
(2, 'pppp', 'ppp@g', '698d51a19d8a121ce581499d7b701668', '2023-05-14 16:44:35'),
(3, 'pppp', 'appp@g', '698d51a19d8a121ce581499d7b701668', '2023-05-14 16:52:58'),
(4, 'Ofiyan', 'ofi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-05-15 08:01:19'),
(5, 'abc', 'kadampriya@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-05-15 10:07:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interested_parent`
--
ALTER TABLE `interested_parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `interested_parent`
--
ALTER TABLE `interested_parent`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
