#!/usr/bin/python3

import sqlite3

def create_new_database():
	conn = sqlite3.connect('bldb2.db')
	c = conn.cursor()

	#create table
	c.execute('''CREATE TABLE if not exists doneblacklist(name)''')

	return conn

def uses_bl():
	conn = create_new_database()
	#przesyl danych z jednej db do drugiej db
	conn2 = sqlite3.connect('bldb.db')
	#kursor od bldb.db
	cc = conn2.cursor()
	#kursor od bldb2.db
	c = conn.cursor()
	#zmienne sciezka i inne
	path = "/etc/bind/named.conf.default-zones"
	s = """"""
	f = open(path, 'a')

	for row in cc.execute('SELECT * FROM blacklist'):
		for line in  row:
			exist = c.fetchone()
			if exist is None:
				e = (line,)
				c.execute("INSERT INTO doneblacklist VALUES(?)", e)
				s += """zone "%s" { type master; notify no; file "blackhole.hosts"; };\n""" %line

	#write to named.conf.default-zones file
	f.write(s)
	#save (commit) the changes bldb2
	conn.commit()
	#save (commit) the changes bldb
	conn2.commit()
	#close the connection with bldb2
	conn.close()
	#close the connection with bldb
	conn2.close()
	#close named.conf.default-zones file
	f.close()

if __name__ == '__main__':
	uses_bl()
