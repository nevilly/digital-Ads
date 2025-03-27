"# digital-Ads" 


## Table of Contents
- [Download](#Download)
- [Setup](#Setup)
  - [API](#API)
  - [Database](#Database)
  - [VirtualHost](#VirtualHost)
- [Authentification](#Authentification)
- [Usage](#Usage)
- [Contributing](#contributing)
- [License](#license)


## Prerequisites
- Xampp 
- Windows, macOS, or Linux operating system


## Download

To use the Digital-ads website, follow these steps:

1. Download and install the latest release XAMPP. https://www.apachefriends.org/fr/download.html
2. create database in Mysql and import file named database which will find it in documentation folder in
3. Take file sql database file from documentation folder and import to Mysql 
2. Clone the repo: git clone https://github.com/nevilly/digital-Ads.git
3. 



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

4. restart xampp
5. Enter link on browser: http://localhost/admin/



## Database

- Create Database by the name "digitalads" in Mysql.
- Get in documentation file in dir  "xampp\htdocs\api\documentation".
- Grab digitalads.sql file and import to Mysql database digitalads.


## Authentification

All credential username and password found in Documentation folder:









Contributions Welcome!
Open to PRs, bug reports, and feature ideas. See CONTRIBUTING.md for guidelines.

License: MIT
>>>>>>> 4b11f843f00d13dbd1e5423d5bad37607ecb6afb
