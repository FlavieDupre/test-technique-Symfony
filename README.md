Objectif : R�aliser un CRUD avec Symfony et Doctrine de films et de personnages


1. Cr�er les entit�s Doctrine suivantes :
Entit� Film
- id
- title
- abstract
- date

Entit� Character (Personnage)
- id
- name

Il faut ajouter une relation Film <-> Personnage


2. Cr�er un formulaire pour ajouter un personnage li� � un ou plusieurs films

3. Cr�er une route du type /films/ pour r�cup�rer tous les films en BDD en HTML en utilisant le moteur de templating twig
* Sur cette page de liste, afficher pour chaque article :
  - title 
  - date
  - Au clic, on va sur le d�tail du film (cf point suivant)
  
4. Cr�er une route du type /films/%id_film%/ pour afficher le d�tail d�un film en HTML en utilisant le moteur de templating twig
* Sur cette page de d�tail d'un film, afficher :
  - Titre du film
  - R�sum� (accroche du film = abstract)
  - Personnages
  - date du film 
  - avoir la possibilit� de consulter d�autres films
  
Demandes avanc�es :

5. Cr�er un fichier de configuration avec un param�tre url_feed : http://swapi.co/api/films/ d�taill� ci-dessous.

6. Cr�er un service permettant d'importer les films et les personnages en passant par l�API http://swapi.co en utilisant le param�tre ci dessus. Ne pas sauvegarder un film ou un personnage si il est d�j� pr�sent en BDD.

7. Comment ex�cuter cet import en ligne de commande ?
