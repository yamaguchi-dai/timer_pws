# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  config.vm.box = "bento/centos-7.2"
  config.vm.network "private_network", ip: "192.168.33.10"
  config.vm.network :forwarded_port, host: 8888, guest: 80

   config.vm.provision "shell", inline: <<-SHELL
     yum -y update
     yum -y install httpd
     yum -y remove php-*
     yum -y install epel-release
     yum -y install http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
     yum -y install --enablerepo=remi,remi-php72 php php-devel php-mbstring php-pdo php-gd php-xml php-mcrypt php-pgsql php-pecl-xdebug
     yum -y install yum-utils
     yum-config-manager --setopt=base.exclude=postgresql* --save
     yum-config-manager --setopt=updates.exclude=postgresql* --save
     yum -y install https://download.postgresql.org/pub/repos/yum/10/redhat/rhel-7-x86_64/pgdg-centos10-10-2.noarch.rpm
     yum -y install postgresql10-server
     PGSETUP_INITDB_OPTIONS="--encoding=UTF-8 --no-locale" /usr/pgsql-10/bin/postgresql-10-setup initdb

     php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
     php composer-setup.php
     php -r "unlink('composer-setup.php');"
     mv composer.phar /usr/local/bin/composer

     yum -y install git
     yum -y install zip unzip
     yum -y install vim




   SHELL

   config.vm.provision "shell", run:"always",inline: <<-SHELL
        systemctl start httpd
        systemctl start postgresql-10
   SHELL

   # systemctl start postgresql-10
   # su - postgres
   # createuser -P kye #password kye
   # psql -c "create database kye owner kye;"

end
