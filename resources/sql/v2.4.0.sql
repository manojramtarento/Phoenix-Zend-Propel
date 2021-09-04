USE phoenix;

SET NAMES 'utf8';


-- *********************** --
-- BLOCK QUERY TYPE CREATE --
-- *********************** --


-- *********************** --
-- BLOCK QUERY TYPE ALTER --
-- *********************** --

-- ********** ---- TICKET #53652 START ---- ************* --

-- Delete r_custom_act_id field (Ticket : #53652 )
ALTER TABLE `r_operation_options` DROP FOREIGN KEY FK_ROPERATIONOPTIONS_RCUSTOMACTIVITES_RCUSTOMACTID;
ALTER TABLE `r_operation_options` DROP INDEX FK_ROPERATIONOPTIONS_RCUSTOMACTIVITES_RCUSTOMACTID;
ALTER TABLE `r_operation_options` DROP `r_custom_act_id`;

-- Add r_op_option_order which contains the order of the option (Ticket : #53652)
ALTER TABLE `r_operation_options` ADD `r_op_option_order` SMALLINT(6) UNSIGNED NULL AFTER `r_op_option_parent` ;

-- ********** ---- TICKET #53652 END ---- ************* --


START TRANSACTION;

-- *********************** --
-- BLOCK QUERY TYPE INSERT  --
-- *********************** --

-- ********** ---- TICKET #53655 START ---- ************* --

--  Add Acl for attach / detach options to activities kpis
INSERT INTO `acl_fonctionnalites`
           (`int_cont_id`
           ,`fonc_name`)
     SELECT `int_cont_id`, 'Attachement/Détachement des options aux activités'
     FROM `acl_interfaces_controllers`
            WHERE interface_name = 'roptionsdevis'
            AND controller_name = 'roptionsdevis'
     ORDER BY (`int_cont_id`) DESC
     LIMIT 0, 1;

INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     SELECT `int_cont_id`, 'updateactivitykpi', `fonc_id`
            FROM `acl_fonctionnalites`
                WHERE fonc_name = 'Attachement/Détachement des options aux activités'
    ORDER BY (`fonc_id`)
    DESC LIMIT 0, 1;
-- ********** ---- TICKET #53655 END ---- ************* --


-- ********** ---- TICKET #53654 START ---- ************* --

-- Add Acl for change order of options

INSERT INTO `acl_fonctionnalites`
           (`int_cont_id`
           ,`fonc_name`)
     SELECT `int_cont_id`, 'Changement d\'ordre des options'
     FROM `acl_interfaces_controllers`
            WHERE interface_name = 'roptionsdevis'
            AND controller_name = 'roptionsdevis'
     ORDER BY (`int_cont_id`) DESC
     LIMIT 0, 1;

INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     SELECT `int_cont_id`, 'updateoptionsorder', `fonc_id`
            FROM `acl_fonctionnalites`
                WHERE fonc_name = 'Changement d\'ordre des options'
    ORDER BY (`fonc_id`)
    DESC LIMIT 0, 1;

-- ********** ---- TICKET #53654 END ---- ************* --

-- *********************** --


-- *********************** --
-- BLOCK QUERY TYPE UPDATE  --
-- *********************** --

-- ********** ---- TICKET #53652 START ---- ************* --

-- Update order option level 1 (Option Name : Hotline)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 1;
-- Update order option level 2 (Option Name : Hotline / Ligne multi-client multi-op)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 2;
-- Update order option level 3 (Option Name : Hotline / Ligne multi-client multi-op / N° en 04)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 3;
-- Update order option level 3 (Option Name : Hotline / Ligne multi-client multi-op / 0970 805 100 (appel non surtaxé))
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 4;
-- Update order option level 3 (Option Name : Hotline / Ligne multi-client multi-op / 0826 620 730 (service 0.20€/min + prix appel))
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 5;
-- Update order option level 3 (Option Name : Hotline / Ligne multi-client multi-op / Ligne internationale locale (coût appel local))
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 250;
-- Update order option level 2 (Option Name : Hotline / Ligne mono-op)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 6;
-- Update order option level 3 (Option Name : Hotline / Ligne mono-op / N° majoré (0810...))
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 7;
-- Update order option level 3 (Option Name : Hotline / Ligne mono-op / N° gratuit (0800 à 0805))
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 8;
-- Update order option level 3 (Option Name : Hotline / Ligne mono-op / N° en 04 (NE PLUS UTILISER))
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 9;
-- Update order option level 3 (Option Name : Hotline / Ligne mono-op / N° banalisé (0806 à 0809))
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 94;
-- Update order option level 3 (Option Name : Hotline / Ligne mono-op / N° court / N° magique (0.34/min))
UPDATE `r_operation_options` SET `r_op_option_order` = '5' WHERE `r_operation_options`.`r_op_option_id` = 95;
-- Update order option level 3 (Option Name : Hotline / Ligne mono-op / N° vert International)
UPDATE `r_operation_options` SET `r_op_option_order` = '6' WHERE `r_operation_options`.`r_op_option_id` = 96;
-- Update order option level 2 (Option Name : Hotline / Ligne mono-client multi-op)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 262;
-- Update order option level 3 (Option Name : Hotline / Ligne mono-client multi-op / N° majoré (0810...))
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 263;
-- Update order option level 3 (Option Name : Hotline / Ligne mono-client multi-op / N° gratuit (0800 à 0805))
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 264;
-- Update order option level 3 (Option Name : Hotline / Ligne mono-client multi-op / N° banalisé (0806 à 0809))
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 265;
-- Update order option level 1 (Option Name : Digital)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 10;
-- Update order option level 2 (Option Name : Digital / Application smartphone)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 11;
-- Update order option level 2 (Option Name : Digital / Dev informatique)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 12;
-- Update order option level 2 (Option Name : Digital / WebServices)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 13;
-- Update order option level 2 (Option Name : Digital / Module Web de pré-saisie)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 14;
-- Update order option level 2 (Option Name : Digital / Net-ODR)
UPDATE `r_operation_options` SET `r_op_option_order` = '5' WHERE `r_operation_options`.`r_op_option_id` = 15;
-- Update order option level 2 (Option Name : Digital / Jeu Internet)
UPDATE `r_operation_options` SET `r_op_option_order` = '6' WHERE `r_operation_options`.`r_op_option_id` = 17;
-- Update order option level 2 (Option Name : Digital / Jeu SMS)
UPDATE `r_operation_options` SET `r_op_option_order` = '7' WHERE `r_operation_options`.`r_op_option_id` = 18;
-- Update order option level 2 (Option Name : Digital / Création graphique)
UPDATE `r_operation_options` SET `r_op_option_order` = '8' WHERE `r_operation_options`.`r_op_option_id` = 23;
-- Update order option level 2 (Option Name : Digital / Plug Plateforme)
UPDATE `r_operation_options` SET `r_op_option_order` = '9' WHERE `r_operation_options`.`r_op_option_id` = 245;
-- Update order option level 2 (Option Name : Digital / Devt Jeux)
UPDATE `r_operation_options` SET `r_op_option_order` = '10' WHERE `r_operation_options`.`r_op_option_id` = 16;
-- Update order option level 3 (Option Name : Digital / Devt Jeux / Flash codes)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 19;
-- Update order option level 1 (Option Name : Achat)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 20;
-- Update order option level 2 (Option Name : Achat / Sourcing (négoce, achat, revente))
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 21;
-- Update order option level 2 (Option Name : Achat / Print)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 25;
-- Update order option level 1 (Option Name : Création)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 22;
-- Update order option level 2 (Option Name : Création / Exécution graphique)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 24;
-- Update order option level 1 (Option Name : Assurance)
UPDATE `r_operation_options` SET `r_op_option_order` = '5' WHERE `r_operation_options`.`r_op_option_id` = 26;
-- Update order option level 2 (Option Name : Assurance / Assurance)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 27;
-- Update order option level 1 (Option Name : Logistique Ponctuelle (kitage))
UPDATE `r_operation_options` SET `r_op_option_order` = '6' WHERE `r_operation_options`.`r_op_option_id` = 28;
-- Update order option level 2 (Option Name : Logistique Ponctuelle (kitage) / Logistique Ponctuelle (kitage))
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 29;
-- Update order option level 1 (Option Name : Cartavenue)
UPDATE `r_operation_options` SET `r_op_option_order` = '7' WHERE `r_operation_options`.`r_op_option_id` = 30;
-- Update order option level 2 (Option Name : Cartavenue / Cartavenue CONQUETE)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 233;
-- Update order option level 2 (Option Name : Cartavenue / Personnalisée)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 31;
-- Update order option level 3 (Option Name : Cartavenue / Personnalisée / non-rechargeable)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 32;
-- Update order option level 3 (Option Name : Cartavenue / Personnalisée / rechargeable)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 33;
-- Update order option level 2 (Option Name : Cartavenue / Co-brandée)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 34;
-- Update order option level 3 (Option Name : Cartavenue / Co-brandée / non-rechargeable)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 35;
-- Update order option level 3 (Option Name : Cartavenue / Co-brandée / rechargeable)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 36;
-- Update order option level 2 (Option Name : Cartavenue / Classic)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 37;
-- Update order option level 3 (Option Name : Cartavenue / Classic / non-rechargeable)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 38;
-- Update order option level 3 (Option Name : Cartavenue / Classic / rechargeable)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 39;
-- Update order option level 2 (Option Name : Cartavenue / Conquête)
UPDATE `r_operation_options` SET `r_op_option_order` = '5' WHERE `r_operation_options`.`r_op_option_id` = 106;
-- Update order option level 3 (Option Name : Cartavenue / Conquête / Formule personnalisée)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 107;
-- Update order option level 2 (Option Name : Cartavenue / Cartavenue FIDELISATION)
UPDATE `r_operation_options` SET `r_op_option_order` = '6' WHERE `r_operation_options`.`r_op_option_id` = 234;
-- Update order option level 3 (Option Name : Cartavenue / Cartavenue FIDELISATION / Formule Co-Brandée)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 236;
-- Update order option level 3 (Option Name : Cartavenue / Cartavenue FIDELISATION / Formule Personnalisée)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 237;
-- Update order option level 2 (Option Name : Cartavenue / Cartavenue STIMULATION)
UPDATE `r_operation_options` SET `r_op_option_order` = '7' WHERE `r_operation_options`.`r_op_option_id` = 235;
-- Update order option level 3 (Option Name : Cartavenue / Cartavenue STIMULATION / Formule CLASSIC)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 238;
-- Update order option level 3 (Option Name : Cartavenue / Cartavenue STIMULATION / Formule Co-Brandée)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 239;
-- Update order option level 3 (Option Name : Cartavenue / Cartavenue STIMULATION / Formule Personnalisée)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 240;
-- Update order option level 1 (Option Name : Pack "CRM")
UPDATE `r_operation_options` SET `r_op_option_order` = '8' WHERE `r_operation_options`.`r_op_option_id` = 40;
-- Update order option level 2 (Option Name : Pack "CRM" / Set up envois d'e-mails)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 41;
-- Update order option level 3 (Option Name : Pack "CRM" / Set up envois d'e-mails / automatiques)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 42;
-- Update order option level 3 (Option Name : Pack "CRM" / Set up envois d'e-mails / "cycle de vie")
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 43;
-- Update order option level 2 (Option Name : Pack "CRM" / Location de Fichiers)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 44;
-- Update order option level 3 (Option Name : Pack "CRM" / Location de Fichiers / E-Mail)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 45;
-- Update order option level 3 (Option Name : Pack "CRM" / Location de Fichiers / N° Mobile)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 46;
-- Update order option level 2 (Option Name : Pack "CRM" / Web)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 47;
-- Update order option level 3 (Option Name : Pack "CRM" / Web / Web Analytics)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 48;
-- Update order option level 3 (Option Name : Pack "CRM" / Web / Référencement naturel)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 49;
-- Update order option level 3 (Option Name : Pack "CRM" / Web / Affiliation)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 50;
-- Update order option level 2 (Option Name : Pack "CRM" / Campagnes MD Push)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 51;
-- Update order option level 3 (Option Name : Pack "CRM" / Campagnes MD Push / SMS)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 52;
-- Update order option level 3 (Option Name : Pack "CRM" / Campagnes MD Push / E-Mailing)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 53;
-- Update order option level 3 (Option Name : Pack "CRM" / Campagnes MD Push / Fax-Mailing)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 54;
-- Update order option level 3 (Option Name : Pack "CRM" / Campagnes MD Push / E-Newsletter)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 83;
-- Update order option level 1 (Option Name : Pack "opé internationale")
UPDATE `r_operation_options` SET `r_op_option_order` = '9' WHERE `r_operation_options`.`r_op_option_id` = 55;
-- Update order option level 2 (Option Name : Pack "opé internationale" / Pack international)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 56;
-- Update order option level 1 (Option Name : SOR)
UPDATE `r_operation_options` SET `r_op_option_order` = '10' WHERE `r_operation_options`.`r_op_option_id` = 57;
-- Update order option level 2 (Option Name : SOR / Avec retour produit)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 58;
-- Update order option level 2 (Option Name : SOR / Sans retour produit)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 59;
-- Update order option level 1 (Option Name : Conseil)
UPDATE `r_operation_options` SET `r_op_option_order` = '11' WHERE `r_operation_options`.`r_op_option_id` = 60;
-- Update order option level 2 (Option Name : Conseil / Marketing)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 61;
-- Update order option level 2 (Option Name : Conseil / Fid/Stim)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 62;
-- Update order option level 2 (Option Name : Conseil / Informatique/Web)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 63;
-- Update order option level 2 (Option Name : Conseil / Commercial)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 251;
-- Update order option level 1 (Option Name : Produits)
UPDATE `r_operation_options` SET `r_op_option_order` = '12' WHERE `r_operation_options`.`r_op_option_id` = 253;
-- Update order option level 2 (Option Name : Produits / Net Promo)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 246;
-- Update order option level 2 (Option Name : Produits / PromoAnalytics Premium)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 254;
-- Update order option level 2 (Option Name : Produits / PromoAnalytics Standard)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 255;
-- Update order option level 2 (Option Name : Produits / PromoAnalytics App)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 256;
-- Update order option level 2 (Option Name : Produits / PromoExperience)
UPDATE `r_operation_options` SET `r_op_option_order` = '5' WHERE `r_operation_options`.`r_op_option_id` = 257;
-- Update order option level 2 (Option Name : Produits / Promoplace)
UPDATE `r_operation_options` SET `r_op_option_order` = '6' WHERE `r_operation_options`.`r_op_option_id` = 258;
-- Update order option level 2 (Option Name : Produits / ConsumerView)
UPDATE `r_operation_options` SET `r_op_option_order` = '7' WHERE `r_operation_options`.`r_op_option_id` = 259;
-- Update order option level 1 (Option Name : Saisie)
UPDATE `r_operation_options` SET `r_op_option_order` = '13' WHERE `r_operation_options`.`r_op_option_id` = 261;
-- Update order option level 2 (Option Name : Saisie / Dématérialisation)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 252;
-- Update order option level 1 (Option Name : Réception)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 64;
-- Update order option level 2 (Option Name : Réception / Délais)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 65;
-- Update order option level 3 (Option Name : Réception / Délais / Standard (J+1))
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 66;
-- Update order option level 3 (Option Name : Réception / Délais / Urgent en 24h)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 67;
-- Update order option level 3 (Option Name : Réception / Délais / Flash (dans la ½ journée))
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 68;
-- Update order option level 2 (Option Name : Réception / Type)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 97;
-- Update order option level 3 (Option Name : Réception / Type / Sondage)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 102;
-- Update order option level 3 (Option Name : Réception / Type / A la pesée)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 103;
-- Update order option level 3 (Option Name : Réception / Type / Au BL)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 104;
-- Update order option level 3 (Option Name : Réception / Type / Exhaustif)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 105;
-- Update order option level 1 (Option Name : Préparation)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 69;
-- Update order option level 2 (Option Name : Préparation / Délais)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 70;
-- Update order option level 3 (Option Name : Préparation / Délais / Standard (date intégration + 2 jours))
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 71;
-- Update order option level 3 (Option Name : Préparation / Délais / Urgent (date intégration + 1 jour))
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 72;
-- Update order option level 3 (Option Name : Préparation / Délais / Flash (date intégration avant 12h pr le j même))
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 73;
-- Update order option level 1 (Option Name : Stockage)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 74;
-- Update order option level 2 (Option Name : Stockage / Palette standard)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 75;
-- Update order option level 2 (Option Name : Stockage / Palette sécurisée)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 76;
-- Update order option level 2 (Option Name : Stockage / Casier standard)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 77;
-- Update order option level 2 (Option Name : Stockage / Casier sécurisé)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 78;
-- Update order option level 2 (Option Name : Stockage / Palette hors norme)
UPDATE `r_operation_options` SET `r_op_option_order` = '5' WHERE `r_operation_options`.`r_op_option_id` = 248;
-- Update order option level 2 (Option Name : Stockage / Coffre)
UPDATE `r_operation_options` SET `r_op_option_order` = '6' WHERE `r_operation_options`.`r_op_option_id` = 260;
-- Update order option level 1 (Option Name : Entrepôt envisagé)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 79;
-- Update order option level 2 (Option Name : Entrepôt envisagé / Peynier)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 80;
-- Update order option level 2 (Option Name : Entrepôt envisagé / Rousset)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 81;
-- Update order option level 2 (Option Name : Entrepôt envisagé / Eragny)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 82;
-- Update order option level 2 (Option Name : Entrepôt envisagé / Pas besoin d'entrepôt)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 249;
-- Update order option level 1 (Option Name : Transport)
UPDATE `r_operation_options` SET `r_op_option_order` = '5' WHERE `r_operation_options`.`r_op_option_id` = 171;
-- Update order option level 2 (Option Name : Transport / B TO B)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 172;
-- Update order option level 3 (Option Name : Transport / B TO B / Messagerie)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 176;
-- Update order option level 3 (Option Name : Transport / B TO B / Course)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 177;
-- Update order option level 3 (Option Name : Transport / B TO B / Affrètement)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 178;
-- Update order option level 3 (Option Name : Transport / B TO B / test)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 184;
-- Update order option level 3 (Option Name : Transport / B TO B / test 2)
UPDATE `r_operation_options` SET `r_op_option_order` = '5' WHERE `r_operation_options`.`r_op_option_id` = 232;
-- Update order option level 3 (Option Name : Transport/B TO B/Normal (72h00))
UPDATE `r_operation_options` SET `r_op_option_order` = '6' WHERE `r_operation_options`.`r_op_option_id` = 174;
-- Update order option level 4 (Option Name : Transport / B TO B / Normal (72h00) / Mono Colis)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 185;
-- Update order option level 4 (Option Name : Transport / B TO B / Normal (72h00) / Multi Colis)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 186;
-- Update order option level 4 (Option Name : Transport / B TO B / Normal (72h00) / Messagerie)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 187;
-- Update order option level 4 (Option Name : Transport / B TO B / Normal (72h00) / Course)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 188;
-- Update order option level 4 (Option Name : Transport / B TO B / Normal (72h00) / Affrètement)
UPDATE `r_operation_options` SET `r_op_option_order` = '5' WHERE `r_operation_options`.`r_op_option_id` = 189;
-- Update order option level 3 (Option Name : Transport/B TO B/Express (J+1))
UPDATE `r_operation_options` SET `r_op_option_order` = '7' WHERE `r_operation_options`.`r_op_option_id` = 175;
-- Update order option level 4 (Option Name : Transport / B TO B / Express (J+1) / Mono Colis)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 190;
-- Update order option level 4 (Option Name : Transport / B TO B / Express (J+1) / Multi Colis)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 191;
-- Update order option level 4 (Option Name : Transport / B TO B / Express (J+1) / Messagerie)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 192;
-- Update order option level 4 (Option Name : Transport / B TO B / Express (J+1) / Course)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 198;
-- Update order option level 4 (Option Name : Transport / B TO B / Express (J+1) / Affrètement)
UPDATE `r_operation_options` SET `r_op_option_order` = '5' WHERE `r_operation_options`.`r_op_option_id` = 199;
-- Update order option level 2 (Option Name : Transport / B TO C)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 173;
-- Update order option level 3 (Option Name : Transport / B TO C / Course)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 182;
-- Update order option level 3 (Option Name : Transport / B TO C / Affrètement)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 183;
-- Update order option level 3 (Option Name : Transport/B TO C/Normal (72h00))
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 179;
-- Update order option level 4 (Option Name : Transport / B TO C / Normal (72h00) / Mono Colis)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 193;
-- Update order option level 4 (Option Name : Transport / B TO C / Normal (72h00) / Multi Colis)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 194;
-- Update order option level 4 (Option Name : Transport / B TO C / Normal (72h00) / Messagerie)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 195;
-- Update order option level 4 (Option Name : Transport / B TO C / Normal (72h00) / Course)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 196;
-- Update order option level 4 (Option Name : Transport / B TO C / Normal (72h00) / Affrètement)
UPDATE `r_operation_options` SET `r_op_option_order` = '5' WHERE `r_operation_options`.`r_op_option_id` = 197;
-- Update order option level 3 (Option Name : Transport/B TO C/Express (J+1))
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 180;
-- Update order option level 4 (Option Name : Transport / B TO C / Express (J+1) / Mono Colis)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 200;
-- Update order option level 4 (Option Name : Transport / B TO C / Express (J+1) / Multi Colis)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 201;
-- Update order option level 4 (Option Name : Transport / B TO C / Express (J+1) / Messagerie)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 202;
-- Update order option level 4 (Option Name : Transport / B TO C / Express (J+1) / Course)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 203;
-- Update order option level 4 (Option Name : Transport / B TO C / Express (J+1) / Affrètement)
UPDATE `r_operation_options` SET `r_op_option_order` = '5' WHERE `r_operation_options`.`r_op_option_id` = 204;
-- Update order option level 3 (Option Name : Transport/B TO C/Economique > 72h00)
UPDATE `r_operation_options` SET `r_op_option_order` = '5' WHERE `r_operation_options`.`r_op_option_id` = 181;
-- Update order option level 4 (Option Name : Transport / B TO C / Economique > 72h00 / Mono Colis)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 205;
-- Update order option level 4 (Option Name : Transport / B TO C / Economique > 72h00 / Multi Colis)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 206;
-- Update order option level 4 (Option Name : Transport / B TO C / Economique > 72h00 / Messagerie)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 207;
-- Update order option level 4 (Option Name : Transport / B TO C / Economique > 72h00 / Course)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 208;
-- Update order option level 4 (Option Name : Transport / B TO C / Economique > 72h00 / Affrètement)
UPDATE `r_operation_options` SET `r_op_option_order` = '5' WHERE `r_operation_options`.`r_op_option_id` = 209;
-- Update order option level 2 (Option Name : Transport / International)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 210;
-- Update order option level 3 (Option Name : Transport/International/Normal)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 211;
-- Update order option level 4 (Option Name : Transport / International / Normal / Mono Colis)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 214;
-- Update order option level 4 (Option Name : Transport / International / Normal / Multi Colis)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 215;
-- Update order option level 4 (Option Name : Transport / International / Normal / Messagerie Europe)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 216;
-- Update order option level 4 (Option Name : Transport / International / Normal / Course)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 217;
-- Update order option level 4 (Option Name : Transport / International / Normal / Affrètement)
UPDATE `r_operation_options` SET `r_op_option_order` = '5' WHERE `r_operation_options`.`r_op_option_id` = 218;
-- Update order option level 4 (Option Name : Transport / International / Normal / Messagerie Monde)
UPDATE `r_operation_options` SET `r_op_option_order` = '6' WHERE `r_operation_options`.`r_op_option_id` = 229;
-- Update order option level 3 (Option Name : Transport/International/Express (J+1))
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 212;
-- Update order option level 4 (Option Name : Transport / International / Express (J+1) / Mono Colis)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 219;
-- Update order option level 4 (Option Name : Transport / International / Express (J+1) / Multi Colis)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 220;
-- Update order option level 4 (Option Name : Transport / International / Express (J+1) / Messagerie Europe)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 221;
-- Update order option level 4 (Option Name : Transport / International / Express (J+1) / Course)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 222;
-- Update order option level 4 (Option Name : Transport / International / Express (J+1) / Affrètement)
UPDATE `r_operation_options` SET `r_op_option_order` = '5' WHERE `r_operation_options`.`r_op_option_id` = 223;
-- Update order option level 4 (Option Name : Transport / International / Express (J+1) / Messagerie Monde)
UPDATE `r_operation_options` SET `r_op_option_order` = '6' WHERE `r_operation_options`.`r_op_option_id` = 230;
-- Update order option level 3 (Option Name : Transport/International/Economique > 72h00)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 213;
-- Update order option level 4 (Option Name : Transport / International / Economique > 72h00 / Mono Colis)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 224;
-- Update order option level 4 (Option Name : Transport / International / Economique > 72h00 / Multi Colis)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 225;
-- Update order option level 4 (Option Name : Transport / International / Economique > 72h00 / Messagerie Europe)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 226;
-- Update order option level 4 (Option Name : Transport / International / Economique > 72h00 / Course)
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 227;
-- Update order option level 4 (Option Name : Transport / International / Economique > 72h00 / Affrètement)
UPDATE `r_operation_options` SET `r_op_option_order` = '5' WHERE `r_operation_options`.`r_op_option_id` = 228;
-- Update order option level 4 (Option Name : Transport / International / Economique > 72h00 / Messagerie Monde)
UPDATE `r_operation_options` SET `r_op_option_order` = '6' WHERE `r_operation_options`.`r_op_option_id` = 231;
-- Update order option level 1 (Option Name : WMS - Logiciel de gestion d'entrepôts)
UPDATE `r_operation_options` SET `r_op_option_order` = '6' WHERE `r_operation_options`.`r_op_option_id` = 241;
-- Update order option level 2 (Option Name : WMS - Logiciel de gestion d'entrepôts / GEDELOG)
UPDATE `r_operation_options` SET `r_op_option_order` = '1' WHERE `r_operation_options`.`r_op_option_id` = 242;
-- Update order option level 2 (Option Name : WMS - Logiciel de gestion d'entrepôts / REFLEX)
UPDATE `r_operation_options` SET `r_op_option_order` = '2' WHERE `r_operation_options`.`r_op_option_id` = 243;
-- Update order option level 2 (Option Name : WMS - Logiciel de gestion d'entrepôts / HORS CUSTOM SOLUTIONS)
UPDATE `r_operation_options` SET `r_op_option_order` = '3' WHERE `r_operation_options`.`r_op_option_id` = 244;
-- Update order option level 2 (Option Name : WMS - Logiciel de gestion d'entrepôts / PAS DE WMS (OP SANS LOG))
UPDATE `r_operation_options` SET `r_op_option_order` = '4' WHERE `r_operation_options`.`r_op_option_id` = 247;

-- ********** ---- TICKET #53652 END ---- ************* --

-- *********************** --

-- ********** ---- TICKET #53658 START ---- ************* --

-- Add Acl for operation options addition

INSERT INTO `acl_fonctionnalites`
           (`int_cont_id`
           ,`fonc_name`)
     SELECT `int_cont_id`, 'Ajout d\'une option au devis'
     FROM `acl_interfaces_controllers`
            WHERE interface_name = 'description'
            AND controller_name = 'description'
     ORDER BY (`int_cont_id`) DESC
     LIMIT 0, 1;

INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     SELECT `int_cont_id`, 'addoperationoption', `fonc_id`
            FROM `acl_fonctionnalites`
                WHERE fonc_name = 'Ajout d\'une option au devis'
    ORDER BY (`fonc_id`)
    DESC LIMIT 0, 1;


-- Add Acl for operation options removal

INSERT INTO `acl_fonctionnalites`
           (`int_cont_id`
           ,`fonc_name`)
     SELECT `int_cont_id`, 'Retrait d\'une option du devis'
     FROM `acl_interfaces_controllers`
            WHERE interface_name = 'description'
            AND controller_name = 'description'
     ORDER BY (`int_cont_id`) DESC
     LIMIT 0, 1;

INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     SELECT `int_cont_id`, 'removeoperationoption', `fonc_id`
            FROM `acl_fonctionnalites`
                WHERE fonc_name = 'Retrait d\'une option du devis'
    ORDER BY (`fonc_id`)
    DESC LIMIT 0, 1;
-- ********** ---- TICKET #53658 END ---- ************* --

COMMIT;