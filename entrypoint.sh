#!/bin/sh
rm -rf /app/vendor
ln -svf /composer/vendor /app/vendor
supervisord -c /etc/supervisor/conf.d/supervisord.conf