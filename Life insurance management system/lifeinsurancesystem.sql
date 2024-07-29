-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 03:25 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifeinsurancesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `adminEmail`, `password`) VALUES
(1, 'admin1@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `NID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`NID`, `title`, `content`, `description`, `image`) VALUES
(2, 'Test 2 update test', 'this is title 2 update', 'This Title is for Title 2update', 'Book 10.jpg'),
(5, '\"Digital Transformation in the Life Insurance Industry: Empowering Customers with Enhanced Experiences\"', 'In an era of digital advancements, the life insurance industry is undergoing a transformative journey, leveraging technology to empower customers with personalized and seamless experiences.', 'This article explores the digital transformation happening in the life insurance industry, highlighting how insurers are embracing technologies like artificial intelligence, big data analytics, and automation to streamline processes, offer customized policies, and deliver exceptional customer experiences. From simplified online applications to automated underwriting and claims processes, insurers are revolutionizing the way life insurance is bought, managed, and accessed.', 'Book 17.jpg'),
(6, '\"Addressing the Protection Gap: Bridging the Divide with Innovative Life Insurance Solutions\"', 'The protection gap, the difference between insured and uninsured individuals, remains a critical challenge in the insurance industry. This article sheds light on how innovative life insurance solutions are closing the protection gap and ensuring fina', ' By exploring the concept of the protection gap and its implications, this article dives into the innovative solutions being introduced by insurers. From simplified underwriting processes and parametric insurance to microinsurance and usage-based policies, the article highlights how these initiatives are reaching underserved populations and providing them with affordable and accessible life insurance coverage.', 'Book 20.jpg'),
(7, '\"The Rise of Insurtech: Revolutionizing Life Insurance with Technology\"', 'The emergence of insurtech, the intersection of insurance and technology, is transforming the life insurance landscape. This article explores the various ways insurtech is revolutionizing the industry, from distribution channels to product developmen', ' This in-depth analysis delves into the world of insurtech and its impact on life insurance. It covers topics such as digital platforms, online marketplaces, peer-to-peer insurance, and data-driven underwriting. The article showcases how insurtech startups are disrupting traditional models, promoting innovation, and ultimately enhancing the value proposition for customers.', 'Book 16.jpg'),
(8, '\"Evolving Customer Expectations: How Life Insurers are Adapting to Changing Demands\"', 'With evolving customer expectations, life insurance companies are reevaluating their strategies to deliver personalized products, seamless interactions, and simplified processes. This article examines how insurers are adapting to meet these changing ', ' By analyzing customer trends and expectations, this article uncovers the strategies employed by life insurers to cater to the evolving needs of their policyholders. It highlights initiatives like customer-centric product development, enhanced digital experiences, personalized risk assessment, and proactive customer service. Through these efforts, insurers are aiming to build long-term relationships and foster trust with their customers.', 'Book 19.jpg'),
(9, ' \"The Role of Artificial Intelligence in Life Insurance: Revolutionizing Underwriting and Claims Processing\"', ' Artificial intelligence (AI) has become a game-changer in the life insurance industry. This article explores how AI is revolutionizing underwriting and claims processing, leading to faster, more accurate assessments and improved customer experiences', 'From automated risk assessment to fraud detection and predictive analytics, AI-powered technologies are transforming the underwriting and claims processes. This article delves into the applications of AI, including natural language processing for document analysis, machine learning algorithms for risk modeling, and chatbots for customer support. It showcases how insurers are leveraging AI to drive efficiency, enhance accuracy, and provide a seamless journey for policyholders.', 'Book 3.jpg'),
(10, '\"The Role of Artificial Intelligence in Life Insurance: Revolutionizing Underwriting and Claims Processing\"', 'Artificial intelligence (AI) has become a game-changer in the life insurance industry. This article explores how AI is revolutionizing underwriting and claims processing, leading to faster, more accurate assessments and improved customer experiences.', 'From automated risk assessment to fraud detection and predictive analytics, AI-powered technologies are transforming the underwriting and claims processes. This article delves into the applications of AI, including natural language processing for document analysis, machine learning algorithms for risk modeling, and chatbots for customer support. It showcases how insurers are leveraging AI to drive efficiency, enhance accuracy, and provide a seamless journey for policyholders.', 'Book 14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `email`, `password`) VALUES
(1, 'test 1', 'test1@gmail.com', '123'),
(3, 'test2', 't2@gmail.com', '12345678'),
(4, 'test3', 't3@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
