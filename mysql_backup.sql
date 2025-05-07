SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_entry`
--

CREATE TABLE `blog_entry` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `blurb` varchar(100) NOT NULL,
  `body` longtext NOT NULL,
  `img` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `slug` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blog_entry`
--

INSERT INTO `blog_entry` (`id`, `title`, `blurb`, `body`, `img`, `date`, `slug`) VALUES
(1, 'Great Blog', 'Id corrupti perferendis non numquam voluptas!', '<p>Lorem ipsum dolor sit amet. Ut eligendi explicabo in pariatur repellat ea sint impedit non suscipit expedita ad numquam consequatur. Sed consequatur voluptatum sed quia consequuntur et deleniti delectus et reiciendis numquam. Ea dolorem ducimus in libero omnis aut quia facere eos omnis voluptatibus et suscipit debitis. Aut dignissimos nihil qui adipisci ducimus et sunt corporis et molestiae impedit in ipsam obcaecati id vitae blanditiis!</p>\r\n\r\n<p>Id corrupti perferendis non numquam eius est libero inventore et quod molestiae aut aspernatur commodi cum provident voluptas! Eum magni ullam qui iste pariatur et dolorem tempore aut aperiam quidem ut debitis placeat. Ut expedita excepturi id commodi voluptas aut quibusdam earum 33 amet unde qui accusantium distinctio et reprehenderit laborum qui doloribus voluptas. Ea quibusdam ipsam qui natus repellendus est officia debitis qui mollitia doloribus hic internos aperiam ex excepturi illo.</p>\r\n\r\n<p>Est asperiores sint qui facilis dolorum eum fugiat doloribus et cumque nihil. Eum quas distinctio aut veritatis nihil ut minus maiores aut exercitationem odit aut illo dolore et vitae voluptas.</p>\r\n', 'blog1.jpg', '2025-03-25 01:43:48', 'blog1'),
(2, 'Another Blog', 'Et recusandae magni ab illum sunt a perspiciatis sunt et aliquam eligendi. ', '<p>Lorem ipsum dolor sit amet. Et quibusdam quos qui minus nihil in voluptate iste et corrupti rerum sit obcaecati voluptas eum consequatur voluptas aut deleniti internos. Aut nulla quia sed expedita magnam sit iusto quibusdam sit quisquam dolor ut quidem eveniet. Quo perferendis omnis qui voluptatem internos sed dolor numquam eos voluptatibus sapiente. Ut nesciunt nesciunt est corporis commodi aut quam omnis non totam assumenda eum saepe maxime ut libero rerum! </p>\r\n\r\n<p>Ea reiciendis reiciendis est iusto reiciendis et nobis facere aut maxime voluptatem vel atque dolorum ut accusamus aperiam. Ut fugit exercitationem sit facilis fugiat a quisquam iusto non officia harum id libero voluptatem. Est recusandae corporis et impedit placeat a voluptas pariatur qui aliquid inventore sed dolore sapiente et molestiae dolor. Eos quas nemo eos praesentium eaque sed sint possimus nam molestias quibusdam et libero assumenda qui asperiores eius? </p>\r\n\r\n<p>Et recusandae magni ab illum sunt a perspiciatis sunt et aliquam eligendi. Aut fugiat sunt et molestiae suscipit qui veritatis possimus At voluptatem delectus est commodi iure et maxime Quis id mollitia totam. Non culpa quasi est repellat ipsam et omnis facere sit sunt incidunt est porro accusantium. Ea reiciendis ullam ad dolor aliquid et ducimus autem quo amet excepturi. </p>\r\n', 'blog2.jpg', '2025-03-24 01:47:46', 'blog2'),
(3, 'Neat Blog', 'Aut commodi voluptas et nulla similique.', '<p>Lorem ipsum dolor sit amet. Hic soluta nobis hic ipsam facere ut voluptate saepe ut distinctio officiis. Sed internos tenetur ea beatae dolores et consequatur quisquam ea perferendis dignissimos id molestiae repellat est culpa placeat ab aliquam vitae. Ab quis repellendus nam soluta sapiente 33 dicta cupiditate. Ex porro deleniti aut cupiditate impedit est dolor modi. </p>\r\n\r\n<p>Sit iure harum id maxime voluptas qui accusantium impedit non quam amet rem saepe galisum. Ut voluptatem aliquam et rerum sunt qui animi nihil et tempora delectus id amet cumque. Aut commodi voluptas et nulla similique aut error voluptatem aut temporibus quia ut eius accusantium. </p>\r\n\r\n<p>Et voluptatem voluptatem vel minima soluta rem sequi eligendi hic expedita perferendis et quaerat quibusdam aut rerum explicabo vel odit expedita. Sed iure officiis aut nisi voluptate eum ipsa sunt est enim earum? Est labore nobis aut sunt natus est quibusdam iure. Et doloremque quaerat est dolorum odit et dolorum pariatur id quae minus. </p>\r\n', 'blog3.jpg', '2025-03-18 01:53:49', 'blog3');

