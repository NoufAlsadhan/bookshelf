-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 10:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshelf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '$2y$10$5g/ssTsYaVzcswub3.u9IeZf3uBWbSgTSSZ/yCGvKDjgroW7Bknkq');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `isbn` int(13) NOT NULL,
  `name` varchar(30) NOT NULL,
  `author_name` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL,
  `available_quantity` int(10) NOT NULL,
  `num_pages` varchar(11) NOT NULL,
  `brief` varchar(500) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`isbn`, `name`, `author_name`, `price`, `available_quantity`, `num_pages`, `brief`, `genre`, `image`) VALUES
(423432, 'خوف', 'اسامة المسلم', '52', 142, '301', 'نعيش اليوم في عالم مشبع بالحاديات التي تغشى أبصارنا عن عالم آخر .. عالم موازٍ وأكثر ظلمة .. عالم يختفي خلف العمى .. عمى أصاب معظمنا بسبب المنطق المطلق .. شئنا أم أبينا فهم يعيشون بيننا وحولنا .. يروننا من حيث لا نراهم .. وهم اذكى مما نظن .. وأخبث مما نعتقد', 'Novels', 'img/book3.jpg'),
(446310, 'To Kill a Mockingbird ', ' Harper Lee', '45', 24, '288', 'o Kill a Mockingbird takes place in the fictional town of Maycomb, Alabama, during the Great Depression. The protagonist is Jean Louise (“Scout”) Finch, an intelligent though unconventional girl who ages from six to nine years old during the course of the novel. She is raised with her brother, Jeremy Atticus (“Jem”), by their widowed father, Atticus Finch', 'Crime', 'img/book5.jpg'),
(502922, 'ملهمون', 'صالح محمد الخزيم', '53', 34, '253', 'إن النجاح ليس عطية تعطى، ولا منتجاً يشترى، ولا إرثاً يورث، بل هو نتاج عمل جبار وسهر بالليل والنهار، وتدريب وإصرار، وتجاوز للعقبات، حتى تم تحقيقه بعد توفيق الله. وعلى مر العصور القديمة والحديثة وجد عظماء وعصاميون ناجحون لم يأتهم النجاح صدفة ولم يحصلوا عليه مجاملة، بل بلغوا منازله بإرادتهم الصلبة وهمتهم العظيمة وكافحوا حتى كتبت أسمائهم في سجلات التاريخ', 'Education', 'img/book8r.jpg'),
(17282318, 'Lock the Doors ', 'Vincent Ralph', '40', 53, '400', 'The truth won\'t stay hidden behind locked doors.\r\n\r\nA brand new addictive, psychological thriller from the New York Times bestselling author of 14 WAYS TO DIE―for fans of Karen McManus, Holly Jackson, and Lisa Jewell.\r\n\r\nTom\'s family has moved into their dream home. But pretty soon he starts to notice that something is very wrong―there are strange messages written on the wall and locks on the bedroom doors. On the OUTSIDE.\r\n\r\nThe previous owners have moved just across the road and they seem like', 'Novels', 'img/book2.jpg'),
(19303044, 'محطة كتب', ' ‎ممدوح محمد مليباري‎', '69', 75, '362', ' رحلة عقل بين الكتب جمعت في طياتها تطوير الذات والأدب والتاريخ والحضارة وسير العظماء وأكثر من هذا.', 'Education', 'img/book9r.jpg'),
(19756353, 'لأنك الله', 'علي جابر الفيفي', '17', 98, '192', '\"لأنك الله\" هي رحلة إلى التعمق في معنى تسع من إسماء الله الصمد، الحفيظ، اللطيف، الشافي، الوكيل، الشكور، الجبار، الهادي، الغفور، القريب. سيعرفك هذا الكتاب على من أنت بدونه؛ لا شيء ، نعمه علينا لا تعد ولا تحصى ونحن ما زلنا غافلين.', 'Education', 'img/book7r.jpg'),
(91357876, 'الأبله', 'دوستويفسكي', '50', 29, '1266', 'رواية \"\"الأبله\"\" واحدة من أكثر النماذج تعبيراً عن قدرة دوستويفسكي على النظر في دواخل النفس الإنسانية فهذا \"\"الأبله\"\" هو أمير، من سلالة أمراء معروفة في تاريخ روسيا، لكن شخصيته ومسار حياته لا يشبهان أبداً أولئك الأمراء الذين يأمرون فيُطاعون. بل هو شخص طيّب بسيط، يمكن استدرار عاطفته والتأثير عليه بمجرّد إبداء الرقة أو التعبير عن الحاجة او الحزن أو الأسى... ولذلك يبدو \"\"أبله\"\" في نظر المجتمع.\r\n\r\n\"\"لماذا تخلق الطبيعة أفضل الناس لتسخّرَ منهم بعد ذلك؟...\r\nأنا لم أفسد أحداً..لقد أردت أن أحيا لسعادة النا', 'Novels', 'img/rbook6.jpg'),
(91787865, 'مذكرات طالب عبقري', 'فيلب أوزبورن', '27', 55, '160', 'قصة ولد مميز جدًا', 'Education', 'img/book10r.jpg'),
(978006208, 'Shatter Me', ' Tahereh Mafi', '55', 76, '368', 'The Gripping First Installment In New York Times Bestselling Author Tahereh Mafi\'S Shatter Me Series.One Touch Is All It Takes. One Touch, And Juliette Ferrars Can Leave A Fully Grown Man Gasping For Air. One Touch, And She Can Kill.No One Knows Why Juliette Has Such Incredible Power. It Feels Like A Curse, A Burden That One Person Alone Could Never Bear. But The Reestablishment Sees It As A Gift, Sees Her As An Opportunity. An Opportunity For A Deadly Weapon.Juliette Has Never Fought For Hersel', 'Novels', 'img/book4.jpg'),
(978140918, 'The silent patient', 'Alex Michaelides', '55', 96, '320', 'Alicia Berenson is life is seemingly perfect. A famous painter married to an in-demand fashion photographer, she lives in a grand house with big windows overlooking a park in one of London is most desirable areas. One evening her husband Gabriel returns home late from a fashion shoot, and Alicia shoots him five times in the face, and then never speaks another word.', 'Mystery', 'img/book1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `isbn` int(13) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`isbn`, `name`, `price`, `image`) VALUES
(423432, 'خوف', '52', 'img/book3.jpg'),
(19756353, 'لأنك الله', '17', 'img/book7r.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `review` varchar(255) NOT NULL,
  `rate` int(5) NOT NULL,
  `book_isbn` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `review`, `rate`, `book_isbn`) VALUES
(5, 'Nouf', 'Very nice book', 5, 12),
(6, 'Reema', 'Good', 2, 12),
(7, 'Leena', 'Kinda disappointing', 1, 12),
(8, 'Lara', 'I RECOMMEND!!!', 5, 12),
(12, 'Shaden', 'Good!', 3, 12),
(13, 'Nouf', 'Good', 2, 17282318),
(14, 'Nouf', 'Not good!', 0, 19756353),
(15, 'Lara', 'I LOVED IT!!!', 5, 446310);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_isbn` (`book_isbn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
