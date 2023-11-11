-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2023. Nov 11. 13:30
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `cikk`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(20) NOT NULL,
  `preview` text NOT NULL,
  `content_text` text NOT NULL,
  `category` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `content`
--

INSERT INTO `content` (`id`, `title`, `author`, `preview`, `content_text`, `category`, `created_at`, `updated_at`) VALUES
(28, 'Az Univerzum Titkai: Fekete Lyukak És Időutazás', 'Hrubák Axel', 'A fekete lyukak és az időutazás rejtelmei mélyebben vizsgálva. Hogyan formálják át az űrkutatás jövőjét?', 'Az elmúlt évtizedekben az űrkutatás felfedezéseinek egyik leglenyűgözőbb területe a fekete lyukak és az időutazás rejtelmeinek feltárása. A fekete lyukak, melyek gravitációs vonzásuk miatt semmiből sem engednek távozni, különleges jelenségeket és időbeli dilatációt eredményeznek. Az időutazás elméletei még mindig vitatottak, de azok a kérdések, hogy lehetséges-e visszamenni vagy előre utazni az időben, izgalmas kihívás elé állítják a.', 'Tudomány', '2023-11-11 10:34:04', '2023-11-11 12:25:07'),
(29, 'A Genetika Forradalma: CRISPR-Cas9 és Az Élet Módosítása', 'Axel', 'A CRISPR-Cas9 forradalma és a genetikai tervezés térhódítása. Milyen etikai és tudományos kérdéseket vet fel?', 'A CRISPR-Cas9 genetikai rendszer forradalmasította a génmódosítást és a génszerkesztést. Az emberiség most már képes pontosan manipulálni az élő organizmusok genetikai kódját, nyitva hagyva az utat olyan területeken, mint a génszerkesztett gyógyítás és az új növényfajták létrehozása. Ugyanakkor ezek a technológiák komoly etikai kérdéseket vetnek fel a természeti rend megváltoztatásának következményeiről és az emberi faj jövőjéről.', 'Tudomány', '2023-11-11 10:35:02', NULL),
(30, 'A Magyar Startup Szektor: Innováció és Kihívások', 'Axel', 'Magyarország dinamikusan fejlődő startup ökoszisztémája. Miben rejlik a siker és milyen kihívásokkal néz szembe?', 'Magyarország dinamikusan fejlődő startup ökoszisztémája érdekfeszítő fejezetet nyit a vállalkozói innováció világában. Az új vállalkozások szerepe nem csak az innovációban rejlik, hanem a gazdasági növekedés és a munkahelyteremtés terén is.', 'Gazdaság', '2023-11-11 10:35:43', NULL),
(31, 'A Magyar Turizmus Új Kihívásai és Perspektívái', 'Axel', 'Magyarország turisztikai szektorának alakulása. Milyen lehetőségek és kihívások várnak a turizmus terén?', 'A magyar turisztikai szektor az utóbbi években érdekes fejlődésen ment keresztül. A fenntartható turizmus, az online szolgáltatások térhódítása és az egészségi helyzet hatása mind olyan tényezők, amelyek új kihívások elé állítják a magyar turizmust, miközben lehetőségeket is teremtenek az ágazat számára.', 'Gazdaság', '2023-11-11 10:36:28', NULL),
(32, 'Az Egyesült Államok Űrkutatási Projekciói a 21. Században', 'Axel', 'Az USA űrkutatási tervei és céljai a 21. században. Milyen lépéseket tesznek az űrkutatás területén?', 'Az Egyesült Államok továbbra is a világ vezetője az űrkutatás területén. A NASA és magáncégek egyre ambiciózusabb tervei között szerepel a Marsra való utazás és az űrhajózás új korszakának megnyitása.', 'Külföld', '2023-11-11 10:37:03', '2023-11-11 12:17:56'),
(33, 'Az Európai Unió Zöld Gazdasága és Klímapolitikája', 'Axel', 'Az EU elkötelezettsége a zöld gazdaság és klíma megoldásai iránt. Milyen intézkedésekkel próbálják elérni a fenntarthatóságot?', 'Az Európai Unió szilárdan elkötelezte magát a zöld gazdaság és a klíma megoldásai iránt. A klímaváltozás elleni küzdelem és a fenntarthatóság az EU politikájának középpontjában áll, ahogy az unió keresi azokat az innovatív megoldásokat, amelyek által még fenntarthatóbbá teheti gazdaságát.', 'Külföld', '2023-11-11 10:37:59', NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Axel', '$2y$10$1lkBrusmB7T0MzsxVqb7LeLA0thtHlxYOU6LpYneOb8Ve5LIZFxSu', '2023-11-06 14:28:14', NULL);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
