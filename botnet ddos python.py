import urllib
url = raw_input ("url :")

with open ("123.txt",'r') as f:
    for i in f :
        x = urllib.urlopen (i.strip()+url)
        print x.getcode()
