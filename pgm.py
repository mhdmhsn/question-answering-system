from deeppavlov import build_model, configs

model_qa = build_model(configs.squad.squad_bert, download=True)
#text = "Mohandas Karamchand Gandhi was an Indian lawyer, anti-colonial nationalist, and political ethicist, who employed nonviolent resistance to lead the successful campaign for India's independence from British Rule, and in turn inspire movements for civil rights and freedom across the world. The honorific Mahātmā, first applied to him in 1914 in South Africa, is now used throughout the world. Born and raised in a Hindu family in coastal Gujarat, western India, Gandhi was trained in law at the Inner Temple, London, and called to the bar at age 22 in June 1891. After two uncertain years in India, where he was unable to start a successful law practice, he moved to South Africa in 1893 to represent an Indian merchant in a lawsuit. He went on to stay for 21 years. It was in South Africa that Gandhi raised a family, and first employed nonviolent resistance in a campaign for civil rights. In 1915, aged 45, he returned to India. He set about organising peasants, farmers, and urban labourers to protest against excessive land-tax and discrimination. Assuming leadership of the Indian National Congress in 1921, Gandhi led nationwide campaigns for easing poverty, expanding women's rights, building religious and ethnic amity, ending untouchability, and above all for achieving Swaraj or self-rule."
#qstn = "Who is Gandhi?"

f_text = open("text.txt",'r',encoding="utf8")
text = f_text.read()
f_text.close()

f_qstn = open("qstn.txt",'r',encoding="utf8")
qstn = f_qstn.read()
f_qstn.close()

ans = model_qa([text],[qstn])
#print(ans[2][0])
#print(ans[0][0])

f_ans = open("ans.txt",'w')
f_ans.write(str(ans[0][0])+'\n'+'answer score: '+str(ans[2][0]))
f_ans.close()