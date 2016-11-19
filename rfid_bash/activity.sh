#!/bin/bash
#MP, 2016-11-19
#The script calls the RFID, reads the value and writes to MySQL server if finds RFID tag

while :
do
read tag <<< `./idrw_linux -r`
if [ "$tag" != "NOTAG" ];
then
echo Tag found "$tag"
mysql -u rfid -prfid -e "INSERT INTO activity (rfid_id) VALUES ('$1');" rfid
fi
done
