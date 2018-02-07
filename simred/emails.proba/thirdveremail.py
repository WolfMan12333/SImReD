#!/usr/bin/env python3

import smtplib

from email.message import EmailMessage
from email.headerregistry import Address
from email.utils import make_msgid

#Create the base text message.
msg = EmailMessage()
msg['Subject'] = "Intrusion Alert!!!"
msg['From'] = Address("SImReD OS", "SImReD_OS", "example.com")
msg['To'] = Address("Administrator", "admin", "example.com")
msg.set_content("""\
Intrusion Alert!!!

Check security of your os at computers at company!

--SImReD_OS
""")

#Add the htmlo version. This converts the message into a multipart/alternative
#container, with the original text message as the first part and the new html
#message as the second part.
asparagus_cid = make_msgid()
msg.add_alternative("""\
<html>
	<head></head>
	<body>
		<p>Intrusion Alert!!!</p>
		<p>Check security of your os at computers at company!</p>
		<img src="cid:{asparagus_cid}" \>
	</body>
</html>
""".format(asparagus_cid=asparagus_cid[1:-1]), subtype='html')
#note that we needed to peel the <> off the msgid for use in the html.

#Make a local copy of what we are going to send.
with open('outgoinig.msg', 'wb') as f:
	f.write(bytes(msg))

#Send the message via local SMTP server.
with smtplib.SMTP('localhost') as s:
	s.send_message(msg)
