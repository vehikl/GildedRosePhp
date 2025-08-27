# Gilded Rose PHP

This is [Emily Bache's Gilded Rose](https://github.com/emilybache/GildedRose-Refactoring-Kata) with added snapshot
testing that covers 100% of the source code.

Gilded Rose is a great Kata for learning how to set up snapshot testing and code coverage on your machine, but if you
want to skip that and get to refactoring you can use this version.

====================================== Gilded Rose Requirements Specification ======================================

Hi and welcome to team Gilded Rose. As you know, we are a small inn with a prime location in a prominent city ran by a
friendly innkeeper named Allison. We also buy and sell only the finest goods. Unfortunately, our goods are constantly
degrading in quality as they approach their sell by date. We have a system in place that updates our inventory for us.
It was developed by a no-nonsense type named Leeroy, who has moved on to new adventures. Your task is to add the new
feature to our system so that we can begin selling a new category of items. First an introduction to our system:

	- All items have a SellIn value which denotes the number of days we have to sell the item
	- All items have a Quality value which denotes how valuable the item is
	- At the end of each day our system lowers both values for every item

Pretty simple, right? Well this is where it gets interesting:

	- Once the sell by date has passed, Quality degrades twice as fast
	- The Quality of an item is never negative
	- "Aged Brie" actually increases in Quality the older it gets
	- The Quality of an item is never more than 50
	- "Sulfuras", being a legendary item, never has to be sold or decreases in Quality
	- "Backstage passes", like aged brie, increases in Quality as its SellIn value approaches;
	Quality increases by 2 when there are 10 days or less and by 3 when there are 5 days or less but
	Quality drops to 0 after the concert

We have recently signed a supplier of conjured items. This requires an update to our system:

	- "Conjured" items degrade in Quality twice as fast as normal items

Feel free to make any changes to the UpdateQuality method and add any new code as long as everything still works
correctly. However, do not alter the Item class or Items property as those belong to the goblin in the corner who will
insta-rage and one-shot you as he doesn't believe in shared code ownership (you can make the UpdateQuality method and
Items property static if you like, we'll cover for you).

Just for clarification, an item can never have its Quality increase above 50, however "Sulfuras" is a legendary item and
as such its Quality is 80 and it never alters.

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
