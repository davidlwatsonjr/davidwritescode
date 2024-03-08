FROM wordpress:6.4

RUN apt-get update && apt-get install -y unzip && apt-get clean

USER www-data

RUN curl https://downloads.wordpress.org/plugin/amazon-s3-and-cloudfront.3.2.7.zip -o /tmp/amazon-s3-and-cloudfront.zip && \
    unzip /tmp/amazon-s3-and-cloudfront.zip -d /usr/src/wordpress/wp-content/plugins/ && \
    rm /tmp/amazon-s3-and-cloudfront.zip

RUN curl https://downloads.wordpress.org/plugin/google-sitemap-generator.4.1.19.zip -o /tmp/google-sitemap-generator.zip && \
    unzip /tmp/google-sitemap-generator.zip -d /usr/src/wordpress/wp-content/plugins/ && \
    rm /tmp/google-sitemap-generator.zip

RUN curl https://downloads.wordpress.org/plugin/syntaxhighlighter.3.7.0.zip -o /tmp/syntaxhighlighter.zip && \
    unzip /tmp/syntaxhighlighter.zip -d /usr/src/wordpress/wp-content/plugins/ && \
    rm /tmp/syntaxhighlighter.zip

RUN curl https://downloads.wordpress.org/plugin/wordfence.7.11.3.zip -o /tmp/wordfence.zip && \
    unzip /tmp/wordfence.zip -d /usr/src/wordpress/wp-content/plugins/ && \
    rm /tmp/wordfence.zip

COPY public/. /var/www/html/
COPY src/. /var/www/html/wp-content/themes/davidwritescode/
