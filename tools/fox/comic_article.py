# -*- coding: utf-8 -*-
import sys
reload(sys)
sys.setdefaultencoding('utf-8')
import MySQLdb
try:
   db = MySQLdb.connect(host="cloud123.mysql.rds.aliyuncs.com",user="cloud",passwd="111111",db="tneconni",charset='utf8'  )
except:
   print('欢迎小丑')
   print("Could not connect to MySQL server.");
   exit( 0 )
cur=db.cursor();
sql="INSERT `cmc_article` SET title = 'test',cover_photo = 'test.png',contents = '测试内容'";
#sql.encode('gbk')
cur.execute(sql);
db.commit()
cur.close()
db.close()
