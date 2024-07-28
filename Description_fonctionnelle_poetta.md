# Description Fonctionnelle du Projet "Les Trésors Savoyards"

## 1. Introduction

**Nom du Projet :** Les Trésors Savoyards  
**Version :** 1.0  
**Date :** 26/07/24  
**Auteur :** Ilot 1

"Les Trésors Savoyards" sera une application web partiellement développée avec Laravel qui permettra aux utilisateurs d'acheter des produits locaux en ligne. L'API gère les produits, les categories, les utilisateurs, les commandes et les paniers.

## 2. Objectifs du Projet

Le projet "Les Trésors Savoyards" vise à fournir une plateforme en ligne permettant aux utilisateurs de :

- Naviguer et rechercher des produits.
- Ajouter des produits à un panier.
- Passer des commandes.
- Gérer leur compte utilisateur.
- Consulter l'historique de leurs commandes.

## 3. Fonctionnalités

### 3.1 Gestion des Utilisateurs

**Objectif :** Permettre aux utilisateurs de créer et gérer leur compte.

- **Inscription :** Les utilisateurs peuvent créer un compte en fournissant leur nom, adresse email, mot de passe parmis d'autres données.
- **Connexion :** Les utilisateurs peuvent se connecter à leur compte en utilisant leur adresse email et mot de passe.
- **Déconnexion :** Les utilisateurs peuvent se déconnecter de leur compte.
- **Gestion du Profil :** Les utilisateurs peuvent mettre à jour leurs informations personnelles (nom, adresse email, mot de passe, etc).

### 3.2 Gestion des Produits

**Objectif :** Afficher et gérer les produits disponibles à la vente.

- **Affichage des Produits :** Les utilisateurs peuvent voir un catalogue de produits avec des détails comme le nom, la description, le prix, une image, etc.
- **Recherche et Filtrage :** Les utilisateurs peuvent rechercher des produits par mot-clé et filtrer les résultats selon des critères (catégorie, prix, etc.).
- **Détails du Produit :** Les utilisateurs peuvent consulter les détails d’un produit en cliquant sur son nom.

### 3.3 Gestion du Panier

**Objectif :** Permettre aux utilisateurs de gérer leurs articles en attente d'achat.

- **Ajouter au Panier :** Les utilisateurs peuvent ajouter des produits à leur panier.
- **Modifier le Panier :** Les utilisateurs peuvent modifier la quantité de chaque produit dans leur panier.
- **Supprimer du Panier :** Les utilisateurs peuvent retirer des produits de leur panier.
- **Consulter le Panier :** Les utilisateurs peuvent voir les produits ajoutés, le total, et le récapitulatif de leur commande.

### 3.4 Gestion des Commandes

**Objectif :** Permettre aux utilisateurs de passer des commandes et de suivre leur statut.

- **Passer une Commande :** Les utilisateurs peuvent finaliser leur achat en fournissant une adresse de livraison et en sélectionnant un mode de paiement.
- **Historique des Commandes :** Les utilisateurs peuvent consulter l’historique de leurs commandes passées.
- **Suivi de Commande :** Les utilisateurs peuvent suivre l’état de leur commande (en traitement, expédiée, livrée).

### 3.5 Gestion des Administrateurs

**Objectif :** Permettre aux administrateurs de gérer les produits et les commandes par le biais d'un back-office.

- **Connexion Admin :** Les administrateurs peuvent se connecter avec des identifiants spécifiques.
- **Ajouter/Modifier/Supprimer des Produits :** Les administrateurs peuvent ajouter, modifier ou supprimer des produits dans la base de données.
- **Consulter les Commandes :** Les administrateurs peuvent consulter toutes les commandes passées et mettre à jour leur statut.

## 4. Exigences Techniques

- **Technologies :** PHP 8.x, Laravel 10.x, MySQL, Composer.
- **Serveur Web :** Apache ou Nginx (ou autre serveur web spécifique si applicable)
- **Base de Données :** MySQL.
- **Extensions PHP :** fileinfo, mbstring, bcmath, etc.

## 5. Interface Utilisateur

- **Page d’Accueil :** Affiche une vue d’ensemble des produits populaires et des promotions.
- **Page de Recherche :** Permet de rechercher et filtrer les produits.
- **Page de Détails du Produit :** Montre des informations détaillées sur un produit.
- **Page du Panier :** Affiche les articles ajoutés au panier et le total.
- **Page de Commande :** Permet de passer la commande et de choisir un mode de paiement.
- **Page de Connexion/Inscription :** Permet aux utilisateurs de créer un compte ou de se connecter.

## 6. Sécurité

- **Authentification :** Utilisation de Laravel Auth (Sanctum) pour la gestion des utilisateurs.
- **Validation des Données :** Validation des données côté serveur pour éviter les erreurs et les attaques par injection.
- **Cryptage des Mot de Passe :** Les mots de passe des utilisateurs sont stockés sous forme cryptée (Hash).

## 7. Conclusion

"Les Trésors Savoyards" est conçu pour offrir une expérience utilisateur fluide et intuitive pour les achats en ligne. Le système intègre des fonctionnalités clés pour gérer les utilisateurs, les produits, les paniers et les commandes, tout en assurant la sécurité et la performance.
