-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2024 pada 15.12
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
(1, 'irma@gmail.com', 'Keyla ayu', '$2y$10$QophqUjagymBKwUq0RvGbu96285kq.uBxQkWDSK3wW1q/8Itw0AMm', 'Pengguna', NULL, '2024-05-16 12:54:30', '2024-05-16 13:35:32'),
(2, 'bekti@gmail.com', 'Bekti', '$2y$10$QophqUjagymBKwUq0RvGbu96285kq.uBxQkWDSK3wW1q/8Itw0AMm', 'Bidan', NULL, '2024-05-16 13:05:07', '2024-05-16 13:05:07'),
(3, 'Rida@gmail.com', 'Rida', '$2y$10$GNYblyAplMolT/kqNzEDmOzSAjzfhqS/KTeXB0ZLwHSbOkXVWdkoC', 'Kader', NULL, '2024-05-16 13:15:49', '2024-05-28 13:11:37'),
(4, 'agungricky07@gmail.com', 'Ricky', '$2y$10$Nx.YMCy.Pz9HDm8n6mz/KeCiLChfjWbXjfhxJxf.YaCFP5vwg5A0G', 'Pengguna', NULL, '2024-05-16 13:56:44', '2024-05-28 11:43:33'),
(8, 'har@gmail.com', 'Harmadi', '$2y$10$U9DrENMSeVsVuWcSXGwis.9C/UbIe3/pjnqyxL2SRnFTDx7VxgI2O', 'Pengguna', NULL, '2024-05-16 14:06:05', '2024-05-16 14:06:05'),
(9, 'pipit@gmail.com', 'Alfariza', '$2y$10$fDDYgI92hQWqY.z3Y3x5UeLzI28.MfMTmWORLKEvSwVE5YdkKfXhW', 'Pengguna', NULL, '2024-05-17 13:05:53', '2024-05-17 13:05:53');

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
(1, '2039827122121114', 'default.jpg', 'Keyla Ayu', '5', 'Irma', 'Pacitan', 'Tangan Sewu', 'Ringin Rejo', '03', '01', '081298910111', 'Tambak Wirang', '2024-05-16 19:54:30', '2024-05-16 20:35:32', 1),
(2, '9182718123761562', 'Ricky Agug Sumiranto.jpg', 'Ricky Agug Sumiranto', '4', 'Mujiati', 'Ds.Tanjung tani, kec.prambon, kab.nganjuk Rt.04 Rw.01', 'Tanjung Tani', 'Prambon', '04', '01', '081276435511', 'Tambak Wirang', '2024-05-16 20:56:44', '2024-05-28 18:43:33', 4),
(3, '0192871263547891', '8.png', 'Harmadi', '5', 'Mujiati', 'Ds.Tanjung tani, kec.prambon, kab.nganjuk Rt.04 Rw.01', 'Tanjung Tani', 'Prambon', '04', '01', '081728181124', 'Tambak Wirang', '2024-05-16 21:06:05', '2024-05-16 21:06:05', 8),
(4, '0987654123456789', 'default.jpg', 'AlFarizal al ul', '4', 'Pipit Nuril Hadayani', 'Ds.Tanjung tani, kec.prambon, kab.nganjuk Rt.04 Rw.01', 'Tanjung Tani', 'Prambon', '04', '01', '086514146776', 'Tambak Wirang', '2024-05-17 08:05:53', '2024-05-17 08:05:53', 9);

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
(18, '20.0', '20.0', '13.8', '13.3', '12.3', '10.8', '9.7', 2, 'Lingkungan', '2024-05-16 14:08:48', '2024-05-16 14:08:48'),
(19, '17.7', '17.2', '16.3', '14.3', '13.3', '12.3', '8.9', 2, 'Pola Asuh', '2024-05-16 14:14:26', '2024-05-16 14:14:26'),
(20, '19.9', '17.0', '17.0', '14.8', '12.5', '10.2', '8.5', 1, 'Lingkungan', '2024-05-16 15:00:01', '2024-05-16 15:00:01'),
(21, '19.9', '17.0', '17.0', '14.8', '12.5', '10.2', '8.5', 1, 'Lingkungan', '2024-05-16 15:06:33', '2024-05-16 15:06:33'),
(22, '17.6', '17.6', '15.1', '14.5', '13.8', '13.2', '8.2', 1, 'Lingkungan', '2024-05-16 15:59:05', '2024-05-16 15:59:05'),
(23, '20.1', '16.6', '16.1', '14.6', '12.6', '11.1', '9.0', 4, 'Lingkungan', '2024-05-17 13:07:42', '2024-05-17 13:07:42'),
(24, '18.5', '16.7', '15.5', '14.3', '13.7', '11.9', '9.5', 4, 'Pola Makan Balita', '2024-05-17 13:48:41', '2024-05-17 13:48:41'),
(25, '16.3', '15.8', '14.4', '14.4', '13.9', '13.4', '11.9', 2, 'Kesehatan Anak', '2024-05-20 01:27:18', '2024-05-20 01:27:18'),
(26, '17.6', '15.6', '15.1', '13.7', '13.7', '12.7', '11.7', 2, 'Kesehatan Ibu', '2024-05-20 04:45:42', '2024-05-20 04:45:42'),
(27, '16.3', '15.9', '14.9', '14.9', '13.9', '13.5', '10.6', 2, 'Kesehatan Anak', '2024-05-20 07:10:24', '2024-05-20 07:10:24'),
(28, '17.7', '17.1', '15.5', '14.4', '13.3', '11.6', '10.5', 3, 'Lingkungan', '2024-05-20 07:16:47', '2024-05-20 07:16:47'),
(29, '18.2', '17.1', '15.5', '14.4', '12.7', '12.2', '9.9', 2, 'Lingkungan', '2024-05-22 14:25:28', '2024-05-22 14:25:28'),
(30, '17.3', '15.2', '14.7', '13.7', '13.2', '13.2', '12.7', 3, 'Kurang Gizi saat Hamil', '2024-05-28 15:35:46', '2024-05-28 15:35:46');

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
(3, 'Kesehatan Anak', 'Kesehatan Anak.pdf', '2024-04-30 13:51:47', '2024-05-15 22:41:13'),
(4, 'Kesehatan Ibu', NULL, '2024-04-30 13:51:47', '2024-05-20 14:44:38'),
(5, 'Pengetahuan Orangtua', NULL, '2024-04-30 13:51:47', '2024-04-30 13:51:47'),
(6, 'Kurang Gizi saat Hamil', NULL, '2024-04-30 13:51:47', '2024-04-30 13:51:47'),
(7, 'Pola Makan Balita', NULL, '2024-04-30 13:51:47', '2024-04-30 13:51:47');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `datapengguna`
--
ALTER TABLE `datapengguna`
  MODIFY `iddataPengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil_input`
--
ALTER TABLE `hasil_input`
  MODIFY `idHasil_input` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
