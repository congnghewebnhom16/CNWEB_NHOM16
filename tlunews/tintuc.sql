CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Đang đổ dữ liệu cho bảng `categories`
INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Công nghệ thông tin'),
(2, 'Khoa học đời sống'),
(3, 'Kinh tế - Tài chính'),
(4, 'Thể thao'),
(5, 'Giải trí');

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Đang đổ dữ liệu cho bảng `news`
INSERT INTO `news` (`id`, `title`, `content`, `image`, `created_at`, `category_id`) VALUES
(1, 'Ra mắt chatbot AI thế hệ mới', 'Chatbot AI mới của Công ty ABC hứa hẹn sẽ thay đổi cách con người tương tác với máy tính.', 'ai_news.jpg', '2024-12-01 08:00:00', 1),
(2, 'Ứng dụng blockchain trong y tế', 'Công nghệ blockchain đang dần khẳng định vị trí trong việc bảo mật và quản lý hồ sơ y tế.', 'blockchain_health.jpg', '2024-12-01 09:00:00', 2),
(3, 'Báo cáo tăng trưởng kinh tế quý IV', 'GDP quý IV của Việt Nam đạt mức tăng trưởng 6.8%, cao hơn kỳ vọng ban đầu.', 'economic_growth.jpg', '2024-12-01 10:00:00', 3),
(4, 'Đội tuyển bóng đá U23 vô địch SEA Games', 'U23 Việt Nam giành chiến thắng 2-1 trước Thái Lan trong trận chung kết.', 'football_win.jpg', '2024-12-01 11:00:00', 4),
(5, 'Phim bom tấn mùa Giáng sinh', 'Bộ phim "Kỳ nghỉ kỳ diệu" đã thu về 100 triệu USD sau tuần công chiếu đầu tiên.', 'holiday_movie.jpg', '2024-12-01 12:00:00', 5),
(6, 'Bảo mật thông tin cá nhân trong thời đại số', 'Người dùng cần nâng cao nhận thức để bảo vệ thông tin cá nhân trên không gian mạng.', 'cyber_security.jpg', '2024-12-02 08:00:00', 1),
(7, 'Phát hiện loài thực vật mới', 'Các nhà khoa học vừa tìm thấy một loài thực vật mới tại Vườn quốc gia Cát Tiên.', 'new_plant.jpg', '2024-12-02 09:00:00', 2),
(8, 'Xu hướng đầu tư chứng khoán năm 2025', 'Thị trường chứng khoán dự báo sẽ tiếp tục tăng trưởng mạnh mẽ nhờ chính sách kích thích kinh tế.', 'stock_trends.jpg', '2024-12-02 10:00:00', 3),
(9, 'Cầu thủ xuất sắc nhất năm 2024', 'Tiền đạo Nguyễn Văn A được vinh danh là cầu thủ xuất sắc nhất năm.', 'best_player.jpg', '2024-12-02 11:00:00', 4),
(10, 'Lễ trao giải âm nhạc quốc tế', 'Ca sĩ nổi tiếng B giành giải Album của năm với album "Hành trình mới".', 'music_award.jpg', '2024-12-02 12:00:00', 5);

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL CHECK (`role` in (0,1))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Đang đổ dữ liệu cho bảng `users`
INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'user1', 'password1', 0),
(2, 'admin1', 'adminpass1', 1),
(3, 'user2', 'password2', 0),
(4, 'admin2', 'adminpass2', 1),
(5, 'user3', 'password3', 0);

-- Chỉ mục cho các bảng
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT cho các bảng
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

-- Ràng buộc cho bảng `news`
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;
