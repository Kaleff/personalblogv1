-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2021 at 05:58 AM
-- Server version: 5.7.29-log
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `text` text,
  `category_id` int(11) DEFAULT NULL,
  `pubdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `image`, `text`, `category_id`, `pubdate`, `views`) VALUES
(1, 'Lifestyle choices', 'lifestyle.jpg', 'Lifestyle choices are one of the most important choices in someone`s life, as the lifestyle choices dictate the quality of your health, longevity of your life and most importantly, your general satisfaction with life. So make the right choice, and break all the bad habits you have before they break you.', 5, '2021-04-19 17:59:29', 26),
(2, 'Youtube', 'utrust1.jpg', 'YouTube is not that innocent too. YouTube also participates in deplatforming their opposition. Using such methods as shadow-banning, demonetizing and straight-forward account deletion. ', 3, '2021-04-19 18:09:40', 3),
(3, 'GIT', 'git.jpg', 'Git is a free and open source distributed version control system designed to handle everything from small to very large projects with speed and efficiency. Git is easy to learn and has a tiny footprint with lightning fast performance. <br> I personally have enough knowledge of GIT to implement it in projects stored on local machine.', 1, '2021-04-19 18:12:24', 171),
(4, 'JavaScript', 'js.jpg', 'JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-orientation, and first-class functions. Alongside HTML and CSS, JavaScript is one of the core technologies of the World Wide Web. Over 97% of websites use it client-side for web page behavior, often incorporating third-party libraries. <h3>My personal experience/knowledge </h3> I personally have basic understanding and experience regarding JavaScript, sufficient enough to create dynamic, PHP-based websites.', 1, '2021-04-19 18:14:13', 42),
(5, 'Cat', 'cat.jpg', 'Cats are one of the animals I find cute. That\'s it', 4, '2021-04-19 18:14:49', 10),
(6, 'English Skills', 'english.jpg', 'English skills are important in the IT industry, since the vast majority of online and offline resources dedicated to programming, computer science are in English language. Also having the knowledge of English is pretty neat when it comes to communicating with people that speak other languages, since it works as some sort of a middle-ground. <h3>Personal Knowledge of English</h3> I would rate my personal grasp of English language as sophisticated, as I can express my thoughts in English without any difficulty.', 2, '2021-04-27 22:54:48', 57),
(7, 'Facebook', 'utrust2.jpg', 'Facebook basically sells personal information to advertisers, which is not the most respectful thing to do with personal data.', 3, '2021-04-28 03:38:25', 3),
(8, 'Twitter', 'utrust3.jpg', 'Twitter is no stranger to censoring their opposition, outright banning or restricting speech right on their platform. Community guidelines and Terms of Service don\'t simply apply to everyone in the same way. It\'s no secret that this platform has their favorites, but in that perspective Twitter is biased. If someone openly opposes a narrative, they will be deplatformed sooner or later.', 3, '2021-04-28 03:46:40', 6),
(9, 'Google', 'utrust4.jpg', 'Google. One of the IT-world leaders. \"And what are they doing wrong exactly?\" - you might ask. Manipulating search results, sending your crucial information to triple-letter agencies, to name a few. If you\'re an individual that values privacy, or looking for unbiased search results, I would definitely recommend using another search engine. My personal recommendation would be a <a target=\"_blank\" href=\"https://duckduckgo.com/\">Duck-Duck Go</a>, since this search engine doesn\'t store your personal information, doesn\'t track you and doesn\'t interfere with search results.', 3, '2021-04-28 04:05:38', 29),
(10, 'Tik-Tok', 'utrust5.jpg', 'The app is basically a data-miner, also they cooperate with the government of PRC, which is a giant red flag, all things considered', 3, '2021-04-28 04:12:14', 7),
(11, 'Fenek', 'fenek.jpg', 'Fennec is also one of many animals I find cute. That\'s it', 4, '2021-04-28 06:39:42', 1),
(12, 'Caracal', 'caracal.jpg', 'Caracal is one of the few wild animals I consider cute. That\'s it', 4, '2021-04-28 06:48:55', 1),
(13, 'Rabbit', 'rabbit.jpg', 'Rabbits are also few of the animals I consider cute. That\'s it', 4, '2021-04-28 06:52:12', 1),
(14, 'HTML and CSS', 'htmlcss.jpg', '<h3>HTML</h3>\r\nThe HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript. \r\n<h3>CSS</h3>\r\nCascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript. CSS is designed to enable the separation of presentation and content.\r\n<h3>My personal experience and knowledge</h3>\r\nI have decent knowledge of both CSS and HTML to create dynamic PHP-based websites by using pre-made HTML/CSS templates in my projects.', 1, '2021-04-28 08:07:55', 52),
(15, 'PHP', 'phhp.jpg', 'PHP is a general-purpose scripting language especially suited to web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group. PHP originally stood for Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor.\r\n<h2>Personal experience and knowledge.</h2> <h3>General PHP syntax</h3>\r\nI have sufficient knowledge of PHP syntax for a level of the Junior Developer.\r\n<h3>Object Oriented Programming</h3>\r\nI have quite of knowledge of OOP paradigms and their implementations, such as classes, objects, constructor/destructor, inheritance, encapsulation, access modifiers, traits, interfaces, static methods and properties.\r\n<h3>Model View Controller</h3> I also have general knowledge of MVC-programming pattern for creating websites, in the near future I will publish my own website implementing MVC on GitHub for showcasing this skill.', 1, '2021-04-28 08:42:23', 261),
(16, 'Blind-Typing', 'type.jpg', 'Being able to type without looking at the keyboard is a useful skill, since it saves you decent amount of time which is spent during typing with a keyboard. I can proudly say that I possess this skill and able to type without looking at the keyboard, just using muscle-memory for this task.', 2, '2021-04-28 08:53:12', 7);

-- --------------------------------------------------------

--
-- Table structure for table `articles_categories`
--

CREATE TABLE `articles_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles_categories`
--

INSERT INTO `articles_categories` (`id`, `title`) VALUES
(1, 'Programming Skills'),
(2, 'Personal Skills'),
(3, 'Untrustworthy Companies'),
(4, 'Cute'),
(5, 'Lifestyle');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'starscraper', '225');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles_categories`
--
ALTER TABLE `articles_categories`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `articles_categories`
--
ALTER TABLE `articles_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
