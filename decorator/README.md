# Decorator

## Installation
Il suffit simplement d'installer les dépendances php:
```bash
composer install
```

## Lancer les test
```bash
composer run-script phpunit
```
## Objectif
Vous avez besoin de gérer des Ordinateur avec plusieurs déclinaisons !

Vous trouverez une class Laptop, qui implémente l'interface Computer.

Grâce au `decorator`, créer la possibilité : 
- D'ajouter une carte Graphique (GPU)
- D'ajouter un écran OLED (OLEDScreen)

Une fois ces décorateur créer, completer les tests.

