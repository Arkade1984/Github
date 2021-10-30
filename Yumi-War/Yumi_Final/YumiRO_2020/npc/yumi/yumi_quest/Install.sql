CREATE TABLE `Quest_Data` (
`ID` INT( 11 ) DEFAULT NULL,
`Name` VARCHAR( 255 )  DEFAULT NULL,
`Finished` INT( 11 ) DEFAULT NULL,
PRIMARY KEY( `ID` )
) ;


CREATE TABLE `Quest_Character` (
`CharacterID` INT( 11 ) DEFAULT NULL,
`QuestID` INT( 11 ) DEFAULT NULL,
`QuestState` INT( 11 ) DEFAULT NULL,

PRIMARY KEY( `CharacterID`  , `QuestID` )
) ;


