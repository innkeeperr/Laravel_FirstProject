SELECT * FROM `users` u
	LEFT JOIN city c ON c.id = u.city_id
    LEFT JOIN state s ON s.id = c.state_id


INSERT INTO `game` VALUES 
( 
    1, 
    'Pac-Man', 
    'Really oldschool game. All of you should know this production.', 
    '1980', 
    1, 
    'Pacman.jeg', 
    '2020-01-01' 
)

INSERT INTO `game` VALUES 
( 
    6, 
    'Assassin\'s Creed', 
    'Assassins Creed is an action-adventure video game developed by Ubisoft Montreal and published by Ubisoft. It is the first installment in the Assassins Creed series. The game was released for PlayStation 3 and Xbox 360 in November 2007 and was made available on Microsoft Windows in April 2008. Also, the game can be played on Xbox One consoles via backward compatibility.', 
    '2007', 
    2, 
    'AC1.jeg', 
    '2020-01-01' 
)


INSERT INTO `developer` 
VALUES 
(
    1,
    'Namco',
    'was a Japanese developer and publisher of arcade and home console video games, originally headquartered in Ōta, Tokyo. Several international divisions were 		established, including Namco America in Santa Clara, California, Shanghai Namco in mainland China, and Namco Enterprises Asia in Hong Kong',
    '1955'
)
