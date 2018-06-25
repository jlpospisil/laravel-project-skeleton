#################################################################
## Useful Notes
#################################################################
data directory location = /var/lib/pgsql/data

#################################################################
## Installation
#################################################################
yum -y install postgresql-server
postgresql-setup initdb

vi /var/lib/pgsql/data/pg_hba.conf
    change:
        host    all             all             127.0.0.1/32            ident
        host    all             all             ::1/128                 ident
    to:
        host    all             all             127.0.0.1/32            md5
        host    all             all             ::1/128                 md5
        host    all             all             192.168.0.15/32         md5
        
vi /var/lib/pgsql/data/postgresql.conf
    change:
        listen_addresses = 'localhost'
    to:
        listen_addresses = '*'

systemctl start postgresql
systemctl enable postgresql

#################################################################
## Update postgres password
#################################################################
sudo passwd postgres
su - postgres
psql
\password postgres

#################################################################
## Create database and user
#################################################################
create database <db name>;
create user <db user> with password 'secretpassword';
grant all privileges on database <db name> to <db user>;

