<?php
	$namearr = array('袁红辉','孙小博','薛昊','黄金庆','李世豪','李俊涛','张世躔',
									 '朱文赟','马炜康','陈冰','张玉仙','梁晓帅','刘望鹏','吴霞',
									 '张宏','王月明','杨军军','赵敏齐','王硕','王琴琴',
									 '汤婷婷','袁绣','付晓峰','王天禹','高孟军','刘涛',
									 '刘家祥','霍颖倩','郑嘉全','尹君豪','桂晨','朱迎昌','苑心齐',
									 '徐鹏','李斯文','黄思佳','李刚','孟祥蕊','贾孟歌','徐海锟',
									 '付志凯','杨发雪','张慧文','龙志伟','裴奇','谭成林','代轩',
									 '王学莹','刘文有','王雷');
	
$information_all = array(
											 array('王志浩','软日1204','201293034','M'),
											 array('王俊','软1312','201392028','M'),
											 array('袁红辉','软日1301','201393235','M'),
											 array('孙小博','软日1304','201393205','M'),
											 array('薛昊','软日1304','201393228','M'),
											 array('黄金庆','软日1305','201393080','M'),
											 array('李世豪','软日1307','201393083','M'),
											 array('李俊涛','软1301','201392134','M'),
											 array('张世躔','软1303','201392350','M'),
											 array('朱文赟','软1304','201392037','M'),
											 array('马炜康','软1306','201392076','M'),
											 array('陈冰','软1311','201392264','M'),
											 array('张玉仙','软1311','201392433','M'),
											 array('梁晓帅','软1311','201392414','M'),
											 array('刘望鹏','软1315','201392015','M'),
											 array('吴霞','软日1303','201393122','F'),
											 array('张宏','软日1303','201393040','F'),
											 array('王月明','软日1304','201393047','F'),
											 array('杨军军','软1304','201392425','M'),
											 array('赵敏齐','软日1302','201393059','M'),
											 array('王硕','软日1303','201393056','M'),
											 array('王琴琴','软1309','201392086','F'),
											 array('汤婷婷','软日1306','201393094','F'),
											 array('袁绣','软日1302','201393099','F'),
											 array('付晓峰','软1313','201392089','M'),
											 array('王天禹','软日1303','201393104','M'),
											 array('刘定顺','软1303','201392055','M'),
											 array('高孟军','软1402','201492399','M'),
											 array('刘涛','软1402','201492104','M'),
											 array('刘家祥','软1402','201492269','M'),
											 array('霍颖倩','软1403','201492076','F'),
											 array('郑嘉全','软1405','201492306','M'),
											 array('尹君豪','软1407','201492272','M'),
											 array('桂晨','软1408','201492012','M'),
											 array('朱迎昌','软1408','201492259','M'),
											 array('苑心齐','软1408','201492156','M'),
											 array('徐鹏','软1409','201492231','M'),
											 array('李斯文','软1409','201492332','M'),
											 array('黄思佳','软1409','201492067','M'),
											 array('李刚','软1411','201492006','M'),
											 array('孟祥蕊','软1412','201492328','F'),
											 array('贾孟歌','软1412','201492130','M'),	//?
											 array('徐海锟','软1415','201492276','M'),	
											 array('付志凯','软1415','201492074','M'),
											 array('杨发雪','软1416','201492120','F'),
											 array('张慧文','软日1402','201493115','F'),
											 array('龙志伟','软日1402','201493028','M'),
											 array('裴奇','软日1402','201493129','F'),	//?
											 array('谭成林','软日1403','201493071','M'),
											 array('代轩','软日1403','201493030','M'),
											 array('王学莹','软日1403','201494034','F'),
											 array('刘文有','软日1405','201493091','M'),
											 array('王雷','软日1405','201493082','M')
											 ); 

	$information = array(
											 array('袁红辉','软日1301','201393235','M'),
											 array('孙小博','软日1304','201393205','M'),
											 array('薛昊','软日1304','201393228','M'),
											 array('黄金庆','软日1305','201393080','M'),
											 array('李世豪','软日1307','201393083','M'),
											 array('李俊涛','软1301','201392134','M'),
											 array('张世躔','软1303','201392350','M'),
											 array('朱文赟','软1304','201392037','M'),
											 array('马炜康','软1306','201392076','M'),
											 array('陈冰','软1311','201392264','M'),
											 array('张玉仙','软1311','201392433','M'),
											 array('梁晓帅','软1311','201392414','M'),
											 array('刘望鹏','软1315','201392015','M'),
											 array('吴霞','软日1303','201393122','F'),
											 array('张宏','软日1303','201393040','F'),
											 array('王月明','软日1304','201393047','F'),
											 array('杨军军','软1304','201392425','M'),
											 array('赵敏齐','软日1302','201393059','M'),
											 array('王硕','软日1303','201393056','M'),
											 array('王琴琴','软1309','201392086','F'),
											 array('汤婷婷','软日1306','201393094','F'),
											 array('袁绣','软日1302','201393099','F'),
											 array('付晓峰','软1313','201392089','M'),
											 array('王天禹','软日1303','201393104','M'),
											 array('高孟军','软1402','201492399','M'),
											 array('刘涛','软1402','201492104','M'),
											 array('刘家祥','软1402','201492269','M'),
											 array('霍颖倩','软1403','201492076','F'),
											 array('郑嘉全','软1405','201492306','M'),
											 array('尹君豪','软1407','201492272','M'),
											 array('桂晨','软1408','201492012','M'),
											 array('朱迎昌','软1408','201492259','M'),
											 array('苑心齐','软1408','201492156','M'),
											 array('徐鹏','软1409','201492231','M'),
											 array('李斯文','软1409','201492332','M'),
											 array('黄思佳','软1409','201492067','M'),
											 array('李刚','软1411','201492006','M'),
											 array('孟祥蕊','软1412','201492328','F'),
											 array('贾孟歌','软1412','201492130','M'),	//?
											 array('徐海锟','软1415','201492276','M'),	
											 array('付志凯','软1415','201492074','M'),
											 array('杨发雪','软1416','201492120','F'),
											 array('张慧文','软日1402','201493115','F'),
											 array('龙志伟','软日1402','201493028','M'),
											 array('裴奇','软日1402','201493129','F'),	//?
											 array('谭成林','软日1403','201493071','M'),
											 array('代轩','软日1403','201493030','M'),
											 array('王学莹','软日1403','201494034','F'),
											 array('刘文有','软日1405','201493091','M'),
											 array('王雷','软日1405','201493082','M')
											 ); 
?>