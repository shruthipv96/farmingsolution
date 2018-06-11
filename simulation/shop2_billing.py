#BILLING SYSTEM FOR SHOP2
import MySQLdb as sql
 
con = sql.connect(host="localhost",user="root",passwd="",db="shops",unix_socket="/opt/lampp/var/mysql/mysql.sock")

with con:
    cur = con.cursor()
    add=1
    while(add):
        try:
            item=raw_input("Item: ")
            item=("'"+item+"'").upper()
            quantity=int(input("Quantity: "))
            price=int(input("Price: "))
            try:
                cur.execute("INSERT INTO shop2(Item,Quantity,Price) VALUES(%s,%d,%d)" %(item,quantity,price))
                con.commit()
                print("\nAdding new item %s"% item)
            except sql.IntegrityError:
                cur.execute("SELECT Item,Quantity FROM shop2 WHERE Item=%s" % item)
                prev_quantity=(cur.fetchall()[0])[1]
                quantity+=prev_quantity
                cur.execute("UPDATE shop2 SET Quantity=%d,Price=%d WHERE Item=%s" % (quantity,price,item))
                con.commit()
                print("\nUpdating existing item %s"% item)
            add=int(input("Add Items? "))
            print("")
            cur.execute("SELECT * FROM shop2 ORDER BY Quantity DESC")
            con.commit() 
        except KeyboardInterrupt:
            print("\nShop2 Billing exiting....")
            exit()
    print("Billing done")