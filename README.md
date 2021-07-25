Link for the source code in GitHub-  https://github.com/Anshul66/pw_chat

Link for live implementation - https://pw-chat-ass.000webhostapp.com/

Schema Collections :

use `physics_wallah`

CREATE TABLE IF NOT EXISTS `group` (
`grp_id` int(6) NOT NULL AUTO_INCREMENT,
  	`grp_name` varchar(35) NOT NULL,
`grp_loc` varchar(35) NOT NULL,
`admin_id` int(5) NOT NULL,
 	`admin_name` varchar(35) NOT NULL,
PRIMARY KEY (`grp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;


CREATE TABLE IF NOT EXISTS `user` (
  	`id` int(6) NOT NULL AUTO_INCREMENT,
 	`name` varchar(35) NOT NULL,
  	`email` varchar(35) NOT NULL,
 	 `password` varchar(35) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

Web screenshot :

![image](https://user-images.githubusercontent.com/76143377/126891956-8dfdd69b-6635-4996-8bbb-1909feaf2d9a.png)
![image](https://user-images.githubusercontent.com/76143377/126891972-666c8ef6-b3de-4a83-903e-2d8f87a0b937.png)
![image](https://user-images.githubusercontent.com/76143377/126891979-2831c557-b693-4602-af23-f74838c7d096.png)
![image](https://user-images.githubusercontent.com/76143377/126892005-c2103cd3-d054-44e7-97cc-747aeb2a2742.png)
![image](https://user-images.githubusercontent.com/76143377/126892010-d701b63e-47b0-433d-aba2-948dd7b23cbb.png)
