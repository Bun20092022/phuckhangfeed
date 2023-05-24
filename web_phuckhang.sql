-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 23, 2023 lúc 12:32 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_phuckhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_banner`
--

CREATE TABLE `qh_banner` (
  `id` int(11) NOT NULL,
  `banner_group` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `button_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `button_css` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `imgslider` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `num` int(1) NOT NULL,
  `id_slidergroup` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_banner`
--

INSERT INTO `qh_banner` (`id`, `banner_group`, `title`, `info`, `button_name`, `button_css`, `imgslider`, `link`, `num`, `id_slidergroup`) VALUES
(42, '', 'Banner 1', '', '', '', 'https://themebun.com/ckfinder/userfiles/images/ducvu/banner_super-a-pro.png', '', 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_bannergroup`
--

CREATE TABLE `qh_bannergroup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vitri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `public` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_bannergroup`
--

INSERT INTO `qh_bannergroup` (`id`, `name`, `vitri`, `size`, `public`) VALUES
(2, 'Banner Trang chủ Desktop', '1', '', 0),
(3, 'Banner trang chủ Mobile', '2', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_code_download`
--

CREATE TABLE `qh_code_download` (
  `id` int(11) NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_code_download`
--

INSERT INTO `qh_code_download` (`id`, `link`, `code`) VALUES
(1, 'https://drive.google.com/file/d/1h8AtkOg75ffjcxsoDWjA1SG-GcY6QZV4/view?usp=sharing', 'ac2z5pakgancamkacmka'),
(2, 'https://1drv.ms/u/s!AvgtG9_0x2aWnQDHIroqJhbQK4RR?e=3Idt7P', 'abvA4aca1Zaca4KLm0bc'),
(3, 'https://drive.google.com/file/d/15WC3hfqWEmtYnKEs4QLV4WjqBA_uJ-9q/view?usp=sharing', 'aBg56HjA5Fvytyuivac'),
(4, 'https://1drv.ms/u/s!AvgtG9_0x2aWnH__XFAEGHxxIXp4?e=ZYVRc5', 'BAg5F6HjA5FvbN78Gjhkl');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_order`
--

CREATE TABLE `qh_order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nguoimuahang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8_unicode_ci NOT NULL,
  `extend` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `creat` int(11) NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_order`
--

INSERT INTO `qh_order` (`id`, `name`, `nguoimuahang`, `phone`, `diachi`, `ghichu`, `extend`, `status`, `creat`, `email`) VALUES
(8, '', 'Nguyễn Văn A', '123', 'a', 'q', '{\"c4ca4238a0b923820dcc509a6f75849b\":{\"id\":\"1\",\"name\":\"T\\u00ean s\\u1ea3n ph\\u1ea9m\",\"qty\":1,\"price\":195000,\"option\":{\"price\":\"269000\"},\"rowid\":\"c4ca4238a0b923820dcc509a6f75849b\",\"subtotal\":195000}}', 24, 1335114000, 'themebun.com@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_posts`
--

CREATE TABLE `qh_posts` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `url_vn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_jp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_kr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_ch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_lg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `imgwebsite` text COLLATE utf8_unicode_ci NOT NULL,
  `imgsocial` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `infosub` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `priceevent` int(11) NOT NULL,
  `extend` text COLLATE utf8_unicode_ci NOT NULL,
  `id_posts_video` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `view` int(11) NOT NULL,
  `post_date` int(11) NOT NULL,
  `post_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `post_tags_id` text COLLATE utf8_unicode_ci NOT NULL,
  `post_category_id` text COLLATE utf8_unicode_ci NOT NULL,
  `post_category_id_ze` int(11) NOT NULL,
  `post_type_id` int(11) NOT NULL,
  `post_templates_id` int(11) NOT NULL,
  `post_status` int(11) NOT NULL,
  `post_comment` int(11) NOT NULL,
  `post_templates_main` int(11) NOT NULL DEFAULT 19,
  `post_website` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_posts`
--

INSERT INTO `qh_posts` (`id`, `name`, `url_vn`, `url_en`, `url_jp`, `url_kr`, `url_ch`, `url_lg`, `title`, `description`, `keywords`, `imgwebsite`, `imgsocial`, `content`, `infosub`, `price`, `priceevent`, `extend`, `id_posts_video`, `view`, `post_date`, `post_password`, `post_tags_id`, `post_category_id`, `post_category_id_ze`, `post_type_id`, `post_templates_id`, `post_status`, `post_comment`, `post_templates_main`, `post_website`) VALUES
(62, '{\"vn\":\"Gi\\u1ea3i ph\\u00e1p dinh d\\u01b0\\u1ee1ng ti\\u00ean phong c\\u1ee7a Cargill\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'giai-phap-dinh-duong-tien-phong-cua-cargill', '', '', '', '', '', '{\"vn\":\"Gi\\u1ea3i ph\\u00e1p dinh d\\u01b0\\u1ee1ng ti\\u00ean phong c\\u1ee7a Cargill\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/cargillfeed.com.vn\\/wp-content\\/webp-express\\/webp-images\\/uploads\\/2022\\/09\\/sow09-low-scaled.jpg.webp\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/cargillfeed.com.vn\\/wp-content\\/webp-express\\/webp-images\\/uploads\\/2022\\/09\\/sow09-low-scaled.jpg.webp\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"<p>Nu&ocirc;i&nbsp;heo sinh s\\u1ea3n lu&ocirc;n \\u0111\\u01b0\\u1ee3c nh\\u1eadn di\\u1ec7n l&agrave; m\\u1ed9t trong nh\\u1eefng kh&acirc;u quan tr\\u1ecdng nh\\u1ea5t trong ch\\u0103n nu&ocirc;i heo hi\\u1ec7n \\u0111\\u1ea1i. \\u0110\\u1ec3&nbsp;n&acirc;ng cao n\\u0103ng su\\u1ea5t heo n&aacute;i&nbsp;c\\u0169ng nh\\u01b0 n&acirc;ng cao hi\\u1ec7u qu\\u1ea3 ch\\u0103n nu&ocirc;i th&igrave; vi\\u1ec7c&nbsp;<strong>ch\\u0103m s&oacute;c<\\/strong>&nbsp;v&agrave;&nbsp;<strong>nu&ocirc;i d\\u01b0\\u1ee1ng<\\/strong>&nbsp;heo n&aacute;i&nbsp;theo c&aacute;c giai \\u0111o\\u1ea1n l&agrave; r\\u1ea5t c\\u1ea7n thi\\u1ebft.<\\/p>\\r\\n\\r\\n<p><strong>\\u0110\\u1ea7u t\\u01b0 dinh d\\u01b0\\u1ee1ng cho giai \\u0111o\\u1ea1n sinh s\\u1ea3n l&agrave; \\u0111\\u1ea7u t\\u01b0 th&ocirc;ng minh<\\/strong><\\/p>\\r\\n\\r\\n<p>Nh\\u1eefng kh&oacute; kh\\u0103n m&agrave; ng\\u01b0\\u1eddi nu&ocirc;i th\\u01b0\\u1eddng g\\u1eb7p ph\\u1ea3i \\u1edf giai \\u0111o\\u1ea1n sinh s\\u1ea3n \\u0111&oacute; l&agrave;:<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>Heo n&aacute;i h\\u1eadu b\\u1ecb c&oacute; t\\u1ef7 l\\u1ec7 ch\\u1ecdn l\\u1ecdc th\\u1ea5p, s\\u1ed1 l\\u01b0\\u1ee3ng tr\\u1ee9ng \\u0111\\u01b0\\u1ee3c th\\u1ee5 thai &iacute;t, ph&ocirc;i thai y\\u1ebfu, d\\u1ec5 ch\\u1ebft.<\\/li>\\r\\n\\t<li>Heo n&aacute;i tr\\u01b0\\u1edbc, trong v&agrave; sau khi sinh con th\\u01b0\\u1eddng m\\u1ec7t m\\u1ecfi, ch&aacute;n \\u0103n.<\\/li>\\r\\n\\t<li>Heo m\\u1eb9 &iacute;t s\\u1eefa ho\\u1eb7c s\\u1eefa kh&ocirc;ng \\u0111\\u1ee7 dinh d\\u01b0\\u1ee1ng \\u0111\\u1ec3 nu&ocirc;i con.<\\/li>\\r\\n\\t<li>Heo con s\\u01a1 sinh nh\\u1eb9 c&acirc;n, \\u1ed1m y\\u1ebfu, d\\u1ec5 b\\u1ec7nh&hellip;<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>V&agrave; ng\\u01b0\\u1eddi ch\\u0103n nu&ocirc;i th\\u01b0\\u1eddng c&oacute; t&acirc;m l&yacute; ch\\u1ecdn gi\\u1ea3i ph&aacute;p th&uacute;c &eacute;p d\\u1ed3n d\\u1eadp khi\\u1ebfn n&aacute;i c&agrave;ng b\\u1ecb stress, \\u1ea3nh h\\u01b0\\u1edfng c\\u1ef1c l\\u1edbn \\u0111\\u1ebfn ch\\u1ea5t l\\u01b0\\u1ee3ng v&agrave; n\\u0103ng su\\u1ea5t tr\\u1ea1i.<\\/p>\\r\\n\\r\\n<p>Ch&iacute;nh v&igrave; th\\u1ebf, ng\\u01b0\\u1eddi ch\\u0103n nu&ocirc;i c\\u1ea7n ph\\u1ea3i l\\u1ef1a ch\\u1ecdn m\\u1ed9t ch\\u1ebf \\u0111\\u1ed9&nbsp;dinh d\\u01b0\\u1ee1ng&nbsp;ph&ugrave; h\\u1ee3p, &aacute;p d\\u1ee5ng \\u0111&uacute;ng th\\u1eddi \\u0111i\\u1ec3m \\u0111\\u1ec3 \\u0111em l\\u1ea1i n\\u0103ng su\\u1ea5t t\\u1ed1i \\u01b0u cho heo n&aacute;i, t\\u0103ng c\\u01b0\\u1eddng s\\u1ee9c s\\u1ed1ng heo con, khai th&aacute;c n&aacute;i l&acirc;u d&agrave;i, \\u0111\\u1ea1t l\\u1ee3i nhu\\u1eadn b\\u1ec1n v\\u1eefng.<\\/p>\\r\\n\\r\\n<p>Th\\u1ea5u hi\\u1ec3u \\u0111\\u01b0\\u1ee3c nhu c\\u1ea7u c\\u1ee7a kh&aacute;ch h&agrave;ng, Cargill &ndash; t\\u1eadp \\u0111o&agrave;n s\\u1ea3n xu\\u1ea5t th\\u1ee9c \\u0103n ch\\u0103n nu&ocirc;i h&agrave;ng \\u0111\\u1ea7u th\\u1ebf gi\\u1edbi c&oacute; l\\u1ecbch s\\u1eed h\\u01a1n 150 n\\u0103m h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t tri\\u1ec3n trong l\\u0129nh v\\u1ef1c n&ocirc;ng nghi\\u1ec7p \\u0111&atilde; nghi&ecirc;n c\\u1ee9u, ph&aacute;t tri\\u1ec3n ch\\u01b0\\u01a1ng tr&igrave;nh dinh d\\u01b0\\u1ee1ng \\u0111\\u1eb3ng c\\u1ea5p v&agrave; ho&agrave;n h\\u1ea3o, k\\u1ecbp th\\u1eddi gi&uacute;p ng\\u01b0\\u1eddi nu&ocirc;i y&ecirc;n t&acirc;m t&aacute;i \\u0111&agrave;n &ndash; gi\\u1eef \\u0111&agrave;n n&aacute;i, n&acirc;ng cao n\\u0103ng su\\u1ea5t v&agrave; hi\\u1ec7u qu\\u1ea3 to&agrave;n di\\u1ec7n tr\\u01b0\\u1edbc t&igrave;nh h&igrave;nh th\\u1ecb tr\\u01b0\\u1eddng gi&aacute; heo \\u0111ang t\\u0103ng l&ecirc;n. \\u0110&uacute;ng nh\\u01b0 d\\u1ef1 \\u0111o&aacute;n, d&ograve;ng si&ecirc;u ph\\u1ea9m Livelle &ndash; 8082 d&agrave;nh cho heo n&aacute;i giai \\u0111o\\u1ea1n chuy\\u1ec3n ti\\u1ebfp t\\u1eeb mang thai \\u0111\\u1ebfn sau khi \\u0111\\u1ebb 7 ng&agrave;y \\u0111&atilde; \\u0111&aacute;p \\u1ee9ng ho&agrave;n to&agrave;n mong \\u0111\\u1ee3i c\\u1ee7a ng\\u01b0\\u1eddi nu&ocirc;i v&agrave; tr\\u1edf th&agrave;nh tr\\u1ee3 th\\u1ee7 \\u0111\\u1eafc l\\u1ef1c trong vi\\u1ec7c nu&ocirc;i d\\u01b0\\u1ee1ng heo n&aacute;i. S\\u1ea3n ph\\u1ea9m 8082 n&agrave;y \\u0111&atilde; \\u0111\\u01b0\\u1ee3c c&aacute;c trang tr\\u1ea1i nu&ocirc;i heo ti&ecirc;n ti\\u1ebfn \\u1edf nh\\u1eefng qu\\u1ed1c gia ph&aacute;t tri\\u1ec3n tr&ecirc;n th\\u1ebf gi\\u1edbi nh\\u01b0 H&agrave; Lan, Ph&aacute;p, Ba Lan, &hellip; tin d&ugrave;ng v&igrave; \\u0111\\u1ea1t \\u0111\\u01b0\\u1ee3c nhi\\u1ec1u th&agrave;nh t&iacute;ch n\\u1ed5i tr\\u1ed9i v&agrave; \\u1ed5n \\u0111\\u1ecbnh.<\\/p>\\r\\n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', '', 0, 1684170000, '', '[\"0\"]', '[\"96\",\"95\"]', 96, 1, 99, 2, 3, 19, 1),
(64, '{\"vn\":\"Gi\\u1edbi thi\\u1ec7u\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'gioi-thieu', 'contact', '', '', '', '', '{\"vn\":\"Gi\\u1edbi thi\\u1ec7u\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"<p><strong>Cargill, t\\u1eadp \\u0111o&agrave;n h&agrave;ng \\u0111\\u1ea7u c\\u1ee7a M\\u1ef9 trong l\\u0129nh v\\u1ef1c n&ocirc;ng nghi\\u1ec7p, th\\u1ef1c ph\\u1ea9m, s\\u1ea3n ph\\u1ea9m c&ocirc;ng nghi\\u1ec7p v&agrave; d\\u1ecbch v\\u1ee5 t&agrave;i ch&iacute;nh v\\u1edbi h\\u01a1n 155.000 nh&acirc;n vi&ecirc;n l&agrave;m vi\\u1ec7c tr&ecirc;n 70 qu\\u1ed1c gia kh\\u1eafp c&aacute;c ch&acirc;u l\\u1ee5c.<\\/strong><\\/p>\\r\\n\\r\\n<p><strong>L\\u1ecaCH S\\u1eec H&Igrave;NH TH&Agrave;NH V&Agrave; PH&Aacute;T TRI\\u1ec2N<\\/strong><\\/p>\\r\\n\\r\\n<p>V\\u1edbi kh&aacute;t v\\u1ecdng th&agrave;nh c&ocirc;ng m&atilde;nh li\\u1ec7t Cargill \\u0111&atilde; ph&aacute;t tri\\u1ec3n li&ecirc;n t\\u1ee5c v&agrave; b\\u1ec1n v\\u1eefng g\\u1ea7n hai th\\u1ebf k\\u1ef7 qua \\u0111\\u1ec3 tr\\u1edf th&agrave;nh c&ocirc;ng ty ti&ecirc;n phong \\u0111i \\u0111\\u1ea7u \\u0111\\u01b0\\u1ee3c b&igrave;nh ch\\u1ecdn l&agrave; nh&agrave; s\\u1ea3n xu\\u1ea5t, kinh doanh, ph&acirc;n ph\\u1ed1i c&aacute;c m\\u1eb7t h&agrave;ng n&ocirc;ng s\\u1ea3n, th\\u1ef1c ph\\u1ea9m v&agrave; t\\u01b0 v\\u1ea5n t&agrave;i ch&iacute;nh l\\u1edbn nh\\u1ea5t th\\u1ebf gi\\u1edbi. V\\u1edbi mong mu\\u1ed1n k\\u1ebft n\\u1ed1i cung v&agrave; c\\u1ea7u tr&ecirc;n to&agrave;n th\\u1ebf gi\\u1edbi, lu&ocirc;n h\\u01b0\\u1edbng \\u0111\\u1ebfn c&aacute;c th\\u1ecb tr\\u01b0\\u1eddng ti\\u1ec1m n\\u0103ng trong l\\u0129nh v\\u1ef1c n&ocirc;ng nghi\\u1ec7p v&agrave; th\\u1ef1c ph\\u1ea9m, v&igrave; v\\u1eady Cargill \\u0111&atilde; \\u0111\\u1ebfn v\\u1edbi Vi\\u1ec7t Nam.<\\/p>\\r\\n\\r\\n<p>Cargill Vi\\u1ec7t Nam ra \\u0111\\u1eddi v&agrave;o th&aacute;ng 10 n\\u0103m 1995 ngay sau s\\u1ef1 ki\\u1ec7n l\\u1ecbch s\\u1eed Vi\\u1ec7t Nam v&agrave; Hoa K\\u1ef3 b&igrave;nh th\\u01b0\\u1eddng h&oacute;a quan h\\u1ec7 ngo\\u1ea1i giao, Cargill Vi\\u1ec7t Nam \\u0111&atilde; ph&aacute;t tri\\u1ec3n m\\u1ea1nh m\\u1ebd v&agrave; li&ecirc;n t\\u1ee5c, nhanh ch&oacute;ng v&agrave; b\\u1ec1n v\\u1eefng \\u0111\\u1ec3 tr\\u1edf th&agrave;nh c&ocirc;ng ty h&agrave;ng \\u0111\\u1ea7u trong l\\u0129nh v\\u1ef1c th\\u1ee9c \\u0103n ch\\u0103n nu&ocirc;i v&agrave; nu&ocirc;i tr\\u1ed3ng th\\u1ee7y s\\u1ea3n v\\u1edbi c&aacute;c d&ograve;ng s\\u1ea3n ph\\u1ea9m ch\\u1ea5t l\\u01b0\\u1ee3ng cao, \\u0111\\u01b0\\u1ee3c s\\u1ea3n xu\\u1ea5t b\\u1edfi c&ocirc;ng ngh\\u1ec7 ti&ecirc;n ti\\u1ebfn, k\\u1ef9 thu\\u1eadt hi\\u1ec7n \\u0111\\u1ea1i \\u0111&aacute;p \\u1ee9ng nhu c\\u1ea7u c\\u1ee7a th\\u1ecb tr\\u01b0\\u1eddng.<\\/p>\\r\\n\\r\\n<p>Cargill hi\\u1ec7n c&oacute; 11 nh&agrave; m&aacute;y ch\\u1ebf bi\\u1ebfn th\\u1ee9c \\u0103n ch\\u0103n nu&ocirc;i t\\u1ea1i H\\u01b0ng Y&ecirc;n, H&agrave; Nam, Ngh\\u1ec7 An, B&igrave;nh \\u0110\\u1ecbnh, \\u0110\\u1ed3ng Nai, B&igrave;nh D\\u01b0\\u01a1ng, Long An (2), Ti\\u1ec1n Giang, \\u0110\\u1ed3ng Th&aacute;p v&agrave; C\\u1ea7n Th\\u01a1 c&ugrave;ng v\\u1edbi \\u0111\\u1ed9i ng\\u0169 nh&acirc;n vi&ecirc;n h&agrave;ng \\u0111\\u1ea7u tr&ecirc;n 2000 ng\\u01b0\\u1eddi, \\u0111ang l&agrave;m vi\\u1ec7c t\\u1ea1i c&aacute;c chi nh&aacute;nh v&agrave; v\\u0103n ph&ograve;ng tr&ecirc;n to&agrave;n qu\\u1ed1c.<\\/p>\\r\\n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', '', 0, 1684170000, '', '[\"0\"]', '[\"89\"]', 89, 1, 99, 2, 3, 19, 1),
(83, '{\"vn\":\"Th\\u00f4ng tin ng\\u01b0\\u1eddi d\\u00f9ng\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'thong-tin-nguoi-dung', '', '', '', '', '', '{\"vn\":\"Th\\u00f4ng tin ng\\u01b0\\u1eddi d\\u00f9ng\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', '', 0, 1684429200, '', '[\"0\"]', '[\"89\"]', 89, 1, 99, 2, 3, 19, 1),
(86, '{\"vn\":\"Ki\\u1ebfm g\\u1ea7n n\\u1eeda t\\u1ef7 m\\u1ed7i n\\u0103m nh\\u1edd c\\u00e1ch nu\\u00f4i g\\u00e0 \\u0111\\u1ed9c \\u0111\\u00e1o\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'kiem-gan-nua-ty-moi-nam-nho-cach-nuoi-ga-doc-dao', '', '', '', '', '', '{\"vn\":\"Ki\\u1ebfm g\\u1ea7n n\\u1eeda t\\u1ef7 m\\u1ed7i n\\u0103m nh\\u1edd c\\u00e1ch nu\\u00f4i g\\u00e0 \\u0111\\u1ed9c \\u0111\\u00e1o\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"Ki\\u1ebfm g\\u1ea7n n\\u1eeda t\\u1ef7 m\\u1ed7i n\\u0103m nh\\u1edd c\\u00e1ch nu\\u00f4i g\\u00e0 \\u0111\\u1ed9c \\u0111\\u00e1o\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/kythuatnongnghiep.com\\/wp-content\\/uploads\\/2018\\/02\\/giong-bo-sua.jpg?0ac664&0ac664\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/kythuatnongnghiep.com\\/wp-content\\/uploads\\/2018\\/02\\/giong-bo-sua.jpg?0ac664&0ac664\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', 'VPOExRPSLqs', 0, 1684429200, '', '[\"0\"]', '[\"103\",\"91\"]', 103, 3, 105, 2, 3, 19, 1),
(87, '{\"vn\":\"C\\u00e1ch Nu\\u00f4i G\\u00e0 Th\\u1ea3 V\\u01b0\\u1eddn T\\u1eeb A-Z t\\u1ec9 l\\u1ec7 s\\u1ed1ng cao !\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'cach-nuoi-ga-tha-vuon-tu-a-z-ti-le-song-cao', '', '', '', '', '', '{\"vn\":\"C\\u00e1ch Nu\\u00f4i G\\u00e0 Th\\u1ea3 V\\u01b0\\u1eddn T\\u1eeb A-Z t\\u1ec9 l\\u1ec7 s\\u1ed1ng cao !\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/vet24h.vn\\/wp-content\\/uploads\\/2021\\/08\\/chan-nuoi-gi-loi-nhuan-cao-cho-nong-dan-2021-1.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/vet24h.vn\\/wp-content\\/uploads\\/2021\\/08\\/chan-nuoi-gi-loi-nhuan-cao-cho-nong-dan-2021-1.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"<p>Trung T&acirc;m Cung C\\u1ea5p G&agrave; Gi\\u1ed1ng B&Igrave;NH DUNG - Th&ocirc;n Y&ecirc;n Kho&aacute;i - X Thu\\u1ef5 An - H Ba V&igrave; - TP H&agrave; N\\u1ed9i ( 0915.167.921) l&agrave; trang tr\\u1ea1i g&agrave; m&iacute;a s\\u1ea3n xu\\u1ea5t gi\\u1ed1ng g&agrave; m&iacute;a s\\u1ed1 l\\u01b0\\u1ee3ng l\\u1edbn kh&ocirc;ng ch\\u1ec9 khu v\\u1ef1c Mi\\u1ec1n B\\u1eafc m&agrave; tr&ecirc;n to&agrave;n qu\\u1ed1c.Ch&uacute;ng t&ocirc;i t\\u01b0 v\\u1ea5n v&agrave; gi\\u1edbi thi\\u1ec7u cho b&agrave; con k\\u1ef9 thu\\u1eadt nu&ocirc;i &uacute;m g&agrave; , v\\u1eafcxin, c&aacute;ch gi\\u1ea3m thi\\u1ec7t h\\u1ea1i do b\\u1ec7nh t\\u1eadt, c&aacute;ch ph&ograve;ng v&agrave; \\u0111i\\u1ec1u tr\\u1ecb b\\u1ec7nh . Ch&uacute;ng t&ocirc;i l\\u1ea5y ph\\u01b0\\u01a1ng ch&acirc;m &quot; L\\u1ea4Y L\\u1ee2I NHU\\u1eacN C\\u1ee6A NG\\u01af\\u1edcI CH\\u0102N NU&Ocirc;I L&Agrave;M M\\u1ee4C TI&Ecirc;U CHO M\\u1eccI HO\\u1ea0T \\u0110\\u1ed8NG C\\u1ee6A M&Igrave;NH &quot;<\\/p>\\r\\n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', '9wgnyoeTbS8', 0, 1684515600, '', '[\"0\"]', '[\"103\",\"91\"]', 103, 3, 105, 2, 3, 19, 1),
(88, '{\"vn\":\"\\\"N\\u1eb1m l\\u00f2ng\\\" nh\\u1eefng b\\u00ed quy\\u1ebft ch\\u0103m s\\u00f3c g\\u00e0 con \\u0111\\u1ec3 \\u0111\\u1ea1t hi\\u1ec7u su\\u1ea5t cao | VTC16\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'nam-long-nhung-bi-quyet-cham-soc-ga-con-de-dat-hieu-suat-cao-vtc16', '', '', '', '', '', '{\"vn\":\"\\\"N\\u1eb1m l\\u00f2ng\\\" nh\\u1eefng b\\u00ed quy\\u1ebft ch\\u0103m s\\u00f3c g\\u00e0 con \\u0111\\u1ec3 \\u0111\\u1ea1t hi\\u1ec7u su\\u1ea5t cao | VTC16\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/media.vneconomy.vn\\/w800\\/images\\/upload\\/2021\\/08\\/02\\/nuoiga-hleq.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/media.vneconomy.vn\\/w800\\/images\\/upload\\/2021\\/08\\/02\\/nuoiga-hleq.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"<p>VTC16 | Tr&ecirc;n di\\u1ec7n t&iacute;ch 320m2, b&agrave; \\u0110\\u1ed7 Th\\u1ecb Lan th\\u1ea3 nu&ocirc;i 4.000 con g&agrave;, \\u0111&agrave;n g&agrave; con c\\u1ee7a b&agrave; \\u0111&atilde; \\u0111\\u01b0\\u1ee3c 5 ng&agrave;y tu\\u1ed5i, c\\u0169ng nh\\u01b0 nh\\u1eefng l\\u1ee9a g&agrave; kh&aacute;c, giai \\u0111o\\u1ea1n g&agrave; con t\\u1eeb 1-3 tu\\u1ea7n tu\\u1ed5i l&agrave; kho\\u1ea3ng th\\u1eddi gian b&agrave; lo nh\\u1ea5t, b\\u1edfi v&igrave; ch&uacute;ng r\\u1ea5t d\\u1ec5 m\\u1eafc b\\u1ec7nh. M\\u1eb7c d&ugrave; \\u0111&atilde; c&oacute; nhi\\u1ec1u n\\u0103m kinh nghi\\u1ec7m nh\\u01b0ng v\\u1edbi l\\u1ee9a g&agrave; n&agrave;y, b&agrave; c\\u0169ng g\\u1eb7p kh&ocirc;ng &iacute;t kh&oacute; kh\\u0103n, g&agrave; c&ograve;i c\\u1ecdc, \\u0103n &iacute;t v&agrave; \\u0111i ph&acirc;n \\u01b0\\u1edbt. B&agrave; d&ugrave;ng men pha n\\u01b0\\u1edbc cho g&agrave; u\\u1ed1ng v&agrave; cho r\\u1eb1ng g&agrave; b\\u1ecb v\\u1ea5n \\u0111\\u1ec1 v\\u1ec1 \\u0111\\u01b0\\u1eddng ru\\u1ed9t... V\\u1eady b&iacute; quy\\u1ebft ch\\u0103m s&oacute;c g&agrave; nh\\u01b0 th\\u1ebf n&agrave;o \\u0111\\u1ec3 kh\\u1eafc ph\\u1ee5c t\\u1ed1t b\\u1ec7nh tr&ecirc;n g&agrave;.<\\/p>\\r\\n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', 'GXtm3fLo-jA', 0, 1684515600, '', '[\"0\"]', '[\"103\",\"91\"]', 103, 3, 105, 2, 3, 19, 1),
(89, '{\"vn\":\"K\\u1ef9 thu\\u1eadt \\u00fam g\\u00e0 con trong m\\u00f9a l\\u1ea1nh, tr\\u00e1nh hao h\\u1ee5t | VTC16\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'ky-thuat-um-ga-con-trong-mua-lanh-tranh-hao-hut-vtc16', '', '', '', '', '', '{\"vn\":\"K\\u1ef9 thu\\u1eadt \\u00fam g\\u00e0 con trong m\\u00f9a l\\u1ea1nh, tr\\u00e1nh hao h\\u1ee5t | VTC16\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/gathavuon.net\\/wp-content\\/uploads\\/2018\\/07\\/chan-nuoi-ga-hieu-qua-735x400.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/gathavuon.net\\/wp-content\\/uploads\\/2018\\/07\\/chan-nuoi-ga-hieu-qua-735x400.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', 'rOfhjzl1q-A', 0, 1684515600, '', '[\"0\"]', '[\"103\",\"91\"]', 103, 3, 105, 2, 3, 19, 1),
(90, '{\"vn\":\"Ph\\u00e1t hi\\u1ec7n b\\u1ec7nh s\\u1edbm tr\\u00ean g\\u00e0 nh\\u1edd b\\u00ed quy\\u1ebft c\\u1ee7a chuy\\u00ean gia kh\\u1edfi nghi\\u1ec7p | VTC16\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'phat-hien-benh-som-tren-ga-nho-bi-quyet-cua-chuyen-gia-khoi-nghiep-vtc16', '', '', '', '', '', '{\"vn\":\"Ph\\u00e1t hi\\u1ec7n b\\u1ec7nh s\\u1edbm tr\\u00ean g\\u00e0 nh\\u1edd b\\u00ed quy\\u1ebft c\\u1ee7a chuy\\u00ean gia kh\\u1edfi nghi\\u1ec7p | VTC16\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/vnn-imgs-f.vgcloud.vn\\/2021\\/04\\/21\\/02\\/lien-ket-chan-nuoi-ga-sinh-hoc-tai-bac-giang-mo-ra-huong-di-moi.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/vnn-imgs-f.vgcloud.vn\\/2021\\/04\\/21\\/02\\/lien-ket-chan-nuoi-ga-sinh-hoc-tai-bac-giang-mo-ra-huong-di-moi.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"<p>VTC16 | N\\u1ed3m \\u1ea9m l&agrave; \\u0111i\\u1ec1u ki\\u1ec7n thu\\u1eadn l\\u1ee3i \\u0111\\u1ec3 c&aacute;c vi khu\\u1ea9n c&oacute; h\\u1ea1i g&acirc;y b\\u1ec7nh tr&ecirc;n \\u0111&agrave;n g&agrave;. \\u0110&agrave;n g&agrave; h\\u01a1n 1 th&aacute;ng tu\\u1ed5i c\\u1ee7a n&ocirc;ng h\\u1ed9 \\u0110\\u01b0\\u1eddng V\\u0103n L\\u1ef1c \\u1edf S\\u01a1n \\u0110\\u1ed9ng - B\\u1eafc Giang c\\u0169ng kh&ocirc;ng ngo\\u1ea1i l\\u1ec7. Gi\\u1ea3i ph&aacute;p cho anh l&agrave; g&igrave;?<\\/p>\\r\\n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', '1n5o_gueIW4', 0, 1684515600, '', '[\"0\"]', '[\"103\",\"91\"]', 103, 3, 105, 2, 3, 19, 1),
(91, '{\"vn\":\"9X \\\"ch\\u01a1i l\\u1edbn\\\" chi 1 t\\u1ef7 nu\\u00f4i g\\u00e0 m\\u00eda | Kh\\u1edfi nghi\\u1ec7p 579 | VTC16\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '9x-choi-lon-chi-1-ty-nuoi-ga-mia-khoi-nghiep-579-vtc16', '', '', '', '', '', '{\"vn\":\"9X \\\"ch\\u01a1i l\\u1edbn\\\" chi 1 t\\u1ef7 nu\\u00f4i g\\u00e0 m\\u00eda | Kh\\u1edfi nghi\\u1ec7p 579 | VTC16\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/nguoichannuoi.vn\\/upload_images\\/images\\/khoa-hoc-ky-thuat-chan-nuoi\\/NCN55-23.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/nguoichannuoi.vn\\/upload_images\\/images\\/khoa-hoc-ky-thuat-chan-nuoi\\/NCN55-23.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', 'nNAQ0TdIp6s', 0, 1684515600, '', '[\"0\"]', '[\"103\",\"91\"]', 103, 3, 105, 2, 3, 19, 1),
(92, '{\"vn\":\"Th\\u1ee9c \\u0103n h\\u1ed7n h\\u1ee3p heo con t\\u1eadp \\u0103n - 7kg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'thuc-an-hon-hop-heo-con-tap-an-7kg', '', '', '', '', '', '{\"vn\":\"Th\\u1ee9c \\u0103n h\\u1ed7n h\\u1ee3p heo con t\\u1eadp \\u0103n - 7kg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/News\\/27405\\/baby-a--25kg--14.03.23.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/News\\/27405\\/baby-a--25kg--14.03.23.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"<p><strong>H\\u01af\\u1edaNG D\\u1eaaN S\\u1eec D\\u1ee4NG V&Agrave; B\\u1ea2O QU\\u1ea2N&nbsp;<\\/strong><\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>S\\u1eed d\\u1ee5ng cho heo con t\\u1eadp \\u0103n - 10kg .<\\/li>\\r\\n\\t<li>Cho heo \\u0103n t\\u1ef1 do<\\/li>\\r\\n\\t<li>Kh&ocirc;ng c\\u1ea7n b\\u1ed5 sung b\\u1ea5t c\\u1ee9 lo\\u1ea1i th\\u1ee9c \\u0103n n&agrave;o kh&aacute;c<\\/li>\\r\\n\\t<li>Cung c\\u1ea5p \\u0111\\u1ee7 n\\u01b0\\u1edbc s\\u1ea1ch v&agrave; m&aacute;t .<\\/li>\\r\\n\\t<li>B\\u1ea3o qu\\u1ea3n n\\u01a1i kh&ocirc; r&aacute;o, tr&aacute;nh &aacute;nh n\\u1eafng m\\u1eb7t tr\\u1eddi tr\\u1ef1c ti\\u1ebfp .<\\/li>\\r\\n<\\/ul>\\r\\n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', '', 0, 1684602000, '', '[\"0\"]', '[\"86\",\"83\",\"82\",\"80\",\"79\"]', 86, 2, 91, 2, 3, 19, 1),
(93, '{\"vn\":\"Th\\u1ee9c \\u0103n h\\u1ed7n h\\u1ee3p heo con t\\u1eadp \\u0103n - 10kg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'thuc-an-hon-hop-heo-con-tap-an-10kg', '', '', '', '', '', '{\"vn\":\"Th\\u1ee9c \\u0103n h\\u1ed7n h\\u1ee3p heo con t\\u1eadp \\u0103n - 10kg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/News\\/132\\/baby-b--25kg--13.02.23.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/News\\/132\\/baby-b--25kg--13.02.23.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"<p><strong>H\\u01af\\u1edaNG D\\u1eaaN S\\u1eec D\\u1ee4NG V&Agrave; B\\u1ea2O QU\\u1ea2N&nbsp;<\\/strong><\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>S\\u1eed d\\u1ee5ng cho heo con t\\u1eadp \\u0103n - 10kg .<\\/li>\\r\\n\\t<li>Cho heo \\u0103n t\\u1ef1 do<\\/li>\\r\\n\\t<li>Kh&ocirc;ng c\\u1ea7n b\\u1ed5 sung b\\u1ea5t c\\u1ee9 lo\\u1ea1i th\\u1ee9c \\u0103n n&agrave;o kh&aacute;c<\\/li>\\r\\n\\t<li>Cung c\\u1ea5p \\u0111\\u1ee7 n\\u01b0\\u1edbc s\\u1ea1ch v&agrave; m&aacute;t .<\\/li>\\r\\n\\t<li>B\\u1ea3o qu\\u1ea3n n\\u01a1i kh&ocirc; r&aacute;o, tr&aacute;nh &aacute;nh n\\u1eafng m\\u1eb7t tr\\u1eddi tr\\u1ef1c ti\\u1ebfp .<\\/li>\\r\\n<\\/ul>\\r\\n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', '', 0, 1684602000, '', '[\"0\"]', '[\"86\",\"83\",\"82\",\"80\",\"79\"]', 86, 2, 91, 2, 3, 19, 1),
(94, '{\"vn\":\"Th\\u1ee9c \\u0103n h\\u1ed7n h\\u1ee3p heo con t\\u1eeb 7 - 15kg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'thuc-an-hon-hop-heo-con-tu-7-15kg', '', '', '', '', '', '{\"vn\":\"Th\\u1ee9c \\u0103n h\\u1ed7n h\\u1ee3p heo con t\\u1eeb 7 - 15kg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/News\\/27404\\/baby-b-bio--25kg--02.03.23.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/News\\/27404\\/baby-b-bio--25kg--02.03.23.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"<p><strong>H\\u01af\\u1edaNG D\\u1eaaN S\\u1eec D\\u1ee4NG V&Agrave; B\\u1ea2O QU\\u1ea2N&nbsp;<\\/strong><\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>S\\u1eed d\\u1ee5ng cho heo con t\\u1eadp \\u0103n - 10kg .<\\/li>\\r\\n\\t<li>Cho heo \\u0103n t\\u1ef1 do<\\/li>\\r\\n\\t<li>Kh&ocirc;ng c\\u1ea7n b\\u1ed5 sung b\\u1ea5t c\\u1ee9 lo\\u1ea1i th\\u1ee9c \\u0103n n&agrave;o kh&aacute;c<\\/li>\\r\\n\\t<li>Cung c\\u1ea5p \\u0111\\u1ee7 n\\u01b0\\u1edbc s\\u1ea1ch v&agrave; m&aacute;t .<\\/li>\\r\\n\\t<li>B\\u1ea3o qu\\u1ea3n n\\u01a1i kh&ocirc; r&aacute;o, tr&aacute;nh &aacute;nh n\\u1eafng m\\u1eb7t tr\\u1eddi tr\\u1ef1c ti\\u1ebfp .<\\/li>\\r\\n<\\/ul>\\r\\n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', '', 0, 1684602000, '', '[\"0\"]', '[\"86\",\"83\",\"82\",\"80\",\"79\"]', 86, 2, 91, 2, 3, 19, 1),
(95, '{\"vn\":\"Th\\u1ee9c \\u0103n \\u0111\\u1eb7c bi\\u1ec7t cho heo con t\\u1eadp \\u0103n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'thuc-an-dac-biet-cho-heo-con-tap-an', '', '', '', '', '', '{\"vn\":\"Th\\u1ee9c \\u0103n \\u0111\\u1eb7c bi\\u1ec7t cho heo con t\\u1eadp \\u0103n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/News\\/32232\\/super-a-1kg.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/News\\/32232\\/super-a-1kg.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"<p><strong>H\\u01af\\u1edaNG D\\u1eaaN S\\u1eec D\\u1ee4NG V&Agrave; B\\u1ea2O QU\\u1ea2N&nbsp;<\\/strong><\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>BI\\u1ebeT \\u0102N S\\u1edaM SAU 3 NG&Agrave;Y.<\\/li>\\r\\n\\t<li>\\u0110\\u1eb7c bi\\u1ec7t cho heo con c&ograve;i c\\u1ecdc, c&oacute; m\\u1eb9 k&eacute;m s\\u1eefa, m\\u1ea5t m\\u1eb9.<\\/li>\\r\\n\\t<li>Cho heo \\u0103n t\\u1ef1 do<\\/li>\\r\\n\\t<li>Kh&ocirc;ng c\\u1ea7n b\\u1ed5 sung b\\u1ea5t c\\u1ee9 lo\\u1ea1i th\\u1ee9c \\u0103n n&agrave;o kh&aacute;c<\\/li>\\r\\n\\t<li>Cung c\\u1ea5p \\u0111\\u1ea7y \\u0111\\u1ee7 n\\u01b0\\u1edbc u\\u1ed1ng s\\u1ea1ch v&agrave; m&aacute;t<\\/li>\\r\\n<\\/ul>\\r\\n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', '', 0, 1684602000, '', '[\"0\"]', '[\"86\",\"83\",\"82\",\"80\",\"79\"]', 86, 2, 91, 2, 3, 19, 1),
(96, '{\"vn\":\"Th\\u1ee9c \\u0103n h\\u1ed7n h\\u1ee3p cho heo con sau cai s\\u1eefa 9 - 20kg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'thuc-an-hon-hop-cho-heo-con-sau-cai-sua-9-20kg', '', '', '', '', '', '{\"vn\":\"Th\\u1ee9c \\u0103n h\\u1ed7n h\\u1ee3p cho heo con sau cai s\\u1eefa 9 - 20kg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/News\\/31961\\/baby-c-super-pro--25kg--15.02.23.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/News\\/31961\\/baby-c-super-pro--25kg--15.02.23.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"<p><strong>H\\u01af\\u1edaNG D\\u1eaaN S\\u1eec D\\u1ee4NG V&Agrave; B\\u1ea2O QU\\u1ea2N&nbsp;<\\/strong><\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>S\\u1eed d\\u1ee5ng cho heo con t\\u1eeb 9 - 20kg .<\\/li>\\r\\n\\t<li>Cho heo \\u0103n t\\u1ef1 do<\\/li>\\r\\n\\t<li>Kh&ocirc;ng c\\u1ea7n b\\u1ed5 sung b\\u1ea5t c\\u1ee9 lo\\u1ea1i th\\u1ee9c \\u0103n n&agrave;o kh&aacute;c<\\/li>\\r\\n\\t<li>Cung c\\u1ea5p \\u0111\\u1ee7 n\\u01b0\\u1edbc s\\u1ea1ch v&agrave; m&aacute;t&nbsp;<\\/li>\\r\\n\\t<li>B\\u1ea3o qu\\u1ea3n n\\u01a1i kh&ocirc; r&aacute;o, tr&aacute;nh &aacute;nh n\\u1eafng m\\u1eb7t tr\\u1eddi tr\\u1ef1c ti\\u1ebfp .<\\/li>\\r\\n<\\/ul>\\r\\n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', '', 0, 1684602000, '', '[\"0\"]', '[\"86\",\"83\",\"82\",\"80\",\"79\"]', 86, 2, 91, 2, 3, 19, 1),
(97, '{\"vn\":\"T\\u1ea1i sao l\\u00e0m Vaccine m\\u00e0 d\\u1ecbch b\\u1ec7nh v\\u1eabn n\\u1ed5 ra?\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'tai-sao-lam-vaccine-ma-dich-benh-van-no-ra', '', '', '', '', '', '{\"vn\":\"T\\u1ea1i sao l\\u00e0m Vaccine m\\u00e0 d\\u1ecbch b\\u1ec7nh v\\u1eabn n\\u1ed5 ra?\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"Gi\\u00e1 heo h\\u01a1i h\\u00f4m nay 22\\/05\\/2023, c\\u1ea3 n\\u01b0\\u1edbc h\\u00e2n hoan \\u0111\\u00f3n ni\\u1ec1m vui.\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/cargillfeed.com.vn\\/wp-content\\/webp-express\\/webp-images\\/uploads\\/2019\\/12\\/tiem-vac-xin-1.jpg.webp\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/cargillfeed.com.vn\\/wp-content\\/webp-express\\/webp-images\\/uploads\\/2019\\/12\\/tiem-vac-xin-1.jpg.webp\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"<p>Khi ch\\u01b0\\u01a1ng tr&igrave;nh vaccine th\\u1ea5t b\\u1ea1i, d\\u1ecbch b\\u1ec7nh n\\u1ed5 ra, ng\\u01b0\\u1eddi ch\\u0103n nu&ocirc;i th\\u01b0\\u1eddng c&oacute; khuynh h\\u01b0\\u1edbng \\u0111\\u1ed5 l\\u1ed7i cho vaccine. Tuy nhi&ecirc;n c&oacute; r\\u1ea5t nhi\\u1ec1u y\\u1ebfu t\\u1ed1 \\u1ea3nh h\\u01b0\\u1edfng \\u0111\\u1ebfn s\\u1ef1 th&agrave;nh c&ocirc;ng c\\u1ee7a m\\u1ed9t ch\\u01b0\\u01a1ng tr&igrave;nh vaccine, ch\\u1ee9 kh&ocirc;ng ph\\u1ea3i ch\\u1ec9 m\\u1ed7i m\\u1ed9t lo\\u1ea1i vaccine n&agrave;o \\u0111&oacute;.<\\/p>\\r\\n\\r\\n<p>Hi\\u1ec7n nay, s\\u1ed1 l\\u01b0\\u1ee3ng tr\\u1ea1i g&agrave; trong v&ugrave;ng ng&agrave;y c&agrave;ng nhi\\u1ec1u, nhi\\u1ec1u tr\\u1ea1i t\\u0103ng qui m&ocirc; \\u0111&agrave;n, s\\u1ed1 l\\u01b0\\u1ee3ng g&agrave; trong tr\\u1ea1i ng&agrave;y c&agrave;ng nhi\\u1ec1u h\\u01a1n, n&ecirc;n nguy c\\u01a1 nhi\\u1ec5m v&agrave; lan truy\\u1ec1n b\\u1ec7nh ng&agrave;y c&agrave;ng t\\u0103ng. Ngo&agrave;i ra, m\\u1ed9t s\\u1ed1 b\\u1ec7nh truy\\u1ec1n nhi\\u1ec5m m\\u1edbi \\u0111&atilde; xu\\u1ea5t hi\\u1ec7n g&acirc;y b\\u1ec7nh cho c&aacute;c \\u0111&agrave;n g&agrave; v&agrave; l&acirc;y truy\\u1ec1n kh\\u1eafp c&aacute;c v&ugrave;ng. Nh\\u1eefng b\\u1ec7nh \\u0111ang t\\u1ed3n t\\u1ea1i c\\u0169ng c&oacute; nh\\u1eefng thay \\u0111\\u1ed5i \\u0111&aacute;ng k\\u1ec3. Nhi\\u1ec1u b\\u1ec7nh \\u0111&atilde; \\u0111\\u01b0\\u1ee3c kh\\u1ed1ng ch\\u1ebf trong qu&aacute; kh\\u1ee9 do c&oacute; s\\u1ef1 qu\\u1ea3n l&yacute; t\\u1ed1t, nay v\\u1eabn n\\u1ed5 ra trong c&aacute;c tr\\u1ea1i : c&oacute; th\\u1ec3 do &aacute;p l\\u1ef1c m\\u1ea7m b\\u1ec7nh t\\u0103ng, ho\\u1eb7c do c&aacute;c y\\u1ebfu t\\u1ed1 g&acirc;y b\\u1ec7nh \\u0111&atilde; thay \\u0111\\u1ed5i \\u0111\\u1ed9c l\\u1ef1c ho\\u1eb7c bi\\u1ebfn ch\\u1ee7ng&hellip;Trong nh\\u1eefng tr\\u01b0\\u1eddng h\\u1ee3p n&agrave;y, ch\\u01b0\\u01a1ng tr&igrave;nh vaccine hi\\u1ec7n t\\u1ea1i kh&ocirc;ng c&ograve;n \\u0111\\u1ee7 \\u0111\\u1ec3 b\\u1ea3o h\\u1ed9 cho \\u0111&agrave;n g&agrave;. M\\u1ed9t s\\u1ed1 y\\u1ebfu t\\u1ed1 sau, c&oacute; th\\u1ec3 l&agrave;m cho d\\u1ecbch b\\u1ec7nh v\\u1eabn n\\u1ed5 ra m\\u1eb7c d&ugrave; tr\\u1ea1i \\u0111&atilde; l&agrave;m vaccine :<\\/p>\\r\\n\\r\\n<h2>B\\u1ea3o qu\\u1ea3n vaccine<\\/h2>\\r\\n\\r\\n<p style=\\\"text-align:center\\\"><img alt=\\\"T\\u1ea1i sao l\\u00e0m Vaccine m\\u00e0 d\\u1ecbch b\\u1ec7nh v\\u1eabn n\\u1ed5 ra\\\" src=\\\"https:\\/\\/cargillfeed.com.vn\\/wp-content\\/webp-express\\/webp-images\\/uploads\\/2019\\/12\\/vac-xin-phong-benh-ta-1.jpg.webp\\\" style=\\\"height:384px; width:640px\\\" \\/><\\/p>\\r\\n\\r\\n<p>M\\u1ed9t ch\\u01b0\\u01a1ng tr&igrave;nh vaccine h\\u1ee3p l&yacute; c\\u0169ng kh&ocirc;ng ph&aacute;t huy \\u0111\\u01b0\\u1ee3c t&aacute;c d\\u1ee5ng n\\u1ebfu vaccine b\\u1ecb h\\u01b0 h\\u1ea1i do vi\\u1ec7c b\\u1ea3o qu\\u1ea3n kh&ocirc;ng \\u0111&uacute;ng, vaccine s\\u1ed1ng c&oacute; th\\u1ec3 b\\u1ecb b\\u1ea5t ho\\u1ea1t, h\\u01b0 h\\u1ea1i n\\u1ebfu \\u0111\\u01b0\\u1ee3c b\\u1ea3o qu\\u1ea3n trong nh\\u1eefng \\u0111i\\u1ec1u ki\\u1ec7n b\\u1ea5t l\\u1ee3i nh\\u01b0 b\\u1ea3o qu\\u1ea3n \\u1edf nhi\\u1ec7t \\u0111\\u1ed9 cao do t\\u1ee7 l\\u1ea1nh b\\u1ecb h\\u01b0, do m\\u1ea5t \\u0111i\\u1ec7n, ho\\u1eb7c vaccine b\\u1ecb t&aacute;c \\u0111\\u1ed9ng tr\\u1ef1c ti\\u1ebfp b\\u1edfi &aacute;nh n\\u1eafng m\\u1eb7t tr\\u1eddi. V&igrave; v\\u1eady, vi\\u1ec7c b\\u1ea3o qu\\u1ea3n vaccine ph\\u1ea3i tu&acirc;n th\\u1ee7 theo khuy\\u1ebfn c&aacute;o c\\u1ee7a nh&agrave; s\\u1ea3n xu\\u1ea5t (th&ocirc;ng th\\u01b0\\u1eddng vaccine s\\u1ed1ng \\u0111\\u01b0\\u1ee3c b\\u1ea3o qu\\u1ea3n \\u1edf 2-8<sup>0<\\/sup>C)<\\/p>\\r\\n\\r\\n<p>V&iacute; d\\u1ee5 : Vaccine Vi&ecirc;m ph\\u1ebf qu\\u1ea3n truy\\u1ec1n nhi\\u1ec5m (IB) m\\u1ea5t kho\\u1ea3ng 50% ho\\u1ea1t l\\u1ef1c trong m\\u1ed9t gi\\u1edd d\\u01b0\\u1edbi \\u0111i\\u1ec1u ki\\u1ec7n n\\u1eafng n&oacute;ng sau khi \\u0111\\u01b0\\u1ee3c pha.<\\/p>\\r\\n\\r\\n<h2>Sai s&oacute;t khi c\\u1ea5p vaccine<\\/h2>\\r\\n\\r\\n<p>Vi\\u1ec7c c\\u1ea5p vaccine kh&ocirc;ng \\u0111&uacute;ng l&agrave; nguy&ecirc;n nh&acirc;n th\\u01b0\\u1eddng g\\u1eb7p, l&agrave;m cho vaccine kh&ocirc;ng c&oacute; kh\\u1ea3 n\\u0103ng b\\u1ea3o h\\u1ed9 cho \\u0111&agrave;n g&agrave;.<\\/p>\\r\\n\\r\\n<p>V&iacute; d\\u1ee5 : Khi cho g&agrave; u\\u1ed1ng vaccine,&nbsp; do s\\u1ed1 l\\u01b0\\u1ee3ng m&aacute;ng u\\u1ed1ng kh&ocirc;ng \\u0111\\u1ee7, ho\\u1eb7c ph&acirc;n b\\u1ed5 m&aacute;ng u\\u1ed1ng kh&ocirc;ng h\\u1ee3p l&yacute; n&ecirc;n m\\u1ed9t s\\u1ed1 g&agrave; u\\u1ed1ng kh&ocirc;ng \\u0111\\u1ee7 ho\\u1eb7c kh&ocirc;ng u\\u1ed1ng vaccine, d\\u1eabn \\u0111\\u1ebfn g&agrave; kh&ocirc;ng c&oacute; kh&aacute;ng th\\u1ec3 ho\\u1eb7c kh&aacute;ng th\\u1ec3 kh&ocirc;ng cao, n&ecirc;n kh&ocirc;ng c&oacute; kh\\u1ea3 n\\u0103ng b\\u1ea3o h\\u1ed9 \\u0111&agrave;n g&agrave;.<\\/p>\\r\\n\\r\\n<p>M\\u1ed9t s\\u1ed1 tr\\u1ea1i khi ch&iacute;ch vaccine, do ng\\u01b0\\u1eddi c&ocirc;ng nh&acirc;n c&oacute; k\\u1ef9 n\\u0103ng kh&ocirc;ng t\\u1ed1t ho\\u1eb7c do l&agrave;m \\u1ea9u, \\u0111&atilde; ch&iacute;ch vaccine ra ngo&agrave;i, ho\\u1eb7c g&agrave; ch\\u1ec9 nh\\u1eadn \\u0111\\u01b0\\u1ee3c m\\u1ed9t ph\\u1ea7n vaccine n&ecirc;n c\\u0169ng kh&ocirc;ng c&oacute; mi\\u1ec5n d\\u1ecbch t\\u1ed1t.<\\/p>\\r\\n\\r\\n<p>Ng\\u01b0\\u1eddi c&ocirc;ng nh&acirc;n \\u0111&ocirc;i khi c\\u0169ng l\\u1ea5y l\\u1ed9n vaccine, do kh&ocirc;ng \\u0111\\u1ecdc k\\u1ef9 nh&atilde;n vaccine. V&iacute; d\\u1ee5 : nh\\u01b0 nh\\u1ea7m l\\u1eabn vaccine \\u0111\\u1eadu g&agrave; (Fowl pox) v&agrave; vaccine vi&ecirc;m thanh kh&iacute; qu\\u1ea3n truy\\u1ec1n nhi\\u1ec5m (ILT), sau \\u0111&oacute; \\u0111em nh\\u1ecf m\\u1eaft, k\\u1ebft qu\\u1ea3 l&agrave; g&acirc;y ra nh\\u1eefng t\\u1ed5n th\\u01b0\\u01a1ng tr&ecirc;n m\\u1eaft g&agrave;.<\\/p>\\r\\n\\r\\n<p>Ngo&agrave;i ra vi\\u1ec7c d&ugrave;ng n\\u01b0\\u1edbc pha kh&ocirc;ng \\u0111&uacute;ng khi pha vaccine, c\\u0169ng l&agrave;m m\\u1ea5t ho\\u1ea1t l\\u1ef1c c\\u1ee7a virus vaccine nh\\u01b0 d&ugrave;ng n\\u01b0\\u1edbc m&aacute;y \\u0111\\u1ec3 pha vaccine, ch\\u1ea5t s&aacute;t tr&ugrave;ng (Flor) trong n\\u01b0\\u1edbc m&aacute;y s\\u1ebd l&agrave;m virus vaccine m\\u1ea5t ho\\u1ea1t l\\u1ef1c, kh&ocirc;ng c&oacute; kh\\u1ea3 n\\u0103ng t\\u1ea1o mi\\u1ec5n d\\u1ecbch cho g&agrave;.<\\/p>\\r\\n\\r\\n<h2>Kh&aacute;ng th\\u1ec3 m\\u1eb9 truy\\u1ec1n<\\/h2>\\r\\n\\r\\n<p>Kh&aacute;ng th\\u1ec3 m\\u1eb9 truy\\u1ec1n c&oacute; \\u1ea3nh h\\u01b0\\u1edfng l\\u1edbn \\u0111\\u1ebfn kh\\u1ea3 n\\u0103ng \\u0111&aacute;p \\u1ee9ng mi\\u1ec5n d\\u1ecbch c\\u1ee7a \\u0111&agrave;n g&agrave;, vi\\u1ec7c l&agrave;m vaccine khi kh&aacute;ng th\\u1ec3 m\\u1eb9 truy\\u1ec1n c\\u1ee7a \\u0111&agrave;n g&agrave; c&ograve;n cao, s\\u1ebd \\u1ea3nh h\\u01b0\\u1edfng \\u0111\\u1ebfn kh\\u1ea3 n\\u0103ng nh&acirc;n l&ecirc;n c\\u1ee7a virus vaccine, \\u0111\\u1ec1u n&agrave;y s\\u1ebd \\u1ea3nh h\\u01b0\\u1edfng \\u0111\\u1ebfn kh\\u1ea3 n\\u0103ng \\u0111&aacute;p \\u1ee9ng mi\\u1ec5n d\\u1ecbch c\\u1ee7a \\u0111&agrave;n g&agrave;.<\\/p>\\r\\n\\r\\n<p>V&iacute; d\\u1ee5: Vi\\u1ec7c l&agrave;m vaccine Gumboro (IBD) qu&aacute; s\\u1edbm khi kh&aacute;ng th\\u1ec3 m\\u1eb9 truy\\u1ec1n tr&ecirc;n \\u0111&agrave;n g&agrave; c&ograve;n cao, s\\u1ebd l&agrave;m m\\u1ed9t s\\u1ed1 virus vaccine b\\u1ecb trung h&ograve;a , k\\u1ebft qu\\u1ea3 g&agrave; kh&ocirc;ng t\\u1ea1o \\u0111\\u01b0\\u1ee3c kh&aacute;ng th\\u1ec3 ho\\u1eb7c kh&aacute;ng th\\u1ec3 th\\u1ea5p kh&ocirc;ng \\u0111\\u1ee7 b\\u1ea3o h\\u1ed9 \\u0111&agrave;n g&agrave;.<\\/p>\\r\\n\\r\\n<h2>Stress<\\/h2>\\r\\n\\r\\n<p>Stress \\u1ea3nh h\\u01b0\\u1edfng \\u0111\\u1ebfn kh\\u1ea3 n\\u0103ng \\u0111&aacute;p \\u1ee9ng mi\\u1ec5n d\\u1ecbch c\\u1ee7a \\u0111&agrave;n g&agrave; nh\\u01b0 Nhi\\u1ec7t \\u0111\\u1ed9 v&agrave; \\u1ea9m \\u0111\\u1ed9 cao, dinh d\\u01b0\\u1ee1ng kh&ocirc;ng \\u0111\\u1ee7, g&agrave; b\\u1ecb nhi\\u1ec5m k&iacute; sinh tr&ugrave;ng ho\\u1eb7c c&aacute;c b\\u1ec7nh kh&aacute;c.<\\/p>\\r\\n\\r\\n<p>Kh&ocirc;ng n&ecirc;n l&agrave;m vaccine khi g&agrave; b\\u1ecb b\\u1ec7nh, v&igrave; l&uacute;c n&agrave;y h\\u1ec7 th\\u1ed1ng mi\\u1ec5n d\\u1ecbch c\\u1ee7a \\u0111&agrave;n g&agrave; b\\u1ecb t\\u1ed5n th\\u01b0\\u01a1ng, kh\\u1ea3 n\\u0103ng \\u0111&aacute;p \\u1ee9ng mi\\u1ec5n d\\u1ecbch k&eacute;m ho\\u1eb7c s\\u1ebd l&agrave;m cho ph\\u1ea3n \\u1ee9ng vaccine c&agrave;ng th&ecirc;m tr\\u1ea7m tr\\u1ecdng. M\\u1ed9t s\\u1ed1 tr\\u01b0\\u1eddng h\\u1ee3p l&agrave;m vaccine khi g&agrave; \\u0111ang \\u1ee7 b\\u1ec7nh, s\\u1ebd l&agrave;m cho \\u0111&agrave;n b&ugrave;ng ph&aacute;t b\\u1ec7nh , g&acirc;y thi\\u1ec7t h\\u1ea1i \\u0111&aacute;ng k\\u1ec3 v\\u1ec1 m\\u1eb7t kinh t\\u1ebf.<\\/p>\\r\\n\\r\\n<h2>S\\u1ef1 suy gi\\u1ea3m mi\\u1ec5n d\\u1ecbch<\\/h2>\\r\\n\\r\\n<p>Khi g&agrave; mang c&aacute;c m\\u1ea7m b\\u1ec7nh nh\\u01b0 Gumboro, Marek, thi\\u1ebfu m&aacute;u truy\\u1ec1n nhi\\u1ec5m (CAV), ho\\u1eb7c nhi\\u1ec5m \\u0111\\u1ed9c t\\u1ed1 trong th\\u1ee9c \\u0103n, h\\u1ec7 th\\u1ed1ng mi\\u1ec5n d\\u1ecbch kh&ocirc;ng ho\\u1ea1t \\u0111\\u1ed9ng b&igrave;nh th\\u01b0\\u1eddng, n&ecirc;n khi l&agrave;m vaccine, g&agrave; kh&ocirc;ng c&oacute; \\u0111&aacute;p \\u1ee9ng mi\\u1ec5n d\\u1ecbch t\\u1ed1t ho\\u1eb7c g&acirc;y ra ph\\u1ea3n \\u1ee9ng vaccine m\\u1ea1nh m\\u1ebd, l&agrave;m t\\u0103ng t\\u1ec9 l\\u1ec7 g&agrave; m\\u1eafc b\\u1ec7nh ho\\u1eb7c g&agrave; ch\\u1ebft.<\\/p>\\r\\n\\r\\n<h2>Qu\\u1ea3n l&yacute;<\\/h2>\\r\\n\\r\\n<p>Qu\\u1ea3n l&yacute; \\u0111&oacute;ng vai tr&ograve; quan tr\\u1ecdng trong s\\u1ef1 th&agrave;nh b\\u1ea1i c\\u1ee7a tr\\u1ea1i, v\\u1ec7 sinh chu\\u1ed3ng tr\\u1ea1i k&eacute;m, chu\\u1ed3ng kh&ocirc;ng th&ocirc;ng tho&aacute;ng s\\u1ebd l&agrave;m gia t\\u0103ng &aacute;p l\\u1ef1c m\\u1ea7m b\\u1ec7nh trong tr\\u1ea1i, d\\u1eabn \\u0111\\u1ebfn g&agrave; c&oacute; th\\u1ec3 b\\u1ecb m\\u1eafc b\\u1ec7nh, m\\u1eb7c d&ugrave; \\u0111&agrave;n g&agrave; \\u0111&atilde; l&agrave;m vaccine.<\\/p>\\r\\n\\r\\n<h2>Ch\\u1ee7ng vaccine\\/ serotype<\\/h2>\\r\\n\\r\\n<p>M\\u1ed9t s\\u1ed1 lo\\u1ea1i b\\u1ec7nh \\u0111\\u01b0\\u1ee3c g&acirc;y ra b\\u1edfi nh\\u1eefng t&aacute;c nh&acirc;n c&oacute; nhi\\u1ec1u ch\\u1ee7ng kh&aacute;c nhau nh\\u01b0 IB c&oacute; kho\\u1ea3ng 100 ch\\u1ee7ng, Salmonella c&oacute; kho\\u1ea3ng 2000 ch\\u1ee7ng, \\u0111&ocirc;i khi nh\\u1eefng ch\\u1ee7ng n&agrave;y kh&ocirc;ng t\\u1ea1o ra mi\\u1ec5n d\\u1ecbch ch&eacute;o, n&ecirc;n b\\u1ec7nh c&oacute; th\\u1ec3 n\\u1ed5 ra n\\u1ebfu virus vaccine kh&ocirc;ng c&ugrave;ng ch\\u1ee7ng&nbsp; v\\u1edbi virus g&acirc;y b\\u1ec7nh trong v&ugrave;ng.<\\/p>\\r\\n\\r\\n<p>V&iacute; d\\u1ee5 : Nh\\u01b0 vaccine IB ch\\u1ee7ng MA5 kh&ocirc;ng c&oacute; kh\\u1ea3 n\\u0103ng b\\u1ea3o h\\u1ed9 \\u0111&agrave;n g&agrave; khi b\\u1ec7nh IB x\\u1ea3y ra v\\u1edbi th\\u1ec3 h\\u01b0\\u1edbng th\\u1eadn IB 4\\/91.<\\/p>\\r\\n\\r\\n<p><em>Nh\\u1eefng y\\u1ebfu t\\u1ed1 tr&ecirc;n ch&iacute;nh l&agrave; nguy&ecirc;n nh&acirc;n l&agrave;m cho ch\\u01b0\\u01a1ng tr&igrave;nh vaccine trong tr\\u1ea1i kh&ocirc;ng hi\\u1ec7u qu\\u1ea3, v&igrave; v\\u1eady ch&uacute;ng ta c\\u1ea7n ph\\u1ea3i \\u0111i\\u1ec1u tra v&agrave; lo\\u1ea1i b\\u1ecf ch&uacute;ng, nh\\u1eb1m gi&uacute;p \\u0111&agrave;n g&agrave; c&oacute; kh\\u1ea3 n\\u0103ng t\\u1ea1o mi\\u1ec5n d\\u1ecbch t\\u1ed1t, ng\\u0103n ng\\u1eeba b\\u1ec7nh t\\u1eadt, t\\u0103ng cao n\\u0103ng su\\u1ea5t trong ch\\u0103n nu&ocirc;i.<\\/em><\\/p>\\r\\n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', '', 0, 1684602000, '', '[\"0\"]', '[\"92\"]', 92, 1, 99, 2, 3, 19, 1),
(98, '{\"vn\":\"H\\u1ed9i ch\\u1ee9ng xu\\u1ea5t huy\\u1ebft v\\u00e0 m\\u1ee1 gan\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'hoi-chung-xuat-huyet-va-mo-gan', '', '', '', '', '', '{\"vn\":\"H\\u1ed9i ch\\u1ee9ng xu\\u1ea5t huy\\u1ebft v\\u00e0 m\\u1ee1 gan\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"Gi\\u00e1 heo h\\u01a1i h\\u00f4m nay 22\\/05\\/2023, c\\u1ea3 n\\u01b0\\u1edbc h\\u00e2n hoan \\u0111\\u00f3n ni\\u1ec1m vui.\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/cargillfeed.com.vn\\/wp-content\\/webp-express\\/webp-images\\/uploads\\/2019\\/12\\/hoi-chung-xuat-huyet-va-mo-gan.jpg.webp\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/cargillfeed.com.vn\\/wp-content\\/webp-express\\/webp-images\\/uploads\\/2019\\/12\\/hoi-chung-xuat-huyet-va-mo-gan.jpg.webp\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"<p>H\\u1ed9i ch\\u1ee9ng xu\\u1ea5t huy\\u1ebft v&agrave; m\\u1ee1 gan<\\/p>\\r\\n\\r\\n<h2>Lo&agrave;i nhi\\u1ec5m b\\u1ec7nh<\\/h2>\\r\\n\\r\\n<p>Th\\u01b0\\u1eddng x\\u1ea3y ra tr&ecirc;n g&agrave;, ch\\u1ee7 y\\u1ebfu l&agrave; g&agrave; \\u0111\\u1ebb th\\u01b0\\u01a1ng ph\\u1ea9m v&agrave; g&agrave; gi\\u1ed1ng h\\u01b0\\u1edbng th\\u1ecbt<\\/p>\\r\\n\\r\\n<h2>Tu\\u1ed5i m\\u1eafc b\\u1ec7nh<\\/h2>\\r\\n\\r\\n<p>G&agrave; \\u0111\\u1ebb th\\u01b0\\u1eddng \\u1edf giai \\u0111o\\u1ea1n \\u0111\\u1ea7u c\\u1ee7a qu&aacute; tr&igrave;nh \\u0111\\u1ebb tr\\u1ee9ng, tuy nhi&ecirc;n v\\u1eabn g\\u1eb7p tr&ecirc;n g&agrave; \\u0111\\u1ebb \\u1edf nh\\u1eefng giai \\u0111o\\u1ea1n sau.<\\/p>\\r\\n\\r\\n<h2>Nguy&ecirc;n nh&acirc;n g&acirc;y b\\u1ec7nh<\\/h2>\\r\\n\\r\\n<p>G&agrave; \\u0103n nhi\\u1ec1u th\\u1ee9c \\u0103n cao n\\u0103ng l\\u01b0\\u1ee3ng, trong khi kh\\u1ea3 n\\u0103ng v\\u1eadn \\u0111\\u1ed9ng b\\u1ecb h\\u1ea1n ch\\u1ebf&nbsp; ho\\u1eb7c nu&ocirc;i trong chu\\u1ed3ng tr\\u1ea1i qu&aacute; ch\\u1eadt h\\u1eb9p, d\\u1eabn \\u0111\\u1ebfn s\\u1ef1 d\\u01b0 th\\u1eeba n\\u0103ng l\\u01b0\\u1ee3ng v&agrave; v\\u01b0\\u1ee3t qu&aacute; s\\u1ef1 t&iacute;ch t\\u1ee5 m\\u1ee1<\\/p>\\r\\n\\r\\n<p>B\\u1ec7nh th\\u01b0\\u1eddng x\\u1ea3y ra n\\u1eb7ng trong m&ugrave;a n\\u1eafng n&oacute;ng<\\/p>\\r\\n\\r\\n<h2>Tri\\u1ec7u ch\\u1ee9ng<\\/h2>\\r\\n\\r\\n<p>G&agrave; \\u0111\\u1ed9t nhi&ecirc;n \\u0111\\u1ebb gi\\u1ea3m, tr\\u1ee9ng m\\u1ecfng v\\u1ecf, g&agrave; m\\u1ec7t m&otilde;i, y\\u1ebfu<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:center\\\"><img alt=\\\"m\\u1ee1 gan\\\" src=\\\"https:\\/\\/cargillfeed.com.vn\\/wp-content\\/webp-express\\/webp-images\\/uploads\\/2019\\/12\\/hoi-chung-xuat-huyet-va-mo-gan-1.jpg.webp\\\" style=\\\"height:480px; width:640px\\\" \\/><\\/p>\\r\\n\\r\\n<p>Ch&acirc;n m\\u1ec1m gi\\u1ed1ng nh\\u01b0 cao su, suy tho&aacute;i x\\u01b0\\u01a1ng \\u1ee9c<\\/p>\\r\\n\\r\\n<p>G&agrave; m&aacute;i m\\u1eadp, m&agrave;o g&agrave; nh\\u1ee3t nh\\u1ea1t v&agrave; l\\u1edbn, y\\u1ebfm th\\u1ecbt c&oacute; v\\u1ea3y s\\u1eebng<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:center\\\"><img alt=\\\"H\\u1ed9i ch\\u1ee9ng xu\\u1ea5t huy\\u1ebft v\\u00e0 m\\u1ee1 gan\\\" src=\\\"https:\\/\\/cargillfeed.com.vn\\/wp-content\\/webp-express\\/webp-images\\/uploads\\/2019\\/12\\/hoi-chung-xuat-huyet-va-mo-gan.jpg.webp\\\" style=\\\"height:480px; width:640px\\\" \\/><\\/p>\\r\\n\\r\\n<p>Tuy nhi&ecirc;n c&oacute; nh\\u1eefng l&uacute;c g&agrave; kh&ocirc;ng bi\\u1ec3u hi\\u1ec7n nh\\u1eefng tri\\u1ec7u ch\\u1ee9ng nh\\u01b0 \\u1edf tr&ecirc;n g&agrave; \\u0111\\u1ed9t ng\\u1ed9t ch\\u1ebft, g&agrave; m\\u1eadp&hellip;.<\\/p>\\r\\n\\r\\n<h2>B\\u1ec7nh t&iacute;ch<\\/h2>\\r\\n\\r\\n<p>Xu\\u1ea5t huy\\u1ebft b&ecirc;n trong c\\u01a1 th\\u1ec3, gan l\\u1edbn, xu\\u1ea5t huy\\u1ebft ,t&iacute;ch m\\u1ee1 v&agrave; r\\u1ea5t d\\u1ec5 v\\u1ee1, gan c&oacute; m&agrave;u v&agrave;ng ho\\u1eb7c \\u0111\\u1ecf s\\u1eabm<\\/p>\\r\\n\\r\\n<p>C&oacute; nh\\u1eefng&nbsp; u m&aacute;u&nbsp; t\\u1eeb m&agrave;u \\u0111\\u1ecf s\\u1eabm \\u0111\\u1ebfn n&acirc;u&nbsp; tr&ecirc;n nhu m&ocirc; gan<\\/p>\\r\\n\\r\\n<p>\\u1ed4 b\\u1ee5ng t&iacute;ch r\\u1ea5t nhi\\u1ec1u m\\u1ee1 v&agrave; m\\u1ee1 c\\u0169ng t&iacute;ch t\\u1ee5 tr&ecirc;n m\\u1ed9t s\\u1ed1 c\\u01a1 quan n\\u1ed9i t\\u1ea1ng<\\/p>\\r\\n\\r\\n<h2>Chu\\u1ea9n \\u0111o&aacute;n<\\/h2>\\r\\n\\r\\n<p>D\\u1ef1a v&agrave;o nh\\u1eefng tri\\u1ec7u ch\\u1ee9ng ch&iacute;nh nh\\u01b0 : gan l\\u1edbn, d\\u1ec5 v\\u1ee1, c&oacute; m&agrave;u v&agrave;ng, c&oacute; xu\\u1ea5t huy\\u1ebft, c&oacute; u m&aacute;u tr&ecirc;n gan<\\/p>\\r\\n\\r\\n<h2>Ph&ograve;ng v&agrave; \\u0111i\\u1ec1u tr\\u1ecb<\\/h2>\\r\\n\\r\\n<p>Gi\\u1ea3m l\\u01b0\\u1ee3ng th\\u1ee9c \\u0103n \\u0103n v&agrave;o , cung c\\u1ea5p th&ecirc;m choline, vitamin E v&agrave; B12<\\/p>\\r\\n\\r\\n<p>Qu\\u1ea3n l&yacute; nu&ocirc;i d\\u01b0\\u1ee1ng \\u0111&agrave;n g&agrave; h\\u1ee3p l&yacute;, kh&ocirc;ng \\u0111\\u1ec3 g&agrave; qu&aacute; m\\u1eadp, \\u0111\\u1eb7c bi\\u1ec7t trong giai \\u0111o\\u1ea1n h\\u1eadu b\\u1ecb. Ph\\u1ea3i \\u0111\\u1ea3m b\\u1ea3o tr\\u1ecdng l\\u01b0\\u1ee3ng c\\u1ee7a g&agrave; lu&ocirc;n g\\u1ea7n \\u0111&uacute;ng v\\u1edbi tr\\u1ecdng l\\u01b0\\u1ee3ng chu\\u1ea9n<\\/p>\\r\\n\\r\\n<p>C\\u1ea3i thi\\u1ec7n m&ocirc;i tr\\u01b0\\u1eddng nu&ocirc;i d\\u01b0\\u1ee1ng, t\\u0103ng c\\u01b0\\u1eddng th&ocirc;ng tho&aacute;ng v&agrave; gi\\u1ea3m nhi\\u1ec7t \\u0111\\u1ed9 chu\\u1ed3ng, \\u0111\\u1eb7c bi\\u1ec7t trong m&ugrave;a n\\u1eafng n&oacute;ng.<\\/p>\\r\\n\\r\\n<p>Gi\\u1ea3m thi\\u1ec3u nh\\u1eefng y\\u1ebfu t\\u1ed1 g&acirc;y stress cho g&agrave;.<\\/p>\\r\\n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', '', 0, 1684602000, '', '[\"0\"]', '[\"92\"]', 92, 1, 99, 2, 3, 19, 1);
INSERT INTO `qh_posts` (`id`, `name`, `url_vn`, `url_en`, `url_jp`, `url_kr`, `url_ch`, `url_lg`, `title`, `description`, `keywords`, `imgwebsite`, `imgsocial`, `content`, `infosub`, `price`, `priceevent`, `extend`, `id_posts_video`, `view`, `post_date`, `post_password`, `post_tags_id`, `post_category_id`, `post_category_id_ze`, `post_type_id`, `post_templates_id`, `post_status`, `post_comment`, `post_templates_main`, `post_website`) VALUES
(99, '{\"vn\":\"\\u1ee8ng d\\u1ee5ng c\\u00f4ng ngh\\u1ec7 sinh h\\u1ecdc trong ch\\u0103n nu\\u00f4i b\\u00f2 l\\u1ea5y s\\u1eefa\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'ung-dung-cong-nghe-sinh-hoc-trong-chan-nuoi-bo-lay-sua', '', '', '', '', '', '{\"vn\":\"\\u1ee8ng d\\u1ee5ng c\\u00f4ng ngh\\u1ec7 sinh h\\u1ecdc trong ch\\u0103n nu\\u00f4i b\\u00f2 l\\u1ea5y s\\u1eefa\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"Gi\\u00e1 heo h\\u01a1i h\\u00f4m nay 22\\/05\\/2023, c\\u1ea3 n\\u01b0\\u1edbc h\\u00e2n hoan \\u0111\\u00f3n ni\\u1ec1m vui.\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/cargillfeed.com.vn\\/wp-content\\/webp-express\\/webp-images\\/uploads\\/2019\\/11\\/video-bo.jpg.webp\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/cargillfeed.com.vn\\/wp-content\\/webp-express\\/webp-images\\/uploads\\/2019\\/11\\/video-bo.jpg.webp\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"<p>&ocirc;ng ngh\\u1ec7 sinh h\\u1ecdc \\u0111ang ph&aacute;t tri\\u1ec3n r\\u1ea5t nhanh v&agrave; \\u1ee9ng d\\u1ee5ng c\\u1ee7a n&oacute; trong t\\u1ea5t c\\u1ea3 c&aacute;c l\\u0129nh v\\u1ef1c c\\u1ee7a \\u0111\\u1eddi s\\u1ed1ng x&atilde; h\\u1ed9i. H\\u01a1n n\\u1eeda th\\u1ebf k\\u1ec9 qua, c&ocirc;ng ngh\\u1ec7 gieo tinh nh&acirc;n t\\u1ea1o v&agrave; c&ocirc;ng ngh\\u1ec7 ph&ocirc;i \\u0111&atilde; t\\u1ea1o ra m\\u1ed9t b\\u01b0\\u1edbc nh\\u1ea3y v\\u1ecdt v\\u1ec1 n\\u0103ng su\\u1ea5t v&agrave; ch\\u1ea5t l\\u01b0\\u1ee3ng gi\\u1ed1ng gia s&uacute;c, \\u0111\\u1eb7c bi\\u1ec7t l&agrave; \\u0111\\u1ed1i v\\u1edbi b&ograve; s\\u1eefa.<\\/p>\\r\\n\\r\\n<h2><strong>1\\/ C&ocirc;ng ngh\\u1ec7 gieo tinh nh&acirc;n t\\u1ea1o (Atifical Insemination- AI)<\\/strong><\\/h2>\\r\\n\\r\\n<h3><strong>L\\u1ecbch s\\u1eed ph&aacute;t tri\\u1ec3n<\\/strong><\\/h3>\\r\\n\\r\\n<p>Gieo tinh nh&acirc;n t\\u1ea1o&nbsp;(GTNT) l&agrave; nh\\u1eefng k\\u0129 thu\\u1eadt \\u0111\\u01b0\\u1ee3c s\\u1eed d\\u1ee5ng \\u0111\\u1ec3 l\\u1ea5y tinh tr&ugrave;ng c\\u1ee7a con \\u0111\\u1ef1c \\u0111\\u01b0a v&agrave;o \\u0111\\u01b0\\u1eddng sinh d\\u1ee5c c\\u1ee7a con c&aacute;i m&agrave; v\\u1eabn cho hi\\u1ec7u qu\\u1ea3 th\\u1ee5 thai v&agrave; sinh s\\u1ea3n t\\u01b0\\u01a1ng \\u0111\\u01b0\\u01a1ng so v\\u1edbi giao ph\\u1ed1i t\\u1ef1 nhi&ecirc;n.<\\/p>\\r\\n\\r\\n<p><a name=\\\"more\\\"><\\/a>\\u0103m 1900, l\\u1ea7n \\u0111\\u1ea7u ti&ecirc;n GTNT \\u0111\\u01b0\\u1ee3c th\\u1ef1c hi\\u1ec7n tr&ecirc;n b&ograve; b\\u1edfi Ivanov (Nga), nh\\u01b0ng m&atilde;i \\u0111\\u1ebfn n\\u0103m 1950 c&ocirc;ng ngh\\u1ec7 n&agrave;y m\\u1edbi ph&aacute;t tri\\u1ec3n ho&agrave;n ch\\u1ec9nh. Th&aacute;ng gi&ecirc;ng n\\u0103m 1951 con b&ecirc; \\u0111\\u1ea7u ti&ecirc;n \\u0111&atilde; \\u0111\\u01b0\\u1ee3c Stewart (Anh) b&aacute;o c&aacute;o sinh ra t\\u1eeb tinh \\u0111&ocirc;ng l\\u1ea1nh. T\\u1eeb n\\u1eeda sau c\\u1ee7a th\\u1ebf k\\u1ef7 20, vi\\u1ec7c \\u1ee9ng d\\u1ee5ng GTNT v&agrave;o ch\\u0103n nu&ocirc;i gia s&uacute;c ph&aacute;t tri\\u1ec3n m\\u1ea1nh, nh\\u1ea5t l&agrave; \\u1edf c&aacute;c n\\u01b0\\u1edbc M\\u1ef9, Anh, Ph&aacute;p, Nga, \\u0110an M\\u1ea1ch v&agrave; H&agrave; Lan. V&agrave;o giai \\u0111o\\u1ea1n 1955-1960, 50% \\u0111&agrave;n b&ograve; c\\u1ee7a c&aacute;c n\\u01b0\\u1edbc ch&acirc;u &Acirc;u \\u0111&atilde; \\u0111\\u01b0\\u1ee3c ph\\u1ed1i gi\\u1ed1ng b\\u1eb1ng bi\\u1ec7n ph&aacute;p GTNT. Nh\\u1eefng n\\u0103m g\\u1ea7n \\u0111&acirc;y s\\u1ed1 b&ograve; \\u0111\\u01b0\\u1ee3c GTNT t\\u0103ng l&ecirc;n 90% \\u1edf ch&acirc;u &Acirc;u, \\u1edf M\\u1ef9.<\\/p>\\r\\n\\r\\n<p>Theo th\\u1ed1ng k&ecirc; c\\u1ee7a FAO, n\\u0103m 1991 c\\u1ea3 th\\u1ebf gi\\u1edbi m\\u1ed7i n\\u0103m s\\u1ea3n xu\\u1ea5t h\\u01a1n 200 tri\\u1ec7u li\\u1ec1u tinh b&ograve;. T\\u1eeb n\\u0103m 1980-1991 m\\u1ed7i n\\u0103m c&oacute; 46-57 tri\\u1ec7u l\\u01b0\\u1ee3t GTNT \\u0111\\u01b0\\u1ee3c th\\u1ef1c hi\\u1ec7n tr&ecirc;n b&ograve;. Tr&ecirc;n th\\u1ebf gi\\u1edbi h&agrave;ng n\\u0103m c&oacute; kho\\u1ea3ng tr&ecirc;n 50 tri\\u1ec7u l\\u01b0\\u1ee3t tr&acirc;u b&ograve; \\u0111\\u01b0\\u1ee3c ph\\u1ed1i gi\\u1ed1ng b\\u1eb1ng k\\u1ef9 thu\\u1eadt nh&acirc;n t\\u1ea1o. 99% s\\u1ed1 b&ograve; s\\u1eefa \\u0111\\u01b0\\u1ee3c gieo tinh nh&acirc;n t\\u1ea1o.<\\/p>\\r\\n\\r\\n<h3><strong>Ph&aacute;t tri\\u1ec3n c&ocirc;ng ngh\\u1ec7 AI t\\u1ea1i Vi\\u1ec7t Nam<\\/strong><\\/h3>\\r\\n\\r\\n<p>\\u0110\\u1ea7u nh\\u1eefng n\\u0103m 1960 Vi\\u1ec7t Nam \\u0111&atilde; &aacute;p d\\u1ee5ng GTNT tr&ecirc;n b&ograve; s\\u1eefa b\\u1eb1ng tinh l\\u1ecfng. N\\u0103m 1972 -1973 n\\u01b0\\u1edbc ta b\\u1eaft \\u0111\\u1ea7u s\\u1ea3n xu\\u1ea5t th\\u1eed tinh \\u0111&ocirc;ng vi&ecirc;n t\\u1ea1i trung t&acirc;m Moncada d\\u01b0\\u1edbi s\\u1ef1 tr\\u1ee3 gi&uacute;p c\\u1ee7a Cuba. N\\u0103m 1974 d&ugrave;ng tinh \\u0111&ocirc;ng vi&ecirc;n \\u0111\\u1ec3 ph\\u1ed1i gi\\u1ed1ng cho b&ograve;. N\\u0103m 1978 s\\u1ea3n xu\\u1ea5t th&agrave;nh c&ocirc;ng tinh tr&acirc;u \\u0111&ocirc;ng l\\u1ea1nh. N\\u0103m 1998 s\\u1ea3n xu\\u1ea5t tinh c\\u1ecdng r\\u1ea1 tr&ecirc;n d&acirc;y chuy\\u1ec1n s\\u1ea3n xu\\u1ea5t c\\u1ee7a \\u0110\\u1ee9c d\\u01b0\\u1edbi s\\u1ef1 t&agrave;i tr\\u1ee3 c\\u1ee7a Ng&acirc;n h&agrave;ng Th\\u1ebf gi\\u1edbi. Sau nh\\u1eefng n\\u0103m 2000, c&ocirc;ng ngh\\u1ec7 s\\u1ea3n xu\\u1ea5t tinh c\\u1ecdng r\\u1ea1 \\u0111\\u01b0\\u1ee3c c\\u1ea3i ti\\u1ebfn nh\\u1eb1m n&acirc;ng cao ch\\u1ea5t l\\u01b0\\u1ee3ng tinh c\\u1ecdng r\\u1ea1 c\\u0169ng nh\\u01b0 quy tr&igrave;nh s\\u1ea3n xu\\u1ea5t d\\u01b0\\u1edbi s\\u1ef1 gi&uacute;p \\u0111\\u1ee1 c\\u1ee7a t\\u1ed5 ch\\u1ee9c JICA Nh\\u1eadt b\\u1ea3n.<\\/p>\\r\\n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', '', 0, 1684602000, '', '[\"0\"]', '[\"92\"]', 92, 1, 99, 2, 3, 19, 1),
(100, '{\"vn\":\"C\\u00f4ng ty Ch\\u0103n nu\\u00f4i Vi\\u1ec7t Nh\\u1eadt: Tuy\\u1ec3n d\\u1ee5ng nh\\u00e2n vi\\u00ean h\\u00e0nh ch\\u00ednh m\\u1ee9c l\\u01b0\\u01a1ng 15-25 tri\\u1ec7u \\u0111\\u1ed3ng\\/th\\u00e1ng\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'cong-ty-chan-nuoi-viet-nhat-tuyen-dung-nhan-vien-hanh-chinh-muc-luong-15-25-trieu-dongthang', '', '', '', '', '', '{\"vn\":\"C\\u00f4ng ty Ch\\u0103n nu\\u00f4i Vi\\u1ec7t Nh\\u1eadt: Tuy\\u1ec3n d\\u1ee5ng nh\\u00e2n vi\\u00ean h\\u00e0nh ch\\u00ednh m\\u1ee9c l\\u01b0\\u01a1ng 15-25 tri\\u1ec7u \\u0111\\u1ed3ng\\/th\\u00e1ng\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/nhachannuoi.vn\\/wp-content\\/uploads\\/2017\\/11\\/tuyen-dung.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/nhachannuoi.vn\\/wp-content\\/uploads\\/2017\\/11\\/tuyen-dung.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"<p><strong>Ph&uacute;c l\\u1ee3i<\\/strong><\\/p>\\r\\n\\r\\n<p>&ndash; Th\\u01b0\\u1edfng c&aacute;c d\\u1ecbp l\\u1ec5, t\\u1ebft, th&aacute;ng l\\u01b0\\u01a1ng th\\u1ee9 13, theo quy \\u0111\\u1ecbnh c\\u1ee7a C&ocirc;ng ty<\\/p>\\r\\n\\r\\n<p>&ndash; BHXH, BHYT, BHTN, ph&eacute;p n\\u0103m theo quy \\u0111\\u1ecbnh c\\u1ee7a ph&aacute;p lu\\u1eadt<\\/p>\\r\\n\\r\\n<p>&ndash; Ngh\\u1ec9 m&aacute;t h&agrave;ng n\\u0103m, \\u0111\\u01b0\\u1ee3c tham gia c&aacute;c ho\\u1ea1t \\u0111\\u1ed9ng team building&hellip;<\\/p>\\r\\n\\r\\n<p><strong>M&ocirc; t\\u1ea3 c&ocirc;ng vi\\u1ec7c<\\/strong><\\/p>\\r\\n\\r\\n<p>Ch\\u1ecbu tr&aacute;ch nhi\\u1ec7m cho c&aacute;c ho\\u1ea1t \\u0111\\u1ed9ng:<\\/p>\\r\\n\\r\\n<p>&ndash; Qu\\u1ea3n l&yacute; th&ocirc;ng tin<\\/p>\\r\\n\\r\\n<p>&ndash; Qu\\u1ea3n l&yacute; kho th\\u1ee9c \\u0103n, bao g\\u1ed3m ki\\u1ec3m so&aacute;t t\\u1ed3n kho v&agrave; \\u0111\\u1eb7t h&agrave;ng th\\u1ee9c \\u0103n m\\u1edbi<\\/p>\\r\\n\\r\\n<p>&ndash; Qu\\u1ea3n l&yacute; v\\u0103n th\\u01b0, s\\u1ed5 s&aacute;ch, t&agrave;i li\\u1ec7u c\\u1ee7a Ph&ograve;ng Ch\\u0103n nu&ocirc;i Th&uacute; y<\\/p>\\r\\n\\r\\n<p>&ndash; C&aacute;c nhi\\u1ec7m v\\u1ee5 kh&aacute;c theo y&ecirc;u c\\u1ea7u c\\u1ee7a Gi&aacute;m \\u0111\\u1ed1c Ch\\u0103n nu&ocirc;i Th&uacute; y v&agrave; c&aacute;c Tr\\u01b0\\u1edfng ban<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p>(Chi ti\\u1ebft c&ocirc;ng vi\\u1ec7c trao \\u0111\\u1ed5i khi ph\\u1ecfng v\\u1ea5n)<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p><strong>Y&ecirc;u c\\u1ea7u<\\/strong><\\/p>\\r\\n\\r\\n<p>&ndash; T\\u1ed1t nghi\\u1ec7p \\u0110\\u1ea1i h\\u1ecdc, \\u01b0u ti&ecirc;n chuy&ecirc;n ng&agrave;nh Ch\\u0103n nu&ocirc;i, Dinh d\\u01b0\\u1ee1ng,&nbsp; Th&uacute; y, C&ocirc;ng ngh\\u1ec7 th\\u1ef1c ph\\u1ea9m\\/th\\u1ee9c \\u0103n ch\\u0103n nu&ocirc;i ho\\u1eb7c c&aacute;c l\\u0129nh v\\u1ef1c kh&aacute;c c&oacute; li&ecirc;n quan.<\\/p>\\r\\n\\r\\n<p>&ndash; \\u01afu ti&ecirc;n \\u1ee9ng vi&ecirc;n c&oacute; kinh nghi\\u1ec7m li&ecirc;n quan, \\u0111\\u1eb7c bi\\u1ec7t trong l\\u0129nh v\\u1ef1c qu\\u1ea3n l&iacute; d\\u1eef li\\u1ec7u trang tr\\u1ea1i (qu\\u1ea3n l&yacute; s\\u1ed1 l\\u01b0\\u1ee3ng, chu chuy\\u1ec3n \\u0111&agrave;n, tr\\u1ecdng l\\u01b0\\u1ee3ng, s\\u1ee9c kh\\u1ecfe, v.v&hellip;)<\\/p>\\r\\n\\r\\n<p>&ndash; Ti\\u1ebfng Anh: Giao ti\\u1ebfp v\\u0103n ph&ograve;ng c\\u01a1 b\\u1ea3n<\\/p>\\r\\n\\r\\n<p>&ndash; MS Office (th&agrave;nh th\\u1ea1o MS Word, MS Excel, MS Powerpoint&hellip;)<\\/p>\\r\\n\\r\\n<p><strong>Ph&uacute;c l\\u1ee3i:<\\/strong><\\/p>\\r\\n\\r\\n<p>&ndash; M\\u1ee9c l\\u01b0\\u01a1ng: 15.000.000 &ndash; 25.000.000 (Th\\u1ecfa thu\\u1eadn theo n\\u0103ng l\\u1ef1c)<\\/p>\\r\\n\\r\\n<p>&ndash; Th\\u01b0\\u1edfng c&aacute;c d\\u1ecbp l\\u1ec5, t\\u1ebft, th&aacute;ng l\\u01b0\\u01a1ng th\\u1ee9 13, theo quy \\u0111\\u1ecbnh c\\u1ee7a C&ocirc;ng ty<\\/p>\\r\\n\\r\\n<p>&ndash; BHXH, BHYT, BHTN, ph&eacute;p n\\u0103m theo quy \\u0111\\u1ecbnh c\\u1ee7a ph&aacute;p lu\\u1eadt<\\/p>\\r\\n\\r\\n<p>&ndash; Ngh\\u1ec9 m&aacute;t h&agrave;ng n\\u0103m, \\u0111\\u01b0\\u1ee3c tham gia c&aacute;c ho\\u1ea1t \\u0111\\u1ed9ng team building&hellip;<\\/p>\\r\\n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', '', 0, 1684602000, '', '[\"0\"]', '[\"100\",\"99\"]', 100, 1, 99, 2, 3, 19, 1),
(101, '{\"vn\":\"C\\u00f4ng ngh\\u1ec7 dinh d\\u01b0\\u1ee1ng v\\u01b0\\u1ee3t tr\\u1ed9i cho heo con gi\\u00fap nh\\u00e0 ch\\u0103n nu\\u00f4i t\\u1ef1 tin t\\u00e1i \\u0111\\u00e0n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'cong-nghe-dinh-duong-vuot-troi-cho-heo-con-giup-nha-chan-nuoi-tu-tin-tai-dan', '', '', '', '', '', '{\"vn\":\"C\\u00f4ng ngh\\u1ec7 dinh d\\u01b0\\u1ee1ng v\\u01b0\\u1ee3t tr\\u1ed9i cho heo con gi\\u00fap nh\\u00e0 ch\\u0103n nu\\u00f4i t\\u1ef1 tin t\\u00e1i \\u0111\\u00e0n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"Gi\\u00e1 heo h\\u01a1i h\\u00f4m nay 22\\/05\\/2023, c\\u1ea3 n\\u01b0\\u1edbc h\\u00e2n hoan \\u0111\\u00f3n ni\\u1ec1m vui.\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/cargillfeed.com.vn\\/wp-content\\/webp-express\\/webp-images\\/uploads\\/2021\\/08\\/neopiggpng.jpg.webp\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/cargillfeed.com.vn\\/wp-content\\/webp-express\\/webp-images\\/uploads\\/2021\\/08\\/neopiggpng.jpg.webp\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"<p>&ocirc;ng ngh\\u1ec7 sinh h\\u1ecdc \\u0111ang ph&aacute;t tri\\u1ec3n r\\u1ea5t nhanh v&agrave; \\u1ee9ng d\\u1ee5ng c\\u1ee7a n&oacute; trong t\\u1ea5t c\\u1ea3 c&aacute;c l\\u0129nh v\\u1ef1c c\\u1ee7a \\u0111\\u1eddi s\\u1ed1ng x&atilde; h\\u1ed9i. H\\u01a1n n\\u1eeda th\\u1ebf k\\u1ec9 qua, c&ocirc;ng ngh\\u1ec7 gieo tinh nh&acirc;n t\\u1ea1o v&agrave; c&ocirc;ng ngh\\u1ec7 ph&ocirc;i \\u0111&atilde; t\\u1ea1o ra m\\u1ed9t b\\u01b0\\u1edbc nh\\u1ea3y v\\u1ecdt v\\u1ec1 n\\u0103ng su\\u1ea5t v&agrave; ch\\u1ea5t l\\u01b0\\u1ee3ng gi\\u1ed1ng gia s&uacute;c, \\u0111\\u1eb7c bi\\u1ec7t l&agrave; \\u0111\\u1ed1i v\\u1edbi b&ograve; s\\u1eefa.<\\/p>\\r\\n\\r\\n<h2><strong>1\\/ C&ocirc;ng ngh\\u1ec7 gieo tinh nh&acirc;n t\\u1ea1o (Atifical Insemination- AI)<\\/strong><\\/h2>\\r\\n\\r\\n<h3><strong>L\\u1ecbch s\\u1eed ph&aacute;t tri\\u1ec3n<\\/strong><\\/h3>\\r\\n\\r\\n<p>Gieo tinh nh&acirc;n t\\u1ea1o&nbsp;(GTNT) l&agrave; nh\\u1eefng k\\u0129 thu\\u1eadt \\u0111\\u01b0\\u1ee3c s\\u1eed d\\u1ee5ng \\u0111\\u1ec3 l\\u1ea5y tinh tr&ugrave;ng c\\u1ee7a con \\u0111\\u1ef1c \\u0111\\u01b0a v&agrave;o \\u0111\\u01b0\\u1eddng sinh d\\u1ee5c c\\u1ee7a con c&aacute;i m&agrave; v\\u1eabn cho hi\\u1ec7u qu\\u1ea3 th\\u1ee5 thai v&agrave; sinh s\\u1ea3n t\\u01b0\\u01a1ng \\u0111\\u01b0\\u01a1ng so v\\u1edbi giao ph\\u1ed1i t\\u1ef1 nhi&ecirc;n.<\\/p>\\r\\n\\r\\n<p><a name=\\\"more\\\"><\\/a>\\u0103m 1900, l\\u1ea7n \\u0111\\u1ea7u ti&ecirc;n GTNT \\u0111\\u01b0\\u1ee3c th\\u1ef1c hi\\u1ec7n tr&ecirc;n b&ograve; b\\u1edfi Ivanov (Nga), nh\\u01b0ng m&atilde;i \\u0111\\u1ebfn n\\u0103m 1950 c&ocirc;ng ngh\\u1ec7 n&agrave;y m\\u1edbi ph&aacute;t tri\\u1ec3n ho&agrave;n ch\\u1ec9nh. Th&aacute;ng gi&ecirc;ng n\\u0103m 1951 con b&ecirc; \\u0111\\u1ea7u ti&ecirc;n \\u0111&atilde; \\u0111\\u01b0\\u1ee3c Stewart (Anh) b&aacute;o c&aacute;o sinh ra t\\u1eeb tinh \\u0111&ocirc;ng l\\u1ea1nh. T\\u1eeb n\\u1eeda sau c\\u1ee7a th\\u1ebf k\\u1ef7 20, vi\\u1ec7c \\u1ee9ng d\\u1ee5ng GTNT v&agrave;o ch\\u0103n nu&ocirc;i gia s&uacute;c ph&aacute;t tri\\u1ec3n m\\u1ea1nh, nh\\u1ea5t l&agrave; \\u1edf c&aacute;c n\\u01b0\\u1edbc M\\u1ef9, Anh, Ph&aacute;p, Nga, \\u0110an M\\u1ea1ch v&agrave; H&agrave; Lan. V&agrave;o giai \\u0111o\\u1ea1n 1955-1960, 50% \\u0111&agrave;n b&ograve; c\\u1ee7a c&aacute;c n\\u01b0\\u1edbc ch&acirc;u &Acirc;u \\u0111&atilde; \\u0111\\u01b0\\u1ee3c ph\\u1ed1i gi\\u1ed1ng b\\u1eb1ng bi\\u1ec7n ph&aacute;p GTNT. Nh\\u1eefng n\\u0103m g\\u1ea7n \\u0111&acirc;y s\\u1ed1 b&ograve; \\u0111\\u01b0\\u1ee3c GTNT t\\u0103ng l&ecirc;n 90% \\u1edf ch&acirc;u &Acirc;u, \\u1edf M\\u1ef9.<\\/p>\\r\\n\\r\\n<p>Theo th\\u1ed1ng k&ecirc; c\\u1ee7a FAO, n\\u0103m 1991 c\\u1ea3 th\\u1ebf gi\\u1edbi m\\u1ed7i n\\u0103m s\\u1ea3n xu\\u1ea5t h\\u01a1n 200 tri\\u1ec7u li\\u1ec1u tinh b&ograve;. T\\u1eeb n\\u0103m 1980-1991 m\\u1ed7i n\\u0103m c&oacute; 46-57 tri\\u1ec7u l\\u01b0\\u1ee3t GTNT \\u0111\\u01b0\\u1ee3c th\\u1ef1c hi\\u1ec7n tr&ecirc;n b&ograve;. Tr&ecirc;n th\\u1ebf gi\\u1edbi h&agrave;ng n\\u0103m c&oacute; kho\\u1ea3ng tr&ecirc;n 50 tri\\u1ec7u l\\u01b0\\u1ee3t tr&acirc;u b&ograve; \\u0111\\u01b0\\u1ee3c ph\\u1ed1i gi\\u1ed1ng b\\u1eb1ng k\\u1ef9 thu\\u1eadt nh&acirc;n t\\u1ea1o. 99% s\\u1ed1 b&ograve; s\\u1eefa \\u0111\\u01b0\\u1ee3c gieo tinh nh&acirc;n t\\u1ea1o.<\\/p>\\r\\n\\r\\n<h3><strong>Ph&aacute;t tri\\u1ec3n c&ocirc;ng ngh\\u1ec7 AI t\\u1ea1i Vi\\u1ec7t Nam<\\/strong><\\/h3>\\r\\n\\r\\n<p>\\u0110\\u1ea7u nh\\u1eefng n\\u0103m 1960 Vi\\u1ec7t Nam \\u0111&atilde; &aacute;p d\\u1ee5ng GTNT tr&ecirc;n b&ograve; s\\u1eefa b\\u1eb1ng tinh l\\u1ecfng. N\\u0103m 1972 -1973 n\\u01b0\\u1edbc ta b\\u1eaft \\u0111\\u1ea7u s\\u1ea3n xu\\u1ea5t th\\u1eed tinh \\u0111&ocirc;ng vi&ecirc;n t\\u1ea1i trung t&acirc;m Moncada d\\u01b0\\u1edbi s\\u1ef1 tr\\u1ee3 gi&uacute;p c\\u1ee7a Cuba. N\\u0103m 1974 d&ugrave;ng tinh \\u0111&ocirc;ng vi&ecirc;n \\u0111\\u1ec3 ph\\u1ed1i gi\\u1ed1ng cho b&ograve;. N\\u0103m 1978 s\\u1ea3n xu\\u1ea5t th&agrave;nh c&ocirc;ng tinh tr&acirc;u \\u0111&ocirc;ng l\\u1ea1nh. N\\u0103m 1998 s\\u1ea3n xu\\u1ea5t tinh c\\u1ecdng r\\u1ea1 tr&ecirc;n d&acirc;y chuy\\u1ec1n s\\u1ea3n xu\\u1ea5t c\\u1ee7a \\u0110\\u1ee9c d\\u01b0\\u1edbi s\\u1ef1 t&agrave;i tr\\u1ee3 c\\u1ee7a Ng&acirc;n h&agrave;ng Th\\u1ebf gi\\u1edbi. Sau nh\\u1eefng n\\u0103m 2000, c&ocirc;ng ngh\\u1ec7 s\\u1ea3n xu\\u1ea5t tinh c\\u1ecdng r\\u1ea1 \\u0111\\u01b0\\u1ee3c c\\u1ea3i ti\\u1ebfn nh\\u1eb1m n&acirc;ng cao ch\\u1ea5t l\\u01b0\\u1ee3ng tinh c\\u1ecdng r\\u1ea1 c\\u0169ng nh\\u01b0 quy tr&igrave;nh s\\u1ea3n xu\\u1ea5t d\\u01b0\\u1edbi s\\u1ef1 gi&uacute;p \\u0111\\u1ee1 c\\u1ee7a t\\u1ed5 ch\\u1ee9c JICA Nh\\u1eadt b\\u1ea3n.<\\/p>\\r\\n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', 0, 0, '', '', 0, 1684688400, '', '[\"0\"]', '[\"92\"]', 92, 1, 99, 2, 3, 19, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_posts_code`
--

CREATE TABLE `qh_posts_code` (
  `id` int(11) NOT NULL,
  `link_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `num` int(11) NOT NULL,
  `id_posts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_posts_code`
--

INSERT INTO `qh_posts_code` (`id`, `link_code`, `content`, `num`, `id_posts`) VALUES
(1, '1', '', 1, 4049),
(2, '', '<p>C&aacute;c bạn nhớ thay đổi c&aacute;c phần sau th&agrave;nh th&ocirc;ng tin của m&igrave;nh nh&eacute;:</p>\r\n\r\n<ul>\r\n	<li>tel:0900000000 =&gt; đổi th&agrave;nh số điện thoại của bạn.</li>\r\n	<li>https://www.facebook.com/tenfanpage/inbox =&gt; đổi th&agrave;nh đường link fanpage của bạn.</li>\r\n	<li>https://zalo.me/0900000000 =&gt; phần n&agrave;y cũng đổi th&agrave;nh số zalo của bạn.</li>\r\n</ul>\r\n\r\n<p><strong>Bước 2: Theme css cho đẹp</strong></p>\r\n\r\n<p>Để th&ecirc;m css th&igrave; bạn chỉ cần copy v&agrave; paste đoạn m&atilde; dưới đ&acirc;y v&agrave;o mục&nbsp;<strong>custom css</strong>&nbsp;trong phần advanced giống bước 1 l&agrave; được.</p>\r\n\r\n<p>Cũng trong phần quản trị =&gt; Flatsome =&gt; Advanced =&gt; Custom CSS =&gt; All Screens v&agrave; d&aacute;n v&agrave;o đ&acirc;y.</p>\r\n', 2, 4049),
(3, '2', '', 3, 4049),
(4, '', '<p>C&aacute;c bạn lưu &yacute; c&aacute;c đường dẫn h&igrave;nh ảnh như: https://ejc.com.vn/img/zalo.png, https://ejc.com.vn/img/sms.png v&agrave; https://ejc.com.vn/img/fb.png. Bạn c&oacute; thể tải về v&agrave; lưu trữ ở website m&igrave;nh cho nhẹ v&agrave; tr&aacute;nh trường hợp c&aacute;c link tr&ecirc;n bị x&oacute;a, l&agrave;m lỗi hiển thị c&aacute;c n&uacute;t.</p>\r\n\r\n<p>Như vậy l&agrave; đ&atilde; xong, ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng.</p>\r\n', 4, 4049),
(5, '1', '', 1, 4050),
(6, '', '<p><strong>CSS</strong></p>\r\n\r\n<p>Sau đ&oacute; c&aacute;c bạn chỉ việc ch&egrave;n đoạn css sau</p>\r\n', 2, 4050),
(7, '2', '', 3, 4050),
(8, '', '<p><strong>Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng !</strong></p>', 4, 4050),
(9, '1', '', 1, 4051),
(10, '', '<p>B&acirc;y giờ l&agrave; l&uacute;c ch&uacute;ng ta sẽ trang tr&iacute; cho c&aacute;c button n&agrave;y, c&aacute;c bạn ch&eacute;p đoạn css sau :</p>\r\n', 2, 4051),
(11, '2', '', 3, 4051),
(12, '', '<p>Kết quả mà chúng ta sẽ nhận được như thế này :</p>\r\n<p>Vậy là chúng ta đã có được các button , tuy nhiên chúng ta cần trang trí lại thêm chút , bước này chúng ta sẽ bo góc cho các button bằng thuộc tính border-radius , ở đây chúng ta sẽ dùng thêm -moz- cho các trình duyệt như  Firefox, SeaMonkey, và Flock, và -webkit- cho các trình duyệt như Safari và Chrome. Và sau đây là đoạn csss làm việc này , các bạn đặt nó ở bên trong thuộc tính .inset li a</a>\r\n\r\n', 4, 4051),
(13, '3', '', 5, 4051),
(14, '', '<p>Kết quả nhận được sẽ l&agrave; :</p>\r\n\r\n<p><strong>Tạo m&agrave;u&nbsp; Gradients bằng CSS3</strong><br />\r\nTrong bước n&agrave;y ch&uacute;ng ta sẽ đổ m&agrave;u gradients giống như trong photoshop , chỉ kh&aacute;c l&agrave; bằng css3 với thuộc t&iacute;nh&nbsp;<em>linear-gradient()</em>&nbsp;v&agrave;&nbsp;<em>gradient()</em>,&nbsp; v&agrave; lần n&agrave;y ch&uacute;ng ta vẫn tiếp tục sử dụng tiền tố (-moz-) v&agrave; (-webkit-) cho từng loại tr&igrave;nh duyệt. Ch&uacute; &yacute; l&agrave; ch&uacute;ng ta vấn đặt đoạn css sau v&agrave;o&nbsp;<strong>.inset li a</strong>&nbsp;selector</p>\r\n', 6, 4051),
(15, '4', '', 7, 4051),
(16, '', '<p>Kết quả nhận được sẽ thế n&agrave;y :</p>\r\n\r\n<p>Ch&uacute;ng ta tiếp tục tạo gradient cho button, nhưng lần n&agrave;y th&igrave; ch&uacute;ng ta sẽ tạo ở phần hover (tức l&agrave; khi trỏ chuột v&agrave;o button, th&igrave; button sẽ chuyển sang m&agrave;u kh&aacute;c)<br />\r\nC&aacute;c bạn copy đoạn code sau v&agrave;o phần&nbsp;<strong>inset li a:hover</strong></p>\r\n', 8, 4051),
(17, '5', '', 9, 4051),
(18, '', '<p>V&agrave; button sẽ thay đổi background như sau khi ch&uacute;ng ta trỏ chuột tới:</p>\r\n\r\n<p><strong>2 Outset button</strong></p>\r\n\r\n<p>Thủ thuật thứ 2 n&agrave;y tương tự như l&agrave;&nbsp;<strong>inset button</strong>, tuy nhi&ecirc;n mỗi n&uacute;t bấm trong thủ thuật n&agrave;y l&agrave; một m&agrave;u ri&ecirc;ng biệt, như h&igrave;nh b&ecirc;n dưới:</p>\r\n\r\n<p>C&aacute;c bạn tham khảo đoạn HTML v&agrave; CSS3 như sau :</p>\r\n\r\n<p><strong>HTML</strong></p>\r\n', 10, 4051),
(19, '6', '', 11, 4051),
(20, '', '<p><strong>CSS</strong></p>', 12, 4051),
(21, '7', '', 13, 4051),
(22, '', '<p>Hy vọng với b&agrave;i viết n&agrave;y sẽ gi&uacute;p cho c&aacute;c bạn c&oacute; th&ecirc;m kinh nghiệm để thiết kế những button đẹp mắt cho web hay blog của m&igrave;nh.<br />\r\n<strong>Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng !</strong></p>\r\n', 14, 4051),
(23, '1', '', 1, 4052),
(24, '', '<p>Chúng ta đã có các button , tuy nhiên các button này hiện giờ vẫn chỉ là các đoạn text , giờ chúng ta sẽ tô màu cho các button, các bạn copy đoạn css sau :</p>', 2, 4052),
(25, '2', '', 3, 4052),
(26, '', '<p>Đến giờ th&igrave; ch&uacute;ng ta đ&atilde; c&oacute; đầy đủ c&aacute;c button với đầy đủ m&agrave;u sắc, hy vọng với b&agrave;i viết n&agrave;y sẽ gi&uacute;p bạn c&oacute; th&ecirc;m nhiều lựa chọn hơn trong việc thiết kế web hay blog của m&igrave;nh.<br />\r\n<strong>Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng !</strong></p>\r\n', 4, 4052),
(27, '1', '', 1, 4053),
(28, '', '<p><strong>CSS</strong></p>\r\n\r\n<p>Trước hết, ch&uacute;ng ta sẽ định dạng chung cho c&aacute;c buttons</p>\r\n', 2, 4053),
(29, '2', '', 3, 4053),
(30, '', '<p>Sau đó là tạo background gradients với màu tưng ứng với từng buttons</p>\r\n', 4, 4053),
(31, '3', '', 5, 4053),
(32, '', '<p>Kế tiếp là cho hiệu ứng Button Hover và Active</p>\r\n', 6, 4053),
(33, '4', '', 7, 4053),
(34, '', '<p><strong>CSS Shine</strong></p>\r\n\r\n<p>Để button th&ecirc;m cool, ch&uacute;ng ta sẽ ch&egrave;n th&ecirc;m một hiệu ứng nhỏ v&agrave;o button, hiệu ứng n&agrave;y sẽ hiển thị một đường viền trắng, v&agrave; quay một g&oacute;c từ tr&aacute;i sang phải.</p>\r\n', 8, 4053),
(35, '5', '', 9, 4053),
(36, '', '<p>Đó là tất cả những gì mà mình cần chia sẻ với các bạn trong ngày hôm nay. Hẹn gặp lại các bạn ở những bài viết tiếp theo.</p>\r\n', 10, 4053),
(37, '1', '', 1, 4058),
(38, '', '<p><strong>CSS</strong></p>\r\n\r\n<p>Sau đ&oacute; định dạng lại với đoạn css b&ecirc;n dưới.</p>', 2, 4058),
(39, '2', '', 3, 4058),
(40, '', '<p>Đ&acirc;y cũng l&agrave; mẫu thiết kế m&agrave; m&igrave;nh rất th&iacute;ch, m&igrave;nh hy vọng l&agrave; c&aacute;c bạn sẽ s&aacute;ng tạo th&ecirc;m cho website, blog m&agrave; c&aacute;c bạn đang sở hữu, nhớ chia sẻ cho bạn b&egrave; v&agrave; người th&acirc;n của m&igrave;nh nữa nh&eacute;.</p>', 4, 4058),
(41, '', '<p><strong>HTML</strong></p>\r\n\r\n<p>C&aacute;c bạn sắp xếp nội dung trang theo cấu tr&uacute;c html như sau:</p>', 1, 4059),
(42, '1', '', 2, 4059),
(43, '', '<p><strong>CSS</strong></p>\r\n\r\n<p>Sau đ&oacute; định dạng lại với đoạn css b&ecirc;n dưới.</p>', 3, 4059),
(44, '2', '', 4, 4059),
(45, '', '<p>Đ&acirc;y cũng l&agrave; mẫu thiết kế m&agrave; m&igrave;nh rất th&iacute;ch, m&igrave;nh hy vọng l&agrave; c&aacute;c bạn sẽ s&aacute;ng tạo th&ecirc;m cho website, blog m&agrave; c&aacute;c bạn đang sở hữu, nhớ chia sẻ cho bạn b&egrave; v&agrave; người th&acirc;n của m&igrave;nh nữa nh&eacute;.</p>', 5, 4059),
(46, '', '<p><strong>HTML</strong></p>\r\n\r\n<p>C&aacute;c bạn sắp xếp nội dung trang theo cấu tr&uacute;c html như sau:</p>', 1, 4060),
(47, '1', '', 2, 4060),
(48, '', '<p><strong>CSS</strong></p>\r\n\r\n<p>Sau đ&oacute; định dạng lại với đoạn css b&ecirc;n dưới.</p>', 3, 4060),
(49, '2', '', 4, 4060),
(50, '', '<p><strong>Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng!</strong></p>', 5, 4060),
(51, '', '<p><strong>HTML</strong></p>\r\n\r\n<p>C&aacute;c bạn sắp xếp nội dung trang theo cấu tr&uacute;c html như sau:</p>', 1, 4061),
(52, '1', '', 2, 4061),
(53, '', '<p><strong>CSS</strong></p>\r\n\r\n<p>Sau đ&oacute; định dạng lại với đoạn css b&ecirc;n dưới.</p>', 3, 4061),
(54, '2', '', 4, 4061),
(55, '', '<p><strong>Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng!</strong></p>', 5, 4061),
(56, '', '<h2>SEO, SEM v&agrave; CRO l&agrave; g&igrave;?</h2>\r\n\r\n<ul>\r\n	<li>SEO (Search Engine Optimization) l&agrave; c&aacute;ch l&agrave;m tăng số lượng v&agrave; chất lượng lưu lượng truy cập đến trang web của bạn th&ocirc;ng qua kết quả của c&ocirc;ng cụ t&igrave;m kiếm miễn ph&iacute;.</li>\r\n	<li>SEM (Search Engine Marketing) l&agrave; c&aacute;ch marketing cho doanh nghiệp sử dụng quảng c&aacute;o trả ph&iacute; xuất hiện tr&ecirc;n c&aacute;c kết quả của c&ocirc;ng cụ t&igrave;m kiếm (hoặc l&agrave;&nbsp;&nbsp;SERP).</li>\r\n	<li>CRO (Conversion Rate Optimization) l&agrave; qu&aacute; tr&igrave;nh c&oacute; hệ thống để tăng tỷ lệ kh&aacute;ch truy cập trang web thực hiện mong muốn &ndash; c&oacute; thể l&agrave; điền v&agrave;o biểu mẫu, mua sản phẩm của bạn hay bằng những c&aacute;ch kh&aacute;c.</li>\r\n</ul>\r\n\r\n<h2>SEO v&agrave; CRO li&ecirc;n quan như thế n&agrave;o với nhau?</h2>\r\n\r\n<p>SEO v&agrave; CRO li&ecirc;n quan mật thiết với nhau, n&oacute; l&agrave; một cặp kh&ocirc;ng thể t&aacute;ch rời để mang lại kết quả tốt nhất.<br />\r\nNhiều doanh nghiệp trực tuyến cho rằng họ phải chọn một trong hai (SEO v&agrave; CRO).&nbsp;Bạn c&oacute; thể chi ti&ecirc;u to&agrave;n bộ ng&acirc;n s&aacute;ch của bạn tr&ecirc;n SEO v&agrave; xếp hạng ở tr&ecirc;n c&ugrave;ng, nhưng nếu kh&aacute;ch truy cập của bạn kh&ocirc;ng chuyển đổi, đ&oacute; l&agrave; lỗi tr&ecirc;n kết th&uacute;c CRO.&nbsp;Tương tự, nếu trang web của bạn cung cấp nội dung v&agrave; sản phẩm tuyệt vời nhưng nếu n&oacute; kh&ocirc;ng xếp hạng cao, đ&oacute; l&agrave; một thất bại của SEO.</p>\r\n\r\n<h2>SEO v&agrave; CRO ảnh hưởng t&iacute;ch cực như thế n&agrave;o đến nhau?</h2>\r\n\r\n<p>Theo quy tắc chung, giới hạn một chủ đề cụ thể cho một trang.&nbsp;Điều n&agrave;y l&agrave;m tăng thứ hạng c&ocirc;ng cụ t&igrave;m kiếm của bạn bằng c&aacute;ch gi&uacute;p c&aacute;c tr&igrave;nh thu thập th&ocirc;ng tin dễ d&agrave;ng v&agrave; nhanh ch&oacute;ng xem nội dung của trang;&nbsp;đồng thời, n&oacute; l&agrave;m cho trang web của bạn th&acirc;n thiện hơn với người d&ugrave;ng.&nbsp;Một th&ocirc;ng điệp r&otilde; r&agrave;ng gi&uacute;p hạn chế tối đa sự kh&oacute; hiểu, tỷ lệ chuyển đổi đạt tối đa v&agrave; mang lại một chiến thắng lớn cho CRO.</p>\r\n\r\n<p>Một chiến lược marketing online tốt hơn khi kết hợp cả SEO v&agrave; CRO, đảm bảo rằng ch&uacute;ng hoạt động h&agrave;i h&ograve;a để đạt được c&aacute;c mục ti&ecirc;u v&agrave; mục ti&ecirc;u chiến lược của doanh nghiệp.</p>\r\n\r\n<p><strong>L&agrave;m thế n&agrave;o CRO c&oacute; thể được cải thiện với SEO:</strong></p>\r\n\r\n<h3>1. Publish nội dung mới, x&aacute;c thực v&agrave; nhằm mục đ&iacute;ch về chủ đề backlinks</h3>\r\n\r\n<p>C&ocirc;ng cụ t&igrave;m kiếm xem x&eacute;t h&agrave;ng trăm yếu tố xếp hạng để đặt một trang web tr&ecirc;n trang web kh&aacute;c trong kết quả t&igrave;m kiếm.&nbsp;Số lượng c&aacute;c yếu tố xếp hạng n&agrave;y chỉ tăng l&ecirc;n v&agrave; bản chất của ch&uacute;ng sẽ trở n&ecirc;n phức tạp hơn với&nbsp;Artificial Intelligence được sử dụng trong c&aacute;c thuật to&aacute;n c&ocirc;ng cụ t&igrave;m kiếm.&nbsp;Dưới đ&acirc;y l&agrave; c&aacute;c yếu tố quan trọng t&aacute;c động đến thứ hạng c&ocirc;ng cụ t&igrave;m kiếm của trang web:</p>\r\n\r\n<p>Chất lượng nội dung tr&ecirc;n trang web của bạn tạo n&ecirc;n sự kh&aacute;c biệt lớn trong tất cả điều n&agrave;y.&nbsp;Nội dung mới v&agrave; nguy&ecirc;n bản lu&ocirc;n l&agrave; tin tốt cho SEO.&nbsp;Quay lại blogpost tr&ecirc;n trang web của bạn với yếu tố được đảm bảo tốt cho SEO:</p>\r\n\r\n<ul>\r\n	<li>Tạo ti&ecirc;u đề hấp dẫn với focus keyword</li>\r\n	<li>Cung cấp m&ocirc; tả meta với&nbsp;focus keyword/key mở rộng</li>\r\n	<li>Bao gồm từ kh&oacute;a trọng t&acirc;m trong đoạn đầu ti&ecirc;n</li>\r\n	<li>C&oacute; phụ đề c&oacute;&nbsp;focus keyword/key mở rộng</li>\r\n	<li>Bao gồm c&aacute;c từ kh&oacute;a c&oacute; li&ecirc;n quan được đặt tự nhi&ecirc;n trong văn bản</li>\r\n	<li>Đặt t&ecirc;n thuộc t&iacute;nh ALT của h&igrave;nh ảnh với c&aacute;c từ kh&oacute;a c&oacute; li&ecirc;n quan</li>\r\n	<li>Đặt thẻ H1,H2,H3 đầy đủ v&agrave; ph&ugrave; hợp</li>\r\n</ul>\r\n\r\n<p>Về chủ để backlinks&nbsp;từ c&aacute;c trang web c&oacute; uy t&iacute;n, đ&aacute;ng tin cậy l&agrave; rất quan trọng cho SEO.&nbsp;Một nghi&ecirc;n cứu gần đ&acirc;y cho thấy&nbsp;cho thấy backlinks c&oacute; vai tr&ograve; lớn trong việc cải thiện thứ hạng SEO.&nbsp;Bắt backlinks, kh&ocirc;ng chỉ để trang chủ trang web của bạn m&agrave; c&ograve;n để c&aacute;c trang b&ecirc;n trong v&agrave; c&aacute;c b&agrave;i viết blog, cung cấp cho một t&iacute;n hiệu t&iacute;ch cực cho c&ocirc;ng cụ t&igrave;m kiếm về chất lượng của trang web của bạn.&nbsp;Văn bản li&ecirc;n kết c&oacute; li&ecirc;n quan hơn (văn bản m&agrave;u xanh, gạch dưới, c&oacute; thể nhấp v&agrave;o trong si&ecirc;u kết nối), th&igrave; n&oacute; c&agrave;ng tốt cho SEO.</p>\r\n\r\n<h3>2. Sử dụng mục nhập&nbsp;Scent</h3>\r\n\r\n<p>Bắt buộc phải duy tr&igrave; kết nối mạnh mẽ giữa kết quả t&igrave;m kiếm v&agrave; trang đ&iacute;ch.&nbsp;Khi người d&ugrave;ng của bạn nhấp v&agrave;o một li&ecirc;n kết v&agrave; kh&ocirc;ng thấy kết quả đ&uacute;ng như mong đợi th&igrave; đ&oacute; l&agrave; một vấn đề. Th&ocirc;ng tin Scent sẽ&nbsp;trấn an người d&ugrave;ng rằng họ đang t&igrave;m đ&uacute;ng trang.&nbsp;N&oacute; x&aacute;c định liệu một người d&ugrave;ng sẽ chuyển đổi hoặc để lại (tỷ lệ tho&aacute;t).</p>\r\n\r\n<p>Sử dụng danh s&aacute;ch kiểm tra cơ bản n&agrave;y để tối ưu h&oacute;a trang của bạn cho m&ugrave;i hương:</p>\r\n\r\n<ul>\r\n	<li>C&oacute; cấu tr&uacute;c trang web r&otilde; r&agrave;ng</li>\r\n	<li>Thẻ ti&ecirc;u đề ph&ugrave; hợp v&agrave; ti&ecirc;u đề H1</li>\r\n	<li>Loại trừ c&aacute;c sản phẩm kh&ocirc;ng khả dụng</li>\r\n	<li>Điều chỉnh bố cục của bạn dựa tr&ecirc;n từ kh&oacute;a</li>\r\n</ul>\r\n\r\n<h3>3. Cung cấp h&igrave;nh ảnh sản phẩm n&acirc;ng cao</h3>\r\n\r\n<p>Người d&ugrave;ng sẽ kh&ocirc;ng bao giờ mua bất cứ thứ g&igrave; m&agrave; kh&ocirc;ng biết tr&ocirc;ng n&oacute; như thế n&agrave;o.&nbsp;Họ sẽ muốn chạm v&agrave;o n&oacute;, giữ n&oacute;,&hellip;&nbsp;Tất cả điều n&agrave;y r&otilde; r&agrave;ng l&agrave; kh&ocirc;ng thể l&agrave;m trực tuyến, do đ&oacute;, điều quan trọng l&agrave; l&agrave;m cho sản phẩm của bạn trở n&ecirc;n sống động th&ocirc;ng qua thiết kế h&igrave;nh ảnh tuyệt vời.&nbsp;H&igrave;nh ảnh cho ph&eacute;p sản phẩm của bạn tỏa s&aacute;ng v&agrave; khuyến kh&iacute;ch chuyển đổi.</p>\r\n\r\n<p>Dưới đ&acirc;y l&agrave; một số mẹo về c&aacute;ch bạn c&oacute; thể sử dụng h&igrave;nh ảnh để tối ưu h&oacute;a SEO v&agrave; do đ&oacute; cải thiện CRO:</p>\r\n\r\n<ul>\r\n	<li>H&atilde;y m&ocirc; tả với t&ecirc;n h&igrave;nh ảnh.&nbsp;Google c&oacute; thể hiểu red-and-white-polka-dot-dress.jpg nhưng kh&ocirc;ng hiểu DCM2704AA.jpg.</li>\r\n	<li>Thuộc t&iacute;nh Alt của h&igrave;nh ảnh cũng n&ecirc;n c&oacute; c&aacute;c từ kh&oacute;a ch&iacute;nh, nhưng kh&ocirc;ng qu&aacute; nhiều</li>\r\n	<li>Th&ecirc;m số m&ocirc; h&igrave;nh, nếu c&oacute;, trong thuộc t&iacute;nh alt.</li>\r\n	<li>Bao gồm nhiều ảnh, mỗi ảnh c&oacute; m&ocirc; tả d&agrave;nh ri&ecirc;ng cho ảnh đ&oacute;.</li>\r\n	<li>Giữ k&iacute;ch thước h&igrave;nh ảnh dưới 70 kb để giữ cho &aacute;nh s&aacute;ng trang.</li>\r\n</ul>\r\n\r\n<h3>4. N&acirc;ng thứ hạng cạnh tranh của bạn với&nbsp;Long-Tail Keywords</h3>\r\n\r\n<p>To&agrave;n bộ điểm Google&rsquo;s search business&nbsp;l&agrave; giới thiệu cho người d&ugrave;ng th&ocirc;ng tin ph&ugrave; hợp dựa tr&ecirc;n c&aacute;c t&igrave;m kiếm của họ.&nbsp;Một người d&ugrave;ng sẽ hiếm khi chỉ t&igrave;m kiếm &ldquo;SEO&rdquo; m&agrave; thường t&igrave;m kiếm &ldquo;xu hướng SEO&rdquo; hoặc &ldquo;Mẹo để c&oacute; thứ hạng SEO tốt&rdquo;,&hellip;.Đ&acirc;y được gọi l&agrave;&nbsp;Long-Tail Keywords.&nbsp;Ch&uacute;ng t&ocirc;i khuy&ecirc;n bạn n&ecirc;n đầu tư thời gian v&agrave; c&ocirc;ng sức v&agrave;o việc nghi&ecirc;n cứu c&aacute;c từ kh&oacute;a n&agrave;y v&agrave; sử dụng tối ưu ch&uacute;ng trong nội dung của bạn để cải thiện tỷ lệ chuyển đổi của trang web của bạn.</p>\r\n\r\n<p>Nghi&ecirc;n cứu từ kh&oacute;a l&agrave; một qu&aacute; tr&igrave;nh l&acirc;u d&agrave;i v&agrave; phức tạp đ&ograve;i hỏi thời gian v&agrave; sự cống hiến.&nbsp;C&oacute; nhiều c&ocirc;ng cụ như SEMrush v&agrave; Google Adwords&nbsp;để hỗ trợ bạn.&nbsp;Tuy nhi&ecirc;n, đ&acirc;y l&agrave; một bản hack nhanh m&agrave; bạn c&oacute; thể sử dụng để bắt đầu hoặc xem hướng dẫn:</p>\r\n\r\n<ul>\r\n	<li>Nhập từ kh&oacute;a m&agrave; bạn muốn nhắm mục ti&ecirc;u cho một b&agrave;i viết hoặc trang sản phẩm trong thanh t&igrave;m kiếm.</li>\r\n	<li>Cuộn xuống cuối trang v&agrave; xem &ldquo;T&igrave;m kiếm c&oacute; li&ecirc;n quan đến &hellip;&rdquo; cho từ kh&oacute;a đ&oacute;.&nbsp;Th&ocirc;ng thường, bạn sẽ nhận được kết hợp c&aacute;c biến thể gần giống của từ kh&oacute;a ch&iacute;nh của m&igrave;nh.</li>\r\n	<li>Đ&acirc;y l&agrave; những từ kh&oacute;a đ&ocirc;i khi tuyệt vời để nhắm mục ti&ecirc;u v&igrave; ch&uacute;ng l&agrave; đu&ocirc;i d&agrave;i v&agrave; c&oacute; &iacute;t cạnh tranh.</li>\r\n</ul>\r\n\r\n<h3>5. Sử dụng cấu tr&uacute;c URL c&oacute; thể thu thập th&ocirc;ng tin</h3>\r\n\r\n<p>Một c&aacute;ch tuyệt vời kh&aacute;c để đạt thứ hạng cao hơn l&agrave; sử dụng địa chỉ URL c&oacute; thể thu thập dữ liệu cho trang web của bạn.&nbsp;Cấu tr&uacute;c URL c&oacute; thể t&igrave;m kiếm gi&uacute;p c&ocirc;ng cụ t&igrave;m kiếm dễ d&agrave;ng t&igrave;m thấy trang web của bạn v&agrave; biết n&oacute; cung cấp g&igrave; cho người ti&ecirc;u d&ugrave;ng.&nbsp;Một URL được x&aacute;c định r&otilde; kh&ocirc;ng chỉ gi&uacute;p trang web xếp hạng tốt hơn m&agrave; c&ograve;n l&agrave;m cho trải nghiệm người d&ugrave;ng dễ chịu hơn.&nbsp;Với điều n&agrave;y, khả năng cao của những người d&ugrave;ng n&agrave;y sẽ được chuyển đổi th&agrave;nh kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>Dưới đ&acirc;y l&agrave; một số mẹo:</p>\r\n\r\n<ul>\r\n	<li>Bạn sẽ muốn trang n&agrave;y được ph&aacute;t hiện bởi đ&uacute;ng người (v&agrave; tr&igrave;nh thu thập th&ocirc;ng tin).&nbsp;V&igrave; vậy, từ kh&oacute;a nhận được th&ocirc;ng tin về trang của bạn n&ecirc;n được bao gồm trong URL.</li>\r\n	<li>Tr&aacute;nh c&aacute;c chữ c&aacute;i viết hoa v&igrave; ch&uacute;ng c&oacute; thể l&agrave;m lẫn lộn c&aacute;c c&ocirc;ng cụ t&igrave;m kiếm v&agrave; l&agrave;m cho n&oacute; kh&oacute; hiểu hơn.</li>\r\n	<li>Nếu bạn muốn tối ưu h&oacute;a URL của m&igrave;nh th&igrave; c&aacute;ch bạn t&aacute;ch biệt c&aacute;c từ kh&ocirc;ng quan trọng.&nbsp;C&aacute;c r&ocirc;-bốt của Google được thiết lập để đọc dấu gạch ngang chứ kh&ocirc;ng phải dấu gạch dưới.</li>\r\n	<li>C&aacute;c giới từ v&agrave; li&ecirc;n kết l&agrave; sự xao l&atilde;ng v&agrave; c&oacute; thể bị loại bỏ ho&agrave;n to&agrave;n khỏi URL.&nbsp;Cũng như người d&ugrave;ng c&oacute; thể hiểu chủ đề l&agrave; g&igrave; m&agrave; kh&ocirc;ng c&oacute; những từ kh&ocirc;ng cần thiết n&agrave;y, Google sẽ lấy được tất cả &yacute; nghĩa m&agrave; n&oacute; đ&ograve;i hỏi.</li>\r\n</ul>\r\n\r\n<h3>6. Tận dụng tối đa c&aacute;c li&ecirc;n kết s&acirc;u</h3>\r\n\r\n<p>Người ti&ecirc;u d&ugrave;ng ng&agrave;y nay muốn c&oacute; th&ocirc;ng tin &lsquo;hiện tại&rsquo; v&agrave; họ c&oacute; c&aacute;c t&ugrave;y chọn tận nơi họ c&oacute; thể t&igrave;m thấy th&ocirc;ng tin đ&oacute;.&nbsp;C&oacute; một trang web được tối ưu h&oacute;a tốt v&agrave; ph&ugrave; hợp với mục ti&ecirc;u kinh doanh của bạn c&oacute; thể vừa sinh lợi vừa thiết yếu khi bạn trở th&agrave;nh trang web truy cập cho kh&aacute;ch h&agrave;ng của bạn.</p>\r\n\r\n<p>Hi vọng với những gợi &yacute; để cải thiện tỷ lệ chuyển đổi trang web với SEO ở tr&ecirc;n c&oacute; thể gi&uacute;p c&aacute;c bạn kinh doanh trực tuyến hiệu quả v&agrave; đạt kết quả cao. Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng!</p>', 1, 4064),
(57, '', '<p>Trong b&agrave;i viết n&agrave;y m&igrave;nh sẽ hướng dẫn c&aacute;c bạn tạo slidebar menu cực đẹp cho web&nbsp;c&ocirc;ng nghệ cực đẹp.</p>\r\n\r\n<p><strong>HTML</strong></p>\r\n\r\n<p>C&aacute;c bạn sắp xếp nội dung trang theo cấu tr&uacute;c html như sau:</p>', 1, 4065),
(58, '1', '', 2, 4065),
(60, '', '<p><strong>CSS</strong></p>\r\n\r\n<p>Sau đ&oacute; định dạng lại với đoạn css b&ecirc;n dưới.</p>', 3, 4065),
(61, '2', '', 4, 4065),
(62, '', '<p><strong>Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng!</strong></p>', 5, 4065);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_posts_file`
--

CREATE TABLE `qh_posts_file` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `file_type` int(2) NOT NULL,
  `posts_id` int(11) NOT NULL,
  `num` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_posts_file`
--

INSERT INTO `qh_posts_file` (`id`, `name`, `content`, `file_type`, `posts_id`, `num`) VALUES
(3, 'Dán vào thẻ head', 'backend/course/code/code_3.php', 2, 6, 0),
(7, 'Code 2', 'backend/course/code/code_7.php', 2, 6, 0),
(8, 'Bài 2', '', 1, 6, 0),
(9, 'Code css bài 2', 'backend/course/code/code_9.php', 2, 6, 0),
(10, 'Học jquery', 'backend/course/code/code_10.php', 2, 7, 0),
(11, 'download', '<p>Nếu kh&ocirc;ng muốn download, ch&uacute;ng ta c&oacute; thể kết nối file jQuery tới file html th&ocirc;ng qua một số c&aacute;ch sau:</p>\r\n\r\n<ul>\r\n	<li>Kết nối trực tiếp từ trang web jQuery với phi&ecirc;n bản mới nhất: <a href=\"https://code.jquery.com/jquery-latest.js\">https://code.jquery.com/jquery-latest.js</a>.</li>\r\n</ul>\r\n', 1, 7, 0),
(12, 'Mã jquery', 'backend/course/code/code_12.php', 2, 7, 0),
(13, 'Hướng dẫn sử dụng', 'backend/course/code/code_13.php', 2, 7, 0),
(22, '12', 'frontent/course/code/code_22.php', 2, 29, 0),
(23, 'COde', 'frontent/course/code/code_23.php', 2, 30, 0),
(24, 'ND', '<p>Chương tr&igrave;nh của C++ sẽ thực hiện từng d&ograve;ng lệnh trong cặp ngoặc nhọn { } ở ph&iacute;a sau h&agrave;m main một c&aacute;ch&nbsp;<strong>c&oacute; thứ tự</strong>&nbsp;từ tr&ecirc;n xuống dưới.</p>\r\n\r\n<p>Một chương tr&igrave;nh C++ bắt buộc phải c&oacute; 1 h&agrave;m main, thế n&ecirc;n m&igrave;nh khuy&ecirc;n c&aacute;c bạn n&ecirc;n đặt t&ecirc;n file đầu ti&ecirc;n trong chương tr&igrave;nh main.cpp, v&agrave; file n&agrave;y sẽ chứa m&atilde; nguồn C++ c&oacute; h&agrave;m main ở trong đ&oacute;, sau n&agrave;y c&aacute;c bạn l&agrave;m việc với 1 dự &aacute;n c&oacute; nhiều file th&igrave; sẽ kh&ocirc;ng bị nhầm lẫn.</p>\r\n\r\n<p>Ở b&agrave;i học kế tiếp (trong chương tiếp theo), m&igrave;nh sẽ n&oacute;i về cấu tr&uacute;c của một chương tr&igrave;nh C++ cơ bản. Hẹn gặp lại c&aacute;c bạn trong b&agrave;i học sau.</p>\r\n', 1, 30, 0),
(25, 'Code', 'frontent/course/code/code_25.php', 2, 31, 0),
(26, 'Dòng 6:', '<ul>\r\n	<li><strong>D&ograve;ng 6</strong>:</li>\r\n</ul>\r\n', 1, 31, 0),
(27, 'Code', 'frontent/course/code/code_27.php', 2, 31, 0),
(28, 'Content', '<p>Như đ&atilde; n&oacute;i ở b&agrave;i trước,&nbsp;<strong>main l&agrave; một h&agrave;m m&agrave; đi sau n&oacute; l&agrave; một cặp dấu ngoặc nhọn { }</strong>, một điểm xuất ph&aacute;t cho một project của ng&ocirc;n ngữ C++. Kh&ocirc;ng cần biết một project C++ của bạn c&oacute; bao nhi&ecirc;u file, một khi project đ&atilde; được build v&agrave; li&ecirc;n kết c&aacute;c file th&agrave;nh một file thực thi (.exe), hệ điều h&agrave;nh sẽ thực thi những d&ograve;ng lệnh trong phạm vi dấu ngoặc nhọn nằm sau h&agrave;m main một c&aacute;ch&nbsp;<strong>lần lượt từ tr&ecirc;n xuống dưới</strong>.</p>\r\n\r\n<p>Với những bạn lần đầu viết code C++, c&aacute;c bạn c&oacute; thể bỏ s&oacute;t d&ograve;ng n&agrave;y. C&ugrave;ng xem thử Visual studio sẽ l&agrave;m g&igrave; khi bạn kh&ocirc;ng viết ra d&ograve;ng int main() bằng c&aacute;ch đổi t&ecirc;n&nbsp;<strong>main</strong>&nbsp;th&agrave;nh một t&ecirc;n bất kỳ.</p>\r\n\r\n<p><a href=\"https://raw.githubusercontent.com/nguyenchiemminhvu/CPP-Tutorial/master/1-cpp-co-ban/1-1-cau-truc-co-ban-cua-mot-chuong-trinh-cpp/3.png\" rel=\"nofollow\" target=\"_blank\"><img src=\"https://raw.githubusercontent.com/nguyenchiemminhvu/CPP-Tutorial/master/1-cpp-co-ban/1-1-cau-truc-co-ban-cua-mot-chuong-trinh-cpp/3.png\" style=\"height:303px; width:690px\" /></a></p>\r\n\r\n<p>Visual studio th&ocirc;ng b&aacute;o một lỗi nghi&ecirc;m trọng LNK1561, v&agrave; n&oacute; c&ograve;n đưa th&ecirc;m hướng dẫn để lập tr&igrave;nh vi&ecirc;n c&oacute; thể tự sửa lỗi c&oacute; nghĩa l&agrave; điểm khởi đầu cần được định nghĩa.</p>\r\n\r\n<p>Ch&uacute;ng ta quay lại với đoạn m&atilde; nguồn c&oacute; thể chạy được như l&uacute;c đầu bằng c&aacute;ch sửa lại t&ecirc;n h&agrave;m l&agrave;<br />\r\n<code>int main()</code>.</p>\r\n\r\n<ul>\r\n	<li><strong>D&ograve;ng 7</strong>:</li>\r\n</ul>\r\n', 1, 31, 0),
(29, 'Code', 'frontent/course/code/code_29.php', 2, 31, 0),
(30, 'Content', '<p>Đ&acirc;y kh&ocirc;ng phải l&agrave; một d&ograve;ng lệnh. Đ&acirc;y l&agrave; một d&ograve;ng comment, mục đ&iacute;ch của comment trong code l&agrave; để ghi ch&uacute; lại những g&igrave; m&igrave;nh đang l&agrave;m. Việc ghi ch&uacute; n&agrave;y cần được thực hiện thường xuy&ecirc;n đối với những người mới học lập tr&igrave;nh. Ghi ch&uacute; gi&uacute;p bạn &iacute;t bị rối v&agrave; kh&oacute; hiểu khi nh&igrave;n lại những đoạn code cũ v&agrave; những người l&agrave;m việc c&ugrave;ng nh&oacute;m với bạn cũng sẽ hiểu được bạn đang muốn l&agrave;m g&igrave;.</p>\r\n\r\n<p><a href=\"https://raw.githubusercontent.com/nguyenchiemminhvu/CPP-Tutorial/master/1-cpp-co-ban/1-1-cau-truc-co-ban-cua-mot-chuong-trinh-cpp/4.png\" rel=\"nofollow\" target=\"_blank\"><img src=\"https://raw.githubusercontent.com/nguyenchiemminhvu/CPP-Tutorial/master/1-cpp-co-ban/1-1-cau-truc-co-ban-cua-mot-chuong-trinh-cpp/4.png\" style=\"height:287px; width:600px\" /></a></p>\r\n\r\n<p><strong>Một d&ograve;ng comment bắt đầu với 2 dấu gạch ch&eacute;o //</strong>.</p>\r\n\r\n<p>B&acirc;y giờ bạn thử tự viết cho m&igrave;nh v&agrave;i d&ograve;ng comment đi n&agrave;o. Comment bạn c&oacute; thể đặt ở bất kỳ vị tr&iacute; n&agrave;o trong m&atilde; nguồn (ngoại trừ ch&egrave;n comment l&agrave;m ảnh hưởng đến d&ograve;ng lệnh) m&agrave; kh&ocirc;ng bị b&aacute;o lỗi. V&igrave; khi bi&ecirc;n dịch, compiler nh&igrave;n thấy d&ograve;ng comment th&igrave; n&oacute; sẽ bỏ qua v&agrave; kh&ocirc;ng l&agrave;m g&igrave; cả.</p>\r\n\r\n<ul>\r\n	<li><strong>D&ograve;ng 9</strong>:</li>\r\n</ul>\r\n', 1, 31, 0),
(31, 'Code', 'frontent/course/code/code_31.php', 2, 31, 0),
(32, 'Content', '<p>Đ&acirc;y l&agrave; một d&ograve;ng lệnh v&agrave; đi k&egrave;m sau đ&oacute; l&agrave; một d&ograve;ng comment. D&ograve;ng lệnh n&agrave;y ch&iacute;nh l&agrave; thứ đ&atilde; viết l&ecirc;n console d&ograve;ng&nbsp;<strong>Hello World</strong>&nbsp;m&agrave; bạn đ&atilde; thấy trong kết quả của chương tr&igrave;nh.</p>\r\n\r\n<p><strong>Một d&ograve;ng lệnh phải được kết th&uacute;c bằng dấu chấm phẩy &quot;;&quot;</strong></p>\r\n\r\n<p>Lệnh&nbsp;<strong>cout</strong>&nbsp;c&oacute; t&aacute;c dụng viết l&ecirc;n console tất cả những g&igrave; nằm trong cặp dấu ngoặc k&eacute;p&nbsp;<strong>&quot; &quot;</strong>. Như c&aacute;c bạn thấy, ch&uacute;ng ta đặt 2 từ&nbsp;<strong>Hello</strong>&nbsp;v&agrave;&nbsp;<strong>World</strong>&nbsp;b&ecirc;n trong cặp ngoặc k&eacute;p n&ecirc;n n&oacute; đ&atilde; được in ra m&agrave;n h&igrave;nh console.</p>\r\n\r\n<ul>\r\n	<li><strong>D&ograve;ng 11</strong>:</li>\r\n</ul>\r\n', 1, 31, 0),
(33, 'Code', 'frontent/course/code/code_33.php', 2, 32, 0),
(34, 'COntent', '<p>&ndash; C&aacute;c thư viện của CI gi&uacute;p ch&uacute;ng ta thực hiện c&aacute;c t&aacute;c vụ th&ocirc;ng thường của một ứng dụng web như kết nối v&agrave; thực hiện c&aacute;c c&ocirc;ng việc li&ecirc;n quan đến cơ sở dữ liệu , upload file, xử l&yacute; h&igrave;nh ảnh, ph&acirc;n trang, cookie, session, bảo mật &hellip; Đồng thời c&aacute;c thư viện n&agrave;y cũng gi&uacute;p ch&uacute;ng ta tổ chức code tốt hơn với m&ocirc; h&igrave;nh MVC.<br />\r\n&ndash; Để c&oacute; thể học được CodeIgniter framework th&igrave; cần c&oacute; kiến thức sau:<br />\r\n+ Lập tr&igrave;nh hướng đối tượng (<strong>OOP</strong>)<br />\r\n+ M&ocirc; h&igrave;nh theo đ&uacute;ng chuẩn&nbsp;<strong>MVC</strong><br />\r\n+ L&agrave;m việc v&agrave; xử l&yacute;&nbsp;<strong>mảng&nbsp;</strong><br />\r\n<strong>Tại sao lại chọn CodeIgniter framework?</strong><br />\r\n+ L&agrave; một trong những PHP Framework c&oacute; số lượng người d&ugrave;ng nhiều nhất hiện nay<br />\r\n+ T&iacute;nh tiếp cận v&agrave; t&agrave;i liệu dễ học, dễ mở rộng<br />\r\n+ Bộ core thư viện của Codeigniter &iacute;t thay đổi<br />\r\n+&nbsp;<strong>Codeigniter Framework</strong>&nbsp;c&oacute; v&ograve;ng đời ổn định hơn so với c&aacute;c PHP Framework kh&aacute;c<br />\r\n+ Dễ t&iacute;ch hợp th&ecirc;m c&aacute;c thư viện từ framework kh&aacute;c<br />\r\n+ Tốc độ xử l&yacute; nhanh , code nhỏ gọn<br />\r\nC&agrave;i đặt CodeIgniter Framework<br />\r\n&ndash; Đầu ti&ecirc;n mọi người &nbsp;download phi&ecirc;n bản hoạt động ổn định &nbsp;của CI &nbsp;<strong><u>http://www.codeigniter.com/download&nbsp;</u></strong>&nbsp;phi&ecirc;n bản 3.xx<br />\r\n&ndash; Sau khi download về ch&uacute;ng &nbsp;ta giải n&eacute;n v&agrave; sẽ thấy c&aacute;c thư mục b&ecirc;n trong như sau:<br />\r\nCấu tr&uacute;c thư mục của CodeIgniter<br />\r\n&ndash; Trong c&aacute;c thư mục download về th&igrave; &yacute; nghĩ từng thư mục v&agrave; file như sau:<br />\r\n<strong>application</strong>: đ&acirc;y l&agrave; thư mục rất quan trọng, thư mục chứa ứng dụng,nơi đ&acirc;y sẽ l&agrave; nơi lập tr&igrave;nh vi&ecirc;n &nbsp;ch&uacute;ng ta viết code cho dự &aacute;n<br />\r\n<strong>system</strong>: đ&acirc;y l&agrave; thư mục chứa to&agrave;n bộ thư viện của CodeIgniter,mọi người &nbsp;kh&ocirc;ng n&ecirc;n chỉnh sửa hay can thiệp v&agrave;o đ&acirc;y,nếu muốn th&igrave; c&oacute; thể mở ra xem để hiểu hơn<br />\r\n<strong>user_guide</strong>: đ&acirc;y l&agrave; thư mục chứa to&agrave;n bộ hướng dẫn sử dụng,mọi người c&oacute; thể x&oacute;a thư mục n&agrave;y c&ograve;n c&aacute;c hướng dẫn c&oacute; thể xem online<br />\r\n<strong>index.php</strong>: File&nbsp;<strong>index.php</strong>&nbsp;như bộ điều khiển đầu ti&ecirc;n c&oacute; nhiệm vụ khởi tạo t&agrave;i nguy&ecirc;n ban đầu trong qu&aacute; tr&igrave;nh xử l&yacute; (File chạy đầu ti&ecirc;n ) &nbsp;mọi người &nbsp;giữ nguy&ecirc;n file n&agrave;y .<br />\r\n&ndash; B&acirc;y giờ mọi người h&atilde;y mở thư mục Application ra để xem cấu tr&uacute;c v&agrave; &yacute; nghĩa của n&oacute; :<br />\r\nCấu tr&uacute;c thư mục application trong CodeIgniter<br />\r\n<strong>config</strong>: đ&acirc;y l&agrave; thư mục chứa to&agrave;n bộ cấu h&igrave;nh website, cấu h&igrave;nh&nbsp;<strong>database</strong>, đường dẫn,ng&ocirc;n ngữ&hellip;<br />\r\n<strong>core</strong>: Đ&acirc;y l&agrave; thư mục viết c&aacute;c core của hệ thống,c&oacute; thể viết c&aacute;c main&nbsp;<strong>controller</strong>,<strong>model&hellip;</strong>&nbsp;để kế thừa<br />\r\n<strong>controller</strong>: Đ&acirc;y l&agrave; thư mục chứa to&agrave;n bộ c&aacute;c file&nbsp;<strong>controller</strong>&nbsp;(xử l&yacute; dữ liệu)<br />\r\n<strong>model:</strong>&nbsp;L&agrave; nơi viết c&aacute;c model của hệ thống (l&agrave;m việc với CSDL)<br />\r\n<strong>views</strong>: l&agrave; nơi chứa c&aacute;c views (hiển thị dữ liệu)<br />\r\n<strong>helpers</strong>: chứa c&aacute;c helpers (c&aacute;c h&agrave;m tự x&acirc;y dựng)<br />\r\n<strong>libraries:</strong>&nbsp;chứa c&aacute;c thư viện m&agrave; ch&uacute;ng ta tự ph&aacute;t triển<br />\r\n<strong>language</strong>: chứa c&aacute;c file ng&ocirc;n ngữ,nếu ta &nbsp;l&agrave;m website đa ng&ocirc;n ngữ th&igrave; cần sử dụng tới thư mục n&agrave;y</p>\r\n\r\n<p>Trong đ&oacute; folder System l&agrave; bộ core của CI, ch&uacute;ng ta kh&ocirc;ng được đụng tới n&oacute;, chỉ được ph&eacute;p gọi ra v&agrave; x&agrave;i th&ocirc;i.<br />\r\n<br />\r\nFolder user_guide chỉ l&agrave; folder document, c&aacute;c bạn x&oacute;a n&oacute; đi v&igrave; kh&ocirc;ng cần thiết cho ứng dụng, nếu c&aacute;c bạn muốn để lại tham khảo th&igrave; cũng kh&ocirc;ng sao.<br />\r\nFolder Application l&agrave; folder chứa source web trong qu&aacute; tr&igrave;nh m&igrave;nh ph&aacute;t triển. Mọi file đều nằm trong folder n&agrave;y v&agrave; t&ugrave;y v&agrave;o loại file m&agrave; lưu những vị tr&iacute; kh&aacute;c nhau. Ở những b&agrave;i tới t&ocirc;i sẽ hướng dẫn c&aacute;c bạn sau.<br />\r\n<br />\r\nTrong Application c&aacute;c bạn thấy c&oacute; 3 folders quan trọng nhất đ&oacute; l&agrave;&nbsp;<strong>Controllers, Models v&agrave; Views</strong>. Đ&acirc;y ch&iacute;nh l&agrave; m&ocirc; h&igrave;nh MVC nổi tiếng ở thời điểm n&agrave;y, c&oacute; lẽ c&oacute; nhiều bạn nếu chưa từng l&agrave;m qua m&ocirc; h&igrave;nh MVC sẽ bở ngỡ, th&igrave; m&igrave;nh khuy&ecirc;n bạn n&ecirc;n tập viết ứng dụng bằng m&ocirc; h&igrave;nh MVC viết bằng php OOP thuần th&igrave; qua đ&acirc;y c&aacute;c bạn sẽ rất dễ học.<br />\r\n<br />\r\nC&aacute;c folder c&ograve;n lại ch&uacute;ng ta sẽ đề cập sau v&igrave; một l&uacute;c n&oacute;i hết c&aacute;c folder c&aacute;c bạn cũng chưa chắc hiểu hết, chỉ khi n&agrave;o cần d&ugrave;ng folder n&agrave;o t&ocirc;i sẽ giới thiệu v&agrave; c&aacute;c bạn sẽ năm ngay l&uacute;c đ&oacute;.</p>\r\n\r\n<h2>Kết th&uacute;c</h2>\r\n\r\n<p>Trong b&agrave;i n&agrave;y m&igrave;nh chỉ giới thiệu&nbsp;<strong>sơ lược cấu tr&uacute;c folder Codeigniter&nbsp;</strong>CI thuần vừa mới download về. Trong seria n&agrave;y m&igrave;nh muốn c&aacute;c bạn đọc theo từng b&agrave;i, chứ kh&ocirc;ng n&ecirc;n nhảy bậc, đ&oacute; l&agrave; nguy&ecirc;n tắt viết tuts của m&igrave;nh. B&agrave;i tiếp theo ch&uacute;ng ta sẽ học&nbsp;<a href=\"https://freetuts.net/tao-controller-trong-codeigniter-40.html\" target=\"_blank\" title=\"controller trong codeigniter\">controller trong codeigniter</a>.</p>\r\n', 1, 32, 0),
(36, 'Code', 'frontent/course/code/code_36.php', 2, 33, 3),
(37, 'Content', '<p>D&ograve;ng&nbsp;<strong>if ( ! defined(&lsquo;BASEPATH&rsquo;)) exit(&lsquo;No direct script access allowed&rsquo;);</strong>&nbsp;l&agrave; d&ograve;ng Security bảo vệ file của c&aacute;c bạn, n&oacute; kh&ocirc;ng cho truy cập thẳng v&agrave;o file m&agrave; phải th&ocirc;ng qua file index.php ở mức ngo&agrave;i c&ugrave;ng.<br />\r\n<br />\r\nLớp Hello l&agrave; t&ecirc;n Controller của ch&uacute;ng ta, n&oacute; kế thừa lớp CI_Controller của hệ thống Codeigniter, tất cả c&aacute;c Controller đều phải&nbsp;<a href=\"https://freetuts.net/ke-thua-long-trong-php-32.html\" target=\"_blank\" title=\"tính kế thừa trong php\">kế thừa</a>&nbsp;CI_Controller th&igrave; mới sử dụng được c&aacute;c thư viện của CI v&agrave;&nbsp;<strong>t&ecirc;n Controller phải bắt đầu bằng chữ hoa</strong>.<br />\r\n<br />\r\nH&agrave;m index l&agrave;&nbsp;<strong>Action</strong>&nbsp;(method) của controller,. đ&acirc;y l&agrave; một h&agrave;m mặc định của tất cả c&aacute;c controller trong Codeigniter nghĩa l&agrave; nếu đường dẫn bạn chỉ g&otilde;&nbsp;<strong>domain.com/hello&nbsp;</strong>th&igrave; mặc định n&oacute; sẽ chạy file index<br />\r\n<br />\r\nBạn ra tr&igrave;nh duyệt g&otilde; đường dẫn&nbsp;<strong>localhost/ten_project/index.php/hello/index,&nbsp;</strong>kết quả xuất ra m&agrave;n h&igrave;nh l&agrave; d&ograve;ng &ldquo;<em>Freetuts.net Hello Controller</em>&rdquo; th&igrave; ch&uacute;ng ta đ&atilde; tạo mới th&agrave;nh c&ocirc;ng rồi.<br />\r\n<br />\r\nBạn v&agrave;o file Controller Hello th&ecirc;m một h&agrave;m other mới như sau:</p>\r\n', 1, 33, 4),
(38, 'Code', 'frontent/course/code/code_38.php', 2, 33, 5),
(39, 'Content', '<p>Như vậy l&agrave; ta đ&atilde; tạo th&ecirc;m một h&agrave;m (Action) mới trong controller Hello, b&acirc;y giờ bạn ra tr&igrave;nh duyệt g&otilde; đường dẫn &ldquo;<em>localhost/codeigniter/index.php/hello/other</em>&rdquo; m&agrave;n h&igrave;nh se xuất hiện d&ograve;ng &ldquo;<em>Freetuts.net Other Controller</em>&rdquo;.<br />\r\n<br />\r\nQua hai v&iacute; dụ tr&ecirc;n ta thấy&nbsp;<strong>mỗi Controller trong Codeigniter</strong>&nbsp;ta c&oacute; thể tạo nhiều Action (h&agrave;m) trong đ&oacute;, v&agrave; mỗi action sẽ c&oacute; những nhiệm vụ ri&ecirc;ng biệt.</p>\r\n', 1, 33, 6),
(40, 'Code', 'frontent/course/code/code_40.php', 2, 33, 9),
(41, 'Content', '<p>Bạn ra tr&igrave;nh duyệt g&otilde; đường dẫn &ldquo;<em>localhost/codeigniter/index.php/hello/index/Hello Codeigniter Newbie</em><strong>&ldquo;&nbsp;</strong>&nbsp;th&igrave; m&agrave;n h&igrave;nh sẽ xuất hiện chữ &ldquo;<em>Freetuts.net Hello Codeigniter</em>&rdquo;. Bạn h&atilde;y thử thay đổi biến truyền v&agrave;o để kiểm tra sự huyền diệu của n&oacute;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Biến&nbsp;<code>$message</code>&nbsp;truyền v&agrave;o h&agrave;m (action) index m&igrave;nh g&aacute;n n&oacute; gi&aacute; trị khởi tạo bằng gi&aacute; trị trống &rdquo;. Tại sao m&igrave;nh phải l&agrave;m vậy ? tại v&igrave; theo nguy&ecirc;n tắc tất cả c&aacute;c h&agrave;m nếu truyền kh&ocirc;ng đủ biến v&agrave;o n&oacute; sẽ bị lỗi, nếu ta kh&ocirc;ng g&aacute;n gi&aacute; trị mặc định th&igrave; nếu người d&ugrave;ng chỉ g&otilde; &ldquo;localhost/codeigniter/index.php/hello/index/&rdquo; n&oacute; sẽ bị lỗi ngay, v&igrave; thế tất cả c&aacute;c biến truyền v&agrave;o bạn phải g&aacute;n gi&aacute; trị mặc định để cho an to&agrave;n.<br />\r\n<br />\r\n<strong>V&iacute; dụ 2:</strong></p>\r\n', 1, 33, 10),
(42, 'Code', 'frontent/course/code/code_42.php', 2, 33, 11),
(43, 'Content', '<p>Trong v&iacute; dụ n&agrave;y m&igrave;nh truyền 2 biến v&agrave;o h&agrave;m (action) index v&agrave; g&aacute;n gi&aacute; trị mặc định cho biến, b&acirc;y giờ bạn thử ra tr&igrave;nh duyệt g&otilde; c&aacute;c đường dẫn sau:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>localhost/codeigniter/index.php/hello/index/12/Hello =&gt; kết quả l&agrave; &ldquo;Freetuts.net ID = 12 AND message = Hello&rdquo;</li>\r\n	<li>localhost/codeigniter/index.php/hello/index/12<strong>&nbsp;=&gt;</strong>&nbsp;kết quả l&agrave; &ldquo;Freetuts.net ID = 12 AND message = &rdquo;</li>\r\n	<li>localhost/codeigniter/index.php/hello/index//Hello<strong>&nbsp;=&gt;</strong>&nbsp;kết quả l&agrave; &ldquo;Freetuts.net ID = AND message = Hello&rdquo;</li>\r\n</ul>\r\n\r\n<p>Qua ba v&iacute; dụ tr&ecirc;n ta thấy c&aacute;c biến truyền v&agrave;o h&agrave;m n&oacute; tu&acirc;n theo thứ tự tr&ecirc;n URL.</p>\r\n', 1, 33, 12),
(44, 'Code', 'frontent/course/code/code_44.php', 2, 33, 17),
(45, 'Content', '<p>Trong c&aacute;c v&iacute; dụ tr&ecirc;n URL để gọi Controller trong codeigniter lu&ocirc;n c&oacute; file index.php nh&igrave;n rất l&agrave; mất thẫm mỹ, để bỏ file index.php tr&ecirc;n đường dẫn url trong codeigniter bạn&nbsp;l&agrave;m như sau:<br />\r\nTạo file .htaccess c&ugrave;ng cấp với file index.php, tức l&agrave; ở ngo&agrave;i c&ugrave;ng, sau đ&oacute; copy nội dung n&agrave;y v&agrave;o.</p>\r\n', 1, 33, 19),
(46, 'Code', 'frontent/course/code/code_46.php', 2, 33, 20),
(47, 'Content', '<p>Trong b&agrave;i n&agrave;y t&ocirc;i chỉ hướng dẫn c&aacute;c bạn c&aacute;ch sử dụng controller trong codeigniter đơn giản, c&ograve;n rất nhiều kiến thức kh&aacute;c nhưng t&ocirc;i nghĩ c&aacute;c bạn chưa cần tới vội n&ecirc;n t&ocirc;i sẽ đề cập đến trong một b&agrave;i n&acirc;ng cao hơn. B&agrave;i tiếp theo ch&uacute;ng ta sẽ t&igrave;m hi&ecirc;u c&aacute;ch&nbsp;<a href=\"https://freetuts.net/load-view-trong-codeigniter-41.html\" target=\"_blank\" title=\"load view trong codeigniter\">load view trong codeigniter</a>.</p>\r\n', 1, 33, 22),
(48, '1. Tạo Mới Controller Trong Codeigniter', '', 3, 33, 1),
(49, '2. Truyền Biến Vào Controller', '', 3, 33, 7),
(50, '3. Xác Định Controller Mặc Định', '', 3, 33, 13),
(51, '4. Hàm Khởi Tạo', '', 3, 33, 15),
(52, '5. Xóa Đường Dẫn Index.php trong codeigniter', '', 3, 33, 18),
(53, 'Lời Kết', '', 3, 33, 21),
(54, 'Content', '<p>Tất cả c&aacute;c controller trong codeigniter đều được đặt trong thư mục&nbsp;<strong>Application/Controllers&nbsp;</strong>của CI. Mặc định khi c&agrave;i đặt CI đ&atilde; tạo một controller t&ecirc;n l&agrave;&nbsp;<strong>welcom.php</strong>, bạn x&oacute;a file n&agrave;y đi v&agrave; tạo một file hello.php v&agrave; điền nội dung v&agrave;o l&agrave;:<br />\r\n<strong>Trong đ&oacute;:</strong></p>\r\n', 1, 33, 2),
(55, 'Content', '<p>Trong&nbsp;<strong>m&ocirc; h&igrave;nh MVC của c&aacute;c Framwork</strong>, biến truyền v&agrave;o theo&nbsp;<a href=\"https://freetuts.net/phuong-thuc-get-va-post-trong-php-19.html\" target=\"_blank\" title=\"phương thức get\">phương thức GET</a>&nbsp;đều c&oacute; dạng &ldquo;<em>domain.com/controller/action/parameter1/parameter2/&hellip;</em>&rdquo;,&nbsp; Trong Codeigniter cũng vậy để truyền biến v&agrave;o Controller bạn&nbsp; sẽ c&oacute; đường dẫn l&agrave; &ldquo;<em>domain.com/index.php/controller/action/parameter1/parameter2/&hellip;</em>&rdquo; Trong h&agrave;m (Action) của controller ta sẽ nhận n&oacute; bằng c&aacute;ch truyền những biến c&oacute; vị tr&iacute; tương ứng với từng parameter tr&ecirc;n url.<br />\r\n<br />\r\n<strong>V&iacute; dụ 1:</strong></p>\r\n', 1, 33, 8),
(56, 'Content', '<p><strong>Controller mặc định&nbsp;</strong>l&agrave; controller sẽ được gọi khi tr&ecirc;n url bạn kh&ocirc;ng gọi đến một controller n&agrave;o. Bạn v&agrave;o file<strong>&nbsp;application/config/routes.php</strong>&nbsp;k&eacute;o xuống ph&iacute;a dưới t&igrave;m đến d&ograve;ng&nbsp;<code>$route[&#39;default_controller&#39;] = &ldquo;welcome&rdquo;;.</code>Tại đ&acirc;y bạn sửa gi&aacute; trị của biến&nbsp;<code>$route[&#39;default_controller&#39;]</code>&nbsp;th&agrave;nh t&ecirc;n controller m&agrave; bạn muốn chạy mặc định, v&iacute; dụ t&ocirc;i sẽ sửa th&agrave;nh&nbsp;<code>$route[&#39;default_controller&#39;] = &ldquo;hello/other&rdquo;;</code>&nbsp;sau đ&oacute; ra tr&igrave;nh duyệt g&otilde; đường dẫn&nbsp;<strong>&ldquo;localhost/codeigniter&rdquo;</strong>&nbsp;th&igrave; mặc định n&oacute; sẽ chạy đến controller&nbsp;<strong>&ldquo;hello/other&rdquo;</strong>.</p>\r\n', 1, 33, 14),
(57, 'Content', '<p>Trong lập tr&igrave;nh hướng đối tượng th&igrave; tất cả c&aacute;c lớp đối tượng c&oacute; h&agrave;m khởi tạo, h&agrave;m n&agrave;y sẽ chạy đầu ti&ecirc;n khi bạn khởi tạo một đối tượng mới. Trong PHP h&agrave;m khởi tạo được quy ước l&agrave; đặt tr&ugrave;ng t&ecirc;n với t&ecirc;n Lớp hoặc l&agrave; bạn đặt t&ecirc;n&nbsp;<strong>__construct().</strong><br />\r\n<br />\r\nNếu trong Controller bạn muốn sử dụng h&agrave;m khởi tạo th&igrave; bắt buộc bạn phải gọi đến h&agrave;m khởi tạo của cha n&oacute; (CI_Controller), v&igrave; trong&nbsp;<a href=\"https://freetuts.net/\" target=\"_blank\" title=\"php\">PHP</a>&nbsp;nếu h&agrave;m con kế thừa h&agrave;m cha m&agrave; h&agrave;m con c&oacute; h&agrave;m khởi tạo th&igrave; n&oacute; sẽ chạy h&agrave;m khởi tạo của con chứ kh&ocirc;ng chạy h&agrave;m khởi tạo của cha, m&agrave; trong h&agrave;m khởi tạo của cha lại chứa những đoạn code thiết lập hệ thống cho CI n&ecirc;n bắt buộc phải chạy n&oacute;.</p>\r\n', 1, 33, 16),
(58, '1. Tạo Mới Một View Trong Codeigniter', '', 3, 34, 0),
(59, 'Content', '<p>Trong Codeigniter tất cả c&aacute;c Views đều được đặt trong thư mục application/views. C&aacute;c bạn v&agrave;o folder đ&oacute; tạo một file t&ecirc;n l&agrave; login_view.php, trong view c&aacute;c bạn tạo một form login như sau:<br />\r\n<br />\r\n<u>File application/views/login_view.php</u>:</p>\r\n', 1, 34, 0),
(60, 'Code', 'frontent/course/code/code_60.php', 2, 34, 0),
(61, 'Content', '<p>Vậy l&agrave; bạn đ&atilde; tạo được một view trong codeigniter rồi đ&oacute;.</p>\r\n', 1, 34, 0),
(62, '2. Load View Trong Controller', '', 3, 34, 0),
(63, 'Content', '<p>C&oacute; rất nhiều c&aacute;ch load view trong codeigniter, dưới đ&acirc;y l&agrave; những c&aacute;ch load th&ocirc;ng dụng</p>\r\n\r\n<h3>Load View:</h3>\r\n\r\n<p>Sau khi c&oacute; view login_view.php ở tr&ecirc;n, bạn v&agrave;o tạo một controller mới với t&ecirc;n l&agrave; Login c&oacute; nội dung như sau:<br />\r\n<br />\r\n<u>File application/controllers/Login.php</u>:</p>\r\n', 1, 34, 0),
(64, 'Code', 'frontent/course/code/code_64.php', 2, 34, 0),
(65, 'Content', '<p>Controller Login d&ugrave;ng để xử l&yacute; login, h&agrave;m (action) load_form d&ugrave;ng để load form login cho người d&ugrave;ng nhập dữ liệu v&agrave; c&aacute;c controller bạn đặt t&ecirc;n n&ecirc;n c&oacute; động từ ở đầu th&igrave; sẽ hay hơn.<br />\r\n<br />\r\nC&uacute; ph&aacute;p để load view l&agrave; :&nbsp;$this-&gt;load-&gt;view(&lsquo;t&ecirc;n view&rsquo;);<br />\r\n<br />\r\nBạn ra tr&igrave;nh duyệt g&otilde; URL &ldquo;localhost/codeigniter/login/form_login&rdquo; nếu xuất hiện một form login th&igrave; bạn đ&atilde; load view trong controller th&agrave;nh c&ocirc;ng rồi đấy.</p>\r\n', 1, 34, 0),
(66, 'Load Nhiều View', '', 3, 34, 0),
(67, 'Content', '<p>Để load nhiều view bạn chỉ cần d&ugrave;ng c&uacute; ph&aacute;p load view nhiều lần, v&iacute; dụ:</p>\r\n', 1, 34, 0),
(68, 'Code', 'frontent/course/code/code_68.php', 2, 34, 0),
(69, 'Load View Ở Sub Folder', '', 3, 34, 0),
(70, 'Content', '<p>Th&ocirc;ng thường ta sẽ lưu c&aacute;c view li&ecirc;n quan với nhau trong một folder ri&ecirc;ng, v&iacute; dụ:<br />\r\n- application/views/product/lists.php<br />\r\n- application/views/product/add_form.php<br />\r\n- application/views/product/add_edit.php<br />\r\nVậy để load view nằm ở sub folder dạng n&agrave;y ta d&ugrave;ng c&uacute; ph&aacute;p sau:</p>\r\n', 1, 34, 0),
(71, 'Code', 'frontent/course/code/code_71.php', 2, 34, 0),
(72, 'Load View Ở Dạng Biến', '', 3, 34, 0),
(73, 'Content', '<p>Nếu bạn muốn load một view ở dạng biến th&igrave; bạn d&ugrave;ng c&uacute; ph&aacute;p sau: $var = $this-&gt;load-&gt;view(&lsquo;view_name&rsquo;, &rdquo;, true);<br />\r\n<strong>V&iacute; dụ:</strong></p>\r\n', 1, 34, 0),
(74, 'Code', 'frontent/course/code/code_74.php', 2, 34, 0),
(75, 'Truyền Dữ Liệu Qua View', '', 3, 34, 0),
(76, 'Content', '<p>Để truyền dữ liệu qua view th&igrave; tất cả dữ liệu bạn phải đưa v&agrave;o một&nbsp;<strong>mảng kết hợp</strong>&nbsp;$data, Controller sẽ tự động tạo c&aacute;c biến b&ecirc;n view tương ứng với c&aacute;c key v&agrave; c&aacute;c value trong mảng $data đ&oacute;. Mỗi dữ liệu c&oacute; thể ở c&aacute;c kiểu như: float, double, int, string, object, array.<br />\r\n<br />\r\n<strong>V&iacute; dụ:</strong><br />\r\n<u>Trong controller Login: (File application/controllers/Login.php)</u></p>\r\n', 1, 34, 0),
(77, 'Code', 'frontent/course/code/code_77.php', 2, 34, 0),
(78, 'Content', '<p><u>Trong View Login_form (File application/views/login_view.php):</u><br />\r\n<br />\r\nBạn x&oacute;a hết nội dung cũ v&agrave; g&otilde; v&agrave;o đoạn code PHP sau:</p>\r\n', 1, 34, 0),
(79, 'Code', 'frontent/course/code/code_79.php', 2, 34, 0),
(80, '1. Cấu Hình Database', '', 3, 35, 0),
(81, 'Content', '<p>Trong Codeigniter để kết nối với Database ch&uacute;ng ta phải cấu h&igrave;nh th&ocirc;ng tin cho đ&uacute;ng. Bạn ở file&nbsp;<code>application/config/database.php&nbsp;</code>sau đ&oacute; k&eacute;o xuống b&ecirc;n dưới chỉnh lại một số th&ocirc;ng tin sau:</p>\r\n', 1, 35, 0),
(82, 'Code', 'frontent/course/code/code_82.php', 2, 35, 0),
(83, 'Content', '<p>Sau khi chỉnh xong bạn lưu lại v&agrave; v&agrave;o một&nbsp;Controller&nbsp;n&agrave;o đ&oacute; chạy lệnh n&agrave;y:&nbsp;$this-&gt;load-&gt;database();&nbsp; Nếu kh&ocirc;ng bị lỗi th&igrave; bạn config dababase đ&uacute;ng, c&ograve;n kh&ocirc;ng th&igrave; bạn kiểm tra lại th&ocirc;ng tin nh&eacute;.</p>\r\n', 1, 35, 0),
(84, '2. Tạo Mới Một Model Trong Codeigniter', '', 3, 35, 0),
(85, 'Content', '<p>Tất cả c&aacute;c file model đều nằm trong thư mục&nbsp;application/models&nbsp;n&ecirc;n bạn v&agrave;o đ&oacute; tạo một&nbsp;file news_model.php&nbsp;c&oacute; nội dung như sau:</p>\r\n\r\n<p>Giống với&nbsp;<strong>controller</strong>, khi tạo lớp&nbsp;<strong>M_User&nbsp;</strong>th&igrave; k&iacute; tự đầu ti&ecirc;n ch&uacute;ng ta phải viết hoa.<br />\r\nMọi model phải được kế thừa từ&nbsp;<strong>CI_Model</strong><br />\r\nT&ecirc;n Model kh&ocirc;ng được giống với t&ecirc;n controller ,v&agrave; t&ecirc;n&nbsp;<strong>class&nbsp;</strong>v&agrave; t&ecirc;n file model phải giống nhau, t&ecirc;n file viết thường<br />\r\nNếu trong model sử dụng h&agrave;m khởi tạo&nbsp;<strong>__construct()</strong>&nbsp;th&igrave; ta &nbsp;cần th&ecirc;m&nbsp;&nbsp;<strong>parent::__construct();</strong>&nbsp;để kế thừa từ<strong>&nbsp;CI_Model</strong>(tr&aacute;nh bị ghi đ&egrave;)<br />\r\nĐ&ecirc; kết nối tới&nbsp;<strong>CSDL</strong>&nbsp;ta sử dụng phương thức&nbsp;<strong>$this-&gt;load-&gt;database();</strong></p>\r\n', 1, 35, 0),
(86, 'Code', 'frontent/course/code/code_86.php', 2, 35, 0),
(87, 'Content', '<p>Trong đ&oacute; News_model l&agrave; t&ecirc;n model của bạn, n&oacute; phải giống với t&ecirc;n file news_model.php v&agrave; k&yacute; tự đầu ti&ecirc;n phải ghi hoa. Mọi model đều phải kế thừa lớp CI_Model&nbsp; th&igrave; mới hoạt động được. Vậy l&agrave; bạn đ&atilde; tạo xong model&nbsp;<strong>news_model</strong>&nbsp;rồi đ&oacute;.</p>\r\n', 1, 35, 0),
(88, '3. Load Model Trong Controller', '', 3, 35, 0),
(89, 'Content', '<p>Để load model trong controller ta d&ugrave;ng c&uacute; ph&aacute;p:&nbsp;<strong>$this-&gt;load-&gt;model(&lsquo;ten_model&rsquo;)</strong>, v&agrave; để gọi c&aacute;c h&agrave;m trong model ta d&ugrave;ng c&uacute; ph&aacute;p:<strong>&nbsp;$this-&gt;ten_model-&gt;ham()</strong>.<br />\r\n<br />\r\n<strong>V&iacute; dụ:</strong>&nbsp;Bạn tạo một mới Controller t&ecirc;n l&agrave; News.php với nội dung như sau:</p>\r\n', 1, 35, 0),
(90, 'Code', 'frontent/course/code/code_90.php', 2, 35, 0),
(91, 'Content', '<p>Nếu bạn muốn load model v&agrave; đặt cho n&oacute; một c&aacute;i t&ecirc;n kh&aacute;c th&igrave; ta d&ugrave;ng c&uacute; ph&aacute;p:&nbsp;<strong>$this-&gt;load-&gt;model(&lsquo;ten_model&rsquo;,&#39;ten_khac&rsquo;);</strong>&nbsp;v&agrave; để gọi c&aacute;c h&agrave;m trong model ta d&ugrave;ng c&uacute; ph&aacute;p:&nbsp;<strong>$this-&gt;ten_khac-&gt;ham()</strong>.<br />\r\n<br />\r\n<strong>V&iacute; dụ:</strong></p>\r\n', 1, 35, 0),
(92, 'Code', 'frontent/course/code/code_92.php', 2, 35, 0),
(93, 'Content', '<p>Trong ứng dụng nếu một model n&agrave;o đ&oacute; lu&ocirc;n lu&ocirc;n sử dụng th&igrave; bạn c&oacute; thể d&ugrave;ng chức năng Autoload của Codeigniter, bạn mở file&nbsp;<strong>application/config/autoload.php</strong>&nbsp;v&agrave; t&igrave;m đến d&ograve;ng (h&igrave;nh như d&ograve;ng cuối c&ugrave;ng)&nbsp;<strong>$autoload[&#39;model&#39;] = array(),&nbsp;</strong>sau đ&oacute; bạn th&ecirc;m model bạn cần load v&agrave;o, v&iacute; dụ t&ocirc;i th&ecirc;m model news_model:&nbsp;<strong>$autoload[&#39;model&#39;] = array(&lsquo;news_model&rsquo;)</strong>.<br />\r\n<br />\r\nSau khi th&ecirc;m model v&agrave;o autoload th&igrave; ở controller bạn chỉ cần sử dụng n&oacute; m&agrave; kh&ocirc;ng cần phải load model đ&oacute; ra</p>\r\n', 1, 35, 0),
(94, 'Code', 'frontent/course/code/code_94.php', 2, 35, 0),
(95, 'Content', '<p>Nếu model của bạn nằm trong một folder. V&iacute; dụ model của bạn nằm trong folder&nbsp;<strong>application/models/news/news_model.php&nbsp;</strong>th&igrave; bạn d&ugrave;ng c&uacute; ph&aacute;p sau:<strong>&nbsp;$this-&gt;load-&gt;model(&lsquo;news/news_model&rsquo;)</strong>&nbsp;v&agrave; vẫn d&ugrave;ng c&uacute; ph&aacute;p cũ để gọi h&agrave;m trong model:&nbsp;<strong>$this-&gt;news_model-&gt;getList()</strong>;<br />\r\n<br />\r\n<u>V&iacute; dụ: file model nằm trong thư mục: application/models/news/news_model.php</u></p>\r\n', 1, 35, 0),
(96, 'Code', 'frontent/course/code/code_96.php', 2, 35, 0),
(97, 'Zend Skeleton Application', '', 3, 52, 0),
(98, 'Content', '<p>Zend Framework l&agrave; bộ khung chứa rất nhiều thư viện sử dụng nhiều kh&aacute;i niệm mới, nhiều m&ocirc; h&igrave;nh lập tr&igrave;nh kh&aacute;c nhau, n&ecirc;n trước khi học về ZF bạn cần lưu &yacute; đ&atilde; học qua c&aacute;c đơn vị kiến thức sau:</p>\r\n\r\n<ul>\r\n	<li>Nắm vững&nbsp;PHP cơ bản</li>\r\n	<li>Viết m&atilde;&nbsp;HTML,&nbsp;CSS&nbsp;v&agrave; t&igrave;m hiểu th&ecirc;m về Getbootstrap.</li>\r\n	<li>Sử dụng&nbsp;JavaScript, t&igrave;m hiểu th&ecirc;m về&nbsp;jQuery</li>\r\n	<li>Đọc qua c&aacute;c m&ocirc; h&igrave;nh lập tr&igrave;nh: OOP, MVC, OB, AOP ...(c&acirc;p nhật tại&nbsp;Thuật ngữ)</li>\r\n</ul>\r\n\r\n<p>Như đ&atilde; biết Zend Framework (ZF) c&oacute; rất nhiều th&agrave;nh phần, t&ugrave;y c&aacute;ch phối hợp giữa c&aacute;c th&agrave;nh phần đ&oacute; để tạo n&ecirc;n ứng dụng ri&ecirc;ng, trong đ&oacute;&nbsp;<strong>Zend Skeleton Application</strong>&nbsp;như l&agrave; một ứng dụng khung của ZF, l&agrave; một mẫu chuẩn ứng dụng. Để học ZF c&aacute;ch tốt l&agrave; bắt đầu c&agrave;i đặt v&agrave; t&igrave;m hiểu về Zend Skeleton v&igrave; n&oacute; chứa c&aacute;c th&agrave;nh phần cơ bản, đơn giản của ZF nhằm mục đ&iacute;ch tạo ra một website</p>\r\n\r\n<p>Zend Skeleton lưu trữ tr&ecirc;n GitHub, theo đường link sau:&nbsp;Zend Skeleton</p>\r\n\r\n<p>Tuy nhi&ecirc;n, bạn n&ecirc;n tải về bằng c&aacute;ch sử dụng Composer (c&agrave;i đặt v&agrave; d&ugrave;ng Composer):</p>\r\n\r\n<p>Để thực h&agrave;nh bạn cần tạo một thư mục dự &aacute;n PHP (v&iacute; dụ thư mục C:/wamp64/www/zf3,&nbsp;<em><small>bạn thiết lập thư mục đ&oacute; truy cập được bằng http://localhost/zf3, hoặc domain ảo hoặc đường dẫn theo c&aacute;ch n&agrave;o đ&oacute;</small></em>) sau đ&oacute; mở cmd, chuyển v&agrave;o thư mục đ&oacute; g&otilde; lệnh Composer như sau:</p>\r\n', 1, 52, 0),
(99, 'Code', 'frontent/course/code/code_99.php', 2, 52, 0),
(100, 'Content', '<p>Khi chạy lệnh, khi hỏi&nbsp;<strong>minimal install</strong>&nbsp;trả lời&nbsp;<strong>n</strong>, c&ograve;n lại n&ecirc;n trả lời&nbsp;<strong>y</strong>&nbsp;cho c&aacute;c t&ugrave;y chọn. Với c&aacute;c c&acirc;u hỏi về c&aacute;ch inject module bạn n&ecirc;n chọn 1 (<em>config/modules.config.php</em>)</p>\r\n\r\n<p>Sau khi c&agrave;i đặt xong, v&agrave;o tr&igrave;nh duyệt g&otilde; địa chỉ&nbsp;<code>http://localhost/zf3/public/</code>&nbsp;(địa chỉ trỏ tới folder c&agrave;i đặt zf2, t&ugrave;y thuộc v&agrave;o cấu h&igrave;nh LAMP của bạn m&agrave; c&oacute; thể kh&aacute;c, hoặc bạn tử cấu h&igrave;nh domain ảo trỏ v&agrave;o địa chỉ đ&oacute;), Zend Skeleton xuất hiện với giao diện ban đầu như h&igrave;nh</p>\r\n\r\n<p><img alt=\"zf3\" src=\"https://xuanthulab.net/photo/zf3-4225.jpg\" /></p>\r\n\r\n<p>Tức l&agrave; Website chạy bắt đầu từ file&nbsp;<code>index.php</code>&nbsp;trong thư mục&nbsp;<strong>public</strong>&nbsp;của dự &aacute;n.</p>\r\n\r\n<p>Giờ bạn d&ugrave;ng một IDE hỗ trợ PHP, HTML, CSS nhử PHPStorm, Eclipse (free), NetBeans IDE, Zend Studio ... để mở thư mục dự &aacute;n v&agrave; bắt đầu nghi&ecirc;n cứu về ZF</p>\r\n\r\n<p><strong>Loại bỏ public trong URL</strong></p>\r\n\r\n<p>Nếu muốn g&otilde; đĩa chỉ ở local l&agrave;&nbsp;<em>http://localhost/zf3/</em>&nbsp;chứ kh&ocirc;ng phải&nbsp;<em>http://localhost/zf3/public/</em>&nbsp;th&igrave; l&agrave;m như sau:</p>\r\n\r\n<ul>\r\n	<li>Di chuyển file index.php trong public ra thư mục gốc dự &aacute;n. Mở file ra chỗ n&agrave;o c&oacute;&nbsp;<code>/../</code>&nbsp;thay bằng&nbsp;<code>/</code>, x&oacute;a d&ograve;ng c&oacute;&nbsp;<code>chdir(dirname(__DIR__));</code></li>\r\n	<li>Mở file&nbsp;<code>\\module\\Application\\view\\layout.phtml</code>, chỗ n&agrave;o c&oacute;&nbsp;<code>$this-&gt;basePath(&#39;</code>&nbsp;thay bằng&nbsp;<code>$this-&gt;basePath(&#39;public/</code></li>\r\n	<li>Copy .httaccess ra thư mục gốc</li>\r\n</ul>\r\n\r\n<h2>Cấu tr&uacute;c thư mục của Skeleton ZF</h2>\r\n\r\n<p>Zend Framework t&ugrave;y biến cấu tr&uacute;c thư mục tự do, tuy nhi&ecirc;n h&atilde;y theo nguy&ecirc;n tắc phổ biến đưa ra bởi chương tr&igrave;nh khung. Bạn mở thư mục dự &aacute;n ra, v&agrave; cơ bản n&oacute; tổ chức như h&igrave;nh</p>\r\n\r\n<p><img alt=\"folder zf2\" src=\"https://xuanthulab.net/photo/zffolder-4226.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>config</strong>&nbsp;chứa c&aacute;c file thiết lập của Website</li>\r\n	<li><strong>data</strong>&nbsp;nơi lưu dữ liệu (v&iacute; dụ cache, files ...)</li>\r\n	<li><strong>module</strong>&nbsp;chứa c&aacute;c module ứng dụng (c&aacute;c module m&agrave; bạn d&ugrave;ng ZF tạo ra, cơ bản code PHP ứng dụng của bạn ở đ&acirc;y)</li>\r\n	<li><strong>public</strong>&nbsp;lưu trữ những file thường xuy&ecirc;n truy cập bởi người d&ugrave;ng, như css, img, js trong thư mục con:\r\n	<ul>\r\n		<li>css</li>\r\n		<li>js</li>\r\n		<li>img</li>\r\n		<li>fonts</li>\r\n	</ul>\r\n	</li>\r\n	<li><strong>vendor</strong>&nbsp;thư viện d&ugrave;ng bởi Website, đ&oacute; l&agrave; c&aacute;c Dependence (th&agrave;nh phần b&ecirc;n thứ 3 bạn d&ugrave;ng tới, c&aacute;c th&agrave;nh phần n&agrave;y được tải về theo cấu h&igrave;nh của&nbsp;<code>composer.json</code>), thư viện ZF ở đ&acirc;y</li>\r\n</ul>\r\n\r\n<h2>Tắt ZendDeveloperTools</h2>\r\n\r\n<p>Bạn quan s&aacute;t khi chạy ứng dụng khung Zend Framework với c&aacute;ch c&agrave;i đặt như tr&ecirc;n, n&oacute; c&oacute; một thanh ở ph&iacute;a dưới trang web, n&oacute; l&agrave; cung cụ trợ gi&uacute;p mạnh gi&uacute;p bạn gi&aacute;m s&aacute;t trong qu&aacute; tr&igrave;nh ph&aacute;t triển ứng dụng, tuy nhi&ecirc;n ở thời điểm n&agrave;y tạm thời tắt đi.</p>\r\n\r\n<p>Mở file&nbsp;<code>modules.config.php</code>&nbsp;trong thư mục&nbsp;<code>config</code>&nbsp;th&ecirc;m comment&nbsp;<code>//</code>&nbsp;v&agrave;o trước d&ograve;ng&nbsp;<code>ZendDeveloperTools</code>&nbsp;th&agrave;nh&nbsp;<code>//ZendDeveloperTools</code></p>\r\n\r\n<p>Ở đ&acirc;y sử dụng phi&ecirc;n bản 3.x mới nhất của Zend Framework, n&oacute; y&ecirc;u cầu PHP 7.x trở l&ecirc;n</p>\r\n', 1, 52, 0),
(101, 'Tự động nạp theo chuẩn PSR-4 của Zend Framework', '', 3, 53, 0),
(102, 'Content', '<p>C&aacute;c thư viện, th&agrave;nh phần độc lập c&agrave;i đặt ở thư mục&nbsp;<strong>vendor</strong>&nbsp;sẽ được ZF tự động nạp khi cần d&ugrave;ng đến bằng c&aacute;ch sử dụng khai b&aacute;o&nbsp;<strong>namespace</strong>&nbsp;v&agrave; t&ecirc;n lớp th&iacute;ch hợp. Để xem PSR-4 hoạt động như thế n&agrave;o h&atilde;y xem lại&nbsp;Ti&ecirc;u chuẩn PSR-4</p>\r\n\r\n<p>Một trong yếu tố cốt yếu của Zend Framework l&agrave; bạn ph&aacute;t triển ứng dụng với c&aacute;c module, mỗi module thực hiện một chức năng n&agrave;o đ&oacute;. C&aacute;c module bạn x&acirc;y dựng sẽ được nạp khi ứng dụng hoạt động theo nguy&ecirc;n l&yacute; của&nbsp;<strong>PSR-4</strong></p>\r\n\r\n<p>Trong ứng dụng Zend Skeleton, một module mặc định được tạo sẵn cho bạn đ&oacute; l&agrave;&nbsp;<strong>Application</strong>&nbsp;nằm ở thư mục&nbsp;<em>module/Application</em>, trong đ&oacute; định nghĩa c&aacute;c lớp, c&aacute;c th&agrave;nh phần của module</p>\r\n\r\n<p>Giờ bạn xem ZF nạp module đ&oacute; như thế n&agrave;o: Mở file&nbsp;<strong>composer.json</strong>&nbsp;bạn thấy đoạn cấu h&igrave;nh</p>\r\n', 1, 53, 0),
(103, 'Code', 'frontent/course/code/code_103.php', 2, 53, 0),
(105, 'Content', '<p>Đoạn code đ&oacute; cho biết&nbsp;<code>Composer</code>&nbsp;đ&atilde; từng ph&aacute;t sinh code để tự động nạp module&nbsp;<strong>Application</strong>&nbsp;v&agrave;o ứng dụng. Do khai b&aacute;o psr-4 l&agrave;&nbsp;<strong>&quot;Application\\\\&quot;: &quot;module/Application/src/&quot;</strong>&nbsp;c&oacute; nghĩa namespace đầu ti&ecirc;n&nbsp;<code>Application</code>&nbsp;trở v&agrave;o thư mục&nbsp;<code>module/Application/src/</code>, v&agrave; c&aacute;c lớp sẽ viết theo thư mục con trong&nbsp;<code>src</code>&nbsp;dần dẫn đến t&ecirc;n lớp.</p>\r\n\r\n<p>V&iacute; dụ c&oacute; lớp:&nbsp;<strong>Application\\Controller\\IndexController</strong>, c&oacute; nghĩa trong&nbsp;<code>src</code>&nbsp;c&oacute; thư mục&nbsp;<code>Controller</code>, v&agrave; c&oacute; file&nbsp;<code>IndexController.php</code>, b&ecirc;n trong định nghĩa lớp&nbsp;<code>IndexController</code>: bạn mở thư mục ứng dụng ra kiểm tra</p>\r\n', 1, 53, 0),
(106, 'Áp dụng PSR-4', '', 3, 53, 0),
(107, 'Content', '<p>Giờ &aacute;p dụng, nếu bạn muốn x&acirc;y dựng một module mới, giả sử module c&oacute; t&ecirc;n&nbsp;<code>MyFirstModule</code>&nbsp;v&agrave; tự động nạp c&aacute;c th&agrave;nh phần của module đ&oacute; theo psr-4:</p>\r\n\r\n<p><em>(V&iacute; dụ n&agrave;y sử dụng&nbsp;<a href=\"https://xuanthulab.net/cai-dat-zend-framework-chuong-trinh-dau-tien.html\">Zend Skeleton Application</a>&nbsp;c&agrave;i đặt theo c&aacute;ch của b&agrave;i 1)</em></p>\r\n\r\n<p><strong>Bước 1)</strong>&nbsp;Tạo một thư mục c&oacute; t&ecirc;n&nbsp;<code>MyFirstModule</code>&nbsp;trong thư mục&nbsp;<code>module</code></p>\r\n\r\n<p><strong>Bước 2)</strong>&nbsp;Tạo một thư mục t&ecirc;n&nbsp;<code>src</code>&nbsp;trong&nbsp;<code>MyFirstModule</code>, v&agrave; c&aacute;c thư mục con kh&aacute;c đến cấp thư mục con t&ugrave;y th&iacute;ch trong&nbsp;<code>src</code>. V&iacute; dụ dự định đặt một v&agrave;i lớp trong thư mục&nbsp;<code>Lib1</code>&nbsp;th&igrave; tạo thư mục&nbsp;<code>Lib1</code>&nbsp;(giờ đường dẫn đầy đủ đến thư mục Lib1 l&agrave;&nbsp;<strong>module/MyFirstModule/src/Lib1</strong></p>\r\n\r\n<p>Tạo lớp PHP c&oacute; t&ecirc;n&nbsp;<strong>Vidupsr4</strong>, tạo ra file c&oacute; t&ecirc;n&nbsp;<code>Vidupsr4.php</code>&nbsp;trong Lib1, v&agrave; mở ra cập nhật nội dung như sau:</p>\r\n', 1, 53, 0),
(108, 'Code', 'frontent/course/code/code_108.php', 2, 53, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_posts_get_code`
--

CREATE TABLE `qh_posts_get_code` (
  `id` int(11) NOT NULL,
  `name_get` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` text COLLATE utf8_unicode_ci NOT NULL,
  `id_name_get` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_posts_get_code`
--

INSERT INTO `qh_posts_get_code` (`id`, `name_get`, `code`, `id_name_get`) VALUES
(1, 'Css Drop Shadow', '', 0),
(2, '', 'box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;', 1),
(3, '', 'box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;', 1),
(4, '', 'box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;', 1),
(5, '', 'box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;', 1),
(6, '', 'box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;', 1),
(7, '', 'box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;', 1),
(8, '', 'box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;', 1),
(9, '', 'box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(51, 51, 51) 0px 0px 0px 3px;', 1),
(10, '', 'box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;', 1),
(11, '', 'box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;', 1),
(12, '', 'box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;', 1),
(13, '', 'box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;', 1),
(14, '', 'box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;', 1),
(15, '', 'box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;', 1),
(16, '', 'box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;', 1),
(17, '', 'box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;', 1),
(18, '', 'box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;', 1),
(19, '', 'box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;', 1),
(20, '', 'box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;', 1),
(21, '', 'box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;', 1),
(22, '', 'box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;', 1),
(23, '', 'box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;', 1),
(24, '', 'box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;', 1),
(25, '', 'box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;', 1),
(26, '', 'box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;', 1),
(27, '', 'box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;', 1),
(28, '', 'box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;', 1),
(29, '', 'box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;', 1),
(30, '', 'box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;', 1),
(31, '', 'box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;', 1),
(32, '', 'box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;', 1),
(33, '', 'box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;', 1),
(34, '', 'box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;', 1),
(35, '', 'box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;', 1),
(36, '', 'box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;', 1),
(37, '', 'box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px;', 1),
(38, '', 'box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;', 1),
(39, '', 'box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;', 1),
(40, '', 'box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;', 1),
(41, '', 'box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;', 1),
(42, '', 'box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;', 1),
(43, '', 'box-shadow: rgba(0, 0, 0, 0.06) 0px 2px 4px 0px inset;', 1),
(44, '', 'box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;', 1),
(45, '', 'box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;', 1),
(46, '', 'box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;', 1),
(47, '', 'box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;', 1),
(48, '', 'box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;', 1),
(49, '', 'box-shadow: rgba(0, 0, 0, 0.04) 0px 3px 5px;', 1),
(50, '', 'box-shadow: rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px;', 1),
(51, '', 'box-shadow: rgba(240, 46, 170, 0.4) 0px 5px, rgba(240, 46, 170, 0.3) 0px 10px, rgba(240, 46, 170, 0.2) 0px 15px, rgba(240, 46, 170, 0.1) 0px 20px, rgba(240, 46, 170, 0.05) 0px 25px;', 1),
(52, '', 'box-shadow: rgba(240, 46, 170, 0.4) 5px 5px, rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;', 1),
(53, '', 'box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;', 1),
(54, '', 'box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;', 1),
(55, '', 'box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;', 1),
(56, '', 'box-shadow: rgba(27, 31, 35, 0.04) 0px 1px 0px, rgba(255, 255, 255, 0.25) 0px 1px 0px inset;', 1),
(57, '', 'box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 3px;', 1),
(58, '', 'box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;', 1),
(59, '', 'box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;', 1),
(60, '', 'box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;', 1),
(61, '', 'box-shadow: rgba(33, 35, 38, 0.1) 0px 10px 10px -10px;', 1),
(62, '', 'box-shadow: blue 0px 0px 0px 2px inset, rgb(255, 255, 255) 10px -10px 0px -3px, rgb(31, 193, 27) 10px -10px, rgb(255, 255, 255) 20px -20px 0px -3px, rgb(255, 217, 19) 20px -20px, rgb(255, 255, 255) 30px -30px 0px -3px, rgb(255, 156, 85) 30px -30px, rgb(255, 255, 255) 40px -40px 0px -3px, rgb(255, 85, 85) 40px -40px;', 1),
(63, '', 'box-shadow: rgb(85, 91, 255) 0px 0px 0px 3px, rgb(31, 193, 27) 0px 0px 0px 6px, rgb(255, 217, 19) 0px 0px 0px 9px, rgb(255, 156, 85) 0px 0px 0px 12px, rgb(255, 85, 85) 0px 0px 0px 15px;', 1),
(64, '', 'box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;', 1),
(65, '', 'box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;', 1),
(66, '', 'box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px;', 1),
(67, '', 'box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;', 1),
(68, '', 'box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;', 1),
(69, '', 'box-shadow: rgba(17, 17, 26, 0.05) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;', 1),
(70, '', 'box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;', 1),
(71, '', 'box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 48px;', 1),
(72, '', 'box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;', 1),
(73, '', 'box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;', 1),
(74, '', 'box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;', 1),
(75, '', 'box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;', 1),
(76, '', 'box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;', 1),
(77, '', 'box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px 0px;', 1),
(78, '', 'box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;', 1),
(79, '', 'box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;', 1),
(80, '', 'box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;', 1),
(81, '', 'box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;', 1),
(82, '', 'box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;', 1),
(83, '', 'box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;', 1),
(84, '', 'box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;', 1),
(85, '', 'box-shadow: rgba(0, 0, 0, 0.2) 0px 20px 30px;', 1),
(86, '', 'box-shadow: rgba(255, 255, 255, 0.2) 0px 0px 0px 1px inset, rgba(0, 0, 0, 0.9) 0px 0px 0px 1px;', 1),
(87, '', 'box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset;', 1),
(88, '', 'box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;', 1),
(89, '', 'box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;', 1),
(90, '', 'box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;', 1),
(91, '', 'box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;', 1),
(92, '', 'box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px, rgb(209, 213, 219) 0px 0px 0px 1px inset;', 1),
(93, '', 'box-shadow: rgba(0, 0, 0, 0.35) 0px -50px 36px -28px inset;', 1),
(94, '', 'box-shadow: rgba(9, 30, 66, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px;', 1),
(95, '', 'box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_post_category`
--

CREATE TABLE `qh_post_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_vn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_jp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_kr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_ch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_lg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `imgwebsite` text COLLATE utf8_unicode_ci NOT NULL,
  `imgsocial` text COLLATE utf8_unicode_ci NOT NULL,
  `img_background` text COLLATE utf8_unicode_ci NOT NULL,
  `color_background` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color_text` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `view` int(11) NOT NULL,
  `father_id` int(11) NOT NULL,
  `post_type_id` int(11) NOT NULL,
  `post_templates_id` int(11) NOT NULL,
  `post_templates_main` int(11) NOT NULL DEFAULT 19,
  `post_website` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `post_status` int(11) NOT NULL DEFAULT 2,
  `id_posts` int(11) NOT NULL,
  `posts_style` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_post_category`
--

INSERT INTO `qh_post_category` (`id`, `name`, `url_vn`, `url_en`, `url_jp`, `url_kr`, `url_ch`, `url_lg`, `title`, `description`, `keywords`, `imgwebsite`, `imgsocial`, `img_background`, `color_background`, `color_text`, `content`, `view`, `father_id`, `post_type_id`, `post_templates_id`, `post_templates_main`, `post_website`, `num`, `post_status`, `id_posts`, `posts_style`) VALUES
(0, '{\"vn\":\"Kh\\u00f4ng c\\u00f3 danh m\\u1ee5c\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'khong-co-danh-muc', 'no-category', '', '', '', '', '{\"vn\":\"Kh\\u00f4ng c\\u00f3 danh m\\u1ee5c\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"Kh\\u00f4ng c\\u00f3 danh m\\u1ee5c\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', '', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 0, 0, 0, 88, 19, 1, 1, 2, 0, 0),
(79, '{\"vn\":\"S\\u1ea3n ph\\u1ea9m\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'san-pham', '', '', '', '', '', '{\"vn\":\"S\\u1ea3n ph\\u1ea9m\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"S\\u1ea3n ph\\u1ea9m\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 0, 2, 89, 19, 1, 2, 2, 0, 1),
(80, '{\"vn\":\"Th\\u1ee9c \\u0103n ch\\u0103n nu\\u00f4i\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'thuc-an-chan-nuoi', '', '', '', '', '', '{\"vn\":\"Th\\u1ee9c \\u0103n ch\\u0103n nu\\u00f4i\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 79, 2, 89, 19, 1, 1, 2, 0, 1),
(81, '{\"vn\":\"Con gi\\u1ed1ng\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'con-giong', '', '', '', '', '', '{\"vn\":\"Con gi\\u1ed1ng\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/themebun.com\\/ckfinder\\/userfiles\\/images\\/ducvu\\/heo-ga-giong.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/themebun.com\\/ckfinder\\/userfiles\\/images\\/ducvu\\/heo-ga-giong.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#0077b3', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 79, 2, 89, 19, 1, 2, 2, 0, 1),
(82, '{\"vn\":\"Anova Feed\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'anova-feed', '', '', '', '', '', '{\"vn\":\"Anova Feed\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 80, 2, 89, 19, 1, 1, 2, 0, 1),
(83, '{\"vn\":\"Th\\u1ee9c \\u0103n cho heo\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'thuc-an-cho-heo', '', '', '', '', '', '{\"vn\":\"Th\\u1ee9c \\u0103n cho heo\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"Th\\u1ee9c \\u0103n cho heo\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/media\\/2023\\/icon\\/thuc-an-cho-heo.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/media\\/2023\\/icon\\/thuc-an-cho-heo.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '', '', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 82, 2, 89, 19, 1, 1, 2, 0, 1),
(84, '{\"vn\":\"Th\\u1ee9c \\u0103n cho gia c\\u1ea7m\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'thuc-an-cho-gia-cam', '', '', '', '', '', '{\"vn\":\"Th\\u1ee9c \\u0103n cho gia c\\u1ea7m\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"Th\\u1ee9c \\u0103n cho gia c\\u1ea7m\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/themebun.com\\/ckfinder\\/userfiles\\/images\\/ducvu\\/thuc-an-cho-gia-cam.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/themebun.com\\/ckfinder\\/userfiles\\/images\\/ducvu\\/thuc-an-cho-gia-cam.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 82, 2, 89, 19, 1, 2, 2, 0, 1),
(85, '{\"vn\":\"Th\\u1ee9c \\u0103n cho b\\u00f2 - d\\u00ea\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'thuc-an-cho-bo-de', '', '', '', '', '', '{\"vn\":\"Th\\u1ee9c \\u0103n cho b\\u00f2 - d\\u00ea\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"Th\\u1ee9c \\u0103n cho b\\u00f2 - d\\u00ea\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/themebun.com\\/ckfinder\\/userfiles\\/images\\/ducvu\\/thuc-an-cho-bo.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/themebun.com\\/ckfinder\\/userfiles\\/images\\/ducvu\\/thuc-an-cho-bo.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 82, 2, 89, 19, 1, 3, 2, 0, 1),
(86, '{\"vn\":\"Th\\u1ee9c \\u0103n cho heo con\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'thuc-an-cho-heo-con', '', '', '', '', '', '{\"vn\":\"Th\\u1ee9c \\u0103n cho heo con\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/media\\/2023\\/icon\\/thuc-an-cho-heo.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/media\\/2023\\/icon\\/thuc-an-cho-heo.jpg\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 83, 2, 89, 19, 1, 1, 2, 0, 1),
(87, '{\"vn\":\"Th\\u1ee9c \\u0103n cho heo th\\u1ecbt\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'thuc-an-cho-heo-thit', '', '', '', '', '', '{\"vn\":\"Th\\u1ee9c \\u0103n cho heo th\\u1ecbt\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 83, 2, 89, 19, 1, 2, 2, 0, 1),
(88, '{\"vn\":\"Ki\\u1ebfn th\\u1ee9c ch\\u0103n nu\\u00f4i\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'kien-thuc-chan-nuoi', '', '', '', '', '', '{\"vn\":\"Ki\\u1ebfn th\\u1ee9c ch\\u0103n nu\\u00f4i\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 0, 1, 95, 19, 1, 3, 2, 0, 1),
(89, '{\"vn\":\"Ch\\u00ednh s\\u00e1ch\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'chinh-sach', '', '', '', '', '', '{\"vn\":\"Ch\\u00ednh s\\u00e1ch\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 0, 1, 95, 19, 1, 4, 2, 0, 1),
(90, '{\"vn\":\"Gi\\u1edbi thi\\u1ec7u\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'gioi-thieu', '', '', '', '', '', '{\"vn\":\"Gi\\u1edbi thi\\u1ec7u\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 0, 1, 95, 19, 1, 5, 2, 0, 1),
(91, '{\"vn\":\"Video k\\u1ef9 thu\\u1eadt ch\\u0103n nu\\u00f4i\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'video-ky-thuat-chan-nuoi', '', '', '', '', '', '{\"vn\":\"Video k\\u1ef9 thu\\u1eadt ch\\u0103n nu\\u00f4i\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 0, 3, 102, 19, 1, 6, 2, 0, 1),
(92, '{\"vn\":\"Ch\\u0103n nu\\u00f4i c\\u00f9ng chuy\\u00ean gia\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'chan-nuoi-cung-chuyen-gia', '', '', '', '', '', '{\"vn\":\"Ch\\u0103n nu\\u00f4i c\\u00f9ng chuy\\u00ean gia\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 0, 1, 95, 19, 1, 7, 2, 0, 1),
(94, '{\"vn\":\"C\\u00e2u h\\u1ecfi th\\u01b0\\u1eddng g\\u1eb7p\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'cau-hoi-thuong-gap', '', '', '', '', '', '{\"vn\":\"C\\u00e2u h\\u1ecfi th\\u01b0\\u1eddng g\\u1eb7p\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 0, 1, 95, 19, 1, 8, 2, 0, 1),
(95, '{\"vn\":\"Tin t\\u1ee9c - S\\u1ef1 ki\\u1ec7n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'tin-tuc-su-kien', '', '', '', '', '', '{\"vn\":\"Tin t\\u1ee9c - S\\u1ef1 ki\\u1ec7n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 0, 1, 95, 19, 1, 9, 2, 0, 1),
(96, '{\"vn\":\"Tin t\\u1ee9c th\\u1ecb tr\\u01b0\\u1eddng\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'tin-tuc-thi-truong', '', '', '', '', '', '{\"vn\":\"Tin t\\u1ee9c th\\u1ecb tr\\u01b0\\u1eddng\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 95, 1, 95, 19, 1, 1, 2, 0, 1),
(97, '{\"vn\":\"Tin Anova Feed\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'tin-anova-feed', '', '', '', '', '', '{\"vn\":\"Tin Anova Feed\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#fafafa', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 95, 1, 95, 19, 1, 2, 2, 0, 1),
(98, '{\"vn\":\"Anova Feed v\\u1edbi c\\u1ed9ng \\u0111\\u1ed3ng\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'anova-feed-voi-cong-dong', '', '', '', '', '', '{\"vn\":\"Anova Feed v\\u1edbi c\\u1ed9ng \\u0111\\u1ed3ng\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 95, 1, 95, 19, 1, 3, 2, 0, 1),
(99, '{\"vn\":\"Tuy\\u1ec3n d\\u1ee5ng\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'tuyen-dung', '', '', '', '', '', '{\"vn\":\"Tuy\\u1ec3n d\\u1ee5ng\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 0, 1, 95, 19, 1, 10, 2, 0, 1),
(100, '{\"vn\":\"Ch\\u00ednh s\\u00e1ch nh\\u00e2n s\\u1ef1\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'chinh-sach-nhan-su', '', '', '', '', '', '{\"vn\":\"Ch\\u00ednh s\\u00e1ch nh\\u00e2n s\\u1ef1\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 99, 1, 95, 19, 1, 1, 2, 0, 1),
(101, '{\"vn\":\"C\\u01a1 h\\u1ed9i ngh\\u1ec1 nghi\\u1ec7p\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'co-hoi-nghe-nghiep', '', '', '', '', '', '{\"vn\":\"C\\u01a1 h\\u1ed9i ngh\\u1ec1 nghi\\u1ec7p\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 99, 1, 95, 19, 1, 2, 2, 0, 1),
(102, '{\"vn\":\"B\\u00f2\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'bo', '', '', '', '', '', '{\"vn\":\"B\\u00f2\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 91, 3, 102, 19, 1, 1, 2, 0, 1),
(103, '{\"vn\":\"G\\u00e0\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'ga', '', '', '', '', '', '{\"vn\":\"G\\u00e0\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 91, 3, 102, 19, 1, 2, 2, 0, 1),
(104, '{\"vn\":\"L\\u1ee3n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', 'lon', '', '', '', '', '', '{\"vn\":\"L\\u1ee3n\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '{\"vn\":\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/Banner\\/tacn.png\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":\"\",\"lg\":\"\"}', '#000000', '#ffffff', '{\"vn\":\"\",\"en\":\"\",\"jp\":\"\",\"kr\":\"\",\"ch\":null,\"lg\":\"\"}', 0, 91, 3, 102, 19, 1, 3, 2, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_post_img`
--

CREATE TABLE `qh_post_img` (
  `id` int(11) NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `id_posts` int(11) NOT NULL,
  `id_position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_post_status`
--

CREATE TABLE `qh_post_status` (
  `id` int(11) NOT NULL,
  `post_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_post_tags`
--

CREATE TABLE `qh_post_tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo` text COLLATE utf8_unicode_ci NOT NULL,
  `view` int(11) NOT NULL,
  `post_type_id` int(11) NOT NULL,
  `post_website` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_post_tags_distribution`
--

CREATE TABLE `qh_post_tags_distribution` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_tags` int(11) NOT NULL,
  `post_website` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_post_tags_distribution`
--

INSERT INTO `qh_post_tags_distribution` (`id`, `id_post`, `id_tags`, `post_website`) VALUES
(1, 81, 0, 2),
(2, 82, 0, 2),
(3, 83, 0, 2),
(4, 84, 0, 2),
(5, 85, 17, 2),
(6, 86, 17, 2),
(7, 87, 16, 2),
(8, 89, 16, 2),
(9, 90, 16, 2),
(10, 91, 16, 2),
(11, 97, 0, 2),
(12, 98, 16, 2),
(13, 99, 16, 2),
(14, 101, 17, 2),
(15, 102, 17, 2),
(16, 103, 17, 2),
(17, 104, 17, 2),
(18, 105, 17, 2),
(19, 106, 17, 2),
(20, 107, 17, 2),
(21, 108, 17, 2),
(22, 109, 17, 2),
(23, 110, 17, 2),
(24, 111, 17, 2),
(25, 112, 17, 2),
(26, 113, 17, 2),
(27, 114, 17, 2),
(28, 115, 17, 2),
(29, 116, 17, 2),
(30, 117, 17, 2),
(31, 118, 17, 2),
(32, 119, 17, 2),
(33, 120, 17, 2),
(34, 121, 17, 2),
(35, 122, 17, 2),
(36, 123, 17, 2),
(37, 124, 17, 2),
(38, 125, 17, 2),
(39, 126, 17, 2),
(40, 127, 17, 2),
(41, 128, 17, 2),
(42, 129, 17, 2),
(43, 130, 17, 2),
(44, 131, 17, 2),
(45, 132, 17, 2),
(46, 133, 17, 2),
(47, 134, 17, 2),
(48, 135, 17, 2),
(49, 136, 17, 2),
(50, 137, 17, 2),
(51, 138, 17, 2),
(52, 139, 17, 2),
(53, 141, 17, 2),
(54, 142, 17, 2),
(55, 143, 17, 2),
(56, 144, 17, 2),
(57, 145, 17, 2),
(58, 146, 17, 2),
(59, 147, 17, 2),
(60, 148, 17, 2),
(61, 149, 17, 2),
(62, 150, 17, 2),
(63, 151, 17, 2),
(64, 152, 17, 2),
(65, 153, 17, 2),
(66, 154, 17, 2),
(67, 155, 17, 2),
(68, 156, 17, 2),
(69, 157, 17, 2),
(70, 158, 17, 2),
(71, 159, 17, 2),
(72, 160, 17, 2),
(73, 161, 17, 2),
(74, 162, 17, 2),
(75, 163, 17, 2),
(76, 164, 17, 2),
(77, 165, 18, 2),
(78, 166, 18, 2),
(79, 167, 18, 2),
(80, 168, 18, 2),
(81, 169, 18, 2),
(82, 170, 18, 2),
(83, 171, 18, 2),
(84, 172, 18, 2),
(85, 173, 18, 2),
(86, 174, 18, 2),
(87, 175, 18, 2),
(88, 176, 18, 2),
(89, 177, 18, 2),
(90, 178, 18, 2),
(91, 179, 18, 2),
(92, 180, 18, 2),
(93, 181, 18, 2),
(94, 182, 18, 2),
(95, 183, 18, 2),
(96, 184, 18, 2),
(97, 185, 18, 2),
(98, 186, 18, 2),
(99, 187, 18, 2),
(100, 188, 18, 2),
(101, 189, 18, 2),
(102, 190, 18, 2),
(103, 191, 18, 2),
(104, 192, 18, 2),
(105, 193, 18, 2),
(106, 194, 18, 2),
(107, 195, 18, 2),
(108, 196, 18, 2),
(109, 197, 18, 2),
(110, 198, 18, 2),
(111, 199, 18, 2),
(112, 200, 18, 2),
(113, 201, 18, 2),
(114, 202, 18, 2),
(115, 203, 18, 2),
(116, 204, 18, 2),
(117, 205, 18, 2),
(118, 206, 18, 2),
(119, 207, 18, 2),
(120, 208, 18, 2),
(121, 209, 18, 2),
(122, 210, 18, 2),
(123, 211, 18, 2),
(124, 212, 18, 2),
(125, 213, 18, 2),
(126, 214, 18, 2),
(127, 215, 18, 2),
(128, 216, 18, 2),
(129, 217, 18, 2),
(130, 218, 18, 2),
(131, 219, 18, 2),
(132, 220, 18, 2),
(133, 221, 18, 2),
(134, 222, 18, 2),
(135, 223, 18, 2),
(136, 224, 18, 2),
(137, 225, 18, 2),
(138, 226, 18, 2),
(139, 227, 18, 2),
(140, 228, 18, 2),
(141, 229, 18, 2),
(142, 230, 18, 2),
(143, 231, 18, 2),
(144, 232, 18, 2),
(145, 233, 18, 2),
(146, 234, 18, 2),
(147, 235, 18, 2),
(148, 236, 18, 2),
(149, 237, 18, 2),
(150, 238, 18, 2),
(151, 239, 18, 2),
(152, 240, 18, 2),
(153, 241, 18, 2),
(154, 242, 18, 2),
(155, 243, 18, 2),
(156, 244, 18, 2),
(157, 245, 18, 2),
(158, 246, 18, 2),
(159, 247, 18, 2),
(160, 248, 18, 2),
(161, 249, 18, 2),
(162, 250, 18, 2),
(163, 251, 18, 2),
(164, 252, 18, 2),
(165, 253, 18, 2),
(166, 254, 18, 2),
(167, 255, 18, 2),
(168, 256, 18, 2),
(169, 257, 19, 2),
(170, 257, 18, 2),
(171, 258, 19, 2),
(172, 258, 18, 2),
(173, 259, 18, 2),
(174, 260, 18, 2),
(175, 261, 18, 2),
(176, 262, 18, 2),
(177, 263, 18, 2),
(178, 264, 18, 2),
(179, 265, 18, 2),
(180, 266, 18, 2),
(181, 267, 18, 2),
(182, 268, 18, 2),
(183, 269, 18, 2),
(184, 270, 18, 2),
(185, 271, 18, 2),
(186, 272, 18, 2),
(187, 273, 18, 2),
(188, 274, 18, 2),
(189, 275, 18, 2),
(190, 276, 18, 2),
(191, 277, 18, 2),
(192, 278, 18, 2),
(193, 279, 18, 2),
(194, 280, 18, 2),
(195, 281, 18, 2),
(196, 282, 18, 2),
(197, 283, 18, 2),
(198, 284, 18, 2),
(199, 285, 18, 2),
(200, 286, 18, 2),
(201, 287, 18, 2),
(202, 288, 18, 2),
(203, 289, 18, 2),
(204, 290, 18, 2),
(205, 291, 18, 2),
(206, 292, 18, 2),
(207, 293, 18, 2),
(208, 294, 18, 2),
(209, 295, 18, 2),
(210, 296, 18, 2),
(211, 297, 18, 2),
(212, 298, 18, 2),
(213, 299, 18, 2),
(214, 300, 18, 2),
(215, 301, 18, 2),
(216, 302, 18, 2),
(217, 303, 18, 2),
(218, 304, 18, 2),
(219, 305, 18, 2),
(220, 306, 18, 2),
(221, 307, 18, 2),
(222, 308, 18, 2),
(223, 309, 18, 2),
(224, 310, 18, 2),
(225, 311, 18, 2),
(226, 312, 18, 2),
(227, 313, 18, 2),
(228, 314, 18, 2),
(229, 315, 18, 2),
(230, 316, 18, 2),
(231, 317, 18, 2),
(232, 318, 18, 2),
(233, 319, 18, 2),
(234, 320, 18, 2),
(235, 321, 18, 2),
(236, 322, 18, 2),
(237, 323, 18, 2),
(238, 324, 18, 2),
(239, 325, 18, 2),
(240, 326, 18, 2),
(241, 327, 18, 2),
(242, 328, 18, 2),
(243, 329, 18, 2),
(244, 330, 18, 2),
(245, 331, 18, 2),
(246, 332, 18, 2),
(247, 333, 18, 2),
(248, 334, 18, 2),
(249, 335, 18, 2),
(250, 336, 18, 2),
(251, 337, 18, 2),
(252, 338, 18, 2),
(253, 339, 18, 2),
(254, 340, 18, 2),
(255, 341, 18, 2),
(256, 342, 18, 2),
(257, 343, 18, 2),
(258, 344, 18, 2),
(259, 345, 18, 2),
(260, 346, 18, 2),
(261, 347, 18, 2),
(262, 348, 18, 2),
(263, 349, 18, 2),
(264, 350, 18, 2),
(265, 351, 18, 2),
(266, 352, 18, 2),
(267, 353, 18, 2),
(268, 354, 18, 2),
(269, 355, 18, 2),
(270, 356, 18, 2),
(271, 357, 18, 2),
(272, 358, 18, 2),
(273, 359, 18, 2),
(274, 360, 18, 2),
(275, 361, 18, 2),
(276, 362, 18, 2),
(277, 363, 18, 2),
(278, 364, 18, 2),
(279, 365, 20, 2),
(280, 366, 20, 2),
(281, 367, 20, 2),
(282, 3652, 20, 2),
(283, 3653, 20, 2),
(284, 3654, 20, 2),
(285, 3655, 20, 2),
(286, 3656, 20, 2),
(287, 3657, 0, 2),
(288, 3658, 0, 2),
(289, 3659, 0, 2),
(290, 3660, 0, 2),
(291, 3816, 21, 2),
(292, 3817, 21, 2),
(293, 3818, 21, 2),
(294, 3819, 21, 2),
(295, 3820, 21, 2),
(296, 3821, 21, 2),
(297, 3822, 21, 2),
(298, 3823, 21, 2),
(299, 3824, 21, 2),
(300, 3825, 21, 2),
(301, 3826, 21, 2),
(302, 3827, 21, 2),
(303, 3828, 21, 2),
(304, 3829, 21, 2),
(305, 3830, 21, 2),
(306, 3831, 21, 2),
(307, 3832, 21, 2),
(308, 3833, 21, 2),
(309, 3834, 21, 2),
(310, 3835, 21, 2),
(311, 3836, 21, 2),
(312, 3837, 21, 2),
(313, 3838, 21, 2),
(314, 3839, 21, 2),
(315, 3840, 21, 2),
(316, 3841, 21, 2),
(317, 3842, 21, 2),
(318, 3843, 21, 2),
(319, 3844, 21, 2),
(320, 3845, 21, 2),
(321, 3846, 21, 2),
(322, 3847, 21, 2),
(323, 3848, 21, 2),
(324, 3849, 21, 2),
(325, 3850, 21, 2),
(326, 3851, 21, 2),
(327, 3852, 21, 2),
(328, 3853, 21, 2),
(329, 3854, 21, 2),
(330, 3855, 21, 2),
(331, 3856, 21, 2),
(332, 3857, 21, 2),
(333, 3858, 21, 2),
(334, 3859, 21, 2),
(335, 3860, 21, 2),
(336, 3861, 21, 2),
(337, 3862, 21, 2),
(338, 3863, 21, 2),
(339, 3864, 21, 2),
(340, 3865, 21, 2),
(341, 3866, 21, 2),
(342, 3867, 21, 2),
(343, 3868, 21, 2),
(344, 3869, 21, 2),
(345, 3870, 21, 2),
(346, 3871, 21, 2),
(347, 3872, 21, 2),
(348, 3873, 21, 2),
(349, 3874, 21, 2),
(350, 3875, 21, 2),
(351, 3876, 21, 2),
(352, 3877, 21, 2),
(353, 3878, 21, 2),
(354, 3879, 21, 2),
(355, 3880, 21, 2),
(356, 3881, 21, 2),
(357, 3882, 21, 2),
(358, 3883, 21, 2),
(359, 3884, 21, 2),
(360, 3885, 21, 2),
(361, 3886, 21, 2),
(362, 3887, 21, 2),
(363, 3888, 21, 2),
(364, 3889, 21, 2),
(365, 3890, 21, 2),
(366, 3891, 21, 2),
(367, 3892, 21, 2),
(368, 3893, 21, 2),
(369, 3894, 21, 2),
(370, 3895, 21, 2),
(371, 3896, 21, 2),
(372, 3897, 21, 2),
(373, 3898, 21, 2),
(374, 3899, 21, 2),
(375, 3900, 21, 2),
(376, 3901, 21, 2),
(377, 3902, 21, 2),
(378, 3903, 21, 2),
(379, 3904, 21, 2),
(380, 3905, 21, 2),
(381, 3906, 21, 2),
(382, 3907, 21, 2),
(383, 3908, 21, 2),
(384, 3909, 21, 2),
(385, 3910, 21, 2),
(386, 3911, 21, 2),
(387, 3912, 21, 2),
(388, 3913, 21, 2),
(389, 3914, 21, 2),
(390, 3915, 21, 2),
(391, 3916, 21, 2),
(392, 3917, 21, 2),
(393, 3918, 21, 2),
(394, 3919, 21, 2),
(395, 3920, 21, 2),
(396, 3921, 21, 2),
(397, 3922, 21, 2),
(398, 3923, 21, 2),
(399, 3924, 21, 2),
(400, 3925, 21, 2),
(401, 3926, 21, 2),
(402, 3927, 21, 2),
(403, 3928, 21, 2),
(404, 3929, 21, 2),
(405, 3930, 21, 2),
(406, 3931, 21, 2),
(407, 3932, 21, 2),
(408, 3933, 21, 2),
(409, 3934, 21, 2),
(410, 3935, 21, 2),
(411, 3936, 21, 2),
(412, 3937, 21, 2),
(413, 3938, 21, 2),
(414, 3939, 21, 2),
(415, 3940, 21, 2),
(416, 3941, 21, 2),
(417, 3942, 21, 2),
(418, 3943, 21, 2),
(419, 3944, 21, 2),
(420, 3945, 21, 2),
(421, 3946, 21, 2),
(422, 3947, 21, 2),
(423, 3948, 21, 2),
(424, 3949, 21, 2),
(425, 3950, 21, 2),
(426, 3951, 21, 2),
(427, 3952, 21, 2),
(428, 3953, 21, 2),
(429, 3954, 21, 2),
(430, 3955, 21, 2),
(431, 3956, 21, 2),
(432, 3957, 21, 2),
(433, 3958, 21, 2),
(434, 3959, 21, 2),
(435, 3960, 21, 2),
(436, 3961, 21, 2),
(437, 3962, 21, 2),
(438, 3963, 21, 2),
(439, 3964, 21, 2),
(440, 3965, 21, 2),
(441, 3966, 21, 2),
(442, 3967, 21, 2),
(443, 3968, 21, 2),
(444, 3969, 21, 2),
(445, 3970, 0, 2),
(446, 3971, 0, 2),
(447, 3972, 0, 2),
(448, 3973, 0, 2),
(449, 3974, 0, 2),
(450, 3975, 0, 2),
(451, 3976, 20, 2),
(452, 3978, 16, 2),
(453, 3979, 0, 2),
(454, 3980, 0, 2),
(455, 3981, 0, 2),
(456, 3982, 0, 2),
(457, 3983, 0, 2),
(458, 3984, 0, 2),
(459, 3986, 0, 2),
(460, 3987, 16, 2),
(461, 3988, 0, 2),
(462, 3989, 0, 2),
(463, 3990, 0, 2),
(464, 3991, 0, 2),
(465, 3992, 0, 2),
(466, 3993, 0, 2),
(467, 3994, 0, 2),
(468, 3995, 0, 2),
(469, 3996, 0, 2),
(470, 3998, 20, 2),
(471, 3999, 0, 2),
(472, 3999, 20, 2),
(473, 4000, 0, 2),
(474, 4000, 20, 2),
(475, 4003, 0, 2),
(476, 4003, 20, 2),
(477, 4004, 22, 1),
(478, 4005, 22, 1),
(479, 4006, 25, 1),
(480, 4007, 25, 1),
(481, 4008, 0, 2),
(482, 4008, 20, 2),
(483, 4009, 0, 2),
(484, 4009, 20, 2),
(485, 4010, 0, 2),
(486, 4010, 20, 2),
(487, 4011, 0, 2),
(488, 4011, 20, 2),
(489, 4012, 23, 1),
(490, 4013, 23, 1),
(491, 4014, 23, 1),
(492, 4015, 23, 1),
(493, 4016, 23, 1),
(494, 4017, 23, 1),
(495, 4018, 26, 1),
(496, 4018, 23, 1),
(497, 4019, 23, 1),
(498, 4020, 23, 1),
(499, 4021, 23, 1),
(500, 4022, 23, 1),
(501, 4023, 23, 1),
(502, 4024, 23, 1),
(503, 4025, 23, 1),
(504, 4026, 23, 1),
(505, 4027, 23, 1),
(506, 4028, 23, 1),
(507, 4029, 23, 1),
(508, 4030, 23, 1),
(509, 4031, 23, 1),
(510, 4032, 24, 1),
(511, 4033, 24, 1),
(512, 4034, 26, 1),
(513, 4035, 26, 1),
(514, 4036, 26, 1),
(515, 4037, 26, 1),
(516, 4038, 27, 1),
(517, 4038, 22, 1),
(518, 4039, 22, 1),
(519, 4040, 27, 1),
(520, 4040, 22, 1),
(521, 4041, 26, 1),
(522, 4042, 26, 1),
(523, 4043, 26, 1),
(524, 4044, 22, 1),
(525, 4045, 22, 1),
(526, 4046, 26, 1),
(527, 4047, 26, 1),
(528, 4048, 22, 1),
(529, 4049, 22, 1),
(530, 4050, 22, 1),
(531, 4051, 22, 1),
(532, 4052, 22, 1),
(533, 4053, 22, 1),
(534, 4054, 0, 2),
(535, 4054, 20, 2),
(536, 4055, 20, 2),
(537, 4056, 0, 2),
(538, 4056, 20, 2),
(539, 4057, 0, 2),
(540, 4057, 20, 2),
(541, 4058, 22, 1),
(542, 4059, 22, 1),
(543, 4060, 22, 1),
(544, 4061, 22, 1),
(545, 4062, 22, 1),
(546, 4063, 0, 1),
(547, 4064, 0, 1),
(548, 4065, 0, 1),
(549, 4066, 0, 1),
(550, 4067, 20, 2),
(551, 4068, 0, 1),
(552, 4069, 0, 2),
(553, 4069, 20, 2),
(554, 4070, 20, 2),
(555, 4071, 20, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_post_template`
--

CREATE TABLE `qh_post_template` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `template_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_type_id` int(11) NOT NULL,
  `template_type_id` int(11) NOT NULL,
  `post_website` int(11) NOT NULL,
  `keyselect` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_post_template`
--

INSERT INTO `qh_post_template` (`id`, `name`, `template_link`, `post_type_id`, `template_type_id`, `post_website`, `keyselect`) VALUES
(88, 'Giao diện chuyên mục sản phẩm Full Width', 'frontent/product/product_88.php', 2, 1, 1, 0),
(89, 'Giao diện chuyên mục sản phẩm Menu Left', 'frontent/product/product_89.php', 2, 1, 1, 1),
(90, 'Giao diện chuyên mục sản phẩm Menu Right', 'frontent/product/product_90.php', 2, 1, 1, 0),
(91, 'Giao diện chi tiết sản phẩm Full Width', 'frontent/product/product_91.php', 2, 2, 1, 1),
(92, 'Giao diện chi tiết sản phẩm Menu Left', 'frontent/product/product_92.php', 2, 2, 1, 0),
(93, 'Giao diện chi tiết sản phẩm Menu Right', 'frontent/product/product_93.php', 2, 2, 1, 0),
(94, 'Giao diện Tags sản phẩm Full Width', 'frontent/product/product_94.php', 2, 3, 1, 1),
(95, 'Giao diện chuyên mục tin tức Full Width', 'frontent/news/news_95.php', 1, 1, 1, 1),
(96, 'Giao diện chuyên mục tin tức Menu Right', 'frontent/news/news_96.php', 1, 1, 1, 0),
(97, 'Giao diện chuyên mục tin tức Menu Left', 'frontent/news/news_97.php', 1, 1, 1, 0),
(98, 'Giao diện bài viết tin tức Full Width', 'frontent/news/news_98.php', 1, 2, 1, 0),
(99, 'Giao diện bài viết tin tức Menu Left', 'frontent/news/news_99.php', 1, 2, 1, 1),
(100, 'Giao diện bài viết tin tức Menu Right', 'frontent/news/news_100.php', 1, 2, 1, 0),
(101, 'Giao diện Tags tin tức Full Width', 'frontent/news/news_101.php', 1, 3, 1, 1),
(102, 'Giao diện chuyên mục video Full Width', 'frontent/video/video_102.php', 3, 1, 1, 1),
(103, 'Giao diện chuyên mục video Menu Left', 'frontent/video/video_103.php', 3, 1, 1, 0),
(104, 'Giao diện chuyên mục video Menu Right', 'frontent/video/video_104.php', 3, 1, 1, 0),
(105, 'Giao diện bài viết video Full Width', 'frontent/video/video_105.php', 3, 2, 1, 1),
(106, 'Giao diện bài viết video Menu Left', 'frontent/video/video_106.php', 3, 2, 1, 0),
(107, 'Giao diện bài viết video Menu Right', 'frontent/video/video_107.php', 3, 2, 1, 0),
(108, 'Giao diện Tags video Full Width', 'frontent/video/video_108.php', 3, 3, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_post_template_type`
--

CREATE TABLE `qh_post_template_type` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_post_template_type`
--

INSERT INTO `qh_post_template_type` (`id`, `name`) VALUES
(1, 'Category'),
(2, 'Post'),
(3, 'Tags');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_post_type`
--

CREATE TABLE `qh_post_type` (
  `id` int(11) NOT NULL,
  `name_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_post_type`
--

INSERT INTO `qh_post_type` (`id`, `name_type`) VALUES
(1, 'Bài viết'),
(2, 'Sản phẩm'),
(3, 'Video');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_post_video`
--

CREATE TABLE `qh_post_video` (
  `id` int(11) NOT NULL,
  `codevideo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `id_posts` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_post_video`
--

INSERT INTO `qh_post_video` (`id`, `codevideo`, `content`, `id_posts`, `name`, `num`) VALUES
(855, '9yMRPB4H6BU', '', 15, 'Những điều cần biết', 1),
(856, 'Ye_Ap8FuSQk', '', 15, 'THVL | Dịch tả heo châu Phi nguy hiểm thế nào?', 2),
(857, 'i21qjjgB7Rc', '', 16, 'PHƯƠNG PHÁP CHĂM SÓC BÒ CÁI SINH SẢN VÀ BÊ LAI SAU KHI SINH', 1),
(858, 'd7-8snfb-2Y', '', 17, 'Thu nửa tỷ mỗi năm nhờ nuôi gà sao I VTC16', 1),
(859, 'YBOjNqoUbNE', '', 15, 'Nuôi lợn tiết kiệm nước, lãi cả trăm triệu | VTC16', 3),
(860, '62zE3NugAhQ', '', 15, 'Nuôi loại dúi giống 6kg/1con để 8 con/1 lứa. bí quyết của nhà nông. Nhànông.nét', 0),
(861, 'PUeFwlYuQ3w', '', 15, 'Chủ Trại Dúi Lâu Năm Chỉ Rõ Nguyên Nhân Nuôi Dúi Thất Bại Kinh Nghiệm Chăn Nuôi Cho Người Mới', 0),
(862, '62zE3NugAhQ', '', 15, 'Nuôi loại dúi giống 6kg/1con để 8 con/1 lứa. bí quyết của nhà nông. Nhànông.nét', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_setup`
--

CREATE TABLE `qh_setup` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extend` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `father` int(11) NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_setup`
--

INSERT INTO `qh_setup` (`id`, `group_name`, `extend`, `class`, `class2`, `father`, `info`) VALUES
(1, 'Hoạt động', '', '', '', 0, '{\"title\":\"Ti\\u00eau \\u0111\\u1ec1 Website 1\",\"logo\":\"public\\/frontent\\/image\\/catalog\\/logo2.png\",\"url\":\"https:\\/\\/timdiachi.vn\\/\",\"description\":\"M\\u00f4 t\\u1ea3 Website\",\"keywords\":\"T\\u1eeb kh\\u00f3a Website\",\"favicon\":\"public\\/frontent\\/image\\/catalog\\/logo2.png\",\"imgsocial\":\"public\\/frontent\\/image\\/catalog\\/logo2.png\",\"imggoogle\":\"public\\/frontent\\/image\\/catalog\\/logo2.png\"}'),
(2, '', 'Hoạt động', 'btn btn-soft-info btn-xs', 'btn btn-soft-info btn-xs', 1, '0'),
(3, '', 'Bản nháp', 'btn btn-soft-warning btn-xs', 'btn btn-soft-warning btn-xs', 1, '0'),
(4, '', 'Thùng rác', 'badge rounded-pill bg-warning', 'btn btn-soft-danger btn-xs', 1, '0'),
(5, 'Bảo trì xe', '', '', '', 0, '0'),
(8, 'Phân việc', '', '', '', 0, '0'),
(9, '', 'Nhân viên', '', '', 8, '0'),
(12, 'Duyệt đặt xe', '', '', '', 0, '0'),
(13, '', 'Đã duyệt', 'badge rounded-pill bg-success', 'background: green;padding:.75rem 1rem;color:#fff', 12, '0'),
(14, '', 'Đang chờ duyệt', 'badge rounded-pill bg-warning', 'background: yellow;padding:.75rem 1rem', 12, '0'),
(15, '', 'Không duyệt', 'badge rounded-pill bg-danger', 'background: red;padding:.75rem 1rem;color:#fff', 12, '0'),
(16, 'Loại thanh toán', '', '', '', 0, '0'),
(17, '', 'Xe công ty', '', '', 16, '0'),
(18, '', 'Thuê xe ngoài', '', '', 16, '0'),
(19, 'Yêu cầu xác nhận hoàn thành chuyến đi', '', '', '', 0, '0'),
(20, '', 'Chưa hoàn thành', '', '', 19, '0'),
(21, '', 'Yêu cầu xác nhận', '', '', 19, '0'),
(22, '', 'Đã hoàn thành', '', '', 19, '0'),
(23, 'Order', '', '', '', 0, '0'),
(24, '', 'Đơn hàng mới', 'badge rounded-pill bg-warning', '', 23, '0'),
(25, '', 'Đã xem', 'badge rounded-pill bg-warning', '', 23, '0'),
(26, '', 'Đã hoành thành', 'badge rounded-pill bg-success', '', 23, '0'),
(27, '', 'Hủy đơn hàng', 'badge rounded-pill bg-danger', '', 23, '0'),
(28, 'Tính chất Menu', '', '', '', 0, '0'),
(29, '', 'Chuyên mục', '', '', 28, '0'),
(30, '', 'Bài viết', '', '', 28, '0'),
(31, '', 'Liên kết ngoài', '', '', 28, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_setup_editfile`
--

CREATE TABLE `qh_setup_editfile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_setup_editfile`
--

INSERT INTO `qh_setup_editfile` (`id`, `name`, `link_file`) VALUES
(1, 'Header', 'application/views/frontent/layout/v_m_header.php'),
(2, 'Body', 'application/views/frontent/layout/v_m_body.php'),
(3, 'Footer', 'application/views/frontent/layout/v_m_footer.php'),
(4, 'CSS', 'http://localhost/crmadmin/public/frontent/assets/css/style.css'),
(5, 'Trang chủ', 'application/views/frontent/layout/v_home.php');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_setup_extend`
--

CREATE TABLE `qh_setup_extend` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` text COLLATE utf8_unicode_ci NOT NULL,
  `lang_menu` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_setup_extend`
--

INSERT INTO `qh_setup_extend` (`id`, `name`, `lang`, `lang_menu`) VALUES
(22, 'Sản phẩm', '{\"vn\":\"S\\u1ea3n ph\\u1ea9m\",\"en\":\"S\\u1ea3n ph\\u1ea9m\",\"jp\":null,\"kr\":null,\"ch\":null,\"lg\":null}', 1),
(23, 'Menu Header', '{\"vn\":\"Menu Header\",\"en\":\"Menu Header\",\"jp\":null,\"kr\":null,\"ch\":null,\"lg\":null}', 1),
(24, 'Liên hệ', '{\"vn\":\"Li\\u00ean h\\u1ec7\",\"en\":\"Contact\",\"jp\":null,\"kr\":null,\"ch\":null,\"lg\":null}', 1),
(25, 'THỨC ĂN CHĂN NUÔI, CON GIỐNG CHẤT LƯỢNG CAO', '{\"vn\":\"TH\\u1ee8C \\u0102N CH\\u0102N NU\\u00d4I, CON GI\\u1ed0NG CH\\u1ea4T L\\u01af\\u1ee2NG CAO\\r\\n\",\"en\":\"TH\\u1ee8C \\u0102N CH\\u0102N NU\\u00d4I, CON GI\\u1ed0NG CH\\u1ea4T L\\u01af\\u1ee2NG CAO\",\"jp\":null,\"kr\":null,\"ch\":null,\"lg\":null}', 1),
(26, 'Sản phẩm - Trang chủ', '{\"vn\":\"<h2 style=\\\"text-align:center\\\"><span style=\\\"color:#0066a6\\\"><strong>S\\u1ea2N PH\\u1ea8M&nbsp;<\\/strong><\\/span><\\/h2>\\r\\n\\r\\n<h6 style=\\\"text-align:center\\\"><strong>TH\\u1ee8C \\u0102N CH\\u0102N NU&Ocirc;I, CON GI\\u1ed0NG CH\\u1ea4T L\\u01af\\u1ee2NG CAO<\\/strong><\\/h6>\\r\\n\",\"en\":\"<h2 style=\\\"text-align:center\\\"><strong>PRODUCT&nbsp;<\\/strong><\\/h2>\\r\\n\\r\\n<h6 style=\\\"text-align:center\\\"><strong>TH\\u1ee8C \\u0102N CH\\u0102N NU&Ocirc;I, CON GI\\u1ed0NG CH\\u1ea4T L\\u01af\\u1ee2NG CAO<\\/strong><\\/h6>\\r\\n\",\"jp\":null,\"kr\":null,\"ch\":null,\"lg\":null}', 0),
(28, 'Tin tức - Trang chủ', '{\"vn\":\"<p>New<\\/p>\\r\\n\",\"en\":\"<p>New<\\/p>\\r\\n\",\"jp\":null,\"kr\":null,\"ch\":null,\"lg\":null}', 0),
(29, 'Chính sách bảo mật', '{\"vn\":\"Ch\\u00ednh s\\u00e1ch b\\u1ea3o m\\u1eadt\",\"en\":\"Ch\\u00ednh s\\u00e1ch b\\u1ea3o m\\u1eadt\",\"jp\":null,\"kr\":null,\"ch\":null,\"lg\":null}', 1),
(30, 'Kiến thức chăn nuôi', '{\"vn\":\"Ki\\u1ebfn th\\u1ee9c ch\\u0103n nu\\u00f4i\",\"en\":\"Ki\\u1ebfn th\\u1ee9c ch\\u0103n nu\\u00f4i\",\"jp\":null,\"kr\":null,\"ch\":null,\"lg\":null}', 1),
(31, 'Tin tức - Sự kiện', '{\"vn\":\"Tin t\\u1ee9c - S\\u1ef1 ki\\u1ec7n\",\"en\":\"Tin t\\u1ee9c - S\\u1ef1 ki\\u1ec7n\",\"jp\":null,\"kr\":null,\"ch\":null,\"lg\":null}', 1),
(32, 'Footer', '{\"vn\":\"<p><strong>&copy; 2017 B\\u1ea3n quy\\u1ec1n thu\\u1ed9c v\\u1ec1 Anova Feed - C&Ocirc;NG TY C\\u1ed4 PH\\u1ea6N ANOVA FEED<\\/strong><\\/p>\\r\\n\\r\\n<p>\\ud83c\\udfe0 \\u0110\\u1ecba ch\\u1ec9: Nh&agrave; m&aacute;y Long An: C\\u1ee5m C&ocirc;ng Nghi\\u1ec7p T\\u1eadp \\u0110o&agrave;n Anova, \\u1ea4p 4, Long Cang, C\\u1ea7n \\u0110\\u01b0\\u1edbc, Long An<\\/p>\\r\\n\\r\\n<p>\\u260f Hotline:&nbsp;(0272) 3 726 545 \\/ Fax: (0272) 3 726 541<\\/p>\\r\\n\",\"en\":\"<p><strong>&copy; 2017 B\\u1ea3n quy\\u1ec1n thu\\u1ed9c v\\u1ec1 Anova Feed - C&Ocirc;NG TY C\\u1ed4 PH\\u1ea6N ANOVA FEED<\\/strong><\\/p>\\r\\n\\r\\n<p>\\u0110\\u1ecba ch\\u1ec9: Nh&agrave; m&aacute;y Long An: C\\u1ee5m C&ocirc;ng Nghi\\u1ec7p T\\u1eadp \\u0110o&agrave;n Anova, \\u1ea4p 4, Long Cang, C\\u1ea7n \\u0110\\u01b0\\u1edbc, Long An<\\/p>\\r\\n\\r\\n<p>Hotline:&nbsp;(0272) 3 726 545 \\/ Fax: (0272) 3 726 541<\\/p>\\r\\n\",\"jp\":null,\"kr\":null,\"ch\":null,\"lg\":null}', 0),
(33, 'TIN TỨC - THÔNG TIN THỊ TRƯỜNG', '{\"vn\":\"TIN T\\u1ee8C - TH\\u00d4NG TIN TH\\u1eca TR\\u01af\\u1edcNG\",\"en\":\"TIN T\\u1ee8C - TH\\u00d4NG TIN TH\\u1eca TR\\u01af\\u1edcNG\",\"jp\":null,\"kr\":null,\"ch\":null,\"lg\":null}', 1),
(34, 'Thông tin thị trường', '{\"vn\":\"<p><img alt=\\\"\\\" src=\\\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/media\\/tin-thi-truong\\/icon-gia-thi-truong-01.jpg\\\" style=\\\"width:100%\\\" \\/><\\/p>\\r\\n\\r\\n<h2><strong>Tin th\\u1ecb tr\\u01b0\\u1eddng<\\/strong><\\/h2>\\r\\n\\r\\n<h5>C\\u1eadp nh\\u1eadt ng&agrave;y 15\\/02\\/2023<\\/h5>\\r\\n\",\"en\":\"<p><img alt=\\\"\\\" src=\\\"https:\\/\\/www.anovafeed.vn\\/Data\\/Sites\\/1\\/media\\/tin-thi-truong\\/icon-gia-thi-truong-01.jpg\\\" style=\\\"width:100%\\\" \\/><\\/p>\\r\\n\\r\\n<h2><strong>Tin th\\u1ecb tr\\u01b0\\u1eddng<\\/strong><\\/h2>\\r\\n\\r\\n<h5>C\\u1eadp nh\\u1eadt ng&agrave;y 15\\/02\\/2023<\\/h5>\\r\\n\",\"jp\":null,\"kr\":null,\"ch\":null,\"lg\":null}', 0),
(35, 'Giá thực phẩm cập nhật', '{\"vn\":\"<p><strong>GI&Aacute; HEO H\\u01a0I<\\/strong><br \\/>\\r\\n<strong>Mi\\u1ec1n B\\u1eafc:<\\/strong>&nbsp;<em>58.000 \\u0111\\/kg<\\/em>&nbsp;<span style=\\\"color:#2ecc71\\\">\\u2b06<\\/span><br \\/>\\r\\n<strong>Mi\\u1ec1n Trung:&nbsp;<\\/strong><em>58.300 \\u0111\\/kg&nbsp;<\\/em><span style=\\\"color:#e74c3c\\\">\\u2b07<\\/span><br \\/>\\r\\n<em><strong>Mi\\u1ec1n \\u0110&ocirc;ng:&nbsp;<\\/strong><em>59.100 \\u0111\\/kg&nbsp;<\\/em><\\/em><span style=\\\"color:#2ecc71\\\">\\u2b06<\\/span><br \\/>\\r\\n<em><em><strong>Mi\\u1ec1n T&acirc;y:&nbsp;<\\/strong><em>57.800 \\u0111\\/kg&nbsp;<\\/em><\\/em><\\/em><span style=\\\"color:#2ecc71\\\">\\u2b06<\\/span><br \\/>\\r\\n<em><em><em><strong>Heo CP:&nbsp;<\\/strong><em>61.400 \\u0111\\/kg&nbsp;<\\/em><\\/em><\\/em><\\/em><span style=\\\"color:#2ecc71\\\">\\u2b06<\\/span><br \\/>\\r\\n<em><em><em><em><strong>Heo Trung Qu\\u1ed1c:&nbsp;<\\/strong><em>45.800 \\u0111\\/kg&nbsp;<\\/em><\\/em><\\/em><\\/em><\\/em><span style=\\\"color:#2ecc71\\\">\\u2b06<\\/span><br \\/>\\r\\n<em><em><em><em><em>-----------------------------------<\\/em><\\/em><\\/em><\\/em><\\/em><\\/p>\\r\\n\\r\\n<p><em><em><em><em><em><strong>GI&Aacute; G&Agrave;<\\/strong><br \\/>\\r\\n<strong>G&agrave; Minh D\\u01b0:<\\/strong>&nbsp;<em>57.400 \\u0111\\/kg<\\/em>&nbsp;<\\/em><\\/em><\\/em><\\/em><\\/em><span style=\\\"color:#2ecc71\\\">\\u2b06<\\/span><br \\/>\\r\\n<em><em><em><em><em><strong>G&agrave; M&iacute;a Mi\\u1ec1n B\\u1eafc:<\\/strong>&nbsp;<em>71.800 \\u0111\\/kg&nbsp;<\\/em><\\/em><\\/em><\\/em><\\/em><\\/em><span style=\\\"color:#2ecc71\\\">\\u2b06<\\/span><br \\/>\\r\\n<em><em><em><em><em><strong>G&agrave; N&ograve;i B\\u1ebfn Tre:<\\/strong>&nbsp;<em>69.100 \\u0111\\/kg<\\/em>&nbsp;<\\/em><\\/em><\\/em><\\/em><\\/em><span style=\\\"color:#2ecc71\\\">\\u2b06<\\/span><br \\/>\\r\\n<em><em><em><em><em>-----------------------------------<\\/em><\\/em><\\/em><\\/em><\\/em><\\/p>\\r\\n\\r\\n<p><em><em><em><em><em><strong>GI&Aacute; V\\u1ecaT<\\/strong><br \\/>\\r\\n<strong>V\\u1ecbt Mi\\u1ec1n B\\u1eafc :<\\/strong>&nbsp;<em>30.100 \\u0111\\/kg<\\/em>&nbsp;<\\/em><\\/em><\\/em><\\/em><\\/em><span style=\\\"color:#2ecc71\\\">\\u2b06<\\/span><br \\/>\\r\\n<em><em><em><em><em><strong>V\\u1ecbt Mi\\u1ec1n Trung :<\\/strong>&nbsp;<em>33.800 \\u0111\\/kg<\\/em>&nbsp;<\\/em><\\/em><\\/em><\\/em><\\/em><span style=\\\"color:#2ecc71\\\">\\u2b06<\\/span><br \\/>\\r\\n<em><em><em><em><em><strong>V\\u1ecbt Mi\\u1ec1n \\u0110&ocirc;ng :<\\/strong>&nbsp;<em>31.500 \\u0111\\/kg<\\/em>&nbsp;<\\/em><\\/em><\\/em><\\/em><\\/em><span style=\\\"color:#2ecc71\\\">\\u2b06<\\/span><br \\/>\\r\\n<em><em><em><em><em><strong>V\\u1ecbt Mi\\u1ec1n T&acirc;y :<\\/strong>&nbsp;<em>32.900 \\u0111\\/kg<\\/em>&nbsp;<\\/em><\\/em><\\/em><\\/em><\\/em><span style=\\\"color:#2ecc71\\\">\\u2b06<\\/span><br \\/>\\r\\n<em><em><em><em><em>-----------------------------------<\\/em><\\/em><\\/em><\\/em><\\/em><\\/p>\\r\\n\\r\\n<p><em><em><em><em><em><strong>GI&Aacute; TR\\u1ee8NG<\\/strong><br \\/>\\r\\n<strong>Tr\\u1ee9ng G&agrave; :<\\/strong>&nbsp;<em>2.000 \\u0111\\/tr\\u1ee9ng&nbsp;<\\/em><\\/em><\\/em><\\/em><\\/em><\\/em><span style=\\\"color:#2ecc71\\\">\\u2b06<\\/span><br \\/>\\r\\n<em><em><em><em><em><em><strong>Tr\\u1ee9ng V\\u1ecbt :<\\/strong>&nbsp;<em>2.500 \\u0111\\/tr\\u1ee9ng&nbsp;<\\/em><\\/em><\\/em><\\/em><\\/em><\\/em><\\/em><span style=\\\"color:#2ecc71\\\">\\u2b06<\\/span><\\/p>\\r\\n\",\"en\":\"<p><strong>GI&Aacute; HEO H\\u01a0I<\\/strong><br \\/>\\r\\n<strong>Mi\\u1ec1n B\\u1eafc:<\\/strong>&nbsp;<em>58.000 \\u0111\\/kg<\\/em>&nbsp;<br \\/>\\r\\n<strong>Mi\\u1ec1n Trung:&nbsp;<\\/strong><em>58.300 \\u0111\\/kg&nbsp;<br \\/>\\r\\n<strong>Mi\\u1ec1n \\u0110&ocirc;ng:&nbsp;<\\/strong><em>59.100 \\u0111\\/kg&nbsp;<br \\/>\\r\\n<strong>Mi\\u1ec1n T&acirc;y:&nbsp;<\\/strong><em>57.800 \\u0111\\/kg&nbsp;<br \\/>\\r\\n<strong>Heo CP:&nbsp;<\\/strong><em>61.400 \\u0111\\/kg&nbsp;<br \\/>\\r\\n<strong>Heo Trung Qu\\u1ed1c:&nbsp;<\\/strong><em>45.800 \\u0111\\/kg&nbsp;<br \\/>\\r\\n-----------------------------------<\\/em><\\/em><\\/em><\\/em><\\/em><\\/p>\\r\\n\\r\\n<p><em><em><em><em><em><strong>GI&Aacute; G&Agrave;<\\/strong><br \\/>\\r\\n<strong>G&agrave; Minh D\\u01b0:<\\/strong>&nbsp;<em>57.400 \\u0111\\/kg<\\/em>&nbsp;<br \\/>\\r\\n<strong>G&agrave; M&iacute;a Mi\\u1ec1n B\\u1eafc:<\\/strong>&nbsp;<em>71.800 \\u0111\\/kg<\\/em><br \\/>\\r\\n<strong>G&agrave; N&ograve;i B\\u1ebfn Tre:<\\/strong>&nbsp;<em>69.100 \\u0111\\/kg<\\/em>&nbsp;<br \\/>\\r\\n-----------------------------------<\\/em><\\/em><\\/em><\\/em><\\/em><\\/p>\\r\\n\\r\\n<p><em><em><em><em><em><strong>GI&Aacute; V\\u1ecaT<\\/strong><br \\/>\\r\\n<strong>V\\u1ecbt Mi\\u1ec1n B\\u1eafc :<\\/strong>&nbsp;<em>30.100 \\u0111\\/kg<\\/em>&nbsp;<br \\/>\\r\\n<strong>V\\u1ecbt Mi\\u1ec1n Trung :<\\/strong>&nbsp;<em>33.800 \\u0111\\/kg<\\/em>&nbsp;<br \\/>\\r\\n<strong>V\\u1ecbt Mi\\u1ec1n \\u0110&ocirc;ng :<\\/strong>&nbsp;<em>31.500 \\u0111\\/kg<\\/em>&nbsp;<br \\/>\\r\\n<strong>V\\u1ecbt Mi\\u1ec1n T&acirc;y :<\\/strong>&nbsp;<em>32.900 \\u0111\\/kg<\\/em>&nbsp;<br \\/>\\r\\n-----------------------------------<\\/em><\\/em><\\/em><\\/em><\\/em><\\/p>\\r\\n\\r\\n<p><em><em><em><em><em><strong>GI&Aacute; TR\\u1ee8NG<\\/strong><br \\/>\\r\\n<strong>Tr\\u1ee9ng G&agrave; :<\\/strong>&nbsp;<em>2.000 \\u0111\\/tr\\u1ee9ng<\\/em><br \\/>\\r\\n<em><strong>Tr\\u1ee9ng V\\u1ecbt :<\\/strong>&nbsp;<em>2.500 \\u0111\\/tr\\u1ee9ng&nbsp;<\\/em><\\/em><\\/em><\\/em><\\/em><\\/em><\\/em><\\/p>\\r\\n\",\"jp\":null,\"kr\":null,\"ch\":null,\"lg\":null}', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_setup_footer`
--

CREATE TABLE `qh_setup_footer` (
  `id` int(11) NOT NULL,
  `icon-text` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_setup_group`
--

CREATE TABLE `qh_setup_group` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extend` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `father` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_setup_group`
--

INSERT INTO `qh_setup_group` (`id`, `group_name`, `extend`, `class`, `class2`, `father`) VALUES
(1, 'Hoạt động', '', '', '', 0),
(2, '', 'Hoạt động', 'badge rounded-pill bg-success', '', 1),
(3, '', 'Tạm dừng', 'badge rounded-pill bg-danger', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_setup_language`
--

CREATE TABLE `qh_setup_language` (
  `id` int(11) NOT NULL,
  `link_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_des` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `public` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_setup_language`
--

INSERT INTO `qh_setup_language` (`id`, `link_img`, `name_des`, `name`, `public`) VALUES
(1, '', 'vn', 'Tiếng việt', 1),
(2, 'https://glocalpartner.vn/public/img/flag-en.png', 'en', 'Tiếng anh', 1),
(3, '', 'jp', 'Tiếng nhật', 0),
(4, '', 'kr', 'Tiếng hàn', 0),
(5, '', 'ch', 'Tiếng trung', 0),
(6, '', 'lg', 'Ngôn ngữ khác', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_setup_lang_website`
--

CREATE TABLE `qh_setup_lang_website` (
  `id` int(11) NOT NULL,
  `lang` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_setup_lang_website`
--

INSERT INTO `qh_setup_lang_website` (`id`, `lang`) VALUES
(3, '{\"vn\":\"S\\u1ea3n ph\\u1ea9m\",\"en\":\"Product\",\"jp\":null,\"kr\":null,\"ch\":null,\"lg\":null}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_setup_menu`
--

CREATE TABLE `qh_setup_menu` (
  `id` int(11) NOT NULL,
  `menu_group` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `father_id` int(11) NOT NULL,
  `post_website` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `post_status` int(11) NOT NULL DEFAULT 2,
  `id_category` int(11) NOT NULL,
  `id_posts` int(11) NOT NULL,
  `link_out` text COLLATE utf8_unicode_ci NOT NULL,
  `id_name_out` int(11) NOT NULL,
  `id_menu_group` int(11) NOT NULL,
  `id_text` int(11) NOT NULL,
  `posts_style` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_setup_menu`
--

INSERT INTO `qh_setup_menu` (`id`, `menu_group`, `father_id`, `post_website`, `num`, `post_status`, `id_category`, `id_posts`, `link_out`, `id_name_out`, `id_menu_group`, `id_text`, `posts_style`) VALUES
(38, 'Menu trang dịch vụ', 0, 1, 0, 2, 0, 0, '', 0, 0, 0, 0),
(39, 'Footer - Chính sách khách hàng', 0, 1, 0, 2, 0, 0, '', 0, 0, 0, 0),
(45, 'Menu header Website', 0, 1, 0, 2, 0, 0, '', 0, 0, 23, 0),
(72, '', 0, 1, 1, 2, 0, 64, '', 0, 45, 0, 30),
(73, '', 0, 1, 2, 2, 79, 0, '', 0, 45, 0, 29),
(75, '', 73, 1, 1, 2, 80, 0, '', 0, 45, 0, 29),
(76, '', 75, 1, 1, 2, 82, 0, '', 0, 45, 0, 29),
(77, '', 76, 1, 1, 2, 83, 0, '', 0, 45, 0, 29),
(78, '', 77, 1, 1, 2, 86, 0, '', 0, 45, 0, 29),
(79, '', 77, 1, 2, 2, 87, 0, '', 0, 45, 0, 29),
(80, '', 76, 1, 2, 2, 84, 0, '', 0, 45, 0, 29),
(81, '', 76, 1, 3, 2, 85, 0, '', 0, 45, 0, 29),
(82, '', 76, 1, 4, 2, 81, 0, '', 0, 45, 0, 29),
(83, '', 0, 1, 3, 2, 88, 0, '', 0, 45, 0, 29),
(84, '', 83, 1, 1, 2, 91, 0, '', 0, 45, 0, 29),
(85, '', 83, 1, 2, 2, 92, 0, '', 0, 45, 0, 29),
(86, '', 83, 1, 3, 2, 94, 0, '', 0, 45, 0, 29),
(87, '', 0, 1, 4, 2, 95, 0, '', 0, 45, 0, 29),
(88, '', 87, 1, 1, 2, 96, 0, '', 0, 45, 0, 29),
(89, '', 87, 1, 2, 2, 97, 0, '', 0, 45, 0, 29),
(90, '', 0, 1, 6, 2, 0, 0, '', 24, 45, 0, 31),
(91, '', 73, 1, 2, 2, 81, 0, '', 0, 45, 0, 29),
(92, '', 0, 1, 5, 2, 99, 0, '', 0, 45, 0, 29),
(93, '', 92, 1, 1, 2, 100, 0, '', 0, 45, 0, 29),
(94, '', 92, 1, 2, 2, 101, 0, '', 0, 45, 0, 29),
(96, 'Chính sách bảo mật', 0, 1, 0, 2, 0, 0, '', 0, 0, 29, 0),
(97, '', 0, 1, 1, 2, 0, 83, '', 0, 96, 0, 30),
(98, 'Kiến thức chăn nuôi', 0, 1, 0, 2, 0, 0, '', 0, 0, 30, 0),
(99, '', 0, 1, 1, 2, 91, 0, '', 0, 98, 0, 29),
(100, '', 0, 1, 2, 2, 92, 0, '', 0, 98, 0, 29),
(101, 'Tin tức - Sự kiện', 0, 1, 0, 2, 0, 0, '', 0, 0, 31, 0),
(102, '', 0, 1, 1, 2, 96, 0, '', 0, 101, 0, 29),
(103, '', 0, 1, 2, 2, 97, 0, '', 0, 101, 0, 29),
(104, '', 0, 1, 3, 2, 98, 0, '', 0, 101, 0, 29);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_setup_social`
--

CREATE TABLE `qh_setup_social` (
  `id` int(11) NOT NULL,
  `name_social` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link_socical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class_social` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num_social` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_setup_social`
--

INSERT INTO `qh_setup_social` (`id`, `name_social`, `link_socical`, `class_social`, `num_social`) VALUES
(4, 'Facebook', 'https://facebook.com', 'fab fa-facebook-f', 1),
(5, 'Twiter', '', 'fab fa-twitter', 2),
(6, 'Linkedin', '', 'fab fa-linkedin-in', 3),
(7, 'Google', '', 'fab fa-google-plus-g', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_system_frontent`
--

CREATE TABLE `qh_system_frontent` (
  `id` int(11) NOT NULL,
  `page_group` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `link_symtem` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `page_group_extend` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `father_id` int(11) NOT NULL,
  `key_frontent` int(1) NOT NULL,
  `public` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_system_frontent`
--

INSERT INTO `qh_system_frontent` (`id`, `page_group`, `link_symtem`, `page_group_extend`, `father_id`, `key_frontent`, `public`) VALUES
(14, 'Trang chủ', 'backend/symtem/frontent/home', '', 0, 0, 1),
(15, 'Footer', 'backend/symtem/frontent/footer', '', 0, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_system_frontent_extend`
--

CREATE TABLE `qh_system_frontent_extend` (
  `id` int(11) NOT NULL,
  `id_plugin` int(11) NOT NULL,
  `id_text` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `num_colum` int(1) NOT NULL,
  `num` int(11) NOT NULL,
  `father_symtem` int(11) NOT NULL,
  `id_public` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_system_frontent_extend`
--

INSERT INTO `qh_system_frontent_extend` (`id`, `id_plugin`, `id_text`, `id_menu`, `num_colum`, `num`, `father_symtem`, `id_public`) VALUES
(48, 1, 0, 0, 0, 1, 14, 1),
(50, 11, 0, 0, 0, 2, 14, 1),
(51, 13, 0, 0, 0, 5, 14, 1),
(52, 26, 0, 0, 0, 4, 14, 1),
(53, 0, 0, 96, 2, 1, 15, 3),
(54, 0, 0, 98, 3, 1, 15, 3),
(55, 0, 0, 101, 4, 1, 15, 3),
(56, 0, 32, 0, 5, 1, 15, 2),
(57, 27, 0, 0, 0, 3, 14, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_system_template`
--

CREATE TABLE `qh_system_template` (
  `id` int(11) NOT NULL,
  `link_hienthi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link_cauhinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hienthi` int(1) NOT NULL,
  `left` int(11) NOT NULL,
  `right` int(11) NOT NULL,
  `num_post` int(3) NOT NULL,
  `num_show` int(3) NOT NULL,
  `num_asc` int(3) NOT NULL,
  `id_text` int(11) NOT NULL,
  `id_text1` int(11) NOT NULL,
  `id_text2` int(11) NOT NULL,
  `id_text3` int(11) NOT NULL,
  `link_img` text COLLATE utf8_unicode_ci NOT NULL,
  `text_extend` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `color_background` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `color_text` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `public` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_system_template`
--

INSERT INTO `qh_system_template` (`id`, `link_hienthi`, `link_cauhinh`, `name`, `hienthi`, `left`, `right`, `num_post`, `num_show`, `num_asc`, `id_text`, `id_text1`, `id_text2`, `id_text3`, `link_img`, `text_extend`, `id_menu`, `color_background`, `color_text`, `public`) VALUES
(1, 'frontent/extendtion/v_banner', 'backend/setup/banner/listimg/2', 'Banner Full width', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', 0),
(9, 'frontent/extendtion/v_service', 'backend/symtem/service', 'Hiển thị chuyên mục dịch vụ', 1, 6, 6, 4, 6, 0, 12, 0, 0, 0, '', 0, 0, '', '', 0),
(10, 'frontent/symtem/v_product.php', 'backend/symtem/servicepost', 'Hiển thị bài viết dịch vụ', 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, '', 0, 0, '', '', 0),
(11, 'frontent/extendtion/v_product', 'backend/symtem/product', 'Hiển thị chuyên mục sản phẩm', 1, 0, 0, 4, 4, 0, 26, 0, 0, 0, 'https://themebun.com/demo/ducvu/public/frontent/img/worldbg.png', 0, 0, '', '', 0),
(12, 'frontent/symtem/v_product.php', 'backend/symtem/productpost', 'Hiển thị bài viết sản phẩm', 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, '', 0, 0, '', '', 0),
(13, 'frontent/extendtion/v_news_post', 'backend/symtem/news', 'Hiển thị chuyên mục tin tức', 1, 0, 0, 3, 4, 0, 28, 0, 0, 0, '', 0, 0, '', '', 0),
(14, 'frontent/symtem/v_product.php', 'backend/symtem/newspost', 'Hiển thị bài viết tin tức', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', 0),
(15, 'frontent/symtem/v_product.php', 'backend/symtem/servicelist', 'Danh sách dịch vụ', 1, 0, 0, 16, 5, 8, 0, 0, 0, 0, '', 0, 0, '', '', 0),
(16, 'frontent/symtem/v_product.php', 'backend/symtem/productlist', 'Danh sách sản phẩm', 1, 0, 0, 15, 3, 9, 0, 0, 0, 0, '', 0, 0, '', '', 0),
(17, 'frontent/symtem/v_product.php', 'backend/symtem/newslist', 'Danh sách tin tức', 1, 0, 0, 16, 5, 8, 0, 0, 0, 0, '', 0, 0, '', '', 0),
(18, 'frontent/extendtion/v_aboutus', 'backend/symtem/aboutus', 'Giới thiệu ngắn', 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', 0),
(19, 'frontent/extendtion/v_whyus', 'backend/symtem/whyus', 'Vì sao chọn chúng tôi', 0, 6, 6, 0, 0, 0, 4, 0, 0, 0, 'http://tdpvina.vn/public/frontent/assets/img/home_2/feature_bg.jpg', 0, 0, '', '', 0),
(20, 'frontent/extendtion/v_googlemap', 'backend/symtem/googlemap', 'Liên hệ chúng tôi', 0, 0, 0, 0, 0, 0, 13, 0, 0, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251637.9953591861!2d105.61821745354679!3d9.779291671319038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a051e4e42fdefb%3A0x971cab0016190a03!2zQ2hpIEPhu6VjIEjhuqNpIFF1YW4gU8OzYyBUcsSDbmc!5e0!3m2!1svi!2s!4v1680858397479!5m2!1svi!2s\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>\r\n', 0, 0, '', '', 0),
(21, 'frontent/extendtion/v_khauhieu', 'backend/symtem/khauhieu', 'Khẩu hiệu', 0, 0, 0, 0, 0, 0, 14, 0, 0, 0, 'http://tdpvina.vn/public/frontent/img/logistics.jpg', 19, 0, '', '', 0),
(22, 'frontent/symtem/v_product', 'backend/symtem/footer', 'Footer', 0, 0, 0, 0, 0, 0, 15, 0, 0, 0, '', 0, 0, '#d30000', '#000000', 0),
(23, 'frontent/symtem/v_product', 'backend/symtem/headertop', 'Header Top', 0, 0, 0, 0, 0, 0, 16, 0, 0, 0, '', 0, 0, '#b11e20', '#ffffff', 0),
(24, 'frontent/symtem/v_product', 'backend/symtem/header', 'Header', 0, 0, 0, 0, 0, 0, 16, 0, 0, 0, '', 0, 45, '#d30000', '#fafafa', 0),
(25, 'frontent/extendtion/v_contact', 'backend/symtem/contact', 'Contact', 0, 0, 0, 0, 0, 0, 20, 0, 0, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251637.9953591861!2d105.61821745354679!3d9.779291671319038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a051e4e42fdefb%3A0x971cab0016190a03!2zQ2hpIEPhu6VjIEjhuqNpIFF1YW4gU8OzYyBUcsSDbmc!5e0!3m2!1svi!2s!4v1680858397479!5m2!1svi!2s\" width=\"100%\" height=\"650\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>\r\n', 0, 0, '', '', 0),
(26, 'frontent/extendtion/v_video_post', 'backend/symtem/video', 'Hiển thị chuyên mục Video', 1, 0, 0, 3, 4, 0, 28, 0, 0, 0, '', 0, 0, '', '', 0),
(27, 'frontent/extendtion/v_news', 'backend/symtem/thitruong', 'Hiển thị chuyên mục thị trường', 1, 0, 0, 3, 4, 0, 33, 34, 35, 0, 'https://themebun.com/demo/ducvu/public/frontent/img/bg.jpg', 0, 0, '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_system_template_extend`
--

CREATE TABLE `qh_system_template_extend` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_text` int(11) NOT NULL,
  `id_text1` int(11) NOT NULL,
  `icon_css` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_symtem_template` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `left_int` int(1) NOT NULL,
  `right_int` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_system_template_extend`
--

INSERT INTO `qh_system_template_extend` (`id`, `id_category`, `id_text`, `id_text1`, `icon_css`, `link_img`, `id_symtem_template`, `num`, `left_int`, `right_int`) VALUES
(21, 0, 2, 0, '', '', 18, 1, 1, 0),
(22, 0, 3, 0, '', '', 18, 2, 1, 0),
(24, 0, 0, 0, '', 'http://tdpvina.vn/public/frontent/img/logistics.jpg', 18, 1, 0, 1),
(27, 0, 6, 7, 'flaticon-customer-service', '', 19, 1, 0, 0),
(28, 0, 8, 9, 'flaticon-email', '', 19, 2, 0, 0),
(29, 0, 10, 11, 'flaticon-worldwide', '', 19, 3, 0, 0),
(30, 23, 0, 0, '', '', 9, 1, 0, 0),
(31, 26, 0, 0, '', '', 9, 2, 0, 0),
(34, 86, 0, 0, '', '', 11, 1, 0, 0),
(35, 84, 0, 0, '', '', 11, 2, 0, 0),
(36, 85, 0, 0, '', '', 11, 3, 0, 0),
(37, 81, 0, 0, '', '', 11, 4, 0, 0),
(40, 96, 0, 0, '', '', 13, 1, 0, 0),
(41, 91, 0, 0, '', '', 26, 1, 0, 0),
(42, 102, 0, 0, '', '', 26, 2, 0, 0),
(43, 103, 0, 0, '', '', 26, 3, 0, 0),
(44, 104, 0, 0, '', '', 26, 4, 0, 0),
(45, 92, 0, 0, '', '', 27, 1, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_system_template_setup`
--

CREATE TABLE `qh_system_template_setup` (
  `id` int(11) NOT NULL,
  `symtem_group` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `symtem_extend` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `symtem_extend_num` int(11) NOT NULL,
  `id_father_symtem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_system_template_setup`
--

INSERT INTO `qh_system_template_setup` (`id`, `symtem_group`, `symtem_extend`, `symtem_extend_num`, `id_father_symtem`) VALUES
(1, 'Số lượng hiển trị trên trang', '', 0, 0),
(2, '', '1', 12, 1),
(3, '', '2', 6, 1),
(4, '', '3', 4, 1),
(5, '', '4', 3, 1),
(6, '', '6', 2, 1),
(7, 'Hiển thị sắp xếp', '', 0, 0),
(8, '', 'Từ mới tới cũ', 12, 7),
(9, '', 'Từ cũ tới mới', 12, 7),
(10, '', '12', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_user`
--

CREATE TABLE `qh_user` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `manhansu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bophan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8_unicode_ci NOT NULL,
  `work` text COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `dichuyen` int(11) NOT NULL,
  `xoa_user` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_user`
--

INSERT INTO `qh_user` (`id`, `name`, `username`, `password`, `manhansu`, `bophan`, `phone`, `email`, `ghichu`, `work`, `active`, `dichuyen`, `xoa_user`) VALUES
(1, 'admin', 'admin', '1', '', '', '0123456789', '1', '', '1', 2, 2, 1),
(10, '1', 'b51', '1', '1', '', '1', '', '1', '9', 2, 2, 1),
(11, 'Nguyễn Văn A12', '123', '123', '123', '', '123', '', '131', '9', 2, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_website`
--

CREATE TABLE `qh_website` (
  `id` int(11) NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qh_website`
--

INSERT INTO `qh_website` (`id`, `website`, `seo`) VALUES
(1, 'Phuckhang', '{\"title\":\"Th\\u00f4ng tin website\",\"logo\":\"https:\\/\\/themebun.com\\/demo\\/ducvu\\/public\\/frontent\\/img\\/logo.png\",\"logofooter\":\"https:\\/\\/themebun.com\\/demo\\/ducvu\\/public\\/frontent\\/img\\/logo.png\",\"hotline\":\"0976185255\",\"email\":\"tokhai@tdpvina.vn\",\"diachi\":\"\\u0110\\u1ec1n \\u0110\\u1ea7m - Ph\\u01b0\\u1eddng T\\u00e2n H\\u1ed3ng - TP T\\u1eeb S\\u01a1n - T\\u1ec9nh B\\u1eafc Ninh\",\"url\":\"4\",\"description\":\"1\",\"map\":\"https:\\/\\/goo.gl\\/maps\\/1yHBVwvLVZXL3wWt6\",\"keywords\":\"2\",\"favicon\":\"\",\"imgsocial\":\"\",\"imggoogle\":\"8\"}');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `qh_banner`
--
ALTER TABLE `qh_banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_bannergroup`
--
ALTER TABLE `qh_bannergroup`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_code_download`
--
ALTER TABLE `qh_code_download`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_order`
--
ALTER TABLE `qh_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_posts`
--
ALTER TABLE `qh_posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_posts_code`
--
ALTER TABLE `qh_posts_code`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_posts_file`
--
ALTER TABLE `qh_posts_file`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_posts_get_code`
--
ALTER TABLE `qh_posts_get_code`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_post_category`
--
ALTER TABLE `qh_post_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_post_img`
--
ALTER TABLE `qh_post_img`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_post_status`
--
ALTER TABLE `qh_post_status`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_post_tags`
--
ALTER TABLE `qh_post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_post_tags_distribution`
--
ALTER TABLE `qh_post_tags_distribution`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_post_template`
--
ALTER TABLE `qh_post_template`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_post_template_type`
--
ALTER TABLE `qh_post_template_type`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_post_type`
--
ALTER TABLE `qh_post_type`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_post_video`
--
ALTER TABLE `qh_post_video`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_setup`
--
ALTER TABLE `qh_setup`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_setup_editfile`
--
ALTER TABLE `qh_setup_editfile`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_setup_extend`
--
ALTER TABLE `qh_setup_extend`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_setup_footer`
--
ALTER TABLE `qh_setup_footer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_setup_group`
--
ALTER TABLE `qh_setup_group`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_setup_language`
--
ALTER TABLE `qh_setup_language`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_setup_lang_website`
--
ALTER TABLE `qh_setup_lang_website`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_setup_menu`
--
ALTER TABLE `qh_setup_menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_setup_social`
--
ALTER TABLE `qh_setup_social`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_system_frontent`
--
ALTER TABLE `qh_system_frontent`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_system_frontent_extend`
--
ALTER TABLE `qh_system_frontent_extend`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_system_template`
--
ALTER TABLE `qh_system_template`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_system_template_extend`
--
ALTER TABLE `qh_system_template_extend`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_system_template_setup`
--
ALTER TABLE `qh_system_template_setup`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_user`
--
ALTER TABLE `qh_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qh_website`
--
ALTER TABLE `qh_website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `qh_banner`
--
ALTER TABLE `qh_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `qh_bannergroup`
--
ALTER TABLE `qh_bannergroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `qh_code_download`
--
ALTER TABLE `qh_code_download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `qh_order`
--
ALTER TABLE `qh_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `qh_posts`
--
ALTER TABLE `qh_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `qh_posts_code`
--
ALTER TABLE `qh_posts_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `qh_posts_file`
--
ALTER TABLE `qh_posts_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT cho bảng `qh_posts_get_code`
--
ALTER TABLE `qh_posts_get_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `qh_post_category`
--
ALTER TABLE `qh_post_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `qh_post_img`
--
ALTER TABLE `qh_post_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320;

--
-- AUTO_INCREMENT cho bảng `qh_post_status`
--
ALTER TABLE `qh_post_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `qh_post_tags`
--
ALTER TABLE `qh_post_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `qh_post_tags_distribution`
--
ALTER TABLE `qh_post_tags_distribution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=556;

--
-- AUTO_INCREMENT cho bảng `qh_post_template`
--
ALTER TABLE `qh_post_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT cho bảng `qh_post_template_type`
--
ALTER TABLE `qh_post_template_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `qh_post_type`
--
ALTER TABLE `qh_post_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `qh_post_video`
--
ALTER TABLE `qh_post_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=863;

--
-- AUTO_INCREMENT cho bảng `qh_setup`
--
ALTER TABLE `qh_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `qh_setup_editfile`
--
ALTER TABLE `qh_setup_editfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `qh_setup_extend`
--
ALTER TABLE `qh_setup_extend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `qh_setup_footer`
--
ALTER TABLE `qh_setup_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `qh_setup_group`
--
ALTER TABLE `qh_setup_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `qh_setup_language`
--
ALTER TABLE `qh_setup_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `qh_setup_lang_website`
--
ALTER TABLE `qh_setup_lang_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `qh_setup_menu`
--
ALTER TABLE `qh_setup_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `qh_setup_social`
--
ALTER TABLE `qh_setup_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `qh_system_frontent`
--
ALTER TABLE `qh_system_frontent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `qh_system_frontent_extend`
--
ALTER TABLE `qh_system_frontent_extend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `qh_system_template`
--
ALTER TABLE `qh_system_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `qh_system_template_extend`
--
ALTER TABLE `qh_system_template_extend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `qh_system_template_setup`
--
ALTER TABLE `qh_system_template_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `qh_user`
--
ALTER TABLE `qh_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `qh_website`
--
ALTER TABLE `qh_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
