/*
SQLyog Community v13.1.5  (32 bit)
MySQL - 10.4.13-MariaDB : Database - sotoya
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sotoya` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `sotoya`;

/*Table structure for table `aerations` */

DROP TABLE IF EXISTS `aerations`;

CREATE TABLE `aerations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `aerations` */

insert  into `aerations`(`id`,`name`,`price`,`description`,`default`,`created_at`,`updated_at`) values 
(1,'Aucune','100','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','1',NULL,NULL),
(2,'15 M3/H','200','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL),
(3,'30 M3/H','300','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL);

/*Table structure for table `cgvs` */

DROP TABLE IF EXISTS `cgvs`;

CREATE TABLE `cgvs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cgvs` */

insert  into `cgvs`(`id`,`title`,`detail`,`created_at`,`updated_at`) values 
(1,'FORMATION DU CONTRA','Le contrat de vente ne prend effet qu’après acceptation par la société SOTOYA CONSTRUCTIONS de la commande du client et ce par accusé de réception. Aucune autre forme d’acceptation n’engagera la société SOTOYA CONSTRUCTIONS. Toute commande passée et acceptée par la société SOTOYA CONSTRUCTIONS devient ferme et définitive et entraîne l’obligation d’achat. A défaut de respect de l’engagement d’achat par le client pour quelque motif que ce soit, la société SOTOYA CONSTRUCTIONS se réserve le droit de lui réclamer l’intégralité du prix du devis validé.',NULL,NULL),
(2,'DROIT DE PROPRIETE','Les études et tout autre document remis au client restent la propriété de la société SOTOYA CONSTRUCTIONS et doivent être rendus sur simple demande. Les brevets, marques, dessins, modèles ou procédés de fabrication qui figurent sur les documents contractuels de la société SOTOYA CONSTRUCTIONS remis au client rentent et sont la propriété exclusive de la société SOTOYA CONSTRUCTIONS. En outre ces documents ne peuvent ni être communiqués, ni exécutés, ni représentés ou reproduits sans autorisation expresse et écrite de la société SOTOYA CONSTRUCTIONS. Les études et projets fournis au client par la société SOTOYA CONSTRUCTIONS peuvent être modifiés à tout moment sans préavis au cas où les normes législatives et règlementaires en vigueur l’impliqueraient.',NULL,NULL),
(3,'FRAIS D’ETUDE COMPLEMENTAIRE','Les frais d’étude sont normalement compris dans le prix fixé à la commande. Néanmoins, si le projet supporte, du fait du client, des modifications importantes non initialement prévues et qui nécessitent une reprise importante des études réalisées, la société SOTOYA CONSTRUCTIONS se réserve la possibilité de facturer des frais d’étude complémentaire.',NULL,NULL),
(4,'TRANSPORT','Quelles que soient les modalités de la vente, les matériels et marchandises voyagent aux risques et périls du destinataire. Il appartient au destinataire de faire toutes les réserves dans les formes et délais prévus par les articles 105 et suivants du code de commerce et d’exercer tout recours, s’il y a lieu, contre les transporteurs.',NULL,NULL),
(5,'LIVRAISONS','Les délais de livraison figurant sur le devis ne commencent à courir qu’après réception par la société SOTOYA CONSTRUCTIONS des plans approuvés par le client. La société SOTOYA CONSTRUCTIONS est dégagée de plein droit de tout engagement relatif aux délais de livraison en cas de force majeure. En outre, le délai imposé par les fournisseurs de fournitures particulières se répercutera sur le délai contractuel sans que cette répercussion puisse justifier quelque annulation de commande ou quelque indemnité que ce soit. Les matériels que le client demanderait à la société SOTOYA CONSTRUCTIONS de conserver en magasin après fabrication seraient immédiatement facturés, la mise en disposition en usine après achèvement de la fabrication étant assimilée à une livraison effectuée tant du point de vue du règlement que du point de vue du transfert de propriété. Dans ce cas les matériels séjournent dans nos locaux aux risques et périls de leur propriétaire.',NULL,NULL),
(6,'MODALITES DE PAIEMENT','Pas d’escompte en cas de paiement anticipé. Sauf convention contraire expresse, il sera versé un acompte de 30% et le solde, les 70% restants, sera payé à la facturation définitive. Si le paiement est prévu par traite, le client s’engage à retourner acceptées et domiciliées lesdites lettres de change dans les 8 jours suivant leur envoi. Le défaut de réception des lettres de change acceptées dans ledit délai sera considéré comme un refus d’acceptation assimilable à un défaut de paiement. En cas de retard de paiement, la société SOTOYA CONSTRUCTIONS pourra suspendre toutes les commandes en cours sans préjudice de toute autre voie d’action. Toute somme non payée à son échéance donnera lieu de plein droit et sans mise en demeure préalable par dérogation à l’article 1153 du code civil, au paiement d’intérêt de retard s’élevant à 10% annuel. Les intérêts courront du jour de l’échéance normal du règlement jusqu’à la date du parfait paiement du prix et de ses accessoires. En cas de défaut de paiement, 10 jours après mise ne demeure demeurée infructueuse, la vente sera résiliée de plein droit si bon semble à la société SOTOYA CONSTRUCTIONS qui pourra demander la restitution des matériels sans préjudice de tous autres dommages et intérêts. L’acheteur devra rembourser la société SOTOYA CONSTRUCTIONS tous les frais occasionnés par le recouvrement des sommes non payées, y compris une indemnité forfaitaire de 10% des sommes dues. En aucun cas les réclamations éventuelles en matière de prix, de quantité ou de qualité ne peuvent dispenser l’acheteur de régler à échéance la part de nos factures excédant le montant de la réclamation sauf à mettre en œuvre automatiquement le régime des pénalités et intérêts de retard ci-dessus prévu.',NULL,NULL),
(7,'CLAUSE DE RESERVE DE PROPRIETE','Conformément aux dispositions législatives en vigueur, le transfert de propriété de nos matériels se verra différé jusqu’au paiement complet du prix en principal, frais et intérêts, les ventes n’étant réputées parfaites qu’après le paiement de la totalité des sommes ci-dessus, les matériels restant notre propriété jusqu’à la réalisation de cette condition. Jusqu’à cette date, l’acquéreur n’aura que la simple qualité de détenteur de nos matériels et devra en assurer à ses frais la garde, les risques et la responsabilité. Dans tous les cas il supportera tous les risques et dommages que nos matériels pourraient subir. L’acheteur ne peut aliéner notre propriété que dans le cadre d’affaires régulièrement conclus à des conditions habituelles. Dans ce cas, l’acheteur doit informer son client de l’existence de la clause de réserve de propriété existant sur les matériels qu’il aura revendus et du droit que se réserve la société SOTOYA CONSTRUCTIONS de revendiquer entre ses mains soit le matériel litigieux, soit son prix. L’acquéreur s’engage à maintenir nos matériels constamment identifiés avant tout usage. La société SOTOYA CONSTRUCTIONS pourra se prévaloir du jeu de la présente clause de réserve de propriété trois jours après une mise en demeure adressée par lettre recommandée avec accusé de réception et restée en tout ou partie sans effet. Lorsque la société SOTOYA CONSTRUCTIONS aura fait connaitre sa décision de faire jouer la clause de réserve de propriété, et de revendiquer ses marchandises, l’acheteur devra soit les rendre sans délai à ses frais, soit les payer intégralement pour pouvoir les utiliser. En cas de redressement judiciaire ou de liquidation judiciaire de l’acheteur, la revendication de nos matériels, affectés de la clause de réserve de propriété, sera effectuée dans les conditions prévues par la loi du 25 janvier 1985 modifiée par la loi du 10 juin 1994.',NULL,NULL),
(8,'CLAUSE ATTRIBUTIVE DE COMPETENCE','Election de domicile est faite par la société SOTOYA CONSTRUCTIONS à son siège social, à LA CIOTAT. En cas de contestation susceptible de s’élever entre les parties quant à la formation ou l’exécution des opérations de vente de nos matériels, quant au paiement du prix ou quant à l’interprétation ou l’exécution des clauses des présentes conditions générales de vente, le Tribunal de Commerce de MARSEILLE sera seul compétent quel que soit le lieu de la livraison, les modes et lieux de paiement. La loi applicable aux opérations de vente conclues par la société SOTOYA CONSTRUCTIONS est la loi française.',NULL,NULL);

/*Table structure for table `colors` */

DROP TABLE IF EXISTS `colors`;

CREATE TABLE `colors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `colors` */

