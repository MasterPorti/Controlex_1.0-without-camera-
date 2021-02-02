
import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BOARD)
GPIO.setup(11, GPIO.OUT)
GPIO.setup(13, GPIO.OUT)
GPIO.setup(15, GPIO.OUT)
GPIO.setup(16, GPIO.OUT)
GPIO.setup(18, GPIO.OUT)
GPIO.setup(33, GPIO.OUT)
GPIO.setup(37, GPIO.OUT)

GPIO.output(16, GPIO.HIGH)



GPIO.output(37, GPIO.HIGH)


GPIO.output(13, GPIO.LOW)
GPIO.output(15, GPIO.LOW)
GPIO.output(11, GPIO.LOW)
GPIO.output(18, GPIO.LOW)
GPIO.output(33, GPIO.LOW)


time.sleep(1)
GPIO.cleanup()
