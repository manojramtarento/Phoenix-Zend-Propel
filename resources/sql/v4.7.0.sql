-- Change user email adress (#91838)
UPDATE users SET user_mail = REPLACE (user_mail,'customsolutions.fr', 'qwamplify.com')
WHERE user_mail LIKE "%@customsolutions.fr%" 
AND r_user_type_id IS NOT NULL;

update settings set setting_value = 'Qwamplify Activation' where setting_id = 4;

-- update settings set setting_value = 'www.qwamplify-activation.com' where setting_id = 5;
update settings set setting_value = '' where setting_id = 5;

-- RCS : 832 225 122 RCS Aix en Provence
-- Numero TVA : FR41 832 225 122
-- SIRET : 832 225 122 00015
-- APE : 6201Z

update settings set setting_value = 'SAS au capital de 3 088 544 € - RCS (SIRET) : Aix en Provence 832 225 122 (00015) - TVA FR 41 832 225 122 - APE 6201 Z' where setting_id = 9;
--  Numéro de TVA de la société : FR41 832 225 122 -- 
update settings set setting_value = '41 832 225 122' where setting_id = 10;

-- infos financières  de la société : a définir--
-- avec la  raison sociale Qwamplify Activation à changer

 
--  code banque 10096 -- 
update settings set setting_value = '10096' where setting_id = 11;
--  guichet 18565 -- 
update settings set setting_value = '18565' where setting_id = 12;
-- numero compte 00098955102-- 
update settings set setting_value = '00098955102' where setting_id = 13;
update settings set setting_value = '69' where setting_id = 14;
update settings set setting_value = 'CIC MARSEILLE PROVENCE ENTREPRISES' where setting_id = 15;
update settings set setting_value = 'CMCIFRPP' where setting_id = 16;
update settings set setting_value = 'FR76 1009 6185 6500 0989 5510 269' where setting_id = 17;
--  Titulaire du compte -- 
update settings set setting_value = 'Qwamplify Activation' where setting_id = 18;
update settings set setting_value = 'CIC MARSEILLE PROVENCE ENTREPRISES - 448 Avenue du Prado - 13269 MARSEILLE CEDEX 08' where setting_id = 19;


update settings set setting_value = 'Passé ce délai, en application de l’article L.441-6 du Code de commerce, les sommes exigibles pourront être augmentées prorata temporis, jusqu’au complet paiement de ladite facture, de trois fois le taux d’intérêt légal. Pas d’escompte pour paiement anticipé. Conformément aux dispositions des articles L 441-6 et D 441-5 du Code de Commerce, il sera fait application en cas de retard de paiement d\'une somme forfaitaire de 40 € pour frais de recouvrement, nonobstant le règlement des pénalités et autres indemnités dues à Qwamplify Activation en raison dudit retard. En cas de non-paiement dans les délais requis, la société Qwamplify Activation se réserve le droit de suspendre tout ou partie des prestations à réaliser. Exonération de TVA sur les affranchissements en vertu de l’article 267, II-2° du CGI.' where setting_id = 20;
update settings set setting_value = 'Conformément à l\'instruction 3 B-2-99 du 08/11/1999, Bulletin Officiel des Impôts n° 210 du 17/11/1999, les sommes remboursées par un fabricant au titre des bons de réduction ou de remboursement constituent des rabais venant en déduction de sa base d\'imposition à la TVA, dès lors que les opérations auxquelles ces bons se rapportent ont été soumises à la TVA. La base d\'imposition est alors réduite du montant remboursé, sous déduction de la TVA calculée au taux applicable au produit faisant l\'objet du bon. Dès lors, il appartient au client de vérifier les conditions de déduction de ces sommes de la base d’imposition à la TVA. La responsabilité de Qwamplify Activation ne saurait être engagée à ce titre.' where setting_id = 21;

--  attention URL article 13 a changer + num TVA -- 
update settings set setting_value = 'NB : les indications de taux de retours ne sont données qu’à titre estimatif et n’engagent pas la responsabilité de Qwamplify Activation. Les facturations établies par Qwamplify Activation se feront sur la base des remontées réelles enregistrées au cours de la prestation.

Le tarif facturé sera celui en vigueur au moment de la remise en poste, sous réserve d’accord de La Poste, et de validation des poids et des dimensions des objets définitifs.

Qwamplify Activation ne pourra être tenu responsable des conséquences directes ou indirectes des retards, pertes et vols de courriers ou colis traités par La Poste ou le prestataire de transport, pour le courrier reçu et pour les expéditions. Les éventuels nouveaux traitements ou envois devront faire l’objet d’une demande du client de Qwamplify Activation, ces prestations supplémentaires étant facturées en plus, aux conditions du présent devis. Les envois postaux se font aux risques et périls du client.

Au cas où les estimations de remontées du présent devis seraient susceptibles d’augmenter de plus de 30% suite à des modifications par le client dans la mise en place et la diffusion de l’opération, le client s’engage à en informer Qwamplify Activation, au moins un mois avant le début de l’opération. En cas de remontées supérieures de plus de 30% des estimations du présent devis non réajustées, Qwamplify Activation ne pourrait être tenu responsable du non respect du délai de traitement.

Sauf conditions particulières, les courriers sont conservés pendant toute la durée de l’offre et mis en destruction à la fin. Sauf indication contraire dans ce devis, les courriers consommateurs seront traités sous un délai de 6 à 8 semaines. Sous réserve que le consommateur en fasse la demande et accepte que ses données soient utilisées pour l’informer, vous acceptez que des informations sur le traitement de sa demande soient stockées et lui soient communiquées.

CONDITIONS GENERALES DE VENTE DE QWAMPLIFY ACTIVATION
En vigueur au 02 janvier 2018

L’Entreprise QWAMPLIFY ACTIVATION, société anonyme, n° RCS Aix-en-Provence 832 225 122 (00015), située au 135 Avenue Victoire - 13790 ROUSSET - FRANCE (ci-après « l’Entreprise »), a pour activités, dans le cadre d’un contrat de prestations de services (ci-après « le Contrat » ou « le Devis » ou « l’Opération ») conclu avec un client (ci-après « Le Client ») :
• la mise en place ainsi que la gestion d’opérations promotionnelles et publicitaires (courriers, téléphone, sms, Web, médias électroniques, etc.),
• la vente à distance,
• les opérations logistiques de colisage, stockage, routage, livraison et l’expédition de tout objet ou marchandise,
• la gestion et la location de fichiers et de bases de données,
• l’identification et la réponse aux besoins en solutions marketing, CRM et Web,
• la mise à disposition de solutions digitales et de Data Marketing
• l’identification et la réponse aux besoins en exploitation promotionnelle de licences et la vente de licences.

Les présentes conditions générales de vente (ci-après « Conditions Générales » ou « Conditions Générales de Vente » ou « CGV » prévalent sur toutes clauses de tout autre document de quelque nature ou forme que ce soit provenant du Client et notamment des conditions générales d’achat du Client, à moins d’une dérogation expresse et exceptionnelle de la part de l’Entreprise.
En toute hypothèse, la renonciation de l’Entreprise au bénéfice d’une ou plusieurs dispositions des CGV serait sans incidence sur la validité et l’opposabilité des autres clauses lesquelles, de convention expresse, demeurent applicables entre les parties.
Si l’une des dispositions des CGV venait à être considérée comme nulle, elle serait réputée non écrite, mais cette nullité n’affecterait pas les autres dispositions des CGV.
Le fait que l’Entreprise ne se prévale pas à un moment donné, de l’une quelconque des dispositions des CGV, ne peut être interprété comme valant renonciation à s’en prévaloir ultérieurement.

L’Entreprise s’engage à effectuer les prestations de services dont le contenu et les modalités d’exécution sont définis dans les clauses particulières du Devis. Le fait de lui confier l’une de ces Opérations vaut acceptation pleine et entière des présentes Conditions Générales de Vente et notamment des clauses limitatives de responsabilité qui y sont incluses.
En passant commande auprès de l’Entreprise, le Client reconnaît avoir été suffisamment informé et de façon détaillée sur les prestations de services commandées à l’Entreprise et leurs modalités telles que ressortant notamment des présentes Conditions Générales de Vente.

ARTICLE 1 : FORMATION DU CONTRAT

Tout projet de commande du Client donne lieu pour l’Entreprise à la définition d’un budget estimatif aux termes du Devis établi par L’Entreprise sur la base des indications verbales et écrites fournies par le Client. Toute indication erronée, imprécise ou incomplète de la part du Client engage la responsabilité de celui-ci sur toutes les conséquences administratives, financières, matérielles et autres.
Toute modification de la nature ou de l\'étendue du service tel que décrit dans le Devis et les conditions particulières constitue une prestation complémentaire qui doit faire l\'objet d\'un accord spécifique.

Le Contrat est réputé définitivement conclu entre le Client et l’Entreprise par l’acceptation du Devis quel qu’en soit la forme. Cette acceptation doit se faire, soit par l’émission d’un bon de commande mentionnant les références du Devis correspondant, soit par la signature du Devis, dûment retourné à l’Entreprise par tout moyen (fax, courrier, email, remise en main propre), soit par l’acceptation écrite du devis par tout moyen y compris par email. A défaut, tout commencement d’exécution de l’Opération par l’Entreprise conformément au Devis émis, notamment (sans que cette énonciation soit limitative) transmission d’un brief, d’instructions ou de modalités concernant la mise en place de l’Opération par le Client à l’Entreprise, transmission d’un numéro de cedex, N° audiotel, SMS, ou tout versement d’acomptes, livraison de marchandises par le Client, vaut acceptation pleine et entière par le Client du Devis de l’Entreprise et des présentes Conditions Générales de Vente. Sauf indication contraire stipulée dans le Devis, la durée de validité du Devis est de 15 jours.

Toutes modifications ultérieures des conditions de réalisation des prestations de services telles que déterminées dans le Devis initial doivent faire l’objet d’un avenant ou d’un nouveau Devis établi par l’Entreprise et accepté par le Client. A défaut, toute commande écrite de prestations non présentes au Devis initial fera l’objet d’une facturation complémentaire sans que le Client puisse contester l’existence de la commande desdites prestations.
Dans le cadre de la mise en place d’une prestation, toute prestation d’accompagnement opérationnel non incluse dans le Devis initial donnera lieu à une facturation complémentaire sous la forme d’honoraires, frais et débours.

Le Devis est un budget estimatif variable. Aucune responsabilité de L’Entreprise ne saurait être engagée sur une variation en plus ou en moins de ces estimations. Le seul fait de confier la gestion d’une Opération à l’Entreprise engage le Client au paiement de toute prestation réalisée par l’Entreprise pour mener à bien sa mission de gestion de l’Opération que lui a confiée le Client.

ARTICLE 2 : ANNULATION OU REPORT DE COMMANDE DU FAIT DU CLIENT

L’annulation ou le report d’une commande à la demande du Client entraîne obligatoirement le paiement par celui-ci des frais fixes (sans que cette énonciation soit limitative : frais d’ouverture de dossier, adresse postale, réservation nom de domaine, N° audiotel, alias SMS, création de base de données et masque de saisie, paramétrages, support à rédaction des modalités et des règlements, temps passé, etc.) et des avances engagés par l’Entreprise comme initialement prévu dans le Devis.
Il est précisé que dans le cadre de prestations mensuelles, et, même si l’annulation ou le report de commande par le Client intervient en cours de mois, le Client sera tenu de régler l’intégralité de la facture mensuelle, tout mois entamé restant dû.
Le Client devra en outre régler la totalité du prix des prestations prévues au Devis si l’annulation intervient moins de 1 (un) mois avant la date fixée dans le Devis d’ouverture de l’Opération aux consommateurs ou à tout autre participant auxquels l’Opération est adressée.


ARTICLE 3 : PRIX ET MODALITES DE REGLEMENT

Les prix des prestations, honoraires, frais et débours, facturés par l’Entreprise au Client s’entendent Hors Taxes, montant auquel s’ajoute la TVA.

Les conditions de paiement sont les suivantes :

<u><b>Appel de Fonds</b></u> : en fonction de la prestation réalisée, l’Entreprise émet en début d’Opération un Appel de Fonds («Appel de Fonds ») ou une Facture Prévisionnelle représentant de 30% (trente pour cent) à 100% (cent pour cent) du budget fixé dans le Devis initial et destiné principalement à couvrir les frais d’acheminement et de valeur faciale des remboursements consommateurs. Le montant de l’Appel de Fonds est calculé sur la base de l’évaluation du coût total de l’opération estimé dans le Devis. Cet Appel de Fonds est payable au comptant à réception du dit document.
En cours d’Opération, le montant d’Appel de Fonds peut être revu à la hausse en cas de retours consommateurs plus importants que celui estimé initialement par le Client, ce dernier restant le seul responsable de cette estimation et de la prise en charge des retours générés par l’Opération dont il a fixé les modalités.
Une fois l’Opération terminée, le restant de cette somme peut être soit comptabilisé sous forme d’avoir à valoir sur une ou plusieurs autres Opération(s), soit intégralement restitué au Client à la fin de la phase de gestion de l’Opération sur simple demande de sa part et sous réserve que l’ensemble des factures émises à l’égard du Client pour toutes les Opérations confondues ait été intégralement réglé par le Client.
A défaut de règlement, l’Entreprise ne sera pas en mesure de procéder aux remboursements consommateurs.  La responsabilité de l’Entreprise ne saurait alors être engagée pour tout délai de traitement de l’Opération entrainé par le retard de règlement de(s) Appel(s) de Fonds par le Client.
Le Client garantit l’Entreprise et prendra en charge tous les coûts liés à la gestion par l’Entreprise des éventuelles réclamations - non liées à la qualité des prestations réalisées par l’Entreprise -, en ce compris les dépenses dommages-intérêts, indemnisations, amendes, coûts, réclamations, pénalités auxquels l’Entreprise serait condamnée, frais et honoraires d’avocat engagés par l’Entreprise pour assurer la défense de ses intérêts ou autres procédures (sans que cette liste ne soit limitative : DGCCRF, organisme de protection des consommateurs, département de protection des Populations, assignations devant un tribunal, procédure de conciliation…) qui pourraient être portées à son encontre ou à l’encontre de l’Entreprise. Le Client se porte garant de la prise en charge de toute condamnation de l’Entreprise. Le remboursement doit être payé à la demande expresse de l’Entreprise, sans qu’aucune autre formalité ne soit nécessaire

<u><b>Pour les prestations</b></u> : Le Client doit procéder au règlement par chèque ou par virement bancaire 30 (trente) jours nets (date de versement effectif des fonds) à compter de la date d’émission de la facture. Les prix unitaires fixes prévus dans le Devis sont fermes et non révisables - sauf dans les conditions prévues au présent Article ci-dessous - et engagent le Client irrévocablement. Les factures sont établies sur la base des prestations effectivement réalisées. Le Client supportera l’ensemble des frais variables quel que soit le nombre de prestations réalisées. Si le nombre des prestations réalisées se révèle être au-dessus de l’estimation initiale et oblige L’Entreprise à recourir à des moyens supplémentaires pour honorer ces prestations, le Client supportera l’intégralité des frais engendrés. A ce titre, les factures de solde ne pourront être contestées du fait d’un dépassement des montants indiqués au Devis initial ou au bon de commande.
Toute augmentation des frais (sans que cette énonciation soit limitative : postaux & transports, emballages, frais opérateur Telecom,…), indépendante de la volonté de l’Entreprise sera répercutée au Client. La T.V.A est acquittée sur les encaissements. Dans le cadre de prestations logistiques, la Taxe Gazole sera facturée en supplément selon les conditions des transporteurs auxquels l’Entreprise fera appel. Le Coefficient d’Ajustement Pétrole (CAP) sera appliqué par la Poste dans le cadre des prestations d’envois et ce coût sera facturé au Client. Le Coût de Stockage est indexé sur l’Indice INSEE du coût de la construction et révisé annuellement le 1er janvier de chaque année.

Le non-respect de ces conditions par le Client entraînera de plein droit le blocage des prestations (sans que cette énonciation soit limitative : saisie, expéditions, remise aux transporteurs, envois de primes, lettres chèques, exécutions de virement, …), et la suspension des lignes téléphoniques.

Aucun escompte n’est accordé en cas de paiement anticipé.
En cas de défaut ou de retard de paiement, le Client sera tenu de verser à l’Entreprise des pénalités de retard égales à 3 (trois) fois le taux d’intérêt légal, calculées sur le montant des sommes impayées sans mise en demeure préalable ; pénalités à laquelle seront ajoutés l’ensemble des frais exposés par l’Entreprise pour préserver et faire reconnaître ses droits.
Conformément aux dispositions des articles L 441-6 et D 441-5 du Code de Commerce, il sera fait application en cas de retard de paiement d\'une indemnité forfaitaire de 40 € pour frais de recouvrement, sans préjudice des pénalités et autres indemnités dues à l’Entreprise en raison dudit retard.

Sauf accord spécifique dans le cadre du Devis, l’Entreprise sera en droit sans que le Client ne puisse s’y opposer, de majorer chaque année, à la date d’anniversaire du Contrat, le prix des prestations pendant toute la durée du Contrat selon les indices de référence suivants (variation entre le dernier indice publié à la date anniversaire du Contrat et le dernier indice publié à la même date de l’année précédente) :
- Prestations promotionnelles : indice Syntec
Si, pour une raison quelconque, l’indice Syntec de référence n\'était plus publié, l\'indice le remplaçant, ou à défaut l\'indice INSEE mesurant l\'évolution des prix pratiqués par la profession lui serait substitué.
- Prestations logistiques :
*Manutention : Indice INSEE coût de la main d’œuvre
*Stockage : Indice INSEE coût de la construction
*Transport : Indice CNR transport routier marchandise longue distance
*Tarifs postaux : Barème postal (envois par poste y compris prestation d’affranchissement et d’acheminement sur le centre de tri)
Toute augmentation des frais (postaux & transports, emballages, frais opérateur Telecom,…), indépendante de la volonté de l’Entreprise sera répercutée au Client.

ARTICLE 4 : MODALITES D’EXECUTION

Les prestations fournies par l’Entreprise sont destinées exclusivement au Client.

Toute demande de traitement d’une durée spécifique fera l’objet de modalités particulières précisées dans le Devis.

L’Entreprise conserve la faculté de sous-traiter sous sa responsabilité l’exécution totale ou partielle des Opérations qui lui sont confiées. L’Entreprise ne peut pas être tenue responsable de la mauvaise qualité du réseau téléphonique de l’interruption des centraux, de l’encombrement affectant provisoirement ou durablement les lignes téléphoniques, des difficultés d’acheminement du courrier par voie postale et plus généralement, en cas de force majeure empêchant le bon déroulement de l’Opération à la date prévue dans le Devis accepté par le Client.
Dans la mesure où la quantité de prestations est liée au niveau de participation par les consommateurs aux Opérations, niveau qui est aléatoire, les délais d’exécution et de livraison des prestations indiqués dans le Devis et/ou lors de l\'enregistrement de la commande et notamment les délais de remboursement des participants aux Opérations, n\'est donné qu\'à titre indicatif et n\'est aucunement garanti. La responsabilité de l’Entreprise ne saurait être engagée à ce titre.
Les délais indiqués au Devis seront automatiquement révisés si, du fait du Client:
- des modifications ou des compléments sont apportés au projet,
- le travail ne peut commencer à la date prévue pour des raisons non imputables à l’Entreprise,
- l’Entreprise ne peut exécuter les prestations pour des raisons indépendantes de sa volonté
- les volumes réels de participations des consommateurs aux Opérations dépassent les volumes de participation préalablement estimés sur la base des informations communiquées par le Client,
- tout retard du fait du Client par suite d’informations inexactes ou incomplètes communiquées à l’Entreprise, un manque de collaboration, une insuffisance dans l’organisation, un environnement informatique déficient par rapport aux spécifications convenues, un retard dans l’approbation des documents, le report de réunions, un retard de validations ou remises d’informations, et plus généralement du fait de toute inexécution par le Client d’une clause contractuelle des présentes CGV ou du Devis.
La survenue d’un ou plusieurs de ces éléments libérera l’Entreprise de tout engagement sur les délais d’exécution des prestations, sans préjudice de tous dommages et intérêts que l’Entreprise serait en droit de réclamer.
Par voie de conséquence, tout retard dans l’exécution des prestations, dans la livraison des produits ou des services dans les circonstances décrites ci-dessus, ne pourra pas donner lieu au profit du Client à l\'allocation de dommages et intérêts et/ou à l’annulation de la commande.
L’Entreprise ne sera aucunement responsable d’une livraison tardive pour des raisons qui ne lui seraient pas imputables et proviendraient du fait notamment du transporteur ou de la Poste. Le Client, qui a été informé du mode de transport et de ses aléas conservera à sa charge les conséquences financières de tout retard éventuel. Le Client restera seul responsable de toutes conséquences liées :
• à des marchandises, objets ou éléments prévus par l’Opération, livrés non-conformes à la spécification de l’Opération et à la règlementation en vigueur ou affectés d’un vice caché,
• au règlement tardif ou au non-paiement par le Client des sommes dues pour les besoins de chaque Opération dans les conditions prévues dans le Devis.

ARTICLE 5 : RESPONSABILITES A LA CHARGE DU CLIENT

L’Entreprise ne maîtrise pas les paramètres des campagnes promotionnelles gérées pour le Client qui en est l’organisateur et le seul responsable. Par conséquent, l’Entreprise n’est en aucun cas responsable du niveau de succès des Opérations que le Client organise ou des défauts de conception des Opérations qui lui sont confiées telles qu’illustrés à titre d’exemple ci-dessous, sans que cette énonciation soit limitative :
Faible ou forte participation à l’Opération ou à l’action publicitaire organisée par le Client, des consommateurs ou de tout autre participant concerné, erreur dans les modalités rendant l’Opération promotionnelle ruineuse ou impraticable comme par exemple du fait de l’absence de conditions limitant l’ampleur des remontées de l’Opération (dates limite de participation, manque d’éléments permettant de sécuriser les retours consommateurs, volume de vente, volumes porteurs, valeur des produits, PVC des produits, plan médias, quantité de publicité ou de produits diffusés sans contrôle, etc.) etc. L’Entreprise précise que le Client est seul responsable des conditions d’accès à l’Opération par les consommateurs ou tout autre participant concerné auxquelles l’offre est adressée et du contenu des modalités des Opérations.

Le Client garantit que les Opérations dont il est l’organisateur et dont il confie la mise en œuvre à l’Entreprise et notamment, les modalités et règlements des Opérations, sont conformes aux prescriptions légales et règlementaires en vigueur et à venir, en ce qui concerne la publicité, les ventes promotionnelles, les ventes par correspondance ou à distance, de manière à ce que la responsabilité de l’Entreprise ne soit jamais engagée.

Il appartient au Client de faire valider juridiquement les Opérations qu’il développe et dont il confie la gestion à l’Entreprise.
L’Entreprise n’a pas la qualité d’avocat et ne peut donc donner de conseils juridiques au Client ou l’assister juridiquement.
Le Client doit garantir que l’Opération qu’il confie à l’Entreprise ne requiert pas d’autorisation légale ou réglementaire particulière, notamment par rapport à son domaine d’activité.
Le Client garantit à l’Entreprise que les éléments remis à cette dernière pour l’exécution des prestations n’enfreignent aucun droit d’auteur, brevet, dessin ou modèle, secret de fabrication ou tout autre droit de propriété intellectuelle et, de manière générale, ne porte atteinte à aucun droit que des tiers pourraient détenir sur lesdits éléments.

Le Client garantira l’Entreprise et la relèvera indemne de toute condamnation qui serait prononcée à son encontre au profit d’un tiers du fait de la violation de l’un des droits sus-énoncés ainsi que des débours et des frais exposés pour assurer sa défense y compris les honoraires d’avocats.

Afin de faciliter la réalisation des prestations par l’Entreprise, le Client s’engage :
- à définir ses besoins et collaborer avec l’Entreprise sur l’ensemble de ses demandes relatives à l’exécution du contrat ;
- à répondre dans les meilleurs délais à toute demande d\'information ou de validation de l’Entreprise d\'une façon suffisamment documentée et complète pour être exploitée par ce dernier ;
- à désigner auprès de l’Entreprise l’un des membres de son personnel qui sera son interlocuteur privilégié et dûment habilité à engager Le Client.

Dans le cadre d’une prestation incluant le développement d’un site Internet, d’une application SMS ou Audiotel, l’Entreprise ne saurait être tenue de garantir la fiabilité des applications décrites ci-dessus si le rétro-planning n’a pas été respecté par le Client.

L’Entreprise ne sera nullement tenue responsable des conséquences financières découlant d’une fraude commise par les consommateurs qu’elle ne pouvait raisonnablement pas détecter lors du traitement de l’Opération, ou que le Client ne lui a pas permis de détecter (exemple : non remise des originaux de codes-barres avant le démarrage de l’Opération).
Sauf avis contraire de la part du Client formulé par écrit, celui-ci sera présumé avoir autorisé l’Entreprise à faire état auprès des tiers de ce qu’elle intervient en tant que son fournisseur de prestations de services.

L’Entreprise est autorisée à mentionner la présence du Client parmi ses clients sur ses documents de présentation (Plaquettes, site Internet, plateformes de recueil d’avis consommateurs présentation commerciale, etc.), et à utiliser à titre d’exemples les documents délivrés aux consommateurs (PLV, affiches, leaflets, stickers,…) tombés dans le domaine public.

Les engagements de l’Entreprise sur les délais de réalisation des prestations qui lui sont confiées sont conditionnés par le respect du Client des délais de communication d’information, de validation, et de livraison de marchandises nécessaires à la bonne exécution de ces prestations. L’Entreprise ne saurait être tenue responsable des retards survenus dans l’exécution de ses prestations du fait du Client.
Le cas échéant, l’Entreprise peut être amenée à modifier le calendrier de réalisation des prestations et à facturer au Client des prestations complémentaires ou majorées afin de couvrir les surcoûts occasionnés par le Client, y compris dans le cas de réception de marchandises hors normes.
En cas de retard du Client sur les éléments à fournir nécessaires à la bonne réalisation de la prestation dans les délais définis dans le Devis, l’Entreprise appliquera une facturation complémentaire de traitement en urgence au tarif horaire en vigueur.

L’Entreprise n’est en aucun cas responsable de la qualité et du mauvais fonctionnement des marchandises livrées aux consommateurs.

L’Entreprise est tenue vis-à-vis de son Client à une obligation de moyens et non de résultat notamment relativement au succès commercial de l’Opération et aux délais de traitement.
L’Entreprise ne pourra pas notamment être tenue responsable du niveau d’impact de l’Opération ou de l’action publicitaire organisée par le Client, que ce niveau d’impact soit jugé faible ou fort par le Client.
De même s’agissant des services informatiques et internet pouvant entrer dans le cadre des Prestations fournies par l’Entreprise, eu égard à la technicité des technologies mises en œuvre, en l’état actuel de la technique, il n’est pas possible pour l’Entreprise de garantir qu’un environnement d’exploitation, logiciel, progiciel, ou produit multimédia fonctionne sans discontinuité, ni bogue (« bug ») informatique. La responsabilité de l’Entreprise ne pourra donc pas être engagée à ce titre.
L’Entreprise ne peut garantir que les services informatiques qu’elle fournit soient à 100% dénués de bugs ou ne présentent aucun dysfonctionnement, ainsi elle ne saurait être tenue pour responsable de tout dommage survenant du fait de tout dysfonctionnement et/ou bug.
L’Entreprise ne saurait également être tenue pour responsable en cas d\'inaccessibilité aux réseaux Internet et Mobile due à des dysfonctionnements techniques.
L’Entreprise ne peut être tenue pour responsable de problèmes de transmission de données, de connexion ou d’indisponibilité de réseau, ni de vitesse d’accès ou d’éventuel non fonctionnement des réseaux Internet et Mobile.

Procédure de recette: dans le cadre de prestations informatiques, la recette sera automatiquement prononcée par défaut si le Client ne formule pas d\'observation motivée dans un délai de cinq (5) jours ouvrés à compter de l’ouverture par L’entreprise de l’accès au service au Client.
En cas d\'observation, l’Entreprise devra effectuer les modifications si elles sont justifiées au regard de la description de la prestation telle que préalablement définie.
La recette sera également réputée prononcée le dixième jour ouvré consécutif à l\'un des faits suivants :
- non utilisation du service livré imputable au Client,
- mise en exploitation du service par le Client.

L’Entreprise ne pourra être tenu responsable des conséquences des choix techniques et de gestion définis et conduits par le Client.
Plus particulièrement, l’Entreprise ne saurait être tenue responsable à l’égard de quiconque, en cas de faute du Client, de non-respect par ce dernier des modalités des Opérations ou de la législation en vigueur, notamment au regard du droit de la consommation et du droit de la concurrence.
Le Client en tant que directeur de la publication, assurera la pleine responsabilité du contenu diffusé sur les supports et sites internet, des Opérations ainsi que du contenu des publicités et promotions qu’il diffusera sur lesdits supports et sites internet. Le Client est seul responsable des données, informations et messages fournis par lui pour diffusion par l’Entreprise, au regard des lois et règlements en vigueur, l’Entreprise n’opérant aucun contrôle de nature technique ou légale sur le contenu des informations et les données qui lui sont confiées.
De manière générale, le Client garantit l’Entreprise de tout recours de tiers portant sur le contenu transitant à travers les services informatiques et internet fournis par l’Entreprise et ce, sous quelque législation que ce soit.
En cas de manquement du Client à ses obligations contractuelles susceptible de porter atteinte à l’image et la réputation de l’Entreprise, y compris en cas de non-paiement des sommes nécessaires pour honorer les remboursements consommateurs, l’Entreprise pourra le cas échéant cesser de réaliser les prestations et engager toute action en justice en vue d’obtenir l’indemnisation de son préjudice.
En cas de  réclamations de consommateurs découlant de l’exécution de l’offre promotionnelle déployée par le Client et non liée à la qualité des prestations de l’Entreprise dans la mise en œuvre de l’Opération, le Client se verra appliquer de façon automatique tous les frais et débours qui en découlent ainsi qu’une indemnité forfaitaire de 750 € HT au titre du temps consacré à la gestion de la réclamation. Au surplus, le Client garantira l’Entreprise et la relèvera indemne de toute condamnation qui serait prononcée à son encontre au profit de consommateurs du fait de défaillances dans l’Opération non imputables à l’Entreprise ainsi que des débours et des frais exposés pour assurer sa défense y compris les honoraires d’avocats.
La recherche d’un dossier archivé à la demande du Client sera facturée par l’Entreprise au prix forfaitaire de 15€ HT par dossier.

ARTICLE 6 : PROPRIETE INTELLECTUELLE ET ARTISTIQUE

Les études, plans, méthodes, savoir-faire et documents de toute nature remis ou adressés par L’Entreprise au Client dans le cadre de l’exécution du contrat restent la propriété de l’Entreprise et demeurent strictement confidentiels. En conséquence, le Client s’engage à respecter, et à faire respecter par son personnel, par ses collaborateurs, société mère, filiales et sous-traitants éventuels la confidentialité des documents en question et de toutes les informations concernant L’Entreprise ainsi que les développement réalisés par cette dernière ans le cadre de sa relation commerciale avec le Client, dont il aurait pu avoir connaissance dans le cadre des relations commerciales.

L’Entreprise est et reste l’unique propriétaire des créations, développements et des outils qu’elle aura mis en place ou utilisé dans le cadre de la gestion des Opérations et de manière générale de tout développement, plateforme, solutions développée et que l’Entreprise aura permis au Client d’utiliser pendant une période donnée.  A la fin de la période d’utilisation, le Client perdra tout droit d’utilisation ou d’accès auxdits développements ou solutions.
Le Client n’acquiert pas la propriété des développements ou inventions nés ou mis au point à l’occasion de l’exécution des prestations, ni celle des méthodes et des savoir-faire. L’Entreprise se réserve le droit d’utiliser les enseignements qu’elle aura tirés de l’exécution du contrat ou de réaliser des prestations similaires pour tout tiers de son choix.
En conséquence, le Client s\'interdit de copier ou reproduire, en tout ou partie des éléments afférents à toute création, ou développements (et la documentation associée), par n\'importe quel moyen et sous n\'importe quelle forme ou support ; de les traduire ou de les transcrire dans tout autre langage ou de les adapter.
Le Client n\'acquiert de façon générale aucun droit quel qu\'il soit sur les produits et services développés par l’Entreprise.

Dans le cadre d’Opérations incluant la création d’un site Internet, il appartient au Client d’effectuer les vérifications concernant la disponibilité technique et juridique du/des noms de domaine qu’il souhaite utiliser pour la mise en ligne et l’utilisation du site Internet, d’engager les formalités nécessaires à l’enregistrement de ces noms de domaine ; de remettre l’échéancier du renouvellement du/des noms de domaines à l’Entreprise afin que cette dernière puisse assurer l’exploitation du site Internet conformément aux droits d’enregistrement acquittés par le Client et sans violation des droits des tiers sur le ou les noms de domaine. L’Entreprise peut être amenée à effectuer pour le compte du Client le dépôt d’un nom de domaine auprès de l’organisme compétent (INTERNIC, AFNIC etc.). Le Client reste cependant seul responsable du choix de son propre nom de domaine, des vérifications sur sa disponibilité, sur son droit à dépôt et de toutes conséquences vis-à-vis des tiers.
Le Client s’engage à s’assurer que le choix du nom de domaine ou de la marque retenu pour une Opération donnée, ne porte pas atteinte aux droits de la propriété intellectuelle des tiers.

Le Client garantira l’Entreprise contre toutes les conséquences financières y compris toute condamnation, les frais de justice et les honoraires d’Avocat découlant de toute action judiciaire engagée par les tiers à la suite du non-respect desdites prescriptions légales et réglementaires ou de l’atteinte à tout droit de propriété intellectuelle.

Tout projet, création, maquette, site internet, plateforme etc… établi par l’Entreprise, demeure sa propriété exclusive et ne peut en aucun cas être reproduit ou utilisé sans son accord explicite écrit et préalable.
Dans le cas de travaux impliquant sous quelque forme que ce soit une activité créative,  au sens de la législation sur la propriété littéraire, artistique, intellectuelle, ou industrielle, l’ensemble des droits d’auteur découlant de cette création, y compris le droit de reproduction et de modification, restent la propriété exclusive de l’Entreprise et ne pourront être transférés au Client qu’après la signature d’une convention spécifique mentionnant le prix et les modalités de la cession partielle ou totale de ces droits.
L’acceptation par le Client du Devis émis par l’Entreprise pour une Opération donnée n’entraînera pas la cession au profit du Client des droits de propriété intellectuelle sur les créations réalisées par l’Entreprise pour les besoins de ladite Opération sauf si le Devis le prévoyait expressément.
En tout état de cause, toute cession ou licence éventuelle d’un droit de propriété intellectuelle conclue entre l’Entreprise et le Client ne prendra effet qu’après le complet règlement par le Client de la totalité du prix de cession convenu.

ARTICLE 7 : RESPONSABILITES SUR LES OBJETS ET MARCHANDISES

Avant livraison, le Client est tenu de déclarer à l’Entreprise les objets de valeur, de nature dangereuse ou assujettis à une réglementation particulière (Alcool, alimentation, etc.). L’Entreprise n\'est pas responsable du contenu des colis non préparés par son personnel, ou des écarts de stock dans la limite de 5% (cinq pour cent) du stock total reçu après agrégation des écarts positifs et négatifs. Sauf dispositions contraires demandées par le Client et donc spécifiées dans le Devis, lors de la réception de marchandises, l’Entreprise prend uniquement en compte les quantités telles qu’annoncées sur le bon de livraison, en assurant un comptage du nombre de palettes ou colis reçus, sans déballage.

le Client s’engage à couvrir auprès d’une compagnie d’assurance notoirement solvable les marchandises dont il a confiées le stockage à L’Entreprise contre les risques de vol, d’incendie, d’explosion, foudre, catastrophes naturelles ou tout autre événement qui attendraient les marchandises.
Le Client renonce à tout recours qu’il serait en droit d’exercer à l’encontre de L’Entreprise et s’engage à faire renoncer ses assureurs à ce recours.
Le Client pourra se voir proposer dans le Devis de souscrire une assurance pour le vol ou tout autre évènement pouvant intervenir sur les produits (garantie sous réserve des clauses et conditions d’assurance). En cas de refus de souscription, aucune indemnité ne sera versée au Client en cas de perte ou vols de produits.
Le transport des marchandises est soumis au droit du transport en vigueur.
L’Entreprise n’ayant pas la qualité de courtier, la souscription d’une police d’assurance pour les besoins d’une Opération sera de sa seule responsabilité.
Aussi, en cas de sinistre, que celui-ci fasse l’objet d’une prise en charge ou d’un refus de prise en charge en vertu de la police d’assurance souscrite pour les besoins de son activité, la responsabilité de l’Entreprise ne saurait être engagée à quelque titre que ce soit.

ARTICLE 8 : RESPONSABILITES : PRESTATIONS REALISEES PAR L\'ENTREPRISE

L’Entreprise ne saurait être tenue pour responsable en raison de tout manque à gagner, dommage direct ou indirect, spécial ou accessoire découlant de l’utilisation ou en rapport avec les prestations qui serait opposé par le Client ou une tierce partie.
Dans tous les cas où la responsabilité de l\'Entreprise serait engagée, pour quelque cause et à quelque titre que ce soit, elle est strictement limitée à la réparation du dommage matériel ou immatériel direct dûment prouvé, sans pouvoir excéder le montant de la commande passée par le Client et dans tous les cas, sans que ce montant ne puisse excéder la somme de 50.000 € TTC (cinquante mille euros toutes taxes comprises) par Opération.
Le Client ne peut prétendre en aucun cas à une indemnité en réparation d’un préjudice indirect découlant de la réalisation ou de la gestion des opérations confiées à l’Entreprise telle que, par exemple et sans que cette liste soit limitative, l’atteinte à l’image, la perte d’exploitation ou tous préjudices commerciaux.
Toute réclamation devra être présentée par le Client à l’Entreprise par courrier recommandé avec Accusé de Réception dans un délai maximum de 7 jours  à compter de la découverte de l’évènement la provoquant et dans la limite maximum de la date de fin de gestion de l’Opération. Faute d\'avoir respecté ce délai, le Client perdra tout recours contre l’Entreprise.

ARTICLE 9 : DONNEES COLLECTEES & ARCHIVAGE

Le Client s’engage à faire sous sa responsabilité toute déclaration relative au traitement automatisé d\'informations nominatives prévue par la réglementation en vigueur, notamment auprès de la CNIL. Le Client qui sera seul responsable du contenu des informations collectées dans le cadre de la gestion de son Opération conformément à la loi du 78-17 du 6 janvier 1978, autorise expressément l’Entreprise à procéder au traitement automatisé des données nominatives le concernant et à les transmettre à des tiers en France et à l’étranger pour les besoins de la fourniture des prestations, objet du contrat conclu entre l’Entreprise et le Client.

Sauf disposition contraire, les archives papier (notamment les courriers consommateurs reçus) sont conservées jusqu’au dernier jour de la phase de gestion de chaque Opération indiquée dans le Devis. Au-delà et sauf indication contraire du Client formulée par écrit, elles pourront être mises en destruction aux frais du Client.

Les fichiers des données traitées dans le cadre de l\'Opération sont disponibles sous 3 (trois) mois après la fin de l\'Opération sur simple demande écrite par le Client.
Sous réserve que les consommateurs ou tout titulaire des données les concernant en fassent la demande, le Client accepte que des informations sur le traitement de la participation des consommateurs ou de tout titulaire de données à une offre promotionnelle gérée par l’Entreprise soient stockées et leur soient communiquées.

Sauf dispositions contraires écrites, le Client autorise l’Entreprise à conserver, exploiter dans le cadre de ses activités sans limitation de durée et pour son propre compte ou dans le cadre de la réalisation de panels, les coordonnées des consommateurs et les données collectées notamment via ses plateformes propriétaires pendant toute la durée des prestations réalisées pour le Client, cette exploitation se faisant dans le cadre de son activité et dans le respect de la législation en vigueur sur le stockage et l’utilisation des données personnelles.
En confiant une Opération à l’Entreprise, le Client accepte notamment que l’Entreprise procède à des enquêtes de satisfaction auprès des consommateurs portant sur la prestation de service fournie par l’Entreprise dans le cadre de l’Opération à laquelle les consommateurs ont participé. Le Client accepte ainsi que le nom de l’Opération et la marque du produit concerné par l’Opération à laquelle les consommateurs ont participé puissent être cités et publiés sur tout support de communication appartenant à l’Entreprise (sans que cette liste soit limitative plaquette, plateforme web, site internet…).
La responsabilité de l’Entreprise ne saurait être engagée dans le cas où Le Client ne respecterait pas l’ensemble des prescriptions légales et réglementaires en vigueur relatives à l’informatique aux fichiers et aux libertés n°78-17 du 6 janvier 1978 ou à toute autre loi similaire applicable dans le territoire du Client.

ARTICLE 10 : INFORMATION

Le Client s’engage à informer l’Entreprise de toute modification dans sa situation tant au regard de son adresse que de ses coordonnées bancaires ainsi que d’évènements affectant de manière substantielle sa situation financière ou sa structure (modification du capital ou de l’actionnariat etc...).

ARTICLE 11 : CLAUSE RESOLUTOIRE

En cas d’inexécution, par le Client de ses obligations et en particulier, en cas de non-paiement du prix dans les délais convenus ou prévus par les présentes, et un mois après une mise en demeure adressée à ce dernier par lettre recommandée avec accusé de réception restée sans effet, le Contrat sera résolu de plein droit aux torts exclusifs du Client sur simple notification de l’Entreprise. Dans ce cas, les sommes versées à l’Entreprise lui demeureront acquises sans préjudice des dommages et intérêts et des frais de justice incluant les honoraires d’Avocat dont elle se réserve le droit de demander le règlement dans le cadre d’une action judiciaire.


ARTICLE 12 : TRANSFERT DU CONTRAT

Aucune modification de la situation juridique de l’Entreprise, telle que notamment transformation, changement de forme de société, fusion avec d\'autres personnes morales, absorption, cession de tout ou partie de l’Entreprise et/ou de tout ou partie des droits objets des présentes, à un tiers ne pourra mettre fin au présent contrat, lequel se poursuivra.

Ainsi, en cas notamment d’opérations de restructurations de l’Entreprise, l’Entreprise est autorisée à transférer, sous sa responsabilité, le Contrat conclu avec le Client à toute filiale du groupe auquel appartient l’Entreprise au sens des dispositions de l’article L233-3 du Code de commerce. 


ARTICLE 13 : MODIFICATION DES CONDITIONS GENERALES

Les Présentes Conditions Générales sont susceptibles de modification à tout moment par l’Entreprise. La version modifiée des dites Conditions Générales de Vente entrera en vigueur 1 (un) mois après que le Client ait été informé de la mise en ligne de ces nouvelles CGV sur le site Internet de l’Entreprise http://www.qwamplify-activation.com/mentions-legales.
A défaut de contestation de sa part dans ce délai, la version modifiée des CGV sera considérée comme acceptée. Dans le cas où le Client n’aurait pas été informé de la mise en ligne de la nouvelle version des CGV ou dans le cas où le Client en contesterait les termes dans le cadre d’une Opération en cours, les présentes conditions resteront en vigueur jusqu’au terme de l’Opération en cours et la nouvelle version des CGV s’appliquera automatiquement à toute Opération suivante.

ARTICLE 14 : ATTRIBUTION DE COMPETENCE - DROIT APPLICABLE

La loi française en vigueur au jour de la conclusion du Contrat est la seule loi applicable aux relations contractuelles établies entre l’Entreprise et son Client, et ce, quelle que soit la nationalité de ce dernier, le lieu de son siège social, le lieu de réalisation des prestations de service ou celui de conclusion du Contrat.
Tout litige découlant tant de la conclusion, de l’interprétation, de la validité que de l’exécution du Contrat conclu par l’Entreprise et le Client et des présentes Conditions Générales relèvera de la compétence du Tribunal de Commerce d’Aix en Provence (Bouches du Rhône - France).


Version mise à jour le 02 janvier 2018.' where setting_id = 22;

-- a définir-- 
update settings set setting_value = 'http://www.qwamplify-activation.com/mentions-legales' where setting_id = 23;
update settings set setting_value = '43102' where setting_id = 24;


-- a définir-- 
update settings set setting_value = 'phoenix@qwamplify.net' where setting_id = 28;
update settings set setting_value = 'contact-us@qwamplify.com' where setting_id = 29;
update settings set setting_value = 'gp.daf@qwamplify.net' where setting_id = 30;
update settings set setting_value = 'gp.logistique@qwamplify.net' where setting_id = 31;
update settings set setting_value = 'facturation@qwamplify.net' where setting_id = 32;
update settings set setting_value = 'facturation.soldes@qwamplify.net' where setting_id = 35;

update i18n set field_value = 'Ltd Company with a capital of 3 088 544 € - RCS ( SIRET): Aix en Provence 832 225 122 (00015) - VAT FR 41 832 225 122  - APE 6201 Z' where i18n_id = 84;
update i18n set field_value = 'After this period, in accordance with article L.441-6 of the Commercial Code, the amount payable may be increased pro rata, until full payment of the invoice, three times the legal interest rate.
 No discount for anticipated payment.
 Further to the provisions of Articles L 441-6 and D 441-5 of the Commercial Code, a lump-sum amount of 40 EUR shall be payable as recovery costs, notwithstanding the payment of penalties or any further awards due to Qwamplify Activation owing to said delay.
 In case of non-payment within the required time, the company Qwamplify Activation reserves the right to suspend all or part of the services to be performed.
 Exemption from VAT on postage under Article 267, II-2 of the CGI.' where i18n_id = 88;

 update i18n set field_value = 'According to the instruction 3 B-2-99 of 08/11/1999, Official Tax Bulletin No. 210 of 17/11/1999, the amounts refunded by a manufacturer via coupons or discount refunds constitute discounts coming in deduction of its tax base to the VAT, when the campaigns to which these vouchers relate were subjected to the VAT. The tax base is then reduced by the refunded amount, under deduction of the VAT calculated at the rate applicable to the product being the object of the voucher.
The client shall therefore be in charge to check the conditions for deducting these amounts from the VAT tax base and Qwamplify Activation shall not be liable in this respect.' where i18n_id = 89;

update i18n set field_value = 'NB : indications of rates of returns are given as an estimate and do not engage the responsibility of Qwamplify Activation. The invoices established by Qwamplify Activation will be made on the basis of the real consumers returns recorded during the performance.

The rate charged will be those in force at the time of postage, subject to agreement of the Post Office, and the final validation of objects weight and dimensions.

Qwamplify Activation can not be held responsible for any direct or indirect consequences of delays, loss or theft of mail or parcels handled by the post office or transport provider, for incoming mail and shipments. Any possible new treatment or consignments must be a request from the client of Qwamplify Activation, these additional services being moreover charged following the conditions of the present quotation. Postal dispatches are at the risk of the client.

In case the estimation of the rate of returns in this quote would be likely to increase by more than 30% due to modifications by the client in the implementation and communication on the campaing, the client agrees to inform Qwamplify Activation at least one month before the beginning of the campaign. In case the consumers returns are higher by more than 30% of the not adjusted quote estimations, Qwamplify Activation can not be held responsible for the non-compliance of the processing time.
Unless otherwise specified, the letters are preserved for the duration of the campaign and destructed at its end. Unless otherwise specified in the quote, the consumers mails will be treated within a period of 6 to 8 weeks. Provided that the consumer requests it and agrees that its data is used for him to be informed, you agree that information about the processing of his application to be stored and communicated to him.

QWAMPLIFY ACTIVATION
GENERAL TERMS AND CONDITIONS OF SALE
Version : 02 January 2018

QWAMPLIFY ACTIVATION, a public limited company listed as n° 832 225 122 (00015) in the Aix-en-Provence Company Registry, and located at 135 Avenue Victoire – 13790 ROUSSET - FRANCE (hereinafter referred to as « the Company »), whose activities under the terms of a service provision contract (hereafter referred to as « the Contract », « the Quote » or « the Operation » entered into with a customer (hereafter referred to as « the Customer ») consist in:
• the implementation and the management of promotion and advertising operations (via post, telephone, SMS, web, electronic media, etc.);
• distance selling;
• logistical operations such as packing, storage, routing, delivery and shipping of any item or merchandise;
• files and data bases management and leasing;
• identifying and meeting requirements in terms of marketing solutions, CRM and web solutions;
• supplying digital and Data Marketing solutions;
• identifying and meeting requirements in terms of using licenses for promotional purposes and selling licenses.
The present terms and conditions (hereafter referred to as « the General Conditions » or « the General Terms and Conditions of Sale » or « the CGV ») shall take precedence over any other provisions stipulated in any document of any type or form whatsoever issued by the Customer, and in particular the general sales conditions from the Customer, unless the express and specific derogation from the Company.
In any case, should the Company chose to waive its rights resulting from one or any provisions of the CGV, this will not affect the validity or enforceability of any other provisions which by an express agreement, shall remain applicable between the parties.
Should one of the provisions of the CGV be deemed as null, such provision would be considered as unwritten, and such nullity shall have no effect on any other provisions of the CGV.
The simple fact that the Company decides not take advantage at any time of any provision of the CGV shall not be interpreted as a waiver of such provision in the future.
The Company hereby undertakes to provide the services, the description and implementing rules of which are stipulated in the specific clauses of the Quote. The simple fact of ordering one of such Operations shall be deemed as giving legal and full agreement on the present general terms and conditions, and in particular on the liability clauses included therein.
By way of placing an order with the Company, the Customer implicitly acknowledges that he has received sufficient, detailed information on the provision of services ordered to the Company and the relevant implement rules as detailed in the present General Terms and Conditions.

ARTICLE 1: FORMATION OF CONTRACT

The Company shall reply to any order inquiry from the Customer by setting an estimated budget in keeping with the terms of a Quote drawn up by the Company and based on the verbal and written guidelines provided by the Customer. The Customer shall be liable for any incorrect, unclear or incomplete data and will be held responsible for any arising administrative, financial, material or other consequences.
Any change to the nature or the extent of such services as described in the Quote and the specific conditions shall be deemed as constituting an additional service for which a specific agreement shall be required.
The Contract shall be deemed to have been definitely concluded between the Customer and the Company once the Quote drawn up in any form whatsoever has been agreed. Such agreement shall be made either by issuing a purchase order featuring the relevant Quote reference or by signing the Quote and returning it by any means to the Company (fax, post or email, hand-delivery), or by a written agreement on such Quote in any form, including by email. Failing this, any start in the implementation of the Operation from the Company according to the Quote issued, in particular (but not limited to) the transmission of a brief, instructions or methods relating to the implementation of the Operation from the Customer to the Company, the communication of a cedex number, an Audiotel number, a SMS or any payment of a deposit, the delivery of goods by the Customer, shall be considered as the Customer’s full and complete acceptance of the Company’s Quote and the present General Terms and Conditions. Unless otherwise specified in the Quote, the Quote shall be valid for a period of 15 days.
Any subsequent amendment to the supplying implementation conditions of service provision as described in the original Quote shall be enshrined in a new agreement or a new Quote from the Company and agreed by the Customer. Any further written purchase order for services which are not stipulated in the original Quote shall be invoiced separately, without the Customer being entitled to dispute that an order for such services actually exists.
As part of the implementation of a service, any operational support which is not specified in the original Quote shall be invoiced separately as fees, costs or expenses.
The Quote is an estimated budget that may vary. The Company should not be held responsible for any variation above or below such estimate. The simple fact to order the management of an Operation to the Company shall commit the Customer to pay for any service supplied by the Company in order to carry out successfully the Operation it has been entrusted by the Customer.

ARTICLE 2: CANCELLATION OR REPORT OF AN ORDER BY THE CUSTOMER

Any cancellation or postponement of an order upon the Customer’s request shall automatically result in the payment by the Customer of flat fees (including but not limited to: processing fees, postal address, reservation of domain name, Audiotel number or SMS aliases, setting up databases and data entry forms, configuration, drafting settings, methods and regulations, time consumed, etc.) and provisional payments made by the Company as originally provided in the Quote.
It is hereby specified that as regards monthly services, and even if the Customer’s order is cancelled or postponed during the current month, the Customer shall be liable for full payment of the monthly invoice, provided that any month started shall be due.
Furthermore, the Customer will have to pay the full price of the services described in the Quote if the order is cancelled less than 1 (one) month before the date stipulated in the Quote for opening the Operation to consumers or to any other participant to whom the Operation is directed.

ARTICLE 3: PRICE AND TERMS OF PAYMENT

Any price of services, fees, costs and disbursements which shall be invoiced by the Company to the Customer does not include taxes, meaning that VAT must be added.
The following terms of payment shall apply:
<u><b>Call for Funds:</b></u> Depending on the service carried out, the Company shall issue on starting each Operation a Call for Funds (« Call for Funds ») or a Provisional Invoice representing from 30% (thirty per cent) to 100% (one hundred per cent) of the budget set forth in the original Quote, which shall be mainly aimed at covering the referral and face value costs of consumer redemptions. The amount of the Call for Funds is calculated on the basis of the operation’s estimated total cost in the Quote. Such Call for Fund shall be paid in cash upon receipt of this document.
The amount of the Call for Funds may be reviewed upwards during the operation if the consumer redemptions happen to be higher than originally estimated by the Customer, and the latter shall remain solely responsible of such estimation and of taking over redemptions resulting from the Operation for which he has set up the implementing rules.
Once the Operation has been completed, the remaining amount may be booked as a credit on one or several other Operations, or may be fully refunded to the Customer at the end of the Operation management phase, upon simple request from him, and provided that all invoices issued to the Customer and relating to all Operations, have been fully paid by the Customer.
Failing payment, the Company shall not be able to refund the consumers redemptions. The Company shall therefore not be liable for any delay in completing the Operation resulting from the Customer’s late payment of Call(s) for Funds.
The Customer shall indemnify the Company and shall be liable for any fees resulting from any claim management by the Company – which is not related to the quality of services provided by the Company - including the costs, damages,  compensations, fines, expenses, claims, penalties to which the Company would have been condemned, the attorney’s fees and disbursements incurred by the Company to protect its interests or resulting from any other procedures (including but not limited to : DGCCRF, consumer protection agencies, department for people’s protection, summons to appear before the Court, conciliation proceedings…) which might be carried out against him or against the Company. The Customer shall take over any condemnation inflicted to the Company. The reimbursement thereof shall be made upon express request from the Company, without any further formalities.
<u><b>For services:</b></u> The Customer shall make any payment by cheque or bank transfer within 30 (thirty) days net (date of actual payment of funds) as from the issue date of the invoice. The fixed unit prices stipulated in the Quote are set and may not be revised – unless in the conditions provided in the present Article below– and are irrevocably binding on the Customer. Invoices shall be drawn up on the basis of the services actually provided. The Customer will pay for any variable fees irrespective of the number of services provided. Should the number of services provided turns out to be higher than stipulated in the original quote, and obliges the Company to call for additional funds to provide such services, the Customer shall be held liable for paying all costs incurred. In this respect, any invoice showing remaining amounts can be disputed on the ground that such amounts exceed those stipulated in the original Quote or in the purchase order.
Any increase in costs (including but not limited to: postal and transport fees, packaging, Telecom operation costs…) beyond the Company’s control shall be reflected to the Customer. TVA shall be paid when payment is received. In the case of logistical services, the Fuel Tax shall be invoiced separately according to the terms and conditions of the carriers appointed by the Company. The Fuel Adjustment Coefficient (CAP) shall be applied by the Post Office on shipment services and the resulting cost shall be invoiced to the Customer. The Storage Cost shall be calculated on the basis of the INSEE building cost index and reviewed each year on January 1st.
Non-compliance by the Customer to such terms and conditions shall automatically result in the breakdown of relevant services (including but not limited to: entry, dispatch, handling over to carriers, sending bonuses, cheque-letters and execution of money transfers…) and the interruption of telephone lines.
No discount shall be granted for early payment.
In the event of any failure or delay in payment, the Customer shall be liable for any late penalties equal to 3 (three) times the legal interest rate, and calculated on the basis of the amounts outstanding without any formal prior notice; and such late penalties shall be increased by all the costs costs incurred by the Company to protect and defends its rights.
Pursuant to the provisions of Articles L 441-6 and D 441-5 of the French Code of Commerce, the lump amount of 40 € shall be due in case of late payment as recovery fees, without prejudice to any other penalties or compensations owing to the Company for such delay.
Unless otherwise specified in the Quote, the Company shall be entitled, without the Customer being entitled to refuse, to increase each year, on the anniversary date of the present Contract, the price of services during the full term of the present Contract according to the following reference indicators (variation between the last index published on the anniversary date of the Contract and the last index published on the same date the year before):
• Promotional services : Syntec Si index
If, for some reason, the Syntec reference index would no longer be released, the replacement index, or failing that the INSEE index measuring the change in prices currently charged in this activity, will substitute to it;
• Logistical services :
*Manual handling: INSEE labour cost index;
*Storage: INSEE building cost index;
*Transports: CNR index for long distance road transportation;
*Postal fees: Postal pricelist (Postal shipments, including postage and forwarding to sorting area).
Any increase in costs (postal and transport fees, packaging, Telecom operations…) beyond the Company’s control shall be reflected to the Customer.

ARTICLE 4: IMPLEMENTING RULES

The services provided by the Company are exclusively dedicated to the Customer.
Any request for an order to be handled in a specific amount of time shall be subject to specific conditions stated in the Quote.
The Company reserves the right to outsource under its responsibility all or part of the completion of the Operation assigned to it. The Company shall not be held responsible for the poor quality of telephone network, interruptions of call centers, temporary or permanent congestion of telephone lines, difficulties in forwarding mail by post and more generally, any act of god preventing from carrying out properly the Operation on the date scheduled in the Quote agreed by the Customer.
To the extent that the quantity of services is related to the consumers’ level of participation in the Operations, and such level being unpredictable, the delay for completion and delivery of the services listed in the Quote when registering the order, in particular the payback deadlines for participants to the Operations, is only indicative and is in no way guaranteed. Therefore, the Company shall not be liable in this respect.
Any delay stipulated in the Quote shall be automatically reviewed should the Customer be responsible in case of:
• any changes or amendments to the project,
• the work cannot be started on the scheduled date due to factors beyond the Company’s control,
• the Company cannot provide the services for reasons beyond its control,
• the consumer’s actual volume of involvement in the Operations exceeds the participation levels estimated on the basis of the information provided by the Customer,
• any delay caused by the Customer due to inaccurate or incomplete data disclosed to the Company, lack of cooperation, inadequacy of organization, poor IT environment to fulfill the agreed requirements, delay for agreeing documents, postponement of meetings, delay for validating or disclosing information, and more generally resulting from the Customer’s failing to execute any contractual clause of the present CGV or Quote.
Should one or more of the above mentioned events occur, the Company shall be released from any liability regarding the completion delay of the services, without prejudice to any damages the Company would be entitled to claim.
Therefore, any delay in the execution of the services, the delivery of products or services under circumstances described above, shall not entitle the Customer to be awarded damages and/or the cancellation of the order.
The Company shall in no way be liable for late delivery for reasons beyond its control and for which the carrier or Post services may be responsible. The Customer who has been informed of the method of transport to be used and the relevant risks, shall be liable for covering any financial costs arising from any possible delay. The Customer shall remain solely responsible for any consequences related to:
• the goods, items or elements provided by the Operation, delivered but non-compliant with the specification of the Operation and the regulation applicable, or presenting a hidden defect,
• the late payment or failure to pay by the Customer of any amount due for completing each Operation under the conditions provided in the Quote.

ARTICLE 5: CUSTOMER’S RESPONSIBILITIES

The Company shall not have any control on the settings of the promotional campaigns being run on behalf of the Customer who is the sole organizer and responsible thereof. Therefore, the Company shall under no circumstances be liable for the success level of the Operation organized by the Customer or for any design flaws in the Operations assigned to it such as examples given below, including but not limited to:
The low or high participation in the Operation or in an advertising campaign organized by the Customer, of consumers or any other relevant participant, the default in implement methods making the promotional Operation ruinous or impossible due for instance to the lack of conditions limiting the volume of Operations feedback (participation deadlines, lack of features allowing to secure consumer redemptions, sales volume, promising volumes, products value, products retail price, media plans, amount of advertising or products distributed without check, etc.). The Company hereby declares that the Customer shall be solely responsible for the access conditions of the Operation by the consumers or any other participant concerned to whom the offer is intended and for the content of implementing rules of the Operations.
The Customer shall guarantee that the Operations organized by him and assigned to the Company for completion, and in particular the conditions and regulations of such Operations, comply with all present or forthcoming legal requirements and regulations currently in force or which shall be in force, regarding advertising, promotional sales, selling by correspondence and distance sales, in such a way that the Company’s responsibility shall never be involved.
It shall be the Customer’s responsibility to have the Operations developed and assigned by him to the Company legally approved.
The Company shall have no capacity to act as a lawyer and therefore shall not be entitled to give any legal advice to the Customer or to provide him any support in legal matters.
The Customer shall guarantee that the Operation he has assigned to the Company does not require any specific legal or regulatory authorization, in particular in respect of his core activity.
The Customer shall hereby guarantee the Company that all data provided by him to perform the ordered services do not infringe any copyright, license, artwork or pattern, trade secret or any other intellectual property right and in general do not affect any right to which third parties may be entitled on such data.
The Customer shall guarantee the Company and will release it from any conviction decision taken against it to the benefit of a third party resulting from the violation of any of the above mentioned rights, as well as from any fees and expenses incurred to defend it, including attorney’s fees.
In order to help the Company to perform the services, the Customer undertakes to:
• determine its needs and collaborate with the Company to fulfill all his requirements related to the completion of the present Contract ;
• reply as promptly as possible to any request for information or validation from the Company in such a documented and complete way to be validly used by the latter;
• appoint one person in the Company’s staff as his privilege interlocutor duly empowered  to commit the Customer.
In the case of a service including the development of a website, an SMS or Audiotel application, the Company shall be liable to guarantee the reliability of the applications above described if the reverse planning has not been respected by the Customer.
The Company shall not be liable for any financial consequences resulting from any fraud committed by consumers it could not reasonably be able to detect while handling the Operation, or that the Customer could have prevented it from detecting (e.g. if the original bar codes have not been supplied prior to starting the Operation).
Unless otherwise advised by the Customer in writing, this one shall be considered to have authorized the Company to inform third parties that it is acting as the Customer’s service suppliers.
The Company shall be entitled to mention the Customer’s name on its client list and on any supporting documents (commercial brochure, web site, platforms for collecting consumer’s opinions, commercial presentation, etc.) and to use as an example any documents issued to consumers (sales outlet publicity, posters, leaflets, stickers…) and which are in the public domain.
The Company’s liabilities related to the completion delays of the services it has been assigned are subject to the Customer’s compliance with the deadline for disclosing any information, validation and delivery of goods necessary for the due performance of such services. The Company shall not be held responsible for any delay incurred during the completion of its services caused by the Customer.
The Company, when appropriate, may be compelled to amend the implementation schedule of the services and to charge the Customer for additional or increased services in order to cover any extra costs incurred by the Customer, including in the event of reception of not standardized goods.
Should the Customer be late to disclose any necessary data to perform the services properly within the delay stipulated in the Quote, the Company will charge separately fees for urgent handling at the usual hourly rate.
Under no circumstances, the Company shall be liable for the poor quality or the malfunction of the goods delivered to consumers.
The Company shall be held liable to provide the Customer with means, but not to guarantee results, especially with regard to the commercial success of the Operation and processing delays.
The Company shall not be held liable for the impact level of the Operation or for any advertising campaign organized by the Customer, whether such impact level be considered as low or significant by the Customer.
And also, as regards to computer and internet services which may become part of the Services provided by the Company, and with regard to the sophistication of the technology implemented at the present level of technology, the Company shall not be able to guarantee that an operating environment, software, software package or multimedia product shall be working without any interruption or « bug ». Therefore, the Company’s responsibility shall not be involved in this respect.
The Company cannot guarantee that the computer services it shall provides will be 100% free from any bug or do not present any malfunction. Therefore, it shall not be held liable for any prejudice arising from such malfunction and/or bug.
Furthermore, the Company shall not be held responsible in case of unavailability of Internet and cell-phone networks due to technical malfunctions.
The Company’s responsibility shall not be involved for any problem of data transfer, connection or unavailability of network, speed of access or eventual lack in the functioning of Internet or cell-phone networks.
Acceptance testing: as far as computer services are concerned, the acceptance shall be automatically declared by default if the Customer does not make substantiated observations within the delay of five (5) working days from the date on which the Company shall allow the Customer the access to the service.
Should observations be made, the Company shall have to carry out adjustments when justified by the description of the service as previously defined.
The acceptance shall also be deemed to be declared on the tenth working day following any one of the following events:
• failure to use the provided service due to the Customer,
• execution of the service by the Customer.
The Company shall not be held liable for any consequences resulting from the choice of technical or management options defined and performed by the Customer.
More particularly, the Company shall not be held responsible towards anybody in case of Customer’s fault, for the non-compliance by the latter with the Operations’ terms and conditions or with the regulation in force, especially with regard to the laws ruling consumption and the regulations on competition.
The Customer in his capacity of publishing manager, shall be held fully responsible for the content of Operations disclosed on internet base and web sites, and for the advertising content and promotions he will release on said supports and web sites. The Customer shall be solely liable for data, information and messages disclosed by him for release by the Company, under the laws and regulations in force, as the Company shall make no technical or legal check on the content of information and data disclosed to it.
The Customer shall generally guarantee the Company against any claim from third parties on the content released to computer and internet services provided by the Company, according to any existing regulation.
In the case of the Customer’s default to fulfill its contractual obligations which may affect the Company’s image and reputation, including in case of failure in payment of the amounts necessary to refund the consumers’ redemptions, the Company may, where applicable, discontinue to execute the services and initiate any legal action in order to be awarded compensation for prejudice.
In case of consumers claims resulting from the performance of the promotion offer launched by the Customer, which is not related to the quality of the Company’s services for implementing the Operation, the Customer shall automatically be charged for any resulting fees and disbursements, as well as for the lump indemnity of €750 (VAT not included) for the time consumed to deal with such claim. Moreover, the Customer shall guarantee the Company and will release it from any conviction decided against it to the benefit of consumers and resulting from defaults in the Operation which cannot be attributed to the Company, and from any fees and expenses incurred to defend the Company, including any attorney’s fees.
The search of any archived file upon the Customer’s request shall be charged by the Company for the lump amount of €15 (VAT not included) per file.




ARTICLE 6: INTELLECTUAL AND ARTISTIC PROPERTY

Any surveys, schedules, methods, know-how and documents of any kind disclosed or dispatched by the Company to the Customer in respect of the execution of the present Contract will remain the Company’s sole property and be strictly confidential. Therefore, the Customer undertakes to comply with and to have his staff, assistants, parent company, affiliates and potential sub-contractors strictly keep the secrecy on such documents and on any information regarding the Company as well as on any developments performed by the latter during its commercial relationship with the Customer which he might have been aware of in the context of such commercial relationship.
The Company is and shall remain the sole owner of the creations, developments and tools it has implemented or used for managing the Operations and more generally any developments, platforms, developed solutions which the Company shall have authorized the Customer to use during a specific period of time. As soon as this specific period ends, the Customer shall be released from any right to use or of access to such developments and solutions.
The Customer shall not be entitled to the ownership of developments or inventions created or implemented when performing the services, nor the ownership of methods and know-how. The Company shall reserve the right to use the knowledge resulting from the execution of the present contract or to perform similar services for any third party of its choice.
Therefore, the Customer shall refrain from entirely or partially copying or reproducing any relevant element of any creation, developments (with related documentation), by any means and in any form or support; from translating or transcribing them in any other language, or from adapting them.
The Customer shall generally not be entitled to any rights of any kind on the products and services developed by the Company.
In the case of Operations involving the creation of a website, it shall be the Customer’s responsibility to check the technical and legal availability of the domain name(s) it shall intend to take in order to release online and to use the web site, to complete any necessary procedures for registering such domain name(s) ; to provide the Company with the timetable for renewing the domain name(s) so that the latter will be able to run the web site according to the registration fees paid by the Customer, without prejudice to third parties’ rights on domain name(s). The Company may be required to submit a domain name to the relevant body (INTERNIC or AFNIC) on behalf of the Customer. However, the Customer shall remain solely liable for the choice of its own domain name, the check of its availability, its registration rights and any consequences towards third parties.
The Customer shall undertake to ensure that its choice of domain and brand names used for any Operation will not affect any intellectual property rights of third parties.
The Customer shall guarantee the Company against any resulting financial costs, including any conviction, court costs and attorney’s fees arising from any legal action taken by third parties further to the non-compliance with said legal and regulatory requirements or the violation of any intellectual property rights.
The Company shall be granted the sole ownership of any drawings, creations, patterns, web site, platform, etc… that it devises; none of which may be reproduced or used without its prior written consent.
In the event of any work involving either the creation in the meaning of the regulation on artistic, intellectual or industrial property, any copyrights resulting from such creation, including the right of reproduction and alteration, shall remain the exclusive property of the Company and will not be transferred to the Customer unless a special agreement stipulating the price and conditions of partial or total ceding of such right is signed.
The Customer’s agreement on the Quote issued by the Company for a specific Operation shall not result in ceding to the Customer any intellectual property rights on the creations made by the Company and necessary to perform such Operation, unless otherwise and expressly provided by the Quote.
In any case, any ceding or license of intellectual property right between the Company and the Customer shall take effect only after the full payment by the Customer of the agreed ceding price.

ARTICLE 7: RESPONSIBILITIES ON ITEMS AND GOODS

The Customer shall declare to the Company, prior to delivery, any valuable or hazardous items which may be subject to special regulations (alcohol, food, etc…). The Company shall not be held responsible for the contents of packages that have not been prepared by its staff or for any stock balance discrepancies within the limit of 5% (five per cent) of the total stock received after the aggregation of all positive and negative balance discrepancies. Unless otherwise stated by the Customer and therefore stipulated in the Quote, the Company shall, when accepting merchandise, acknowledge the quantities as listed on the delivery slip, simply by counting the number of pallets or packages received rather than by unpacking.
The Customer shall undertake to subscribe a contract with an insurance company that is reputedly solvent in order to cover the goods he has assigned to the Company for storage against theft, fire, explosions, lightning, natural disasters or any other event that could damage the goods.
The Customer shall waive any recourse he might be entitled to make against the Company and will undertake to ensure that his insurers do likewise.
The Customer may be offered an insurance coverage in the Quote against theft or any other hazard which may happen on products (this guaranty shall be subject to insurance terms and conditions). Should the Customer decline to take up this offer, no compensation shall be paid to the Customer in the event of products being lost or stolen.
The transportation of goods shall be subject to the applicable transport law and regulation.
As the Company has no capacity to act as insurance agent, it will be solely liable for the subscription of an insurance policy on each Operation.
Furthermore, in case of disaster, whether it is subject to any compensation or to the refusal of giving right to any compensation, and pursuant to the insurance policy subscribed to cover its activities, the Company’s liability shall not be involved in any case.

ARTICLE 8: RESPONSIBILITIES: SERVICES CARRIED OUT BY THE COMPANY

The Company shall not be liable for any loss of earnings, direct or indirect and special or incidental prejudice resulting from the use or related to the services which may be opposed by the Customer or any third party.
In any event where the Company’s liability shall be involved for any reason or in whatever capacity, its responsibility shall be strictly limited to the compensation for any direct and duly proved material and consequential damage and the sum paid out shall not exceed €50,000 all taxes included (fifty thousand euros) per Operation.
Under no circumstances the Customer shall be entitled to any damages for compensation of any indirect prejudice arising from the implementation or the management of the operations assigned to the Company such as, including but not limited to: violation of the image, operating losses or any commercial prejudice.
Any claim shall be served by the Customer to the Company by registered letter with an acknowledgement of receipt within the maximum delay of 7 days as from the discovery of the event that triggered the claim and before the date of ending of the Operation’s management. Failing to respect such deadline, the Customer will forfeit all rights of remedy against the Company.

ARTICLE 9: COLLECTED DATA & ARCHIVES

The Customer shall undertake to make under his sole responsibility any declaration related to the automated personal data processing provided by the regulation in force, particularly with the CNIL. The Customer shall be solely responsible for the content of collected data for the management of his Operation according to Law 78-17 of January 6th 1978, which expressly allows the Company to proceed to relevant automated personal data processing and to transfer them to third parties in France and abroad in order to provide the services, which are the purpose of the contract agreed between the Company and the Customer.
Unless otherwise stipulated, hardcopy archives (especially letters received from consumers) shall be kept until the final day of management phase of each Operation stipulated in the Quote. Beyond this delay and unless otherwise stipulated in writing by the Customer, they shall be destroyed at the Customer’s expense.
The files covering the computerized handling of the Operation shall be available within 3 (three) months after the end of completion of the Operation, upon the Customer’s simple written request.
Provided that consumers or any holders of data related to them file such request, the Customer shall agree that information and data on the management of the consumer’s participation or of any data holder to a promotional campaign managed by the Company be stored and transferred to them.
Unless otherwise stipulated, the Customer shall allow the Company to keep, to operate for it activities, with no limitation in terms of period of time and for its own account, or to carry out panels, the consumer’s personal information and data collected in particular via its proprietary platforms, during the full term of the services performed on behalf of the Customer, this performance being achieved for its own activity and in compliance with the current regulation applicable on the storage and the use of personal data.
By assigning an Operation to the Company, the Customer shall accept, in particular, that the Company conducts satisfaction surveys with consumers on the service provided by the Company, as part of the Operation to which the consumers have participated. Therefore, the Customer shall agree that the Operation name and the product trade mark concerned by the Operation to which the consumers have participated may be mentioned and published on any communication medium belonging to the Company (including but not limited to: trade brochures, web platform, web site…).
The Company shall not be held responsible in the event the Customer fails to comply with all legal and regulatory requirements in force, related to computing, databases and liberties n° 78-17 of January 6th 1978 and to any other similar law applicable within the Customer’s territory.

ARTICLE 10: INFORMATION

The Customer shall undertake to inform the Company of any change in his status, both as regards his address and bank details, as well as of any event that may significantly affect his financial situation or structure (such as changes in the share capital or shareholding, etc...).

ARTICLE 11: RESOLUTORY CLAUSE

In the event of the Customer fails to fulfill his obligations, and in particular failing payment of the price within the agreed or prescribed delays according to the present Contract, and one month after a notice has been served to him by registered letter with an acknowledgement of receipt remained unanswered, the present Contract shall legally be terminated to the sole detriment of the Customer, upon simple notice from the Company. In this event, any sums paid to the Company shall remain for its account, without prejudice to any damages and court costs, including attorney’s fees which it shall reserve the right to claim for payment thereof as a result of legal proceedings.

ARTICLE 12 : TRANSFER OF CONTRACT

No change in the legal status of the Company such as an alteration, a change in the company type, or a merge with other legal entities, absoption or assignment of all or part of the Company and/or all or part of the rights set out herein to a third party will terminate the present agreement which shall continue.
Therefore, in the event of restructuring operations performed on the Company, the latter shall be authorized to transfer under its own responsibility the Contract concluded with the Customer to any subsidiary of the Group to which belongs the Company, within the meaning of the provisions of Article L 233-3 of the Commercial Code.


ARTICLE 13: MODIFICATION OF GENERAL TERMS AND CONDITIONS

The present General Terms and Conditions may be amended by the Company at any time. The amended version of the General Terms and Conditions shall come into force 1 (one) month after the Customer has been informed that the new General Terms and Conditions have been posted on the Company’s website http://www.qwamplify-activation.com/en/terms-conditions.
Unless the Customer makes any objection within such delay, the amended General Terms and Conditions shall be deemed to have been accepted. In the event the Customer would not have been informed that the new version of the CGV has been published on the website or in the event the Customer would object on the terms thereof as part of an on-going Operation, the existing General Terms and Conditions shall remain in force until the termination of the on-going Operation, and the new version of CGV shall automatically apply to any subsequent Operation.

ARTICLE 14: JURISDICTION – APPLICABLE LAW

The French law in force on the date of signing the present Contract shall be the only law applicable to the contractual ties created between the Company and its Customer, irrespective of the latter’s nationality, the location of his registered office, the place where he shall carry out the services or where the present Contract shall be concluded.
The Commercial Court of Aix-en-Provence (Bouches-du-Rhône, France) shall have jurisdiction over any dispute related to the conclusion, the interpretation, the validity as well as the execution of the present Contract between the Company and the Customer, as well as the present General Terms and Conditions.

Version updated on 02 January 2018.' where i18n_id = 83;
update i18n set field_value = 'http://www.qwamplify-activation.com/en/terms-conditions' where i18n_id = 85;
update i18n set field_value = '02 January 2018' where i18n_id = 86;
update i18n set field_value = 'Agnès BRANGER Administration and Financial Manager' where i18n_id = 87;
update i18n set field_value = 'Subject to the evolution of the consumer\'s returns, the costs of the Post office and telephone companies' where i18n_id = 94;
