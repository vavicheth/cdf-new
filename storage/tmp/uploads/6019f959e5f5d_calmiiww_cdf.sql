-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2019 at 10:44 PM
-- Server version: 10.1.40-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdf`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submit` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `document_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `user_created_id` int(10) UNSIGNED DEFAULT NULL,
  `user_updated_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `submit`, `created_at`, `updated_at`, `deleted_at`, `document_id`, `user_id`, `user_created_id`, `user_updated_id`) VALUES
(1, 'Testing', 0, '2019-05-31 01:47:25', '2019-05-31 01:47:26', NULL, 1, 1, 1, 1),
(2, 'Test', 0, '2019-05-31 19:07:21', '2019-05-31 19:07:21', NULL, 2, 1, 1, NULL),
(3, 'Test 2', 0, '2019-05-31 19:07:30', '2019-05-31 20:34:07', '2019-05-31 20:34:07', 2, 1, 1, NULL),
(4, 'Test 3', 0, '2019-05-31 19:07:45', '2019-05-31 20:33:37', '2019-05-31 20:33:37', 2, 1, 1, NULL),
(5, 'I\'m here for you for you testing of user', 0, '2019-05-31 19:13:09', '2019-06-01 02:15:47', NULL, 2, 3, 3, 3),
(6, 'Testing are OK', 0, '2019-05-31 19:45:45', '2019-05-31 20:34:41', '2019-05-31 20:34:41', 2, 2, 2, NULL),
(7, 'Testing are OK', 0, '2019-05-31 20:34:52', '2019-05-31 21:06:32', NULL, 2, 2, 2, NULL),
(8, 'test', 0, '2019-06-01 02:24:55', '2019-06-01 02:28:06', '2019-06-01 02:28:06', 1, 1, 1, NULL),
(9, 'នាព្រឹកថ្ងៃអង្គារ ១៣រោច ខែពិសាខ ឆ្នាំកុរ ឯកស័ក ព.ស ២៥៦៣ ត្រូវនឹងថ្ងៃទី ២១ ខែឧសភា ឆ្នាំ២០១៩ មន្ទីរពេទ្យកាល់ម៉ែតបានបើកវគ្គបណ្តុះបណ្តាលមួយស្តីពី', 0, '2019-06-05 14:34:19', '2019-06-05 16:28:54', '2019-06-05 16:28:54', 4, 2, 2, NULL),
(10, 'ជូនលោកសាស្ត្រាចារ្យ អ៊ាវ សុខា មានយោបល់ ។​សូមអរគុណ', 1, '2019-06-05 15:59:13', '2019-06-05 16:00:39', NULL, 5, 21, 21, 21),
(11, 'ចម្លងជូន៖ ផ្នែកសាមីខ្លួន កិច្ចការអវត្តមាន សាមីខ្លួន+ឯកសារ', 1, '2019-06-05 16:03:30', '2019-06-05 16:04:00', NULL, 5, 2, 2, NULL),
(12, 'ជូនលោកប្រធាន ការិយាល័យ បច្ចេកទេស ពិនិត្យ។', 1, '2019-06-05 16:29:45', '2019-06-05 16:30:05', NULL, 4, 2, 2, NULL),
(13, 'ជូនប្រធានផ្នែកសម្ភព ពិនិត្យនិងមានយោបល់។', 1, '2019-06-05 16:46:11', '2019-06-05 16:46:26', NULL, 6, 2, 2, NULL),
(14, 'គួរជូនវេជ្ជបណ្ឌិត ផ្នែកសម្ភពនិងរោគស្រ្តីចូលរួម។ \r\n\r\nជូនការិយាល័យបច្ចេកទេស ពិនិត្យនិងមានយោបល់បន្ថែម។', 1, '2019-06-11 20:36:12', '2019-06-11 20:37:41', NULL, 8, 2, 2, 2),
(15, 'បើតាមឯកសារដែលភ្ជាប់មក ប្រធានបទនេះទាក់ទងច្រើននឹងផ្នែកច្បាប់។ខ្ញុំយល់ថា ធនធានមនុស្សខាងមន្ទីរពទ្យយើងមានលោក Pr កុយ វ៉ាន់នីដែលអាចចូលរួមជាមួយ។ សូមឯឧ.អគ្គនាយកមេត្តាសម្រេច។', 0, '2019-06-11 21:19:10', '2019-06-11 21:27:00', NULL, 8, 24, 24, 24),
(16, 'accord with BT, should Pr. VANNY participate on behaft of hospital', 0, '2019-06-12 15:51:39', '2019-06-12 15:51:39', NULL, 8, 27, 27, NULL),
(17, 'បាញឃើញស្ថានភាពជាក់ស្តែង ។ ជូនឯឧ សាស្រ្តាចារ្យ ឱ វ៉ាន់ដា ចូលរួម', 0, '2019-06-13 16:01:29', '2019-06-13 16:02:57', NULL, 8, 28, 28, 28),
(18, 'បានជ្រាប។', 1, '2019-06-13 16:26:53', '2019-06-13 16:27:33', NULL, 9, 2, 2, NULL),
(19, 'មាន', 0, '2019-06-13 16:30:44', '2019-06-13 16:31:17', '2019-06-13 16:31:17', 9, 29, 29, NULL),
(20, 'សូមគោរពជូន ឯកឧត្តមអគ្គនាយកមេត្តាជ្រាប ឱសថឈ្មោះ Colistin 1MUI ជាឱសថកំរប្រើប្រាស់​ ( ប្រហែល 80 ដប ក្នុង១ឆ្នាំ ) តាមរយះកាលកំណត់ប្រើនេះ (expired date : Octobre 2019) មន្ទីរពេទ្យមិនអាចប្រើអស់មុនកាលកំណត់ទេ ។ សូមគោរពជូនឯកឧត្តមអគ្គនាយក មេត្តាពិនិត្យសំរេច ដោយការគោរពដ៏ខ្ពង់ខ្ពស់', 0, '2019-06-13 17:38:48', '2019-06-13 17:47:43', NULL, 9, 29, 29, 29),
(21, 'ផលិតផលជិតហួសកំណត់ប្រើប្រាស់ទើបយកមកឲ្យយើងយ៉ាងច្រើន ដែលតាមការគុណនាទៅយើងត្រូវរហូតដល់ជាង៦ឆ្នាំ។ មិនអាចទទួលបានទាំងអស់ទេ។ សូមក្រុមហ៊ុនបែងចែកភាគលើសដែលយើងមិនទទួលទៅកន្លែងផ្សេងទៅ។ បើគេចង់ឲ្យទាំងអស់មកយើង ដាច់ខាត យោបលខ្ញុំគឺមិនគួរទទួលទេ។', 0, '2019-06-13 21:38:26', '2019-06-13 21:38:26', NULL, 9, 24, 24, NULL),
(22, 'ផលិតផលជិតហួសកំណត់ប្រើប្រាស់ទើបយកមកឲ្យយើងយ៉ាងច្រើន ដែលតាមការគុណនាទៅយើងត្រូវរហូតដល់ជាង៦ឆ្នាំ។ មិនអាចទទួលបានទាំងអស់ទេ។ សូមក្រុមហ៊ុនបែងចែកភាគលើសដែលយើងមិនទទួលទៅកន្លែងផ្សេងទៅ។ បើគេចង់ឲ្យទាំងអស់មកយើង ដាច់ខាត យោបលខ្ញុំគឺមិនគួរទទួលទេ។', 0, '2019-06-13 21:38:26', '2019-06-13 21:41:09', '2019-06-13 21:41:09', 9, 24, 24, NULL),
(23, 'ផលិតផលជិតហួសកំណត់ប្រើប្រាស់ទើបយកមកឲ្យយើងយ៉ាងច្រើន ដែលតាមការគុណនាទៅយើងត្រូវរហូតដល់ជាង៦ឆ្នាំ។ មិនអាចទទួលបានទាំងអស់ទេ។ សូមក្រុមហ៊ុនបែងចែកភាគលើសដែលយើងមិនទទួលទៅកន្លែងផ្សេងទៅ។ បើគេចង់ឲ្យទាំងអស់មកយើង ដាច់ខាត យោបលខ្ញុំគឺមិនគួរទទួលទេ។', 0, '2019-06-13 21:38:26', '2019-06-13 21:40:57', '2019-06-13 21:40:57', 9, 24, 24, NULL),
(24, 'ផលិតផលជិតហួសកំណត់ប្រើប្រាស់ទើបយកមកឲ្យយើងយ៉ាងច្រើន ដែលតាមការគុណនាទៅយើងត្រូវរហូតដល់ជាង៦ឆ្នាំ។ មិនអាចទទួលបានទាំងអស់ទេ។ សូមក្រុមហ៊ុនបែងចែកភាគលើសដែលយើងមិនទទួលទៅកន្លែងផ្សេងទៅ។ បើគេចង់ឲ្យទាំងអស់មកយើង ដាច់ខាត យោបលខ្ញុំគឺមិនគួរទទួលទេ។', 0, '2019-06-13 21:38:26', '2019-06-13 21:40:45', '2019-06-13 21:40:45', 9, 24, 24, NULL),
(25, 'ផលិតផលជិតហួសកំណត់ប្រើប្រាស់ទើបយកមកឲ្យយើងយ៉ាងច្រើន ដែលតាមការគុណនាទៅយើងត្រូវរហូតដល់ជាង៦ឆ្នាំ។ មិនអាចទទួលបានទាំងអស់ទេ។ សូមក្រុមហ៊ុនបែងចែកភាគលើសដែលយើងមិនទទួលទៅកន្លែងផ្សេងទៅ។ បើគេចង់ឲ្យទាំងអស់មកយើង ដាច់ខាត យោបលខ្ញុំគឺមិនគួរទទួលទេ។', 0, '2019-06-13 21:38:26', '2019-06-13 21:40:29', '2019-06-13 21:40:29', 9, 24, 24, NULL),
(26, 'ផលិតផលជិតហួសកំណត់ប្រើទើបយកមកឲ្យយើងយ៉ាងច្រើន(ត្រូវប្រើរហូតជាង៦ឆ្នាំ)។យើងមិនអាចទទួលទាំងអស់បានទេ។', 0, '2019-06-13 21:48:39', '2019-06-13 21:49:28', '2019-06-13 21:49:28', 9, 24, 24, NULL),
(27, 'បានឃើញយោបល់ជំនាញផ្នែកឱសថ និងការិយាលយ័បច្ចេកទេស និងយោងលើ រយៈពេលផុតកំណត់ប្រើប្រាស់កៀកពេល ក្នុងកាលៈទេសៈនេះមន្ទីរពេទ្យពុំមានតម្រូវការប្រើប្រាស់ឡើយ។', 0, '2019-06-14 03:34:30', '2019-06-14 03:34:30', NULL, 9, 28, 28, NULL),
(28, 'បាន', 0, '2019-06-14 12:50:00', '2019-06-14 12:52:52', '2019-06-14 12:52:52', 4, 4, 4, 4),
(29, NULL, 1, '2019-06-14 12:52:03', '2019-06-14 15:43:16', NULL, 10, 2, 2, 2),
(30, 'Test', 0, '2019-06-14 13:58:21', '2019-06-14 13:58:39', '2019-06-14 13:58:39', 4, 1, 1, NULL),
(31, 'ខ្ញុំបាទនឹងចូលរួម', 1, '2019-06-14 14:27:39', '2019-06-14 15:11:14', NULL, 13, 22, 22, 22),
(32, 'បានឃើញ និងជូន BT ពិនិត្យ។', 1, '2019-06-14 15:08:43', '2019-06-14 15:08:51', NULL, 14, 2, 2, NULL),
(33, 'គោរពជូនឯកឧត្តមអគ្គនាយកមេត្តាពិនិត្យសម្រេច។', 1, '2019-06-14 15:10:59', '2019-06-14 15:11:18', NULL, 13, 2, 2, NULL),
(34, 'ជូនលោក សាស្ត្រាចារ្យ ឡឹម តារា ជួយពិនិត្យនិងមានយោបល់សង្ខេប។', 1, '2019-06-14 15:14:32', '2019-06-14 15:15:23', NULL, 12, 2, 2, NULL),
(35, 'បានពិនិត្យ។ ជូនលោក អគ្គានុរក្ស និង ប្រធានការិយាល័យគណនេយ្យ ពិនិត្យនិងមានយោបល់។', 1, '2019-06-14 15:22:56', '2019-06-14 15:23:01', NULL, 11, 2, 2, NULL),
(36, 'បានជ្រាប និង បន្តការងារ', 0, '2019-06-14 18:23:57', '2019-06-14 18:23:57', NULL, 11, 22, 22, NULL),
(37, 'គួរអនុញ្ញាត។', 0, '2019-06-14 18:58:54', '2019-06-14 18:58:54', NULL, 14, 24, 24, NULL),
(38, 'សិក្ខាសាលាអន្តរជាតិ ខ្មែរ កូរេ ចិន ហុងកុង ដែលជាឱកាសល្អសម្រាប់បង្កើនសមត្ថភាពគ្រូពេទ្យឯកទេសយើង។\r\nគួរមានការសម្របសម្រួលឲ្យបានល្អបំផុត។', 0, '2019-06-14 19:07:43', '2019-06-14 19:07:43', NULL, 10, 24, 24, NULL),
(39, 'សិក្ខាសាលាអន្តរជាតិ ខ្មែរ កូរេ ចិន ហុងកុង ដែលជាឱកាសល្អសម្រាប់បង្កើនសមត្ថភាពគ្រូពេទ្យឯកទេសយើង។\r\nគួរមានការសម្របសម្រួលឲ្យបានល្អបំផុត។', 0, '2019-06-14 19:07:43', '2019-06-14 19:07:56', '2019-06-14 19:07:56', 10, 24, 24, NULL),
(40, 'បានឃើញនិងជូន BT ជួយពិនិត្យនិងមានយោបល់។', 1, '2019-06-14 20:40:17', '2019-06-15 12:08:50', NULL, 15, 2, 2, 2),
(41, 'អនុញ្ញាត ដោយគោរពគោលការណ៍ឯកសារមន្ទីរពេទ្យ ឯdiscussion ត្រូវមានការឯកភាពពី directors និក្ខេបទនៃមន្ទីរពេទ្យ ចំពោះការបកស្រាយទាំងឡាយក្នុងពេលការពារជាសាធារណៈ', 0, '2019-06-14 20:59:08', '2019-06-14 20:59:08', NULL, 14, 28, 28, NULL),
(42, 'ចម្លងជូនៈ\r\n\r\n-ផ្នែករបស់សាមីខ្លួន\r\n-កិច្ចការវត្តមាន\r\n-អគ្គគិលានុបដ្ឋាយិកា និងជំនួយការ\r\n-សាមីខ្លួន និងឯកសារ។', 1, '2019-06-14 21:16:33', '2019-06-14 21:16:38', NULL, 16, 2, 2, NULL),
(43, 'Should give permission with supervision of chief of ward', 1, '2019-06-14 21:33:27', '2019-06-14 21:33:44', NULL, 6, 27, 27, NULL),
(44, 'បានជ្រាប និងជូនលោក ជិន វិសាល ប្រធានការិយាលយ័គណនេយ្យចូលរួម', 0, '2019-06-14 22:04:19', '2019-06-14 22:23:43', NULL, 13, 28, 28, 28),
(45, 'Seen the comment of Director', 1, '2019-06-14 22:34:22', '2019-06-14 22:34:31', NULL, 14, 27, 27, NULL),
(46, 'Seen the comment of Director', 1, '2019-06-14 22:37:58', '2019-06-14 22:38:06', NULL, 9, 27, 27, NULL),
(47, 'បានជ្រាប និងអនុញ្ញាតសាមីខ្លួនចូលរួម', 0, '2019-06-14 22:38:10', '2019-06-14 22:38:10', NULL, 16, 28, 28, NULL),
(48, 'បានជ្រាប និងអនុញ្ញាតសាមីខ្លួនចូលរួម', 0, '2019-06-14 22:38:12', '2019-06-14 22:38:24', '2019-06-14 22:38:24', 16, 28, 28, NULL),
(49, 'Seen and accord for demands', 0, '2019-06-15 02:40:28', '2019-06-15 02:40:28', NULL, 11, 27, 27, NULL),
(50, '1. ភាគីបារាំងបានផ្តល់ការទុកចិត្ត និង ជ្រើសយកមន្ទីរពេទយើងជា centre de référence និង មានការចូលរួមពីសំណាក់អ្នកឯកទេសពីមន្ទីរពេទ្យនានា ដូចជា Kosamak et AKS និងមានcoordinateur efficace\r\n2. គំរោងនេះត្រូវតែបន្តទៅមុខជាជំហ៊ានៗ\r\n3. យើងត្រូវចាប់ផ្តើមsélectionner ក្រុមឯកទេស និង សំណើរបញ្ជូន ទៅ ធ្វើរ Training ឆាប់ៗនេះ។\r\n4. បន្តរជំរុញការធ្វើរលិខិត បទដ្ឋានផ្សេងៗអោយបានរួចរាលើ\r\nអរគុណ។\r\nសាស្រ្តាចារ្យ    ឡឹម តារា', 0, '2019-06-15 13:02:53', '2019-06-15 13:02:53', NULL, 7, 25, 25, NULL),
(51, '1. ភាគីបារាំងបានផ្តល់ការទុកចិត្ត និង ជ្រើសយកមន្ទីរពេទយើងជា centre de référence និង មានការចូលរួមពីសំណាក់អ្នកឯកទេសពីមន្ទីរពេទ្យនានា ដូចជា Kosamak et AKS និងមានcoordinateur efficace\r\n2. គំរោងនេះត្រូវតែបន្តទៅមុខជាជំហ៊ានៗ\r\n3. យើងត្រូវចាប់ផ្តើមsélectionner ក្រុមឯកទេស និង សំណើរបញ្ជូន ទៅ ធ្វើរ Training ឆាប់ៗនេះ។\r\n4. បន្តរជំរុញការធ្វើរលិខិត បទដ្ឋានផ្សេងៗអោយបានរួចរាលើ\r\nអរគុណ។\r\nសាស្រ្តាចារ្យ    ឡឹម តារា', 0, '2019-06-15 13:02:53', '2019-06-15 13:02:53', NULL, 7, 25, 25, NULL),
(52, 'គួរអនុញ្ញាត។', 0, '2019-06-15 18:30:47', '2019-06-15 18:30:47', NULL, 15, 24, 24, NULL),
(53, 'គួរចូលរួមតាមពេលវេលាសមស្រប និងទុកកិច្ចការមន្ទីរពេទ្យជាអទិភាព។\r\n\r\nជូនការិយាល័យបច្ចេកទេស មានយោបល់បន្ថែម។', 1, '2019-06-17 16:56:09', '2019-06-17 16:56:15', NULL, 17, 2, 2, NULL),
(54, 'បានឃើញនិងកត់សំគាល់លើឯកសារសាមីខ្នួន ដែលបានឈប់បំពាននឹងកិច្ចសន្យា។', 1, '2019-06-17 17:04:05', '2019-06-17 17:04:14', NULL, 18, 2, 2, NULL),
(55, 'គួរជួបត្រឹមថ្នាក់ការិយាល័យ ជាមុនសិន។\r\nជូន ការិយាល័យគណនេយ្យ និង ការិយាល័យបច្ចេកទេស មានយោបល់ បន្ថែម។', 1, '2019-06-17 17:13:55', '2019-06-17 17:14:00', NULL, 19, 2, 2, NULL),
(56, 'សមាសភាពការិយាល័យគណនេយ្យចូលរួម ៈ\r\n1- លោក ជិន វិសាល\r\n2- លោកស្រី សួង ឃុនណូរីន\r\n3- លោកស្រី ផល ច័ន្ទសុភា', 1, '2019-06-17 17:20:29', '2019-06-17 19:51:26', NULL, 19, 22, 22, NULL),
(57, 'បានជ្រាប និងជូនឯឧ អគ្គនាយកមានចំណាត់ការ។', 0, '2019-06-17 20:31:44', '2019-06-17 20:31:44', NULL, 19, 24, 24, NULL),
(58, 'Seen and accord with idea , meet only accounting office!', 1, '2019-06-17 21:14:49', '2019-06-17 21:15:00', NULL, 19, 27, 27, NULL),
(59, 'សិក្ខាសាលាជាជំហានដំបូងសំរាប់ការទំនាក់ទំនង​ជាមួយមន្ទីពេទ្យកូរ៉េសំរាប់ការ​អភិវឌ្ឃន៍រយៈពេលវែង។​សិក្ខាសាលានេះមានគោលដៅក្នុងការបណ្តុះបណ្តាលគ្រូពេទ្យយើងអោយសម្ថភាពខ្ពស់ផ្នែក​ Endoscopy​អោយទាន់​ប្រទេសជិតខាង ដូចនេះយើងគួរមានសហការណ៍ល្អ។', 0, '2019-06-18 13:03:31', '2019-06-18 13:03:31', NULL, 10, 31, 31, NULL),
(60, 'បានឃើញនិងជូនប្រធានការិយាល័យគណនេយ្យ ពិនិត្យនិងមានយោបល់។', 1, '2019-06-19 04:01:58', '2019-06-19 04:02:05', NULL, 23, 2, 2, NULL),
(61, 'ចម្លងជូន ៖\r\n-ការិយាល័យទាំងបី\r\n-CMC\r\n-សាមីខ្លួន។', 1, '2019-06-19 04:07:34', '2019-06-19 04:07:41', NULL, 22, 2, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_kh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_created_id` int(10) UNSIGNED DEFAULT NULL,
  `user_updated_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `name_kh`, `description`, `created_at`, `updated_at`, `deleted_at`, `user_created_id`, `user_updated_id`) VALUES
