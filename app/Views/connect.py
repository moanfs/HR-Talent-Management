import mysql.connector


dbase = mysql.connector.connect(
    host='localhost',
    database='db_talent',
    user='root',
    password=''
)
mycursor = dbase.cursor()
