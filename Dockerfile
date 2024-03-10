FROM wordpress:6

RUN apt-get update && apt-get install -y unzip && apt-get clean

RUN ln -s ../mods-available/ext_filter.load /etc/apache2/mods-enabled/ext_filter.load && \
    ln -s ../mods-available/headers.load /etc/apache2/mods-enabled/headers.load

USER www-data

RUN sed -i "1 s/<?php/<?php\r\n\/** Enable W3 Total Cache *\/\r\ndefine\('WP_CACHE', true); \/\/ Added by W3 Total Cache\r\n/" /usr/src/wordpress/wp-config-docker.php

COPY wp-content/. /usr/src/wordpress/wp-content/

COPY public/. /usr/src/wordpress/

RUN curl https://downloads.wordpress.org/plugin/amazon-s3-and-cloudfront.3.2.7.zip -o /tmp/plugin.zip && \
    unzip /tmp/plugin.zip -d /usr/src/wordpress/wp-content/plugins/ && \
    rm /tmp/plugin.zip

RUN curl https://downloads.wordpress.org/plugin/cloudflare.4.12.6.zip -o /tmp/plugin.zip && \
    unzip /tmp/plugin.zip -d /usr/src/wordpress/wp-content/plugins/ && \
    rm /tmp/plugin.zip

RUN curl https://downloads.wordpress.org/plugin/google-sitemap-generator.4.1.19.zip -o /tmp/plugin.zip && \
    unzip /tmp/plugin.zip -d /usr/src/wordpress/wp-content/plugins/ && \
    rm /tmp/plugin.zip

RUN curl https://downloads.wordpress.org/plugin/syntaxhighlighter.3.7.0.zip -o /tmp/plugin.zip && \
    unzip /tmp/plugin.zip -d /usr/src/wordpress/wp-content/plugins/ && \
    rm /tmp/plugin.zip

RUN curl https://downloads.wordpress.org/plugin/wordfence.7.11.3.zip -o /tmp/plugin.zip && \
    unzip /tmp/plugin.zip -d /usr/src/wordpress/wp-content/plugins/ && \
    rm /tmp/plugin.zip

RUN curl https://downloads.wordpress.org/plugin/w3-total-cache.2.7.0.zip -o /tmp/plugin.zip && \
    unzip /tmp/plugin.zip -d /usr/src/wordpress/wp-content/plugins/ && \
    rm /tmp/plugin.zip

COPY src/. /usr/src/wordpress/wp-content/themes/davidwritescode/
