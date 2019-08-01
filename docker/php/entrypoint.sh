#!/bin/bash

# Add local user
# Either use the UID if passed in at runtime or
# fallback

MYUID=${UID:-9999}

echo "Executing: [$@]"
if [ "$1" == './docker/php/init.sh' ]; then
    exec "$@"
else
    echo "Starting with MYUID: $MYUID"
    useradd --shell /bin/bash -u $MYUID -o -c "" -m goteo
    usermod -u $MYUID goteo
    export HOME=/application

    # use umask to allow user remove files if created by a different user
    umask 0
    exec gosu goteo "$@"
fi

