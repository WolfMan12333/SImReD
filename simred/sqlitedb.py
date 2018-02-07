#!/usr/bin/python3 

import sqlite3

def sqlfunction():
	conn = sqlite3.connect('bldb.db')
	c = conn.cursor()
	
	#create table
	c.execute('''CREATE TABLE if not exists blacklist(name)''')

	with open("blacklist", "r+") as f:
		for line in f:
			exist = c.fetchone()
			if exist is None:
				e = (line,)
				c.execute("INSERT INTO blacklist VALUES(?)", e)

	#close file
	f.close()
	#save (commit) the changes
	conn.commit()
	#close the connection
	conn.close()


if __name__ == '__main__':
	sqlfunction()
