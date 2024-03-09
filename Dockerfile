FROM wordpress:6.4

RUN apt-get update && apt-get install -y unzip && apt-get clean

USER www-data

RUN curl https://downloads.wordpress.org/plugin/amazon-s3-and-cloudfront.3.2.7.zip -o /tmp/plugin.zip && \
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

COPY public/. /var/www/html/
COPY src/. /var/www/html/wp-content/themes/davidwritescode/
