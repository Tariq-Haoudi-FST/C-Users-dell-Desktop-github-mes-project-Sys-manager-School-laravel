-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 25 jan. 2024 à 15:07
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sys_manager_school`
--

-- --------------------------------------------------------

--
-- Structure de la table `absences`
--

CREATE TABLE `absences` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `jour` varchar(100) NOT NULL,
  `creneau` varchar(100) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `fileUpload` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `absences`
--

INSERT INTO `absences` (`id`, `student_id`, `jour`, `creneau`, `reason`, `fileUpload`) VALUES
(1, 3, '', '', '', ''),
(2, 3, 'monday', '9:00-10:30', 'nbbb', ''),
(3, 3, 'monday', '9:00-10:30', 'nbbb', ''),
(4, 3, 'monday', '9:00-10:30', 'nbbb', ''),
(5, 3, 'monday', '9:00-10:30', 'sdffdssdf', ''),
(6, 3, 'monday', '9:00-10:30', 'sdffdssdf', ''),
(7, 3, 'wednesday', '14:45-16:15', 'khvakufv', ''),
(8, 3, 'monday', '13:00-14:30', 'bsldkgbv', ''),
(9, 3, 'monday', '13:00-14:30', 'bsldkgbv', ''),
(10, 3, 'tuesday', '16:s30-18:00', 'gsdq', ''),
(11, 3, 'tuesday', '16:s30-18:00', 'gsdq', ''),
(12, 3, 'monday', '9:00-10:30', 'dkgqnsl', 0x75706c6f6164732f313131313131313131312e504e47),
(13, 3, 'monday', '9:00-10:30', 'knssq', 0x75706c6f6164732f33332e504e47);

-- --------------------------------------------------------

--
-- Structure de la table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `content`, `user_id`) VALUES
(1, 'Announcement 1', 'Content of Announcement 1', 123),
(3, 'Announcement 3', 'Content of Announcement 3000000000', 789),
(4, 'Announcement 40', 'Content of Announcement 4', 0),
(5, 'Announcement 500', 'Content of Announcement 5', 0),
(6, 'Announcement 60', 'Content of Announcement 6', 0);

-- --------------------------------------------------------

--
-- Structure de la table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `jour` varchar(100) NOT NULL,
  `creneau` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `appointments`
--

INSERT INTO `appointments` (`id`, `student_id`, `teacher`, `jour`, `creneau`, `details`) VALUES
(7, 0, 'Nacer', 'monday', '9:00-10:30', 'Bghit'),
(8, 3, 'Nacer', 'monday', '9:00-10:30', 'Bghit');

-- --------------------------------------------------------

--
-- Structure de la table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `departments`
--

INSERT INTO `departments` (`id`, `dept`) VALUES
(1, 'Marketing dyal bsa'),
(2, 'Sales'),
(3, 'Human Resources'),
(4, 'Finance'),
(5, 'IT'),
(6, ''),
(7, 'Research and Development'),
(8, 'Operations'),
(11, ''),
(12, ''),
(13, ''),
(14, ''),
(16, 'Science'),
(17, 'Science');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `filieres`
--

CREATE TABLE `filieres` (
  `id` int(11) NOT NULL,
  `filiere` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `filieres`
--

INSERT INTO `filieres` (`id`, `filiere`) VALUES
(2, 'filiere-20'),
(3, 'filiere-3'),
(4, 'filiere-4'),
(5, 'filiere-5'),
(6, 'filiere-6'),
(7, 'filiere-7'),
(8, 'filiere-8'),
(9, 'filiere-9'),
(10, 'filiere-10'),
(11, 'Mathematics');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
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
-- Structure de la table `professors`
--

CREATE TABLE `professors` (
  `id` int(11) NOT NULL,
  `nom_prenom` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `date_de_naissance` varchar(100) NOT NULL,
  `cin` varchar(100) NOT NULL,
  `filiere` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `professors`
--

INSERT INTO `professors` (`id`, `nom_prenom`, `adresse`, `date_de_naissance`, `cin`, `filiere`, `department`) VALUES
(2, 'Jane Smith', '456 Oak St', '1975-05-15', 'B789012', 'Mathematics', 'Science'),
(3, 'Bob Johnson', '789 Pine St', '1988-09-20', 'C345678', 'Electrical Engineering', 'Engineering'),
(4, 'Alice Brown', '101 Elm St', '1982-03-10', 'D901234', 'Physics', 'Science'),
(5, 'Charlie Wilson', '222 Maple St', '1977-12-05', 'E567890', 'Chemistry', 'Science'),
(6, 'Eva Davis', '333 Cedar St', '1990-06-25', 'F123456', 'Biology', 'Science'),
(7, 'Frank Miller', '444 Birch St', '1985-08-15', 'G789012', 'Mechanical Engineering', 'Engineering'),
(8, 'Grace Taylor', '555 Walnut St', '1972-11-30', 'H345678', 'Environmental Science', 'Science'),
(11, 'EL ASRI Nacer', '456 Oak St', '1975-05-15', 'B789012', 'Mathematics', 'Science');

-- --------------------------------------------------------

--
-- Structure de la table `recommendations`
--

CREATE TABLE `recommendations` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `module` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `recommendations`
--

INSERT INTO `recommendations` (`id`, `student_id`, `teacher`, `module`, `details`) VALUES
(9, 0, 'Nacer', 'nacer', 'baba'),
(10, 3, 'Nacer', 'nacer', 'abna');

-- --------------------------------------------------------

--
-- Structure de la table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `report`
--

INSERT INTO `report` (`id`, `student_id`, `department`, `material`, `details`) VALUES
(1, 3, 'info', 'jlija', 'Thersat mskina ta7t 3la rkabiha');

-- --------------------------------------------------------

--
-- Structure de la table `room_schedules`
--

CREATE TABLE `room_schedules` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `student_classes`
--

CREATE TABLE `student_classes` (
  `id` int(11) NOT NULL,
  `date_de_naissance` varchar(100) NOT NULL,
  `adresse` varchar(500) NOT NULL,
  `nom_prenom` varchar(100) NOT NULL,
  `code_massar` varchar(100) NOT NULL,
  `cin` varchar(100) NOT NULL,
  `filiere` varchar(100) NOT NULL,
  `Groupe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `student_classes`
