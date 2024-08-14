-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Agu 2024 pada 04.12
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_stunting`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Role` enum('Bidan','Kader','Pengguna') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `email`, `username`, `password`, `Role`, `remember_token`, `Created_at`, `Updated_at`) VALUES
(2, 'Rina@gmail.com', 'Rina', '$2y$10$QophqUjagymBKwUq0RvGbu96285kq.uBxQkWDSK3wW1q/8Itw0AMm', 'Bidan', NULL, '2024-05-16 13:05:07', '2024-07-23 12:43:37'),
(3, 'Rida@gmail.com', 'Rida', '$2y$10$GNYblyAplMolT/kqNzEDmOzSAjzfhqS/KTeXB0ZLwHSbOkXVWdkoC', 'Kader', NULL, '2024-05-16 13:15:49', '2024-05-28 13:11:37'),
(18, 'wiwik@gmail.com', 'Wiwik', '$2y$10$5vRaZb2R06dd4J3RXzEGfO8flSDii8nOMRhU4nDUgPHWXjS4imkKq', 'Pengguna', NULL, '2024-07-23 12:59:10', '2024-07-23 12:59:10'),
(19, 'Tiyas@gmail.com', 'Tiyas', '$2y$10$bwhNl044QxL9c7qxeYJuH.3pHJe/LDYmIKWZBV7Vgm6TO2M8ZMSBW', 'Pengguna', NULL, '2024-07-23 13:03:32', '2024-07-23 13:04:36'),
(20, 'Erma@gmail.com', 'Ermaa', '$2y$10$3QvGWmAK11kEHd8T.gbv1Os.NhazCyItvNRBZ4urgIT1ptOq118xy', 'Pengguna', NULL, '2024-07-23 13:09:29', '2024-07-23 13:09:29'),
(21, 'Pipit@gmail.com', 'Pipit', '$2y$10$TjdZzFldKgZPA2S5JG5IYOX/1UfVW2hOYGhYMZAGxFdZL9nt7qdem', 'Pengguna', NULL, '2024-07-23 13:13:16', '2024-07-23 13:13:16'),
(27, 'Gafi@gmail.com', 'Ghafi', '$2y$10$wBxgAA8uI98GDhnJGvB5QOVKTPsnKl8WCwtg38Ufgi0nbBSYTo99C', 'Pengguna', NULL, '2024-07-23 13:27:23', '2024-07-23 13:27:23'),
(28, 'Rahma@gmail.com', 'Rahma', '$2y$10$WvLUIdTukqdofgMiXs185eQd1b/gYiqdNDl7MhxlPVF/1lq99U3yy', 'Pengguna', NULL, '2024-07-23 13:31:31', '2024-07-23 13:31:31'),
(29, 'Enik@gmail.com', 'Enikk', '$2y$10$04p.Im7ZF7uw7RrOEiJvSOyyuoU/01U8JrEPZ2mfwmfh6HjDxD5hu', 'Pengguna', NULL, '2024-07-23 13:36:20', '2024-07-23 13:36:20'),
(30, 'Elva@gmail.com', 'Ellva', '$2y$10$ouQEclcT/C5BscVUb.MxseisESbbVMQri2Tnm5SiumqHSXVk95OXm', 'Pengguna', NULL, '2024-07-23 13:40:16', '2024-07-23 13:40:16'),
(31, 'Wiwin@gmail.com', 'Wiwin', '$2y$10$o/spd5KPw9LsRgNOwUTrbu4GAdMLCe7E.w8xKCtPL/PWN71Nlpxfy', 'Pengguna', NULL, '2024-07-23 13:46:27', '2024-07-23 13:46:27'),
(33, 'Desi@gmail.com', 'Desii', '$2y$10$ws/g8G1.QqCfN8V6VnG7lucV1mtKNS34PAlgiIFxBRmjNXucescj.', 'Pengguna', NULL, '2024-07-23 13:54:03', '2024-07-23 13:54:03'),
(35, 'Aldo@gmail.com', 'Dessi', '$2y$10$u1VbBEp8J2QD.spnBUSbLuSC2L9qhqrx9Pq0yqUsREI4ea2Vu.qsm', 'Pengguna', NULL, '2024-07-23 13:58:56', '2024-07-23 13:58:56'),
(36, 'Utami@gmail.com', 'Utami', '$2y$10$M/X3BU1bRTlAtx/qGKBK6edDNuUdioZMkBOp3ZOj4UBL1PMa1n0eC', 'Pengguna', NULL, '2024-07-23 14:04:01', '2024-07-23 14:04:01'),
(37, 'Liya@gmail.com', 'Liyaa', '$2y$10$e3IFt7Sm8Vd7mqD1W6RZKuQjLcR9rntGmSg4sIW6mzGVMGrtJakEy', 'Pengguna', NULL, '2024-07-23 14:07:40', '2024-07-23 14:07:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapengguna`
--

CREATE TABLE `datapengguna` (
  `iddataPengguna` int(11) NOT NULL,
  `Nik` varchar(16) NOT NULL,
  `Foto` varchar(45) DEFAULT NULL,
  `Nama_anak` varchar(45) NOT NULL,
  `Usia` char(2) NOT NULL,
  `Nama_ibu` varchar(45) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Desa` varchar(45) NOT NULL,
  `Kecamatan` varchar(45) NOT NULL,
  `Rt` char(3) NOT NULL,
  `Rw` char(3) NOT NULL,
  `No_Hp` varchar(13) NOT NULL,
  `Nama_posyandu` varchar(45) NOT NULL,
  `Created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `Updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Akun_idAkun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `datapengguna`
--

INSERT INTO `datapengguna` (`iddataPengguna`, `Nik`, `Foto`, `Nama_anak`, `Usia`, `Nama_ibu`, `Alamat`, `Desa`, `Kecamatan`, `Rt`, `Rw`, `No_Hp`, `Nama_posyandu`, `Created_at`, `Updated_at`, `Akun_idAkun`) VALUES
(8, '9829387281938475', 'default.jpg', 'Lintang Maharani', '1', 'Wiwik Rahayu', 'Ds.Sidowarek, Kec.Plemahan, kab.kediri', 'Sidowarek', 'Plemahan', '0', '0', '0', 'Tambak Wirang', '2024-07-23 19:59:10', '2024-07-23 19:59:10', 18),
(9, '9287364517382123', 'Adilla Nisa ardhani.jpg', 'Adilla Nisa ardhani', '1', 'Tiyas selviana', 'Ds.Sidowarek, Kec.Plemahan, kab.kediri', 'Sidowarek', 'Plemahan', '0', '0', '0', 'Tambak Wirang', '2024-07-23 20:03:32', '2024-07-23 20:04:36', 19),
(10, '8762548271635213', '20.jpg', 'Mikayla Sintia Zhafira', '2', 'Erma Dharma Wanti', 'Ds.Sidowarek, Kec.Plemahan, kab.kediri', 'Sidowarek', 'Plemahan', '0', '0', '0', 'Tambak Wirang', '2024-07-23 20:09:29', '2024-07-23 20:09:29', 20),
(11, '8726451244561732', '21.jpg', 'Alfarezal nufail zafran', '2', 'Pipit nuril handayani', 'Ds.Sidowarek, Kec.Plemahan, kab.kediri', 'Sidowarek', 'Plemahan', '0', '0', '0', 'Tambak Wirang', '2024-07-23 20:13:16', '2024-07-23 20:13:16', 21),
(14, '7163528976326178', '27.jpg', 'Faeza Gaffi Manaf', '1', 'Pipit nuril handayani', 'Ds.Sidowarek, Kec.Plemahan, kab.kediri', 'Sidowarek', 'Plemahan', '0', '0', '0', 'Tambak Wirang', '2024-07-23 20:27:23', '2024-07-23 20:27:23', 27),
(15, '6172874263459187', 'default.jpg', 'Arkana Izzan Pratama', '1', 'Tri Agustina Rahma sari', 'Ds.Sidowarek, Kec.Plemahan, kab.kediri', 'Sidowarek', 'Plemahan', '0', '0', '0', 'Tambak Wirang', '2024-07-23 20:31:31', '2024-07-23 20:31:31', 28),
(16, '7165347291876351', 'default.jpg', 'Karina Jayanti', '1', 'Enik Purwati', 'Ds.Sidowarek, Kec.Plemahan, kab.kediri', 'Sidowarek', 'Plemahan', '0', '0', '0', 'Tambak Wirang', '2024-07-23 20:36:20', '2024-07-23 20:36:20', 29),
(17, '8765248910245672', 'default.jpg', 'Vandra Tristan Hasan', '2', 'Elva VioLita', 'Ds.Sidowarek, Kec.Plemahan, kab.kediri', 'Sidowarek', 'Plemahan', '0', '0', '0', 'Tambak Wirang', '2024-07-23 20:40:16', '2024-07-23 20:40:16', 30),
(18, '7286453829178346', 'default.jpg', 'Indana Zulfa', '1', 'Ibu Wiwin', 'Ds.Sidowarek, Kec.Plemahan, kab.kediri', 'Sidowarek', 'Plemahan', '0', '0', '0', 'Tambak Wirang', '2024-07-23 20:46:27', '2024-07-23 20:46:27', 31),
(20, '8176258907609261', 'default.jpg', 'Syahiba Nur Azani', '2', 'Desi', 'Ds.Sidowarek, Kec.Plemahan, kab.kediri', 'Sidowarek', 'Plemahan', '0', '0', '0', 'Tambak Wirang', '2024-07-23 20:54:03', '2024-07-23 20:54:03', 33),
(21, '9087578953126904', 'default.jpg', 'M Aldo syahidan', '1', 'Desi', 'Ds.Sidowarek, Kec.Plemahan, kab.kediri', 'Sidowarek', 'Plemahan', '0', '0', '0', 'Tambak Wirang', '2024-07-23 20:58:56', '2024-07-23 20:58:56', 35),
(22, '4809631890568795', 'default.jpg', 'Kayshila Maheswari', '1', 'Diah Utami', 'Ds.Sidowarek, Kec.Plemahan, kab.kediri', 'Sidowarek', 'Plemahan', '0', '0', '0', 'Tambak Wirang', '2024-07-23 21:04:01', '2024-07-23 21:04:01', 36),
(23, '5609423176489560', 'default.jpg', 'M suryana Rifqi Hamizan', '2', 'Liya irmaya', 'Ds.Sidowarek, Kec.Plemahan, kab.kediri', 'Sidowarek', 'Plemahan', '0', '0', '0', 'Tambak Wirang', '2024-07-23 21:07:40', '2024-07-23 21:07:40', 37);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `hasil_input`
--

CREATE TABLE `hasil_input` (
  `idHasil_input` int(11) NOT NULL,
  `Lingkungan` varchar(10) NOT NULL,
  `Pola_asuh` varchar(10) NOT NULL,
  `Kesehatan_anak` varchar(10) NOT NULL,
  `Faktor_kesehatan_ibu` varchar(10) NOT NULL,
  `Pengetahuan_orangtua` varchar(10) NOT NULL,
  `Kekurangan_Gizi_saat_Hamil` varchar(10) NOT NULL,
  `Pola_Makanbalita` varchar(10) NOT NULL,
  `dataPengguna_iddataPengguna` int(11) NOT NULL,
  `Fatror_penyebab` varchar(40) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `hasil_input`
--

INSERT INTO `hasil_input` (`idHasil_input`, `Lingkungan`, `Pola_asuh`, `Kesehatan_anak`, `Faktor_kesehatan_ibu`, `Pengetahuan_orangtua`, `Kekurangan_Gizi_saat_Hamil`, `Pola_Makanbalita`, `dataPengguna_iddataPengguna`, `Fatror_penyebab`, `Created_at`, `Updated_at`) VALUES
(51, '16.4', '16.4', '15.0', '15.0', '12.6', '12.6', '12.1', 8, 'Pengetahuan Orangtua', '2024-07-23 03:10:38', '2024-07-25 16:27:23'),
(52, '17.4', '16.8', '14.7', '14.7', '14.7', '11.6', '10.0', 9, 'Kesehatan Ibu', '2024-07-23 03:24:06', '2024-07-25 16:28:22'),
(53, '18.6', '14.9', '14.9', '13.5', '13.5', '13.5', '11.2', 10, 'Lingkungan', '2024-07-23 03:35:48', '2024-07-25 16:28:50'),
(54, '16.5', '16.0', '16.0', '15.5', '14.4', '11.3', '10.3', 11, 'Pola Asuh', '2024-07-23 03:47:47', '2024-07-25 16:29:45'),
(55, '16.4', '16.4', '15.4', '14.4', '12.8', '12.8', '11.8', 14, 'Kesehatan Ibu', '2024-07-23 03:56:43', '2024-07-25 16:30:00'),
(56, '17.2', '16.7', '14.8', '13.4', '12.9', '12.4', '12.4', 15, 'Pola Asuh', '2024-07-23 04:40:30', '2024-07-25 16:30:35'),
(57, '17.1', '16.5', '16.5', '14.7', '14.1', '11.8', '9.4', 16, 'Kesehatan Ibu', '2024-07-23 04:56:23', '2024-07-25 16:30:57'),
(58, '16.5', '16.1', '15.6', '13.8', '13.8', '12.9', '11.2', 17, 'Lingkungan', '2024-07-23 05:05:37', '2024-07-25 16:31:25'),
(59, '16.7', '16.2', '13.9', '13.9', '13.9', '13.0', '12.5', 18, 'Pola Makan Balita', '2024-07-23 07:44:50', '2024-07-25 16:31:38'),
(60, '17.7', '17.2', '16.3', '13.8', '12.8', '12.3', '9.9', 20, 'Pola Asuh', '2024-07-23 07:57:16', '2024-07-25 16:31:56'),
(61, '19.0', '16.4', '15.4', '14.4', '12.8', '12.3', '9.7', 21, 'Kesehatan Anak', '2024-07-23 08:13:12', '2024-07-25 16:32:19'),
(62, '17.1', '17.1', '16.1', '14.1', '12.6', '11.6', '11.6', 22, 'Kesehatan Anak', '2024-07-23 09:13:28', '2024-07-25 16:36:15'),
(63, '19.4', '17.2', '15.6', '15.1', '14.0', '11.8', '7.0', 23, 'Pengetahuan Orangtua', '2024-07-23 09:37:49', '2024-07-25 16:37:50'),
(64, '16.6', '16.6', '15.0', '14.5', '14.0', '12.4', '10.9', 11, 'Pola Asuh', '2024-08-14 02:09:09', '2024-08-14 02:09:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `solusi`
--

CREATE TABLE `solusi` (
  `idSolusi` int(11) NOT NULL,
  `Faktor_penyebab` varchar(45) NOT NULL,
  `Nama_file` varchar(50) DEFAULT NULL,
  `Created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `Updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `solusi`
--

INSERT INTO `solusi` (`idSolusi`, `Faktor_penyebab`, `Nama_file`, `Created_at`, `Updated_at`) VALUES
(1, 'Lingkungan', 'Lingkungan.pdf', '2024-04-30 13:51:47', '2024-05-06 21:02:29'),
(2, 'Pola Asuh', 'Pola Asuh.pdf', '2024-04-30 13:51:47', '2024-05-06 19:35:29'),
(3, 'Kesehatan Anak', 'Kesehatan Anak.pdf', '2024-04-30 13:51:47', '2024-06-15 16:04:24'),
(4, 'Kesehatan Ibu', 'Kesehatan Ibu.pdf', '2024-04-30 13:51:47', '2024-06-16 00:07:19'),
(5, 'Pengetahuan Orangtua', 'Pengetahuan Orangtua.pdf', '2024-04-30 13:51:47', '2024-06-16 00:35:14'),
(6, 'Kurang Gizi saat Hamil', 'Kurang Gizi saat Hamil.pdf', '2024-04-30 13:51:47', '2024-06-16 00:49:06'),
(7, 'Pola Makan Balita', 'Pola Makan Balita.pdf', '2024-04-30 13:51:47', '2024-06-16 01:02:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ricky', 'agungricky07@gmail.com', NULL, '$2y$10$XdbXuNFtSquBsMbi0CG8aOs/E2lOBmJ0a/PJAaUh0FMTnpMWwgvpC', NULL, '2024-05-10 00:33:24', '2024-05-10 00:33:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Username_UNIQUE` (`username`),
  ADD UNIQUE KEY `idLogin_UNIQUE` (`id`);

--
-- Indeks untuk tabel `datapengguna`
--
ALTER TABLE `datapengguna`
  ADD PRIMARY KEY (`iddataPengguna`),
  ADD UNIQUE KEY `iddataDiri_UNIQUE` (`iddataPengguna`),
  ADD KEY `fk_dataPengguna_Akun1_idx` (`Akun_idAkun`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `hasil_input`
--
ALTER TABLE `hasil_input`
  ADD PRIMARY KEY (`idHasil_input`),
  ADD UNIQUE KEY `idHasil_input_UNIQUE` (`idHasil_input`),
  ADD KEY `fk_Hasil_input_dataPengguna_idx` (`dataPengguna_iddataPengguna`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`idSolusi`),
  ADD UNIQUE KEY `Faktor_peyebab_UNIQUE` (`Faktor_penyebab`),
  ADD UNIQUE KEY `Nama_file_UNIQUE` (`Nama_file`),
  ADD UNIQUE KEY `idSolusi_UNIQUE` (`idSolusi`);

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
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `datapengguna`
--
ALTER TABLE `datapengguna`
  MODIFY `iddataPengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil_input`
--
ALTER TABLE `hasil_input`
  MODIFY `idHasil_input` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `solusi`
--
ALTER TABLE `solusi`
  MODIFY `idSolusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `datapengguna`
--
ALTER TABLE `datapengguna`
  ADD CONSTRAINT `fk_dataPengguna_Akun1` FOREIGN KEY (`Akun_idAkun`) REFERENCES `akun` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `hasil_input`
--
ALTER TABLE `hasil_input`
  ADD CONSTRAINT `fk_Hasil_input_dataPengguna` FOREIGN KEY (`dataPengguna_iddataPengguna`) REFERENCES `datapengguna` (`iddataPengguna`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
