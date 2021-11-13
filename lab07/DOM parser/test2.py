import xml.etree.ElementTree as ET

mytree = ET.parse('C:\\Users\\yadav\\Desktop\\lab07\\DOM parser\\Nurse.xml')
myroot = mytree.getroot()
print(myroot)
print(myroot.tag)
print(myroot.tag[::-1])
print(myroot.attrib)
print(myroot[0].tag)


for y in myroot[0]:
    print(y.tag, y.attrib)

print('_______________________________________________________________________________')
