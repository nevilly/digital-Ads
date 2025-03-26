"# digital-Ads" 


## Table of Contents
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)


## Prerequisites
- Xampp 
- Windows, macOS, or Linux operating system


## Download and Installation

To use the Digital-ads website, follow these steps:

1. Download the latest release XAMPP. https://www.apachefriends.org/fr/download.html
2. Clone the repo: git clone https://github.com/nevilly/digital-Ads.git



## Usage

To use the Digital-ads website, follow these steps:

1. create file in htdocs  and name it "api".
2. put all files downloaded from gitHub in created file "api" file.
3. go to C:\xampp\apache\conf\extra
4. open file with a name  httpd-vhosts.conf
5. add this block of line  in side VirtualHost tag 
     ServerAdmin myApi.code
     DocumentRoot "C:/xampp/htdocs/api"

    ##<VirtualHost *:80>
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
6. restart xampp
7. type link on browser : http://localhost/admin/



