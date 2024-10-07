-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 06:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contracts`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `alpha2Code` text NOT NULL,
  `alpha3Code` text NOT NULL,
  `callingCodes` text NOT NULL,
  `capital` text NOT NULL,
  `subregion` text NOT NULL,
  `region` text NOT NULL,
  `timezones` text NOT NULL,
  `flag` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `alpha2Code`, `alpha3Code`, `callingCodes`, `capital`, `subregion`, `region`, `timezones`, `flag`) VALUES
(1, 'Afghanistan', 'AF', 'AFG', '[\"93\"]', 'Kabul', 'Southern Asia', 'Asia', '[\"UTC+04:30\"]', 'https://upload.wikimedia.org/wikipedia/commons/5/5c/Flag_of_the_Taliban.svg'),
(2, 'Åland Islands', 'AX', 'ALA', '[\"358\"]', 'Mariehamn', 'Northern Europe', 'Europe', '[\"UTC+02:00\"]', 'https://flagcdn.com/ax.svg'),
(3, 'Albania', 'AL', 'ALB', '[\"355\"]', 'Tirana', 'Southern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/al.svg'),
(4, 'Algeria', 'DZ', 'DZA', '[\"213\"]', 'Algiers', 'Northern Africa', 'Africa', '[\"UTC+01:00\"]', 'https://flagcdn.com/dz.svg'),
(5, 'American Samoa', 'AS', 'ASM', '[\"1\"]', 'Pago Pago', 'Polynesia', 'Oceania', '[\"UTC-11:00\"]', 'https://flagcdn.com/as.svg'),
(6, 'Andorra', 'AD', 'AND', '[\"376\"]', 'Andorra la Vella', 'Southern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/ad.svg'),
(7, 'Angola', 'AO', 'AGO', '[\"244\"]', 'Luanda', 'Middle Africa', 'Africa', '[\"UTC+01:00\"]', 'https://flagcdn.com/ao.svg'),
(8, 'Anguilla', 'AI', 'AIA', '[\"1\"]', 'The Valley', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/ai.svg'),
(9, 'Antarctica', 'AQ', 'ATA', '[\"672\"]', '', 'Antarctica', 'Polar', '[\"UTC-03:00\",\"UTC+03:00\",\"UTC+05:00\",\"UTC+06:00\",\"UTC+07:00\",\"UTC+08:00\",\"UTC+10:00\",\"UTC+12:00\"]', 'https://flagcdn.com/aq.svg'),
(10, 'Antigua and Barbuda', 'AG', 'ATG', '[\"1\"]', 'Saint John\'s', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/ag.svg'),
(11, 'Argentina', 'AR', 'ARG', '[\"54\"]', 'Buenos Aires', 'South America', 'Americas', '[\"UTC-03:00\"]', 'https://flagcdn.com/ar.svg'),
(12, 'Armenia', 'AM', 'ARM', '[\"374\"]', 'Yerevan', 'Western Asia', 'Asia', '[\"UTC+04:00\"]', 'https://flagcdn.com/am.svg'),
(13, 'Aruba', 'AW', 'ABW', '[\"297\"]', 'Oranjestad', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/aw.svg'),
(14, 'Australia', 'AU', 'AUS', '[\"61\"]', 'Canberra', 'Australia and New Zealand', 'Oceania', '[\"UTC+05:00\",\"UTC+06:30\",\"UTC+07:00\",\"UTC+08:00\",\"UTC+09:30\",\"UTC+10:00\",\"UTC+10:30\",\"UTC+11:30\"]', 'https://flagcdn.com/au.svg'),
(15, 'Austria', 'AT', 'AUT', '[\"43\"]', 'Vienna', 'Central Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/at.svg'),
(16, 'Azerbaijan', 'AZ', 'AZE', '[\"994\"]', 'Baku', 'Western Asia', 'Asia', '[\"UTC+04:00\"]', 'https://flagcdn.com/az.svg'),
(17, 'Bahamas', 'BS', 'BHS', '[\"1\"]', 'Nassau', 'Caribbean', 'Americas', '[\"UTC-05:00\"]', 'https://flagcdn.com/bs.svg'),
(18, 'Bahrain', 'BH', 'BHR', '[\"973\"]', 'Manama', 'Western Asia', 'Asia', '[\"UTC+03:00\"]', 'https://flagcdn.com/bh.svg'),
(19, 'Bangladesh', 'BD', 'BGD', '[\"880\"]', 'Dhaka', 'Southern Asia', 'Asia', '[\"UTC+06:00\"]', 'https://flagcdn.com/bd.svg'),
(20, 'Barbados', 'BB', 'BRB', '[\"1\"]', 'Bridgetown', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/bb.svg'),
(21, 'Belarus', 'BY', 'BLR', '[\"375\"]', 'Minsk', 'Eastern Europe', 'Europe', '[\"UTC+03:00\"]', 'https://flagcdn.com/by.svg'),
(22, 'Belgium', 'BE', 'BEL', '[\"32\"]', 'Brussels', 'Western Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/be.svg'),
(23, 'Belize', 'BZ', 'BLZ', '[\"501\"]', 'Belmopan', 'Central America', 'Americas', '[\"UTC-06:00\"]', 'https://flagcdn.com/bz.svg'),
(24, 'Benin', 'BJ', 'BEN', '[\"229\"]', 'Porto-Novo', 'Western Africa', 'Africa', '[\"UTC+01:00\"]', 'https://flagcdn.com/bj.svg'),
(25, 'Bermuda', 'BM', 'BMU', '[\"1\"]', 'Hamilton', 'Northern America', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/bm.svg'),
(26, 'Bhutan', 'BT', 'BTN', '[\"975\"]', 'Thimphu', 'Southern Asia', 'Asia', '[\"UTC+06:00\"]', 'https://flagcdn.com/bt.svg'),
(27, 'Bolivia (Plurinational State of)', 'BO', 'BOL', '[\"591\"]', 'Sucre', 'South America', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/bo.svg'),
(28, 'Bonaire, Sint Eustatius and Saba', 'BQ', 'BES', '[\"599\"]', 'Kralendijk', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/bq.svg'),
(29, 'Bosnia and Herzegovina', 'BA', 'BIH', '[\"387\"]', 'Sarajevo', 'Southern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/ba.svg'),
(30, 'Botswana', 'BW', 'BWA', '[\"267\"]', 'Gaborone', 'Southern Africa', 'Africa', '[\"UTC+02:00\"]', 'https://flagcdn.com/bw.svg'),
(31, 'Bouvet Island', 'BV', 'BVT', '[\"47\"]', '', 'South Antarctic Ocean', 'Antarctic Ocean', '[\"UTC+01:00\"]', 'https://flagcdn.com/bv.svg'),
(32, 'Brazil', 'BR', 'BRA', '[\"55\"]', 'Brasília', 'South America', 'Americas', '[\"UTC-05:00\",\"UTC-04:00\",\"UTC-03:00\",\"UTC-02:00\"]', 'https://flagcdn.com/br.svg'),
(33, 'British Indian Ocean Territory', 'IO', 'IOT', '[\"246\"]', 'Diego Garcia', 'Eastern Africa', 'Africa', '[\"UTC+06:00\"]', 'https://flagcdn.com/io.svg'),
(34, 'United States Minor Outlying Islands', 'UM', 'UMI', '[\"246\"]', '', 'Northern America', 'Americas', '[\"UTC-11:00\",\"UTC-10:00\",\"UTC+12:00\"]', 'https://flagcdn.com/um.svg'),
(35, 'Virgin Islands (British)', 'VG', 'VGB', '[\"1\"]', 'Road Town', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/vg.svg'),
(36, 'Virgin Islands (U.S.)', 'VI', 'VIR', '[\"1 340\"]', 'Charlotte Amalie', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/vi.svg'),
(37, 'Brunei Darussalam', 'BN', 'BRN', '[\"673\"]', 'Bandar Seri Begawan', 'South-Eastern Asia', 'Asia', '[\"UTC+08:00\"]', 'https://flagcdn.com/bn.svg'),
(38, 'Bulgaria', 'BG', 'BGR', '[\"359\"]', 'Sofia', 'Eastern Europe', 'Europe', '[\"UTC+02:00\"]', 'https://flagcdn.com/bg.svg'),
(39, 'Burkina Faso', 'BF', 'BFA', '[\"226\"]', 'Ouagadougou', 'Western Africa', 'Africa', '[\"UTC\"]', 'https://flagcdn.com/bf.svg'),
(40, 'Burundi', 'BI', 'BDI', '[\"257\"]', 'Gitega', 'Eastern Africa', 'Africa', '[\"UTC+02:00\"]', 'https://flagcdn.com/bi.svg'),
(41, 'Cambodia', 'KH', 'KHM', '[\"855\"]', 'Phnom Penh', 'South-Eastern Asia', 'Asia', '[\"UTC+07:00\"]', 'https://flagcdn.com/kh.svg'),
(42, 'Cameroon', 'CM', 'CMR', '[\"237\"]', 'Yaoundé', 'Middle Africa', 'Africa', '[\"UTC+01:00\"]', 'https://flagcdn.com/cm.svg'),
(43, 'Canada', 'CA', 'CAN', '[\"1\"]', 'Ottawa', 'Northern America', 'Americas', '[\"UTC-08:00\",\"UTC-07:00\",\"UTC-06:00\",\"UTC-05:00\",\"UTC-04:00\",\"UTC-03:30\"]', 'https://flagcdn.com/ca.svg'),
(44, 'Cabo Verde', 'CV', 'CPV', '[\"238\"]', 'Praia', 'Western Africa', 'Africa', '[\"UTC-01:00\"]', 'https://flagcdn.com/cv.svg'),
(45, 'Cayman Islands', 'KY', 'CYM', '[\"1\"]', 'George Town', 'Caribbean', 'Americas', '[\"UTC-05:00\"]', 'https://flagcdn.com/ky.svg'),
(46, 'Central African Republic', 'CF', 'CAF', '[\"236\"]', 'Bangui', 'Middle Africa', 'Africa', '[\"UTC+01:00\"]', 'https://flagcdn.com/cf.svg'),
(47, 'Chad', 'TD', 'TCD', '[\"235\"]', 'N\'Djamena', 'Middle Africa', 'Africa', '[\"UTC+01:00\"]', 'https://flagcdn.com/td.svg'),
(48, 'Chile', 'CL', 'CHL', '[\"56\"]', 'Santiago', 'South America', 'Americas', '[\"UTC-06:00\",\"UTC-04:00\"]', 'https://flagcdn.com/cl.svg'),
(49, 'China', 'CN', 'CHN', '[\"86\"]', 'Beijing', 'Eastern Asia', 'Asia', '[\"UTC+08:00\"]', 'https://flagcdn.com/cn.svg'),
(50, 'Christmas Island', 'CX', 'CXR', '[\"61\"]', 'Flying Fish Cove', 'Australia and New Zealand', 'Oceania', '[\"UTC+07:00\"]', 'https://flagcdn.com/cx.svg'),
(51, 'Cocos (Keeling) Islands', 'CC', 'CCK', '[\"61\"]', 'West Island', 'Australia and New Zealand', 'Oceania', '[\"UTC+06:30\"]', 'https://flagcdn.com/cc.svg'),
(52, 'Colombia', 'CO', 'COL', '[\"57\"]', 'Bogotá', 'South America', 'Americas', '[\"UTC-05:00\"]', 'https://flagcdn.com/co.svg'),
(53, 'Comoros', 'KM', 'COM', '[\"269\"]', 'Moroni', 'Eastern Africa', 'Africa', '[\"UTC+03:00\"]', 'https://flagcdn.com/km.svg'),
(54, 'Congo', 'CG', 'COG', '[\"242\"]', 'Brazzaville', 'Middle Africa', 'Africa', '[\"UTC+01:00\"]', 'https://flagcdn.com/cg.svg'),
(55, 'Congo (Democratic Republic of the)', 'CD', 'COD', '[\"243\"]', 'Kinshasa', 'Middle Africa', 'Africa', '[\"UTC+01:00\",\"UTC+02:00\"]', 'https://flagcdn.com/cd.svg'),
(56, 'Cook Islands', 'CK', 'COK', '[\"682\"]', 'Avarua', 'Polynesia', 'Oceania', '[\"UTC-10:00\"]', 'https://flagcdn.com/ck.svg'),
(57, 'Costa Rica', 'CR', 'CRI', '[\"506\"]', 'San José', 'Central America', 'Americas', '[\"UTC-06:00\"]', 'https://flagcdn.com/cr.svg'),
(58, 'Croatia', 'HR', 'HRV', '[\"385\"]', 'Zagreb', 'Southern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/hr.svg'),
(59, 'Cuba', 'CU', 'CUB', '[\"53\"]', 'Havana', 'Caribbean', 'Americas', '[\"UTC-05:00\"]', 'https://flagcdn.com/cu.svg'),
(60, 'Curaçao', 'CW', 'CUW', '[\"599\"]', 'Willemstad', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/cw.svg'),
(61, 'Cyprus', 'CY', 'CYP', '[\"357\"]', 'Nicosia', 'Southern Europe', 'Europe', '[\"UTC+02:00\"]', 'https://flagcdn.com/cy.svg'),
(62, 'Czech Republic', 'CZ', 'CZE', '[\"420\"]', 'Prague', 'Central Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/cz.svg'),
(63, 'Denmark', 'DK', 'DNK', '[\"45\"]', 'Copenhagen', 'Northern Europe', 'Europe', '[\"UTC-04:00\",\"UTC-03:00\",\"UTC-01:00\",\"UTC\",\"UTC+01:00\"]', 'https://flagcdn.com/dk.svg'),
(64, 'Djibouti', 'DJ', 'DJI', '[\"253\"]', 'Djibouti', 'Eastern Africa', 'Africa', '[\"UTC+03:00\"]', 'https://flagcdn.com/dj.svg'),
(65, 'Dominica', 'DM', 'DMA', '[\"1\"]', 'Roseau', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/dm.svg'),
(66, 'Dominican Republic', 'DO', 'DOM', '[\"1\"]', 'Santo Domingo', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/do.svg'),
(67, 'Ecuador', 'EC', 'ECU', '[\"593\"]', 'Quito', 'South America', 'Americas', '[\"UTC-06:00\",\"UTC-05:00\"]', 'https://flagcdn.com/ec.svg'),
(68, 'Egypt', 'EG', 'EGY', '[\"20\"]', 'Cairo', 'Northern Africa', 'Africa', '[\"UTC+02:00\"]', 'https://flagcdn.com/eg.svg'),
(69, 'El Salvador', 'SV', 'SLV', '[\"503\"]', 'San Salvador', 'Central America', 'Americas', '[\"UTC-06:00\"]', 'https://flagcdn.com/sv.svg'),
(70, 'Equatorial Guinea', 'GQ', 'GNQ', '[\"240\"]', 'Malabo', 'Middle Africa', 'Africa', '[\"UTC+01:00\"]', 'https://flagcdn.com/gq.svg'),
(71, 'Eritrea', 'ER', 'ERI', '[\"291\"]', 'Asmara', 'Eastern Africa', 'Africa', '[\"UTC+03:00\"]', 'https://flagcdn.com/er.svg'),
(72, 'Estonia', 'EE', 'EST', '[\"372\"]', 'Tallinn', 'Northern Europe', 'Europe', '[\"UTC+02:00\"]', 'https://flagcdn.com/ee.svg'),
(73, 'Ethiopia', 'ET', 'ETH', '[\"251\"]', 'Addis Ababa', 'Eastern Africa', 'Africa', '[\"UTC+03:00\"]', 'https://flagcdn.com/et.svg'),
(74, 'Falkland Islands (Malvinas)', 'FK', 'FLK', '[\"500\"]', 'Stanley', 'South America', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/fk.svg'),
(75, 'Faroe Islands', 'FO', 'FRO', '[\"298\"]', 'Tórshavn', 'Northern Europe', 'Europe', '[\"UTC+00:00\"]', 'https://flagcdn.com/fo.svg'),
(76, 'Fiji', 'FJ', 'FJI', '[\"679\"]', 'Suva', 'Melanesia', 'Oceania', '[\"UTC+12:00\"]', 'https://flagcdn.com/fj.svg'),
(77, 'Finland', 'FI', 'FIN', '[\"358\"]', 'Helsinki', 'Northern Europe', 'Europe', '[\"UTC+02:00\"]', 'https://flagcdn.com/fi.svg'),
(78, 'France', 'FR', 'FRA', '[\"33\"]', 'Paris', 'Western Europe', 'Europe', '[\"UTC-10:00\",\"UTC-09:30\",\"UTC-09:00\",\"UTC-08:00\",\"UTC-04:00\",\"UTC-03:00\",\"UTC+01:00\",\"UTC+02:00\",\"UTC+03:00\",\"UTC+04:00\",\"UTC+05:00\",\"UTC+10:00\",\"UTC+11:00\",\"UTC+12:00\"]', 'https://flagcdn.com/fr.svg'),
(79, 'French Guiana', 'GF', 'GUF', '[\"594\"]', 'Cayenne', 'South America', 'Americas', '[\"UTC-03:00\"]', 'https://flagcdn.com/gf.svg'),
(80, 'French Polynesia', 'PF', 'PYF', '[\"689\"]', 'Papeetē', 'Polynesia', 'Oceania', '[\"UTC-10:00\",\"UTC-09:30\",\"UTC-09:00\"]', 'https://flagcdn.com/pf.svg'),
(81, 'French Southern Territories', 'TF', 'ATF', '[\"262\"]', 'Port-aux-Français', 'Southern Africa', 'Africa', '[\"UTC+05:00\"]', 'https://flagcdn.com/tf.svg'),
(82, 'Gabon', 'GA', 'GAB', '[\"241\"]', 'Libreville', 'Middle Africa', 'Africa', '[\"UTC+01:00\"]', 'https://flagcdn.com/ga.svg'),
(83, 'Gambia', 'GM', 'GMB', '[\"220\"]', 'Banjul', 'Western Africa', 'Africa', '[\"UTC+00:00\"]', 'https://flagcdn.com/gm.svg'),
(84, 'Georgia', 'GE', 'GEO', '[\"995\"]', 'Tbilisi', 'Western Asia', 'Asia', '[\"UTC-04:00\"]', 'https://flagcdn.com/ge.svg'),
(85, 'Germany', 'DE', 'DEU', '[\"49\"]', 'Berlin', 'Central Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/de.svg'),
(86, 'Ghana', 'GH', 'GHA', '[\"233\"]', 'Accra', 'Western Africa', 'Africa', '[\"UTC\"]', 'https://flagcdn.com/gh.svg'),
(87, 'Gibraltar', 'GI', 'GIB', '[\"350\"]', 'Gibraltar', 'Southern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/gi.svg'),
(88, 'Greece', 'GR', 'GRC', '[\"30\"]', 'Athens', 'Southern Europe', 'Europe', '[\"UTC+02:00\"]', 'https://flagcdn.com/gr.svg'),
(89, 'Greenland', 'GL', 'GRL', '[\"299\"]', 'Nuuk', 'Northern America', 'Americas', '[\"UTC-04:00\",\"UTC-03:00\",\"UTC-01:00\",\"UTC+00:00\"]', 'https://flagcdn.com/gl.svg'),
(90, 'Grenada', 'GD', 'GRD', '[\"1\"]', 'St. George\'s', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/gd.svg'),
(91, 'Guadeloupe', 'GP', 'GLP', '[\"590\"]', 'Basse-Terre', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/gp.svg'),
(92, 'Guam', 'GU', 'GUM', '[\"1\"]', 'Hagåtña', 'Micronesia', 'Oceania', '[\"UTC+10:00\"]', 'https://flagcdn.com/gu.svg'),
(93, 'Guatemala', 'GT', 'GTM', '[\"502\"]', 'Guatemala City', 'Central America', 'Americas', '[\"UTC-06:00\"]', 'https://flagcdn.com/gt.svg'),
(94, 'Guernsey', 'GG', 'GGY', '[\"44\"]', 'St. Peter Port', 'Northern Europe', 'Europe', '[\"UTC+00:00\"]', 'https://flagcdn.com/gg.svg'),
(95, 'Guinea', 'GN', 'GIN', '[\"224\"]', 'Conakry', 'Western Africa', 'Africa', '[\"UTC\"]', 'https://flagcdn.com/gn.svg'),
(96, 'Guinea-Bissau', 'GW', 'GNB', '[\"245\"]', 'Bissau', 'Western Africa', 'Africa', '[\"UTC\"]', 'https://flagcdn.com/gw.svg'),
(97, 'Guyana', 'GY', 'GUY', '[\"592\"]', 'Georgetown', 'South America', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/gy.svg'),
(98, 'Haiti', 'HT', 'HTI', '[\"509\"]', 'Port-au-Prince', 'Caribbean', 'Americas', '[\"UTC-05:00\"]', 'https://flagcdn.com/ht.svg'),
(99, 'Heard Island and McDonald Islands', 'HM', 'HMD', '[\"672\"]', '', 'Antarctic', 'Antarctic', '[\"UTC+05:00\"]', 'https://flagcdn.com/hm.svg'),
(100, 'Vatican City', 'VA', 'VAT', '[\"379\"]', 'Vatican City', 'Southern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/va.svg'),
(101, 'Honduras', 'HN', 'HND', '[\"504\"]', 'Tegucigalpa', 'Central America', 'Americas', '[\"UTC-06:00\"]', 'https://flagcdn.com/hn.svg'),
(102, 'Hungary', 'HU', 'HUN', '[\"36\"]', 'Budapest', 'Central Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/hu.svg'),
(103, 'Hong Kong', 'HK', 'HKG', '[\"852\"]', 'City of Victoria', 'Eastern Asia', 'Asia', '[\"UTC+08:00\"]', 'https://flagcdn.com/hk.svg'),
(104, 'Iceland', 'IS', 'ISL', '[\"354\"]', 'Reykjavík', 'Northern Europe', 'Europe', '[\"UTC\"]', 'https://flagcdn.com/is.svg'),
(105, 'India', 'IN', 'IND', '[\"91\"]', 'New Delhi', 'Southern Asia', 'Asia', '[\"UTC+05:30\"]', 'https://flagcdn.com/in.svg'),
(106, 'Indonesia', 'ID', 'IDN', '[\"62\"]', 'Jakarta', 'South-Eastern Asia', 'Asia', '[\"UTC+07:00\",\"UTC+08:00\",\"UTC+09:00\"]', 'https://flagcdn.com/id.svg'),
(107, 'Ivory Coast', 'CI', 'CIV', '[\"225\"]', 'Yamoussoukro', 'Western Africa', 'Africa', '[\"UTC\"]', 'https://flagcdn.com/ci.svg'),
(108, 'Iran (Islamic Republic of)', 'IR', 'IRN', '[\"98\"]', 'Tehran', 'Southern Asia', 'Asia', '[\"UTC+03:30\"]', 'https://flagcdn.com/ir.svg'),
(109, 'Iraq', 'IQ', 'IRQ', '[\"964\"]', 'Baghdad', 'Western Asia', 'Asia', '[\"UTC+03:00\"]', 'https://flagcdn.com/iq.svg'),
(110, 'Ireland', 'IE', 'IRL', '[\"353\"]', 'Dublin', 'Northern Europe', 'Europe', '[\"UTC\"]', 'https://flagcdn.com/ie.svg'),
(111, 'Isle of Man', 'IM', 'IMN', '[\"44\"]', 'Douglas', 'Northern Europe', 'Europe', '[\"UTC+00:00\"]', 'https://flagcdn.com/im.svg'),
(112, 'Israel', 'IL', 'ISR', '[\"972\"]', 'Jerusalem', 'Western Asia', 'Asia', '[\"UTC+02:00\"]', 'https://flagcdn.com/il.svg'),
(113, 'Italy', 'IT', 'ITA', '[\"39\"]', 'Rome', 'Southern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/it.svg'),
(114, 'Jamaica', 'JM', 'JAM', '[\"1\"]', 'Kingston', 'Caribbean', 'Americas', '[\"UTC-05:00\"]', 'https://flagcdn.com/jm.svg'),
(115, 'Japan', 'JP', 'JPN', '[\"81\"]', 'Tokyo', 'Eastern Asia', 'Asia', '[\"UTC+09:00\"]', 'https://flagcdn.com/jp.svg'),
(116, 'Jersey', 'JE', 'JEY', '[\"44\"]', 'Saint Helier', 'Northern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/je.svg'),
(117, 'Jordan', 'JO', 'JOR', '[\"962\"]', 'Amman', 'Western Asia', 'Asia', '[\"UTC+03:00\"]', 'https://flagcdn.com/jo.svg'),
(118, 'Kazakhstan', 'KZ', 'KAZ', '[\"76\",\"77\"]', 'Nur-Sultan', 'Central Asia', 'Asia', '[\"UTC+05:00\",\"UTC+06:00\"]', 'https://flagcdn.com/kz.svg'),
(119, 'Kenya', 'KE', 'KEN', '[\"254\"]', 'Nairobi', 'Eastern Africa', 'Africa', '[\"UTC+03:00\"]', 'https://flagcdn.com/ke.svg'),
(120, 'Kiribati', 'KI', 'KIR', '[\"686\"]', 'South Tarawa', 'Micronesia', 'Oceania', '[\"UTC+12:00\",\"UTC+13:00\",\"UTC+14:00\"]', 'https://flagcdn.com/ki.svg'),
(121, 'Kuwait', 'KW', 'KWT', '[\"965\"]', 'Kuwait City', 'Western Asia', 'Asia', '[\"UTC+03:00\"]', 'https://flagcdn.com/kw.svg'),
(122, 'Kyrgyzstan', 'KG', 'KGZ', '[\"996\"]', 'Bishkek', 'Central Asia', 'Asia', '[\"UTC+06:00\"]', 'https://flagcdn.com/kg.svg'),
(123, 'Lao People\'s Democratic Republic', 'LA', 'LAO', '[\"856\"]', 'Vientiane', 'South-Eastern Asia', 'Asia', '[\"UTC+07:00\"]', 'https://flagcdn.com/la.svg'),
(124, 'Latvia', 'LV', 'LVA', '[\"371\"]', 'Riga', 'Northern Europe', 'Europe', '[\"UTC+02:00\"]', 'https://flagcdn.com/lv.svg'),
(125, 'Lebanon', 'LB', 'LBN', '[\"961\"]', 'Beirut', 'Western Asia', 'Asia', '[\"UTC+02:00\"]', 'https://flagcdn.com/lb.svg'),
(126, 'Lesotho', 'LS', 'LSO', '[\"266\"]', 'Maseru', 'Southern Africa', 'Africa', '[\"UTC+02:00\"]', 'https://flagcdn.com/ls.svg'),
(127, 'Liberia', 'LR', 'LBR', '[\"231\"]', 'Monrovia', 'Western Africa', 'Africa', '[\"UTC\"]', 'https://flagcdn.com/lr.svg'),
(128, 'Libya', 'LY', 'LBY', '[\"218\"]', 'Tripoli', 'Northern Africa', 'Africa', '[\"UTC+01:00\"]', 'https://flagcdn.com/ly.svg'),
(129, 'Liechtenstein', 'LI', 'LIE', '[\"423\"]', 'Vaduz', 'Central Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/li.svg'),
(130, 'Lithuania', 'LT', 'LTU', '[\"370\"]', 'Vilnius', 'Northern Europe', 'Europe', '[\"UTC+02:00\"]', 'https://flagcdn.com/lt.svg'),
(131, 'Luxembourg', 'LU', 'LUX', '[\"352\"]', 'Luxembourg', 'Western Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/lu.svg'),
(132, 'Macao', 'MO', 'MAC', '[\"853\"]', '', 'Eastern Asia', 'Asia', '[\"UTC+08:00\"]', 'https://flagcdn.com/mo.svg'),
(133, 'North Macedonia', 'MK', 'MKD', '[\"389\"]', 'Skopje', 'Southern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/mk.svg'),
(134, 'Madagascar', 'MG', 'MDG', '[\"261\"]', 'Antananarivo', 'Eastern Africa', 'Africa', '[\"UTC+03:00\"]', 'https://flagcdn.com/mg.svg'),
(135, 'Malawi', 'MW', 'MWI', '[\"265\"]', 'Lilongwe', 'Eastern Africa', 'Africa', '[\"UTC+02:00\"]', 'https://flagcdn.com/mw.svg'),
(136, 'Malaysia', 'MY', 'MYS', '[\"60\"]', 'Kuala Lumpur', 'South-Eastern Asia', 'Asia', '[\"UTC+08:00\"]', 'https://flagcdn.com/my.svg'),
(137, 'Maldives', 'MV', 'MDV', '[\"960\"]', 'Malé', 'Southern Asia', 'Asia', '[\"UTC+05:00\"]', 'https://flagcdn.com/mv.svg'),
(138, 'Mali', 'ML', 'MLI', '[\"223\"]', 'Bamako', 'Western Africa', 'Africa', '[\"UTC\"]', 'https://flagcdn.com/ml.svg'),
(139, 'Malta', 'MT', 'MLT', '[\"356\"]', 'Valletta', 'Southern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/mt.svg'),
(140, 'Marshall Islands', 'MH', 'MHL', '[\"692\"]', 'Majuro', 'Micronesia', 'Oceania', '[\"UTC+12:00\"]', 'https://flagcdn.com/mh.svg'),
(141, 'Martinique', 'MQ', 'MTQ', '[\"596\"]', 'Fort-de-France', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/mq.svg'),
(142, 'Mauritania', 'MR', 'MRT', '[\"222\"]', 'Nouakchott', 'Western Africa', 'Africa', '[\"UTC\"]', 'https://flagcdn.com/mr.svg'),
(143, 'Mauritius', 'MU', 'MUS', '[\"230\"]', 'Port Louis', 'Eastern Africa', 'Africa', '[\"UTC+04:00\"]', 'https://flagcdn.com/mu.svg'),
(144, 'Mayotte', 'YT', 'MYT', '[\"262\"]', 'Mamoudzou', 'Eastern Africa', 'Africa', '[\"UTC+03:00\"]', 'https://flagcdn.com/yt.svg'),
(145, 'Mexico', 'MX', 'MEX', '[\"52\"]', 'Mexico City', 'North America', 'Americas', '[\"UTC-08:00\",\"UTC-07:00\",\"UTC-06:00\"]', 'https://flagcdn.com/mx.svg'),
(146, 'Micronesia (Federated States of)', 'FM', 'FSM', '[\"691\"]', 'Palikir', 'Micronesia', 'Oceania', '[\"UTC+10:00\",\"UTC+11:00\"]', 'https://flagcdn.com/fm.svg'),
(147, 'Moldova (Republic of)', 'MD', 'MDA', '[\"373\"]', 'Chișinău', 'Eastern Europe', 'Europe', '[\"UTC+02:00\"]', 'https://flagcdn.com/md.svg'),
(148, 'Monaco', 'MC', 'MCO', '[\"377\"]', 'Monaco', 'Western Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/mc.svg'),
(149, 'Mongolia', 'MN', 'MNG', '[\"976\"]', 'Ulan Bator', 'Eastern Asia', 'Asia', '[\"UTC+07:00\",\"UTC+08:00\"]', 'https://flagcdn.com/mn.svg'),
(150, 'Montenegro', 'ME', 'MNE', '[\"382\"]', 'Podgorica', 'Southern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/me.svg'),
(151, 'Montserrat', 'MS', 'MSR', '[\"1\"]', 'Plymouth', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/ms.svg'),
(152, 'Morocco', 'MA', 'MAR', '[\"212\"]', 'Rabat', 'Northern Africa', 'Africa', '[\"UTC\"]', 'https://flagcdn.com/ma.svg'),
(153, 'Mozambique', 'MZ', 'MOZ', '[\"258\"]', 'Maputo', 'Eastern Africa', 'Africa', '[\"UTC+02:00\"]', 'https://flagcdn.com/mz.svg'),
(154, 'Myanmar', 'MM', 'MMR', '[\"95\"]', 'Naypyidaw', 'South-Eastern Asia', 'Asia', '[\"UTC+06:30\"]', 'https://flagcdn.com/mm.svg'),
(155, 'Namibia', 'NA', 'NAM', '[\"264\"]', 'Windhoek', 'Southern Africa', 'Africa', '[\"UTC+01:00\"]', 'https://flagcdn.com/na.svg'),
(156, 'Nauru', 'NR', 'NRU', '[\"674\"]', 'Yaren', 'Micronesia', 'Oceania', '[\"UTC+12:00\"]', 'https://flagcdn.com/nr.svg'),
(157, 'Nepal', 'NP', 'NPL', '[\"977\"]', 'Kathmandu', 'Southern Asia', 'Asia', '[\"UTC+05:45\"]', 'https://flagcdn.com/np.svg'),
(158, 'Netherlands', 'NL', 'NLD', '[\"31\"]', 'Amsterdam', 'Western Europe', 'Europe', '[\"UTC-04:00\",\"UTC+01:00\"]', 'https://flagcdn.com/nl.svg'),
(159, 'New Caledonia', 'NC', 'NCL', '[\"687\"]', 'Nouméa', 'Melanesia', 'Oceania', '[\"UTC+11:00\"]', 'https://flagcdn.com/nc.svg'),
(160, 'New Zealand', 'NZ', 'NZL', '[\"64\"]', 'Wellington', 'Australia and New Zealand', 'Oceania', '[\"UTC-11:00\",\"UTC-10:00\",\"UTC+12:00\",\"UTC+12:45\",\"UTC+13:00\"]', 'https://flagcdn.com/nz.svg'),
(161, 'Nicaragua', 'NI', 'NIC', '[\"505\"]', 'Managua', 'Central America', 'Americas', '[\"UTC-06:00\"]', 'https://flagcdn.com/ni.svg'),
(162, 'Niger', 'NE', 'NER', '[\"227\"]', 'Niamey', 'Western Africa', 'Africa', '[\"UTC+01:00\"]', 'https://flagcdn.com/ne.svg'),
(163, 'Nigeria', 'NG', 'NGA', '[\"234\"]', 'Abuja', 'Western Africa', 'Africa', '[\"UTC+01:00\"]', 'https://flagcdn.com/ng.svg'),
(164, 'Niue', 'NU', 'NIU', '[\"683\"]', 'Alofi', 'Polynesia', 'Oceania', '[\"UTC-11:00\"]', 'https://flagcdn.com/nu.svg'),
(165, 'Norfolk Island', 'NF', 'NFK', '[\"672\"]', 'Kingston', 'Australia and New Zealand', 'Oceania', '[\"UTC+11:30\"]', 'https://flagcdn.com/nf.svg'),
(166, 'Korea (Democratic People\'s Republic of)', 'KP', 'PRK', '[\"850\"]', 'Pyongyang', 'Eastern Asia', 'Asia', '[\"UTC+09:00\"]', 'https://flagcdn.com/kp.svg'),
(167, 'Northern Mariana Islands', 'MP', 'MNP', '[\"1\"]', 'Saipan', 'Micronesia', 'Oceania', '[\"UTC+10:00\"]', 'https://flagcdn.com/mp.svg'),
(168, 'Norway', 'NO', 'NOR', '[\"47\"]', 'Oslo', 'Northern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/no.svg'),
(169, 'Oman', 'OM', 'OMN', '[\"968\"]', 'Muscat', 'Western Asia', 'Asia', '[\"UTC+04:00\"]', 'https://flagcdn.com/om.svg'),
(170, 'Pakistan', 'PK', 'PAK', '[\"92\"]', 'Islamabad', 'Southern Asia', 'Asia', '[\"UTC+05:00\"]', 'https://flagcdn.com/pk.svg'),
(171, 'Palau', 'PW', 'PLW', '[\"680\"]', 'Ngerulmud', 'Micronesia', 'Oceania', '[\"UTC+09:00\"]', 'https://flagcdn.com/pw.svg'),
(172, 'Palestine, State of', 'PS', 'PSE', '[\"970\"]', 'Ramallah', 'Western Asia', 'Asia', '[\"UTC+02:00\"]', 'https://flagcdn.com/ps.svg'),
(173, 'Panama', 'PA', 'PAN', '[\"507\"]', 'Panama City', 'Central America', 'Americas', '[\"UTC-05:00\"]', 'https://flagcdn.com/pa.svg'),
(174, 'Papua New Guinea', 'PG', 'PNG', '[\"675\"]', 'Port Moresby', 'Melanesia', 'Oceania', '[\"UTC+10:00\"]', 'https://flagcdn.com/pg.svg'),
(175, 'Paraguay', 'PY', 'PRY', '[\"595\"]', 'Asunción', 'South America', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/py.svg'),
(176, 'Peru', 'PE', 'PER', '[\"51\"]', 'Lima', 'South America', 'Americas', '[\"UTC-05:00\"]', 'https://flagcdn.com/pe.svg'),
(177, 'Philippines', 'PH', 'PHL', '[\"63\"]', 'Manila', 'South-Eastern Asia', 'Asia', '[\"UTC+08:00\"]', 'https://flagcdn.com/ph.svg'),
(178, 'Pitcairn', 'PN', 'PCN', '[\"64\"]', 'Adamstown', 'Polynesia', 'Oceania', '[\"UTC-08:00\"]', 'https://flagcdn.com/pn.svg'),
(179, 'Poland', 'PL', 'POL', '[\"48\"]', 'Warsaw', 'Central Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/pl.svg'),
(180, 'Portugal', 'PT', 'PRT', '[\"351\"]', 'Lisbon', 'Southern Europe', 'Europe', '[\"UTC-01:00\",\"UTC\"]', 'https://flagcdn.com/pt.svg'),
(181, 'Puerto Rico', 'PR', 'PRI', '[\"1\"]', 'San Juan', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/pr.svg'),
(182, 'Qatar', 'QA', 'QAT', '[\"974\"]', 'Doha', 'Western Asia', 'Asia', '[\"UTC+03:00\"]', 'https://flagcdn.com/qa.svg'),
(183, 'Republic of Kosovo', 'XK', 'UNK', '[\"383\"]', 'Pristina', 'Eastern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/xk.svg'),
(184, 'Réunion', 'RE', 'REU', '[\"262\"]', 'Saint-Denis', 'Eastern Africa', 'Africa', '[\"UTC+04:00\"]', 'https://flagcdn.com/re.svg'),
(185, 'Romania', 'RO', 'ROU', '[\"40\"]', 'Bucharest', 'Eastern Europe', 'Europe', '[\"UTC+02:00\"]', 'https://flagcdn.com/ro.svg'),
(186, 'Russian Federation', 'RU', 'RUS', '[\"7\"]', 'Moscow', 'Eastern Europe', 'Europe', '[\"UTC+03:00\",\"UTC+04:00\",\"UTC+06:00\",\"UTC+07:00\",\"UTC+08:00\",\"UTC+09:00\",\"UTC+10:00\",\"UTC+11:00\",\"UTC+12:00\"]', 'https://flagcdn.com/ru.svg'),
(187, 'Rwanda', 'RW', 'RWA', '[\"250\"]', 'Kigali', 'Eastern Africa', 'Africa', '[\"UTC+02:00\"]', 'https://flagcdn.com/rw.svg'),
(188, 'Saint Barthélemy', 'BL', 'BLM', '[\"590\"]', 'Gustavia', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/bl.svg'),
(189, 'Saint Helena, Ascension and Tristan da Cunha', 'SH', 'SHN', '[\"290\"]', 'Jamestown', 'Western Africa', 'Africa', '[\"UTC+00:00\"]', 'https://flagcdn.com/sh.svg'),
(190, 'Saint Kitts and Nevis', 'KN', 'KNA', '[\"1\"]', 'Basseterre', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/kn.svg'),
(191, 'Saint Lucia', 'LC', 'LCA', '[\"1\"]', 'Castries', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/lc.svg'),
(192, 'Saint Martin (French part)', 'MF', 'MAF', '[\"590\"]', 'Marigot', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/mf.svg'),
(193, 'Saint Pierre and Miquelon', 'PM', 'SPM', '[\"508\"]', 'Saint-Pierre', 'Northern America', 'Americas', '[\"UTC-03:00\"]', 'https://flagcdn.com/pm.svg'),
(194, 'Saint Vincent and the Grenadines', 'VC', 'VCT', '[\"1\"]', 'Kingstown', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/vc.svg'),
(195, 'Samoa', 'WS', 'WSM', '[\"685\"]', 'Apia', 'Polynesia', 'Oceania', '[\"UTC+13:00\"]', 'https://flagcdn.com/ws.svg'),
(196, 'San Marino', 'SM', 'SMR', '[\"378\"]', 'City of San Marino', 'Southern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/sm.svg'),
(197, 'Sao Tome and Principe', 'ST', 'STP', '[\"239\"]', 'São Tomé', 'Middle Africa', 'Africa', '[\"UTC\"]', 'https://flagcdn.com/st.svg'),
(198, 'Saudi Arabia', 'SA', 'SAU', '[\"966\"]', 'Riyadh', 'Western Asia', 'Asia', '[\"UTC+03:00\"]', 'https://flagcdn.com/sa.svg'),
(199, 'Senegal', 'SN', 'SEN', '[\"221\"]', 'Dakar', 'Western Africa', 'Africa', '[\"UTC\"]', 'https://flagcdn.com/sn.svg'),
(200, 'Serbia', 'RS', 'SRB', '[\"381\"]', 'Belgrade', 'Southern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/rs.svg'),
(201, 'Seychelles', 'SC', 'SYC', '[\"248\"]', 'Victoria', 'Eastern Africa', 'Africa', '[\"UTC+04:00\"]', 'https://flagcdn.com/sc.svg'),
(202, 'Sierra Leone', 'SL', 'SLE', '[\"232\"]', 'Freetown', 'Western Africa', 'Africa', '[\"UTC\"]', 'https://flagcdn.com/sl.svg'),
(203, 'Singapore', 'SG', 'SGP', '[\"65\"]', 'Singapore', 'South-Eastern Asia', 'Asia', '[\"UTC+08:00\"]', 'https://flagcdn.com/sg.svg'),
(204, 'Sint Maarten (Dutch part)', 'SX', 'SXM', '[\"1\"]', 'Philipsburg', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/sx.svg'),
(205, 'Slovakia', 'SK', 'SVK', '[\"421\"]', 'Bratislava', 'Central Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/sk.svg'),
(206, 'Slovenia', 'SI', 'SVN', '[\"386\"]', 'Ljubljana', 'Southern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/si.svg'),
(207, 'Solomon Islands', 'SB', 'SLB', '[\"677\"]', 'Honiara', 'Melanesia', 'Oceania', '[\"UTC+11:00\"]', 'https://flagcdn.com/sb.svg'),
(208, 'Somalia', 'SO', 'SOM', '[\"252\"]', 'Mogadishu', 'Eastern Africa', 'Africa', '[\"UTC+03:00\"]', 'https://flagcdn.com/so.svg'),
(209, 'South Africa', 'ZA', 'ZAF', '[\"27\"]', 'Pretoria', 'Southern Africa', 'Africa', '[\"UTC+02:00\"]', 'https://flagcdn.com/za.svg'),
(210, 'South Georgia and the South Sandwich Islands', 'GS', 'SGS', '[\"500\"]', 'King Edward Point', 'South America', 'Americas', '[\"UTC-02:00\"]', 'https://flagcdn.com/gs.svg'),
(211, 'Korea (Republic of)', 'KR', 'KOR', '[\"82\"]', 'Seoul', 'Eastern Asia', 'Asia', '[\"UTC+09:00\"]', 'https://flagcdn.com/kr.svg'),
(212, 'Spain', 'ES', 'ESP', '[\"34\"]', 'Madrid', 'Southern Europe', 'Europe', '[\"UTC\",\"UTC+01:00\"]', 'https://flagcdn.com/es.svg'),
(213, 'Sri Lanka', 'LK', 'LKA', '[\"94\"]', 'Sri Jayawardenepura Kotte', 'Southern Asia', 'Asia', '[\"UTC+05:30\"]', 'https://flagcdn.com/lk.svg'),
(214, 'Sudan', 'SD', 'SDN', '[\"249\"]', 'Khartoum', 'Northern Africa', 'Africa', '[\"UTC+03:00\"]', 'https://flagcdn.com/sd.svg'),
(215, 'South Sudan', 'SS', 'SSD', '[\"211\"]', 'Juba', 'Middle Africa', 'Africa', '[\"UTC+03:00\"]', 'https://flagcdn.com/ss.svg'),
(216, 'Suriname', 'SR', 'SUR', '[\"597\"]', 'Paramaribo', 'South America', 'Americas', '[\"UTC-03:00\"]', 'https://flagcdn.com/sr.svg'),
(217, 'Svalbard and Jan Mayen', 'SJ', 'SJM', '[\"47\"]', 'Longyearbyen', 'Northern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/sj.svg'),
(218, 'Swaziland', 'SZ', 'SWZ', '[\"268\"]', 'Mbabane', 'Southern Africa', 'Africa', '[\"UTC+02:00\"]', 'https://flagcdn.com/sz.svg'),
(219, 'Sweden', 'SE', 'SWE', '[\"46\"]', 'Stockholm', 'Northern Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/se.svg'),
(220, 'Switzerland', 'CH', 'CHE', '[\"41\"]', 'Bern', 'Central Europe', 'Europe', '[\"UTC+01:00\"]', 'https://flagcdn.com/ch.svg'),
(221, 'Syrian Arab Republic', 'SY', 'SYR', '[\"963\"]', 'Damascus', 'Western Asia', 'Asia', '[\"UTC+02:00\"]', 'https://flagcdn.com/sy.svg'),
(222, 'Taiwan', 'TW', 'TWN', '[\"886\"]', 'Taipei', 'Eastern Asia', 'Asia', '[\"UTC+08:00\"]', 'https://flagcdn.com/tw.svg'),
(223, 'Tajikistan', 'TJ', 'TJK', '[\"992\"]', 'Dushanbe', 'Central Asia', 'Asia', '[\"UTC+05:00\"]', 'https://flagcdn.com/tj.svg'),
(224, 'Tanzania, United Republic of', 'TZ', 'TZA', '[\"255\"]', 'Dodoma', 'Eastern Africa', 'Africa', '[\"UTC+03:00\"]', 'https://flagcdn.com/tz.svg'),
(225, 'Thailand', 'TH', 'THA', '[\"66\"]', 'Bangkok', 'South-Eastern Asia', 'Asia', '[\"UTC+07:00\"]', 'https://flagcdn.com/th.svg'),
(226, 'Timor-Leste', 'TL', 'TLS', '[\"670\"]', 'Dili', 'South-Eastern Asia', 'Asia', '[\"UTC+09:00\"]', 'https://flagcdn.com/tl.svg'),
(227, 'Togo', 'TG', 'TGO', '[\"228\"]', 'Lomé', 'Western Africa', 'Africa', '[\"UTC\"]', 'https://flagcdn.com/tg.svg'),
(228, 'Tokelau', 'TK', 'TKL', '[\"690\"]', 'Fakaofo', 'Polynesia', 'Oceania', '[\"UTC+13:00\"]', 'https://flagcdn.com/tk.svg'),
(229, 'Tonga', 'TO', 'TON', '[\"676\"]', 'Nuku\'alofa', 'Polynesia', 'Oceania', '[\"UTC+13:00\"]', 'https://flagcdn.com/to.svg'),
(230, 'Trinidad and Tobago', 'TT', 'TTO', '[\"1\"]', 'Port of Spain', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/tt.svg'),
(231, 'Tunisia', 'TN', 'TUN', '[\"216\"]', 'Tunis', 'Northern Africa', 'Africa', '[\"UTC+01:00\"]', 'https://flagcdn.com/tn.svg'),
(232, 'Turkey', 'TR', 'TUR', '[\"90\"]', 'Ankara', 'Western Asia', 'Asia', '[\"UTC+03:00\"]', 'https://flagcdn.com/tr.svg'),
(233, 'Turkmenistan', 'TM', 'TKM', '[\"993\"]', 'Ashgabat', 'Central Asia', 'Asia', '[\"UTC+05:00\"]', 'https://flagcdn.com/tm.svg'),
(234, 'Turks and Caicos Islands', 'TC', 'TCA', '[\"1\"]', 'Cockburn Town', 'Caribbean', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/tc.svg'),
(235, 'Tuvalu', 'TV', 'TUV', '[\"688\"]', 'Funafuti', 'Polynesia', 'Oceania', '[\"UTC+12:00\"]', 'https://flagcdn.com/tv.svg'),
(236, 'Uganda', 'UG', 'UGA', '[\"256\"]', 'Kampala', 'Eastern Africa', 'Africa', '[\"UTC+03:00\"]', 'https://flagcdn.com/ug.svg'),
(237, 'Ukraine', 'UA', 'UKR', '[\"380\"]', 'Kyiv', 'Eastern Europe', 'Europe', '[\"UTC+02:00\"]', 'https://flagcdn.com/ua.svg'),
(238, 'United Arab Emirates', 'AE', 'ARE', '[\"971\"]', 'Abu Dhabi', 'Western Asia', 'Asia', '[\"UTC+04:00\"]', 'https://flagcdn.com/ae.svg'),
(239, 'United Kingdom of Great Britain and Northern Ireland', 'GB', 'GBR', '[\"44\"]', 'London', 'Northern Europe', 'Europe', '[\"UTC-08:00\",\"UTC-05:00\",\"UTC-04:00\",\"UTC-03:00\",\"UTC-02:00\",\"UTC\",\"UTC+01:00\",\"UTC+02:00\",\"UTC+06:00\"]', 'https://flagcdn.com/gb.svg'),
(240, 'United States of America', 'US', 'USA', '[\"1\"]', 'Washington, D.C.', 'Northern America', 'Americas', '[\"UTC-12:00\",\"UTC-11:00\",\"UTC-10:00\",\"UTC-09:00\",\"UTC-08:00\",\"UTC-07:00\",\"UTC-06:00\",\"UTC-05:00\",\"UTC-04:00\",\"UTC+10:00\",\"UTC+12:00\"]', 'https://flagcdn.com/us.svg'),
(241, 'Uruguay', 'UY', 'URY', '[\"598\"]', 'Montevideo', 'South America', 'Americas', '[\"UTC-03:00\"]', 'https://flagcdn.com/uy.svg'),
(242, 'Uzbekistan', 'UZ', 'UZB', '[\"998\"]', 'Tashkent', 'Central Asia', 'Asia', '[\"UTC+05:00\"]', 'https://flagcdn.com/uz.svg'),
(243, 'Vanuatu', 'VU', 'VUT', '[\"678\"]', 'Port Vila', 'Melanesia', 'Oceania', '[\"UTC+11:00\"]', 'https://flagcdn.com/vu.svg'),
(244, 'Venezuela (Bolivarian Republic of)', 'VE', 'VEN', '[\"58\"]', 'Caracas', 'South America', 'Americas', '[\"UTC-04:00\"]', 'https://flagcdn.com/ve.svg'),
(245, 'Vietnam', 'VN', 'VNM', '[\"84\"]', 'Hanoi', 'South-Eastern Asia', 'Asia', '[\"UTC+07:00\"]', 'https://flagcdn.com/vn.svg'),
(246, 'Wallis and Futuna', 'WF', 'WLF', '[\"681\"]', 'Mata-Utu', 'Polynesia', 'Oceania', '[\"UTC+12:00\"]', 'https://flagcdn.com/wf.svg'),
(247, 'Western Sahara', 'EH', 'ESH', '[\"212\"]', 'El Aaiún', 'Northern Africa', 'Africa', '[\"UTC+00:00\"]', 'https://flagcdn.com/eh.svg'),
(248, 'Yemen', 'YE', 'YEM', '[\"967\"]', 'Sana\'a', 'Western Asia', 'Asia', '[\"UTC+03:00\"]', 'https://flagcdn.com/ye.svg'),
(249, 'Zambia', 'ZM', 'ZMB', '[\"260\"]', 'Lusaka', 'Eastern Africa', 'Africa', '[\"UTC+02:00\"]', 'https://flagcdn.com/zm.svg'),
(250, 'Zambia', 'ZM', 'ZMB', '[\"260\"]', 'Lusaka', 'Eastern Africa', 'Africa', '[\"UTC+02:00\"]', 'https://flagcdn.com/zm.svg');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `area_length` varchar(255) NOT NULL,
  `area_breadth` varchar(255) NOT NULL,
  `floors` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `estimated_budget` varchar(255) NOT NULL,
  `customer_budget` varchar(255) NOT NULL,
  `time_duration` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `notes` text DEFAULT NULL,
  `images` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `project_title`, `area_length`, `area_breadth`, `floors`, `material`, `estimated_budget`, `customer_budget`, `time_duration`, `location`, `notes`, `images`, `created_at`) VALUES
(1, 1, 'Test Project Helllo', '120', '100', '2', 'Own', '12000', '12000', '2Months', 'Test Location', NULL, '1723311897_12b00cedb573548c6214.jpg', '2024-08-10 23:14:57'),
(2, 1, 'New Project', '120', '100', '1', 'Own', '12000', '12000', '2Months', 'Test Location', NULL, '1723311897_12b00cedb573548c6214.jpg', '2024-08-10 23:14:57'),
(3, 1, 'New Project', '120', '100', '1', 'Own', '12000', '12000', '2Months', 'Test Location', NULL, '1723311897_12b00cedb573548c6214.jpg', '2024-08-10 23:14:57'),
(4, 1, 'New Project', '120', '100', '1', 'Own', '12000', '12000', '2Months', 'Test Location', NULL, '1723311897_12b00cedb573548c6214.jpg', '2024-08-10 23:14:57'),
(5, 2, 'New Test Project', '120', '80', '1', 'Own', '12000', '12000', '2Months', 'Test Location', '<p>New Test Project Content&nbsp;<span style=\"background-color: var(--white); color: var(--bs-body-color); font-family: var(--body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">New Test Project Content&nbsp;</span><span style=\"background-color: var(--white); color: var(--bs-body-color); font-family: var(--body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">New Test Project Content&nbsp;</span><span style=\"background-color: var(--white); color: var(--bs-body-color); font-family: var(--body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">New Test Project Content</span><span style=\"background-color: var(--white); color: var(--bs-body-color); font-family: var(--body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">New Test Project Content</span><span style=\"background-color: var(--white); color: var(--bs-body-color); font-family: var(--body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">New Test Project Content&nbsp;</span><span style=\"background-color: var(--white); color: var(--bs-body-color); font-family: var(--body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">New Test Project Content v</span><span style=\"background-color: var(--white); color: var(--bs-body-color); font-family: var(--body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">New Test Project Content</span><span style=\"background-color: var(--white); color: var(--bs-body-color); font-family: var(--body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">New Test Project Content</span><span style=\"background-color: var(--white); color: var(--bs-body-color); font-family: var(--body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">New Test Project Content</span><span style=\"background-color: var(--white); color: var(--bs-body-color); font-family: var(--body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">New Test Project Content</span><span style=\"background-color: var(--white); color: var(--bs-body-color); font-family: var(--body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">New Test Project Content</span><span style=\"background-color: var(--white); color: var(--bs-body-color); font-family: var(--body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">New Test Project Content</span><span style=\"background-color: var(--white); color: var(--bs-body-color); font-family: var(--body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">New Test Project Content</span><span style=\"background-color: var(--white); color: var(--bs-body-color); font-family: var(--body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">New Test Project Content</span><span style=\"background-color: var(--white); color: var(--bs-body-color); font-family: var(--body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">New Test Project Content</span><br></p>', '1728315902_1319ea708b7c6ad5455f.jpg', '2024-10-07 21:15:02'),
(6, 3, 'Build New House ', '150', '100', '1', 'Own', '50000', '50000', '5Months', 'Test Location', '<p>The House needs to build in modern architecture&nbsp; within 5 months 2 bedroom 1 kitchen and bathroom.&nbsp;</p>', '1728317847_4e7d95a0316e76e3cd59.jpg', '2024-10-07 21:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `project_bids`
--

CREATE TABLE `project_bids` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `contractor_id` int(11) NOT NULL,
  `bid_amount` text NOT NULL,
  `cover_letter` text NOT NULL,
  `delivery_time` text NOT NULL,
  `files` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_bids`
