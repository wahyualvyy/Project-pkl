-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2024 at 02:27 PM
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
-- Database: `p-belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul-artikel` varchar(50) NOT NULL,
  `gambar-artikel` varchar(255) DEFAULT NULL,
  `isi-artikel` text NOT NULL,
  `slug-artikel` varchar(50) NOT NULL,
  `tanggal-artikel` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul-artikel`, `gambar-artikel`, `isi-artikel`, `slug-artikel`, `tanggal-artikel`) VALUES
(20, 'Jangan Panik Lampu ABS Menyala, Ini Cara Tepat Men', '1721964464_fcc62a9eb59d23d8edc7.jpeg', 'Biasanya lampu indikator atau peringatan ABS (Anti-lock Braking System) akan menyala saat kontak pertama kali mesin dinyalakan. Setelah itu lampu indikator tersebut akan padam setelah beberapa detik. Ingat lampu indikator tersebut hanya akan menyala beberapa saat, tidak akan menyala dalam waktu yang lama.Jika lampu indikator ABS tetap menyala saat mobil dikendarai, Sahabat harus mewaspadai terjadinya malfungsi pada sistem kerja pengereman. Jika memaksakan berkendara, maka ketika melalui jalan yang licin atau basah sambil melakukan pengereman keras, akan menyebabkan ban mobil selip dan melintir. Lampu indikator ABS berperan penting untuk mengetahui sistem kerja rem ABS berfungsi atau tidak. Terkadang lampu ABS menyala dapat memberikan informasi saat terjadi kebocoran minyak rem.\r\n\r\nJika ini terjadi, maka distribusi minyak rem ke kaliper tidak akan berjalan dengan benar, otomatis fungsi ABS dipastikan ikut bermasalah. Mau tidak mau, Anda harus meminta bantuan mekanik untuk memperbaikinya.\r\n\r\nSelain itu, lampu indikator memang dapat bermasalah karena sensor yang mungkin kotor, kabel rusak hingga soket sambungan yang tidak terpasang dengan rapat. Tentu saja hal tersebut dapat membuat lampu indikator ABS dapat menyala, walau dalam keadaan normal.\r\n\r\nNamun jika Sahabat tidak melihat kebocoran minyak rem, sangat mungkin sensor kecepatan yang menjadi pemicunya. Sensor tersebut bekerja sama dengan sistem Electronic Stability Control (ESC) yang juga mungkin rusak.\r\n\r\nSistem kerja ABS dan ESC harus saling terkait untuk mengetahui seberapa cepat putaran roda. Dengan mengetahui kecepatan maka dapat mendistribusikan gaya pengereman sesuai kebutuhan.', 'jangan-panik-lampu-abs-menyala-ini-cara-tepat-meng', '2024-07-04 10:23:00'),
(21, 'Rawan Aquaplaning! Begini Cara Hindarinya', '1721964578_ed2308d8334147609988.jpeg', 'Akhir-akhir ini beberapa kota di Indonesia tengah diguyur hujan. Ketika musim hujan, keselamatan di jalan raya menjadi prioritas utama. Air hujan yang turun dengan deras dan jalan menjadi licin dan sangat memungkinkan jalanan akan timbul genangan air sehingga sering kali menjadi ujian bagi kesigapan para pengemudi untuk berhati-hati.\r\n\r\nAquaplaning adalah suatu kondisi kendaraan seperti mobil kehilangan daya cengkeram sehingga kehilangan kendali. Penyebab utamanya adalah genangan air, seperti hujan dan banjir. Genangan air yang terlalu besar akan membuat mobil kesulitan dalam melaju. Tidak hanya genangan air, aquaplaning juga bisa terjadi karena keadaan kendaraan yang tidak baik.Ban mobil akan sulit dikendalikan sehingga daya cengkramnya menurun. Apalagi jika ban mobil tersebut sudah tipis. Resiko mengalami aquaplaning saat kondisi hujan akan lebih besar. Ban yang tipis tidak bisa lagi memecah genangan air.\r\n\r\nBelum lagi jika mobil melaju dengan kecepatan tinggi di jalan berair, maka akan mudah melayang atau mengambang. Jika tidak sigap mengendarai mobil, maka akan terjungkal dan terjadi kecelakaan. Oleh karena itu, Sahabat perlu berhati-hati jika mengalami kondisi ini saat berkendara.\r\n\r\nAda beberapa hal yang dapat menjadi ciri-ciri mobil yang rentan atau sedang mengalami aquaplaning. Apabila terjadi beberapa ketidakwajaran seperti yang dijelaskan di bawah ini, maka Kamu harus lebih sigap dan berhati-hatilah saat mengendarai mobil. \r\n\r\nTanda pertama yang bisa dirasakan adalah suara mesin mendadak terdengar lebih keras dari biasanya. Hal ini karena mesin yang terkena genangan terlalu deras akan menjadi panas hingga menimbulkan suara. Kondisi ini akan membuat laju kendaraan menjadi lebih cepat sehingga tidak terkendali. \r\n\r\nTanda berikutnya adalah mobil terasa lebih ringan. Hal ini disebabkan oleh tekanan air yang lebih besar yang sanggup mengangkat dan mengambangkan mobil. Selain itu, bagian belakang mobil pada sisi-sisinya akan terasa melayang.', 'rawan-aquaplaning-begini-cara-hindarinya', '2024-07-01 09:43:00'),
(27, 'Kenali Penyakit Mobil Nissan Livina, Si Mobil Megg', '1721986168_04267310ad64591000e3.jpeg', 'Mobil Nissan Grand Livina tipe L10 merupakan mobil Low Multi Purpose Vehicle (LMPV) yang masih banyak dicari atau diminati. Miliki 7 seat, mobil Nissan Grand Livina menjadi idaman mobil keluarga dan tenar dengan kenyamanannya. Nissan Grand Livina menawarkan tampilan eksterior yang modern dan berbagai fitur yang menawan. Memiliki dua pilihan mesin yaitu mesin HR15DE 1.5L yang mampu mengeluarkan 109 PS dan torsi maksimal 148 Nm dan mesin MR18DE bertenaga 128 PS dan 174 Nm torsi maksimal. dengan transmisi manual atau otomatis\r\n\r\n\r\n\r\nMeski terkenal dengan nyaman dan harganya yang masih terjangkau sehingga masih menjadi incaran, mobil Nissan Grand Livina memerlukan perhatian yang lebih karena memiliki beberapa penyakit yang sering muncul. Tak sedikit pemilik mobil Nissan Livina mempermasalahkan tarikan loyo, power tenaga mesin berkurang, dan konsumsi bahan bakar lebih boros pada saat servis berkala.\r\n\r\n\r\n\r\nBerikut beberapa permasalahan yang sering muncul pada mobil Nissan Grand Livina yang perlu Sahabat ketahui.\r\n\r\n\r\n\r\nDilansir dari Kompas.com, menurut Taufan selaku Kepala Cabang Dream Garage Bengkel Spesialis Nissan & Datsun Yogyakarta ada beberapa penyakit umum pada Nissan Grand Livina khususnya tahun lama atau lawas.\r\n\r\n\r\n\r\nMesin Menggelitik\r\n\r\nPada kasus mesin menggelitik di mobil Nissan Grand Livina disebabkan karena pemilihan bahan bakar dengan nilai oktan tidak sesuai spesifikasi pabrikan. Menurut Taufan Nissan Livina dan Grand Livina memiliki kompresi mesin yang tinggi, sehingga pengguna perlu memahami karakternya. Dengan tingkat kompresi mesin yang tinggi pengguna mobil Nissan perlu menggunakan BBM yang baik karena akan mempengaruhi perfoma mobil dalam waktu jangka panjang.\r\n\r\n\r\n\r\nsesuai standar servis untuk menangani permasalahan ngelitik, perawatan yang dilakukan dengan membersihkan ruang bakar. Pembersihan kerak karbon bisa menggunakan menggunakan cairan carbon clean secara menyeluruh. Penumpukan defisit kerak karbon bisa saja terjadi karena pemakaian kualitas BBM di luar spesifikasi.', 'kenali-penyakit-mobil-nissan-livina-si-mobil-megge', '2024-06-13 11:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1722917351, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `gambar-1` varchar(255) DEFAULT NULL,
  `gambar-2` varchar(255) DEFAULT NULL,
  `gambar-3` varchar(255) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `transmisi` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `kilometer` varchar(50) NOT NULL,
  `mesin` varchar(50) NOT NULL,
  `bahanbakar` varchar(50) NOT NULL,
  `platnomer` varchar(50) NOT NULL,
  `pajak` date NOT NULL,
  `warna` varchar(50) NOT NULL,
  `bpkb` varchar(50) NOT NULL,
  `cc` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `servis` date NOT NULL,
  `seat` int(11) NOT NULL,
  `buku-manual` varchar(50) NOT NULL,
  `buku-service` varchar(50) NOT NULL,
  `kunci` varchar(50) NOT NULL,
  `fitur-1` varchar(50) NOT NULL,
  `fitur-2` varchar(50) NOT NULL,
  `fitur-3` varchar(50) NOT NULL,
  `interior-1` varchar(50) NOT NULL,
  `interior-2` varchar(50) NOT NULL,
  `interior-3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `gambar-1`, `gambar-2`, `gambar-3`, `nama`, `deskripsi`, `harga`, `tanggal`, `transmisi`, `lokasi`, `kilometer`, `mesin`, `bahanbakar`, `platnomer`, `pajak`, `warna`, `bpkb`, `cc`, `merek`, `jenis`, `servis`, `seat`, `buku-manual`, `buku-service`, `kunci`, `fitur-1`, `fitur-2`, `fitur-3`, `interior-1`, `interior-2`, `interior-3`) VALUES
