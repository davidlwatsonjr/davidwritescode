FROM wordpress:6

RUN apt-get update && apt-get install -y unzip && apt-get clean

RUN ln -s ../mods-available/ext_filter.load /etc/apache2/mods-enabled/ext_filter.load && \
    ln -s ../mods-available/headers.load /etc/apache2/mods-enabled/headers.load

USER www-data

RUN rm -rf /usr/src/wordpress/wp-content/plugins/akismet \
           /usr/src/wordpress/wp-content/plugins/hello.php \
           /usr/src/wordpress/wp-content/themes/twenty*

RUN sed -i "1 s/<?php/<?php\r\n\/** Enable W3 Total Cache *\/\r\ndefine\('WP_CACHE', true); \/\/ Added by W3 Total Cache\r\n/" /usr/src/wordpress/wp-config-docker.php

COPY wp-content/. /usr/src/wordpress/wp-content/

COPY public/. /usr/src/wordpress/

# https://wordpress.org/plugins/amazon-s3-and-cloudfront/
RUN curl https://downloads.wordpress.org/plugin/amazon-s3-and-cloudfront.3.2.7.zip -o /tmp/plugin.zip && \
    unzip /tmp/plugin.zip -d /usr/src/wordpress/wp-content/plugins/ && \
    rm /tmp/plugin.zip

# https://wordpress.org/plugins/cloudflare/
RUN curl https://downloads.wordpress.org/plugin/cloudflare.4.12.7.zip -o /tmp/plugin.zip && \
    unzip /tmp/plugin.zip -d /usr/src/wordpress/wp-content/plugins/ && \
    rm /tmp/plugin.zip

# https://wordpress.org/plugins/google-sitemap-generator/
RUN curl https://downloads.wordpress.org/plugin/google-sitemap-generator.4.1.19.zip -o /tmp/plugin.zip && \
    unzip /tmp/plugin.zip -d /usr/src/wordpress/wp-content/plugins/ && \
    rm /tmp/plugin.zip

# https://wordpress.org/plugins/syntaxhighlighter/
RUN curl https://downloads.wordpress.org/plugin/syntaxhighlighter.3.7.0.zip -o /tmp/plugin.zip && \
    unzip /tmp/plugin.zip -d /usr/src/wordpress/wp-content/plugins/ && \
    rm /tmp/plugin.zip

# https://wordpress.org/plugins/wordfence/
RUN curl https://downloads.wordpress.org/plugin/wordfence.7.11.5.zip -o /tmp/plugin.zip && \
    unzip /tmp/plugin.zip -d /usr/src/wordpress/wp-content/plugins/ && \
    rm /tmp/plugin.zip

# https://wordpress.org/plugins/w3-total-cache/
RUN curl https://downloads.wordpress.org/plugin/w3-total-cache.2.7.1.zip -o /tmp/plugin.zip && \
    unzip /tmp/plugin.zip -d /usr/src/wordpress/wp-content/plugins/ && \
    rm /tmp/plugin.zip

COPY src/. /usr/src/wordpress/wp-content/themes/davidwritescode/
