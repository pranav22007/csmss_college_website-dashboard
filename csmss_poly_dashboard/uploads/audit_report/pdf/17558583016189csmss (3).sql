-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2025 at 11:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csmss`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(10) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `number`, `subject`, `message`) VALUES
(1, 'prem', 'premsarode45@gmail.com', '7620888888', 'computer engineering', 'I am prem'),
(2, 'ayfaz', 'ayfaz45@gmail.com', '9999888888', 'computer engineering', 'I am ayfaz'),
(3, 'jaypal kale', 'jaypalkale@gmail.com', '9999999999', 'computer engineering', 'I am jaypal'),
(4, 'Mahesh shinde', 'mahesh@gmail.com', '1111111119', 'computer engineering', 'I am mahesh'),
(5, 'rohit hitman', 'example@jk.com', '9999999999', 'computer engineering', 'ysiufhui'),
(6, 'prem sarode', 'premsarode4444@gmail.com', '7620847784', 'computer engineering', 'oefioawj'),
(7, 'Mahesh', 'demo@gmail.com', '2222222222', 'fadafa', 'afdadffa'),
(8, 'sama', 'demo@gmail.com', '2222222222', 'dsds', 'hello'),
(9, 'abc', 'abc@gmail.com', '2222222222', 'afd', 'adfadsf'),
(10, 'pranav', 'demo@gmail.com', '2222222222', 'afd', 'adfad'),
(11, 'Yash', 'demo@gmail.com', '1234567890', 'qwer', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` int(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `count` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `Title`, `count`, `status`) VALUES
(1, 'Placement', '1864', '0'),
(2, 'Our Course', '6', '1'),
(3, 'No.Of Student', '6720', '1'),
(4, 'No.Of Teachers', '59', '1'),
(12, 'nirmiti', '54', '1');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(191) NOT NULL,
  `label` varchar(191) NOT NULL,
  `seats` varchar(191) NOT NULL,
  `duration` varchar(191) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `description`, `image`, `label`, `seats`, `duration`, `comments`, `status`) VALUES
(6, 'demo', 'demo', '7493519.jpg', 'AI & ML', '22', '2', 'demo comments', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `image`, `description`, `location`) VALUES
(10, 'First Year induction Program', '1755683978_12768709.jpg', 'Welcoming new Students with guidence , motivation and a glimpse into campus life.', 'Kanchanwadi,Chhatrapati Sambhajinagar'),
(13, 'State Level Technical Event 2K24', '1755683968_149306.jpg', 'State Level Technical Event 2K24 invities bright minds to compete and learn', 'Kanchanwadi,Chhatrapati Sambhajinagar'),
(22, 'demo', '5599118.jpg', 'demo-description', 'demo-location');

-- --------------------------------------------------------

--
-- Table structure for table `latest_update`
--

CREATE TABLE `latest_update` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `latest_update`
--

INSERT INTO `latest_update` (`id`, `image`, `status`) VALUES
(17, '1755845709_149306.jpg', 0),
(18, '1755846538_349969.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `marquee`
--

CREATE TABLE `marquee` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `title`, `designation`, `img`) VALUES
(9, 'Dr. Shashikant R . Dikle', 'PRINCIPAL', '1755670384_csmss4principal.jpeg'),
(10, 'Dr. Shrikant G . Deshmukh', 'ADMINISTRATIVE OFFICER', '1755670378_download__1__360 1 (1).png'),
(11, 'Mr. Padmakar H . Mulay', 'SECRETARY', '1755670329_csmss2.jpg'),
(12, 'Mr. Ranjeet P. Mulay', 'PRESIDENT', '1755670567_csmss1 (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `date`, `status`) VALUES
(5, 'cz', '1755684491_7032284.jpg', '2025-08-07', 1),
(7, 'N,VA:k ', '1755684480_149306.jpg', '2025-08-19', 1),
(8, 'demo title', '1755685276_7493519.jpg', '1212-12-12', 1),
(9, 'abcaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '1755685940_7493519.jpg', '1222-12-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `title`, `link`, `image`) VALUES
(1, 'MSBTE', 'https://htedu.maharashtra.gov.in/Main/', '1755848005_3876_msbte.png'),
(2, 'MAHARASHTRA GOV.', 'https://www.maharashtra.gov.in/', '1755848059_4211_goverment.png'),
(3, 'HTEDU MAHARASHTRA', 'https://htedu.maharashtra.gov.in/Main/', '1755848159_1406_lamp.png');

-- --------------------------------------------------------

--
-- Table structure for table `placement_data`
--

CREATE TABLE `placement_data` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `placement_data`
--

INSERT INTO `placement_data` (`id`, `title`, `pdf`) VALUES
(6, 'Training and Placement Cell', '1755704555_T&PCell (1).pdf'),
(7, 'Placement Summary', '1755704590_summery.pdf'),
(8, 'Year Wise / Department Wise Students Placement Details', '1755704628_placement_details.pdf'),
(9, 'List Of Recruiters', '1755704673_recruiters.pdf'),
(12, 'demo', '1755757930_1755753411_T&PCell.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `status`) VALUES
(21, '1755784462_new-slider-1.png', 1),
(22, '1755784493_new-slider-4.png', 1),
(23, '1755784503_new-slider-22.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `image` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `description`, `image`, `designation`) VALUES
(16, 'Shraddha Gire', 'Decent classrooms,air-free,and good library. Hostel are fine & average', 'img_68a5785d276b55.34631015.jpeg', 'Student'),
(17, 'Anuj Shimpne', '\r\nBasic campus placements for Better opportunities exist with selfeffort.', 'img_68a578a3625423.68261053.jpeg', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_update`
--
ALTER TABLE `latest_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marquee`
--
ALTER TABLE `marquee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placement_data`
--
ALTER TABLE `placement_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `latest_update`
--
ALTER TABLE `latest_update`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `marquee`
--
ALTER TABLE `marquee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `placement_data`
--
ALTER TABLE `placement_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
