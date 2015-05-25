# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.42)
# Database: rogue_be
# Generation Time: 2015-05-25 05:38:50 +0000
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
	(8,1,'wish-list-body','Lumber: 1x8, 1x10 and 1x12 boards in lengths of at least 3 feet. Publicity contacts. Any way we can spread the word helps. Barcode scanners. Office supplies: blank paper, packing tape, scotch tape, bubble wrap. Gift certificates (got one that you\'re just not sure how to use?) for building supply or office supply stores And SO MUCH MORE...'),
	(10,1,'google-maps','Find Us on Google'),
	(11,0,'subscribe-header','Subscribe To Our Email List'),
	(12,0,'footer-email','roguebookexchange@gmail.com'),
	(13,0,'footer-address','110 N Ivy St, Medford, OR 97501'),
	(14,0,'footer-phone','541-779-1326');

/*!40000 ALTER TABLE `blocks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table days
# ------------------------------------------------------------



# Dump of table faqs
# ------------------------------------------------------------



# Dump of table pages
# ------------------------------------------------------------

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;

INSERT INTO `pages` (`id`, `name`, `url`)
VALUES
	(1,'Home','home'),
	(2,'FAQ','faq'),
	(3,'About','about');

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
	(1,'Joe','Admin','rbe@gmail.com','$2y$10$FKP0lq6nt0ZBRFqsnCgjXOgqZV6qf3lqQdgSYxtrXOVqZdQ960a6m','B7zR01qBOcKi1ZgocNp58Bua67KkRdD5WOJlyJXJwWfbFEfgj7hqxdOpm3Yl','2015-05-12 20:09:07','2015-05-25 05:15:29');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table volunteers
# ------------------------------------------------------------




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
