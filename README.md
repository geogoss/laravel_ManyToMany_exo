Dans un nouveau projet : laravel_manytomany
Lisez la doc et informez vous sur la relation many to many

    -Créer une table "article" et "tags". Via la relation many to many, connecter les deux tables
    -"Un article peut avoir plusieurs tags, et un tags peut avoir plusieurs articles"
    -Dans la view home(front) :
    afficher une première section avec les articles sous formes de card avec les tags liés
    dans une deuxième section afficher les tags un par un avec un button show qui te ramène vers une page avec les articles liés


Dans un nouveau projet : laravel_search
    -dans la view home(front), afficher une liste d'utilisateurs que vous avez enregistré par défaut dans le seeder. (au moins 6)
    -rajouter une barre de recherche fonctionnelle qui filtrera les users par rapport à la demande
    dans un nouveau projet : laravel_img

        1) mini exo 1
        -dans la view home, afficher une card et une nav. Dans les deux composants, afficher la même image qui se trouve dans votre DB. (l'image est exactement le même)
        -à la modification de cette image, vous allez resize l'image UNIQUEMENT via laravel !

        2) mini exo 2
        -dans une nouvelle page(front), afficher un caroussel qui tourne 3 images random (au choix)
        -donner la possibilité à l'utilisateur de choisir quelle image sera affiché en 1er dans le carrousel depuis le back
        dans un nouveau projet : laravel_equipe
        -rajouter 3 user par défaut dans le seeder avec chacun un rôle. ( 1 admin, 1webmaster, 1redacteur)
        -dans la view home(front), afficher les users sous formes de cards l'un à coté de l'autre.
        -le user avec le rôle admin doit être toujours affiché au milieu des trois. Si le user avec le rôle admin n'existe plus, vous rajouté une photo "anonyme" avec aucune donnée car la place du milieu sera toujours dédié à l'ADMIN