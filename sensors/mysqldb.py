#!/usr/bin/python

import MySQLdb
import sys

# Open database connection
db = MySQLdb.connect("localhost","rfid","rfid","rfid" )

# Prepare a cursor object using cursor() method
cursor = db.cursor()

# Prepare variables
sensor = sys.argv[1]
value = sys.argv[2]

# Prepare query
cursor.execute('''INSERT into sensors (sensor, value) values (%s, %s)''', (sensor, value))

# Commit changes to database
db.commit()

# Disconnect from server
db.close()