(1, 'Direction', 'ថ្នាក់ដឹកនាំ', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Administrative Office', 'ការិយាល័យរដ្ឋបាល', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Technical Office', 'ការិយាល័យបច្ចេកទេស', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Accounting', 'ការិយាល័យគណនេយ្យ', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'SIM', 'ប្រព័ន្ធព័ត៌មានសុខាភិបាល', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Operating Theater', 'ផ្នែកសល្យាគារ', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Emergency Unit', 'ផ្នែកសង្គ្រោះបន្ទាន់', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Recovery Unit', 'ផ្នែកសណ្តំ-ភ្ញាក់ពីសណ្តំ', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'ICU A', 'ផ្នែកប្រពោធនកម្ម\"ក\"', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Surgery A', 'ផ្នែកសល្យសាស្រ្ត\"ក\"', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Surgery A2', 'ផ្នែកសល្យសាស្រ្ត\"ក២\"', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Surgery B', 'ផ្នែកសល្យសាស្រ្ត\"ខ\"', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Medicine B', 'ផ្នែកជំងឺទូទៅ\"ខ\"', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Medicine A4', 'ផ្នែកជំងឺទូទៅ\"ក៤\"', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Medicine A5', 'ផ្នែកជំងឺទូទៅ\"ក៥\"', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Medicine A', 'ផ្នែកជំងឺទូទៅ\"ក\"', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Maternity', 'ផ្នែកសម្ភព', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Gynecology', 'ផ្នែករោគស្រ្តី', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Laboratory', 'ផ្នែកមន្ទីរពិសោធន៍', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Pharmacy', 'ផ្នែកឱសថស្ថាន', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Imagery Medical', 'ផ្នែករូបភាពវេជ្ជសាស្រ្ត', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'OPD (Consultation)', 'ផ្នែកពិគ្រោះជំងឺក្រៅ', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Neurosurgery', 'ផ្នែកវះកាត់ប្រព័ន្ធប្រសាទ', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'NeuroICU', 'ផ្នែកប្រពោធនកម្មប្រព័ន្ធប្រសាទ', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Onco-Hematology', 'ផ្នែកជំងឺមហារីក និងជំងឺឈាម', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Medical Electronic', 'ផ្នែកបច្ចេកទេសអេឡិចត្រូនិច', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Hemodialysis', 'មជ្ឈមណ្ឌលលាងឈាម', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Neo-natology', 'អ៊ុយនីតេប្រពោធនកម្មទារក', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'ICU B', 'អ៊ុយនីតេប្រពោធនកម្ម\"ខ\"', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Hepato Gastro Enterology', 'អ៊ុយនីតេថ្លើម ក្រពះ ពោះវៀន', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Neurology', 'អ៊ុយនីតេប្រសាទសាស្រ្ត', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'Ophthalmology', 'អ៊ុយនីតេជំងឺភ្នែក', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'ENT', 'អ៊ុយនីតេត្រចៀក ច្រមុះ បំពង់ ក', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Kane Therapy', 'ព្យាបាលដោយចលនា', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'Cardio A', 'អ៊ុយនីតេជំងឺបេះដូង\"ក\"', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'Cardio B', 'អ៊ុយនីតេជំងឺបេះដូង\"ខ\"', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Cardio Consultation', 'អ៊ុយនីតេពិគ្រោះជំងឺបេះដូង', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'Cardio Operating Theater', 'អ៊ុយនីតេសល្យាគារបេះដូង', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Cardio ICU', 'អ៊ុយនីតេប្រពោធនកម្មបេះដូង', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Cardio Angiography', 'អ៊ុយនីតេឆ្លុះសរសៃឈាមបេះដូង', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'Cardio Child', 'អគារបេះដូងកុមារ', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'Nurse Care', 'អគ្គគិលានុបដ្ឋាយិកា', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'General Working', 'អគ្គានុរក្ស', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'SAMU', 'សាមុយ', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'Deputy Director General', 'អគ្គនាយករងមន្ទីរពេទ្យ', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'Deputy Director General', 'អគ្គនាយករងមន្ទីរពេទ្យ', NULL, '2019-06-10 12:39:26', '2019-06-14 15:41:03', '2019-06-14 15:41:03', NULL, NULL),
(47, 'General Working', 'ក្រុមការងារទូទៅ', NULL, '2019-06-14 15:41:47', '2019-06-14 15:41:47', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `letter_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_in` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oranization` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submit` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_created_id` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `user_updated_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `letter_code`, `code_in`, `document_code`, `oranization`, `submit`, `created_at`, `updated_at`, `deleted_at`, `user_created_id`, `description`, `user_updated_id`) VALUES
(1, '១២៣គសក', '345HC', '01-01-0001', 'សវសស', 0, '2019-05-30 02:46:56', '2019-06-05 15:23:55', '2019-06-05 15:23:55', 1, 'កិច្ចប្រជុំ', 2),
(2, '010102', '125/HC', '01-00-1002', 'បសស', 0, '2019-05-31 16:19:47', '2019-06-05 15:23:55', '2019-06-05 15:23:55', 1, 'Request data BS2', 2),
(3, '001សវស', '0001កម/2019', '01-00-1010', 'បសស', 0, '2019-06-03 20:13:50', '2019-06-05 15:23:55', '2019-06-05 15:23:55', 1, 'Test', 2),
(4, '08058សវស', '0530កម2019', '00-10-0200', 'សវស', 0, '2019-06-04 13:55:31', '2019-06-19 12:09:27', NULL, 21, 'ស្នើសុំផ្លាស់ប្តូរពេលវេលាធ្វើកម្មសិក្សារបស់និសិ្សតឱសថសាស្ត្រ ថ្នាក់ឆ្នំាទី៣ ជំនាន់ទី៤១ ក្នតងឆ្នំាសិក្សា២០១៨-២០១៩ នៅមន្ទីរពេទ្យកាល់ម៉ែត', 21),
(5, '០២៦/១៩កគជ', '០៥១១កម២០១៩', '02-02-0038', 'គណៈគ្រូពេទ្យ', 0, '2019-06-05 15:57:37', '2019-06-05 16:09:33', '2019-06-05 16:09:33', 21, 'ស្នើរសុំអញ្ជើញសាស្រ្ដចារ្យ អ៊ាវ​ សុខា  ចូលរូមជាមេប្រយោគ នៅពោធិសាត់ និង កំពង់ចាម', NULL),
(6, '០៣០/១៩សឃតសគជ', '០៥៦៦កម២០១៩', '02-02-0064', 'ក្រុមហ៊ុន​ សាម ឃីង ត្រេឃីង ខូអិលធីឌី', 0, '2019-06-05 16:24:41', '2019-06-05 16:24:41', NULL, 21, 'សំណើផ្តល់អំណោយជាសំឡីអនាម័យដល់ផ្នែកសម្ភពមន្ទីរពេទ្យដើម្បីចែកជូនដល់ស្ត្រីដែលមកសម្រាលបុត្រប្រើប្រាស់', NULL),
(7, '0506', '0831', '02-02-0065', 'LYON', 0, '2019-06-10 15:22:49', '2019-06-10 17:25:36', NULL, 2, 'Rapport de mission de moi d\'avril sur la transplantation renale au Cambodge.', 1),
(8, '2019/-L-CMB-061', '0848កម2019', '52-02-0099', 'Spotlight Initiative', 1, '2019-06-11 19:56:47', '2019-06-17 19:11:55', NULL, 21, 'សំណើសុំមន្ត្រីតំណាងមន្ទីរពេទ្យកាល់ម៉ែត ចូលរួមវគ្គបណ្តុះបណ្តាល Delivering coordinated Quality Services to Women Migrant Workers that have been affected by Gender-Based Violence នៅថ្ងៃទី ២-៣ កក្កដា ​២០១៩ នៅ Sunway Hotel.', 21),
(9, 'គ្មាន', '0860កម2019', '52-02-0102', 'ក្រុមហ៊ុនទិវា ទេពឧសថវើលដ៍ ឃែរ ខូអិលធីឌី', 1, '2019-06-13 15:43:22', '2019-06-17 12:32:14', NULL, 21, 'សុំផ្ដល់ជាអំណោយជាថ្នាំពេទ្យ(COLISTST Inj (Colismethate Sodium 1 Million International Unit Per Vial)Pack Size B/1*1 Vial, Expired Date 10/2019', 21),
(10, 'គ្មាន', '0861កម2019', '51-02-0135', 'អ៊ុយនីតេ ថ្លើម ក្រពះ ពោះវៀន', 0, '2019-06-14 12:34:06', '2019-06-14 15:40:32', NULL, 21, 'សំណើរសុំសិក្ខាសិលា\" 1st Cambodia-Asian Joint Symposium on Advanced endoscopy \" នៅសាលសន្និសីទ អគាមជ្ឈមណ្ឌលវិទ្យាសាស្រ្ដប្រពន្ធ័ប្រសាទ នៃមន្ទីពេទ្យកាល់ម៉ែត', 2),
(11, 'គ្មាន', '0862កម2019', '52-02-0136', 'ផ្នែក សម្ភព', 0, '2019-06-14 13:19:41', '2019-06-17 20:19:54', NULL, 21, 'សំណើសុំធ្វើការជុសជុល កែរលម្អ បន្ទប់ថែទាំ និងបន្ទប់ត្រៀមសម្រាលនៅសម្ភព ១', 15),
(12, 'គ្មាន', '0863កម2019', '52-02-0103', 'Swati Sharma(Swati.Sharma@dalberg.com)', 0, '2019-06-14 13:33:58', '2019-06-14 15:13:16', NULL, 21, 'សំណើរសុំផ្តល់ជូនសេចក្តីសង្ខេបអំពីកិច្ចពិភាគ្សាស្តីពី SS2020 ដំណាក់កាលទី២ សូមមេត្តាផ្តល់មតិបន្ថែម។', 2),
(13, '199សនថហ', '0864កម2019', '41-02-0106', 'ក្រសួងសុខាភិបាល', 1, '2019-06-14 14:10:13', '2019-06-17 12:27:10', NULL, 21, 'លិខិតអញ្ជើញប្រធានគណនេយ្យអង្គភាពថ្នាក់កណ្តាល ចូលរួមប្រជុំស្តីពីការៀបចំរបាយការណ៍សមិទ្ធកម្មស្តីពីលទ្ធផលនៃការអនុវត្តថវិកាឆមាសទី១ ឆ្នំា២០១៩ នៅថ្ងៃទី១៧ ខែមិថុនា ឆ្នំា២០១៩ វេលាម៉ោង ២ៈ៣០នាទី ទីកន្លែងនៅទីស្តីការក្រសួងសុខាភិបាល​ បន្ទប់ជាន់ទី៦។', 21),
(14, '1391សវស', '0865កម2019', '01-02-0119', 'សវស', 1, '2019-06-14 14:29:07', '2019-06-17 12:26:02', NULL, 21, 'ស្នើសុំអនុញ្ញាតអោយនិស្សិតចំនួន៣រូប ថ្នាក់វេជ្ជបណ្ឌិតទូទៅ ជំនាន់ទី៣៩ ធ្វើការស្រាវជ្រាវឯកសារនៅមន្ទីរពេទ្យកាល់ម៉ែត សម្រាប់រៀបចំធ្វើនិក្ខេបបទ។', 21),
(15, '1392សវស', '0866កម2019', '01-02-0120', 'សវស', 0, '2019-06-14 19:10:26', '2019-06-14 20:39:28', NULL, 21, 'ស្នើសុំអនុញ្ញាតឲ្យនិសិ្សតចំនួន ០៣ រូបថ្នាក់វេជ្ជបណ្ឌិតទូទៅ ជំនាន់ទី៤០ ធ្វើការស្រាវជ្រាវឯកសារ នៅមន្ទីពេទ្យកាល់ម៉ែត  សម្រាប់ធ្វើនិក្ខេបបទ ។', 2),
(16, '184អបស/អព', '0867កម2019', '41-02-0108', 'ក្រសួងសុខាភិបាល', 1, '2019-06-14 20:57:28', '2019-06-17 12:24:14', NULL, 21, 'សូមអញ្ជើញលោក កុយ ធារិទ្ធ ចូលរួមយុទ្ធនាការថែទំា នៅថ្ងៃទី២០ ខែមិថុនា ឆ្នំា២០១៩ វេលាម៉ោង ៧:៣០នាទី ទីកន្លែងនៅអគារវប្បធម៌កម្ពុជា-កូរ៉េ។', 21),
(17, '1423សវស', '0870កម2019', '01-02-0121', 'សកលវិទ្យាល័យវិទ្យាសាស្រ្តសុខាភិបាល', 0, '2019-06-17 14:41:34', '2019-06-17 16:52:24', NULL, 21, 'ស្នើសុំអញ្ជើញមន្រ្ដីចំនួន ១៣រូប ចូលរួមប្រជុំដើម្បីផ្តល់ការតម្រង់ទិសស្ដីពីការៀបចំ និង ពង្រឹងគុណភាពនៃការបណ្ដុះបណ្ដាល​ នៅ​សកលវិទ្យាល័យវិទ្យាសាស្រ្ដសុខាភិបាល ។', 2),
(18, 'គ្មាន', '0869កម2019', '51-02-0137', 'ផ្នែកសល្យសាស្ត្រ ក', 0, '2019-06-17 16:10:49', '2019-06-17 17:02:34', NULL, 21, 'គិលានុបដ្ឋាកឈ្មោះ អ៊ឹង វណ្ណរិទ្ធ ភេទ ប្រុស អាយុ ២៧ឆ្នំា បានបម្រើការនៅផ្នែកសល្យសាស្ត្រ ក បានបោះបង់ការងារចាប់តាំងពីថ្ងៃទី១០ ខែមិថុនា ឆ្នំា២០១៩ ដោយគ្មានមូលហេតុ។', 2),
(19, 'គ្មាន', '0872កម2019', '52-02-0104', 'PMRS', 1, '2019-06-17 16:39:56', '2019-06-17 21:17:44', NULL, 21, 'ស្នើសុំជួបពិភាគ្សាជាមួយលោកអគ្គនាយកឬតំណាងមន្ទីរពេទ្យកាល់ម៉ែត ប្រធានគណនេយ្យ និងបុគ្គលិកពេទ្យផ្នែកមូលនិធិសមធម៌ អំពីការងារទាក់ទងនិងការអនុវត្តមូលនិធិសមធម៌ PMRS និងចុះពិនិត្យសួរសុខទុក្ខអ្នកជំងឺមូលនិធិសមធម៌ នៅថ្ងៃទី១៩-មិថុនា-២០១៩ វេលាម៉ោង ២:៣០នាទីរសៀល នៅមន្ទីរពេទ្យកាល់ម៉ែត។', 21),
(20, '018កកមស', '0873កម2019', '41-02-0109', 'ក្រសួងសុខាភិបាល', 0, '2019-06-17 20:34:24', '2019-06-17 20:34:24', NULL, 21, 'លិខិតអញ្ជើញគ្រូពេទ្យវះកាត់ផ្នែកសម្ភព០១រូប(វះកាត់យកកូន)ចូលរួមការប្រជុំដើម្បីបង្កើតនិយាមប្រតិបត្តិសំរាប់ការអនុវត្តថែទំាទារកទើបនិងកើតភ្លាមដោយការវះកាត់, នៅថ្ងៃទី៥ ខែកក្កដា ឆ្នំា២០១៩ វេលាម៉ោង ២:៣០នាទី, ទីកន្លែង បន្ទប់លេខ៣ ជាន់ទី៣ នៅក្រសួងសុខាភិបាល។', NULL),
(21, '135អបសកស', '0875កម2019', '41-02-0110', 'ក្រសួងសុខាភិបាល', 0, '2019-06-17 20:41:08', '2019-06-17 20:41:08', NULL, 21, 'លោក កុយ វ៉ាន់នី, លោក ស៊ុំ សត្ថា, លោក ថេង យូដាលីន, លោក នីវ រត្នចីរៈ, លិខិតបង្គាប់ការសមាសភាព អនុក្រុមការងារបច្ចេកទេសសម្រាប់ជំងឺសរសៃឈាមបេះដូង និងជំងឺទឹកនោមផ្អែម។', NULL),
(22, '135អបសកស', '0875កម2019', '41-02-0110', 'ក្រសួងសុខាភិបាល', 0, '2019-06-17 20:52:46', '2019-06-19 04:05:18', NULL, 21, 'លោក កុយ វ៉ាន់នី, លោក ស៊ុំ សត្ថា, លោក ថេង យូដាលីន, លោក នីវ រត្នវីរៈ, លិខិតបង្គាប់ការសមាសភាព អនុក្រុមការងារបច្ចេកទេសសម្រាប់ជំងឺសរសៃឈាមបេះដូង និងជំងឺទឹកនោមផ្អែម។', 2),
(23, '5114សហវអលសា', '0874កម2019', '28-02-0005', 'ក្រសួងសេដ្ឋកិច្ចនិងហិរញ្ញវត្', 0, '2019-06-17 20:57:11', '2019-06-19 03:57:51', NULL, 21, 'សំណើសុំផ្ញើរបាយការណ៍ស្តីពីការអនុវត្តកិច្ចលទ្ធកម្មប្រចំាឆមាសទី១ និងព្យាករណ៍ការអនុវត្តកិច្ចលទ្ធកម្មប្រចំាឆ្នំា២០១៩ មកក្រសួងសេដ្ឋកិច្ចនិងហិរញ្ញវត្ថុ។', 2),
(24, '128/19 អបស', '0876កម/2019', '41-02-0111', 'ក្រសួងសុខាភិបាល', 1, '2019-06-19 13:36:18', '2019-06-19 13:36:18', NULL, 15, 'សំណើចាត់មន្រ្តី០២រូប ចូលរួមវគ្គវគ្គបណ្តុះបណ្តាលស្តីពី៖ Health Policy The Role of Data and Technology in Healthcare។\r\nដែលនឹងប្រព្រឹត្តទៅនៅថ្ងៃទី២៤-២៨ ខែមិថុនា ឆ្នាំ២០១៩ នៅមជ្ឈមណ្ឌលកិច្ចសហប្រតិបត្តការកម្ពុជា-សិង្ហបុរី។', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `document_user`
--

CREATE TABLE `document_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_user`
--

INSERT INTO `document_user` (`id`, `document_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 2, NULL, NULL),
(4, 2, 3, NULL, NULL),
(5, 1, 2, NULL, NULL),
(6, 3, 3, NULL, NULL),
(7, 4, 5, NULL, NULL),
(8, 4, 2, NULL, NULL),
(9, 5, 5, NULL, NULL),
(10, 5, 2, NULL, NULL),
(11, 6, 5, NULL, NULL),
(12, 6, 2, NULL, NULL),
(13, 7, 27, NULL, NULL),
(14, 7, 5, NULL, NULL),
(15, 7, 25, NULL, NULL),
(16, 8, 2, NULL, NULL),
(17, 8, 24, NULL, NULL),
(18, 8, 27, NULL, NULL),
(19, 9, 2, NULL, NULL),
(20, 9, 28, NULL, NULL),
(21, 9, 27, NULL, NULL),
(24, 9, 24, NULL, NULL),
(23, 9, 29, NULL, NULL),
(25, 10, 2, NULL, NULL),
(33, 14, 2, NULL, NULL),
(32, 13, 22, NULL, NULL),
(31, 13, 2, NULL, NULL),
(29, 11, 2, NULL, NULL),
(30, 12, 2, NULL, NULL),
(34, 14, 28, NULL, NULL),
(35, 14, 27, NULL, NULL),
(36, 14, 24, NULL, NULL),
(37, 13, 28, NULL, NULL),
(38, 13, 27, NULL, NULL),
(39, 12, 28, NULL, NULL),
(40, 12, 27, NULL, NULL),
(41, 12, 25, NULL, NULL),
(42, 11, 28, NULL, NULL),
(43, 11, 22, NULL, NULL),
(44, 11, 27, NULL, NULL),
(45, 10, 28, NULL, NULL),
(46, 10, 27, NULL, NULL),
(47, 11, 32, NULL, NULL),
(48, 10, 31, NULL, NULL),
(49, 10, 24, NULL, NULL),
(50, 15, 2, NULL, NULL),
(51, 15, 28, NULL, NULL),
(52, 15, 27, NULL, NULL),
(53, 15, 24, NULL, NULL),
(54, 16, 2, NULL, NULL),
(55, 16, 28, NULL, NULL),
(56, 16, 26, NULL, NULL),
(57, 16, 27, NULL, NULL),
(58, 17, 2, NULL, NULL),
(59, 18, 2, NULL, NULL),
(60, 19, 2, NULL, NULL),
(61, 17, 28, NULL, NULL),
(62, 17, 27, NULL, NULL),
(63, 17, 5, NULL, NULL),
(64, 18, 28, NULL, NULL),
(65, 18, 26, NULL, NULL),
(66, 18, 27, NULL, NULL),
(67, 19, 28, NULL, NULL),
(68, 19, 22, NULL, NULL),
(69, 19, 27, NULL, NULL),
(71, 19, 24, NULL, NULL),
(72, 20, 2, NULL, NULL),
(73, 21, 2, NULL, NULL),
(74, 22, 2, NULL, NULL),
(75, 23, 28, NULL, NULL),
(76, 23, 22, NULL, NULL),
(77, 23, 27, NULL, NULL),
(78, 22, 28, NULL, NULL),
(79, 22, 27, NULL, NULL),
(80, 22, 5, NULL, NULL),
(81, 24, 28, NULL, NULL),
(82, 24, 27, NULL, NULL),
(83, 24, 5, NULL, NULL),
(84, 24, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_id` bigint(20) UNSIGNED DEFAULT NULL,
  `collection_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `manipulations` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_properties` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsive_images` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `collection_name`, `name`, `file_name`, `disk`, `mime_type`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(20, 'App\\Document', 8, 'file', '52-02-0099', '52-02-0099.pdf', 'public', 'application/pdf', 1474562, '[]', '[]', '[]', 1, '2019-06-11 19:56:42', '2019-06-11 20:32:05'),
(19, 'App\\Document', NULL, 'file', '52-02-0099', '52-02-0099.pdf', 'public', 'application/pdf', 1474562, '[]', '[]', '[]', 8, '2019-06-11 19:55:21', '2019-06-11 19:55:21'),
(3, 'App\\Document', NULL, 'file', 'avatarF', 'avatarF.png', 'public', 'image/png', 12934, '[]', '[]', '[]', 3, '2019-05-31 16:11:03', '2019-05-31 16:11:03'),
(4, 'App\\Document', NULL, 'file', 'avatarM', 'avatarM.png', 'public', 'image/png', 12190, '[]', '[]', '[]', 4, '2019-05-31 16:11:03', '2019-05-31 16:11:03'),
(18, 'App\\Document', NULL, 'file', 'UsernameOpenEMR', 'UsernameOpenEMR.pdf', 'public', 'application/pdf', 67518, '[]', '[]', '[]', 7, '2019-06-10 17:25:32', '2019-06-10 17:25:32'),
(15, 'App\\Document', 4, 'file', 'man-34', 'man-34.png', 'public', 'image/png', 22580, '[]', '[]', '[]', 1, '2019-06-05 14:31:22', '2019-06-12 01:15:15'),
(16, 'App\\Document', 5, 'file', '0511កម2019', '0511កម2019.pdf', 'public', 'application/pdf', 1496439, '[]', '[]', '[]', 5, '2019-06-05 15:57:34', '2019-06-05 15:57:37'),
(17, 'App\\Document', 6, 'file', '0566កម2019', '0566កម2019.pdf', 'public', 'application/pdf', 748000, '[]', '[]', '[]', 6, '2019-06-05 16:24:11', '2019-06-05 16:24:41'),
(21, 'App\\Document', 9, 'file', '52-02-0102', '52-02-0102.pdf', 'public', 'application/pdf', 953578, '[]', '[]', '[]', 1, '2019-06-13 15:43:21', '2019-06-13 16:09:37'),
(22, 'App\\Document', 10, 'file', '51-02-0135', '51-02-0135.pdf', 'public', 'application/pdf', 1710788, '[]', '[]', '[]', 1, '2019-06-14 12:22:45', '2019-06-14 12:35:03'),
(23, 'App\\Document', NULL, 'file', 'Up-To-Date-Cambodia-Number-Prefixes-in-2015', 'Up-To-Date-Cambodia-Number-Prefixes-in-2015.jpg', 'public', 'image/jpeg', 303163, '[]', '[]', '[]', 9, '2019-06-14 12:48:38', '2019-06-14 12:48:38'),
(24, 'App\\Document', 11, 'file', '51-02-0136', '51-02-0136.pdf', 'public', 'application/pdf', 349425, '[]', '[]', '[]', 1, '2019-06-14 13:19:36', '2019-06-14 13:21:09'),
(25, 'App\\Document', 12, 'file', '52-02-0103', '52-02-0103.pdf', 'public', 'application/pdf', 944578, '[]', '[]', '[]', 1, '2019-06-14 13:33:47', '2019-06-14 15:13:16'),
(26, 'App\\Document', 13, 'file', '41-02-0106.01pdf', '41-02-0106.01pdf.pdf', 'public', 'application/pdf', 389711, '[]', '[]', '[]', 1, '2019-06-14 14:10:09', '2019-06-14 14:25:04'),
(27, 'App\\Document', 14, 'file', '01-02-0119', '01-02-0119.pdf', 'public', 'application/pdf', 1910685, '[]', '[]', '[]', 1, '2019-06-14 14:27:45', '2019-06-14 15:08:01'),
(28, 'App\\Document', 15, 'file', '01-02-0120', '01-02-0120.pdf', 'public', 'application/pdf', 1927115, '[]', '[]', '[]', 1, '2019-06-14 19:10:23', '2019-06-14 19:10:50'),
(29, 'App\\Document', 16, 'file', '41-02-0108', '41-02-0108.pdf', 'public', 'application/pdf', 480333, '[]', '[]', '[]', 1, '2019-06-14 20:57:25', '2019-06-14 21:15:00'),
(30, 'App\\Document', 17, 'file', '01-02-0121', '01-02-0121.pdf', 'public', 'application/pdf', 3037393, '[]', '[]', '[]', 1, '2019-06-17 14:41:27', '2019-06-17 16:52:24'),
(31, 'App\\Document', 18, 'file', '51-02-0137', '51-02-0137.pdf', 'public', 'application/pdf', 933821, '[]', '[]', '[]', 1, '2019-06-17 16:10:45', '2019-06-17 17:02:34'),
(32, 'App\\Document', 19, 'file', '52-02-0104', '52-02-0104.pdf', 'public', 'application/pdf', 263114, '[]', '[]', '[]', 1, '2019-06-17 16:39:53', '2019-06-17 17:12:29'),
(33, 'App\\Document', 20, 'file', '41-02-0109', '41-02-0109.pdf', 'public', 'application/pdf', 424628, '[]', '[]', '[]', 10, '2019-06-17 20:34:23', '2019-06-17 20:34:25'),
(34, 'App\\Document', 22, 'file', '41-02-0110', '41-02-0110.pdf', 'public', 'application/pdf', 937524, '[]', '[]', '[]', 1, '2019-06-17 20:40:43', '2019-06-19 04:05:18'),
(35, 'App\\Document', 23, 'file', '28-02-0005', '28-02-0005.pdf', 'public', 'application/pdf', 480876, '[]', '[]', '[]', 1, '2019-06-17 20:57:07', '2019-06-19 03:57:51'),
(36, 'App\\Document', 24, 'file', '41-02-0111', '41-02-0111.pdf', 'public', 'application/pdf', 929602, '[]', '[]', '[]', 11, '2019-06-19 13:36:07', '2019-06-19 13:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_29_093525_create_1559111725_roles_table', 1),
(4, '2019_05_29_093532_create_1559111731_users_table', 1),
(5, '2019_05_29_093533_add_5cee283b36dc6_relationships_to_user_table', 1),
(6, '2019_05_29_093657_create_1559111816_user_actions_table', 1),
(7, '2019_05_29_093658_add_5cee28907c6b5_relationships_to_useraction_table', 1),
(8, '2019_05_29_110642_create_1559117201_departments_table', 1),
(9, '2019_05_29_110643_add_5cee3d99d43ee_relationships_to_department_table', 1),
(10, '2019_05_29_113633_create_1559118993_titles_table', 1),
(11, '2019_05_29_114255_create_1559119375_positions_table', 1),
(12, '2019_05_29_115915_update_1559120355_users_table', 1),
(13, '2019_05_29_115920_add_5cee49e853505_relationships_to_user_table', 1),
(14, '2019_05_29_120039_add_5cee4a366dcd3_relationships_to_user_table', 1),
(15, '2019_05_29_121624_create_1559121383_documents_table', 1),
(16, '2019_05_29_121625_add_5cee4df05ad08_relationships_to_document_table', 1),
(17, '2019_05_29_121632_create_media_table', 1),
(18, '2019_05_29_122007_update_1559121607_documents_table', 1),
(19, '2019_05_29_122013_add_5cee4ecd4068f_relationships_to_document_table', 1),
(20, '2019_05_29_122805_create_1559122084_comments_table', 1),
(21, '2019_05_29_122806_add_5cee50adda64d_relationships_to_comment_table', 1),
(22, '2019_05_29_124311_update_1559122991_documents_table', 1),
(23, '2019_05_29_124315_add_5cee54336b3e2_relationships_to_document_table', 1),
(24, '2019_05_29_124407_add_5cee546710a8d_relationships_to_document_table', 1),
(25, '2019_05_29_124445_update_1559123085_comments_table', 1),
(26, '2019_05_29_124450_add_5cee5491dbdb9_relationships_to_comment_table', 1),
(27, '2019_05_29_182400_add_5ceea4107acf6_relationships_to_document_table', 1),
(28, '2019_05_29_182427_add_5ceea42a84a5a_relationships_to_comment_table', 1),
(30, '2019_05_29_224149_create_document_user_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_kh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `name`, `name_kh`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Director General', 'អគ្គនាយក', NULL, '2019-05-30 01:52:15', '2019-05-30 01:52:15', NULL),
(2, 'Deputy Director General', 'អគ្គនាយករង', NULL, '2019-05-30 01:52:36', '2019-05-30 01:52:36', NULL),
(3, 'Chief', 'ប្រធាន', NULL, '2019-05-30 01:52:57', '2019-05-30 01:52:57', NULL),
(4, 'Deputy Chief', 'អនុប្រធាន', NULL, '2019-05-30 01:53:16', '2019-05-30 01:53:16', NULL),
(5, 'Chief INF', 'អគ្គគិលានុបដ្ឋាក-យិកា', NULL, '2019-06-03 18:36:54', '2019-06-03 18:36:55', NULL),
(6, 'Deputy Chief INF', 'អគ្គគិលានុបដ្ឋាក-យិកា', NULL, '2019-06-03 18:37:26', '2019-06-03 18:37:28', NULL),
(7, 'Chief Salle', 'នាយសាល', NULL, '2019-06-03 18:38:57', '2019-06-03 18:38:59', NULL),
(8, 'Chief Salle', 'នាយសាលរង', NULL, '2019-06-03 18:39:20', '2019-06-03 18:39:21', NULL),
(9, 'Doctor', 'វេជ្ជបណ្ឌិត', NULL, '2019-06-03 18:43:21', '2019-06-03 18:43:21', NULL),
(10, 'Nurse', 'គិលានុបដ្ឋាក-យិកា', NULL, '2019-06-03 18:43:59', '2019-06-03 18:44:00', NULL),
(11, 'Midwife', 'ឆ្មប', NULL, '2019-06-03 18:44:12', '2019-06-03 18:44:12', NULL),
(12, 'Staff', 'បុគ្គលិក', NULL, '2019-06-03 18:44:24', '2019-06-03 18:44:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Administrators', '2019-05-30 02:42:55', '2019-05-30 02:42:55'),
(2, 'Modarators', '2019-05-30 02:42:55', '2019-05-30 02:42:55'),
(3, 'Users', '2019-05-30 02:42:55', '2019-05-30 02:42:55'),
(4, 'Creators', '2019-06-17 12:56:36', '2019-06-17 12:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_kh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `name`, `name_kh`, `abr`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Professor', 'សាស្ត្រាចារ្យ', 'Prof.', NULL, '2019-05-30 01:46:46', '2019-05-30 01:46:46', NULL),
(2, 'Professor Associate', 'សាស្ត្រាចារ្យរង', 'Prof. Asso', NULL, '2019-05-30 01:47:08', '2019-05-30 01:47:08', NULL),
(3, 'Professor Assistant', 'សាស្ត្រាចារ្យជំនួយ', 'Prof. Assi', NULL, '2019-05-30 01:47:25', '2019-05-30 01:47:25', NULL),
(4, 'Doctor', 'វេជ្ជបណ្ឌិត', 'Dr.', NULL, '2019-05-30 01:47:48', '2019-05-30 01:47:48', NULL),
(5, 'Pharmacian', 'ឱសថការី', 'Ph.', NULL, '2019-05-30 01:48:19', '2019-05-30 01:48:19', NULL),
(6, 'Nurse', 'គិលានុបដ្ឋាក', 'Inf.', NULL, '2019-05-30 01:48:41', '2019-05-30 01:48:41', NULL),
(7, 'Mister', 'លោក', 'Mr.', NULL, '2019-05-30 01:49:07', '2019-05-30 01:49:07', NULL),
(8, 'Madam', 'លោកស្រី', 'Mrs.', NULL, '2019-05-30 01:50:33', '2019-05-30 01:50:33', NULL),
(9, 'Miss', 'កញ្ញា', 'Ms.', NULL, '2019-05-30 01:50:53', '2019-05-30 01:50:53', NULL),
(10, 'H.E. Professor', 'ឯកឧត្តមសាស្ត្រាចារ្យ', 'H.E. Prof.', NULL, '2019-06-12 16:41:17', '2019-06-12 16:41:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `name_kh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_id` int(10) UNSIGNED DEFAULT NULL,
  `position_id` int(10) UNSIGNED DEFAULT NULL,
  `department_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `name_kh`, `gender`, `dob`, `phone`, `staff_code`, `photo`, `title_id`, `position_id`, `department_id`) VALUES
(1, 'Administrator', 'admin@calmette.org', NULL, '$2y$10$X8n/bXT8gY4P4KWsXnbCV.gcVg/slN54tE68YaAgG1hA3ysW3olOC', '', '2019-05-30 02:42:55', '2019-05-30 12:33:32', 1, 'អ្នកគ្រប់គ្រង', '1', '2019-05-30', '012222333', '0008', '1559180012-avatarM.png', 7, 3, 2),
(2, 'Mao Reasey', 'maoreasey@calmette.org', NULL, '$2y$10$UU9k3VQzX7.Ri6hFVj0B9uW5754zXr14mjuJFp9lvCbwfU0tHD8eu', 'mLL20HRTAxX7GIFjOjmzbLRI2dX0XFpvogy5vfpnKzyaVYghbKbYIm90M6Q8', '2019-05-31 02:00:29', '2019-06-06 13:14:30', 1, 'ម៉ៅ រាសី', '1', '2019-05-01', '012111222', '0001', '1559228428-man-17.png', 7, 3, 2),
(3, 'Uch Bunmy', 'bunmy@calmette.org', NULL, '$2y$10$eQHGEfc7Cd86nSlYI/Mube9bBvaIQWWiGN6nrewPDzs2nbLJVScpC', NULL, '2019-05-31 02:01:26', '2019-06-04 10:15:25', 3, 'អ៊ុច ប៊ុនមី', '1', '2019-05-30', '012111222', '0001', '1559603725-man-28.png', 7, 4, 3),
(4, 'SOU KOSAL', 'soukosal@calmette.org', NULL, '$2y$10$WT4YqFxHVvbD0tpIKPLAl..blKurnZenxuokdl8afF5t8/fmJL3nO', NULL, '2019-06-04 13:16:44', '2019-06-04 13:16:44', 1, 'ស៊ូ កុសល', '1', '2019-06-04', NULL, NULL, NULL, 7, 12, 2),
(5, 'KOY VANNY', 'koyvanny@calmette.org', NULL, '$2y$10$wNzqFWalI/X2gALO2uaSxugNRoZ0kvzVoTnf2k0QoMzCB1AbtfWJS', 'o6TT8lAN3FjGGjCDnNM6SkyYlSyRlOvgUg7NyelUzQOlC4V13sqTOtLTNo6J', '2019-06-04 13:17:42', '2019-06-04 13:17:42', 3, 'កុយ វ៉ាន់នី', '1', '2019-06-04', NULL, NULL, NULL, 1, 3, 3),
(6, 'VA MENG', 'vameng@calmette.org', NULL, '$2y$10$i.mhbfHEAeJyVPyjwp2Q4.hT/.PvdJCGyfrSejLq7TOkKFAxaJLhy', NULL, '2019-06-04 13:21:17', '2019-06-04 13:21:17', 3, 'វ៉ា ម៉េង', '1', '2019-06-04', NULL, NULL, NULL, 7, 12, 2),
(7, 'BUT LONGKHONTHIDA', 'butlongkhunthida@calmette.org', NULL, '$2y$10$JlyMbrkVEScVTyP0KvodXOPL1Bja/qD/uvJeyijbTWGkMHYEDe.R2', 'NawEojJR0DkA5afOdcpRpH39aozhmHojQmgSW9tKHttzeUlY3MIcGziIOI5s', '2019-06-04 13:22:42', '2019-06-13 18:32:16', 2, 'ប៊ុត ឡុងឃុនធិតា', '2', '2019-06-04', '017716167', NULL, NULL, 8, 12, 2),
(8, 'HONG CHANVORLEAK', 'hongchanvorleak@calmette.org', NULL, '$2y$10$6pn80HIOlpN14hreWxkEBeTJPW0ov0lua4AahUd4Tw79cibcSyCDi', NULL, '2019-06-04 13:25:16', '2019-06-14 17:59:37', 2, 'ហុង ​ច័ន្ទវល័ក្ខ', '2', '2019-06-11', NULL, NULL, NULL, 9, 12, 2),
(9, 'Y RATANA', 'yratana@calmette.org', NULL, '$2y$10$UwUav1P9viJYERn0nrePquS/UAyWAQejXiNXqKFBBQio7X0hrBptG', NULL, '2019-06-04 13:26:49', '2019-06-14 18:48:12', 2, 'អ៊ី រតនា', '2', '2019-06-04', '098838393', NULL, NULL, 8, 12, 2),
(10, 'CHHEANG VATHANA', 'chheangvathana@calmette.org', NULL, '$2y$10$Vz6.xgoCSOoObydrggf1.O1SIM/OoVvAueW23MXqrjvhPIO2jjb9G', NULL, '2019-06-04 13:28:01', '2019-06-17 14:52:16', 2, 'ឈៀង វឌ្ឍនា', '2', '2019-06-04', '077666978', NULL, NULL, 8, 12, 2),
(11, 'UCH BUNMY', 'uchbunmy@calmette.org', NULL, '$2y$10$PgZ.0JaqcUbkCdv1E4JpWe88hz8e0UipH7EF1SpKky809hSK8F8ua', NULL, '2019-06-04 13:29:22', '2019-06-04 13:29:22', 3, 'អ៊ុច​ ប៊ុនមី', '1', '2019-06-04', '012306967', NULL, NULL, 7, 12, 2),
(12, 'SEAN SOVANNRITH', 'seansovannrith@calmette.org', NULL, '$2y$10$jISAoOaIC/y9YnyFNbDG1OBo6gTSdofcw00EFS80vqiAiaMblj4M2', NULL, '2019-06-04 13:31:04', '2019-06-04 13:31:04', 3, 'សៀន សុវណ្ណរិទ្ធ', '1', '2019-06-04', '011777474', NULL, NULL, 7, 12, 2),
(13, 'CHHIM SAMEDY', 'chhimsamedy@calmette.org', NULL, '$2y$10$rCr5pulCe3YLI8jIKiZltOG7xXcGgMRrOutjO4eDaRMrzas4Q0BiC', NULL, '2019-06-04 13:32:18', '2019-06-04 13:32:18', 3, 'ឈឹម​ សាមឺឌី', '1', '2019-06-04', '012602161', NULL, NULL, 7, 12, 2),
(14, 'SOY SIEK', 'soysiek@calmette.org', NULL, '$2y$10$VmZnHqVPWY/Mynz4OlEZsuxhBLZp0ZB9iqADQFFRF/E3GJbbZzWmq', NULL, '2019-06-04 13:33:18', '2019-06-04 13:33:18', 3, 'សយ សៀក', '1', '2019-06-04', '095717041', NULL, NULL, 7, 12, 2),
(15, 'TOUCH BOONRATH', 'touchboonrath@calmette.org', NULL, '$2y$10$SwNJ5uMm6FkwP.M8OTxuTOyiK8Bo40.AHyyTmAvi/hgGGRd88WVhm', NULL, '2019-06-04 13:34:43', '2019-06-05 15:31:36', 2, 'ទូច ប៊ុនរ័ត្ន', '1', '2019-06-04', NULL, NULL, NULL, 7, 12, 2),
(16, 'LONG MON', 'longmon@calmette.org', NULL, '$2y$10$TOwhcOzmZSKzPEL0ln5gWekB8n8Rm0Q4zp5VQNjo8HdrCkmQcjSIq', NULL, '2019-06-04 13:35:30', '2019-06-17 14:56:52', 2, 'ឡុង ម៉ុន', '1', '2019-06-04', NULL, NULL, NULL, 7, 12, 2),
(17, 'TIM CHANNUON', 'timchannuon@calmette.org', NULL, '$2y$10$noq8XkyzPlISEH381eB0xOBJ/GY1z8QfvHRpCP50uBatThtJ1ZOte', NULL, '2019-06-04 13:36:23', '2019-06-04 13:36:23', 3, 'ទឹម ចាន់នួន', '1', '2019-06-04', NULL, NULL, NULL, 8, 12, 2),
(18, 'NHEK CHANNDANET', 'nhekchanndanet@calmette.org', NULL, '$2y$10$.D.aaSlgI3AoiW2XoS7y.e8ArLZnIzatDpdjTQdaXrEOxi3XzzA0e', '32OhHlzyICJqr1JHKBXIV5gT0vgOKSrzFPK1SqhBXmxyz44NHFnUqAgLdWvs', '2019-06-04 13:37:45', '2019-06-14 18:56:42', 2, 'ញ៉ឹក ច័ន្ទដាណែត', '2', '2019-06-04', NULL, NULL, NULL, 8, 12, 2),
(19, 'CHRIV SOKHONRYKA', 'chrivsokhonryka@calmette.org', NULL, '$2y$10$CjHSTb8hd2rvAL.AA9ziiOniKVsW4RSzTiwBoVbaWDfF5gY8j6CVu', NULL, '2019-06-04 13:38:51', '2019-06-17 14:55:50', 2, 'ជ្រីវ សុខុនរីកា', '2', '2019-06-04', NULL, NULL, NULL, 9, 12, 2),
(20, 'SREY RATHA', 'sreyratha@calmette.org', NULL, '$2y$10$4cBTN33nPat9UJpDjlzxyeQIRQ9kFigQ1.QLKzuJ/jg7t85QdRry2', NULL, '2019-06-04 13:39:49', '2019-06-17 14:56:05', 2, 'ស្រី រដ្ឋា', '2', '2019-06-04', NULL, NULL, NULL, 8, 12, 2),
(21, 'KHOM PHILIPE', 'khomphilipe@calmette.org', NULL, '$2y$10$rlWLw3g8Fn/D2EfAlo7P8.tvCyrYx5oCSfgsahV/Wcg4vXGJTbCkS', 'IbZuxC9upUpLuTK5NaYbwankCLNSPFjDUi2dABfr90gCGbGsS0LTmD9TTtRR', '2019-06-04 13:40:37', '2019-06-04 13:50:04', 2, 'ខុម ភីលីព', '2', '2019-06-04', NULL, NULL, NULL, 7, 12, 2),
(22, 'CHIN VISAL', 'chinvisal@calmette.org', NULL, '$2y$10$nMEyKDfeMai920HTDy8BKeDvIOfoiNMbDHnVcuNxAF8TRDT1s9OsG', 'O6KcE3eiYUYlupQBnwjH1B6uHt6rbtnblAfVpzsZVWiKwvYSgEU7riDsNGdG', '2019-06-04 13:41:51', '2019-06-04 13:41:51', 3, 'ជិន វិសាល', '1', '2019-06-04', '012552345', NULL, NULL, 7, 3, 4),
(23, 'CHHUOY MENG', 'chhuoymeng@calmette.org', NULL, '$2y$10$qOHxHLsxaXsm4etQv/wrA.geXdFbOaJGSGq1W/H4drHdsr5YTwtvy', NULL, '2019-06-04 13:44:34', '2019-06-12 16:42:23', 3, 'ឈួយ ម៉េង', '1', '2019-06-04', '012886781', NULL, NULL, 10, 4, 3),
(24, 'OR WANDA', 'orwanda@calmette.org', NULL, '$2y$10$T4.IcDzYcBZ4mFvuecO5k.t5c2bD/6unIrOlx9ufAlNwUBAF7ndKq', 'DK1BfayL8fjtIjWB85GMlaK6QIwh5qiohaYlwsmLcelRaSs7jdsG68C5xSXj', '2019-06-04 13:46:01', '2019-06-12 16:42:08', 3, 'ឱ វ៉ាន់ដា', '1', '2019-06-04', NULL, NULL, NULL, 10, 4, 3),
(25, 'LEM DARA', 'lemdara@calmette.org', NULL, '$2y$10$D9AQyk8TIKhw.FjJSKiQNuRsACuP9exHOzRd34xdzx5yF4I4yvrGu', NULL, '2019-06-04 13:46:56', '2019-06-04 13:46:56', 3, 'ឡឹម តារា', '1', '2019-06-04', NULL, NULL, NULL, 1, 3, 10),
(26, 'IM CHHENGSY', 'imchhengsy@calmette.org', NULL, '$2y$10$MGVdA/jyXQc6dM24AM97/eO9/rL612Xxmq50hS1YMdavnyAE8rv76', NULL, '2019-06-04 13:48:41', '2019-06-04 13:48:41', 3, 'អ៊ឹម ឆេងស៊ី', '2', '2019-06-04', NULL, NULL, NULL, 9, 6, 42),
(27, 'KONG SONYA', 'kongsonya@calmette.org', NULL, '$2y$10$iTx2KrWvnqZRkbqwOtFiyOG4POrudblIzx3.cyS.hY6okLB0GcGjG', 'WYLuZ9euux0SETSc2BwHA52GXsTASHhuXmTygES4NTXgKVaBIkVI8JDAglgO', '2019-06-10 12:40:32', '2019-06-12 16:41:42', 3, 'គង់ សន្យា', '1', '2019-06-10', NULL, NULL, NULL, 10, 2, 45),
(28, 'CHHEANG RA', 'chheangra@calmette.org', NULL, '$2y$10$KSv0KyWhScJgehr.MBJKI.wLZBWST9HlNLNbfoADBbKcGEWgQ0o3S', 'JkKMsgy0o7XrrQdWG8FPccWJefUYmontAXigKqeVMrrSDpIHtFzGgHLHUTgd', '2019-06-13 15:39:27', '2019-06-13 15:43:26', 2, 'ឈាង រ៉ា', '1', '2019-06-13', NULL, NULL, NULL, 10, 1, 1),
(29, 'SAR SREY THEANINE', 'sarsreytheanine@calmette.org', NULL, '$2y$10$ytGew6Y8.OfchD97P1C0bueL5Y1iMXpAG42ScZrd8D4ry/BXNQD/i', NULL, '2019-06-13 16:18:00', '2019-06-13 20:11:12', 3, 'សរ ស្រីធានីន', '2', '2019-06-13', NULL, NULL, NULL, 8, 3, 20),
(30, 'Chhor Nareth', 'chhornareth@calmette.org', NULL, '$2y$10$HPQ8FLiLmPl4X.JG5u3oeeqFHDgiS2tYpFs4XKWH/EuDbe8EoH/si', 'TPZlpdsyVsWGqg5GVC2Iktetzhdv61LN8yL4jUyssmrnKqKutcURECrfRCWF', '2019-06-13 16:48:17', '2019-06-13 16:48:17', 3, 'ឈរ ណារ៉េត', '1', '2019-06-13', NULL, NULL, NULL, 1, 3, 7),
(31, 'KY VUTHA', 'kyvutha@calmette.org', NULL, '$2y$10$8D8cNzVBSLwBjM5ptfvzfeQ2CZY8yZaW0RW4dke75w79MF2Bfv562', '7GfjxOrx1b3NKjhMTrq6Y40sy4mHVJVzjZZX7zob60cjbltj2qAeNyzNiaDv', '2019-06-14 15:38:47', '2019-06-14 15:38:47', 3, 'គី វុត្ថា', '1', '2019-06-14', NULL, NULL, NULL, 4, 3, 30),
(32, 'SAM LEAK', 'samleak@calmette.org', NULL, '$2y$10$loefrPu8nvFIM6EapOV2.ucCMPWOlJUK18SzhFNkRIq0p7XTdsADO', NULL, '2019-06-14 15:40:33', '2019-06-14 15:42:33', 3, 'សាម លក្ខណ៍', '1', '2019-06-14', NULL, NULL, NULL, 7, 3, 47);

-- --------------------------------------------------------

--
-- Table structure for table `user_actions`
--

CREATE TABLE `user_actions` (
  `id` int(10) UNSIGNED NOT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action_model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_actions`
--

INSERT INTO `user_actions` (`id`, `action`, `action_model`, `action_id`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'updated', 'roles', 1, '2019-05-30 02:42:55', '2019-05-30 02:42:55', 1),
(2, 'updated', 'roles', 2, '2019-05-30 02:42:55', '2019-05-30 02:42:55', 1),
(3, 'created', 'roles', 3, '2019-05-30 02:42:55', '2019-05-30 02:42:55', 1),
(4, 'updated', 'users', 1, '2019-05-30 02:42:55', '2019-05-30 02:42:55', 1),
(5, 'created', 'documents', 1, '2019-05-30 02:46:56', '2019-05-30 02:46:56', 1),
(6, 'updated', 'users', 1, '2019-05-30 12:33:32', '2019-05-30 12:33:32', 1),
(7, 'created', 'users', 2, '2019-05-31 02:00:29', '2019-05-31 02:00:29', 1),
(8, 'created', 'users', 3, '2019-05-31 02:01:26', '2019-05-31 02:01:26', 1),
(9, 'updated', 'documents', 1, '2019-05-31 02:19:48', '2019-05-31 02:19:48', 1),
(10, 'created', 'documents', 2, '2019-05-31 16:19:47', '2019-05-31 16:19:47', 1),
(11, 'updated', 'documents', 2, '2019-05-31 17:59:51', '2019-05-31 17:59:51', 1),
(12, 'updated', 'documents', 2, '2019-05-31 18:02:10', '2019-05-31 18:02:10', 1),
(13, 'updated', 'documents', 2, '2019-05-31 18:02:47', '2019-05-31 18:02:47', 1),
(14, 'updated', 'documents', 2, '2019-05-31 18:04:19', '2019-05-31 18:04:19', 1),
(15, 'updated', 'documents', 2, '2019-05-31 18:04:28', '2019-05-31 18:04:28', 1),
(16, 'updated', 'documents', 2, '2019-05-31 18:04:40', '2019-05-31 18:04:40', 1),
(17, 'updated', 'documents', 2, '2019-05-31 18:10:53', '2019-05-31 18:10:53', 1),
(18, 'updated', 'documents', 2, '2019-05-31 18:11:46', '2019-05-31 18:11:46', 1),
(19, 'created', 'comments', 2, '2019-05-31 19:07:21', '2019-05-31 19:07:21', 1),
(20, 'created', 'comments', 3, '2019-05-31 19:07:30', '2019-05-31 19:07:30', 1),
(21, 'created', 'comments', 4, '2019-05-31 19:07:45', '2019-05-31 19:07:45', 1),
(22, 'created', 'comments', 5, '2019-05-31 19:13:09', '2019-05-31 19:13:09', 3),
(23, 'created', 'comments', 6, '2019-05-31 19:45:45', '2019-05-31 19:45:45', 2),
(24, 'deleted', 'comments', 4, '2019-05-31 20:33:37', '2019-05-31 20:33:37', 1),
(25, 'deleted', 'comments', 3, '2019-05-31 20:34:07', '2019-05-31 20:34:07', 1),
(26, 'deleted', 'comments', 6, '2019-05-31 20:34:41', '2019-05-31 20:34:41', 2),
(27, 'created', 'comments', 7, '2019-05-31 20:34:52', '2019-05-31 20:34:52', 2),
(28, 'updated', 'comments', 7, '2019-05-31 21:01:56', '2019-05-31 21:01:56', 1),
(29, 'updated', 'comments', 7, '2019-05-31 21:02:18', '2019-05-31 21:02:18', 1),
(30, 'updated', 'comments', 7, '2019-05-31 21:02:26', '2019-05-31 21:02:26', 1),
(31, 'updated', 'comments', 7, '2019-05-31 21:03:04', '2019-05-31 21:03:04', 1),
(32, 'updated', 'comments', 7, '2019-05-31 21:06:32', '2019-05-31 21:06:32', 1),
(33, 'updated', 'comments', 5, '2019-05-31 21:07:02', '2019-05-31 21:07:02', 3),
(34, 'updated', 'comments', 5, '2019-05-31 21:12:52', '2019-05-31 21:12:52', 1),
(35, 'updated', 'comments', 5, '2019-05-31 21:31:46', '2019-05-31 21:31:46', 1),
(36, 'updated', 'comments', 5, '2019-05-31 21:33:09', '2019-05-31 21:33:09', 3),
(37, 'updated', 'comments', 5, '2019-05-31 21:38:46', '2019-05-31 21:38:46', 1),
(38, 'updated', 'documents', 2, '2019-06-01 02:14:52', '2019-06-01 02:14:52', 1),
(39, 'updated', 'documents', 1, '2019-06-01 02:15:00', '2019-06-01 02:15:00', 1),
(40, 'updated', 'comments', 5, '2019-06-01 02:15:47', '2019-06-01 02:15:47', 3),
(41, 'created', 'comments', 8, '2019-06-01 02:24:55', '2019-06-01 02:24:55', 1),
(42, 'deleted', 'comments', 8, '2019-06-01 02:28:06', '2019-06-01 02:28:06', 1),
(43, 'created', 'documents', 3, '2019-06-03 20:13:50', '2019-06-03 20:13:50', 1),
(44, 'updated', 'documents', 3, '2019-06-03 20:28:09', '2019-06-03 20:28:09', 1),
(45, 'updated', 'users', 3, '2019-06-04 01:24:12', '2019-06-04 01:24:12', 1),
(46, 'updated', 'documents', 3, '2019-06-04 01:25:09', '2019-06-04 01:25:09', 1),
(47, 'updated', 'documents', 3, '2019-06-04 01:29:12', '2019-06-04 01:29:12', 1),
(48, 'updated', 'documents', 3, '2019-06-04 01:38:21', '2019-06-04 01:38:21', 1),
(49, 'updated', 'documents', 3, '2019-06-04 01:44:33', '2019-06-04 01:44:33', 1),
(50, 'updated', 'users', 3, '2019-06-04 01:45:44', '2019-06-04 01:45:44', 1),
(51, 'updated', 'users', 3, '2019-06-04 01:46:03', '2019-06-04 01:46:03', 1),
(52, 'updated', 'documents', 3, '2019-06-04 02:00:58', '2019-06-04 02:00:58', 1),
(53, 'updated', 'documents', 3, '2019-06-04 02:03:01', '2019-06-04 02:03:01', 1),
(54, 'updated', 'users', 3, '2019-06-04 10:15:25', '2019-06-04 10:15:25', 1),
(55, 'updated', 'documents', 3, '2019-06-04 12:43:37', '2019-06-04 12:43:37', 1),
(56, 'updated', 'documents', 3, '2019-06-04 12:43:51', '2019-06-04 12:43:51', 1),
(57, 'created', 'users', 4, '2019-06-04 13:16:44', '2019-06-04 13:16:44', 1),
(58, 'created', 'users', 5, '2019-06-04 13:17:42', '2019-06-04 13:17:42', 1),
(59, 'created', 'users', 6, '2019-06-04 13:21:17', '2019-06-04 13:21:17', 4),
(60, 'created', 'users', 7, '2019-06-04 13:22:42', '2019-06-04 13:22:42', 4),
(61, 'created', 'users', 8, '2019-06-04 13:25:16', '2019-06-04 13:25:16', 4),
(62, 'created', 'users', 9, '2019-06-04 13:26:49', '2019-06-04 13:26:49', 4),
(63, 'created', 'users', 10, '2019-06-04 13:28:01', '2019-06-04 13:28:01', 4),
(64, 'created', 'users', 11, '2019-06-04 13:29:22', '2019-06-04 13:29:22', 4),
(65, 'created', 'users', 12, '2019-06-04 13:31:04', '2019-06-04 13:31:04', 4),
(66, 'created', 'users', 13, '2019-06-04 13:32:18', '2019-06-04 13:32:18', 4),
(67, 'created', 'users', 14, '2019-06-04 13:33:18', '2019-06-04 13:33:18', 4),
(68, 'created', 'users', 15, '2019-06-04 13:34:43', '2019-06-04 13:34:43', 4),
(69, 'created', 'users', 16, '2019-06-04 13:35:30', '2019-06-04 13:35:30', 4),
(70, 'created', 'users', 17, '2019-06-04 13:36:23', '2019-06-04 13:36:23', 4),
(71, 'created', 'users', 18, '2019-06-04 13:37:45', '2019-06-04 13:37:45', 4),
(72, 'created', 'users', 19, '2019-06-04 13:38:51', '2019-06-04 13:38:51', 4),
(73, 'created', 'users', 20, '2019-06-04 13:39:49', '2019-06-04 13:39:49', 4),
(74, 'created', 'users', 21, '2019-06-04 13:40:37', '2019-06-04 13:40:37', 4),
(75, 'created', 'users', 22, '2019-06-04 13:41:51', '2019-06-04 13:41:51', 4),
(76, 'created', 'users', 23, '2019-06-04 13:44:34', '2019-06-04 13:44:34', 4),
(77, 'created', 'users', 24, '2019-06-04 13:46:01', '2019-06-04 13:46:01', 4),
(78, 'created', 'users', 25, '2019-06-04 13:46:56', '2019-06-04 13:46:56', 4),
(79, 'created', 'users', 26, '2019-06-04 13:48:41', '2019-06-04 13:48:41', 4),
(80, 'updated', 'users', 23, '2019-06-04 13:49:20', '2019-06-04 13:49:20', 4),
(81, 'updated', 'users', 24, '2019-06-04 13:49:45', '2019-06-04 13:49:45', 4),
(82, 'updated', 'users', 21, '2019-06-04 13:50:04', '2019-06-04 13:50:04', 1),
(83, 'created', 'documents', 4, '2019-06-04 13:55:31', '2019-06-04 13:55:31', 21),
(84, 'updated', 'documents', 1, '2019-06-05 14:28:54', '2019-06-05 14:28:54', 2),
(85, 'updated', 'documents', 2, '2019-06-05 14:29:01', '2019-06-05 14:29:01', 2),
(86, 'updated', 'documents', 3, '2019-06-05 14:29:07', '2019-06-05 14:29:07', 2),
(87, 'updated', 'documents', 4, '2019-06-05 14:29:14', '2019-06-05 14:29:14', 2),
(88, 'updated', 'documents', 4, '2019-06-05 14:29:37', '2019-06-05 14:29:37', 2),
(89, 'updated', 'documents', 4, '2019-06-05 14:31:23', '2019-06-05 14:31:23', 2),
(90, 'created', 'comments', 9, '2019-06-05 14:34:19', '2019-06-05 14:34:19', 2),
(91, 'deleted', 'documents', 1, '2019-06-05 15:23:55', '2019-06-05 15:23:55', 2),
(92, 'deleted', 'documents', 2, '2019-06-05 15:23:55', '2019-06-05 15:23:55', 2),
(93, 'deleted', 'documents', 3, '2019-06-05 15:23:55', '2019-06-05 15:23:55', 2),
(94, 'updated', 'users', 15, '2019-06-05 15:31:36', '2019-06-05 15:31:36', 1),
(95, 'created', 'documents', 5, '2019-06-05 15:57:37', '2019-06-05 15:57:37', 21),
(96, 'created', 'comments', 10, '2019-06-05 15:59:13', '2019-06-05 15:59:13', 21),
(97, 'updated', 'comments', 10, '2019-06-05 15:59:41', '2019-06-05 15:59:41', 21),
(98, 'updated', 'comments', 10, '2019-06-05 16:00:39', '2019-06-05 16:00:39', 21),
(99, 'created', 'comments', 11, '2019-06-05 16:03:30', '2019-06-05 16:03:30', 2),
(100, 'updated', 'comments', 11, '2019-06-05 16:04:00', '2019-06-05 16:04:00', 2),
(101, 'deleted', 'documents', 5, '2019-06-05 16:09:33', '2019-06-05 16:09:33', 2),
(102, 'created', 'documents', 6, '2019-06-05 16:24:41', '2019-06-05 16:24:41', 21),
(103, 'updated', 'users', 2, '2019-06-05 16:26:36', '2019-06-05 16:26:36', 2),
(104, 'deleted', 'comments', 9, '2019-06-05 16:28:54', '2019-06-05 16:28:54', 2),
(105, 'created', 'comments', 12, '2019-06-05 16:29:45', '2019-06-05 16:29:45', 2),
(106, 'updated', 'comments', 12, '2019-06-05 16:30:05', '2019-06-05 16:30:05', 2),
(107, 'created', 'comments', 13, '2019-06-05 16:46:11', '2019-06-05 16:46:11', 2),
(108, 'updated', 'comments', 13, '2019-06-05 16:46:26', '2019-06-05 16:46:26', 2),
(109, 'updated', 'users', 2, '2019-06-06 13:14:30', '2019-06-06 13:14:30', 1),
(110, 'updated', 'users', 7, '2019-06-06 13:14:48', '2019-06-06 13:14:48', 1),
(111, 'created', 'departments', 46, '2019-06-10 12:39:26', '2019-06-10 12:39:26', 1),
(112, 'created', 'users', 27, '2019-06-10 12:40:32', '2019-06-10 12:40:32', 1),
(113, 'updated', 'users', 27, '2019-06-10 13:01:49', '2019-06-10 13:01:49', 1),
(114, 'updated', 'users', 22, '2019-06-10 13:05:21', '2019-06-10 13:05:21', 22),
(115, 'created', 'documents', 7, '2019-06-10 15:22:49', '2019-06-10 15:22:49', 2),
(116, 'updated', 'documents', 7, '2019-06-10 15:25:03', '2019-06-10 15:25:03', 2),
(117, 'updated', 'users', 27, '2019-06-10 15:53:29', '2019-06-10 15:53:29', 27),
(118, 'updated', 'documents', 7, '2019-06-10 17:25:36', '2019-06-10 17:25:36', 1),
(119, 'created', 'documents', 8, '2019-06-11 19:56:47', '2019-06-11 19:56:47', 21),
(120, 'updated', 'documents', 8, '2019-06-11 20:32:04', '2019-06-11 20:32:04', 21),
(121, 'updated', 'documents', 8, '2019-06-11 20:34:12', '2019-06-11 20:34:12', 2),
(122, 'created', 'comments', 14, '2019-06-11 20:36:12', '2019-06-11 20:36:12', 2),
(123, 'updated', 'comments', 14, '2019-06-11 20:37:16', '2019-06-11 20:37:16', 2),
(124, 'updated', 'comments', 14, '2019-06-11 20:37:41', '2019-06-11 20:37:41', 2),
(125, 'created', 'comments', 15, '2019-06-11 21:19:10', '2019-06-11 21:19:10', 24),
(126, 'updated', 'comments', 15, '2019-06-11 21:27:00', '2019-06-11 21:27:00', 24),
(127, 'updated', 'documents', 4, '2019-06-12 01:15:15', '2019-06-12 01:15:15', 2),
(128, 'updated', 'users', 2, '2019-06-12 01:16:44', '2019-06-12 01:16:44', 2),
(129, 'updated', 'documents', 8, '2019-06-12 15:47:14', '2019-06-12 15:47:14', 21),
(130, 'created', 'comments', 16, '2019-06-12 15:51:39', '2019-06-12 15:51:39', 27),
(131, 'created', 'titles', 10, '2019-06-12 16:41:17', '2019-06-12 16:41:17', 1),
(132, 'updated', 'users', 27, '2019-06-12 16:41:42', '2019-06-12 16:41:42', 1),
(133, 'updated', 'users', 24, '2019-06-12 16:42:08', '2019-06-12 16:42:08', 1),
(134, 'updated', 'users', 23, '2019-06-12 16:42:23', '2019-06-12 16:42:23', 1),
(135, 'updated', 'users', 2, '2019-06-13 15:36:03', '2019-06-13 15:36:03', 2),
(136, 'created', 'users', 28, '2019-06-13 15:39:27', '2019-06-13 15:39:27', 1),
(137, 'updated', 'users', 7, '2019-06-13 15:41:25', '2019-06-13 15:41:25', 1),
(138, 'updated', 'users', 7, '2019-06-13 15:42:25', '2019-06-13 15:42:25', 1),
(139, 'created', 'documents', 9, '2019-06-13 15:43:22', '2019-06-13 15:43:22', 21),
(140, 'updated', 'users', 28, '2019-06-13 15:43:26', '2019-06-13 15:43:26', 1),
(141, 'updated', 'users', 28, '2019-06-13 15:47:03', '2019-06-13 15:47:03', 28),
(142, 'created', 'comments', 17, '2019-06-13 16:01:29', '2019-06-13 16:01:29', 28),
(143, 'updated', 'comments', 17, '2019-06-13 16:02:57', '2019-06-13 16:02:57', 28),
(144, 'updated', 'users', 21, '2019-06-13 16:09:09', '2019-06-13 16:09:09', 21),
(145, 'updated', 'documents', 9, '2019-06-13 16:09:37', '2019-06-13 16:09:37', 21),
(146, 'updated', 'documents', 9, '2019-06-13 16:10:02', '2019-06-13 16:10:02', 21),
(147, 'created', 'users', 29, '2019-06-13 16:18:00', '2019-06-13 16:18:00', 1),
(148, 'updated', 'documents', 9, '2019-06-13 16:23:18', '2019-06-13 16:23:18', 2),
(149, 'created', 'comments', 18, '2019-06-13 16:26:53', '2019-06-13 16:26:53', 2),
(150, 'updated', 'comments', 18, '2019-06-13 16:27:33', '2019-06-13 16:27:33', 2),
(151, 'updated', 'users', 29, '2019-06-13 16:29:17', '2019-06-13 16:29:17', 1),
(152, 'updated', 'documents', 9, '2019-06-13 16:29:28', '2019-06-13 16:29:28', 2),
(153, 'updated', 'comments', 18, '2019-06-13 16:30:24', '2019-06-13 16:30:24', 2),
(154, 'updated', 'comments', 18, '2019-06-13 16:30:44', '2019-06-13 16:30:44', 2),
(155, 'created', 'comments', 19, '2019-06-13 16:30:44', '2019-06-13 16:30:44', 29),
(156, 'deleted', 'comments', 19, '2019-06-13 16:31:17', '2019-06-13 16:31:17', 29),
(157, 'updated', 'documents', 9, '2019-06-13 16:37:28', '2019-06-13 16:37:28', 2),
(158, 'created', 'users', 30, '2019-06-13 16:48:17', '2019-06-13 16:48:17', 4),
(159, 'created', 'comments', 20, '2019-06-13 17:38:48', '2019-06-13 17:38:48', 29),
(160, 'updated', 'comments', 20, '2019-06-13 17:47:43', '2019-06-13 17:47:43', 29),
(161, 'updated', 'users', 7, '2019-06-13 18:32:16', '2019-06-13 18:32:16', 1),
(162, 'updated', 'users', 7, '2019-06-13 18:32:28', '2019-06-13 18:32:28', 7),
(163, 'updated', 'users', 29, '2019-06-13 20:11:12', '2019-06-13 20:11:12', 29),
(164, 'updated', 'users', 24, '2019-06-13 21:08:06', '2019-06-13 21:08:06', 24),
(165, 'created', 'comments', 21, '2019-06-13 21:38:26', '2019-06-13 21:38:26', 24),
(166, 'created', 'comments', 22, '2019-06-13 21:38:26', '2019-06-13 21:38:26', 24),
(167, 'created', 'comments', 23, '2019-06-13 21:38:26', '2019-06-13 21:38:26', 24),
(168, 'created', 'comments', 24, '2019-06-13 21:38:26', '2019-06-13 21:38:26', 24),
(169, 'created', 'comments', 25, '2019-06-13 21:38:26', '2019-06-13 21:38:26', 24),
(170, 'deleted', 'comments', 25, '2019-06-13 21:40:29', '2019-06-13 21:40:29', 24),
(171, 'deleted', 'comments', 24, '2019-06-13 21:40:45', '2019-06-13 21:40:45', 24),
(172, 'deleted', 'comments', 23, '2019-06-13 21:40:57', '2019-06-13 21:40:57', 24),
(173, 'deleted', 'comments', 22, '2019-06-13 21:41:09', '2019-06-13 21:41:09', 24),
(174, 'created', 'comments', 26, '2019-06-13 21:48:39', '2019-06-13 21:48:39', 24),
(175, 'deleted', 'comments', 26, '2019-06-13 21:49:28', '2019-06-13 21:49:28', 24),
(176, 'updated', 'users', 30, '2019-06-13 23:14:34', '2019-06-13 23:14:34', 30),
(177, 'created', 'comments', 27, '2019-06-14 03:34:30', '2019-06-14 03:34:30', 28),
(178, 'created', 'documents', 10, '2019-06-14 12:34:06', '2019-06-14 12:34:06', 21),
(179, 'updated', 'documents', 10, '2019-06-14 12:35:03', '2019-06-14 12:35:03', 21),
(180, 'updated', 'documents', 10, '2019-06-14 12:48:22', '2019-06-14 12:48:22', 2),
(181, 'created', 'comments', 28, '2019-06-14 12:50:00', '2019-06-14 12:50:00', 4),
(182, 'created', 'comments', 29, '2019-06-14 12:52:03', '2019-06-14 12:52:03', 2),
(183, 'updated', 'comments', 29, '2019-06-14 12:52:17', '2019-06-14 12:52:17', 2),
(184, 'updated', 'comments', 28, '2019-06-14 12:52:45', '2019-06-14 12:52:45', 4),
(185, 'deleted', 'comments', 28, '2019-06-14 12:52:52', '2019-06-14 12:52:52', 4),
(186, 'updated', 'documents', 10, '2019-06-14 12:55:05', '2019-06-14 12:55:05', 2),
(187, 'updated', 'documents', 10, '2019-06-14 12:55:21', '2019-06-14 12:55:21', 2),
(188, 'created', 'documents', 11, '2019-06-14 13:19:41', '2019-06-14 13:19:41', 21),
(189, 'updated', 'documents', 11, '2019-06-14 13:21:09', '2019-06-14 13:21:09', 21),
(190, 'created', 'documents', 12, '2019-06-14 13:33:58', '2019-06-14 13:33:58', 21),
(191, 'updated', 'documents', 10, '2019-06-14 13:36:33', '2019-06-14 13:36:33', 21),
(192, 'created', 'comments', 30, '2019-06-14 13:58:21', '2019-06-14 13:58:21', 1),
(193, 'deleted', 'comments', 30, '2019-06-14 13:58:39', '2019-06-14 13:58:39', 1),
(194, 'created', 'documents', 13, '2019-06-14 14:10:13', '2019-06-14 14:10:13', 21),
(195, 'updated', 'documents', 13, '2019-06-14 14:25:04', '2019-06-14 14:25:04', 1),
(196, 'created', 'comments', 31, '2019-06-14 14:27:39', '2019-06-14 14:27:39', 22),
(197, 'updated', 'comments', 31, '2019-06-14 14:28:20', '2019-06-14 14:28:20', 22),
(198, 'created', 'documents', 14, '2019-06-14 14:29:07', '2019-06-14 14:29:07', 21),
(199, 'updated', 'documents', 14, '2019-06-14 15:08:01', '2019-06-14 15:08:01', 2),
(200, 'created', 'comments', 32, '2019-06-14 15:08:43', '2019-06-14 15:08:43', 2),
(201, 'updated', 'comments', 32, '2019-06-14 15:08:51', '2019-06-14 15:08:51', 2),
(202, 'updated', 'documents', 13, '2019-06-14 15:09:59', '2019-06-14 15:09:59', 2),
(203, 'created', 'comments', 33, '2019-06-14 15:10:59', '2019-06-14 15:10:59', 2),
(204, 'updated', 'comments', 31, '2019-06-14 15:11:14', '2019-06-14 15:11:14', 2),
(205, 'updated', 'comments', 33, '2019-06-14 15:11:18', '2019-06-14 15:11:18', 2),
(206, 'updated', 'documents', 12, '2019-06-14 15:13:16', '2019-06-14 15:13:16', 2),
(207, 'created', 'comments', 34, '2019-06-14 15:14:32', '2019-06-14 15:14:32', 2),
(208, 'updated', 'comments', 34, '2019-06-14 15:15:23', '2019-06-14 15:15:23', 2),
(209, 'updated', 'documents', 11, '2019-06-14 15:21:46', '2019-06-14 15:21:46', 2),
(210, 'created', 'comments', 35, '2019-06-14 15:22:56', '2019-06-14 15:22:56', 2),
(211, 'updated', 'comments', 35, '2019-06-14 15:23:01', '2019-06-14 15:23:01', 2),
(212, 'created', 'users', 31, '2019-06-14 15:38:47', '2019-06-14 15:38:47', 1),
(213, 'updated', 'documents', 10, '2019-06-14 15:40:32', '2019-06-14 15:40:32', 2),
(214, 'created', 'users', 32, '2019-06-14 15:40:33', '2019-06-14 15:40:33', 1),
(215, 'deleted', 'departments', 46, '2019-06-14 15:41:03', '2019-06-14 15:41:03', 1),
(216, 'updated', 'documents', 11, '2019-06-14 15:41:14', '2019-06-14 15:41:14', 2),
(217, 'created', 'departments', 47, '2019-06-14 15:41:47', '2019-06-14 15:41:47', 1),
(218, 'updated', 'comments', 35, '2019-06-14 15:41:55', '2019-06-14 15:41:55', 2),
(219, 'updated', 'users', 27, '2019-06-14 15:42:13', '2019-06-14 15:42:13', 1),
(220, 'updated', 'documents', 10, '2019-06-14 15:42:22', '2019-06-14 15:42:22', 2),
(221, 'updated', 'users', 32, '2019-06-14 15:42:33', '2019-06-14 15:42:33', 1),
(222, 'updated', 'comments', 29, '2019-06-14 15:43:16', '2019-06-14 15:43:16', 2),
(223, 'updated', 'comments', 34, '2019-06-14 15:43:32', '2019-06-14 15:43:32', 2),
(224, 'updated', 'comments', 33, '2019-06-14 15:43:47', '2019-06-14 15:43:47', 2),
(225, 'updated', 'comments', 32, '2019-06-14 15:44:04', '2019-06-14 15:44:04', 2),
(226, 'updated', 'documents', 13, '2019-06-14 16:19:40', '2019-06-14 16:19:40', 2),
(227, 'updated', 'users', 8, '2019-06-14 17:59:37', '2019-06-14 17:59:37', 1),
(228, 'updated', 'users', 9, '2019-06-14 17:59:51', '2019-06-14 17:59:51', 1),
(229, 'updated', 'users', 18, '2019-06-14 18:00:03', '2019-06-14 18:00:03', 1),
(230, 'created', 'comments', 36, '2019-06-14 18:23:57', '2019-06-14 18:23:57', 22),
(231, 'updated', 'users', 9, '2019-06-14 18:48:12', '2019-06-14 18:48:12', 9),
(232, 'updated', 'users', 18, '2019-06-14 18:56:42', '2019-06-14 18:56:42', 18),
(233, 'created', 'comments', 37, '2019-06-14 18:58:54', '2019-06-14 18:58:54', 24),
(234, 'created', 'comments', 38, '2019-06-14 19:07:43', '2019-06-14 19:07:43', 24),
(235, 'created', 'comments', 39, '2019-06-14 19:07:43', '2019-06-14 19:07:43', 24),
(236, 'deleted', 'comments', 39, '2019-06-14 19:07:56', '2019-06-14 19:07:56', 24),
(237, 'created', 'documents', 15, '2019-06-14 19:10:26', '2019-06-14 19:10:26', 21),
(238, 'updated', 'documents', 15, '2019-06-14 19:10:50', '2019-06-14 19:10:50', 21),
(239, 'updated', 'documents', 15, '2019-06-14 20:39:28', '2019-06-14 20:39:28', 2),
(240, 'created', 'comments', 40, '2019-06-14 20:40:17', '2019-06-14 20:40:17', 2),
(241, 'updated', 'comments', 40, '2019-06-14 20:40:20', '2019-06-14 20:40:20', 2),
(242, 'created', 'documents', 16, '2019-06-14 20:57:28', '2019-06-14 20:57:28', 21),
(243, 'created', 'comments', 41, '2019-06-14 20:59:08', '2019-06-14 20:59:08', 28),
(244, 'updated', 'documents', 16, '2019-06-14 21:15:00', '2019-06-14 21:15:00', 2),
(245, 'created', 'comments', 42, '2019-06-14 21:16:33', '2019-06-14 21:16:33', 2),
(246, 'updated', 'comments', 42, '2019-06-14 21:16:38', '2019-06-14 21:16:38', 2),
(247, 'created', 'comments', 43, '2019-06-14 21:33:27', '2019-06-14 21:33:27', 27),
(248, 'updated', 'comments', 43, '2019-06-14 21:33:44', '2019-06-14 21:33:44', 27),
(249, 'created', 'comments', 44, '2019-06-14 22:04:19', '2019-06-14 22:04:19', 28),
(250, 'updated', 'comments', 44, '2019-06-14 22:22:22', '2019-06-14 22:22:22', 28),
(251, 'updated', 'comments', 44, '2019-06-14 22:22:46', '2019-06-14 22:22:46', 28),
(252, 'updated', 'comments', 44, '2019-06-14 22:22:48', '2019-06-14 22:22:48', 28),
(253, 'updated', 'comments', 44, '2019-06-14 22:23:43', '2019-06-14 22:23:43', 28),
(254, 'created', 'comments', 45, '2019-06-14 22:34:22', '2019-06-14 22:34:22', 27),
(255, 'updated', 'comments', 45, '2019-06-14 22:34:31', '2019-06-14 22:34:31', 27),
(256, 'created', 'comments', 46, '2019-06-14 22:37:58', '2019-06-14 22:37:58', 27),
(257, 'updated', 'comments', 46, '2019-06-14 22:38:06', '2019-06-14 22:38:06', 27),
(258, 'created', 'comments', 47, '2019-06-14 22:38:10', '2019-06-14 22:38:10', 28),
(259, 'created', 'comments', 48, '2019-06-14 22:38:12', '2019-06-14 22:38:12', 28),
(260, 'deleted', 'comments', 48, '2019-06-14 22:38:24', '2019-06-14 22:38:24', 28),
(261, 'created', 'comments', 49, '2019-06-15 02:40:28', '2019-06-15 02:40:28', 27),
(262, 'updated', 'comments', 40, '2019-06-15 12:08:50', '2019-06-15 12:08:50', 2),
(263, 'updated', 'comments', 40, '2019-06-15 12:08:57', '2019-06-15 12:08:57', 2),
(264, 'updated', 'comments', 34, '2019-06-15 12:12:39', '2019-06-15 12:12:39', 2),
(265, 'updated', 'comments', 34, '2019-06-15 12:12:40', '2019-06-15 12:12:40', 2),
(266, 'created', 'comments', 50, '2019-06-15 13:02:53', '2019-06-15 13:02:53', 25),
(267, 'created', 'comments', 51, '2019-06-15 13:02:53', '2019-06-15 13:02:53', 25),
(268, 'created', 'comments', 52, '2019-06-15 18:30:47', '2019-06-15 18:30:47', 24),
(269, 'updated', 'users', 21, '2019-06-17 12:01:43', '2019-06-17 12:01:43', 21),
(270, 'updated', 'documents', 16, '2019-06-17 12:24:14', '2019-06-17 12:24:14', 21),
(271, 'updated', 'documents', 14, '2019-06-17 12:26:02', '2019-06-17 12:26:02', 21),
(272, 'updated', 'documents', 13, '2019-06-17 12:27:10', '2019-06-17 12:27:10', 21),
(273, 'updated', 'documents', 9, '2019-06-17 12:32:14', '2019-06-17 12:32:14', 21),
(274, 'created', 'roles', 4, '2019-06-17 12:56:36', '2019-06-17 12:56:36', 1),
(275, 'created', 'documents', 17, '2019-06-17 14:41:34', '2019-06-17 14:41:34', 21),
(276, 'updated', 'users', 10, '2019-06-17 14:52:16', '2019-06-17 14:52:16', 1),
(277, 'updated', 'users', 19, '2019-06-17 14:55:50', '2019-06-17 14:55:50', 1),
(278, 'updated', 'users', 20, '2019-06-17 14:56:05', '2019-06-17 14:56:05', 1),
(279, 'updated', 'users', 16, '2019-06-17 14:56:52', '2019-06-17 14:56:52', 1),
(280, 'created', 'documents', 18, '2019-06-17 16:10:49', '2019-06-17 16:10:49', 21),
(281, 'created', 'documents', 19, '2019-06-17 16:39:56', '2019-06-17 16:39:56', 21),
(282, 'updated', 'documents', 17, '2019-06-17 16:52:24', '2019-06-17 16:52:24', 2),
(283, 'updated', 'documents', 17, '2019-06-17 16:54:13', '2019-06-17 16:54:13', 2),
(284, 'created', 'comments', 53, '2019-06-17 16:56:09', '2019-06-17 16:56:09', 2),
(285, 'updated', 'comments', 53, '2019-06-17 16:56:15', '2019-06-17 16:56:15', 2),
(286, 'updated', 'documents', 18, '2019-06-17 17:02:34', '2019-06-17 17:02:34', 2),
(287, 'created', 'comments', 54, '2019-06-17 17:04:05', '2019-06-17 17:04:05', 2),
(288, 'updated', 'comments', 54, '2019-06-17 17:04:14', '2019-06-17 17:04:14', 2),
(289, 'updated', 'comments', 54, '2019-06-17 17:06:12', '2019-06-17 17:06:12', 2),
(290, 'updated', 'documents', 19, '2019-06-17 17:12:29', '2019-06-17 17:12:29', 2),
(291, 'created', 'comments', 55, '2019-06-17 17:13:55', '2019-06-17 17:13:55', 2),
(292, 'updated', 'comments', 55, '2019-06-17 17:14:00', '2019-06-17 17:14:00', 2),
(293, 'created', 'comments', 56, '2019-06-17 17:20:29', '2019-06-17 17:20:29', 22),
(294, 'updated', 'documents', 8, '2019-06-17 19:11:55', '2019-06-17 19:11:55', 21),
(295, 'updated', 'documents', 19, '2019-06-17 19:50:49', '2019-06-17 19:50:49', 2),
(296, 'updated', 'comments', 56, '2019-06-17 19:51:26', '2019-06-17 19:51:26', 2),
(297, 'updated', 'comments', 55, '2019-06-17 19:51:35', '2019-06-17 19:51:35', 2),
(298, 'updated', 'users', 5, '2019-06-17 20:01:14', '2019-06-17 20:01:14', 5),
(299, 'updated', 'documents', 11, '2019-06-17 20:19:54', '2019-06-17 20:19:54', 15),
(300, 'created', 'comments', 57, '2019-06-17 20:31:44', '2019-06-17 20:31:44', 24),
(301, 'updated', 'users', 18, '2019-06-17 20:33:59', '2019-06-17 20:33:59', 18),
(302, 'created', 'documents', 20, '2019-06-17 20:34:25', '2019-06-17 20:34:25', 21),
(303, 'created', 'documents', 21, '2019-06-17 20:41:08', '2019-06-17 20:41:08', 21),
(304, 'created', 'documents', 22, '2019-06-17 20:52:46', '2019-06-17 20:52:46', 21),
(305, 'created', 'documents', 23, '2019-06-17 20:57:11', '2019-06-17 20:57:11', 21),
(306, 'created', 'comments', 58, '2019-06-17 21:14:49', '2019-06-17 21:14:49', 27),
(307, 'updated', 'comments', 58, '2019-06-17 21:15:00', '2019-06-17 21:15:00', 27),
(308, 'updated', 'documents', 19, '2019-06-17 21:17:44', '2019-06-17 21:17:44', 21),
(309, 'updated', 'users', 31, '2019-06-18 12:54:38', '2019-06-18 12:54:38', 31),
(310, 'created', 'comments', 59, '2019-06-18 13:03:31', '2019-06-18 13:03:31', 31),
(311, 'updated', 'users', 30, '2019-06-18 14:15:49', '2019-06-18 14:15:49', 30),
(312, 'updated', 'users', 30, '2019-06-18 14:16:54', '2019-06-18 14:16:54', 30),
(313, 'updated', 'users', 30, '2019-06-18 14:18:29', '2019-06-18 14:18:29', 30),
(314, 'updated', 'users', 30, '2019-06-18 14:19:01', '2019-06-18 14:19:01', 30),
(315, 'updated', 'documents', 23, '2019-06-19 03:57:51', '2019-06-19 03:57:51', 2),
(316, 'created', 'comments', 60, '2019-06-19 04:01:58', '2019-06-19 04:01:58', 2),
(317, 'updated', 'comments', 60, '2019-06-19 04:02:05', '2019-06-19 04:02:05', 2),
(318, 'updated', 'comments', 60, '2019-06-19 04:02:19', '2019-06-19 04:02:19', 2),
(319, 'updated', 'documents', 22, '2019-06-19 04:05:18', '2019-06-19 04:05:18', 2),
(320, 'created', 'comments', 61, '2019-06-19 04:07:34', '2019-06-19 04:07:34', 2),
(321, 'updated', 'comments', 61, '2019-06-19 04:07:41', '2019-06-19 04:07:41', 2),
(322, 'updated', 'documents', 4, '2019-06-19 12:09:27', '2019-06-19 12:09:27', 21),
(323, 'created', 'documents', 24, '2019-06-19 13:36:18', '2019-06-19 13:36:18', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_deleted_at_index` (`deleted_at`),
  ADD KEY `309380_5cee50a8e1206` (`document_id`),
  ADD KEY `309380_5cee50a90c357` (`user_id`),
  ADD KEY `309380_5cee50a931f98` (`user_created_id`),
  ADD KEY `309380_5cee548e2b7a4` (`user_updated_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_deleted_at_index` (`deleted_at`),
  ADD KEY `309340_5cee3d95c4d3e` (`user_created_id`),
  ADD KEY `309340_5cee3d95decaa` (`user_updated_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_deleted_at_index` (`deleted_at`),
  ADD KEY `309367_5cee4dec4d3c0` (`user_created_id`),
  ADD KEY `309367_5cee542fb4f1b` (`user_updated_id`);

--
-- Indexes for table `document_user`
--
ALTER TABLE `document_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `positions_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `titles_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `309291_5cee28375555a` (`role_id`),
  ADD KEY `309291_5cee49e367281` (`title_id`),
  ADD KEY `309291_5cee49e384ff1` (`position_id`),
  ADD KEY `309291_5cee49e3a36fd` (`department_id`);

--
-- Indexes for table `user_actions`
--
ALTER TABLE `user_actions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `309292_5cee288cb0116` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `document_user`
--
ALTER TABLE `document_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_actions`
--
ALTER TABLE `user_actions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
