-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 31, 2017 at 02:09 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooooog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `comment` varchar(10000) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=127 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `comment`, `date`) VALUES
(117, 4, '&quot;\'&quot;\'&quot;\'&quot;\'', '2017-12-20 21:36:11'),
(116, 4, '?', '2017-12-20 21:35:39'),
(115, 4, '?', '2017-12-20 21:35:30'),
(118, 4, ' of the rest of him, waved about helplessly as he looked. &quot;What\'s happened to me?&quot; he thought. It wasn\'t a dream. His room, a proper human', '2017-12-20 21:36:41'),
(119, 4, ' of the rest of him, waved about helplessly as he looked. &quot;What\'s happened to me?&quot; he thought. It wasn\'t a dream. His room, a proper human', '2017-12-20 21:39:47'),
(120, 4, ' of the rest of him, waved about helplessly as he looked. \"What\'s happened to me?\" he thought. It wasn\'t a dream. His room, a proper human', '2017-12-20 21:47:09'),
(121, 4, ' of the rest of him, waved about helplessly as he looked. \"What\'s happened to me?\" he thought. It wasn\'t a dream. His room, a proper human', '2017-12-20 21:47:16'),
(122, 4, 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath', '2017-12-20 23:46:22'),
(123, 4, 'barev boxk', '2017-12-20 23:58:08'),
(124, 3, 'dasfasf21341234', '2017-12-25 21:29:21'),
(125, 5, 'adsafeqwr', '2017-12-31 16:18:41'),
(126, 5, '12ffffffffffffffffffffffffasd dasfasdf dsf ewqr ewqrqwe rqwer 321 124 2 afsd as df', '2017-12-31 16:18:50');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `iq` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `age` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `picture`, `user_id`, `iq`, `name`, `age`) VALUES
(2, 'https://vignette.wikia.nocookie.net/animal-jam-clans-1/images/6/6e/Double_chins_by_pictoron-d4ogfds.png/revision/latest?cb=20160521152119', 3, 50, 'aaa', 50),
(3, 'https://i.ytimg.com/vi/DODLEX4zzLQ/hqdefault.jpg', 4, 134213, 'chuk', 123),
(4, 'http://www.funnyfacespictures.net/pictures/funny-faces-tiny_face.jpg', 5, 0, 'harut', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `pass`) VALUES
(3, 'a@', '111'),
(4, 'chuk@chuk', '123'),
(5, 'harut@', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
