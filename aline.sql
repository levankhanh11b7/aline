-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2024 lúc 03:04 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `aline`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `author`, `created_at`, `updated_at`, `image`) VALUES
(1, 'hhh', '<p>Để<a href=\"https://upbase.vn/chien-luoc-thu-hut-khach-hang-tren-san-shopee-lazada/\">thu hút khách hàng</a>và gia tăng doanh số, việc<a href=\"https://upbase.vn/cach-dang-bai-ban-hang-tren-facebook/\">xây dựng nội dung bài đăng bán hàng online hiệu quả trên Facebook</a>là điều vô cùng quan trọng. Bài viết này sẽ chia sẻ với bạn những bí quyết để viết mẫu bài đăng bán hàng online thu hút, hấp dẫn và thúc đẩy hành động mua hàng khách hàng.</p><h2><strong>Cấu trúc của một bài đăng bán hàng online mẫu</strong></h2><p>Dưới đây là cấu trúc của một mẫu bài đăng bán hàng online cơ bản mà bạn có thể tham khảo:</p><h3><strong>I. Giới thiệu sản phẩm</strong></h3><p>Để giới thiệu sản phẩm hiệu quả, bạn cần lưu ý những thông tin sau:</p><h4>1. Nội dung (content)</h4><p>Nội dung trong bài đăng bán hàng online là yếu tố quyết định để thu hút và thuyết phục khách hàng. Dưới đây là những nội dung mà một bài viết giới thiệu sản phẩm cần đảm bảo:</p><ul><li>Tên sản phẩm:<ul><li>Ngắn gọn, súc tích, thu hút sự chú ý.</li><li>Chứa từ khóa chính.</li><li>Tạo cảm giác tò mò, muốn click đọc.</li></ul></li><li>Cung cấp thông tin đầy đủ, chính xác về sản phẩm.</li><li>Sử dụng ngôn ngữ dễ hiểu, phù hợp với đối tượng khách hàng.</li><li>Các công dụng chính.</li><li>Đặc điểm nổi bật.</li></ul><h4>2. Hình ảnh</h4><p>Hình ảnh đóng vai trò quan trọng không thể phủ nhận trong việc tạo ra những bài đăng bán hàng hiệu quả. Đối với đa số người dùng, sau tiêu đề, họ thường quan tâm đến hình ảnh. Do đó, việc sử dụng hình ảnh bắt mắt sẽ giúp bài viết của bạn thu hút nhiều sự chú ý và tạo ấn tượng mạnh mẽ hơn. Khi thiết kế hình ảnh cho bài đăng bán hàng online, bạn nên chú ý các điều sau:</p><ul><li>Hình ảnh sản phẩm rõ ràng, đẹp mắt.</li><li>Liên quan trực tiếp đến sản phẩm.</li><li>Hình ảnh thể hiện được tính năng, lợi ích của sản phẩm.</li><li>Hình ảnh sáng tạo, thu hút sự chú ý.</li></ul><h4>3. Video</h4><figure class=\"image\"><img src=\"https://cms.upbase.vn/content/images/2024/06/1-5.jpg\" alt=\"Video bán hàng\" srcset=\"https://cms.upbase.vn/content/images/size/w600/2024/06/1-5.jpg 600w, https://cms.upbase.vn/content/images/size/w1000/2024/06/1-5.jpg 1000w, https://cms.upbase.vn/content/images/2024/06/1-5.jpg 1100w\" sizes=\"100vw\" width=\"1100\"></figure><p>Video trong bài đăng bán hàng mang đến trải nghiệm tương tác đa chiều và tăng tính thuyết phục. Có 3 dạng video thường được sử dụng trong<a href=\"https://upbase.vn/ban-hang-online/\">bán hàng online</a>:</p><ol><li><strong>Video giới thiệu sản phẩm</strong>:<ul><li>Giới thiệu sản phẩm một cách ngắn gọn, súc tích và hấp dẫn.</li><li>Nội dung tập trung vào việc giới thiệu sản phẩm và tính năng nổi bật mang đến cho khách hàng.</li><li>Sử dụng hình ảnh, video sản phẩm thực tế để khách hàng có cái nhìn trực quan và rõ ràng về sản phẩm.</li></ul></li><li><strong>Video hướng dẫn sử dụng sản phẩm</strong>:<ul><li>Video cung cấp hướng dẫn chi tiết về cách sử dụng sản phẩm.</li><li>Có thể chia nhỏ các bước hướng dẫn để khách hàng dễ dàng theo dõi và áp dụng.</li><li>Video hướng dẫn sử dụng sản phẩm giúp khách hàng sử dụng đúng công năng của sản phẩm.</li></ul></li><li><strong>Video review sản phẩm</strong>:<ul><li>Video chia sẻ ý kiến và trải nghiệm thực tế từ những khách hàng đã sử dụng sản phẩm.</li><li>Nếu có thể, sử dụng video review từ người nổi tiếng, chuyên gia trong lĩnh vực liên quan đến sản phẩm để tăng độ uy tín.</li><li>Video review nên trung thực và cung cấp thông tin chi tiết về ưu điểm và nhược điểm của sản phẩm để khách hàng có cái nhìn toàn diện.</li></ul></li></ol><h3><strong>II. Công dụng của sản phẩm</strong></h3><p>Ở phần công dụng của sản phẩm, bạn sẽ mô tả lợi ích của sản phẩm và những vấn đề mà sản phẩm có thể giải quyết.</p><ul><li><strong>Nhấn mạnh lợi ích mà sản phẩm mang lại cho khách hàng</strong>: Liệt kê các lợi ích cụ thể mà sản phẩm, dịch vụ mang lại cho người dùng và giải thích cụ thể từng lợi ích để khách hàng hiểu rõ hơn về giá trị của sản phẩm.</li><li><strong>Giải quyết vấn đề gì cho khách hàng</strong>: Mô tả vấn đề cụ thể và cách mà sản phẩm, dịch vụ của bạn giải quyết vấn đề đó.</li></ul><p>Khi bạn thể hiện và nhấn mạnh công dụng của sản phẩm, dịch vụ chi tiết, dễ hiểu sẽ giúp khách hàng hiểu hơn về sản phẩm của bạn.</p>', 'khánh', '2024-09-04 03:44:35', '2024-11-24 05:46:39', 'img/blogs/cBUxhMiAArrzNl3F5nbcpXAkaP1XzvqI1WUgCVOx.png'),
(2, 'sss', '<p>sssssss</p>', 'sss', '2024-11-24 05:22:29', '2024-11-24 05:46:58', 'img/blogs/nNUdrkd0JTcnte4VfMvwUhUzrRQDCadSOQR6ahX1.png'),
(3, 'hh', '<p>hhhhhhh</p>', 'hh', '2024-11-24 05:32:16', '2024-11-27 23:32:55', 'img/products/WiiYdIorl5iHHPyUMMJEKYrSs9483rVoA6RIxBjJ.png'),
(4, 'fffffff', '<p>fffffffffffff</p>', 'fff', '2024-11-24 05:33:01', '2024-11-24 05:33:01', 'img/blogs/hPCgOqjJBUcLwEQ8ci2zFArAUJzmOI7FYAjIFvIB.png'),
(5, 'sss', '<p>sssssss</p>', 'sss', '2024-11-24 05:37:47', '2024-11-24 05:37:47', 'img/blogs/YMzzuiTp4s0BW9CVMq8MQC6hmuUW8b57A6BTqr21.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Nikes', 'img/brand/wOU51Z1XoWThhw3iqsJnw9l0HXNct79BuKMIWl9N.jpg', '2024-08-20 22:08:21', '2024-08-20 22:08:21'),
(2, 'lv', 'img/brand/WXnH1ADbI4uLkWXnPUf5l07dWKDA0Ogjc15WVr0f.jpg', '2024-08-20 22:08:38', '2024-08-20 22:08:38'),
(3, 'channel', 'img/brand/XpSXs14VKWDXQlnDiEPhRHhJitb5oGjIxBD2lB3z.jpg', '2024-08-20 22:08:52', '2024-08-20 22:09:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('levankhanh11b7@gmail.com|127.0.0.1', 'i:1;', 1732767377),
('levankhanh11b7@gmail.com|127.0.0.1:timer', 'i:1732767377;', 1732767377),
('teonv@fpt.edu.vn|127.0.0.1', 'i:1;', 1732181981),
('teonv@fpt.edu.vn|127.0.0.1:timer', 'i:1732181981;', 1732181981);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'khanh', '2024-11-21 07:02:51', '2024-11-21 07:02:51'),
(3, 'áo', '2024-11-27 23:11:58', '2024-11-27 23:11:58'),
(4, 'quần', '2024-11-27 23:12:46', '2024-11-27 23:12:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `jobs`
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
-- Cấu trúc bảng cho bảng `job_batches`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2024_08_08_151458_create_brands_table', 1),
(4, '2024_08_08_155436_create_products_table', 1),
(5, '2024_08_14_135230_create_blogs_table', 1),
(6, '2024_08_14_143839_create_contacts_table', 1),
(7, '2024_08_15_065346_create_users_table', 1),
(8, '2024_08_21_044729_create_orderss_table', 1),
(9, '2024_08_21_044730_create_order_details_table', 1),
(10, '2024_11_21_095337_create_categories_table', 2),
(11, '2024_11_21_135829_create_categories_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `order_number` varchar(50) NOT NULL,
  `status` enum('pending','completed','canceled') NOT NULL DEFAULT 'pending',
  `total_amount` decimal(10,2) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `shipping_address` text NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `order_number`, `status`, `total_amount`, `phone`, `email`, `shipping_address`, `payment_method`, `created_at`, `updated_at`) VALUES
(5, 1, 'khanh le', 'ORDER_6748133bd81bb', 'pending', 1267.00, '0909309300', 'khanhlvpd07987@fpt.edu.vn', 'ggg/fffgh/fff/hhhh', 'check_payment', '2024-11-27 23:52:43', '2024-11-27 23:52:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(5, 5, 6, 5, 11.00, '2024-11-27 23:52:43', '2024-11-27 23:52:43'),
(6, 5, 3, 1, 1212.00, '2024-11-27 23:52:43', '2024-11-27 23:52:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`, `brand_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'tttt', 1212.00, 'hhhhhhhh', 'img/products/eZVhArukuPVSyqfmVlZgq5prmUnKG3WoYK75FeLZ.png', 2, 1, '2024-11-26 01:07:53', '2024-11-26 01:39:56'),
(3, 'áo phong', 1212.00, 'xịn mới new', 'img/products/3punlaZk2wsukp1UOY99Vk8ehnceCkCoV4ASCDcE.jpg', 1, 3, '2024-11-27 23:16:21', '2024-11-27 23:16:21'),
(4, 'jean', 12121.00, 'đẹp', 'img/products/H7ZwwfkTbOfB4p6M6hKSDvaBsB6nBpEB2sIk7vtq.jpg', 1, 4, '2024-11-27 23:17:10', '2024-11-27 23:17:10'),
(5, 'balo xách', 11111.00, 'ddddd', 'img/products/u5W6Qc7Ri6iTXNnsRmP2Ey3QVH4PeI0dMnALk9AO.jpg', 2, 3, '2024-11-27 23:17:47', '2024-11-27 23:17:47'),
(6, 'khăn', 11.00, 'mới mua xịn', 'img/products/p6qMDrHRWiGWZBXXeTguNzpfCFvCrHotIqAQr7Wz.jpg', 1, 1, '2024-11-27 23:18:20', '2024-11-27 23:18:20'),
(7, 'kính đen', 99.00, 'full viền', 'img/products/BsmEezSuNV0qrcVrEBEWJ4PkaOm2dVbWKhP8Kk5w.jpg', 3, 4, '2024-11-27 23:18:58', '2024-11-27 23:18:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
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
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('sG3C4sWozaQkuiSYZyNRLjljzwxrjy52rTfhiWbC', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoickM0OUJtdXQxR1lvb0ltZWFieU1jN2xUbUJ2Yjk2NTNBaXhISGZLYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1733191083);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'khanh', 'khanhlvpd07987@fpt.edu.vn', NULL, '$2y$12$5xI1sP8szoOu/vVzcTUh1eVhuS9B5UZS2FfaFpvtTCJTqNPeMooLG', 'admin', 0, NULL, '2024-08-20 22:07:22', '2024-08-20 22:07:22');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_category_id_foregein` (`category_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foregein` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