insert  into `colors`(`id`,`name`,`value`,`price`,`default`,`created_at`,`updated_at`) values 
(1,'RAL 9016','#edede6','100','1',NULL,NULL),
(2,'RAL 7016','#383e42','200','0',NULL,NULL),
(3,'RAL 9010','#f1ece1','300','0',NULL,NULL),
(4,'RAL 9006','#a1a1a0','400','0',NULL,NULL),
(5,'RAL 9005','#0e0e10','500','0',NULL,NULL),
(6,'RAL 6005','#114232','600','0',NULL,NULL),
(7,'RAL 8017','#442f29','700','0',NULL,NULL),
(8,'RAL 9007','#878581','800','0',NULL,NULL),
(9,'RAL 1013','#e3d9c6','900','0',NULL,NULL),
(10,'RAL 5010','#004f7c','1000','0',NULL,NULL),
(11,'RAL 1015','#e6d2b5','1100','0',NULL,NULL),
(12,'RAL 3004','#6b1c23','1200','0',NULL,NULL);

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `faqs` */

DROP TABLE IF EXISTS `faqs`;

CREATE TABLE `faqs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `faqs` */

insert  into `faqs`(`id`,`title`,`detail`,`created_at`,`updated_at`) values 
(1,'Pourquoi changer mes menuiseries (portes, fenêtres, baies…) ?','Les menuiseries peuvent représenter jusqu’à 15 % du total des déperditions de chaleur.<br/>\r\n            En remplaçant vos anciennes menuiseries par des menuiseries isolantes, vous réaliserez à la fois d’importantes économies d’énergie tout en améliorant votre confort.<br/>\r\n            Fini de jeter l’argent par les fenêtres ! Par ailleurs, de belles fenêtres, harmonieusement intégrées au bâti, valorisent votre logement. Changer ses fenêtres représente un investissement durable qui redonne de la valeur à votre patrimoine.',NULL,NULL),
(2,'Quels sont les avantages des menuiseries en aluminium ?','L’efficacité thermique, acoustique et l’étanchéité à l’air des menuiseries aluminium est incomparable. Avec un coefficient thermique Uw jusqu’à 1,3 W/m² K, les économies sur la facture énergétiques sont garanties !<br/>\r\n                D’un point de vue design, le choix de coloris et de finitions est particulièrement étendu.<br/>\r\n                Nos menuiseries en aluminium offrent, en outre, jusqu’à 20% de lumière en plus qu’une fenêtre traditionnelle. A cela s’ajoute un excellent confort acoustique et un respect de l’environnement puisque l’aluminium est un matériau 100% recyclable.',NULL,NULL),
(3,'Que signifie exactement le terme PVC ?','Les trois initiales PVC correspondent au mot anglais « Poly Vinyl Chloride » qui en français se traduit par Polychlorure de vinyle. Le PVC est composé de chlore à 57% et d’éthylène à 43% (pour info, la plupart des matières plastiques contient 100% d’éthylène extrait du pétrole).',NULL,NULL),
(4,'PVC et écologie vont-ils de paire ?','Sur un ton imagé et humoristique, nous pouvons avancer que « le PVC c’est 43 % d’hydrocarbure et 57% de sel de table (Nacl) ». Plus sérieusement, ce matériau a su s’inscrire sur la voie du développement durable.',NULL,NULL),
(5,'Puis-je poser mes fenêtres moi-même ?','Le fabricant de menuiseries ne peut être tenu pour responsable de la qualité de votre travail et du résultat final qui en découle ; il est donc préférable de faire appel aux compétences d’un professionnel SOLABAIE. De plus, ela vous permettra d’avoir une garantie décennale et dans le cadre d’une rénovation, un crédit d’impôt qui engagera sa responsabilité et pourra vous délivrer la garantie 10 ans.',NULL,NULL),
(6,'Vos fenêtres ont-elles un label qualité ?','Nos fenêtres Alu sont fabriquées avec des profilés de la marque NF attestant de la conformité de leur extrusion aux normes en vigueur. Par ailleurs, les menuiseries sont réalisées suivant une conception relevant d’un Avis Technique ; le niveau de qualité de production en atelier est régulièrement contrôlé par le CSBT (Centre Scientifique et Technique du Bâtiment).',NULL,NULL),
(7,'Quels sont les avantages des menuiseries en aluminium ?','Si votre habitation est classée ou située dans la zone de protection d’un site classé, vous devez obtenir une autorisation préalable des Monuments Historiques.<br/>\r\n                Si vous êtes en copropriété, consultez votre règlement.<br/>\r\n                Pour créer une nouvelle ouverture, une déclaration de travaux adressée à votre mairie est suffisante.\n\r\n                Dans tous les autres cas, pour un changement de fenêtre qui n’altère pas l’architecture de la façade (mêmes dimensions, même forme, même couleur) vous n’avez pas besoin d’effectuer une démarche administrative avant de changer vos fenêtres.',NULL,NULL);

/*Table structure for table `glazings` */

DROP TABLE IF EXISTS `glazings`;

CREATE TABLE `glazings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `glazings` */

