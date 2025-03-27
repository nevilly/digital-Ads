"# digital-Ads" 


## Table of Contents
- [Prerequisites](#Prerequisites)
- [Download](#Download)
- [Setup](#Setup)
  - [API](#API)
  - [VirtualHost](#VirtualHost)
  - [Database](#Database)
  
- [Authentification](#Authentification)
- [Usage](#Usage)
- [Technical-Documentation](#Technical-Documentation)
- [API-Intergration](#API-Intergration)
- [Security](#Security)
- [License](#license)


## Prerequisites
- Xampp 
- Windows, macOS, or Linux operating system


## Download

To use the Digital-ads website, follow these steps:

1. Download and install the latest release XAMPP. https://www.apachefriends.org/fr/download.html
 
2. Clone the repo: git clone https://github.com/nevilly/digital-Ads.git
 


## Setup

Setup to use the Digital-ads website, follow these steps:

## API

For this website i use php API the following step to make it work
1. create file in htdocs  and name it "api".
2. put all files downloaded from gitHub in "api" file.

## VirtualHost

1. go to C:\xampp\apache\conf\extra
2. open file with a name  httpd-vhosts.conf
3. add this block of line inside VirtualHost tag 

    ##<VirtualHost :80>
	    ##ServerAdmin webmaster@dummy-host2.example.com
	    ##DocumentRoot "C:/xampp/htdocs/dummy-host2.example.com"
	    ##ServerName dummy-host2.example.com
	    ##ErrorLog "logs/dummy-host2.example.com-error.log"
	    ##CustomLog "logs/dummy-host2.example.com-access.log" common

	    ServerAdmin myApi.code
	    DocumentRoot "C:/xampp/htdocs/api"

	    ##ServerName localhost
	    ##DocumentRoot "C:/xampp/htdocs"
    ##</VirtualHost>

4. restart xampp.
5. Enter link on browser: http://localhost/admin/.



## Database

- Create Database by the name "digitalads" in Mysql.
- Get in documentation file in dir  "xampp\htdocs\api\documentation".
- Grab digitalads.sql file and import to Mysql database digitalads.


## 🔑 Authentification

All credential username and password found in Documentation folder:


## Technical-Documentation
  
Break down of Technology Stack on this project.

1. Frontend: HTML5 + Bootstrap 5 + Vanilla JS.

2. Backend: Node.js + Express.js.

3. Database: Mysql / Localhost.

4. Version Control: Git.

       

 
## API-Intergration
1. Purpose:  API can  manage user accounts, Process payments.
2. Authentication: it use  API keys, OAuth 2.0, JWT tokens.
3. Base URL: Provide the root endpoint http://localhost/admin/.

 


## 🔒 Security

1. HTTPS is mandatory.

2. Passwords are hashed before storage.




T
>>>>>>>>>>>>>> Thank you
