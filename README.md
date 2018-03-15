# Robot

Usage:
```
composer dump
php index.php
```
Required PHP 7.1+

Example Input and Output: 
```
PLACE 0,0,NORTH
 MOVE 
REPORT 
Output: 0,1,NORTH


PLACE 0,0,NORTH 
LEFT 
REPORT 
Output: 0,0,WEST


PLACE 1,2,EAST 
MOVE 
MOVE 
LEFT 
MOVE 
REPORT 
Output: 3,3,NORTH
```