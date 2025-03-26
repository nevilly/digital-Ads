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

<<<<<<< HEAD
	    ##ServerName localhost
	    ##DocumentRoot "C:/xampp/htdocs"
    ##</VirtualHost>
6. restart xampp
7. type link on browser : http://localhost/admin/



=======




simply edit the HTML and CSS files included with dist directory. These are the only files you need to worry about, you can ignore everything else! To preview the changes you make to the code, you can open the index.html file in your web browser.


Digital Ads Web Platform
A modern web solution for managing and optimizing digital advertising campaigns

This project is a scalable web application designed to streamline the creation, management, and analysis of digital advertising campaigns. Built for marketers, advertisers, and developers, it integrates core features like booking Ads, check ad sizes, rates,  real-time checkout, and availability..

Key Features
Ad Campaign Management: Create, edit, and schedule ads across platforms (Mwananchi, Citizen, Google, Facebook, etc.).

Real-Time Analytics: Track impressions, clicks, conversions, and ROI with interactive dashboards.

Responsive Ad Templates: Pre-built templates for banners, social media, and video ads.

Audience Targeting: Demographic, geographic, and behavioral targeting options.

API Integrations: Supports popular ad networks (Google Ads API, Facebook Marketing API).

User Authentication: Secure role-based access (admin, advertiser, viewer).

Tech Stack
Frontend: HTML, Javascript ,Boostrap, CSS

Backend: PHP (API), AJAX,

Database: localhost /xampp



Installation

To begin using this template, choose one of the following options to get started:


Clone repo: git clone https://github.com/nevilly/digital-Ads.git

Install dependencies: npm install

Configure .env with API keys (see .env.example).

Run: npm run dev

Contributions Welcome!
Open to PRs, bug reports, and feature ideas. See CONTRIBUTING.md for guidelines.

License: MIT
>>>>>>> 4b11f843f00d13dbd1e5423d5bad37607ecb6afb
