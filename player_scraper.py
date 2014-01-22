from BeautifulSoup import BeautifulSoup
import sys, _mysql
import MySQLdb as mdb
from HTMLParser import HTMLParser

class MLStripper(HTMLParser):
    def __init__(self):
        self.reset()
        self.fed = []
    def handle_data(self, d):
        self.fed.append(d)
    def get_data(self):
        return ''.join(self.fed)

def strip_tags(html):
    s = MLStripper()
    s.feed(html)
    return s.get_data() 

filename = sys.argv[1]
gender = 'men'

if filename == 'Lady_Militia.php':
  gender = 'women'


file = open(filename, 'r')

html = file.read()
i = 0

pos_end = pos_start = 0
row_start = row_end = 0
row = position = ''
con = None

try:
  con = mdb.connect('localhost', 'root', 'root', 'east_coast_militia')

  con.query("SELECT VERSION()")
  result = con.use_result()

  print "MySQL version: %s" % result.fetch_row()[0]

except _mysql.Error, e:
  print "Error %d: %s" % (e.args[0], e.args[1])
  sys.exit(1)

finally:
  if con:
    con.close()
 

while i < len(html) - 30:
  if html[i: i+21] == '<tr class="position">':
    pos_start = i + 21
  if pos_start > 0 and html[i: i+5] == '</tr>':
    pos_end = i
  if pos_end > 0 and pos_start > 0:
    position = html[pos_start: pos_end]
    pos_start = pos_end = 0
    position = strip_tags(position).strip('\n').strip('\t').strip()

  if html[i: i+20] == '<tr class="roster1">' or html[i: i+20] == '<tr class="roster2">':
    row_start = i + 20
  if row_start > 0 and html[i: i+5] == '</tr>':
    row_end = i
  if row_start > 0 and row_end > 0:
    #print row_start, row_end
    row = html[row_start: row_end]
    row_end = row_start = 0
    row_list = row.split('</td>')
        
    player = strip_tags(row_list[0].strip('\n').strip('\t')).strip()
    year = strip_tags(row_list[1].strip('\n').strip('\t')).strip()
    team = strip_tags(row_list[2].strip('\n').strip('\t')).strip()
    print (player, year, team, position)

    #print player, year, team, position, gender
    #print db_row
    

  i += 1
