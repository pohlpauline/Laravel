-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Jun 2024 um 15:51
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `dd_pauline_welpenblog`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `abouts`
--

INSERT INTO `abouts` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Wir sind ganz junge verspielte Welpen, die es mögen, mit dir zu spielen. Nebenbei mögen wir es sehr, wenn du uns fütterst und uns lieb hast. Auch beim schlechten Wetter müssen wir nach draußen. Nur spazieren geht nicht, unsere Besitzer müssen mit uns spielen, kuscheln und das Wichtigste, uns gut erziehen können, denn bissig und launisch sind wir bis zum 8. Monat. Danach können wir ganz zahm sein und hören gerne auf unsere Besitzer.', NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `betreff` varchar(255) DEFAULT NULL,
  `hundename` varchar(255) DEFAULT NULL,
  `kommentar` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `betreff`, `hundename`, `kommentar`, `created_at`, `updated_at`) VALUES
(1, 1, 'nach der Hand schnappen', 'Jula', 'Jula ist 3 Monate alt und gerade ganz schön frech. Wenn ihr was nicht gefällt bzw. wenn man nicht mit ihr spielen möchte, dann schnappt sie nach der Hand.', '2024-03-31 09:53:01', '2024-04-16 08:13:12'),
(2, 2, 'Gassi gehen', 'Sussi', 'Sussi hat schreckliche Angst an einer Hauptstraße entlanglaufen, wo viele Autos fahren. Sie lässt sich trotz beruhigender Worte nicht beruhigen. Ein Spielzeug oder Leckerlis lenken sie nicht ab.', NULL, '2024-04-04 13:58:39'),
(3, 1, 'Spielen', 'Jula', 'Jula ist jetzt 6 Monate alt. Sie hat sich schon etwas in ihrem Verhalten gebessert. Sie spielt sehr gerne mit ihren Kuscheltieren und den Ball bringt sie etwas zögerlich zurück. Am liebsten mag sie fangen zu spielen.', '2024-04-03 11:46:43', '2024-04-04 13:52:35'),
(9, 3, 'Draußen fressen', 'Boss', 'Boss ist 4 Monate alt. Boss frisst draußen unerlaubt Dinge, die er findet. Mal sind es Eichen, mal ist es trockenes Brot, der eigentlich für die Enten gedacht ist. Aber beim letzten Spaziergang war es heftig. Boss hat ganz schnell Glasscherben in seinen Maul genommen. Ich musste schnell reagieren, damit Boss die Glasscherben nicht herunterschluckt. Ich musste die Glasscherben aus seinem Maul herausfischen.', '2024-04-04 14:09:54', '2024-04-04 14:09:54'),
(10, 1, 'von der Leine lassen', 'Jula', 'Eigentlich ist Jula schon gut abrufbar. Aber in letzter Zeit, wenn ich sie von der Leine lasse, dann rennt sie los wie ein geölter Blitz. Sie ist kaum zu bremsen und will nicht auf mich hören. Eher musste ich hinter ihr herrennen, weil ich sie nicht mehr gesehen habe. Sie rennt dann dort hin, wo es ihr gefällt.', '2024-04-04 14:16:54', '2024-04-04 14:16:54'),
(11, 1, 'Hallo1', 'Jula', 'Mein Hund heißt Jula', '2024-04-16 08:15:05', '2024-04-16 08:15:05'),
(12, 4, 'Befehle beibringen', 'Struppi', 'Struppi verwechselt ganz oft die Befehle Sitz und Platz.', '2024-06-02 11:45:36', '2024-06-02 11:45:58');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `failed_jobs`
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
-- Tabellenstruktur für Tabelle `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_31_064428_create_comments_table', 1),
(6, '2024_04_02_153717_create_abouts_table', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `hundeinfo` varchar(255) DEFAULT NULL,
  `hundename` varchar(255) DEFAULT NULL,
  `erfahrungen` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `hundeinfo`, `hundename`, `erfahrungen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lina', 'test@test.de', NULL, '$2y$12$Ns30/QxQI9d9kpht7nC0uuuN8p671gv1hPL.spxnXeKo9oc1lpDSS', NULL, 'Jula', 'Jula ist ein schwarzer Gooldendoodle.\r\nSie ist total verspielt.', NULL, '2024-03-31 09:52:14', '2024-04-16 08:15:57'),
(2, 'Bob', 'bob@bob.de', NULL, '$2y$12$S8QASoKgeyWrqPywb2XvZ.V3JiyuJm7N434SoLeM99O3jmAUeJFIS', NULL, 'Sussi', 'Sussi ist ein kleiner Dackel. Sehr schmusig, liegt gerne vor dem Kamin, wo es warm ist. Sie ist eine treue Begleiterin.', NULL, '2024-04-02 15:50:53', '2024-04-02 16:23:28'),
(3, 'Anja', 'anja@anja.de', NULL, '$2y$12$86cEDJlwgFbfBvva9AkpD.WyMsARAoSA2QB7cBjzJwTgIgHK27726', NULL, 'Boss', 'Boss ist ein Rottweiler, der ein guter Wachhund ist. Boss hört sehr gut auf Kommandos. Fremde haben Angst vor ihm, aber er ist nicht aggressiv, sondern beobachtet seine Umgebung.', NULL, '2024-04-04 14:01:11', '2024-04-04 14:01:11'),
(4, 'Hans', 'hans@hans.de', NULL, '$2y$12$nx2/xvsDer01dBxCtjXuu.0Bp0AgFvEFxWRzGR7WQv1Z48tltEkVC', NULL, 'Struppi', 'Struppi versteht jetzt die Befehle besser.', NULL, '2024-06-02 11:44:08', '2024-06-02 11:49:56');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indizes für die Tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indizes für die Tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indizes für die Tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT für Tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
