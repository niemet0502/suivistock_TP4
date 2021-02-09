## je mettrais la demarche a suivre pour avoir le projet en ordre ici
# OLYMPE
## Installation
* Avant tout telecharger et installer composer sur votre PC :

```bash
https://getcomposer.org/download/

```

```bash
git fetch origin 
```

* Recuperer les derniere modifs sur le projet :

```bash
git fetch origin 
```
* Mettre les modifs sur votre branche locale main :

```bash
git pull origin main 
```

* Creer une base de donnee locale dans votre phpmyadmin qui s'appelle doctrine_bdd :

* Une fois que la bdd est creer mettez vous dans le dossier du projet et faites la commandes  :

```bash
composer install 
```

* Ensuite faites la commande suivante pour creer les entites  :

```bash
vendor/bin/doctrine orm:schema-tool:update --force --dump-sql
```
* Vous pouvez aussi checker la doc de dotrine  :

```bash
https://www.doctrine-project.org/projects/doctrine-orm/en/2.8/tutorials/getting-started.html
```

<img src="public/images/dieux.jpg" />