-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2024 at 05:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vtuberpoliban`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'nijikaijichi', 'ijichinijika');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(30) DEFAULT NULL,
  `url_youtube` text NOT NULL,
  `tanggal_upload` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `judul`, `deskripsi`, `url_youtube`, `tanggal_upload`) VALUES
(1, 'PC-Kun Ganbare~!!', 'PC KUN GANBARE! PC KUN aaaaaaa', '<iframe width=\"949\" height=\"534\" src=\"https://www.youtube.com/embed/qWj4YwoBnwk\" title=\"PC-Kun Ganbare~ [Vestia Zeta]\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '2024-08-22 21:44:00'),
(2, 'HOLOH3RO.exe', 'Holohero clipHolohero clipHolo', '<iframe width=\"949\" height=\"534\" src=\"https://www.youtube.com/embed/lXe8RXEd31g\" title=\"HOLOH3RO.exe\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '2024-08-22 22:14:00'),
(3, 'Holohero clip', 'Holohero maen human fall flat', '<iframe width=\"949\" height=\"534\" src=\"https://www.youtube.com/embed/lMOA41dHe5o\" title=\"PON Moment Zeta di Human: Fall Flat  &quot;3 𝙋𝙊𝙑&quot; | Holokom3dian 🤣   [ Kobo, Zeta, Kaela ]\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '2024-08-22 22:25:35'),
(4, 'PC-Kun Ganbare~!', 'PC KUN GANBARE! PC KUN GANBARE', '<iframe width=\"949\" height=\"534\" src=\"https://www.youtube.com/embed/qWj4YwoBnwk\" title=\"PC-Kun Ganbare~ [Vestia Zeta]\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '2024-08-22 21:44:14'),
(5, 'HOLOH3RO.exe', 'Holohero clip', '<iframe width=\"949\" height=\"534\" src=\"https://www.youtube.com/embed/lXe8RXEd31g\" title=\"HOLOH3RO.exe\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '2024-08-22 22:14:32'),
(6, 'Holohero clip', 'Holohero maen human fall flat', '<iframe width=\"949\" height=\"534\" src=\"https://www.youtube.com/embed/lMOA41dHe5o\" title=\"PON Moment Zeta di Human: Fall Flat  &quot;3 𝙋𝙊𝙑&quot; | Holokom3dian 🤣   [ Kobo, Zeta, Kaela ]\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '2024-08-22 22:25:35'),
(7, 'PC-Kun Ganbare~!', 'PC KUN GANBARE! PC KUN GANBARE', '<iframe width=\"949\" height=\"534\" src=\"https://www.youtube.com/embed/qWj4YwoBnwk\" title=\"PC-Kun Ganbare~ [Vestia Zeta]\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '2024-08-22 21:44:14'),
(8, 'HOLOH3RO.exe', 'Holohero clip', '<iframe width=\"949\" height=\"534\" src=\"https://www.youtube.com/embed/lXe8RXEd31g\" title=\"HOLOH3RO.exe\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '2024-08-22 22:14:32'),
(9, 'Holohero clip', 'Holohero maen human fall flat', '<iframe width=\"949\" height=\"534\" src=\"https://www.youtube.com/embed/lMOA41dHe5o\" title=\"PON Moment Zeta di Human: Fall Flat  &quot;3 𝙋𝙊𝙑&quot; | Holokom3dian 🤣   [ Kobo, Zeta, Kaela ]\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '2024-08-22 22:25:35'),
(10, 'IYA ZETA IYA', 'IYA ZETA IYA!!', '<iframe width=\"949\" height=\"534\" src=\"https://www.youtube.com/embed/HVY3BoDZKdM\" title=\"iya zeta iyaa\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '2024-08-22 23:27:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
