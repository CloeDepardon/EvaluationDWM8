<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


# Projet

Les consignes de ce travail final étaient les suivantes : créer un CRUD fonctionnel avec Laravel afin de gérer les stocks d'un magasin, utiliser des tables intermédiaires, fournir un site responsive. J'ai fait le choix d'un magasin de thés et de théières portant le nom de Teashop (je sais, on a vu plus original....).


# Fonctionnalités et partis-pris

- ### BASE DE DONNÉES :
  * J'ai fait le choix de créer deux tables principales : "thés" et "théières" qui sont les produits vendus par le magasin. 
    J'ai également créé deux tables intermédiaires, "magasin_theiere" et "magasin_the" qui permettent de lier les produits aux  magasins dans lesquels elles sont disponibles. Il existe donc également une table "magasins" dans laquelle est réportoriée la liste des magasins. Pour compléter la table "thé", j'ai également créé une autre table "type" qui permet, par la suite, de choisir le type de thé au moment de l'insertion ou de la modification des données.

- ### CRUD
  * CREATE : ma BDD étant composée de 2 bases principales, j'ai du créer autant de vues, de modèles et de controlleurs. Pour l'insertion de données, j'ai créé une vue pour "thés" et une pour "théières" ainsi qu'un controlleur par table. Cela a été parfois répétitif et, les noms étant assez proches, cela a parfois été sources d'erreurs d'étourderie.
  * READ : j'ai décidé de créer une seule vue pour l'affichage de mes données. Pour faciliter la lecture, j'ai fait le choix de tableaux à dérouler (cf. RESPONSIVE DESIGN). 
  * UPDATE : comme pour le create, j'ai fait une vue par table. 
  * DELETE : j'ai réutilisé la fonction delete vue en cours. 
  
- ### RECHERCHE PAR RÉFÉRENCE PRODUIT :
    * Le nombre de produits vendus dans les magasins étant souvent très grand, il m'a semblé évident de mettre en place une     barre de recherche permettant de trouver un produit par sa référence. Pour cela, j'ai utilisé un script Javascript trouvé <a href="https://www.w3schools.com/howto/howto_js_filter_lists.asp">ici</a> que j'ai adapaté en deux scripts (un pour chaque tableau). J'ai logiquement placé une barre de recherche par tableau. Ces dernières permettent uniquement de faire la recherche dans la colonne "référence", ce qui permet de tomber directement et facilement sur le produit recherché.


- ### MESSAGE "REQUIRE" DANS LES CHAMPS DE FORMULAIRES :
     * Afin de rendre l'interface davantage user-friendly, j'ai ajouté l'attribut "require" dans les vues de mes formulaires. C'est <a href="https://stackoverflow.com/questions/24405524/how-to-set-form-input-required-attribute-in-laravel-4"> cette réponse</a> qui m'a aidée à le mettre en place.
  
  
- ### RESPONSIVE DESIGN : 
   * J'ai choisi de faire une plateforme très simple pour un usage plus agréable et plus fluide. Mon menu, par exemple, se résume à deux pages : la page d'accueil et la page de gestion des stocks. J'ai utilisé les classes et grilles Bootstrap pour toute la mise en page du site.
    * La page d'accueil n'a pour le moment pas de fonctionnalité, mais permettrait, si on envisageait de réellement utiliser cette plateforme, d'installer d'autres onglets permettant d'autres fonctionnalités (la commande d'un produit auprès d'un fournisseur par exemple).
     * La page de gestion est la plus importante, puisque c'est sur elle que se basent toutes les fonctionnalités du CRUD. J'ai choisi d'utiliser le collapse de Bootstrap pour rendre l'affichage des tableaux plus sobre et surtout plus lisible. L'utilisateur sait où il en est et peut gérer sa lecture en ouvrant un ou deux tableaux à la fois. Les boutons sont également très simples et dans un esprit flat design souvent apprécié.
    J'ai fait le choix de typos simples et très lisibles tout en variant les tailles et casses pour mettre en valeur les titres.
     * L'ensemble du site est responsive, bien que les tableaux soient rarement consultés sur téléphone et bien souvent peu adaptés. J'ai utilisé les tableaux Bootstrap pour garantir la lisibilité sur tout support. 

# Difficultés rencontrées

- ### PAGINATION :

  * J'ai souhaité mettre en place une pagination au sein des collapse afin de mieux gérer l'espace en cas de base de données très remplie. J'ai finalement décidé de la retirer car je n'ai pas réussi à gérer l'affiche du collapse. Lorsque je me rendais sur la page 2, la page de rechargeait et le collapse se fermait. Il fallait le réouvrir pour découvrir la page 2. N'ayant pas trouvé la solution, j'ai décidé de la mettre de côté. 
     
- ### LE TEMPS :
  * Un peu prise par le temps et retardée par une première (mauvaise) installation de Laravel, je n'ai pas développé tout ce que j'aurais voulu. Par exemple, j'aurais aimé classer les thés par type en mettant en place des filtres. J'aurais également voulu mettre en place la pagination que je n'ai pas réussi à faire fonctionner correctement. Cependant, je préfère que la plateforme et la BDD soient fonctionnelles. 
  
  
 # Pour conclure
  
  Pour terminer, je suis assez fière de rendre un site fonctionnel et qui me plaîtt assez. 
  Je pense avoir beaucoup appris ces derniers jours et je suis désormais plus familière avec Laravel.
 
  
  
