# Gilded Rose PHP

This is [Emily Bache's Gilded Rose](https://github.com/emilybache/GildedRose-Refactoring-Kata) with added snapshot testing that covers 100% of the source code. 

Gilded Rose is a great Kata for learning how to set up snapshot testing and code coverage on your machine, but if you want to skip that and get to refactoring you can use this version.

## Getting Started

### Running Locally

1. Install the composer packages.
2. Run phpunit to generate the snapshot.
3. Run phpunit again to assert the snapshot stayed the same

### Running Docker

1. Run the Docker container

   $ `docker-compose up -d --build app`
2. Install the composer packages.

   $ `docker-compose exec app composer install`
3. Run phpunit to generate the snapshot.

   $ `docker-compose exec app phpunit`
4. Run phpunit again to assert the snapshot stayed the same

   $ `docker-compose exec app phpunit`


## Git Flow

1. Branch off master
2. Name your branch `YYYY-MM-DD-names-here`
3. Do your refactorings
4. Submit a PR to compare answers
5. Don't merge refactorings into master

## Todo

It would be nice to run the tests for each branch in GitHub actions. In order to do that we'd need to add a verified snapshot to the repo and run the tests against that.
