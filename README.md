# adventofcode
This is the evidence of the exercises implemented for the Purple vacancy

In order to serve this project locally just run the following commands:

composer install

php -S localhost:8000 -t public

Once it's ready, follow these instructions:
Base URL: http://localhost:8000/adventofcode/public/api/

Yoy will find the two following endpoints in order to solve the two exercises of the --- Day 1: Report Repair ---:

report/repairOne: Post endpoint for the exercise 1 that needs an array in the requests body like the following:

    {
        "entries": [1973, 1755, 1601, 1852]
    }

report/repairTwo: Post endpoint for the exercise 2 that needs an array in the requests body like the following:

    {
        "entries": [1973, 1755, 1601, 1852]
    }

PHP version needed: php 7 or above.
Composer version needed: Composer 1.8.5 or above.
