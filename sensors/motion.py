import RPi.GPIO as GPIO
import time
import os
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
GPIO.setup(5, GPIO.IN)         #Read output from PIR motion sensor
GPIO.setup(6, GPIO.OUT)        #Sets the beeper port
while True:
       i=GPIO.input(5)
       if i==0:                 #When output from motion sensor is LOW
             #print "No intruders",i
             GPIO.output(6, 0)
             time.sleep(1)
       elif i==1:               #When output from motion sensor is HIGH
             #print "Intruder detected",i
             os.system('python mysqldb.py motion 1')
             GPIO.output(6, 1)
             time.sleep(1)
