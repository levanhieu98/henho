-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 27, 2020 lúc 12:06 AM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB-cll-lve
-- Phiên bản PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `henhostu_dating`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `abum_blog`
--

CREATE TABLE `abum_blog` (
  `abum_log` int(11) NOT NULL,
  `image_blog` varchar(100) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `abum_blog`
--

INSERT INTO `abum_blog` (`abum_log`, `image_blog`, `id`) VALUES
(1, 'img/condao.jpg', 4),
(2, 'img/condao2.jpg', 4),
(3, 'img/dalat.png', 4),
(4, 'img/vinhhalong.jpg', 4),
(5, 'img/sapa.jpg', 4),
(6, 'img/hanoi.jpg', 4),
(7, 'img/hue.jpg', 4),
(8, 'img/muine.jpg', 4),
(9, 'img/phocohoian.jpg', 4),
(10, 'img/phuquoc.jpg', 4),
(11, 'img/513.jpg', 15),
(12, 'img/613.jpg', 15),
(13, 'img/713.jpg', 15),
(14, 'img/813.jpg', 15),
(15, 'img/913.jpg', 15),
(16, 'img/1013.jpg', 15),
(17, 'img/1116.jpg', 15),
(18, 'img/1213.jpg', 15),
(19, 'img/1312.jpg', 15),
(20, 'img/mau-can-ho-doc-dao-1.jpg', 15),
(21, 'img/mau-can-ho-doc-dao-2.jpg', 15),
(22, 'img/mau-can-ho-doc-dao-3.jpg', 15),
(23, 'img/mau-can-ho-doc-dao-4.jpg', 15),
(24, 'img/mau-can-ho-doc-dao-16.jpg', 15),
(25, 'img/mau-can-ho-doc-dao-17.jpg', 15),
(26, 'img/mau-can-ho-doc-dao-18.jpg', 15),
(27, 'img/mau-can-ho-doc-dao-19.jpg', 15),
(28, 'img/mau-can-ho-doc-dao-20.jpg', 15),
(29, 'img/mau-can-ho-doc-dao-21.jpg', 15),
(30, 'img/mau-can-ho-doc-dao-22.jpg', 15),
(31, 'img/quan-an-rieng-tu-cho-2-nguoi-tphcm.jpg', 11),
(32, 'img/quan-an-rieng-tu-cho-2-nguoi-tphcm-5-2_8e789.jpg', 11),
(33, 'img/quan-an-rieng-tu-cho-2-nguoi-tphcm-5-3_36b42.jpg', 11),
(34, 'img/quan-an-rieng-tu-cho-2-nguoi-tphcm-5-4_d7e78.jpg', 11),
(35, 'img/quan-an-rieng-tu-cho-2-nguoi-tphcm-5-5_2d0df.jpg', 11),
(36, 'img/quan-an-rieng-tu-cho-2-nguoi-tphcm-5-6_1ace8.jpg', 11),
(37, 'img/768x480_val6.jpg', 9),
(38, 'img/768x494_val7.jpg', 9),
(39, 'img/768x510_val3.jpg', 9),
(40, 'img/768x512_val4.jpg', 9),
(41, 'img/768x512_val5.jpg', 9),
(42, 'img/768x536_val1.jpg', 9),
(43, 'img/ahihi.jpg', 16),
(44, 'img/tuart.jpg', 16),
(45, 'img/shady.jpg', 16),
(46, 'img/white-palace.jpg', 18),
(47, 'img/white-palace2.jpg', 18),
(48, 'img/white-palace3.jpg', 18),
(49, 'img/riverside.jpg', 18),
(50, 'img/riverside2.jpg', 18),
(51, 'img/riverside3.jpg', 18),
(52, 'img/diamond-palace.jpg', 18),
(53, 'img/diamond-palace2.jpg', 18),
(54, 'img/diamond-palace3.jpg', 18),
(55, 'img/metropole.jpg', 18),
(56, 'img/metropole2.jpg', 18),
(57, 'img/metropole3.jpg', 18),
(58, 'img/capella.jpg', 18),
(59, 'img/capella2.jpg', 18),
(60, 'img/capella3.jpg', 18),
(61, 'img/capella4.jpg', 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `albums`
--

CREATE TABLE `albums` (
  `id_album` int(10) UNSIGNED NOT NULL,
  `name_album` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateCreated` date NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `albums`
--

INSERT INTO `albums` (`id_album`, `name_album`, `dateCreated`, `description`, `id`) VALUES
(1, 'hehe', '2020-08-01', 'hihi', 51),
(2, 'aaaaaaaaaaaaaaaaaaaaaaaa', '2020-08-05', 'hahahahahaha', 51),
(8, 'Test Album lần cuối', '2020-08-14', 'AAAAAAAAAAAAAAAAAAAAAA', 62),
(10, 'Mãi là anh em', '2020-08-19', 'Kỉ niệm Vũng Tàu', 52),
(11, 'hehehehehe', '2020-08-26', 'hehehehehe', 55),
(12, 'demo 1', '2020-08-26', 'My memory at STU', 59),
(13, 'hehehehehe', '2020-08-26', 'vui oi la vui', 54);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptive` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datesubmitted` date NOT NULL,
  `Id_category` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `title`, `descriptive`, `content`, `img`, `author`, `datesubmitted`, `Id_category`, `status`) VALUES
(2, 'Dấu hiệu chàng thích bạn nhưng chưa dám nói', 'Anh ấy luôn hỏi bạn cảm thấy ổn không?', '<p>Anh ấy lu&ocirc;n hỏi bạn c&oacute; cảm thấy ổn kh&ocirc;ng? Khi một ch&agrave;ng trai th&iacute;ch bạn, tất cả những g&igrave; anh ấy quan t&acirc;m l&agrave; bạn c&oacute; ổn kh&ocirc;ng. Mối bận t&acirc;m n&agrave;y lu&ocirc;n lu&ocirc;n nằm trong t&acirc;m tr&iacute; của anh ấy để chắc chắn rằng bạn ổn v&agrave; mọi thứ xung quanh bạn đều thuận lợi. Anh ấy nhắn tin hoặc gọi điện chỉ để biết được t&igrave;nh h&igrave;nh của bạn. Anh ấy hỏi cuộc họp của bạn như thế n&agrave;o v&agrave; gần đ&acirc;y bạn c&oacute; gặp chuyện g&igrave; với gia đ&igrave;nh kh&ocirc;ng. Anh ấy để t&acirc;m đến những người bạn quan t&acirc;m bởi anh ấy biết rằng theo c&aacute;ch n&agrave;y hay c&aacute;ch kh&aacute;c, những điều họ l&agrave;m sẽ ảnh hưởng đến bạn. Anh ấy muốn chắc chắn rằng bạn vẫn ăn ngủ tốt. Khi anh ấy thấy bạn ốm, anh ấy mua đồ ăn, mua thuốc cho bạn. Khi anh ấy thấy bạn bị bủa v&acirc;y bởi c&ocirc;ng việc, anh ấy sẽ nhắc bạn nghỉ ngơi v&agrave; hỏi xem c&oacute; thể gi&uacute;p g&igrave; cho bạn kh&ocirc;ng. Anh ấy cảm thấy lo lắng khi ở quanh bạn Một anh ch&agrave;ng th&iacute;ch bạn nhưng chưa d&aacute;m n&oacute;i sẽ c&agrave;ng dễ c&oacute; những h&agrave;nh động thể hiện sự lo lắng khi ở quanh bạn. Đ&oacute; kh&ocirc;ng phải l&agrave; v&igrave; anh ấy thiếu sự tự tin, đ&oacute; l&agrave; v&igrave; những tương t&aacute;c h&oacute;a học vẫn c&ograve;n tồn tại. Anh ấy vẫn cảm thấy lo lắng v&igrave; anh ấy muốn g&acirc;y ấn tượng với bạn theo c&aacute;ch tốt nhất c&oacute; thể. Bạn cũng l&agrave; một nguy&ecirc;n nh&acirc;n khiến anh &yacute; lo lắng v&igrave; anh ấy quan t&acirc;m xem bạn nghĩ như thế n&agrave;o về anh ấy. Đ&oacute; l&agrave; vấn đề với anh ấy. Anh ch&agrave;ng lu&ocirc;n lo lắng xem bạn nghĩ anh &yacute; l&agrave; một ch&agrave;ng trai tốt hay kh&ocirc;ng. Anh ấy muốn bạn nh&igrave;n anh ấy theo c&aacute;ch anh ấy tự nh&igrave;n bản th&acirc;n m&igrave;nh. Dĩ nhi&ecirc;n, anh ch&agrave;ng cũng muốn bạn tự h&agrave;o về anh ấy như c&aacute;ch anh ấy tự h&agrave;o về bạn. C&agrave;ng quan t&acirc;m nhiều đến bạn, anh ấy c&agrave;ng lo lắng về vai tr&ograve; của m&igrave;nh trong tim bạn. Việc bạn kh&ocirc;ng quan t&acirc;m nhiều đến anh ấy ch&iacute;nh l&agrave; điều đ&aacute;ng sợ nhất. Anh ấy d&agrave;nh những điều tốt nhất cho bạn Khi một ch&agrave;ng trai th&iacute;ch bạn, thực sự th&iacute;ch bạn, anh ấy sẽ trở n&ecirc;n nhạy cảm hơn v&agrave; suy tư nhiều hơn so với thường ng&agrave;y. Anh ấy n&oacute;i về cuộc sống theo c&aacute;ch thi vị nhất. Anh ấy n&oacute;i về những cam kết như thể đ&oacute; l&agrave; thứ tuyệt vời nhất tr&ecirc;n đời. T&igrave;nh y&ecirc;u trở th&agrave;nh trải nghiệm đẹp đẽ so với những đau khổ, tan vỡ trong qu&aacute; khứ. Anh ấy bắt đầu tin v&agrave;o những điều anh ấy từng ho&agrave;i nghi như t&igrave;nh y&ecirc;u đ&iacute;ch thực, được y&ecirc;u thương theo c&aacute;ch anh ấy mong muốn v&agrave; t&igrave;m kiếm một người bạn đời. Anh ấy vượt qua những giới hạn của bản th&acirc;n để l&agrave;m bạn cười hoặc g&acirc;y ấn tượng với bạn. Anh ấy chuẩn bị cho bạn bữa s&aacute;ng, viết cho bạn những bức thư t&igrave;nh v&agrave; anh ấy n&oacute;i về bạn tr&ecirc;n mạng x&atilde; hội. Anh ấy l&agrave; người bảo vệ cho bạn Dấu hiệu n&agrave;y thỉnh thoảng c&oacute; thể g&acirc;y nhầm lẫn giữa một người đ&agrave;n &ocirc;ng muốn kiểm so&aacute;t bạn hơn l&agrave; chăm s&oacute;c cho bạn. Tuy nhi&ecirc;n, khi một anh ch&agrave;ng th&iacute;ch bạn nhưng chưa d&aacute;m n&oacute;i, anh ấy sẽ bảo vệ cho bạn. Anh ấy khiến bạn rời xa những th&oacute;i quen kh&ocirc;ng tốt v&agrave; khuyến kh&iacute;ch bạn thay đổi ch&uacute;ng bằng những th&oacute;i quen l&agrave;nh mạnh. Anh ấy n&oacute;i với bạn những suy nghĩ ch&acirc;n th&agrave;nh về anh ch&agrave;ng kh&aacute;c đang t&igrave;m hiểu bạn. Đ&ocirc;i khi anh ấy sẽ nắm tay bạn qua đường, nhắc bạn cẩn thận khi nấu ăn. Cảnh b&aacute;o bạn khi c&oacute; nguy hiểm hoặc kh&ocirc;ng rời xa bạn trong những t&igrave;nh huống c&oacute; khả năng trở n&ecirc;n nguy hiểm ch&iacute;nh l&agrave; điều anh ấy sẽ l&agrave;m. Qu&atilde;ng thời gian ch&agrave;ng th&iacute;ch bạn nhưng chưa d&aacute;m n&oacute;i khiến ch&agrave;ng trở th&agrave;nh kỵ sĩ b&iacute; ẩn của ri&ecirc;ng bạn. Anh ấy lu&ocirc;n n&oacute;i với bạn những điều bạn kh&ocirc;ng cần biết Nếu một ch&agrave;ng trai đang thầm th&iacute;ch bạn, ch&agrave;ng sẽ sẵn s&agrave;ng ngồi kể cho bạn mọi điều về anh ấy d&ugrave; ch&uacute;ng kh&ocirc;ng th&uacute; vị hoặc bạn kh&ocirc;ng hỏi. Anh ấy n&oacute;i với bạn những điều anh ấy sắp l&agrave;m, cập nhật về c&ocirc;ng việc, chia sẻ về một chuyến đi chơi c&ugrave;ng bạn b&egrave;. Mọi thứ bạn nghĩ ch&agrave;ng kh&ocirc;ng cần kể đều được thuật lại một c&aacute;ch thật chi tiết. L&yacute; do ở một điều duy nhất, anh ấy muốn cởi mở với bạn về mọi điều, muốn bạn hiểu hơn về anh ấy v&agrave; điều g&igrave; anh ch&agrave;ng đang nghĩ. Thậm ch&iacute; kế hoạch cho một ng&agrave;y của anh ấy l&agrave; g&igrave; v&agrave; mong muốn được tận hưởng kỳ nghỉ lễ c&ugrave;ng bạn cũng sẽ được ch&agrave;ng thổ lộ. V&agrave; tất nhi&ecirc;n, anh ấy cũng sẽ kể cho bạn những g&aacute;nh nặng đang đ&egrave; tr&ecirc;n vai. Anh ấy gi&uacute;p đỡ bạn d&ugrave; kh&ocirc;ng được y&ecirc;u cầu Anh ch&agrave;ng n&agrave;y sẽ sẵn s&agrave;ng l&agrave;m mọi việc cho bạn d&ugrave; kh&ocirc;ng được y&ecirc;u cầu. Bởi anh ấy l&agrave;m n&oacute; trước khi bạn nghĩ ra v&agrave; nhờ tới anh ấy. Kể cả những việc bạn kh&ocirc;ng muốn l&agrave;m v&agrave; thầm cầu mong c&oacute; người l&agrave;m thay cũng sẽ được anh ch&agrave;ng xử l&yacute;. Khi một ch&agrave;ng trai y&ecirc;u bạn, anh ấy sẽ chăm s&oacute;c cho bạn nhiều nhất c&oacute; thể. Anh ấy mua cho bạn m&oacute;n đồ uống y&ecirc;u th&iacute;ch trước khi bạn kịp nhớ ra m&igrave;nh muốn uống thứ đ&oacute; tới nhường n&agrave;o. Anh ấy thỉnh thoảng g&acirc;y bất ngờ cho bạn Một trong những điều anh ch&agrave;ng th&iacute;ch l&agrave;m ch&iacute;nh l&agrave; g&acirc;y bất ngờ cho bạn. Anh ấy l&agrave;m những điều nhỏ b&eacute; mỗi ng&agrave;y để khiến bạn th&aacute;o bỏ sự ph&ograve;ng thủ của m&igrave;nh. Anh ấy lu&ocirc;n rất giỏi trong việc khiến bạn y&ecirc;u anh ấy nhiều hơn ng&agrave;y h&ocirc;m trước. Anh ấy g&acirc;y bất ngờ cho bạn bằng c&aacute;ch l&agrave;m những điều bạn từng n&oacute;i từ trước đ&oacute;. Anh ấy tặng bạn m&oacute;n qu&agrave; y&ecirc;u th&iacute;ch. V&agrave; quan trọng nhất, anh ấy g&acirc;y bất ngờ cho bạn bằng việc kh&ocirc;ng ngừng trưởng th&agrave;nh v&agrave; tự cải thiện bản th&acirc;n. Anh ấy lu&ocirc;n h&agrave;o ph&oacute;ng mỗi khi đưa bạn đi ăn Nếu anh ch&agrave;ng nhường cho bạn miếng cuối c&ugrave;ng của m&oacute;n ăn m&agrave; ch&agrave;ng th&iacute;ch, đ&oacute; l&agrave; dấu hiệu anh ấy th&iacute;ch bạn rất nhiều. V&igrave; anh ấy đ&atilde; lựa chọn điều m&agrave; bản th&acirc;n kh&ocirc;ng bắt buộc phải l&agrave;m. Anh ấy đưa bạn đến những qu&aacute;n ăn y&ecirc;u th&iacute;ch, chia sẻ phần ăn của m&igrave;nh với bạn. Anh ấy sẵn s&agrave;ng chạy quanh th&agrave;nh phố để mua bằng được m&oacute;n đồ bạn th&iacute;ch. Ngo&agrave;i cha mẹ, liệu ai đ&oacute; c&oacute; thể hết l&ograve;ng v&igrave; bạn nếu học kh&ocirc;ng y&ecirc;u bạn? Anh ấy nh&igrave;n s&acirc;u v&agrave;o mắt mỗi khi n&oacute;i chuyện Nh&igrave;n s&acirc;u v&agrave;o mắt ch&iacute;nh l&agrave; c&aacute;ch anh ch&agrave;ng thể hiện sự ngưỡng mộ với bạn. Anh ấy nghĩ rằng mọi điều bạn l&agrave;m v&agrave; n&oacute;i đều thật dễ thương. Do đ&oacute;, khi anh ấy nh&igrave;n s&acirc;u v&agrave;o mắt bạn, đ&oacute; l&agrave; bởi anh ấy c&oacute; rất nhiều điều muốn n&oacute;i với bạn. Anh ấy muốn bạn biết bạn khiến anh ch&agrave;ng mất tr&iacute;. Anh ấy nghĩ bạn l&agrave; tất cả những điều anh ấy t&igrave;m kiếm. C&aacute;i nh&igrave;n của anh ấy thể hiện sự ngưỡng mộ, khao kh&aacute;t, y&ecirc;u thương v&agrave; l&ograve;ng biết ơn. Anh ấy nghĩ bạn vừa dễ thương lại vừa quyến rũ. Anh ấy y&ecirc;u mọi thứ về bạn, th&iacute;ch c&aacute;ch bạn tương t&aacute;c với mọi người. Khi anh ấy nh&igrave;n s&acirc;u v&agrave;o mắt bạn, anh ấy đang ngắm nh&igrave;n t&acirc;m hồn tuyệt đẹp của bạn.</p>', 'img/4-1-1490070392731-67-0-582-1000-crop-1490070490969.jpg', 'Admin', '2020-06-17', 2, 1),
(3, '10 điều quan trọng nam giới cần lưu ý để vun đắp trong một mối quan hệ', '1. Tin tưởng trong một mối quan hệ, niềm tin được xem là quan trọng nhất để gắn kết cả hai....', '1. Tin tưởng\r\nTrong một mối quan hệ, niềm tin được xem là quan trọng nhất để gắn kết cả hai. Nếu niềm tin không được xuất phát từ cả hai phía thì mối quan hệ đó chắc chắn sẽ chết lần. Tin tưởng vào một ai đó là một điều rất khó khăn. Không phải chỉ ngày một ngày hai mà có thể tin tưởng được. Nó là một quá trình dài của sự vun đắp từng chút từng chút một những mảnh nhỏ của niềm tin. Khi lòng tin đủ lớn thì chính lúc đó tình yêu của bạn sẽ nở rộ nhất khi bạn biết cách đặt sự tin tưởng tuyệt đối nơi một ai đó. Yêu thương luôn mang hương vị ngọt ngào và tin tưởng luôn mang hương vị đậm đà của sự gắn kết. Lắng nghe tiếng nói từ bên trong chính mình để cảm nhận tình yêu và tin tưởng nơi người con gái của bạn.\r\n2. Sự tôn trọng\r\nNếu bạn muốn có một mối quan hệ bền chặt và lâu dài, điều đầu tiên là phải dựa trên nền tảng tôn trọng lẫn nhau. Nếu cả hai bạn đều sẵn sàng nỗ lực thì cả hai sẽ có một mối quan hệ vẹn tròn và tôn trọng lẫn nhau. Bạn nên biết rằng, điểm mấu chốt giữa quan hệ vợ chồng hay một mối quan hệ lâu dài chính là sự yêu thương và tôn trọng lẫn nhau, không nên gây cho nhau những tổn thương. Và tất nhiên không chỉ có người phụ nữ cần tôn trọng mà người đàn ông cũng vậy, đây là điều cơ bản và tất yếu để xây dựng một tình yêu bền lâu và hạnh phúc.\r\n\r\n3. Sự an toàn\r\nNếu một người đàn ông không mang lại sự an toàn cho người mình yêu, thì sẽ chẳng cô nàng nào muốn tiếp tục mối quan hệ đó nữa. Phụ nữ ấy mà, xét cho cùng cũng chỉ là phái yếu, dù có mạnh mẽ đến đâu thì tận sâu trong lòng vẫn yếu đuối và cần một sự an toàn từ người đàn ông mà mình yêu. Chính vì vậy, trong những lúc này, bạn cần phải bảo vệ, che chở cho người phụ nữ của mình.\r\n\r\n4. Hạnh phúc\r\nMọi người đều muốn được hạnh phúc, và hạnh phúc được xem là quan trọng trong một mối quan hệ. Hạnh phúc được gọi là tiền đề của mọi cặp đôi, có hạnh phúc mới có sự lâu dài và bền vững. Hãy tạo ra cho cô gái của bạn sự hạnh phúc, bạn cũng sẽ nhận lại được điều đó.\r\n\r\n5. Luôn là chính mình\r\nĐôi lúc trong một mối quan hệ nào đó, bạn đã hướng tình cảm mình quá nhiều về cô ấy mà bỏ quên đi bản thân mình là ai. Phụ nữ họ sẽ cảm thấy thu hút trước một người đàn ông luôn là chính mình. Rất dễ dàng để cho một cô nàng thấy một phần bản thân của bạn, chính là việc bạn thích gì hay không thích gì và bạn cũng không cần thay đổi điều đó vì một ai nếu nó không phải là điều sai.\r\n\r\n6. Sự độc lập\r\nChính là bản thân bạn không bị ràng buộc quá nhiều về mối quan hệ đó, bạn tự do, bạn làm việc mình muốn và bạn là chính bạn. Tuy nhiên không có nghĩa bạn bỏ rơi người phụ nữ của mình, mà là tự do ở mức giới hạn. Điều này như kiểu, bạn có thể tự do về công việc, giờ giấc, nơi đi nhưng hãy nhớ rằng bạn cũng nên phải có thời gian riêng cho cô ấy.\r\n\r\n7. Đa vai trò\r\nNếu bạn đang ở vai trò là bạn trai của cô ấy, không có nghĩa bạn không có vai trò khác. Phụ nữ họ cần bên mình là người đàn ông nhưng kiêm luôn nhiều chức vụ. Có khi cô ấy cần là một người chồng để nũng nịu hay chiều chuộng cô ấy. Đôi lúc cô ấy cần bạn là người mẹ, quan tâm chăm sóc mỗi khi cô ấy có nhiều chuyện không vui. Vì vậy, bạn nên sẵn sàng bản thân để lúc cô ấy cần gì bạn cũng có thể đáp ứng được.\r\n\r\n8. Tình dục\r\nNgười ta hay nói rằng tình yêu mà không có tình dục thì chẳng khác nào tình đồng chí. Tuy nhiên chỉ khi cả hai đã chắc chắn với tình cảm của mình thì mới tính đến chuyện ái ân, vì nếu như chỉ cuốn hút nhau bởi xác thịt thì mối quan hệ đấy chẳng đến được đâu. Bên cạnh đó, nếu một mối quan hệ đã thật sự hạnh phúc mà không quá đặt nặng tình dục thì cũng không nên lạm dụng nó. Nhưng nếu quan hệ tình dục là điều quan trọng với bạn, thì hãy chắc chắn rằng người phụ nữ của bạn cũng đồng ý với việc đó.\r\n9. Giao tiếp\r\nGiao tiếp là một điều quan trọng với một mối quan hệ, cả hai có thể mỗi ngày dành cho nhau một ít thời gian để nói về những chyện trong ngày, lắng nghe nhau để hiểu thêm về nhau, đây còn không phả là một điều quan trọng trong một mối quan hệ sao?\r\n\r\n10. Luôn muốn ở cạnh nhau\r\nTrái tim đôi khi cũng phức tạp. Bạn yêu cô ấy nhưng lại không nghĩ đến việc ở cùng họ, hay là không phải trong thời này. Tuy nhiên, thời gian được xem là rất quan trọng, việc cả hai gặp nhau nhiều hơn được xem là chất xúc tác cho mối quan hệ của bạn thêm mặn nồng.', 'img/11-dieu-quan-trong-trong-mot-moi-quan-h11-elleman.jpg', 'Admin', '2020-06-17', 2, 1),
(4, '9 ĐỊA ĐIỂM DU LỊCH LÃNG MẠN NHẤT DÀNH CHO CÁC CẶP ĐÔI TẠI VIÊT NAM', 'Cách tốt nhất để liên tục hâm nóng tình cảm của hai người là đi du lịch tới những nơi lãng mạn dành cho các cặp đôi...', 'Cách tốt nhất để liên tục hâm nóng tình cảm của hai người là đi du lịch tới những nơi lãng mạn dành cho các cặp đôi. Hai bạn chẳng cần phải đi đâu xa cả mà ngay tại nước nhà cũng có rất rất nhiều địa điểm du lịch hấp dẫn. \r\n1. Sapa\r\n\r\nBạn đã từng tới Sapa chưa? Nếu chưa, hãy nắm tay người ấy và đi ngay đến Sapa thôi! Sapa là một thị trấn hoài cổ nằm lẩn trong sương mù và đó chính là lí do tại sao thị trấn này lại có tên là Sapa. Bởi vì khí hậu mát mẻ, đôi lúc lại có sương mờ, địa điểm này đã trở thành nơi du lịch lí tưởng dành cho các cặp đôi. Hai bạn có thể nắm tay nhau đi dạo ngắm cảnh, thưởng thức những món ăn địa phương ngon hay cùng hòa mình vào làn sương mờ ảo. Nghe thú vị lắm phải không? Ngoài ra, Sapa còn sở hữu một nền văn hóa đa dạng và nhiều phong cảnh tuyệt sắc. Hai bạn có thể ngắm nhìn ruộng bậc thang nở rộng vàng ươm, hay ngắm nhìn những đám mây trôi lơ lửng trên đỉnh đầu. Và còn rất nhiều điều thú vị nữa đang đợi bạn và người ấy đến khám phá. \r\n\r\n2. Vịnh Hạ Long\r\n\r\nNằm tại tỉnh Quảng Ninh, Vịnh Hạ Long có gần 1600 hòn đảo lớn nhỏ tạo nên vẻ đẹp tuyệt vời hiếm có. Để khám phá vẻ đẹp tự nhiên này, bạn và người ấy có thể đặt những tour địa phương để khám phá những hòn núi, hang động cùng nhau và hít thở không khí trong lành của buổi sáng.Vịnh Hạ Long có làn nước biển trong xanh cùng với những con sóng dạt dào. Ngoài ra, còn có những hang động tự nhiên nổi tiếng như động Thiên Cung, động Dầu Gò. \r\n\r\n3. Hà Nội\r\n\r\nHà Nội - thủ đô của Việt Nam với rất nhiều địa danh du lịch nổi tiếng dành cho các cặp đôi. Khi bạn có kế hoạc du lịch Hà Nội, hãy chọn đến đây vào tháng 4. Bởi vì, Hà Nội là một trong 9 địa điểm nhất định phải đi trong tháng 4.\r\n\r\nTại Hà Nội, bạn và người ấy có thể có những kỉ niệm khó quên tại:\r\n\r\n- Hồ Tây - Hẹn hò dưới hoàng hôn\r\n\r\n- Những con đường nổi tiếng như: Phan Đình Phùng, Thanh Niên và Kim Mã\r\n\r\n- Phố cổ Hà Nội\r\n\r\n4. Huế - Thành phố mộng mơ\r\n\r\nHuế là một nơi nhất định phải đi nếu hai bạn là những người yêu sự lãng mạn. Ngoài ra, Huế còn được yêu thích bởi sự nhẹ nhàng, lãng mạn của con người và phong cảnh nơi đây.\r\n\r\nĐến Huế, bạn và người ấy nhất định phải ghé thăm các địa danh sau:\r\n\r\n- Chùa Thiên Mụ\r\n\r\n- Núi Ngự Bình \r\n\r\n- Cầu Tràng Tiền\r\n\r\n5. Phố Cổ Hội An\r\n\r\nTrong những năm gần đây, Hội An được nhiều cặp đôi lựa chọn làm nơi hưởng tuần trăng mật lý tưởng. Tại Hội An, hai bạn sẽ được khám phá những khung cảnh thơ mộng và nền văn hóa thú vị. Hai bạn sẽ bị cuốn hút ngay lập tức bởi lối kiến trúc cổ của các khu nhà, những con phố vắng và những món ăn ngon tuyệt vời. Ngoài ra, bạn và người ấy còn có thể thả mình vào làn nước mát lạnh của biển Cửa Đại. \r\n\r\n6. Mũi NéMũi Né là một bãi biển đẹp và to cách trung tâm thành phố Phan Thiết 22km. Nơi này đang trở thành một địa điểm du lịch hấp dẫn với đồi cát trắng và hàng cọ thẳng tấp trải dài theo đường bờ biển. Đây chính là lí do mà Mũi Né trở thành nơi đáng đến dành cho các cặp đôi.\r\n\r\n7. Đà Lạt - Thành Phố Tình YêuNếu hai bạn chọn Đà Lạt làm nơi hẹn hò hâm nóng tình cảm thì chắc chắn nó sẽ không làm thất vọng bạn. Không chỉ nổi tiếng về sự lãng mạn với rất nhiều loài hoa, Đà Lạt còn sở hữu một \"lifestyle\" rất khác biệt. Với không khí lãng mạn cùng những phong cảnh thu hút lòng người, Đà Lạt chắc chắn sẽ làm cho tình cảm của hai bạn nồng nàn hơn. \r\n\r\n8. Côn Đảo\r\n\r\nCôn Đảo là một thị trấn nhỏ nằm ngoài biển khơi thuộc tĩnh Bà Rịa Vũng Tàu. Trong những năm gần đây, Côn Đảo đang trở thành một địa điểm du lịch thu hút của du khách trong và ngoài nước. Vẻ đẹp của thiên nhiên cùng những câu chuyện kì lạ tại hòn đảo cũng sẽ làm cho chuyến du lịch của hai bạn thú vị hơn. Côn Đảo được liệt kê trong danh sách 12 địa điểm du lịch yên bình nhất với bờ biển đẹp nhưng yên lặng. Điều này sẽ giúp hai bạn có những khoảng khắc bên cạnh nhau mà không sợ bị người khác làm phiền. Sau khi ngắm nhìn cảnh biển, hai bạn có thể cùng nhau đi dạo trên đảo để thưởng thức những món ăn địa phương ngon miệng như đặc sản Ốc Vú Nàng, tôm hùm đỏ hay cua biển. \r\n\r\n9. Phú Quốc\r\n\r\nĐịa điểm cuối cùng trong danh sách là Phú Quốc. Hòn đảo Phú Quốc - Viên ngọc trai giữa lòng đại đương, được thiên nhiên ưu ái với những rặng núi dài đẹp, bờ biển dài cát trắng. Phú Quốc nằm ở phía Nam Việt Nam, phù hợp với tất cả du khách đến từ mọi miền. Hiện nay, đã có các chuyến bay tới Phú Quốc được khai thác. ', 'img/dulich.jpg', 'Admin', '2020-06-18', 5, 1),
(5, '10 phẩm chất của một người đàn ông mà nếu bỏ qua, bạn sẽ hối hận', 'Tại sao bạn không thể trở thành người đàn ông khiến cho bao người phụ nữ say mê? nếu như bạn có 1 hoặc một số những điểm trên, thì phụ nữ vây quanh bạn nhất định nhiều như mây vờn, còn nếu chưa thì phải rèn luyện ngay...', 'Tại sao bạn không thể trở thành người đàn ông khiến cho bao người phụ nữ say mê? nếu như bạn có 1 hoặc một số những điểm trên, thì phụ nữ vây quanh bạn nhất định nhiều như mây vờn, còn nếu chưa thì phải rèn luyện ngay.\r\n\r\nNgười đàn ông như thế nào mới có thể khiến cho bạn đời của mình một lòng ái mộ, thậm chí là vì yêu mà có thể hy sinh cả thanh xuân của đời mình? Chung quy lại đều đàn ông tốt trong tình yêu và có thể là chỗ dựa cho phụ nữ đều có những phẩm chất này.\r\n\r\n1. Sâu sắc\r\nSự sâu sắc của đàn ông luôn có sức hấp dẫn nhất. Người đàn ông có tư tưởng sâu sắc hơn ngoại hình của mình thì càng có sức hấp dẫn. Người xưa có câu “Đàn ông nông nổi giếng khơi, đàn bà sâu sắc như cơi đựng trầu”.\r\n\r\nMột người đàn ông sâu sắc khi làm bất cứ điều gì cũng đều suy nghĩ thật thấu đáo, kể cả lúc nói chuyện cũng vậy, uốn lưỡi bày lần trước khi nói, họ luôn là những người không hay làm mếch lòng người khác, trái lại sẽ luôn để lại ấn tượng sâu sắc cho những ai bên cạnh họ.\r\n2. Chung thủy\r\nNgười đàn ông chung thủy luôn khiến cho bạn đời của mình có cảm giác an toàn, do vậy cuộc sống bình thường luôn trôi qua êm ả, yên bình, khiến cho người phụ nữ của họ có thể hoàn toàn giãi bày thế giới nội tâm của mình. Đâu có người phụ nữ nào lại không muốn ở bên cạnh người đàn ông luôn coi vợ là duy nhất đâu!\r\n\r\n3. Quả cảm quyết đoán\r\n\r\nVới một nam tử hán, điều quan trọng nhất phải có là dám hành động, cụ thể: dám nghĩ, dám nói, dám làm, dám thắng, dám thua, dám yêu, dám hận, dám đấu tranh, và đặc biết là dám chiến đấu. Một người đàn ông như thế lúc nào cũng sẽ là vòng đai bảo vệ cho phái nữ, không thu hút sao được?\r\n\r\n4. Chân thực\r\nLà đàn ông nên chân thực, chân thực là biệu hiện mạnh mẽ và đáng tin tưởng nhất. Lời chân thực thường dễ nói, không cần phải suy nghĩ tìm tòi, bằng cách nào cũng có thể biểu đạt một cách chân thật; lời dối trá thì càng khó nói, lừa thế nào cũng không kín đáo được, do đó, đại trượng phu không nên tìm đến chỗ đắc tội làm gì.\r\n\r\n5. Phong độ\r\nPhong độ và khí chất con người có mối liên hệ mật thiết với nhau, biểu hiện khuynh hướng nhân cách của một người. Phong độ của đàn ông là vẻ đẹp hoàn thiện nhất, phái nữ luôn tán thưởng và yêu thích sự chín chắn của đàn ông.\r\n\r\nĐàn ông đủ 10 phẩm chất này, không những nên nghiệp lớn, lại còn làm chỗ dựa vững chắc cho gia đình, phụ nữ bỏ qua sẽ hối hận cả đời – Ảnh 2.\r\n\r\n6. Cơ trí\r\nLàm việc một cách lạnh lùng, cũng không cần phải giải thích nhiều, trong quá trình suy nghĩ vấn đề không nên nói toạc móng heo ra mà nên có một kết luận cuối cùng cho mọi việc. Người đàn ông cơ trí như vậy sẽ khiến cho bạn đời của mình có một cảm giác thật huyền bí, “sự huyền bí” của nam giới cộng thêm phẩm chất tốt đẹp từ họ sẽ luôn tạo ra sức hút mãnh liệt cho phái nữa.\r\n\r\n7. Dí dỏm, hài hước\r\nMột người đàn ông hài hước phần lớn là những người có sự lạc quan. Họ luôn có thái độ tích cực và tinh thần lạc quan trong cuộc sống.\r\n\r\nNgười như vậy khi gặp khó khăn, nghịch cảnh sẽ không mặt mày ủ dột và chán nản bỏ cuộc mà sẽ vẫn cười đùa mà đối mặt với sự trêu đùa của số phận, vững vàng bước tiếp trên con đường đã chọn, sẽ là bờ vai vững chắc cho những người xung quanh, làm cho cuộc sống dù trong nghịch cảnh vẫn luôn tươi đẹp vô cùng.\r\n\r\nHọ sẽ không cảm thấy trách nhiệm của họ quá nặng nề, giảm bớt được phiền não cho người phụ nữ đi bên cạnh mình.\r\n8. Có chí tiến thủ\r\nChí tiến thủ của một người đàn ông biểu hiện ở mọi lúc mọi nơi, là một kiểu tinh thần thép luôn hướng về phía trước, là người luôn có định hướng cho tương lai sự nghiệp. Người đàn ông như vậy sẽ khiến cho bạn đời của minh luôn có một tương lai vô cùng rộng mở.\r\n\r\nĐàn ông đủ 10 phẩm chất này, không những nên nghiệp lớn, lại còn làm chỗ dựa vững chắc cho gia đình, phụ nữ bỏ qua sẽ hối hận cả đời – Ảnh 3.\r\n\r\n9. Lãng mạn\r\nMột người đàn ông tốt sau hôn nhân nên có sự lãng mạn để tạo ra những “câu chuyện cổ tích” giữa đời thường. Những người đàn ông lãng mạn sẽ luôn có sức hấp dẫn kỳ lạ đối với phụ nữ.\r\n\r\n10. Mạo hiểm\r\nThường thì phụ nữ rất thích sự mạo hiểm của đàn ông, bởi vì ở họ sẽ có một sự thần bí nào đó, có cảm giác muốn khám phá, thu hút sự tò mò của phái nữ. Phụ nữ sẽ luôn để ý tới một người đàn ông mà lúc nhìn vào họ có cảm giác như gần như xa.\r\n\r\nTất cả những phẩm chất trên của người đàn ông cũng là những điểm mà phái nữ yêu thích nhất, nếu như bạn có 1 hoặc một số những điểm trên, thì phụ nữ vây quanh bạn nhất định nhiều như mây vờn, còn nếu không thì bạn nên hình thành cho mình một vài phẩm chất nêu trên.', 'img/phamchatdanong.jpg', 'Admin', '2020-06-18', 2, 1),
(6, '3 chủ đề chat đêm thú vị được phái đẹp yêu thích', 'Nói về sở thích của cô ấy.Nếu bạn muốn bắt đầu câu chuyện, bạn nên chọn chủ đề chat đêm về sở thích...', '<p>N&oacute;i về sở th&iacute;ch của c&ocirc; ấy Nếu bạn muốn bắt đầu c&acirc;u chuyện, bạn n&ecirc;n chọn chủ đề chat đ&ecirc;m về sở th&iacute;ch. Đ&acirc;y l&agrave; một chủ đề kh&aacute; an to&agrave;n. Bạn h&atilde;y hỏi c&ocirc; ấy về khoảng thời gian y&ecirc;u th&iacute;ch trong ng&agrave;y, thứ c&ocirc; ấy quan t&acirc;m,&hellip; C&ocirc; ấy sẽ vui vẻ chia sẻ những mối quan t&acirc;m đ&oacute;. Nữ giới thường rất h&agrave;o hứng khi chia sẻ những điều m&igrave;nh quan t&acirc;m. Quan trọng hơn, bằng việc biết được những th&ocirc;ng tin về c&ocirc; ấy, bạn sẽ c&oacute; nhiều cơ hội kết nối giữa hai người hơn. N&oacute;i về ước mơ v&agrave; kh&aacute;t vọng của c&ocirc; ấy Ng&agrave;y nay, phụ nữ đ&atilde; trở n&ecirc;n năng động hơn v&agrave; hướng tới x&acirc;y dựng sự nghiệp. Họ c&oacute; những giấc mơ v&agrave; kh&aacute;t vọng to lớn kh&ocirc;ng k&eacute;m g&igrave; c&aacute;nh m&agrave;y r&acirc;u. Khi chủ đề chat đ&ecirc;m bạn hướng tới l&agrave; giấc mơ, c&ocirc; ấy sẽ rất vui l&ograve;ng chia sẻ c&ugrave;ng bạn. Phụ nữ đ&ocirc;i khi chỉ cần ai đ&oacute; lắng nghe họ. Nếu bạn l&agrave;m tốt, bạn sẽ hiểu r&otilde; hơn về con người c&ocirc; ấy. N&oacute;i về cảm x&uacute;c v&agrave; những mối quan hệ Đ&acirc;y l&agrave; một trong những chủ đề chat đ&ecirc;m thường xuy&ecirc;n được sử dụng. Phụ nữ thường rất nhạy cảm khi tr&ograve; chuyện về những mối quan hệ. Nếu bạn dẫn dắt thật tinh tế, chủ đề chat đ&ecirc;m n&agrave;y sẽ rất hữu dụng cho bạn. Bạn h&atilde;y khuyến kh&iacute;ch c&ocirc; ấy đưa ra quan điểm về vấn đề y&ecirc;u đương, h&ocirc;n nh&acirc;n v&agrave; ngoại t&igrave;nh,&hellip; C&ocirc; ấy sẽ say sưa chia sẻ c&ugrave;ng bạn. Khi hai bạn th&acirc;n thiết hơn, bạn thậm ch&iacute; c&oacute; thể hỏi c&ocirc; ấy về những mối quan trong qu&aacute; khứ. Nếu c&ocirc; ấy tỏ ra kh&oacute; chịu v&agrave; từ chối trả lời. Bạn h&atilde;y xin lỗi v&agrave; nhẹ nh&agrave;ng chuyển sang một chủ đề kh&aacute;c dễ chịu hơn. Ngo&agrave;i những chủ đề chat đ&ecirc;m được nhiều người sử dụng tr&ecirc;n, bạn c&oacute; thể tham khảo một v&agrave;i chủ đề nhỏ kh&aacute;c như: N&oacute;i về &acirc;m nhạc v&agrave; điện ảnh N&oacute;i về tin tức thời sự N&oacute;i về một ch&uacute;t chuyện phiếm N&oacute;i về cuốn s&aacute;ch, t&aacute;c giả hoặc tạp ch&iacute; y&ecirc;u th&iacute;ch của c&ocirc; ấy. Hỏi xem c&ocirc; ấy c&oacute; th&iacute;ch thể thao kh&ocirc;ng. Nếu c&oacute;, th&igrave; sao? Hỏi c&ocirc; ấy thời thơ ấu của c&ocirc; ấy như thế n&agrave;o v&agrave; gia đ&igrave;nh c&ocirc; ấy như thế n&agrave;o? Hỏi xem c&ocirc; ấy c&oacute; tin v&agrave;o điều huyền b&iacute; kh&ocirc;ng. Hỏi xem c&ocirc; ấy đ&atilde; từng y&ecirc;u/hẹn h&ograve; chưa? T&igrave;m hiểu điều g&igrave; tạo n&ecirc;n một ch&agrave;ng trai ho&agrave;n hảo cho c&ocirc; ấy. N&oacute;i về những thứ (th&oacute;i quen) c&ocirc; ấy gh&eacute;t nhất trong mọi người&hellip;</p>', 'img/Girl-chat-night-12.png', 'Admin', '2020-06-18', 6, 1),
(7, '3 chủ đề chat đêm thú vị được phái đẹp yêu thích', 'Nói về sở thích của cô ấy.Nếu bạn muốn bắt đầu câu chuyện, bạn nên chọn chủ đề chat đêm về sở thích...', 'Nói về sở thích của cô ấy\r\nNếu bạn muốn bắt đầu câu chuyện, bạn nên chọn chủ đề chat đêm về sở thích. Đây là một chủ đề khá an toàn. Bạn hãy hỏi cô ấy về khoảng thời gian yêu thích trong ngày, thứ cô ấy quan tâm,… Cô ấy sẽ vui vẻ chia sẻ những mối quan tâm đó. Nữ giới thường rất hào hứng khi chia sẻ những điều mình quan tâm. Quan trọng hơn, bằng việc biết được những thông tin về cô ấy, bạn sẽ có nhiều cơ hội kết nối giữa hai người hơn.\r\nNói về ước mơ và khát vọng của cô ấy\r\nNgày nay, phụ nữ đã trở nên năng động hơn và hướng tới xây dựng sự nghiệp. Họ có những giấc mơ và khát vọng to lớn không kém gì cánh mày râu. Khi chủ đề chat đêm bạn hướng tới là giấc mơ, cô ấy sẽ rất vui lòng chia sẻ cùng bạn. Phụ nữ đôi khi chỉ cần ai đó lắng nghe họ. Nếu bạn làm tốt, bạn sẽ hiểu rõ hơn về con người cô ấy.\r\n\r\nNói về cảm xúc và những mối quan hệ\r\nĐây là một trong những chủ đề chat đêm thường xuyên được sử dụng. Phụ nữ thường rất nhạy cảm khi trò chuyện về những mối quan hệ. Nếu bạn dẫn dắt thật tinh tế, chủ đề chat đêm này sẽ rất hữu dụng cho bạn.\r\n\r\nBạn hãy khuyến khích cô ấy đưa ra quan điểm về vấn đề yêu đương, hôn nhân và ngoại tình,… Cô ấy sẽ say sưa chia sẻ cùng bạn. Khi hai bạn thân thiết hơn, bạn thậm chí có thể hỏi cô ấy về những mối quan trong quá khứ. Nếu cô ấy tỏ ra khó chịu và từ chối trả lời. Bạn hãy xin lỗi và nhẹ nhàng chuyển sang một chủ đề khác dễ chịu hơn.\r\nNgoài những chủ đề chat đêm được nhiều người sử dụng trên, bạn có thể tham khảo một vài chủ đề nhỏ khác như:\r\nNói về âm nhạc và điện ảnh\r\nNói về tin tức thời sự\r\nNói về một chút chuyện phiếm\r\nNói về cuốn sách, tác giả hoặc tạp chí yêu thích của cô ấy.\r\nHỏi xem cô ấy có thích thể thao không. Nếu có, thì sao?\r\nHỏi cô ấy thời thơ ấu của cô ấy như thế nào và gia đình cô ấy như thế nào?\r\nHỏi xem cô ấy có tin vào điều huyền bí không.\r\nHỏi xem cô ấy đã từng yêu/hẹn hò chưa?\r\nTìm hiểu điều gì tạo nên một chàng trai hoàn hảo cho cô ấy.\r\nNói về những thứ (thói quen) cô ấy ghét nhất trong mọi người…', 'img/Girl-chat-night-12.png', 'Admin', '2020-06-18', 6, 1),
(8, '4 điều cần nhớ để có một nụ hôn tuyệt vời nhất', 'Các chàng trai, hãy chỉnh lại mái tóc của nữ giới để “thăm dò” xem họ có muốn hôn không.Tình trạng tiến thoái lưỡng nan này luôn tạo nên sự bối rối và bồn chồn hơn bất cứ thứ gì khác có liên quan tới việc hôn nhau...', 'Các chàng trai, hãy chỉnh lại mái tóc của nữ giới để “thăm dò” xem họ có muốn hôn không\r\nTình trạng tiến thoái lưỡng nan này luôn tạo nên sự bối rối và bồn chồn hơn bất cứ thứ gì khác có liên quan tới việc hôn nhau. Phần lớn các ý kiến đều cho thấy bất kể là bạn có mục đích lãng mạn hay không thì để hôn một người nào đó trên má hoặc vị trí khác (hoặc “ngửi” anh, cô ấy) thì hành động mấu chốt là phải bước vào không gian riêng của họ. Để làm được điều đó, cần phải đạt được mức độ nhất định về lòng tin hoặc sự trông đợi.\r\n\r\nVà lời khuyên từ một nghệ sĩ cho biết rằng: các chàng trai, hãy chỉnh lại mái tóc của nữ giới. Đây là một cử chỉ quan trọng mà nếu cô ấy lưỡng lự nghĩa là không quan tâm nhưng nếu có phản ứng dễ chịu đồng nghĩa với việc bạn đã được bật đèn xanh. Dù dưới góc độ nào đi chăng nữa thì cách làm này cũng cung cấp thông tin cần thiết nhưng không gây ra quá nhiều khó khăn cho cả đôi bên.\r\nNữ giới cần lưu ý chuyện gì?\r\nTrong quyển sách Nghệ thuật nụ hôn của William Cane, tác giả đã khảo sát những người đàn ông về các phàn nàn lớn nhất và mong muốn của họ về nụ hôn. Và đây là câu hỏi dành cho các bạn nữ, bạn cần phải làm gì để cánh đàn ông có thể nghĩ rằng bạn có một nụ hôn tuyệt vời? Dưới đây là một số đáp án mà tác giả nghiên cứu đã khảo sát được.\r\n\r\nHãy mở miệng ra lớn hơn. Nghiên cứu chỉ ra rằng đàn ông thích “những nụ hôn ướt át với nhiều hành động của lưỡi.”\r\nHãy khơi mào nhiều hơn.\r\nHãy dùng những động tác lưỡi nhiều hơn và cùng chủ động một cách tích cực khi hôn.\r\nVà chung quy lại, vấn đề lớn nhất mà các bạn nữ cần phải chú ý chính là: Đừng kiềm nén.\r\n\r\nCác chàng trai: hãy để cô ấy thở!\r\nBên dưới là những gơi ý đúc kết từ quyển Nghệ thuật nụ hôn dành cho đàn ông:\r\n\r\nĐừng bao giờ dùng lưỡi để chặn cổ họng của cô ấy. Đây là phàn nàn lớn nhất mà giới nữ thường báo cáo. Bạn đang hôn cô ấy, đừng cố gắng “nhét một bào thai ngoài hành tinh vào dạ dày của cổ.”\r\nGiữ cho đôi tai của bạn hài hỏa với hơi thở của cô ấy. Một cách thẳng thán, hãy đảm bảo rằng bạn vẫn cho cô ấy thở khi hôn. Phụ nữ có xu hướng thích hôn khi họ không bị ngạt thở. Tất nhiên rồi.\r\nHãy “lắng nghe” cách cô ấy hôn. Nói cách khác, hãy đảm bảo tương ứng với tiến độ của cô ấy. Hãy đáp lại hành động lưỡi của cô ấu bằng hành động lưỡi tương tự của bạn. Dẫn dắt và chủ động cũng có mặt tích cực, nhưng đôi khi không chú ý thì nó sẽ làm vấn đề tệ hơn.\r\nNgoài ra, những việc làm khác để có một nụ hôn tuyệt vời chính là chăm sóc sức khỏe răng miệng, sử dụng nước súc miệng và nhớ mang theo kẹo bạc hà nếu cần. Những nghiên cứu tâm lý học trước đây đã chỉ ra rằng bất kể là bạn hấp dẫn cỡ nào, nhưng sức khỏe răng miệng kém có thể giết chết một người phụ nữ và những nụ hôn tuyệt vời ngay từ lúc bắt đầu. Đây là điều đặc biệt đúng đối với nam giới. Như đã nói ở phần trên, phu nữ đánh giá rất cao những mùi vị và chú ý tới sức khỏe răng miệng khi đánh giá đối tác của họ.\r\n\r\nTác giả của cuốn Nghệ thuật nụ hôn còn khuyên các nam rằng:\r\n\r\n53% phụ nữ thích hôn người đàn ông đã cạo sạch râu.\r\nMột trong những vị trí ưu thích của nữ giới khi hôn, bên cạnh miệng chính là cổ. 96% nữ giới báo cáo rằng họ thích những nụ hôn ở cổ trong khi chỉ có 10% đàn ông làm điều đó.\r\nNữ giới còn phàn nàn rằng đàn ông không có đủ những biến thể của nụ hôn và thường cho rằng họ quá máy móc hoặc thực hiện những hành động lặp đi lặp lại. Phụ nữ thích những nụ hôn khác nhau, bao gồm ở cổ, ở tai, những nụ hôn “hút lấy môi” vốn di chuyển từ môi dưới lên môi trên rồi ngược lại hoặc những cách sáng tạo khác.\r\nKỹ thuật không phải là tất cả\r\nNhư Tôn Tử đã từng nói, “tất cả những cuộc chiến đều được xác định là thành hoặc bại trước khi đánh.” Và dưới góc độ nào đó thì điều này đúng đối với nụ hôn. Bạn có thể là một người biết hôn rất giỏi nhưng vẫn thất bại nếu cư xử như một kẻ “đảm bảo không ai muốn hôn bạn.” Những trường hợp cản trở cũng là vấn đề khiến cho nụ hôn không thể thực hiện. Các nghiên cứu tâm lý học đã chỉ ra một số yếu tố gây cản trở hoặc thúc đẩy sự thành công của nụ hôn.\r\nHãy tạo ra ngoại hình hấp dẫn hơn.\r\n\r\nThiết lập các giai đoạn. Hãy tìm hiểu và chấp nhận với những vụng về của người khác, đồng thời tạo điều kiện cho các yếu tố thuận lợi để sự gần gũi diễn ra.\r\nVấn đề bối cảnh. Nếu bạn muốn thành công, hãy chọn một bối cảnh thích hợp, chắc chắn một con đường đầy sình lầy, mưa gió không phải là chỗ thích hợp để làm điều đó rồi. Một số gợi ý cho rằng nên chọn nơi có ánh đèn mờ, mặc trang phục đỏ, chia sẻ những bí mật và có những hành động cho thấy sự liên kết sẽ là tác động dẫn tới một nụ hôn.\r\nHãy nhận ra những thứ mà đối tác thích hay không thích. Hôn nhau không phải là một bộ môn thể thao mà chúng ta có thể chấm điểm từ 0 tới 10 giống như làm toán. Phần quyết định của vấn đề chính là sở thích cá nhân. Hãy nhận biết rõ về đối tác của bạn để trở thành một người hôn giỏi và từ đó giúp mối quan hệ của bạn được tiến triển tốt hơn.', 'img/4-giai-đoạn-của-tình-yêu-1.jpg', 'Admin', '2020-06-18', 6, 1),
(9, 'Bật mí “nơi ăn chốn uống” dành cho các cặp đôi mùa Valentine tại Sài Gòn', 'Bản Sonate Café .Từ thiết kế tinh tế, không gian trải rộng mượt mà đến những bản nhạc du dương, tất cả đã tạo nên một giai điệu đầy nồng nàn như bản giao hưởng êm đềm của chàng nhạc sĩ...', 'Bản Sonate Café\r\nTừ thiết kế tinh tế, không gian trải rộng mượt mà đến những bản nhạc du dương, tất cả đã tạo nên một giai điệu đầy nồng nàn như bản giao hưởng êm đềm của chàng nhạc sĩ. Lãng mạn từ cái tên, Sonate Café thực sự là một địa điểm hẹn hò tuyệt vời cho những người yêu nhau.\r\n\r\nBonjour Resto - Beefsteak Pasteur\r\nTuy là quán ăn kiểu Pháp nhưng giá cả ở đây lại hết sức phải chăng, phù hợp với túi tiền của các bạn trẻ. Thực đơn ở Bonjour Restro - Beefsteak khá đa dạng và được chế biến tỉ mỉ dưới bàn tay của những đầu bếp tài hoa. Không gian quán sang trọng với ánh đèn vàng ấm cúng. Đây quả là một địa chỉ hẹn hò “đáng mơ ước” cho các cặp đôi.\r\n\r\nEON 50 Café - Bitexco\r\nNếu bạn muốn ghi điểm trong mắt “ấy” thì còn chần chờ gì nữa mà không đưa người yêu đến Bitexco trong dịp đặc biệt này. Chỉ với khoảng 200k/người là hai bạn sẽ có cơ hội cùng nhau ngắm toàn cảnh Sài Gòn về đêm đầy lung linh và huyền ảo qua kính viễn vọng. Buổi hẹn hò từ độ cao 178m này chắc chắn sẽ trở thành một trải nghiệm không thể nào quên với cả hai người đấy.\r\n\r\nQuán ăn Hàn Quốc Topokki\r\nTopokki là một quán ăn không còn xa lạ gì với nhiều bạn trẻ bởi độ ngon – bổ - rẻ của nó. Những món ăn ở đây được chế biến đúng chuẩn Hàn và vừa miệng. Không gian quán được trang trí khá đơn giản nhưng ấm cúng. Bật mí nè, nếu muốn có nhiều không gian riêng tư hơn, các bạn nên tới quán sớm nhé vì buổi tối là quán đông ơi là đông luôn í.\r\n\r\nNến Café\r\nNến là biểu tượng của sự lãng mạn. Quán có không gian sân vườn thoáng rộng, nhiều cây xanh ngút ngát mang lại cảm giác như hòa mình với thiên nhiên. Bên cạnh đồ uống, quán còn phục vụ nhiều món ăn ngon nữa. Điều làm nên chất riêng của Nến Café là khi tối, hàng loạt ngọn nến được thắp sáng từ cổng vào tận bên trong, tạo nên con đường nến lung linh, huyền ảo siêu lãng mạn.', 'img/valentine.jpg', 'Admin', '2020-06-18', 1, 1),
(10, '5 nhà hàng có view bờ sông lãng mạn dành cho các cặp đôi ở TP.HCM', 'Bistro Sông Vie: Nằm trong chuỗi các nhà hàng có view hướng sông đẹp nhất nhì TP.HCM, Bistro Sông Vie là điểm đến quen thuộc của giới trẻ Sài thành. Nhà hàng vừa có không gian trong nhà ấm cúng, vừa có bàn ngoài trời được bao quanh bởi cây xanh. ', 'Bistro Sông Vie: Nằm trong chuỗi các nhà hàng có view hướng sông đẹp nhất nhì TP.HCM, Bistro Sông Vie là điểm đến quen thuộc của giới trẻ Sài thành. Nhà hàng vừa có không gian trong nhà ấm cúng, vừa có bàn ngoài trời được bao quanh bởi cây xanh. Không chỉ phục vụ các món Âu, đồ ăn Việt Nam của nhà hàng cũng được đánh giá khá tốt. Không chỉ làm hài lòng thực khách bởi chất lượng của đồ ăn, phong cách bài trí đơn giản mà thanh lịch cùng cách phục vụ khéo léo, tôn trọng sự riêng tư của khách hàng cũng giúp nhà hàng luôn là địa điểm được các cặp đôi ưa thích. Giá: 200.000-500.000\r\n\r\nBoat House: Là địa điểm hẹn hò đem đến cho bạn một bữa tối dưới ánh đèn vàng lãng mạn, cùng nhau nâng ly dưới bầu trời đêm Sài thành, Boat House được nhiều cặp đôi lựa chọn cho dịp Valentine. Boat House chuyên phục vụ các món Âu, Mexico và được đánh giá cao về beefsteak. Mỗi món ăn được bày trí đẹp mắt, tinh tế, mang lại cho thực khách cảm giác ngon miệng hơn. Ngoài thưởng thức hương vị ẩm thực tinh tế, đến đây, bạn còn được lắng nghe giai điệu đồng quê với những bản tình ca thú vị. Giá: 200.000-450.000 đồng.\r\n\r\nThe Deck: Với không gian thoáng đãng và view hướng ra sông Sài Gòn, nhà hàng là gợi ý lý tưởng cho buổi tối hẹn hò của bạn với người thương. The Deck chuyên phục vụ các món Âu với thực đơn đa dạng các món. Ngoài đồ ăn mặn, quán còn có các loại nước trái cây, cocktail, rượu thượng hạng cho bạn lựa chọn. Quán đông vào các dịp lễ, bạn nên đặt bàn trước để có thể lựa chọn chỗ ngồi có view đẹp. Giá: 500.000-1 triệu đồng.\r\n\r\nBonsai Cruise: Nhà hàng nằm trên một con tàu, bữa tối cùng người thương lênh đênh trên sông trong tiếng nhạc ballad da diết sẽ khiến buổi hẹn của bạn trở nên ấm cúng và lãng mạn hơn. Mỗi ngày tàu sẽ rời bến và chạy trong 2 tiếng từ 19h15, vì thế bạn cần chú ý thời gian để không bị bỏ lỡ. Nhà hàng phục vụ buffet với các món Á - Âu và thực đơn có sự thay đổi theo các ngày. Đồ ăn ở đây được nhiều thực khách đánh giá khá ngon, vừa vị. Giá: 1 triệu đồng/người.\r\n\r\nVillage Romaine - Thảo Điền Village: Như một thành phố thu nhỏ của Ý, nhà hàng có không gian lãng mạn vào chiều tối với những ngọn đèn lấp lánh và view nhìn ra bờ sông. Đến đây, các cặp đôi có thể chọn không gian ven sông thoáng mát hay thưởng thức bữa tối trong nhà với sự ấm cúng, sang trọng. Trước khi tới đây, bạn nên liên hệ trước với nhà hàng để được cung cấp thẻ hội viên để có thể dùng bữa tối ở đây. Giá: 250.000-500.000 đồng.', 'img/bosong.jpg', 'Admin', '2020-06-18', 1, 1),
(11, 'DANH SÁCH QUÁN ĂN RIÊNG TƯ CHO 2 NGƯỜI TPHCM LÃNG MẠN NHẤT', '1. Muse Dining & Grill.Đây là một trong những quán ăn riêng tư cho 2 người TPHCM được yêu thích của nhiều cặp đôi khi hẹn hò...', '1. Muse Dining & Grill\r\nĐây là một trong những quán ăn riêng tư cho 2 người TPHCM được yêu thích của nhiều cặp đôi khi hẹn hò. Với không gian trang trọng mang phong cách châu Âu, đơn giản nhưng vẫn đầy đủ ấm cúng cùng gam màu chủ đạo là màu nâu.\r\n\r\nĐây quả thực là một nói vô cùng thích hợp nếu bạn muốn có cho mình không gian thật là riêng tư.Món ăn đa dạng\r\nƯu điểm của nhà hàng này không chỉ nằm ở không gian quán mà món ăn cũng vô cùng đa dạng, đủ hương vị Á – Âu cho thực khác thoải mái chọn lựa.\r\n\r\nNhững món ăn đậm đà hương vị được bày trí vô cùng tinh tế và đẹp mắt. Không những vậy, còn có khá là nhiều những món ăn đặc biệt để thưởng thức. Đồ ăn ở đây được bày trí cực kỳ đẹp, cảm giác sẽ càng ngon miệng hơn với những món ăn này.\r\n\r\nKhông gian lãng mạn\r\nNhững cặp đôi đang tìm kiếm cho mình quán ăn riêng tư cho 2 người TPHCM để hẹn hò thì hãy thử ngay với nhà hàng này nhé.\r\n\r\nMột gợi ý nho nhỏ nữa là, rất nhiều anh chàng đã thử tỏ tình với cô nàng mình thầm mến ở đây, và đều thành công rồi đấy. Một địa điểm để tỏ tình cực kỳ lãng mạn, tăng khả năng thành công.\r\n2. Secret Garden \r\n Nhà hàng nằm ngay trung tâm Quận 1, nhưng lại vô cùng thanh mát. Cảm giác đầu tiên khi đặt chân đến đây chính là sự yên bình như đang ở một vùng quê nào vậy.\r\n\r\nKhông còn đường phố đông đúc, tấp nập thay vào đó là sự bình yên nhẹ nhàng và thoải mái. Với không gian ngập tràn đầy cây cỏ hoa lá, lại còn thêm cả những giàn dây leo, đã vậy bàn ghế còn có màu của gỗ, với những vật dụng mang nét đặc trưng nơi quê nhà thì đúng chuẩn luôn.\r\n \r\n\r\nVốn nằm trên một khu chung cư cũ, nên đến đây bạn không chỉ cảm nhận được không gian, hương vị của những món ăn ngon mà còn được ngắm nhìn thành phố từ trên cao.\r\n\r\nNếu có thời gian, hãy dắt người thương đến quán ăn riêng tư cho 2 người TPHCM này và khám phá thử nhé.\r\n3. Café Hoa Giấy\r\nNếu bạn thích Hội An, thích những căn nhà màu vàng ươm dưới nắng cùng những giàn hoa giấy đong đưa. Chắc hẳn bạn sẽ thích nơi này.\r\n\r\nNhà hàng với gam màu vàng cực kỳ bắt mắt, phối thêm xanh đầy thu hút, rõ ràng mang tới ấn tượng cực tốt cho những người lần đầu nhìn thấy. Những chiếc đèn lồng xanh đỏ treo đầy quán, đúng kiểu Hội An luôn.\r\n\r\nNgay cửa tiệm cũng là giàn hoa giấy đặc trưng nữa. Ôi chỉ nghe kể thôi là đã thấy hay ho lắm rồi.\r\n \r\n\r\n Không chỉ thưởng thức những món ăn ngon, không gian đậm chất thơ; mà bạn sẽ có thêm được những tấm hình khiến bạn bè phải trầm trồ. Và nếu cô nàng của bạn thích sống ảo thì dẫn nàng tới đây; bạn đã được cộng thêm điểm rồi đó.\r\n4. Quán Bụi Garden \r\nNằm ở quận 2 nên không gian cực kỳ rộng rãi hơn 1000m2. Đây được xem là thiên đường của các cặp đôi muốn có không gian rộng rãi, thoáng mát. Và nhất là tránh xa thành phố đầy chật chội, ồn ào và ngột ngạt.\r\n\r\nĐiểm đặc biệt của quán ăn riêng tư cho 2 người TPHCM này chính là giữ được nguyên những gì đậm chất thôn quê. Không chỉ không gian quán mà cả những món ăn ở đây cũng khá là đồng quê.\r\n\r\nBạn dễ tìm thấy ở đây những món ăn thanh đạm vừa miệng gợi nhớ quê hương.\r\n \r\n\r\nCuối tuần này, hãy đổi gió cùng nàng bằng cách đi hẹn hò ở đây nhé. Thật tuyệt khi có thể rời xa khói bụi ồn ào của thành phố; tận hưởng không khí trong lành và không gian thoáng đãng đúng không nào.\r\n5. Nhà hàng Gạo\r\n\r\nNhà hàng này đem tới những món ăn truyền thống; đầy đủ hương vị 3 miền. Không gian sang trọng tinh tế chính là điểm cộng của nơi này. Nếu như với nhiều nhà hàng; dù bạn khá là thích đấy nhưng sẽ không thể đến quá nhiều bởi thực đơn lúc nào cũng vậy không được đổi mới.\r\n\r\nThì hãy thử đến với Gạo; bạn sẽ cảm nhận hoàn toàn khác, khi thực đơn luôn đổi mới với những món ăn đậm vị đơn giản nhưng thơm ngon.\r\n \r\n\r\nTừng món ăn được chăm chút tỉ mẩn với nguyên liệu sạch mang tới cho bạn những món ăn không ở đâu có được. Đây cũng là gợi ý hoàn hảo nếu cô nàng của bạn khó tính, kén ăn vì chắc hẳn nàng sẽ bị chinh phục bởi những món ăn ở đây thôi.', 'img/restaurant.jpg', 'Admin', '2020-06-19', 1, 1),
(12, 'Tổng hợp những câu \"thả thính\" hay và dễ thương', 'Những câu nói thả thính hay và dễ thương thường được sử dụng. Tam giác thì cân tại đỉnh Còn tớ thì sẽ cân cả thế giới vì cậu.', 'Những câu nói thả thính hay và dễ thương thường được sử dụng.\r\n\r\n1. Tam giác thì cân tại đỉnh\r\n\r\nCòn tớ thì sẽ cân cả thế giới vì cậu\r\n\r\n2. Em ko thích ăn cơm với cá\r\n\r\nEm chỉ thích hôn má anh thôi\r\n\r\n3. Hôm nay em học toán hình\r\n\r\nTròn vuông chẳng có, toàn hình bóng anh \r\n\r\n4. Ngoài kia trăm ngả lối về \r\n\r\nNếu chưa ai đón thì về bên em\r\n\r\n5. Tài nấu ăn của em hơi ẩu \r\n\r\nChẳng biết nấu gì ngoài món lẩu tình yêu \r\n\r\n6. Anh ơi, nắng ấm xa dần \r\n\r\nĐông sang gió lạnh chỉ cần có anh\r\n\r\n7. Người ta mượn rượu tỏ tình\r\n\r\nEm không cần rượu cũng đủ trình cưa anh\r\n\r\n8.Em là chiếc lá nhỏ\r\n\r\nAnh là bầu trời xanh\r\n\r\nEm cái gì cũng có\r\n\r\nChỉ thiếu có mỗi anh', 'img/tha-thinh.jpg', 'Admin', '2020-06-20', 3, 1),
(13, '8 cử chỉ lãng mạn giúp mối quan hệ của bạn bền chặt hơn', 'Hầu hết chúng ta muốn cùng già đi với một ai đó nhưng các nghiên cứu cho thấy tỷ lệ kết hôn đang giảm dần, điều này khiến nhiều người trong chúng ta nghĩ rằng một mối quan hệ lâu dài là một huyền thoại hoặc đơn giản là không đáng.....', 'Hầu hết chúng ta muốn cùng già đi với một ai đó nhưng các nghiên cứu cho thấy tỷ lệ kết hôn đang giảm dần, điều này khiến nhiều người trong chúng ta nghĩ rằng một mối quan hệ lâu dài là một huyền thoại hoặc đơn giản là không đáng. Tuy nhiên, điều đó không đúng chút nào. Tình yêu và các mối quan hệ rất phức tạp, nhưng có những lời khuyên lãng mạn thực tế và dễ dàng mà chúng ta có thể áp dụng vào thực tế để đảm bảo chúng ta có được những điều tốt nhất trong số đó.\r\n\r\n1. Chia sẻ giấc mơ nhỏ trong tâm trí của bạn\r\nChia sẻ một giấc mơ nhỏ khiến bạn giữ hy vọng cho cùng một mục tiêu. Hãy suy nghĩ về việc tiết kiệm tiền cho một chuyến đi với những đứa trẻ hoặc một chiếc xe, ngôi nhà mới. Có thể bạn hy vọng sẽ cải tạo phòng của bạn hoặc đang lên kế hoạch đoàn tụ gia đình tại nhà. Dù bằng cách nào, chia sẻ và làm việc hướng tới hy vọng và ước mơ là một cách tích cực để giữ cho bạn kết nối và hạnh phúc.\r\n\r\n2. Note lại chi tiết sở thích, mong muốn đơn giản của người ấy\r\n\r\nNếu sắp tới sinh nhật của người ấy, và bạn đã quên bén mất thường ngày nửa kia hay nói thích cái  gì, đây có thể là giải pháp cho vấn đề đó và hơn thế nữa. Mỗi khi đối phương nói về một tiệm cà phê mới mà họ muốn ghé thăm, một bộ phim mà họ đã mong đợi được công chiếu, hoặc một cái gì đó họ muốn mua, hãy ghi nó lại hoặc viết nó ra. Bạn có thể giữ nó như một ghi chú trên điện thoại di động và xem nó bất cứ khi nào bạn muốn, đây là cách bạn quan tâm đến nửa kia, một cách âm thầm nhưng tinh tế.\r\n\r\n3. Lên kế hoạch bất ngờ nhỏ \r\nTình yêu đích thực không chỉ là đam mê, mà còn là một hành động của ý chí nơi bạn chọn ở bên người đó mỗi ngày. Nhưng điều đó không có nghĩa là mọi thứ lúc nào cũng phải thật nồng nhiệt. Gây ngạc nhiên cho đối phương của bạn với món ăn họ yêu thích, chuẩn bị cho họ tắm nước nóng sau một ngày làm việc vất vả hoặc mua vé xem bộ phim mà họ muốn xem (mà bạn đã ghi vào sổ tay của mình).\r\n4. Trong một cuộc tranh cãi, hãy suy nghĩ về một số lỗi có thể là lỗi của bản thân\r\n\r\nNếu bạn tranh luận và nhận ra mọi thứ đang mất kiểm soát, hãy đến các phòng khác nhau trong 20 phút. Điều này sẽ cho bạn cả thời gian để bình tĩnh và quan trọng hơn, hãy suy nghĩ và suy ngẫm về thực tế rằng bạn có thể đã đóng góp theo cách nào đó khiến cho cuộc tranh luận đi xa hơn và trở nên tồi tệ. Sau 20 phút trôi qua, hãy mang chút khiêm nhường đối diện với người ấy, cùng ngồi xuống và nói với nhau rằng bạn nghĩ mình đã sai, xin lỗi và cố gắng tìm ra giải pháp cho vấn đề cùng nhau.\r\n\r\n5. Dành thời gian để khiến bạn nhớ nhau hơn\r\n\r\nNếu chúng ta dành tất cả thời gian rảnh rỗi của mình để ở bên người còn lại, vậy sao không dành thời gian cho bản thân làm thứ gì đó một cách riêng tư. Ví dụ đi làm đẹp cho bản thân, cà phê với bạn bè, hay dành thời gian cho mẹ và người thân của bạn.\r\n6. Làm việc cùng nhau trong một dự án\r\n\r\nTạo ra một cái gì đó cùng nhau, chỉ có hai bạn, để bạn trở thành chuyên gia làm việc nhóm. Cái gì đó đơn giản như chuẩn bị một bữa ăn nấu tại nhà, trang trí lại phòng, dọn dẹp nhà cửa,... Nó rất quan trọng cho cả hai để đạt được một cái gì đó cùng nhau, cũng có thể hiểu đối phương hơn thông qua làm việc cùng nhau. \r\n\r\n7. Thể hiện tình cảm bằng cử chỉ thay vì lời nói \r\n\r\nSự tiếp xúc của con người mạnh mẽ đến mức nó có thể truyền đạt tình yêu mà không cần nói một lời. Hơn nữa, sự âu yếm giải phóng oxytocin, còn được gọi là hóc môn tình yêu. Chất này làm cho bạn và nửa kia cảm thấy hạnh phúc, an toàn và kết nối cảm quan, cho bạn cảm thấy yêu thương hơn.', 'img/8-cu-chi-lang-man-giup-moi-quan-he-cua-ban-ben-chat-hon-ce4e17bd.jpg', 'Admin', '2020-06-18', 3, 1);
INSERT INTO `blog` (`id`, `title`, `descriptive`, `content`, `img`, `author`, `datesubmitted`, `Id_category`, `status`) VALUES
(14, 'Những quà tặng và câu chúc ý nghĩa dành cho chị em phụ nữ ngày 20/10', 'Những lời chúc hay ngày Phụ nữ Việt Nam 20/10 .Lời yêu thương có cánh hay những câu nói đơn giản, ngắn gọn mà súc tích tràn ngập ý nghĩa luôn là chìa khóa giúp bạn thành công chinh phục tình cảm của người phụ nữ...', 'Những lời chúc hay ngày Phụ nữ Việt Nam 20/10\r\n\r\nLời yêu thương có cánh hay những câu nói đơn giản, ngắn gọn mà súc tích tràn ngập ý nghĩa luôn là chìa khóa giúp bạn thành công chinh phục tình cảm của người phụ nữ mà mình yêu thương nhất:\r\n\r\nCảm ơn mẹ! Người đã mang con đến với thế giới và ban cho con tình yêu thương tuyệt vời nhất thế gian. Con Yêu Mẹ!\r\n\r\nMẹ yêu! chúc cho người phụ nữ tuyệt vời nhất của con mãi rạng ngời sắc xuân dịu dàng.\r\n\r\nCảm ơn mẹ, người phụ nữ vĩ đại của đời con. \r\n\r\nCảm ơn vợ! Vì em đã luôn bên anh dù có bao nhiêu khó khăn, nhưng vẫn quan tâm, thương yêu anh mà chẳng lời thở than!\r\n\r\nCảm ơn em! vì em đã dành cả tuổi thanh xuân cho anh, đã ở lại và yêu thương một người như anh!\r\n\r\nCảm ơn vì đã đến bên anh, mình mãi bên cạnh nhau em nhé!\r\n\r\nThế giới này rộng lớn đến vô chừng, nhưng dù đi xa đến đâu, đi nhiều đến thế nào, gặp qua bao nhiêu người thì anh cũng chỉ yêu một mình em. Cảm ơn vì đã làm tươi mới cuộc đời anh.\r\n\r\nGửi em, chúng ta không dễ dàng gì để có được hạnh phúc như ngày hôm nay. Hãy tôn trọng quá khứ, trân quý những gì ở hiện tại và cùng anh viết tiếp tương lai em nhé. Chúc em Ngày phụ nữ 20-10 vui vẻ.\r\n\r\nAnh sẽ không chúc em điều gì cả vì em xứng đáng được hưởng tất cả những điều tốt đẹp nhất trên đời này. Ngày 20-10 vui vẻ em nhé.\r\n\r\nChúc mừng ngày 20-10, chúc cho những người phụ nữ của gia đình mình. Luôn nhiều sức khỏe, luôn trẻ đẹp và hạnh phúc nhé.\r\n\r\nChúc em ngày 20-10 vui vẻ và hạnh phúc em nhé, thương!\r\n\r\nĐiều may mắn nhất đối với anh chính là sự xuất hiện của em trong cuộc đời, còn điều hạnh phúc nhất của anh chính là cùng em xây dựng tổ ấm, cảm ơn em! \r\n\r\nKý ức cả đời anh chỉ cần có em là đủ, cảm ơn em vì đã yêu anh, chúc em ngày quốc tế phụ nữ vui vẻ.\r\n\r\nXin cảm ơn các chị em đã tạo nên động lực và sức sống cho một nửa thế giới còn lại của chúng tôi. Chúc các chị em ngày quốc tế phụ nữ vui vẻ.\r\n\r\nTặng quà gì nhân ngày 20/10?\r\n\r\nTặng hoa\r\n\r\nHoa là món quà phổ biến và đơn giản nhất mà đa số mọi người thường nghĩ ra mối khi có dịp liên quan đến việc tặng quà. Tuy là phổ biến nhưng cũng không nên quá chủ quan đâu nhé, bởi mỗi loại hoa đều có ý nghĩa riêng của nó, không phải chỉ đẹp là được, mà hiểu ý nghĩa riêng của từng loại hoa sẽ giúp bạn trở thành người tinh tế và thú vị hơn đồng thời cũng giúp cho người nhận cảm thấy mình đặc biệt. \r\n\r\nQuà tặng sức khỏe\r\nQuan tâm đến sức khỏe của mẹ hay vợ và người thương của bạn đó chính là điều vô cùng tốt, vào dịp này hãy thể hiện cách mà bạn để ý đến chi tiết này bằng việc tặng một quà tặng có giá trị dinh dưỡng cao để bồi bổ sức khỏe ví như: tổ yến, hồng sâm, sữa,... Mặc dù mẹ có thể xót tiền, có thể cằn nhằn tiếc tiền của con vì bạn mua món quà này, nhưng chắc chắn mẹ bạn thực sự rất vui đấy.\r\n\r\nTặng quần áo\r\nBất kỳ người phụ nữ nào cũng muốn có quần áo đẹp, quần áo mới, tùy thuộc vào mỗi lứa tuổi đều có thời trang phù hợp. Nếu bạn dành thời gian cùng mẹ hay mẹ chồng đi mua quần áo và chọn trang phục mà mẹ thích thì chắc chắn danh hiệu người con tâm lý đã thuộc về tay bạn.\r\nTặng trang sức\r\n\r\nPhụ kiện tôn lên vẻ tự tin và sang trọng của người phụ nữ chính là trang sức, đây sẽ là món quà vừa giá trị vừa quý giá lại ý nghĩa dành đến các chị em phụ nữ.\r\n\r\nTặng đồ dùng nấu ăn, làm bếp\r\nHình ảnh của người phụ nữ thường gắn với việc bếp núc vậy tại sao không thể hiện sự tinh ý bằng việc thể hiện sự quan tâm đến người thân của mình bằng một bộ dụng cụ làm bếp thuận tiện, hữu ích. Đó có thể là một bộ bát đĩa mới theo màu sắc mà họ thích, lò vi sóng, lọ đựng gia vị,…Việc ghi điểm trong mắt các người mẹ hay chị em phụ nữ là việc không khó nếu bạn bỏ chút thời gian ra để quan sát.\r\n\r\nTặng mỹ phẩm\r\nLà phụ nữ ai cũng yêu cái đẹp, vì vậy nếu người phụ nữ của bạn cũng là người thường xuyên chăm sóc da thì đây chắc chắn sẽ là món quà ý nghĩa đối với họ.\r\n\r\nTặng một bữa ăn tự nấu hay một bữa ăn lãng mạn\r\n\r\nTrổ tài nấu nướng sẽ khiến người ấy cảm động, nhất là khi bạn tự tay vào bếp chuẩn bị các món ăn, không cần quá nhiều món, chỉ cần đó là những món họ ưa thích.\r\n\r\n', 'img/2010.jpg', 'Admin', '2020-06-19', 3, 1),
(15, '3 MẪU CĂN HỘ ĐỘC ĐÁO DÀNH CHO CÁC CẶP ĐÔI', 'Khi một cặp đôi mới bắt đầu chung sống, để tìm một nơi vừa phù hợp với kinh phí vừa tiện nghi để xây dựng tương lai dường như là cả một vấn đề....', 'Khi một cặp đôi mới bắt đầu chung sống, để tìm một nơi vừa phù hợp với kinh phí vừa tiện nghi để xây dựng tương lai dường như là cả một vấn đề. Căn hộ phong cách studio thì trông có vẻ chật chội, trong khi những căn hộ hiện đại lại quá đắt đỏ đối với những cặp có ý định tiết kiệm chi phí cho cuộc sống sau này.\r\n\r\nBa mẫu căn hộ độc đáo dưới đây, tuy hạn chế về mặt diện tích nhưng bù lại bằng cách phân chia không gian rất sáng tạo, đem đến đầy đủ tiện nghi.\r\n\r\nCăn hộ thứ nhất.\r\nKhông gian thứ nhất được xây dựng bao quanh khu sinh hoạt trung tâm, với các không gian riêng tư xoay chung quanh, trần nhà cao tạo sự thoáng đãng, chùm đèn ngắn, sát trần đảm bảo không tạo cảm giác rối rắm. Phòng ngủ và phòng ngủ khách đều có thể nhìn ra phòng sinh hoạt chính thông qua cửa sổ kiểng, được gắn rèm dễ dàng đóng mở phòng khi có nhu cầu riêng tư.Gam màu trung tính đóng vai trò chủ đạo với vài điểm nhấn màu vàng tạo vẻ trẻ trung.\r\n\r\nCăn hộ thứ hai.\r\nCăn hộ thứ hai với diện tích 70 mét vuông, tuy giới hạn về không gian nhưng vẫn muốn tạo khả năng chủ trì một bữa tiệc. Để đáp ứng nhu cầu đó, nhà thiết kể phải để mở toàn bộ không gian và sử dụng nội thất có thể dịch chuyển để dễ dàng tạo không gian tụ họp (karaoke) khi cần thiết. Tuy diện tích nhỏ nhưng có rất nhiều chỗ ngồi, không gian làm việc thoải mái và khu bếp ăn ấm cúng.\r\n\r\nCăn hộ thứ ba.\r\nVới căn hộ cuối cùng, sự đơn giản trong thiết kế tạo cảm giác gợi mở và dễ gần. Phong cách thiết kế phù hợp cho gia đình trẻ, sử dụng màu sắc sinh động, nội thất tươi vui cũng như ánh sáng tự nhiên làm cảm thấy chắc chắn con trẻ sẽ thích được ở đây.', 'img/canho.jpg', 'Admin', '2020-06-19', 7, 1),
(16, 'Top 3 studio chụp ảnh cưới đẹp nhất TPHCM', 'Ahihi Studio Ahihi Studio chuyên cung cấp các dịch vụ trang điểm cô dâu, cho thuê váy cưới, chụp hình cưới ngoại cảnh, chụp hình cưới hàn quốc,..', '1. Ahihi Studio\r\nAhihi Studio chuyên cung cấp các dịch vụ trang điểm cô dâu, cho thuê váy cưới, chụp hình cưới ngoại cảnh, chụp hình cưới hàn quốc, chụp hình cưới tại các phim trường.\r\nGiới thiệu\r\nAhihi là Studio chụp hình cưới đẹp và rẻ tại TPHCM. Với phong cách tận tình, chuyên nghiệp cam kết mang đến những bộ ảnh cưới đẹp lung linh cho tất cả các cặp đôi trước ngày cưới.\r\nAhihi Studio là một trong những studio hiếm hoi ở Sài Gòn có thể đáp ứng được nhiều phong cách cho những bộ ảnh. Từ những shot hình nhẹ nhàng mang phong cách Hàn Quốc đến những shot hình lãng mạn, ngọt ngào mang dấu ấn châu Âu đều được Studio này thể hiện một cách tuyệt vời nhất. Đặc biệt, đây là một trong những studio chụp hình cưới có mức giá rẻ nhất tại Sài Gòn, chắc chắn bạn sẽ hài lòng.\r\nKhông đi theo những concept ảnh cưới rập khuôn, Ahihi Studio luôn mang đến cho các cặp đôi những ý tưởng mới lạ.\r\nKhông chỉ vậy, những bức ảnh cưới của các cặp đôi khi được chụp tại Ahihi đều khiến người xem cảm nhận được sự chân thật, tình cảm của họ muốn thể hiện trong bức ảnh.\r\nAhihi có thể đáp ứng được nhiều phong cách chụp, hình thức chụp khác nhau nên bạn có thể yên tâm rằng bộ ảnh cưới của bạn sẽ luôn độc đáo và không lo đụng hàng với các cặp đôi khác nhé.\r\n\r\nThông tin liên hệ\r\nĐịa chỉ: 150 đường Hồ Văn Huê Phường 9, Quận Phú Nhuận, TPHCM\r\nSĐT: 0978880150\r\nEmail: ahihistudiovn@gmail.com\r\nWebsite: https://ahihistudio.vn\r\nFacebook: https://www.facebook.com/AhihiStudioVN\r\nGiá tham khảo\r\nGói chụp ngoại cảnh Hồ Cốc — Vũng Tàu: 7,500,000đ. Miễn phí chụp ảnh cưới Hồ Cốc — Vũng Tàu (không giới hạn địa điểm chụp. Studio thanh toán chi phí đi lại trong ngày chụp.)\r\nGói chụp ngoại cảnh Sài Gòn: 5,500,000đ. Miễn phí chụp ảnh cưới ngoại cảnh Sài Gòn (không giới hạn địa điểm chụp). Miễn phí trang điểm + làm tóc trong suốt quá trình chụp ảnh\r\nGói chụp phim trường Paris: 5,900,000đ. Miễn phí chụp ảnh cưới tại phim trường Paris. Studio thanh toán chi phí đi lại + vé vào cổng.\r\nGói chụp phim trường L’amour, Cabin 69: 4,900,000đ. Miễn phí chụp ảnh cưới tại phim trường Lamour, Cabin 69 Q9. Studio thanh toán chi phí đi lại + vé vào cổng\r\nGói chụp phim trường Alibaba: 3,900,000đ. Miễn phí chụp ảnh cưới tại phim trường Alibaba 01 buổi. Studio thanh toán chi phí đi lại + vé vào cổng\r\nGói chụp Studio Hàn Quốc của Ahihi Studio : 2,900,000đ\r\nGói Ảnh cưới ghi dấu ngày chung đôi: 3,900,000đ.\r\nNhận ngay 2 ảnh cổng (60X90) với hợp đồng từ 4.900.000đ\r\nChi Tiết Ngày Chụp\r\n✅ 3 Áo soiree cao cấp cho cô dâu\r\n✅ 3 Bộ vest cao cấp cho chú rể\r\n✅ 1 Bộ áo dài/ 1 bộ hỷ phục/ 1 bộ đồ tự do\r\n✅ 2 Bó hoa vải cao cấp cầm tay\r\n✅ Makeup, làm tóc thay đổi theo trang phục dâu rể, hoa cầm tay + phụ kiện đi kèm.\r\n✅ Hộp giấy chống sốc, chống trầy xước thời trang đựng ảnh cổng.\r\n✅ Giảm ngay 1.000.000 đồng khi đăng kí trọn gói chụp hình cưới + ngày cưới.\r\nQuà tặng từ Ahihi Studio\r\n🎁 1 Album size (25×25) hoặc (20×30) 30 Trang chất liệu Photobook công nghệ Hàn Quốc cao cấp nhất hiện nay\r\n🎁 2 Hình cổng lớn laminate cao cấp ép gỗ (60×90) rất đẹp ngày cưới\r\n🎁 10 Ảnh để bàn ép lụa (13×18)\r\n🎁 Túi xách đựng Album cao cấp\r\n🎁 Slide trình chiếu nhà hàng chất lượng cao\r\n🎁 File ảnh đã chỉnh sửa, file gốc\r\n🎁 Phí đã bao gồm Photographer + Stylist + Xe di chuyển và Vé vào cổng.\r\n🎁 Tặng hỷ phục ngày chụp.\r\n🎁 Tặng áo dài ăn hỏi\r\nNOTE : Bạn có thể chụp vào tháng 9, 10, 11….nhanh tay inbox để biết thêm thông tin về chương trình khuyến mãi !\r\nCam kết không phát sinh thêm bất cứ chi phí nào khác.\r\n\r\n2. Shady Bridal\r\nShady Bridal không chỉ được rất nhiều các bạn trẻ trong và ngoài nước yêu thích, mà còn được rất nhiều các tập đoàn lớn mời làm đơn vị hợp tác và tài trợ chụp ảnh với phương châm “chụp ảnh cưới rẻ”.\r\nNếu bạn vẫn đang phân vân không biết chụp hình cưới ở đâu đẹp, thì Shady Bridal có thể là một lựa chọn bạn nên cân nhắc. Shady Bridal được đánh giá là một trong những studio được nhiều bạn trẻ yêu thích.\r\nĐến với Shady Bridal các cặp uyên ương sẽ được sở hữu những album cưới mang màu sắc sang trọng nhưng vẫn trẻ trung, lãng mạn.\r\nThông tin liên hệ\r\nĐịa chỉ: 1B, Nguyễn Thượng Hiền, P.5, Q.Bình Thạnh, Hồ Chí Minh.\r\nSĐT: 090 648 5659–0336 285 979‬\r\nEmail: Shadybridal2008@gmail.com\r\nWebsite: shady.vn\r\nGiá tham khảo\r\nGói Chụp ảnh cưới Đà Lạt: 14,900,000đ. Không bao gồm ăn uống + Vé phí dịch vụ. Thêm 1 ngày chụp + 5,000,000đ.\r\nGói Chụp ảnh cưới Đà Nẵng — Hội An: 18,000,000đ. Không bao gồm vé máy bay, ăn uống, khách sạn + vé phí dịch vụ địa điểm chụp hình.\r\nGói Chụp Ảnh Cưới Mộc Châu — Hà Giang: 15,000,000đ. Miễn phí xe di chuyển trong ngày chụp + vé phí dịch vụ. Khách hàng tự lo vé những địa điểm chụp di chuyển bằng máy bay\r\nGói Chụp Ảnh Cưới Nội Thành Sài Gòn: 8,500,000đ. Không bao gồm ăn uống + Vé phí dịch vụ.\r\nGói Chụp Ảnh Cưới Phú Quốc: 15,000,000đ. Miễn phí xe di chuyển trong ngày chụp + vé phí dịch vụ. Khách hàng tự lo vé những địa điểm chụp di chuyển bằng máy bay\r\nGói Chụp Ảnh Cưới Lý Sơn: 15,000,000đ. Miễn phí xe di chuyển trong ngày chụp + vé phí dịch vụ. Khách hàng tự lo vé những địa điểm chụp di chuyển bằng máy bay\r\nƯu đãi từ Shady Bridal\r\nGIẢM NGAY 20% tất cả các gói chụp. Đặc biệt, mùa cưới đang đến gần, Shady Bridal có rất nhiều ưu đãi khủng, tri ân khách hàng.\r\n✅ Dòng váy cưới tiết kiệm\r\n🎁 Đồng Giá 2,000,000 vnđ\r\n✅ Dòng váy cưới cơ bản\r\n🎁 Đồng Giá 4,000,000 vnđ\r\n🎁 Khi thuê được mượn kèm 01 áo dài ăn hỏi cao cấp\r\n✅ Dòng váy cưới cao cấp\r\n🎁 Đồng Giá : 7,000,000 vnd\r\n🎁 Khi thuê váy bạn được TẶNG NGAY 01 lần trang điểm cô dâu ( giá trang điểm tại cửa hàng ).\r\n✅ May váy cưới thiết kế riêng theo số đo chỉ từ 5,000,000 vnđ\r\n\r\n3. TuArt Wedding\r\nHơn 7 năm hoạt động trong lĩnh vực chụp ảnh cưới, TuArt Wedding đã và đang phát triển với hệ thống chi nhánh toàn quốc trải dài từ Bắc vào Nam, với hơn 300 nhân sự bao gồm nhiếp ảnh gia chuyên nghiệp, make-up artist nổi tiếng và đội ngũ designer với công nghệ blend màu độc quyền.\r\nGiới thiệu\r\nTuArt Wedding chính thức khai trương vào ngày 17.09.2012 tại Tầng 3, số 481 Kim Mã, Ba Đình, Hà Nội. Trong căn phòng vẻn vẹn 25m2, họ đã có cơ hội đem những hình ảnh tinh tế với tiêu chí khắt khe nhất tới các cặp uyên ương trên toàn lãnh thổ Việt Nam: Hà Nội, Mộc Châu, Ba Vì, Tam Đảo, Vân Đồn, Đà Nẵng, Nha Trang, Phan Thiết, Hồ Chí Minh, Cần Thơ… và rất nhiều lần được mời đi chụp tại Pháp, Ý, Hà Lan, Hy Lạp (Thiên đường chụp ảnh cưới trên thế giới).\r\nMột trong những điểm thú vị khi lựa chọn chụp ảnh cưới tại TuArt Wedding chính là bạn sẽ được trải nghiệm hệ sinh thái All in One thú vị với nhiều dịch vụ đa dạng như cung cấp váy cưới cao cấp, chụp ảnh phim trường, chụp ảnh ngoại cảnh, chụp ảnh studio, xưởng in và học viện đào tào.\r\nTuArt sử dụng ánh sáng, bố cục ấn tượng; góc chụp sáng tạo cùng công nghệ Blend màu độc quyền nên những shoot hình cưới của TuArt rất tự nhiên, khác biệt, bộc lộ được hết những cung bậc cảm xúc của các cặp cô dâu chú rể.\r\nThông tin liên hệ\r\nĐịa chỉ: 147 -149 Hồ Văn Huê, Phường 9, Quận Phú Nhuận, TP.HCM, Hồ Chí Minh\r\nSĐT: 0888 696 888\r\nWebsite: tuart.net\r\nGiá tham khảo\r\nChụp ảnh cưới Đà Lạt\r\nGói Album Đà Lạt — Silver: 8,500,000đ\r\nGói Album Đà Lạt — Golden: 9,860,000đ\r\nGói Album Đà Lạt — Paris Dream: 11,860,000đ\r\nGói Album Đà Lạt — Red Diamond: 13,860,000đ\r\nGói Album Đà Lạt — Blue Diamond: 15,900,00đ\r\nGói Album Đà Lạt — Elegant Lighting VI: 21,860,000đ\r\nGói Album Đà Lạt — Elegant Lighting VII: 23,860,000đ\r\nChụp ảnh cưới TPHCM\r\nGói Album TP. Hồ Chí Minh — Silver: 8,500,000đ\r\nGói Album TP. Hồ Chí Minh — Golden: 9,860,000đ\r\nGói Album TP. Hồ Chí Minh — Paris Dream: 11,860,000đ\r\nGói Album TP. Hồ Chí Minh — Red Diamond: 13,860,000đ\r\nGói Album TP. Hồ Chí Minh — Blue Diamond: 15,900,00đ\r\nGói Album TP. Hồ Chí Minh — Elegant Lighting IV: 21,860,000đ\r\nChụp ảnh cưới tại các địa điểm thuộc khu vực miền Bắc\r\nGói Album Centurion I: 40,000,000đ\r\nChụp ảnh cưới tại các địa điểm thuộc khu vực miền Trung\r\nGói Album Centurion II: 40,000,000đ\r\nChụp ảnh cưới tại các địa điểm thuộc khu vực miền Nam\r\nGói Album Centurion III: 40,000,000đ', 'img/studio.jpg', 'Admin', '2020-06-19', 8, 1),
(17, 'Kinh nghiệm lựa chọn các nhà hàng tiệc cưới tại Hồ Chí Minh', 'Trung tâm nhà hàng tiệc cưới Diamond Place:Nhà hàng tiệc cưới Diamond Place là một trung tâm tổ chức tiệc cưới lớn và nổi tiếng tại HCM...', 'Trung tâm nhà hàng tiệc cưới Diamond Place:\r\n\r\nNhà hàng tiệc cưới Diamond Place là một trung tâm tổ chức tiệc cưới lớn và nổi tiếng tại HCM.\r\n\r\nDiamond Place có 2 chi nhánh tại hcm: Quận Phú Nhuận và  Tân Bình.\r\nVề vị trí:\r\n\r\nVị trí dễ tìm vì nhà hàng nằm ngay mặt tiền. Nhà hàng Diamond Place có diện tích rất rộng kèm theo đó là một tầng hầm gửi xe lớn.\r\n\r\nBên trong nhà hàng tiệc cưới Diamond Place có gì?\r\n\r\nHiện nhà hàng tiệc cưới Diamond Place mọi sảnh tiệc của nhà hàng đều đi theo một phong cách thống nhất đó là sự sang trọng và tinh tế. Ngay cách đặt tên sảnh thôi, bạn đã thấy ngay sự sang trọng của nó bởi vì đó là tên những viên đá quý bật nhất thế giới.\r\n\r\nHiện mỗi sảnh tiệc có sức chứa khác nhau, từ vài trăm khách mời đến vài ngàn khách, nhằm đáp ứng được mọi yêu cầu của bạn.\r\n\r\nVề món ăn:\r\n\r\nNhà hàng tiệc cưới Diamond Place không chỉ là một nhà hàng nổi tiếng về vẻ đẹp, nổi tiếng về sự sang trọng mà còn là một trong những nhà hàng nằm “top” những nhà hàng có món ăn ngon nhất vì các điều sau đây:\r\n\r\nThứ nhất nhà hàng sở hữu cho mình một đội ngũ đầu bếp chuyên nghiệp, giàu kinh nghiệm, và rất nhiều trong số họ đã từng làm trong những nhà hàng 5 sao có tiếng tại TPHCM.\r\n\r\nThứ hai nhà hàng có một phong cách ẩm thực hết sức độ đáo, là một nét pha trộn giữa ẩm thực Á – Âu, giữa truyền thống – hiện đại, từ đó tạo nên 200 món ăn đa dạng và ẩm thực, đa dạng về cách bài trí.\r\n\r\nThứ ba nguyên liệu của nhà hàng luôn đảm bảo độ tươi ngon.\r\n\r\nBên cạnh đó nhà hàng còn có những mẫu thực đơn hết sức hấp dẫn với giá thành rất phải chăng, bạn có thể tự do lên một thực đơn thật ấn tượng với sự tư vấn của chuyên viên và góp ý từ đầu bếp của nhà hàng.\r\n\r\nVề phong cách phục vụ tiệc cưới:\r\n\r\nMỗi nhân viên phục vụ tại đây đã được đào tạo rất bài bản và chuyên nghiệp, chu đáo đáp ứng mọi yêu cầu của khách mời một cách tốt.\r\nNhà hàng tiệc cưới Capella Park View:\r\n\r\nĐịa chỉ: Đặng Văn Sâm, Phường 9, Quận Phú Nhuận, HCM.\r\n\r\nSảnh tiệc rộng rãi sức chứa lớn, hệ thống âm thanh ánh sáng hiện đại mang lại trãi nghiệm tốt nhất.\r\n\r\nNhà hàng tiệc cưới White Palace:\r\n\r\nĐịa chỉ: Hoàng Văn Thụ, Phường 9, Quận Phú Nhuận, HCM.\r\n\r\nBạn là người thích sự tinh tế tối giản, thì đây chính là nơi dành cho bạn nhà hàng cũng như các sảnh tiệc đều chung một tông màu chủ đạo là màu trắng.\r\n\r\nTrung tâm tiệc cưới Kalina:\r\n\r\nĐịa chỉ: Bờ Bao Tân Thắng, Phường Sơn Kỳ ,Quận Tân Phú, HCM.\r\n\r\nVới không gian ấm cúng, màu sắc hiện đại những sảnh tiệc tại đây rất thíc hợp cho các tiệc cưới có quy mổ nhỏ.\r\n\r\nTrung tâm tiệc cưới Melisa Center:\r\n\r\nĐịa chỉ: Thoại Ngọc Hầu, Phường  Hòa Thạnh , Quận Tân Phú, HCM.\r\n\r\nTại nhà hàng có nhiều sảnh tiệc lớn nhỏ giúp bạn dễ dàng lựa chọn theo yêu cầu của mình,  nhiều thực đơn tiệc cưới hấp dẫn đa dạng.\r\n\r\nNhà hàng tiệc cưới Bạch Kim:\r\n\r\nĐịa chỉ: Âu Cơ,  Phường Phú Trung,  Quận Tân Phú, HCM.\r\n\r\nTrang thiết bị Âm Thanh, Ánh Sáng hiện đại được đầu tư kỹ lướng, Nhân viên phục vụ tại đây được đào tạo chuyên môn nghiệp vụ với tác phong làm việc chuyên nghiệp.\r\n\r\nTrung Tâm tiệc cưới Aqua Palace:\r\n\r\nĐịa chỉ: Nơ Trang Long, Phường 13, Quận Bình Thạnh, HCM.\r\n\r\nVới nhiều ưu đãi hấp dẫn tại nhà hàng tiệc cưới này sẽ giúp bạn tiết kiệm được một ít chi phí trong đám cưới của mình.\r\n\r\nTrung tâm tiệc cưới Vườn Cau:\r\n\r\nĐịa chỉ: Phan Văn Trị, Phường 11 , Quận Bình Thạnh, HCM.\r\n\r\nDiện tích sử dụng lớn kết hợp với không gian mở tiệc cưới ngoài trời, chắc chắn đám cưới của bạn sẽ vô cung thú vị.\r\n\r\nTrung tâm tiệc cưới Mimi Palace:\r\n\r\nĐịa chỉ: Đường Bình Quới, Phường 27, Quận Bình Thạnh, HCM.\r\n\r\nĐây là một tỏng số ít nhà hàng tiệc cưới có tổ chức tiệc cưới ban đêm ngoài trời.\r\n\r\nNhà hàng tiệc cưới Thịnh Phước:\r\n\r\nĐịa chỉ: Nguyễn Thị Tú, Phường Bình Hưng Hòa, Quận Bình Tân, HCM.\r\n\r\nKhông gian sảnh tiệc trang trọng, các nghi lễ khai mạc tiệc cưới được chuẩn bị kỹ lưỡng, tại đây bạn sẽ có những dấu ấn cho ngày trọng đại của mình.\r\n\r\nTrung tâm tiệc cưới Fenix Palace:\r\n\r\nĐịa chỉ: Lê Văn Quới , P. Bình Trị Đông, Quận Bình Tân, HCM.\r\n\r\nCác sảnh tiệc tại nhà hàng được đầu tư kỹ càng với các trang bị hiện đại nhất, thực đơn món ăn tiệc cưới ngon đa dạng.\r\n\r\nTrung tâm tiệc  cưới Đại Hỷ Garden:\r\n\r\nĐịa chỉ: Nguyễn Cửu Phú, Phường Tân Tạo A, Quận Bình Tân, HCM.\r\n\r\nTuy không có kiến trúc hay tông màu chủ đạo, nhưng từng sảnh tiệc tại đây đề có đường nét thiết kê riêng biệt phù hợp cho sở thích của nhiều người.\r\n\r\nNhà Hàng Tiệc Cưới Trâm Anh:\r\n\r\nĐịa chỉ: Quốc Lộ 22, Phường Trung Mỹ Tây, Quận 12, HCM.\r\n\r\nNhà hàng phục vụ Lễ cưới, kết hợp hài hòa truyền thống dân tộc cùng nét hiện đại. Nhiều nghi lễ đặc sắc cùng với các chương trình khuyến mãi.\r\n\r\nTrung tâm tiệc cưới The White House Wedding:\r\n\r\nĐịa chỉ: Tô Ký, Phường Tân Chánh Hiệp , Quận 12, HCM.\r\n\r\nKhuôn viên rộng nhiều cảnh đẹp, các sảnh tiệc được trang trí tinh tế tối giản đem lại một cảm giác vô cùng đặc biệt khi bước vào nhà hàng.\r\n\r\nNhà hàng tiệc cưới Ngọc Trâm:\r\n\r\nĐịa chỉ: Nguyễn Văn Quá, Phường Đông Hưng Thuận, Quận 12, HCM.\r\n\r\nĐội ngũ nhân viên chuyên nghiệp, nhiệt tình. Không Gian rộng rãi thoáng mát chính là đểm nổi bật của nhà hàng.\r\n\r\nNhà hàng tiệc cưới Riverside Palace:\r\n\r\nĐịa chỉ: Bến Vân Đồn, Phường 1, Quận 4, HCM.\r\n\r\nSảnh tiệc sang trọng hiện đại mang phong cách Châu Âu, món ăn chủ yếu là món ăn phương Tây nên bạn hay cân nhắc trước khi tổ chức tiệc cưới tại đây.\r\n\r\nNhà hàng tiệc cưới Du thuyền Saigon Princess – Unique Fine Dining River Cruise:\r\n\r\nĐịa chỉ: Cảng Nhà Rồng, 05 Nguyễn Tất Thành, Quận 4, HCM.\r\n\r\nĐám cưới trên du thuyền một sự trãi nghiệm mới, nếu bạn có dư dã về kinh phí tổ chức tiêc cưới tại sao không trải nghiệm dịch vụ đặc biệt này.\r\n\r\nTrung tâm tiệc cưới Hoàng Hải:\r\n\r\nĐịa chỉ: Nguyễn Tất Thành , Phường 12 , Quận 4, HCM.\r\n\r\nNghệ thuật ẩm thực và sự sáng tạo trong phong cách tổ chức tiệc cưới, chính là thế mạnh của nhà hàng.\r\n\r\nTrung tâm tiệc cưới Bách Việt:\r\n\r\nĐịa chỉ: Mạc Đĩnh Chi, phường Đa Kao, Quận 1, HCM.\r\n\r\nNhiều năm kinh nghiệm dịch vụ tổ chức tiệc cưới, tại đây bạn sẽ có cảm giác thăng hoa nhất trong ngày quan trọng này.\r\n\r\nTrung tâm tiệc cưới Hạnh Phúc:\r\n\r\nĐịa chỉ: Phùng Khắc Khoan, Phường  Bến Nghé, Quận 1, HCM.\r\n\r\nNhà hàng có nhiều ưu đãi và dịch vụ, uy tín, chất lượng chuyên nghiệp, giá rẻ.\r\n\r\nNhà hàng tiệc cưới Liberty Central Saigon Citypoint:\r\n\r\nĐịa chỉ: Pasteur, Phường Bến Nghé , Quận 1, HCM.\r\n\r\nKhông gian tiệc cưới rộng rãi và được trang bị đầy đủ công nghệ âm thanh sáng hiện đại.\r\n\r\nBên trên là top 20+ nhà hàng tiệc cưới tốt nhất tại tphcm, sau đây mình sẽ chỉa sẻ đến bạn những công việc cần chuẩn bị khi tổ chức tiệc cưới.\r\n\r\n2. Kinh nghiệm tổ chức tiệc cưới hoàn hảo từ A-Z cho các cặp đôi\r\nNhững công việc cần chuẩn bị trước khi tổ chức một đám cưới hoàn hảo:\r\n\r\nĐể đám cưới được diễn ra một cách “trọn vẹn” không gặp bất kỳ vấn đề gì thì khâu chuẩn bị là quan trọng nhất. Nhưng cần chuẩn bị những gì? Phải làm những gì? Thì ngay đây Diamond Place đã có 1 danh sách những công việc cần chuẩn bị trước ngày cưới:\r\n\r\n– Chọn ngày tốt cho tiệc cưới.\r\n\r\n– Lên danh sách nhưng chi phí khi tổ chức tiệc cưới.\r\n\r\n– Lên danh sách khách mời.\r\n\r\n– Chọn mẫu và in thiệp.\r\n\r\n– Chọn một đội ngũ studio chuyên nghiệp, chụp ảnh cưới.\r\n\r\n– Đặt tiệc, chọn trung tâm nhà hàng tiệc cưới phù hợp.\r\n\r\nNhững tiêu chí để chọn một nhà hàng tổ chức tiệc cưới hoàn hảo:\r\n\r\nMột đám cưới có thành công hay không, có trọn vẹn và ghi lại một dấu ấn kỷ niệm không bao giờ quên cho cô dâu – chú rể hay không tất cả đều phải có yếu tổ quyết định đó chính là một trung tâm nhà hàng tiệc cưới phù hợp.\r\n\r\n – Vị trí của nhà hàng tiệc cưới:\r\n\r\nHãy chọn một nhà hàng có vị trí thuận lợi, dễ dàng di chuyển, thuận tiện cho việc đi lại của gia đình hai bên và cả khách mời.\r\n\r\nNhà hàng đó phải nằm ở trung tâm hcm dễ tìm, nếu có thế tìm được trên “google map” thì càng tốt.\r\n\r\nNhà hàng phải có khuôn viên và hầm giữ xe rộng rãi.\r\n\r\n– Tiêu chí về sảnh tiệc của trung tâm nhà hàng tiệc cưới:\r\n\r\nChọn một nơi đãi tiệc với nội thất, kiến trúc đẹp sẽ khiến uyên ương không phải chi quá nhiều tiền cho trang trí. Sảnh tiệc đẹp sẵn giúp không khí đám cưới sang trọng hơn.\r\n\r\n– Hệ thống âm thanh, ánh sáng của nhà hàng tiệc cưới:\r\n\r\nĐôi uyên ương cần lưu ý đến các chi tiết quan trọng khi chọn sảnh đãi tiệc như âm thanh, ánh sáng và sân khấu. Đây cũng là những điều góp phần làm nên thành công cho tiệc cưới.\r\n\r\n– Tiêu chí về chọn thực đơn cho tiệc cưới:\r\n\r\nThực đơn cũng là một yếu tố không thể thiếu. Khi bạn đem đến cho khách mời những món ăn ngon thì điều đó cũng có nghĩa là bạn đang gửi lời cảm ơn chân thành nhất đến từng vị khách mời của bạn.\r\n\r\nTùy theo phong cách ẩm thực mà bạn chọn nhà hàng tổ chức tiệc, có những nhà hàng chỉ chuyên phục vụ những món ăn Âu và có những nhà hàng phục vụ thực đơn món Á hoặc Âu.\r\n\r\n– Phong cách phục vụ của nhân viên nhà hàng tiệc cưới: \r\n\r\nNhân viên phục vụ và tác phong làm việc của họ chính là bộ mặt đại diện cho nhà hàng đó. Một trung tâm tiệc cưới chuyên nghiệp là phải có một đội ngũ quản lý, nhân viên phục vụ đã được đào tạo bài bản, làm việc chuyên nghiệp, nhanh nhẹn, chú đáo, quan tâm tới từng vị khách trong bàn tiệc, ứng xử tình huống linh động.', 'img/nhahangtieccuoi.jpg', 'Admin', '2020-06-20', 9, 1),
(18, '“Sang trọng bậc nhất” với top 5 nhà hàng tiệc cưới cao cấp tại TP.HCM', ' White Palace White Palace được biết đến là một trung tâm hội nghị và tiệc cưới sang trọng bật nhất ở Sài Thành. Khoát lên mình tông màu trắng chủ đạo đầy hiện đại...', '1. White Palace\r\nWhite Palace được biết đến là một trung tâm hội nghị và tiệc cưới sang trọng bật nhất ở Sài Thành. Khoát lên mình tông màu trắng chủ đạo đầy hiện đại, White Palace đã mở ra một không gian giao hoà giữa thiên nhiên và nghệ thuật. Khi bước vào tiền sảnh, chắc chắn bạn sẽ bị “hớp hồn” với mái vòng cung trắng muốt nhiều tầng vừa trang nhãn lại không kém phần tinh tế. Về đêm White Palace càng rực rỡ, lung linh hơn với ánh đèn chùm lộng lẫy hoà vào nhịp chuyển sôi động của thành phố.\r\nKhông chỉ nổi tiếng về lối kiến trúc “siêu đẹp” và khoáng đạt, White Palace còn được nhiều khách hàng ưu thích bởi cung cách phục vụ chuyên nghiệp. Tham khảo các trang review nhà hàng tiệc cưới, White Place được đánh giá khá cao (thang điểm 8/10). Hầu hết các khách mời khi dự tiệc cưới được tổ chức tại đây đều đồng ý rằng: không gian được decor đẹp, đồ ăn khá ngon và chất lượng. Đặc biệt, khách hàng cảm thấy hài lòng chỗ giữ xe rộng rãi, thoải mái và không tốn phí.\r\n\r\nDiện tích: 6500 m2 ( 4 đại sảnh rộng rãi)\r\nĐịa chỉ: 174 Hoàng Văn Thụ, phường 9, quận Phú Nhuận, TP.HCM\r\nWebsite: whitepalace.com.vn\r\nMức giá: 4.000.000 – 11.000.000 VNĐ/ bàn\r\n\r\n2. Riverside Palace\r\nRiverside Palace được biết đến là một nhà hàng tiệc cưới “đậm” nét phong cách Châu Âu với không gian phóng khoáng nhưng vẫn giữ được màu sắc ấm áp, thân mật. Các sảnh đại tiệc được thiết kế ngăn nhau bởi một tấm kính trong suốt cộng với ánh sáng êm dịu tạo không gian mở vừa hiện đại, thu hút lại tinh tế, không rườm rà. Bên cạnh đó, nhờ ứng dụng công nghệ LED vào tiệc cưới, Riverside Palace đã “thu hút” các cặp đôi bằng hiệu ứng hình ảnh ưu việt, ấn tượng.\r\nMột điểm cộng cho nhà hàng tiệc cưới này là vị trí thuận lợi, khá dễ tìm gần trung tâm thành phố. Theo một vài đánh giá từ các trang nhận xét về Riverside: không gian tiệc cưới rộng rãi, âm thanh ánh sáng tốt, phục vụ nhiệt tình, đồ ăn vừa miệng.\r\n\r\nDiện tích: 5000 m2 ( 9 sảnh yến tiệc)\r\nĐịa chỉ: 360D Bế Văn Đồn, phường 1, quận 4, TP.HCM\r\nWebsite: whitepalace.com.vn\r\nMức giá: từ 3.950.000 VNĐ/bàn\r\n\r\n3. Diamond Place Convention Center\r\nDiamond Place nổi tiếng với không gian được thiết kế sang trọng và chấm phá tinh tế mang hơi hướng lối kiến trúc Châu Âu độc đáo. Đến với Diamond Place bạn sẽ cảm thấy “choáng váng” với sảnh tiệc vô cùng rộng lớn, có sức chứa từ 200 – 2500 khách. Mỗi sảnh tiệc đều được decor theo phong cách riêng biệt và thay đổi theo chủ đề phù hợp với xu hướng hiện đại. Hiện tại, Diamond Place có hai chi nhánh ở TP.HCM. Nếu như chi nhánh Âu Cơ (Diamond Place II) nổi tiếng bởi đem đến sự hài hòng và giá cả hợp lí thì chi nhánh Hồ Văn Huê (Diamond Place) đem đến sự đẳng cấp và sang trọng hơn hẳn.\r\nDiamond Place được khách hàng đánh giá cao bởi ưu thế về thực đơn đa dạng. Thực đơn tiệc cưới ở đây là sự kết hợp giữa phong cách Á- Âu vừa hợp khẩu vị với người Việt lại không kém phần mới lạ.\r\n\r\nDiện tích: 4200 m2\r\nĐịa chỉ: 15A Hồ Văn Huê, phường 9, quận Phú Nhuận, TP.HCM\r\nWebsite: whitepalace.com.vn\r\nMức giá: từ 3.850.000 VNĐ/bàn\r\n\r\n4. Metropole\r\nMetropole được điều hành và phát triển bởi nhà quản lý của chuỗi khách sạn Liberty nổi tiếng. Vì vậy, không có gì phải quá ngạc nhiên với thiết kế theo trường phái tân cổ điển Châu Âu đầy “sa hoa”, lộng lẫy như một toà lâu đài lung linh của Metropole. Điều đặc biệt là 6 sảnh tiệc ở đây được thiết kế ứng với phong cách đặc trưng, độc đáo của các thành phố nổi tiếng : Paris, New York, Milan, Thượng Hải, Tokyo và Sài Gòn. Cặp đôi có thể chọn  sảnh tiệc cưới tuỳ theo sở thích và phong cách riêng của mình.\r\nVới đội ngũ nhân viên chuyên nghiệp cùng với thực đơn phong phú, đa dạng ẩm thực, Metropole được khách hàng dành những lời nói “có cánh” và đánh giá chất lượng phục vụ khá cao.\r\n\r\nDiện tích: trên 3000 m2\r\nĐịa chỉ: 216 Lý Chính Thắng, phường 9, quận 3, TP.HCM\r\nWebsite: metropole.com.vn\r\nMức giá: từ 4.650.000 VNĐ/bàn\r\n\r\n5. Capella Parkview\r\nCapella Parkview là một trong những trung tâm tiệc cưới khá nổi tiếng được nhiều cặp đôi “ưu ái” lựa chọn để tổ chức hôn lễ của mình. Không gian Capella Parkview lấy cảm hứng từ các ngôi sao tinh tú với 6 sảnh tiệc được đặt tên theo các vì sao và 2 ballroom thiết kế, tạo cảm giác rộng rãi, khoáng đạt. Bên cạnh đó, với hệ thống âm thanh và ánh sáng tân tiến nhất, Capell Parkview đem đến cho khách hàng một không gian tiệc cưới đầy màu sắc và không kém phần sang trọng.\r\n\r\nSự tài hoa và nét tinh tế trong ẩm thực cũng là một trong những điểm thu hút khách hàng tìm tới Capella Parkview.\r\n\r\nDiện tích: 4000 m2\r\nĐịa chỉ: 3 Đặng Văn Sâm, phường 9, quận Phú Nhuận, TP.HCM\r\nWebsite: capella-parkview.vn\r\nMức giá: từ 3.900.000 VNĐ/bàn', 'img/huong-pho0013.jpg', 'Admin', '2020-06-18', 9, 1),
(19, 'Top nhà hàng tiệc cưới tốt nhất tại Sài Gòn', 'Trung tâm Tiệc cưới - Hội nghị Âu Cơ .Trung tâm Tiệc cưới - Hội nghị Âu Cơ nổi bật với lối thiết kế kiến trúc hài hòa, sang trọng và hiện đại lại vừa rực rỡ và lịch lãm tựa như một cung điện nguy nga và thoáng đãng.....', 'Trung tâm Tiệc cưới - Hội nghị Âu Cơ\r\nTrung tâm Tiệc cưới - Hội nghị Âu Cơ nổi bật với lối thiết kế kiến trúc hài hòa, sang trọng và hiện đại lại vừa rực rỡ và lịch lãm tựa như một cung điện nguy nga và thoáng đãng. Bên cạnh đó là đội ngũ quản lý chuyên nghiệp cùng với rất nhiều nhân viên tư vấn cưới nhiệt tình, thân thiện mang đến cho các cặp đôi những giây phút hạnh phúc nhất, không bị bỡ ngỡ trong ngày trọng đại của cuộc đời.\r\n\r\n\r\nTrung tâm Tiệc cưới - Hội nghị Âu Cơ được thiết kế bao gồm 3 tầng lầu, 5 sảnh đãi tiệc, là nơi khá lý tưởng cho những bữa tiệc sang trọng đạm chất Châu Âu hiện đại. Hoặc là những bữa tiệc mang nét truyền thống Á Đông bên cạnh vẻ tráng lệ mà thoáng đãng của những căn phòng lộng lẫy ánh đèn. Nơi đây chính là \"thánh đường tình yêu\" lung linh khiến các cặp uyên ương thổn thức trong suốt thời gian qua.\r\n\r\n\r\nNhững đầu bếp tay nghề cao của Âu Cơ cũng luôn không ngừng tìm tòi học hỏi và sáng tạo những món ăn mới để tạo ra một \"phong vị\" ẩm thực riêng biệt, hợp khẩu vị nhiều người. Nhà hàng còn có một số món nổi bật như: Súp măng tây nấm đông cô, heo sữa quay, tôm cuộn thịt xông khói, mực hấp hồng, vị ăn ngon, bò nấu tiêu xanh - bánh mì, cơm chiên cẩm tú. Tất cả bảo đảm sẽ mang đến cho thực khách những giây phút thưởng thức ẩm thực ngon miệng nhất.\r\n\r\n\r\n\r\nTHÔNG TIN LIÊN HỆ:\r\n\r\nĐịa chỉ: 584, Âu Cơ, Quận Tân Bình, TP. Hồ Chí Minh\r\nSố điện thoại: (08) 6290.2222\r\nFanpage: https://www.facebook.com/aucogroup/\r\nWebsite: http://www.nhahangauco.com\r\n\r\nhà hàng tiệc cưới Saphire\r\nNhà hàng tiệc cưới Saphire là một nơi khá ấn tượng đối với nhiều người mà không phải nhà hàng tiệc cưới nào cũng có được tại đất Sài Gòn. Đội ngũ nhân viên nhiệt tình, chu đáo và sẵn sàng hỗ trợ mọi khó khăn mà khách hàng gặp phải. Tiêu chí duy nhất của nhà hàng tiệc cưới mang phong cách \"ấn tượng\" này là “khách hàng là Thượng Đế\".\r\n\r\n\r\nĐầu tiên là nhắc đến đài phun nước ở khuôn viên nhà hàng, là một địa điểm vô cùng lý tưởng để cho ra những bức ảnh đẹp ấn tượng. Thứ hai là tên của 5 sảnh tiệc: Pha lê, hồng ngọc, kim cương, bạch kim, ngọc trai. Điểm thú vị ở đây là mỗi sảnh tiệc được thiết kế, trang trí như chính tên gọi của nó. Ngoài hàng làng nổi bật với chùm đèn lộng lẫy, thảm hoa văn, voan ngoài đèn trên trần,... Tất cả điểm tô cho không gian Saphire càng thêm lộng lẫy, sang trọng và đầy mơ mộng.\r\n\r\n\r\nThực đơn nhà hàng không chỉ phong phú với các món ẩm thực mà còn có hải sản tươi sống vô cùng tươi ngon được chế biến dưới bàn tay khéo léo của đội ngũ đầu bếp giỏi tay nghề để tạo ra những món ăn đầy hấp dẫn.\r\n\r\n\r\n\r\nTHÔNG TIN LIÊN HỆ:\r\n\r\nĐịa chỉ: 526 Điện Biên Phủ, Phường 21, Quận Bình Thạnh, TP. Hồ Chí Minh\r\nSố điện thoại: (08) 5445 6699\r\nFanpage: https://www.facebook.com/NHSaphire\r\nWebsite: http://www.saphire.vn\r\n\r\nhà hàng tiệc cưới Grand Palace\r\nNhà hàng tiệc cưới Grand Palace nổi bật trên đường Cộng Hòa như một cung điện tráng lệ, sang trọng, lịch lãm và thu hút mọi ánh nhìn từ nhiều phía. Đó là một nhà hàng tiệc cưới được thiết kế theo phong cách Tây Phương, đẹp lộng lẫy. Nhà hàng có một đội ngũ nhân viên chuyên nghiệp, nhiệt tình, không chỉ xem việc phục vụ là nghĩa vụ mà còn coi đó là bữa tiệc của chính mình, hết lòng tận tụy.\r\n\r\n\r\nVới thiết kế theo phong cách phương Tây, nhà hàng tiệc cưới Grand Palace gồm 6 sảnh lớn được trang trí một cách tỉ mỉ, dù là chi tiết nhỏ nhất. Không gian sảnh trở lên rộng rãi bởi không có các cột che chắn tạo cho khách hàng một cảm giác thoải mái đặc biệt. Điểm đặc biệt các sảnh có thể điều chỉnh khá linh hoạt theo số lượng khách để căn phòng trở nên linh động và bắt mắt hơn. Cơ sở vật chất hiện đại, sang trọng, hệ thống âm thanh ánh sáng hiện đại.\r\n\r\n\r\nThực đơn nhà hàng phong phú, mỗi món ăn đều mang 1 hương vị rất riêng và đặc biệt cách trang trí cũng vô cùng đẹp mắt, đậm tính nghệ thuật. Chắc chắn rằng những món ăn đậm chất \"riêng\" này sẽ mang đến cho thực khách một bữa tiệc thú vị. Dành tặng sự hài lòng trong từng khoảnh khắc cho chủ tiệc cũng như sự thoải mái cho khách tham dự chính là những điều Grand Palace luôn hướng đến.\r\n\r\n\r\n\r\nTHÔNG TIN LIÊN HỆ:\r\n\r\nĐịa chỉ: 142/18 Cộng Hòa, Quận Tân Bình, TP. Hồ Chí Minh\r\nSố điện thoại: (08) 3811 8181\r\nFanpage: https://www.facebook.com/grandpalace.com.vn\r\nWebsite: www.grandpalace.com.vn\r\n\r\nNhà hàng tiệc cưới Đông Phương\r\nNhà hàng tiệc cưới Đông Phương nổi tiếng là chuỗi nhà hàng chuyên về tiệc cưới, hội nghị lớn nhất tại Sài Gòn và cũng là nhà hàng tiệc cưới luôn có số lượng sảnh tiệc lớn nhất tại Sài Gòn. Tất cả những thành công đó không chỉ nhờ vào lối thiết kế sang trọng mà còn một phần lớn công sức của đội ngũ nhân viên phục vụ năng động, ham học hỏi. Giá cả hợp lý. Vì vậy, không có gì quá đáng khi nói Đông Phương là nơi lý tưởng để tổ chức tiệc cưới, hội nghị, tiệc lớn…\r\n\r\n\r\nNhà hàng tiệc cưới Đông Phương bao gồm 30 sảnh được thiết kế hiện đại, sang trọng, lịch lãm cùng không rộng rãi, thoáng mát. Đến đây, khách hàng không chỉ được chiêm ngưỡng ngày lễ trọng đại của cặp đôi mà còn có được những giây phút ấm cúng và mơ mộng do không gian nhà hàng tiệc cưới mang lại. Bên cạnh đó, để phục vụ nhu cầu ngày càng cao của khách hàng, nhà hàng không ngừng cải tiến hệ thống ánh sáng, âm thanh theo xu hướng phát triển của thị trường.\r\n\r\n\r\nBên cạnh không gian tiệc tiện nghi, trang nhã, cùng phong cách phục vụ tận tình chu đáo thì thực đơn của Đông Phương cũng vô cùng phong phú. Cũng giống như nhiều nhà hàng khác, nơi đây mang đến rất nhiều sự lựa chọn bao gồm cả ẩm thực trong và ngoài nước với nhiều món ăn ngon, hấp dẫn với cách bày biện đẹp mắt, đảm bảo hài lòng thực khách.\r\n\r\n\r\n\r\nTHÔNG TIN LIÊN HỆ:\r\n\r\nĐịa chỉ: 431, Hoàng Văn Thụ, Quận Tân Bình, TP. Hồ Chí Minh\r\nSố điện thoại: (84) 8 3811 3206\r\nWebsite: http://nhahangdongphuong.vn/\r\n\r\nNhà hàng Phố Nướng Đệ Nhất\r\nCái tên tiếp theo mà các cô dâu chú rể nên dành chút thời gian để tham khảo chính là Nhà hàng Phố Nướng Đệ Nhất. Đây chính là nơi luôn khiến thực khách phải vấn vương bởi khung cảnh thoáng đãng, hữu tình. Đội ngũ nhân viên năng động, nhiệt tình, hết lòng vì công việc. Do vậy, Phố Nướng Đệ Nhất không chỉ là địa điểm dừng chân đầy thú vị cho cả gia đình và người thân mà còn là một trong những nơi tổ chức tiệc cưới tốt nhất tại đất Sài Gòn.\r\n\r\n\r\n\r\nNhà hàng Phố Nướng Đệ Nhất nổi bật với lối thiết kế đầy ngẫu hứng, kết hợp hài hòa giữa phong cách hiện đại pha chút mộc mạc của gỗ làm không gian trở nên thân thiện và thoáng đãng. Một hồ bơi xanh mát với đầy đủ những dịch vụ tiện ích khác nhau: khách sạn, sân quần vợt, hồ bơi, thác nước, nhà sàn và cây cối thiên nhiên,… Tất cả đã tạo nên một địa điểm vô cùng tuyệt vời để làm hài lòng mọi khách hàng.\r\n\r\n\r\nDĩ nhiên, ẩm thực chắc chắn cũng là một yếu tố quan trọng để làm nên sức hấp dẫn của Phố Nướng Đệ Nhất. Thực đơn nổi bật nhất của nhà hàng là sự phong phú các món nướng, hải sản tươi sống. Bên cạnh đó, các món ăn đặc sắc mang đậm hương vị của cả 3 miền Bắc – Trung – Nam cũng khá nổi trội, nhất là các món hải sản, lẩu.\r\n\r\n\r\n\r\nTHÔNG TIN LIÊN HỆ:\r\n\r\nĐịa chỉ: 21 Hoàng Việt, phường 4, Quận Tân Bình, TP. Hồ Chí Minh\r\nSố điện thoại: (028) 3846 2944\r\nFanpage: https://www.facebook.com/FirstGrill/\r\n\r\nNhà hàng tiệc cưới Bạch Kim\r\nNhà hàng tiệc cưới Bạch Kim luôn nổi bật với phong cách thiết kế theo kiểu Châu Âu, tôn lên vẻ sang trọng, đẳng cấp nhưng lại rất chuyên biệt. Dịch vụ hấp dẫn mà giá cả rất phải chăng. Để nâng cao chất lượng, nhà hàng tiệc cưới Bạch Kim không ngừng đầu tư đổi mới theo xu hướng phát triển của xã hội nhằm mang lại cho khách hàng những buổi tiệc sang trọng và ý nghĩa nhất. Vì vậy, có thể nói đây là địa điểm vô cùng lý tưởng để tổ chức tiệc cưới, tiệc, hội nghị, những sự kiện quan trọng với quy mô lớn.\r\n\r\n\r\nNhà hàng nổi bật với khuôn viên rộng lớn, diện tích hơn 600 mét vuông. Nhà hàng gồm 7 sảnh tiệc cưới. Khi đó, các sảnh được trang trí theo từng lối kiến trúc khác, dù là một chi tiết rất nhỏ nhưng vẫn chung một màu chủ đạo làm nổi bật lên nét đẹp riêng biệt. Với kiến trúc sang trọng, hệ thống âm thanh, anh sáng, màn hình LED hiện đại, chắc chắn sẽ mang đến một lễ cưới tuyệt vời cho các cô dâu, chú rể.\r\n\r\n\r\nThực đơn của nhà hàng Bạch Kim phong phú và đa dạng với nhiều món hấp dẫn như: Gỏi hải sản - nghêu chiên giòn, soup Bích Ngọc, cá chẽm sốt chua ngọt, rau câu,... đo đội ngũ đầu bếp tay nghề cao chế biến, là điểm đến vô cùng lý tưởng cho thực khách.\r\n\r\n\r\n\r\nTHÔNG TIN LIÊN HỆ:\r\n\r\nĐịa chỉ: 579 Âu Cơ, Phường Phú Trung, Quận Tân Phú, TP. Hồ Chí Minh\r\nSố điện thoại: (028 - 3860 3388 - 3860 3399\r\nFanpage: https://www.facebook.com/NhaHangBachKim\r\nWebsite: http://nhahangbachkim.com.vn\r\n\r\nNhà hàng tiệc cưới Aqua Palace\r\nTrong những năm gần đây, mặc dù có rất nhiều địa điểm tổ chức tiệc cưới được mở ra trên địa bàn TP.HCM, tuy nhiên Nhà hàng tiệc cưới Aqua Palace chính là cái tên cuối cùng lọt vào top những nhà hàng tiệc cưới tốt nhất. Đây sẽ là chiếc cầu nối đáng tin cậy để cô dâu, chú rể chính thức nên duyên vợ chồng bằng một tiệc cưới độc đáo và sáng tạo. Ở Aqua Palace, bạn hoàn toàn có thể đưa ra ý tưởng cho ngày trọng đại của mình, và đội ngũ tư vấn sáng tạo và đội ngũ tổ chức người giàu kinh nghiệm luôn sẵn sàng biến điều bạn muốn thành hiện thực.\r\n\r\n\r\n\r\nAqua Palace thường được khách hàng gọi là \"đám cưới xanh\" bởi lẽ bắt nguồn từ cảm hứng của các tiệc tại các nước châu Âu, châu Mỹ và Nhật Bản, đó là những đám cưới ngoài trời hay tiệc cưới sân vườn, nơi đây đã sẵn sàng đầu tư trang trí phần lớn nhà hàng bằng các mảng xanh thiên nhiên ở từng góc nhỏ nhất và chăm chút kỹ lưỡng hằng ngày. Nét độc đáo này giúp các cặp đôi tận hưởng những giây phút thiêng liêng nhất trong một không gian mở khác lạ gần gũi mà vẫn đảm bảo điều kiện dự tiệc cho khách mời với số lượng lớn và thời tiết thất thường tại TP. Hồ Chí Minh.\r\n\r\n\r\n\r\nĐể tạo nên sự hoàn hảo cho mỗi bữa tiệc thì ẩm thực là yếu tố không thể thiếu. Thấu hiểu được điều này, đội ngũ đầu bếp của Aqua Palace luôn cố gắng làm mới thực đơn cả về số lượng và chất lượng. Sự kết hợp của ẩm thực Việt Nam cùng với những món đặc sắc của ẩm thực Á - Âu chắc chắn sẽ khiến bạn nhớ mãi về tiệc cưới đặc sắc này.\r\n\r\n\r\n\r\nTHÔNG TIN LIÊN HỆ:\r\n\r\nĐịa chỉ: 90 Mạc Đĩnh Chi, P. Đakao, Q.1, TP. HCM\r\nSố điện thoại: 0945 33 06 06\r\nFanpage: https://www.facebook.com/bachvietwedding\r\nWebsite: http://bachviet.com.vn/', 'img/nha-hang-tiec-cuoi-cao-cap-tai-TP.HCM9_-1.jpg', 'Admin', '2020-06-17', 9, 1),
(20, 'Yêu hay không yêu', 'Yêu hay không yêuYêu hay không yêuYêu hay không yêuYêu hay không yêuYêu hay không yêuYêu hay không yêuYêu hay không yêuYêu hay không yêuYêu hay không yêuYêu hay không yêu', '<p>Y&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;uY&ecirc;u hay kh&ocirc;ng y&ecirc;u</p>', 'img/8SfL_0bde895d89f41570547e0dc0d87774ec.jpg', 'zLong', '2020-08-09', 4, 1),
(21, 'Cặp đôi mới yêu nhau', 'Cặp đôi mới yêu nhau thì sẽ làm gì', '<p>Cặp đ&ocirc;i mới y&ecirc;u nhauCặp đ&ocirc;i mới y&ecirc;u nhauCặp đ&ocirc;i mới y&ecirc;u nhauCặp đ&ocirc;i mới y&ecirc;u nhauCặp đ&ocirc;i mới y&ecirc;u nhauCặp đ&ocirc;i mới y&ecirc;u nhau</p>', 'img/NCYR_pexels-irina-iriser-1366957.jpg', 'Long', '2222-02-12', 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_blog`
--

CREATE TABLE `category_blog` (
  `Id_category` int(10) UNSIGNED NOT NULL,
  `Ten_category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Trangthai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_blog`
--

INSERT INTO `category_blog` (`Id_category`, `Ten_category`, `Trangthai`) VALUES
(1, 'Ăn uống', 1),
(2, 'Tips', 1),
(3, 'Bí kiếp yêu', 1),
(4, 'Ngôn tình', 1),
(5, 'Du lịch', 1),
(6, 'Phong cách sống', 1),
(7, 'Tổ ấm', 1),
(8, 'Studio chụp ảnh', 1),
(9, 'Nhà hàng-Tiệc cưới', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `images` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `id_post` int(10) UNSIGNED NOT NULL,
  `id_cha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id_comment`, `id_user`, `images`, `content`, `date`, `id_post`, `id_cha`) VALUES
(7, 51, '/frontend/img/diem.jpg', 'Cố lên Việt Nam ơi', '2020-08-02', 3, NULL),
(8, 55, '/frontend/img/thanh.jpg', 'ok bạn ơi', '2020-08-05', 3, NULL),
(9, 51, '/frontend/img/diem.jpg', 'hehe', '2020-08-05', 3, 8),
(10, 51, '/frontend/img/diem.jpg', 'hihi', '2020-08-05', 3, 9),
(12, 51, '/frontend/img/diem.jpg', 'wow wow', '2020-08-05', 8, NULL),
(37, 51, '/frontend/img/diem.jpg', 'hello bạn', '2020-08-17', 27, NULL),
(55, 52, '/frontend/img/dat.jpg', 'hihi bạn', '2020-08-22', 27, NULL),
(56, 51, '/frontend/img/diem.jpg', '(y)', '2020-08-24', 12, NULL),
(57, 59, 'https://lh3.googleusercontent.com/a-/AOh14GhTv1Mywxqq84Jln6BxfVx9HVQS4fLho7N2rIGUfQ', 'oh', '2020-08-26', 3, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `date`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Diễm Ú', 'Diem@gmail.com', 'hello', 'hihihihi', '2020-07-13', 1, NULL, NULL, NULL),
(4, 'Hiểu', 'acolmillado@cokils.com', 'hello hello', 'Test chuc nang', '2020-08-09', 1, NULL, NULL, NULL),
(5, 'ABC', 'sneeuwla@xbombo.site', 'asfasfsafsa', 'sfaffffasfasfa', '2020-08-10', 1, NULL, NULL, NULL),
(6, 'KhongCoTen', 'zakvormiger@khoastore.net', 'THắc về cái gì đó', 'Tôi muốn được hỗ trợ thêm về ABCD', '2020-08-17', 1, NULL, NULL, NULL),
(8, 'ssss', 'tragedietta@victorypointgames.org', 'hello', 'aDASDASFASFASFASFASFAS', '2020-08-20', 1, NULL, NULL, NULL),
(10, 'Diễm Ú', 'tuufun@hotmail.red', 'hello', 'asdasasfasasdasd', '2020-08-24', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `friends`
--

CREATE TABLE `friends` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id_1` bigint(20) UNSIGNED NOT NULL,
  `user_id_2` bigint(20) UNSIGNED NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `block` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `friends`
--

INSERT INTO `friends` (`id`, `user_id_1`, `user_id_2`, `approved`, `block`, `created_at`, `updated_at`) VALUES
(2, 51, 53, 1, 0, '2020-08-01 14:33:45', '2020-08-01 16:35:47'),
(3, 51, 54, 0, 0, '2020-08-01 14:33:48', '2020-08-01 14:33:48'),
(6, 55, 52, 1, 0, '2020-08-02 14:50:44', '2020-08-05 07:57:32'),
(7, 55, 53, 0, 0, '2020-08-02 15:03:29', '2020-08-02 15:03:29'),
(9, 58, 51, 1, 0, '2020-08-02 15:47:34', '2020-08-07 15:35:44'),
(10, 59, 52, 1, 0, '2020-08-02 15:53:58', '2020-08-05 07:57:32'),
(11, 59, 53, 1, 0, '2020-08-02 15:53:59', '2020-08-09 16:08:55'),
(12, 59, 54, 1, 0, '2020-08-02 15:54:03', '2020-08-26 16:55:14'),
(13, 59, 55, 1, 0, '2020-08-02 15:54:06', '2020-08-09 08:06:59'),
(15, 51, 59, 1, 0, '2020-08-05 04:51:04', '2020-08-26 10:58:18'),
(16, 64, 52, 1, 0, '2020-08-05 06:30:04', '2020-08-05 07:57:32'),
(17, 64, 52, 1, 0, '2020-08-05 06:32:23', '2020-08-05 07:57:32'),
(18, 64, 58, 1, 0, '2020-08-05 06:32:34', '2020-08-07 03:35:51'),
(19, 64, 62, 1, 0, '2020-08-05 06:32:36', '2020-08-22 07:00:35'),
(21, 64, 52, 1, 0, '2020-08-05 06:33:04', '2020-08-05 07:57:32'),
(22, 51, 64, 1, 0, '2020-08-05 06:36:14', '2020-08-08 12:28:18'),
(25, 64, 53, 0, 0, '2020-08-05 06:41:53', '2020-08-05 06:41:53'),
(26, 64, 54, 1, 0, '2020-08-05 06:41:53', '2020-08-09 08:00:55'),
(27, 64, 58, 1, 0, '2020-08-05 06:41:56', '2020-08-07 03:35:51'),
(32, 67, 63, 0, 0, '2020-08-05 21:30:20', '2020-08-05 21:30:20'),
(34, 58, 68, 0, 0, '2020-08-07 01:57:35', '2020-08-07 01:57:35'),
(35, 69, 51, 1, 0, '2020-08-07 01:58:40', '2020-08-07 15:35:44'),
(36, 69, 53, 1, 0, '2020-08-07 01:58:52', '2020-08-09 16:08:44'),
(37, 72, 59, 1, 0, '2020-08-07 02:30:25', '2020-08-26 10:58:19'),
(38, 69, 55, 1, 0, '2020-08-07 02:39:39', '2020-08-09 08:07:01'),
(40, 82, 51, 1, 0, '2020-08-07 06:46:54', '2020-08-07 15:35:44'),
(41, 82, 53, 1, 0, '2020-08-07 06:46:58', '2020-08-09 16:09:01'),
(42, 82, 55, 1, 0, '2020-08-07 06:47:01', '2020-08-09 08:08:32'),
(43, 82, 58, 1, 0, '2020-08-07 06:47:05', '2020-08-12 03:23:42'),
(46, 69, 59, 1, 0, '2020-08-07 12:03:24', '2020-08-26 10:58:20'),
(49, 69, 63, 0, 0, '2020-08-07 12:03:34', '2020-08-07 12:03:34'),
(50, 69, 66, 0, 0, '2020-08-07 12:03:42', '2020-08-07 12:03:42'),
(52, 69, 78, 0, 0, '2020-08-07 12:03:53', '2020-08-07 12:03:53'),
(53, 84, 51, 1, 0, '2020-08-07 12:31:25', '2020-08-07 15:35:44'),
(54, 84, 58, 1, 0, '2020-08-07 12:31:34', '2020-08-12 03:23:43'),
(55, 84, 82, 0, 0, '2020-08-07 12:32:11', '2020-08-07 12:32:11'),
(67, 51, 68, 0, 0, '2020-08-07 15:36:31', '2020-08-07 15:36:31'),
(68, 77, 69, 1, 0, '2020-08-07 16:39:01', '2020-08-07 16:39:40'),
(69, 77, 69, 1, 0, '2020-08-07 16:39:02', '2020-08-07 16:39:40'),
(70, 77, 69, 1, 0, '2020-08-07 16:39:02', '2020-08-07 16:39:40'),
(71, 77, 69, 1, 0, '2020-08-07 16:39:03', '2020-08-07 16:39:40'),
(72, 77, 69, 1, 0, '2020-08-07 16:39:03', '2020-08-07 16:39:40'),
(73, 77, 69, 1, 0, '2020-08-07 16:39:03', '2020-08-07 16:39:40'),
(74, 77, 69, 1, 0, '2020-08-07 16:39:05', '2020-08-07 16:39:40'),
(75, 77, 69, 1, 0, '2020-08-07 16:39:06', '2020-08-07 16:39:40'),
(76, 77, 69, 1, 0, '2020-08-07 16:39:07', '2020-08-07 16:39:40'),
(77, 77, 69, 1, 0, '2020-08-07 16:39:11', '2020-08-07 16:39:40'),
(78, 77, 69, 1, 0, '2020-08-07 16:39:20', '2020-08-07 16:39:40'),
(86, 51, 71, 0, 0, '2020-08-08 13:33:27', '2020-08-08 13:33:27'),
(90, 52, 58, 1, 0, '2020-08-08 13:44:58', '2020-08-12 03:23:44'),
(122, 54, 55, 1, 0, '2020-08-09 08:14:18', '2020-08-09 08:14:26'),
(123, 53, 58, 1, 0, '2020-08-09 16:09:18', '2020-08-12 03:23:45'),
(125, 58, 62, 1, 0, '2020-08-12 03:26:30', '2020-08-12 06:12:51'),
(131, 91, 51, 1, 0, '2020-08-14 08:36:07', '2020-08-15 15:13:50'),
(132, 91, 52, 1, 0, '2020-08-14 08:36:08', '2020-08-16 14:58:30'),
(133, 91, 90, 0, 0, '2020-08-14 08:36:10', '2020-08-14 08:36:10'),
(134, 91, 53, 1, 0, '2020-08-14 08:36:15', '2020-08-16 14:57:55'),
(135, 91, 54, 1, 0, '2020-08-14 08:36:15', '2020-08-26 16:55:17'),
(136, 94, 53, 1, 0, '2020-08-14 16:14:02', '2020-08-16 14:57:56'),
(137, 94, 54, 1, 0, '2020-08-14 16:14:04', '2020-08-26 16:55:18'),
(138, 94, 55, 0, 0, '2020-08-14 16:14:05', '2020-08-14 16:14:05'),
(139, 94, 59, 1, 0, '2020-08-14 16:14:08', '2020-08-26 10:58:21'),
(140, 94, 58, 1, 0, '2020-08-14 16:14:16', '2020-08-15 02:31:31'),
(141, 94, 52, 1, 0, '2020-08-14 16:14:25', '2020-08-16 14:58:31'),
(142, 94, 51, 1, 0, '2020-08-14 16:14:27', '2020-08-15 15:13:52'),
(143, 94, 62, 1, 0, '2020-08-14 16:15:26', '2020-08-15 15:46:19'),
(144, 91, 55, 0, 0, '2020-08-15 05:07:42', '2020-08-15 05:07:42'),
(145, 91, 59, 1, 0, '2020-08-15 05:07:54', '2020-08-26 10:58:23'),
(148, 65, 52, 0, 0, '2020-08-15 16:15:11', '2020-08-15 16:15:11'),
(149, 65, 53, 0, 0, '2020-08-15 16:15:11', '2020-08-15 16:15:11'),
(173, 51, 70, 0, 0, '2020-08-22 06:56:00', '2020-08-22 06:56:00'),
(176, 62, 51, 0, 0, '2020-08-22 06:59:13', '2020-08-22 06:59:13'),
(178, 52, 51, 1, 0, '2020-08-22 07:03:57', '2020-08-22 07:16:11'),
(179, 104, 59, 1, 0, '2020-08-24 15:07:38', '2020-08-26 10:58:25'),
(181, 106, 51, 0, 0, '2020-08-24 15:28:04', '2020-08-24 15:28:04'),
(182, 106, 58, 1, 0, '2020-08-24 15:28:18', '2020-08-26 11:25:00'),
(183, 106, 75, 0, 0, '2020-08-24 15:28:33', '2020-08-24 15:28:33'),
(185, 108, 107, 0, 0, '2020-08-24 16:10:41', '2020-08-24 16:10:41'),
(186, 108, 69, 0, 0, '2020-08-24 16:11:13', '2020-08-24 16:11:13'),
(187, 59, 109, 0, 0, '2020-08-26 10:59:58', '2020-08-26 10:59:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id_image` int(10) UNSIGNED NOT NULL,
  `name_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_album` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id_image`, `name_image`, `id_album`) VALUES
(1, 'XXDG_basket-beach-blue-coast-169196.jpg', 1),
(2, 'qoT4_beach-beach-wedding-chairs-clouds-169192.jpg', 1),
(3, 'Dv6R_beach-wedding-event-under-white-clouds-and-clear-sky-during-169211.jpg', 1),
(4, '5hZH_boat-couple-dreamy-painting-lake-lantern-xr-1920x1080.jpg', 1),
(5, 'n6V9_contact.jpg', 1),
(6, 'dx9B_couple-sitting-bench-digital-art-4k-ed-1920x1080.jpg', 1),
(7, 'ELfm_5hZH_boat-couple-dreamy-painting-lake-lantern-xr-1920x1080.jpg', 2),
(8, 'X1n0_5xj4_basket-beach-blue-coast-169196.jpg', 2),
(9, 'itDD_22sT_boat-couple-dreamy-painting-lake-lantern-xr-1920x1080.jpg', 2),
(10, 'lnuX_d885feb8b999522881e0c74bbb5d0305.jpg', 4),
(11, 'EssS_f7450879a0e22ba3e4601cb0c6e64cea.jpg', 4),
(12, '1vcl_0197837b7e1239f67af45d2d9b22b812.jpg', 5),
(13, 'yvAO_a9be081231f9a1fa7f09af9fbf023030.jpg', 5),
(14, 'xgEb_asd.png', 5),
(15, 'oxpz_Untitled.png', 5),
(16, '3My5_Untitled.png', 6),
(17, 'I2r2_0bde895d89f41570547e0dc0d87774ec.jpg', 7),
(18, 'k6oY_9da3c7a727a6abbdf748118f9f4e48e2.jpg', 7),
(19, 'zIY9_117193040_753422735474710_6323096757752189168_n.png', 7),
(20, 'eNDq_a9be081231f9a1fa7f09af9fbf023030.jpg', 7),
(21, 'j8FU_e0a8b98f2232e5a9c910ba6bd9d23d39.jpg', 7),
(22, '5nxb_f59db58b5e09083091e383cc232bd700.jpg', 7),
(23, '99nn_0bde895d89f41570547e0dc0d87774ec.jpg', 8),
(26, '9jsk_e0a8b98f2232e5a9c910ba6bd9d23d39.jpg', 8),
(27, 'aPBw_f59db58b5e09083091e383cc232bd700.jpg', 8),
(30, 'Et3N_106989107_778596352679161_845680436130736670_n.jpg', 10),
(31, 'iWJs_ddds.JPG', 11),
(32, 'GbgI_HINH.JPG', 11),
(33, 'sBdn_hình-nền-đẹp-cho-laptop-win10-1068x601.jpg', 11),
(34, '3R7f_12829228_1705324159730272_4493385171624151929_o.jpg', 12),
(35, 'qeVc_19247834_10213968708037581_423506367597242865_n.jpg', 12),
(36, 'zapt_22528204_962398657231496_3287448973261593942_n.jpg', 12),
(37, 'YGnb_26231498_10211201356536184_7924072361560516736_n.jpg', 12),
(38, 'N760_53220899_2128236527258193_3286290365358800896_n.jpg', 12),
(39, 'AcEg_ddds.JPG', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_post` int(10) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `likes`
--

INSERT INTO `likes` (`id`, `id_post`, `id_user`, `created_at`, `updated_at`) VALUES
(134, 3, 52, NULL, NULL),
(142, 3, 55, NULL, NULL),
(159, 8, 51, NULL, NULL),
(175, 3, 51, NULL, NULL),
(176, 8, 54, NULL, NULL),
(191, 27, 91, NULL, NULL),
(195, 27, 53, NULL, NULL),
(196, 12, 53, NULL, NULL),
(197, 27, 52, NULL, NULL),
(198, 8, 58, NULL, NULL),
(199, 3, 58, NULL, NULL),
(201, 27, 51, NULL, NULL),
(205, 12, 51, NULL, NULL),
(207, 38, 52, NULL, NULL),
(208, 27, 54, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` bigint(20) NOT NULL,
  `to` bigint(20) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `messages`
--

INSERT INTO `messages` (`id`, `from`, `to`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 52, 51, 'hello you', 1, '2020-08-02 15:38:49', '2020-08-24 02:41:11'),
(2, 52, 51, 'hihi', 1, '2020-08-02 15:39:13', '2020-08-24 02:41:11'),
(3, 51, 58, 'hello', 1, '2020-08-02 15:50:29', '2020-08-26 11:40:28'),
(4, 58, 51, 'Hiểu Khùng', 1, '2020-08-02 15:51:12', '2020-08-26 16:52:49'),
(5, 52, 51, '1234', 1, '2020-08-05 04:59:28', '2020-08-24 02:41:11'),
(6, 52, 51, '2435', 1, '2020-08-05 04:59:47', '2020-08-24 02:41:11'),
(7, 64, 51, 'hello', 1, '2020-08-05 06:37:52', '2020-08-26 16:52:56'),
(8, 51, 64, 'hihi', 1, '2020-08-05 06:39:57', '2020-08-08 12:29:09'),
(9, 61, 51, '<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">', 1, '2020-08-05 06:41:03', '2020-08-05 06:41:25'),
(10, 61, 52, 'ypooo', 1, '2020-08-07 14:31:18', '2020-08-07 14:31:25'),
(11, 52, 61, '22', 1, '2020-08-07 14:31:24', '2020-08-07 14:32:38'),
(12, 69, 77, 'alloo', 1, '2020-08-07 16:42:09', '2020-08-07 16:43:18'),
(13, 77, 69, 'Alo', 1, '2020-08-07 16:42:57', '2020-08-07 16:42:58'),
(14, 61, 61, '222', 1, '2020-08-12 06:39:38', '2020-08-12 06:40:04'),
(15, 101, 102, 'hello ban', 1, '2020-08-17 09:37:21', '2020-08-17 09:37:27'),
(16, 102, 101, 'chao ban', 1, '2020-08-17 09:37:26', '2020-08-17 09:37:27'),
(17, 51, 52, 'hihi', 1, '2020-08-18 10:23:06', '2020-08-26 16:51:59'),
(18, 51, 52, 'kkk', 1, '2020-08-18 10:23:20', '2020-08-26 16:51:59'),
(19, 51, 52, '1234', 1, '2020-08-18 10:23:27', '2020-08-26 16:51:59'),
(20, 52, 51, 'ok', 1, '2020-08-18 10:23:37', '2020-08-24 02:41:11'),
(21, 52, 51, 'ok', 1, '2020-08-18 10:23:45', '2020-08-24 02:41:11'),
(22, 51, 58, 'WOW', 1, '2020-08-19 15:45:04', '2020-08-26 11:40:28'),
(23, 51, 52, 'HEHE', 1, '2020-08-19 15:45:20', '2020-08-26 16:51:59'),
(24, 58, 51, 'emoji đâuuuuuu', 1, '2020-08-19 21:35:06', '2020-08-26 16:52:49'),
(25, 51, 58, 'WOW CHUA LAY DUOC DU LIEU CUA NO NEN CHUA UPDATE LEN', 1, '2020-08-20 04:03:26', '2020-08-26 11:40:28'),
(26, 51, 52, 'HELLO', 1, '2020-08-20 04:03:48', '2020-08-26 16:51:59'),
(27, 52, 51, 'hihi', 1, '2020-08-22 06:52:36', '2020-08-24 02:41:11'),
(28, 51, 52, 'alo alo', 1, '2020-08-22 06:52:48', '2020-08-26 16:51:59'),
(29, 58, 51, 'emoji đâuuuuuuuuuuuuuuuu', 1, '2020-08-26 11:40:27', '2020-08-26 16:52:49'),
(30, 52, 51, 'ok ban oi', 0, '2020-08-26 16:51:58', '2020-08-26 16:51:58'),
(31, 51, 58, 'wow ko lam haha', 0, '2020-08-26 16:52:40', '2020-08-26 16:52:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(14, '2020_06_13_092215_blog', 3),
(15, '2020_06_13_113259_messages', 3),
(16, '2020_06_18_081011_category_blog', 4),
(17, '2020_06_18_084447_danhgia', 5),
(18, '2020_06_20_072208_lienhe', 6),
(19, '2020_07_08_141421_post', 7),
(21, '2020_07_10_124627_comment', 8),
(23, '2020_07_16_150536_friends', 9),
(24, '2020_07_29_121237_like', 10),
(25, '2020_08_01_163502_album', 11),
(26, '2020_08_01_163530_image', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id_post` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public` tinyint(1) NOT NULL,
  `date` date NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id_post`, `content`, `image`, `public`, `date`, `id`) VALUES
(3, 'Cùng nhay chống covid nào mọi người !!!', 'img/Kufj_images5399854_3.jpg', 1, '2020-08-02', 52),
(7, 'adc', 'img/jl1E_doraemon.jpg', 1, '2020-08-05', 63),
(8, 'Hôm nay tôi buồn', 'img/Ba4v_83059302_2697110870564415_7131202937258749121_n.jpg', 1, '2020-08-05', 64),
(12, 'Alo test app, sanh diên năm  3 F.a chán , bạn nào tìm hiểu hơm', 'img/vzum_inbound6568290909578512570.jpg', 1, '2020-08-07', 69),
(13, 'Buồn', '', 1, '2020-08-07', 68),
(15, 'hé lô \r\ncó ai thấy t ko :)))', '', 1, '2020-08-07', 73),
(27, 'asdasdasd', 'img/t164_2.png', 1, '2020-08-14', 91),
(35, '1', 'img/TmVa_def.jpg', 1, '2020-08-23', 67),
(37, 'Nobody can bring you peace but yourself', '', 1, '2020-08-26', 109),
(38, 'helooo', 'img/0v7b_2e32cdb4a3b5ba0d4dd19825867e090a.jpg', 1, '2020-08-26', 58);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review`
--

CREATE TABLE `review` (
  `Id_review` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `review`
--

INSERT INTO `review` (`Id_review`, `date`, `content`, `status`, `id`) VALUES
(1, '2020-06-26 00:00:00', 'WhoToDate đã giúp mình thoát ế thành công.', 1, 51),
(2, '2020-06-25 00:00:00', 'Đã gặp 1 bạn nữ ngang tuổi, rất dễ thương và nghiêm túc, tuy 1 lần thôi nhưng mà có sự tin tưởng về web này.\r\n', 1, 52),
(3, '2020-06-26 00:00:00', 'Ứng dụng rất tuyệt vời, thân thiện và an toàn', 1, 53),
(4, '2020-06-26 00:00:00', 'Cám ơn WhoToDate đã đem đến cho mình một bạn nữ xinh xắn. Ủng hộ hết mình', 1, 50),
(5, '2020-06-27 00:00:00', 'Cá nhân mình thấy ý tưởng ứng dụng hay, hay hơn nhiều ứng dụng hẹn hò khác nhưng lag hơn, có lẽ do chưa đủ kinh phí nâng cấp hệ thống.', 1, 54),
(6, '2020-06-26 00:00:00', 'Tôi thấy rất thú vị vì có thêm bạn mới,cho tôi trải nghiệm cuộc sống tâm tư tình cảm với các bạn khác giới, tôi muốn ứng dụng này càng phát triển và mạnh mẽ hơn để vươn xa đến tất cả các bạn vùng sâu được biết và trải nghiệm.Tôi hi vọng tôi sẽ tìm được một nửa của mình thật ưng ý và sẽ đi tiếp với tôi cuộc đời còn lại.', 1, 55),
(10, '2020-08-14 22:35:59', 'Hello admin', 0, 62),
(11, '2020-08-24 22:29:25', 'quá xuất xắc thầy ơi', 0, 106);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `religion` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `habit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `findlove` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `dob`, `gender`, `religion`, `phone`, `city`, `district`, `ward`, `job`, `habit`, `intro`, `findlove`, `email`, `email_verified_at`, `password`, `status`, `role`, `remember_token`, `created_at`, `updated_at`, `img`) VALUES
(20, 'Admin', '2020-06-24', 1, '', '', '4', '18', '378', NULL, '', '', 'NULL', 'admin@gmail.com', '2020-06-10 17:00:00', '$2y$10$hOvPNUnhexGthI0h9WPHYeCSoOwgaUC/SLnzS0/CqIFC/0qDVFHNi', 0, 1, NULL, '2020-06-09 01:18:25', '2020-08-10 16:44:41', 'img/35wl_a9be081231f9a1fa7f09af9fbf023030.jpg'),
(50, 'Hiểu', '1998-05-29', 1, 'Không', '0909456789', '4', '12', '14140', 'sinh viên', 'Lập trình, chơi game, linh kiện điện tửa', 'Mình là một người khá trầm tính, thích màu hồng, yêu màu tím, ghét sự giả dối.', 'Mình muốn tìm một bạn nữ yêu đá bóng', 'lehieu1142@gmail.com', '2020-06-24 20:51:15', '$2y$10$nTUtUHivr930o1aDAQpf0OymqNqK4jTaOLZ0nq39acmEfH0PQGg0C', 0, 1, 'sDlN54ZgrNzzem7hO7nPWmPPwVA8MXBSDJgHLGiBc4qvnh5euHzBfg0JqkId', '2020-06-24 20:49:38', '2020-08-10 16:42:22', 'img/hieu.jpg'),
(51, 'Diễm', '1992-04-23', 0, 'Thiên Chúa', '0909123456', '4', '31', '15591', 'Học sinh cấp 3....', 'Đi đu đưa', 'ble ble ble', 'Tìm một bạn nam nuôi ăn tới già , con nhà đại gia', 'Diem@gmail.com', '2020-06-24 17:00:00', '$2y$10$TNesqU0sC/tZ1aJneJ3Jk.CRoAuNKpg7M1L9yxrdqSthFLY2BLOVq', 0, 0, NULL, '2020-06-24 21:02:49', '2020-08-20 04:32:04', 'img/diem.jpg'),
(52, 'Đạt', '2020-06-03', 1, '', '690404592', '4', '1', '10', 'Chủ tịch', 'Chơi siêu xe, đồng hồ, trang sức', 'Mình thích thì mình dùng thôi', 'Tìm kiếm người tiêu tiền giúp', 'Dat@gmail.com', '2020-06-25 17:00:00', '$2y$10$UYc7OzGDi6yCYScauG.wjOKifrNX5ETHFaIgtFXvXwiTX12gAfmry', 0, 0, NULL, NULL, '2020-08-14 14:21:23', 'img/dat.jpg'),
(53, 'Thắng', '2020-06-16', 1, 'Thần đạo', '', '4', '1', '10', 'Kỹ sư xây dựng', 'Sưu tầm đỗ cổ, du lịch, tìm kiếm sự tự do', 'Mình là người cởi mở, thích những cái mới mẻ, tiêu tiền như nước', 'Tìm bạn đồng hành suốt cuộc đời', 'Thang@gmail.com', '2020-06-25 17:00:00', '$2y$10$UYc7OzGDi6yCYScauG.wjOKifrNX5ETHFaIgtFXvXwiTX12gAfmry', 0, 0, NULL, NULL, '2020-07-22 08:57:25', 'img/thang.jpg'),
(54, 'Thạch', '2020-06-26', 1, 'Không', NULL, '4', '77', '15620', 'Doanh nhân', 'Đọc sách, tham quan các bảo tàng, có niềm đam mê với lịch sử', 'Do từ nhỏ đã được tiếp xúc với sách nên mình rất thích sách. Mình luôn tìm mua các loại sách liên quan về lịch sử nhân loại.', 'Tìm bạn có cùng sở thích', 'Thach@gmail.com', '2020-06-25 17:00:00', '$2y$10$UYc7OzGDi6yCYScauG.wjOKifrNX5ETHFaIgtFXvXwiTX12gAfmry', 0, 0, NULL, NULL, '2020-07-22 14:16:30', 'img/thach.jpg'),
(55, 'Thành', '2020-06-25', 1, '', '0731495678', '4', '2', '11', 'Nhân viên IT', 'Dạo phố, tập thể dục, gym, xăm hình', 'Mình cao 1m69, da ngâm, có nhà có xe', 'Cần tìm người để yêu, nếu hợp thì đám cưới luôn', 'Thanh@gmail.com', '2020-06-25 17:00:00', '$2y$10$UYc7OzGDi6yCYScauG.wjOKifrNX5ETHFaIgtFXvXwiTX12gAfmry', 0, 0, NULL, NULL, '2020-07-22 14:11:05', 'img/thanh.jpg'),
(58, 'Kiều Diễm', '1998-08-10', 0, 'Không', NULL, '4', '13', '935', NULL, NULL, NULL, NULL, NULL, '2020-08-02 15:47:11', '$2y$10$QXXg86y/1VsIYqZmolXkMuzjtmHjXR5kC4hsmG1kWfPtt9LxjLd56', NULL, 0, 'MAb0pkfATtzsGwan2jIwMKnVxh7e1cZJkYYZobuPZn49x9SCW5XST98Mkwzs', '2020-08-02 15:47:11', '2020-08-15 02:32:10', 'https://graph.facebook.com/v3.3/157998225798710/picture?type=normal'),
(59, 'Hung Tran Van', NULL, 1, 'Không', NULL, '4', '18', '387', NULL, NULL, NULL, NULL, 'hung.seu@gmail.com', '2020-08-02 15:52:59', '$2y$10$HHIMWQwlJ3U6XTdlSwoQtulGsDKNs1KUiKS0j2pGXIC2Bj/Dz94Jm', NULL, 0, '2Pepq78hafAOEvAIaa9OKySvNJl0ujl4gj6FVDQn225YQETtgGiPyFOs269M', '2020-08-02 15:52:59', '2020-08-26 10:59:04', 'https://lh3.googleusercontent.com/a-/AOh14GhTv1Mywxqq84Jln6BxfVx9HVQS4fLho7N2rIGUfQ'),
(62, 'Nhật Long', '1998-12-29', 1, 'Không', NULL, '4', '18', '378', NULL, NULL, NULL, NULL, 'nguyenbachnhatlong357@gmail.com', '2020-08-05 05:10:55', '$2y$10$1v6rv/yMRqz2CqEggJnodO5TTh6gFP/YJ/tHNwbd.sceaakt7ECTy', 0, 0, 'vC2Xn8LuGN6gbaM8655x2a7ps2WeCIQDIrYiYYObbG1z36VfB2gaQxEUfh16', '2020-08-05 05:10:55', '2020-08-15 16:50:29', 'img/guf0_f59db58b5e09083091e383cc232bd700.jpg'),
(63, 'Diễm Kiều', '1998-08-10', 1, NULL, NULL, '4', '2', '11', 'Sinh Viên', 'Đi phượt', 'Mình là big big girl', 'Trai đẹp', 'diemnguyen1459@gmail.com', '2020-08-05 06:07:42', '$2y$10$Gs9Vc/LxDglTgOZc2NEMDOeS6FQ.evoY8Yqrw3ANKuxFo6/P/IZaG', 0, 0, NULL, '2020-08-05 06:07:24', '2020-08-05 06:07:42', 'img/user.jpg'),
(64, 'Đặng Đạt', '1998-02-14', 1, 'Không', '123456789', '4', '2', '11', NULL, NULL, NULL, NULL, 'nhozjacky1@gmail.com', '2020-08-05 06:29:58', '$2y$10$9kYmuxTSob/cOKR.n3mzSeOPI1wRdRCNZlXMBzG2/xmWMhZqdfBOq', 0, 0, '99RoikfqURf14tMQDof61D3C2LO3paIj3KrRFkZGA7m1pHE8QL2Q8ctorE6M', '2020-08-05 06:29:58', '2020-08-05 06:35:14', 'https://graph.facebook.com/v3.3/3480348621987844/picture?type=normal'),
(65, 'Mã Đặng Vĩnh Trần', NULL, 1, 'Không', NULL, '4', '10', '842', NULL, NULL, NULL, NULL, 'motvisao_codon_1998@yahoo.com.vn', '2020-08-05 07:28:55', '$2y$10$QUbb4g4BRHlP.wl4vVSWluTjcZhsNHpZYMGVwVNQfoir5Fo8bttdm', 0, 0, 'pyg1XCeUx4BG9yDM4nIXITAc0Bla8GqBiWwlxSp2NhC50TGetj3pXEDx9KgP', '2020-08-05 07:28:55', '2020-08-09 08:11:59', 'img/qHow_f7450879a0e22ba3e4601cb0c6e64cea.jpg'),
(66, 'Trần Văn Hùng', NULL, NULL, NULL, NULL, '4', '2', '11', NULL, NULL, NULL, NULL, 'test.phpmailer.hungtv@gmail.com', '2020-08-05 12:04:47', '$2y$10$5jjLOVpa2G5HdUqlEt99M.ujRvhuUJ9PHPoJvSyadpo73xyRTos7S', 0, 0, 'mp8OjKpQC4YSnHq2cIkmJ6gk27P2YB8NMl3MFHUrp5hvRn7zfqSVeHUzG5Ok', '2020-08-05 12:04:47', '2020-08-05 12:04:47', 'https://lh6.googleusercontent.com/-VYxi1P-r7z4/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucl72dH_iOrKhQYmCKek7_DxpbIjqg/photo.jpg'),
(67, 'Nguyễn Hoàng Hải', NULL, NULL, NULL, NULL, '4', '2', '11', NULL, NULL, NULL, NULL, 'devilistears@yahoo.com.vn', '2020-08-05 20:57:04', '$2y$10$CvNuSXTyh323H4xtvz04Qu9gMUucY4VORA9ses4vVCHFJ0aCKp1JS', 0, 0, 'xfhgNbAojbuKboAS6nWWKbP73fLbB19328OY8nPdJKoIh8VSgaBQctQaEAJO', '2020-08-05 20:57:04', '2020-08-08 18:26:56', 'img/hCuN_bo-hinh-nen-chat-luong-cao-12.jpg'),
(68, 'Ellie Phạm', NULL, NULL, NULL, NULL, '4', '2', '11', NULL, NULL, NULL, NULL, 'lightdying13@gmail.com', '2020-08-07 01:55:56', '$2y$10$kmlgSfGtnLk/6q2ifzSPtus/QVLhgymm8pVd8SLwuOffTSms4Avhi', 0, 0, 'zvBklAILn9vYfbf4E2TtUOkqORviofXd6gf6qF578nT9tahoq55w66XD7VsN', '2020-08-07 01:55:56', '2020-08-07 01:55:56', 'https://graph.facebook.com/v3.3/637166696891785/picture?type=normal'),
(69, 'Trần Thiên', '1999-06-21', 1, 'Kinh', '0913184232', '16', '438', '6425', 'Sinh Viên', 'Đọc sách', 'Đẹp trai . hết', 'cute', 'tranngocthien12a1@gmail.com', '2020-08-07 01:56:01', '$2y$10$2d9gHKzwE2KM/ihkCp2RzOiqlhTHF.LNmMGD8VP4dMDTwI/v2kcv2', 0, 0, 'csgVDY71XYucXkZvkbL93oMJw6AIzwdnURfRPmTHFkSjfm0mw67h452GMHYY', '2020-08-07 01:56:01', '2020-08-07 16:41:44', 'https://graph.facebook.com/v3.3/2669641499978442/picture?type=normal'),
(70, 'Nguyễn Bảo Phát', '1999-01-14', 1, NULL, NULL, '4', '79', '895', 'Sinh viên', 'Trống', 'Trống', 'Trống', 'nbphat2018@gmail.com', '2020-08-07 02:14:57', '$2y$10$HuAddYE3sQQZwv7w41uRcOqTZJGpXunEPiFaWaxx6xi0n1UEXgVQ.', 0, 0, NULL, '2020-08-07 02:14:19', '2020-08-07 02:14:57', 'img/user.jpg'),
(71, 'Nguyễn Đức Huy', '1997-11-30', 1, 'Không', 'Ggggggggg', '48', '147', '1847', 'Gggg', 'Gggggg', 'Ggggggg', 'Gggggg', 'ndhuy30111@gmail.com', '2020-08-07 02:17:19', '$2y$10$M7VngtAsW9gwMYWi5dox5.ByIQJXZnYZb5ZxP7Cl8GOA.poy6tGvm', 0, 0, 'jMZ7nnVcJ6nnFVZGoqm9VTvLxyCbZTe7Lpw7qx1PJNcZ1CxYSuLoIOyVvNLm', '2020-08-07 02:17:19', '2020-08-07 02:24:57', 'https://graph.facebook.com/v3.3/3107578732688423/picture?type=normal'),
(72, 'Phố Đêm', NULL, NULL, NULL, NULL, '4', '2', '11', NULL, NULL, NULL, NULL, 'ba_tuoc_dracula198@yahoo.com.vn', '2020-08-07 02:29:55', '$2y$10$nMzyw9K2GLLWdykTa2/Ap.oFCFY.x52BYA/E5.kizhDxLKf4.gP36', 0, 0, 'Vmke42J9tJpCmlCorN8GS5kiJnWVLQf8EBMYa0sh8YIwGseo7FvT86JKMrGU', '2020-08-07 02:29:55', '2020-08-07 02:29:55', 'https://graph.facebook.com/v3.3/1777545109076984/picture?type=normal'),
(73, 'Vinh Ngo', NULL, NULL, NULL, NULL, '4', '2', '11', NULL, NULL, NULL, NULL, 'poyou78@yahoo.com.vn', '2020-08-07 02:39:20', '$2y$10$UkUL6SvKYhgtfql.4.Ir2Oq4YBF4TwAZTFKfpMH.LIOeDs26NRnQ2', 0, 0, 'yo81qf4KhbNDNcb9SAItEnhikm79d4GIxYbHj5oXV26wbuEgGbmIiSI1LeCO', '2020-08-07 02:39:20', '2020-08-07 02:39:20', 'https://graph.facebook.com/v3.3/2675160859365082/picture?type=normal'),
(74, 'Thiện', NULL, NULL, NULL, NULL, '4', '2', '11', NULL, NULL, NULL, NULL, 'thien.phamminhstu1@gmail.com', '2020-08-07 03:00:14', '$2y$10$S0bBs7T08nFGEQqnFN2TleJnCQRZ5t3MTYETKMVWW07/yXwhqIiNa', 0, 0, 'wWFfazYgksZ5hrj7v80JzwaL0FYjG6IX0aI5A18pTHtPdjhF96EklMrAmlV8', '2020-08-07 03:00:14', '2020-08-07 03:00:14', 'https://graph.facebook.com/v3.3/2660726120835718/picture?type=normal'),
(75, 'Gia Lệ', '1999-09-27', 0, 'Không', NULL, '4', '2', '11', NULL, NULL, NULL, NULL, 'giale4545@gmail.com', '2020-08-07 03:18:18', '$2y$10$So2eb.GOh5qBzc9x5n3E4ey1gh/d6TQAVloStIeIC3AEdTJInplcu', 0, 0, 'q2keUTp3PfNLwN8nUwwNsmDpbkmlZaZCKp6QCbPplqrytEapw80Elcg8O0Ji', '2020-08-07 03:18:18', '2020-08-07 03:23:10', 'https://graph.facebook.com/v3.3/2573801522880528/picture?type=normal'),
(76, 'Hào Nguyễn', '1999-05-22', 1, 'Không', NULL, '4', '31', '968', NULL, NULL, NULL, NULL, 'haonguyen.sign@gmail.com', '2020-08-07 03:38:25', '$2y$10$dzBaJJbPGULHqdYWOvpkbOqrat93nwWA9WhSFftqv3Vr.irwjL7tC', 0, 0, 'E7eVZrnCnW9be9rVQDEKnl6xTRjMc6FBlflwq44VvuY5HLup4Tx3kOcGNFgV', '2020-08-07 03:38:25', '2020-08-07 03:40:04', 'https://lh5.googleusercontent.com/-Af9EH4yGmU4/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuclHwgsgyzXY8DhZzrx5WMsom9CeZg/photo.jpg'),
(77, 'Đặng Chí Hoàng', NULL, 1, 'Không', 'NULL', '4', '2', '11', NULL, NULL, NULL, NULL, 'hoangdang240299@gmail.com', '2020-08-07 03:47:08', '$2y$10$.cgssAR0xrvsePhw9Ku9a.Fmkkwhbjwcj2DonL27oewECwLfDMePW', 0, 0, 'y0BOcOQtigKWkbCxv3lD2PVfR9VLEtdSyP3ND846qv2Hqp4NUP4leP7WOVD5', '2020-08-07 03:47:08', '2020-08-07 16:40:09', 'https://lh3.googleusercontent.com/a-/AOh14GgOZkjpPP1YToYGXVqGOVhZ6loY5-yWWI9BeSL0'),
(78, 'Lê Tấn Lộc', NULL, NULL, NULL, 'NULL', '4', '2', '11', NULL, NULL, NULL, NULL, 'nh0c_messi123@yahoo.com.vn', '2020-08-07 04:21:45', '$2y$10$chaJo5Xe.DGlFCFvXdq3IuUSQ.bM/WM2GQrnVYenIlumZKTKiuuGq', 0, 0, 'fBOEVKMyK5mGWQwCqLSbgRh9pS4HkxHKUiIRVHbTChnPryS0eBo3ek8sVHcE', '2020-08-07 04:21:45', '2020-08-07 04:21:45', 'https://graph.facebook.com/v3.3/1676954645811787/picture?type=normal'),
(79, 'Khởi Xuyên', NULL, NULL, NULL, 'NULL', '4', '2', '11', NULL, NULL, NULL, NULL, 'anhthu3011t@gmail.com', '2020-08-07 05:44:08', '$2y$10$c.Wm48xdNxN0hPyOZgyfSu0feM1WuDRtGO5y2sEdaFGzyESQjaazG', 0, 0, '9r2qUYp6pCoXdA7aTwx4nOhgmOUb2ZWVwEKtr93KSVoP04VFd69a4zrZyDmG', '2020-08-07 05:44:08', '2020-08-07 05:44:08', 'https://graph.facebook.com/v3.3/1199453407075995/picture?type=normal'),
(80, 'Dương Lê', NULL, NULL, NULL, 'NULL', '4', '2', '11', NULL, NULL, NULL, NULL, 'lehaiduong123321@gmail.com', '2020-08-07 05:51:26', '$2y$10$TKJwgVcYhvm1DfEoJA0dl.qqpm2cXXl/qxGeOb4b6rPuI9j16mP/e', 0, 0, 't0lQnECa9elUSMWAO662TUbMEBIjUAYfVtG5VkY7wWE8n2lkv2gUvc2MoZPq', '2020-08-07 05:51:26', '2020-08-07 05:51:26', 'https://graph.facebook.com/v3.3/1479182092274187/picture?type=normal'),
(81, 'Đạt', NULL, NULL, NULL, NULL, '4', '2', '11', NULL, NULL, NULL, NULL, 'dtran0692@gmail.com', '2020-08-07 05:53:30', '$2y$10$h1sUF4mpUPrth0ILQmBDBeidPAbE7Mw.Xd8Pcw8Ku1sp71gQ949HG', 0, 0, '6APiXssR0x69IVKsOwPzgDTJf9g4TflmMIhxpKqBjPTZGMn9WjsVoJarpM3B', '2020-08-07 05:53:30', '2020-08-07 05:53:30', 'https://graph.facebook.com/v3.3/2654258994815691/picture?type=normal'),
(82, 'Hanny Torika', NULL, NULL, NULL, NULL, '4', '2', '11', NULL, NULL, NULL, NULL, 'hannytorika@yahoo.com', '2020-08-07 06:46:48', '$2y$10$QB5O.TEbyU3iwfgOwddqde.ceY.sX.TuWHaFdMRZ5TpN/.zk95OWK', 0, 0, 'qSdb7SHryOujDrVDcrJkcyzmKGc362Hhij9zwthruwwgkNUbtqfhVRlHk8I9', '2020-08-07 06:46:48', '2020-08-07 06:46:48', 'https://graph.facebook.com/v3.3/2816820245221190/picture?type=normal'),
(83, 'Tuấn Toàn', NULL, NULL, NULL, NULL, '4', '2', '11', NULL, NULL, NULL, NULL, 'letuantoan270999@gmail.com', '2020-08-07 12:01:33', '$2y$10$jbJtR8I5pMhNxljcK.ziSOloIti5RSFoS/kzVg23n1Se77A55b1IS', 0, 0, '9bxwjtjjrQupuYfuz113Av7woLAUqdVMjwd4odDJyy5WqlxONmRhjAnhe04j', '2020-08-07 12:01:33', '2020-08-07 12:01:33', 'https://graph.facebook.com/v3.3/1477897649074234/picture?type=normal'),
(84, 'Đình Nguyễn', NULL, NULL, NULL, NULL, '4', '2', '11', NULL, NULL, NULL, NULL, 'dinh27.ngh@gmail.com', '2020-08-07 12:31:20', '$2y$10$lBe.lNNjtFOLmVjWTeSqz.MxxQRYeuv8m.rpCgSqZSTPjfIU1Vhvy', 0, 0, 'GjPf5DdS5Nfn19HRNi4zvwui92P2hccWyK67F3OE63e6yHk5AfWzYFsPdWQV', '2020-08-07 12:31:20', '2020-08-07 12:31:20', 'https://graph.facebook.com/v3.3/1208395469558922/picture?type=normal'),
(85, 'nam ha', NULL, NULL, NULL, NULL, '4', '2', '11', NULL, NULL, NULL, NULL, 'hanam131298@gmail.com', '2020-08-09 04:06:17', '$2y$10$Nn.0GIZbYUdzf/Hv6P3sNePIkI7nXNBume3KCnGbE5axutg9yUhra', 0, 0, 'JtMZUIpbIGkBpop6HN8JVAqHMJY5JPDuIABgRplaTiLI6u0QMm6ybJj5RLbU', '2020-08-09 04:06:17', '2020-08-09 04:06:17', 'https://lh6.googleusercontent.com/-NtCmWvFa1pQ/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuclKKpt8OHf-q5qc1zvPBt9XfmovEA/photo.jpg'),
(88, 'Son Tran', NULL, NULL, NULL, NULL, '4', '12', '14140', NULL, NULL, NULL, NULL, 'son.tv1509@gmail.com', '2020-08-12 08:56:36', '$2y$10$OWOAqDG5rke84NWEEYV3vOd/2ox2BYu7NoCqUeI9iwz0eYwXLkvo2', 0, 0, 'qzUHLfpZwyEEYJuVAKDd79P4VuxdkkpPyTdkCXlcxf2LCqUc286GFFwWUpYv', '2020-08-12 08:56:36', '2020-08-12 08:56:36', 'https://lh5.googleusercontent.com/-6Gs_hLF8uqs/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucnNPdlmxNFrA9QWt3lylkK-Ip1FFg/photo.jpg'),
(89, 'Nguyễn Hoàng Phúc', NULL, NULL, NULL, NULL, '4', '12', '14140', NULL, NULL, NULL, NULL, 'nguyenhoangphuc16081998@gmail.com', '2020-08-12 13:32:58', '$2y$10$mzzIfScGNsxdNj3xxg2DgeICADeEGGhxERBr4xBKAYjk6Ap6PkZM2', 0, 0, 'l3PsURDUUkMztpdqrXPlPvGFzgXBxLia95xT9WSK6dhKYYCsLJk5yLcuJF8P', '2020-08-12 13:32:58', '2020-08-12 13:32:58', 'https://graph.facebook.com/v3.3/341831460176494/picture?type=normal'),
(90, 'Best Giải Trí VN', NULL, NULL, NULL, NULL, '4', '12', '14140', NULL, NULL, NULL, NULL, 'tantaiphan150@gmail.com', '2020-08-12 13:36:38', '$2y$10$RX.pjT64sM9fq4NCt63aMOia1BAF9i9/Qvuhq1rAWlTbWDXuafnR2', 0, 0, 'WjxxlL2I9EIineggfVGXb9jwemV0jbs264japXRbAbeRsZvWtewX645YKCnA', '2020-08-12 13:36:38', '2020-08-12 13:36:38', 'https://lh3.googleusercontent.com/a-/AOh14Gie8sNGaNQzPR6ObkyV8vU1NcbE9ww7mkOqnrIM'),
(91, 'Tran Ngoc Quan', '1998-10-20', 1, NULL, NULL, '4', '9', NULL, 'asdad', 'asdad', 'ad', 'adasd', 'anchodien1@gmail.com', '2020-08-14 08:36:02', '$2y$10$ulSRfjhBrs.s/TpO5ZuGXeZjmApeBVHSOtxRyN4nf2c6.Ve/dKYa.', 0, 0, NULL, '2020-08-14 08:35:22', '2020-08-14 08:36:02', 'img/user.jpg'),
(93, 'Nguyễn', '1998-12-29', 1, NULL, NULL, '4', '18', '378', NULL, NULL, NULL, NULL, 'snowwind15@yahoo.com.vn', '2020-08-14 14:42:05', '$2y$10$w/twzuXkqt9hmePA7XP.1OxvEPbuFG9pQ6Zu2t2bqgbro0N9lyYCG', 0, 1, 'vo1ES2dWrJN4v4U1d7rozNyy2jqC1So8buqdD0GLdB4jSl4nGJHOxD1irbJv', '2020-08-14 14:42:05', '2020-08-14 14:53:40', 'https://graph.facebook.com/v3.3/2914624048666621/picture?type=normal'),
(94, 'chan zack', NULL, NULL, NULL, NULL, '4', '12', '14140', NULL, NULL, NULL, NULL, 'zackchan337@gmail.com', '2020-08-14 16:11:56', '$2y$10$Lo1kwgtGtKqjXHaUDzkJgefuPXjHoRWP.aTy4L9UCI2q76uCabtCa', 0, 0, 'BsvinNd34oCbOIbOA7f7Q5OH6OfiRt0cYgtZSdE8fwZajEinVLCiit5RUnHI', '2020-08-14 16:11:56', '2020-08-15 15:46:52', 'https://lh6.googleusercontent.com/-wELB8Ui_zZw/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucmI1OFlXwzLC-oa79IOQMaUn1wupg/photo.jpg'),
(102, 'Nhật Long Nguyễn Bạch', NULL, NULL, NULL, NULL, '4', '12', '14140', NULL, NULL, NULL, NULL, 'nguyenbachnhatlong@gmail.com', '2020-08-17 09:36:39', '$2y$10$tS1eeix7pJTABdRupKFXAOkRH.2SDEAiw5U9VnzgV.MLx9ETLk4OC', 0, 0, 'g4ulaMYhbvNk76FQMhzt1ebIZ7JIBUfOx5l0VdOHnhtGgXX9R1QRYjEBo4xK', '2020-08-17 09:36:39', '2020-08-17 09:36:39', 'https://lh3.googleusercontent.com/a-/AOh14GiMZY7Nxw58mE26_Gv7qhXZAfAJ9fO4-fo84nbx'),
(104, 'Mạnh Huy', NULL, 1, 'Không', NULL, '4', '15', '2300', NULL, NULL, NULL, NULL, 'spidercater20@gmail.com', '2020-08-24 15:07:20', '$2y$10$VM0melFW4VRRFfagxTG0yu6C9cF0QOl.L8VQFAKrwec13xbGuXJIS', 0, 0, 'fFORGu4Jj5SFRTORHERPkjHM0hosMVwhIzLpN1Kx1WUWBDBV8wqmYBhPdX6X', '2020-08-24 15:07:20', '2020-08-24 15:10:19', 'https://graph.facebook.com/v3.3/2826069457674560/picture?type=normal'),
(105, 'abc', NULL, 0, 'Không', NULL, '4', '12', '14140', NULL, NULL, NULL, NULL, 'acmadentuthienduong0688@gmail.com', '2020-08-24 15:11:03', '$2y$10$Cfl5Cyt/ps2CQtYza0YOju9QqVZA7PKHO510UdVEuwGT1PEEHU692', 0, 0, 'Wkst3uQFEEm4hrrtpFVOpI7ju9bsPhVD1I8naVNtATK0aNdRLKtQgt5TNqe0', '2020-08-24 15:11:03', '2020-08-24 15:16:18', 'https://lh5.googleusercontent.com/-6kUOH6pcJ5c/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucnUY2QxbCUJ8Esk4a-bB8vz-ufztw/photo.jpg'),
(106, 'Tuấn', '1997-01-14', 1, 'Không', NULL, '4', '18', '402', NULL, NULL, NULL, NULL, 'ohmanso97@gmail.com', '2020-08-24 15:27:59', '$2y$10$4.dLE4R9x5wySSYWlIm1r.3WcGA/FRnC13QFiYay1OKso7PwP1rcm', 0, 0, '90WzUWLwMVDCsE5sdJQvJET97RDKYqhMapCMVyuFMKcyDAfZqFcMNgc2Elcb', '2020-08-24 15:27:59', '2020-08-24 15:30:09', 'https://lh3.googleusercontent.com/-5nt6DhblaXI/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucn_AT8ZcK1tDcuhPHyM1l0wChMaUw/photo.jpg'),
(107, 'Mộng Thu', NULL, NULL, NULL, NULL, '4', '12', '14140', NULL, NULL, NULL, NULL, 'mongthu2301@gmail.com', '2020-08-24 15:42:14', '$2y$10$Z8eqzFTrTRlVzYl7KmFfk.furZvYsNOL0R9ryvTs3HHvWGEVvsRBS', 0, 0, 'Ji4ieJCRuN9kBp8KYc6pGYwff11XC5EyhstA9mdcO6b171gCxbwUFpNmBFJC', '2020-08-24 15:42:14', '2020-08-24 15:42:14', 'https://graph.facebook.com/v3.3/309900107007359/picture?type=normal'),
(108, 'Tuan Le Hoang', NULL, NULL, NULL, NULL, '4', '12', '14140', NULL, NULL, NULL, NULL, 'dh51905085@student.stu.edu.vn', '2020-08-24 16:09:32', '$2y$10$wwovClGe65fByyUIiqcb.ufBnnMJiTlwb0EHOgXrpULCGF64GD1GO', 0, 0, 'f3yngv8kvvgAyW8nx3AceQTeIXPQIZkesw5Q4YIKoXXHYIrV6nfiTGZl6rOC', '2020-08-24 16:09:32', '2020-08-24 16:09:32', 'https://lh6.googleusercontent.com/-F1rf0VzlOtY/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuck-txQXwbXz_nAux7-IaaLooYBzBA/photo.jpg'),
(109, 'Cherry Lê', '1995-01-28', 0, 'Không', NULL, '14', '172', '2897', 'Nhân viên văn phòng', NULL, NULL, NULL, 'hang10.avcnqd@gmail.com', '2020-08-26 07:09:29', '$2y$10$vBE31RtXGvGtQ9vsFDbLYeRl3Fuas5ajuqTQj23VCINbPYPD7hvjy', 0, 0, '9fF8AgMs2nCzq4n64KhlazuRnVuc3oQW0kxiXVP75f5Z51zTi68nTPurXj0P', '2020-08-26 07:09:29', '2020-08-26 07:11:22', 'https://lh3.googleusercontent.com/a-/AOh14GgqhPEU_lI5seFh7a63WYTjOQoFODvw95_EeF49nQ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `abum_blog`
--
ALTER TABLE `abum_blog`
  ADD PRIMARY KEY (`abum_log`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id_album`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_category` (`Id_category`);

--
-- Chỉ mục cho bảng `category_blog`
--
ALTER TABLE `category_blog`
  ADD PRIMARY KEY (`Id_category`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_post` (`id_post`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_email_unique` (`email`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_1` (`user_id_1`),
  ADD KEY `user_id_2` (`user_id_2`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `id_album` (`id_album`);

--
-- Chỉ mục cho bảng `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Id_review`),
  ADD KEY `id` (`id`);

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
-- AUTO_INCREMENT cho bảng `abum_blog`
--
ALTER TABLE `abum_blog`
  MODIFY `abum_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `albums`
--
ALTER TABLE `albums`
  MODIFY `id_album` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `category_blog`
--
ALTER TABLE `category_blog`
  MODIFY `Id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT cho bảng `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `Id_review` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `abum_blog`
--
ALTER TABLE `abum_blog`
  ADD CONSTRAINT `abum_blog_ibfk_1` FOREIGN KEY (`id`) REFERENCES `blog` (`id`);

--
-- Các ràng buộc cho bảng `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`Id_category`) REFERENCES `category_blog` (`Id_category`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`);

--
-- Các ràng buộc cho bảng `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_ibfk_1` FOREIGN KEY (`user_id_1`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `friends_ibfk_2` FOREIGN KEY (`user_id_2`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `albums` (`id_album`);

--
-- Các ràng buộc cho bảng `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
