-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2016 at 12:09 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping`
--
CREATE DATABASE IF NOT EXISTS `shopping` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shopping`;

-- --------------------------------------------------------

--
-- Table structure for table `addcat`
--

CREATE TABLE IF NOT EXISTS `addcat` (
  `Cat_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Cat_name` varchar(30) NOT NULL,
  `Cat_pic` varchar(80) NOT NULL,
  PRIMARY KEY (`Cat_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Dumping data for table `addcat`
--

INSERT INTO `addcat` (`Cat_ID`, `Cat_name`, `Cat_pic`) VALUES
(100, 'Gifts for her', 'Gifts-For-Women.jpg'),
(101, 'Gifts for him', 'ui.png'),
(102, 'Gifts for baby', 'Capture.PNG'),
(103, 'Gifts for Kids', 'giftforkid.jpg'),
(104, 'Others', 'personwithgift.jpg'),
(105, 'Anniversary Gifts', 'anniversary.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE IF NOT EXISTS `addproduct` (
  `Product_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Cat_ID` int(10) NOT NULL,
  `Subcat_ID` int(10) NOT NULL,
  `ProductName` varchar(30) NOT NULL,
  `Rate` int(10) NOT NULL,
  `Feature` varchar(500) NOT NULL,
  `Picture` varchar(80) NOT NULL,
  PRIMARY KEY (`Product_ID`),
  KEY `ProductName` (`ProductName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5175 ;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`Product_ID`, `Cat_ID`, `Subcat_ID`, `ProductName`, `Rate`, `Feature`, `Picture`) VALUES
(5003, 100, 13, ' BENETTON HOT', 498, 'For Her -Induces a feminine mystique of every woman. Quantity 150ml.', 'benetton hot.jpg'),
(5004, 100, 13, 'NIKE', 458, ' 	For Her - This aromaic woody amber scent is her perfect accessory. Quantity 150ml.', 'nike.jpg'),
(5005, 100, 14, 'A Fabulous Selection', 1098, 'A fabulous selection of assorted Chocolates. This product is packed in a nice Jute basket Hamper.', 'a fabulous selection.jpg'),
(5006, 100, 14, 'Double Celebration', 598, 'Cadbury Celebrations chocolates (246 gms + 147.7 gms). ', 'double celebration.jpg'),
(5007, 100, 16, 'Beautiful World', 698, 'Soft toy is the finest thing to gift your beloved one. Hamper Includes: 2 puppy soft toys 6 inch.', 'beatiful world.jpg'),
(5008, 100, 14, 'Hugging Love', 698, 'I love you now and forever. Hamper Includes: 2 teddy bears 6 inch in a nice basket. ', 'hugging love.jpg'),
(5009, 100, 14, 'Keep me by ur side', 1348, ' 	Amaze your dear most with this. Gift this to her/him and win him/her heart. Hamper includes: 2 teddy and chocolates', 'keep me ur side.jpg'),
(5010, 100, 14, ' Lindt pistachio chocolate', 1348, 'Lindt Pistachio Chocolate 100gm , Lindt Strawberry 100 with 2 Potpourri 100gms each. ', 'lindt pistachio chocolate.jpg'),
(5011, 100, 14, ' Sweet memories', 1444, 'A very attractive soft toy hamper. An ideal gift for your sweet heart. Hamper Includes: 2 teddy bear', 'sweet memories.jpg'),
(5012, 100, 14, 'The stunning Basket', 1098, 'This is one of the most widely used gift baskets.Hamper includes: Twix chocolate 58gm, Toblerone chocolates 50gm.', 'the stuning basket.jpg'),
(5013, 100, 14, 'Missing u sweety', 1299, 'Convey your heartly feelings to your dear one by gifting this cute hamper on any occasion.', 'missing you sweety.jpg'),
(5014, 100, 15, ' Bonding of love', 998, 'A Hamper of Spiral Lucky bamboo along with a glass vase along with 100gm assorted home made chocolates.. DISCLAIMER 1. Orders will be delivered within 3-4 working days. 2. Above products will delivered through Blue Dart , First Flight Courier. 3. The above product will be delivered all over India. 4. No Deliveries on National Holidays and Sundays.', 'bonding of love.jpg'),
(5015, 100, 15, 'Spiral goodluck', 748, 'Spiral Good Luck Plant. DISCLAIMER 1. Orders will be delivered within 3-4 working days. 2. Above products will delivered through Blue Dart , First Flight Courier. 3. The above product will be delivered all over India. 4. No Deliveries on National Holidays and Sundays.', 'spiral good luck plant.jpg'),
(5016, 100, 15, 'Spiral arrangement', 2000, 'Sending good luck plant, lucky bamboos as a gift is for good ... 6 sticks of spiral Good Luck Plant for your loved ones. The Bamboo plant is very easy to maintain as well. It is tough and resilient and does not require any direct sunlight and can grow indoors', 'spiral arrangement.jpg'),
(5018, 100, 15, 'Talking cocks: Wooden Wall Han', 800, 'Alarming cocks has been portrayed in a wooden wall hanging handcrafted Deal wood which is being processed with a distinctive burnt finish. The material used is deal wood with burnt finish. Full on beauty on this piece is added on by skillful etchings and fine carvings. Cleaning of these hangings is very easy just by a soft brush.', 'Talking Cocks wooden wall HANGING.jpg'),
(5019, 100, 15, ' 	Divine Love: Wooden Wall Han', 800, 'The beautiful idol of Radha Krishna in a leaf shape wall hanging.', 'divine love-radha krishna wooden wall hnaging.jpg'),
(5020, 100, 15, 'Cool Blue Planter : Handcrafte', 895, 'This smart metal planter is 13 inches X 6 inches in size and it can be used in many ways. It can be used as flower vases and also for planting small plant. This planter also has an advantage that its paint will never be peeled off because it is painted with POWDER COATED PAINT which will help it to retain its shine and smoothness for a longer time. This metal bowl will surely add more grace to your collection of metal bowls.', 'tokenz-skmprd030.jpg'),
(5021, 100, 15, 'Flower Vase', 800, 'This smart metal planter is 11 inches X 5 inches in size and it can be used in many ways. It can be used as flower vases and also for planting small plant. This planter also has an advantage that its paint will never be peeled off because it is painted with POWDER COATED PAINT which will help it to retain its shine and smoothness for a longer time. This metal bowl will surely add more grace to your collection of metal bowls. Size- 11 inches X 5 inches', 'tokenz-skmprd029.jpg'),
(5022, 100, 15, 'Carved Metal Lamp', 1899, 'Richly carved white metal table lamp which will enthrall all! Detailed carvings on the hood and the bottom, speak volumes about the dexterous craftsmanship of the Indian artisans. At the top of the metal hood a peacock in white metal adds class to its grandiosity. Traditional Indian motifs are carved all over this beauty in white metal. Height: 12 inches', 'tokenz-nahprd055.jpg'),
(5023, 100, 15, ' 	Steel fish metal flower vase', 775, 'Unique fish shaped steel flower vase.Finely hammared all over.Matt finish.Ideal gift for all occasions like Mother day,Housewarming,Marriages etc.', 'steel  fish.jpg'),
(5024, 100, 15, 'Antique Design Brass wall cloc', 559, 'Specially Designed Meenakari and Gemstone Work Wall Clock with 02 Cross Swords. The Clock is placed in the center of the round stand which depicts a Dhaal used for protection. Size 6X6 inches. ', 'inv-21100060.jpg'),
(5025, 100, 16, 'Brown bear with baby', 449, 'A Cute Brown Bunny with Baby Soft Toy just right for your loved ones.', 'brown teddy bear.jpg'),
(5026, 100, 16, 'Big teddy small teddy', 10000, 'Pamper your love by gifting this Special Collection of eleven assorted big and small teddies. ', 'brwn2.jpg'),
(5027, 100, 16, 'My sweet friends', 700, 'Send this sweet pink teddy on any special occasion. Gift her a friend who will give her company all the time. A glossy pink chiffon dress and satin ribbon bow around its neck makes it looking more cuddlesome. Send this teddy bear to your loved one on a special occasion through us as Gifts to India.', 'sweet.jpg'),
(5028, 100, 16, 'Hug me now', 600, 'Hug Me Now A sweet and cute teddy bear for someone special. This teddy in deep brown color and a bright red bow around its neck will be the best pal of your little daughter in India. So, pamper her by sending this lovely gift. You can also send this teddy bear to all your near and dear ones on a special occasion.', 'hug me now.jpg'),
(5029, 100, 16, 'Sleeping teddy', 750, 'Light up the moments of extreme joy and happiness by sending this cute and loving teddy to your near and dear ones. This teddy looks truly adorable in such a sleeping posture. A gift for any special moments., it can also be used as pillow. Send this cuddling teddy to India as a gift for special someone.', 'sleep.jpg'),
(5030, 100, 16, 'Smiling love', 750, 'Send this cute heart soft toys with arms and leg to your beloved on any special occasion. Express those special matters of heart by sending this soft heart with two hands and two legs. Let this cuddly and cozy love cushion convey those special messages of love in a wonderful way.', 'smilling love.jpg'),
(5031, 100, 16, 'Love twin teddy', 1095, 'Send your love through this Love Twin Teddy to India on the next Valentine. A lovable gift for a lovely lady. Two adorable and cute teddy bear sitting in a cane basket with a soft heart is sure to express your deepest desires of heart. The basket is decorated with glitters and ribbons. Send this enchanting gift to India and make her yours foreve', 'love twin teddy.jpg'),
(5032, 100, 16, 'Cutie Pie', 1295, 'Make the day special for your near and dear ones by sending this Cutie Pie teddy bear to India on any special occasion and festival. A perfect gift idea for your special someone, send this teddy to India and convey your warmest love and care. This is a teddy featuring fine quality fur, and nice fabric is sure to woo those special hearts. Send this alluring gift to India and make a long lasting impression on their mind also.', 'cut.jpg'),
(5033, 100, 17, 'Pendant 3962B', 715, 'Fabulous incredible shiny fashion designer jewelry. 1. Metal : Alloy 2. Main Stone : Austrian diamonds, Crystal stones', 'pendant 3962B.jpg'),
(5034, 100, 17, 'Pendant 3557', 570, 'Beautiful shiny diamonds maroon, green pendant jewelry set. 1. Metal : Alloy 2. Main Stone : Austrian diamonds, Beads ', 'PENDANT 3557.jpg'),
(5035, 100, 17, 'Pendant 3451', 337, 'Beautiful beads studded green pendant jewelry set. 1. Metal : Alloy 2. Main Stone : Kundans, Beads', 'PENDANT 3451.jpg'),
(5036, 100, 17, 'Pendant 3957B', 700, 'Fancy Indian designer gold plated diamond jewelry 1. Metal : Alloy 2. Main Stone : Austrian diamonds, Crystal stones', 'PENDANT 3957B.jpg'),
(5037, 100, 17, 'Pendant 3274A', 700, 'Indian party wear kundans enamel pendant jewelry set. 1. Metal : Alloy 2. Main Stone : Kundans, Beads 3. Material : Enamel work ', 'PENDANT 3274A.jpg'),
(5038, 100, 17, 'Pendant 3961A', 750, 'Antique fashion Indian sterling designer diamond jewelry 1. Metal : Alloy 2. Main Stone : Austrian diamonds, Crystal stone', 'PENDANT3916A.jpg'),
(5039, 100, 17, 'Necklace 3310', 1575, 'Beautiful antique fashion designer kundan necklace sets. 1. Metal : Alloy 2. Material : Enamel work 3. Main Stone : Kundans, Beads', 'NECKLACE 3310.jpg'),
(5040, 100, 17, 'Necklace 3494', 769, 'Traditional bridal wedding costume jewellery necklace 1. Metal : Alloy 2. Material : Enamel work 3. Main Stone : Kundans, Beads', 'NECKLACE 3494.jpg'),
(5041, 100, 17, 'Necklace 3496', 780, 'Engagement and party wear kundans necklace jewelry set. 1. Metal : Alloy 2. Material : Enamel work 3. Main Stone : Kundans, Beads ', 'NECKLACE 3496.jpg'),
(5042, 101, 4, 'Morellato S02DL022', 6987, 'Morellato has become synonymous the world over with quality, innovation, fashion, style and luxury..', 'R3251179035.jpg'),
(5043, 101, 4, 'Morellato R3253185925', 9092, 'About Sector Since 1973- Sector is a name that people on the go are hugely familiar with. Its philosophy lies in challenging limits. They make an ideal companion for active sportsmen.', 'R3253185925.jpg'),
(5045, 101, 4, 'Morellato S0216007', 9000, 'Morellato has become synonymous the world over with quality, innovation, fashion, style and luxury. Morellato watches, many of them crafted in precious metals and studded with diamonds, are perfect for those precious moments that symbolize the romance and intimacy of a man-woman relationship. ', 'SO2HT007.jpg'),
(5046, 101, 4, 'Morellato S0216006', 7680, 'Morellato has become synonymous the world over with quality, innovation, fashion, style and luxury. Morellato watches, many of them crafted in precious metals and studded with diamonds, are perfect for those precious moments that symbolize the romance and intimacy of a man-woman relationship. ', 'SO2OE006.jpg'),
(5047, 101, 4, 'Morellato S0216007', 9000, 'Morellato has become synonymous the world over with quality, innovation, fashion, style and luxury. Morellato watches, many of them crafted in precious metals and studded with diamonds, are perfect for those precious moments that symbolize the romance and intimacy of a man-woman relationship. ', 'SO2HT007.jpg'),
(5048, 101, 4, 'Morellato S020E003', 7780, 'Morellato has become synonymous the world over with quality, innovation, fashion, style and luxury. Morellato watches, many of them crafted in precious metals and studded with diamonds, are perfect for those precious moments that symbolize the romance and intimacy of a man-woman relationship. ', 'SO2OE003.jpg'),
(5049, 101, 4, 'Morellato S020E004', 7780, 'Morellato has become synonymous the world over with quality, innovation, fashion, style and luxury. Morellato watches, many of them crafted in precious metals and studded with diamonds, are perfect for those precious moments that symbolize the romance and intimacy of a man-woman relationship. ', 'SO2OE004.jpg'),
(5050, 101, 4, 'Morellato S020E002', 6999, 'Morellato has become synonymous the world over with quality, innovation, fashion, style and luxury. Morellato watches, many of them crafted in precious metals and studded with diamonds, are perfect for those precious moments that symbolize the romance and intimacy of a man-woman relationship. ', 'SO2I7002.jpg'),
(5051, 101, 4, 'Morellato S020E013', 7569, 'Morellato watches, many of them crafted in precious metals and studded with diamonds, are perfect for those precious moments that symbolize the romance and intimacy of a man-woman relationship. ', 'SO2Z6013.jpg'),
(5052, 101, 4, 'Morellato S021A001', 7000, 'Morellato has become synonymous the world over with quality, innovation, fashion, style and luxury. Morellato watches, many of them crafted in precious metals and studded with diamonds, are perfect for those precious moments that symbolize the romance and intimacy of a man-woman relationship. ', 'SO21A001.jpg'),
(5053, 101, 4, 'Morellato SQG005', 9080, '.Morellato has become synonymous the world over with quality, innovation, fashion, style and luxury. Morellato watches, many of them crafted in precious metals and studded with diamonds, are perfect for those precious moments that symbolize the romance and intimacy of a man-woman relationship. ', 'SO2I6005.jpg'),
(5054, 101, 5, 'REVV Steel Ring RF16859', 599, 'Revv for Him is a Imported Stainless Steel collection that is one of its kinds to form a relationship that is pure, durable and slick. The products are highly chic and trendsetters in their own category. Targeted towards the youth, Revv Steel is designed for the Macho young college goers, young executives and trend setters the metal use is Non allergic, High Grade Stainless Steel. Jewellery designs are bold, sleek and contemporary.', 'RF16859.jpg'),
(5055, 101, 5, ' 	REVV Steel Ring RF16860', 600, 'Revv for Him is a Imported Stainless Steel collection that is one of its kinds to form a relationship that is pure, durable and slick. The products are highly chic and trendsetters in their own category. Targeted towards the youth, Revv Steel is designed for the Macho young college goers, young executives and trend setters the metal use is Non allergic, High Grade Stainless Steel. Jewellery designs are bold, sleek and contemporary. ', 'RF16860.jpg'),
(5056, 101, 5, ' 	REVV Steel Ring RF16861', 850, 'Revv for Him is a Imported Stainless Steel collection that is one of its kinds to form a relationship that is pure, durable and slick. The products are highly chic and trendsetters in their own category. Targeted towards the youth, Revv Steel is designed for the Macho young college goers, young executives and trend setters the metal use is Non allergic, High Grade Stainless Steel. Jewellery designs are bold, sleek and contemporary. ', 'RF16861.jpg'),
(5057, 101, 5, ' 	REVV Steel Ring RF16862', 900, 'Revv for Him is a Imported Stainless Steel collection that is one of its kinds to form a relationship that is pure, durable and slick. The products are highly chic and trendsetters in their own category. Targeted towards the youth, Revv Steel is designed for the Macho young college goers, young executives and trend setters the metal use is Non allergic, High Grade Stainless Steel. Jewellery designs are bold, sleek and contemporary. ', 'RF16862.jpg'),
(5058, 101, 5, 'REVV Steel Ring RF16864', 850, 'Revv for Him is a Imported Stainless Steel collection that is one of its kinds to form a relationship that is pure, durable and slick. The products are highly chic and trendsetters in their own category. Targeted towards the youth, Revv Steel is designed for the Macho young college goers, young executives and trend setters the metal use is Non allergic, High Grade Stainless Steel. Jewellery designs are bold, sleek and contemporary. ', 'RF16864.jpg'),
(5059, 101, 5, 'REVV Steel Ring RF16865', 850, 'Revv for Him is a Imported Stainless Steel collection that is one of its kinds to form a relationship that is pure, durable and slick. The products are highly chic and trendsetters in their own category. Targeted towards the youth, Revv Steel is designed for the Macho young college goers, young executives and trend setters the metal use is Non allergic, High Grade Stainless Steel. Jewellery designs are bold, sleek and contemporary. ', 'RF16865.jpg'),
(5060, 101, 5, ' 	REVV Steel Ring RF16866', 700, 'Revv for Him is a Imported Stainless Steel collection that is one of its kinds to form a relationship that is pure, durable and slick. The products are highly chic and trendsetters in their own category. Targeted towards the youth, Revv Steel is designed for the Macho young college goers, young executives and trend setters the metal use is Non allergic, High Grade Stainless Steel. Jewellery designs are bold, sleek and contemporary. ', 'RF16866.jpg'),
(5061, 101, 5, ' 	REVV Steel Ring RF16867', 870, 'Revv for Him is a Imported Stainless Steel collection that is one of its kinds to form a relationship that is pure, durable and slick. The products are highly chic and trendsetters in their own category. Targeted towards the youth, Revv Steel is designed for the Macho young college goers, young executives and trend setters the metal use is Non allergic, High Grade Stainless Steel. Jewellery designs are bold, sleek and contemporary. ', 'RF16867.jpg'),
(5062, 101, 5, ' 	REVV Steel Ring RF16868', 870, 'Revv for Him is a Imported Stainless Steel collection that is one of its kinds to form a relationship that is pure, durable and slick. The products are highly chic and trendsetters in their own category. Targeted towards the youth, Revv Steel is designed for the Macho young college goers, young executives and trend setters the metal use is Non allergic, High Grade Stainless Steel. Jewellery designs are bold, sleek and contemporary. ', 'RF16868.jpg'),
(5063, 102, 6, 'Sunbaby baby play mat', 2009, 'SUNBABY BABY PLAY MAT PM-101 Age:-0M+ to 9M+ Shell fabric: 4 Colors Thermal Transfer Printing Polyster Pongee, Silk like Effect, Bright color, Clear Picture, Safety and Pro-environment. ', 'Sunbaby baby bouncer yy-106.jpg'),
(5064, 102, 6, 'Sunbaby baby play mat 2', 2000, 'SUNBABY PLAY MAT PM-102 Age:-0M+ to 9M+ Shell fabric: 4 Colors Thermal Transfer Printing Polyster Pongee, Silk like Effect, Bright color, Clear Picture, Safety and Pro-environment, Padding: First class 1800# Fr Polyster wadding', 'sbi-pm-102.jpg'),
(5065, 102, 6, ' 	Sunbaby baby play mat 3', 2500, 'SUNBABY BABY PLAY MAT PM-101 Age:-0M+ to 9M+ Shell fabric: 4 Colors Thermal Transfer Printing Polyster Pongee, Silk like Effect, Bright color, Clear Picture, Safety and Pro-environment. ', 'sbi-pm-101.jpg'),
(5066, 102, 6, 'Mickey Candy Box', 622, 'A cute soft MickeY as a candy box is just what you were looking for your little pals. This candy box is crafted with colorful nylon fabric on a premium quality plastic basket. You can fill it with candies or with his/her favorite novelties. Diameter- 8 Inches, Height- 6 Inches Material- Soft Plush Fabric with Acrylic Fibre on a Plastic Jar ', 'tokenz-pplprd042.jpg'),
(5067, 102, 6, 'Rabbit chair: baby toy', 1495, 'A cuddle some Rabbit features with attractive eyes and big ears make it an eye catching soft toy for your child.', 'tokenz-pplprd155.jpg'),
(5068, 102, 6, 'Noddy money saver: baby toy', 400, 'A cute enchanting Noddy money saver is crafted of soft plush fabric along with plastic bucket and an easy open zipper which could be used for other purpose also is a perfect gift for your little money saver.', 'tokenz-pplprd100.jpg'),
(5069, 102, 6, 'Sleeping tweety: stuffed toy c', 952, 'So cute sleeping tweety cozy Blanket Pillow for your soft baby. This Pillow cum blanket is here for your loving baby. Just unzip and wrap your baby inside this sleeping tweety blanket. A soft plush pillow is easy to carry and can be placed anywhere. A unique for your loving baby make it pillow and place under their or head or just wrap inside the blanket and hold inside your arms to crimp enormous warmth. Pillow Size : 16 inches x 11 inches', 'tokenz-pplprd353.jpg'),
(5070, 102, 6, 'Bob the BUILDER: Big soft toy', 700, 'A soft, cute doll crafted in a multicolored soft plush fabric and decked with his favorite hat and his tools is a perfect gift for your little angles. ', 'tokenz-pplprd120.jpg'),
(5071, 102, 6, 'Winnie the pooh: soft toy', 725, 'Winnie the Pooh bear, a cute soft teddy stuffed with quality acrylic fiber is a great addition for your kid toy land. Soft Plush Fabric with Acrylic Fiber Height- 14 Inches', 'tokenz-pplprd045.jpg'),
(5072, 102, 6, 'Cute Noddy: soft toy', 700, 'Recreate your favorite toy land adventures with this hanging Noddy soft toy. Dressed with his very own bell on his famous red hat, scarf, clothes and shoes, he is waiting for a warm hug!', 'tokenz-pplprd152.jpg'),
(5073, 102, 6, 'Tweety: soft toy', 800, 'A soft stuffed tweety bird is all time favorite for your little angles! Having a string on it to hang to your kid room and give a new style to your kid room.', 'tokenz-pplprd105.jpg'),
(5074, 104, 9, 'Bal Ganesh', 7950, 'About Adler and Roth: A range of contemporary artifacts depicting spiritual symbols and religious deities crafted in resin and terracotta with gold and silver ornamentation. The design and finish speaks of a rich European heritage yet has a modern and very contemporary feel. The pieces both traditional and trendy and make for ideal gifts that are both decorative and symbolic with a unique signature style and an elegant, premium look and feel.', 'BALGANESH.jpg'),
(5075, 104, 9, 'Bam Bam Bhola', 12950, 'About Adler and Roth: A range of contemporary artifacts depicting spiritual symbols and religious deities crafted in resin and terracotta with gold and silver ornamentation. The design and finish speaks of a rich European heritage yet has a modern and very contemporary feel. The pieces both traditional and trendy and make for ideal gifts that are both decorative and symbolic with a unique signature style and an elegant, premium look and feel.', 'BAM BAM BHOLA.jpg'),
(5076, 104, 9, 'Ganesh Ashirwad', 850, 'About Adler and Roth: A range of contemporary artifacts depicting spiritual symbols and religious deities crafted in resin and terracotta with gold and silver ornamentation. The design and finish speaks of a rich European heritage yet has a modern and very contemporary feel. The pieces both traditional and trendy and make for ideal gifts that are both decorative and symbolic with a unique signature style and an elegant, premium look and feel.', 'GANESH ASHIRWAD.jpg'),
(5077, 104, 9, 'Ganesh Balchandra', 8000, ' 	About Adler and Roth: A range of contemporary artifacts depicting spiritual symbols and religious deities crafted in resin and terracotta with gold and silver ornamentation. The design and finish speaks of a rich European heritage yet has a modern and very contemporary feel. The pieces both traditional and trendy and make for ideal gifts that are both decorative and symbolic with a unique signature style and an elegant, premium look and feel.', 'GANESH BALCHANDRA.jpg'),
(5078, 104, 9, 'Ganesh Bhupati', 8750, 'About Adler and Roth: A range of contemporary artifacts depicting spiritual symbols and religious deities crafted in resin and terracotta with gold and silver ornamentation. The design and finish speaks of a rich European heritage yet has a modern and very contemporary feel. The pieces both traditional and trendy and make for ideal gifts that are both decorative and symbolic with a unique signature style and an elegant, premium look and feel.', 'GANESH BHUPATI.jpg'),
(5079, 104, 9, 'Ganesh Buddhipriya', 8750, 'About Adler and Roth: A range of contemporary artifacts depicting spiritual symbols and religious deities crafted in resin and terracotta with gold and silver ornamentation. The design and finish speaks of a rich European heritage yet has a modern and very contemporary feel. The pieces both traditional and trendy and make for ideal gifts that are both decorative and symbolic with a unique signature style and an elegant, premium look and feel.', 'GANESH BUDDHIPRIYA.jpg'),
(5080, 104, 9, 'Ganesh Chintamani', 9780, 'About Adler and Roth: A range of contemporary artifacts depicting spiritual symbols and religious deities crafted in resin and terracotta with gold and silver ornamentation. The design and finish speaks of a rich European heritage yet has a modern and very contemporary feel. The pieces both traditional and trendy and make for ideal gifts that are both decorative and symbolic with a unique signature style and an elegant, premium look and feel.', 'GANESH CHINTAMANI.jpg'),
(5081, 104, 9, 'Ganesh dhanvirajman', 7750, 'About Adler and Roth: A range of contemporary artifacts depicting spiritual symbols and religious deities crafted in resin and terracotta with gold and silver ornamentation. The design and finish speaks of a rich European heritage yet has a modern and very contemporary feel. The pieces both traditional and trendy and make for ideal gifts that are both decorative and symbolic with a unique signature style and an elegant, premium look and feel.', 'GANESH DHANVIRAJMAN-2.jpg'),
(5082, 104, 9, 'Ganesh Ekaakshara', 8750, 'About Adler and Roth: A range of contemporary artifacts depicting spiritual symbols and religious deities crafted in resin and terracotta with gold and silver ornamentation. The design and finish speaks of a rich European heritage yet has a modern and very contemporary feel. The pieces both traditional and trendy and make for ideal gifts that are both decorative and symbolic with a unique signature style and an elegant, premium look and feel.', 'GANESH EKAAKSHARA.jpg'),
(5083, 104, 9, 'Ganesh Gajvakra', 8750, ' 	About Adler and Roth: A range of contemporary artifacts depicting spiritual symbols and religious deities crafted in resin and terracotta with gold and silver ornamentation. The design and finish speaks of a rich European heritage yet has a modern and very contemporary feel. The pieces both traditional and trendy and make for ideal gifts that are both decorative and symbolic with a unique signature style and an elegant, premium look and feel.', 'GANESH GAJVAKRA-2.jpg'),
(5084, 104, 9, 'Ganesh Gaurinandana', 8000, 'About Adler and Roth: A range of contemporary artifacts depicting spiritual symbols and religious deities crafted in resin and terracotta with gold and silver ornamentation. The design and finish speaks of a rich European heritage yet has a modern and very contemporary feel. The pieces both traditional and trendy and make for ideal gifts that are both decorative and symbolic with a unique signature style and an elegant, premium look and feel.', 'GANESH GAURINANDANA.jpg'),
(5085, 104, 9, 'Ganesh Gaurisuta', 8907, ' 	About Adler and Roth: A range of contemporary artifacts depicting spiritual symbols and religious deities crafted in resin and terracotta with gold and silver ornamentation. The design and finish speaks of a rich European heritage yet has a modern and very contemporary feel. The pieces both traditional and trendy and make for ideal gifts that are both decorative and symbolic with a unique signature style and an elegant, premium look and feel.', 'GANESH GAURISUTA.jpg'),
(5086, 104, 9, 'Laxmi Ganesha', 8000, ' 	About Adler and Roth: A range of contemporary artifacts depicting spiritual symbols and religious deities crafted in resin and terracotta with gold and silver ornamentation. The design and finish speaks of a rich European heritage yet has a modern and very contemporary feel. The pieces both traditional and trendy and make for ideal gifts that are both decorative and symbolic with a unique signature style and an elegant, premium look and feel.', 'LAXMI GANESHA-LAXMI.jpg'),
(5087, 104, 9, 'Radha Krishna', 8790, 'About Adler and Roth: A range of contemporary artifacts depicting spiritual symbols and religious deities crafted in resin and terracotta with gold and silver ornamentation. The design and finish speaks of a rich European heritage yet has a modern and very contemporary feel. The pieces both traditional and trendy and make for ideal gifts that are both decorative and symbolic with a unique signature style and an elegant, premium look and feel.', 'RADHA KRISHNA.jpg'),
(5088, 104, 9, 'Ganesh Kapila', 8570, 'About Adler and Roth: A range of contemporary artifacts depicting spiritual symbols and religious deities crafted in resin and terracotta with gold and silver ornamentation. The design and finish speaks of a rich European heritage yet has a modern and very contemporary feel. The pieces both traditional and trendy and make for ideal gifts that are both decorative and symbolic with a unique signature style and an elegant, premium look and feel.', 'GANESH KAPILA.jpg'),
(5089, 104, 10, 'Modish pearl photo frame', 999, 'One of the best ways to make your mom smile, this Mother Day, is by gifting her a framed photograph having an unforgettable memory. This beautiful photo frame comes with embedded pearls along with a modish design that surrounds your photograph. ', 'arc-inr-md-11-pf-04.jpg'),
(5090, 104, 10, 'Attractive & Ornate: photo fra', 999, 'An artistically adorned white metal photo-frame decorated with delicately carved floral borders along with colored beads. This photo-frame is a beautiful addition to your home decor. The size of this item is 11 inches in height and 8 inches in width. Picture Size : 6 inches X 4 inches', 'tokenz-nahprd098.jpg'),
(5091, 104, 10, ' Pearl & Rose: photo frame', 999, 'This beautiful photo frame comes with a border of pearls and four engraved roses that beautifully surround your photograph.', 'arc-inr-md-11-pf-06.jpg'),
(5092, 104, 10, 'Natural Beauty: photo frame', 999, 'Small but remarkable piece to behold your precious memories. When aesthetic and elegance meets then a brilliant product like this Photo Frame comes out. This elegant Photo Frame looks stunning through the use of oxidized white metal. Beautifully carved giraffe, leaves and eye-catching carvings on this photo frame is the real beauty.', 'tokenz-nahprd422.jpg'),
(5093, 104, 10, ' White Metal: photo frame', 399, 'An eye-catching photoframe in oxidized white metal with an intricately carved border. Designs that enchant the entire photoframe are carved fabulously by the skilled craftsmen.', 'tokenz-nahprd038.jpg'),
(5094, 104, 10, 'Butterfly: photo frame', 497, 'An intricately carved photo-frame makes for an excellent gift for the dear ones on their special occasion! This beautiful photo-frame is handcrafted in oxidized white metal with artistically carved vines of Butterfly on its all over surroundings.', 'butter.jpg'),
(5095, 104, 10, 'Wooden: photo frame', 747, 'Beholding the beauty at its best means with this antique wooden frame in style. Have this unique style of wooden frame to behold your beauty at its best and emancipate your memories forever. An unforgettable charm adding grace and ecstasy to your home dÃ©cor.', 'wooden.jpg'),
(5096, 104, 10, 'Pink: photo frame', 702, 'This unique fiber photo frame has beveled edges and is made of thick pink and silver colored border which adorns the beauty of your timeless photographs. An exotic beauty in pink, it symbolizes love. Its durable and easy to clean. Photo Size : 4 inches x 6 inches or 10 cm x 15 cm', 'tokenz-ualfrm004.jpg'),
(5097, 104, 10, 'Treasure Memory: photo frame', 655, 'Photographs are eternal and deserve a special place. Cherish the memories forever....Whether you need a place to put your favourite Birthday Photographs or those special family photographs, in fact any Photograph will go nicely in our unique range of Frames.', 'ar.in-pf-22.jpg'),
(5098, 104, 11, ' Bright Sensation:Flowers', 3550, 'A bouquet of white daisies along with yellow roses and daisies with greens in a clear vase', 'fnpint-usbqv-042.jpg'),
(5099, 104, 11, ' Lovely lilies -USA:Flowers', 3660, 'Long-stemmed orange lilies, simply arranged in a clear glass vase, create a vivid presentation that will add a spot of color to any room. A lovely choice as a get well gift, a thank you offering, or for a business associate', 'fnpint-flo-00701.jpg'),
(5100, 104, 11, 'Simply Sweet :Flowers', 3850, 'A simple hand tied bouquet of 10 red roses', 'fnpint-usbqv-029.jpg'),
(5101, 104, 11, 'Precious Variety :Flowers', 4500, 'A mixed bouquet of 24 mixed colour roses', 'fnpint-usbqv-030.jpg'),
(5102, 104, 11, ' Twinkle :Flowers', 4600, 'A bouquet of blue hydrangea, crÃ¨me roses, graceful white oriental lilies, white alstroemeria, a white disbud mum, purple statice and lavender limonium, accented by seeded eucalyptus and salal in a clear vase', 'fnpint-usbqv-031.jpg'),
(5103, 104, 11, 'Elegant & Bright:Flowers', 4280, 'A bouquet of white hydrangea, yellow\r\nroses,yellow alstroemeria, with fresh greenary in a clear glass vase', 'fnpint-usbqv-037.jpg'),
(5104, 104, 11, ' Robust Beauty:Flowers', 4050, 'Robust roses, delicate hydrangea and feminine stock arranged in a clear vase', 'fnpint-usbqv-033.jpg'),
(5105, 104, 11, ' Make it special:Flowers', 4000, 'A bouquet of light pink asiatic lilies and alstroemeria are mixed with pink roses and waxflower, lavender stock and seeded eucalyptus in a glass vase.', 'fnpint-usbqv-036.jpg'),
(5106, 104, 11, 'Rose Basket :Flowers', 2900, 'Order for this beautiful artificial rose flower basket that shall remain fresh and classy forever. It would remind your family and friends of you, everytime they cross their gaze to it. A gorgeous arrangement of bright red roses put into a nicely decorated basket!Product Dimensions in inches 10*11*8', 'rose.jpg'),
(5107, 104, 11, 'Sensational:Flowers', 3710, 'A bouquet of orange roses, hot pink matsumoto asters and red carnations with greens in a glass vase', 's.jpg'),
(5108, 104, 11, 'My Sweet Regards :Flowers', 575, '12 stems of mixed colours gerberas in a bunch specially picked for expressing your emotions.', 'h2h-h2h-fdfl-06.jpg'),
(5109, 104, 11, 'Perfect Day:Flowers', 899, 'A Classic standing arrangement of 15 yellow roses with basket conveys your message for the friendship towards anyone you like.', 'fnp.in-ex0034.jpg'),
(5110, 104, 12, 'Truffle Cake', 2555, 'A dark, extremely rich truffle cake. Surprise your loved one with a special way with Lip smacking 1KG Truffle Cake from Five Star Bakery.', 'fnp.in-trufflecake5star.jpg'),
(5111, 104, 12, 'Pineapple Cake', 2599, 'A cake for sure to astonish & impress your someone special with a special mouth watering delicacy. Gift them with delicious 1kg Pineapple Cake from Five Star Bakery. ', 'fnp.in-pineapplecakefivestar.jpg'),
(5112, 104, 12, 'Black forest Cake', 2599, 'The exotic taste of Black Forest brings refreshment to your taste buds. Whipped cream and chocolate in layers of chocolate sponge cake, weaves its magic. Topped with fresh cream, chocolate shavings..1 Kg Lipsmacking Black Forest Cake.', 'fnp.in-blackforestcake.jpg'),
(5113, 104, 12, 'Egg less Black forest Cake', 3599, 'The exotic taste of Black Forest brings refreshment to your taste buds. Whipped cream and chocolate in layers of chocolate sponge cake, weaves its magic. Topped with fresh cream, chocolate shavings..1 Kg Egg less Black Forest Cake.', 'fnp.in-egglessblackforestcake.jpg'),
(5114, 104, 12, 'Choco Wedding Cake', 5999, 'Extremely fresh with nicely decorated 3 tier wedding cake now available in dark chocolate flavour. (Net Weight : 3.5 Kgs)', '311_large.jpg'),
(5115, 104, 12, '1kg tasty black forest Cake', 3099, 'Send extremely fresh & very tasty 1 Kg Black forest cake to your love one its suitable for every occasions.Picture displayed is indicative in nature', 'gai2-gainr1035.jpg'),
(5116, 104, 12, 'Strawberry Cake', 2099, 'Mouthwatering Strawberry Cake ... so delicious! The cake has white creamy dollops at the bottom and top and a red cherry as the centre of attraction. The lucky one gets the cherry as well!', 'fnp.in-strawberrycake.jpg'),
(5117, 104, 12, '2kg black forest Cake', 1999, 'The exotic taste of Black Forest brings refreshment to your taste buds. Whipped cream and chocolate in layers of chocolate sponge cake, weaves its magic. Topped with fresh cream, chocolate shavings..2 Kg Black Forest Cake.', 'fnp.in-2kgblackforestcake.jpg'),
(5118, 104, 12, '3 Tier Cake', 3977, 'If you are looking for a cake for wedding, reception or anniversary then this 3 tier cake is a perfect choice. Its available in two flavours vanilla or chocolate. You can specify your choice of flavour. Weight 3.5kg. Cake shape, decoration and icing may differ from the image displayed. ', 'fnp.in-shape8.jpg'),
(5119, 104, 12, 'Wedding cake', 3000, 'This three tier wedding cake decorated with sugar coated flowers has a truly transcillating taste. A perfect gift for the perfect occasion. Weight: 4kg. ', 'c19_large.jpg'),
(5120, 104, 12, 'Cuban Crunch Cake', 800, 'A sponge cake with layers of cream and nougat. The cake has iced with Swiss chocolate and crunchy nuts have been liberally sprinkled. Weight: 1 kg. ', '317_large.jpg'),
(5121, 104, 12, 'Forest Cake', 1500, 'Whipped cream and chocolate in layers of chocolate sponge cake. The black forest cake weaves its magic once more, topped with fresh cream, chocolate shavings and cherries. Weight: 1 kg. ', 'forest c.jpg'),
(5122, 103, 7, 'Hutch puppy', 601, 'A peach color buldog/hutch puppy Measurements & Weight: Height 17.00 inches ', 'hutch puppy 3.jpg'),
(5123, 103, 7, 'Cute baby girl', 601, 'Cute baby girl doll..beautiful', 'cute baby girl with green frock.jpg'),
(5124, 103, 7, 'Crocodile', 768, 'Add a green crocodile to your kids collection of soft toys and watch the his friends go green with envy. Measurements & Weight: Length 34.00 inches ', 'crocodile.jpg'),
(5125, 103, 7, 'Brown teddy bear', 523, 'Brown teddy bear...beatifull gift for kid', 'brown teddy bear.jpg'),
(5126, 103, 7, 'Bag soft toy', 382, 'Now presenting a new soft toy bag in which your child can carry all their loved possesions anywhere. Designed specially and crafted beautifully to accomodate all their needs. Measurements & Weight: Length 12.00 inches Width 12.00 inches', 'bag soft toy.jpg'),
(5127, 103, 7, ' 	Alice The Princess: Doll', 777, 'This is a doll so soft and cuddly you will not want to put her down! She is in a pretty dress and matching hat, with rose flowers tied with pretty ribbon on her neck.', 'mr gentleman teddy bear.jpg'),
(5128, 103, 7, ' Furry Santa', 333, 'Here is a cozy Furry santa teddy that You would simply love to say Hello.. to one who is really very special.....this fury santa bear in soft fur is ready to do so. Adoring muffler Santa is ready to say Hello. Size : 8 inches', 'furry santa.jpg'),
(5129, 103, 7, 'Stuffed Toy Cushion', 777, ' A soft stuffed pillow for your little prince and princess. Escorted by two little teddies holding hearts in their hands, standing guard for the sweet dreams of your little angels.', 'stuffed toy cushion.jpg'),
(5130, 103, 8, 'Coupe car', 3066, 'Highlights Authorized RC car. With a remote control, easy to operate. 1:14 Aston Martin DBS Coupe car type. Packed in new and delicate gift box. ', 'aston martin dbs coupe car.jpg'),
(5131, 103, 8, 'Wired Controlled Crane', 1043, 'Features High simulation wire-controlled excavator and crane Simulates many actions of real excavator and crane General Specs Model B688 Type Wire-controlled.', 'wire-controlled excavator & crane.jpg'),
(5132, 103, 8, 'Benz Car', 1192, 'Highlights Authorized genuine RASTAR car with lights. 6-Way remote control. Can be used as a gift or toy. Forward, backward, turn left or right, front or rear light. General Specs Type remote control Channel 6-channel Scale 1:24 Material plastic and silicon Light support Remote Distance 15~30m Battery for Car 3*1.5V AA Battery for RC 2*1.5V AA Function Forward, backward, turn left or right, front or rear light Age Range 6+', 'benz car.jpg'),
(5133, 103, 8, 'Remote Control SUV Car', 1744, 'Easy and simple to control and play. Bright blue light. Comes with high performance SUV tires. Comes with 4 rechargeable batteries.', 'remote control suv car.jpg'),
(5134, 103, 8, 'Toyota Fjcruiser Car', 1509, 'Highlights Features 4-channel RC car. With forward, backward, turn left and right function. With front and back light. General Specs Channel 4-channel Control Range 15-30M Charging Time 60minutes Working Time 30minutes Function Forward, backward, turn left and right function. Battery of Controller 9V*1 Battery of Helicopter built-in battery 4.8V 700mAh ', 'toyota fjcruiser car.jpg'),
(5135, 103, 8, 'Tow Mater Design Racing', 1078, 'Highlights R/C racing car with Tow Mater design. Pre-painted and pre-assembled. Support 6 channel performance.', 'toy mater design racing car.jpg'),
(5136, 103, 8, 'BMW Z4 Car', 1146, 'Highlights Authorized genuine RASTAR car with lights. 6-Way remote control. Can be used as a gift or toy. ', 'bmw z4 car.jpg'),
(5137, 103, 8, 'Remote Control Simulation Tipp', 1900, 'Highlights 1:24 scale 6 channels remote control simulation tipper. Can move forward, backward, turn left or right, asending and descending. Suitable for children above 8.', 'remote control simulation tipper.jpg'),
(5138, 103, 8, 'Hummbr ai acr', 1993, 'Highlights Super-bright emulational front lights. The four tires are independent shock absorbers. Forward and backward running, turn left or right, stop and acceleration function.', 'hummbr ai acr.jpg'),
(5139, 103, 19, 'Barbie Hairtastic Long Hair Do', 1099, 'This latest and exclusive barbie doll comes with long hair in various colours. The beautiful hair reaches below her waist. A stylish brush and fashionalble outfit make it more stylish. So send this barbie doll for your little angel on her birthday or any occasion.', 'basr.jpg'),
(5140, 103, 19, 'Dancing Ballerina Doll', 695, 'All girls dream of being a ballerina one day and now they can play out the role with this barbie. This is a Ballerina dance-themed doll. It features articulated foot movement to perform the perfect ballet routine. An ideal gift to your loved ones in India, send it on any occasion through us. ', 'b.jpg'),
(5141, 103, 19, ' Trendy Barbie Doll ', 695, 'Make your little princess gleaming with joy by gifting this Trendy Barbie. This Barbie Doll as a gift to India make perfect choice. The doll is wearing a trendy skirt. Kids are sure to love their new friend.', 'tren.jpg'),
(5142, 103, 19, 'Cute Barbie', 695, 'Make your little girl jump with joy by sending her this amazingly beautiful Barbie Doll as a gift to India on any special occasion. This barbie wearing a trendy pink skirt will be loved by your little daughter. ', 'cute babi.jpg'),
(5143, 103, 19, 'My Barbies Bedroom ', 895, 'Girls love to play at their leisure time with Barbie dolls as the dolls resembles themselves. This barbie along with her fairytale bedroom accessories will sure to give your little daughter or niece in India a mot enjoyable experience. ', 'babie bed room.jpg'),
(5144, 103, 19, 'Katrina Kaif Barbie Doll', 1095, 'Surprise your littel girl in India by sending something the best. Presenting a beautiful barbie doll inspired by Katrina Kaif. This wonderful barbie doll looks gorgeous in a shining gown with sparkling jewellery and accessories. This barbie doll is best for all kids who have a fancy of becoming a movie star.', 'ss.jpg'),
(5145, 103, 19, 'Indian Barbie', 1000, 'Barbie is in a traditional Indian look wearing a beautiful saree. This Indian Barbie looks resplendent in this look and is potrays the true beauty of a Indian woman. ', 'ind.jpg'),
(5146, 103, 19, 'Rock Star Barbie ', 1000, 'Barbie I Can Be... dolls and accessories let girls play out different roles and fabulous careers, including a superstar musician. This rockin set also comes with a special code that unlocks career-themed content online - for even more play. Check out all the dolls in the collection! ', 'rock.jpg'),
(5147, 103, 19, 'Happy Birthday Barbie', 1020, 'This Happy Birthday Barbie doll is the best birthday gifts for kids. This glamourous barbie doll dressed with beautiful grown will make your birthday girl happy on her special day. One crown will comes as an accessories with this doll.', 'ha.jpg'),
(5148, 100, 22, 'Lucera Ring CZ RF4975', 1200, 'About Lucera: Lucera, or luminous star in Spanish, is for fashionistas who like to shine. Lucera fashion jewellery offers contemporary designs in work, prÃªt & evening collections to complement various moods of the modern and fashion conscious woman of today. ', 'CZ RING RF4975.jpg'),
(5149, 100, 22, 'Lucera Ring CZ RF4324', 100, 'About Lucera: Lucera, or luminous star in Spanish, is for fashionistas who like to shine. Lucera fashion jewellery offers contemporary designs in work, prÃªt & evening collections to complement various moods of the modern and fashion conscious woman of today.', 'LUCERA SILVER CZ RING RF4324.jpg'),
(5150, 100, 22, 'Lucera Ring CZ RF4967', 1150, 'About Lucera: Lucera, or luminous star in Spanish, is for fashionistas who like to shine. Lucera fashion jewellery offers contemporary designs in work, prÃªt & evening collections to complement various moods of the modern and fashion conscious woman of today.', 'LUCERA SILVER CZ RING RF4967.jpg'),
(5151, 100, 22, 'Lucera Ring CZ RF4363', 1150, 'About Lucera: Lucera, or luminous star in Spanish, is for fashionistas who like to shine. Lucera fashion jewellery offers contemporary designs in work, prÃªt & evening collections to complement various moods of the modern and fashion conscious woman of today.', 'LUCRA SILVER CZ RINGRF4363.jpg'),
(5152, 100, 22, 'Lucera Ring CZ RF4077', 1150, 'About Lucera: Lucera, or luminous star in Spanish, is for fashionistas who like to shine. Lucera fashion jewellery offers contemporary designs in work, prÃªt & evening collections to complement various moods of the modern and fashion conscious woman of today.', 'RF4077.jpg'),
(5153, 100, 22, 'Lucera Ring CZ RF4087', 1000, 'About Lucera: Lucera, or luminous star in Spanish, is for fashionistas who like to shine. Lucera fashion jewellery offers contemporary designs in work, prÃªt & evening collections to complement various moods of the modern and fashion conscious woman of today.', 'RF4087.jpg'),
(5154, 100, 22, 'Lucera Ring CZ RF4120', 1599, 'About Lucera: Lucera, or luminous star in Spanish, is for fashionistas who like to shine. Lucera fashion jewellery offers contemporary designs in work, prÃªt & evening collections to complement various moods of the modern and fashion conscious woman of today.', 'RF4120.jpg'),
(5155, 100, 22, ' 	Lucera Ring CZ RF4123', 1500, 'About Lucera: Lucera, or luminous star in Spanish, is for fashionistas who like to shine. Lucera fashion jewellery offers contemporary designs in work, prÃªt & evening collections to complement various moods of the modern and fashion conscious woman of today.', 'RF4123.jpg'),
(5156, 100, 0, 'Lucera Ring CZ RF4354', 1199, 'About Lucera: Lucera, or luminous star  in Spanish, is for fashionistas who like to shine. Lucera fashion jewellery offers contemporary designs in work, prÃªt & evening collections to complement various moods of the modern and fashion conscious woman of today. ', 'RF4354.jpg'),
(5157, 100, 22, 'Lucera Ring CZ RF4371', 1150, 'About Lucera: Lucera, or luminous star in Spanish, is for fashionistas who like to shine. Lucera fashion jewellery offers contemporary designs in work, prÃªt & evening collections to complement various moods of the modern and fashion conscious woman of today.', 'RF4371.jpg'),
(5158, 100, 22, ' 	Lucera Ring CZ RF4641', 1200, 'About Lucera: Lucera, or luminous star in Spanish, is for fashionistas who like to shine. Lucera fashion jewellery offers contemporary designs in work, prÃªt & evening collections to complement various moods of the modern and fashion conscious woman of today.', 'RF4641.jpg'),
(5159, 101, 23, 'Dolphin (Triple) ', 2595, 'A 24k gold plated decorative Triple Dolphin show piece sprinkled with 6 pcs of the world finest SWAROVSKI CRYSTALS. ', 'edfa359bf7f008610bb49aa7f558baf2project.jpg'),
(5160, 101, 23, 'Butterfly Enameled', 1095, 'Nothing can match the appeal of a 24k gold plated decorative Enameled butterfly showpiece from the famous house of Gold and Gem and also which is studded with 2 pcs of Violet Crystals & 30 pcs clear Rhine Stones & Violet color enamel and with round base. ', '7c2442a6e81e30cb6a02eb36724bfc0dproject.jpg'),
(5161, 101, 23, ' Marble Lantern with Gold Work', 3795, 'Lighten up your room with this traditional styled lantern made from pure white marble and hand painted with motifs of wood pecker birds in red and green and worked with pure 22 carat gold leaf and kundans to give it a shine like no other. The lantern comes with electrical fitting without the bulb . It also has an regulator to regulate the brightness of the light..', 'dfeb54a3eb93c3db2ce70d8adea8d06eproject (1).jpg'),
(5162, 101, 23, 'Trumpeting Elephant ', 1095, 'This royal elephant showpiece with unique patterns in the chaadar placed on its back depicting the traditional Rajasthani art. The rhombus shaped mirrors are used to enhance its beauty thousand times. Golden hues have also been added imparting it an elegant look. Add a royal Rajasthani touch to any corner of your dear ones home by sending this metal finish showpiece to India. Height: 9 Inches.', 'c23145206af67539605e90fd56acb71dproject.jpg'),
(5163, 101, 23, 'Giraffe (Big) ', 1095, ' Entice your dear ones by sending them something extra-ordinary. And this 24k gold plated decorative big Giraffe show piece studded with 4 pcs of worlds finest SWAROVSKI CRYSTALS can do magic with its dazzling look. ', 'c655c9d77472ada30d04a4391826879bproject.jpg'),
(5164, 101, 23, 'Nuptial Bond ', 1595, 'A perfect gift for marriage and wedding anniversary, this showpiece depicts the most beautiful bond of love that marriage sanctifies. Marriage is a union of two heart in one soul. This dark ash colored showpiece nicely tells a wonderful romantic tale where the love-struck hearts finally unites in marriage. Send this mesmerizing showpiece as gift to India to your beloved and convey your deepest most feelings of heart. Height: 12 Inches. ', '03a34e80e27c7b5dd0bba890d05962d5project.jpg');
INSERT INTO `addproduct` (`Product_ID`, `Cat_ID`, `Subcat_ID`, `ProductName`, `Rate`, `Feature`, `Picture`) VALUES
(5165, 101, 23, 'Butterfly ', 1595, 'A splendid 24k gold plated decorative Butterfly show piece studded with 2 pcs of worlds finest Swarvosky crystals is sure to add a dazzling look to the corner of your loved ones room. Send this precious gift to India and celebrate any occasion in a special way.', '38a9d1108dcc9d8e09c0ff0a1ebd6b25project.jpg'),
(5166, 101, 23, 'Little Crystal Clock ', 595, 'Send this traingle shaped Little Crystal Clock to your dear ones in India for any occasion. Present this unique showpiece to India to your near and dear ones and add joy to the festivities.', '8c561b82127f40a9edec777bb0fe56e3project.jpg'),
(5167, 101, 23, 'Symbol of Victory ', 895, 'This Standing stallion is the symbol of Victory. The metallic Bronze finish of this showpiece imparts an antique look. Send this enthralling showpiece to your near and dear ones as a gift on any special occasion.', 'fdda56ea587b931debfc742880a8354aproject.jpg'),
(5168, 101, 24, 'Divine Love ', 1295, ' 	The eternal love of Radha and Krishna is the subject of this wall picture. Beautifully laminated, this wall picture can make a wonderful gifting idea for your dear ones in India. Send such exclusive gifts to India and enthrall them all with your love and care. ', '68a79fff5ea241614f257530d393228cproject.jpg'),
(5169, 101, 24, ' Jai Shri Krishna ', 1295, 'Send this beautiful wall picture of Krishna is surely going to enhance the room decor as well as its auspiciousness will fill up the with ethereal joy and blissfulness. This is a nicely laminated picture of mischievous Bal Gopal. This graceful wall picture is sure to be loved by your dear ones in India.', 'ee0380337c8994245b8b8b0e7ccc8563project.jpg'),
(5170, 101, 24, 'Wah Taj ', 1295, 'A breath-taking view of one of the Seven wonders of the world, the Taj Mahal. Reminiscence of the royal love of Shah Jahan for his beautiful wife Mumtaz, this white marble mausoleum stands as the epitome of romantic love.', 'b9d4ed89f1a395ba44774d0fbd939560project.jpg'),
(5171, 101, 24, 'Hues of Nature ', 995, 'Spread the bright and colorful hues of nature among the hearts of your dear ones. A lonely landscape along with a tree spreading its branches in the air, is personifying the solitude of the mother nature. The different shades of nature have created a mystical aura around.', '981a1ec052d9ae2443aaf3619ad132cfproject.jpg'),
(5172, 101, 24, 'Refreshing Green ', 695, 'Green seems to soothe our eyes, fills our heart with a tranquil calmness. This wall picture depicts this soothing qualities of green. The lash green steeps and curves create a beautiful contrast with the blue hues of the wandering cloud. This beautiful scenic beauty will sure to enhance the room decor.', 'f11241d52ef5de7e2335f24517fdd411project.jpg'),
(5173, 101, 24, 'Beautiful Ganges ', 695, 'A breath-taking and artful photography from a very proficient photographer epitomizing the scenic beauty of the City of Joy. ', '0442115b1e20e40f444bb12f2302b211project.jpg'),
(5174, 105, 25, 'Red Roses', 349, 'Glorious Red Roses Bouquet', 'red_roses_bouquet.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addsubcat`
--

CREATE TABLE IF NOT EXISTS `addsubcat` (
  `Subcat_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Subcat_Name` varchar(20) NOT NULL,
  `Maincat_ID` int(10) NOT NULL,
  `Subcat_PIC` varchar(80) NOT NULL,
  PRIMARY KEY (`Subcat_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `addsubcat`
--

INSERT INTO `addsubcat` (`Subcat_ID`, `Subcat_Name`, `Maincat_ID`, `Subcat_PIC`) VALUES
(4, 'Watches', 101, 'SO2DL016.jpg'),
(5, 'REVV Rings', 101, 'RF16860.jpg'),
(6, 'Nursery', 102, 'noddy pillow.jpg'),
(7, 'Soft Toys', 103, 'toys and soft toys.jpg'),
(8, 'Rc Toys', 103, 'wire-controlled excavator & crane.jpg'),
(9, 'Spiritual Artifacts', 104, 'GANESH GAURINANDANA.jpg'),
(10, 'Photo frames', 104, 'arc-inr-md-11-pf-04.jpg'),
(11, 'Flowers', 104, 'fnpint-usbqv-042.jpg'),
(12, 'Cakes', 104, 'fnp.in-egglessblackforestcake.jpg'),
(13, 'Fragrance', 100, 'Fragrances.jpg'),
(14, 'Chocolates & Hampers', 100, 'chocolates & hampers.jpg'),
(15, 'Home Decors', 100, 'Home Decors.jpg'),
(16, 'Soft Toys', 100, 'Soft Toys.jpg'),
(17, 'Vendee Jewellery', 100, 'Vendee Jewellery.jpg'),
(18, 'Silver Rings', 0, 'CZ RING RF4975.jpg'),
(19, 'Dolls', 103, 'princes.jpg'),
(22, 'Silver Rings', 100, 'CZ RING RF4975.jpg'),
(23, 'Show pieces', 101, 'edfa359bf7f008610bb49aa7f558baf2project.jpg'),
(24, 'Wall Pictures', 101, '3ebcf898400010384b6c4af1dc21137fproject.jpg'),
(25, 'Flowers', 105, 'flower_bouquet.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `SrNo` int(100) NOT NULL AUTO_INCREMENT,
  `ProductPic` varchar(200) NOT NULL,
  `ProductName` varchar(300) NOT NULL,
  `Rate` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `TotalCost` int(10) NOT NULL,
  `SessionID` varchar(500) NOT NULL,
  PRIMARY KEY (`SrNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`SrNo`, `ProductPic`, `ProductName`, `Rate`, `Quantity`, `TotalCost`, `SessionID`) VALUES
(6, 'dove.jpg', 'DOVE', 398, 1, 398, 'e8dvdb4fmbeduf4mantmtdi6u7'),
(8, 'Sunbaby baby bouncer yy-106.jpg', 'Sunbaby baby play mat', 2009, 1, 2009, 'e8dvdb4fmbeduf4mantmtdi6u7'),
(9, 'bonding of love.jpg', ' Bonding of love', 998, 1, 998, 'mtm0jtq7gbbus5as6lp2khj7m5'),
(12, 'dove.jpg', 'DOVE', 398, 1, 398, 'mtm0jtq7gbbus5as6lp2khj7m5'),
(15, 'Sunbaby baby bouncer yy-106.jpg', 'Sunbaby baby play mat', 2009, 1, 2009, 'lnfp5r0mn65huqtv19u60rj993'),
(17, 'sbi-pm-102.jpg', 'Sunbaby baby play mat 2', 2000, 1, 2000, 'gj4m0vdcv96tupp44fgioddiv3'),
(18, 'Talking Cocks wooden wall HANGING.jpg', 'Talking cocks: Wooden Wall Han', 800, 1, 800, 'gj4m0vdcv96tupp44fgioddiv3'),
(20, 'Sunbaby baby bouncer yy-106.jpg', 'Sunbaby baby play mat', 2009, 1, 2009, '3eguir1k6p1ruq7lf060cbg4p7'),
(24, 'sweet memories.jpg', ' Sweet memories', 1444, 1, 1444, '0h141qm3l27i7ort0iqus6d0v0'),
(25, 'dove.jpg', 'DOVE', 398, 1, 398, 'j5eos6es2scjsb41kq2vrn6j62'),
(26, 'R3251179035.jpg', 'Morellato S02DL022', 6987, 1, 6987, 'j5eos6es2scjsb41kq2vrn6j62'),
(27, 'dove.jpg', 'DOVE', 398, 1, 398, 'gc26na6r0vsajmg0ecb7afpm32'),
(28, 'dove.jpg', 'DOVE', 398, 1, 398, '1g5favdaka2o9if9vj0ci4lev1'),
(29, 'dove.jpg', 'DOVE', 398, 2, 796, '5qkig81s6fs7v9cda5e09v8c46'),
(31, 'brown teddy bear.jpg', 'Brown bear with baby', 449, 2, 898, '5qkig81s6fs7v9cda5e09v8c46'),
(32, 'dove.jpg', 'DOVE', 398, 12, 4776, 'tr20g8c82jvo4g0dd47hotlsa6'),
(34, 'hutch puppy 3.jpg', 'Hutch puppy', 601, 1, 601, 'tr20g8c82jvo4g0dd47hotlsa6'),
(35, 'hugging love.jpg', 'Hugging Love', 698, 1, 698, 'tr20g8c82jvo4g0dd47hotlsa6'),
(36, 'sbi-pm-102.jpg', 'Sunbaby baby play mat 2', 2000, 1, 2000, 'tr20g8c82jvo4g0dd47hotlsa6'),
(37, 'wire-controlled excavator & crane.jpg', 'Wired Controlled Crane', 1043, 1, 1043, 'tr20g8c82jvo4g0dd47hotlsa6'),
(38, 'BALGANESH.jpg', 'Bal Ganesh', 7950, 1, 7950, 'psrabgu1vcfl8p6fs7saeiccf5'),
(39, 'remote control suv car.jpg', 'Remote Control SUV Car', 1744, 1, 1744, '60ltt8aakk9lfer9eai1c5d6k5'),
(42, 'dove.jpg', 'DOVE', 398, 1, 398, '60ltt8aakk9lfer9eai1c5d6k5'),
(43, 'dove.jpg', 'DOVE', 398, 1, 398, '60ltt8aakk9lfer9eai1c5d6k5'),
(44, 'dove.jpg', 'DOVE', 398, 1, 398, '601kqohvq3lhj688tejr5l7t22'),
(45, 'R3251179035.jpg', 'Morellato S02DL022', 6987, 1, 6987, '2qf8dkqasn8678l1gjl2mkffk5'),
(46, 'dove.jpg', 'DOVE', 398, 1, 398, 'ali5sk1c1hslhho06ogbdg9gf0'),
(47, 'dove.jpg', 'DOVE', 398, 1, 398, '0hh3qgc9lpudl9ulk1gb0kaob7'),
(48, 'tokenz-nahprd422.jpg', 'Natural Beauty: photo frame', 999, 1, 999, '0hh3qgc9lpudl9ulk1gb0kaob7'),
(49, 'dove.jpg', 'DOVE', 398, 1, 398, '33c44k57ipfljpalogfju89o66'),
(50, 'dove.jpg', 'DOVE', 398, 1, 398, 'egtpgsiraisgev2qrc54a3km86'),
(51, 'R3251179035.jpg', 'Morellato S02DL022', 6987, 2, 13974, 'egtpgsiraisgev2qrc54a3km86'),
(52, 'benetton hot.jpg', ' BENETTON HOT', 498, 2, 996, '5dre8npru1eha1v9ihkfjp80t0'),
(54, 'sbi-pm-102.jpg', 'Sunbaby baby play mat 2', 2000, 1, 2000, '5dre8npru1eha1v9ihkfjp80t0'),
(55, 'dove.jpg', 'DOVE', 398, 1, 398, '4912iu2csa7igg4hekhmq8p573'),
(56, 'lindt pistachio chocolate.jpg', ' Lindt pistachio chocolate', 1348, 2, 2696, 'nocsf235osividj9ktpngj1o13'),
(57, 'sweet memories.jpg', ' Sweet memories', 1444, 2, 2888, 'nocsf235osividj9ktpngj1o13'),
(58, 'benetton hot.jpg', ' BENETTON HOT', 498, 2, 996, '6aqhp3950cgdu0kukdt25ejk66'),
(62, 'beatiful world.jpg', 'Beautiful World', 698, 3, 2094, '6aqhp3950cgdu0kukdt25ejk66');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Query` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `Name`, `Username`, `Phone`, `Query`) VALUES
(1, 'harman', 'harman@gmail.com', '6287128', 'aMNCZ<cc,Nc,MC.MC.ZMc.cnnc'),
(4, 'gh', 'gh@gmail.com', '987654321', 'ghhk');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Rate` varchar(20) NOT NULL,
  `Design_Rate` varchar(20) NOT NULL,
  `Info_enough` varchar(10) NOT NULL,
  `Future_products` varchar(10) NOT NULL,
  `Suggestion` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Name`, `Username`, `Phone`, `Rate`, `Design_Rate`, `Info_enough`, `Future_products`, `Suggestion`) VALUES
(2, 'sharan bajwa', 'sharanbajwa@gmail.com', '987654321', 'Excellent', 'Excellent', 'Yes', 'Yes', 'keep it up....'),
(3, 'sharan bajwa', 'sharanbajwa@gmail.com', '89765432', 'Excellent', 'Excellent', 'Yes', 'Yes', 'oppkoxxp'),
(5, 'abc', 'abc@yahoo.com', '989384944', 'Very Good', 'Very Good', 'Yes', 'Yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `OrderNo` int(100) NOT NULL AUTO_INCREMENT,
  `PaymentMode` varchar(200) NOT NULL,
  `ccno` varchar(200) NOT NULL,
  `cconame` varchar(100) NOT NULL,
  `holdername` varchar(200) NOT NULL,
  `expiry` varchar(200) NOT NULL,
  `shipping` varchar(100) NOT NULL,
  `totalbill` int(100) NOT NULL,
  `username` varchar(300) NOT NULL,
  `sessionid` varchar(300) NOT NULL,
  PRIMARY KEY (`OrderNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`OrderNo`, `PaymentMode`, `ccno`, `cconame`, `holdername`, `expiry`, `shipping`, `totalbill`, `username`, `sessionid`) VALUES
(10, 'Credit Card', ' 12', ' VISA', 'hansika', '', 'b1-3455 ,adarsh nagar', 800, 'hansika@gmail.com', '3eguir1k6p1ruq7lf060cbg4p7'),
(11, 'Credit Card', ' 13', ' Master Ca', 'harish', '', 'h.no-5677,basant nagar', 2009, 'harish@gmail.com', '3eguir1k6p1ruq7lf060cbg4p7'),
(12, 'Credit Card', ' 23', ' VISA', 'harish', '', 'b1-Basant nagar', 1096, 'harish@gmail.com', '0h141qm3l27i7ort0iqus6d0v0'),
(13, 'Cash on Delivery', ' ', ' Select', '', '', 'b1-1233 adarsh nagar', 1444, 'sakina@gmail.com', '0h141qm3l27i7ort0iqus6d0v0'),
(14, 'Cash on Delivery', ' ', ' Select', '', '', 'rttgrgrttrg', 7385, 'harish@gmail.com', 'j5eos6es2scjsb41kq2vrn6j62'),
(15, 'Cash on Delivery', ' ', ' ', '', '', 'sadf', 8075, 'abc@yahoo.com', 'tr20g8c82jvo4g0dd47hotlsa6'),
(16, 'Cash on Delivery', ' ', ' ', '', '', 'sadf', 9118, 'abc@yahoo.com', 'tr20g8c82jvo4g0dd47hotlsa6'),
(17, 'Cash on Delivery', ' ', ' ', '', '', 'ddds', 7950, 'abc@yahoo.com', 'psrabgu1vcfl8p6fs7saeiccf5'),
(18, 'Cash on Delivery', ' A', '', '', '', '', 398, 'abc@yahoo.com', 'ali5sk1c1hslhho06ogbdg9gf0'),
(19, 'Cash on Delivery', ' ', '', '', '', '312, Model Town, Jalandhar', 1397, 'abc@yahoo.com', '0hh3qgc9lpudl9ulk1gb0kaob7'),
(20, 'Cash on Delivery', ' ', '', '', '', 'Jalandhar', 398, 'suresh@yahoo.com', '33c44k57ipfljpalogfju89o66'),
(21, 'Cash on Delivery', ' ', '', '', '', 'asdfsadf', 14372, 'abc2@yahoo.com', 'egtpgsiraisgev2qrc54a3km86'),
(22, 'Cash on Delivery', ' ', ' ', '', '', 'asdf', 2996, 'abc2@yahoo.com', '5dre8npru1eha1v9ihkfjp80t0'),
(23, 'Cash on Delivery', ' ', ' ', '', '', 'asdf', 398, 'varun@gmail.com', '4912iu2csa7igg4hekhmq8p573'),
(24, 'Cash on Delivery', ' ', ' ', '', '', '243, ABC Colony\r\nNew York', 3090, 'abc@yahoo.com', '6aqhp3950cgdu0kukdt25ejk66');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `Name` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Country` varchar(15) NOT NULL,
  `City` varchar(15) NOT NULL,
  `State` varchar(15) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Usertype` varchar(20) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Name`, `Address`, `Gender`, `Country`, `City`, `State`, `Phone`, `Username`, `Password`, `Usertype`) VALUES
('ABC', 'XYZ', 'on', 'USA', 'ABC', 'XYZ', '9879234893', 'abc@yahoo.com', '123', 'Normal'),
('Admin', 'Chandigarh', 'Male', 'India', 'jalandhar', 'punjab', '987654321', 'admin@admin.com', '123', 'Admin'),
('Hansika', 'h.no 1655 jk road ', 'Female', 'India', 'jalandhar', 'punjab', '978654321', 'hansika@gmail.com', 'hansika', 'Normal'),
('Harish', 'b1-1888 model  town', 'Male', 'India', 'jalandhar', 'punjab', '908765432', 'harish@gmail.com', 'harish', 'Normal'),
('kanika', 'b1-2314 jawahar nagar', 'Female', 'India', 'jalandhar', 'punjab', '786542190', 'kanika@gmail.com', 'kanika', 'Normal'),
('kiran', 'b1-1788 model  town', 'Female', 'India', 'jalandhar', 'punjab', '687656465', 'kiran@gmail.com', 'kiran', 'Normal'),
('Runa', 'b1-1888 model  town', 'Female', 'India', 'jalandhar', 'punjab', '786542190', 'runa@gmail.com', 'runa', 'Normal'),
('Sakina', 'h no-1233 adarsh nagar', 'Female', 'India', 'jalandhar', 'punjab', '789654321', 'sakina@gmail.com', 'sakina', 'Normal'),
('varun', 'h no-1233 adarsh nagar', 'Male', 'India', 'jalandhar', 'punjab', '978654321', 'varun@gmail.com', 'varun', 'Normal');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
