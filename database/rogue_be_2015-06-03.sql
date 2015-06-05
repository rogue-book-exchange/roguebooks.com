# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.42)
# Database: rogue_be
# Generation Time: 2015-06-03 20:36:40 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table blocks
# ------------------------------------------------------------

LOCK TABLES `blocks` WRITE;
/*!40000 ALTER TABLE `blocks` DISABLE KEYS */;

INSERT INTO `blocks` (`id`, `page_id`, `name`, `content`)
VALUES
	(1,1,'hours-header','Open 10am - 3pm Wednesday - Saturday'),
	(2,1,'wish-list','Wish List'),
	(3,1,'hours-body','Donations can be left in the shed across the parking lot any time, larger donations will be accepted by appointment.'),
	(4,1,'body-intro-1','Rogue Book Exchange is a nonprofit organization founded to unite unwanted books with people who want them. We look like a bookstore, but there\'s one big difference: all the books on the shelves are free!'),
	(5,1,'body-intro-2','A small percentage of donated books we have are sold online in order to pay the bills. All other books will be made available free to the public. You don\'t have to donate books in order to take some home and you don\'t have to take any home if you donate. Someone would love to have the books and other media that have been gathering dust on your shelves or in storage so bring them on in and take home something new!'),
	(6,0,'volunteer-text','We always have books waiting to be shelved. Sign up to Volunteer Today!'),
	(7,0,'donate-text','As always, all donations are tax deductible!'),
	(10,1,'google-maps','Find Us on Google'),
	(11,0,'subscribe-header','Subscribe To Our Email List'),
	(12,0,'footer-email','roguebookexchange@gmail.com'),
	(13,0,'footer-address','110 N Ivy St, Medford, OR 97501'),
	(14,0,'footer-phone','541-779-1326'),
	(15,4,'volunteer-header','');

/*!40000 ALTER TABLE `blocks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table faqs
# ------------------------------------------------------------

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`)
VALUES
	(1,'Where are you located?','We are located in downtown Medford on the NE corner of 6th and Ivy.','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(2,'What do you do?','Rogue Book Exchange is a nonprofit organization founded to unite unwanted books with people who want them. We look like a bookstore, but there\'s one big difference: all the books on the shelves are free!','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(3,'How does it work?','A small percentage of donated books will be sold online in order to pay the bills. All other books will be made available free to the public. You don\'t have to donate books in order to take some home and you don\'t have to take any home if you donate. Someone would love to have the books and other media that have been gathering dust on your shelves or in storage so bring them on in and take home something new!','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(4,'What are your hours?','Rogue Book Exchange is open Wednesday-Saturday 10am-3pm.','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(5,'What do you carry?','Our largest selections are in general fiction, mystery/thriller/horror, religion and spirituality, nonfiction, health/diet and romance. We also have many items in young adult, reference/ educational/ textbooks/ homeschool, pregnancy/ parenting, childrens, cookbooks, biography and autobiography, science fiction/ fantasy, history and current events, business/ finance, sports, travel, pets, humor, home improvement, crafts/ hobbies, foreign language, games, computer, nature, classics, western, movies, audiobooks, and CDs. Obviously, our stock will be in constant flux so you\'ll have to come in to see what you can find!','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(6,'What do you not accept?','Encyclopedias, Reader\'s Digest Condensed books or magazines.','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(7,'Is there a place to drop off books after hours?','There is a donation drop box available in our parking lot for drop-off any time-- look for the book shed!','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(8,'What do I do if I have a large donation?','If you have a large donation and cannot make it to us during open hours, please call to schedule an appointment.Also if you have a large number of items to donate (more than 4 full boxes) we would be happy to send a volunteer to help you box up the books or access them from storage and take them away. Contact our staff at roguebookexchange@gmail.com to arrange a pick-up time.','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(9,'Are my donations tax deductible?','Yes just ask the worker on duty for a receipt.','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(10,'How to contact us?','You are welcome to stop by any time during open hours. Our phone number is (541) 779-1326. You can also contact our staff by email at: roguebookexchange@gmail.com.','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pages
# ------------------------------------------------------------

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;

INSERT INTO `pages` (`id`, `name`, `url`)
VALUES
	(1,'Home','home'),
	(2,'FAQ','faq'),
	(3,'About','about'),
	(4,'Volunteer','volunteer');

/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------



# Dump of table users
# ------------------------------------------------------------

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Jenny','Hamilton','roguebookexchange@gmail.com','$2y$10$OxTpjUickk2GN3vE63DW6O9COGw4Vk/nbc392vVGWvf0/2aQ6PSYa','n9jTVUkNAQeleuLKbG491sfYSHmrr5ayhgiDSh08E9JDK0GfxXZnBedJcUOF','2015-05-12 20:09:07','2015-06-03 19:05:23');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table volunteers
# ------------------------------------------------------------



# Dump of table wishlists
# ------------------------------------------------------------

LOCK TABLES `wishlists` WRITE;
/*!40000 ALTER TABLE `wishlists` DISABLE KEYS */;

INSERT INTO `wishlists` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(6,'Lumber: 1x8, 1x10 and 1x12 boards in lengths of at least 3 feet.','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(7,'Publicity contacts. Any way we can spread the word helps.','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(8,'Barcode scanners.','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(9,'Office supplies: blank paper, packing tape, scotch tape, bubble wrap.','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(10,'Gift certificates (got one that you\'re just not sure how to use?) for building supply or office supply stores.','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(11,'And SO MUCH MORE...','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `wishlists` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
