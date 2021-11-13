from xml.dom.minidom import parse
import xml.dom.minidom

docTree=xml.dom.minidom.parse("C:\\Users\\yadav\\Desktop\\lab07\\DOM parser\\Infrastructure.xml")


print(docTree.nodeName)
print(docTree.firstChild.tagName)

wing=docTree.getElementsByTagName("Wing")
print("%d Wings in the Hospital" % wing.length)
for x in wing:
    print(x.getAttribute("wingID"))


