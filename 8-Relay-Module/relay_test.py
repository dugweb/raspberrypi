import RPi.GPIO as GPIO
import time

GPIO.cleanup()
GPIO.setmode(GPIO.BCM)

pinList = [17, 18, 27, 22, 23, 24, 25, 4]
SleepTimeL = .5

for i in pinList:
	GPIO.setup(i, GPIO.OUT)
	GPIO.output(i, GPIO.HIGH)


try:
	for i in pinList:
		GPIO.output(i, GPIO.LOW)
		print "Pin " + str(i)
		time.sleep(SleepTimeL)

	GPIO.cleanup()
	print "Good bye!"

# End program cleanly with keyboard
except KeyboardInterrupt:
	print "  Quit"
	GPIO.cleanup()
