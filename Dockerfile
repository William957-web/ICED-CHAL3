FROM dockerfiles/centos-lamp 

COPY . /var/www/html/
RUN rm /var/www/html/Dockerfile
RUN echo 'ICED{Arima_Kana_1s_7he_cutiest}' > /flag-$(xxd -l 6 -p /dev/urandom)
