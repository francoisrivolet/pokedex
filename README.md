pokedex
=======
COMMANDES BDD:
php bin/console doctrine:database:drop --force -q

php bin/console doctrine:database:create

php bin/console doctrine:schema:update --force

=========

POPULATION BDD:

#Type
insert into type values
(1,"Acier",null,null),
(2,"Combat",null,null),
(3,"Dragon",null,null),
(4,"Eau",null,null),
(5,"Electrik",null,null),
(6,"Fée",null,null),
(7,"Feu",null,null),
(8,"Glace",null,null),
(9,"Insecte",null,null),
(10,"Normal",null,null),
(11,"Plante",null,null),
(12,"Poison",null,null),
(13,"Psy",null,null),
(14,"Roche",null,null),
(15,"Sol",null,null),
(16,"Spectre",null,null),
(17,"Ténèbres",null,null),
(18,"Vol",null,null);

#pokemon
insert into pokemon values
(null,11,12,"001","Bulbizarre",null,null,null,null,null,null,null,null,null,null,null,"http://www.pokepedia.fr/images/7/72/Miniat_6_x_001.png"),
(null,11,12,"002","Herbizarre",null,null,null,null,null,null,null,null,null,null,null,"http://www.pokepedia.fr/images/8/8e/Miniat_6_x_002.png"),
(null,11,12,"003","Florizarre",null,null,null,null,null,null,null,null,null,null,null,"http://www.pokepedia.fr/images/b/b0/Miniat_6_x_003.png"),
(null,7,null,"004","Salamèche",null,null,null,null,null,null,null,null,null,null,null,"http://www.pokepedia.fr/images/0/00/Miniat_6_x_004.png"),
(null,7,null,"005","Reptincel",null,null,null,null,null,null,null,null,null,null,null,"http://www.pokepedia.fr/images/6/6a/Miniat_6_x_005.png"),
(null,7,null,"006","Dracaufeu",null,null,null,null,null,null,null,null,null,null,null,"http://www.pokepedia.fr/images/a/a5/Miniat_6_x_006.png"),
(null,4,null,"007","Carapuce",null,null,null,null,null,null,null,null,null,null,null,"http://www.pokepedia.fr/images/3/3d/Miniat_6_x_007.png"),
(null,4,null,"008","Carabaffe",null,null,null,null,null,null,null,null,null,null,null,"http://www.pokepedia.fr/images/9/97/Miniat_6_x_008.png"),
(null,4,null,"009","Tortank",null,null,null,null,null,null,null,null,null,null,null,"http://www.pokepedia.fr/images/8/86/Miniat_6_x_009.png");



========
A Symfony project created on June 19, 2017, 6:28 pm.
