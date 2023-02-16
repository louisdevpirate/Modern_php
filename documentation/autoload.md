Vous la savez déjà, utiliser une classe (Jardinier par exemple) demande à ce que le fichier dans lequel cette classe est définie (par exemple classes/Jardinier.php) soit connu de PHP.

Il faut donc faire un fameux require 'classes/Jardinier.php' afin que PHP comprenne où est définie la classe.

Quand on travaille avec énormément de classes différentes, cette contrainte devient véritablement handicapante.

L'autochargement est là pour vous aider ! PHP vous fourni une solution simple : l'autoloading. Il vous permet d'expliquer à PHP où se trouvent vos classes afin qu'il fasse les require tout seul comme un grand !

📖 En savoir plus sur l'autochargement des classes en PHP : https://www.php.net/manual/fr/language.oop5.autoload.php