(15, '1721960883_910dcc8041eac6231130.jpeg', '1721960883_94c7b67637efbbbef492.jpeg', '1721960883_ab80766cfbfca6c30279.jpeg', 'Toyota Yaris', 'Toyota Yaris adalah mobil subkompak yang diproduksi oleh Toyota sejak tahun 1999. Mobil ini dirancang untuk menjadi kendaraan yang efisien dan praktis untuk penggunaan sehari-hari, terutama di lingkungan perkotaan.', '250.000.000', '2024-07-26', 'Manual', 'Surabaya', '2.000', 'Baik', 'Bensin', 'Genap', '2028-12-26', 'Kuning', 'Ada', '1.500', 'Toyota', 'LUXURY', '2024-11-20', 4, 'Ada', 'Ada', 'Ada', 'Sistem Infotainment Modern', 'Keselamatan Aktif', 'Efisiensi Bahan Bakar', 'Desain Kabin Yang Nyaman', 'Ruang Kaki Luas', 'Kontrol Suhu Otomatis');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `nama-mobil` varchar(50) NOT NULL,
  `merek-mobil` varchar(50) NOT NULL,
  `jenis-mobil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id`, `nama`, `email`, `telepon`, `nama-mobil`, `merek-mobil`, `jenis-mobil`) VALUES
(6, 'Bombe', 'bombe@gmail.com', '01231231', 'Toyota Yaris', 'Toyota', 'LUXURY');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `judul-review` varchar(50) NOT NULL,
  `isi-review` text NOT NULL,
  `nama-review` varchar(50) NOT NULL,
  `tanggal-review` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `judul-review`, `isi-review`, `nama-review`, `tanggal-review`) VALUES
(1, 'Honda Brio', 'keren banget anjay kaak', 'budi', '2024-07-19 15:39:00'),
(2, 'Mercedez Benz', 'keren banget ini fiturnya okeh banget lah sepada saya belinya', 'hafizh', '2024-07-19 15:40:00'),
(4, 'Toyota Alphard', 'asd jika buka wasad asdwadmlwkd', 'vilary', '2024-07-22 13:35:00'),
(5, 'anjaymabar', 'sadawd', 'nawd', '2024-07-24 11:12:00'),
(7, 'Honda Brio', 'keren banget anjay kaak123', 'budi', '2024-07-19 15:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
