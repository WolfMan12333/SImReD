#!/usr/bin/python3

import time
import requests
import logging
import datetime

SOURCE = [
	'https://mirror.epn.edu.ec/malwaredomains/' + datetime.datetime.now().strftime("%Y%m%d") + '.txt',
	'https://mirror.cedia.org.ec/malwaredomains/' + datetime.datetime.now().strftime("%Y%m%d") + '.txt',
	'http://dns-bh.sagadc.org/' + datetime.datetime.now().strftime("%Y%m%d") + '.txt'
]


def parse(data):
	"""Przykladowa funkcja parsujaca"""

	result = []

	for line in data.split('\n'):
		line = line.strip()
		domain = line.split('\t')[0]
		result.append(domain)
	
	return result


def update():
	"""blacklist update function"""

	domains = []
	logging.info('Update Time')

	for url in SOURCE:
		try:
			r = requests.get(url)
			domains += parse(r.text)
			r.raise_for_status()
		except requests.exceptions.HTTPError as e:
			logging.error('Error, sources doesn\'t exist: ' + str(e))
			pass

	return list(set(domains)) # set() bo chcemy unikalne wartosci


def main():
	new_domains = update()

	# I teraz z new_domains chcielibysmy pewnie wygenerowac nowe pliki stref.

	with open("blacklist", "w") as fh:
		data = '\n'.join(new_domains)
		fh.write(data)


if __name__ == '__main__':
	# Gdzies w tym miejscu mozna by dokonfigurowac logowanie. Poczytaj o module logging
	log = logging.getLogger('Update Time')
	log.setLevel(logging.DEBUG)
	ch = logging.StreamHandler()
	ch.setLevel(logging.DEBUG)
	formatter = logging.Formatter('%(message)s')
	ch.setFormatter(formatter)
	log.addHandler(ch)
	log.info('Update Time')
	main()
