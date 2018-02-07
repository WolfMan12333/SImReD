#!/usr/bin/python3

import time
import requests
import logging
import datetime

src = 'https://ransomwaretracker.abuse.ch/downloads/RW_DOMBL.txt'

def parse(data):
	result = []

	for line in data.split('\n'):
		if not line.startswith('#'):
			line = line.strip()
			domain = line.split('\t')[0]
			result.append(domain)

	return result

def update():
	domain = []

	for url in src:
		try:
			r = requests.get(src)
			domain += parse(r.text)
			r.raise_for_status()
		except requests.exceptions.HTTPError as err:
			logging.error('Blad, zrodlo nie istnieje: ' + str(err))

	return list(set(domain))

def main():
	new_domains = update()

	with open("blacklist", "w") as fh:
		data = '\n'.join(new_domains)
		fh.write(data)

if __name__ == '__main__':
	log = logging.getLogger('Update Time')
	log.setLevel(logging.DEBUG)
	ch = logging.StreamHandler()
	ch.setLevel(logging.DEBUG)
	formatter = logging.Formatter('%(message)s')
	ch.setFormatter(formatter)
	log.addHandler(ch)
	log.info('Update Time')
	main
