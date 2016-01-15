EuroDNS DevOps
==============

The purpose of the test is to set up an production environment providing a web application using apache as frontend and a redundant mysql database (master-slave).

Role of servers:
 
![alt text](./schema.png =400x))

- interview-01: webserver: apache / phpMyAdmin
- interview-02: mysql master 
- interview-03: mysql slave

Each servers must be accessible via ssh using their public IP but they must communicate with each others using a private network. 
For each of the following points could you give us which configuration files you have updated.  

# System
- The clock must be automatically updating by NTP
- All services must be restarted on boot. 
- The user 'joe' of the group 'developer' must be able to update the webapp directly from his home directory and could access the server using SSH or FTP.  

# Apache/PHP
- The application must be set up on a virtual host and be accessible on 'https://devops.eurodns.dev'. The certificate could be self signed. We want to protect the access using a list of allowed user (joe:qwerty ;  pierre:azerty)
- The URLs must be rewrited to pass element in the path into parameters of index.php (ie: https://devops.eurodns.dev/hello/you => https://devops.eurodns.dev/index.php?hello=you). The http request must be redirect to https.
- We need to have an access to phpMyAdmin on https://devops.eurodns.dev:8080 ;  


# MySQL
- MySQL installation and security
- Create user with limited rights for the webapp. Create another user which be able to create and alter table and from phpMyAdmin 
- Configure a redundant MySQL setup ; interview-02 must be the master and interview-03 the slave. 
- Create the 'interview' database and import mysql setup from setup.sql

# Security

- Block unused port using iptables
- Install fail2ban to prevent abuse on public services 
- Extra... whatever you think is necessary





