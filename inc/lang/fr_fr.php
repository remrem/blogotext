<?php
# *** LICENSE ***
# This file is part of BlogoText.
# https://github.com/BlogoText/blogotext/
#
# 2006      Frederic Nassar.
# 2010-2016 Timo Van Neerden.
# 2016-.... Mickaël Schoentgen and the community.
#
# BlogoText is free software.
# You can redistribute it under the terms of the MIT / X11 Licence.
# *** LICENSE ***

$GLOBALS['lang'] = array(
'id' => 'fr',
// Navigation
'le' => 'le',
'remarque' => 'Remarque',
'valider' => 'Valider',
'annuler' => 'Annuler',
'envoyer' => 'Envoyer',
'preview' => 'Prévisualiser',
'editer' => 'Éditer',
'activer' => 'Activer',
'desactiver' => 'Désactiver',
'voir' => 'Voir',
'partager' => 'Partager',
'infos' => 'Infos',
'rechercher' => 'Rechercher',
'filtrer' => 'Filtrer',
'oui' => 'Oui',
'non' => 'Non',
'ouverts' => 'Autorisés',
'fermes' => 'Interdits',
'repondre' => 'répondre',
'depuis' => 'depuis',
'sur' => 'sur',
'patientez' => 'patientez',
'secondes' => 'secondes',
'du' => 'du',
'et' => 'et',
'ou' => 'ou',
'par' => 'par',
'ajoute' => 'ajouté(s)',
'trouve' => 'trouvé(s)',
'using' => 'avec',
'rendered' => 'généré en',
'recherche' => 'Les résultats de recherche pour',
// Boutons formatage commentaires
'bouton-gras' => 'gras',
'bouton-ital' => 'italique',
'bouton-soul' => 'souligné',
'bouton-barr' => 'barré',
'bouton-lien' => 'Insérer un lien',
'bouton-cita' => 'Insérer une citation',
'bouton-imag' => 'Insérer une image',
'bouton-code' => 'Insérer du code formaté',
'bouton-left' => 'Aligner le texte à gauche',
'bouton-center' => 'Aligner le texte au center',
'bouton-right' => 'Aligner le texte à droite',
'bouton-justify' => 'Justifier le texte (aligner des deux côtés)',
'bouton-liul' => 'Insérer une liste à puce',
'bouton-liol' => 'Insérer une liste numérotée',
// Labels
'label_article' => 'article',
'label_articles' => 'articles',
'label_commentaire' => 'commentaire',
'label_commentaires' => 'commentaires',
'label_link' => 'lien',
'label_links' => 'liens',
'label_feed_entry' => 'Entrée RSS',
'label_feed_entrys' => 'Entrées RSS',
'label_fichier' => 'fichier',
'label_fichiers' => 'fichiers',
'label_precedent' => 'éléments plus récents',
'label_suivant' => 'éléments plus anciens',
'label_dp_pseudo' => 'Pseudo : ',
'label_dp_webpage' => 'Site web (facultatif) : ',
'label_dp_captcha' => 'Somme de : ',
'label_dp_email' => 'E-mail (facultatif) : ',
'label_dp_email_required' => 'E-mail : ',
// Commentaire
'aucun' => 'aucun',
'comment_ajout' => 'Ajouter un commentaire',
'comment_cookie' => 'Retenir ces informations avec un cookie ? ',
'comment_subscribe' => 'Recevoir des notifications de nouveaux commentaires par email ? ',
'comment_not_allowed' => 'Les commentaires sont fermés pour cet article',
'no_comments' => 'Il n’y a aucun commentaire pour le moment.',
'comment_is_visible' => 'Le commentaire est visible',
'comment_is_invisible' => 'Le commentaire n’est pas visible',
'comment_need_validation' => 'Votre commentaire sera visible après validation par le webmaster.',
// links
'link_is_public' => 'Le lien est public',
'link_is_private' => 'Le lien est privée (invisible)',
// Titles - liens
'post_link' => 'Voir en ligne',
'post_share' => 'Partager',
'blog_link' => 'Voir le blog',
'go_to_pref' => 'Allez dans les préférences pour changer le titre.',
// Mois
'janvier' => 'janvier',
'fevrier' => 'février',
'mars' => 'mars',
'avril' => 'avril',
'mai' => 'mai',
'juin' => 'juin',
'juillet' => 'juillet',
'aout' => 'août',
'septembre' => 'septembre',
'octobre' => 'octobre',
'novembre' => 'novembre',
'decembre' => 'décembre',
'janv.' => 'janv.',
'fev.' => 'févr.',
'mars.' => 'mars',
'avr.' => 'avril',
'mai.' => 'mai',
'juin.' => 'juin',
'juil.' => 'juil.',
'aout.' => 'août',
'sept.' => 'sept.',
'oct.' => 'oct.',
'nov.' => 'nov.',
'dec.' => 'déc.',
// Jours
'lu' => 'Lu',
'ma' => 'Ma',
'me' => 'Me',
'je' => 'Je',
've' => 'Ve',
'sa' => 'Sa',
'di' => 'Di',
// Jours
'lundi' => 'lundi',
'mardi' => 'mardi',
'mercredi' => 'mercredi',
'jeudi' => 'jeudi',
'vendredi' => 'vendredi',
'samedi' => 'samedi',
'dimanche' => 'dimanche',
'aujourdhui' => 'aujourd’hui',
'hier' => 'hier',
// Erreurs
'erreurs' => 'Erreur(s)',
'err_theme_introuvable' => 'Le fichier thème est introuvable, incomplet ou illisible.',
'err_comm_auteur' => 'Le nom de l’auteur est vide',
'err_comm_email' => 'L’adresse e-mail n’est pas valide',
'err_comm_contenu' => 'Le commentaire est vide',
'err_comm_captcha' => 'La somme est incorrecte (utiliser des chiffres)',
'err_comm_webpage' => 'L’URL n’est pas valide',
'err_comm_article_id' => 'L’ID Article n’est pas valide',
'err_wrong_token' => 'Le jeton de sécurité est expiré ou invalide.',
'err_addon_name' => 'Nom du module invalide.',
'err_addon_status' => 'Statut du module non renseigné.',
'err_addon_enabled' => 'Impossible d\'activer le module "%s", vérifiez les droits du dossier "'.DIR_ADDONS.'" et de ses sous-dossiers.',
'err_addon_disabled' => 'Impossible de désactiver le module "%s", vérifiez les droits du dossier "'.DIR_ADDONS.'" et de ses sous-dossiers.',
// Redirections
'retour_liste' => '« Liste des articles',
// Titres des pages
'bienvenue' => 'Bienvenue',
// modules / addons
'addons_settings_legend' => 'Préférences du module : ',
'addons_settings_link_title' => 'Préférences du module',
'addons_settings_confirm_reset' => 'Êtes-vous sûr de vouloir effacer vos paramètres ?',
'addons_confirm_buttons_action' => 'Certaines actions peuvent prendre du temps à se terminer, veuillez ne pas fermer ou rafraîchir votre fenêtre jusqu\'au rechargement complet de la page.',
'addons_clean_cache_label' => 'Effacer le cache de ce module ?',
// feed
'feed_article_comments_title' => 'Commentaires sur ',
// Notes
'note_no_article' => 'Aucun article :/',
'note_no_module' => 'Aucun module',
'note_no_commentaire' => 'Aucun commentaire',
'note_comment_closed' => 'Commentaires fermés',
'note_no_link' => 'Aucun lien',
'note_no_image' => 'Aucune image',
'note_no_fichier' => 'Aucun fichier',
'note_no_feed' => 'Aucun flux RSS',
'note_no_feed_entry' => 'Aucune entrée RSS',
// placeholders
'placeholder_search' => 'Rechercher',
//Formulaire Images
'label_jusqua' => 'Jusqu’à ',
'label_parfichier' => ' par fichier',
'label_codes' => 'Codes d’intégration :',
// vérifier les mises à jours
'succes' => 'Succès',
'echec' => 'Échec',
// Chiffres 0 à 9 pour captcha
'0' => 'zéro',
'1' => 'un',
'2' => 'deux',
'3' => 'trois',
'4' => 'quatre',
'5' => 'cinq',
'6' => 'six',
'7' => 'sept',
'8' => 'huit',
'9' => 'neuf',
'derniere_connexion_le' => 'Dernière connexion depuis',
'cet_ordi' => 'cet ordinateur',
);
