# CVE WEB SITE

--------------------------------------

## DESCRIPTION

Ce projet a été réalisé pour l'association du Cercle de voile d'Epinal dans le but de fournir a cette association un site web comprenant de nombreuses fonctionnalités détaillées ci-dessous.
Le site réalisé permet notamment de diffuser sur le net l'activité de cette association, et de permettre aux membres de s'inscrire directement en ligne afin de s'informer des difféntes mises à jour des plannings.

--------------------------------------

## FONCTIONNALITÉS

Les fonctionnalités présentes sur le site sont les suivantes :
1. Pour un utilisateur non-connecté
	* Présentation de l'activité du Cercle de voile d'Epinal (incluant l'école et le club de voile)
	* Création d'un compte utilisateur pour se connecter au site et accéder aux fonctionnalités disponibles pour les membres
	* Changement du mot de passe oublié via email

![](https://image.noelshack.com/fichiers/2017/48/1/1511818145-24135266-1915731948743598-1367678684-n.jpg)

2. Pour un utilisateur connecté
	* Accès aux informations de l'école de voile (abonnement **occasionnel**)
	* Accès aux informations du club de voile (abonnement **annuel**)
	* Accès à la boutique en ligne

![](https://image.noelshack.com/fichiers/2017/48/1/1511817688-24133851-1915731942076932-960771035-n.jpg)

--------------------------------------

## DÉPENDANCES

Pour faire fonctionner correctement le projet, il vous faudra :
* _**PHP**_
* _**Un serveur web (apache2)**_
* _**Un système de gestion de bases de données (MySQL)**_
* _**Internet**_

Pour aller plus vite, vous pouvez installer directement :
1. Sur Windows

	| W | A | M | P |
	|:---:|:---:|:---:|:---:|
	| **Windows** | **Apache** | **MySQL** | **PHP** |

2. Sur Linux

	| L | A | M | P |
	|:---:|:---:|:---:|:---:|
	| **Linux** | **Apache** | **MySQL** | **PHP** |

--------------------------------------

## INSTALLATION

Une fois que **LAMP** (pour Linux) ou **WAMP** (pour Windows) est installé sur votre machine, et que le projet ci-dessous est téléchargé :

### Sur Linux

1. Copier le répertoire **Projet/** dans le répertoire www :
	* `sudo cp chemin_vers_Projet/ /var/www/html`
2. Importer la base de données _**cve.sql**_ (situé dans le dossier Projet/ téléchargé depuis Github) dans votre système de gestion de bases de données
3. Changer la configuration d'accès à votre système de gestion de bases de données dans le fichier **app/config/dbconnect.php**

### Sur Windows

1. Copier le répertoire **Projet/** dans le répertoire C:\wamp\www
2. Importer la base de données _**cve.sql**_ (situé dans le dossier Projet/ téléchargé depuis Github) dans votre système de gestion de bases de données
3. Changer la configuration d'accès à votre système de gestion de bases de données dans le fichier **app/config/dbconnect.php**

--------------------------------------

## LANCEMENT

Ouvrez votre navigateur et tapez l'URL localhost/Projet. Vous arrivez ainsi sur la page d'accueil.


------------------------------------

**Le projet n'a pas pu être terminé, le système de panier n'est pas fonctionnel ainsi que le paiement par PayPal.
La gestion du planning par un administrateur n'est pas du tout optimisée (des améliorations sont possibles avec la création d'une interface spécifique).
Je poursuivrais le projet plus tard.**