-- --------------------------------------------------------

--
-- Table structure for table `project_entry`
--

CREATE TABLE `project_entry` (
  `id` int NOT NULL,
  `name` varchar(60) NOT NULL,
  `blurb` varchar(150) NOT NULL,
  `body` longtext NOT NULL,
  `img` varchar(50) NOT NULL,
  `github` varchar(100) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img_txt` varchar(50) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `project_entry`
--

INSERT INTO `project_entry` (`id`, `name`, `blurb`, `body`, `img`, `github`, `slug`, `create_date`, `img_txt`, `disabled`) VALUES
(1, 'Big Project', 'Duis auctor quis mauris ut finibus.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget vestibulum mi. Sed ornare, nunc eu porta ultricies, nisi libero facilisis nunc, quis aliquam justo sapien sed felis. Aenean pharetra nec massa a congue. Morbi maximus, felis nec mattis scelerisque, ipsum elit lobortis tortor, nec sodales dui mauris et eros. Nunc sed leo lacus. Sed dapibus nisi luctus, viverra dolor sed, sollicitudin nunc. Quisque ornare convallis magna, eu commodo turpis lobortis sit amet. Suspendisse tempor risus vel nunc imperdiet, vel consequat nisi elementum. Curabitur dictum diam non justo lacinia vulputate. Etiam ac sapien ac metus finibus congue at vitae turpis. Proin iaculis gravida nulla vel pretium. Suspendisse potenti. Sed finibus nibh eget odio condimentum, eget iaculis felis varius. Sed scelerisque diam at sem venenatis, faucibus bibendum sapien pretium. Cras eleifend ut lectus id efficitur. Suspendisse lobortis leo vitae ligula tincidunt aliquam.</p>\r\n\r\n<p>Duis auctor quis mauris ut finibus. Vestibulum a tortor ornare, finibus diam quis, lobortis turpis. Mauris pulvinar arcu ac nulla pulvinar, sed elementum leo tincidunt. Integer vitae dui enim. Vestibulum pellentesque libero est. Integer laoreet est nisl, tincidunt sagittis tortor consectetur nec. Sed commodo ipsum metus, a rutrum lacus tincidunt id. Aenean convallis finibus libero, nec euismod mauris lobortis ut. Nam blandit leo ac tincidunt faucibus. Praesent sed lacus egestas, pellentesque mauris eget, vehicula augue.</p>\r\n\r\n<p>Praesent consequat tempor sem interdum pulvinar. Proin interdum magna in consectetur dapibus. Proin sed gravida libero. Sed sed quam vel leo feugiat interdum. Nam sed tortor quam. Donec nisl nunc, egestas a lacinia vitae, convallis a nibh. Quisque vulputate leo a purus suscipit cursus vel ut nibh. Ut fermentum luctus massa, in tristique est venenatis eget. Cras eu luctus nunc.</p>\r\n\r\n<p>Proin maximus sed sapien egestas eleifend. In hac habitasse platea dictumst. Nulla blandit, velit vitae interdum faucibus, tellus erat commodo quam, nec sodales enim ante in purus. In aliquam ultrices arcu, ut tempus lectus imperdiet eget. Cras ante mauris, iaculis vel risus sed, posuere sodales nisi. Sed id elit nunc. Duis sit amet euismod mauris, a bibendum mi. Cras efficitur aliquam nisi, et imperdiet velit scelerisque nec. Nulla sit amet ipsum id nisl venenatis eleifend sed ut neque. Pellentesque euismod eros ac molestie tempus. Aliquam est justo, placerat nec tempus eget, porttitor ac dolor. Nullam dignissim pretium enim. Aenean urna est, euismod et dictum et, semper et diam.</p>', 'project1.jpg', 'fakeprojectexample1', 'project1', '2025-03-01 00:24:29', 'Project 1 Image', 0),
(2, 'Small Project', 'Aenean convallis finibus libero, nec euismod mauris lobortis ut.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget vestibulum mi. Sed ornare, nunc eu porta ultricies, nisi libero facilisis nunc, quis aliquam justo sapien sed felis. Aenean pharetra nec massa a congue. Morbi maximus, felis nec mattis scelerisque, ipsum elit lobortis tortor, nec sodales dui mauris et eros. Nunc sed leo lacus. Sed dapibus nisi luctus, viverra dolor sed, sollicitudin nunc. Quisque ornare convallis magna, eu commodo turpis lobortis sit amet. Suspendisse tempor risus vel nunc imperdiet, vel consequat nisi elementum. Curabitur dictum diam non justo lacinia vulputate. Etiam ac sapien ac metus finibus congue at vitae turpis. Proin iaculis gravida nulla vel pretium. Suspendisse potenti. Sed finibus nibh eget odio condimentum, eget iaculis felis varius. Sed scelerisque diam at sem venenatis, faucibus bibendum sapien pretium. Cras eleifend ut lectus id efficitur. Suspendisse lobortis leo vitae ligula tincidunt aliquam.</p>\r\n\r\n<p>Duis auctor quis mauris ut finibus. Vestibulum a tortor ornare, finibus diam quis, lobortis turpis. Mauris pulvinar arcu ac nulla pulvinar, sed elementum leo tincidunt. Integer vitae dui enim. Vestibulum pellentesque libero est. Integer laoreet est nisl, tincidunt sagittis tortor consectetur nec. Sed commodo ipsum metus, a rutrum lacus tincidunt id. Aenean convallis finibus libero, nec euismod mauris lobortis ut. Nam blandit leo ac tincidunt faucibus. Praesent sed lacus egestas, pellentesque mauris eget, vehicula augue.</p>', 'project2.jpg', 'fakeprojectexample2', 'project2', '2025-03-02 00:24:29', 'Project Image 2', 0),
(3, 'Recent Project', 'Curabitur vitae est vel tortor porta finibus.', '<p>Duis auctor quis mauris ut finibus. Vestibulum a tortor ornare, finibus diam quis, lobortis turpis. Mauris pulvinar arcu ac nulla pulvinar, sed elementum leo tincidunt. Integer vitae dui enim. Vestibulum pellentesque libero est. Integer laoreet est nisl, tincidunt sagittis tortor consectetur nec. Sed commodo ipsum metus, a rutrum lacus tincidunt id. Aenean convallis finibus libero, nec euismod mauris lobortis ut. Nam blandit leo ac tincidunt faucibus. Praesent sed lacus egestas, pellentesque mauris eget, vehicula augue.</p>\r\n\r\n<p>Praesent consequat tempor sem interdum pulvinar. Proin interdum magna in consectetur dapibus. Proin sed gravida libero. Sed sed quam vel leo feugiat interdum. Nam sed tortor quam. Donec nisl nunc, egestas a lacinia vitae, convallis a nibh. Quisque vulputate leo a purus suscipit cursus vel ut nibh. Ut fermentum luctus massa, in tristique est venenatis eget. Cras eu luctus nunc.</p>\r\n\r\n<p>Proin maximus sed sapien egestas eleifend. In hac habitasse platea dictumst. Nulla blandit, velit vitae interdum faucibus, tellus erat commodo quam, nec sodales enim ante in purus. In aliquam ultrices arcu, ut tempus lectus imperdiet eget. Cras ante mauris, iaculis vel risus sed, posuere sodales nisi. Sed id elit nunc. Duis sit amet euismod mauris, a bibendum mi. Cras efficitur aliquam nisi, et imperdiet velit scelerisque nec. Nulla sit amet ipsum id nisl venenatis eleifend sed ut neque. Pellentesque euismod eros ac molestie tempus. Aliquam est justo, placerat nec tempus eget, porttitor ac dolor. Nullam dignissim pretium enim. Aenean urna est, euismod et dictum et, semper et diam.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer arcu nisl, interdum vitae orci nec, iaculis consequat leo. Sed feugiat nunc a tortor lacinia, vitae vestibulum risus ullamcorper. Donec et tristique elit, vel pharetra ante. Curabitur vitae est vel tortor porta finibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dapibus sed urna in pharetra. Nulla id laoreet neque, eget rutrum nulla. Donec et tellus lectus. Praesent euismod enim vel neque suscipit dapibus. In porttitor diam id quam ultrices, et pharetra dolor tristique. Nam malesuada turpis non suscipit tempor. Suspendisse eros est, ornare eget elementum quis, laoreet non ligula. Curabitur commodo eu nunc sed vestibulum. Etiam bibendum sem ac ipsum porta auctor.</p>', 'project3.jpg', 'fakeprojectexample3', 'project3', '2025-03-03 00:24:29', 'Project Image 3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_entry`
--
ALTER TABLE `blog_entry`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_slug` (`slug`);

--
-- Indexes for table `project_entry`
--
ALTER TABLE `project_entry`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proj_slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_entry`
--
ALTER TABLE `blog_entry`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_entry`
--
ALTER TABLE `project_entry`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
