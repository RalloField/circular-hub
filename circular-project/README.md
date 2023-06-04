# Welcome to my the Cyclist_API

## Table of Contents
* [Introduction](#introduction)
* [Prerequisites](#prerequisites)
* [Installation](#installation)
* [Usage](#usage)
* [Authentication](#authentication)
* [Error handling](#error-handling)
* [Contact](#contact)


## Introduction
- This is a basic build for a Laravel project, with a focus on Circular Economy. Its purpose to inform about and how to work with circular economy projects. 

- build a forum website on which users can add their projects and company to connect with other circular-enthousiasts.

- authentication and authorization for both admin and users

- build with Laravel framework in PHP

- This project is still a Work In Progress 

[<img src="../../app/public/assets/images/assets/home.png">]

This webapp will allow guests to browse through projects and companies to consult about what they do for circular economy. It is after registering they can add their company and project to connect with other users. Only admins will have the authorisation to delete projects or update projects (unless ofcourse it is the users own project).


[<img src="app/public/assets/images/assets/overview.png">]


## Prerequisites
- An IDE like VS code to open the files and read the code.
- Terminal to run the scripts
- A databasemanagement system (e.g.: TablePlus)
- For testing: POSTMAN
- Browser to render the website

## Installing


### Setup


### Database Manager

In your database manager you will need to set up a database with the corresponding tables (users, projects, companies, comments) that will used in your project.

---

Navigate in your prefered IDE to the root folder of the project and create a new **.env** file. Copy the contents of the **.env.example** in it. Add the following:

```
HOST=**localhost**
PORT= 4000
DB_NAME = webshop
DB_USER = root
DB_HOST = localhost
DB_PASSWORD = (your password)

JWT_ACCESS_TOKEN = (your access token)
```

---

**_Muy Importante!_**

In the project folder, make sure you add a .gitignore file, and add the following files:

- .env
- node_modules

---

## Usage



[<img src="app/public/assets/images/assets/table.png">]
[<img src="app/public/assets/images/assets/create.png">]
[<img src="app/public/assets/images/assets/menu.png">]



## Authentication


## Error handling


## Contact
Created by [Raoul Vandevelde](https://github.com/RalloField) - feel free to contact me!


