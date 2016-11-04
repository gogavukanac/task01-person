# tasks

Goal: Manage Persons as Contact list

We should be able to:

- List all persons
- Add person
- ...



## Start

Start every file with:

    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


## List all

A)

Create file: list.php

Create hardcoded list of persons
as an array of arrays.

Inner array we will call a Person with attributes: first, last, email.
Outer array is an array - a collection of a persons.


B)

Print The List with function -> print_r


C)

Again print list by using `foreach`,
and printing every user last and first name -  one line per user.
