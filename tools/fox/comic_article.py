# -*- coding: utf-8 -*-
from bs4 import BeautifulSoup
import urllib
import urllib2
import sys
reload(sys)
sys.setdefaultencoding('utf-8')
import MySQLdb

try:
   db = MySQLdb.connect(host="cloud123.mysql.rds.aliyuncs.com",user="cloud",passwd="111111",db="tneconni",charset='utf8'  )
except:
   print("Could not connect to MySQL server.");
   exit( 0 )
cur=db.cursor();

res = urllib2.urlopen("http://t.qq.com/dm14325")
print("good!")
content = res.read().decode("utf8")
soup = BeautifulSoup(content);
sql="INSERT `cmc_article`(`title`,`cover_photo`,`public_time`,`date_add`) VALUES";
sqlValues = '';
for item in soup.findAll('div',{'class':"msgBox"}):
    msg=item.find('div',{'class','msgCnt'});
    if(msg != None):
      print(msg.get_text());
    pic = item.find('img')
    if(pic != None):
      print(pic);
for item in soup.findAll(name='div',attrs={'class':"msgBox"}):
    msg=item.find('div',{'class','msgCnt'});
    pic = item.find('img')
    publicTime = item.find('a',{'class','time'})
    if(sqlValues!=''):
      sqlValues += ',';
    sqlValues += '("' +msg.get_text()+'","'+pic['crs'] +'","'+publicTime['rel'][0]+'",now())';

sql += sqlValues;
print(sql)
cur.execute(sql);
db.commit()
cur.close()
db.close()
