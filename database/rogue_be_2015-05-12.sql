# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.42)
# Database: rogue_be
# Generation Time: 2015-05-12 22:31:49 +0000
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
	(2,1,'wish-list','Our Wish List'),
	(3,1,'hours-body','Donations can be left in the shed across the parking lot any time, larger donations will be accepted by appointment.'),
	(4,1,'body-intro-1','Rogue Book Exchange is a nonprofit organization founded to unite unwanted books with people who want them. We look like a bookstore, but there\'s one big difference: all the books on the shelves are free!'),
	(5,1,'body-intro-2','A small percentage of donated books we have are sold online in order to pay the bills. All other books will be made available free to the public. You don\'t have to donate books in order to take some home and you don\'t have to take any home if you donate. Someone would love to have the books and other media that have been gathering dust on your shelves or in storage so bring them on in and take home something new!'),
	(6,1,'volunteer-text','We always have books waiting to be shelved. Sign up to Volunteer Today!'),
	(7,1,'donate-text','As always, all donations are tax deductible!'),
	(8,1,'wish-list-body','Lumber: 1x8, 1x10 and 1x12 boards in lengths of at least 3 feet. Publicity contacts. Any way we can spread the word helps. Barcode scanners. Office supplies: blank paper, packing tape, scotch tape, bubble wrap. Gift certificates (got one that you\'re just not sure how to use?) for building supply or office supply stores And SO MUCH MORE...');

/*!40000 ALTER TABLE `blocks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table days
# ------------------------------------------------------------



# Dump of table pages
# ------------------------------------------------------------

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;

INSERT INTO `pages` (`id`, `name`, `url`)
VALUES
	(1,'Home','home'),
	(2,'FAQ','faq');

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
	(1,'Joe','Admin','rbe@gmail.com','$2y$10$FKP0lq6nt0ZBRFqsnCgjXOgqZV6qf3lqQdgSYxtrXOVqZdQ960a6m','d2yyiiv63cleh7fgpplSvJNpAOKTeFM07MO0lH6zWXfK4mm6qQ36wzJAkCWZ','2015-05-12 20:09:07','2015-05-12 20:11:15');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table volunteers
# ------------------------------------------------------------

LOCK TABLES `volunteers` WRITE;
/*!40000 ALTER TABLE `volunteers` DISABLE KEYS */;

INSERT INTO `volunteers` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`, `created_at`, `updated_at`)
VALUES
	(1,'Ted','Hendricks','example@gmail.com','541-000-0000','$2y$10$8a72JsRynfhQGMxlLDnvd.7awWuTtnih0.73sbosdLtK2gA07vfUm','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `volunteers` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
