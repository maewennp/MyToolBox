
CREATE TABLE `admin_messages` (
      `id` int(11) NOT NULL,
      `name` varchar(20) NOT NULL,
      `email` text NOT NULL,
      `subject` varchar(255) NOT NULL,
      `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_messages`
--

INSERT INTO `admin_messages` (`id`, `name`, `email`, `subject`, `message`) VALUES
   (2, 'John', 'john@yopmail.fr', 'Demande de fonctionnalité', 'Bonjour,\r\n\r\nPourriez-vous ajouter l option de convertir des euros en n importe quelle devise ?\r\n\r\nÉgalement, je trouverai cela super d avoir la possibilité de convertir des ML en L (pour la cuisine) \r\n\r\nMerci beaucoup, \r\n\r\nJohn'),
   (3, 'John', 'john@yopmail.fr', 'Demande de fonctionnalité', 'J ai du envoyer plusieurs fois le formulaire j ai l impression qu il n accepte pas les apostrophes..');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
    `id` int(11) NOT NULL,
    `form` varchar(30) NOT NULL,
    `data` json DEFAULT NULL,
    `result` json DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `form`, `data`, `result`) VALUES
    (1, 'euros-dollars', '{\"EUR\": \"1\", \"form\": \"euros-dollars\"}', '{\"USD\": 1.037829}'),
    (2, 'euros-dollars', '{\"USD\": \"22\", \"form\": \"euros-dollars\"}', '{\"EUR\": 21.19876}'),
    (3, 'euros-dollars', '{\"EUR\": \"10\", \"form\": \"euros-dollars\"}', '{\"USD\": 10.37829}'),
    (4, 'euros-dollars', '{\"USD\": \"100\", \"form\": \"euros-dollars\"}', '{\"EUR\": 96.358}'),
    (5, 'euros-dollars', '{\"EUR\": \"1\", \"form\": \"euros-dollars\"}', '{\"USD\": 1.037829}'),
    (6, 'euros-dollars', '{\"USD\": \"0.5\", \"form\": \"euros-dollars\"}', '{\"EUR\": 0.48179}'),
    (7, 'euros-dollars', '{\"USD\": \"0,5\", \"form\": \"euros-dollars\"}', '{\"EUR\": 0}'),
    (8, 'euros-dollars', '{\"EUR\": \"1\", \"form\": \"euros-dollars\"}', '{\"USD\": 1.037829}'),
    (9, 'euros-dollars', '{\"EUR\": \"23\", \"form\": \"euros-dollars\"}', '{\"USD\": 23.870067}'),
    (10, 'euros-dollars', '{\"USD\": \"3\", \"form\": \"euros-dollars\"}', '{\"EUR\": 2.89074}'),
    (11, 'percent', '{\"of\": \"50\", \"form\": \"percent\", \"percent\": \"50\"}', '{\"result\": 25}'),
    (12, 'percent', '{\"form\": \"percent\", \"result\": \"10\", \"percent\": \"10\"}', '{\"of\": 100}'),
    (13, 'percent', '{\"of\": \"3\", \"form\": \"percent\", \"result\": \"100\"}', '{\"percent\": 3}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_messages`
--
ALTER TABLE `admin_messages`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_messages`
--
ALTER TABLE `admin_messages`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;
