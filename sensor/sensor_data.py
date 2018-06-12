import random
from datetime import datetime
import Adafruit_DHT
from time import sleep
import os
sensor=Adafruit_DHT.DHT11
pin=21

while 1:
    try:
        os.system("rm data*")
        time=str(datetime.now())
        f= open("data"+time,"w+")
        humidity,temperature=(Adafruit_DHT.read_retry(sensor,pin))
        data=time+"***"+str(humidity)+"***"+str(temperature)
        print(data)
        f.write(data)
        f.close()
        print("Data Entered")
        sleep(5)
    except KeyboardInterrupt:
        print("Stopped collecting data")
        exit()
