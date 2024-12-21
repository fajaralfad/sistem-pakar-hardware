-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 06:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakar-kerusakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `aturans`
--

CREATE TABLE `aturans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` bigint(20) UNSIGNED NOT NULL,
  `kerusakan_id` bigint(20) UNSIGNED NOT NULL,
  `nilai_kepercayaan` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aturans`
--

INSERT INTO `aturans` (`id`, `gejala_id`, `kerusakan_id`, `nilai_kepercayaan`, `created_at`, `updated_at`) VALUES
(8, 9, 3, 0.0909, '2024-12-18 08:17:14', '2024-12-19 11:56:40'),
(9, 10, 3, 0.0909, '2024-12-18 08:17:57', '2024-12-20 07:07:03'),
(10, 11, 3, 0.0909, '2024-12-18 08:18:21', '2024-12-20 07:07:17'),
(11, 11, 4, 0.25, '2024-12-18 08:19:30', '2024-12-20 07:14:48'),
(14, 12, 5, 0.2, '2024-12-19 09:47:46', '2024-12-20 07:19:17'),
(15, 12, 6, 0.1429, '2024-12-19 09:48:00', '2024-12-20 08:12:03'),
(16, 12, 3, 0.0909, '2024-12-19 09:48:14', '2024-12-20 07:07:36'),
(17, 12, 7, 0.3333, '2024-12-19 09:48:45', '2024-12-20 08:24:11'),
(18, 13, 3, 0.0909, '2024-12-20 07:06:46', '2024-12-20 07:06:46'),
(19, 14, 3, 0.0909, '2024-12-20 07:08:05', '2024-12-20 07:08:05'),
(20, 15, 3, 0.0909, '2024-12-20 07:08:41', '2024-12-20 07:08:41'),
(21, 16, 3, 0.0909, '2024-12-20 07:09:30', '2024-12-20 07:09:30'),
(22, 17, 3, 0.0909, '2024-12-20 07:10:11', '2024-12-20 07:10:11'),
(23, 18, 3, 0.0909, '2024-12-20 07:11:03', '2024-12-20 07:11:03'),
(24, 19, 4, 0.25, '2024-12-20 07:15:18', '2024-12-20 07:15:18'),
(25, 20, 4, 0.25, '2024-12-20 07:15:50', '2024-12-20 07:15:50'),
(26, 21, 3, 0.0909, '2024-12-20 07:16:29', '2024-12-20 07:16:29'),
(27, 21, 4, 0.25, '2024-12-20 07:16:47', '2024-12-20 07:16:47'),
(30, 20, 5, 0.2, '2024-12-20 07:19:43', '2024-12-20 07:19:43'),
(31, 22, 5, 0.2, '2024-12-20 07:20:30', '2024-12-20 07:20:30'),
(32, 23, 5, 0.2, '2024-12-20 07:21:17', '2024-12-20 07:21:17'),
(33, 24, 5, 0.2, '2024-12-20 08:09:19', '2024-12-20 08:09:19'),
(34, 25, 6, 0.1429, '2024-12-20 08:12:38', '2024-12-20 08:12:38'),
(35, 26, 6, 0.1429, '2024-12-20 08:13:05', '2024-12-20 08:13:05'),
(36, 27, 6, 0.1429, '2024-12-20 08:13:50', '2024-12-20 08:13:50'),
(37, 28, 6, 0.1429, '2024-12-20 08:14:34', '2024-12-20 08:14:34'),
(38, 29, 6, 0.1429, '2024-12-20 08:21:18', '2024-12-20 08:21:18'),
(39, 30, 6, 0.1429, '2024-12-20 08:22:36', '2024-12-20 08:22:36'),
(40, 21, 7, 0.3333, '2024-12-20 08:24:54', '2024-12-20 08:24:54'),
(41, 31, 7, 0.3333, '2024-12-20 08:25:35', '2024-12-20 08:25:35'),
(42, 32, 8, 0.1667, '2024-12-20 08:29:44', '2024-12-20 08:29:44'),
(43, 33, 8, 0.1667, '2024-12-20 08:30:49', '2024-12-20 08:30:49'),
(44, 34, 8, 0.1667, '2024-12-20 08:54:18', '2024-12-20 08:54:18'),
(45, 35, 8, 0.1667, '2024-12-20 08:55:54', '2024-12-20 08:55:54'),
(46, 36, 8, 0.1667, '2024-12-20 08:56:31', '2024-12-20 08:56:31'),
(47, 37, 8, 0.1667, '2024-12-20 08:56:57', '2024-12-20 08:56:57'),
(48, 38, 9, 0.25, '2024-12-20 09:01:36', '2024-12-20 09:01:36'),
(49, 39, 9, 0.25, '2024-12-20 09:08:19', '2024-12-20 09:08:19'),
(50, 40, 9, 0.25, '2024-12-20 09:08:48', '2024-12-20 09:08:48'),
(51, 41, 9, 0.25, '2024-12-20 09:11:59', '2024-12-20 09:11:59'),
(52, 43, 10, 0.3333, '2024-12-20 09:13:51', '2024-12-20 09:13:51'),
(53, 42, 10, 0.3333, '2024-12-20 09:14:48', '2024-12-20 09:14:48'),
(54, 44, 10, 0.3333, '2024-12-20 10:11:10', '2024-12-20 10:11:10'),
(55, 42, 11, 0.3333, '2024-12-20 10:11:55', '2024-12-20 10:11:55'),
(56, 45, 11, 0.3333, '2024-12-20 10:12:17', '2024-12-20 10:12:17'),
(57, 46, 11, 0.3333, '2024-12-20 10:12:47', '2024-12-20 10:12:47'),
(58, 25, 12, 0.25, '2024-12-20 10:14:32', '2024-12-20 10:14:32'),
(59, 30, 12, 0.25, '2024-12-20 10:14:53', '2024-12-20 10:14:53'),
(60, 47, 12, 0.25, '2024-12-20 10:15:15', '2024-12-20 10:15:15'),
(61, 48, 12, 0.25, '2024-12-20 10:15:38', '2024-12-20 10:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1734757177),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1734757177;', 1734757177);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `gejalas`
--

CREATE TABLE `gejalas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_gejala` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejalas`
--

