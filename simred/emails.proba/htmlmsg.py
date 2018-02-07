#!/usr/bin/env python3

import smtplib

from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

#me == my email address
#you == recipient's email address
me = "myemail@sss.com"
trgt = "your@email.com"

#create messgae container -= the correct mime type is multipart/alternative
msg = MIMEMultipart('alternative')
msg['Subject'] = "Intrusion Alert!!!"
msg['From'] = me
msg['To'] = trgt

#Create the body of the message (a plain-text and an HTML version).
text = "Intrusion Alert!!!\nCheck security of your os at computers!"
html = """\
<html>
	<head></head>
	<body>
		<p>Intrusion Alert!!!<br>
		   Check security of your os at computers!<br>
		</p>
	</body>
</html>
"""

#Record the MIME types of both parts - text/plain and text/html
part1 = MIMEText(text, 'plain')
part2 = MIMEText(html, 'html')

#Attach parts into message container.
#According to RFC 2046, the last part of a multipart message, in this case
#the HTML message, is best and preferred.
msg.attach(part1)
msg.attach(part2)

#Send the message via local SMTP server
s = smtplib.SMTP('localhost')
#sendemail function takes 3 arguments: sender's address, recipient's address
#and message to send - here it is sent as one string
s.sendmail(me, you, msg.as_string())
s.quit()
