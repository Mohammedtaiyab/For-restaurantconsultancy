-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 10, 2021 at 08:34 AM
-- Server version: 10.4.15-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u613418722_Forrestaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `ID` int(4) NOT NULL,
  `Title` varchar(225) NOT NULL,
  `Paragraph` text NOT NULL,
  `Image` varchar(225) NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`ID`, `Title`, `Paragraph`, `Image`, `Status`) VALUES
(1, 'How we got started', '<p>It all started with a personal experience of our founder&nbsp; &nbsp; &nbsp;<strong>Bryan Agera</strong>.</p>\r\n\r\n<p>Bryan has been working in the hospitality industry for last <strong>17 years with experience in India as well as abroad</strong>. In his rich and diverse experience, he witnessed the plight of various restaurants, cafes, and other similar outlets in India. Where the restaurant owners and managers saw problems &amp; difficulties, Bryan could easily see solutions and opportunities. This experience and realization gave him the idea of starting FOR Restaurant Consultancy with the aim of helping restaurants at every step of the way. Bryan&rsquo;s experience of 15 years at <a href=\"https://www.royalcaribbean.com/\">Royal Caribbean</a>&nbsp;also gives him the technical edge when it comes to the nitty-gritty of the industry.</p>\r\n', '3065_1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(4) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` text NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Username`, `Password`, `Status`) VALUES
(1, 'Administrator', 'softEzi@123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `ID` int(4) NOT NULL,
  `Title` varchar(225) NOT NULL,
  `Addon` date NOT NULL,
  `Blog` text NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Image` varchar(225) NOT NULL,
  `Tags` varchar(225) NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`ID`, `Title`, `Addon`, `Blog`, `Category`, `Image`, `Tags`, `Status`) VALUES
(3, '', '2021-01-09', '', 'Hiring', '9972_Blog.jpg', '', 0),
(4, '', '2021-01-09', '', 'Digital Marketing', '1004_Blog.jpg', '', 0),
(5, '', '2021-01-09', '', 'Menu Development Design', '4152_Blog.jpg', '', 0),
(7, '', '2021-01-09', '', 'OPERATION STRATEGY', '5838_Blog.png', '', 0),
(8, '', '2021-01-09', '', 'Restaurant Assessment', '9231_Blog.jpg', '', 0),
(13, '', '2021-02-27', '', 'Concept Designing', '', '', 0),
(14, '', '2021-02-27', '', 'Concept Design', '5547_Blog.png', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `Id` int(4) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `ClientLogo` varchar(1000) NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`Id`, `Name`, `ClientLogo`, `Status`) VALUES
(6, 'SoftEzi', '3575_client.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Message` text NOT NULL,
  `Company` varchar(225) NOT NULL,
  `Location` varchar(225) NOT NULL,
  `Budget` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Subscribed` tinyint(4) NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Fname`, `Lname`, `Email`, `Phone`, `Message`, `Company`, `Location`, `Budget`, `Category`, `Subscribed`, `Status`) VALUES
(26, 'Donaldsoync', '', 'no-replyEl@gmail.com', '81319224543', 'Good day!  for-restaurantconsultancy.com \r\n \r\nDid you know that it is possible to send message absolutely legally? \r\nWe suggest a new legal way of sending commercial offer through contact forms. Such forms are located on many sites. \r\nWhen such commercial offers are sent, no personal data is used, and messages are sent to forms specifically designed to receive messages and appeals. \r\nalso, messages sent through feedback Forms do not get into spam because such messages are considered important. \r\nWe offer you to test our service for free. We will send up to 50,000 messages for you. \r\nThe cost of sending one million messages is 49 USD. \r\n \r\nThis offer is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693<br>Interested into Services :-', 'google', 'Namibia', '', '', 0, 0),
(27, 'Mike King\r\n', '', 'see-email-in-message@monkeydigital.co', '86135329978', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your for-restaurantconsultancy.com website? \r\nHaving a high DA score, always helps \r\n \r\nGet your for-restaurantconsultancy.com to have a 50+ points in Moz DA with us today and rip the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nNEW: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nthank you \r\nMike King\r\n \r\nsupport@monkeydigital.co<br>Interested into Services :-', 'google', 'Netherlands Antilles', '', '', 0, 0),
(28, 'Alexandra Cross', '', 'alexandracrossuk@gmail.com', '86784673987', 'Dear Sir/Madam, \r\n \r\nWe are looking forward to buy your products and partner with your company, can you please send us your Catalog or your website to learn more about your products or prices list by email and if we can make some order with you and start a long-term partnership. \r\nCan your company supply us? and give us more information about the possibility to become one of your regular Wholesale? \r\n \r\nOur Payment terms is by swift within 15 days net or Credit Insurance. \r\n \r\nMiss Alexandra Cross \r\nExecutive Purchasing Department \r\n \r\nPhone: +44 20 8638 5864 \r\nEmail: info@costcoplc.com \r\n \r\nCOSTCO WHOLESALE UK LIMITED \r\nhttp://www.costco.co.uk<br>Interested into Services :-', 'google', 'Estonia', '', '', 0, 0),
(29, 'Mike Ferguson\r\n', '', 'no-replyVax@gmail.com', '84565611367', 'Hi there \r\n \r\nI have just verified your SEO on  for-restaurantconsultancy.com for its Local SEO Trend and seen that your website could use an upgrade. \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nStart enhancing your local visibility with us, today! \r\n \r\nregards \r\nMike Ferguson\r\n \r\nSpeed SEO Digital Agency \r\nsupport@speed-seo.net<br>Interested into Services :-', 'google', 'New Zealand', '', '', 0, 0),
(30, 'Mike Murphy\r\n', '', 'no-reply@google.com', '81193959678', 'Good Day \r\n \r\nI have just took a look on your SEO for  for-restaurantconsultancy.com for its SEO Trend and saw that your website could use an upgrade. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nMike Murphy\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de<br>Interested into Services :-', 'google', 'Taiwan', '', '', 0, 0),
(31, 'Mervin Agera', '', 'mervinrayon@gmail.com', '08655997455', 'Hi<br>Interested into Services :-Concept Design', 'Digi Now', 'Thane', '', '', 0, 0),
(32, 'Mervin Agera', '', 'mervinrayon@gmail.com', '08655997455', 'abc', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(4) NOT NULL,
  `Image` varchar(225) NOT NULL,
  `Title` varchar(1000) NOT NULL,
  `Paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `Image`, `Title`, `Paragraph`) VALUES
(1, '9074_emply.jpg', 'Renowned Chefs', '<p>At FOR Restaurant Consultancy &ndash; the best, most experienced, and renowned chefs of the industry will work for you. With their first-hand experience and hard-earned expertise, our chefs will design your menu, train your staff, and be there to mentor the team at every step of the way.</p>\r\n\r\n<p>Moreover, the chefs will not only design the menu and choose the cuisine for you but also help you excel the recipe by food tasting and reviewing. The Chefs of our company are very passionate about their work and treat every project as their own. In the end, you will have the perfect cuisine, perfect menu, and the perfect taste of the items in that menu ready for you before you start serving your customers. How does that sound?</p>\r\n'),
(2, '2941_emply.jpg', 'Creative Designers', '<p>We live in a modern world where nobody is simply selling a product or a service. We are all selling an experience. And in order to sell a beautiful and satisfying experience as a restaurant, one must deliver a memorable ambience and a gorgeous interior.</p>\r\n\r\n<p>This is where our creative designers come into the picture. The team of Interior Designers at FOR Restaurant Consultancy are extremely well-trained and incredibly experienced. They are here to deliver the finest interior designing solutions with an end result that is truly unforgettable and instantly desirable.</p>\r\n\r\n<p>From designing the concept to the final execution &ndash; our designers see you through the entire process and make your dream a very evident reality.</p>\r\n'),
(3, '1905_emply.jpg', 'Marketing Geeks ', '<p>Even with the perfect product, service, and overall experience as your deliverables; you are still always going to need effective marketing in order to drive customers to your restaurants.</p>\r\n\r\n<p>FOR Restaurant Consultancy has a team of dedicated Professionals and Creative Minds who work with the sole objective of creating Brand awareness for your business in the market. The team utilises all the online as well as offline platforms of advertising to achieve the desirable result.</p>\r\n\r\n<p>Our Marketing Geeks are especially good at Social Media Marketing and increasing the reach of your restaurant via digital tools at their disposal. We will not only drive new customers to your restaurant but also create a brand name that can be sold as a Franchise in the future.&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE `head` (
  `ID` int(11) NOT NULL,
  `Page` varchar(100) NOT NULL,
  `Title` varchar(225) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `Description` text NOT NULL,
  `Robots` varchar(1000) NOT NULL,
  `Script` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `head`
--

INSERT INTO `head` (`ID`, `Page`, `Title`, `keywords`, `Description`, `Robots`, `Script`) VALUES
(1, 'index', 'For-Restaurant Constancy ', 'Restaurant,Constancy', 'Restaurant Constancy creates successful new dining concepts, Improves existing operations and extends the life span of established restaurants.', 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1,Index', ''),
(2, 'howwework', 'How We Work !!', 'Lets Work', 'Let us Know What you nedd', 'hello,hii', 'No-Script'),
(3, 'whatwedo', '', '', '', '', ''),
(4, 'whoweare', '', '', '', '', ''),
(5, 'conceptdesign', 'Concept Designing', 'Concepts,Desigining', 'Get Your Concepts Clear', 'none', ''),
(6, 'operationstrategy', '', '', '', '', ''),
(7, 'training', '', '', '', '', ''),
(8, 'restaurantassessment', '', '', '', '', ''),
(9, 'menudevelopmentdesign', '', '', '', '', ''),
(10, 'licensing', '', '', '', '', ''),
(11, 'hiring', '', '', '', '', ''),
(12, 'digitalmarketing', '', '', '', '', ''),
(13, 'businessstrategy', '', '', '', '', ''),
(14, 'barkitchenorganization', '', '', '', '', ''),
(15, 'blogs', '', '', '', '', ''),
(16, 'contact', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `ID` int(4) NOT NULL,
  `Page` varchar(50) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Paragraph` text NOT NULL,
  `Bg_image` varchar(255) NOT NULL,
  `Button_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`ID`, `Page`, `Title`, `Paragraph`, `Bg_image`, `Button_link`) VALUES
(1, 'index', 'We are the Kingmakers', '<p>Do you want to be just another restaurant or do you want to stand out and rule the industry? Do you want to keep struggling to stay afloat or do you want to swim your way across to win that goddamned Gold Medal? The key to your success lies in these answers and in your vision. Share your vision with us and watch the magic commence.</p>\r\n', '4851_index.jpg', 'whoweare'),
(2, 'howwework', 'How We Work!!', '<p>We will not just enable you to run your restaurant smoothly but also ensure that you do not end up making fatal mistakes, which can lead to restaurant closure.</p>\r\n', '9062_howwework.jpg', 'menudevelopmentdesign'),
(3, 'whatwedo', 'What We Do!!', '<p>We provide an extensive range of services for all kinds of Restaurants in India to pave way for guaranteed and sustainable success.</p>\r\n', '6566_whatwedo.jpg', 'whatwedo'),
(4, 'whoweare', 'Who We Are ??', '<p>We are a bunch of passionate individuals and our passion is to help restaurants achieve its true potential. From stalwarts of the hospitality industry to experts of marketing &ndash; our team has both, diversity and expertise to do justice with every project we work on.&nbsp;</p>\r\n', '5770_whoweare.jpg', 'restaurantconsultancywhoweare'),
(5, 'conceptdesign', 'Concept Designing', '<p>Concept Design is where it ALL begins. It is the very pedestal from where your pathway of success will be created and nurtured. Here, we create a unique story for you that the specific demographic of our plan would love to be a part of. We give this story the perfect outline, dialogues, climax, and even a conclusion. We make sure that it&rsquo;s a story that nobody has heard before.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '7116_5.jpg', 'conceptdesigning'),
(6, 'operationstrategy', 'Operation Strategy', '<p>Once we have the script of the story, it is time for the execution. We give direction to the entire idea and develop a process that allows a seamless flow of events. From the strategic designing of the place to introduction of relevant technology &ndash; we take care of everything to increase the operational speed of the restaurant and even enhance operational communication. You say busy hours? We say, bring it on!</p>\r\n', '6267_operationstrategy.jpg', 'restaurantsoperationstrategy'),
(7, 'training', 'Training', '<p>We have created customized employee and management training manuals, handouts, presentations or videos for some of the top Restaurants.</p>\r\n', '221_training.jpg', ''),
(8, 'restaurantassessment', 'Restaurant Assessment', '<p>If you are struggling to survive in the industry, your restaurant requires an urgent assessment. In Restaurant Assessment, we do a comprehensive evaluation of the Brand covering all-round factors of its operations. This includes the customer demographic, evaluation of the chefs &amp; service staff, operational strategy, and everything else that helps us evaluate the pain points and craft effective solutions for the same.</p>\r\n', '8908_restaurantassessment.jpg', ''),
(9, 'menudevelopmentdesign', 'Menu Development Design', '<p>Restaurant&rsquo;s Menu is like the trailer of the movie we are trying to create here. It is the very first impression and must be powerful enough to encourage a positive reaction. We design and develop a Menu that is not only in sync with our story and concept but is also in line with our extensive market research. From colors to the name of the items, from pricing to the design of the overall Menu &ndash; we curate everything in a way that the Menu itself suggests a sale.</p>\r\n', '3859_menudevelopmentdesign.jpg', ''),
(10, 'licensing', 'Licensing', '<p>We make the entire process of opening/running a restaurant seamless for you by taking care of each and every aspect of it. We make sure that all the operations and assets of your restaurant comply with government regulations. We also facilitate the process of getting all Licenses required for your business</p>\r\n', '575_licensing.jpg', ''),
(11, 'hiring', 'Hiring', '<p>We want you to focus on your business and leave everything else on us including the tedious process of Hiring appropriate human capital. We actively take part in the hiring process for your restaurant and ensure that only the best talents become a part of your restaurant&rsquo;s story.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1919_hiring.jpg', ''),
(12, 'digitalmarketing', 'Digital Marketing', '<p>We are very keen on making optimal utilization of the Digital Marketing potential in current times. From launching your ideal website to preparing a marketing Budget, from brand positioning in the market to aggressive advertising through Social Media &ndash; we provide extensive range of Digital Marketing services to drive the audience to your digital presence and consequently to the restaurant</p>\r\n', '9033_digitalmarketing.jpg', 'digitalmarketing'),
(13, 'businessstrategy', 'Business Strategy', '<p><strong>&nbsp;</strong></p>\r\n\r\n<p>At the end of the day, it is always about doing good business and making decent money. With an effective and efficient Business Strategy, we ensure just that! From In-depth Market Analysis to capitalizing on the Digitalization wave &ndash; we leave no stone unturned in ensuring a Business Strategy that yields consistent profits.</p>\r\n', '3092_businessstrategy.jpg', ''),
(14, 'barkitchenorganization', 'Bar Kitchen Organization', '<p>A story will always remain imperfect without proper conclusion. The story of your restaurant will reach its ultimate conclusion of success only with proper implementation via your core areas of operations &ndash; Bar and Kitchen. We help you sort the perfect design, equipments, and location for your Bar &amp; Kitchen. So much so, we take care of even the minutest of details like the choice of upholstery, lights, architecture, government regulations, and so on.</p>\r\n', '8886_barkitchenorganization.jpg', 'barandkitchenorganization'),
(15, 'blogs', 'Blogs', '<p>You can never learn too much about the restaurant industry. With that in mind, Synergy Restaurant Consultants has assembled valuable resources for your review.</p>\r\n', '9700_blogs.jpg', 'blogs'),
(16, 'contact', 'Contact Us', '<p>Or fill the form below so we can set up a Free Consultation call to understand your needs in a better way.</p>\r\n', '2057_contact.jpg', ''),
(17, 'index', 'Concept Design', '<p>Concept Design is where it ALL begins. It is the very pedestal from where your pathway of success will be created and nurtured. Here, we create a unique story for you that the specific demographic of our plan would love to be a part of. We give this story the perfect outline, dialogues, climax, and even a conclusion. We make sure that it&rsquo;s a story that nobody has heard before.</p>\r\n', '4555_17.jpeg', 'conceptdesign'),
(18, 'index', 'We are the Kingmakers', '<p>Do you want to be just another restaurant or do you want to stand out and rule the industry? Do you want to keep struggling to stay afloat or do you want to swim your way across to win that goddamned Gold Medal? The key to your success lies in these answers and in your vision. Share your vision with us and watch the magic commence.</p>\r\n', '', 'contact'),
(19, 'index', 'We are the Kingmakers', '<p>Do you want to be just another restaurant or do you want to stand out and rule the industry? Do you want to keep struggling to stay afloat or do you want to swim your way across to win that goddamned Gold Medal? The key to your success lies in these answers and in your vision. Share your vision with us and watch the magic commence.</p>\r\n', '', 'contact'),
(20, 'index', 'We are the King  makers', '<p>Do you want to be just another restaurant or do you want to stand out and rule the industry? Do you want to keep struggling to stay afloat or do you want to swim your way across to win that goddamned Gold Medal? The key to your success lies in these answers and in your vision. Share your vision with us and watch the magic commence.</p>\r\n', '', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `ID` int(4) NOT NULL,
  `Page` varchar(255) NOT NULL,
  `Section` varchar(100) NOT NULL,
  `Paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`ID`, `Page`, `Section`, `Paragraph`) VALUES
(1, 'index', 'About Us', '<p><span dir=\"rtl\">A passion and understanding of food &amp; hospitality industry is crucial in the success of any hospitality business. FOR Restaurant Consultancy is all about bringing that passion and understanding to the table.</span></p>\r\n\r\n<p><span dir=\"rtl\">Focused on all types of outlets from Fine Dining to QSR, from Food trucks to the currently popular cloud kitchens, from Cafes to Bars &ndash; we are here to carve your name in the &ldquo;Hall of Fame&rdquo; of the Hospitality Industry. As a restaurant consultancy, we help both &ndash; existing as well as upcoming ventures in defining or redefining their path towards success. While we can help you open new outlets by flawlessly getting the nitty-gritty sorted, we can also guide existing restaurants by developing a sustainable plan for guaranteed success.</span></p>\r\n'),
(2, 'index', 'Our Mission', '<p>Our Mission is to take the Indian food, beverage, and hospitality industry to extraordinary levels. We aspire and aim to provide our clients with such precise guidance and advice that their success is ensured in every step of their journey.</p>\r\n\r\n<p>At FOR Restaurant Consultancy, we consider our mission truly accomplished only when our client becomes capable of delivering seamless and sophisticated customer experience while also achieving financial success.</p>\r\n'),
(3, 'index', 'Our Vision', '<p>Our Vision is your vision. Share your vision with us and see your restaurant reach new heights of success, stability, and sustenance. One can say that it is our vision to become the kingmaker of your Restaurant&rsquo;s Success Story. Join us now because it is time to RULE!</p>\r\n'),
(4, 'whoweare', 'Our Team', '<p>We have an incredibly diverse team of professionals who have rich experience and are known experts in their area of work. The core values on which our team operates are Professional <strong>Integrity, Passion, Continuous Improvement, and Innovation</strong>. We put great emphasis <strong>on teamwork, honesty, and open communication</strong>. We strive for <strong>excellent performance</strong> in everything we do and always try to <strong>raise the bar</strong>.</p>\r\n'),
(5, 'whoweare', 'Our Qualifications', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Praesent semper feugiat nibh sed. Nibh praesent tristique magna sit amet purus gravida quis.</p>\r\n'),
(6, 'conceptdesign', 'The Process', '<p>A restaurant concept is the overall idea or theme that defines the restaurant. There are different approaches of finalizing a concept design, from chef&rsquo;s personal experiences/interests to local heritage, from popular traditions to something personal &ndash; there are many sources of inspiration.</p>\r\n'),
(7, 'operationstrategy', '', ''),
(8, 'training', '', ''),
(9, 'restaurantassessment', '', ''),
(10, 'menudevelopmentdesign', '', ''),
(11, 'licensing', '', ''),
(12, 'hiring', '', ''),
(13, 'digitalmarketing', '', ''),
(14, 'businessstrategy', '', ''),
(15, 'barkitchenorganization', 'Our Passion', '<p>Our distinct passion for food inspires every aspect of our consulting practice. It truly takes a group of individuals working in sync to bring inspired cuisine to life.</p>\r\n\r\n<p>Every person at every stage in our restaurant consulting firm applies their unique strengths and important perspective to generate stronger results for our clients.</p>\r\n\r\n<p>We don&rsquo;t call it teamwork. We call it Synergy.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(4) NOT NULL,
  `Page` varchar(225) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Code` int(50) NOT NULL,
  `Short_Description` text NOT NULL,
  `Section_title` varchar(225) NOT NULL,
  `Long_Description` text NOT NULL,
  `Button_link` varchar(100) NOT NULL,
  `Image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `Page`, `Title`, `Code`, `Short_Description`, `Section_title`, `Long_Description`, `Button_link`, `Image`) VALUES
(1, 'conceptdesign', 'Concept Design', 1, '<p>Concept Design is where it ALL begins. It is the very pedestal from where your pathway of success will be created and nurtured. Here, we create a unique story for you that the specific demographic of our plan would love to be a part of. We give this story the perfect outline, dialogues, climax, and even a conclusion. We make sure that it&rsquo;s a story that nobody has heard before.</p>\r\n', 'Our Story', '<p>Playground Hospitality concepts reflect your brand personality through food, atmosphere and service. Our restaurants stand out and drive repeat guests in a competitive market</p>\r\n', 'conceptdesign', '3902_conceptdesign.jpeg'),
(2, 'operationstrategy', 'Operation Strategy', 3, '<p>We&nbsp;encompasses the day-to-day activities, processes, and infrastructure responsible for delivering value to the business through technology. ... The goal of&nbsp;service operation&nbsp;is to maintain day-to-day&nbsp;services&nbsp;to the point that there are no issues.</p>\r\n', 'Aim', '\r\nPlayground Hospitality concepts reflect your brand personality through food, atmosphere and service. Our restaurants stand out and drive repeat guests in a competitive market.\r\n\r\n', 'operationstrategy', '3495_operationstrategy.jpg'),
(4, 'training', 'Training', 9, '<p>Inadequate training is one of the primary problems of the players in Hospitality Industry. We intend to close this gap through our strategic training program. We create Standard Operating Procedures (SOPs) for your hospitality business and develop a customized training program as well as materials for the same. We train your staff in driving the sales and overall success of your restaurant</p>\r\n', '', '', 'training', '9357_training.jpg'),
(5, 'restaurantassessment', 'Restaurant Assessment', 2, '<p>If you are struggling to survive in the industry, your restaurant requires an urgent assessment. In Restaurant Assessment, we do a comprehensive evaluation of the Brand covering all-round factors of its operations. This includes the customer demographic, evaluation of the chefs &amp; service staff, operational strategy, and everything else that helps us evaluate the pain points and craft effective solutions for the same.</p>\r\n', '', '', 'restaurantassessment', '117_restaurantassessment.jpg'),
(6, 'menudevelopmentdesign', 'Menu Development Design', 5, '<p>Restaurant&rsquo;s Menu is like the trailer of the movie we are trying to create here. It is the very first impression and must be powerful enough to encourage a positive reaction. We design and develop a Menu that is not only in sync with our story and concept but is also in line with our extensive market research. From colors to the name of the items, from pricing to the design of the overall Menu &ndash; we curate everything in a way that the Menu itself suggests a sale.</p>\r\n', '', '', 'menudevelopmentdesign', '2201_menudevelopmentdesign.jpg'),
(7, 'licensing', 'Licensing', 8, '<p>We make the entire process of opening/running a restaurant seamless for you by taking care of each and every aspect of it. We make sure that all the operations and assets of your restaurant comply with government regulations. We also facilitate the process of getting all Licenses related to your business</p>\r\n', '', '', 'licensing', '6226_licensing.jpg'),
(8, 'hiring', 'Hiring', 10, '<p>We want you to focus on your business and leave everything else on us including the tedious process of Hiring appropriate human capital. We actively take part in the hiring process for your restaurant and ensure that only the best talents become a part of your restaurant&rsquo;s story.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 'hiring', '5449_hiring.jpg'),
(9, 'digitalmarketing', 'Digital Marketing', 7, '<p>We are very keen on making optimal utilization of the Digital Marketing potential in current times. From launching your ideal website to preparing a marketing Budget, from brand positioning in the market to aggressive advertising through Social Media &ndash; we provide an extensive range of Digital Marketing services to drive the audience to your digital presence and consequently to the restaurant.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', 'digitalmarketing', '2748_digitalmarketing.jpg'),
(10, 'businessstrategy', 'Business Strategy', 4, '<p><strong>&nbsp;</strong></p>\r\n\r\n<p>At the end of the day, it is always about doing good business and making decent money. With an effective and efficient Business Strategy, we ensure just that! From In-depth Market Analysis to capitalizing on the Digitalization wave &ndash; we leave no stone unturned in ensuring a Business Strategy that yields consistent profits.</p>\r\n', '', '', 'businessstrategy', '2364_businessstrategy.jpg'),
(11, 'barkitchenorganization', 'Bar Kitchen Organization', 6, '<p>A story will always remain imperfect without proper conclusion. The story of your restaurant will reach its ultimate conclusion of success only with proper implementation via your core areas of operations &ndash; Bar and Kitchen. We help you sort the perfect design, equipments, and location for your Bar &amp; Kitchen. So much so, we take care of even the minutest of details like the choice of upholstery, lights, architecture, government regulations, and so on.</p>\r\n', '', '', 'barkitchenorganization', '3462_barkitchenorganization.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services_section`
--

CREATE TABLE `services_section` (
  `ID` int(4) NOT NULL,
  `Service_ID` int(4) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services_section`
--

INSERT INTO `services_section` (`ID`, `Service_ID`, `Title`, `Description`, `Image`) VALUES
(1, 1, 'Our Concept Designing System', '<p>We curate and execute a concept that covers an array of elements with one cohesive mood or tone. Let us talk about those elements. The first element is the Restaurant Name &ndash; we try and pick a name that gives your customers a brief idea about the concept and the food you serve. Another important element is Menu. We make sure that everything &ndash; the design, description, and even the name of items are in sync with our concept. Moreover, we also curate the service style, d&eacute;cor, ambience, and other aspects of the restaurant to tell the same story, the story that we designed to begin with.</p>\r\n', '6439_IMG.jpg'),
(4, 2, 'You see Problems,                                          We see solutions', '<p>The fast casual restaurant operators are now facing new hurdles on a daily basis due to the rise of convenience-driven technologies, labor challenges and an increasingly informed consumer population. To tackle such day-to-day problems, the Operations Strategy we come up with for your restaurant is all about &quot;doing more with less.&quot;</p>\r\n', '3161_IMG.jpg'),
(5, 1, 'Creating Unique Concepts', '<p>At the end of the day, we create a concept that fits your personality, a concept that not only sells food but a rich overall experience, and most importantly &ndash; a concept that can truly make your vision become a reality.</p>\r\n', '6452_IMG.jpg'),
(6, 4, 'Restaurant Staff Training To Improve Efficiency', '<p>We begin by educating the staff about the restaurant and the industry via formal training and written instructions. We come up with a training plan for restaurant staff and make sure to teach them things like &ndash; Cuisine type, ideal customer, most popular menu item, head chef information, owner information, roles and responsibilities of staff, using the restaurant POS, and Cooking, of course. The list is endless and varies from Restaurant to Restaurant. Our customized training program for each Restaurant enables the staff to become more efficient and deliver better service.</p>\r\n', '7591_IMG.jpg'),
(7, 5, 'Get your Restaurant Assessment', '<p>To put in simple words &ndash; your restaurant needs an outside expert, an objective eye, to see what really happens inside your business and understand what&rsquo;s wrong. Our team of restaurant evaluators has the expertise and experience to assess all the factors of your operation &ndash; from top to the bottom. The team includes evaluators, chefs, system experts, finance experts, HR consultants, operators, and every other expert we need to understand what&rsquo;s working for your restaurant and what is not.</p>\r\n', '5347_IMG.jpg'),
(8, 6, 'What is Menu Development?', '<p>The first step here is to develop the concept of the menu. Our first service of &ldquo;Concept Design&rdquo; covers this aspect of menu development. Once your concept is ready, we begin to develop a flavor profile with supporting elements such as colors and textures that will deliver that concept. We make sure that the menu is clear, simple, and memorable. Since guests prefer to make a decision within 120 seconds, we develop and design a menu that offers optimal productivity and minimal confusion.</p>\r\n\r\n<p>Moving on &ndash; we finalize the core ingredients, investigate the supply chain, perform a cost analysis, and run a test kitchen before finalizing the Menu for your restaurant.</p>\r\n', '7481_IMG.jpg'),
(9, 7, 'Licenses and Registrations required for opening a restaurant', '<p>&nbsp;</p>\r\n\r\n<p>➢ Firm / Company Registration</p>\r\n\r\n<p>➢ Pan on Firms Name</p>\r\n\r\n<p>➢ Labour License</p>\r\n\r\n<p>➢ Trade License &amp; Fire Dept. NOC</p>\r\n\r\n<p>➢ GST Registration - Above 20 lakhs</p>\r\n\r\n<p>➢ FSSAI License - Imp. and Must</p>\r\n\r\n<p>➢ Trademark - Optional but Recommended</p>\r\n\r\n<p>➢ PF &amp; ESI -Above 20 Employees</p>\r\n\r\n<p>➢ Music License</p>\r\n\r\n<p>➢ Liquor License</p>\r\n\r\n<p>➢ Eating House License</p>\r\n\r\n<p>➢ Certificate of Environmental Clearance</p>\r\n\r\n<p>➢ Signage License &ndash; For Paper Post Marketing</p>\r\n', '3454_IMG.jpg'),
(10, 8, 'Restaurant Staff – Hiring the Best Team to Run Your Restaurant', '<p>While this is an industry infamous for high employee turnover and other staffing challenges, we are here to help you face no such problems and challenges. All the practices like screening, interviewing, writing job descriptions, candidate selection, and other areas of recruiting require a certain level of experience and expertise that only our Human Resource team can offer.</p>\r\n\r\n<p>From determining which roles the restaurants must fill to identifying responsibilities of the staff, from defining the best places to find candidates to speeding up the selection process, from providing a realistic job preview to asking relevant interview questions &ndash; we do it all and we do it with sheer perfection.</p>\r\n', '6693_IMG.jpg'),
(11, 9, 'Umbrella of Digital Marketing services', '<p>It all begins by creating an online face for your restaurant in the form of a website. Your website needs to be professional, functional, and user-friendly with all the vital information like menus, how to order, hours of operation, etc easily accessible. The visual appeal of the website must be on-point with professional pictures of your restaurant space, the foods you offer, and your staff. Moreover, your website should also be optimized with local SEO. We provide all of these services and more under our umbrella of Digital Marketing services.</p>\r\n', '1275_IMG.png'),
(12, 9, 'Digital Marketing Tools', '<p>Website is only the beginning of your restaurant&rsquo;s digital marketing. The most important step is to create a relevant, exciting, and engaging Social Media Presence and gain followers. We use Social Media Marketing as a tool to find new customers, retain existing ones, advertise offers, run marketing campaigns, and more. When it comes to SMM, Instagram has proven to be the most important tool for restaurants lately but we do not ignore other crucial platforms like Facebook and Twitter.</p>\r\n\r\n<p>From making use of Interactive Video Content to keeping Online Engagement high with interactions, from Networking with other local businesses to using Influencer Marketing &ndash; we do not leave any stone of Digital Marketing unturned.</p>\r\n', '4202_IMG.png'),
(13, 1, 'New System Concept', '<p>We are happy to help with all sizes of projects, from hotel openings and refurbishments , to individual restaurants. Whatever your project entails, they all demand the same key elements, that we believe we bring to everything we work with -&nbsp;<em><strong>trust, knowledge, care and relevance. &nbsp;</strong></em></p>\r\n', '507_IMG.jpg'),
(14, 8, 'How to hire the right restaurant staff?', '<p>Finding employees who are just the right fit for your restaurant in terms of skill and behavior, is a difficult task. But that doesn&rsquo;t mean that the quality has to suffer. Efficiency is in knowing what you&rsquo;re looking for and where to source that talent from &ndash; that&rsquo;s how we hire the best restaurant employees for you.</p>\r\n\r\n<p>It is important to remember that your employees are the ones who build your brand and you should never underestimate their importance. Thus, we make sure to keep the highest retention rate possible for the employees by keeping them happy and motivated.</p>\r\n', '2367_IMG.jpg'),
(15, 5, 'Critical Analysis', '<p>We assess your restaurant by both evaluating the business and analyzing the restaurant. We begin by understanding your goals and make very specific recommendations to achieve them. Our recommendations come from a deep understanding of the industry and a very critical analysis of your business. As a Restaurant Consultancy, we do not only make those recommendations but also help you execute them.</p>\r\n', '9494_IMG.jpg'),
(16, 5, 'Assessment Process', '<p>If you are wondering what do we exactly do in Restaurant Assessment, here are a few specifics but it&rsquo;s worth noting that every business, every restaurant is different and we follow a tailored process for each. The main aspects of the restaurant that we evaluate are &ndash; processes and systems, cost controls, standards of operations, guest experience factors, vendor relationships, quality of products &amp; services, brand position, price versus value relationships, and so on. It&rsquo;s a never-ending list. In short, we do what needs to be done to improve efficiency and maximize profitability of your business.</p>\r\n', '6825_IMG.jpg'),
(17, 2, 'Our Strategy', '<p>Our Operation Strategy includes all the key factors of running a restaurant like &ndash; Restaurant&rsquo;s Security, Relationships with your Staff, Training Manual for everyone to Follow, Minimize Wastage of Food, Health and Safety Standards, Necessary Tools &amp; Equipments, Streamlining the Financials, Managing the Vendors, and so on.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '8042_IMG.jpg'),
(18, 2, 'Use of Technology for smooth operations', '<p>Apart from all the factors mentioned above, one of the key areas where our help is a game-changer for the restaurants is &ndash; the Implementation of technology. We help Restaurants with effective use of software and technology to handle all sorts of operations in the restaurant from order management to employee retention. We also help leverage automation technology to automate simple tasks and make the day-to-day operations much smoother, error-free, and faster.&nbsp;</p>\r\n', '4449_IMG.jpg'),
(19, 10, 'Analysing and preparing a Business Strategy', '<p>&nbsp;</p>\r\n\r\n<p>From Collaborating on Special Offers with Local Businesses to Offering Free Wi-Fi, we suggest and execute a whole range of strategies to uplift the business of your restaurant. One of the key services we provide is an in-depth analysis and taking actions based on that analysis. For example, we analyze and track something as basic as &ldquo;when your restaurant makes the most sales.&rdquo; Understanding macro trends in your customers&rsquo; patterns can help you maximize your profits. With this knowledge, we recommend offering specific discounts and specials on very specific time frames. This is just one of the small examples how we can create a positive impact on your profits with our day-to-day consultation activities.</p>\r\n', '9860_IMG.jpg'),
(20, 10, 'Preparing a strategy to increase sales', '<p>When we craft the business strategy for you, we take care of every big and small detail that can help increase your business and inflate your profits. Another way of getting people into your restaurants and increasing sales is by hosting special events. Events help you create fond memories of your place in the local public. From poetry or stand-up events to hosting nights related to sporting events &ndash; we help you organize everything.</p>\r\n', '3002_IMG.jpg'),
(21, 6, 'Process of Menu Designing', '<p>The whole idea is to come up with a Menu with absolutely no shortfall. We curate a menu that is genuinely possible to deliver, easily understandable, and yet &ndash; stands out distinctly from its competition. The final step of designing the menu is carried out by our finest team of Graphic Designers. They make sure that the print is neither too small nor too big, the fonts compliment the concept&nbsp;and every other minute details.&nbsp;</p>\r\n\r\n<p>When it comes to the menu, here are the four most important aspects that make it a success &ndash; Succinct, Focused, Unique, and tactically priced. We deliver all four with sheer excellence.</p>\r\n', '5873_IMG.jpg'),
(22, 7, 'Why are Restaurant Licenses important?', '<p>We are more than capable of acquiring all the licenses mentioned above&nbsp;and any other license if required. It is important for your restaurant to be legally sound and solid to avoid falling into some kind of a legal trap after you have established your restaurant. We provide this crucial service and&nbsp;protect all the hard work, sweat, and blood you have put into your venture.</p>\r\n', '6587_IMG.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `head`
--
ALTER TABLE `head`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services_section`
--
ALTER TABLE `services_section`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `head`
--
ALTER TABLE `head`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services_section`
--
ALTER TABLE `services_section`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
