
CREATE TABLE `admins` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `adminname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileno` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `admins` (`id`, `fname`, `adminname`, `password`, `email`, `mobileno`) VALUES
(3, 'thakur polytechnic co', 'tpolyco', '$2y$10$kAkPjQUc.iiFOZnVJ1AaNOfTBJt7QpnjoKZw3YiQ.7lkbYUBDcwyW', 'tpoly@gmail.com', 14827467);



CREATE TABLE `comment_bsc` (
  `comment_id` int(30) NOT NULL,
  `comment_name` varchar(255) NOT NULL,
  `comment_pp` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `bsc1` int(30) NOT NULL,
  `bsc2` int(30) NOT NULL,
  `bsc3` int(30) NOT NULL,
  `bsc4` int(30) NOT NULL,
  `bsc5` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `comment_bsc` (`comment_id`, `comment_name`, `comment_pp`, `comments`, `bsc1`, `bsc2`, `bsc3`, `bsc4`, `bsc5`) VALUES
(1, 'capstone project', 'cppfour641a75ffdf0459.20045854.jpeg', 'hello', 1, 0, 0, 0, 0);



CREATE TABLE `comment_dm` (
  `comment_id` int(30) NOT NULL,
  `comment_name` varchar(255) NOT NULL,
  `comment_pp` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `dm1` int(30) NOT NULL,
  `dm2` int(30) NOT NULL,
  `dm3` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `comment_dm` (`comment_id`, `comment_name`, `comment_pp`, `comments`, `dm1`, `dm2`, `dm3`) VALUES
(1, 'capstone project', 'cppfour641a75ffdf0459.20045854.jpeg', 'hhgd', 1, 0, 0),
(2, 'Kunal Bhatt', 'kunal64323fc5273509.86900837.jpg', 'hii', 1, 0, 0),
(3, 'Kunal Bhatt', 'kunal64323fc5273509.86900837.jpg', 'hii', 0, 1, 0);



CREATE TABLE `comment_j` (
  `comment_id` int(30) NOT NULL,
  `comment_name` varchar(255) NOT NULL,
  `comment_pp` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `j1` int(30) NOT NULL,
  `j2` int(30) NOT NULL,
  `j3` int(30) NOT NULL,
  `j4` int(30) NOT NULL,
  `j5` int(30) NOT NULL,
  `j6` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `comment_j` (`comment_id`, `comment_name`, `comment_pp`, `comments`, `j1`, `j2`, `j3`, `j4`, `j5`, `j6`) VALUES
(1, 'Kunal Bhatt', 'kunal64323fc5273509.86900837.jpg', 'hii', 1, 0, 0, 0, 0, 0);



CREATE TABLE `comment_py` (
  `comment_id` int(255) NOT NULL,
  `comment_name` varchar(255) NOT NULL,
  `comment_pp` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `p1` int(30) NOT NULL,
  `p2` int(30) NOT NULL,
  `p3` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `comment_py` (`comment_id`, `comment_name`, `comment_pp`, `comments`, `p1`, `p2`, `p3`) VALUES
(1, 'Kunal Bhatt', 'kunal64323fc5273509.86900837.jpg', 'kii', 1, 0, 0);



CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `c_user` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `contact` (`id`, `c_user`, `c_email`, `c_message`) VALUES
(3, 'Vedant Mangesh Navthale', 'vedant@gmail.com', 'Message');



CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL DEFAULT 'default-pp.png',
  `mobileno` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pynum` int(255) NOT NULL,
  `jnum` int(255) NOT NULL,
  `dmnum` int(255) NOT NULL,
  `bscnum` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `users` (`id`, `fname`, `username`, `password`, `pp`, `mobileno`, `email`, `pynum`, `jnum`, `dmnum`, `bscnum`) VALUES
(1, 'Kunal Bhatt', 'kunal', '$2y$10$jYMUBvxcNxoPn4R7f7l1ruYFeSZLw1yT2PWe1AC.BqU0pvk4A36wu', 'kunal64323fc5273509.86900837.jpg', 123456789, 'king123@gmail', 4, 0, 0, 0);


ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `comment_bsc`
  ADD PRIMARY KEY (`comment_id`);


ALTER TABLE `comment_dm`
  ADD PRIMARY KEY (`comment_id`);


ALTER TABLE `comment_j`
  ADD PRIMARY KEY (`comment_id`);


ALTER TABLE `comment_py`
  ADD PRIMARY KEY (`comment_id`);


ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `admins`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `comment_bsc`
  MODIFY `comment_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `comment_dm`
  MODIFY `comment_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `comment_j`
  MODIFY `comment_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `comment_py`
  MODIFY `comment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
