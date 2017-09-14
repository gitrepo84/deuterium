#!/usr/bin/python

#Purpose of this python script is to receive the input args passed from ContactUs and RequestAQuote forms
#Process the inputs and send a notification email to info or sales email ids of deuterium informing them of a new ContactUs 
#or
#RequestAQuote request

#Make sure to set the file permissions to 755 to enable it to run

import smtplib
import sys


sender = 'form2email@deuterium.in'

if (sys.argv[4].startswith("info")):
	receivers = 'info@deuterium.in'
else:	
	receivers = 'sales@deuterium.in'

message = """From: form2email <"""+sender+""">
To: To Person <"""+receivers+""">
Subject: A new request/query has arrived

From: """+sys.argv[1]+""" @ """+sys.argv[2]+""" ContactNo: """+sys.argv[3]+""" Message Body: """+' '.join(sys.argv[5:])+"""
"""

try:
   smtpObj = smtplib.SMTP('mail.deuterium.in',587)
   smtpObj.sendmail(sender, receivers, message)         
   print "Successfully sent email"
except SMTPException:
   print "Error: unable to send email"