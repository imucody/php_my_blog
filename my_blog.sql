-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2024 at 03:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Web Development'),
(2, 'Coding'),
(3, 'Hobbies'),
(4, 'Reading'),
(5, 'MY Freetime'),
(6, 'gaming'),
(7, 'python');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `description`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Title3oeeee', 'images/h9.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, ut placeat. Rem dicta accusamus est modi voluptatibus repellat, optio asperiores aut voluptas minima consectetur adipisci, quasi culpa. Nulla ipsa velit deleniti quisquam consectetur dolore itaque sapiente nam, id expedita, inventore delectus? Corporis possimus tempore quam. Rerum modi aliquam quos delectus molestiae quam sint animi dolores. Fuga alias corrupti odit minus laudantium. Molestiae a veritatis impedit officia eaque commodi voluptas quaerat assumenda mollitia nobis fugit, voluptate magni iure facilis voluptates illum cumque nesciunt provident inventore accusantium sunt quas laborum. Unde eveniet minima aut est animi voluptas sapiente dolor beatae voluptatibus in, temporibus doloribus velit iste laboriosam? Est deleniti tempore quas perferendis facere illum veniam officiis mollitia fuga dolor magni quia repudiandae dicta et, corrupti obcaecati aperiam doloribus sapiente! Cupiditate odit in velit voluptas a aliquam, earum aperiam, mollitia quam exercitationem asperiores deserunt eveniet aliquid, nobis culpa incidunt atque. Corporis, eius ipsum!ooorrrrr', 1, 1, '2024-07-11 13:12:30', '2024-07-17 07:49:58'),
(3, 'title5', 'images/j8.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, ut placeat. Rem dicta accusamus est modi voluptatibus repellat, optio asperiores aut voluptas minima consectetur adipisci, quasi culpa. Nulla ipsa velit deleniti quisquam consectetur dolore itaque sapiente nam, id expedita, inventore delectus? Corporis possimus tempore quam. Rerum modi aliquam quos delectus molestiae quam sint animi dolores. Fuga alias corrupti odit minus laudantium. Molestiae a veritatis impedit officia eaque commodi voluptas quaerat assumenda mollitia nobis fugit, voluptate magni iure facilis voluptates illum cumque nesciunt provident inventore accusantium sunt quas laborum. Unde eveniet minima aut est animi voluptas sapiente dolor beatae voluptatibus in, temporibus doloribus velit iste laboriosam? Est deleniti tempore quas perferendis facere illum veniam officiis mollitia fuga dolor magni quia repudiandae dicta et, corrupti obcaecati aperiam doloribus sapiente! Cupiditate odit in velit voluptas a aliquam, earum aperiam, mollitia quam exercitationem asperiores deserunt eveniet aliquid, nobis culpa incidunt atque. Corporis, eius ipsum!', 3, 1, '2024-07-11 13:13:28', '2024-07-11 13:13:28'),
(4, 'Title2', 'images/h3.jpg', '<p><u style=\"background-color: rgb(255, 0, 0);\">What is your name?</u></p><p>My name is Cody.</p>', 3, 1, '2024-07-12 07:36:58', '2024-07-12 07:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profile`) VALUES
(1, 'Mg Mg', 'mgmg@gmail.com', '123456789', '1.png'),
(2, 'Mya Mya', 'myamya@gmail.com', '29876544234', '2.png'),
(3, 'Ko Ko', 'koko@gmail.com', '3987635324', '3.png'),
(4, 'Hla Hla', 'hlahla@gmail.com', '76875353556', '4.png'),
(5, 'Soe Soe', 'soesoe@gmail.com', '4587654343', '5.png'),
(6, 'mama', 'mama@gmail.com', '123', ''),
(7, 'roger', 'roger@gmail.com', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