INSERT INTO `gejalas` (`id`, `nama_gejala`, `keterangan`, `created_at`, `updated_at`) VALUES
(9, 'Tombol power on-off tidak  berfungsi ', NULL, '2024-12-18 08:15:33', '2024-12-18 08:15:33'),
(10, 'Indicator led semua mati ', NULL, '2024-12-18 08:15:51', '2024-12-18 08:15:51'),
(11, 'Laptop tiba-tiba restart/mati sendiri', NULL, '2024-12-18 08:16:09', '2024-12-18 08:16:09'),
(12, 'Blue screen ', NULL, '2024-12-19 09:47:06', '2024-12-19 09:47:06'),
(13, 'Tampilan gambar kadang mati kadang hilang', NULL, '2024-12-20 07:02:39', '2024-12-20 07:02:39'),
(14, 'Muncul pesan “warning cmos battrei is low, press F1 to resume”', NULL, '2024-12-20 07:03:07', '2024-12-20 07:03:07'),
(15, 'Laptop hang/error/tidak tampil', NULL, '2024-12-20 07:03:41', '2024-12-20 07:03:41'),
(16, 'Hardisk tidak detek di Bios laptop (hardisk baru)', NULL, '2024-12-20 07:04:02', '2024-12-20 07:04:02'),
(17, 'Not charging', NULL, '2024-12-20 07:04:31', '2024-12-20 07:04:31'),
(18, 'Lampu adaptor kedip-kedip saat dicolokkan ke laptop', NULL, '2024-12-20 07:04:55', '2024-12-20 07:04:55'),
(19, 'Mesin hidup sebentar terus mati', NULL, '2024-12-20 07:12:12', '2024-12-20 07:12:12'),
(20, 'Laptop mati total', NULL, '2024-12-20 07:12:32', '2024-12-20 07:12:32'),
(21, 'Gagal booting saat laptop dihidupkan', NULL, '2024-12-20 07:12:52', '2024-12-20 07:12:52'),
(22, 'Layar tidak tampil', NULL, '2024-12-20 07:13:08', '2024-12-20 07:13:08'),
(23, 'Garis-garis warna tidak beraturan', NULL, '2024-12-20 07:13:23', '2024-12-20 07:13:23'),
(24, 'Arus tidak masuk', NULL, '2024-12-20 07:57:25', '2024-12-20 07:57:25'),
(25, 'Loading data/system lambat', NULL, '2024-12-20 07:57:43', '2024-12-20 07:57:43'),
(26, 'Berbunyi tidak normal', NULL, '2024-12-20 07:57:59', '2024-12-20 07:57:59'),
(27, 'Tidak bisa masuk windows ', NULL, '2024-12-20 07:58:15', '2024-12-20 07:58:15'),
(28, 'Tampil pesan” uknown disk boot error”', NULL, '2024-12-20 07:58:31', '2024-12-20 07:58:31'),
(29, 'Tampil pesan “retry boot disk”', NULL, '2024-12-20 08:15:54', '2024-12-20 08:15:54'),
(30, 'Tidak bisa install OS', NULL, '2024-12-20 08:16:13', '2024-12-20 08:16:13'),
(31, 'Bunyi beep saat booting', NULL, '2024-12-20 08:16:55', '2024-12-20 08:16:55'),
(32, 'Keyboard tidak berfungsi', NULL, '2024-12-20 08:17:14', '2024-12-20 08:17:14'),
(33, 'Touchpad/ mouse tidak berfungsi', NULL, '2024-12-20 08:17:36', '2024-12-20 08:17:36'),
(34, 'Tombol tertentu pada keyboard tidak berfungsi', NULL, '2024-12-20 08:52:01', '2024-12-20 08:52:01'),
(35, 'Mengetik huruf, angka yang muncul', NULL, '2024-12-20 08:52:19', '2024-12-20 08:52:19'),
(36, 'Bunyi tut bergantian sesaat di hidupkan dan keyboard mengetik sendiri saat digunakan', NULL, '2024-12-20 08:52:40', '2024-12-20 08:52:40'),
(37, 'Key <Fn> function tidak berfungsi', NULL, '2024-12-20 08:53:01', '2024-12-20 08:53:01'),
(38, 'Gambar terlihat redup', NULL, '2024-12-20 08:53:19', '2024-12-20 08:53:19'),
(39, 'Kondisi LCD gelap', NULL, '2024-12-20 09:05:57', '2024-12-20 09:05:57'),
(40, 'Ada garis horizontal / vertical pada layar LCD ', NULL, '2024-12-20 09:06:12', '2024-12-20 10:09:55'),
(41, 'Tampilan gambar hanya setengah', NULL, '2024-12-20 09:06:29', '2024-12-20 09:06:29'),
(42, 'Indicator led battrei di charger tidak menyala', NULL, '2024-12-20 09:06:45', '2024-12-20 09:06:45'),
(43, 'Indicator battrei tanda silang', NULL, '2024-12-20 09:07:00', '2024-12-20 09:07:00'),
(44, 'Battrei tidak terisi ', NULL, '2024-12-20 10:08:09', '2024-12-20 10:08:09'),
(45, 'Tidak dapat melakukan re-charging pada battrei laptop', NULL, '2024-12-20 10:08:24', '2024-12-20 10:08:24'),
(46, 'Laptop dicharger posisi hidup kemudian mati', NULL, '2024-12-20 10:08:41', '2024-12-20 10:08:41'),
(47, 'Serangan virus', NULL, '2024-12-20 10:08:52', '2024-12-20 10:08:52'),
(48, 'Kesalahan atau gagal update pada sistem operasi windows', NULL, '2024-12-20 10:09:04', '2024-12-20 10:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kerusakans`
--

CREATE TABLE `kerusakans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kerusakan` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kerusakans`
--

INSERT INTO `kerusakans` (`id`, `nama_kerusakan`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, 'Mainboard/MotherBoard', 'Motherboard, atau sering disebut sebagai mainboard, adalah komponen utama dalam sistem komputer yang bertindak sebagai pusat penghubung dan pengelola seluruh perangkat keras. Sebagai landasan utama, motherboard mengintegrasikan berbagai komponen seperti prosesor (CPU), memori (RAM), penyimpanan (HDD/SSD), dan kartu grafis (GPU), memungkinkan mereka bekerja secara terkoordinasi untuk menjalankan berbagai fungsi komputer.', '2024-12-18 08:10:05', '2024-12-18 08:10:05'),
(4, 'Prosessor ', 'Processor, atau Central Processing Unit (CPU), adalah otak utama komputer yang bertugas menjalankan perintah dan mengolah data. CPU bertanggung jawab atas eksekusi program, mulai dari operasi sederhana hingga kompleks, dengan kecepatan dan efisiensi yang bergantung pada jumlah core, kecepatan clock, dan arsitektur yang digunakan.', '2024-12-18 08:10:55', '2024-12-18 08:10:55'),
(5, 'Chipset/VGA ', 'Chipset adalah komponen pada motherboard yang mengelola komunikasi antara berbagai perangkat keras, termasuk prosesor, memori, dan perangkat penyimpanan, sehingga memastikan semua bagian bekerja secara efisien. Chipset menentukan fitur dan kemampuan motherboard, seperti dukungan untuk overclocking atau jumlah port USB.\n\nVGA (Video Graphics Adapter), atau GPU (Graphics Processing Unit), adalah komponen yang bertugas mengolah data grafis untuk ditampilkan di layar. VGA memainkan peran penting dalam menjalankan aplikasi grafis intensif seperti game, desain 3D, atau video editing, dengan performa yang ditentukan oleh jumlah core grafis, memori, dan arsitektur yang digunakan.', '2024-12-18 08:11:48', '2024-12-18 08:11:48'),
(6, 'Harddisk', 'Harddisk (HDD) adalah perangkat penyimpanan data utama pada komputer yang menggunakan piringan magnetik untuk membaca dan menulis data. Harddisk berfungsi menyimpan sistem operasi, aplikasi, serta file pengguna seperti dokumen, foto, dan video. Kapasitas penyimpanan dan kecepatan putaran (RPM) menjadi faktor utama yang memengaruhi performa dan jumlah data yang dapat disimpan. HDD terkenal karena kapasitas besar dengan biaya yang relatif terjangkau dibandingkan jenis penyimpanan lainnya.', '2024-12-18 08:12:38', '2024-12-18 08:12:38'),
(7, 'RAM (Memori) ', 'RAM (Random Access Memory) adalah jenis memori sementara yang digunakan oleh komputer untuk menyimpan data dan instruksi yang sedang digunakan oleh prosesor. RAM memungkinkan akses data yang cepat, sehingga mempercepat proses eksekusi program. Semakin besar kapasitas RAM, semakin banyak aplikasi atau proses yang dapat dijalankan secara bersamaan tanpa mengurangi kinerja. RAM bersifat volatile, yang berarti data di dalamnya akan hilang saat komputer dimatikan.', '2024-12-18 08:13:19', '2024-12-18 08:13:19'),
(8, 'Keyboard/TouchPad', 'Keyboard adalah perangkat input utama pada laptop atau komputer yang digunakan untuk mengetik dan memberikan perintah. Keyboard terdiri dari tombol-tombol yang dirancang untuk memasukkan karakter, angka, dan fungsi khusus, seperti navigasi atau kontrol sistem. Selain itu, keyboard modern sering dilengkapi dengan tombol fungsi tambahan, seperti kontrol volume, pencahayaan, atau akses cepat ke aplikasi tertentu, sehingga meningkatkan efisiensi pengguna. Jenis keyboard bervariasi, mulai dari mekanis untuk respons yang lebih baik hingga membran untuk penggunaan yang lebih senyap.\n\nTouchpad adalah perangkat input sentuh yang berfungsi sebagai pengganti mouse pada laptop. Touchpad memungkinkan pengguna untuk mengontrol pointer di layar dengan gerakan jari. Beberapa touchpad mendukung fitur multi-gesture, seperti zoom, scroll, atau swipe, untuk mempermudah navigasi dan multitasking. Perangkat ini dirancang untuk mendeteksi gerakan dengan presisi tinggi, menjadikannya solusi portabel dan praktis bagi pengguna laptop.', '2024-12-20 07:50:42', '2024-12-20 07:50:42'),
(9, 'Kerusakan pada LCD', 'LCD (Liquid Crystal Display) pada laptop adalah teknologi layar yang menampilkan gambar menggunakan kristal cair dan cahaya latar (backlight). Layar ini menawarkan tampilan tajam, ringan, dan hemat daya, sehingga ideal untuk perangkat portabel. LCD mendukung resolusi tinggi, cocok untuk kebutuhan kerja maupun hiburan. Namun, layar ini rentan terhadap kerusakan fisik, seperti retak atau dead pixel, sehingga memerlukan perawatan ekstra agar tetap optimal.', '2024-12-20 07:52:51', '2024-12-20 07:52:51'),
(10, 'Baterai Laptop', 'Baterai laptop adalah sumber daya portabel yang memungkinkan laptop digunakan tanpa harus terhubung ke listrik. Baterai ini biasanya menggunakan teknologi lithium-ion atau lithium-polymer, yang menawarkan efisiensi tinggi dan waktu pengisian yang relatif cepat. Kapasitas baterai diukur dalam watt-jam (Wh) atau milliampere-jam (mAh), menentukan seberapa lama perangkat dapat beroperasi.\n\nSeiring waktu, performa baterai dapat menurun akibat siklus pengisian ulang yang berulang. Gejala seperti daya tahan yang lebih singkat atau pengisian yang tidak penuh sering menjadi tanda baterai mulai aus. Untuk menjaga kinerja baterai, hindari penggunaan berlebih hingga habis total, panas berlebihan, dan gunakan adaptor resmi. Jika baterai rusak, menggantinya dengan yang baru adalah solusi terbaik agar laptop tetap berfungsi optimal.', '2024-12-20 07:55:07', '2024-12-20 07:55:07'),
(11, 'Charger Laptop', 'Charger laptop adalah perangkat yang digunakan untuk mengisi daya baterai laptop sekaligus menyediakan sumber daya langsung untuk pengoperasian. Charger terdiri dari adaptor daya dan kabel yang mengubah listrik AC menjadi DC sesuai kebutuhan perangkat. Setiap charger memiliki spesifikasi tegangan (volt) dan arus listrik (ampere) tertentu yang harus cocok dengan laptop untuk mencegah kerusakan komponen.\n\nPenggunaan charger yang tidak sesuai atau berkualitas rendah dapat menyebabkan masalah seperti pengisian tidak stabil, panas berlebih, atau bahkan kerusakan pada motherboard. Untuk menjaga keandalan, disarankan menggunakan charger asli atau yang kompatibel secara resmi. Selain itu, hindari menggulung kabel secara ketat untuk mencegah kerusakan pada konektor dan kabel internal.', '2024-12-20 07:55:56', '2024-12-20 07:55:56'),
(12, 'Operasi Windows (OS)', 'Windows adalah sistem operasi (OS) yang dikembangkan oleh Microsoft dan merupakan salah satu OS paling populer untuk komputer pribadi (PC) dan laptop. Windows menyediakan antarmuka grafis yang ramah pengguna, mendukung berbagai aplikasi, dan kompatibel dengan sebagian besar perangkat keras, menjadikannya pilihan utama untuk kebutuhan pribadi, profesional, dan bisnis.', '2024-12-20 07:56:49', '2024-12-20 07:56:49');

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
(8, '0001_01_01_000000_create_users_table', 1),
(9, '0001_01_01_000001_create_cache_table', 1),
(10, '0001_01_01_000002_create_jobs_table', 1),
(11, '2024_11_23_201715_create_gejalas_table', 1),
(12, '2024_11_23_201716_create_kerusakans_table', 1),
(13, '2024_11_23_201717_create_solusis_table', 1),
(14, '2024_11_23_201719_create_aturans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DHCUBHsxYU2aswmXDxsWlzrdqpJjS59kGTsXnOSL', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVGtHR1N4V0lPZE56cDNrU3NmYTJ1U0hVQ05qVG4xY0dCUG55bVl6QSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kaWFnbm9zYSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1734757060),
('yxnYBZBYTwv6bOtCJNPjfkA9FbQx9OwP49nqeQdI', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiZHdDbVRLdFUyVDRNZjdiYVNrenF5dUhCUkxQaDc5ZGVrZml0aTJ0NiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGlhZ25vc2EiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkbnF5NUVPQmxjYURjVE9sZjFtWW0ydXRnYlk4LklveC90UVhLMlVrT05paW1ncU1oTkIwU0ciO3M6ODoiZmlsYW1lbnQiO2E6MDp7fXM6NjoidGFibGVzIjthOjI6e3M6MjA6Ikxpc3RBdHVyYW5zX3Blcl9wYWdlIjtzOjM6ImFsbCI7czoyMDoiTGlzdEdlamFsYXNfcGVyX3BhZ2UiO3M6MzoiYWxsIjt9fQ==', 1734726149),
('ZiWqsi2xubKopUa467kaA96MumM0haZ5r7GeSR1n', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiYWlkdXJQSXM5TjFsbFJab0s0aFp4UE9HQXVZelVPU1VNTWVIREdqNyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkbnF5NUVPQmxjYURjVE9sZjFtWW0ydXRnYlk4LklveC90UVhLMlVrT05paW1ncU1oTkIwU0ciO30=', 1734757142);

-- --------------------------------------------------------

--
-- Table structure for table `solusis`
--

CREATE TABLE `solusis` (
  `kerusakan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_solusi` varchar(255) NOT NULL,
  `langkah_solusi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solusis`
--

INSERT INTO `solusis` (`kerusakan_id`, `id`, `nama_solusi`, `langkah_solusi`, `created_at`, `updated_at`) VALUES
(3, 4, 'Solusi untuk Masalah pada Mainboard/Motherboard', 'Periksa dengan teliti apakah terdapat kapasitor yang mengembung atau tanda-tanda kerusakan pada komponen lainnya. Kapasitor yang bocor atau mengembung sering kali menjadi indikasi masalah serius pada motherboard. Jika ditemukan kerusakan atau masalah yang tidak dapat diatasi sendiri, disarankan untuk segera membawa perangkat ke tempat layanan profesional untuk pemeriksaan lebih lanjut dan perbaikan.', '2024-12-18 08:27:44', '2024-12-18 08:53:26'),
(4, 5, 'Solusi untuk Masalah pada Prosessor', 'Langkah awal dalam mengecek laptop adalah memastikan komponen mana yang mengalami gangguan atau kerusakan. Jika laptop mati total, langkah pertama adalah memeriksa sumber daya, seperti adaptor atau baterai, untuk memastikan tidak ada masalah pada suplai listrik. Namun, jika semua komponen eksternal berfungsi normal, kemungkinan besar masalah terletak pada perangkat keras internal.\n\nProsesor yang rusak total sering kali menyebabkan laptop mati tanpa respon. Dalam kasus ini, diperlukan penggantian prosesor dengan yang baru. Sebelum mengganti, pastikan diagnosis dilakukan secara menyeluruh, termasuk pengecekan motherboard, RAM, dan komponen lainnya, karena kerusakan mati total juga bisa disebabkan oleh motherboard atau komponen pendukung lainnya. Pastikan perbaikan dilakukan oleh teknisi profesional untuk mencegah kerusakan lebih lanjut.', '2024-12-19 03:28:57', '2024-12-19 03:28:57'),
(5, 7, 'Solusi untuk Masalah pada Chipset/VGA', 'Kerusakan pada chipset atau VGA (Graphics Processing Unit) merupakan masalah serius yang biasanya tidak dapat diperbaiki secara manual tanpa peralatan dan keahlian khusus. Chipset yang rusak dapat menyebabkan laptop tidak berfungsi optimal, seperti gangguan pada komunikasi antar komponen, sedangkan kerusakan pada VGA sering ditandai dengan tampilan layar yang bermasalah, seperti artefak grafis, layar kosong, atau sistem tidak dapat mengenali kartu grafis.\n\nJika terjadi kerusakan pada salah satu komponen ini, disarankan untuk segera membawa perangkat ke service center resmi. Teknisi profesional di service center memiliki peralatan yang diperlukan untuk mendiagnosis dan memperbaiki chipset atau mengganti VGA yang rusak, memastikan perangkat kembali berfungsi dengan baik. Menghindari perbaikan sendiri juga penting untuk mencegah kerusakan lebih lanjut.', '2024-12-19 09:44:24', '2024-12-19 09:44:24'),
(6, 8, 'Solusi untuk Masalah pada Harddisk', 'Langkah awal dalam mendiagnosis masalah pada hard disk adalah dengan memeriksa koneksi antara hard disk dan soket pada motherboard. Pastikan kabel data dan daya terpasang dengan benar dan tidak ada kerusakan fisik pada konektor.\n\nJika hard disk mengeluarkan bunyi keras atau berisik, ini bisa menjadi tanda adanya kerusakan mekanis, seperti bad sector atau kegagalan komponen internal. Dalam situasi ini, segera lakukan backup data penting untuk mencegah kehilangan data secara permanen. Gunakan software khusus untuk memindai dan mengidentifikasi bad sector pada hard disk.\n\nJika masalah terus berlanjut atau bunyi semakin memburuk, sebaiknya hentikan penggunaan hard disk dan konsultasikan dengan teknisi profesional. Menggunakan hard disk dalam kondisi bermasalah dapat mempercepat kerusakan dan menyulitkan proses pemulihan data.', '2024-12-19 09:45:24', '2024-12-19 09:45:24'),
(7, 9, 'Solusi untuk Masalah pada RAM (Memori)', 'Langkah pertama untuk mengatasi masalah pada memori laptop adalah dengan melepas modul RAM dari slotnya. Setelah dilepas, bersihkan pin konektor RAM menggunakan penghapus karet yang bersih dan lembut. Pastikan untuk menghapus debu atau oksidasi dengan gerakan searah untuk menjaga konektor tetap dalam kondisi baik.\n\nSetelah selesai dibersihkan, pasang kembali RAM dengan hati-hati ke slotnya hingga terdengar bunyi klik yang menandakan konektor terpasang dengan sempurna. Pastikan juga posisi RAM sudah sesuai dengan notch pada slot.\n\nJika laptop masih tidak berfungsi atau masalah tetap terjadi, seperti layar gelap atau tidak ada respon, coba ganti RAM dengan modul baru yang kompatibel. Untuk memastikan kompatibilitas dan performa optimal, pilih RAM sesuai spesifikasi laptop dan, jika perlu, konsultasikan dengan teknisi atau referensi manual perangkat.', '2024-12-19 09:46:26', '2024-12-19 09:46:26'),
(8, 10, 'Solusi untuk Masalah pada Keyboard/TouchPad', 'Masalah pada keyboard dan touchpad laptop sering kali disebabkan oleh pengaturan atau kerusakan koneksi. Salah satu masalah umum pada keyboard adalah tombol Function atau Num Lock yang aktif, yang dapat mengganggu fungsi tombol lainnya. Untuk mengatasinya, pengguna dapat menonaktifkan tombol Num Lock melalui kombinasi tombol tertentu (biasanya Fn + Num Lock) atau melalui pengaturan di sistem operasi. Jika masalah berlanjut, periksa driver keyboard di Device Manager dan lakukan pembaruan atau instalasi ulang jika diperlukan.\n\nPada touchpad, masalah sering terjadi karena konektor yang renggang atau terlepas, terutama setelah perangkat mengalami guncangan atau dibongkar. Untuk mengatasi hal ini, buka bagian bawah laptop dengan hati-hati menggunakan alat yang sesuai, lalu pastikan konektor touchpad terpasang dengan kuat pada slotnya. Selain itu, periksa pengaturan touchpad di sistem operasi, seperti memastikan fitur touchpad tidak dinonaktifkan melalui kombinasi tombol Fn atau pengaturan perangkat lunak. Jika masalah masih terjadi, pembaruan driver touchpad atau pemeriksaan lebih lanjut oleh teknisi profesional mungkin diperlukan.', '2024-12-20 12:06:29', '2024-12-20 12:06:29'),
(9, 11, 'Solusi untuk Masalah pada LCD', 'Masalah pada LCD laptop dapat disebabkan oleh berbagai faktor, termasuk koneksi yang tidak stabil, daya yang tersimpan di perangkat, atau kerusakan pada komponen internal. Salah satu langkah awal untuk mengatasinya adalah melakukan hard turn off. Matikan laptop secara paksa dengan menekan dan menahan tombol power hingga perangkat mati sepenuhnya. Setelah itu, lepaskan baterai dan kabel charger untuk memastikan tidak ada aliran daya ke perangkat.\n\nSelanjutnya, tekan dan tahan tombol power selama 15-30 detik untuk melepaskan sisa muatan listrik yang tersimpan di kapasitor motherboard. Langkah ini sering kali membantu mengatasi gangguan sementara yang disebabkan oleh daya yang tidak stabil. Setelah selesai, pasang kembali baterai dan kabel charger, lalu nyalakan laptop untuk memeriksa apakah masalah LCD teratasi.\n\nJika layar tetap bermasalah, langkah berikutnya adalah memeriksa konektor atau soket layar. Buka casing laptop dengan hati-hati menggunakan alat khusus, lalu pastikan kabel fleksibel (flex cable) yang menghubungkan LCD ke motherboard terpasang dengan benar dan tidak ada kerusakan fisik seperti kabel putus atau konektor longgar. Periksa juga adanya tanda-tanda aus atau korosi pada konektor.\n\nJika semua langkah ini tidak berhasil, masalah mungkin terletak pada backlight, inverter, atau panel LCD itu sendiri. Dalam kasus ini, disarankan untuk membawa laptop ke teknisi profesional untuk diagnosis dan perbaikan lebih lanjut. Perawatan yang hati-hati dan pengecekan rutin dapat mencegah masalah LCD berulang dan menjaga perangkat tetap dalam kondisi optimal.', '2024-12-20 12:28:25', '2024-12-20 12:28:25'),
(10, 12, 'Solusi untuk Masalah pada Baterai Laptop', '\nMasalah pada baterai laptop yang tidak mengisi daya bisa disebabkan oleh berbagai faktor, seperti kerusakan pada baterai itu sendiri, adaptor AC yang bermasalah, atau bahkan gangguan pada sistem pengisian daya di motherboard. Untuk mengidentifikasi penyebabnya, langkah pertama adalah memeriksa apakah laptop dapat berjalan normal hanya dengan menggunakan AC adaptor. Lepaskan baterai dari laptop, lalu hubungkan perangkat langsung ke adaptor AC dan nyalakan. Jika laptop berfungsi dengan baik tanpa baterai, kemungkinan besar masalah terletak pada baterai.\n\nSelanjutnya, periksa adaptor AC untuk memastikan bahwa tegangan yang dihasilkan sesuai dengan spesifikasi laptop. Gunakan multimeter untuk mengukur output daya adaptor. Jika adaptor tidak memberikan daya yang cukup, pengisian daya baterai tentu tidak akan optimal, sehingga adaptor mungkin perlu diganti.\n\nApabila adaptor bekerja dengan baik, tetapi baterai tetap tidak terisi, coba bersihkan konektor baterai di laptop dan baterai itu sendiri menggunakan kain mikrofiber kering untuk memastikan tidak ada kotoran atau debu yang menghalangi aliran listrik. Pastikan juga baterai terpasang dengan benar pada slotnya.\n\nJika baterai masih tidak mengisi daya setelah langkah-langkah di atas, baterai kemungkinan mengalami degradasi atau kerusakan internal, yang umum terjadi setelah siklus pengisian ulang yang berulang. Dalam hal ini, mengganti baterai dengan unit baru yang kompatibel adalah solusi terbaik. Pastikan baterai pengganti berasal dari produsen resmi atau pihak ketiga yang tepercaya untuk menghindari risiko kerusakan lebih lanjut.\n\nSebagai langkah tambahan, perbarui BIOS atau firmware laptop ke versi terbaru, karena pembaruan ini sering kali memperbaiki bug terkait pengisian daya. Dengan pendekatan ini, pengguna dapat memastikan bahwa masalah pada baterai teratasi dengan tepat dan perangkat dapat kembali berfungsi secara optimal.', '2024-12-20 12:29:50', '2024-12-20 12:29:50'),
(11, 13, 'Charger Laptop', 'Masalah adaptor laptop yang berkedip biasanya menandakan adanya gangguan pada aliran listrik atau kerusakan pada komponen internal adaptor. Untuk mengatasi masalah ini, langkah pertama adalah mengidentifikasi sumber masalah. Hubungkan adaptor ke laptop lain yang memiliki spesifikasi serupa dan masih dalam satu merek. Jika adaptor tetap berkedip saat digunakan pada laptop lain, kemungkinan besar masalah ada pada adaptor itu sendiri.\n\nAdaptor yang berkedip sering kali disebabkan oleh kabel yang rusak, konektor longgar, atau kerusakan pada rangkaian internal adaptor. Periksa kondisi fisik kabel adaptor, terutama di sekitar konektor dan dekat adaptor utama, untuk melihat apakah ada tanda-tanda kerusakan seperti kabel terkelupas atau sobek. Jika ditemukan, hindari penggunaan adaptor karena dapat menimbulkan risiko korsleting.\n\nLangkah berikutnya adalah mengukur output daya adaptor menggunakan multimeter. Pastikan voltase dan arus listrik yang dihasilkan sesuai dengan spesifikasi yang tertera pada adaptor. Jika hasil pengukuran tidak konsisten atau lebih rendah dari seharusnya, ini menunjukkan adanya masalah pada rangkaian internal adaptor, seperti kerusakan pada kapasitor atau trafo kecil.\n\nSebagai langkah terakhir, coba gunakan adaptor pada soket listrik yang berbeda untuk memastikan tidak ada masalah dengan sumber daya. Soket yang tidak stabil atau tegangan listrik yang fluktuatif dapat menyebabkan adaptor berkedip. Jika masalah tetap terjadi, disarankan untuk mengganti adaptor dengan unit baru yang sesuai dengan spesifikasi laptop. Pastikan adaptor pengganti berasal dari produsen resmi atau memiliki sertifikasi kompatibilitas untuk menghindari risiko kerusakan pada laptop.', '2024-12-20 12:30:59', '2024-12-20 12:30:59'),
(12, 14, 'Solusi untuk Masalah pada Operasi Windows (OS)', 'Masalah pada sistem operasi Windows (OS) laptop dapat berdampak pada kinerja perangkat, bahkan menyebabkan ketidakmampuan sistem untuk berjalan dengan normal. Untuk mengatasi hal ini, pendekatan bertahap dapat dilakukan tergantung pada tingkat kerusakan OS.\n\nLangkah pertama adalah menggunakan Repair Mode atau fitur Startup Repair yang tersedia melalui menu Advanced Options saat laptop booting. Repair Mode dirancang untuk memperbaiki file sistem yang rusak atau hilang, serta mengatasi konflik yang mencegah sistem berjalan normal. Pastikan untuk memilih opsi yang sesuai dengan masalah yang dihadapi, seperti memperbaiki file boot atau memulihkan sistem ke titik pemulihan (restore point) sebelumnya.\n\nJika perbaikan ini tidak berhasil atau sistem tetap lambat, instal ulang OS dapat menjadi solusi yang lebih efektif. Proses ini akan menggantikan file sistem yang rusak dengan file baru, sekaligus memberikan kesempatan untuk mengatur ulang partisi dan membersihkan perangkat dari file yang tidak diperlukan. Sebelum instal ulang, penting untuk mencadangkan data penting ke penyimpanan eksternal guna menghindari kehilangan data.\n\nApabila masalah disebabkan oleh serangan virus, gunakan antivirus yang terpercaya untuk melakukan pemindaian menyeluruh. Antivirus mumpuni seperti Microsoft Defender, Norton, atau Kaspersky dapat mendeteksi dan menghapus virus atau malware yang menginfeksi sistem. Pastikan untuk selalu memperbarui definisi virus agar perlindungan tetap optimal.\n\nSebagai langkah preventif, pastikan untuk menjaga sistem tetap diperbarui melalui Windows Update, menginstal driver resmi, dan menggunakan perangkat lunak keamanan tambahan jika diperlukan. Langkah-langkah ini tidak hanya membantu mengatasi masalah pada OS, tetapi juga meningkatkan kinerja dan stabilitas perangkat secara keseluruhan.', '2024-12-20 12:32:06', '2024-12-20 12:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fajar', 'admin@gmail.com', NULL, '$2y$12$nqy5EOBlcaDcTOlf1mYm2utgbY8.Iox/tQXK2UkONiimgqMhNB0SG', NULL, '2024-11-24 08:42:13', '2024-11-24 08:42:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aturans`
--
ALTER TABLE `aturans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aturans_gejala_id_foreign` (`gejala_id`),
  ADD KEY `aturans_kerusakan_id_foreign` (`kerusakan_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gejalas`
--
ALTER TABLE `gejalas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kerusakans`
--
ALTER TABLE `kerusakans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `solusis`
--
ALTER TABLE `solusis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solusis_kerusakan_id_foreign` (`kerusakan_id`);

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
-- AUTO_INCREMENT for table `aturans`
--
ALTER TABLE `aturans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gejalas`
--
ALTER TABLE `gejalas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kerusakans`
--
ALTER TABLE `kerusakans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `solusis`
--
ALTER TABLE `solusis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aturans`
--
ALTER TABLE `aturans`
  ADD CONSTRAINT `aturans_gejala_id_foreign` FOREIGN KEY (`gejala_id`) REFERENCES `gejalas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `aturans_kerusakan_id_foreign` FOREIGN KEY (`kerusakan_id`) REFERENCES `kerusakans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `solusis`
--
ALTER TABLE `solusis`
  ADD CONSTRAINT `solusis_kerusakan_id_foreign` FOREIGN KEY (`kerusakan_id`) REFERENCES `kerusakans` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