insert  into `glazings`(`id`,`name`,`price`,`description`,`default`,`created_at`,`updated_at`) values 
(1,'4/16/4 FE','100','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','1',NULL,NULL),
(2,'4/20/4 FE','200','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL),
(3,'4/16/4 FE one','300','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL),
(4,'4 FE/-/4 G200','400','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL),
(5,'4 FE/-/4 dépoli','500','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL),
(6,'4 planistar/-/4','600','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL),
(7,'4 stopsol/-/4','700','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL),
(8,'5/-/5 FE','800','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL),
(9,'6/-/6','900','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL),
(10,'6/-/4 planistar','1000','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL),
(11,'10/-/4 FE','1100','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL),
(12,'44.2/-/4 FE','1200','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL);

/*Table structure for table `installations` */

DROP TABLE IF EXISTS `installations`;

CREATE TABLE `installations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `installations` */

insert  into `installations`(`id`,`name`,`price`,`description`,`default`,`created_at`,`updated_at`) values 
(1,'Applique','100','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','1',NULL,NULL),
(2,'Tunnel','200','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL),
(3,'Rénovation','300','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL);

/*Table structure for table `insulations` */

DROP TABLE IF EXISTS `insulations`;

CREATE TABLE `insulations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `insulations` */

insert  into `insulations`(`id`,`value`,`price`,`default`,`created_at`,`updated_at`) values 
(1,'120','100','1',NULL,NULL),
(2,'130','200','0',NULL,NULL),
(3,'140','300','0',NULL,NULL),
(4,'150','400','0',NULL,NULL);

/*Table structure for table `joins` */

DROP TABLE IF EXISTS `joins`;

CREATE TABLE `joins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `joins` */

insert  into `joins`(`id`,`name`,`price`,`image`,`default`,`created_at`,`updated_at`) values 
(1,'Fenêtre','50','Mask Group 1@2x.png','1',NULL,NULL),
(2,'Baie coulissante','150','Mask Group 2@2x.png','0',NULL,NULL),
(3,'Porte fenêtre','250','Mask Group 3@2x.png','0',NULL,NULL),
(4,'Porte entrée','350','Mask Group 4@2x.png','0',NULL,NULL),
(5,'Porte de service','450','Mask Group 5@2x.png','0',NULL,NULL),
(6,'Volet roulant','550','Mask Group 6@2x.png','0',NULL,NULL),
(7,'Garde corps','650','Mask Group 7@2x.png','0',NULL,NULL),
(8,'Véranda','750','Mask Group 8@2x.png','0',NULL,NULL),
(9,'Pergola','850','Mask Group 9@2x.png','0',NULL,NULL),
(10,'Accessoires','950','Mask Group 10@2x.png','0',NULL,NULL);

/*Table structure for table `leaves` */

DROP TABLE IF EXISTS `leaves`;

CREATE TABLE `leaves` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `leaves` */

insert  into `leaves`(`id`,`name`,`price`,`description`,`default`,`created_at`,`updated_at`) values 
(1,'1 vantail','100','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','1',NULL,NULL);

/*Table structure for table `legalnotices` */

DROP TABLE IF EXISTS `legalnotices`;

CREATE TABLE `legalnotices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `legalnotices` */

/*Table structure for table `materials` */

DROP TABLE IF EXISTS `materials`;

CREATE TABLE `materials` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `materials` */

insert  into `materials`(`id`,`name`,`price`,`description`,`default`,`created_at`,`updated_at`) values 
(1,'Aluminium','100','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','1',NULL,NULL),
(2,'PVC','200','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2020_09_14_145018_create_aerations_table',1),
(5,'2020_09_14_145027_create_colors_table',1),
(6,'2020_09_14_145035_create_glazings_table',1),
(7,'2020_09_14_145044_create_installations_table',1),
(8,'2020_09_14_145313_create_insulations_table',1),
(9,'2020_09_14_145335_create_joins_table',1),
(10,'2020_09_14_145347_create_leaves_table',1),
(11,'2020_09_14_145354_create_materials_table',1),
(12,'2020_09_14_145403_create_openings_table',1),
(13,'2020_09_14_145421_create_ranges_table',1),
(14,'2020_09_14_145431_create_totalheights_table',1),
(15,'2020_09_14_145439_create_totalwidths_table',1),
(16,'2020_09_15_132234_create_projects_table',1),
(17,'2020_09_15_133556_create_faqs_table',1),
(18,'2020_09_15_133704_create_cgvs_table',1),
(19,'2020_09_15_133715_create_legalnotices_table',1),
(20,'2020_09_15_170120_create_orders_table',1),
(21,'2020_10_09_053254_create_professions_table',1);

/*Table structure for table `openings` */

DROP TABLE IF EXISTS `openings`;

CREATE TABLE `openings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `openings` */

insert  into `openings`(`id`,`name`,`price`,`description`,`default`,`created_at`,`updated_at`) values 
(1,'Fixe','10','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','1',NULL,NULL),
(2,'Abattant','20','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL),
(3,'Ouvrant française','30','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL),
(4,'Ouvrant anglaise','40','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL),
(5,'Oscillo-battant','50','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL);

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `join_id` bigint(20) unsigned NOT NULL,
  `material_id` bigint(20) unsigned NOT NULL,
  `range_id` bigint(20) unsigned NOT NULL,
  `opening_id` bigint(20) unsigned NOT NULL,
  `leave_id` bigint(20) unsigned NOT NULL,
  `installation_id` bigint(20) unsigned NOT NULL,
  `totalheight_id` bigint(20) unsigned NOT NULL,
  `totalwidth_id` bigint(20) unsigned NOT NULL,
  `insulation_id` bigint(20) unsigned NOT NULL,
  `aeration_id` bigint(20) unsigned NOT NULL,
  `glazing_id` bigint(20) unsigned NOT NULL,
  `color_id` bigint(20) unsigned NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `state_deliver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_join_id_foreign` (`join_id`),
  KEY `orders_material_id_foreign` (`material_id`),
  KEY `orders_range_id_foreign` (`range_id`),
  KEY `orders_opening_id_foreign` (`opening_id`),
  KEY `orders_leave_id_foreign` (`leave_id`),
  KEY `orders_installation_id_foreign` (`installation_id`),
  KEY `orders_totalheight_id_foreign` (`totalheight_id`),
  KEY `orders_totalwidth_id_foreign` (`totalwidth_id`),
  KEY `orders_insulation_id_foreign` (`insulation_id`),
  KEY `orders_aeration_id_foreign` (`aeration_id`),
  KEY `orders_glazing_id_foreign` (`glazing_id`),
  KEY `orders_color_id_foreign` (`color_id`),
  KEY `orders_project_id_foreign` (`project_id`),
  CONSTRAINT `orders_aeration_id_foreign` FOREIGN KEY (`aeration_id`) REFERENCES `aerations` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_glazing_id_foreign` FOREIGN KEY (`glazing_id`) REFERENCES `glazings` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_installation_id_foreign` FOREIGN KEY (`installation_id`) REFERENCES `installations` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_insulation_id_foreign` FOREIGN KEY (`insulation_id`) REFERENCES `insulations` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_join_id_foreign` FOREIGN KEY (`join_id`) REFERENCES `joins` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_leave_id_foreign` FOREIGN KEY (`leave_id`) REFERENCES `leaves` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_material_id_foreign` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_opening_id_foreign` FOREIGN KEY (`opening_id`) REFERENCES `openings` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_range_id_foreign` FOREIGN KEY (`range_id`) REFERENCES `ranges` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_totalheight_id_foreign` FOREIGN KEY (`totalheight_id`) REFERENCES `totalheights` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_totalwidth_id_foreign` FOREIGN KEY (`totalwidth_id`) REFERENCES `totalwidths` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `orders` */

insert  into `orders`(`id`,`user_id`,`join_id`,`material_id`,`range_id`,`opening_id`,`leave_id`,`installation_id`,`totalheight_id`,`totalwidth_id`,`insulation_id`,`aeration_id`,`glazing_id`,`color_id`,`price`,`state_order`,`state_deliver`,`mode`,`project_id`,`created_at`,`updated_at`) values 
(1,1,6,1,1,1,1,1,1,1,1,3,12,12,'3960','0','0','1',1,'2020-10-13 19:16:55','2020-10-13 19:16:55'),
(2,1,1,1,1,1,1,1,1,1,1,1,1,1,'1060','0','0','1',1,'2020-10-13 19:17:28','2020-10-13 19:17:28'),
(3,1,3,1,1,1,1,1,1,1,1,1,1,1,'1260','1','0','1',1,'2020-10-13 19:17:33','2020-10-13 19:18:18'),
(4,1,8,1,1,1,1,1,1,1,1,1,1,1,'1760','1','0','1',1,'2020-10-13 19:17:39','2020-10-13 19:18:16'),
(5,1,1,1,1,1,1,1,1,1,1,1,1,1,'1060','0','0','1',2,'2020-10-13 19:18:03','2020-10-13 19:18:03'),
(6,1,1,1,1,1,1,1,1,1,1,1,1,1,'1060','0','0','1',1,'2020-10-14 02:27:27','2020-10-14 02:27:27'),
(7,1,1,1,1,1,1,1,1,1,1,1,1,1,'1060','0','0','1',2,'2020-10-14 02:49:21','2020-10-14 02:49:21'),
(8,1,1,1,1,1,1,1,1,1,1,1,1,1,'1060','0','0','1',2,'2020-10-14 02:52:44','2020-10-14 02:52:44'),
(9,1,1,1,2,5,1,3,3,2,4,1,9,11,'3800','0','0','0',NULL,'2020-10-14 02:54:27','2020-10-14 02:54:27');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `professions` */

DROP TABLE IF EXISTS `professions`;

CREATE TABLE `professions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `professions` */

insert  into `professions`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'Architecte',NULL,NULL),
(2,'Maitre d’œuvre',NULL,NULL),
(3,'Bureau d’études',NULL,NULL),
(4,'Gros œuvre',NULL,NULL),
(5,'QSE',NULL,NULL);

/*Table structure for table `projects` */

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_user_id_foreign` (`user_id`),
  CONSTRAINT `projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `projects` */

insert  into `projects`(`id`,`user_id`,`name`,`created_at`,`updated_at`) values 
(1,1,'AAAAAAAAAA','2020-10-13 19:16:55','2020-10-13 19:16:55'),
(2,1,'BBBBBB','2020-10-13 19:17:59','2020-10-13 19:17:59'),
(3,1,'aa','2020-10-14 02:30:32','2020-10-14 02:30:32');

/*Table structure for table `ranges` */

DROP TABLE IF EXISTS `ranges`;

CREATE TABLE `ranges` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `ranges` */

insert  into `ranges`(`id`,`name`,`price`,`description`,`default`,`created_at`,`updated_at`) values 
(1,'Gamme 70','100','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','1',NULL,NULL),
(2,'Gamme 50','200','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue','0',NULL,NULL);

/*Table structure for table `totalheights` */

DROP TABLE IF EXISTS `totalheights`;

CREATE TABLE `totalheights` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `totalheights` */

insert  into `totalheights`(`id`,`value`,`price`,`default`,`created_at`,`updated_at`) values 
(1,'600','100','1',NULL,NULL),
(2,'700','200','0',NULL,NULL),
(3,'800','300','0',NULL,NULL),
(4,'900','400','0',NULL,NULL),
(5,'1000','500','0',NULL,NULL);

/*Table structure for table `totalwidths` */

DROP TABLE IF EXISTS `totalwidths`;

CREATE TABLE `totalwidths` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `totalwidths` */

insert  into `totalwidths`(`id`,`value`,`price`,`default`,`created_at`,`updated_at`) values 
(1,'1600','100','1',NULL,NULL),
(2,'1700','200','0',NULL,NULL),
(3,'1800','300','0',NULL,NULL),
(4,'1900','400','0',NULL,NULL),
(5,'2000','500','0',NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`firstname`,`lastname`,`gender`,`email`,`password`,`mode`,`company`,`address`,`postcode`,`city`,`telephone`,`profession_id`,`email_verified_at`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Jean','Marc','1','jeanmarc@gmail.com','$2y$10$4xs6pxs6901tHOb3MZIiZ.BIYTR0kiMXITvlVocSiBGr0GbwjMhXq','1','Sotoweb','14 Avenue Saint-Médard','33000','Bordeaux','06 90 84 23 12','3',NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
