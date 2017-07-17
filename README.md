Objectif : Réaliser un CRUD avec Symfony et Doctrine de films et de personnages


1. Créer les entités Doctrine suivantes :
Entité Film
- id
- title
- abstract
- date

Entité Character (Personnage)
- id
- name

Il faut ajouter une relation Film <-> Personnage


2. Créer un formulaire pour ajouter un personnage lié à un ou plusieurs films

3. Créer une route du type /films/ pour récupérer tous les films en BDD en HTML en utilisant le moteur de templating twig
* Sur cette page de liste, afficher pour chaque article :
  - title 
  - date
  - Au clic, on va sur le détail du film (cf point suivant)
  
4. Créer une route du type /films/%id_film%/ pour afficher le détail d’un film en HTML en utilisant le moteur de templating twig
* Sur cette page de détail d'un film, afficher :
  - Titre du film
  - Résumé (accroche du film = abstract)
  - Personnages
  - date du film 
  - avoir la possibilité de consulter d’autres films
  
Demandes avancées :

5. Créer un fichier de configuration avec un paramètre url_feed : http://swapi.co/api/films/ détaillé ci-dessous.

6. Créer un service permettant d'importer les films et les personnages en passant par l’API http://swapi.co en utilisant le paramètre ci dessus. Ne pas sauvegarder un film ou un personnage si il est déjà présent en BDD.

7. Comment exécuter cet import en ligne de commande ?
