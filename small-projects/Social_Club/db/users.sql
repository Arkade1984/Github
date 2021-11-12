-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 02:25 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `num_posts` int(11) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `friend_array` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `friend_array`) VALUES
(1, 'Valentino', 'Figueroa', 'Arkade1984', 'exobombz@gmail.com', 'Valent1no_@1', '2020-10-15', 'adfasdf', 1, 1, 'no', ''),
(2, 'Ben', 'Bembo', 'ben_bembo', 'Trolluxe3@gmail.com', '562ff00b48ce546129abd563420435e0', '2020-10-18', 'assets/images/profile_pics/defaults/head_emerald.png', 0, 0, 'no', ','),
(3, 'Valentino1', 'Figueroa1', 'valentino1_figueroa1', 'Vfigueroa1984@mail.ru', 'Valent1no', '2020-10-19', 'assets/images/profile_pics/defaults/head_deep_blue.png', 0, 0, 'no', ','),
(4, 'Valentino', 'Figueroa', 'valentino_figueroa', 'Azul_destino@hotmail.com', '447e27e86364c441e5738e71e33ae42c', '2020-10-19', 'assets/images/profile_pics/defaults/head_deep_blue.png', 0, 0, 'no', ','),
(5, 'Admin', 'Admin', 'admin_admin', 'Admin@traveloats.com', 'ca9a13e2ceec2ae2d7f383bc503a8ad9', '2020-10-22', 'assets/images/profile_pics/defaults/head_deep_blue.png', 1, 0, 'no', ',');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
