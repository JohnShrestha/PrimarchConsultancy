-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 09:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `global_pecms`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `url` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `order` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `url`, `image`, `order`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Global Dreams Educational Consultancy', 'Global Dreams Educational Consultancy', 'http://127.0.0.1:8000/contact-us', '/upload_file/banner/1680412276_317346491_banner2.png', 1, 1, NULL, '2023-04-01 23:26:19', '2023-04-01 23:26:19'),
(2, 'Global Dreams Educational Consultancy', 'Global Dreams Educational Consultancy', 'http://127.0.0.1:8000/contact-us', '/upload_file/banner/1680412372_1360796789_6.jpg', 2, 1, NULL, '2023-04-01 23:27:52', '2023-04-01 23:27:52');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `post_unique_id` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `thumbs` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `why_study` text DEFAULT NULL,
  `cost` text DEFAULT NULL,
  `requirement` text DEFAULT NULL,
  `education_system` text DEFAULT NULL,
  `scholarship` text DEFAULT NULL,
  `job_oppurtunity` text DEFAULT NULL,
  `speaking` text DEFAULT NULL,
  `reading` text DEFAULT NULL,
  `writing` text DEFAULT NULL,
  `listening` text DEFAULT NULL,
  `pte_score` text DEFAULT NULL,
  `vocabulary` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `featured` tinyint(1) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `order` varchar(255) DEFAULT '1',
  `visit_no` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `type`, `category_id`, `user_id`, `title`, `post_unique_id`, `slug`, `thumbs`, `description`, `why_study`, `cost`, `requirement`, `education_system`, `scholarship`, `job_oppurtunity`, `speaking`, `reading`, `writing`, `listening`, `pte_score`, `vocabulary`, `status`, `featured`, `tag`, `author`, `url`, `order`, `visit_no`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'post', 2, NULL, 'Australia', '2_642911b5602c6', 'australia', '/upload_file/blog/1680413109_1007854034_aus.jpg', '<p style=\"text-align:justify\">Australia is an island nation that is located in the southern part of the Pacific Ocean. Australia is a proud education destination and a home to world-class institutions, campuses and academics. A multicultural and diverse study environment attracts students from all over the world. Australia has established an international reputation for excellence in all fields of education. They are enrolled in a wide range of disciplines at every level of education, including short-term English language courses, bachelor and master&#39;s degrees right through to doctorate degrees.</p>\r\n\r\n<p style=\"text-align:justify\">Australia being home to people from various ethnic, cultural background provides the immigrants as well as students with the freedom to practice their own belief as the country values individual freedom. Australia is one of the world&#39;s most highly urbanized country; it is well known for the attractions of its large cities like Sydney, Melbourne, Brisbane, and Perth.</p>', 'Australia being home to people from various ethnic, cultural background provides the immigrants as well as students with the freedom to practice their own belief as the country values individual freedom. Australia is one of the world\'s most highly urbanized country; it is well known for the attractions of its large cities like Sydney, Melbourne, Brisbane, and Perth.', 'Australia being home to people from various ethnic, cultural background provides the immigrants as well as students with the freedom to practice their own belief as the country values individual freedom. Australia is one of the world\'s most highly urbanized country; it is well known for the attractions of its large cities like Sydney, Melbourne, Brisbane, and Perth.', 'Australia being home to people from various ethnic, cultural background provides the immigrants as well as students with the freedom to practice their own belief as the country values individual freedom. Australia is one of the world\'s most highly urbanized country; it is well known for the attractions of its large cities like Sydney, Melbourne, Brisbane, and Perth.', 'Australia being home to people from various ethnic, cultural background provides the immigrants as well as students with the freedom to practice their own belief as the country values individual freedom. Australia is one of the world\'s most highly urbanized country; it is well known for the attractions of its large cities like Sydney, Melbourne, Brisbane, and Perth.', 'Australia being home to people from various ethnic, cultural background provides the immigrants as well as students with the freedom to practice their own belief as the country values individual freedom. Australia is one of the world\'s most highly urbanized country; it is well known for the attractions of its large cities like Sydney, Melbourne, Brisbane, and Perth.', 'Australia being home to people from various ethnic, cultural background provides the immigrants as well as students with the freedom to practice their own belief as the country values individual freedom. Australia is one of the world\'s most highly urbanized country; it is well known for the attractions of its large cities like Sydney, Melbourne, Brisbane, and Perth.', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '1', 3, NULL, '2023-04-01 23:40:09', '2023-04-02 00:53:08'),
