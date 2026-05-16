-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 18 Mar 2026 pada 15.32
-- Versi server: 8.4.3
-- Versi PHP: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `irza_40`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Mock Turtle. \'Seals, turtles, salmon, and so.', 'I am, sir,\' said Alice; \'all I know is, something comes at me like that!\' said Alice to herself, \'because of his shrill little voice, the name again!\' \'I won\'t have any rules in particular; at least, if there are, nobody attends to them--and you\'ve no idea what Latitude or Longitude either, but.', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(2, 'Time as well as I tell you!\' But she did not.', 'Mouse, in a great deal too far off to other parts of the hall; but, alas! the little magic bottle had now had its full effect, and she thought there was a queer-shaped little creature, and held it out to sea!\" But the insolence of his shrill little voice, the name of the goldfish kept running in.', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(3, 'Dormouse,\' thought Alice; \'I must be a walrus or.', 'Who for such a thing. After a while, finding that nothing more happened, she decided on going into the court, arm-in-arm with the birds hurried off at once, with a great hurry; \'this paper has just been reading about; and when she found she had a pencil that squeaked. This of course, to begin at.', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(4, 'Time, and round the table, half hoping that they.', 'Alice, as she could. \'The game\'s going on rather better now,\' she added aloud. \'Do you take me for asking! No, it\'ll never do to come yet, please your Majesty!\' the Duchess replied, in a bit.\' \'Perhaps it hasn\'t one,\' Alice ventured to taste it, and kept doubling itself up very sulkily and crossed.', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(5, 'Alice did not like to be executed for having.', 'Gryphon, \'you first form into a conversation. \'You don\'t know what \"it\" means well enough, when I sleep\" is the same as they would go, and broke to pieces against one of the house down!\' said the Caterpillar. \'Well, I shan\'t go, at any rate I\'ll never go THERE again!\' said Alice thoughtfully: \'but.', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(6, 'Caterpillar; and it set to work very carefully.', 'I grow up, I\'ll write one--but I\'m grown up now,\' she added in an undertone, \'important--unimportant--unimportant--important--\' as if she had wept when she noticed that one of the other end of half an hour or so, and were resting in the pool, and the other players, and shouting \'Off with their.', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(7, 'Queen in front of them, with her head in the.', 'And concluded the banquet--] \'What IS the fun?\' said Alice. \'You did,\' said the Dodo, \'the best way to explain the mistake it had been, it suddenly appeared again. \'By-the-bye, what became of the officers: but the wise little Alice was just possible it had grown so large in the common way. So she.', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(8, 'I will tell you his history,\' As they walked off.', 'Hardly knowing what she was holding, and she grew no larger: still it had grown so large in the act of crawling away: besides all this, there was no \'One, two, three, and away,\' but they all stopped and looked at Alice. \'I\'M not a mile high,\' said Alice. \'Well, I hardly know--No more, thank ye.', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(9, 'These were the verses the White Rabbit read.', 'And here poor Alice began to feel very sleepy and stupid), whether the pleasure of making a daisy-chain would be grand, certainly,\' said Alice, seriously, \'I\'ll have nothing more to come, so she tried the little door into that beautiful garden--how IS that to be seen--everything seemed to quiver.', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(10, 'Our family always HATED cats: nasty, low, vulgar.', 'She said this she looked down at her side. She was looking at everything that Alice had no pictures or conversations in it, and very nearly in the middle. Alice kept her eyes anxiously fixed on it, and finding it very nice, (it had, in fact, a sort of idea that they couldn\'t see it?\' So she was.', '2026-03-18 07:51:02', '2026-03-18 07:51:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint UNSIGNED NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nisn`, `nama`, `email`, `created_at`, `updated_at`) VALUES
(1, '46670388', 'Beulah McCullough MD', 'claudie17@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(2, '38511852', 'Orland Cronin', 'missouri20@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(3, '42284701', 'Santino Hickle', 'darryl66@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(4, '71776585', 'Minnie Torphy MD', 'hwehner@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(5, '68546132', 'Eve Flatley', 'kadams@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(6, '14934662', 'Angie Miller', 'uschaefer@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(7, '29524676', 'Gilberto Runolfsson DVM', 'eleonore92@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(8, '18207626', 'Leonard Hyatt I', 'stark.berenice@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(9, '47214622', 'Miller Roob', 'ondricka.luciano@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(10, '14303286', 'Owen Schultz', 'hoppe.demetris@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(11, '48444480', 'Georgianna Green', 'julie40@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(12, '21700779', 'Juana McClure', 'uschulist@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(13, '02164492', 'Claire Reilly DDS', 'dmante@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(14, '92804083', 'Sabryna Zboncak', 'schumm.archibald@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(15, '73430736', 'Ms. Katherine Brown I', 'nkovacek@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(16, '05481196', 'Bernice Rosenbaum', 'stanford02@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(17, '23735033', 'Dr. Tierra Wuckert', 'daija.jacobs@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(18, '62387469', 'Dr. Randy Koepp DDS', 'zcassin@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(19, '25393301', 'Lina Wuckert', 'rbeer@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(20, '53523470', 'Pearl Ratke', 'ekreiger@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(21, '05630092', 'Richard Ziemann I', 'jgraham@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(22, '18946462', 'Mrs. Leilani Little II', 'augustine55@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(23, '22341902', 'Wyatt Mayert', 'ocie.lynch@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(24, '53128197', 'Violet Halvorson', 'linnea31@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(25, '51909928', 'Dedrick Willms', 'pattie.metz@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(26, '44901880', 'Clara Little', 'slakin@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(27, '62712138', 'Hilton Pollich', 'ymueller@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(28, '79089569', 'Julianne Hansen I', 'sipes.oren@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(29, '68178357', 'Darrion Gulgowski DVM', 'elenor37@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(30, '41188034', 'Mrs. Neoma Davis PhD', 'braeden.yundt@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(31, '55987328', 'Reina Pagac', 'jaylon36@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(32, '46667833', 'Mr. Lucio Schimmel', 'leopoldo91@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(33, '04196702', 'Peyton Hirthe PhD', 'kuvalis.eduardo@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(34, '12608909', 'Prof. Doug Windler', 'schneider.nicholaus@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(35, '56896364', 'Dr. Julian Hegmann PhD', 'price.major@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(36, '81202181', 'Mrs. Romaine Yundt DDS', 'blanda.tia@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(37, '78271677', 'Dangelo McClure', 'guy67@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(38, '90849935', 'Brett Cummings', 'carrie.nolan@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(39, '71759298', 'Kristy Pagac DVM', 'erdman.joanne@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(40, '46027710', 'Nicholas Auer III', 'raynor.maryse@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(41, '41784389', 'Prof. Bo Hill DVM', 'ewindler@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(42, '46284434', 'Mr. Benjamin Hettinger', 'ncruickshank@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(43, '22233260', 'Antwon Orn DDS', 'miles.kub@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(44, '42048872', 'Peggie Gerlach', 'tturcotte@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(45, '41065824', 'Josefina Maggio II', 'missouri.barton@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(46, '58048015', 'Mr. Christian Mills MD', 'tkiehn@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(47, '94075649', 'Lina Nader II', 'tprosacco@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(48, '66053735', 'Cullen Mills', 'connor22@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(49, '47533177', 'Mr. Carroll Champlin Jr.', 'darius75@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(50, '04063147', 'Jazlyn Wolff V', 'maudie28@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(51, '01149883', 'Mr. Armando Berge IV', 'kutch.joey@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(52, '87604553', 'Mr. Wilfrid Langosh MD', 'casey16@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(53, '59872966', 'Vinnie Langosh', 'heaney.dino@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(54, '18309758', 'Angela Hayes', 'apowlowski@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(55, '24193483', 'Amelia Christiansen DDS', 'christophe37@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(56, '19918192', 'Albin Kuvalis', 'hhoeger@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(57, '91095184', 'Patricia Breitenberg', 'nolan.eve@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(58, '74222062', 'Danny Parisian DVM', 'nkulas@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(59, '10020830', 'Kiera Sauer', 'king.audie@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(60, '38496595', 'Ayla Hagenes', 'conrad29@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(61, '90166043', 'Albertha Hodkiewicz', 'rhowell@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(62, '24540816', 'Dr. Orland Reichert', 'krenner@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(63, '98222449', 'Elian Steuber', 'roob.viva@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(64, '03372940', 'Manley Greenfelder', 'genevieve.bernier@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(65, '85845585', 'Mr. Chadd Graham Jr.', 'bartoletti.pansy@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(66, '21586716', 'Derek Schneider', 'okuneva.michale@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(67, '36343372', 'Clarabelle Cremin', 'dedrick54@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(68, '29216356', 'Mr. Dorthy Hudson', 'ureynolds@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(69, '49866385', 'Catharine Hoppe MD', 'grace.wiegand@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(70, '79480558', 'Dawn Erdman', 'westley09@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(71, '56064688', 'Miss Christy Greenholt', 'bhalvorson@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(72, '44201064', 'Miss Raina Gulgowski', 'julia47@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(73, '81680562', 'Karen Kub', 'marcos80@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(74, '70199173', 'Granville Metz', 'taryn.yost@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(75, '00290311', 'Aleen Hodkiewicz', 'larue.schuppe@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(76, '85740363', 'Bobbie Kirlin', 'eugene.heidenreich@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(77, '89209831', 'Mayra Weimann', 'danny.wolff@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(78, '47298726', 'Rodolfo Williamson', 'waelchi.nola@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(79, '40052252', 'Mrs. Jolie Anderson II', 'kihn.jamarcus@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(80, '41633009', 'Jonathan Marks', 'rowe.santiago@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(81, '30704549', 'Belle Davis', 'goodwin.dario@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(82, '76183400', 'Zackery O\'Keefe', 'victoria.schultz@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(83, '42231030', 'Prof. Laurel Streich', 'ntoy@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(84, '65395422', 'Prof. Myrtis Shanahan Sr.', 'hweimann@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(85, '53316439', 'Mrs. Cecilia Weissnat Sr.', 'braun.ramon@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(86, '73951998', 'Prof. Terry Ritchie II', 'mallory73@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(87, '60628076', 'Chaz Kulas', 'tchamplin@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(88, '53170772', 'Miss Bonita Schimmel PhD', 'dedric.mueller@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(89, '36381244', 'Dallin Tremblay', 'khettinger@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(90, '77674646', 'Mr. Luther Kilback', 'jonathan.heller@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(91, '85860754', 'Reilly Windler MD', 'lily33@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(92, '51065848', 'Nicola Paucek', 'hector08@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(93, '44851318', 'Rico Gulgowski Sr.', 'lubowitz.jeramie@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(94, '26369977', 'Jaylin Zemlak', 'neoma.lueilwitz@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(95, '08383688', 'Dr. Joan Koepp', 'sgulgowski@example.net', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(96, '82201876', 'Russ Legros', 'fbaumbach@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(97, '91358898', 'Miss Annabell Kohler', 'hkshlerin@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(98, '66990257', 'Dr. Devonte Yost', 'marlee14@example.org', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(99, '34429305', 'Sigmund Kuhn', 'ereichel@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(100, '06237718', 'Orland Thiel', 'calista98@example.com', '2026-03-18 07:51:02', '2026-03-18 07:51:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `name`, `alamat`, `no_telp`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, 'Cordie Ward', '542 Janie Path\nSouth Shaniyachester, ME 64987', '1-518-527-2451', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(2, 'Nichole Oberbrunner', '27639 Donna Mountain Apt. 735\nSouth Abigale, AZ 87695', '1-239-940-7887', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(3, 'Alize Padberg', '25626 Macejkovic Stravenue Suite 579\nNorth Barton, HI 42321', '1-872-933-7338', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(4, 'Elyssa Cummerata', '95855 Hamill Village\nHintzberg, MO 24854', '1-845-424-0200', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(5, 'Frida Cummerata', '480 Kirstin Forest\nPort Saigeberg, CA 92064-4034', '(878) 600-7117', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(6, 'Jaden Gislason I', '930 Hirthe Mountains Apt. 474\nDangeloport, AR 21680', '419.347.9321', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(7, 'Jett Kreiger Jr.', '530 Jerde Isle Apt. 288\nEast Adellview, NY 97347-3725', '234.874.1078', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(8, 'Shirley Williamson', '38262 Waters Lane Suite 348\nEthamouth, IA 72548', '+13529606551', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(9, 'Verda Kiehn', '36609 Huels Corners\nMablebury, AL 06085', '1-805-904-7561', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(10, 'Kendra Jacobson V', '97645 Gerlach Stravenue\nEast Jodieport, CA 27524', '(614) 565-4196', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(11, 'Marlon Feil', '424 Madeline Plains Suite 526\nJaidaton, ID 99421', '1-743-936-2546', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(12, 'Ola Kuphal', '33126 Christiansen Estates Suite 703\nEast Vanessatown, CO 49060', '1-918-537-4867', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(13, 'Tristian Gerhold V', '82731 Nicola Viaduct\nWest Mike, IN 07471', '(267) 234-4272', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(14, 'Lyda Pagac Sr.', '41843 O\'Conner Plains\nPort Jace, AK 27265-8027', '+1 (901) 462-3367', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(15, 'Sincere Skiles', '72776 Elbert River Suite 310\nPort Rachelleberg, IN 35864-0111', '972.451.9092', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(16, 'Mrs. Lue Pouros', '501 Letha Rapids\nNorth Allisonburgh, SC 47991', '816-463-4468', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(17, 'Rylan Greenfelder', '715 Marlon Neck\nWest Jazmyne, KY 25155', '+1.769.912.3389', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(18, 'Mrs. Lauriane Stehr IV', '2875 Hodkiewicz Knoll\nNoemyborough, MO 49406-4511', '680-697-5248', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(19, 'Aida Orn IV', '81411 Shanie Skyway\nDaughertybury, ID 49598-7299', '+1-516-205-9363', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(20, 'Dr. Anais Nitzsche', '33060 Mosciski Stravenue\nWest Elyse, MN 56802-6026', '239-379-2097', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(21, 'Ara Aufderhar V', '148 Rosario Parkway\nLorimouth, MO 40392', '603-380-0942', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(22, 'Rubie Kuhn', '8652 Crooks Grove\nEthanville, AK 07415-1647', '630-487-1503', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(23, 'Isai Satterfield I', '1174 Montana Crest\nWinifredborough, AR 11141', '1-859-386-2386', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(24, 'Yazmin Huel', '274 Maggio Lake\nMedhurstport, ND 99020-3925', '530-701-9544', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(25, 'Jailyn McGlynn', '66911 Agustin Estate Suite 032\nSipeshaven, NE 89437', '1-224-277-7724', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(26, 'Reece Wisoky', '6696 Macy Junction Apt. 995\nPagacfort, NY 46189-0066', '209-316-3582', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(27, 'Benton Deckow', '9734 Nicola Curve\nPollichland, VA 65877-0276', '+1-727-744-7917', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(28, 'Irving Crist', '822 Alexie Inlet Suite 176\nKuhicchester, AR 22500', '+1-765-328-3556', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(29, 'Miss Meta Gislason III', '1907 Lourdes Prairie Apt. 501\nPeterberg, NV 76064', '(760) 737-6985', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(30, 'Miss Celine Ziemann', '999 Desmond Unions\nWest Carleeport, TN 25355', '(662) 922-7009', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(31, 'Mrs. Callie Kertzmann', '7690 Gisselle Vista\nPort Hilberttown, KY 24932-6092', '+1.863.398.9608', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(32, 'Ms. Amie Braun I', '76666 Francesca Spurs Apt. 059\nDavishaven, MS 88942', '+1 (458) 592-6212', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(33, 'Mr. Robbie Altenwerth V', '7113 Mayer Center\nSouth Bobbiefort, HI 21270-8089', '(772) 694-4115', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(34, 'Haylee Christiansen', '9788 Rodolfo Pass Suite 556\nPort Nayeliview, IA 67116-7472', '212-288-1319', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(35, 'Ignatius Stark Sr.', '18148 Jovan Parkways\nNew Vitofurt, RI 33602-8428', '267.686.7974', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(36, 'Shemar Jacobi III', '978 Kris Roads Apt. 512\nJaleelport, DC 61096', '+1-925-298-9077', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(37, 'Amir Beier', '4449 Jacobson Rest Apt. 175\nHegmannmouth, MS 25157-6994', '+1.727.695.7783', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(38, 'Keaton Hill', '47705 Wilfred Walk\nWatsicaborough, AZ 85651', '+1-385-699-1036', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(39, 'Haleigh Kub', '5107 Aliza Underpass Suite 773\nEast Clarabellestad, KS 12322', '+1-775-732-5189', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(40, 'Mr. Roger Kuhlman', '54745 Hegmann Underpass Suite 026\nLake Jordy, MS 48161-7272', '770.208.3977', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(41, 'Shane Brown', '4526 Bins Knolls\nNew Luefurt, DE 59059', '1-240-685-9524', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(42, 'Cierra Medhurst', '30477 Gordon Crescent\nBertaberg, CT 13689-0365', '(720) 651-9934', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(43, 'Dr. Alexie Lubowitz', '5055 Alia Viaduct Apt. 662\nSelenaville, NV 25455', '970.478.3187', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(44, 'Javier Grant', '49581 Marion Harbors Suite 413\nNew Granttown, MD 50145-6744', '+1.984.871.4168', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(45, 'Izaiah Mayer', '3324 Lesch Cape Suite 463\nAuerberg, MA 49750-8078', '(564) 282-3666', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(46, 'Mr. Joel Nienow DVM', '9309 Stefan Prairie Suite 939\nEast Zellafurt, ID 07491-6732', '+1.480.379.8805', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(47, 'Ruben Barrows', '11873 Isidro Crescent\nNorth Lurabury, TN 24542-5545', '+1 (959) 240-2868', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(48, 'Deshaun Wisoky', '99319 Eula Wells Suite 674\nNorth Sharon, MD 73885-3489', '480-557-8641', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(49, 'Alexandro Hettinger', '7751 Lehner Mills\nEast Zettaside, UT 35249', '319-996-2429', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(50, 'Thelma Bradtke Jr.', '933 Autumn Expressway\nEast Evangelineside, MO 53110', '(843) 216-3869', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(51, 'Miss Nelda Boyle DVM', '832 Stamm Hill\nBaumbachmouth, MI 19726', '341.997.9702', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(52, 'Miss Roberta Zboncak Sr.', '53905 Angelica Walk\nGrantshire, SC 45622-0303', '+15108660363', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(53, 'Caden Effertz', '835 Rollin Grove Suite 807\nNorth Edashire, WY 15074-0918', '769.725.5551', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(54, 'Enos Sauer DDS', '47962 Myra Bypass\nWest Llewellynmouth, PA 40148-1024', '769.838.0923', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(55, 'Seth Harber', '4841 Esteban Forest Suite 360\nNew Oleta, UT 62813-9616', '(743) 751-5116', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(56, 'Tamia Stoltenberg', '681 Kuhn View\nShawnstad, MA 24431-0612', '516-759-5065', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(57, 'Mr. Walton Bergstrom', '46162 Isac Village\nSouth Gilbert, UT 95864-8189', '469-255-3469', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(58, 'Hosea Balistreri', '69058 Runolfsdottir Ferry Apt. 322\nPort Mike, CO 83580', '1-641-533-0719', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(59, 'Norene Hahn', '9048 Gorczany Parkway Suite 789\nShakiraville, WA 90688', '423-639-1642', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(60, 'Benton Vandervort', '598 Hand Grove\nJarenberg, MD 80684', '339-643-0745', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(61, 'Cristopher Effertz MD', '201 Hertha Stream\nNorth Candelario, DE 58411', '+1-414-309-5081', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(62, 'Era Hill', '5914 Emmerich Field\nNorth Ervinbury, AK 64132', '276-683-7975', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(63, 'Stuart Witting', '873 Beer Via\nNew Julius, MS 22048-3876', '(207) 709-2003', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(64, 'Cathryn Kohler', '3094 Penelope Row\nWest Shawn, MT 23321-7476', '281-735-1585', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(65, 'Ms. Lauriane Fay I', '5384 Kub Parkway Apt. 215\nO\'Harastad, GA 80513-7246', '802-649-9041', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(66, 'Prof. Ulices Hyatt I', '223 Trudie Glen Suite 008\nLake Marcelinoton, TN 42005-0878', '+13034848267', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(67, 'Andy Miller', '548 Braun Union\nRunteburgh, SC 28114-7436', '+1 (732) 515-2630', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(68, 'Ms. Berneice McGlynn DDS', '1301 Ritchie Ways\nBeaumouth, MS 31524', '850-253-5582', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(69, 'Beulah Ryan', '1382 Zulauf Points\nPort Kennahaven, ME 41038', '251-966-1837', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(70, 'Hipolito Hoppe Jr.', '32946 Kris Fort\nWest Sagetown, GA 48912', '+1.937.906.7524', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(71, 'Violette Fay DVM', '994 Alvena Ridges\nLindgrenshire, WV 81206-9554', '(925) 525-3992', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(72, 'Ozella Koss', '250 Alexis Cove\nSouth Roslyntown, OH 67431-4666', '772-659-6861', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(73, 'Mr. Jadon Wiegand', '5660 Annie Plaza\nHildafort, AZ 92049-7240', '+1-678-753-0582', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(74, 'Della Johnson PhD', '199 Therese Plains\nSouth Gavin, NC 95206', '(940) 245-3225', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(75, 'Prof. Loma Ernser III', '277 VonRueden Turnpike Apt. 262\nAlfredoshire, NJ 07988', '845-219-6834', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(76, 'Marvin Upton', '840 Lola Field Apt. 671\nNew Beatriceborough, WI 93788', '1-432-956-7147', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(77, 'Tobin Hane', '90089 Jeramie Rapid\nWest Iliana, MA 60544-0631', '+1.857.355.8614', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(78, 'Werner Reichel', '59787 Balistreri Grove Apt. 803\nOkeyhaven, CT 78790-6832', '1-540-220-2227', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(79, 'Delta Cronin', '474 Grimes Rapids Suite 295\nColleenton, MD 19076', '+1 (503) 697-8201', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(80, 'Willis Robel', '997 Kulas Mews Suite 615\nNew Mina, ID 96167', '+1-580-540-0718', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(81, 'Dr. Mozell Towne', '36880 Walker Gardens\nSouth Jennyferhaven, NJ 83027-4259', '(413) 966-1571', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(82, 'Dr. Erling Krajcik DVM', '18087 Christiansen Mill\nArelyborough, CA 93528', '+1.283.971.3140', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(83, 'Samir Kihn', '41514 Breana Underpass Apt. 382\nLexiebury, WY 97364-8477', '469-479-9758', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(84, 'Yasmine Connelly', '537 Orlo Springs\nLake Damaris, SC 15614', '+1 (484) 527-9269', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(85, 'Jennings Marks', '34593 Casper Canyon\nCreminport, NV 99468', '+1.463.938.5666', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(86, 'Murray Waelchi', '7248 Kulas Manor\nLewisbury, GA 25131-4712', '458-227-4692', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(87, 'Mr. Fabian Kuhn V', '792 Russel Harbors\nSouth Maximillianfort, VT 48808-5903', '(603) 588-5659', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(88, 'Bette Cartwright', '6408 Trystan Dale Suite 524\nNew Loren, UT 68237-3777', '+1.689.667.3446', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(89, 'Vivian Friesen', '6022 Grace Spring\nEleanoreton, NH 47943-3646', '1-947-773-8121', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(90, 'Prof. Jaden Kuphal', '1502 Alize Light\nAriannaport, CA 03993', '+1-469-684-6545', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(91, 'Ms. Onie Krajcik IV', '9454 Ettie Spur\nBorerhaven, TX 16133-0483', '1-845-849-9186', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(92, 'Matteo Kilback', '60976 Wisozk Row\nMekhistad, OH 29101', '831-225-4769', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(93, 'Madge Lesch', '744 Bette Tunnel Suite 086\nConnellyhaven, CA 37234-0452', '903.212.5755', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(94, 'Patricia Kautzer', '3736 Nora Tunnel\nNew Jeremy, VT 24828-7827', '(386) 543-1985', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(95, 'Mr. Isai Upton', '6403 Jett Plaza Suite 980\nPort Nola, NV 66954-3147', '+1-580-682-0489', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(96, 'Lynn Botsford', '7837 Wanda Center Suite 618\nEast Rosina, NV 82471', '+1.283.612.6311', 'Laki-laki', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(97, 'Prof. Carol Beier II', '670 Kshlerin Square\nKasandraview, CA 99149-8305', '+1-609-382-3749', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(98, 'Dr. Leopold Wintheiser', '1128 Grant Square Suite 139\nLake Erik, ID 36312', '+1-351-221-2330', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(99, 'Miss Kacie Smitham', '76868 Murphy Path Apt. 983\nNew Edward, MO 36597-4443', '+1-608-845-8582', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(100, 'Miss Yesenia Bosco', '273 Crooks Locks\nSouth Hadley, SD 48045', '+1 (908) 542-6427', 'Perempuan', '2026-03-18 07:51:02', '2026-03-18 07:51:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` year NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `email`, `jurusan`, `angkatan`, `created_at`, `updated_at`) VALUES
(1, '2156548062', 'Mrs. Sharon Conn', 'mona.harris@example.com', 'Sistem Informasi', '2023', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(2, '2127479517', 'Dena Baumbach', 'gfarrell@example.net', 'Sistem Informasi', '2024', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(3, '2176503457', 'Elroy Bailey', 'myrtice.torp@example.com', 'Teknik Sipil', '2023', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(4, '2132333115', 'Mrs. Gladyce Wolf', 'sammie89@example.com', 'Informatika', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(5, '2173427710', 'Mrs. Carley Muller', 'frussel@example.org', 'Sistem Informasi', '2023', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(6, '2171071620', 'Frederic Mante', 'stamm.mozelle@example.org', 'Teknik Sipil', '2022', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(7, '2137967488', 'Lavonne Schamberger', 'gerlach.orland@example.com', 'Informatika', '2024', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(8, '2140374461', 'Ruthie Hammes', 'keanu.bruen@example.net', 'Informatika', '2018', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(9, '2102348003', 'Delfina Schmitt I', 'geraldine.mclaughlin@example.org', 'Teknik Sipil', '2023', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(10, '2123623263', 'Mrs. Rosemary Braun', 'garfield.graham@example.org', 'Informatika', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(11, '2168035895', 'Bridie Gorczany', 'herman.florence@example.org', 'Sistem Informasi', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(12, '2172761091', 'Anne Connelly', 'earline00@example.com', 'Informatika', '2024', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(13, '2112263690', 'Dr. Chadrick Renner', 'qsporer@example.net', 'Informatika', '2018', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(14, '2156124434', 'Prof. Marcelina Prosacco', 'noemie89@example.com', 'Sistem Informasi', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(15, '2198152388', 'Cale Connelly', 'orion.labadie@example.net', 'Sistem Informasi', '2019', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(16, '2132598463', 'Prof. Golda Kreiger', 'montana.goyette@example.com', 'Sistem Informasi', '2023', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(17, '2101460381', 'Mrs. Ellen Walsh', 'minnie37@example.com', 'Teknik Sipil', '2018', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(18, '2130989444', 'Maryjane Eichmann', 'raphaelle.bernier@example.com', 'Sistem Informasi', '2024', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(19, '2159052596', 'Werner Dickinson DVM', 'muller.lela@example.net', 'Informatika', '2021', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(20, '2194046711', 'Jettie Ullrich', 'kendall81@example.net', 'Informatika', '2018', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(21, '2159257250', 'Steve Sanford', 'estella.ryan@example.com', 'Teknik Sipil', '2021', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(22, '2165402187', 'Muriel Sawayn DDS', 'gerlach.shany@example.org', 'Teknik Sipil', '2022', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(23, '2145821779', 'Mrs. Leilani Moen PhD', 'nklein@example.org', 'Teknik Sipil', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(24, '2116528441', 'Reynold Bogisich', 'qspinka@example.net', 'Teknik Sipil', '2019', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(25, '2196578569', 'Aurore Hintz', 'vickie61@example.com', 'Informatika', '2022', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(26, '2123039316', 'Loraine Jones', 'bridget99@example.net', 'Informatika', '2018', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(27, '2167282609', 'Laron Willms', 'skiles.torrance@example.net', 'Informatika', '2024', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(28, '2159650272', 'Remington Leffler', 'bgoldner@example.net', 'Teknik Sipil', '2024', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(29, '2101009745', 'Dr. Frederik Walsh V', 'dmorar@example.com', 'Informatika', '2019', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(30, '2154585449', 'Korbin D\'Amore Jr.', 'uhickle@example.com', 'Sistem Informasi', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(31, '2199241499', 'Conor Okuneva Sr.', 'lesch.aidan@example.com', 'Teknik Sipil', '2021', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(32, '2143790585', 'Natasha Larson', 'eveline13@example.org', 'Sistem Informasi', '2021', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(33, '2188159430', 'Jeanne Lehner Jr.', 'raquel.abbott@example.net', 'Sistem Informasi', '2018', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(34, '2197597504', 'Teresa Weimann', 'lew22@example.com', 'Teknik Sipil', '2024', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(35, '2166113132', 'Ms. Eleanora Turcotte I', 'theron93@example.net', 'Sistem Informasi', '2021', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(36, '2119383346', 'Percy Pouros', 'corkery.henderson@example.net', 'Sistem Informasi', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(37, '2159836346', 'Marcel Dach', 'eabbott@example.com', 'Teknik Sipil', '2018', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(38, '2141397173', 'Mrs. Sydnie Hudson DVM', 'else.schamberger@example.net', 'Teknik Sipil', '2023', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(39, '2171717423', 'Sheila Mraz', 'everette75@example.com', 'Sistem Informasi', '2024', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(40, '2191184453', 'Kaya Hirthe', 'abigayle.littel@example.net', 'Teknik Sipil', '2024', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(41, '2124518209', 'Mrs. Ava Buckridge', 'ottis10@example.net', 'Informatika', '2023', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(42, '2183072250', 'Melyna Sauer', 'caleigh59@example.org', 'Teknik Sipil', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(43, '2157749425', 'Hester Glover', 'barton.kris@example.org', 'Informatika', '2023', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(44, '2121943689', 'Serena Yundt', 'litzy.veum@example.net', 'Informatika', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(45, '2184900601', 'Jacky Fisher', 'jaden36@example.com', 'Teknik Sipil', '2024', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(46, '2133836088', 'Xander Dooley', 'marion.bayer@example.net', 'Teknik Sipil', '2021', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(47, '2117746372', 'Dr. Jaquelin Jaskolski', 'darby.hammes@example.org', 'Sistem Informasi', '2021', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(48, '2161561217', 'Jarret Renner DDS', 'sstehr@example.com', 'Teknik Sipil', '2024', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(49, '2147214736', 'Will Grant V', 'stehr.vesta@example.net', 'Teknik Sipil', '2023', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(50, '2186095743', 'Caleb Stiedemann', 'myrtie85@example.com', 'Sistem Informasi', '2023', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(51, '2117196741', 'Wendy Dicki', 'flatley.alessandra@example.net', 'Sistem Informasi', '2024', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(52, '2155839458', 'Flavio Carroll', 'kyleigh31@example.com', 'Teknik Sipil', '2021', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(53, '2199628684', 'Ms. Elena Streich', 'graham.samir@example.com', 'Teknik Sipil', '2018', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(54, '2177583884', 'Benedict Luettgen', 'carmelo79@example.net', 'Teknik Sipil', '2018', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(55, '2126369323', 'Faustino Dare', 'justen.tillman@example.org', 'Sistem Informasi', '2021', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(56, '2167374144', 'Karelle Hermiston II', 'krystina.ullrich@example.net', 'Informatika', '2021', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(57, '2181435430', 'Mr. Dejuan Waters DDS', 'tromp.rubye@example.net', 'Sistem Informasi', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(58, '2118247007', 'Catalina Little', 'gonzalo96@example.net', 'Sistem Informasi', '2022', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(59, '2157124356', 'Waino Abbott', 'rrosenbaum@example.com', 'Sistem Informasi', '2024', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(60, '2198171777', 'Mariana Jerde', 'fjacobs@example.com', 'Teknik Sipil', '2024', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(61, '2184439188', 'Colin Grimes DVM', 'zulauf.carlee@example.com', 'Informatika', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(62, '2110681495', 'Jada Greenholt', 'malvina.doyle@example.org', 'Teknik Sipil', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(63, '2115459689', 'Ms. Tess Heller IV', 'odell.lang@example.org', 'Sistem Informasi', '2019', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(64, '2151513576', 'Dr. Jaleel Nolan PhD', 'cartwright.laurel@example.net', 'Teknik Sipil', '2023', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(65, '2158728221', 'Dr. Darrick Gibson IV', 'macejkovic.melissa@example.com', 'Informatika', '2018', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(66, '2193590729', 'Toni Reilly', 'schmidt.art@example.net', 'Informatika', '2022', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(67, '2173965437', 'Audreanne Schroeder', 'burnice78@example.org', 'Teknik Sipil', '2019', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(68, '2187652875', 'Fidel Hickle', 'koelpin.loyce@example.net', 'Informatika', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(69, '2183534438', 'Dr. Kathryne Mayer II', 'sstiedemann@example.org', 'Teknik Sipil', '2024', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(70, '2138731487', 'Myrtis Johns III', 'kutch.mac@example.net', 'Teknik Sipil', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(71, '2155996084', 'Joaquin Stamm', 'gutmann.lolita@example.net', 'Informatika', '2019', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(72, '2189230433', 'Christophe Maggio', 'qtrantow@example.net', 'Informatika', '2019', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(73, '2186407067', 'Zora Weissnat', 'howard58@example.org', 'Sistem Informasi', '2022', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(74, '2136691250', 'Destiny Schulist', 'brown.flavie@example.net', 'Informatika', '2018', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(75, '2195942384', 'Garnett Rolfson', 'bins.cara@example.net', 'Sistem Informasi', '2018', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(76, '2164456338', 'Glenna Brakus', 'blair23@example.net', 'Teknik Sipil', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(77, '2134447233', 'Prof. Dusty Walsh Jr.', 'vicky.boyer@example.net', 'Teknik Sipil', '2019', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(78, '2132995249', 'Martine Kshlerin', 'madie.oconner@example.com', 'Informatika', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(79, '2195960830', 'Isaac Jenkins Jr.', 'rath.andrew@example.com', 'Informatika', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(80, '2163478227', 'Dr. Tate Ward V', 'bogisich.blair@example.com', 'Sistem Informasi', '2023', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(81, '2162974117', 'Sydney Schmidt II', 'ali67@example.org', 'Teknik Sipil', '2018', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(82, '2189782357', 'Ryley Terry', 'christ20@example.net', 'Informatika', '2021', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(83, '2121419496', 'Macie Gusikowski', 'jamey93@example.com', 'Informatika', '2018', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(84, '2149624044', 'Prof. Damian Bernier PhD', 'zmuller@example.com', 'Sistem Informasi', '2022', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(85, '2152761959', 'Dawson Greenholt V', 'osbaldo.gerhold@example.net', 'Teknik Sipil', '2023', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(86, '2196959348', 'Miss Ruthie Stokes PhD', 'fankunding@example.com', 'Teknik Sipil', '2019', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(87, '2187176882', 'Jaunita Casper', 'ethan75@example.org', 'Teknik Sipil', '2021', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(88, '2107967547', 'Rubye Welch', 'nicholaus04@example.net', 'Sistem Informasi', '2023', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(89, '2158745514', 'Miss Madalyn Runolfsson', 'fmills@example.org', 'Informatika', '2018', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(90, '2166383724', 'Francis Stanton III', 'gkuphal@example.net', 'Informatika', '2022', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(91, '2159631561', 'Hershel Stoltenberg', 'thuels@example.net', 'Informatika', '2021', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(92, '2100080795', 'Ms. Mina Bogan MD', 'mable63@example.net', 'Teknik Sipil', '2023', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(93, '2187873395', 'Crystel Feil', 'zerdman@example.com', 'Teknik Sipil', '2019', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(94, '2159040123', 'Emmett Parker II', 'nhahn@example.com', 'Teknik Sipil', '2018', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(95, '2189932800', 'Sabrina Collier', 'itillman@example.net', 'Teknik Sipil', '2020', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(96, '2102314400', 'Cornell Ward Sr.', 'jamey92@example.org', 'Sistem Informasi', '2018', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(97, '2158723571', 'Leanne Koch I', 'estrella89@example.net', 'Teknik Sipil', '2021', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(98, '2176859524', 'Eric Smitham', 'mmante@example.com', 'Teknik Sipil', '2021', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(99, '2136935228', 'Mr. Drake Kub', 'ethyl.sanford@example.net', 'Teknik Sipil', '2024', '2026-03-18 07:51:02', '2026-03-18 07:51:02'),
(100, '2178340936', 'Dr. Zoie Leuschke', 'spfeffer@example.com', 'Informatika', '2023', '2026-03-18 07:51:02', '2026-03-18 07:51:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_03_18_134818_create_blogs_table', 1),
(5, '2026_03_18_142028_create_dosen_table', 1),
(6, '2026_03_18_142028_create_mahasiswa_table', 1),
(7, '2026_03_18_142029_create_karyawan_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Miss Petra Mann', 'schmeler.aniya@example.net', '2026-03-18 07:50:42', '$2y$12$XT7RHs3yt9R/udTCIEClrOpvpzDUizw1PgWKTcDPvScIlo8aItjhi', 'KyDGPbFVS6p6LodmxA3V5umdQsZAmqSgHJjGdzrLQcXCEPt2wUhHzcL7O31jeWRULR9tefEqZl81eEaL4IE8bT59OKdn6Sr1pDJb', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(2, 'Earl Hayes PhD', 'fbeier@example.net', '2026-03-18 07:50:42', '$2y$12$QJG59AM2EhWKJa.chlLBu.6ZKDIiNoPU/F0r7Nr5hlQxfdnUE2ReG', 'fhQ1ozUiN6ZS6WDYjSVhYiCI9ZDMOgrmOoKkTrXjAvUvFGPG72CKbdcY228bNFG192wqAon60dqYSgh1CYP5fugvEn16v8CVwyxI', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(3, 'Lessie Grant', 'shana35@example.net', '2026-03-18 07:50:42', '$2y$12$XCUR2YxG2ld9RTaKCnAPROJutrs5JPMQMcje7o0wyPyKT7DHyd10K', 'wb4OKROA8zFG4oSM6H4BIuohkQ0R9eszBA3tYjAWDknM7n1gBg9duf56cdZX234CFr4damKqtbfEKYCkVcKXxUiF76bBK6cXVu1I', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(4, 'Theron Schneider', 'teagan62@example.org', '2026-03-18 07:50:42', '$2y$12$kl1F9ZBRkrxqqqFSgBKSyujKofRKnZ8MIVLHkuPXTvF/yw2DnGN2G', 'gvyZ31FG8SiSpa5G9owYZBRxrZMCWoqIxwHTci6BIjmTiUM20ngNxxLMMhDqAVNW9HRv5YUVzqPIJ9XkJiQUzMDyf8zwYbtKff0C', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(5, 'Marquise Bergstrom', 'nadia74@example.com', '2026-03-18 07:50:42', '$2y$12$IsNd4aAdAfFCDxmBJmiuZeHn.gToSADssgiyhhBlsZGIELvUicwY6', 'clFLU3vBRTU6MgdBASGe9KC1Fuw3ziVvxPK76VuvJV6n2a8hqza20j3wFXtOaC8W8X1kRMr0266ybLzJHlSiXz1bGu8PuKRfZepW', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(6, 'Adam Conn', 'chodkiewicz@example.org', '2026-03-18 07:50:43', '$2y$12$Axjdato3ZYrYnCCaLqcsQeJwTeRD7vEwQ6VfTKqu4PAlF2tZDtBmO', 'UOpuqULUGmY6FBoFZFBfekaiOjMyTbykCSj8jcnWhnsR9CUqSzZVb4TniWmx7dYLJzPzxltJcxVBxjU4DKyEypCShl59MgK7JR1W', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(7, 'Prof. Maximus Mertz III', 'doyle.nelle@example.org', '2026-03-18 07:50:43', '$2y$12$5yTCkX6LH7tTz6RCLYfXvOayRAjAOqyz0sXLt3A3rxxIN7g16CjxK', 'h6RNdDWZkVAGvSfzqqGNe0Mgong1GtaiUVstAGpHzh8WpJQpyaucuyj2AXmTGQplCjLJNr9874pWRhiORZogRBaLCGR46y5Dpigo', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(8, 'Dr. Tyra Krajcik', 'abraham96@example.org', '2026-03-18 07:50:43', '$2y$12$RAkRuR//bcmxtipgQQuk6egFqlOZA0KCP53kDoCccTQPnol6yCgq.', 'Oaj7gywlsZZHKNqjCDvzD6DWZs2GWnyfmG3FGy2DqWdGNfUym68LMkGTy351Gt9J35BUTBjH1Qe63vGIhCUOrz73R1LUWHBGHKbv', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(9, 'Carlie Corwin', 'craig.king@example.com', '2026-03-18 07:50:43', '$2y$12$a/soaZ/BtwuoIRYHY5kESenLTURmfZNENm59S/HTAJA5luBSdMjq2', '1vG7wpFTeEhWLEqZtBaeSPIOMmy9qTX9Y6XjJ11IiNgvQg9sX5Ao6wYZarFZU40ptdKhBkh2tu341RB70RVz5T8SmTLEXfKr2JMI', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(10, 'Lizeth Ratke', 'destiny.powlowski@example.org', '2026-03-18 07:50:43', '$2y$12$ckJq5So8gco5BekW8XgM8uv5Lass0T9ZwV1u2Am8HLVk0chyiVCJO', 'FdfBFeGEurHTsPkCvzz9LF8QyYrnTAWMQCLOBTdCKTdgJVy5D1DrfysnNnkOhaEadFq26eNHHMYIccYC7pe5OfZGJ8r0pC8hKGhO', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(11, 'Royal Kassulke', 'hansen.rowena@example.com', '2026-03-18 07:50:44', '$2y$12$w008hY6Nui4K/SBVch.T.elUhAlj6J3B0DvNpGfINLotNMqrB1alm', 'DSwK0KszUuBHwvhwP12Gw0GO70lrujHmvGDzoqiChX8PAusG9sxeR7Y3otqE5oE7movyIyaiprnTMyFzxOJU3gcqqXUHBmOVOh3J', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(12, 'Miss Eleanore Treutel', 'malcolm51@example.com', '2026-03-18 07:50:44', '$2y$12$SWdPshmkXH0cpQON4aV6G.7.HlJdJuofHxIbco4adXeeH.6BofXZa', '0Hy5kLY4JqwDAPB4IqYUCwk3lPl4nwA5tLok1SEiur1rLTvuNspNt5MfGCIzsUUQkGYk5hUc490TLsqOzFTD0iXHrXl0I35oiCTZ', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(13, 'Immanuel Beier', 'lschoen@example.org', '2026-03-18 07:50:44', '$2y$12$0yhv8ilnfAniRIkBdZmB8Oyhu02v0AMNER8VcPqMLLJMdrPSD/Dcm', '6Nt07E0hTGPwlT7N7MISPeiaXj5DwH4jN544miSXm7wP2ZvwOKTJxlAjerreAmDHN6LsEfIhLUjDGEVyCTNfMwtxRhjGB8QzECOC', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(14, 'Dr. Amalia Murazik IV', 'vergie.reilly@example.org', '2026-03-18 07:50:44', '$2y$12$N5FuNXdJG5mhcHPeDxI5Gue0aX1v.1bnv5IQsQepHpC2MlChQeo2q', '4vLaLE2VdUDtKtpbcqRtVKnhErgIz5oiw8HOHqgCPcZTXQNSkwVK14FPXM2nlDfmTk9VnkAdR4B0xmKNB4L87U7xtM7uMIahxj2W', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(15, 'Cleveland Wehner', 'wiegand.monserrat@example.net', '2026-03-18 07:50:44', '$2y$12$yTS9Gfjgaep1PzPAfsHjAuxt6tiRNbJXneA84K2E.EpRTu.4mp9oG', '432qgHMnYJueNtiCTKabh5gnpjxqWqfsjgMsjHCfrlutlvSm3bf8a4TBR8eLRzwBx8TBylUxhAouApm2fRRXtJ3WsZ1bYWiuWcZU', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(16, 'Leilani Hills', 'dare.ernestine@example.net', '2026-03-18 07:50:44', '$2y$12$k7.ggNrI0awzAvvKSqwkoOwHj6B5jfv16cEGf1LW9gLwSVnZgj6g.', 'NcExP4y32cRX8hPo6Q7f2qlzGTniJCdZscwF1Bk34VheUnUHQDeX5B6FRk34sAfzwS9nDf7NP45G8BHLfEGqcYdVzie4w0HYLtem', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(17, 'Jackeline Bogan', 'heffertz@example.net', '2026-03-18 07:50:45', '$2y$12$yOOyCk3BOCVSh0BWEBSKLeVmSUcaxvHP9l910bS8HfeCJTqQbHqgO', 'bjBvP2ywiZRJn6R2ZBzJuOAkfQKQAJcvr5lEgch3qAOtEUGxC4DXIT6BHCz8dj7DFZr6vnkCAWIupP2fXKXgZ94NKneJ0trgCtkI', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(18, 'Conner Schinner', 'ojacobs@example.org', '2026-03-18 07:50:45', '$2y$12$8oc8yPsD6fTfWwVmM6HRXux9z4qqeXmcqqPpD4T24v10OiL29.o0S', 'o70Z8pXWyYSZkYfkA335iKLYseJaHqcPis9aRHKMQ7R244h1T0x0YBiV0aJBTWnEExAiXqo2bMDzuETRsVww3wvuhkyZ7RcAl6JU', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(19, 'Clifton Kshlerin MD', 'dach.betty@example.net', '2026-03-18 07:50:45', '$2y$12$W025/GfIOMMO68U6A3OOVuLb21qRxGfqHGWtE4ZZo.Fm1tCQbQ1zG', 'k7K5HUMzJkVBfL5TnxI14wDaNnEom5lYdbviBOPO10y2ziqJik3uPFKkf9tdHv4AAbaJ3ZoKVl0s3gN86yelM9rr6jJIHWfPTlJG', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(20, 'Prof. Kristian Spinka', 'leffler.effie@example.org', '2026-03-18 07:50:45', '$2y$12$3jv.e//EoYbKZOwAsc.ryeGy89fNFXw.G/oZCh4zhBCBztZL3pWrG', 'Um35bwoiNMl1FYGAWzXwrBKK8wHAAlJtUHgBTE32JCjwia32TMXpqRV7uelUouc2IhdMv0tHlNILneadFJRlbPP8oOr91gDh1LFH', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(21, 'Ms. Sophia Stracke', 'msmitham@example.com', '2026-03-18 07:50:46', '$2y$12$Mswx2e0b/8MP1YkzcubH..3/7l3YSKieXK43SYq7f9FPp225TUxQW', 'M0zMwUtykIPBRCMjOk4oENk8BP4NR4CdQGDPDKhWVVXIxPRSYHT83e7ywykXgg7uHcT54xuYDdqAFcYYZHU6c37nKs1HMExjDdRc', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(22, 'Albert Upton DVM', 'mosciski.kathryne@example.com', '2026-03-18 07:50:46', '$2y$12$HuOiLYveP8n/Rj3HH/2Y/O.k4bEd8TYZvscqgoU4BnJlocOu16Nmi', 'SAqN0f0bYOYEyIUdpovFRAQGk42CvjWzzw0NxwQpRspXZVmCGxomjzLBvAsUtQ0WFUzIQy76lawZ4B5pqrnaGHiVmZglrkT0lcUU', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(23, 'Dr. Theron Ferry', 'fhand@example.org', '2026-03-18 07:50:46', '$2y$12$b0rCYcS9Y5YkuzsELrfsKu289skr4SQaj.WaMM10NT.GkS.7qnWnK', '20lH5TUheOTkHVpJwp0XPyUcnUsicyEEW7XDwD939yZknxF6dyTnYZSp20l0fdkcMxLlxWMVfQlxDQJwZVbPM9F6VhfTwG2aeDOz', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(24, 'Dr. Marcella Nicolas', 'twisoky@example.com', '2026-03-18 07:50:46', '$2y$12$xjcECAcyybps6nc0i4PhV.nYngO0Ue3dIaQSksPpIKfTaXKyfrVdy', 'uMf3TGx4iqABGOA4FOcSlQQM7kw00sppr45tEDPluGyyoLMgHXGxEW75qaedSTFifkDRGZ11s9YbTGfWNbU16DVtMrOPiJvlsm2w', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(25, 'Austyn Lebsack', 'terrence.murazik@example.net', '2026-03-18 07:50:46', '$2y$12$WXn.fwdAAN1WuuNSGdTzae2hTqIRAIAB3FsWUut7Iuf5ZXNCJz4xe', 'V32gwJ2yiC6Ri1CM9ADoNMp7VfmmglssyHaJwxwE04wPdFH9si2zdtDTgY78gvpEERCSwWyCdxJDqY2dVlIIMvx4APwZPFbeHilE', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(26, 'Dr. Kaleigh Donnelly', 'ulegros@example.org', '2026-03-18 07:50:47', '$2y$12$KhMkztiVWm32.2nVAT1OI.3S24an1eV13oSn9IIgbivMTQWZshAR2', '1qsCl8sZKozdKHKb4Gl5M7zyhano03v9WDfWtLxJSMN4aIGeAn2bVgeOFq51qlZvegjaIS5MjXG7ZBPwigmCTlKFTGwTVeqjOjxw', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(27, 'Miss Crystal Gutkowski', 'johnathan02@example.net', '2026-03-18 07:50:47', '$2y$12$8jVHBRlqnoY8MbWSBgQzOukG3ZiY2KDkFVFqM1d7KAqIZv6dNukm.', 'TYeoo1KElsu7daoqbLPK1PWbx36ycFA1PJxkltc4bGxVMobqhKAlB9Z6kbfG8maYmAcuZEhb63BivjIjdgpx9PWE73BBSkb5HE60', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(28, 'Mariah Zieme Sr.', 'qmuller@example.com', '2026-03-18 07:50:47', '$2y$12$v75b0202M1fn1AeMx8Sk5uqCzWxW2yZruUm6uShPk5BrKj9UwSQhO', 'cQNGI4p2cntld2g3Ypu7PFV3Ch7M4wH9VqUQd6aea6myS0VC8ri3q072R9wjacdznt8yIE9HOICs5A6oyxZWIoNGQru2bGC8jPhd', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(29, 'Jayden Lubowitz', 'jessika95@example.net', '2026-03-18 07:50:47', '$2y$12$CtzWL/xvZTnpf/52agVRguUBNTs3RHtck7fBUUO8bZyCelU4OrBGu', 'FPDa2YLtCvld3qleLZIw09CgjVPkeclaOxZWNi9rrAp4vn1BNBIkVj0mwBOysn8NunvCDeOCUWFBfNZZdBzH7IThKwuXSVdNcCvP', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(30, 'Lorenzo Douglas', 'paucek.kenyon@example.com', '2026-03-18 07:50:47', '$2y$12$F6c7dYxDPlducbQ4g4TqAueUMuqnj35pocT56TW120B4XHGSU1FrK', 'EyxTNaV55yYrEnGVDhwru5FQABosN1TqoZHkTn8jvjDrTIJgAGoYZQmBDXlandzVPvk5dSulHXUWnRlFNXuFHR0nAOrVuwoISO7J', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(31, 'Elwyn Macejkovic', 'jhuel@example.com', '2026-03-18 07:50:48', '$2y$12$aUMOz.VVIF.Ztf1A.vC6XuPHv7IHPCURgEerMIGS1xucl4T4DZ3rm', 'W8Ixqef42I6ZWNi6CFtUPZDw9J9ByRgNvcnEBtg3lpW61JjqoNFpwaopD63rsifGLCf8DU6XZJOgP2QRNjehCP8VBDvAyTYKrNdG', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(32, 'Marlee Roob', 'dickens.deshawn@example.com', '2026-03-18 07:50:48', '$2y$12$6xFh8WqJVE2.ZYSYz3WRSu49OhfMTUeQ9eVQeHp0N6Scsw1B0uTXS', 'Zu1fJEURdpuFhgsMHidO69PDRR7A9L2OTvBtM6pTlItuAkDilP4WccXHz6VPdxENYikuXOM1X5Bg5g3Jg0LuUgYSMj6QytcSS86k', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(33, 'Chesley Konopelski', 'clay.eichmann@example.org', '2026-03-18 07:50:48', '$2y$12$tJMGfgezTrzPj/wZFDUFyegt.FJz6p/NMqwdp0lsJFBRdpLt4Q9Y.', 'gJCEup4MTvr3RAlPYYostq7OAXQUQRH2ayIIf8YyTjIeWnzPzyyV8O8Cau2bRaJLN2KpKge0NUuZi0kJIxfz5uRKFLhpTsyCt9il', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(34, 'Easter Heaney', 'marietta.dietrich@example.org', '2026-03-18 07:50:48', '$2y$12$2KlPfse3SpC.1jmOyM1Is.wznJszFVTw5ojHJkWOU528vzFN7OrKe', 'ZtGfIf8zb88w2MvUJxxGFrQJWAWego2bY4ZV5lXbYhGL8B9mwJae47EeP3VRIjmZUYiKBX9JqPJylQDgGvn6abzOaHjNzbIC7QWd', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(35, 'Justine Kiehn', 'zieme.celia@example.net', '2026-03-18 07:50:48', '$2y$12$M4f62ixTwWsXDmNuyzGcdeqBa4KeO8pDOWOkIiP8B0SvlF39752ee', '0nlof8MRYH9HS8IsAIwGvsF5Umn7nq6ooAbQXexItkwa5L3PKZluSE409it9VU8sw0ZrDSmAX8lIIdLjQRHXDoaLR7wht1fJB65b', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(36, 'Prof. Kayleigh White', 'kenneth64@example.com', '2026-03-18 07:50:49', '$2y$12$kF2ygMnSAFOW6KzJm57dUO.LFerlLPfZ.lOZ7RMPHo9Ed8wmqnzWW', 'mEHLWtotUjoa94CbAdCJSitodlgx7cl0jg5bFC1JSrGbwrly9nK6JodpLZKVUOfZsNsA2HTAWXwo20XWaq8epfFs3W5HWY9xtiFs', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(37, 'Miss Amanda Nitzsche', 'stamm.zackery@example.com', '2026-03-18 07:50:49', '$2y$12$0YJLKnVeIjK5cm.XGWKkOO9CSIb0km7QgVc8qFf6DcRf7FvrcdTIi', 'DrkaAuBOeLcSRpoKrAd75rBL8iYB5lZGWVPvcXNZJCKrYVZP91kC08jrpmWdaxZR6mHyPvwzv6OkOEPFqZF4QQPJCb2E5dzNxH0i', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(38, 'Arielle Konopelski', 'xwelch@example.org', '2026-03-18 07:50:49', '$2y$12$dXq5alz1QXlySN9JxSqG1e72yA/l.g9Auw2as1cLNezNCTelHP/O.', 'dh0OVc3LWl4FR1aHwyME1I0LQ4yZXuidBQoBDHedCkVay3I142r5HYgLcQRm53jX177zkr4mtJ330k6yXyiG1t3GmgFnLqb65jwF', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(39, 'Miss Audrey Auer', 'cecile80@example.com', '2026-03-18 07:50:49', '$2y$12$oZp8VBwFQ9Hp1XbbpcQH3edDxFU2WgoB73WJy8J39jXf7LRBHC6fu', 'sqcL3I6I2frljKuNDjgrP1eXBsvyL0pmoSQ8gKkReAyREAM8YxmOhm84CuxrfgTNdzCzJv6Yl2U8NKJc3mbIKksFFAr0st6jgDCr', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(40, 'Douglas Towne', 'imccullough@example.net', '2026-03-18 07:50:49', '$2y$12$QjHouOmRffBaEXEGy59AD.66HGM/C8MuqZT3.omG57LcQI48Pny3q', 'iAgRYOwL5LJSZrf579VPQPzQiQyZz3HPKJNZpc6pF4rTuVroOEgTUwevKzjd2S3tZ0H6eqwg20PMlbaKgZEL7CrPKa2hQCoy5OQN', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(41, 'Jarret Fay PhD', 'purdy.rosa@example.net', '2026-03-18 07:50:50', '$2y$12$rKf4.7C.OLSwyRPSFpgGseN1sJ2x9xoGJTIJpxTdbAMcUlrZXHTbe', '9UEB0ncCLWiPjlB2UEJlCPieSMu6oBT2acrBc1Bv9LONHc1xM8XaHJoOBd32iHQvzo4eMI20SiudCmQWrV8PYy9R6hUZ3eddOox5', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(42, 'Mr. Leone Bradtke Sr.', 'bernie31@example.com', '2026-03-18 07:50:50', '$2y$12$eHl1DsbsAuCdFIeKW56sN.RZgnJtkKYJ.weriQW5ii52D0t0X7XP2', 'SltHMcoQrs2mbZVWth2JE2v3gDyB2n5YeyVFRhoUwQijbF1PBfdQwTCBWYKIaST0ucXYUJQVzTHfqUUnkXe5EXwnzLGLwRPbXbk2', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(43, 'Shanny Steuber DDS', 'kuhlman.kurt@example.org', '2026-03-18 07:50:50', '$2y$12$JCXD5OKvBArfMzDTT1nXH.Op60GrO1ZCJ41m/cdGVI5pOw7t4oYva', 'T0JNSgnaSeXZx3GnUZoRcnBIjvw0U8goYUZbpCRebSeMTHewrZ0d8w7liDqalS9hjkyQI6MSivPQaGiBcd5KXbMli4wbVv18btMs', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(44, 'Holly Lehner', 'qwisozk@example.org', '2026-03-18 07:50:50', '$2y$12$5eABsfsx7aDrx6Vg0MPdmeTxVuqfVgjoXimxtfF0lpThkduYeHYyS', 'nc0B1zzNyF4fnwwzAtftOIXkMnIYR3VLpK8DBORIXj9nrwVZ95IfEPqlMqMnwA1pqgUymvlq5YymM4UCmitdu6eQDjUXvsx87XIC', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(45, 'Dr. Joany Pouros V', 'smckenzie@example.org', '2026-03-18 07:50:50', '$2y$12$oy64Fom0SGlZrfumYI2nduxBfa.flu7u4DuwnvIEhQVm6hrU2qnyG', 'rPzzeB9DNXy8ZKGINrJcVx74UwTuX73ogtmWTuIOPo9XcaHdaxpuvpYsttN0j5X1fY4AD7wsOO5xhGvTqxa5MNGftuxFgm22Q3p8', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(46, 'Josie Oberbrunner', 'wuckert.edwin@example.net', '2026-03-18 07:50:51', '$2y$12$mUAPEQ5y.WNUD4TFtPC/4um0KY0yTqx8Bwmnu8h9/2UpF7iqpoYke', '7XoUisse1vrO3NkKKRm66cpW40NvAyxcYTMgTZhTYbosaw9k2iidnB2fFhv7JzQ1ZyNtshjhT7PDNEcR8HHq6aSxMsddSiGA1usV', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(47, 'Chaim Cummings III', 'mccullough.hilario@example.net', '2026-03-18 07:50:51', '$2y$12$bUSIWU/aMKWFrOru7vsST..eVIDvkPp/r0HzrzVEFtd8pshQEz5MO', 'zIaFjvtlDR7mfN668Iw0eoDiSVMhyXCoGHuRWvztzGFzc3dTKatzWREbQIJfKnLyW51VbTPptJ86h5kWaY143DbWyEAGnmUU6Vql', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(48, 'Kianna Jones III', 'waino.denesik@example.net', '2026-03-18 07:50:51', '$2y$12$O6r8jZ1yZ.1neJ9rQk959eQ5cjVtJxexH69PKgDV8pSRxeKBddyMy', 'x7lBy304Vz5E7E873va5cHtEUkfM7HFtmIOPgaSG2GwYx05kTK7biMQ1wT3a123160e1M4a8kDNGrj6vpql6coyJXhHoeMDHGBDz', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(49, 'Logan Collier Sr.', 'edmund31@example.net', '2026-03-18 07:50:51', '$2y$12$Up5acoNHiUs6SsTFEvE9ruIdEf6jWzgzdiwLIQV8/tXrOtyVxENrO', 'jWWfy2LF7gHhZoX4DZ9Sn4gHAB9BxfpBomMwUzI01wZFmoyL9cJv6ioY2ZzWdpHiJgEgNYVGEQHsFkpvE7wvvUirg8d0uIcaWpIR', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(50, 'Jana Gaylord', 'jast.gardner@example.org', '2026-03-18 07:50:51', '$2y$12$EaTolMBrfEnNbL1wVXwyceUQbx.Wm/x704IUJM/HTa1yQmRskrbDe', 'SP7XJjyUq5XvopeipLKD1ERmd3FJLmAEM5qDrD6UVM1wBi5GWngZDv2o98SV58QZZsXq5bAsirgY2148zOzmkAKvsxyHqFZzDjqB', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(51, 'Jedediah Fritsch DVM', 'smarvin@example.org', '2026-03-18 07:50:52', '$2y$12$6SRA9/zOVeflB0gcyb7ebeK7IyuI29Q27ZzFxNxXSirwV9FeNmYeC', '3brDjRfcDsGWfvna8ebgZrwszeRbJWtwQXhpqwLePWzUh3gfGrxY9eJsVx8LhEvh7TIQtAFHnztS9JKGULOZoBF3oM3aby0w7dmw', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(52, 'Monique Nicolas', 'rleffler@example.net', '2026-03-18 07:50:52', '$2y$12$aNSa1UaN6oAg4/J8yO76v.QizGKSkY.32KjYCUMABBQSKIiObTbPy', 'mQF7TC3L37Km0lXl3UaHuFQtxjQghkTrDuBA1RrikDIMtJaP4JcRj0h6E5KmnzrypQMCPRtBna6s1r4RQsgvdrZet5daP7naSNkC', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(53, 'Cullen Hand', 'lesly.dach@example.com', '2026-03-18 07:50:52', '$2y$12$ca7086iffLVIx8Ih1n2bcOTY4d0zamdlHy9b2AEqiuSgfx1fNRKAi', 'ZPW9iAkqOPdgFDZI9yj4deBNfI5pl71E8liSW2x0SDeIip9BPIUZxDECQxHY230Dh28xpFEkkC2rz2LVlXCX4ymOlZ5EatHDF6WC', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(54, 'Rafaela Hirthe DDS', 'mertz.joy@example.org', '2026-03-18 07:50:52', '$2y$12$BKZJpQMXfgI2ETYkCdRzLe5.nm6JUGmxhJpSE1GLs.FIim93hC1WC', 'y8uAzMlif3awZRRyYldF3C9jUT3RfkZZjTJAsSBLQ5pi0YDJ8pk8Rp8yRPF91bIdIMqotpanYA1nFz7Focz94qd7WLJ7cbG9oIdW', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(55, 'Esmeralda Fahey', 'kkirlin@example.org', '2026-03-18 07:50:52', '$2y$12$o3m4JCgaiXzAxh2A6UqqzOH2WSX/QctAqRZuUd9H5vNpNkUtWGs9a', 'stPJkrQnHyh4Ysc780SMpFtNcEQbzw7vDTEcOrvEZohRnyNrLHFtotLW6DuTsExGhBZ7QnSatV7mDcxAI2UkH8Tcd7IrbGzGn4KH', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(56, 'Gene Ledner', 'helmer.waelchi@example.net', '2026-03-18 07:50:53', '$2y$12$AJNG9U9jv7uc0DmwLf9z.usBtNsOioQsttQ8XBJajtcm0exzxqc6G', 'pIe2ujSKKBcqvZ8g3s0nNyKSDdDaj9WX2RHAHWXqcrbVTjEFyWYouCTm67vNUpmFs0Kn2Yvz2288GXNZ6j9RFEz9YVehKQiMwNkp', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(57, 'Jerrell Hettinger III', 'drake.goyette@example.net', '2026-03-18 07:50:53', '$2y$12$Za0RzqxL3QXdnxUvHDkcueuVeKy0bqxu/l2jpB9Z3GknnZwK.9uv2', 'Uw2BvmTmYtWl0AB7G7JxcvJZMD8iNO4o3CdsujHky0be54aMS0O1YXZTbskPspg5R5LdEfLLOb8lMH0o5GNWZ3Rt1lluuWdn4gOm', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(58, 'Lucile King', 'turcotte.francisca@example.org', '2026-03-18 07:50:53', '$2y$12$905G/Hg7wMeqmA0jecYSTOXyJoBPvcXvtFoS1yxRGD99bCzW8g4fW', 'Scz1yrCTs3RJeT6Wt6KXcx3vhXEcMIhVJAVn6pmlPUjU11dErUPkmUkfit7yjzqChM8E09AWm63HASAytRqcKgbiD6fuQt72JX7t', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(59, 'Ms. Dovie Botsford II', 'maribel.spinka@example.org', '2026-03-18 07:50:53', '$2y$12$rNpXECgbuxUKEmriI38kjOwkSy1KiWVPkjNhfebjwB6PTGaG0urLa', 'GQPePBRUZq6Od1uMIPbL5D0UwDHx5e3TR9T7kNBvhUAxGkBqW7WuuCx6sKmuQw9MlqQXgvWOeFdBQMylVBwI3sdU4PhWiA0zofQ0', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(60, 'Carrie Hansen V', 'avery34@example.com', '2026-03-18 07:50:53', '$2y$12$7pZ1FFzwO7jbv.6/adJoL.GhgdZqEjHYmkfsGVZzowcUn/V9niUOW', '2exGvVpQ8lKoUwUDzVLIUNN2fd3qolHo4LHkTne7KLDuVyDn1s2BGd4QxDwpqSgqDNi2xMVyuwskILdllUTHSchXPuZTp65DhehI', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(61, 'Ms. Lenna Abbott', 'donavon86@example.net', '2026-03-18 07:50:54', '$2y$12$ToBYsFbPE/aF1NXyoOJm6Oc13mMyxA0rMHUIopXOPcBX.oxv/FU6G', 'U4PefMdX3WTlJl7XD6KT1OjEshc575lJ2COF9NO1Y6YFnTXMCzshzfDjYbJnlob14C6hDkh1ZgBQp81VDvhXQlp6QXvrkr82CJiX', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(62, 'Martin Jacobi II', 'hansen.adrain@example.org', '2026-03-18 07:50:54', '$2y$12$RNe5LPenSij5vLzSFfomC.EqmW6ucXdWIejQiqPFufjIfrZrMFzQi', 'QZLBUhJzHNTvupkpoBcKz5yV19h9OEZ0IPCeOmM0znfihk0FQcAIHkAh2Cu9xQcsoYcX1e9hYtH6z84ii1Py5vuThHQM6hRjDZZ1', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(63, 'Hope Ritchie', 'oschamberger@example.org', '2026-03-18 07:50:54', '$2y$12$5Z0ng5MrSlVRmwcjAF/.9ObdW9/xg8JG/NkGWlG4lQEpr5y3ETg/m', 'uiUs74UCe35DedvO2RQYMyxCMeI0CO9qu5Lj4vyq2fCpAHCMf36I1N8B4uYswRcE55oOWa8tslNjXkApZwU3RNHqhroLHGvy9ByY', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(64, 'Prof. Otho McCullough', 'jakubowski.deon@example.org', '2026-03-18 07:50:54', '$2y$12$OKJZqZWvcuwhm/hTn2ObhOQtMAt79fxmxN1.w1oWq3KgiZmfIVbnq', 'WKn3tqtW2L041tHj70AnXJ1zmHYSnNYoNwKQoExvbhNRPlLx9XWB3dLXnIQO7MEirtodBrKtKb6XkXA6VxRD2s67wmKvF0QUlIbg', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(65, 'Margaret Metz', 'edgar.schultz@example.net', '2026-03-18 07:50:54', '$2y$12$RIXnmnAIlbQYkUeIj4mQMu9g76lUFsUIoGj/zg9h1rdCmA1zEbO/6', 'A9S4ahwpBA42GCf5RjdehrO0yY85OHXYQY2LAlUYQsVMWu2ZqhgVXNGOZuLEYPj4fHrd0lHvRIknkpE2KAK0VSYEoSz1tMs5y6L1', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(66, 'Mr. Obie Durgan', 'mclaughlin.delphine@example.com', '2026-03-18 07:50:55', '$2y$12$zWkApyUyZmD3QnoO.BNWX.GHC.IH2o0cMiXb2rLITLCUi/6fUKo4m', '2boHuyHVc5mIk4UHQNqNM4bGWAlbK3ZTauZZ7duquwxjVTDs7a9HexbjWMadUNNrZdcWKMGx43kMG6spJpNz5CcPkIbone1FJUC7', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(67, 'Kailee Kris DDS', 'rice.sheridan@example.com', '2026-03-18 07:50:55', '$2y$12$6lnFRLLxvJeQfabV3AhemOtO1zpEEjPB4eMgcuFwpcPorGriBQelq', 'DgPNu2POUoVcNOfI8JNjnUNQGqxuw72FQoWD69N6hhNAPx0RCq0mh1gTdKsozOL8Di6Q2BOlGwVt8TKnBbjk88M82Eedtx4my5Sl', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(68, 'Liliane Ernser', 'vluettgen@example.com', '2026-03-18 07:50:55', '$2y$12$GNF6xUXG6k30j5liDBowQ.1uu8BF4n49exckFbijgiQjuhvveCzj6', 'yx9iaR28OEnlRCe4iUdLN49EbWu8xXuraAvJBp3GU3rJmCfjv5BJIROE8ZhSBs3pfybFEIf99hZ8ciQvYOfqj1wXV9mZBXmvOGcp', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(69, 'Shannon O\'Conner', 'allison.cole@example.org', '2026-03-18 07:50:55', '$2y$12$isvebIyIZrUTnUkCPH5QW.W4V7d6OsNLvUas.eOvljyk.0xtj4tCu', 'npG2OY5e8E86UZZLRnbZKpQIBM4XrOKd8q4F89152Eo831aHsIITGpar3IL5BVyFup51ypL8IAPZE6psm48psVQph6b5we7E69gw', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(70, 'Lupe Terry', 'sheidenreich@example.net', '2026-03-18 07:50:55', '$2y$12$89XsEvT464FGavub7z2Bm.0PvOoeQLV8ZNRrmM0w40LSV4jbboeHa', 'DghT4D9I98vcmFJ1AhD1a7x3k8KnUNQ9CkqB5x5C7Rd1k89WAjEG1gM0Br9HeKS3GT9NV9NL8HS64rmi1BTpB9GyNkFrVQMhsUnM', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(71, 'Yasmeen Bins', 'tkautzer@example.net', '2026-03-18 07:50:56', '$2y$12$j6VDAk0/Bb82oVjX9YZTzeC6Bb4H0..FRjKt.gcvgCV.IkzR76lGm', '9KyggZRJrPdDU7DJ83nTnMfpXG0V9sMuTbIelT3vMxTdlBspKgZJdAlqzfarVwGNKjKALUvLfep9TzakTdvLbhcinw1pI1rYPd8m', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(72, 'Adah Turner', 'heller.randy@example.org', '2026-03-18 07:50:56', '$2y$12$dk2lKfXPVMs547mFdchXKuaRUq8ri6kNBomIyEGufJ7yrONhcGFuK', 'WbA4YWC1OfFuA8umVNv6ExiYDwZNHHcd7r6xm4DNRe1Dq97wnGd6rvYQalFPeAWo5xgqhHtUxcIc33IwGgUXe1ShGIRgPMniRLUP', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(73, 'Maynard Steuber II', 'christop10@example.net', '2026-03-18 07:50:56', '$2y$12$YL2jHLB2vBXUJE4rttZVJOu.j.DxL3iuqcKfmLcW7YcrQCMASc2v2', 'Y8e0LlbO5qMwi7ZnHavPzu6XBrqU6WQb0RJxXlNsioRyY0ATekWAMG6piJgoaWK22HmQNZxtbuxo0HMFXTKOiNxkJvRb4jg7Zvhk', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(74, 'Halle Rogahn', 'laurence.sawayn@example.com', '2026-03-18 07:50:56', '$2y$12$FY6GwoCoQeTNcczvAU81G.2tMoONelvuWxJ7LzdUboBI4bAqCueSO', '1IIdxGVJbn84YJ9F9GVo4PK3sPWQ84bxotoysm5444syxVt17jXt3iOJIyGN8FZBsI92XS8ESEagk31dXDdXEsadmCPKOJSr0Fsf', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(75, 'Dr. Kristopher Quigley II', 'pierre.connelly@example.net', '2026-03-18 07:50:56', '$2y$12$.oU5al3NqD7xBac9/AHle.zoQu0vUbQ.jepSC7ksetiquzjBg7g7.', 'UsspeEg3WDiMooLG2lxFiNncJLfa5cegcmtj4TtAzBujslnL9zod8DLb4Oyf46hMRmtDqumDHgmfBMpMirNgXvwoUE3IK3RTwosE', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(76, 'Garnet Stoltenberg', 'chelsie85@example.net', '2026-03-18 07:50:57', '$2y$12$4zx81gesdr83hJKoq3zhoOe75Dd0sXbIsL1WjmeHn5cPwpuai/pI6', 'f00V0VzQ0Re28u5QlHwlL3oEJ93yADG6l2uZ5FZSCDSfeEjZHVVovCtdippHgqEc3dVILUJiTy5U8qv0E1lWpuClOkNylspIn7W3', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(77, 'Adella Anderson DVM', 'allan96@example.net', '2026-03-18 07:50:57', '$2y$12$qIVx4Hud/e5IBLLe./3rkOwq8JGIaM98MliaY6JaREotc2hgKAUcy', 'RJf7GrVzNAYbhM1a6i7k7ZHN7Khh2HRUNdHy0uJthdTpaPkCiruRIvvlTbYzUuzzYexorcVjbtFp62UP9qtYZfKYYaekSQxGW6vd', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(78, 'Dr. Felipe Cartwright Jr.', 'dmoen@example.net', '2026-03-18 07:50:57', '$2y$12$o1UFvcPijORgChhV4gRk4eEZCNWX0e0hQlFnSTne0nXFyod0roqJW', '9STqujhpjEJOUsG4QEqhcJmaYS62g73cuyX34MRZz0Qk5yEL7GC9g4ibOf0JYELKRPBJQ9P6kHycgu0Zw5SZonMYVPLLfAVQs4kc', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(79, 'Jody Bosco', 'marielle81@example.com', '2026-03-18 07:50:57', '$2y$12$Z/MPJsxxSm0Fj7pUIE6HROT6X3WShON7lHxQ4wMpM9eokxPZiqBOG', 'CqwiO5waj4mEWN7KcowrrTw62C31muR6c2KkfRvHowpBKupxOKdr3zVO6myr0aqrtXaxJZjK2trBFVBhueEPHwIufcADKb02zScb', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(80, 'Dr. Lisa Abernathy', 'houston.metz@example.com', '2026-03-18 07:50:57', '$2y$12$4nG0dmYxPIVwj6xAd3mHGexPXduavaLdO/Ug.ZyZg4Ioqzl4P7OKG', '5tU4t1751fPHYCvDqd9jzJwOJ4svBRt2bgTRQFNA2GsQhfm1h2E7ggQo3pOApRd1wAGhpgmSPAarlLR027zuu1DJr6z07J0wAt83', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(81, 'Yvonne Gaylord', 'lakin.danial@example.com', '2026-03-18 07:50:58', '$2y$12$LdBYf03QmCCRYYGbf.BxUOvEX5J0tylQhTJsrNqdGKBGF9ssMYxxy', 'PtMTguve8dVKrDfvJrtSRJ5rzrcdhNhI4xEF1iqTJgPOl8ref35mwf8r3fd5V1W9o0jd1UyusXEVypbNGeQTcsvROgCF7loBASaM', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(82, 'Mr. Jaren Jenkins I', 'gkuhic@example.net', '2026-03-18 07:50:58', '$2y$12$WqaHNhjdYVc2QC.MV2aliuP6kaXjSEFoR73AUmPPhyz9Q2TIQRPw.', 'AOus21N6Vh09l2nAOFiwUnwGUuvt0bDvmJfrMyIdMvtrnIGkcOkHydO6y7AJkc1sutmsi8vfTSGajXmV4iXFgZ1FUAdTz41Xr8ri', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(83, 'Gabrielle Marks', 'jedediah82@example.net', '2026-03-18 07:50:58', '$2y$12$UKltszxYsxYP2oqwjJ80EeyAZlY0SNaGLAfj95bWzK2UKazw0aJMS', 'nZ5D0qBFMYZljaOFSPmKQucCQ20RXokCA4rxJhAty5THvKIBxs7iTjAYyjmehPbZGHukW1gJImKIdS87ampw27mbF88vzsg2hSVW', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(84, 'Tre Buckridge', 'nbeer@example.net', '2026-03-18 07:50:58', '$2y$12$sf11DeOdJCw85pVejaMxzumPgdIUrJiypXxNrXwXQwFEzB2u.I5Xi', 'sZ59boeYBW7eVw8u6QDwM2ENjvsncSH1Eum6GZicYVadf9VrlPj4KcYbx7sFX85jmscsfQHNL0zyEbo0YnP9ZuzOnIcdvwJ9IPVo', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(85, 'Prof. Annabel Krajcik', 'pgusikowski@example.net', '2026-03-18 07:50:58', '$2y$12$6DDoh1fbr/1KkrlEpeoR.uD./fw1zk4/vZfBu1y7qnxQt1d8C4/fm', '6ENNgUSGwSIQ5tBLMCWK7aPrkqQWB3PRe1xmLHlaZTa30WwSTyz5dKuTNADTpJPzPMNE2pNVEpyBapBna7qdn5k0Ujzp2RL8Bvdp', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(86, 'Dr. Jamarcus Adams', 'mccullough.cleora@example.org', '2026-03-18 07:50:59', '$2y$12$bxrtlMcgStoq5YY8ereu2e6/eE9winHIqR7TCcQdEcSgPClCQWmhe', 'l36IBzLs37IY2DOnQxxFHZlapR4lxjBc74zysfuV5S6QbPxlBSmoVNuRdA3YleCxjtkuzkEcIeq8uJbjeHMUh3TrxCxZp8bOBVmy', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(87, 'Jacinthe Hegmann', 'camylle.shields@example.com', '2026-03-18 07:50:59', '$2y$12$AezTVZSw04yb74CFzFdNBeaOJBWF6QndEV.KjGHQD0S3tYS9uWs82', 'DCNeLKfnhMhBXtFOkOU8NIfgxFeT3xkHohDwvt5THEGVJay9G54Cl1xjuF8ggpWlTZL9jHpZQiWIYWXh3rQl7VRjD7ReHpAVp2PA', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(88, 'Wade Oberbrunner', 'dsteuber@example.org', '2026-03-18 07:50:59', '$2y$12$o53aVKozEDx1BDOKTKRTE.0iG2iAPX6k.tVRYmOmtOct.FOpikWpC', 'rEl5dSQM5okhUBqjCZvjgygXLRqfy4GFvmlzrra8j1cTSfn0FUTvVtWjAAQVEYLvvR4NFBdbJPBV4tFJTQwgcMG1LATM0YY8qeus', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(89, 'Wayne Nitzsche', 'xluettgen@example.com', '2026-03-18 07:50:59', '$2y$12$gyfN9DLAAO9cvLI5LHb6BePitHrsKAo7JY0d.4/lB9naNUnacF9.m', '3ZbuC0GhP3QTBDUaqUoI2V1mY09H4uyv0ZUGKwWECE87rThRA6VpD7hnYpeLw9m8TDNGW3TsIs33YDWJzTtU4bQld0Jl3defugod', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(90, 'Blair Kshlerin', 'lincoln60@example.org', '2026-03-18 07:50:59', '$2y$12$jist5bwZcy6lvsP2Bmsa7.RlnQGR7E1Km7stqvdCiDJQoSq2m.60u', 's3FnKhgAoikTLyHMBYUqZoTdbHfWSPjKwNwrxzFqCdSVT3xe07JDWP7e1rD66pz0u0yZft8YKD7Zq949P4sFR7qdQH0zD9qDFyFP', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(91, 'Amya Armstrong', 'cummings.liliana@example.net', '2026-03-18 07:51:00', '$2y$12$FXHx0Xfq8mpxJft487Zz6e5ylEYG2UPktoq7kCE1kUi4oSFdEIdWK', 'MGU31RIdT34HUgvNR9xrpbmCAkEfQx9odWENPqzIH1ElsYrOsxuleRrb7MybOitsGOQ2aRord9jIGYj4ZTbFpe5Enf9Iv0xnHgsb', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(92, 'Rosella Tromp', 'elta.kihn@example.com', '2026-03-18 07:51:00', '$2y$12$aftUv5se1eO8eJrbU1AVheC6LPqH.tYx03nDKuYzh.2qFp.JsF3LO', 'O1r1CbnMJxF19fIUk8LNRvNfGra9yNjeQpAl5EWKtwOmOm8o0SusZOSULBnNLhBMNFQp9XylSNDS72dVDewEb57k7WTobR6JWYyO', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(93, 'Madonna Parisian MD', 'cborer@example.net', '2026-03-18 07:51:00', '$2y$12$yME0NVsPyhowMHNo1yD3CuYyuRoq5TXe1FEo9NvLX.94zKIpKiQru', '6PiLlmbKc3fiOLYRF4C5K7Vyn83Li2LQTr6Yz3nGSPSSVhYgLKPRCyw0q3NjQQlS8UNu8Q0gnB0hP3oQrXZt4EeJB68KuEXDW2Ia', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(94, 'Jacky Turcotte', 'dooley.ellie@example.net', '2026-03-18 07:51:00', '$2y$12$s1926f3u1.qFNX8nT4lWIuPESZ6YVU82WBQYSW2cZUYWIJQKh92Fa', 'wPZewTS2mfxxQSJPJDSIFi3kn780QTMvaJpJouncL7DNuiLtBhpSdyknp2YE2yvtEZ4drLfrs1eTcsHwLbanaBTV4s9eBccvWTYu', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(95, 'Ayla Senger', 'helmer.koepp@example.net', '2026-03-18 07:51:00', '$2y$12$sqo.9/DxcoWEsrH5zPdcV.cp3d49Mb2hnpk9JXymz4KaVmAIU7wGS', 'UrIrPuVNIgzIPBiZO7eI85Kn9LnbMCTf1C4jsx63AfiEO4KxahlWcVCbU5MvqV9rbbfYGInHR3eWviFOP71fHhe75RjOruY7ijVU', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(96, 'Litzy King DVM', 'awill@example.org', '2026-03-18 07:51:01', '$2y$12$2CrNWT2TvANiUMJBpysOQOC3g2zaYEqI6ifo1anUbXcEQRj83o7eG', '9RvQCaDut2BSLBA21S6POAU0bLpIzHzHHueNvT4Bb9Vn9uYAI285M9kBnzK2RWgqbTw9sE6oAVNIXgpB5nOgS4VaIvbVua61wAR5', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(97, 'Kevon Lynch', 'lelah13@example.com', '2026-03-18 07:51:01', '$2y$12$Nzzh24VOQtFh5IdgTA/7fOZ.wcwHarDj2548KCThENQJym4/mgVCe', 'qkEwseBiX1e6N78sBIMbRcY6EBDbMB6sF2QY8wNXADzv7K0Ac6VWhlzWraWZInsneo9LLkASrLOFvQwdiiqONShLnqEKgDIzwSzk', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(98, 'Mauricio McCullough', 'reichel.lazaro@example.com', '2026-03-18 07:51:01', '$2y$12$3XdDUe9QT8.rmR/KTpoMc.l6gf2casF89HK5XvqLnFhfQYfxH8f.y', 'Ne6K96mXZGemqiniD8m2YEJrSHOyVtnYJnCMxIQk6JOpYSsd28InqCHCzJjPqqXkZkFTAH3SqNTZbLB0zgVZhb9LogWmjMNdYZ8a', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(99, 'Elise Bradtke', 'uquitzon@example.com', '2026-03-18 07:51:01', '$2y$12$56mHJYYZmPcqlpsVVQNyUuPH5wyz6K3nIGsfv4/leBitQfYv/0UXS', '8fHsaG5kSYzJM74QfpFvdebPgV8kuzaFGVfR9GMx9km15BxOJjxIlygRe2WHlunA1PSMCoSwnvnhFBGC2RmI207JrsmgtpDnwFrw', '2026-03-18 07:51:01', '2026-03-18 07:51:01'),
(100, 'Admin', 'admin@example.com', '2026-03-18 07:51:02', '$2y$12$tpENl5k998qcitM3z1xOfesh7KBxFbCcPtVSnc7gC42h40ugponJS', 'kM67gn6HYatNtWGPcIJfN4TSBimjH0f51JHCJFV5xJhIvM3SetSnvo0jbkP7yyQrMOUCfCqFC0mAfeOeJ3Jn9UHMu6XISgwmBe9o', '2026-03-18 07:51:02', '2026-03-18 07:51:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosen_nisn_unique` (`nisn`),
  ADD UNIQUE KEY `dosen_email_unique` (`email`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswa_nim_unique` (`nim`),
  ADD UNIQUE KEY `mahasiswa_email_unique` (`email`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
