-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 06:18 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pwd`) VALUES
(50, 'swechha', '$2y$10$f5bOu/mkXxAIFrXZRB1AduqHToEtjNVttqQ3U42ibOd4t22LnDzqa'),
(51, 'shiva', '$2y$10$4D0wq4DUpR6ADXWGNI7/Uuoewdjqi1rrZdf83GQpfHASXjs5N6YnG'),
(35, 'admin', '$2y$10$jNvU.MWUxQDkw7BGJ0eEi.vHnUTAu3GLEvc3NGn1vhExHrNgquyFC');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `genre_id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_id`, `category_name`, `genre_id`) VALUES
(1, 1, 'action thriller', 4),
(2, 2, 'Action-Drama', 1),
(3, 3, 'Thriller', 1),
(23, 25, 'aaa', 25),
(5, 5, 'Romantic-Comedy', 2),
(6, 4, 'Romantic', 2),
(7, 6, 'Action comedy', 2),
(8, 7, 'detective, action, horror, and psychological thriller', 3),
(9, 8, 'biographical crime drama', 1),
(22, 25, 'mmm nnnn', 25);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(255) NOT NULL,
  `genre_name` varchar(255) NOT NULL,
  `genre_id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `genre_name`, `genre_id`) VALUES
(1, 'Bollywood', 1),
(2, 'Kollywood', 2),
(3, 'Hollywood', 3),
(4, 'Tollywood', 4),
(17, 'Hinglish', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `book_id` int(11) NOT NULL,
  `ticket_id` varchar(30) NOT NULL,
  `t_id` int(11) NOT NULL COMMENT 'theater id',
  `user_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `no_seat` int(3) NOT NULL COMMENT 'number of seat',
  `amount` int(5) NOT NULL,
  `ticket_date` date NOT NULL,
  `date` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`book_id`, `ticket_id`, `t_id`, `user_id`, `show_id`, `no_seat`, `amount`, `ticket_date`, `date`, `status`) VALUES
(714, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(715, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(716, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(717, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(718, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(719, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(720, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(721, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(722, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(723, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(724, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(725, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(726, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(727, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(728, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(729, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(730, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(731, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(732, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(733, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(734, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(735, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(736, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(737, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(738, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(739, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(740, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(741, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(742, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(743, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(744, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(745, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(746, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(747, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(748, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(749, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(750, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(751, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(752, 'BKID4602', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(753, 'BKID9824', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(754, 'BKID9824', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(755, 'BKID9824', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(756, 'BKID9824', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(757, 'BKID9824', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(758, 'BKID9824', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(759, 'BKID9824', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(760, 'BKID9824', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(761, 'BKID9824', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(762, 'BKID9824', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(763, 'BKID9824', 2, 107, 2, 10, 3000, '2022-10-06', '2022-10-06', 0),
(1168, 'BKID7749', 2, 123, 1, 6, 1500, '2022-10-07', '2022-10-07', 0),
(1169, 'BKID5472', 2, 123, 1, 6, 1500, '2022-10-07', '2022-10-07', 0),
(1170, 'BKID9762', 2, 123, 1, 5, 1250, '2022-10-07', '2022-10-07', 0),
(1171, 'BKID8203', 2, 123, 1, 5, 1250, '2022-10-07', '2022-10-07', 0),
(1172, 'BKID7788', 2, 123, 1, 5, 1250, '2022-10-07', '2022-10-07', 0),
(1173, 'BKID3147', 2, 107, 1, 20, 5000, '2022-10-07', '2022-10-07', 0),
(1174, 'BKID2032', 2, 107, 1, 1, 250, '2022-10-07', '2022-10-07', 0),
(1175, 'BKID3336', 2, 107, 1, 1, 250, '2022-10-07', '2022-10-07', 0),
(1176, 'BKID8315', 2, 107, 1, 1, 250, '2022-10-07', '2022-10-07', 0),
(1177, 'BKID8413', 2, 107, 1, 1, 250, '2022-10-07', '2022-10-07', 0),
(1178, 'BKID3702', 2, 105, 1, 1, 250, '2022-10-08', '2022-10-08', 0),
(1179, 'BKID3241', 2, 105, 1, 20, 5000, '2022-10-08', '2022-10-08', 0),
(1180, 'BKID3816', 2, 105, 1, 40, 10000, '2022-10-08', '2022-10-08', 0),
(1181, 'BKID7120', 2, 105, 1, 20, 5000, '2022-10-08', '2022-10-08', 0),
(1182, 'BKID2688', 2, 105, 1, 10, 2500, '2022-10-08', '2022-10-08', 0),
(1183, 'BKID3650', 2, 105, 1, 9, 2250, '2022-10-08', '2022-10-08', 0),
(1184, 'BKID7171', 2, 105, 2, 1, 300, '2022-10-09', '2022-10-08', 0),
(1185, 'BKID4736', 2, 105, 2, 1, 300, '2022-10-09', '2022-10-08', 0),
(1186, 'BKID5135', 2, 105, 2, 1, 300, '2022-10-09', '2022-10-08', 0),
(1187, 'BKID9005', 2, 105, 2, 1, 300, '2022-10-09', '2022-10-08', 0),
(1188, 'BKID2056', 2, 105, 2, 1, 300, '2022-10-09', '2022-10-08', 0),
(1189, 'BKID7930', 2, 105, 2, 1, 300, '2022-10-09', '2022-10-08', 0),
(1190, 'BKID1300', 2, 105, 2, 1, 300, '2022-10-09', '2022-10-08', 0),
(1191, 'BKID5401', 2, 105, 2, 1, 300, '2022-10-09', '2022-10-08', 0),
(1192, 'BKID8965', 2, 105, 2, 1, 300, '2022-10-09', '2022-10-08', 0),
(1193, 'BKID8579', 2, 105, 2, 4, 1200, '2022-10-09', '2022-10-08', 0),
(1194, 'BKID3956', 2, 105, 2, 1, 300, '2022-10-09', '2022-10-08', 0),
(1195, 'BKID7141', 2, 105, 2, 1, 300, '2022-10-09', '2022-10-08', 0),
(1196, 'BKID3565', 2, 105, 2, 1, 300, '2022-10-09', '2022-10-08', 0),
(1197, 'BKID7100', 2, 105, 2, 1, 300, '2022-10-09', '2022-10-08', 0),
(1198, 'BKID1146', 2, 105, 2, 1, 300, '2022-10-09', '2022-10-08', 0),
(1199, 'BKID4685', 2, 107, 2, 1, 300, '2022-10-09', '2022-10-08', 0),
(1200, 'BKID4053', 2, 107, 2, 1, 300, '2022-10-09', '2022-10-08', 0),
(1201, 'BKID4596', 2, 107, 2, 1, 300, '2022-10-10', '2022-10-08', 0),
(1202, 'BKID3762', 2, 107, 2, 1, 300, '2022-10-11', '2022-10-08', 0),
(1203, 'BKID5963', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1204, 'BKID5203', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1205, 'BKID4535', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1206, 'BKID8103', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1207, 'BKID7651', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1208, 'BKID5625', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1209, 'BKID4867', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1210, 'BKID1869', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1211, 'BKID3730', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1212, 'BKID1590', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1213, 'BKID4734', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1214, 'BKID2116', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1215, 'BKID9534', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1216, 'BKID4452', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1217, 'BKID8527', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1218, 'BKID2141', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1219, 'BKID8783', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1220, 'BKID4375', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1221, 'BKID4097', 2, 107, 2, 1, 300, '2022-10-12', '2022-10-08', 0),
(1222, 'BKID3731', 2, 105, 2, 1, 300, '2022-10-10', '2022-10-08', 0),
(1223, 'BKID8280', 2, 105, 2, 1, 300, '2022-10-10', '2022-10-08', 0),
(1224, 'BKID3784', 2, 105, 2, 1, 300, '2022-10-10', '2022-10-08', 0),
(1225, 'BKID6329', 2, 105, 2, 1, 300, '2022-10-10', '2022-10-08', 0),
(1226, 'BKID7813', 2, 105, 2, 1, 300, '2022-10-10', '2022-10-08', 0),
(1227, 'BKID5723', 2, 105, 2, 1, 300, '2022-10-10', '2022-10-08', 0),
(1228, 'BKID9003', 2, 105, 2, 46, 13800, '2022-10-10', '2022-10-08', 0),
(1229, 'BKID9615', 2, 105, 2, 1, 300, '2022-10-11', '2022-10-08', 0),
(1230, 'BKID3738', 2, 105, 2, 15, 4500, '2022-10-11', '2022-10-08', 0),
(1231, 'BKID2345', 2, 105, 2, 5, 1500, '2022-10-11', '2022-10-08', 0),
(1232, 'BKID6915', 2, 105, 2, 5, 1500, '2022-10-11', '2022-10-08', 0),
(1233, 'BKID3283', 2, 105, 2, 1, 300, '2022-10-11', '2022-10-08', 0),
(1234, 'BKID1960', 2, 105, 2, 1, 300, '2022-10-11', '2022-10-08', 0),
(1235, 'BKID9982', 2, 105, 2, 1, 300, '2022-10-11', '2022-10-08', 0),
(1236, 'BKID3757', 2, 104, 2, 1, 300, '2022-10-11', '2022-10-08', 0),
(1237, 'BKID1150', 2, 104, 2, 50, 15000, '2022-10-13', '2022-10-08', 0),
(1238, 'BKID2083', 2, 104, 2, 2, 600, '2022-10-16', '2022-10-08', 0),
(1239, 'BKID4059', 2, 104, 2, 5, 1500, '2022-10-16', '2022-10-08', 0),
(1240, 'BKID8883', 2, 104, 2, 5, 1500, '2022-10-14', '2022-10-08', 0),
(1241, 'BKID7384', 2, 104, 2, 5, 1500, '2022-10-14', '2022-10-08', 0),
(1242, 'BKID4422', 2, 104, 2, 5, 1500, '2022-10-14', '2022-10-08', 0),
(1243, 'BKID4333', 2, 104, 2, 5, 1500, '2022-10-14', '2022-10-08', 0),
(1244, 'BKID6556', 2, 104, 2, 5, 1500, '2022-10-14', '2022-10-08', 0),
(1245, 'BKID8166', 2, 104, 2, 9, 2700, '2022-10-14', '2022-10-08', 0),
(1246, 'BKID1478', 2, 104, 2, 9, 2700, '2022-10-14', '2022-10-08', 0),
(1247, 'BKID3417', 2, 104, 2, 1, 300, '2022-10-10', '2022-10-08', 0),
(1248, 'BKID3433', 2, 104, 1, 1, 250, '2022-10-08', '2022-10-08', 0),
(1249, 'BKID8027', 2, 104, 1, 1, 250, '2022-10-08', '2022-10-08', 0),
(1250, 'BKID5735', 2, 107, 2, 1, 300, '2022-10-08', '2022-10-08', 0),
(1251, 'BKID1447', 2, 107, 2, 1, 300, '2022-10-08', '2022-10-08', 0),
(1252, 'BKID7952', 2, 107, 2, 1, 300, '2022-10-09', '2022-10-09', 0),
(1253, 'BKID4100', 2, 107, 2, 20, 6000, '2022-10-09', '2022-10-09', 0),
(1254, 'BKID9359', 2, 123, 2, 1, 300, '2022-10-09', '2022-10-09', 0),
(1255, 'BKID1847', 2, 123, 2, 1, 300, '2022-10-09', '2022-10-09', 0),
(1256, 'BKID5641', 2, 123, 2, 1, 300, '2022-10-09', '2022-10-09', 0),
(1257, 'BKID8017', 2, 123, 2, 1, 300, '2022-10-09', '2022-10-09', 0),
(1258, 'BKID9165', 2, 111, 1, 70, 17500, '2022-10-11', '2022-10-11', 0),
(1259, 'BKID5201', 2, 111, 2, 50, 15000, '2022-10-12', '2022-10-11', 0),
(1260, 'BKID6626', 2, 149, 2, 20, 6000, '2022-10-14', '2022-10-13', 0),
(1261, 'BKID7457', 2, 101, 2, 1, 300, '2022-10-14', '2022-10-13', 0),
(1262, 'BKID1185', 2, 101, 2, 1, 300, '2022-10-15', '2022-10-13', 0),
(1263, 'BKID8360', 2, 101, 2, 1, 300, '2022-10-16', '2022-10-13', 0),
(1264, 'BKID2064', 2, 101, 2, 1, 300, '2022-10-17', '2022-10-13', 0),
(1265, 'BKID1210', 2, 101, 1, 1, 250, '2022-10-13', '2022-10-13', 0),
(1266, 'BKID9251', 2, 101, 1, 3, 750, '2022-10-13', '2022-10-13', 0),
(1267, 'BKID7840', 2, 101, 2, 3, 900, '2022-10-14', '2022-10-13', 0),
(1268, 'BKID2422', 2, 101, 2, 1, 300, '2022-10-14', '2022-10-13', 0),
(1269, 'BKID6513', 2, 101, 2, 1, 300, '2022-10-15', '2022-10-13', 0),
(1270, 'BKID7325', 2, 149, 2, 1, 300, '2022-10-17', '2022-10-17', 0),
(1271, 'BKID7331', 2, 149, 2, 1, 300, '2022-10-18', '2022-10-17', 0),
(1272, 'BKID9095', 2, 149, 2, 2, 600, '2022-10-17', '2022-10-17', 0),
(1273, 'BKID9451', 2, 149, 2, 1, 300, '2022-10-17', '2022-10-17', 0),
(1274, 'BKID1186', 2, 149, 2, 1, 300, '2022-11-06', '2022-11-06', 0),
(1275, 'BKID8930', 2, 149, 2, 45, 13500, '2022-11-06', '2022-11-06', 0),
(1276, 'BKID5176', 2, 107, 2, 1, 300, '2023-03-25', '2023-03-25', 1),
(1277, 'BKID1744', 2, 107, 2, 50, 15000, '2023-03-25', '2023-03-25', 1),
(1278, 'BKID2956', 2, 107, 2, 100, 30000, '2023-03-25', '2023-03-25', 1),
(1279, 'BKID8553', 2, 107, 1, 100, 25000, '2023-04-01', '2023-04-01', 0),
(1280, 'BKID5622', 2, 107, 2, 50, 15000, '2023-04-01', '2023-04-01', 0),
(1281, 'BKID9863', 2, 107, 2, 50, 15000, '2023-04-01', '2023-04-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movie`
--

CREATE TABLE `tbl_movie` (
  `movie_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL COMMENT 'theater id',
  `movie_name` varchar(255) NOT NULL,
  `cast` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `release_date` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `video_url` varchar(200) NOT NULL,
  `language` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `cat_id` int(255) NOT NULL,
  `genre_id` int(255) NOT NULL,
  `status` int(1) NOT NULL COMMENT '0 means active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_movie`
--

INSERT INTO `tbl_movie` (`movie_id`, `t_id`, `movie_name`, `cast`, `description`, `release_date`, `image`, `video_url`, `language`, `director`, `cat_id`, `genre_id`, `status`) VALUES
(1, 2, 'Ma Yesto Geet Gauchu 2', 'Paul Shah , Harihar Sharma , Pooja Sharma, Dinesh Dc', '  When a person becomes the most successful in his field like PAUL in MYGG2, the attitude highly rises up, no matter                                  how arrogantly he behaves and what he does whether it\'s right or wrong, he is correct when he engages in pure love unconditionally and emotionally.                                   It\'s the story of MYGG2 wherein pretty romance, high voltage love and nail biting emotion                                  blend altogether... MYGG2 is highly recommended to all, watch and feel the romance by heart.', '2022-01-04', '3.jpg', '  https://youtu.be/XtZGZmtXsu0', ' Nepali', ' Sudarshan Thapa', 2, 2, 0),
(2, 2, 'Kabaddi 4: The Final Match', 'Dayahang Rai, Saugat Malla, Miruna Magar, Gaumaya Gurung, Buddhi Tamang, Bijay Baral, Kamal Mani Nepal, Puskar Gurung, Kabita Ale, Maotse Gurung, Saradha Adhikari, Lal Shobha Gurung, Prakash Ghimire, Chinimaya Gurung, Upendra Subba', 'Kabaddi 4: The Final Match is a 2022 Nepali romantic comedy film, directed by Ram Babu Gurung. The film, which is the fourth film in the Kabaddi franchise, is produced by Mani Ram Pokharel, Om Chand Rauniyar and Sushma Gurung under the banner of Baasuri Films', '2022-05-27', '4.jpg', 'https://youtu.be/aAFTcXtRvDg', 'Nepali', 'Ram Babu Gurung', 5, 2, 0),
(3, 1, 'The Batman', ' Robert Pattinson · Zoë Kravitz · Jeffrey Wright · Colin Farrell · Paul Dano · John Turturro · Andy Serkis · Peter Sarsgaard', '              Batman ventures into Gotham City\'s underworld when a sadistic killer leaves behind a trail of cryptic clues. As the evidence begins to lead closer to home and the scale of the perpetrator\'s plans become clear, he must forge new relationships, unmask the culprit and bring justice to the abuse of power and corruption that has long plagued the metropolis.', '2022-03-04', '1.jfif', '              https://youtu.be/mqqft2x_Aa4', '       English', '        Matt Reeves', 7, 1, 0),
(4, 2, 'Gangubai Kathiawadi ', 'Alia Bhatt Gangubai Kathiawadi ; Tareeq Ahmed Khan Rehman ; Abhinay Raj Singh Gangubai Kathiawadi Brother ; Ajay Devgan Karim Lala ; Indira Tiwari.', '      The film is loosely based on the true story of Gangubai Harjivandas, popularly known as Gangubai Kothewali, whose life was documented in the book Mafia Queens of Mumbai written by S. Hussain Zaidi.', '2022-02-25', '2.jfif', '      https://youtu.be/N1ZwRv3vJJY', '   Hindi', '   Sanjay Leela Bhansali', 8, 1, 0),
(5, 3, 'Etharkkum Thunindhavan', 'Suriya Sivakumar · Priyanka Arul Mohan · Sathyaraj · Saranya Ponvannan · Ilavarasu · MS Bhaskar · Dhivya Dhuraisamy ', '        Etharkkum Thunindhavan is a story about the atrocities done against women in a region divided by two clans in the South of India. Star Cast: Suriya, Priyanka Arulmohan, Sathyaraj, Saranya Ponvannan, Vinay Rai & Ensemble.', '2022-03-10', '8.jfif', '        https://youtu.be/cKrz-kWoaSI', '    Tamil', '    Pandiraj', 1, 4, 0),
(7, 3, 'Bachchan Pandey', 'Akshay Kumar · Bachchhan Paandey ; Kriti Sanon · Myra Devekar ; Jacqueline Fernandez · Sophie ; Ahmed Khan', '    Bachchan Pandey is a 2022 Bollywood action-drama, helmed by Farhad Samji. The movie stars Akshay Kumar in and as Bachchan Pandey. The movie is produced by Sajid Nadiadwala. Bachchan Pandey is a remake of Tamil hit movie Jigarthanda directed by Karthik Subbaraj.', '2022-03-18', '13.jfif', '    https://youtu.be/4d8m59ct2wQ', '  Hindi', '  Farhad Samji', 6, 1, 0),
(8, 3, 'RRR', 'NTR, Ram Charan, Ajay Devgn, Alia Bhatt, Olivia Morris, Samuthirakani, Alison Doody, Ray Stevenson', 'The film stars N. T. Rama Rao Jr., Ram Charan, Ajay Devgn, Alia Bhatt, Shriya Saran, Samuthirakani, Ray Stevenson, Alison Doody, and Olivia Morris. It is a fictional story about two Indian revolutionaries, Alluri Sitarama Raju (Charan) and Komaram Bheem (Rama Rao), and their fight against the British Raj.', '2022-03-24', '14.jfif', 'https://youtu.be/f_vbAtFSEc0', 'Telugu, Tamil, Hindi and Kannada.', 'S. S. Rajamouli', 2, 4, 0),
(9, 2, 'Aakase Kheti', ' Gaurav Pahari, Wilson Bikram rai, Buddhi Tamang, Neeta Dhungana.', '    The story is about three friends going on different illegal journey to get sufficient money for their upcoming love life, though they struggle a lot and go through many difficult obstacles they tame to fail on their money mission yet win on their love life . Aakashe kheti is simply a mixture of comedy, Romance and adventure. .', '2022-03-11', '6.jfif', '    https://youtu.be/kQHe9K03tWc', '  Nepali', '  Uday Subba', 5, 2, 0),
(10, 3, 'Morbius', 'Matt Smith · Miloas Milo ; Adria Arjona · Martine Bancroftas Martine Bancroft.', '    Biochemist Michael Morbius tries to cure himself of a rare blood disease, but he inadvertently infects himself with a form of vampirism instead. Biochemist Michael Morbius tries to cure himself of a rare blood disease, but he inadvertently infects himself with a form of vampirism instead.', '2022-04-21', '7.jfif', '    https://youtu.be/oZ6iiRrz1SY', '  English', '  Daniel Espinosa', 7, 3, 0),
(11, 1, 'Lappan Chappan 2 ', 'Saugat Malla · Arpan Thapa · Anoop Bikram Shahi · Aiden Mckenzie · Akram Joseph · Shakti Shrestha · Sarita Giri · Mannon Davies ', '          Lappan Chappan 2 (LC2) is the third installment of the Lappan Chhappan series and the sequel to Lappan Chhappan (2073 B.S.). Initially, the movie which was supposed to be released on March 10 was postponed due to the COVID-19. Now the film is scheduled to release in 2078.', '2022-06-05', '0.jpg', '          https://youtu.be/OvImPGQxnQQ', '     Nepali', '      Mukunda Bhatta', 2, 2, 0),
(84, 11, 'ma& nn', 'Paul Shah , Harihar Sharma , Pooja Sharma, Dinesh Dc', '            aaaaaaaaaaav  aaaaa', '2022-02-02', '5.jfif', '            https://youtu.be/K0eDlFX9GMc', '       english', '       adcv vvv', 2, 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `user_id` int(255) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `pass_word` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`user_id`, `name`, `email`, `phone`, `age`, `gender`, `pass_word`, `cpassword`) VALUES
(101, 'Shyam Karki', 'ss@gmail.com', '9810215465', 48, 'male', '$2y$10$2N7quNeLDdLFyG0GZG6jHerq4MdijQ6H.m2Uq5zXMyxT4hmDABrfu', '$2y$10$Mrez4yCWshnNT3migV5yW.XLaHvfPN1eoaghddTwCxxynjen6MyAu'),
(102, 'Shekhar Sharma', 'she123@gmail.com', '9710215785', 55, 'male', '$2y$10$K/hQMFO3y2NNcZQYv/dgJeYQg5plpkMWxbVpHpuP8FUY/jU4k/Yqu', '$2y$10$plbHk7ZgFIUkr0LI6sfQM.fZ/p3mkRNDoj8jznB07mEPK86lL02Bi'),
(104, 'Sonika Maharjan', 'soni@gmail.com', '9841369752', 56, 'Female', '$2y$10$TdBPg.vb.zziiaZi3iL9pubRZqGbqMxOU5BVUSvKrhrOSPG32MdBu', '$2y$10$j1hCJg35OH1Srvtif9DlselJcbFegdHcTPZRT.H2jD7N55/VCtwIS'),
(105, 'Gyanu Rai', 'gyanu@gmail.com', '9845268955', 74, 'Female', '$2y$10$XQvyUG2YnZzrP9x4pIl49eDZY9aNQ/qecId1kaU9eS8EcqyiNlHSq', '$2y$10$ro7FlAAsq.m/X0dFrQtvYuBMfQChwoFAt1Ceu2AwHlpaXIGo2GIHu'),
(106, 'Ram', 'rama@gmail.com', '9810223597', 18, 'Male', '$2y$10$neRjNoo1xW0YzVvDI48zwOpDQIdi92DWo9g42lVeat01GgTH6Ie.q', '$2y$10$FELVsDeOJqibf2Xllx2bWOqHZdk5SyXc55YjxzsQqmPenQ5EEPIfS'),
(107, 'Ram Krishna', 'ram@gmail.com', '9810215499', 21, 'Male', '$2y$10$yXArUQ24tZCM5njIjfZRTeWbN4SbipOhvJGKMOQlIfTbYJWrYxTqq', '$2y$10$TX1CFWd1u84RMageTRTJq.wZI/WkqfnLLA6J5SgJz.4vaIkKwR8Xq'),
(108, 'umang', 'umang@gmail.com', '9861916234', 23, 'Female', '$2y$10$xUrYoHFchZ7TwvLdARtp4OQ3yy/ZT1UuJTbX/s5KQ1oxO76Fw/7p.', '$2y$10$Qpsl9udlLiQ4T.su7WfMYeusLe1DAVy2.HzC.2v3hghhCqRv9QM6i'),
(109, 'Kabita Maharjan', 'kabi1@gmail.com', '9634562810', 21, 'Female', '$2y$10$fD/GkCVBKzlzGCAfHKSXI.Lcz1DFgTFUAcjV/EdhOsRreOtory.jC', '$2y$10$gbudChMs8Mki/3Nt.pYT5.VeqnbBAbmLPEFLovxMXC7BfyTKQkuwm'),
(111, 'shital', 'shi345@gmail.com', '9617465323', 22, 'Female', '$2y$10$1mT1rjn6CdVzHXCLFZUvTu9uamB9389StuMeDKl4msUWQVtBxO57O', '$2y$10$u24RPqiisuiU9PyT9ooxyuiIaIl580w3tZGYrImORlYXTmL/qy4wS'),
(113, 'Ram Hari  Maharjan', 'rama@gmail.com', '9810215495', 21, 'Male', '$2y$10$eigOF.wPYtjRYcfoUfJDneyIcLj.w0JyVNyLuQrKhwzk3bqR604wa', '$2y$10$fJ6EidXXHi9K7OV5rRUIn.ELdwkmin25M7tLIfylCaernNU8m8lfq'),
(118, 'hima', 'him@gmail.com', '9810215488', 21, 'Female', '$2y$10$AJ.p5OWwrjy2Vu0ucXuUi.gOt3NIQhG6LvbrF.Kx63BtY46jJHEkO', '$2y$10$uqGk.jL/OdFC0rHAcpz.ietI1kTSBE3XCekvMTmE0/8R4htyFrWjq'),
(121, 'Hira Tamang', 'hira@gmail.com', '9851234671', 40, 'Male', '$2y$10$dR58MuAQs.xJZaSwJAAZneNVjHPG5IZbT2FlnnxErevETVNQ8v38G', '$2y$10$kVPys1dGKKDHpMlwhYrMXuHdo8woGSlZuvnP9FKnFzG/UILYgnZ3m'),
(122, 'Bishal', 'bis123@gmail.con', '9845678945', 75, 'Male', '$2y$10$jdikxV87eyGYTCw8eYxKtegbuO58P79rsoFXV.zG.5nF9ZCky19ZW', '$2y$10$xa/zc8YidFhPDaneFetugube2Hl3yqOlLGtErQtnC2p0POawQvJuy'),
(123, 'Sabin Rai', 'sabin@gmail.com', '9846794526', 40, 'Male', '$2y$10$OhycixH8vmX.1nW5t2H93e.xpAgN/PLEIfyK/v3oBCc4ZVug0zW/G', '$2y$10$l9zjg3SbK1xMUMxfxx2Go.trPToC2ljOmlwZpO0.Z5rso6hVBU3aO'),
(124, 'Amrit Thapa', 'amrit@gmail.com', '9867124377', 36, 'Male', '$2y$10$1NP6J8MqyD4gPPX0gYS9hu6sXK7bby5wocOQv7.LNF0ZDFZyr06X.', '$2y$10$B2jxEC4VKJkJKEL0AnD6DOx/rIWYvFjpA6Ws7.xgH5wujWpGlvjvS'),
(125, 'Sabina Lama', 'samir@gmail.com', '9845612351', 21, 'Female', '$2y$10$FuQGvFKTGo40E82tEFfXxOXBJNbv1cFyKKafNatcdvgsUf8oWG7f2', '$2y$10$7.t9j21pDCPVk5pKd6IVg.gcnQnZUhVGMteIsNMdnJ.SWLCQ15bAy'),
(146, 'Anu', 'anu@gmail.com', '9842562312', 29, 'Female', '$2y$10$IHkE8e6xNsbSnBI2L.eZmeSikR1FT9yFhCWYm23HZ3iaDIhfp.uOS', '$2y$10$ujGs8os.tPhMyRmTt1/WhuJ0kaBk1UDks9mtjNRSm4hP6Xoy2p8F6'),
(147, 'Rima Bishowkarma', 'rima@gmail.com', '9712356787', 45, 'Female', '$2y$10$pD6pajsQXrXu8VBJmFbG6OB1YjV4fh5HchCFbU3k3yJ92b5TatNLW', '$2y$10$UpE2drPb3d5rGoR9hvE.beaF0SqzJKyfTbkAQGt5bqvf63kXJSuRq'),
(148, 'Krishna', 'k12@gmail.com', '9845626378', 63, 'Male', '$2y$10$N95lWW0GxEgdHiOtzCImhexO4ANcOWKx.284pCLNSuvdArL6qnbje', '$2y$10$G/xv/mvv1fQRQEcXs.VH/OLo9BgajGtagWNL7tZOn9RIgln.8uSf.'),
(149, 'swechha', 'swe@gmail.com', '9841235462', 25, 'Female', '$2y$10$Jt11dN0VUNtDZ2gQTmbfsuj0P2UKmAoxsKnZBLIiY/kXXOBuVttmC', '$2y$10$W2d3jVixEvCU.JPXJLY/dePJcsDK4AMn7ABEocfbqOMEe/R3vnxhG'),
(150, 'Ramesh', 'ram@gmail.com', '9810215499', 21, 'Male', '$2y$10$21rohmHMnEoxXdyirAmLTuRSQG79pU8dN2O39pi5m3wk9E19g.DRm', '$2y$10$QcgTCYyBSzv5c7xVC1f/Aea8ydW/1nt8CNIzyT8y08oc/WH0VgPFG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shows`
--

CREATE TABLE `tbl_shows` (
  `s_id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `theater_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_shows`
--

INSERT INTO `tbl_shows` (`s_id`, `st_id`, `theater_id`, `movie_id`, `start_date`, `status`) VALUES
(1, 1, 2, 2, '2022-06-25', 1),
(2, 2, 1, 3, '2022-05-30', 1),
(3, 2, 2, 1, '2022-08-09', 1),
(4, 1, 2, 4, '2022-08-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_showtime`
--

CREATE TABLE `tbl_showtime` (
  `st_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `start_time` time NOT NULL,
  `charge` int(255) NOT NULL,
  `seats` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_showtime`
--

INSERT INTO `tbl_showtime` (`st_id`, `name`, `start_time`, `charge`, `seats`) VALUES
(1, 'First', '08:00:00', 250, 100),
(2, 'Noon', '12:00:00', 300, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_theaters`
--

CREATE TABLE `tbl_theaters` (
  `id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(11) NOT NULL,
  `place` varchar(30) NOT NULL,
  `province` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_theaters`
--

INSERT INTO `tbl_theaters` (`id`, `t_id`, `name`, `address`, `place`, `province`) VALUES
(1, 1, 'QFX Cinemas', '   M8G8+WQQ', 'Labim Mall ', ' Bagmati'),
(2, 2, 'Guna Cinema', '	Ring Road,', 'Lalitpur ', ' Bagmati'),
(3, 3, 'CDC Cinemas', '	CTC Mall, ', ' Civil Mall ', ' Bagmati'),
(62, 22, 'QFX Cinemas nnn', '	moon', 'Kamalpokhari ', ' Bagmati');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_movie`
--
ALTER TABLE `tbl_movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_shows`
--
ALTER TABLE `tbl_shows`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tbl_showtime`
--
ALTER TABLE `tbl_showtime`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `tbl_theaters`
--
ALTER TABLE `tbl_theaters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1282;

--
-- AUTO_INCREMENT for table `tbl_movie`
--
ALTER TABLE `tbl_movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `tbl_showtime`
--
ALTER TABLE `tbl_showtime`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_theaters`
--
ALTER TABLE `tbl_theaters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
