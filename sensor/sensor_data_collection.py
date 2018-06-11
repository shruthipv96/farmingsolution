#GETS DATA FROM THE RASPBERRY PI AND WRITES IT TO DATABASE
import os
import time
import MySQLdb as sql
import random 
con = sql.connect(host="localhost",user="root",passwd="",db="farmingsolution",unix_socket="/opt/lampp/var/mysql/mysql.sock")
print("\nSensor Data Collection and Updating the table....")
start_time=time.time()
with con:
    cur = con.cursor()
    count=cur.execute("SELECT * FROM sensordata")
    while 1:
        try:
            os.system("scp pi@192.168.43.228:~/Hackathon/data* data.txt")
            f=open("data.txt","r")
            raw_data=(f.read())
            f.close()
            print(raw_data)
            tracker,humidity,temperature=raw_data.split("***")
            tracker="'"+tracker+"'"	
            print(tracker)
            humidity=float(humidity)
            temperature=float(temperature)
            print(humidity)
            print(temperature)

            try:
            	if(count > 10):
                    cur.execute("DELETE FROM sensordata")
                    con.commit()
                    count=0
                cur.execute("INSERT INTO sensordata(tracker,humidity,temperature,random) VALUES(%s,%f,%f,%d)" %(tracker,humidity,temperature,random.randint(0,50)))
                con.commit()
                count+=1
            except:
                con.rollback()
            time.sleep(5)
            prev_file=file
        except KeyboardInterrupt:
            print("\nStopped Collecting data...")
            exit()
