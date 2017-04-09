import RPi.GPIO as GPIO
import dht11
import os
import time

# initialize GPIO
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
GPIO.cleanup()

# read data using pin 14
instance = dht11.DHT11(pin = 4)

while True:

    result = instance.read()

    if result.is_valid():
        #print("Temperature: %d C" % result.temperature)
        #print("Humidity: %d %%" % result.humidity)
        os.system('python mysqldb.py temperature %s' % result.temperature)
        os.system('python mysqldb.py humidity %s' % result.humidity)
        time.sleep(60)
