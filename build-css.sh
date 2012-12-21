#!/bin/bash

cd /var/www/bridgesinbelize.org/wp-content/themes/bridgesinbelize/

lessc style.less > style.css && \
sed "s/images/..\/..\/plugins\/jetpack\/modules\/sharedaddy\/images/g" ../../plugins/jetpack/modules/sharedaddy/sharing.css >> style.css && \
echo "div.sharedaddy .sd-content {width: 88%;}#content div.sharedaddy h3.sd-title {width:auto;}" >> style.css && \
cat ../../plugins/jetpack/modules/widgets/widgets.css >> style.css && \
rm -f style.css.gz && \
java -jar /home/matt/bin/web/yuicompressor-2.4.8pre.jar style.css > style.min.css && \
gzip style.min.css && \
mv style.min.css.gz style.css.gz