(2, 'post', 1, NULL, 'Korean Language', '2_64291245c5195', 'korean-language', NULL, '<p style=\"text-align:justify\">The training course is designed for absolute beginners who have no knowledge of the Korean language. This course specializes in teaching the students to read, write and speak Korean words and make a complete sentence. The course will start from the basic Korean alphabets, vocabulary and gradually enhancing the learning of pronunciations, grammars and making sentences. Korean language is very scientific in nature.</p>', NULL, NULL, NULL, NULL, NULL, NULL, 'The training course is designed for absolute beginners who have no knowledge of the Korean language. This course specializes in teaching the students to read, write and speak Korean words and make a complete sentence. The course will start from the basic Korean alphabets, vocabulary and gradually enhancing the learning of pronunciations, grammars and making sentences. Korean language is very scientific in nature.', 'The training course is designed for absolute beginners who have no knowledge of the Korean language. This course specializes in teaching the students to read, write and speak Korean words and make a complete sentence. The course will start from the basic Korean alphabets, vocabulary and gradually enhancing the learning of pronunciations, grammars and making sentences. Korean language is very scientific in nature.', 'The training course is designed for absolute beginners who have no knowledge of the Korean language. This course specializes in teaching the students to read, write and speak Korean words and make a complete sentence. The course will start from the basic Korean alphabets, vocabulary and gradually enhancing the learning of pronunciations, grammars and making sentences. Korean language is very scientific in nature.', 'The training course is designed for absolute beginners who have no knowledge of the Korean language. This course specializes in teaching the students to read, write and speak Korean words and make a complete sentence. The course will start from the basic Korean alphabets, vocabulary and gradually enhancing the learning of pronunciations, grammars and making sentences. Korean language is very scientific in nature.', 'The training course is designed for absolute beginners who have no knowledge of the Korean language. This course specializes in teaching the students to read, write and speak Korean words and make a complete sentence. The course will start from the basic Korean alphabets, vocabulary and gradually enhancing the learning of pronunciations, grammars and making sentences. Korean language is very scientific in nature.', NULL, 1, NULL, NULL, NULL, NULL, '1', 2, NULL, '2023-04-01 23:42:33', '2023-04-01 23:45:40'),
(3, 'post', 1, NULL, 'PTE', '2_642912e4b890a', 'pte', NULL, '<p>PTE (Pearson Test of English) is a fully computer based English language test for international students, which is accredited y leading universities and colleges around the world. It is based on online English language test for international education and immigration purposes. This test is powered by AI technology and unlike the conventional grading system, the PTE grading is completely objective and free from human biases.</p>', NULL, NULL, NULL, NULL, NULL, NULL, 'PTE (Pearson Test of English) is a fully computer based English language test for international students, which is accredited y leading universities and colleges around the world. It is based on online English language test for international education and immigration purposes. This test is powered by AI technology and unlike the conventional grading system, the PTE grading is completely objective and free from human biases.', 'PTE (Pearson Test of English) is a fully computer based English language test for international students, which is accredited y leading universities and colleges around the world. It is based on online English language test for international education and immigration purposes. This test is powered by AI technology and unlike the conventional grading system, the PTE grading is completely objective and free from human biases.', 'PTE (Pearson Test of English) is a fully computer based English language test for international students, which is accredited y leading universities and colleges around the world. It is based on online English language test for international education and immigration purposes. This test is powered by AI technology and unlike the conventional grading system, the PTE grading is completely objective and free from human biases.', 'PTE (Pearson Test of English) is a fully computer based English language test for international students, which is accredited y leading universities and colleges around the world. It is based on online English language test for international education and immigration purposes. This test is powered by AI technology and unlike the conventional grading system, the PTE grading is completely objective and free from human biases.', 'PTE (Pearson Test of English) is a fully computer based English language test for international students, which is accredited y leading universities and colleges around the world. It is based on online English language test for international education and immigration purposes. This test is powered by AI technology and unlike the conventional grading system, the PTE grading is completely objective and free from human biases.', NULL, 1, NULL, NULL, NULL, NULL, '1', 2, NULL, '2023-04-01 23:45:12', '2023-04-02 00:53:04'),
(4, 'post', 1, NULL, 'NAT', '2_642913730f889', 'nat', NULL, '<p>The Japanese Language NAT-TEST is an examination that measures the Japanese language ability of students who are not native Japanese speakers. The tests are separated by difficulty (five levels) and general ability is measured in three categories: Grammar/Vocabulary, Listening and Reading Comprehension. The format of the exam and the types of questions are equivalent to those that appear on the Japanese-Language Proficiency Test (JLPT).</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'The Japanese Language NAT-TEST is an examination that measures the Japanese language ability of students who are not native Japanese speakers. The tests are separated by difficulty (five levels) and general ability is measured in three categories: Grammar/Vocabulary, Listening and Reading Comprehension. The format of the exam and the types of questions are equivalent to those that appear on the Japanese-Language Proficiency Test (JLPT).', NULL, 'The Japanese Language NAT-TEST is an examination that measures the Japanese language ability of students who are not native Japanese speakers. The tests are separated by difficulty (five levels) and general ability is measured in three categories: Grammar/Vocabulary, Listening and Reading Comprehension. The format of the exam and the types of questions are equivalent to those that appear on the Japanese-Language Proficiency Test (JLPT).', NULL, 'The Japanese Language NAT-TEST is an examination that measures the Japanese language ability of students who are not native Japanese speakers. The tests are separated by difficulty (five levels) and general ability is measured in three categories: Grammar/Vocabulary, Listening and Reading Comprehension. The format of the exam and the types of questions are equivalent to those that appear on the Japanese-Language Proficiency Test (JLPT).', 1, NULL, NULL, NULL, NULL, '1', 4, NULL, '2023-04-01 23:47:35', '2023-04-02 01:07:35'),
(5, 'page', NULL, NULL, 'About Global Dreams Educational Consultancy', '2_6429143ca4cf3', 'about-global-dreams-educational-consultancy', '/upload_file/blog/1680413756_812543391_Untitled-1.jpg', '<h2 style=\"text-align:justify\">Your Trust and Recommendation</h2>\r\n\r\n<p style=\"text-align:justify\">Global Dreams Educational Consultancy, an independent student placement agency in Nepal as well as in India, has been dedicating to empower Nepalese and Indian students for accessing education in the foreign countries since 2018. We are now officially collaborating with more than 100 higher institutions globally.</p>\r\n\r\n<p style=\"text-align:justify\">We have had a glorious history of placing enormous number of students into a wide range of foreign universities with partial and full payment packages ensuring that the institutions and students are a right-match. And along with high visa success rate, we also are proud of our students who have been successful in their career through our counselling and guidance.</p>\r\n\r\n<p style=\"text-align:justify\">At Global Dreams Educational Consultancy, we strongly believe in providing students unlimited education opportunities with all the essential information on existing options, and also helps them to take valuable decisions. We seek excellent quality in student services, qualifications and career prospects.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '1', 0, NULL, '2023-04-01 23:51:00', '2023-04-02 00:50:09'),
(6, 'page', NULL, NULL, 'Message From CEO', '2_642914c2ccca8', 'message-from-ceo', '/upload_file/blog/1680413890_1827566606_lekhbahadur (1).jpg', '<p style=\"text-align:justify\">Global Dreams, is an organization created for the purpose of assisting students regarding their further studies. Our consultancy is a well-equipped as well as well recruited organization with the qualified and certified experts.</p>\r\n\r\n<p style=\"text-align:justify\">Global Dreams is commenced with the objective of helping the students to get enrolled in various colleges and universities of abroad like Australia, Canada, USA, South Korea, Japan, France, Germany, Belgium, Portugal, and many other Schengen countries to assist the students making right path and helping them to get matriculated in recognized universities with the suitable courses.</p>\r\n\r\n<p style=\"text-align:justify\">Our experienced and qualified counsellors provide the students the updated information about the colleges/Universities. They assist the students about courses/colleges, Universities, application deadlines, required documents and many others.</p>\r\n\r\n<p style=\"text-align:justify\">Thanking You !<br />\r\nSuraj Bahadur Shrestha<br />\r\nCEO / Chairperson</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '3', 5, NULL, '2023-04-01 23:53:10', '2023-04-02 00:51:06'),
(7, 'page', NULL, NULL, 'WHY GLOBAL DREAMS EDUCATIONAL CONSULTANCY', '2_642915c3315c4', 'why-global-dreams-educational-consultancy', NULL, '<h2 style=\"text-align:justify\">Let us plan your career together</h2>\r\n\r\n<p style=\"text-align:justify\">Global Dreams Educational Consultancy had a glorious history of placing enormous number of students into a wide range of foreign universities. We understands the need to personalize your needs. Remember us for visa services, career counseling, IELTS/PTE class, seeking scholorships, and many other hassles on the way to applying abroad.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2', 0, NULL, '2023-04-01 23:57:27', '2023-04-02 00:50:09'),
(8, 'page', NULL, NULL, 'Our Objectives', '2_64291607606f9', 'our-objectives', NULL, '<ul>\r\n	<li>Guiding students to achieve the qualification of their anticipation by serving with high level of professionalism is the basic goal and objective of the company</li>\r\n	<li>Maintain quality standard by compliance of quality services to student and education provider.</li>\r\n	<li>To bridge the gap between students and international institutions which open its door to higher learning.</li>\r\n	<li>To give relevant, accurate and comprehensive information and advice from our personal and organizational skill after getting student personal profile, preference, objective and background.</li>\r\n	<li>To understand the socio-economic backgrounds of the students who may have differences regarding the balance between course and quality.</li>\r\n</ul>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '4', 0, NULL, '2023-04-01 23:58:35', '2023-04-02 00:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `unique_id` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `category_post_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `order` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `parent_id`, `title`, `unique_id`, `slug`, `description`, `category_post_count`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Language Preparation', '2079020457329103', 'language-preparation', NULL, 0, 2, 1, NULL, '2023-04-01 23:28:10'),
(2, NULL, 'Study Abroad', '2079020457321115', 'study-abroad', NULL, 0, 1, 1, NULL, '2023-04-01 23:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `apply_before` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `url`, `image`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'test', 'http://127.0.0.1:8000/contact-us', '/upload_file/client/1680412956_1522839070_1.png', 'Global Dreams Educational Consultancy is one of the leading educational consultants, acknowledge for providing best guidance and counselling to the students.', 1, NULL, '2023-04-01 23:37:36', '2023-04-01 23:37:36'),
(2, 'test 1', 'http://127.0.0.1:8000/contact-us', '/upload_file/client/1680412972_1873380967_6.png', 'Global Dreams Educational Consultancy is one of the leading educational consultants, acknowledge for providing best guidance and counselling to the students.', 1, NULL, '2023-04-01 23:37:52', '2023-04-01 23:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `commons`
--

CREATE TABLE `commons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_first_title` varchar(255) DEFAULT NULL,
  `header_second_title` varchar(255) DEFAULT NULL,
  `header_third_title` varchar(255) DEFAULT NULL,
  `header_fourth_title` varchar(255) DEFAULT NULL,
  `footer_first_title` varchar(255) DEFAULT NULL,
  `footer_first_description` text DEFAULT NULL,
  `footer_second_title` varchar(255) DEFAULT NULL,
  `footer_second_description` text DEFAULT NULL,
  `footer_third_title` varchar(255) DEFAULT NULL,
  `footer_third_description` text DEFAULT NULL,
  `footer_fourth_title` varchar(255) DEFAULT NULL,
  `footer_fourth_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commons`
--

INSERT INTO `commons` (`id`, `header_first_title`, `header_second_title`, `header_third_title`, `header_fourth_title`, `footer_first_title`, `footer_first_description`, `footer_second_title`, `footer_second_description`, `footer_third_title`, `footer_third_description`, `footer_fourth_title`, `footer_fourth_description`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, 'PECM.', '<p>Global Dreams Educational Consultancy is one of the leading educational consultants, acknowledge for providing best guidance and counselling to the students.</p>', 'Link', '<ul>\r\n	<li><a href=\"index.html\">Home</a></li>\r\n	<li><a href=\"about.html\">About Us</a></li>\r\n	<li><a href=\"#\">Study Abroad</a></li>\r\n	<li><a href=\"gallery.html\">Gallery</a></li>\r\n	<li><a href=\"contact.html\">Contact Us</a></li>\r\n</ul>', 'About Us', '<ul>\r\n	<li><a href=\"abroad-detail.html\">Australia</a></li>\r\n	<li><a href=\"uk.html\">Uk</a></li>\r\n	<li><a href=\"abroad-detail.html\">Canada</a></li>\r\n	<li><a href=\"abroad-detail.html\">France</a></li>\r\n	<li><a href=\"abroad-detail.html\">New Zealand</a></li>\r\n</ul>', 'PECM', '<p>PECM</p>', NULL, '2023-04-01 23:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `happy_student` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  `years` varchar(255) DEFAULT NULL,
  `community` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_id` bigint(20) UNSIGNED NOT NULL,
  `district_en` varchar(255) DEFAULT NULL,
  `district_np` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `province_id`, `district_en`, `district_np`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bhojpur', NULL, NULL, NULL),
(2, 1, 'Dhankuta', NULL, NULL, NULL),
(3, 1, 'Ilam', NULL, NULL, NULL),
(4, 1, 'Jhapa', NULL, NULL, NULL),
(5, 1, 'Morang', NULL, NULL, NULL),
(6, 1, 'Khotang', NULL, NULL, NULL),
(7, 1, 'Okhaldhunga', NULL, NULL, NULL),
(8, 1, 'Panchthar', NULL, NULL, NULL),
(9, 1, 'Sankhuwasabha', NULL, NULL, NULL),
(10, 1, 'Solukhumbu', NULL, NULL, NULL),
(11, 1, 'Sunsari', NULL, NULL, NULL),
(12, 1, 'Taplejung', NULL, NULL, NULL),
(13, 1, 'Tehrathum', NULL, NULL, NULL),
(14, 1, 'Udayapur', NULL, NULL, NULL),
(15, 2, 'Bara', NULL, NULL, NULL),
(16, 2, 'Dhanusa', NULL, NULL, NULL),
(17, 2, 'Mahottari', NULL, NULL, NULL),
(18, 2, 'Parsa', NULL, NULL, NULL),
(19, 2, 'Rautahat', NULL, NULL, NULL),
(20, 2, 'Saptari', NULL, NULL, NULL),
(21, 2, 'Sarlahi', NULL, NULL, NULL),
(22, 2, 'Siraha', NULL, NULL, NULL),
(23, 3, 'Bhaktapur', NULL, NULL, NULL),
(24, 3, 'Chitwan', NULL, NULL, NULL),
(25, 3, 'Dhading', NULL, NULL, NULL),
(26, 3, 'Dolakha', NULL, NULL, NULL),
(27, 3, 'Kavrepalanchok', NULL, NULL, NULL),
(28, 3, 'Kathmandu', NULL, NULL, NULL),
(29, 3, 'Lalitpur', NULL, NULL, NULL),
(30, 3, 'Makwanpur', NULL, NULL, NULL),
(31, 3, 'Nuwakot', NULL, NULL, NULL),
(32, 3, 'Ramechhap', NULL, NULL, NULL),
(33, 3, 'Rasuwa', NULL, NULL, NULL),
(34, 3, 'Sindhuli', NULL, NULL, NULL),
(35, 3, 'Sindhupalchowk', NULL, NULL, NULL),
(36, 4, 'Baglung', NULL, NULL, NULL),
(37, 4, 'Gorkha', NULL, NULL, NULL),
(38, 4, 'Kaski', NULL, NULL, NULL),
(39, 4, 'Lamjung', NULL, NULL, NULL),
(40, 4, 'Manang', NULL, NULL, NULL),
(41, 4, 'Mustang', NULL, NULL, NULL),
(42, 4, 'Myagdi', NULL, NULL, NULL),
(43, 4, 'Nawalparasi', NULL, NULL, NULL),
(44, 4, 'Parbat', NULL, NULL, NULL),
(45, 4, 'Syangja', NULL, NULL, NULL),
(46, 4, 'Tanahun', NULL, NULL, NULL),
(47, 5, 'Arghakhanchi', NULL, NULL, NULL),
(48, 5, 'Banke', NULL, NULL, NULL),
(49, 5, 'Bardiya', NULL, NULL, NULL),
(50, 5, 'Dang', NULL, NULL, NULL),
(51, 5, 'Gulmi', NULL, NULL, NULL),
(52, 5, 'Kapilvastu', NULL, NULL, NULL),
(53, 5, 'Nawalparasi (West)', NULL, NULL, NULL),
(54, 5, 'Palpa', NULL, NULL, NULL),
(55, 5, 'Pyuthan', NULL, NULL, NULL),
(56, 5, 'Rolpa', NULL, NULL, NULL),
(57, 5, 'Rukum (East)', NULL, NULL, NULL),
(58, 5, 'Rupandehi', NULL, NULL, NULL),
(59, 6, 'Dailekh', NULL, NULL, NULL),
(60, 6, 'Dolpa', NULL, NULL, NULL),
(61, 6, 'Humla', NULL, NULL, NULL),
(62, 6, 'Jajarkot', NULL, NULL, NULL),
(63, 6, 'Jumla', NULL, NULL, NULL),
(64, 6, 'Kalikot', NULL, NULL, NULL),
(65, 6, 'Mugu', NULL, NULL, NULL),
(66, 6, 'Rukum (West)', NULL, NULL, NULL),
(67, 6, 'Salyan', NULL, NULL, NULL),
(68, 6, 'Surkhet', NULL, NULL, NULL),
(69, 7, 'Acham', NULL, NULL, NULL),
(70, 7, 'Baitadi', NULL, NULL, NULL),
(71, 7, 'Bajhan', NULL, NULL, NULL),
(72, 7, 'Bajura', NULL, NULL, NULL),
(73, 7, 'Dadeldhura', NULL, NULL, NULL),
(74, 7, 'Darcula', NULL, NULL, NULL),
(75, 7, 'Doti', NULL, NULL, NULL),
(76, 7, 'Kailali', NULL, NULL, NULL),
(77, 7, 'Kanchanpur', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_unique_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `order` int(10) UNSIGNED DEFAULT NULL,
  `download_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Denton Nguyen', '/upload_file/galleries/1680412697_419221046_about-4.jpg', 1, '2023-04-01 23:33:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `default` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `status`, `sort_order`, `default`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 1, NULL, NULL, NULL, NULL, '2023-04-01 23:28:27', '2023-04-01 23:28:27'),
(2, 'Nepali', 'np', 1, NULL, NULL, NULL, NULL, '2023-04-01 23:28:38', '2023-04-01 23:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `order` int(11) DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `parameter` varchar(255) DEFAULT NULL,
  `target` varchar(255) NOT NULL DEFAULT '_self',
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `location`, `type`, `order`, `parent_id`, `url`, `parameter`, `target`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', NULL, 'Custom Link', 1, NULL, 'http://127.0.0.1:8000/', NULL, '_self', 1, '2023-04-01 23:28:55', '2023-04-01 23:54:42'),
(2, 'Contact Us', NULL, 'Custom Link', 15, NULL, 'http://127.0.0.1:8000/contact', NULL, '_self', 1, '2023-04-01 23:29:08', '2023-04-01 23:54:40'),
(3, 'Gallery', NULL, 'Custom Link', 14, NULL, 'http://127.0.0.1:8000/gallery', NULL, '_self', 1, '2023-04-01 23:29:38', '2023-04-01 23:54:40'),
(4, 'Australia', NULL, 'Post', 7, 5, '/post/2_642911b5602c6', '2_642911b5602c6', '_self', 1, '2023-04-01 23:40:33', '2023-04-01 23:54:40'),
(5, 'Study Abroad', NULL, 'Custom Link', 6, NULL, 'http://127.0.0.1:8000/', NULL, '_self', 1, '2023-04-01 23:40:53', '2023-04-01 23:54:40'),
(6, 'Language Preparation', NULL, 'Custom Link', 8, NULL, 'http://127.0.0.1:8000/', NULL, '_self', 1, '2023-04-01 23:41:39', '2023-04-01 23:54:40'),
(7, 'Korean Language', NULL, 'Post', 11, 6, '/post/2_64291245c5195', '2_64291245c5195', '_self', 1, '2023-04-01 23:43:02', '2023-04-01 23:54:40'),
(8, 'English Language', NULL, 'Custom Link', 9, 6, 'http://127.0.0.1:8000/', NULL, '_self', 1, '2023-04-01 23:44:34', '2023-04-01 23:54:40'),
(9, 'PTE', NULL, 'Post', 10, 8, '/post/2_642912e4b890a', '2_642912e4b890a', '_self', 1, '2023-04-01 23:45:32', '2023-04-01 23:54:40'),
(10, 'Japanese Language', NULL, 'Custom Link', 12, 6, 'http://127.0.0.1:8000/', NULL, '_self', 1, '2023-04-01 23:46:37', '2023-04-01 23:54:40'),
(11, 'NAT', NULL, 'Post', 13, 10, '/post/2_642913730f889', '2_642913730f889', '_self', 1, '2023-04-01 23:48:06', '2023-04-01 23:54:40'),
(12, 'Team Members', NULL, 'Custom', 4, 13, 'http://127.0.0.1:8000/staff', NULL, '_self', 1, '2023-04-01 23:51:36', '2023-04-01 23:54:40'),
(13, 'About Us', NULL, 'Custom Link', 2, NULL, 'http://127.0.0.1:8000/', NULL, '_self', 1, '2023-04-01 23:51:56', '2023-04-01 23:54:43'),
(14, 'Message from CEO', NULL, 'Page', 5, 13, '/page/2_642914c2ccca8', '2_642914c2ccca8', '_self', 1, '2023-04-01 23:53:43', '2023-04-01 23:54:40'),
(15, 'Company Profile', NULL, 'Custom Link', 3, 13, 'http://127.0.0.1:8000/about', NULL, '_self', 1, '2023-04-01 23:54:39', '2023-04-01 23:54:43');

-- --------------------------------------------------------

--
-- Table structure for table `menus_name`
--

CREATE TABLE `menus_name` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus_name`
--

INSERT INTO `menus_name` (`id`, `menu_id`, `lang_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Home', NULL, NULL),
(2, 1, 2, 'Home', NULL, NULL),
(3, 2, 1, 'Contact Us', NULL, NULL),
(4, 2, 2, 'Contact Us', NULL, NULL),
(5, 3, 1, 'Gallery', NULL, NULL),
(6, 3, 2, 'Gallery', NULL, NULL),
(7, 4, 1, 'Australia', NULL, NULL),
(8, 4, 2, 'Australia', NULL, NULL),
(9, 5, 1, 'Study Abroad', NULL, NULL),
(10, 5, 2, 'Study Abroad', NULL, NULL),
(11, 6, 1, 'Language Preparation', NULL, NULL),
(12, 6, 2, 'Language Preparation', NULL, NULL),
(13, 7, 1, 'Korean Language', NULL, NULL),
(14, 7, 2, 'Korean Language', NULL, NULL),
(15, 8, 1, 'English Language', NULL, NULL),
(16, 8, 2, 'English Language', NULL, NULL),
(17, 9, 1, 'PTE', NULL, NULL),
(18, 9, 2, 'PTE', NULL, NULL),
(19, 10, 1, 'Japanese Language', NULL, NULL),
(20, 10, 2, 'Japanese Language', NULL, NULL),
(21, 11, 1, 'NAT', NULL, NULL),
(22, 11, 2, 'NAT', NULL, NULL),
(23, 12, 1, 'Team Members', NULL, NULL),
(24, 12, 2, 'Team Members', NULL, NULL),
(25, 13, 1, 'About Us', NULL, NULL),
(26, 13, 2, 'About Us', NULL, NULL),
(27, 14, 1, 'Message from CEO', NULL, NULL),
(28, 14, 2, 'Message from CEO', NULL, NULL),
(29, 15, 1, 'Company Profile', NULL, NULL),
(30, 15, 2, 'Company Profile', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_06_02_110352_create_permission_tables', 1),
(7, '2022_08_10_111341_create_provinces_table', 1),
(8, '2022_08_10_113258_create_districts_table', 1),
(9, '2022_08_11_072916_create_palikas_table', 1),
(10, '2022_08_16_051100_create_settings_table', 1),
(11, '2022_09_08_111850_create_notifications_table', 1),
(12, '2022_10_30_121906_create_categories_table', 1),
(13, '2022_10_31_115047_create_products_table', 1),
(14, '2022_11_02_115645_create_blog_categories_table', 1),
(15, '2022_11_04_070942_create_blogs_table', 1),
(16, '2022_11_17_054358_create_banners_table', 1),
(17, '2022_11_18_072951_create_popups_table', 1),
(18, '2022_12_05_105826_create_files_table', 1),
(19, '2022_12_07_064401_create_clients_table', 1),
(20, '2022_12_07_110616_create_careers_table', 1),
(21, '2022_12_12_163217_create_internships_table', 1),
(22, '2023_02_26_095225_create_sections_table', 1),
(23, '2023_02_26_113705_create_testimonials_table', 1),
(24, '2023_02_27_102522_create_galleries_table', 1),
(25, '2023_02_28_121742_create_contacts_table', 1),
(26, '2023_03_08_072629_create_offers_table', 1),
(27, '2023_03_08_102515_create_programs_table', 1),
(28, '2023_03_09_051805_create_counters_table', 1),
(29, '2023_03_12_073524_create_staff_table', 1),
(30, '2023_03_13_080028_create_commons_table', 1),
(31, '2023_03_13_110819_create_languages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 4),
(1, 'App\\Models\\User', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('d0f02860-d8c5-4eca-b3de-ce97ece5ffc3', 'App\\Notifications\\NewUSerNotification', 'App\\Models\\User', 4, '{\"name\":\"Adrian Brooks\",\"email\":\"wihyx@mailinator.com\"}', NULL, '2023-04-01 23:18:08', '2023-04-01 23:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `palikas`
--

CREATE TABLE `palikas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `palika_en` varchar(255) DEFAULT NULL,
  `palika_np` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `palikas`
--

INSERT INTO `palikas` (`id`, `district_id`, `palika_en`, `palika_np`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bhojpur Municipality', 'भोजपुर नगरपालिका', NULL, NULL),
(2, 1, 'Shadanand Municipality', 'षडानन्द नगरपालिका', NULL, NULL),
(3, 1, 'Tyamke Maiyum', 'ट्याम्केमैयुम गाउँपालिका', NULL, NULL),
(4, 1, 'Arun Rural Municipality', 'अरुण गाउँपालिका', NULL, NULL),
(5, 1, 'Pauwadungma Rural Municipality', 'पौवादुङमा गाउँपालिका', NULL, NULL),
(6, 1, 'Salpasilichho Rural Municipality', 'साल्पासिलिछो गाउँपालिका', NULL, NULL),
(7, 1, 'Hatuwagadhi Rural Municipality', 'हतुवागढी गाउँपालिका', NULL, NULL),
(8, 1, 'Ramprasad Rai Rural Municipality', 'रामप्रसाद राई गाउँपालिका', NULL, NULL),
(9, 2, 'Paakhribas Municipality', 'पाख्रिबास नगरपालिका', NULL, NULL),
(10, 2, 'Dhankuta Municipality', 'धनकुटा नगरपालिका', NULL, NULL),
(11, 2, 'Mahalaxmi Municipality', 'महालक्ष्मी नगरपालिका', NULL, NULL),
(12, 2, 'Sangurigadhi Rural Municipality', 'सागुरीगढी गाउँपालिका', NULL, NULL),
(13, 2, 'Sahidbhumi Rural Municipality', 'सहीदभूमि गाउँपालिका', NULL, NULL),
(14, 2, 'Chhathar Jorpati Rural Municipality', 'छथर जोरपाटी गाउँपालिका', NULL, NULL),
(15, 2, 'Chaubise Rural Municipality', 'चौविसे गाउँपालिका', NULL, NULL),
(16, 3, 'Iilam Municipality', 'ईलाम नगरपालिका', NULL, NULL),
(17, 3, 'Deumaai Municipality', 'देउमाई नगरपालिका', NULL, NULL),
(18, 3, 'Maai Municipality', 'माई नगरपालिका', NULL, NULL),
(19, 3, 'Suryodaya Municipality', 'सूर्योदय नगरपालिका', NULL, NULL),
(20, 3, 'Phakphokthum Rural Municipality', 'फाकफोकथुम गाउँपालिका', NULL, NULL),
(21, 3, 'Mai Jogmai Rural Municipality', 'माईजोगमाई गाउँपालिका', NULL, NULL),
(22, 3, 'Chulachuli Rural Municipality', 'चुलाचुली गाउँपालिका', NULL, NULL),
(23, 3, 'Rong Rural Municipality', 'रोङ गाउँपालिका', NULL, NULL),
(24, 3, 'Mangsebung Rural Municipality', 'माङसेबुङ गाउँपालिका', NULL, NULL),
(25, 3, 'Sandakpur Rural Municipality', 'सन्दकपुर गाउँपालिका', NULL, NULL),
(26, 4, 'Mechinagar Municipality', 'मेचीनगर नगरपालिका', NULL, NULL),
(27, 4, 'Damak Municipality', 'दमक नगरपालिका', NULL, NULL),
(28, 4, 'Kankai Municipality', 'कन्काई नगरपालिका', NULL, NULL),
(29, 4, 'Bhadrapur Municipality', 'भद्रपुर नगरपालिका', NULL, NULL),
(30, 4, 'Arjundhara Municipality', 'अर्जुनधारा नगरपालिका', NULL, NULL),
(31, 4, 'Shivasatakshi Municipality', 'शिवसताक्षी नगरपालिका', NULL, NULL),
(32, 4, 'Gauraadaha Municipality', 'गौरादह नगरपालिका', NULL, NULL),
(33, 4, 'Birtamod Municipality', 'विर्तामोड नगरपालिका', NULL, NULL),
(34, 4, 'Kamal Rural Municipality', 'कमल गाउँपालिका', NULL, NULL),
(35, 4, 'Buddha Shanti Rural Municipality', 'बुद्धशान्ति गाउँपालिका', NULL, NULL),
(36, 4, 'Kachankawal Rural Municipality', 'कचनकवल गाउँपालिका', NULL, NULL),
(37, 4, 'Jhapa Rural Municipality', 'झापा गाउँपालिका', NULL, NULL),
(38, 4, 'Barhadashi Rural Municipality', 'बाह्रदशी गाउँपालिका', NULL, NULL),
(39, 4, 'Gaurigunj Rural Municipality', 'गौरीगंज गाउँपालिका', NULL, NULL),
(40, 4, 'Haldibari Rural Municipality', 'हल्दीवारी गाउँपालिका', NULL, NULL),
(41, 5, 'Biratnagar Sub-Metropolitan', 'विराटनगर उपमहानगरपालिका', NULL, NULL),
(42, 5, 'Belbari Municipality', 'बेलबारी नगरपालिका', NULL, NULL),
(43, 5, 'Letang Municipality', 'लेटांग नगरपालिका', NULL, NULL),
(44, 5, 'Pathari Sanischari Municipality', 'पथरी शनिश्चरे नगरपालिका', NULL, NULL),
(45, 5, 'Rangeli Municipality', 'रंगेली नगरपालिका', NULL, NULL),
(46, 5, 'Ratuwamaai Municipality', 'रतुवामाई नगरपालिका', NULL, NULL),
(47, 5, 'Sunwarsi Municipality', 'सुनवर्षी नगरपालिका', NULL, NULL),
(48, 5, 'Urlabari Municipality', 'उर्लाबारी नगरपालिका', NULL, NULL),
(49, 5, 'Sundarharaicha Municipality', 'सुन्दरहरैचा नगरपालिका', NULL, NULL),
(50, 5, 'Jahada Rural Municipality', 'जहदा गाउँपालिका', NULL, NULL),
(51, 5, 'Budi Ganga Rural Municipality', 'बुढीगंगा गाउँपालिका', NULL, NULL),
(52, 5, 'Katahari Rural Municipality', 'कटहरी गाउँपालिका', NULL, NULL),
(53, 5, 'Dhanpalthan Rural Municipality', 'धनपालथान गाउँपालिका', NULL, NULL),
(54, 5, 'Kanepokhari Rural Municipality', 'कानेपोखरी गाउँपालिका', NULL, NULL),
(55, 5, 'Gramthan Rural Municipality', 'ग्रामथान गाउँपालिका', NULL, NULL),
(56, 5, 'Kerabari Rural Municipality', 'केरावारी गाउँपालिका', NULL, NULL),
(57, 5, 'Miklajung Rural Municipality', 'मिक्लाजुङ गाउँपालिका', NULL, NULL),
(58, 6, 'Halesituwanchung Municipality', 'हलेसीतुवांचुंग नगरपालिका', NULL, NULL),
(59, 6, 'Rupakot Majhuwagadhi Municipality', 'रुपाकोट मझुवागढ़ी नगरपालिका', NULL, NULL),
(60, 6, 'Khotehang Rural Municipality', 'खोटेहाङ गाउँपालिका', NULL, NULL),
(61, 6, 'Diprung Rural Municipality', 'दिप्रुङ गाउँपालिका', NULL, NULL),
(62, 6, 'Aiselukharka Rural Municipality', 'ऐसेलुखर्क गाउँपालिका', NULL, NULL),
(63, 6, 'Jantedhunga Rural Municipality', 'जन्तेढुंगा गाउँपालिका', NULL, NULL),
(64, 6, 'Kepilasgadhi Rural Municipality', 'केपिलासगढी गाउँपालिका', NULL, NULL),
(65, 6, 'Barahpokhari Rural Municipality', 'बराहपोखरी गाउँपालिका', NULL, NULL),
(66, 6, 'Lamidanda Rural Municipality', 'लामीडाँडा गाउँपालिका', NULL, NULL),
(67, 6, 'Sakela Rural Municipality', 'साकेला गाउँपालिका', NULL, NULL),
(68, 7, 'Siddhicharan Municipality', 'सिद्दिचरण नगरपालिका', NULL, NULL),
(69, 7, 'Manebhanjyang Rural Municipality', 'मानेभञ्ज्याङ गाउँपालिका', NULL, NULL),
(70, 7, 'Champadevi Rural Municipality', 'चम्पादेवी गाउँपालिका', NULL, NULL),
(71, 7, 'Sunkoshi Rural Municipality', 'सुनकोशी गाउँपालिका', NULL, NULL),
(72, 7, 'Molung Rural Municipality', 'मोलुङ गाउँपालिका', NULL, NULL),
(73, 7, 'Chisankhugadhi Rural Municipality', 'चिसंखुगढी गाउँपालिका', NULL, NULL),
(74, 7, 'Khiji Demba Rural Municipality', 'खिजिदेम्बा गाउँपालिका', NULL, NULL),
(75, 7, 'Likhu Rural Municipality', 'लिखु गाउँपालिका', NULL, NULL),
(76, 8, 'Fidim Municipality', 'फिदिम नगरपालिका', NULL, NULL),
(77, 8, 'Miklajung Rural Municipality', 'मिक्लाजुङ गाउँपालिका', NULL, NULL),
(78, 8, 'Phalgunanda Rural Municipality', 'फाल्गुनन्द गाउँपालिका', NULL, NULL),
(79, 8, 'Hilihang Rural Municipality', 'हिलिहाङ गाउँपालिका', NULL, NULL),
(80, 8, 'Phalelung Rural Municipality', 'फालेलुङ गाउँपालिका', NULL, NULL),
(81, 8, 'Yangwarak Rural Municipality', 'याङवरक गाउँपालिका', NULL, NULL),
(82, 8, 'Kummayak Rural Municipality', 'कुम्मायक गाउँपालिका', NULL, NULL),
(83, 8, 'Tumbewa Rural Municipality', 'तुम्बेवा गाउँपालिका', NULL, NULL),
(84, 9, 'Chainpur Municipality', 'चैनपुर नगरपालिका', NULL, NULL),
(85, 9, 'Khandwari Municipality', 'धर्मदेवी नगरपालिका', NULL, NULL),
(86, 9, 'Dharmadevi Municipality', 'खांदवारी नगरपालिका', NULL, NULL),
(87, 9, 'Maadi Municipality', 'मादी नगरपालिका', NULL, NULL),
(88, 9, 'Panchkhapan Municipality', 'पाँचखपन नगरपालिका', NULL, NULL),
(89, 9, 'Makalu Rural Municipality', 'मकालु गाउँपालिका', NULL, NULL),
(90, 9, 'Silichong Rural Municipality', 'सिलीचोङ गाउँपालिका', NULL, NULL),
(91, 9, 'Sabhapokhari Rural Municipality', 'सभापोखरी गाउँपालिका', NULL, NULL),
(92, 9, 'Chichila Rural Municipality', 'चिचिला गाउँपालिका', NULL, NULL),
(93, 9, 'Bhot Khola Rural Municipality', 'भोटखोला गाउँपालिका', NULL, NULL),
(94, 10, 'Solukhumbu', 'सोलुदुधकुण्ड नगरपालिका', NULL, NULL),
(95, 10, 'Dudhakaushika Rural Municipality', 'दुधकौशिका गाउँपालिका', NULL, NULL),
(96, 10, 'Necha Salyan Rural Municipality', 'नेचासल्यान गाउँपालिका', NULL, NULL),
(97, 10, 'Dudhkoshi Rural Municipality', 'दुधकोशी गाउँपालिका', NULL, NULL),
(98, 10, 'Maha Kulung Rural Municipality', 'महाकुलुङ गाउँपालिका', NULL, NULL),
(99, 10, 'Sotang Rural Municipality', 'सोताङ गाउँपालिका', NULL, NULL),
(100, 10, 'Khumbu Pasang Lhamu Rural Municipality', 'खुम्बु पासाङल्हमु गाउँपालिका', NULL, NULL),
(101, 10, 'Likhu Pike Rural Municipality', 'लिखुपिके गाउँपालिका', NULL, NULL),
(102, 11, 'Sunsari', '', NULL, NULL),
(103, 12, 'Taplejung', '', NULL, NULL),
(104, 1, 'Tehrathum', '', NULL, NULL),
(105, 13, 'Udayapur', '', NULL, NULL),
(106, 14, 'Bara', '', NULL, NULL),
(107, 15, 'Dhanusa', '', NULL, NULL),
(108, 16, 'Mahottari', '', NULL, NULL),
(109, 17, 'Parsa', '', NULL, NULL),
(110, 18, 'Rautahat', '', NULL, NULL),
(111, 19, 'Saptari', '', NULL, NULL),
(112, 20, 'Sarlahi', '', NULL, NULL),
(113, 21, 'Siraha', '', NULL, NULL),
(114, 22, 'Bhaktapur', '', NULL, NULL),
(115, 23, 'Chitwan', '', NULL, NULL),
(116, 24, 'Dhading', '', NULL, NULL),
(117, 25, 'Dolakha', '', NULL, NULL),
(118, 26, 'Kavrepalanchok', '', NULL, NULL),
(119, 27, 'Kathmandu', '', NULL, NULL),
(120, 28, 'Lalitpur', '', NULL, NULL),
(121, 29, 'Makwanpur', '', NULL, NULL),
(122, 30, 'Nuwakot', '', NULL, NULL),
(123, 31, 'Ramechhap', '', NULL, NULL),
(124, 32, 'Rasuwa', '', NULL, NULL),
(125, 33, 'Sindhuli', '', NULL, NULL),
(126, 34, 'Sindhupalchowk', '', NULL, NULL),
(127, 35, 'Baglung', '', NULL, NULL),
(128, 36, 'Gorkha', '', NULL, NULL),
(129, 37, 'Kaski', '', NULL, NULL),
(130, 38, 'Lamjung', '', NULL, NULL),
(131, 39, 'Manang', '', NULL, NULL),
(132, 40, 'Mustang', '', NULL, NULL),
(133, 41, 'Myagdi', '', NULL, NULL),
(134, 42, 'Nawalparasi', '', NULL, NULL),
(135, 43, 'Parbat', '', NULL, NULL),
(136, 44, 'Syangja', '', NULL, NULL),
(137, 45, 'Tanahun', '', NULL, NULL),
(138, 46, 'Arghakhanchi', '', NULL, NULL),
(139, 47, 'Banke', '', NULL, NULL),
(140, 48, 'Bardiya', '', NULL, NULL),
(141, 49, 'Dang', NULL, NULL, NULL),
(142, 50, 'Gulmi', '', NULL, NULL),
(143, 51, 'Kapilvastu', '', NULL, NULL),
(144, 52, 'Nawalparasi (West)', '', NULL, NULL),
(145, 53, 'Palpa', '', NULL, NULL),
(146, 54, 'Pyuthan', '', NULL, NULL),
(147, 5, 'Rolpa', '', NULL, NULL),
(148, 56, 'Rukum (East)', '', NULL, NULL),
(149, 57, 'Rupandehi', '', NULL, NULL),
(150, 58, 'Dailekh', '', NULL, NULL),
(151, 59, 'Dolpa', '', NULL, NULL),
(152, 60, 'Humla', '', NULL, NULL),
(153, 61, 'Jajarkot', '', NULL, NULL),
(154, 62, 'Jumla', '', NULL, NULL),
(155, 63, 'Kalikot', '', NULL, NULL),
(156, 64, 'Mugu', '', NULL, NULL),
(157, 65, 'Rukum (West)', '', NULL, NULL),
(158, 67, 'Salyan', '', NULL, NULL),
(159, 68, 'Surkhet', '', NULL, NULL),
(160, 69, 'Acham', '', NULL, NULL),
(161, 70, 'Baitadi', '', NULL, NULL),
(162, 71, 'Bajhan', '', NULL, NULL),
(163, 72, 'Bajura', '', NULL, NULL),
(164, 73, 'Dadeldhura', '', NULL, NULL),
(165, 74, 'Darcula', '', NULL, NULL),
(166, 75, 'Doti', '', NULL, NULL),
(167, 76, 'Kailali', '', NULL, NULL),
(168, 77, 'Kanchanpur', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', NULL, '2023-04-01 23:12:31', '2023-04-01 23:12:31'),
(2, 'role-create', 'web', NULL, '2023-04-01 23:12:31', '2023-04-01 23:12:31'),
(3, 'role-edit', 'web', NULL, '2023-04-01 23:12:31', '2023-04-01 23:12:31'),
(4, 'role-delete', 'web', NULL, '2023-04-01 23:12:31', '2023-04-01 23:12:31'),
(5, 'product-list', 'web', NULL, '2023-04-01 23:12:31', '2023-04-01 23:12:31'),
(6, 'product-create', 'web', NULL, '2023-04-01 23:12:31', '2023-04-01 23:12:31'),
(7, 'product-edit', 'web', NULL, '2023-04-01 23:12:31', '2023-04-01 23:12:31'),
(8, 'product-delete', 'web', NULL, '2023-04-01 23:12:31', '2023-04-01 23:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `popups`
--

CREATE TABLE `popups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `post_unique_id` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `thumbs` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `visit_no` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_en` varchar(255) DEFAULT NULL,
  `province_np` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `province_en`, `province_np`, `created_at`, `updated_at`) VALUES
(1, 'Province No. 1', NULL, NULL, NULL),
(2, 'Province No. 2', NULL, NULL, NULL),
(3, 'Bagmati Pradesh', NULL, NULL, NULL),
(4, 'Gandaki Pradesh', NULL, NULL, NULL),
(5, 'Province No. 5', NULL, NULL, NULL),
(6, 'Karnali Pradesh', NULL, NULL, NULL),
(7, 'Sudurpashchim Pradesh', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2023-04-01 23:12:32', '2023-04-01 23:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `visit_no` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `title`, `description`, `image`, `position`, `order`, `visit_no`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Goal', '<p>To develop the strong team spirit and provide quality solutions to the students</p>', '/upload_file/section/1680414037_67813460_logo new cropped.jpg', 'about', 0, 0, 1, '2023-04-01 23:55:37', NULL),
(2, 'Mission', '<p>To match the student&rsquo;s abilities, performance, and desires with the best possible career options.</p>', '/upload_file/section/1680414064_1091823743_logo new cropped.jpg', 'about', 0, 0, 1, '2023-04-01 23:56:05', NULL),
(3, 'VISA ASSISTANCCE', '<p>Our proper planning ensures to achieve maximum.</p>', '/upload_file/section/1680414105_349479120_logo new cropped.jpg', 'our-services', 0, 0, 1, '2023-04-01 23:56:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `site_email` varchar(255) DEFAULT NULL,
  `site_phone` varchar(255) DEFAULT NULL,
  `site_mobile` varchar(255) DEFAULT NULL,
  `site_fax` varchar(255) DEFAULT NULL,
  `site_first_address` varchar(255) DEFAULT NULL,
  `site_second_address` varchar(255) DEFAULT NULL,
  `site_description` text DEFAULT NULL,
  `map` text DEFAULT NULL,
  `nepal_office_contact_one` text DEFAULT NULL,
  `nepal_office_contact_two` text DEFAULT NULL,
  `india_office_contact_one` text DEFAULT NULL,
  `india_office_contact_two` text DEFAULT NULL,
  `site_url` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `social_profile_fb` varchar(255) DEFAULT NULL,
  `social_profile_twitter` varchar(255) DEFAULT NULL,
  `social_profile_insta` varchar(255) DEFAULT NULL,
  `social_profile_youtube` varchar(255) DEFAULT NULL,
  `social_profile_linkedin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_email`, `site_phone`, `site_mobile`, `site_fax`, `site_first_address`, `site_second_address`, `site_description`, `map`, `nepal_office_contact_one`, `nepal_office_contact_two`, `india_office_contact_one`, `india_office_contact_two`, `site_url`, `logo`, `favicon`, `social_profile_fb`, `social_profile_twitter`, `social_profile_insta`, `social_profile_youtube`, `social_profile_linkedin`, `created_at`, `updated_at`) VALUES
(1, 'Global Dreams Educational', 'info@globaldreamedu.com', '00977-1-4220326', NULL, NULL, 'Kathmandu', 'Mid Baneshor KTM', 'Global Dreams Educational Consultancy is one of the leading educational consultants, acknowledge for providing best guidance and counselling to the students.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14129.468882900417!2d85.322718!3d27.705946!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb197c6e3ae77b%3A0x6b93034305e64b0e!2sGlobal%20Dreams%20Educational%20Consultancy%20Pvt%20Ltd!5e0!3m2!1sen!2snp!4v1680412808203!5m2!1sen!2snp\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Global Dreams Educational\r\nConsultancy Pvt Ltd.\r\nNepal address : Putalisadak chowk.\r\nOpposite to Agriculture Development Bank Ltd\r\nPost box no : 10050\r\nKathmandu Nepal .\r\nPin code : 44600', 'Phone : +977-1- 5320326 / 5320336\r\ninfo@globaldreamedu.com', 'Global Dreams Educational\r\nConsultancy Pvt Ltd.\r\nIndia address : Ahmedabad Thaltej\r\nOpposite to TV Tower\r\n1000, 10th Floor, Gala Empire .\r\nGujarat, India .\r\nPin code : 380059', 'Phone : 0091- 9810425788\r\nindia@globaldreamedu.com', 'http://127.0.0.1:8000/', 'upload_file/setting/1680411875_431373783_global logo.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-02 00:57:23');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_member` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `social_profile_fb` varchar(255) DEFAULT NULL,
  `social_profile_twitter` varchar(255) DEFAULT NULL,
  `social_profile_insta` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `featured` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `country_member`, `name`, `designation`, `description`, `phone`, `email`, `image`, `social_profile_fb`, `social_profile_twitter`, `social_profile_insta`, `order`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(2, 'nepal-team-member', 'Mr Suraj Shrestha', 'Chairperson', 'Chairperson', NULL, NULL, '/upload_file/staff/1680412912_1275450761_lekhbahadur (1).jpg', NULL, NULL, NULL, NULL, 1, NULL, '2023-04-01 23:36:52', '2023-04-02 00:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alt_text` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `position`, `description`, `image`, `alt_text`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Shashank Acharya', 'Student', 'Global Dreams Educational Consultancy is one of the leading educational consultants, acknowledge for providing best guidance and counselling to the students.', '/upload_file/testimonial/1680413033_542642561_5.png', 'Shashank Acharya', 1, '2023-04-01 23:38:53', '2023-04-01 23:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `role` enum('superadmin','admin','user') NOT NULL DEFAULT 'admin',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `avatar`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', '9814618803', NULL, '2023-04-01 23:12:31', '$2y$10$qnIA7IT0wLYZEeVQebRMpepKcIIFpxnczg0JMdkiB/EXtmzghHJHi', NULL, NULL, NULL, 'superadmin', 'active', NULL, '2023-04-01 23:12:31', NULL),
(2, 'Admin', 'admin@gmail.com', '9814618803', '/upload_file/profile/1680411917_2122990453_logo.jpeg', '2023-04-01 23:12:31', '$2y$10$s0/hz2f3uyMNw9RCecRR3uM6b/r/jxgki97gn6UK/sDIwvilmFV52', NULL, NULL, NULL, 'admin', 'active', NULL, '2023-04-01 23:12:31', '2023-04-01 23:20:17'),
(3, 'User', 'user@gmail.com', '9814618803', NULL, '2023-04-01 23:12:31', '$2y$10$m7Ozr2lC4pVgRia4BQW7x.RNEQ.jRu3DYEwc5aPQefId56gA8Lecq', NULL, NULL, NULL, 'user', 'active', NULL, '2023-04-01 23:12:31', NULL),
(4, 'trc chaudhary', 'trc@gmail.com', NULL, NULL, NULL, '$2y$10$y1CH5OnLGFJkRISZp/C2mekmAXKjbHEgWZS6VIvUVTNCdNhlvzm0C', NULL, NULL, NULL, 'admin', 'active', NULL, '2023-04-01 23:12:32', '2023-04-01 23:12:32'),
(6, 'Global Dreams', 'info@globaldreamedu.com', NULL, NULL, NULL, '$2y$10$Ye2jv5F0umIZEENabT4dGOp1vaWjBzS2dLsuaNHD9u03DVtkQR7A.', NULL, NULL, NULL, 'admin', 'active', NULL, '2023-04-02 00:56:27', '2023-04-02 00:58:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_category_id_foreign` (`category_id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_slug_unique` (`slug`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commons`
--
ALTER TABLE `commons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_province_id_foreign` (`province_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `menus_name`
--
ALTER TABLE `menus_name`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_name_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `palikas`
--
ALTER TABLE `palikas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `palikas_district_id_foreign` (`district_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `popups`
--
ALTER TABLE `popups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `commons`
--
ALTER TABLE `commons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `menus_name`
--
ALTER TABLE `menus_name`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `palikas`
--
ALTER TABLE `palikas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popups`
--
ALTER TABLE `popups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `blog_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menus_name`
--
ALTER TABLE `menus_name`
  ADD CONSTRAINT `menus_name_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `palikas`
--
ALTER TABLE `palikas`
  ADD CONSTRAINT `palikas_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
