-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 28, 2024 at 12:03 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazine_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `AdminUserName` varchar(255) DEFAULT NULL,
  `AdminPassword` varchar(255) DEFAULT NULL,
  `AdminEmailId` varchar(255) DEFAULT NULL,
  `userType` int(11) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `AdminUserName` (`AdminUserName`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `userType`, `CreationDate`, `UpdationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', 'admin@gmail.com', 1, '2024-01-09 18:30:00', '2024-01-31 05:42:52'),
(2, 'subadmin', 'f925916e2754e5e03f75dd58a5733251', 'subadmin@gmail.in', 0, '2024-01-09 18:30:00', '2024-01-31 05:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `tblbnews`
--

DROP TABLE IF EXISTS `tblbnews`;
CREATE TABLE IF NOT EXISTS `tblbnews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BreakingNews` varchar(200) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbnews`
--

INSERT INTO `tblbnews` (`id`, `BreakingNews`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(1, 'Related to sports news', '2024-01-11 18:30:00', '2024-01-31 05:43:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

DROP TABLE IF EXISTS `tblcategory`;
CREATE TABLE IF NOT EXISTS `tblcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(200) DEFAULT NULL,
  `CategoryImage` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `CategoryImage`, `Description`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(1, 'Sports', '0e5e236939e0145d98d9a0e5501789a0jpeg', 'Related to sports news', '2024-01-11 18:30:00', '2024-08-15 05:20:44', 1),
(2, 'National', 'c32bdf105592b680369b461c1383c50c.jpg', 'News about nation.', '2024-08-15 05:17:34', NULL, 1),
(3, 'International News', '91a50285b2fc92424002442ece9b9be9.jpg', 'News from every corner of the world ', '2024-08-15 05:18:11', NULL, 1),
(4, 'Entertainment', '6c1bc534dc1def4881d34070c00db28a.jpg', 'News about entertainment Industry', '2024-08-15 05:18:37', NULL, 1),
(5, 'Education', 'db09fb615f574f4e14ec1707e62285e4.jpg', 'Educational News', '2024-08-15 05:18:57', NULL, 1),
(6, 'Politics ', '4dbc2ad93157511f7e1ea6c4561eb579.jpg', 'News about politics', '2024-08-15 05:19:22', NULL, 1),
(7, 'Business News', '5b4ceb6e5d3193701d7f81473191efa3.jpg', 'News about Business', '2024-08-15 05:19:54', NULL, 1),
(8, 'Finance ', 'ca9ad63ffbb5848bd86dfc509603c82c.jpg', 'News about finance ', '2024-08-15 05:20:22', NULL, 1),
(9, 'Technology', '63992d5a17bffb959fe1f15696132e3e.jpg', 'News about technology', '2024-08-27 11:16:51', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomments`
--

DROP TABLE IF EXISTS `tblcomments`;
CREATE TABLE IF NOT EXISTS `tblcomments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postId` int(11) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `comment` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `postId` (`postId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomments`
--

INSERT INTO `tblcomments` (`id`, `postId`, `name`, `email`, `comment`, `postingDate`, `status`) VALUES
(1, 1, 'Test user', 'test@gmail.com', 'This is sample text for testing.', '2024-01-18 18:30:00', 1),
(2, 2, 'Himanshu Kumar', 'tes123@gmail.com', 'Hi there! This is a test for comment check.', '2024-08-15 05:46:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblmedia`
--

DROP TABLE IF EXISTS `tblmedia`;
CREATE TABLE IF NOT EXISTS `tblmedia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `MediaTitle` varchar(200) DEFAULT NULL,
  `MediaUrl` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmedia`
--

INSERT INTO `tblmedia` (`id`, `MediaTitle`, `MediaUrl`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(1, 'Sports', ' https://www.youtube.com/embed/Y5tbrYpusVQ', '2024-01-11 18:30:00', '2024-08-16 14:07:47', 1),
(3, 'media test 2', 'https://www.youtube.com/embed/4g55nyVpGZ4', '2024-08-17 13:20:37', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblnewstags`
--

DROP TABLE IF EXISTS `tblnewstags`;
CREATE TABLE IF NOT EXISTS `tblnewstags` (
  `NewsId` int(11) NOT NULL AUTO_INCREMENT,
  `PostId` int(11) DEFAULT NULL,
  `Tags` mediumtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  PRIMARY KEY (`NewsId`),
  KEY `newspostid` (`PostId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnewstags`
--

INSERT INTO `tblnewstags` (`NewsId`, `PostId`, `Tags`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(1, 1, 'Sports', '2024-08-07 18:30:00', '2024-08-08 15:48:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

DROP TABLE IF EXISTS `tblpages`;
CREATE TABLE IF NOT EXISTS `tblpages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PageName` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `PageTitle`, `Description`, `PostingDate`, `UpdationDate`) VALUES
(1, 'aboutus', 'About News Portal', '<font color=\"#7b8898\" face=\"Mercury SSm A, Mercury SSm B, Georgia, Times, Times New Roman, Microsoft YaHei New, Microsoft Yahei, å¾®è½¯é›…é»‘, å®‹ä½“, SimSun, STXihei, åŽæ–‡ç»†é»‘, serif\"><span style=\"font-size: 26px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></font><br>', '2024-01-14 18:30:00', '2024-01-31 05:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

DROP TABLE IF EXISTS `tblposts`;
CREATE TABLE IF NOT EXISTS `tblposts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PostTitle` longtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL,
  `viewCounter` int(11) DEFAULT NULL,
  `postedBy` varchar(255) DEFAULT NULL,
  `lastUpdatedBy` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `postcatid` (`CategoryId`),
  KEY `postsucatid` (`SubCategoryId`),
  KEY `subadmin` (`postedBy`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposts`
--

INSERT INTO `tblposts` (`id`, `PostTitle`, `CategoryId`, `SubCategoryId`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostUrl`, `PostImage`, `viewCounter`, `postedBy`, `lastUpdatedBy`) VALUES
(1, 'Jasprit Bumrah ruled out of England T20I series due to injury', 1, 1, '<p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\"><span style=\"margin: 0px; padding: 0px; font-weight: 700;\">The Indian Cricket Team has received a huge blow right ahead of the commencement of the much-awaited series against England. Star speedster Jasprit Bumrah has been ruled out of the forthcoming 3-match T20I series as he suffered an injury in his left thumb.</span></p><p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">The 24-year-old pacer picked up a niggle during India’s first T20I match against Ireland played on June 27 at the Malahide cricket ground in Dublin. As per the reports, he is likely to be available for the ODI series against England scheduled to start from July 12.</p><p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">In the first, Bumrah exhibited a phenomenal performance with the ball. In his quota of four overs, he conceded 19 runs and picked 2 wickets at an economy rate of 4.75.</p><p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">Post his injury, he arrived at team’s optional training session on Thursday but didn’t train. Later, he was rested in the second face-off along with MS Dhoni, Shikhar Dhawan and Bhuvneshwar Kumar.</p><p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">As of now, no replacement has been announced. However, Umesh Yadav may be be given chance in the team in Bumrah’s absence.</p><p style=\"padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">The first T20I match between India and England will be played at Old Trafford, Manchester on July 3.</p>', '2024-01-15 18:30:00', '2024-08-28 07:57:34', 1, 'Jasprit-Bumrah-ruled-out-of-England-T20I-series-due-to-injury', '6d08a26c92cf30db69197a1fb7230626.jpg', 17, 'admin', NULL),
(2, 'Deadpool & Wolverine Joins $1 Billion club', 4, 5, '<p>jqwndnwekdnne d iwedwedwednjed uee wedwenufwjnw ccnwecweccuicrj&nbsp; je wencc w c ewcnicw&nbsp; nc nuicichcnwc wn wciwucwn&nbsp;&nbsp;</p>', '2024-08-15 05:24:24', '2024-08-16 08:35:24', 1, 'Deadpool-&-Wolverine-Joins-$1-Billion-club', '07d903da008edeb6f54dfdb3a11a557a.jpg', 31, 'admin', NULL),
(3, 'This is a test for slider post', 4, 5, '<p>Hi this is a test</p>', '2024-08-16 10:00:32', NULL, 1, 'This-is-a-test-for-slider-post', 'd38f3c109ce7dc3bd91ebe3e5eefcb69.jpg', NULL, 'admin', NULL),
(4, 'test 32 ', 6, 6, '<p>xyz&nbsp;</p>', '2024-08-16 13:16:00', '2024-08-28 07:58:24', 1, 'test-32-', '4dbc2ad93157511f7e1ea6c4561eb579.jpg', 2, 'admin', NULL),
(5, 'Test 33', 3, 7, '<p>Hello this is a test article&nbsp;</p>', '2024-08-16 13:16:31', NULL, 1, 'Test-33', '91a50285b2fc92424002442ece9b9be9.jpg', NULL, 'admin', NULL),
(6, 'IMA doctors strike LIVE: OPDs shut as doctors hold protests nationwide, healthcare services affected', 2, 9, '<h4><b>Emergency and casualty departments will continue to work from 6 a.m. on Saturday to 6 a.m. on Sunday but no outpatient or elective surgery services will be available.</b></h4><div>Protesting against the the brutal rape and murder of a trainee doctor at the R.G. Kar Hospital in Kolkata, doctors associated with the Indian Medical Associat&nbsp;(IMA) have withdrawn health services for 24 hours, leading to healthservices being affected across the country. Doctors of modern medicine across the country, irrespective of the sector and place of work, withdrew services from 6 a.m. on Saturday (August 17, 2024) and will continue till 6 a.m. on Sunday (August 18, 2024).</div><div><br></div><div>Meanwhile, opposition parties in West Bengal have amped up the protests against the Trinamool Congress government and Chief Minister Mamata Banerjee, with the BJP organising demonstrations across the State. Ms. Banerjee on Friday led a protest rally from Moulali to Dorina crossing in Kolkata, demanding capital punishment for the accused.&nbsp;</div><div><br></div><div>The parents of the woman doctor have told the CBI that a few interns and physicians of the same medical establishment were involved in the crime.&nbsp;</div><div><br></div>', '2024-08-17 08:57:20', '2024-08-17 09:52:29', 1, 'IMA-doctors-strike-LIVE:-OPDs-shut-as-doctors-hold-protests-nationwide,-healthcare-services-affected', 'e12560f473646608caa73e008a78d9a3jpeg', 4, 'admin', NULL),
(7, 'Much cheer in Valley over J&K assembly poll announcement', 2, 10, '<h5><font face=\"Times New Roman\"><b>After a decade of Central rule, State all set to vote from September 18 to October 1</b></font></h5><p><font face=\"Times New Roman\">On Friday afternoon, in a dingy alley in Srinagarâ€™s downtown area, a group of middle-aged men were glued to their mobile phones, watching the live broadcast of the Election Commission of Indiaâ€™s (ECI) press conference. As the ECI announced the poll schedule for Jammu and Kashmir, set to take place from September 18 to October 1, their faces reflected cheer and even enthusiasm.&nbsp;</font></p><p><font face=\"Times New Roman\">â€œFinally, we will get rid of this long-drawn-out Central rule and have our elected representativesâ€, one of them said.&nbsp;</font></p><p><font face=\"Times New Roman\">The region is going to witness Assembly polls after nearly a decade during which time the political landscape has altered. The last elections were held in November 2014 when the region was still a state, with Ladakh as a part of it. On August 5, 2019, the Union government read down the special constitutional provision of J&amp;K and split it into two Union Territories (UTs)â€”Jammu and Kashmir, and Ladakh.</font></p><p><font face=\"Times New Roman\"><br></font></p><p><font face=\"Times New Roman\">Desire for change</font></p><p><font face=\"Times New Roman\">Following the abrogation of the special constitutional position of J&amp;K, the absence of a representative government has frustrated the common people. There has been a sense of disempowerment over the extended delay of polls. The fact that the government completed the delimitation process in 2022, which increased the number of seats from 83 to 90, and yet polls were not forthcoming only exacerbated the frustration.&nbsp;&nbsp;</font></p><p><font face=\"Times New Roman\">A Valley-based political analyst rued that the region had been suffering under bureaucratic rule since 2018, lacking the crucial elements of answerability and accountability.&nbsp;</font></p><p><font face=\"Times New Roman\">In the recently held Lok Sabha elections, people showed up in large numbers at polling stations, casting their vote without fear for the first time since militancy began in the region. The newly carved out Anantnag- Rajouri Lok Sabha seat recorded a poll percentage of 55.40 per cent, compared to a mere 8.98 per cent in the 2019 Lok Sabha elections. Similarly, Srinagar Lok Sabha constituency witnessed a voter turnout of 38.49 from 14.30 in 2019. The Baramulla constituency which blindsided frontrunners like former Chief Minister Omar Abdullah and Peopleâ€™s Conferenceâ€™s Sajad Lone by sending incarcerated leader Engineer Rashid to Parliament, recorded a voter turnout of 59.10 percent.</font></p><p><font face=\"Times New Roman\">Senior CPI (M) leader Mohammad Yousuf Tarigami told businessline that the protracted delay in conducting elections had deepened disappointment among people in both the regions of Jammu and Kashmir.&nbsp;</font></p><p><font face=\"Times New Roman\">â€œAlthough itâ€™s late, we welcome the announcementâ€, Tarigami said.&nbsp;</font></p><p><font face=\"Times New Roman\">Chief Spokesperson of the National Conference Tanvir Sadiq termed the poll announcement as a â€œpositive developmentâ€.&nbsp;</font></p><p><font face=\"Times New Roman\">â€œIt was the longstanding demand of the people of Jammu and Kashmir. However, true empowerment will only be realised when the statehood is restored and people are given&nbsp;</font><span style=\"font-family: &quot;Times New Roman&quot;;\">back what was illegally taken from themâ€, he added.&nbsp;</span></p><p><font face=\"Times New Roman\">Youth PDP leader Waheed ur Rehman Parra said that elections were important to reclaim democratic space and self-preservation.&nbsp;</font></p><p><font face=\"Times New Roman\">Row over administration rejig&nbsp;</font><span style=\"font-family: &quot;Times New Roman&quot;;\">A day before the ECI announced the poll schedule, the J&amp;K administration underwent a massive administrative reshuffle. On August 15, the UT government issued the transfer orders of over 85 IAS and KAS officers, spurring a controversy.&nbsp;</span></p><p><font face=\"Times New Roman\">Questioning the reshuffle, the National Conference general secretary Ali Mohammad Sagar in a statement said: â€œIt appears to have been orchestrated by a BJP-appointed LG to benefit his party and alliesâ€.</font></p>', '2024-08-17 09:06:34', '2024-08-17 09:47:46', 1, 'Much-cheer-in-Valley-over-J&K-assembly-poll-announcement', 'd220fd76ad44a3313026a6608b806d73.jpg', 13, 'admin', NULL),
(8, 'PM Modi urges Global South countries to unite, â€˜give voice to those unheard till nowâ€™', 2, 9, '<p><b>PM Modi called upon all the countries of the Global South â€“ countries that were still lagging behind the rest in prosperity â€“ to approach the â€˜Summit of the Futureâ€™ at the United Nations next month in a manner that raises the voice of the Global South there.</b></p><p>Prime Minister Narendra Modi on Saturday addressed the inaugural session of the third Voice of the Global South Summit, calling it a platform to â€œgive voice to the needs and aspirations of those who have been unheard till nowâ€.</p><p>He also called upon all the countries of the Global South â€“ countries that were still lagging behind the rest in prosperity â€“ to approach the â€˜Summit of the Futureâ€™ at the United Nations next month in a manner that raises the voice of the Global South there.</p><p>Promising full support and cooperation from India, Modi said that the strength of the Global South lies in unity. â€œThe Voice of Global South Summit is a platform where we are giving voice to the needs and aspirations of those who have been unheard till now. I believe that our strength lies in our unity, and with the power of this unity we are moving towards a new direction. We will move forward. Next monthâ€™s Summit of the Future is being held in the UN. A pact for the future is going to be discussed in it. Can we all together take a positive approach so that the voice of the Global South is raised in this pact?â€ Modi said, addressing the summit that is being held virtually.</p><p>He added, â€œIt is the need of the hour that the countries of the Global South unite, speak together in one voice and become one anotherâ€™s strength. Let us learn from each otherâ€™s experiences. Let us share our capabilities. Let us together take our resolutions to fruition. Let us together get recognition for two-thirds of humanity.â€</p><p>India, Modi said, was committed to sharing its experiences and capabilities with all the countries of the Global South. â€œWe want to promote mutual trade, inclusive development, progress of Sustainable Development Goals, and women-led development. In the last few years, our cooperation has been boosted on infrastructure, digital and energy connectivity,â€ the Prime Minister added.</p><p><br></p><p>Recalling the G-20 Summit held in India last year, Modi said, â€œIn 2022, when India assumed the G-20 presidency, we had resolved that we would give a new shape to the G-20. The Voice of Global South Summit became a platform where we openly discussed the problems and priorities related to development. India prepared the G-20 agenda based on the hopes, aspirations and priorities of the Global South, and took the G-20 forward with an inclusive and development-focused approach. The biggest example of this was the historic moment when the African Union assumed permanent membership in the G-20.â€</p><p><br></p><p>Pointing out that these were times of uncertainty because of the recent pandemic and wars in the world, and that global institutions formed in the last century are not being able to combat the challenges, Modi said, â€œToday we are meeting at a time when there is an atmosphere of uncertainty all around. The world has not yet fully come out of the effects of Covid. On the other hand, the situation of war has posed challenges to our development journey. We are already facing the challenges of climate change, and now there are also concerns about health security, food security, and energy security. Terrorism, extremism and separatism remain a serious threat to our societies. Technology divide and new economic and social challenges related to technology are also emerging. The global governance and financial institutions formed in the last century have been unable to fight the challenges of this century.â€</p><p><br></p><p>â€œUnder Mission LiFE, we are prioritising roof-top solar and renewable power generation not only in India but also in partner countries. We have shared our experience on financial inclusion and last-mile delivery. We have taken the initiative to connect various countries of the Global South with the Unified Payments Interface, i.e. UPI. Our partnership has made significant progress in the areas of education, capacity building and skilling,â€ he said.</p><p><br></p><p>Talking of digital public infrastructure, Modi said, â€œThe contribution of Digital Public Infrastructure, i.e. DPI, in inclusive development is no less than a revolution. The Global DPI Repository, created under our G-20 presidency, was the first-ever multilateral consensus on DPI.â€</p><p><br></p><p>Highlighting Indiaâ€™s contribution to the Global South, Modi said, â€œWe are happy that agreements have been signed to share the â€˜India Stackâ€™ with 12 partners from the Global South. To accelerate DPI in the Global South, we have created a Social Impact Fund. India will make an initial contribution of $25 million to it. Our mission for health security is One World One Health. And our vision is â€˜Arogya Maitriâ€™, i.e., â€˜Friendship for Healthâ€™.â€</p><p><br></p><p>PM Modi said India has fulfilled this friendship by supporting hospitals, dialysis machines, life-saving medicines and Jan Aushadhi Kendras in Africa and Pacific Island countries. â€œIn times of humanitarian crisis, India is helping its friendly countries as a first responder. Whether it is the volcanic eruption in Papua New Guinea or the flood in Kenya. We have also provided humanitarian assistance in conflict areas like Gaza and Ukraine,â€ he added.</p>', '2024-08-17 09:31:00', NULL, 1, 'PM-Modi-urges-Global-South-countries-to-unite,-â€˜give-voice-to-those-unheard-till-nowâ€™', 'c4175b1437fb0beffbbfbda2b59a3bdd.jpg', NULL, 'admin', NULL),
(9, 'Vinesh Phogat Receives Good News From Delhi High Court After Silver Medal Appeal Dismissal By CAS', 1, 4, '<p>The whole nation received a massive heartbreak on August 14 when Vinesh Phogat\'s appeal to the Court of Arbitration for Sport (CAS) for a joint Paris Olympics 2024 silver medal was dismissed. Just two days later, the star wrestler received some good news along with Olympics bronze medallists Bajrang Punia, Sakshi Malik and her husband Satyawart Kadian . This time it came straight from the Delhi High Court, as a plea they had filed was finally accepted.<br></p><p><br></p><p>The Delhi High Court accepted the plea filed by the four wrestlers, and restored the mandate of an ad-hoc committee of the Indian Olympic Association (IOA) running the affairs of the Wrestling Federation of India (WFI). In an interim order, the court said that the WFI elections which were held in December 2023 was not in accordance to the suspension of the body by the Ministry of Youth Affairs and Sports. Hence, it is necessary for the IOA ad-hoc committee to run the day-to-day affairs of the WFI till the order is lifted.</p><p>\"Since this court has concluded that the dissolution of the ad-hoc committee was unwarranted, it restores the mandate of the ad-hoc committee appointed by the IOA vide order dated 27.12.2023. However, it shall be open to IOA to reconstitute the ad-hoc committee so as to ensure that the same is a multi-member body comprising of eminent sportsperson/s and/or experts who are well-versed in dealing with the International Federations, so as to allay any concerns that the UWW (United World Wrestling-the world body for the sport) might have as regards the steps taken qua the WFI,\" the court order read.</p><p><br></p><p>Vinesh, Bajrang, Sakshi and Satyawart, who were at the forefront of the wrestlers\'protests against the removal of then WFI chief Brij Bhushan Sharan Singh filed this plea to the Delhi High Court after Brij Bhushan\'s brother Sanjay Singj was elected as the WFI chief. They also pleaded for a former High Court or Supreme Court judge to run the WFI affairs. The Delhi High Court has rejected this appeal.</p><div><br></div>', '2024-08-17 09:34:12', '2024-08-28 09:00:37', 1, 'Vinesh-Phogat-Receives-Good-News-From-Delhi-High-Court-After-Silver-Medal-Appeal-Dismissal-By-CAS', '7570d7740162594f6f0ca47663ba94f2jpeg', 20, 'admin', NULL),
(10, 'Lakshya Sen phone confiscated by Prakash Padukone, would not get it back till as shuttler copes with Olympic heartbreak', 1, 4, '<p>After Vinesh Phogat, if there was any bigger missed opportunity for India to bag a medal at the Paris Olympics 2024, it was Lakshya Sen missing out on a podium finish. India were hurt by as many as six 4th-place finishes at the Paris Games, with Arjun Babuta and Mirabai Chanu missing bronze by a whisker, but none more painful than Lakshya, who â€“ albeit unfortunately â€“ missed the opportunity of winning gold and then a chance to bring back home a bronze, going down to Viktor Axelsen in the semifinal and then Lee Zii Jia in the bronze-medal match.</p><p><br></p><p>Lakshya was devastated after the result, as with him, India\'s hope of winning an Olympic medal at Paris went up in smoke. As words struggled to come out of Lakshya\'s mouth, his coach Prakash Padukone did not mince his, and in a brutal reality check, urged the shuttlers, including the 22-year-old Lakshya, to take more responsibilities. If that wasn\'t enough to highlight Padukone\'s strict approach, the fact that he took Lakshya\'s phone during the Olympics and kept it with him only reiterates that belief.</p><p>\"During matches, Prakash sir took away my phone. Said wonâ€™t get back till matches are done,\" Lakshya told Prime Minister Narendra Modi, who on Thursday, August 15, 2024, hosted the Indian Olympics contingent.</p><p><br></p><p>To this, PM Modi quickly replied, \"If Prakash sir is so strict, will send him next time too.\"</p><p><br></p><p>Lakshya was hard done by after the first game itself as his win against Kevin Cordon was \'deleted\' after the Guatemalan shuttler had to withdraw due to injury. From there, to have beaten Julien Carraggi, Jonatan Christie, HS Prannoy and Chou Tien-Chen en route to the semi-final was an astonishing effort, nonetheless. With PV Sindhu and Satwik-Chirag ousted, Lakshya was India\'s best and last hope of a medal in badminton. For a place in the final, Lakshya looked in good nick before losing momentum â€“ squandered three game points in the first game and a 7-0 lead in the second â€“ to be handed a straight-game defeat by Axelsen.</p><p><br></p><p>How Lakshya lost the plot</p><p>A day later, with the hopes of a bronze still alive, Lakshya seemed to be on course, winning the first game. However, losing nine straight points in the second game opened the doors for Lee, and he broke it down by notching up a stunning come-from-behind win. An opponent over whom Lakshya enjoyed a 4-1 head-to-head lead heading into the contest, Lee countered a one game deficit to win the next two and seal the win.</p><p><br></p><p>And just like that, India\'s 12-year-streak of winning at least one medal at the Olympics Games â€“ which began with Saina Nehwal\'s bronze in London and taken forward by PV Sindhu\'s silver and bronze at Rio and Tokyo â€“ was broken. But Lakshya would take heart from the fact that someone like Axelsen himself, predicted the Indian a strong contender for a gold medal at the Los Angeles Olympics in four years\' time.</p><p><br></p><p>\"It was a good learning experience for me. It was heartbreaking as well I was so close to win a medal. But I will make sure that I will do well in the future,\" he added.</p>', '2024-08-17 09:41:58', '2024-08-28 08:36:32', 1, 'Lakshya-Sen-phone-confiscated-by-Prakash-Padukone,-would-not-get-it-back-till-as-shuttler-copes-with-Olympic-heartbreak', '454ff4fd62585e96b81efd80b343bd11.jpg', 17, 'admin', NULL),
(11, 'Noida DLF Mall, Gurugram Ambience Mall Receive Bomb Threats, People Evacuated', 2, 9, '<p>Movie screening was stopped midway and people were evacuated after police received an email claiming that a bomb may have been planted.&nbsp;&nbsp;<br></p><p>The Noida\'s DLF Mall of India and Gurugram\'s Ambience Mall reportedly received bomb threat emails on Saturday.</p><p>Movie screening was stopped midway and people were evacuated after police received an email claiming that a bomb may have been planted.</p><p>After receiving the information, the police team immediately asked the mall and store staffers, visitors and moviegoers to vacate the premises.</p><p>DLF Mall of India is located in Delhi-NCR near Noida Sector 18, people visit to explore the multiplex cinema, entertainment zone and food zone among others. Inside the mall, there are many leading brands stores of apparel, footwear, sportswear and salons among others.</p>', '2024-08-17 09:46:05', NULL, 1, 'Noida-DLF-Mall,-Gurugram-Ambience-Mall-Receive-Bomb-Threats,-People-Evacuated', '909f8371117f52fa936d052f9c86dc85.jpg', NULL, 'admin', NULL),
(12, 'Stree 2 box office collection day 2: Shraddha Kapoor, Rajkummar Rao horror-comedy grosses â‚¹118 so far in India', 4, 11, '<p>Stree 2 box office collection day 2: Shraddha Kapoor and Rajkummar Rao\'s film had grossed â‚¹76 crore in India on its opening day.</p><p><br></p><p>The Shraddha Kapoor and Rajkummar Rao-starrer Stree 2 delivered a massive opening at the box office on Independence Day, demolishing all expectations. The film has surpassed the opening day collections of 2023â€™s hits Animal and Pathaan, which made Rs 63.8 crore and Rs 57 crore respectively. Stree 2 had preview shows on Wednesday evening, followed by a proper release on Thursday. As per trade analyst Taran Adarsh, the film has made Rs 64.8 crore collectively on both days. On Wednesday night, the film made Rs 9.4 cr and Rs 55.4 crore on Thursday.</p><p>Directed by Amar Kaushik, Stree 2 is by far the biggest opener of the year. Before this, the biggest Hindi opener of the year was Hrithik Roshan and Deepika Padukone-starrer Fighter, which made Rs 24.6 crore on its opening day in January. Kalki 2898 AD, which was released across multiple languages, including Hindi, Telugu and Tamil, made Rs 95 crore on its opening day, making it the biggest Indian opener of the year.</p><p>As per Sacnilk, Stree 2 observed an overall occupancy of 77.09 percent on Thursday. In the Delhi-NCR region, the film had 1200 shows with 86.75 percent occupancy, and in Mumbai, where the film had 1103 shows, the film saw an occupancy of 81 percent. Stree 2 released on Independence Day, and will now reap the benefits of the extended five-day weekend; Monday is also a holiday for Raksha Bandhan in many parts of the country.</p><p>Stree 2 clashed against John Abrahamâ€™s Vedaa and the Akshay Kumar-starrer Khel Khel Mein. Vedaa was also released in Tamil and Telugu, but could only bring in Rs 6.52 crore across India, while Khel Khel Mein only made Rs 5 crore.</p>', '2024-08-17 10:49:29', '2024-08-28 07:57:43', 1, 'Stree-2-box-office-collection-day-2:-Shraddha-Kapoor,-Rajkummar-Rao-horror-comedy-grosses-â‚¹118-so-far-in-India', 'ff21bf7231e5ae2bf8216b4437dabd5e.jpg', 1, 'admin', NULL),
(13, 'Gulmohar wins a National Award: Manoj Bajpayee celebrates his win while reminiscing about his early days in Mumbai, says, working with Sharmila Tagore was an honour', 4, 11, '<p>The recent win of Gulmohar at the National Film Awards has evoked a wave of nostalgia for Manoj Bajpayee, reminding him of his early days in the film industry. Bajpayee first gained national recognition when he won the Best Supporting Actor award for his role in Ram Gopal Varma\'s Satya.</p><p><br></p><p>Rahul V Chittellaâ€™s debut movie Gulmohar has won him three National Film Awards and his cast including Sharmila Tagore and Manoj Bajpayee cannot contain their happiness. Speaking to ANI, Bajpayee, who also won a special mention for his performance as Arun Batra shared, â€œIt is such a big achievement for the entire team and the director, whose first movie won three national awards.â€</p><p>At the recently held 70th National Film Awards, Gulmohar won the Best Hindi Film, Best Screenplay, and a Special Mention, making it one of the only few Bollywood movies achieving big this year. Sharmila Tagore while speaking to Indian Express shared that she was having her lunch when this news broke and it was the best thing she heard today.</p><p><br></p><p>Tagore shared, â€œI am absolutely over the moonâ€¦ And I am so so happy and Rahul is such a wonderful director. This is his debut film and he got so many awards and so much appreciation. I am so happy for him and most certainly I am very happy for myself and the team.â€ For the unversed, this was the veteran actressâ€™ comeback movie after more than a decade and earned her massive critical acclaim.</p><p><br></p><p>When Tagore was asked whether she would want to be a part of more movies in the future, the actress asserted that the makers need to be interested in casting her. â€œI am not averse to (doing films).. but yes, I would like to work. Not in too many films but now and then. Itâ€™s my first love and when I am in front of the camera, I just absolutely enjoy myself,â€ shared Sharmila.</p><p><br></p><p>Director Rahul V. Chittella in an official statement shared that he feels â€˜honoredâ€™ by Gulmoharâ€™s big feat. He continued, â€œIâ€™m delighted especially with Manoj Bajpayee also winning the best actor (special mention). Heâ€™s a rare treasure and itâ€™s been a privilege creating this film with him and Sharmila ji!â€</p><p>Produced by Star Studios production in association with Chalkboard Entertainment and Autonomous Works, Gulmoharâ€™s original music was composed by Siddhartha Khosla and was co-written by Arpita Mukherjee along with Rahul. If you still have not watched this masterpiece, it is available to stream on Disney+ Hotstar.</p>', '2024-08-17 10:59:29', '2024-08-17 12:08:46', 1, 'Gulmohar-wins-a-National-Award:-Manoj-Bajpayee-celebrates-his-win-while-reminiscing-about-his-early-days-in-Mumbai,-says,-working-with-Sharmila-Tagore-was-an-honour', '20dceb512fa035224c933b8b92420ce7.jpg', 2, 'admin', NULL),
(14, 'Back to training, Neeraj Chopra eyes Diamond League to end season', 1, 4, '<p><b>Olympic medalist says will seek medical assistance for persistent groin injury next month</b></p><p><br></p><p>After Arshad Nadeem became Pakistanâ€™s first individual Olympic gold medallist ever at Paris 2024, the country has rolled out the red carpet for the javelin thrower in scenes reminiscent of the welcome Neeraj Chopra received after winning gold medal at the Tokyo Olympics.</p><p>Arshad Nadeem has already been accorded several high-level ceremonies in Pakistan, but what has caught the attention of fans has been how his father-in-law gifted him a buffalo for his Olympic record-breaking feat at the Paris Olympics.</p><p>Expectedly, Neeraj Chopra was asked about this unique gift when he held a briefing for Indian journalists after his silver medal at Paris 2024.</p><p><br></p><p>â€œI was gifted desi ghee once. Back home in Haryana also we get things like these as gifts: 10 kilo desi ghee or 50 kilos of desi ghee. Or ladoos. There are promises made: â€˜If Neeraj wins this competition, Iâ€™ll give him 50 kgs of ghee.â€™ I would hear these things being said since I was kid, this was when circle kabaddi and wrestling were really popular. Ghee is gifted because we believe that it helps increase strength, which we need in our sport. Buffalos are also gifted in our region. Wrestlers and kabaddi players are also gifted things like Bullet motorbikes or tractors,â€ Neeraj Chopra told journalists with a smile at a press briefing organised by JSW Sports.</p><p>In the interaction, Neeraj Chopra revealed that he is not planning on returning back home to India at least for another month â€” opting to stay in Switzerland and compete in Diamond League meets. He also said he could undergo surgery for a niggle in his groin that has been bothering him for many months now.</p><p><br></p><p>â€œMy mother sometimes sees these videos and tells me to train lightly. She canâ€™t see me put myself under so much pain. But I tell her, if I ease up on hard work, others will over take me in competition,â€ he chuckled.</p>', '2024-08-17 11:02:46', '2024-08-28 07:38:42', 1, 'Back-to-training,-Neeraj-Chopra-eyes-Diamond-League-to-end-season', '1b9db94956b882f9ca8525ce99e5f3db.jpg', 2, 'admin', NULL),
(15, ' à¤¶à¥à¤¯à¤¾à¤® à¤°à¤œà¤• à¤¨à¥‡ RJD à¤¸à¥‡ à¤‡à¤¸à¥à¤¤à¥€à¤«à¤¾ à¤¦à¤¿à¤¯à¤¾: à¤²à¤¾à¤²à¥‚ à¤•à¥‹ à¤²à¤¿à¤–à¤¾-à¤®à¥ˆà¤‚ à¤°à¤¿à¤¶à¥à¤¤à¥‡à¤¦à¤¾à¤°à¥€ à¤¨à¤¿à¤­à¤¾ à¤°à¤¹à¤¾ à¤¥à¤¾, à¤†à¤ª à¤šà¤¾à¤² à¤šà¤² à¤°à¤¹à¥‡ à¤¥à¥‡, JDU à¤®à¥‡à¤‚ à¤¶à¤¾à¤®à¤¿à¤² à¤¹à¥‹à¤‚à¤—à¥‡...', 6, 6, '<p><br></p><p><span style=\"color: rgb(255, 71, 21); font-family: Kadwa, serif; font-size: 24px;\">à¤¶à¥à¤¯à¤¾à¤® à¤°à¤œà¤• à¤¨à¥‡ RJD à¤¸à¥‡ à¤‡à¤¸à¥à¤¤à¥€à¤«à¤¾ à¤¦à¤¿à¤¯à¤¾: à¤²à¤¾à¤²à¥‚ à¤•à¥‹ à¤²à¤¿à¤–à¤¾-à¤®à¥ˆà¤‚ à¤°à¤¿à¤¶à¥à¤¤à¥‡à¤¦à¤¾à¤°à¥€ à¤¨à¤¿à¤­à¤¾ à¤°à¤¹à¤¾ à¤¥à¤¾, à¤†à¤ª à¤šà¤¾à¤² à¤šà¤² à¤°à¤¹à¥‡ à¤¥à¥‡, JDU à¤®à¥‡à¤‚ à¤¶à¤¾à¤®à¤¿à¤² à¤¹à¥‹à¤‚à¤—à¥‡...</span><br></p>', '2024-08-22 09:18:50', '2024-08-22 09:19:33', 1, '-à¤¶à¥à¤¯à¤¾à¤®-à¤°à¤œà¤•-à¤¨à¥‡-RJD-à¤¸à¥‡-à¤‡à¤¸à¥à¤¤à¥€à¤«à¤¾-à¤¦à¤¿à¤¯à¤¾:-à¤²à¤¾à¤²à¥‚-à¤•à¥‹-à¤²à¤¿à¤–à¤¾-à¤®à¥ˆà¤‚-à¤°à¤¿à¤¶à¥à¤¤à¥‡à¤¦à¤¾à¤°à¥€-à¤¨à¤¿à¤­à¤¾-à¤°à¤¹à¤¾-à¤¥à¤¾,-à¤†à¤ª-à¤šà¤¾à¤²-à¤šà¤²-à¤°à¤¹à¥‡-à¤¥à¥‡,-JDU-à¤®à¥‡à¤‚-à¤¶à¤¾à¤®à¤¿à¤²-à¤¹à¥‹à¤‚à¤—à¥‡...', 'db09fb615f574f4e14ec1707e62285e4.jpg', 2, 'admin', NULL),
(16, 'iPhone 16 will launch on September 9: India price, camera upgrades, design details and all we know so far', 9, 12, '<h5>Apple has confirmed that the iPhone 16 series will launch on September 9, with four models expected to be unveiled.</h5><p><font face=\"Hind Madurai, sans-serif\">Apple has officially set the iPhone 16 series launch for September 9. As always, this annual event is highly anticipated, with the spotlight on the new iPhone 16 lineup. This year, Apple is expected to introduce four models: the iPhone 16, iPhone 16 Plus, iPhone 16 Pro, and iPhone 16 Pro Max. With the date now confirmed, it\'s time to dive into what we know so far about these upcoming devices from the tech giant.</font></p><p><font face=\"Hind Madurai, sans-serif\"><b>Whatâ€™s New with the iPhone 16 Series?</b></font></p><p><font face=\"Hind Madurai, sans-serif\">This yearâ€™s Apple event might have a few surprises, but the iPhone 16 series is expected to steal the show. The buzz around these new iPhones has been building for months, and it sounds like Apple is making some big changes. During June\'s WWDC 2024, there was talk that the iPhone 16 could be the first phone to come with iOS 18 already installed. Thatâ€™s right, no need to wait for an updateâ€”itâ€™ll be good to go out of the box. And if youâ€™re eyeing the Pro models, you might get even more bang for your buck with Apple Intelligence, though that feature might roll out a bit later in October.</font></p><p><font face=\"Hind Madurai, sans-serif\">Now, letâ€™s talk models. The iPhone 16 lineup is expected to include four versions: the standard iPhone 16, iPhone 16 Plus, iPhone 16 Pro, and iPhone 16 Pro Max. All of them are rumored to pack the new Apple A18 Pro chipset, so you can expect top-notch performance. But donâ€™t be fooledâ€”theyâ€™re not just clones of each other. Each model has its own personality and features that set it apart.</font></p><p><font face=\"Hind Madurai, sans-serif\">iPhone 16: A Fresh Take on a Classic</font></p><p><font face=\"Hind Madurai, sans-serif\">If youâ€™re thinking of getting the base model, the iPhone 16, youâ€™re in for a treat. Apple seems to be taking a page out of its own playbook and bringing back some design elements from the iPhone 11. Remember the diagonal camera setup from recent models? Thatâ€™s gone. Instead, the iPhone 16 is rumored to have a pair of vertically stacked camera lenses, all neatly packed into a capsule-shaped camera island on the back. Itâ€™s like a blast from the past but with a modern twist. Plus, itâ€™s expected to come in some fun colors: white, black, blue, green, and pink.</font></p><p><font face=\"Hind Madurai, sans-serif\">As for the camera itself, donâ€™t expect any drastic changes from the iPhone 15. The iPhone 16 is likely sticking with a 48-megapixel main camera with an f/1.6 aperture, perfect for those crisp shots with a nice depth of field. And yes, itâ€™ll still have that handy 2x optical zoom.</font></p><p><font face=\"Hind Madurai, sans-serif\">iPhone 16 Plus: The Bigger brother</font></p><p><font face=\"Hind Madurai, sans-serif\">Looking for something a bit bigger? The iPhone 16 Plus might be your pick. Itâ€™s expected to share most of its specs with the iPhone 16 but with a larger screen to give you more room to play. However, thereâ€™s a catchâ€”rumors suggest that the battery capacity might actually take a slight hit, with a 9% decrease compared to last yearâ€™s model. Still, with overall battery improvements in the iPhone 16 series, it might not be a deal-breaker.</font></p><p><font face=\"Hind Madurai, sans-serif\">iPhone 16 Pro and Pro Max: The Premium Choices</font></p><p><font face=\"Hind Madurai, sans-serif\">If you want the best of the best, the iPhone 16 Pro and Pro Max are where itâ€™s at. These models are expected to come with all the bells and whistles, including a triple-camera setup on the back. The design is set to be similar to what weâ€™ve seen in the current Pro models, but with a new color optionâ€”desert titanium. This oneâ€™s said to be darker and have a matte texture, so if youâ€™re after a sleek and sophisticated look, this could be it.</font></p><p><font face=\"Hind Madurai, sans-serif\">One of the big upgrades on the Pro models is the ultra-wide camera. Rumor has it that itâ€™s getting a major boost from 12 megapixels to 48 megapixels. Thatâ€™s a serious upgrade if you love taking wide-angle shots. And of course, the battery life is expected to be even better than last yearâ€™s Pro models, so you can go all day without worrying about running out of juice.</font></p><div><br></div><p><b></b><br></p>', '2024-08-27 11:33:41', NULL, 1, 'iPhone-16-will-launch-on-September-9:-India-price,-camera-upgrades,-design-details-and-all-we-know-so-far', '63f6dcbb8cf855c4ab29277b81e78d10.jpg', NULL, 'admin', NULL),
(17, 'OpenAI warns Californiaâ€™s AI bill threatens US innovation', 9, 14, '<p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; word-break: break-word; text-align: justify;\"><span style=\"font-size: 16px; color: rgb(74, 74, 74);\"><font face=\"Times New Roman\">OpenAI has added its voice to the growing chorus of tech leaders and politicians opposing a controversial AI safety bill in California. The company argues that the legislation, SB 1047, would stifle innovation and that regulation should be handled at a federal level.</font></span></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; word-break: break-word; text-align: justify;\"><font color=\"#4a4a4a\" face=\"Times New Roman\"><span style=\"font-size: 16px;\">In a letter sent to California State Senator Scott Wienerâ€™s office, OpenAI expressed concerns that the bill could have â€œbroad and significantâ€ implications for US competitiveness and national security. The company argued that SB 1047 would threaten Californiaâ€™s position as a global leader in AI, prompting talent to seek â€œgreater opportunity elsewhere.â€&nbsp;</span></font></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; word-break: break-word; text-align: justify;\"><font color=\"#4a4a4a\" face=\"Times New Roman\"><span style=\"font-size: 16px;\">Introduced by Senator Wiener, the bill aims to enact â€œcommon sense safety standardsâ€ for companies developing large AI models exceeding specific size and cost thresholds. These standards would require companies to implement shut-down mechanisms, take â€œreasonable careâ€ to prevent catastrophic outcomes, and submit compliance statements to the California attorney general. Failure to comply could result in lawsuits and civil penalties.</span></font></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; word-break: break-word; text-align: justify;\"><font color=\"#4a4a4a\" face=\"Times New Roman\"><span style=\"font-size: 16px;\">Lieutenant General John (Jack) Shanahan, who served in the US Air Force and was the inaugural director of the US Department of Defenseâ€™s Joint Artificial Intelligence Center (JAIC), believes the bill â€œthoughtfully navigates the serious risks that AI poses to both civil society and national securityâ€ and provides â€œpragmatic solutionsâ€.</span></font></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; word-break: break-word; text-align: justify;\"><font color=\"#4a4a4a\" face=\"Times New Roman\"><span style=\"font-size: 16px;\"><br></span></font></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; word-break: break-word; text-align: justify;\"><font color=\"#4a4a4a\" face=\"Times New Roman\"><span style=\"font-size: 16px;\">Hon. Andrew C. Weber â€“ former Assistant Secretary of Defense for Nuclear, Chemical, and Biological Defense Programs â€“ echoed the national security concerns.</span></font></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; word-break: break-word; text-align: justify;\"><font color=\"#4a4a4a\" face=\"Times New Roman\"><span style=\"font-size: 16px;\">â€œThe theft of a powerful AI system from a leading lab by our adversaries would impose considerable risks on us all,â€ said Weber. â€œDevelopers of the most advanced AI systems need to take significant cybersecurity precautions given the potential risks involved in their work. Iâ€™m glad to see that SB 1047 helps establish the necessary protective measures.â€</span></font></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; word-break: break-word; text-align: justify;\"><font color=\"#4a4a4a\" face=\"Times New Roman\"><span style=\"font-size: 16px;\"><br></span></font></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; word-break: break-word; text-align: justify;\"><font color=\"#4a4a4a\" face=\"Times New Roman\"><span style=\"font-size: 16px;\">SB 1047 has sparked fierce opposition from major tech companies, startups, and venture capitalists who argue that it overreaches for a nascent technology, potentially stifling innovation and driving businesses from the state. These concerns are echoed by OpenAI, with sources revealing that the company has paused plans to expand its San Francisco offices due to the uncertain regulatory landscape.</span></font></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; word-break: break-word; text-align: justify;\"><font color=\"#4a4a4a\" face=\"Times New Roman\"><span style=\"font-size: 16px;\">Senator Wiener defended the bill, stating that OpenAIâ€™s letter fails to â€œcriticise a single provision.â€ He dismissed concerns about talent exodus as â€œnonsensical,â€ stating that the law would apply to any company conducting business in California, regardless of their physical location. Wiener highlighted the billâ€™s â€œhighly reasonableâ€ requirement for large AI labs to test their models for catastrophic safety risks, a practice many have already committed to.</span></font></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; word-break: break-word; text-align: justify;\"><font color=\"#4a4a4a\" face=\"Times New Roman\"><span style=\"font-size: 16px;\">Critics, however, counter that mandating the submission of model details to the government will hinder innovation. They also fear that the threat of lawsuits will deter smaller, open-source developers from establishing startups.&nbsp; In response to the backlash, Senator Wiener recently amended the bill to eliminate criminal liability for non-compliant companies, safeguard smaller developers, and remove the proposed â€œFrontier Model Division.â€</span></font></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; word-break: break-word; text-align: justify;\"><font color=\"#4a4a4a\" face=\"Times New Roman\"><span style=\"font-size: 16px;\"><br></span></font></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; word-break: break-word; text-align: justify;\"><font color=\"#4a4a4a\" face=\"Times New Roman\"><span style=\"font-size: 16px;\">OpenAI maintains that a clear federal framework, rather than state-level regulation, is essential for preserving public safety while maintaining&nbsp; US competitiveness against rivals like China. The company highlighted the suitability of federal agencies, such as the White House Office of Science and Technology Policy and the Department of Commerce, to govern AI risks.</span></font></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; word-break: break-word; text-align: justify;\"><font color=\"#4a4a4a\" face=\"Times New Roman\"><span style=\"font-size: 16px;\"><br></span></font></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; word-break: break-word; text-align: justify;\"><font color=\"#4a4a4a\" face=\"Times New Roman\"><span style=\"font-size: 16px;\">Senator Wiener acknowledged the ideal of congressional action but expressed scepticism about its likelihood. He drew parallels with Californiaâ€™s data privacy law, passed in the absence of federal action, suggesting that inaction from Congress shouldnâ€™t preclude California from taking a leading role.</span></font></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; word-break: break-word; text-align: justify;\"><font color=\"#4a4a4a\" face=\"Times New Roman\"><span style=\"font-size: 16px;\">The California state assembly is set to vote on SB 1047 this month. If passed, the bill will land on the desk of Governor Gavin Newsom, whose stance on the legislation remains unclear. However, Newsom has publicly recognised the need to balance AI innovation with risk mitigation.</span></font></p>', '2024-08-27 11:43:30', '2024-08-28 07:52:29', 1, 'OpenAI-warns-Californiaâ€™s-AI-bill-threatens-US-innovation', '3e47366ea6d6878560873b8b92f26011.jpg', 1, 'admin', NULL),
(18, 'After Joe Biden, his Russian foe Putin-PM Modi discuss his Ukraine trip', 7, 15, '<h4><i>Last Friday, PM Modi visited Ukraine after concluding his visit to Poland. He met with Ukrainian President Volodymyr Zelensky and invited Zelensky to visit India during their talks</i></h4><p><br></p><p>Prime Minister Narendra Modi on Tuesday spoke with Russian President Vladimir Putin over his recent visit to Ukraine and deliberated on measures to bolster India-Russia ties.</p><p>In a post on X (formerly Twitter), Modi said, \"Spoke with President Putin today. Discussed measures to further strengthen Special and Privileged Strategic Partnership. Exchanged perspectives on the Russia-Ukraine conflict and my insights from the recent visit to Ukraineâ€¦â€</p><p><br></p><p>Modi also reiterated Indiaâ€™s commitment to supporting a prompt and peaceful resolution to the conflict going on between Ukraine and Russia.</p><p><br></p><p>A day before, US President Joe Biden had also spoken to PM Modi over his visit to the conflict-torn country. â€œWe also discussed the situation in Bangladesh and stressed on the need for early restoration of normalcy, and ensuring the safety and security of minorities, especially Hindus, in Bangladesh,â€ Modi said in a separate post on X.</p><p>In a post on \'X\', Biden said, \"I spoke with Prime Minister Modi to discuss his recent trip to Poland and Ukraine, and commended him for his message of peace and ongoing humanitarian support for Ukraine.\"</p><p><br></p><p>Last Friday, Modi visited Ukraine on a nine-hour trip after concluding his visit to Poland. He met with Ukrainian President Volodymyr Zelensky and held crucial meetings. Modi also invited Zelensky to visit India during their talks.</p><p>PM Modiâ€™s Ukraine visit followed weeks after he paid a two-day visit to Russia in the first half of July. The two leaders had discussed several crucial areas of cooperation and PM Modi had announced the opening of two more consulates in the Russian cities of Kazan and Yekaterinburg.</p><p>During the trip, Modi also made the first direct public reference to the ongoing war as he told Putin that no solution to any conflict was possible on the battlefield.</p><p><br></p><p>Notably, Modiâ€™s Russia trip had deeply upset Zelensky, who had expressed his â€œhuge disappointmentâ€ while reacting to the â€œwarm hugâ€ shared by Modi-Putin during the meeting.</p><div><br></div>', '2024-08-27 12:03:59', '2024-08-28 07:58:01', 1, 'After-Joe-Biden,-his-Russian-foe-Putin-PM-Modi-discuss-his-Ukraine-trip', 'cb8154ac22218017baebe82bec7768b3.jpg', 12, 'admin', NULL);
INSERT INTO `tblposts` (`id`, `PostTitle`, `CategoryId`, `SubCategoryId`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostUrl`, `PostImage`, `viewCounter`, `postedBy`, `lastUpdatedBy`) VALUES
(19, 'EAM Jaishankar assures full support to Brazil in its G20 Presidency', 7, 16, '<p><i>Welcoming the delegation, Jaishankar appreciated unique initiatives centered on the theme of building a \'just world\' and a \'sustainable planet\'</i></p><p><i><br></i></p><p><i>\"Jaishankar said that he looked forward to discussing the multilateral cooperation \"</i></p><p><br></p><p>External Affairs Minister S Jaishankar on Tuesday assured Brazil of India\'s support in its G20 Presidency at the 9th India-Brazil Joint Commission Meeting in Delhi.</p><p>Welcoming the delegation, Jaishankar appreciated unique initiatives centered on the theme of building a \'just world\' and a \'sustainable planet\'.in G20, among other things.</p><p><br></p><p>\"I look forward today to a very productive meeting of the joint commission. Let me also begin by congratulating Brazil for conducting the G20 meeting successfully and also on the first ministerial consensus document realized during the G20 development Working Group ministerial meeting. I\'d like to reiterate India\'s full support to the Brazilian G20 Presidency and also recall that we got your fullest support during our own Presidency. We appreciate various unique initiatives centered on the theme of building a just world and a sustainable planet,\" Jaishankar said.</p><p><br></p><p>Jaishankar also said that the bilateral trade between India and Brazil has spiked last year.</p><p>\"We have a substantial bilateral trade basket. It has by and large gone up in the last year. We\'ve had some challenges- it\'s something I look forward to discussing with you. We also have a very important energy cooperation between our two countries and we have particularly valued the biofuels cooperation that India and Brazil have established,\" he said.</p><p><br></p><p>Jaishankar said that he was pleased to see increased appreciation of Indian culture in Brazil.</p><p>\"The people-to-people relations... are a very big source of support for our relationship. We\'re very pleased to see greater appreciation of Indian culture, performing arts, philosophy in Brazil, and celebrations relating to India in various platforms,\" Jaishankar said.</p><p><br></p><p>Jaishankar said that the India-Brazil partnership, that was established in 2006, has deepened over the years.</p><p>\"Our strategic partnership, which was established in 2006, has deepened and diversified over the years. It now spans a very wide range of domains, from defence, space and security, including cyber to trade and investment, oil and natural gas, biofuels, agriculture, animal husbandry, food processing, health and medicine, traditional medicine, science, technology, culture and people-to-people relations,\" he said.</p><p>Jaishankar said that he looked forward to discussing the multilateral cooperation in G20, among other things.</p><p>\"I also today look forward to discussing our multilateral cooperation G20. I have mentioned that in the BRICS we have been strong and reliable partners. We have in the UN platforms always worked together. We together are members of the G4 group whose meeting I look forward to next month. So bilaterally, multilaterally and on a number of regional issues, I think we are both countries who have taken important public positions on matters which concern the international community. I look forward to discussing some of those issues with you as well,\" he said.</p><p><br></p>', '2024-08-27 12:08:26', '2024-08-28 10:46:02', 1, 'EAM-Jaishankar-assures-full-support-to-Brazil-in-its-G20-Presidency', 'd15fda5068e10f3ed80540b4bc23f4d5.jpg', 38, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

DROP TABLE IF EXISTS `tblsubcategory`;
CREATE TABLE IF NOT EXISTS `tblsubcategory` (
  `SubCategoryId` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryId` int(11) DEFAULT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  PRIMARY KEY (`SubCategoryId`),
  KEY `catid` (`CategoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`SubCategoryId`, `CategoryId`, `Subcategory`, `SubCatDescription`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(1, 1, 'Sports ', 'Sports News', '2024-08-07 18:30:00', '2024-08-08 15:48:30', 1),
(2, 1, 'Cricket', 'News about cricket', '2024-08-15 05:22:00', NULL, 1),
(3, 1, 'Football', 'News about football', '2024-08-15 05:22:15', NULL, 1),
(4, 1, 'Olympics ', 'News about Olympics ', '2024-08-15 05:22:35', NULL, 1),
(5, 4, 'Hollywood', 'News about hollywood', '2024-08-15 05:22:56', NULL, 1),
(6, 6, 'Indian Politics ', 'This is the test for Indian politics.', '2024-08-16 13:14:57', NULL, 1),
(7, 3, 'International', 'This is an International News', '2024-08-16 13:15:38', '2024-08-17 05:33:51', 1),
(8, 2, 'Bihar', 'News about Bihar State ', '2024-08-17 08:51:21', NULL, 1),
(9, 2, 'India', 'News about India ', '2024-08-17 08:51:41', NULL, 1),
(10, 2, 'Jammu & Kashmir', 'News about J&K', '2024-08-17 09:03:51', NULL, 1),
(11, 4, 'Bollywood', 'News about bollywood', '2024-08-17 10:48:37', NULL, 1),
(12, 9, 'Mobiles', 'News about android and ios', '2024-08-27 11:17:14', '2024-08-27 11:22:53', 1),
(13, 9, 'Windows', 'News about windows operating sys', '2024-08-27 11:17:38', NULL, 1),
(14, 9, 'New arrivals', 'news about new technologies ', '2024-08-27 11:18:16', NULL, 1),
(15, 7, 'International', 'abx', '2024-08-27 12:02:30', NULL, 1),
(16, 7, 'Extrenal Affairs', 'xyz', '2024-08-27 12:06:08', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

DROP TABLE IF EXISTS `tblusers`;
CREATE TABLE IF NOT EXISTS `tblusers` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) DEFAULT NULL,
  `emailId` varchar(255) DEFAULT NULL,
  `conatctNo` bigint(11) DEFAULT NULL,
  `address` mediumtext DEFAULT NULL,
  `regDate` int(11) DEFAULT NULL,
  `isActive` int(1) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD CONSTRAINT `pid` FOREIGN KEY (`postId`) REFERENCES `tblposts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblnewstags`
--
ALTER TABLE `tblnewstags`
  ADD CONSTRAINT `newspostid` FOREIGN KEY (`PostId`) REFERENCES `tblposts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD CONSTRAINT `postcatid` FOREIGN KEY (`CategoryId`) REFERENCES `tblcategory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `postsucatid` FOREIGN KEY (`SubCategoryId`) REFERENCES `tblsubcategory` (`SubCategoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `subadmin` FOREIGN KEY (`postedBy`) REFERENCES `tbladmin` (`AdminUserName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD CONSTRAINT `catid` FOREIGN KEY (`CategoryId`) REFERENCES `tblcategory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