--

INSERT INTO `student_classes` (`id`, `date_de_naissance`, `adresse`, `nom_prenom`, `code_massar`, `cin`, `filiere`, `Groupe`) VALUES
(1, '1990-01-01', '123 Main Street', 'John Doe', 'ABC123', '1234567890', 'Computer Science', 'A1'),
(3, '1988-07-10', '789 Pine Road', 'Bob Johnson', 'GHI789', '1357924680', 'Computer Science', 'A2'),
(4, 'kbjk', 'njkb', 'ubuntu', 'kj', 'bkjb', 'bk', 'bkj');

-- --------------------------------------------------------

--
-- Structure de la table `timetables`
--

CREATE TABLE `timetables` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `filiere` varchar(400) NOT NULL,
  `department` varchar(500) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `timetables`
--

INSERT INTO `timetables` (`id`, `student_id`, `filiere`, `department`, `image`) VALUES
(1, 0, '[value-3]', '', 0x5b76616c75652d345d),
(2, 4, 'Mathematics', 'Science', 0x75706c6f6164732f6574323232322e504e47),
(3, 4, 'Informatics', 'Technologies', 0x75706c6f6164732f65743333332e504e47),
(4, 4, 'Iconic', 'Marketing', 0x75706c6f6164732f657434342e504e47),
(5, 4, 'Computer Science', 'Computer Science', 0x75706c6f6164732f6574352e504e47);

-- --------------------------------------------------------

--
-- Structure de la table `t_p_groups`
--

CREATE TABLE `t_p_groups` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `groupe` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `t_p_groups`
--

INSERT INTO `t_p_groups` (`id`, `student_id`, `groupe`, `details`) VALUES
(1, 3, 'A5', 'Bghit');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('admin','student','chefF','chefM','chefD','guest') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'n', 'n@n', '$2y$10$CoVGY61efQc6XCDr4HRXSeGt712ACOe/IqH1MwlGivnDj26N5uPUS', 'admin', NULL, '2024-01-14 01:34:38', '2024-01-14 01:34:38'),
(2, 'adm', 'a@fst', '$2y$10$TGTFAsOr18Z3UF5H7nHoweurcotzVlR16TBoh9E9Q54nycvEzZcTC', 'admin', NULL, NULL, NULL),
(3, 'std', 's@fst', '$2y$10$TGTFAsOr18Z3UF5H7nHoweurcotzVlR16TBoh9E9Q54nycvEzZcTC', 'student', NULL, NULL, NULL),
(4, 'chd', 'd@fst', '$2y$10$TGTFAsOr18Z3UF5H7nHoweurcotzVlR16TBoh9E9Q54nycvEzZcTC', 'chefD', NULL, NULL, NULL),
(5, 'chm', 'm@fst', '$2y$10$TGTFAsOr18Z3UF5H7nHoweurcotzVlR16TBoh9E9Q54nycvEzZcTC', 'chefM', NULL, NULL, NULL),
(6, 'chf', 'f@fst', '$2y$10$TGTFAsOr18Z3UF5H7nHoweurcotzVlR16TBoh9E9Q54nycvEzZcTC', 'chefF', NULL, NULL, NULL),
(7, 'gst', 'g@fst', '$2y$10$TGTFAsOr18Z3UF5H7nHoweurcotzVlR16TBoh9E9Q54nycvEzZcTC', 'guest', NULL, NULL, NULL),
(8, 'ubuntu', 'nnn@jjj', '$2y$10$ReFDF9N/U5knIbvjQwVXcOXE3Fvq6S.wgT6S5bJ8ZNu3mH98vHU8O', 'admin', NULL, '2024-01-24 03:43:55', '2024-01-24 03:43:55'),
(9, 'nannan', 'nannanna@gma.co', '$2y$10$GXFi/4Y/tNAfXaj4JmZIQ.7oJavlvdM5ap558sGigeUOo2LDMOyTm', 'guest', NULL, '2024-01-24 03:46:43', '2024-01-24 03:46:43');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `absences`
--
ALTER TABLE `absences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `filieres`
--
ALTER TABLE `filieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recommendations`
--
ALTER TABLE `recommendations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `room_schedules`
--
ALTER TABLE `room_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `timetables`
--
ALTER TABLE `timetables`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t_p_groups`
--
ALTER TABLE `t_p_groups`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `absences`
--
ALTER TABLE `absences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filieres`
--
ALTER TABLE `filieres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `professors`
--
ALTER TABLE `professors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `recommendations`
--
ALTER TABLE `recommendations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `room_schedules`
--
ALTER TABLE `room_schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `timetables`
--
ALTER TABLE `timetables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `t_p_groups`
--
ALTER TABLE `t_p_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
