from docx import Document
import PyPDF2

def pdftotxt(inp):
	data = ""
	pdfFileObj = open(inp,'rb')
	pdfReader = PyPDF2.PdfFileReader(pdfFileObj)
	no = pdfReader.numPages
	for i in range(0,no):
		pageObj = pdfReader.getPage(i)
		data += pageObj.extractText()
	return data
		
def docxtotxt(inp):
	data = ''
	document = Document(inp)
	for p in document.paragraphs:
		data+=p.text
	return data

def txttotxt(inp):
	f = open(inp,'r',encoding="utf8")
	data = f.read()
	f.close()
	return data
	
f = open('input_loc.txt','r')
inp = f.read()
f.close()
formatt = inp.split(".")[1]
if formatt == 'txt':
	txt = txttotxt(inp)
elif formatt == 'pdf':
	txt = pdftotxt(inp)
elif formatt == 'docx':
	txt = docxtotxt(inp)
else:
	print('unknown format')
	
f = open('text.txt','w',encoding="utf8")
f.write(txt)
f.close()
