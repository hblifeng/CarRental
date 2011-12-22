<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false' => 'Cette valeur doit être fausse',
    'This value should be true' => 'Cette valeur doit être vraie',
    'This value should be of type {{ type }}' => 'Cette valeur doit être de type {{ type }}',
    'This value should be blank' => 'Cette valeur doit être vide',
    'The value you selected is not a valid choice' => 'Cette valeur doit être l\'un des choix proposés',
    'You must select at least {{ limit }} choices' => 'Vous devez sélectionner au moins {{ limit }} choix',
    'You must select at most {{ limit }} choices' => 'Vous devez sélectionner au maximum {{ limit }} choix',
    'One or more of the given values is invalid' => 'Une ou plusieurs des valeurs soumises sont invalides',
    'The fields {{ fields }} were not expected' => 'Les champs {{ fields }} n\'ont pas été prévus',
    'The fields {{ fields }} are missing' => 'Les champs {{ fields }} sont manquants',
    'This value is not a valid date' => 'Cette valeur n\'est pas une date valide',
    'This value is not a valid datetime' => 'Cette valeur n\'est pas une date valide',
    'This value is not a valid email address' => 'Cette valeur n\'est pas une adresse email valide',
    'The file could not be found' => 'Le fichier n\'a pas été trouvé',
    'The file is not readable' => 'Le fichier n\'est pas lisible',
    'The file is too large ({{ size }}). Allowed maximum size is {{ limit }}' => 'Le fichier est trop volumineux ({{ size }}). Sa taille ne doit pas dépasser {{ limit }}',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}',
    'This value should be {{ limit }} or less' => 'Cette valeur doit être inférieure ou égale à {{ limit }}',
    'This value is too long. It should have {{ limit }} characters or less' => 'Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractères',
    'This value should be {{ limit }} or more' => 'Cette valeur doit être supérieure ou égale à {{ limit }}',
    'This value is too short. It should have {{ limit }} characters or more' => 'Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractères',
    'This value should not be blank' => 'Cette valeur ne doit pas être vide',
    'This value should not be null' => 'Cette valeur ne doit pas être nulle',
    'This value should be null' => 'Cette valeur doit être nulle',
    'This value is not valid' => 'Cette valeur n\'est pas valide',
    'This value is not a valid time' => 'Cette valeur n\'est pas une heure valide',
    'This value is not a valid URL' => 'Cette valeur n\'est pas une URL valide',
    'This form should not contain extra fields' => 'Ce formulaire ne doit pas contenir des champs supplémentaires',
    'The uploaded file was too large. Please try to upload a smaller file' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit',
    'The CSRF token is invalid. Please try to resubmit the form' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire',
    'The two values should be equal' => 'Les deux valeurs doivent être identiques',
    'The file is too large. Allowed maximum size is {{ limit }}' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }}',
    'The file is too large' => 'Le fichier est trop volumineux',
    'The file could not be uploaded' => 'Le téléchargement de ce fichier est impossible',
    'This value should be a valid number' => 'Cette valeur doit être un nombre',
    'This file is not a valid image' => 'Ce fichier n\'est pas une image valide',
    'This is not a valid IP address' => 'Cette adresse IP n\'est pas valide',
    'This value is not a valid language' => 'Cette langue n\'est pas valide',
    'This value is not a valid locale' => 'Ce paramètre régional n\'est pas valide',
    'This value is not a valid country' => 'Ce pays n\'est pas valide',
    'This value is already used' => 'Cette valeur est déjà utilisée',
    'The size of the image could not be detected' => 'La taille de l\'image n\'a pas pu être détectée',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px',
    'This value should be the user current password' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur',
    'This value should have exactly {{ limit }} characters' => 'Cette chaine doit avoir exactement {{ limit }} caractères',
  ),
  'SonataAdminBundle' => 
  array (
    'action_delete' => 'Supprimer',
    'btn_batch' => 'Ok',
    'btn_create' => 'Créer',
    'btn_create_and_edit_again' => 'Créer',
    'btn_create_and_create_a_new_one' => 'Créer et ajouter',
    'btn_filter' => 'Filtrer',
    'btn_update_and_edit_again' => 'Mettre à jour',
    'btn_update_and_return_to_list' => 'Mettre à jour et fermer',
    'link_delete' => 'Supprimer',
    'link_action_create' => 'Ajouter',
    'link_action_show' => 'Afficher',
    'link_action_edit' => 'Editer',
    'link_action_list' => 'Retourner à la liste',
    'link_add' => 'Ajouter',
    'link_list' => 'Liste',
    'link_reset_filter' => 'Effacer',
    'title_create' => 'Créer',
    'title_dashboard' => 'Tableau de bord',
    'title_edit' => 'Éditer',
    'title_list' => 'Liste',
    'link_next_pager' => 'Suivant',
    'link_previous_pager' => 'Précédent',
    'Admin' => 'Admin',
    'link_expand' => 'Étendre/Réduire',
    'no_result' => 'Aucun résultat',
    'confirm_msg' => 'Êtes-vous sûr ?',
    'action_edit' => 'Éditer',
    'action_show' => 'Afficher',
    'all_elements' => 'Tous les éléments',
    'flash_batch_empty' => 'Action interrompue. Aucun élément n\'a été séléctionné.',
    'flash_create_success' => 'L\'élément a été crée avec succès.',
    'flash_create_error' => 'Une erreur est intervenue lors de la création de l\'élément.',
    'flash_edit_success' => 'L\'élément a été mis à jour avec succès.',
    'flash_edit_error' => 'Une erreur est intervenue lors de la mise à jour de l\'élément.',
    'flash_batch_delete_success' => 'Les éléments séléctionnés ont été supprimés avec succès.',
    'flash_batch_delete_error' => 'Une erreur est intervenue lors de la suppression des éléments séléctionnés.',
    'flash_delete_error' => 'Une erreur est intervenue lors de la suppression de l\'élément.',
    'flash_delete_success' => 'Les éléments ont été supprimés avec succès.',
    'breadcrumb.dashboard' => '⌂',
    'title_delete' => 'Confirmation de suppression',
    'message_delete_confirmation' => 'Êtes-vous sûre de vouloir supprimer l\'élément sélectionné?',
    'btn_delete' => 'Oui, supprimer',
    'title_batch_confirmation' => 'Confirmation d\'un traitement par lots',
    'message_batch_confirmation' => 'Êtes-vous sûre de vouloir confirmer cette action et de l\'exécuter pour tous les éléments sélectionnés?',
    'btn_execute_batch_action' => 'Oui, exécuter',
    'label_type_yes' => 'oui',
    'label_type_no' => 'non',
    'label_type_contains' => 'contient',
    'label_type_not_contains' => 'ne contient pas',
    'label_type_equals' => 'est égal à',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
  ),
  'messages' => 
  array (
    'Car Rental' => 'Location de voitures',
    'breadcrumb.link_renting_list' => 'Liste des locations',
    'breadcrumb.link_renting_edit' => 'Édition de la location',
    'breadcrumb.link_renting_create' => 'Nouvelle location',
    'Rentings' => 'Locations',
    'Payments' => 'Paiements',
    'Customers' => 'Clients',
    'Vehicles' => 'Véhicules',
    'Manufacturers' => 'Constructeurs',
    'Models' => 'Modèles',
    'Fuels' => 'Carburants',
    'id' => 'ID',
    'notes' => 'Notes',
    'active' => 'Actif',
    'customer' => 'Client',
    'vehicle' => 'Véhicule',
    'exited' => 'sortie le',
    'scheduledReturn' => 'Retour prévu le',
    'returned' => 'Ramené le',
    'Renting' => 'Location',
    'Payment' => 'Paiement',
    'Customer' => 'Client',
    'Vehicle' => 'Véhicule',
    'Manufacturer' => 'Constructeur',
    'Model' => 'Modèle',
    'Fuel' => 'Carburant',
    'Active' => 'Actif',
    'Exited' => 'Sortie le',
    'Scheduledreturn' => 'Retour prévu le',
    'Returned' => 'Ramené le',
    'amount' => 'Montant',
    'date' => 'Date',
    'renting' => 'Location',
    'Amount' => 'Montant',
    'breadcrumb.link_payment_list' => 'Liste des paiements',
    'breadcrumb.link_payment_edit' => 'Édition du paiement',
    'breadcrumb.link_payment_create' => 'Nouveau paiement',
    'lastName' => 'Nom',
    'firstName' => 'Prénom',
    'city' => 'Ville',
    'emailAddress' => 'Email',
    'phoneNumber1' => 'Téléphone 1',
    'Gender' => 'Civilité',
    'male' => 'Monsieur',
    'female' => 'Madame',
    'Lastname' => 'Nom',
    'Firstname' => 'Prénom',
    'Address1' => 'Adresse 1',
    'Address2' => 'Adresse 2',
    'City' => 'Ville',
    'Zipcode' => 'Code postal',
    'Country' => 'Pays',
    'Emailaddress' => 'Email',
    'Phonenumber1' => 'Téléphone 1',
    'Phonenumber2' => 'Téléphone 2',
    'Registrationdate' => 'Date d\'adhésion',
    'Birth' => 'Date de naissance',
    'breadcrumb.link_customer_list' => 'Liste des clients',
    'breadcrumb.link_customer_edit' => 'Édition du client',
    'breadcrumb.link_customer_create' => 'Nouveau client',
    'numberPlate' => 'Immatriculation',
    'model' => 'Modèle',
    'Numberplate' => 'Immatriculation',
    'Version' => 'Version',
    'Nextvehicleinspection' => 'Dernière révision',
    'Lastvalvetrain' => 'Dernière machin',
    'Valvetrain' => 'Machin',
    'breadcrumb.link_vehicle_list' => 'Liste des véhicules',
    'breadcrumb.link_vehicle_edit' => 'Édition du véhicule',
    'breadcrumb.link_vehicle_create' => 'Nouveau véhicule',
    'name' => 'Nom',
    'Name' => 'Nom',
    'breadcrumb.link_manufacturer_list' => 'Liste des constructeurs',
    'breadcrumb.link_manufacturer_edit' => 'Édition du constructeur',
    'breadcrumb.link_manufacturer_create' => 'Nouveau constructeur',
    'manufacturer' => 'Constructeur',
    'breadcrumb.link_model_list' => 'Liste des modèles',
    'breadcrumb.link_model_edit' => 'Édition du modèle',
    'breadcrumb.link_model_create' => 'Nouveau modèle',
    'breadcrumb.link_fuel_list' => 'Liste des carburants',
    'breadcrumb.link_fuel_edit' => 'Édition du carburant',
    'breadcrumb.link_fuel_create' => 'Nouveau carburant',
  ),
));


return $catalogue;
