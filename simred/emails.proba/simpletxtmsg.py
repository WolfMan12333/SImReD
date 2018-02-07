#!/usr/bin/python3

#import smtplib for the actual sending function
import smtplib

#messge in string var
message = """
Subject:Intrusion Alert!!!
From:SImReD System
To:Admin
Message:Check your computers!!!
"""

#Send the message via our own SMTP server
s = smtplib.SMTP('localhost')
s.send_message(message)
s.quit()