--

INSERT INTO `project_bids` (`id`, `project_id`, `contractor_id`, `bid_amount`, `cover_letter`, `delivery_time`, `files`) VALUES
(1, 1, 3, '1100', 'Test Cover Letter', '2 Months', '1728315345_5e2cc2ed38352d904c7e.jpg'),
(2, 2, 3, '1200', 'Test Cover Letter', '2 Months', '1728316036_3cc2719731d90d2ba8d2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `email`, `password`, `phone`, `address`, `city`, `country`, `role`, `profile_image`, `created_at`) VALUES
(1, 'Rajendra', 'Panwar', NULL, 'rajendrapanwar8170@gmail.com', '$2y$10$q/ACn9d3RtC6TY6ZkhzDxu8nvViI8j99ZHRuE3t3xchMR0uQundO.', '9389882749', 'Vijay Colony', 'Dehradun', 'IND', 'customer', '1728314612_91ad9d146d7bc4885e29.jpg', '2024-07-10 13:29:31'),
(2, 'Manish', 'Kumar', NULL, 'manishkumarce13@gmail.com', '$2y$10$gX9.WutY7phktMfx0JCoIeB8FXgjuxUY12OLR/buw7WHBOXqtEp4i', '8449745877', 'Rajbhawan', 'Dehradun', 'IND', 'customer', NULL, '2024-08-11 12:29:42'),
(3, 'Rajendra', 'Panwar', NULL, 'panwarraju66@gmail.com', '$2y$10$z0cTtqL3adl483I.zktquuWiMKLZaZ6nkHgryCqWXKpWRBwnRKOQa', '8193976306', 'Vijay Colony', 'Dehradun', 'IND', 'contractor', '1728315088_6e8629e23a339db3968d.jpg', '2024-10-07 20:59:32'),
(4, 'Test', 'Test', NULL, 'Test@gmail.com', '$2y$10$amr9ofm.rHXAAnDypdiIbev525sOJB7HjcblDDXFYxqft3CblxbCC', '1234567890', 'Rajbhawan', 'Dehradun', 'IND', 'customer', '1728315812_333c95f53afc8a68ac69.jpg', '2024-10-07 21:12:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_bids`
--
ALTER TABLE `project_bids`
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
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_bids`
--
ALTER TABLE `project_bids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
