#UPDATE ALL THE SHOPS TABLE
import MySQLdb as sql
import time
import random
from predictor import predict
con = sql.connect(host="localhost",user="root",passwd="",db="shops",unix_socket="/opt/lampp/var/mysql/mysql.sock")
with con:
    cur = con.cursor()
    while 1:
    	try:
            cur.execute("SELECT * FROM shop1")
            data=(cur.fetchall())
            for each in data:
                item=("'"+each[0]+"'").upper()
                quantity=each[1]
                change=random.randint(0,10)
                quantity+=change
                cur.execute("UPDATE shop1 SET Quantity=%d WHERE Item=%s" % (quantity,item))
                con.commit()
            print("\n Updated shop1....") 
            cur.execute("SELECT * FROM shop2")
            data=(cur.fetchall())
            for each in data:
                item=("'"+each[0]+"'").upper()
                quantity=each[1]
                change=random.randint(0,10)
                quantity+=change
                cur.execute("UPDATE shop2 SET Quantity=%d WHERE Item=%s" % (quantity,item))
                con.commit()
            print("\n Updated shop2....") 
            cur.execute("SELECT * FROM shop3")
            data=(cur.fetchall())
            for each in data:
                item=("'"+each[0]+"'").upper()
                quantity=each[1]
                change=random.randint(0,10)
                quantity+=change
                cur.execute("UPDATE shop3 SET Quantity=%d WHERE Item=%s" % (quantity,item))
                con.commit()
            print("\n Updated shop3....") 
            cur.execute("SELECT * FROM shop4")
            data=(cur.fetchall())
            for each in data:
                item=("'"+each[0]+"'").upper()
                quantity=each[1]
                change=random.randint(0,10)
                quantity+=change
                cur.execute("UPDATE shop4 SET Quantity=%d WHERE Item=%s" % (quantity,item))
                con.commit()
            print("\n Updated shop4....")
            print("-----------------------------------------------")        
            time.sleep(5)
        except KeyboardInterrupt:
         	print("\nShops Updater stopped....")
        	exit()
        
