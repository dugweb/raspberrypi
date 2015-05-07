import RPi.GPIO as GPIO
import time

GPIO.cleanup()
GPIO.setmode(GPIO.BCM)

pinList = [17, 18, 27, 22, 23, 24, 25, 4]
SleepTimeL = .5
SwitchNum = 17

GPIO.setup(SwitchNum, GPIO.OUT)
GPIO.output(SwitchNum, False)


try:
	for i in range(0,10):
		GPIO.output(SwitchNum, True)
		print "Count: " + str(i)
		time.sleep(SleepTimeL)
		GPIO.output(17, False)
		time.sleep(SleepTimeL)

	GPIO.cleanup()
	print "Good bye!"

# End program cleanly with keyboard
except KeyboardInterrupt:
	print "  Quit"
	GPIO.cleanup()
